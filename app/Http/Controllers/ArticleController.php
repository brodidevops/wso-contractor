<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Article::where('is_active', true);

        if ($category) {
            $query->where('category', $category);
        }

        $articles = $query->orderBy('published_at', 'desc')->paginate(9);

        $categories = Article::where('is_active', true)
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->filter();

        $featuredArticles = Article::where('is_active', true)
            ->where('is_featured', true)
            ->limit(3)
            ->get();

        return view('pages.articles', compact('articles', 'categories', 'category', 'featuredArticles'));
    }
}