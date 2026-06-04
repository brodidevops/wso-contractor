@extends('layouts.app')

@section('title', $article->meta_title ?? $article->title . ' - WebSIAPOnline Articles')
@section('meta_description', $article->meta_description ?? $article->excerpt)

@section('content')
<!-- Page Header -->
<section class="relative py-32 gradient-primary hero-pattern">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl">
            <div class="flex items-center gap-4 mb-6">
                <span class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                    {{ $article->category }}
                </span>
                @if($article->is_featured)
                <span class="bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-star mr-1"></i> Featured
                </span>
                @endif
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ $article->title }}</h1>
            <div class="flex flex-wrap items-center gap-6 text-gray-200">
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($article->author) }}&background=ffffff&color=1e3a5f" alt="{{ $article->author }}" class="w-10 h-10 rounded-full mr-3">
                    <span>{{ $article->author }}</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-calendar mr-2"></i>
                    <span>{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('F d, Y') : 'Draft' }}</span>
                </div>
                <div class="flex items-center">
                    <i class="far fa-eye mr-2"></i>
                    <span>{{ $article->view_count }} views</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Featured Image -->
                <div class="rounded-2xl overflow-hidden shadow-xl mb-8">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full">
                </div>

                <!-- Article Body -->
                <div class="prose prose-lg max-w-none">
                    <div class="text-lg text-gray-600 leading-relaxed mb-8">
                        <p class="text-xl font-medium text-gray-800">{{ $article->excerpt }}</p>
                    </div>

                    <div class="text-gray-700 leading-relaxed space-y-4">
                        {!! $article->content !!}
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h4 class="text-lg font-bold text-gray-800 mb-4">Share this article</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition hover-lift">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white hover:opacity-90 transition hover-lift">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition hover-lift">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition hover-lift">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition hover-lift">
                            <i class="fas fa-link"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Author Card -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">About the Author</h3>
                    <div class="flex items-center mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($article->author) }}&background=1e3a5f&color=ffffff&size=128" alt="{{ $article->author }}" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">{{ $article->author }}</h4>
                            <p class="text-gray-500 text-sm">Construction Expert</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm">Our team of experienced writers and construction professionals shares expert insights on building, renovation, and design.</p>
                </div>

                <!-- Related Articles -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-6">Related Articles</h3>
                    <div class="space-y-6">
                        @foreach($relatedArticles as $related)
                        <a href="{{ route('article.show', ['slug' => $related->slug]) }}" class="flex items-start space-x-4 group">
                            <img src="{{ $related->image }}" alt="{{ $related->title }}" class="w-20 h-20 object-cover rounded-xl flex-shrink-0">
                            <div>
                                <span class="text-xs text-amber-600 font-medium">{{ $related->category }}</span>
                                <h4 class="text-sm font-semibold text-gray-800 group-hover:text-blue-600 transition line-clamp-2">{{ $related->title }}</h4>
                                <span class="text-xs text-gray-500">{{ $related->published_at ? \Carbon\Carbon::parse($related->published_at)->format('M d, Y') : '' }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-6">Categories</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium hover:bg-blue-200 transition">Construction</a>
                        <a href="#" class="px-4 py-2 bg-amber-100 text-amber-600 rounded-full text-sm font-medium hover:bg-amber-200 transition">Tips</a>
                        <a href="#" class="px-4 py-2 bg-green-100 text-green-600 rounded-full text-sm font-medium hover:bg-green-200 transition">Safety</a>
                        <a href="#" class="px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-medium hover:bg-purple-200 transition">Design</a>
                        <a href="#" class="px-4 py-2 bg-red-100 text-red-600 rounded-full text-sm font-medium hover:bg-red-200 transition">Materials</a>
                        <a href="#" class="px-4 py-2 bg-teal-100 text-teal-600 rounded-full text-sm font-medium hover:bg-teal-200 transition">Technology</a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="gradient-primary rounded-2xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4">Subscribe to Newsletter</h3>
                    <p class="text-gray-200 text-sm mb-6">Get the latest construction tips and industry news delivered to your inbox.</p>
                    <form class="space-y-4">
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-amber-400">
                        <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white py-3 rounded-xl font-semibold transition">
                            Subscribe <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comments Section (Placeholder) -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-8">Comments ({{ $comments->count() }})</h3>

            <!-- Comment Form -->
            <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                <h4 class="text-lg font-bold text-gray-800 mb-4">Leave a Comment</h4>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                        <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                    </div>
                    <textarea rows="4" placeholder="Your comment..." class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition resize-none"></textarea>
                    <button type="submit" class="gradient-primary text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition">
                        Post Comment <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>

            <!-- Comments List -->
            <div class="space-y-6">
                @foreach($comments as $comment)
                <div class="bg-white rounded-2xl p-6 shadow-md">
                    <div class="flex items-start space-x-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($comment['name']) }}&background=random" alt="{{ $comment['name'] }}" class="w-12 h-12 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h5 class="font-bold text-gray-800">{{ $comment['name'] }}</h5>
                                <span class="text-sm text-gray-500">{{ $comment['date'] }}</span>
                            </div>
                            <p class="text-gray-600">{{ $comment['message'] }}</p>
                            <button class="text-blue-600 text-sm font-medium mt-2 hover:underline">Reply</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection