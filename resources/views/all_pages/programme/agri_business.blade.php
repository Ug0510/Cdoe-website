@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/Online-MBA-Agri-Business-desktop.jpg') }}" alt="Programme Banner"
            class="d-none d-lg-block">
        <img src="{{ asset('assets/img/programmes/MBA-in-Agribusiness-mobile.jpg') }}" alt="Programme Banner" class="d-block d-md-none">
        <img src="{{ asset('assets/img/programmes/Agri-business-mba-tablet.jpg') }}" alt="Programme Banner"
            class="d-none d-md-block d-lg-none">
        <div class="banner-title">
            <p>Online MBA in <br> <span>Agri-Business</span></p>
            <p class="d-none d-lg-block">Build leadership and management expertise for the agricultural sector with TMU’s
                Online MBA in Agri. Business programme. Develop strategic, analytical, and business management skills
                through flexible online learning and industry-oriented coursework designed for the evolving agribusiness
                landscape.</p>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Accelerate Your Professional Growth with a<br><span class="highlight"
                    style="color:#ff7900">UGC-Certified Online MBA in Agri. Business</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>The Online MBA in Agri Business Programme at TMU is designed for learners who want to
                                strengthen their understanding of agricultural markets, business management, and modern
                                agribusiness practices while benefiting from the flexibility of online education. The
                                programme focuses on preparing professionals to address opportunities and challenges across
                                the agricultural value chain.</p>
                            <p>The Master of Business Administration in Agri Business online programme combines management
                                education with specialised agricultural business knowledge. Students gain insights into
                                agribusiness operations, supply chain management, agricultural marketing, rural development,
                                finance, economics, and entrepreneurship to build successful careers in the sector.</p>
                            <h3 class="mt-4 mb-3" style="font-size: 1.8rem; font-weight: 700; color: #001d4a;">Why Choose an
                                Online MBA in Agri. Business</h3>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible online learning from anywhere.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Continue education while managing professional
                                            commitments.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Industry-oriented agribusiness curriculum.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Develop leadership and management capabilities.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Understand agricultural markets and business
                                            operations.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhance decision-making and analytical skills.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Access to digital learning resources.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Career opportunities across agribusiness sectors.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Build entrepreneurial capabilities.
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Self-paced and convenient learning experience.
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
                                        <div class="compact-card-header text-white text-center py-3"
                                            style="background-color: #001D4A; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Fee Details</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table align-middle mb-0 compact-table">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="color: #001D4A; font-weight: 600;">
                                                                    Fee Component</th>
                                                                <th scope="col" class="text-end"
                                                                    style="color: #001D4A; font-weight: 600;">Amount (Rs.)
                                                                </th>
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
                                        <div class="compact-card-header text-white text-center py-3"
                                            style="background-color: #FF6600; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Scholarship</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="text-center mb-2 p-2"
                                                    style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                    <p class="text-muted mb-0" style="font-size: 11px;">25% scholarship on
                                                        tuition fees per semester is available for:</p>
                                                </div>

                                                <div class="d-flex flex-column gap-2">
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center"
                                                            style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-graduation-cap"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Faculty & Staff</h6>
                                                            <span class="text-muted" style="font-size: 11px;">All faculty &
                                                                staff members of the university.</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center"
                                                            style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-user-graduate"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">Existing TMU Students</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Currently
                                                                enrolled students pursuing other programs.</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center"
                                                            style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Alumni</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Graduated
                                                                students of Teerthanker Mahaveer University.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-light border-0 mb-0 mt-2 py-2"
                                                style="background-color: #f8f9fa; border-radius: 8px;">
                                                <p class="text-muted mb-0"
                                                    style="font-size: 11px; line-height: 1.4; text-align: center;"><i
                                                        class="fas fa-info-circle me-1" style="color: #001D4A;"></i>
                                                    Candidates must provide valid TMU ID or alumni proof to avail of the
                                                    scholarship at the time of admission.</p>
                                            </div>
                                            <div class="text-center mb-2 p-2"
                                                style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                <p class="text-muted mb-0" style="font-size: 11px;"><i
                                                        class="fa-solid fa-star"></i> The fees may change over time. Kindly
                                                    confirm from the admission cell before taking admission.</p>
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
                                        Get a UGC Entitled Online MBA Degree from a <span class="highlight-underline">NAAC A
                                            University</span>
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
                                <h2>Career Path After <span>Online MBA in Agri. Business</span></h2>
                                <p>The Online MBA in Agri Business programme provides students with advanced business and
                                    management knowledge aligned with the agricultural and allied sectors. The curriculum is
                                    designed to prepare graduates for leadership, strategic planning, and business growth
                                    opportunities across agriculture-based industries. Here are some popular career paths
                                    after completing an Online MBA in Agri. Business:</p>
                            </div>

                            <!-- Content Grid (Image + List) -->
                            <div class="career-paths-content">

                                <!-- Image Column -->
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Professionals discussing career paths" class="career-image">
                                </div>

                                <!-- List Column -->
                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Agribusiness Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Agricultural Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Supply Chain Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Business Development Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Rural Development Officer
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Agricultural Operations Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Procurement Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Farm Business Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Agricultural Export Executive
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Agri-Entrepreneur
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Financial Services Executive (Agriculture
                                            Sector)
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Project Manager in Agribusiness
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
                                                <span>Bachelor’s degree (minimum 3 years' duration) from a recognised university in any discipline.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>A minimum aggregate of 45% marks or an equivalent letter/numerical grade is required.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>A relaxation of 5% marks may be provided to SC/ST candidates as per applicable norms.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Final-year graduation students may also apply, subject to fulfilling the eligibility requirements at the time of admission.</span>
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
                        <h2 class="section-title text-center">Frequently Asked Questions (FAQs)</h2>
                        <div class="course-details-content mt-3">
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                01. What is the Online MBA in Agri. Business programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. The Online MBA in Agri. Business is a postgraduate management programme that combines business administration principles with specialised knowledge of agricultural business, marketing, operations, and management.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six"
                                                aria-expanded="false" aria-controls="f-six">
                                                02. Who can apply for an Online MBA in Agri. Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Candidates who have completed a bachelor’s degree from a recognised university are eligible to apply for the programme.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-seven"
                                                aria-expanded="false" aria-controls="f-seven">
                                                03. Is an Online MBA in Agri. Business valid for jobs and higher studies?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Yes, an Online MBA from a recognised university is valid for employment opportunities and professional advancement across the agribusiness and management sectors.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-eight"
                                                aria-expanded="false" aria-controls="f-eight">
                                                04. What are the benefits of studying an Online MBA in Agri. Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. The programme offers flexible learning, specialised agribusiness knowledge, management expertise, leadership development, and career advancement opportunities.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-nine">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-nine"
                                                aria-expanded="false" aria-controls="f-nine">
                                                05. What career options are available after an Online MBA in Agri. Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-nine" class="collapse" aria-labelledby="ff-nine"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Graduates can pursue roles in agribusiness management, agricultural marketing, supply chain management, consulting, business development, rural development, and entrepreneurship.
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