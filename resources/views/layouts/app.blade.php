<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WebSIAPOnline - Professional Contractor Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'Professional construction and contractor services')">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        html { scroll-behavior: smooth; }
        .gradient-primary { background: linear-gradient(135deg, #1e3a5f 0%, #2d5a87 50%, #3d7ab5 100%); }
        .gradient-dark { background: linear-gradient(180deg, #0f1f33 0%, #1e3a5f 100%); }
        .shadow-custom { box-shadow: 0 10px 40px rgba(0,0,0,0.15); }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        .card-icon { background: linear-gradient(135deg, #3d7ab5 0%, #2d5a87 100%); }
        .text-gradient { background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .animate-fade-up { animation: fadeUp 0.6s ease-out forwards; opacity: 0; }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .hero-pattern { background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }

        /* ============================================
           PROFESSIONAL NAVBAR STYLES
           ============================================ */

        /* Main Header */
        .navbar {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
        }
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        }

        /* Logo Animation */
        .navbar-brand {
            transition: all 0.3s ease;
        }
        .navbar-brand:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }
        .navbar-logo-icon {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .navbar-brand:hover .navbar-logo-icon {
            transform: rotate(5deg) scale(1.05);
        }

        /* Navigation Links */
        .navbar-nav .nav-link {
            position: relative;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            color: #374151;
            transition: all 0.3s ease;
            border-radius: 0.5rem;
            letter-spacing: 0.02em;
        }
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 80%;
            height: 2px;
            background: linear-gradient(90deg, #f59e0b, #fbbf24);
            transition: transform 0.3s ease;
            border-radius: 2px;
        }
        .navbar-nav .nav-link:hover {
            color: #f59e0b;
            background: rgba(245, 158, 11, 0.05);
        }
        .navbar-nav .nav-link:hover::before {
            transform: translateX(-50%) scaleX(1);
        }
        .navbar-nav .nav-link.active {
            color: #f59e0b;
            font-weight: 600;
        }
        .navbar-nav .nav-link.active::before {
            transform: translateX(-50%) scaleX(1);
        }

        /* CTA Button */
        .navbar-cta {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            padding: 0.625rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
        }
        .navbar-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
            background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
        }
        .navbar-cta:active {
            transform: translateY(0);
        }

        /* Phone Number */
        .navbar-phone {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #6b7280;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .navbar-phone:hover {
            color: #f59e0b;
        }
        .navbar-phone-icon {
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(245, 158, 11, 0.1);
            border-radius: 50%;
            color: #f59e0b;
            transition: all 0.3s ease;
        }
        .navbar-phone:hover .navbar-phone-icon {
            background: #f59e0b;
            color: white;
        }

        /* Announcement Bar */
        .navbar-announcement {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.875rem;
            font-weight: 500;
        }
        .navbar-announcement a {
            text-decoration: underline;
            font-weight: 700;
            transition: opacity 0.2s;
        }
        .navbar-announcement a:hover {
            opacity: 0.8;
        }
        .navbar-announcement-close {
            opacity: 0.7;
            transition: opacity 0.2s;
            cursor: pointer;
        }
        .navbar-announcement-close:hover {
            opacity: 1;
        }

        /* Mobile Menu Toggle */
        .navbar-mobile-toggle {
            width: 2.75rem;
            height: 2.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            color: #374151;
            transition: all 0.3s ease;
        }
        .navbar-mobile-toggle:hover {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        /* Mobile Menu */
        .navbar-mobile-toggle {
            width: 2.75rem;
            height: 2.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            color: #374151;
            transition: all 0.3s ease;
        }
        .navbar-mobile-toggle:hover {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        .navbar-mobile-menu {
            background: white;
            border-top: 1px solid #e5e7eb;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            max-height: calc(100vh - 5.5rem);
            max-height: calc(100dvh - 5.5rem);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            overscroll-behavior: contain;
            scrollbar-width: thin;
        }
        .navbar-mobile-menu::-webkit-scrollbar { width: 6px; }
        .navbar-mobile-menu::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 3px; }
        .navbar-mobile-nav {
            display: flex;
            flex-direction: column;
            padding: 1rem 0;
        }
        .navbar-mobile-link {
            display: flex;
            align-items: center;
            padding: 0.875rem 1.5rem;
            color: #374151;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        .navbar-mobile-link:hover,
        .navbar-mobile-link.active {
            background: rgba(245, 158, 11, 0.05);
            color: #f59e0b;
            border-left-color: #f59e0b;
        }
        .navbar-mobile-link i {
            width: 1.5rem;
            margin-right: 0.75rem;
            text-align: center;
        }

        /* Dropdown Menu */
        .navbar-dropdown {
            position: relative;
        }
        .navbar-dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 100;
            padding: 0.5rem;
            margin-top: 0.5rem;
        }
        .navbar-dropdown:hover .navbar-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .navbar-dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #374151;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }
        .navbar-dropdown-item:hover {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }
        .navbar-dropdown-item i {
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(245, 158, 11, 0.1);
            border-radius: 0.5rem;
            margin-right: 0.75rem;
            color: #f59e0b;
            font-size: 0.875rem;
        }

        /* Menu Banner Images */
        .menu-banner {
            position: relative;
            border-radius: 0.75rem;
            overflow: hidden;
            margin-bottom: 0.5rem;
            height: 120px;
        }
        .menu-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .menu-banner:hover img {
            transform: scale(1.05);
        }
        .menu-banner-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(30, 58, 95, 0.85), rgba(45, 90, 135, 0.7));
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem;
        }
        .menu-banner-title {
            color: white;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }
        .menu-banner-subtitle {
            color: #fbbf24;
            font-size: 0.75rem;
        }
        .menu-banner-cta {
            display: inline-flex;
            align-items: center;
            margin-top: 0.5rem;
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .menu-banner-cta i {
            margin-left: 0.25rem;
            transition: transform 0.2s ease;
        }
        .menu-banner:hover .menu-banner-cta i {
            transform: translateX(4px);
        }

        /* Theme Switcher */
        /* .theme-switcher {
            position: fixed;
            right: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            background: white;
            padding: 0.75rem;
            border-radius: 1rem;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.15);
            animation: slideInFromRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.5s;
            opacity: 0;
        }
        @keyframes slideInFromRight {
            from { opacity: 0; transform: translateY(-50%) translateX(100px); }
            to { opacity: 1; transform: translateY(-50%) translateX(0); }
        }
        .theme-switcher-label {
            font-size: 0.625rem;
            text-align: center;
            color: #9ca3af;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.25rem;
        }
        .theme-btn {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.75rem;
            border: 3px solid transparent;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
        }
        .theme-btn:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        .theme-btn.active {
            border-color: #1e3a5f;
            transform: scale(1.1);
            box-shadow: 0 0 0 4px rgba(30, 58, 95, 0.1);
        }
        .theme-btn.active::after {
            content: '✓';
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        } */

        /* Theme Colors */
        .navbar.theme-blue .gradient-primary,
        .navbar.theme-blue .navbar-logo-icon { background: linear-gradient(135deg, #1e3a5f, #2d5a87, #3d7ab5); }
        .navbar.theme-blue .nav-link:hover,
        .navbar.theme-blue .nav-link.active { color: #f59e0b; }
        .navbar.theme-blue .nav-link::before { background: linear-gradient(90deg, #f59e0b, #fbbf24); }

        .navbar.theme-green .gradient-primary,
        .navbar.theme-green .navbar-logo-icon { background: linear-gradient(135deg, #065f46, #059669, #10b981); }
        .navbar.theme-green .nav-link:hover,
        .navbar.theme-green .nav-link.active { color: #10b981; }
        .navbar.theme-green .nav-link::before { background: #10b981; }
        .navbar.theme-green .navbar-announcement { background: linear-gradient(135deg, #10b981, #059669); }
        .navbar.theme-green .navbar-cta { background: linear-gradient(135deg, #10b981, #059669); }

        .navbar.theme-purple .gradient-primary,
        .navbar.theme-purple .navbar-logo-icon { background: linear-gradient(135deg, #5b21b6, #7c3aed, #a78bfa); }
        .navbar.theme-purple .nav-link:hover,
        .navbar.theme-purple .nav-link.active { color: #7c3aed; }
        .navbar.theme-purple .nav-link::before { background: #7c3aed; }
        .navbar.theme-purple .navbar-announcement { background: linear-gradient(135deg, #7c3aed, #5b21b6); }
        .navbar.theme-purple .navbar-cta { background: linear-gradient(135deg, #7c3aed, #5b21b6); }

        .navbar.theme-orange .gradient-primary,
        .navbar.theme-orange .navbar-logo-icon { background: linear-gradient(135deg, #c2410c, #ea580c, #fb923c); }
        .navbar.theme-orange .nav-link:hover,
        .navbar.theme-orange .nav-link.active { color: #ea580c; }
        .navbar.theme-orange .nav-link::before { background: #ea580c; }
        .navbar.theme-orange .navbar-announcement { background: linear-gradient(135deg, #ea580c, #c2410c); }
        .navbar.theme-orange .navbar-cta { background: linear-gradient(135deg, #ea580c, #c2410c); }

        .navbar.theme-red .gradient-primary,
        .navbar.theme-red .navbar-logo-icon { background: linear-gradient(135deg, #991b1b, #dc2626, #f87171); }
        .navbar.theme-red .nav-link:hover,
        .navbar.theme-red .nav-link.active { color: #dc2626; }
        .navbar.theme-red .nav-link::before { background: #dc2626; }
        .navbar.theme-red .navbar-announcement { background: linear-gradient(135deg, #dc2626, #991b1b); }
        .navbar.theme-red .navbar-cta { background: linear-gradient(135deg, #dc2626, #991b1b); }

        /* Responsive */
        @media (max-width: 768px) {
            .theme-switcher {
                display: none;
            }
            .navbar-phone {
                display: none;
            }
            .navbar-nav .nav-link {
                padding: 0.5rem 0.75rem;
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <header class="navbar fixed w-full top-0 z-50 bg-white/95 navbar theme-blue" id="navbar">
        <!-- Announcement Bar -->
        <div class="navbar-announcement" id="announcementBar">
            <div class="container mx-auto px-6 flex items-center justify-center relative">
                <div class="flex items-center gap-2">
                    <i class="fas fa-bolt text-xs"></i>
                    <span>Free consultation for your first project! <a href="{{ route('contact') }}">Contact us now</a></span>
                </div>
                <button onclick="closeAnnouncement()" class="navbar-announcement-close absolute right-0 mr-4">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="navbar-brand flex items-center gap-3">
                    <div class="navbar-logo-icon w-12 h-12 gradient-primary rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-hard-hat text-white text-xl"></i>
                    </div>
                    <div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-xl font-bold text-gray-800">WebSIAP</span>
                            <span class="text-xl font-bold text-amber-500">Online</span>
                        </div>
                        <p class="text-xs text-gray-500 -mt-1">Contractor Solutions</p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-2">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>

                    <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>

                    <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>

                    <a href="{{ route('articles') }}" class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}">Articles</a>

                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <!-- CTA & Phone -->
                <div class="hidden md:flex items-center gap-4">
                    <a href="tel:+6281234567890" class="navbar-phone">
                        <div class="navbar-phone-icon">
                            <i class="fas fa-phone text-sm"></i>
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">Call Us</div>
                            <div class="font-semibold">+62 812 3456 7890</div>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}" class="navbar-cta">
                        <i class="fas fa-comments mr-2"></i>Get Quote
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="navbar-mobile-toggle md:hidden" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl" id="mobileMenuIcon"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="navbar-mobile-menu hidden md:hidden mt-4">
                <div class="navbar-mobile-nav">
                    <!-- Products Banner -->
                    {{-- <a href="{{ route('products') }}" class="menu-banner">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&q=80" alt="Products">
                        <div class="menu-banner-overlay">
                            <div class="menu-banner-title">Smart Home Products</div>
                            <div class="menu-banner-subtitle">Premium Quality Solutions</div>
                            <div class="menu-banner-cta">Explore Now <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </a> --}}

                    <!-- Articles Banner -->
                    {{-- <a href="{{ route('articles') }}" class="menu-banner">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600&q=80" alt="Articles">
                        <div class="menu-banner-overlay">
                            <div class="menu-banner-title">Articles & Insights</div>
                            <div class="menu-banner-subtitle">Expert Tips & News</div>
                            <div class="menu-banner-cta">Read More <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </a> --}}

                    <!-- Services Banner -->
                    {{-- <a href="{{ route('services') }}" class="menu-banner">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80" alt="Services">
                        <div class="menu-banner-overlay">
                            <div class="menu-banner-title">Our Services</div>
                            <div class="menu-banner-subtitle">Construction & Renovation</div>
                            <div class="menu-banner-cta">View Services <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </a> --}}

                    <!-- Portfolio Banner -->
                    {{-- <a href="{{ route('portfolio') }}" class="menu-banner">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80" alt="Portfolio">
                        <div class="menu-banner-overlay">
                            <div class="menu-banner-title">Our Portfolio</div>
                            <div class="menu-banner-subtitle">Completed Projects</div>
                            <div class="menu-banner-cta">View Gallery <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </a> --}}

                    <!-- Contact Banner -->
                    {{-- <a href="{{ route('contact') }}" class="menu-banner">
                        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=600&q=80" alt="Contact">
                        <div class="menu-banner-overlay">
                            <div class="menu-banner-title">Contact Us</div>
                            <div class="menu-banner-subtitle">Get Free Consultation</div>
                            <div class="menu-banner-cta">Get In Touch <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </a>

                    <div class="border-t border-gray-200 my-2"></div> --}}

                    <a href="{{ route('home') }}" class="navbar-mobile-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>Home
                    </a>
                    <a href="{{ route('products') }}" class="navbar-mobile-link {{ request()->routeIs('products') ? 'active' : '' }}">
                        <i class="fas fa-cube"></i>Products
                    </a>
                    <a href="{{ route('articles') }}" class="navbar-mobile-link {{ request()->routeIs('articles') ? 'active' : '' }}">
                        <i class="fas fa-newspaper"></i>Articles
                    </a>
                    <a href="{{ route('services') }}" class="navbar-mobile-link {{ request()->routeIs('services') ? 'active' : '' }}">
                        <i class="fas fa-tools"></i>Services
                    </a>
                    <a href="{{ route('portfolio') }}" class="navbar-mobile-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">
                        <i class="fas fa-images"></i>Portfolio
                    </a>
                    <a href="{{ route('contact') }}" class="navbar-mobile-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <i class="fas fa-envelope"></i>Contact
                    </a>
                    <div class="border-t border-gray-200 my-2"></div>
                    <a href="{{ route('contact') }}" class="navbar-mobile-link text-amber-500 font-bold">
                        <i class="fas fa-comments"></i>Get Free Quote
            </a>
                    <a href="tel:+6281234567890" class="navbar-mobile-link">
                        <i class="fas fa-phone"></i>+62 812 3456 7890
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Spacer for fixed header -->
    <div style="height: 5.5rem;" id="headerSpacer"></div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="gradient-dark text-white">
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-hard-hat text-white text-xl"></i>
                        </div>
                        <div>
                            <span class="text-xl font-bold">WebSIAP</span>
                            <span class="text-xl font-bold text-amber-500">Online</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">Professional contractor solutions delivering excellence in construction, renovation, and building services since 2010.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-amber-500 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-amber-500 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-amber-500 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-amber-500 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Home</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Products</a></li>
                        <li><a href="{{ route('articles') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Articles</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Construction</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Renovation</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Interior Design</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Electrical</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-amber-500 transition flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> Plumbing</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Us</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-amber-500 mt-1"></i>
                            <span class="text-gray-400">Jl. Sudirman No. 123, Jakarta Selatan, Indonesia 12190</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-amber-500"></i>
                            <span class="text-gray-400">+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-amber-500"></i>
                            <span class="text-gray-400">info@websiaponline.com</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-clock text-amber-500"></i>
                            <span class="text-gray-400">Mon - Sat: 8:00 - 17:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-white/10 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">&copy; 2026 WebSIAPOnline. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-amber-500 text-sm transition">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 text-sm transition">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 text-sm transition">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6281234567890" target="_blank" class="fixed bottom-6 right-6 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition z-50 hover-lift">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
    </a>

    <script>
        // ============================================
        // SCROLL EFFECT
        // ============================================
        const navbar = document.getElementById('navbar');
        const announcementBar = document.getElementById('announcementBar');
        const headerSpacer = document.getElementById('headerSpacer');
        let ticking = false;

        function updateNavbar() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            ticking = false;
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        });

        // ============================================
        // MOBILE MENU
        // ============================================
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const icon = document.getElementById('mobileMenuIcon');

            mobileMenu.classList.toggle('hidden');

            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                document.body.style.overflow = '';
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                const headerHeight = navbar.offsetHeight;
                mobileMenu.style.maxHeight = `calc(100vh - ${headerHeight}px)`;
                mobileMenu.style.maxHeight = `calc(100dvh - ${headerHeight}px)`;
                document.body.style.overflow = 'hidden';
            }
        }

        // Close mobile menu when clicking a link inside it
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                const mobileMenu = document.getElementById('mobileMenu');
                const icon = document.getElementById('mobileMenuIcon');
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                document.body.style.overflow = '';
            });
        });

        // ============================================
        // ANNOUNCEMENT BAR
        // ============================================
        function closeAnnouncement() {
            announcementBar.style.display = 'none';
            headerSpacer.style.height = '4.5rem';

            const mobileMenu = document.getElementById('mobileMenu');
            if (!mobileMenu.classList.contains('hidden')) {
                const headerHeight = navbar.offsetHeight;
                mobileMenu.style.maxHeight = `calc(100vh - ${headerHeight}px)`;
                mobileMenu.style.maxHeight = `calc(100dvh - ${headerHeight}px)`;
            }
        }

        // ============================================
        // THEME SWITCHER
        // ============================================
        const themeButtons = document.querySelectorAll('.theme-btn');

        // Load saved theme
        const savedTheme = localStorage.getItem('headerTheme') || 'blue';
        setTheme(savedTheme);

        // Theme button handlers
        themeButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const theme = this.getAttribute('data-theme');

                // Update active button
                themeButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Set theme
                setTheme(theme);

                // Save preference
                localStorage.setItem('headerTheme', theme);
            });
        });

        function setTheme(theme) {
            // Remove all theme classes
            navbar.classList.remove('theme-blue', 'theme-green', 'theme-purple', 'theme-orange', 'theme-red');

            // Add new theme
            navbar.classList.add('theme-' + theme);

            // Update active button
            themeButtons.forEach(btn => {
                btn.classList.toggle('active', btn.getAttribute('data-theme') === theme);
            });
        }
    </script>
</body>
</html>
