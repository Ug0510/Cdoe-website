@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

<link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="{{ asset('assets/img/programmes/finance-banner.webp') }}" alt="Programme Banner">
        {{-- <div class="banner-title">
            <p>Online MBA in <br> <span>Human Resource Management</span></p>
             <p>The digital landscape is dynamic, and marketing has evolved into a sophisticated blend of art and science. For ambitious professionals aiming to carve a leadership role in this exciting domain, this is the right place for you.</p>
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
                            <p>In today's complex and rapidly evolving global economy, financial expertise is more critical than ever. For ambitious professionals seeking to ascend to leadership roles in the financial sector, an Online MBA in Finance from Teerthanker Mahaveer University (TMU) provides a robust and flexible pathway. TMU's Centre for Distance and Online Education provides rigorous financial theory with practical application, empowering you to navigate the intricacies of financial markets and drive strategic financial decisions, all while accommodating your professional and personal commitments.</p>

                            <p>This comprehensive programme equips you with the analytical prowess, strategic thinking, and leadership skills necessary to excel in diverse financial roles and contribute significantly to organisational success.</p>
                            <div class="row pt-4">
                                <div class="col-sm-6">
                                    Empower your financial future with us as we provide you:
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible Learning
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> In-Demand Skills
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Business & Finance Expertise Combined
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Practical Learning Approach
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Globally Recognised Qualification
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Enhance Leadership Abilities
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Diverse Career Opportunities
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
                                <h2>Career Opportunities After <span>Online MBA in Finance
                                </span></h2>
                                <p>An Online MBA in Finance opens doors to a multitude of impactful and lucrative career opportunities across various sectors. With businesses increasingly relying on sophisticated financial strategies for growth and stability, professionals with advanced financial qualifications are in high demand.</p>
                                <p>Here are several prominent career paths you can pursue after earning your Online MBA in Finance:</p>
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
                                            <i class="fas fa-check-circle"></i> Financial Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Investment Banker
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Portfolio Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Corporate Finance Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Risk Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Hedge Fund Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Financial Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Treasury Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Credit Analyst
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Chief Financial Officer (CFO)
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
                            {{-- Make sure accordion IDs are unique --}}
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                01.What is an Online MBA in Finance Programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    {{-- Ensure the 'show' class is only on the item you want open by default, or none --}}
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            An Online MBA in Finance is a postgraduate degree programme, typically lasting two years, designed to provide students with advanced knowledge and skills in the principles and practices of finance, delivered through online learning platforms. It offers flexibility, allowing students to balance their studies with their professional and personal lives. The curriculum typically covers areas such as financial management, investments, financial markets, corporate valuation, and international finance.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-six" aria-expanded="false" aria-controls="f-six">
                                                02. What are the eligibility criteria for pursuing an Online MBA in Finance?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>The general eligibility criteria for an Online MBA in Finance programme usually include:</p>
                                            <ul>
                                                <li>Educational Qualification: A bachelor's degree from a recognised university in any discipline. A minimum aggregate score of 50% is often preferred.</li>
                                                <li>Work Experience (Optional but Preferred): While not always mandatory, some institutions may prefer candidates with 1-2 years of relevant professional experience, particularly in finance-related roles.</li>
                                                <li>Entrance Exams: Some universities might require scores from national-level entrance exams like CAT, MAT, GMAT, or their entrance tests. However, many online MBA programs are now waiving these requirements.</li>
                                                <li>English Proficiency: For international students, proof of English language proficiency (e.g., TOEFL or IELTS) may be necessary.</li>
                                            </ul>
                                            <p>It is essential to verify the specific eligibility requirements of the institution you are interested in.</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- ... (rest of accordion items for faq) ... --}}
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-seven" aria-expanded="false" aria-controls="f-seven">
                                                03. What is the duration of the Online MBA in Finance?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The typical duration of an Online MBA in Finance is 2 years, generally structured into four semesters.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-eight" aria-expanded="false" aria-controls="f-eight">
                                                04. What is the scope of an Online MBA in Finance?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                           <p>The scope of an Online MBA in Finance is extensive and highly relevant in today's globalised economy. Graduates can pursue careers across a wide array of industries, including banking, investment management, insurance, corporate finance, consulting, and financial technology (FinTech). The program equips individuals for both analytical and strategic roles, such as:</p>
                                            <ul>
                                                <li>Financial Planner</li>
                                                <li>Equity Analyst</li>
                                                <li>Mergers and Acquisitions Analyst</li>
                                                <li>Fixed Income Analyst</li>
                                                <li>Financial Controller</li>
                                                <li>International Finance Manager</li>
                                                <li>Quantitative Analyst (Quant)</li>
                                                <li>FinTech Specialist</li>
                                            </ul>
                                            <p>Moreover, with the increasing sophistication of financial markets and the growing importance of data-driven financial decision-making, professionals with an MBA in Finance are becoming increasingly valuable assets for organizations seeking sustainable growth and financial stability.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-nine">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-nine" aria-expanded="false" aria-controls="f-nine">
                                                05. Is an MBA worth it for finance?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-nine" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            High-level finance positions require significant expertise and specific technical skills. One way to gain those skills and obtain the qualifications you need for a well-paying position in this field is to earn a Master of Business Administration (MBA) with a specialisation in finance.
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
