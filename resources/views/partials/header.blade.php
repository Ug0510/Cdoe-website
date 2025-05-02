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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" />
    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

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
                <img src="{{ asset('/assets/img/logos/logo.png') }}" alt="">
            </div>
        </div>
        <div class="logo-space"></div>
        <div class="nav-options">
            <a href="#">Home</a>

            <div class="dropdown">
                <a href="#">Programmes</a>
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

            <a href="#">Facilities</a>
            <a href="#" class="apply-btn">Apply Now</a>
        </div>
    </nav>


    <!-- Mobile Navbar Container - Add this to your HTML body -->
    <nav class="flourish-navbar-container" id="flourishNavbar">
        <div class="flourish-navbar-visible-area">
            <!-- Logo -->
            <a href="/" class="flourish-navbar-logo"> <!-- Changed href to "/" for homepage -->
                <img src="./logo.png" alt="Logo" class="logo"> <!-- Ensure alt text -->
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
                        <li><a href="/mba-finance" class="submenu-tag">MBA Finance</a></li>
                        <li><a href="/mba-hr" class="submenu-tag">MBA HR Management</a></li>
                        <li><a href="/mba-marketing" class="submenu-tag">MBA Marketing</a></li>
                    </ul>
                </li>

                <li class="flourish-nav-item-has-submenu">
                    <button type="button" class="flourish-submenu-toggle">
                        Admissions <span class="submenu-arrow">▸</span>
                    </button>
                    <ul class="flourish-submenu">
                        <li><a href="/admission-rules" class="submenu-tag">Admission Rules</a></li>
                        <li><a href="/how-to-apply" class="submenu-tag">How to Apply</a></li>
                    </ul>
                </li>

                <li><a href="/facilities">Facilities</a></li>
                <li><a href="/apply-now">Apply Now</a></li>
            </ul>
        </div>
        <!-- End of Expandable Menu Content -->
    </nav>
    <!-- End Mobile Navbar Container -->