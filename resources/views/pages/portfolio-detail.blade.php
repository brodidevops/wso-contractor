@extends('layouts.app')

@section('title', $portfolio->title . ' - WebSIAPOnline Portfolio')
@section('meta_description', $portfolio->description)

@section('content')
<!-- Page Header -->
<section class="relative h-[60vh] flex items-center">
    <div class="absolute inset-0">
        <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 to-blue-800/70"></div>
        <div class="absolute inset-0 hero-pattern"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-amber-400 hover:text-amber-300 mb-6 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Portfolio
            </a>
            <span class="inline-block bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                {{ $portfolio->category }}
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">{{ $portfolio->title }}</h1>
            <div class="flex flex-wrap items-center gap-6 text-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-calendar mr-2 text-amber-400"></i>
                    <span>{{ $portfolio->completed_date ? \Carbon\Carbon::parse($portfolio->completed_date)->format('F Y') : 'Ongoing' }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-amber-400"></i>
                    <span>Jakarta, Indonesia</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-building mr-2 text-amber-400"></i>
                    <span>{{ $portfolio->client }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Project Image -->
                <div class="rounded-2xl overflow-hidden shadow-xl mb-8">
                    <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="w-full">
                </div>

                <!-- Project Description -->
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Project Overview</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">{{ $portfolio->description }}</p>

                    <h3 class="text-xl font-bold text-gray-800 mb-4">Project Highlights</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Complete design to execution management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Premium materials sourced from trusted suppliers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Quality control at every stage</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">On-time delivery with full client satisfaction</span>
                        </li>
                    </ul>
                </div>

                <!-- Gallery (Placeholder) -->
                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Project Gallery</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&q=80" alt="Gallery 1" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=400&q=80" alt="Gallery 2" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&q=80" alt="Gallery 3" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80" alt="Gallery 4" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=400&q=80" alt="Gallery 5" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&q=80" alt="Gallery 6" class="w-full aspect-square object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Project Info Card -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Project Information</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                            <span class="text-gray-500">Category</span>
                            <span class="text-gray-800 font-medium">{{ $portfolio->category }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                            <span class="text-gray-500">Client</span>
                            <span class="text-gray-800 font-medium">{{ $portfolio->client }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                            <span class="text-gray-500">Completion</span>
                            <span class="text-gray-800 font-medium">{{ $portfolio->completed_date ? \Carbon\Carbon::parse($portfolio->completed_date)->format('M d, Y') : 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Status</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Completed</span>
                        </div>
                    </div>
                </div>

                <!-- Related Services -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Related Services</h3>
                    <div class="space-y-4">
                        <a href="{{ route('services') }}" class="flex items-center p-4 bg-white rounded-xl hover:bg-blue-50 transition">
                            <div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-building text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">General Construction</h4>
                                <span class="text-sm text-gray-500">View Service</span>
                            </div>
                        </a>
                        <a href="{{ route('services') }}" class="flex items-center p-4 bg-white rounded-xl hover:bg-blue-50 transition">
                            <div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-hammer text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Renovation</h4>
                                <span class="text-sm text-gray-500">View Service</span>
                            </div>
                        </a>
                        <a href="{{ route('services') }}" class="flex items-center p-4 bg-white rounded-xl hover:bg-blue-50 transition">
                            <div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-couch text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Interior Design</h4>
                                <span class="text-sm text-gray-500">View Service</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="gradient-primary rounded-2xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4">Start Your Project</h3>
                    <p class="text-gray-200 mb-6">Interested in a similar project? Contact us for a free consultation.</p>
                    <a href="{{ route('contact') }}" class="block w-full bg-amber-500 hover:bg-amber-600 text-white py-3 rounded-xl font-semibold text-center transition">
                        <i class="fas fa-comments mr-2"></i> Get Free Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Related Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPortfolios as $related)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift">
                <img src="{{ $related->image }}" alt="{{ $related->title }}" class="w-full aspect-[4/3] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-amber-400 text-sm font-semibold">{{ $related->category }}</span>
                        <h3 class="text-white text-lg font-bold mt-2">{{ $related->title }}</h3>
                        <a href="{{ route('portfolio.show', ['slug' => $related->slug]) }}" class="inline-flex items-center mt-3 text-amber-400 hover:text-amber-300 text-sm">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection