<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function portfolioDetail($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $relatedPortfolios = Portfolio::where('id', '!=', $portfolio->id)
            ->where('category', $portfolio->category)
            ->where('is_active', true)
            ->limit(3)
            ->get();

        if ($relatedPortfolios->count() < 3) {
            $additionalPortfolios = Portfolio::where('id', '!=', $portfolio->id)
                ->where('is_active', true)
                ->whereNotIn('id', $relatedPortfolios->pluck('id'))
                ->limit(3 - $relatedPortfolios->count())
                ->get();
            $relatedPortfolios = $relatedPortfolios->merge($additionalPortfolios);
        }

        return view('pages.portfolio-detail', compact('portfolio', 'relatedPortfolios'));
    }

    public function articleDetail($slug)
    {
        $article = Article::where('slug', $slug)->where('is_active', true)->firstOrFail();

        // Increment view count
        $article->increment('view_count');

        $relatedArticles = Article::where('id', '!=', $article->id)
            ->where('is_active', true)
            ->where('category', $article->category)
            ->limit(4)
            ->get();

        if ($relatedArticles->count() < 4) {
            $additionalArticles = Article::where('id', '!=', $article->id)
                ->where('is_active', true)
                ->whereNotIn('id', $relatedArticles->pluck('id'))
                ->limit(4 - $relatedArticles->count())
                ->get();
            $relatedArticles = $relatedArticles->merge($additionalArticles);
        }

        // Sample comments (in production, these would be stored in database)
        $comments = collect([
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'message' => 'Great article! Very informative and well-written. I learned a lot about construction safety standards.',
                'date' => 'May 6, 2026',
            ],
            [
                'name' => 'Siti Rahayu',
                'email' => 'siti@example.com',
                'message' => 'This is exactly what I needed for my renovation project. Thank you for sharing these insights!',
                'date' => 'May 4, 2026',
            ],
        ]);

        return view('pages.article-detail', compact('article', 'relatedArticles', 'comments'));
    }
}
