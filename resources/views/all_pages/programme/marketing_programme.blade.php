@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

<link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/marketing-banner.webp') }}" alt="Programme Banner">
        {{-- <div class="banner-title">
           <p>Online MBA <br> <span>in Marketing</span></p>
            <p>The digital landscape is dynamic, and marketing has evolved into a sophisticated blend of art and science. For ambitious professionals aiming to carve a leadership role in this exciting domain, this is the right place for you. TMU offer you an Online MBA in Marketing. TMU's Centre for Distance and Online Education delivers this program that seamlessly integrates rigorous academic theory with practical, industry-relevant skills, all within a flexible learning environment that adapts to your busy life.</p>
            <p></p>
        </div> --}}
        
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-120 pd-bottom-90">

        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- REMOVED: Tab navigation structure --}}
                    {{-- <div class="course-details-nav-tab text-center"> ... </ul> </div> --}}

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>The digital landscape is dynamic, and marketing has evolved into a sophisticated blend of art
                                and science. For ambitious professionals aiming to carve a leadership role in this exciting
                                domain, this is the right place for you. TMU offer you an Online MBA in Marketing. TMU's
                                Centre for Distance and Online Education delivers this program that seamlessly integrates
                                rigorous academic theory with practical, industry-relevant skills, all within a flexible
                                learning environment that adapts to your busy life. <br> This program empowers you to master
                                the intricacies of modern marketing, enabling you to make data-driven decisions, craft
                                compelling strategies, and lead marketing teams to success in today's competitive global
                                marketplace. </p>
                            <div class="row pt-4">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible Learning
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> In-Demand Skills
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Business & Marketing Acumen Combined
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Globally Recognised Qualification
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhance Leadership Abilities
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Diverse Career Opportunities
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Practical Learning Approach
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Networking Opportunities
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Affordable & Accessible
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">
                        <img src="{{ asset('assets/img/programmes/5-reason-desktop.jpg') }}" alt=""
                            class="d-none d-lg-block w-100" />
                        <img src="{{ asset('assets/img/programmes/5-reason-mobile.jpg') }}" alt=""
                            class="d-block d-lg-none w-100" />
                    </div>

                    {{-- Section 2: Curriculum --}}
                    <section class="curriculum-section">
                        <div class="container">

                            <!-- Section Header -->
                            <div class="section-header">
                                <h2>Hands-on Curriculum <span class="highlight">Designed for Real Results</span></h2>
                                <p>Explore the comprehensive structure of our program.</p>
                                <a href="#" class="btn-download">
                                    <i class="fas fa-download"></i> Download Program Guide
                                </a>
                            </div>

                            <!-- Stats Grid -->
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
                                    <div class="stat-number">102</div>
                                    <div class="stat-label">Total Credits of Program</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon"><i class="fas fa-book-open-reader"></i></div>
                                    <div class="stat-number">22</div>
                                    <div class="stat-label">Contemporary Courses</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon"><i class="fas fa-sitemap"></i></div>
                                    <div class="stat-number">9</div>
                                    <div class="stat-label">Specializations</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon"><i class="fas fa-file-alt"></i></div>
                                    <div class="stat-number">6</div>
                                    <div class="stat-label">Discipline Specific Elective Courses</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon"><i class="fas fa-layer-group"></i></div>
                                    <div class="stat-number">2</div>
                                    <div class="stat-label">Generic Elective Courses</div>
                                </div>
                            </div>

                            <!-- Curriculum Accordion -->
                            <div class="curriculum-accordion">
                                <!-- Semester 1 -->
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        Semester 1
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                    <div class="accordion-content">
                                        <div class="course-grid">
                                            <div class="course-card">
                                                <span class="course-code">EACC506</span>
                                                <p class="course-name">Financial Reporting, Statements and Analysis</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EECO515</span>
                                                <p class="course-name">Managerial Economics</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN578</span>
                                                <p class="course-name">International Business Environment</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMKT503</span>
                                                <p class="course-name">Marketing Management</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN581</span>
                                                <p class="course-name">Organisational Behaviour and Human Resource
                                                    Dynamics</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Semester 2 -->
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        Semester 2
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                    <div class="accordion-content">
                                        <div class="course-grid">
                                            <div class="course-card">
                                                <span class="course-code">EACC506</span>
                                                <p class="course-name">Financial Reporting, Statements and Analysis</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EECO515</span>
                                                <p class="course-name">Managerial Economics</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN578</span>
                                                <p class="course-name">International Business Environment</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMKT503</span>
                                                <p class="course-name">Marketing Management</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN581</span>
                                                <p class="course-name">Organisational Behaviour and Human Resource
                                                    Dynamics</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Semester 3 -->
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        Semester 3
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                    <div class="accordion-content">
                                        <div class="course-grid">
                                            <div class="course-card">
                                                <span class="course-code">EACC506</span>
                                                <p class="course-name">Financial Reporting, Statements and Analysis</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EECO515</span>
                                                <p class="course-name">Managerial Economics</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN578</span>
                                                <p class="course-name">International Business Environment</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMKT503</span>
                                                <p class="course-name">Marketing Management</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN581</span>
                                                <p class="course-name">Organisational Behaviour and Human Resource
                                                    Dynamics</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Semester 4 -->
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        Semester 4
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                    <div class="accordion-content">
                                        <div class="course-grid">
                                            <div class="course-card">
                                                <span class="course-code">EACC506</span>
                                                <p class="course-name">Financial Reporting, Statements and Analysis</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EECO515</span>
                                                <p class="course-name">Managerial Economics</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN578</span>
                                                <p class="course-name">International Business Environment</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMKT503</span>
                                                <p class="course-name">Marketing Management</p>
                                            </div>
                                            <div class="course-card">
                                                <span class="course-code">EMGN581</span>
                                                <p class="course-name">Organisational Behaviour and Human Resource
                                                    Dynamics</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Accordion -->

                        </div> <!-- End Container -->
                    </section>



                    <!-- ========== Degree Highlight Section Start ========== -->
                    <section class="degree-highlight-section">
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
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau and is
                                                    also recognized by World Education Services (WES) for study in Canada
                                                    and USA.</p>
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
                                        alt="Sample Online MBA Degree Certificate (Landscape)"
                                        class="sample-degree-image">
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

                                {{-- Loop from 1 to 32 assuming images 1.jpg to 32.jpg exist --}}
                                @php
                                    // Define alt texts - you might want a more dynamic way to fetch these
                                    // Or just use generic ones if specific names aren't readily available
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
    24 => 'Recruiter Logo 24', // Add more specific Alts if you have them
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
                                            onerror="this.style.display='none'; this.parentElement.style.display='none';"
                                            {{-- Hide item if image fails to load --}}>
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
                                <h2>Career Paths After Online MBA <span>in Marketing</span></h2>
                                <p>An Online MBA in Marketing equips you with the strategic insights and practical skills to
                                    excel in a variety of impactful roles across diverse industries. As businesses
                                    increasingly rely on sophisticated marketing strategies to drive growth and engagement,
                                    professionals with advanced marketing qualifications are highly sought after. <br> Here
                                    are some prominent career paths you can pursue after completing your Online MBA in
                                    Marketing: </p>
                            </div>

                            <!-- Content Grid (Image + List) -->
                            <div class="career-paths-content">

                                <!-- Image Column -->
                                <div class="career-paths-image-col">
                                    {{-- Make sure this image path is correct in your public/assets folder --}}
                                    {{-- <img src="{{ asset('assets/img/career-paths-image.jpg') }}" alt="Professionals discussing data science career paths" class="career-image"> --}}
                                    <img src="https://thumbs.dreamstime.com/b/businessman-climbing-career-ladder-success-businessman-climbing-career-ladder-success-104912053.jpg"
                                        alt="Professionals discussing data science career paths" class="career-image">
                                </div>

                                <!-- List Column -->
                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Brand Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Digital Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Market Research Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Director
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Product Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Marketing Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Sales Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Advertising Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Chief Marketing Officer (CMO)
                                        </li>

                                    </ul>
                                </div>

                            </div> <!-- End Content Grid -->

                        </div> <!-- End Container -->
                    </section>
                    <!-- ========== Career Paths Section End ========== -->

                    <!-- ========== Eligibility Section Start ========== -->
                    <section class="eligibility-section">
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
                        <h2 class="section-title text-center">FAQ</h2>
                        <div class="course-details-content mt-3">


                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                01. What is an Online MBA in Marketing Programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    {{-- Ensure the 'show' class is only on the item you want open by default, or none --}}
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            An Online MBA in Marketing is a postgraduate program, typically spanning two
                                            years, designed to provide students with advanced knowledge and skills in the
                                            principles and practices of modern marketing, delivered through online learning
                                            platforms. It offers flexibility, allowing students to pursue their education
                                            while managing their professional and personal lives. The curriculum focuses on
                                            areas such as digital marketing, brand management, market research, consumer
                                            behaviour, marketing analytics, and strategic marketing.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-six" aria-expanded="false" aria-controls="f-six">
                                                02. What are the eligibility criteria for pursuing an Online MBA in
                                                Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <strong>Educational Qualification:</strong> A bachelor's degree from a
                                                    recognised university in any discipline. A minimum aggregate score of
                                                    50% is often preferred.
                                                </li>
                                                <li>
                                                    <strong>Work Experience (Optional but Preferred):</strong> While not
                                                    always mandatory, some institutions may prefer candidates with 1–2 years
                                                    of relevant professional experience.
                                                </li>
                                                <li>
                                                    <strong>Entrance Exams:</strong> Some universities might require scores
                                                    from national-level entrance exams like CAT, MAT, GMAT, or their
                                                    entrance tests. However, many online MBA programs are now waiving these
                                                    requirements.
                                                </li>
                                                <li>
                                                    <strong>English Proficiency:</strong> For international students, proof
                                                    of English language proficiency (e.g., TOEFL or IELTS) may be necessary.
                                                </li>
                                            </ul>
                                            <p>
                                                It's crucial to check the specific eligibility criteria of the university
                                                you are interested in.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- ... (rest of accordion items for faq) ... --}}
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-seven" aria-expanded="false" aria-controls="f-seven">
                                                03. What is the duration of the Online MBA in Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The typical duration of an Online MBA in Marketing is 2 years, usually divided
                                            into four semesters.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-eight" aria-expanded="false" aria-controls="f-eight">
                                                04. What is the scope of an Online MBA in Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The scope of an Online MBA in Marketing is vast and promising in today's
                                            digitally driven economy. Graduates can find opportunities across a wide range
                                            of industries, including technology, e-commerce, consumer goods, finance,
                                            healthcare, media, and consulting. The program prepares individuals for both
                                            strategic and operational roles, such as:
                                            <ul>
                                                <li>Digital Marketing Strategist</li>
                                                <li>Social Media Marketing Manager</li>
                                                <li>Content Marketing Manager</li>
                                                <li>Search Engine Optimisation (SEO) Specialist</li>
                                                <li>Customer Relationship Management (CRM) Manager</li>
                                                <li>Marketing Analytics Manager</li>
                                                <li>E-commerce Manager</li>
                                                <li>International Marketing Manager</li>
                                            </ul>
                                            <p>Furthermore, with the increasing emphasis on data-driven marketing and
                                                personalised customer experiences, professionals with an MBA in Marketing
                                                are becoming critical assets for businesses looking to achieve sustainable
                                                growth and competitive advantage.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-nine">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-nine" aria-expanded="false" aria-controls="f-nine">
                                                05. What is the salary outlook after an Online MBA in Marketing?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-nine" class="collapse" aria-labelledby="ff-nine"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>
                                                The salary after completing an Online MBA in Marketing can vary
                                                significantly based on factors such as your prior experience, the specific
                                                role, the size and location of the employer, and your acquired skills.
                                                However, here are some general salary ranges in the Indian context:
                                            </p>

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped align-middle text-center">
                                                  <thead class="table-dark">
                                                    <tr>
                                                      <th scope="col">Job Title</th>
                                                      <th scope="col">Average Salary (INR)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Marketing Executive</td>
                                                      <td>₹3–6 LPA</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Marketing Manager</td>
                                                      <td>₹7–15 LPA</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Brand Manager</td>
                                                      <td>₹8–16 LPA</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Digital Marketing Manager</td>
                                                      <td>₹8–18 LPA</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Marketing Director</td>
                                                      <td>₹15–30 LPA+</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Chief Marketing Officer (CMO)</td>
                                                      <td>₹30 LPA and above</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              

                                            <p>
                                                With increasing experience, specialised skills (e.g., in marketing
                                                analytics, digital marketing tools), and a strong track record of success,
                                                your earning potential can significantly increase. An Online MBA in
                                                Marketing can provide you with the strategic foundation and advanced skills
                                                needed to command higher salaries and accelerate your career progression in
                                                the dynamic field of marketing.
                                            </p>
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
