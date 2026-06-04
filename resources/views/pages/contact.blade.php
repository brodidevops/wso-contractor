@extends('layouts.app')

@section('title', 'Contact Us - WebSIAPOnline Contractor Solutions')
@section('meta_description', 'Get in touch with WebSIAPOnline for your construction and contractor needs. Contact us for free consultation and quotes.')

@section('content')
<!-- Page Header -->
<section class="gradient-primary py-32 hero-pattern">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black mb-6">Contact Us</h1>
        <p class="text-xl text-black-200 max-w-2xl mx-auto">Get in touch with us for a free consultation and quote for your project</p>
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Home</a>
            <span class="text-gray-400">/</span>
            <span class="text-amber-400">Contact</span>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div>
                <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Get In Touch</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Let's Discuss Your <span class="text-blue-600">Project</span></h2>
                <p class="text-lg text-gray-600 mb-8">We're here to help with any questions about our services. Reach out and we'll respond as soon as possible.</p>

                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-2xl hover-lift">
                        <div class="w-14 h-14 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Phone</h4>
                            <p class="text-gray-600">+62 812 3456 7890</p>
                            <p class="text-gray-600">+62 21 1234 5678</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-2xl hover-lift">
                        <div class="w-14 h-14 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Email</h4>
                            <p class="text-gray-600">info@websiaponline.com</p>
                            <p class="text-gray-600">sales@websiaponline.com</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-2xl hover-lift">
                        <div class="w-14 h-14 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Office Address</h4>
                            <p class="text-gray-600">Jl. Sudirman No. 123<br>Jakarta Selatan 12190<br>Indonesia</p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-2xl hover-lift">
                        <div class="w-14 h-14 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-1">Working Hours</h4>
                            <p class="text-gray-600">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="text-gray-600">Saturday: 9:00 AM - 3:00 PM</p>
                            <p class="text-gray-600">Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="mt-8">
                    <h4 class="text-lg font-bold text-gray-800 mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition hover-lift">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white hover:opacity-90 transition hover-lift">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center text-white hover:bg-blue-800 transition hover-lift">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition hover-lift">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition hover-lift">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-3xl p-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Full Name *</label>
                            <input type="text" placeholder="John Doe" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                            <input type="tel" placeholder="+62 812 3456 7890" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Email Address *</label>
                        <input type="email" placeholder="john@example.com" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Subject</label>
                        <select class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                            <option value="">Select a subject</option>
                            <option value="construction">General Construction</option>
                            <option value="renovation">Renovation & Remodeling</option>
                            <option value="interior">Interior Design</option>
                            <option value="electrical">Electrical Services</option>
                            <option value="plumbing">Plumbing Services</option>
                            <option value="consultation">Free Consultation</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Your Message *</label>
                        <textarea rows="5" placeholder="Tell us about your project..." class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition resize-none"></textarea>
                    </div>
                    <div>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                            <span class="text-gray-600">I agree to receive marketing communications</span>
                        </label>
                    </div>
                    <button type="submit" class="w-full gradient-primary text-white py-4 rounded-xl font-semibold text-lg hover:shadow-lg transition">
                        Send Message <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Find Us On Map</h2>
            <p class="text-lg text-gray-600">Visit our office for a face-to-face consultation</p>
        </div>
        <div class="bg-white rounded-3xl overflow-hidden shadow-xl">
            <div class="bg-gray-200 aspect-[3/1] flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-6xl text-gray-400 mb-4"></i>
                    <p class="text-gray-500 text-lg">Map Location</p>
                    <p class="text-gray-400">Jl. Sudirman No. 123, Jakarta Selatan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-amber-100 text-amber-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">FAQ</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Frequently Asked <span class="text-amber-500">Questions</span></h2>
        </div>
        <div class="max-w-3xl mx-auto space-y-6">
            <!-- FAQ 1 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    How long does a typical construction project take?
                </h4>
                <p class="text-gray-600 pl-8">Project timelines vary based on scope and complexity. A standard home construction typically takes 6-12 months, while renovations can range from 2 weeks to 3 months.</p>
            </div>
            <!-- FAQ 2 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    Do you provide free estimates?
                </h4>
                <p class="text-gray-600 pl-8">Yes, we offer free initial consultations and project estimates. Our team will visit your site, discuss your requirements, and provide a detailed quote within 48 hours.</p>
            </div>
            <!-- FAQ 3 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    What payment methods do you accept?
                </h4>
                <p class="text-gray-600 pl-8">We accept bank transfers, credit cards, and cash payments. We also offer flexible payment plans for larger projects, typically structured in stages.</p>
            </div>
            <!-- FAQ 4 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    Do you offer warranties on your work?
                </h4>
                <p class="text-gray-600 pl-8">All our work comes with a structural warranty of up to 10 years and workmanship warranty of 1 year. Materials are covered by manufacturer warranties.</p>
            </div>
        </div>
    </div>
</section>
@endsection
