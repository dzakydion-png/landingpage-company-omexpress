<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - OmExpress</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* JNE Color Scheme */
        :root {
            --jne-red: #2596be;
            --jne-red-dark: #1e7a9e;
            --jne-blue: #001f5c;
            --jne-dark-blue: #001847;
            --jne-darker-blue: #001233;
            --jne-yellow: #FFD700;
            --jne-light-bg: #f8fafc;
            --jne-gray: #f5f5f5;
            --jne-text: #333333;
            --jne-text-light: #666666;
        }

        /* Base Styles */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: var(--jne-text);
            background: #ffffff;
            line-height: 1.6;
        }

        /* Add padding for pages without hero section */
        body.has-fixed-header {
            padding-top: 70px;
        }

        /* Custom Scrollbar - JNE Style */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--jne-blue);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #2596be;
        }

        /* Selection Color */
        ::selection {
            background: var(--jne-blue);
            color: white;
        }

        /* Animation Utilities */
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-slide-up {
            animation: slideUp 0.5s ease-out;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Hover Card Effect - JNE Style */
        .hover-card {
            transition: all 0.3s ease;
        }
        .hover-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 31, 92, 0.15);
        }

        /* JNE Button Styles */
        .btn-jne-red {
            background: var(--jne-red);
            color: white;
            padding: 0.875rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        .btn-jne-red:hover {
            background: var(--jne-red-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 150, 190, 0.35);
        }

        .btn-jne-blue {
            background: var(--jne-blue);
            color: white;
            padding: 0.875rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        .btn-jne-blue:hover {
            background: var(--jne-dark-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 31, 92, 0.35);
        }

        .btn-jne-outline {
            background: transparent;
            color: var(--jne-blue);
            padding: 0.875rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--jne-blue);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        .btn-jne-outline:hover {
            background: var(--jne-blue);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 31, 92, 0.25);
        }

        /* Section Styles */
        .section-padding {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--jne-blue);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .section-subtitle {
            color: var(--jne-red);
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }

        /* Card Styles */
        .jne-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .jne-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 31, 92, 0.15);
        }

        /* Hero Gradient */
        .hero-gradient {
            background: linear-gradient(135deg, var(--jne-blue) 0%, var(--jne-dark-blue) 100%);
        }

        /* Text Gradient */
        .text-gradient {
            background: linear-gradient(135deg, #2596be 0%, var(--jne-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }

            .section-title {
                font-size: 1.75rem;
            }

            /* Mobile grid adjustments */
            [style*="grid-template-columns: 1fr 1fr"] {
                grid-template-columns: 1fr !important;
            }

            [style*="grid-template-columns: repeat(2"] {
                grid-template-columns: 1fr !important;
            }

            [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
            }

            /* Mobile hero text */
            h1[style*="font-size: 3rem"],
            h1[style*="font-size: 2.5rem"] {
                font-size: 1.75rem !important;
            }

            h2[style*="font-size: 2rem"] {
                font-size: 1.5rem !important;
            }

            /* Mobile padding adjustments */
            [style*="padding: 4rem"],
            [style*="padding: 5rem"] {
                padding: 2.5rem 0 !important;
            }
        }

        @media (max-width: 480px) {
            [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }

            [style*="grid-template-columns: repeat(2"] {
                grid-template-columns: 1fr !important;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }

        /* Form Styles - JNE Style */
        .jne-input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.2s;
            background: white;
        }
        .jne-input:focus {
            outline: none;
            border-color: var(--jne-blue);
            box-shadow: 0 0 0 4px rgba(0, 31, 92, 0.1);
        }

        .jne-label {
            display: block;
            font-weight: 600;
            color: var(--jne-text);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        /* Badge Styles */
        .jne-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.875rem;
            background: var(--jne-light-bg);
            color: var(--jne-blue);
            border-radius: 9999px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .jne-badge-red {
            background: rgba(37, 150, 190, 0.1);
            color: var(--jne-red);
        }

        /* Divider with icon */
        .section-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 3rem 0;
        }
        .section-divider::before,
        .section-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, #e5e7eb, transparent);
        }
        .section-divider i {
            margin: 0 1rem;
            color: var(--jne-red);
        }

        /* Pulse animation for CTAs */
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(37, 150, 190, 0.4);
            }
            50% {
                box-shadow: 0 0 0 15px rgba(37, 150, 190, 0);
            }
        }

        /* Loading skeleton */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased {{ !request()->routeIs('home') ? 'has-fixed-header' : '' }}">
    <!-- Header -->
    @include('home_company.partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('home_company.partials.footer')

    <!-- Back to Top Button - JNE Style -->
    <button type="button"
        id="back-to-top"
        class="fixed bottom-6 right-6 z-50 hidden w-14 h-14 text-white rounded-full shadow-xl items-center justify-center transition-all duration-300 hover:scale-110 focus:outline-none"
        style="background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%);"
        aria-label="Back to top">
        <i class="fas fa-chevron-up text-lg"></i>
    </button>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6281180892925?text=Halo!%20Terima%20kasih%20telah%20menghubungi%20Omexpress.%20Ada%20yang%20bisa%20kami%20bantu%3F"
        target="_blank"
        class="fixed bottom-24 right-6 z-50 w-14 h-14 text-white rounded-full shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-110"
        style="background: #25D366;"
        aria-label="Chat WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        // Back to Top functionality
        const backToTopBtn = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTopBtn.classList.remove('hidden');
                backToTopBtn.classList.add('flex');
            } else {
                backToTopBtn.classList.add('hidden');
                backToTopBtn.classList.remove('flex');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    </script>

    @stack('scripts')
</body>
</html>
