@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/finance-banner.webp') }}" alt="Programme Banner" class="d-none d-lg-block">
        <img src="{{ asset('assets/img/programmes/mobile-banner.webp') }}" alt="Programme Banner" class="d-block d-md-none">
        <img src="{{ asset('assets/img/programmes/tab-banner.webp') }}" alt="Programme Banner" class="d-none d-md-block d-lg-none">
        <div class="banner-title">
            <p>Online MBA in<br> <span>Data Analytics</span></p>
            <p class="d-none d-lg-block">Transform data into strategic business decisions with TMU’s Online MBA in Data Analytics. Gain expertise in analytics, business intelligence, and data-driven management through a flexible online learning experience.</p>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Advance Your Future with an <br><span class="highlight" style="color:#ff7900">Online MBA in Data Analytics</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>TMU’s Online MBA in Data Analytics is tailored for aspiring professionals and graduates seeking to build expertise in data-driven business management through a flexible online format. The programme equips learners with the knowledge and skills needed to interpret data, support strategic decision-making, and address modern business challenges.</p>
                            <p>The curriculum blends management principles with advanced analytics concepts, covering areas such as data interpretation, business intelligence, predictive analytics, and data visualisation. By combining practical applications with industry-focused learning, the programme prepares students to leverage data effectively and drive organisational growth across diverse sectors.</p>
                            <h3 class="mt-4 mb-3" style="font-size: 1.8rem; font-weight: 700; color: #001d4a;">Why Choose an Online MBA in Data Analytics</h3>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> High demand for data analytics professionals across industries.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Combines business management with analytical expertise.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Develops data-driven decision-making skills.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Opens opportunities in diverse sectors such as IT, finance, healthcare, and marketing.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhances career growth and leadership potential.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible online learning for working professionals and students.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Industry-relevant curriculum aligned with current market trends.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Prepares learners for roles in business intelligence and analytics management.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Improves problem-solving and strategic thinking abilities.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Offers strong earning potential and career advancement opportunities.
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
                    <section class="m-5 degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <!-- Left Column: Benefits Text -->
                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online MBA Degree from a <span class="highlight-underline">NAAC A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <!-- Benefit 1 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get high-stature degree on completion of your Online MBA course from India's top most University recognised for excellence.</p>
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
                                                <p>The degree is recognized by regulatory bodies and treated at par with regular campus-based program degrees.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column: Degree Image -->
                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}" alt="Sample Online MBA Degree Certificate (Landscape)" class="sample-degree-image">
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
                                    <h2>Teerthanker Mahaveer University Online, <br><span class="highlight">Open Doors. World Wide.</span></h2>
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in leading MNCs and work with renowned brands.</p>
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
                                <h2>Career Path After <span>Online MBA in Data Analytics</span></h2>
                                <p>An Online MBA in Data Analytics opens doors to a wide range of career opportunities at the intersection of business and technology. Graduates gain the skills to analyse data, identify trends, and support strategic decision-making, making them valuable assets across industries such as finance, healthcare, retail, e-commerce, consulting, and information technology. <br> Here are some of the most popular career paths after completing the programme:</p>
                            </div>

                            <!-- Content Grid (Image + List) -->
                            <div class="career-paths-content">

                                <!-- Image Column -->
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}" alt="Professionals discussing career paths" class="career-image">
                                </div>

                                <!-- List Column -->
                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Business Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Analytics Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Business Intelligence Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Analytics Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Financial Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Operations Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Risk Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Product Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Analytics Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Strategy Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Chief Data Officer (with experience)
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
                                                <span>A Bachelor’s degree in any discipline from a recognised university.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates should have obtained the minimum qualifying marks as prescribed by the university.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Both fresh graduates and working professionals are eligible to apply.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Relevant work experience is beneficial but not mandatory for admission.</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Decorative Graphic -->
                                    <div class="eligibility-graphic">
                                        <img src="{{ asset('assets/img/programmes/who-can-apply.png') }}" alt="" style="margin-top:-3rem;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== Eligibility Section End ========== -->

                    {{-- Section 3: FAQ --}}
                    <div class="course-section mt-5 container" id="faq-section">
                        <h2 class="section-title text-center">Frequently Asked Questions (FAQs)</h2>
                        <div class="course-details-content mt-3">
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five" aria-expanded="false" aria-controls="f-five">
                                                01. What is an Online MBA in Data Analytics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-five" class="collapse" aria-labelledby="ff-five" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. An Online MBA in Data Analytics is a postgraduate programme that combines business management education with data analytics, helping learners make data-driven business decisions.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six" aria-expanded="false" aria-controls="f-six">
                                                02. Who can pursue an Online MBA in Data Analytics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Graduates from any recognised university, as well as working professionals seeking to enhance their analytical and managerial skills, can apply.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-seven" aria-expanded="false" aria-controls="f-seven">
                                                03. What is the duration of an Online MBA in Data Analytics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. The programme typically takes 2 years to complete, divided into four semesters.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-eight" aria-expanded="false" aria-controls="f-eight">
                                                04. What career opportunities are available after an Online MBA in Data Analytics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Graduates can pursue roles such as Data Analyst, Business Analyst, Business Intelligence Analyst, Analytics Consultant, Operations Analyst, and Data Analytics Manager.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-nine">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-nine" aria-expanded="false" aria-controls="f-nine">
                                                05. Is an Online MBA in Data Analytics worth it?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-nine" class="collapse" aria-labelledby="ff-nine" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Yes, as organisations increasingly rely on data for decision-making, professionals with analytics and management expertise are in high demand across industries.
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

@endsection
