<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'CDOE TMU Website')</title> -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTD3S2DJ');
    </script>
    <!-- End Google Tag Manager -->

    {{-- Duplicate GTM commented out to prevent duplicate network calls
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTD3S2DJ');</script>
    <!-- End Google Tag Manager -->
    --}}

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1570932207772363');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1570932207772363&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTD3S2DJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- No index meta tag for test environment -->

    <script>
        (function () {
            const isTestEnv = window.location.hostname === 'test.cdoe.tmu.ac.in';

            if (isTestEnv) {
                // Update or create robots meta tag
                let robotsMeta = document.querySelector('meta[name="robots"]');
                if (robotsMeta) {
                    robotsMeta.setAttribute('content', 'noindex, nofollow');
                } else {
                    robotsMeta = document.createElement('meta');
                    robotsMeta.setAttribute('name', 'robots');
                    robotsMeta.setAttribute('content', 'noindex, nofollow');
                    document.head.appendChild(robotsMeta);
                }

                // Update canonical link
                let canonicalLink = document.querySelector('link[rel="canonical"]');
                if (canonicalLink) {
                    canonicalLink.setAttribute('href', 'https://test.cdoe.tmu.ac.in');
                } else {
                    canonicalLink = document.createElement('link');
                    canonicalLink.setAttribute('rel', 'canonical');
                    canonicalLink.setAttribute('href', 'https://test.cdoe.tmu.ac.in');
                    document.head.appendChild(canonicalLink);
                }
            }
        })();
    </script>

    <!-- Noindex meta tag for test environment -->




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ $meta->meta_title ?? 'CDOE | TMU' }}</title>
    <meta name="description" content="{{ $meta->meta_description ?? 'CDOE website' }}">
    <meta name="keywords" content="{{ $meta->meta_keywords ?? '' }}">
    <meta name="google-site-verification" content="CFrZUzA2qgbjobzI08wjz2oeMroTswGtiT3jJo0vPzw" />
    <link rel="canonical" href="{{ url('/') . $meta->canonical_tag ?? url()->current() }}">
    <meta property="og:title" content="{{ $meta->meta_title }}" />
    <meta property="og:description" content="{{ $meta->meta_description }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="TMU-Online" />
    <meta property="og:url" content="{{ url()->current() }}" />

    @if (isset($meta))
        @if ($meta->no_index_status === 'Y')
            <meta name="robots" content="noindex, nofollow">
        @else
            <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        @endif
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif

    {{-- Add this block only if current page is home --}}
    @if (Request::is('/'))
        <meta property="og:url" content="https://www.tmuonline.ac.in/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="TMU Online | UGC-Approved Online Degree Programmes">
        <meta property="og:description"
            content="Explore UGC-approved online degree programmes at TMU Online. Study MBA flexibly with academic excellence and industry relevance.">
        <meta property="og:image" content="https://www.tmuonline.ac.in/assets/img/logos/logo.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="tmuonline.ac.in">
        <meta property="twitter:url" content="https://www.tmuonline.ac.in/">
        <meta name="twitter:title" content="TMU Online | UGC-Approved Online Degree Programmes">
        <meta name="twitter:description"
            content="Explore UGC-approved online degree programmes at TMU Online. Study MBA flexibly with academic excellence and industry relevance.">
        <meta name="twitter:image" content="https://www.tmuonline.ac.in/assets/img/logos/logo.png">
        <meta name="robots" content="noarchive" />
        <meta name="revisit-after" content="1 days">
        <meta name="googlebot" content="noodp">
        <meta name="msnbot" content="noodp">
        <meta name="slurp" content="noodp, noydir">
        <meta name="teoma" content="noodp">
        <meta name="robots" content="noodp, noydir">
    @endif

    {{-- Render schema markup if valid --}}
    @if (!empty($meta->schema_markup) && !in_array(strtolower(trim($meta->schema_markup)), ['na', '.', 'null']))
        {!! $meta->schema_markup !!}
    @endif

    @php
        // Default values (logo)
        $ogImage = asset('assets/img/logos/logo.png');
        $ogWidth = 839;
        $ogHeight = 473;
        $ogType = 'image/png';

        if (isset($blog) && !empty($blog->post_path)) {
            $ogImage = env('BLOG_URL') . '/' . ltrim($blog->post_path, '/');
            $ogWidth = 1280;
            $ogHeight = 500;
            $ogType = 'image/jpg';
        }
    @endphp

    <meta property="og:image" content="{{ $ogImage }}" />
    <meta property="og:image:width" content="{{ $ogWidth }}" />
    <meta property="og:image:height" content="{{ $ogHeight }}" />
    <meta property="og:image:type" content="{{ $ogType }}" />
    <meta name="author" content="Teerthanker Mahaveer University" />



    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon-48x48.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/reel.css') }}">
    <link rel="preload" as="image" href="{{ asset('/assets/img/logos/logo.webp') }}">
    @if (Request::is('/'))
    <!-- Preload Hero Banner for Mobile and Desktop LCP -->
    <link rel="preload" as="image" href="{{ asset('/assets/img/banner/hero-banner4-mobile.webp') }}" media="(max-width: 540px)" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('/assets/img/banner/hero-banner4.webp') }}" media="(min-width: 541px)" fetchpriority="high">
    @endif

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" />
    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Preloader Styles - Base (Mostly same as before) */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            /* White background, matching your site */
            z-index: 99999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-out, visibility 0s linear 0.5s;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        /* --- NEW ANIMATION STYLES --- */
        .loader-animation-container {
            display: flex;
            /* Arrange bars in a row */
            align-items: flex-end;
            /* Align bars to the bottom so they grow upwards */
            height: 50px;
            /* Max height of the bars */
            margin-bottom: 25px;
            /* Space between animation and text */
        }

        .loader-bar {
            width: 12px;
            /* Width of each bar */
            height: 100%;
            /* Bars will take full height of the container before scaling */
            background-color: #FF6600;
            /* Your theme's vibrant orange */
            margin: 0 4px;
            /* Spacing between bars */
            border-radius: 3px 3px 0 0;
            /* Slightly rounded top corners for a softer look */

            /* Animation properties */
            transform-origin: bottom;
            /* Animation grows from the bottom */
            transform: scaleY(0);
            /* Start scaled down to zero height */
            opacity: 0;
            /* Start invisible */
            animation: growBarAnimation 0.5s ease-out forwards;
        }

        /* Staggered animation delays for each bar */
        .loader-bar:nth-child(1) {
            animation-delay: 0s;
        }

        .loader-bar:nth-child(2) {
            animation-delay: 0.15s;
        }

        .loader-bar:nth-child(3) {
            animation-delay: 0.3s;
        }

        /* If you add a 4th bar: */
        /* .loader-bar:nth-child(4) { animation-delay: 0.45s; } */
        /* If you add a 5th bar: */
        /* .loader-bar:nth-child(5) { animation-delay: 0.6s; } */


        @keyframes growBarAnimation {
            0% {
                transform: scaleY(0);
                opacity: 0;
            }

            100% {
                transform: scaleY(1);
                opacity: 1;
            }
        }

        /* --- END OF NEW ANIMATION STYLES --- */

        .loading-text {
            /* margin-top: 20px; (Adjusted by loader-animation-container margin-bottom) */
            color: #001D4A;
            /* Dark blue from your "Finance" text */
            font-family: Arial, sans-serif;
            /* Or your website's primary font */
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            /* Optional: for a more modern feel */
            letter-spacing: 1px;
            /* Optional: for a more modern feel */
        }

        /* Ensure body is not scrollable while preloader is active (same as before) */
        body.preloading {
            overflow: hidden;
        }
    </style>

    <!-- Dropdown Menu Styles -->
    <style>
        /* ===== DESKTOP THEME DROPDOWN ===== */
        .cus-nav .dropdown {
            position: relative;
        }

        .cus-nav .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 210px;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-radius: 8px;
            border-top: 3px solid #ff6600;
            padding: 6px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: all 0.2s ease;
            pointer-events: none;
            z-index: 10000;
        }

        .cus-nav .dropdown:hover>.submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }

        .cus-nav .submenu>li {
            list-style: none;
        }

        .cus-nav .submenu>li>a,
        .cus-nav .submenu>li>.submenu-label {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 18px;
            font-size: 0.95rem;
            font-weight: 500;
            color: #333333;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .cus-nav .submenu>li>a:hover,
        .cus-nav .submenu>li.dropdown:hover>.submenu-label {
            background-color: #fff7f0;
            color: #ff6600;
        }

        /* ===== LEVEL-2 FLYOUT (Right Side) ===== */
        .cus-nav .submenu .dropdown {
            position: relative;
        }

        .cus-nav .submenu .submenu {
            top: -6px;
            left: 100%;
            margin-left: 2px;
            transform: translateX(6px);
            border-top: 3px solid #ff6600;
            min-width: 240px;
        }

        .cus-nav .submenu .dropdown:hover>.submenu {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            pointer-events: auto;
        }

        .cus-nav .submenu li.nav-divider {
            height: 1px;
            background: #f0f0f0;
            margin: 6px 0;
        }

        /* ===== MOBILE SPECIALISATIONS & PROGRAMME UNIQUENESS ===== */
        .text-orange {
            color: #ff6600 !important;
        }

        .text-navy {
            color: #0c1e4b !important;
        }

        .mobile-programme-head {
            background: #fff8f2 !important;
            border-left: 3px solid #ff6600 !important;
            border-radius: 6px !important;
            margin-bottom: 6px !important;
            padding: 10px 12px !important;
        }

        .mobile-spec-list {
            padding-left: 4px !important;
            margin-top: 4px !important;
        }

        .mobile-spec-item {
            display: flex !important;
            align-items: center;
            gap: 8px;
            padding: 8px 12px !important;
            font-size: 0.9rem !important;
            color: #444 !important;
            background: #fafafa !important;
            border-left: 2px solid #ff6600 !important;
            border-radius: 0 6px 6px 0 !important;
            margin-bottom: 6px !important;
            transition: all 0.2s ease !important;
            text-decoration: none !important;
        }

        .mobile-spec-item:hover,
        .mobile-spec-item:active {
            background: #fff2e8 !important;
            color: #ff6600 !important;
            padding-left: 15px !important;
        }

        .mobile-spec-icon {
            font-size: 0.75rem;
            color: #ff6600;
            transition: transform 0.2s ease;
        }

        .mobile-spec-item:hover .mobile-spec-icon {
            transform: translateX(3px);
        }

        .mobile-degree-item {
            display: flex !important;
            align-items: center;
            justify-content: space-between;
            padding: 10px 12px !important;
            font-weight: 600 !important;
            color: #0c1e4b !important;
            background: #f4f6fa !important;
            border-radius: 6px !important;
            margin-bottom: 6px !important;
            text-decoration: none !important;
        }

        .mobile-degree-badge {
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 10px;
            background: #0c1e4b;
            color: #ffffff;
            font-weight: 600;
        }

        /* IMPORTANT: prevent clipping */
        .cus-nav,
        .nav-options {
            overflow: visible;
        }

        @media (min-width: 983px) and (max-width: 1261px) {
            .cus-nav .nav-options {
                gap: 10px;
            }

            .cus-nav .nav-options a,
            .cus-nav .dropdown>a {
                font-size: 14px;
                padding: 8px 12px;
            }

            .cus-nav .submenu {
                min-width: 190px;
            }
        }

        @media (min-width: 993px) and (max-width: 1143px) {
            .cus-nav .nav-options {
                gap: 6px;
                flex-wrap: nowrap;
                margin-left: -40px;
            }

            .cus-nav .nav-options a,
            .cus-nav .dropdown>a {
                font-size: 13px;
                padding: 6px 10px;
            }

            .cus-nav .submenu {
                min-width: 170px;
            }

            .cus-nav .logo img {
                max-width: 130px;
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTD3S2DJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Preloader with Aesthetic Animation -->
    <div id="preloader" role="status" aria-live="polite" aria-hidden="false">
        <div class="loader-animation-container">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
        </div>
        <p class="loading-text">Loading...</p>
    </div>

    <script>
        (function() {
            function hidePreloader() {
                const preloader = document.getElementById('preloader');
                if (preloader && !preloader.classList.contains('hidden')) {
                    document.body.classList.remove('preloading');
                    preloader.classList.add('hidden');
                    preloader.setAttribute('aria-hidden', 'true');
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 500);
                }
            }

            // Hide immediately when DOM is interactive, or at max after 800ms to preserve aesthetics without lag
            document.addEventListener('DOMContentLoaded', hidePreloader);
            window.addEventListener('load', hidePreloader);
            setTimeout(hidePreloader, 800);
        })();
    </script>

    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->

    <!-- preloader area end -->

    <!-- navbar  -->
    <nav class="cus-nav d-none d-lg-flex">
        <div class="logo">
            <div class="logo-wrapper">
                <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logos/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="logo-space"></div>
        <div class="nav-options">
            <a href="/">Home</a>

            <div class="dropdown">
                <a href="{{ route('programme') }}">Programmes</a>
                <ul class="submenu">
                    {{-- MBA with theme flyout specializations --}}
                    <li class="dropdown">
                        <span class="submenu-label">
                            <span>MBA Specialisations</span>
                            <i class="bi bi-chevron-right" style="font-size: 11px; color: #ff6600;"></i>
                        </span>
                        <ul class="submenu">
                            <li><a href="{{ route('finance.programme') }}">Finance</a></li>
                            <li><a href="{{ route('hr.programme') }}">Human Resource Management</a></li>
                            <li><a href="{{ route('marketing.programme') }}">Marketing</a></li>
                            <li><a href="{{ route('digital_marketing.programme') }}">Digital Marketing</a></li>
                            <li><a href="{{ route('ib.programme') }}">International Business</a></li>
                            <li><a href="{{ route('lscm.programme') }}">Logistics & Supply Chain</a></li>
                            <li><a href="{{ route('data_analytics.programme') }}">Data Analytics</a></li>
                            <li><a href="{{ route('agri_business.programme') }}">Agri Business</a></li>
                        </ul>
                    </li>

                    <li class="nav-divider"></li>

                    {{-- BBA direct link --}}
                    <li><a href="{{ route('bba.programme') }}">BBA Programme</a></li>

                    {{-- BCA direct link --}}
                    <li><a href="{{ route('bca.programme') }}">BCA Programme</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a href="#">Admissions</a>
                <ul class="submenu">
                    <li><a href="{{ route('admissions.rules') }}">Admission Rules</a></li>
                    <li><a href="{{ route('how.to.apply') }}">How to Apply</a></li>
                </ul>
            </div>


            <div class="dropdown">
                <a href="#">Academics</a>
                <ul class="submenu">
                    <li class="dropdown">
                        <a href="#">Syllabus</a>
                        <ul class="submenu">
                            <li class="dropdown">
                                <a href="{{ asset('/assets/pdf/Cdoe_PPR_BBA_Online.pdf') }}" target="_blank">PPR
                                    Online BBA
                                    Gen</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ asset('/assets/pdf/PPR_ONLINE_MBA_GEN.pdf') }}" target="_blank">PPR
                                    Online MBA
                                    Gen</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ asset('/assets/pdf/PPR_BCA_CDOE.pdf') }}" target="_blank">PPR
                                    Online
                                    BCA</a>
                            </li>

                        </ul>
                        {{--
                    <li><a href="#" target="_blank">Academic Calendar</a></li> --}}
                    {{-- <li><a href="#" target="_blank">Examination</a></li> --}}
                    <li><a href="{{ asset('/assets/pdf/Student_Handling_Mechanism.pdf') }}" target="_blank">Student
                            Grievances</a></li>
                    </li>

                </ul>
                </li>

                </ul>
                </li>


                </ul>
            </div>

            {{-- <a href="{{ route('facilities') }}">Facilities</a> --}}

            <a href="{{ route('blog') }}">Blogs</a>
            <a href="{{ route('contact') }}">Contact Us</a>
            <a href="https://admissions.tmuonline.ac.in/" class="apply-btn">Apply Now</a>
        </div>
    </nav>


    <!-- Mobile Navbar Container - Add this to your HTML body -->
    <nav class="flourish-navbar-container" id="flourishNavbar">
        <div class="flourish-navbar-visible-area">
            <!-- Logo -->
            <a href="/" class="flourish-navbar-logo">
                <img src="{{ asset('/assets/img/logos/logo.webp') }}" alt="TMU Logo" class="logo">
            </a>

            <!-- Add Mobile Apply Button Here -->
            <a href="https://admissions.tmuonline.ac.in/" class="apply-btn mobile-apply-btn">Apply Now</a>

            <!-- Toggle Button -->
            <button class="flourish-navbar-toggle-btn" id="flourishNavbarToggle" aria-label="Toggle Menu"
                aria-expanded="false" aria-controls="flourishNavbarMenu">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>

        <!-- Expandable Menu Content -->
        <div class="flourish-navbar-menu-content" id="flourishNavbarMenu">
            <ul class="flourish-main-nav-list">
                <li><a href="/">Home</a></li>

                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Programmes <span class="submenu-arrow">▸</span>
                    </button>
                    <ul class="flourish-submenu">

                        {{-- MBA group with distinct specialization styling --}}
                        <li class="flourish-nav-item-has-submenu">
                            <button type="button" class="flourish-submenu-toggle mobile-programme-head">
                                <span><strong>MBA Specialisations</strong></span>
                                <span class="submenu-arrow">▸</span>
                            </button>
                            <ul class="flourish-submenu mobile-spec-list">
                                <li><a href="{{ route('finance.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Finance</a></li>
                                <li><a href="{{ route('hr.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Human Resource
                                        Management</a></li>
                                <li><a href="{{ route('marketing.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Marketing</a></li>
                                <li><a href="{{ route('digital_marketing.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Digital Marketing</a></li>
                                <li><a href="{{ route('ib.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> International Business</a>
                                </li>
                                <li><a href="{{ route('lscm.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Logistics & Supply
                                        Chain</a></li>
                                <li><a href="{{ route('data_analytics.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Data Analytics</a></li>
                                <li><a href="{{ route('agri_business.programme') }}" class="mobile-spec-item"><i
                                            class="bi bi-chevron-right mobile-spec-icon"></i> Agri Business</a></li>
                            </ul>
                        </li>

                        <li class="mt-2"><a href="{{ route('bba.programme') }}" class="mobile-degree-item"><span>BBA
                                    Programme</span> <span class="mobile-degree-badge">UG</span></a></li>
                        <li><a href="{{ route('bca.programme') }}" class="mobile-degree-item"><span>BCA Programme</span>
                                <span class="mobile-degree-badge">UG</span></a></li>

                    </ul>
                </li>

                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Admissions <span class="submenu-arrow">▸</span>
                    </button>
                    <ul class="flourish-submenu">
                        <li><a href="{{ route('admissions.rules') }}">Admission Rules</a></li>
                        <li><a href="{{ route('how.to.apply') }}">How to Apply</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('blog') }}">Blogs</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Academics <span class="submenu-arrow">▸</span>
                    </button>

                    <ul class="flourish-submenu mandatory-submenu">
                        <hr>
                        <li><a href="{{ asset('/assets/pdf/Student_Handling_Mechanism.pdf') }}" target="_blank">Student
                                Grievances</a></li>
                        {{-- <li><a href="#" target="_blank">Academic Calendar</a></li> --}}
                        {{-- <li><a href="#" target="_blank">Examination</a></li> --}}
                        <li class="fw-bold mb-0"><b><a href="#" target="_blank">Syllabus</a></b></li>
                        <hr class="mt-0 mb-1">
                        <li><a href="{{ asset('/assets/pdf/Cdoe_PPR_BBA_Online.pdf') }}" target="_blank">PPR Online
                                BBA Gen</a></li>
                        <li><a href="{{ asset('/assets/pdf/PPR_ONLINE_MBA_GEN.pdf') }}" target="_blank">PPR Online
                                MBA Gen</a></li>
                        <li><a href="{{ asset('/assets/pdf/PPR_BCA_CDOE.pdf') }}" target="_blank">PPR Online
                                BCA</a></li>

                    </ul>
                </li>


            </ul>
        </div>
        <!-- End of Expandable Menu Content -->
    </nav>
    <!-- End Mobile Navbar Container -->

    <!-- Css for the Mandatory Disclosure submenu scrollbar in mobile view -->
    <style>
        .mandatory-submenu {
            /* max-height: 250px; */
            overflow-y: auto;
            overflow-x: hidden;

        }
    </style>