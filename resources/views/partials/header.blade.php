<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Edumint - Edumint LMS & Online Courses Template')</title>

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


</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
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