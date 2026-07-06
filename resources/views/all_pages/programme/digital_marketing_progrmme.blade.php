@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/digital_marketing_desktop.jpg') }}" alt="Programme Banner" class="d-none d-lg-block">
        <img src="{{ asset('assets/img/programmes/digitial_markiting_mobile.jpg') }}" alt="Programme Banner" class="d-block d-md-none">
        <img src="{{ asset('assets/img/programmes/digital_markiting_tablet.jpg') }}" alt="Programme Banner" class="d-none d-md-block d-lg-none">
        <div class="banner-title">
            <p>Online MBA in<br> <span>Digital Marketing</span></p>
            <p class="d-none d-lg-block">Develop expertise in modern marketing strategies, online branding, performance<br>
            marketing, and customer engagement with TMU’s Online MBA in Digital Marketing. <br>Learn from an industry-focused curriculum while enjoying the convenience of online education.</p>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Become a Digital Leader with India's Best <br><span class="highlight" style="color:#ff7900">Online MBA in Digital Marketing</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>TMU’s Online MBA in Digital Marketing is designed for graduates and working professionals who want to develop expertise in the rapidly evolving digital landscape while enjoying the convenience of online learning. The programme focuses on building strategic marketing, analytical, and leadership skills that are essential for success in today’s digitally driven business environment.</p>
                            <p>The curriculum combines core management concepts with specialised digital marketing practices, covering areas such as search engine optimisation (SEO), social media marketing, content strategy, digital advertising, web analytics, and consumer behaviour. Through industry-relevant learning and practical exposure, students gain the ability to create effective marketing campaigns, strengthen brand presence, and drive business growth in competitive digital markets.</p>
                            
                            <h3 class="mt-4 mb-3" style="font-size: 1.8rem; font-weight: 700; color: #001d4a;">Why Choose an Online MBA in Digital Marketing</h3>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> High demand for digital marketing professionals across industries.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Develop expertise in SEO, social media, and online advertising.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Learn to create data-driven marketing strategies.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhance brand management and customer engagement skills.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible online learning for working professionals.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Gain knowledge of the latest digital marketing tools and trends.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Open doors to diverse career opportunities in marketing and media.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Improve leadership and strategic decision-making abilities.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Build skills in marketing analytics and campaign performance measurement.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Increase career growth potential and earning opportunities.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========== Fee Structure & Scholarship Section Start ========== -->
                    <section class="compact-fee-section px-1 px-lg-5 mt-5">
                        <div class="container-fluid compact-fee-container px-3 px-lg-5">
                            
                            <div class="career-paths-header text-center mb-4">
                                <h2>Fee Structure & <span>Scholarships</span></h2>
                            </div>

                            <div class="row">
                                <!-- Fee Structure Column -->
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="card h-100 compact-card">
                                        <div class="compact-card-header text-white text-center py-3" style="background-color: #001D4A; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Fee Details</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table align-middle mb-0 compact-table">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="color: #001D4A; font-weight: 600;">Fee Component</th>
                                                                <th scope="col" class="text-end" style="color: #001D4A; font-weight: 600;">Amount (Rs.)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Registration Fee (One-Time)</td>
                                                                <td class="text-end fw-semibold">Rs. 1,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tuition Fee (Per Semester)</td>
                                                                <td class="text-end fw-semibold">Rs. 20,700</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Examination Fee (Per Semester)</td>
                                                                <td class="text-end fw-semibold">Rs. 1,000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                
                                        </div>
                                    </div>
                                </div>

                                <!-- Scholarship Column -->
                                <div class="col-lg-6">
                                    <div class="card h-100 compact-card">
                                        <div class="compact-card-header text-white text-center py-3" style="background-color: #FF6600; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Scholarship</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="text-center mb-2 p-2" style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                    <p class="text-muted mb-0" style="font-size: 11px;">25% scholarship on tuition fees per semester is available for:</p>
                                                </div>
                                                
                                                <h6 style="color: #001D4A; font-weight: 600; margin-bottom: 8px; font-size: 13px;"></h6>
                                                
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-graduation-cap"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Faculty & Staff</h6>
                                                            <span class="text-muted" style="font-size: 11px;">All faculty & staff members of the university.</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-user-graduate"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">Existing TMU Students</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Currently enrolled students pursuing other programs.</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Alumni</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Graduated students of Teerthanker Mahaveer University.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-light border-0 mb-0 mt-2 py-2" style="background-color: #f8f9fa; border-radius: 8px;">
                                                <p class="text-muted mb-0" style="font-size: 11px; line-height: 1.4; text-align: center;"><i class="fas fa-info-circle me-1" style="color: #001D4A;"></i> Candidates must provide valid TMU ID or alumni proof to avail of the scholarship at the time of admission.</p>
                                            </div>
                                            <div class="text-center mb-2 p-2" style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                    <p class="text-muted mb-0" style="font-size: 11px;"><i class="fa-solid fa-star"></i> The fees may change over time. Kindly confirm from the admission cell before taking admission.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== Fee Structure & Scholarship Section End ========== -->

                    <!-- ========== Degree Highlight Section Start ========== -->
                    <section class=" m-5 degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <!-- Left Column: Benefits Text -->
                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online MBA Degree from a <span class="highlight-underline">NAAC
                                            A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <!-- Benefit 1 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get high-stature degree on completion of your Online MBA course from
                                                    India's top most University recognised for excellence.</p>
                                            </div>
                                        </div>

                                        <!-- Benefit 2 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Universally Accepted & Recognized</h4>
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau.</p>
                                            </div>
                                        </div>

                                        <!-- Benefit 3 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-equals"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>No Difference From Campus Program Degree</h4>
                                                <p>The degree is recognized by regulatory bodies and treated at par with
                                                    regular campus-based program degrees.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column: Degree Image -->
                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}"
                                        alt="Sample Online MBA Degree Certificate (Landscape)" class="sample-degree-image">
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- ========== Degree Highlight Section End ========== -->

                    <!-- ========== Recruiters Section Start ========== -->
                    <section class="recruiters-section">
                        <div class="container">

                            <!-- Section Title -->
                            <div class="recruiter-title-container">
                                <div class="section-header">
                                    <h2>Teerthanker Mahaveer University Online, <br><span class="highlight">Open Doors.
                                            World Wide.</span></h2>
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in
                                        leading MNCs and work with renowned brands.</p>
                                    <span class="title-underline"></span>
                                </div>
                            </div>

                            <!-- Recruiter Logos Grid -->
                            <div class="recruiter-logo-grid">
                                @php
                                    $altTexts = [
                                        1 => 'Wipro Logo',
                                        2 => 'Vistara Logo',
                                        3 => 'Videocon Logo',
                                        4 => 'VFS Global Logo',
                                        5 => 'Pantaloons Logo',
                                        6 => 'Amazon India Logo',
                                        7 => 'Tata Strive Logo',
                                        8 => 'Tally Logo',
                                        9 => 'Skyway Communications Logo',
                                        10 => 'Safety Circle Logo',
                                        11 => 'Royal Bank of Scotland Logo',
                                        12 => 'Paytm Logo',
                                        13 => 'OM Logistics Ltd Logo',
                                        14 => 'OYO Logo',
                                        15 => 'Neva Clothing Logo',
                                        16 => 'Max Life Insurance Logo',
                                        17 => 'Overseas Logo',
                                        18 => 'Tripat Infoways Logo',
                                        19 => 'LIC Logo',
                                        20 => 'Kotak Mahindra Bank Logo',
                                        21 => 'Karvy Stock Broking Logo',
                                        22 => 'Indigo Logo',
                                        23 => 'Globe Toyota Logo',
                                        24 => 'Recruiter Logo 24',
                                        25 => 'Recruiter Logo 25',
                                        26 => 'Recruiter Logo 26',
                                        27 => 'Recruiter Logo 27',
                                        28 => 'Recruiter Logo 28',
                                        29 => 'Recruiter Logo 29',
                                        30 => 'Recruiter Logo 30',
                                        31 => 'Recruiter Logo 31',
                                        32 => 'Recruiter Logo 32',
                                    ];
                                @endphp

                                @for ($i = 1; $i <= 32; $i++)
                                    <div class="recruiter-item">
                                        <img src="{{ asset('assets/img/recruiters/' . $i . '.jpg') }}"
                                            alt="{{ $altTexts[$i] ?? 'Recruiter Logo ' . $i }}" class="recruiter-logo"
                                            onerror="this.style.display='none'; this.parentElement.style.display='none';">
                                    </div>
                                @endfor
                            </div> <!-- End Recruiter Logos Grid -->

                        </div> <!-- End Container -->
                    </section>
                    <!-- ========== Recruiters Section End ========== -->

                    <!-- ========== Career Paths Section Start ========== -->
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid">

                            <!-- Section Header -->
                            <div class="career-paths-header">
                                <h2>Career Paths After Online MBA <span>in Digital Marketing</span></h2>
                                <p>An Online MBA in Digital Marketing opens up a wide range of career opportunities in the rapidly growing digital economy. Graduates gain expertise in online marketing strategies, brand management, consumer engagement, and marketing analytics, making them valuable assets across industries. <br> Here are prominent career paths you can pursue after completing your Online MBA in Digital Marketing:</p>
                            </div>

                            <!-- Content Grid (Image + List) -->
                            <div class="career-paths-content">

                                <!-- Image Column -->
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Professionals discussing digital marketing career paths" class="career-image">
                                </div>

                                <!-- List Column -->
                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Digital Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> SEO Specialist
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Social Media Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Content Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Performance Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Brand Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Email Marketing Specialist
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Analytics Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> E-commerce Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Digital Advertising Specialist
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Growth Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Consultant
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- End Content Grid -->

                        </div> <!-- End Container -->
                    </section>
                    <!-- ========== Career Paths Section End ========== -->

                    <!-- ========== Eligibility Section Start ========== -->
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid px-3 px-lg-5">
                            <div class="eligibility-card">
                                <div class="eligibility-content">

                                    <!-- Text Content -->
                                    <div class="eligibility-text">
                                        <h2 class="eligibility-title">Who Can Apply</h2>
                                        <p class="eligibility-subtitle">Eligibility Criteria</p>
                                        <ul class="eligibility-list">
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Bachelor's degree in any discipline from a recognised university.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Minimum qualifying marks as prescribed by the university (Typically 50% aggregate for General, and 45% for SC/ST).</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Working professionals and fresh graduates are both eligible to apply.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates who are in the final semester of the Bachelor's Program are also eligible to apply.</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Decorative Graphic -->
                                    <div class="eligibility-graphic">
                                        <img src="{{ asset('assets/img/programmes/who-can-apply.png') }}" alt=""
                                            style="margin-top:-3rem;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== Eligibility Section End ========== -->

                    {{-- Section 3: FAQ --}}
                    <div class="course-section mt-5 container" id="faq-section">
                        <h2 class="section-title text-center">FAQ</h2>
                        <div class="course-details-content mt-3">
                            <p class="text-justify"></p>

                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                01. What is an Online MBA in Digital Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            An Online MBA in Digital Marketing is a postgraduate programme that combines business management principles with digital marketing strategies, including SEO, social media marketing, content marketing, digital advertising, and web analytics.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six"
                                                aria-expanded="false" aria-controls="f-six">
                                                02. What is the duration of an Online MBA in Digital Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The programme typically spans 2 years, divided into four semesters, providing flexibility for students and working professionals.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-seven"
                                                aria-expanded="false" aria-controls="f-seven">
                                                03. What career opportunities are available after an Online MBA in Digital Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Graduates can pursue roles such as Digital Marketing Manager, SEO Specialist, Social Media Manager, Brand Manager, Content Marketing Manager, Performance Marketing Manager, and Marketing Consultant.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-eight"
                                                aria-expanded="false" aria-controls="f-eight">
                                                04. Is an Online MBA in Digital Marketing worth it?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, it is a valuable qualification for professionals seeking careers in the fast-growing digital marketing industry, offering opportunities for career advancement and higher earning potential.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-nine">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-nine"
                                                aria-expanded="false" aria-controls="f-nine">
                                                05. Can working professionals pursue an Online MBA in Digital Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-nine" class="collapse" aria-labelledby="ff-nine"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, the flexible online learning format allows working professionals to balance their studies with their job responsibilities.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- End Sequential Content --}}

                </div>
            </div>
        </div>
    </div>
    <!-- course-single area end -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');

                header.addEventListener('click', () => {
                    // Check if the clicked item is already active
                    const isActive = item.classList.contains('active');

                    // Close all other accordion items first
                    accordionItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            otherItem.querySelector('.accordion-content').style.maxHeight =
                                '0px';
                            otherItem.querySelector('.accordion-content').style.paddingTop =
                                '0';
                            otherItem.querySelector('.accordion-content').style
                                .paddingBottom = '0';
                        }
                    });

                    // Toggle the clicked item
                    if (isActive) {
                        // Close the clicked item
                        item.classList.remove('active');
                        content.style.maxHeight = '0px';
                    } else {
                        // Open the clicked item
                        item.classList.add('active');
                        content.style.maxHeight = (content.scrollHeight + 2) + 'px';
                    }
                });
            });

            // Optional: Open the first semester by default
            const firstItem = document.querySelector('.accordion-item');
            if (firstItem) {
                // Simulate a click to open it using the defined logic
                firstItem.querySelector('.accordion-header').click();
            }
        });
    </script>

@endsection
