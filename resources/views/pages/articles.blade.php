@extends('layouts.app')

@section('title', 'Articles - WebSIAPOnline Construction Insights')
@section('meta_description', 'Expert insights on construction, renovation, design, and building tips from our professional team.')

@section('content')
<!-- Page Header -->
<section class="gradient-primary py-32 hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Articles & Insights</h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">Expert tips, industry news, and construction insights from our professional team</p>
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Home</a>
            <span class="text-gray-400">/</span>
            <span class="text-amber-400">Articles</span>
        </div>
    </div>
</section>

<!-- Featured Articles -->
@if($featuredArticles->count() > 0)
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">
            <i class="fas fa-fire text-amber-500 mr-3"></i> Featured Articles
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredArticles as $featured)
            <a href="{{ route('article.show', ['slug' => $featured->slug]) }}" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100">
                <div class="aspect-video bg-gradient-to-br from-blue-400 to-blue-600 relative overflow-hidden">
                    @if($featured->image)
                    <img src="{{ $featured->image }}" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @endif
                    <span class="absolute top-4 left-4 bg-amber-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        <i class="fas fa-star mr-1"></i> Featured
                    </span>
                </div>
                <div class="p-6">
                    <span class="text-blue-600 text-sm font-semibold">{{ $featured->category }}</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3 group-hover:text-blue-600 transition">{{ $featured->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $featured->excerpt }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($featured->author) }}&background=1e3a5f&color=ffffff&size=64" alt="{{ $featured->author }}" class="w-8 h-8 rounded-full mr-2">
                            <span>{{ $featured->author }}</span>
                        </div>
                        <span>
                            <i class="far fa-calendar mr-1"></i>
                            {{ $featured->published_at ? \Carbon\Carbon::parse($featured->published_at)->format('M d, Y') : '' }}
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Category Filter -->
<section class="py-8 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('articles') }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ !$category ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-100' }}">
                All Articles
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('articles', ['category' => $cat]) }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ $category == $cat ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-100' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Articles Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        @if($articles->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <a href="{{ route('article.show', ['slug' => $article->slug]) }}" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100 flex flex-col h-full">
                <div class="aspect-video bg-gradient-to-br from-gray-200 to-gray-300 relative overflow-hidden flex-shrink-0">
                    @if($article->image)
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <i class="fas fa-newspaper text-5xl text-gray-400"></i>
                    </div>
                    @endif
                    @if($article->is_featured)
                    <span class="absolute top-3 left-3 bg-amber-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        <i class="fas fa-star"></i>
                    </span>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-blue-600 text-xs font-semibold">{{ $article->category }}</span>
                        <div class="flex items-center text-gray-500 text-xs">
                            <i class="far fa-eye mr-1"></i>
                            {{ $article->view_count }} views
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition flex-grow">{{ $article->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $article->excerpt }}</p>
                    <div class="flex items-center justify-between text-xs text-gray-500 pt-4 border-t border-gray-100">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($article->author) }}&background=1e3a5f&color=ffffff&size=64" alt="{{ $article->author }}" class="w-7 h-7 rounded-full mr-2">
                            <span>{{ $article->author }}</span>
                        </div>
                        <span>
                            <i class="far fa-calendar mr-1"></i>
                            {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('M d, Y') : '' }}
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($articles->hasPages())
        <div class="mt-16 flex justify-center">
            <nav class="flex items-center space-x-2">
                @if($articles->onFirstPage())
                <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-left"></i>
                </span>
                @else
                <a href="{{ $articles->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                    <i class="fas fa-chevron-left"></i>
                </a>
                @endif

                @foreach($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                    @if($page == $articles->currentPage())
                    <span class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold">{{ $page }}</span>
                    @elseif($page >= $articles->currentPage() - 1 && $page <= $articles->currentPage() + 1)
                    <a href="{{ $url }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white transition font-semibold">{{ $page }}</a>
                    @endif
                @endforeach

                @if($articles->hasMorePages())
                <a href="{{ $articles->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                    <i class="fas fa-chevron-right"></i>
                </a>
                @else
                <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-right"></i>
                </span>
                @endif
            </nav>
        </div>

        <div class="text-center mt-4 text-gray-500 text-sm">
            Showing {{ $articles->firstItem() ?? 0 }} to {{ $articles->lastItem() ?? 0 }} of {{ $articles->total() }} articles
        </div>
        @endif

        @else
        <div class="text-center py-20">
            <i class="fas fa-newspaper text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-600 mb-2">No articles found</h3>
            <p class="text-gray-500">Check back later for new articles and insights.</p>
        </div>
        @endif
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 gradient-primary hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Stay Updated</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-xl mx-auto">Subscribe to our newsletter and never miss our latest construction tips and industry insights.</p>
        <form class="flex flex-col sm:flex-row max-w-lg mx-auto gap-4">
            <input type="email" placeholder="Your email address" class="flex-1 px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-amber-400">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-xl font-semibold transition">
                Subscribe <i class="fas fa-paper-plane ml-2"></i>
            </button>
        </form>
    </div>
</section>
@endsection
