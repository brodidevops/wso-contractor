<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Product::where('is_active', true);

        if ($category) {
            $query->where('category', $category);
        }

        $products = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(12);

        $categories = Product::where('is_active', true)
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->filter();

        return view('pages.products', compact('products', 'categories', 'category'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $relatedProducts = Product::where('id', '!=', $product->id)
            ->where('is_active', true)
            ->where('category', $product->category)
            ->limit(4)
            ->get();

        if ($relatedProducts->count() < 4) {
            $additionalProducts = Product::where('id', '!=', $product->id)
                ->where('is_active', true)
                ->whereNotIn('id', $relatedProducts->pluck('id'))
                ->limit(4 - $relatedProducts->count())
                ->get();
            $relatedProducts = $relatedProducts->merge($additionalProducts);
        }

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }
}