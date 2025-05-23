<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Edumint - Edumint LMS & Online Courses Template')</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta->meta_title ?? 'CDOE | TMU' }}</title>
    <meta name="description" content="{{ $meta->meta_description ?? 'CDOE website' }}">
    <meta name="keywords" content="{{ $meta->meta_keywords ?? '' }}">
    <link rel="canonical" href="{{ $meta->canonical_tag ?? url()->current() }}">
   @if(isset($meta))
    @if($meta->no_index_status === 'Y')
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index, follow">
    @endif
@else
    <meta name="robots" content="noindex, nofollow">
@endif





    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="20x20" type="image/png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/reel.css') }}">

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
    background-color: #ffffff; /* White background, matching your site */
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
    display: flex; /* Arrange bars in a row */
    align-items: flex-end; /* Align bars to the bottom so they grow upwards */
    height: 50px; /* Max height of the bars */
    margin-bottom: 25px; /* Space between animation and text */
}

.loader-bar {
    width: 12px; /* Width of each bar */
    height: 100%; /* Bars will take full height of the container before scaling */
    background-color: #FF6600; /* Your theme's vibrant orange */
    margin: 0 4px; /* Spacing between bars */
    border-radius: 3px 3px 0 0; /* Slightly rounded top corners for a softer look */

    /* Animation properties */
    transform-origin: bottom; /* Animation grows from the bottom */
    transform: scaleY(0); /* Start scaled down to zero height */
    opacity: 0; /* Start invisible */
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
    color: #001D4A; /* Dark blue from your "Finance" text */
    font-family: Arial, sans-serif; /* Or your website's primary font */
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase; /* Optional: for a more modern feel */
    letter-spacing: 1px;   /* Optional: for a more modern feel */
}

/* Ensure body is not scrollable while preloader is active (same as before) */
body.preloading {
    overflow: hidden;
}
        </style>


</head>

<body>

    <div id="preloader">
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
                <a href="{{route('home') }}"><img src="{{ asset('/assets/img/logos/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="logo-space"></div>
        <div class="nav-options">
            <a href="/">Home</a>

            <div class="dropdown">
                <a>Programmes</a>
                <ul class="submenu">
                    <li><a href="{{route('finance.programme') }}">MBA Finance</a></li>
                    <li><a href="{{route('hr.programme') }}">MBA HR Management</a></li>
                    <li><a href="{{route('marketing.programme') }}">MBA Marketing</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a href="#">Admissions</a>
                <ul class="submenu">
                    <li><a href="{{route('admissions.rules') }}">Admission Rules</a></li>
                    <li><a href="{{route('how.to.apply') }}">How to Apply</a></li>
                </ul>
            </div>

            <a href="{{route('facilities') }}">Facilities</a>
            <a href="https://cdoeadmissions.tmu.ac.in/" class="apply-btn">Apply Now</a>
        </div>
    </nav>


    <!-- Mobile Navbar Container - Add this to your HTML body -->
    <nav class="flourish-navbar-container" id="flourishNavbar">
        <div class="flourish-navbar-visible-area">
            <!-- Logo -->
            <a href="/" class="flourish-navbar-logo">
                <img src="{{ asset('/assets/img/logos/logo.png') }}" alt="TMU Logo" class="logo">
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
                        <li><a href="{{route('finance.programme') }}">MBA Finance</a></li>
                        <li><a href="{{route('hr.programme') }}">MBA HR Management</a></li>
                        <li><a href="{{route('marketing.programme') }}">MBA Marketing</a></li>
                    </ul>
                </li>

                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Admissions <span class="submenu-arrow">▸</span>
                    </button>
                    <ul class="flourish-submenu">
                        <li><a href="{{route('admissions.rules') }}">Admission Rules</a></li>
                        <li><a href="{{route('how.to.apply') }}">How to Apply</a></li>
                    </ul>
                </li>

                <li><a href="{{route('facilities') }}">Facilities</a></li>
                <li><a href="https://cdoeadmissions.tmu.ac.in/">Apply Now</a></li>

            </ul>
        </div>
        <!-- End of Expandable Menu Content -->
    </nav>
    <!-- End Mobile Navbar Container -->