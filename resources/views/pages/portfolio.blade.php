@extends('layouts.app')

@section('title', 'Portfolio - WebSIAPOnline Contractor Solutions')
@section('meta_description', 'View our completed construction and renovation projects. Quality workmanship showcased in residential and commercial builds.')

@section('content')
<!-- Page Header -->
<section class="gradient-primary py-32 hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6" style="color: #ffffff !important; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Our Portfolio</h1>
        <p class="text-xl max-w-2xl mx-auto" style="color: #f3f4f6 !important; text-shadow: 0 1px 2px rgba(0,0,0,0.2);">Explore our completed projects showcasing quality construction and renovation work</p>
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{ route('home') }}" class="text-gray-100 hover:text-white transition">Home</a>
            <span class="text-gray-300">/</span>
            <span class="text-amber-400 font-semibold">Portfolio</span>
        </div>
    </div>
</section>

<!-- Category Filter -->
@if($categories->count() > 0)
<section class="py-8 bg-white border-b border-gray-100">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('portfolio') }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ !$category ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                All Projects
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('portfolio', ['category' => $cat]) }}"
               class="px-5 py-2 rounded-full font-semibold text-sm transition {{ $category == $cat ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Portfolio Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        @if($portfolios->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($portfolios as $item)
            <a href="{{ route('portfolio.show', ['slug' => $item->slug]) }}" class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift">
                <div class="aspect-[4/3] bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center relative">
                    @if($item->image)
                    <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <i class="fas fa-building text-white text-5xl opacity-50"></i>
                    @endif
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-amber-400 text-sm font-semibold">{{ $item->category }}</span>
                        <h3 class="text-white text-xl font-bold mt-2">{{ $item->title }}</h3>
                        <p class="text-gray-300 text-sm mt-2 line-clamp-2">{{ $item->description }}</p>
                        @if($item->client)
                        <div class="flex items-center mt-3 text-sm text-gray-300">
                            <i class="fas fa-building mr-2"></i>
                            <span>{{ $item->client }}</span>
                        </div>
                        @endif
                        @if($item->completed_date)
                        <div class="flex items-center mt-2 text-sm text-gray-300">
                            <i class="fas fa-calendar mr-2"></i>
                            <span>{{ \Carbon\Carbon::parse($item->completed_date)->format('F Y') }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-arrow-right text-blue-600 text-2xl"></i>
                        </div>
                        <span class="font-semibold">View Details</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($portfolios->hasPages())
        <div class="mt-16 flex justify-center">
            <nav class="flex items-center space-x-2">
                @if($portfolios->onFirstPage())
                <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-left"></i>
                </span>
                @else
                <a href="{{ $portfolios->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                    <i class="fas fa-chevron-left"></i>
                </a>
                @endif

                @foreach($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                    @if($page == $portfolios->currentPage())
                    <span class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold">{{ $page }}</span>
                    @elseif($page >= $portfolios->currentPage() - 1 && $page <= $portfolios->currentPage() + 1)
                    <a href="{{ $url }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-blue-600 hover:text-white transition font-semibold">{{ $page }}</a>
                    @endif
                @endforeach

                @if($portfolios->hasMorePages())
                <a href="{{ $portfolios->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
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
            Showing {{ $portfolios->firstItem() ?? 0 }} to {{ $portfolios->lastItem() ?? 0 }} of {{ $portfolios->total() }} projects
        </div>
        @endif

        @else
        <div class="text-center py-20">
            <i class="fas fa-building text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-600 mb-2">No projects found</h3>
            <p class="text-gray-500">Check back later for our latest projects.</p>
        </div>
        @endif
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 gradient-primary hero-pattern">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">500+</div>
                <div class="text-amber-400 font-semibold">Projects Completed</div>
            </div>
            <div class="p-6">
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">15+</div>
                <div class="text-amber-400 font-semibold">Years Experience</div>
            </div>
            <div class="p-6">
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">200+</div>
                <div class="text-amber-400 font-semibold">Happy Clients</div>
            </div>
            <div class="p-6">
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">50+</div>
                <div class="text-amber-400 font-semibold">Expert Workers</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-amber-500">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">Let us bring your vision to life with our professional construction services.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center bg-white text-amber-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
            <i class="fas fa-comments mr-2"></i> Get Free Consultation
        </a>
    </div>
</section>
@endsection
