@extends('layouts.app')

@section('title', 'Services - WebSIAPOnline Contractor Solutions')
@section('meta_description', 'Professional contractor services including construction, renovation, electrical, plumbing, and interior design.')

@section('content')
<!-- Page Header -->
<section class="gradient-primary py-32 hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-6">Our Services</h1>
        <p class="text-xl text-black-200 max-w-2xl mx-auto">Comprehensive construction and contractor solutions for residential and commercial projects</p>
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Home</a>
            <span class="text-gray-400">/</span>
            <span class="text-amber-400">Services</span>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">What We Offer</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Professional <span class="text-blue-600">Services</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">From concept to completion, we handle every aspect of your construction needs</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-building text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">General Construction</h3>
                <p class="text-gray-600 mb-6">Complete building construction services for residential, commercial, and industrial projects. From foundation to finishing touches.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Foundation & Structure</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Walls & Roofing</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Doors & Windows</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Flooring & Ceiling</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-hammer text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Renovation & Remodeling</h3>
                <p class="text-gray-600 mb-6">Transform your existing space with our expert renovation services. We handle partial and full home remodels.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Kitchen Remodeling</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Bathroom Renovation</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Room Additions</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Structural Changes</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-couch text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Interior Design</h3>
                <p class="text-gray-600 mb-6">Create stunning, functional spaces with our professional interior design services and execution.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Space Planning</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Furniture Design</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Color Consultation</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Lighting Design</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-bolt text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Electrical Works</h3>
                <p class="text-gray-600 mb-6">Professional electrical installation and repair services for residential and commercial properties.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Wiring Installation</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Panel Upgrades</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Lighting Setup</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Safety Inspections</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Service 5 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-faucet text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Plumbing Services</h3>
                <p class="text-gray-600 mb-6">Complete plumbing solutions including installation, repair, and maintenance services.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Pipe Installation</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Leak Repair</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Water Heater Setup</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Drainage Systems</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Service 6 -->
            <div class="group bg-gray-50 rounded-2xl p-8 hover-lift border-2 border-transparent hover:border-blue-200 transition-all">
                <div class="w-20 h-20 card-icon rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-paint-roller text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Painting & Coating</h3>
                <p class="text-gray-600 mb-6">Professional interior and exterior painting services with premium materials and expert techniques.</p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Interior Painting</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Exterior Coating</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Wallpaper Installation</li>
                    <li class="flex items-center text-gray-600"><i class="fas fa-check text-green-500 mr-2"></i> Texture Finishes</li>
                </ul>
                <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center">
                    Get Quote <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-amber-100 text-amber-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Our Process</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">How We <span class="text-amber-500">Work</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">A systematic approach to deliver your project on time and within budget</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-20 h-20 mx-auto bg-blue-600 rounded-full flex items-center justify-center mb-6 relative z-10">
                    <span class="text-white text-3xl font-bold">1</span>
                </div>
                <div class="hidden lg:block absolute top-10 left-1/2 w-full h-0.5 bg-blue-200"></div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Free Consultation</h3>
                <p class="text-gray-600">We discuss your needs, preferences, and budget to understand your vision.</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-20 h-20 mx-auto bg-blue-600 rounded-full flex items-center justify-center mb-6 relative z-10">
                    <span class="text-white text-3xl font-bold">2</span>
                </div>
                <div class="hidden lg:block absolute top-10 left-1/2 w-full h-0.5 bg-blue-200"></div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Design & Planning</h3>
                <p class="text-gray-600">Our team creates detailed plans, 3D designs, and material specifications.</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-20 h-20 mx-auto bg-blue-600 rounded-full flex items-center justify-center mb-6 relative z-10">
                    <span class="text-white text-3xl font-bold">3</span>
                </div>
                <div class="hidden lg:block absolute top-10 left-1/2 w-full h-0.5 bg-blue-200"></div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Execution</h3>
                <p class="text-gray-600">Skilled workers execute the project with regular progress updates.</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-20 h-20 mx-auto bg-blue-600 rounded-full flex items-center justify-center mb-6 relative z-10">
                    <span class="text-white text-3xl font-bold">4</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Handover & Support</h3>
                <p class="text-gray-600">Final inspection, documentation handover, and after-sales support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Estimator -->
<section class="py-24 gradient-primary hero-pattern">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">Pricing</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Transparent <span class="text-amber-400">Pricing</span></h2>
                <p class="text-xl text-gray-200 mb-8">We believe in clear, upfront pricing with no hidden costs. Get a free estimate for your project today.</p>
                <div class="space-y-4">
                    <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex justify-between items-center">
                        <div>
                            <h4 class="text-white font-semibold">General Construction</h4>
                            <p class="text-gray-300 text-sm">Starting from</p>
                        </div>
                        <div class="text-2xl font-bold text-amber-400">Rp 3.5M/m²</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex justify-between items-center">
                        <div>
                            <h4 class="text-white font-semibold">Renovation</h4>
                            <p class="text-gray-300 text-sm">Starting from</p>
                        </div>
                        <div class="text-2xl font-bold text-amber-400">Rp 2.5M/m²</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 flex justify-between items-center">
                        <div>
                            <h4 class="text-white font-semibold">Interior Design</h4>
                            <p class="text-gray-300 text-sm">Starting from</p>
                        </div>
                        <div class="text-2xl font-bold text-amber-400">Rp 1.5M/m²</div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-10 shadow-2xl">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Request a Quote</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Your Name</label>
                        <input type="text" placeholder="Enter your name" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                        <input type="tel" placeholder="+62 812 3456 7890" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Service Type</label>
                        <select class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                            <option>Select a service</option>
                            <option>General Construction</option>
                            <option>Renovation</option>
                            <option>Interior Design</option>
                            <option>Electrical</option>
                            <option>Plumbing</option>
                            <option>Painting</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Project Details</label>
                        <textarea rows="3" placeholder="Describe your project..." class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full gradient-primary text-white py-4 rounded-xl font-semibold text-lg hover:shadow-lg transition">
                        Get Free Quote <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
