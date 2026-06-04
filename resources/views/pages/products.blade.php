@extends('layouts.app')

@section('title', 'Products - WebSIAPOnline Smart Home Solutions')
@section('meta_description', 'Browse our premium smart home products including security cameras, smart locks, sensors, lighting, and more.')

@section('content')
<!-- Page Header -->
<section class="gradient-primary py-32 hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Smart Home Products</h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">Transform your home with our premium smart home automation solutions</p>
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Home</a>
            <span class="text-gray-400">/</span>
            <span class="text-amber-400">Products</span>
        </div>
    </div>
</section>

<!-- Category Filter -->
@if($categories->count() > 0)
<section class="py-8 bg-white border-b border-gray-100">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('products') }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ !$category ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                All Products
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('products', ['category' => $cat]) }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ $category == $cat ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Products Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        @if($products->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($products as $product)
            <a href="{{ route('product.show', ['slug' => $product->slug]) }}" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100 flex flex-col h-full">
                <div class="aspect-square bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center relative overflow-hidden">
                    @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <i class="fas fa-cube text-6xl text-gray-400"></i>
                    @endif
                    @if($product->is_featured)
                    <span class="absolute top-3 left-3 bg-amber-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        <i class="fas fa-star mr-1"></i> Best Seller
                    </span>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-blue-600 text-xs font-semibold">{{ $product->category }}</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-3 group-hover:text-blue-600 transition">{{ $product->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2 flex-grow">{{ $product->short_description }}</p>
                    @if($product->price)
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-xl font-bold text-blue-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <span class="text-blue-600 text-sm font-semibold group-hover:underline">
                            Details <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                    @endif
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-16 flex justify-center">
            <nav class="flex items-center space-x-2">
                @if($products->onFirstPage())
                <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-left"></i>
                </span>
                @else
                <a href="{{ $products->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                    <i class="fas fa-chevron-left"></i>
                </a>
                @endif

                @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    @if($page == $products->currentPage())
                    <span class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold">{{ $page }}</span>
                    @elseif($page >= $products->currentPage() - 1 && $page <= $products->currentPage() + 1)
                    <a href="{{ $url }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white transition font-semibold">{{ $page }}</a>
                    @endif
                @endforeach

                @if($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
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
            Showing {{ $products->firstItem() ?? 0 }} to {{ $products->lastItem() ?? 0 }} of {{ $products->total() }} products
        </div>
        @endif

        @else
        <div class="text-center py-20">
            <i class="fas fa-cube text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-600 mb-2">No products found</h3>
            <p class="text-gray-500">Check back later for new products.</p>
        </div>
        @endif
    </div>
</section>

<!-- Features -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose Our Smart Home Products?</h2>
            <p class="text-xl text-gray-600">Quality guaranteed with professional installation support</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 mx-auto bg-blue-100 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fas fa-microchip text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Smart Technology</h3>
                <p class="text-gray-600">Latest IoT technology with AI-powered automation</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 mx-auto bg-green-100 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fas fa-plug text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Easy Integration</h3>
                <p class="text-gray-600">Works with all major smart home platforms</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 mx-auto bg-amber-100 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-amber-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Secure & Private</h3>
                <p class="text-gray-600">End-to-end encryption for your peace of mind</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 mx-auto bg-purple-100 rounded-2xl flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Expert Support</h3>
                <p class="text-gray-600">Professional installation & 24/7 technical support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-primary hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">Need Help Choosing?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-xl mx-auto">Our experts are ready to help you find the perfect smart home solution for your needs.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition shadow-lg">
            <i class="fas fa-comments mr-2"></i> Free Consultation
        </a>
    </div>
</section>
@endsection
