<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'CDOE TMU Website')</title> -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
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

    <!-- No index meta tag for test environment -->

    <script>
        (function() {
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

    <!-- External Libraries -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
        /* base */
        .cus-nav .dropdown {
            position: relative;
        }

        .cus-nav .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            border-radius: 12px;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: all .18s ease;
            pointer-events: none;
            z-index: 1000;
        }

        /* show first level on hover */
        .cus-nav .dropdown:hover>.submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }

        /* nested dropdown anchors layout */
        .cus-nav .submenu>li>a {
            display: block;
            padding: 10px 14px;
            white-space: nowrap;
        }

        /* position the second level to the right of the first */
        .cus-nav .submenu .dropdown {
            position: relative;
        }

        .cus-nav .submenu .submenu {
            top: 0;
            left: 90%;
            margin-left: 6px;
            /* tiny gap between levels */
            transform: translateY(0);
            /* no slide for side menus */
        }

        /* show second level when hovering its parent li */
        .cus-nav .submenu .dropdown:hover>.submenu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* IMPORTANT: prevent clipping */
        .cus-nav,
        .nav-options {
            overflow: visible;
        }

        @media (min-width: 983px) and (max-width: 1261px) {
            .cus-nav .nav-options {
                gap: 10px;
                /* adjust horizontal spacing */
            }

            .cus-nav .nav-options a,
            .cus-nav .dropdown>a {
                font-size: 14px;
                /* reduce font size for this range */
                padding: 8px 12px;
                /* optional: tighten padding */
            }

            .cus-nav .submenu {
                min-width: 190px;
                /* optional: narrower submenu */
            }
        }

        @media (min-width: 993px) and (max-width: 1143px) {
            .cus-nav .nav-options {
                gap: 6px;
                /* tighter spacing */
                flex-wrap: nowrap;
                /* keep in one line */
                margin-left: -40px;
            }

            .cus-nav .nav-options a,
            .cus-nav .dropdown>a {
                font-size: 13px;
                /* shrink font */
                padding: 6px 10px;
                /* reduce padding */
            }

            .cus-nav .submenu {
                min-width: 170px;
                /* adjust dropdown width if needed */
            }

            .cus-nav .logo img {
                max-width: 130px;
                /* shrink logo a little */
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTD3S2DJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="preloader" role="status" aria-live="polite" aria-hidden="false">
        <div class="loader-animation-container">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <!-- You can add more .loader-bar divs here for more bars -->
        </div>
        <p class="loading-text">Loading...</p>
    </div>

    <script>
        // This JavaScript remains the same
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            const body = document.body;

            if (preloader) {
                body.classList.remove('preloading');
                preloader.classList.add('hidden');
                preloader.setAttribute('aria-hidden', 'true');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('preloading');
        });
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
                <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logos/logo.png') }}"
                        alt=""></a>
            </div>
        </div>
        <div class="logo-space"></div>
        <div class="nav-options">
            <a href="/">Home</a>

            <div class="dropdown">
                <a>Programmes</a>
                <ul class="submenu">
                    <li><a href="{{ route('finance.programme') }}">MBA Finance</a></li>
                    <li><a href="{{ route('hr.programme') }}">MBA HR Management</a></li>
                    <li><a href="{{ route('marketing.programme') }}">MBA Marketing</a></li>
                    <li><a href="{{ route('ib.programme') }}">MBA International Business</a></li>
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
                <a href="#">Mandatory Disclosure</a>
                <ul class="submenu">
                    <li class="dropdown">
                        <a href="#">UGC Approval and Compliance</a>
                        <ul class="submenu">
                            <li><a href="{{ asset('/assets/pdf/UGC-Precaution-notice.pdf') }}"
                                    target="_blank">UGC-Precaution Notice</a></li>
                            <li><a href="{{ asset('/assets/pdf/Circular_18_Fee_refund_rule.pdf') }}"
                                    target="_blank">Fee Refund Rule</a></li>
                            <li><a href="{{ asset('/assets/pdf/Admission_Date_Extension.pdf') }}"
                                    target="_blank">Admission Date Extension</a></li>
                            <li><a href="{{ asset('/assets/pdf/BCA_Proposal_Application.pdf') }}" target="_blank">TMU Application submitted for UGC DEB Approval</a>
                            </li>
                            <li><a href="{{ asset('/assets/pdf/Proposal_Establishment_CFOE.pdf') }}"
                                    target="_blank">TMU Regulatory Body Approval</a></li>
                            <li><a href="{{ asset('/assets/pdf/CIQA_report.pdf') }}" target="_blank">CIQA Reports</a></li>
                            <li><a href="#" target="_blank">Sample Feedback Form</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Academics</a>
                        <ul class="submenu">
                            <li class="dropdown">
                                <a href="#">Syllabus</a>
                                <ul class="submenu">
                                    <li class="dropdown">
                                        <a href="{{ asset('/assets/pdf/Cdoe_PPR_BBA_Online.pdf') }}"
                                            target="_blank">PPR Online BBA
                                            Gen</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ asset('/assets/pdf/PPR_ONLINE_MBA_GEN.pdf') }}"
                                            target="_blank">PPR Online MBA
                                            Gen</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#" target="_blank">Academic Calendar</a></li>
                            <li><a href="#" target="_blank">Examination</a></li>
                            <li><a href="{{ asset('/assets/pdf/Student_Handling_Mechanism.pdf') }}"
                                    target="_blank">Student Grievances</a></li>
                        </ul>
                    </li>

                </ul>
                </li>


                </ul>
            </div>

            {{-- <a href="{{ route('facilities') }}">Facilities</a> --}}

            <a href="{{ route('blog') }}">Blogs</a>
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
                        <li><a href="{{ route('finance.programme') }}">MBA Finance</a></li>
                        <li><a href="{{ route('hr.programme') }}">MBA HR Management</a></li>
                        <li><a href="{{ route('marketing.programme') }}">MBA Marketing</a></li>
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
                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Mandatory Disclosure <span class="submenu-arrow">▸</span>
                    </button>

                    <ul class="flourish-submenu mandatory-submenu">
                        <h5 style="font-size: 17.6px">UGC Compliance</h5>
                        <hr>

                        <li><a href="{{ asset('/assets/pdf/UGC-Precaution-notice.pdf') }}" target="_blank">
                                UGC-Precaution Notice</a></li>
                        <li><a href="{{ asset('/assets/pdf/Circular_18_Fee_refund_rule.pdf') }}" target="_blank">Fee
                                Refund Rule</a></li>
                        <li><a href="{{ asset('/assets/pdf/Admission_Date_Extension.pdf') }}"
                                target="_blank">Admission Date Extension</a></li>
                        <li><a href="{{ asset('/assets/pdf/BCA_Proposal_Application.pdf') }}" target="_blank">TMU Application submitted for UGC DEB Approval</a>
                            </li>
                        <li><a href="{{ asset('/assets/pdf/Proposal_Establishment_CFOE.pdf') }}" target="_blank">TMU Regulatory Body Approval</a></li>
                        <li><a href="{{ asset('/assets/pdf/CIQA_report.pdf') }}" target="_blank">CIQA Reports</a></li>
                        <li><a href="#" target="_blank">Sample Feedback Form</a></li>
                        <h5 style="font-size: 17.6px" class="mt-3">Academics</h5>
                        <hr>
                        <li><a href="{{ asset('/assets/pdf/Student_Handling_Mechanism.pdf') }}"
                                target="_blank">Student Grievances</a></li>
                        <li><a href="#" target="_blank">Academic Calendar</a></li>
                        <li><a href="#" target="_blank">Examination</a></li>
                        <li class="fw-bold mb-0"><a href="#" target="_blank">Syllabus</a></li>
                        <hr class="mt-0 mb-1">
                        <li><a href="{{ asset('/assets/pdf/Cdoe_PPR_BBA_Online.pdf') }}" target="_blank">PPR Online
                                BBA Gen</a></li>
                        <li><a href="{{ asset('/assets/pdf/PPR_ONLINE_MBA_GEN.pdf') }}" target="_blank">PPR Online
                                MBA Gen</a></li>
                    </ul>
                </li>

                <li><a href="https://admissions.tmuonline.ac.in/">Apply Now</a></li>

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
