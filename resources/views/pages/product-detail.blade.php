@extends('layouts.app')

@section('title', $product->meta_title ?? $product->name . ' - WebSIAPOnline Products')
@section('meta_description', $product->meta_description ?? $product->short_description)

@section('content')
<!-- Page Header -->
<section class="relative h-[50vh] flex items-center">
    <div class="absolute inset-0">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 to-blue-800/70"></div>
        <div class="absolute inset-0 hero-pattern"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <a href="{{ route('products') }}" class="inline-flex items-center text-amber-400 hover:text-amber-300 mb-6 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Products
            </a>
            @if($product->is_featured)
            <span class="inline-block bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                <i class="fas fa-star mr-1"></i> Featured
            </span>
            @endif
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">{{ $product->name }}</h1>
            <div class="flex flex-wrap items-center gap-6 text-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-tag mr-2 text-amber-400"></i>
                    <span>{{ $product->category }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-star mr-2 text-amber-400"></i>
                    <span class="text-amber-400 font-semibold">Best Seller</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <!-- Main Image -->
                <div class="rounded-2xl overflow-hidden shadow-xl mb-4 bg-gray-100 aspect-square flex items-center justify-center">
                    @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @else
                    <i class="fas fa-cubes text-8xl text-gray-300"></i>
                    @endif
                </div>
                <!-- Gallery Thumbnails -->
                @if($product->gallery)
                <div class="grid grid-cols-4 gap-4">
                    @foreach(json_decode($product->gallery) as $galleryImage)
                    <div class="rounded-xl overflow-hidden bg-gray-100 aspect-square flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-blue-500 transition">
                        <img src="{{ $galleryImage }}" alt="Gallery" class="w-full h-full object-cover">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Info -->
            <div>
                <!-- Category & Price -->
                <div class="mb-6">
                    <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        {{ $product->category }}
                    </span>
                    @if($product->price)
                    <div class="text-4xl font-bold text-blue-600 mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                    @endif
                </div>

                <!-- Short Description -->
                <div class="mb-8">
                    <p class="text-lg text-gray-600 leading-relaxed">{{ $product->short_description }}</p>
                </div>

                <!-- Features -->
                @if($product->features)
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Key Features</h3>
                    <ul class="space-y-3">
                        @foreach(json_decode($product->features) as $feature)
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="{{ route('contact') }}" class="flex-1 gradient-primary text-white px-8 py-4 rounded-xl font-semibold text-center hover:shadow-lg transition">
                        <i class="fas fa-comments mr-2"></i> Request Quote
                    </a>
                    <a href="https://wa.me/6281234567890?text={{ urlencode('Hi, I am interested in ' . $product->name) }}" target="_blank" class="flex-1 bg-green-500 text-white px-8 py-4 rounded-xl font-semibold text-center hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp mr-2"></i> Chat WhatsApp
                    </a>
                </div>

                <!-- Share Buttons -->
                <div class="flex items-center gap-4">
                    <span class="text-gray-500 text-sm">Share:</span>
                    <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white hover:opacity-90 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Description -->
@if($product->description)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Product Description</h2>
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="prose max-w-none">
                    <div class="text-gray-700 leading-relaxed space-y-4">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Specifications -->
@if($product->specifications)
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Specifications</h2>
            <div class="bg-gray-50 rounded-2xl p-8">
                <table class="w-full">
                    <tbody>
                        @foreach(json_decode($product->specifications) as $key => $value)
                        <tr class="border-b border-gray-200 last:border-0">
                            <td class="py-4 font-semibold text-gray-700 w-1/3">{{ $key }}</td>
                            <td class="py-4 text-gray-600">{{ $value }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Related Products -->
@if($relatedProducts->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Related Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($relatedProducts as $related)
            <a href="{{ route('product.show', ['slug' => $related->slug]) }}" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100">
                <div class="aspect-square bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center relative">
                    @if($related->image)
                    <img src="{{ $related->image }}" alt="{{ $related->name }}" class="w-full h-full object-cover">
                    @else
                    <i class="fas fa-cubes text-5xl text-gray-400"></i>
                    @endif
                    @if($related->is_featured)
                    <span class="absolute top-3 left-3 bg-amber-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                        <i class="fas fa-star"></i>
                    </span>
                    @endif
                </div>
                <div class="p-5">
                    <span class="text-blue-600 text-xs font-semibold">{{ $related->category }}</span>
                    <h3 class="text-base font-bold text-gray-800 mt-1 mb-2 group-hover:text-blue-600 transition line-clamp-2">{{ $related->name }}</h3>
                    <p class="text-gray-500 text-sm line-clamp-2">{{ $related->short_description }}</p>
                    @if($related->price)
                    <div class="mt-3 text-lg font-bold text-blue-600">Rp {{ number_format($related->price, 0, ',', '.') }}</div>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
