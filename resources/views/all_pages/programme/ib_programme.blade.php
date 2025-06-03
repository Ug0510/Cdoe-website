@extends('layouts.app')

@section('CDOE', 'Online MBA in International Business Admission 2025: Fees, Eligibility and Career')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/hr-banner.webp') }}" alt="Programme Banner" class="d-none d-lg-block">
        <img src="{{ asset('assets/img/programmes/mobile-banner.webp') }}" alt="Programme Banner" class="d-block d-md-none">
        <img src="{{ asset('assets/img/programmes/tab-banner.webp') }}" alt="Programme Banner" class="d-none d-md-block d-lg-none">
        <div class="banner-title">
            <p>Online MBA <br> <span>International Business</span></p>
            <p class="d-none d-lg-block">Enroll in an Online MBA in International Business to gain global leadership skills, master international trade, and advance your career in multinational companies.</p>
        </div>
    </div>
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h2>Excel in Global Markets with India's Best <br><span class="highlight">Online MBA in International Business</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>Online MBA in International Business is a postgraduate degree programme designed for ambitious professionals who aspire to lead and manage businesses on a global scale. This specialised MBA combines advanced business education with in-depth knowledge of international markets, global trade practices, and cross-cultural management. It is ideal for individuals seeking to enhance their leadership skills, broaden their global perspective, and accelerate their careers in international business environments.
                            </p>
                            <div class="row pt-4">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Global Business Perspective
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible Learning Schedule
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Diverse Networking Opportunities
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Access to International Job Markets
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Real-World Global Business Skills
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhanced Leadership & Strategic Thinking
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Improved Cross-Cultural Communication
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Comprehensive Curriculum
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Alumni Network Support
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Admissions Open Section --}}
                    <div class="course-section container pd-top-30 pd-bottom-30 text-center" id="admissions-open-section">
                        <div class="section-header mt-5 mb-0">
                            <h2>Online MBA in International Business <span class="highlight">Admissions Open 2025</span></h2>
                        </div>
                        <div class="course-details-content">
                            <p>Admissions open for the 2025 batch of the TMU Online MBA in International Business—a dynamic program designed to prepare professionals for global leadership. TMU Online offers a flexible, 100% online learning experience that combines academic excellence with practical insights into international markets. With admissions open, now is the perfect time to advance your career through a globally recognised MBA program that fits your schedule and empowers you to lead in the evolving world of international business.</p>
                        </div>
                    </div>



                    {{-- REMOVED: Curriculum Section was here --}}


                    <section class="degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online MBA Degree from a <span class="highlight-underline">NAAC
                                            A University</span>
                                    </h2>

                                    <div class="benefits-list">
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
                                        alt="Sample Online MBA Degree Certificate (Landscape)" class="sample-degree-image">
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
                                <h2>Career Paths After Online MBA <span>in International Business</span></h2>
                                <p>An online MBA in international business is well-suited to pursue high-level roles across a wide range of industries and global markets. This postgraduate degree provides opportunities for leadership roles in multinational corporations, international trade, finance, marketing, logistics, and other related fields. <br> Here are some prominent career paths you can pursue after completing your Online MBA in International Business :
                                </p>
                            </div>

                            <div class="career-paths-content">

                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Professionals discussing international business career paths" class="career-image">
                                </div>

                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Marketing Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Global Business Development Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Trade and Export Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Foreign Investment Analyst</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Finance Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Global Supply Chain Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Country or Regional Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Business Consultant</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Cross-Cultural Human Resources Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Project Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Global Product Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Diplomatic or Trade Officer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> International Sales Director</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Entrepreneur / Global Startup Founder</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Risk and Compliance Manager – Global Markets</li>
                                    </ul>
                                </div>

                            </div> </div> </section>
                    <section class="career-paths-section px-1 px-lg-5"> {{-- Retaining class name for consistent styling, content is eligibility --}}
                        <div class="container-fluid px-3 px-lg-5">
                            <div class="eligibility-card">
                                <div class="eligibility-content">

                                    <div class="eligibility-text">
                                        <h2 class="eligibility-title">Who Can Apply</h2>
                                        <p class="eligibility-subtitle">Eligibility Criteria</p>
                                        <ul class="eligibility-list">
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Pass in an Undergraduate (Bachelor) Program of a minimum duration of
                                                    three (3) years in any stream from a UGC Recognized University.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>A minimum aggregate of 50% or an equivalent letter/numerical
                                                    grade.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>A relaxation of 5% shall be given to SC/ST candidates.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates who are in the final semester of the Bachelor's Program are
                                                    also eligible to apply.</span>
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
                                                01. What is an Online MBA in International Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-one" class="collapse show" aria-labelledby="ff-one"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            An Online MBA in International Business is a postgraduate degree programme that combines core business management skills with specialised knowledge of global markets, international trade, and cross-cultural leadership. It is designed for professionals who want to advance their careers in multinational companies or manage business operations across borders, all through a flexible, online learning format.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-two">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                                aria-expanded="false" aria-controls="f-two">
                                                02. What is the duration of an Online MBA in International Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The typical duration of an Online MBA in International Business is 2 years, usually divided into four semesters.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-three">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                                aria-expanded="false" aria-controls="f-three">
                                                03. What is the scope of an Online MBA in International Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The scope of an Online MBA in International Business is vast, offering opportunities in multinational corporations, international trade, global marketing, finance, consulting, logistics, and supply chain management. It prepares professionals for leadership roles in the global business environment, with the flexibility to work across industries and countries.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-four">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                                aria-expanded="false" aria-controls="f-four">
                                                04. What is the salary of an MBA in International Business?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            In India, professionals with an MBA in International Business typically earn between ₹6 lakhs and ₹15 lakhs per annum, depending on experience, industry, and job role. Entry-level positions start around ₹6–8 lakhs, while senior management roles in multinational companies can earn ₹12 lakhs or more annually.
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
    {{-- REMOVED: Custom Accordion Script as curriculum section it targeted is removed. Bootstrap JS for FAQ accordion should be in main layout. --}}

@endsection