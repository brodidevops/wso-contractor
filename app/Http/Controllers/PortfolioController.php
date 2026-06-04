<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Portfolio::where('is_active', true);

        if ($category) {
            $query->where('category', $category);
        }

        $portfolios = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(9);

        $categories = Portfolio::where('is_active', true)
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->filter();

        return view('pages.portfolio', compact('portfolios', 'categories', 'category'));
    }
}