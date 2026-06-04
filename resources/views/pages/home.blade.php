@extends('layouts.app')

@section('title', 'Home - WebSIAPOnline Contractor Solutions')
@section('meta_description', 'Professional contractor solutions for construction, renovation, and building services in Indonesia.')

@section('content')
<!-- Hero Section with Construction Banner -->
<section class="relative min-h-screen flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920&q=80" alt="Construction Site" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 to-blue-800/70"></div>
        <div class="absolute inset-0 hero-pattern"></div>
    </div>

    <div class="container mx-auto px-6 py-32 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-up">
                <span class="inline-block bg-amber-500/20 text-amber-400 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    <i class="fas fa-star mr-2"></i> Trusted Since 2010
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Building Your <span class="text-gradient">Vision</span> Into Reality
                </h1>
                <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                    We provide professional contractor solutions for residential and commercial projects. Quality craftsmanship, transparent pricing, and on-time delivery guaranteed.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-4 rounded-full font-semibold text-lg text-center transition shadow-lg hover-lift">
                        <i class="fas fa-comments mr-2"></i> Get Free Consultation
                    </a>
                    <a href="{{ route('portfolio') }}" class="bg-white/10 hover:bg-white/20 text-white px-8 py-4 rounded-full font-semibold text-lg text-center transition border-2 border-white/30">
                        <i class="fas fa-play mr-2"></i> View Our Work
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-72 h-72 bg-amber-500/20 rounded-full blur-3xl"></div>
                    <div class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white/10 rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-amber-400 mb-2">500+</div>
                                <div class="text-gray-300">Projects Done</div>
                            </div>
                            <div class="bg-white/10 rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-amber-400 mb-2">15+</div>
                                <div class="text-gray-300">Years Experience</div>
                            </div>
                            <div class="bg-white/10 rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-amber-400 mb-2">200+</div>
                                <div class="text-gray-300">Happy Clients</div>
                            </div>
                            <div class="bg-white/10 rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-amber-400 mb-2">50+</div>
                                <div class="text-gray-300">Expert Workers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#services" class="text-white/60 hover:text-white">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Our Services</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">What We <span class="text-blue-600">Offer</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive contractor solutions tailored to meet your building and construction needs</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-building text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">General Construction</h3>
                <p class="text-gray-600 mb-6">Complete building construction from foundation to finishing. Residential, commercial, and industrial projects.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <!-- Service Card 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-hammer text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Renovation & Remodeling</h3>
                <p class="text-gray-600 mb-6">Transform your existing space with our expert renovation services. Kitchen, bathroom, and full home remodels.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <!-- Service Card 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-couch text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Interior Design</h3>
                <p class="text-gray-600 mb-6">Create beautiful, functional spaces with our interior design services. Furniture, decor, and spatial planning.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <!-- Service Card 4 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-bolt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Electrical Works</h3>
                <p class="text-gray-600 mb-6">Professional electrical installation and repair. Wiring, panel upgrades, lighting installation, and safety checks.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <!-- Service Card 5 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-faucet text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Plumbing Services</h3>
                <p class="text-gray-600 mb-6">Complete plumbing solutions including pipe installation, leak repair, water heater setup, and drainage systems.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <!-- Service Card 6 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="w-16 h-16 card-icon rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-paint-roller text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Painting & Coating</h3>
                <p class="text-gray-600 mb-6">Interior and exterior painting services. Quality paints, professional techniques, and long-lasting finishes.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block bg-amber-100 text-amber-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Why Choose Us</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">We Build With <span class="text-amber-500">Excellence</span></h2>
                <p class="text-lg text-gray-600 mb-8">Our commitment to quality, safety, and client satisfaction sets us apart. We treat every project as if it were our own home.</p>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Licensed & Insured</h4>
                            <p class="text-gray-600">Fully licensed contractors with comprehensive insurance coverage for your peace of mind.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">On-Time Delivery</h4>
                            <p class="text-gray-600">We respect your time and commit to realistic timelines with transparent progress updates.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hand-holding-usd text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Transparent Pricing</h4>
                            <p class="text-gray-600">No hidden costs. Detailed quotes upfront with flexible payment options available.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-award text-amber-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Quality Guarantee</h4>
                            <p class="text-gray-600">We use premium materials and proven techniques backed by our satisfaction guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Construction Image -->
            <div class="relative">
                <div class="absolute -top-8 -right-8 w-full h-full bg-amber-500/20 rounded-3xl"></div>
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&q=80" alt="Construction Team" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="flex items-center space-x-4 text-white">
                            <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-hard-hat text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold">15+ Years</h4>
                                <p class="text-gray-200">of Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Our Portfolio</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Recent <span class="text-blue-600">Projects</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Explore our latest completed projects showcasing our expertise in construction and renovation</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80" alt="Sudirman Office Tower" class="w-full aspect-[4/3] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-amber-400 text-sm font-semibold">Construction</span>
                        <h3 class="text-white text-xl font-bold mt-2">Sudirman Office Tower</h3>
                        <p class="text-gray-300 text-sm mt-2">Complete office building construction - 15 floors</p>
                        <a href="{{ route('portfolio.show', ['slug' => 'sudirman-office-tower']) }}" class="inline-flex items-center mt-3 text-amber-400 hover:text-amber-300">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80" alt="Kemang Villa" class="w-full aspect-[4/3] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-amber-400 text-sm font-semibold">Renovation</span>
                        <h3 class="text-white text-xl font-bold mt-2">Kemang Villa Remodel</h3>
                        <p class="text-gray-300 text-sm mt-2">Luxury home renovation and interior design</p>
                        <a href="{{ route('portfolio.show', ['slug' => 'kemang-villa-remodel']) }}" class="inline-flex items-center mt-3 text-amber-400 hover:text-amber-300">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 3 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600&q=80" alt="SCBD Restaurant" class="w-full aspect-[4/3] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="text-amber-400 text-sm font-semibold">Interior</span>
                        <h3 class="text-white text-xl font-bold mt-2">SCBD Restaurant</h3>
                        <p class="text-gray-300 text-sm mt-2">Modern restaurant interior design project</p>
                        <a href="{{ route('portfolio.show', ['slug' => 'scbd-restaurant']) }}" class="inline-flex items-center mt-3 text-amber-400 hover:text-amber-300">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gradient-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transition">
                View All Projects <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Latest Articles Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-amber-100 text-amber-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">News & Articles</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Latest <span class="text-amber-500">Updates</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Stay informed with our latest news, tips, and insights about construction and building</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80" alt="Construction Tips" class="w-full aspect-video object-cover">
                    <span class="absolute top-4 left-4 bg-amber-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Tips</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-gray-500 text-sm mb-3">
                        <i class="far fa-calendar mr-2"></i>
                        <span>May 8, 2026</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition cursor-pointer">5 Essential Tips for Planning Your Home Renovation</h3>
                    <p class="text-gray-600 mb-4">Discover the key factors to consider before starting your home renovation project to ensure a smooth process.</p>
                    <a href="{{ route('article.show', ['slug' => 'tips-for-home-renovation']) }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Article 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&q=80" alt="Safety Standards" class="w-full aspect-video object-cover">
                    <span class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Safety</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-gray-500 text-sm mb-3">
                        <i class="far fa-calendar mr-2"></i>
                        <span>May 5, 2026</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition cursor-pointer">Construction Safety Standards You Must Know</h3>
                    <p class="text-gray-600 mb-4">A comprehensive guide to essential safety standards that protect workers and ensure quality construction.</p>
                    <a href="{{ route('article.show', ['slug' => 'construction-safety-standards']) }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Article 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="Modern Design" class="w-full aspect-video object-cover">
                    <span class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Design</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-gray-500 text-sm mb-3">
                        <i class="far fa-calendar mr-2"></i>
                        <span>May 1, 2026</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition cursor-pointer">Modern Architectural Trends in 2026</h3>
                    <p class="text-gray-600 mb-4">Explore the latest architectural trends shaping modern construction and building design this year.</p>
                    <a href="{{ route('article.show', ['slug' => 'modern-architectural-trends']) }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-gray-800 text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-900 transition">
                View All Articles <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 gradient-primary hero-pattern">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">What Our <span class="text-amber-400">Clients</span> Say</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-200 mb-6 italic">"WebSIAPOnline delivered our project ahead of schedule with exceptional quality. Their team was professional, communicative, and always available to address our concerns. Highly recommended!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-amber-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">AS</span>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Ahmad Santoso</h4>
                        <p class="text-gray-400 text-sm">CEO, PT Maju Jaya</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-200 mb-6 italic">"The renovation of our office space was flawless. They worked within our budget, minimized disruption to our business operations, and the result exceeded our expectations."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">RW</span>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Rina Wijaya</h4>
                        <p class="text-gray-400 text-sm">Director, CV Teknologi Indonesia</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-200 mb-6 italic">"From planning to execution, WebSIAPOnline was fantastic. They handled the entire construction of our new warehouse with precision. The quality of work is outstanding."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">BP</span>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold">Budi Pratama</h4>
                        <p class="text-gray-400 text-sm">Owner, Logistik Express</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-amber-500">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">Contact us today for a free consultation and quote. Let's build something amazing together!</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="bg-white text-amber-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition shadow-lg">
                <i class="fas fa-phone mr-2"></i> Call Us Now
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-green-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-green-700 transition shadow-lg">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection