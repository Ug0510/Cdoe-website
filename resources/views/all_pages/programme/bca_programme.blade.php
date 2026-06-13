@extends('layouts.app')

@section('CDOE', 'Online BCA Admission 2026: Fees, Eligibility, Syllabus and Career | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/bca_desktop.jpeg') }}" alt="Programme Banner" class="d-none d-lg-block">
        <img src="{{ asset('assets/img/programmes/bca_mobile.jpeg') }}" alt="Programme Banner" class="d-block d-md-none">
        <img src="{{ asset('assets/img/programmes/bca_tablet.jpeg') }}" alt="Programme Banner" class="d-none d-md-block d-lg-none">
        <div class="banner-title">
            <p>Online BCA <br> <span>Bachelor of Computer Applications</span></p>
            <p class="d-none d-lg-block">Build a strong foundation in technology and prepare for a successful career in the digital world with TMU’s Online BCA programme. Gain industry-relevant knowledge in computer applications, software development, and emerging technologies through a flexible and interactive online learning experience.</p>
        </div>
    </div>
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Excel in Computer Applications with India's Best <br><span class="highlight" style="color:#ff7900">Online BCA Programme</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>The Online BCA Programme at TMU is designed for students who want to develop technical knowledge and practical understanding of computer applications while enjoying the flexibility of online education. The programme helps learners build analytical, problem-solving, and digital skills required in today’s technology-driven environment.<br><br>
                            The Bachelor of Computer Applications (BCA) online programme provides comprehensive exposure to computer fundamentals, programming concepts, databases, software development, networking, and web technologies. The curriculum is structured to combine theoretical learning with practical application to prepare students for modern IT careers.
                            </p>
                            <h3>Why Choose an Online BCA </h3>
                            <div class="row pt-4">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible learning from anywhere
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Study while managing work or other commitments
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Industry-oriented curriculum
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Strong foundation in computer applications
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Builds programming and analytical skills
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Interactive digital learning environment
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Access to online learning resources
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhances career opportunities in IT
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Prepares students for higher studies such as MCA or MBA
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Self-paced learning experience
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
                                            <h3 class="mb-0 text-white">BBA Fee Details</h3>
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
                                                                <td class="text-end fw-semibold">Rs. 12,600</td>
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

                    {{-- Admissions Open Section --}}
                    <div class="course-section container pd-top-30 pd-bottom-30 text-center" id="admissions-open-section">
                        <div class="section-header mt-5 mb-0">
                            <h2>Online BCA <span class="highlight">Admissions Open 2026</span></h2>
                        </div>
                        <div class="course-details-content">
                            <p>Admissions open for the 2026 batch of the TMU Online BCA—a robust program designed to prepare technical leaders for global IT industries. TMU Online offers a flexible, 100% online learning experience that combines rigorous academic standards with practical computing expertise. Take the first step towards a successful career in technology today.</p>
                        </div>
                    </div>

                    <section class="degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online BCA Degree from a <span class="highlight-underline">NAAC
                                            A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get high-stature degree on completion of your Online BCA course from
                                                    India's top most University recognised for excellence.</p>
                                            </div>
                                        </div>

                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Universally Accepted & Recognized</h4>
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau.</p>
                                            </div>
                                        </div>

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

                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}"
                                        alt="Sample Online BCA Degree Certificate (Landscape)" class="sample-degree-image">
                                </div>

                             </div>
                        </div>
                    </section>

                    <section class="recruiters-section">
                        <div class="container">

                            <div class="recruiter-title-container">
                                <div class="section-header">
                                    <h2>Teerthanker Mahaveer University Online, <br><span class="highlight">Open Doors.
                                            World Wide.</span></h2>
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in
                                        leading MNCs and work with renowned brands.</p>
                                    <span class="title-underline"></span>
                                </div>

                            </div>

                            <div class="recruiter-logo-grid">

                                {{-- Loop from 1 to 32 assuming images 1.jpg to 32.jpg exist --}}
                                @php
                                    $altTexts = [
                                        1 => 'Wipro Logo', 2 => 'Vistara Logo', 3 => 'Videocon Logo', 4 => 'VFS Global Logo',
                                        5 => 'Pantaloons Logo', 6 => 'Amazon India Logo', 7 => 'Tata Strive Logo', 8 => 'Tally Logo',
                                        9 => 'Skyway Communications Logo', 10 => 'Safety Circle Logo', 11 => 'Royal Bank of Scotland Logo',
                                        12 => 'Paytm Logo', 13 => 'OM Logistics Ltd Logo', 14 => 'OYO Logo', 15 => 'Neva Clothing Logo',
                                        16 => 'Max Life Insurance Logo', 17 => 'Overseas Logo', 18 => 'Tripat Infoways Logo',
                                        19 => 'LIC Logo', 20 => 'Kotak Mahindra Bank Logo', 21 => 'Karvy Stock Broking Logo',
                                        22 => 'Indigo Logo', 23 => 'Globe Toyota Logo', 24 => 'HCL Technologies Logo',
                                        25 => 'Genpact Logo', 26 => 'Fortis Healthcare Logo', 27 => 'Feedback Infra Logo',
                                        28 => 'Ernst & Young Logo', 29 => 'Dell Logo', 30 => 'Concentrix Logo',
                                        31 => 'Axis Bank Logo', 32 => 'Accenture Logo',
                                    ];
                                @endphp

                                @for ($i = 1; $i <= 32; $i++)
                                    <div class="recruiter-item">
                                        <img src="{{ asset('assets/img/recruiters/' . $i . '.jpg') }}"
                                            alt="{{ $altTexts[$i] ?? 'Recruiter Logo ' . $i }}" class="recruiter-logo"
                                            onerror="this.style.display='none'; this.parentElement.style.display='none';">
                                    </div>
                                @endfor

                            </div> </div> </section>

                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid">

                            <div class="career-paths-header">
                                <h2>Career Paths After Online BCA <span>Programme</span></h2>
                                <p>An Online BCA degree equips you with fundamental IT skills, opening doors to diverse technical roles. Here are some popular career paths you can pursue after completing your BCA:</p>
                            </div>

                            <div class="career-paths-content">

                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Professionals discussing BCA career paths" class="career-image">
                                </div>

                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Software Developer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Web Developer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Technical Support Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Database Administrator (Entry-Level)</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> System Administrator</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> IT Support Specialist</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Application Support Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> UI/UX Support Professional</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Business Analyst (Entry-Level)</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Digital Technology Associate</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Data Analyst (Entry-Level)</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Entrepreneurship & Freelancing</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid px-3 px-lg-5">
                            <div class="eligibility-card">
                                <div class="eligibility-content">

                                    <div class="eligibility-text">
                                        <h2 class="eligibility-title">Who Can Apply</h2>
                                        <p class="eligibility-subtitle">Eligibility Criteria</p>
                                        <ul class="eligibility-list">
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Passed 10+2 (or equivalent examination) in any stream from a recognised Board.</span>
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
                                                <span>Candidates appearing for the Class 12 final examination are also eligible to apply, subject to meeting the eligibility requirements at the time of admission.</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="eligibility-graphic">
                                        <img src="{{ asset('assets/img/programmes/who-can-apply.png') }}" alt="Eligibility requirements illustration"
                                            style="margin-top:-3rem;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- Section 3: FAQ --}}
                    <div class="course-section mt-5 container" id="faq-section">
                        <h2 class="section-title text-center">FAQ</h2>
                        <div class="course-details-content mt-3">
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-one">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                                aria-expanded="true" aria-controls="f-one">
                                                01. What is the Online BCA programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-one" class="collapse show" aria-labelledby="ff-one"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The Online BCA programme is an undergraduate degree focused on computer applications and information technology, delivered through an online learning format that offers flexibility and accessibility.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-two">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                                aria-expanded="false" aria-controls="f-two">
                                                02. Who can apply for Online BCA?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Students who have completed 10+2 from a recognised board are eligible to apply for the Online BCA programme.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-three">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                                aria-expanded="false" aria-controls="f-three">
                                                03. Is an Online BCA degree valid for jobs and higher studies?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, an Online BCA degree from a recognised university is valid for employment opportunities and for pursuing higher studies such as MCA, MBA, and other postgraduate programmes.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-four">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                                aria-expanded="false" aria-controls="f-four">
                                                04. What are the benefits of studying an Online BCA?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Online BCA offers flexible learning, affordable education, an industry-oriented curriculum, digital resources, and opportunities to develop technical and problem-solving skills.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                05. What career options are available after an Online BCA?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Graduates can pursue careers as software developers, web developers, IT support professionals, database administrators, system administrators, or continue with advanced studies.
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

@endsection
