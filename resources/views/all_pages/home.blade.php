@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')


    <style>
        /* Recruiter Section */
        /* --- Recruiters Section --- */
        .recruiters-section {
            padding: 60px 0 80px 0;
            /* Add spacing above and below */
            background-color: #fff;
            /* Optional: Set a background if needed, or keep body default */
        }

        .recruiter-title-container {
            text-align: center;
            margin-bottom: 50px;
            /* Space below title block */
        }

        .recruiter-title {
            font-size: 2.2rem;
            /* Adjust size as needed */
            font-weight: 600;
            color: var(--text-color);
            /* Use variable from accordion section if defined */
            margin-bottom: 15px;
            /* Space between text and underline */
            line-height: 1.4;
        }

        .title-underline {
            display: block;
            /* Make it a block element */
            width: 70px;
            /* Width of the underline */
            height: 4px;
            /* Thickness of the underline */
            background-color: var(--primary-color);
            /* Use orange color variable */
            margin: 0 auto;
            /* Center the underline */
            border-radius: 2px;
            /* Slightly rounded ends */
        }

        .recruiter-logo-grid {
            display: grid;
            /* Responsive Grid: Adjust minmax for desired logo size */
            /* Creates as many columns as fit, each at least 160px wide */
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 25px;
            /* Space between logo items */
            align-items: center;
            /* Align items vertically if rows have different heights (less likely here) */
        }

        .recruiter-item {
            background-color: var(--card-bg, #FFFFFF);
            /* Use card background variable or default white */
            padding: 25px 20px;
            /* Padding inside the card */
            border-radius: var(--border-radius, 10px);
            /* Use border-radius variable or default */
            border: 1px solid var(--border-color, #E9ECEF);
            /* Use border color variable or default */
            box-shadow: var(--shadow-light, 0 4px 15px rgba(0, 0, 0, 0.05));
            /* Use shadow variable or default */
            display: flex;
            /* Use flexbox to center logo inside */
            align-items: center;
            justify-content: center;
            min-height: 100px;
            /* Ensure a minimum height for visual consistency */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth hover effect */
        }

        .recruiter-item:hover {
            transform: translateY(-5px);
            /* Lift effect on hover */
            box-shadow: var(--shadow-medium, 0 8px 25px rgba(0, 0, 0, 0.08));
            /* Stronger shadow on hover */
        }

        .recruiter-logo {
            display: block;
            /* Remove extra space below image */
            max-width: 100%;
            /* Prevent logo from exceeding card width */
            /* --- Key for uniform sizing --- */
            max-height: 55px;
            /* Set a maximum height for all logos */
            height: auto;
            /* Maintain aspect ratio while respecting max-height */
            object-fit: contain;
            /* Scale down image to fit within bounds without cropping/stretching */
        }

        /* Responsive adjustments for Recruiters section if needed */
        @media (max-width: 768px) {
            .recruiter-title {
                font-size: 1.8rem;
            }

            .recruiter-logo-grid {
                /* Adjust minmax if needed for smaller screens */
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 20px;
            }

            .recruiter-item {
                min-height: 90px;
                padding: 20px 15px;
            }

            .recruiter-logo {
                max-height: 50px;
                /* Slightly smaller max-height on mobile */
            }
        }

        @media (max-width: 480px) {
            .recruiter-title {
                font-size: 1.6rem;
            }

            .recruiter-logo-grid {
                /* Go to 2 columns on very small screens */
                grid-template-columns: repeat(3, 1fr);
                gap: 15px;
            }

            .recruiter-item {
                min-height: 80px;
                padding: 10px;
            }

            .recruiter-logo {
                max-height: 45px;
            }
        }

        /* Recruiter Section CSS End */
    </style>
    <style>
        /* Container */
        .fresh-faqs {
            width: 100%;
        }

        /* Top tab row */
        .fresh-faqs-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 6px;
            margin-bottom: 18px;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
        }

        .fresh-faqs-tabs::-webkit-scrollbar {
            height: 6px;
        }

        .fresh-faqs-tabs::-webkit-scrollbar-thumb {
            background: #d0d7de;
            border-radius: 6px;
        }

        /* Tab buttons */
        .fresh-faqs-tab-btn {
            border: 1px solid #d9d9d9;
            background: #fff;
            color: #111;
            border-radius: 999px;
            padding: 8px 16px;
            font-weight: 600;
            white-space: nowrap;
            transition: all .2s ease;
            cursor: pointer;
            flex: 0 0 auto;
            /* don't shrink in scroll row */
        }

        .fresh-faqs-tab-btn:hover {
            border-color: #003366;
            color: #003366;
        }

        .fresh-faqs-tab-btn.active {
            background: #0d3b66;
            color: #fff;
            border-color: #0d3b66;
        }

        /* Content */
        .fresh-faqs-content .fresh-faqs-tab-pane {
            display: none;
        }

        .fresh-faqs-content .fresh-faqs-tab-pane.active {
            display: block;
        }

        /* Nice spacing on large screens */
        @media (min-width: 992px) {
            .fresh-faqs-tabs {
                justify-content: center;
                gap: 12px;
                padding: 8px 0;
            }

            .fresh-faqs-tab-btn {
                padding: 10px 20px;
            }
        }
    </style>

    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active"></div>
            <div class="carousel-item"></div>
            <div class="carousel-item"></div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="/" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>



    {{-- accreditation area start --}}
    <img src="{{ asset('/assets/img/other/accred1.png') }}" alt="" class="w-75 mx-auto my-4 d-none d-lg-block">


    <!-- course area start -->
    <section class="specialized-courses py-5">
        <div class="container">

            <!-- Section Header -->
            <div class="section-title text-center mb-5">
                <span class="pre-title">Explore Our Specialisations</span>
                <h1 class="title">MBA Online</h1>
            </div>

            <!--
                                                                                                                            DESKTOP & TABLET CAROUSEL VIEW
                                                                                                                            (Visible on screens > 991px)
                                                                                                                        -->
            <div class="courses-carousel-view">
                <!-- Swiper -->
                <div class="swiper specializedCoursesSwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1: Artificial Intelligence -->
                        <div class="swiper-slide d-flex align-items-stretch">
                            <div class="course-card-fc">
                                <div class="course-card-fc-img-container">
                                    <img src="{{ asset('/assets/img/programmes/m1.webp') }}"
                                        alt="Online MBA in Finance Specialisation" class="course-card-fc-img" />
                                </div>
                                <div class="course-card-fc-body">
                                    <h3 class="course-card-fc-title">MBA in Finance</h3>
                                    <p class="course-card-fc-text">Gain advanced knowledge in financial management,
                                        investmentMore actions strategies, and corporate finance to excel in the dynamic
                                        world of finance.</p>
                                    <div class="course-card-fc-meta">
                                        <span class="duration-tag-fc">Duration: <strong>2 Years</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Data Analytics -->
                        <div class="swiper-slide d-flex align-items-stretch">
                            <div class="course-card-fc">
                                <div class="course-card-fc-img-container">
                                    <img src="{{ asset('/assets/img/programmes/m2.webp') }}"
                                        alt="Online MBA in Human Resource Management Specialisation"
                                        class="course-card-fc-img" />
                                </div>
                                <div class="course-card-fc-body">
                                    <h3 class="course-card-fc-title">MBA in Human Resource Management</h3>
                                    <p class="course-card-fc-text">Equip yourself with essential skills in talent
                                        acquisition,More actions employee relations, performance management, and strategic
                                        HR planning.</p>
                                    <div class="course-card-fc-meta">
                                        <span class="duration-tag-fc">Duration: <strong>2 Years</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Cyber Security -->
                        <div class="swiper-slide d-flex align-items-stretch">
                            <div class="course-card-fc">
                                <div class="course-card-fc-img-container">
                                    <img src="{{ asset('/assets/img/programmes/m3.webp') }}"
                                        alt="Online MBA in Marketing Specialisation" class="course-card-fc-img" />
                                </div>
                                <div class="course-card-fc-body">
                                    <h3 class="course-card-fc-title">MBA in Marketing</h3>
                                    <p class="course-card-fc-text">Master modern marketing strategies, digital
                                        marketing,More actions consumer behavior, and brand management to lead in a
                                        competitive global market.</p>
                                    <div class="course-card-fc-meta">
                                        <span class="duration-tag-fc">Duration: <strong>2 Years</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4: Full Stack -->
                        <div class="swiper-slide d-flex align-items-stretch">
                            <div class="course-card-fc">
                                <div class="course-card-fc-img-container">
                                    <img src="{{ asset('/assets/img/programmes/m4.jpg') }}"
                                        alt="MBA in International Business" class="course-card-fc-img" />
                                </div>
                                <div class="course-card-fc-body">
                                    <h3 class="course-card-fc-title">MBA in International Business</h3>
                                    <p class="course-card-fc-text">Gain global leadership skills, master international
                                        trade, and advance your career in multinational companies.</p>
                                    <div class="course-card-fc-meta">
                                        <span class="duration-tag-fc">Duration: <strong>2 Years</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Custom Navigation Buttons - Now positioned correctly -->
                <div class="swiper-nav-wrapper">
                    <div class="swiper-button-prev swiper-button-prev-custom"></div>
                    <div class="swiper-button-next swiper-button-next-custom"></div>
                </div>
            </div>


            <!--
                                                                                                                            MOBILE LIST VIEW
                                                                                                                            (Visible on screens <= 991px)
                                                                                                                        -->
            <div class="courses-list-view">

                <!-- Item 1: Artificial Intelligence -->
                <a href="{{ route('finance.programme') }}" class="course-list-item">
                    <div class="course-list-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="course-list-item-content">
                        <h3 class="course-list-item-title">MBA in Finance</h3>
                        <p class="course-list-item-desc">Gain advanced knowledge in financial management, investmentAdd
                            commentMore actions
                            strategies, and corporate finance to excel in the dynamic
                            world of finance.</p>
                    </div>
                </a>

                <!-- Item 2: Data Analytics -->
                <a href="{{ route('hr.programme') }}" class="course-list-item">
                    <div class="course-list-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="course-list-item-content">
                        <h3 class="course-list-item-title">MBA in Human Resource Management</h3>
                        <p class="course-list-item-desc">Equip yourself with essential skills in talent acquisition,Add
                            commentMore actions
                            employee relations, performance management, and strategic HR
                            planning.</p>
                    </div>
                </a>

                <!-- Item 3: Cyber Security -->
                <a href="{{ route('marketing.programme') }}" class="course-list-item">
                    <div class="course-list-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="course-list-item-content">
                        <h3 class="course-list-item-title">MBA in Marketing</h3>
                        <p class="course-list-item-desc">Master modern marketing strategies, digital marketing,Add
                            commentMore actions
                            consumer behavior, and brand management to lead in a
                            competitive global market.</p>
                    </div>
                </a>

                <!-- Item 4: Full Stack -->
                <a href="{{ route('ib.programme') }}" class="course-list-item">
                    <div class="course-list-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="course-list-item-content">
                        <h3 class="course-list-item-title">MBA in International Business</h3>
                        <p class="course-list-item-desc">Gain global leadership skills, master international trade, and
                            advance your career in multinational companies.</p>
                    </div>
                </a>


            </div>

        </div>
    </section>
    <!-- course area End -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper('.specializedCoursesSwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next-custom',
                    prevEl: '.swiper-button-prev-custom',
                },
            });
        });
    </script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11">
                <div class="section-title style-white text-center mt-4">
                    <h2 class="title">Convocation & Events Gallery</h2>
                </div>
            </div>
        </div>

        <div class="custom-gallery">
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/1.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(0)">
                <div class="custom-caption">Dr APJ Abdul Kalam at the 1st Convocation 2012</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/2.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(1)">
                <div class="custom-caption">2012 Graduates Celebrating Success</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/3.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(2)">
                <div class="custom-caption">Shri Akhilesh Yadav with Shri Suresh Jain at the 2nd Convocation</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/4.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(3)">
                <div class="custom-caption">Graduates of 2023 Mark a Milestone</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/5.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(4)">
                <div class="custom-caption">Distinguished Guests at Convocation 2024</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/6.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(5)">
                <div class="custom-caption">Students at the 3rd Convocation Ceremony</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/7.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(6)">
                <div class="custom-caption">Dinesh Sharma Addresses Graduates at Convocation 2021</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/8.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(7)">
                <div class="custom-caption">Guru Randhawa Performs Live at Rock-on 2023</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/9.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(8)">
                <div class="custom-caption">TMU’s 2023 Graduates</div>
            </div>
            <div class="custom-gallery-item">
                <img src="{{ asset('/assets/img/gallery/10.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(9)">
                <div class="custom-caption">A Glimpse into Convocation 2024 Celebrations</div>
            </div>
            <div class="custom-gallery-item d-none d-sm-block">
                <img src="{{ asset('/assets/img/gallery/11.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(10)">
                <div class="custom-caption">Students Enjoying the Rock-on Fest</div>
            </div>
            <div class="custom-gallery-item d-none d-sm-block">
                <img src="{{ asset('/assets/img/gallery/12.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(11)">
                <div class="custom-caption">Dr Kalam Graces Convocation 2012 with Wisdom</div>
            </div>
            <div class="custom-gallery-item d-none d-sm-block">
                <img src="{{ asset('/assets/img/gallery/13.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(12)">
                <div class="custom-caption">Shaaz Sets the Stage Ablaze at Rock-on 2023</div>
            </div>
            <div class="custom-gallery-item d-none d-sm-block">
                <img src="{{ asset('/assets/img/gallery/14.webp') }}" alt="Image 2" loading="lazy"
                    onclick="openLightbox(13)">
                <div class="custom-caption">Memorable Moments from Convocation 2024</div>
            </div>
            <div class="custom-gallery-item d-none d-sm-block">
                <img src="{{ asset('/assets/img/gallery/15.webp') }}" alt="Image 1" loading="lazy"
                    onclick="openLightbox(14)">
                <div class="custom-caption">Gurudev Sri Sri Ravi Shankar at the Special Convocation 2024</div>
            </div>
        </div>


        <!-- Lightbox -->
        <div id="custom-lightbox" onclick="closeLightbox(event)">
            <span class="custom-close-btn" onclick="closeLightbox(event)">&#10006;</span>
            <div class="custom-lightbox-content">
                <button class="custom-prev" onclick="prevImage()">&#10094;</button>
                <img id="custom-lightbox-img" src="" alt="Selected Image">
                <button class="custom-next" onclick="nextImage()">&#10095;</button>
                <div id="custom-lightbox-caption" class="custom-lightbox-caption" contenteditable="true"></div>
            </div>
        </div>
    </div>


    <div class="container">
        <img src="{{ asset('/assets/img/5-reason.webp') }}" alt="" class="d-none d-lg-block">
        <img src="{{ asset('/assets/img/5-reason-mobile.webp') }}" alt="" class="d-block d-lg-none">
    </div>





    <!-- work area start -->
    <div class="work-area">
        <div class="container">
            <div class="section-title style-white text-center mb-4 mb-md-5 mt-3 mt-lg-5">
                <h2 class="title">Why TMU Online?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-1.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>Online Sessions by Industry Experts</h5>
                            <p>Learn directly from top industry professionals who share real-world insights, latest
                                trends, and business strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-2.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>Internship Opportunities</h5>
                            <p>Gain practical exposure through internships, helping you apply theoretical knowledge and
                                enhance your employability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-3.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>Flexible Examination Options</h5>
                            <p>Appear for exams at your convenience with flexible scheduling and remote assessment
                                options.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-4.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>User-Friendly LMS</h5>
                            <p>Access lectures, assignments, and study materials anytime through an intuitive and
                                interactive platform.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-5.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>24/7 Access to Digital Library</h5>
                            <p>Explore a vast collection of e-books, journals, and research materials anytime, anywhere.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-6.svg') }}" loading="lazy" class="why-icon"
                                alt="img">
                        </div>
                        <div class="details">
                            <h5>Budget-Friendly Fee Structure</h5>
                            <p>Get high-quality education at an affordable cost with flexible payment options.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work area end -->


    <!-- Degree Section -->
    <!-- Degree Showcase Section -->
    <section class="degree-showcase py-5 position-relative overflow-hidden">
        <!-- Gradient Blobs -->
        <div class="blob blob1"></div>
        <div class="blob blob2"></div>
        <div class="blob blob3"></div>

        <div class="container text-center position-relative">
            <p class="university-name mb-4"><span>Proudly Earned at</span> Teerthanker Mahaveer University</p>

            <div class="degree-card shadow mx-auto">
                <img src="{{ asset('/assets/img/degree.webp') }}" loading="lazy" alt="TMU Degree Certificate"
                    class="img-fluid" />
            </div>


            <!-- Optional CTA -->
            {{-- <a href="#" class="btn btn-dark mt-3 px-4 ">Explore Our MBA Program</a> --}}
        </div>
    </section>







    <section class="recruiters-section">
        <div class="container">

            <!-- Section Title -->
            <div class="recruiter-title-container">
                <div class="section-title style-white text-center mb-4 mb-md-5 mt-3 mt-lg-5">
                    <h2 class="title">Teerthanker Mahaveer University Online, <br><span class="highlight">Opens Doors
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
                        <img src="{{ asset('assets/img/recruiters/' . $i . '.jpg') }}" loading="lazy"
                            alt="{{ $altTexts[$i] ?? 'Recruiter Logo ' . $i }}" class="recruiter-logo"
                            onerror="this.style.display='none'; this.parentElement.style.display='none';"
                            {{-- Hide item if image fails to load --}}>
                    </div>
                @endfor

            </div> <!-- End Recruiter Logos Grid -->

        </div> <!-- End Container -->
    </section>
    <!-- ========== Recruiters Section End ========== -->


    <!-- ============================ Reel Showcase Section Start ============================ -->
    <section class="tmu-reel-showcase py-5 position-relative">
        <div class="tmu-reel-background-element tmu-reel-bg-el-1"></div>
        <div class="tmu-reel-background-element tmu-reel-bg-el-2"></div>

        <div class="container position-relative">
            {{-- <h2 class="tmu-reel-showcase__title text-center mb-5">Why TMU Online? Watch & Discover</h2> --}}

            <div class="tmu-reel-swiper-container position-relative">

                <div class="swiper tmu-reel-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="tmu-reel-item">
                                <iframe class="tmu-reel-video" src="https://www.instagram.com/reel/DHtGgTsJLRi/embed/"
                                    frameborder="0" scrolling="no" allowtransparency="true" allowfullscreen="true"
                                    loading="lazy" title="Instagram Reel 1">
                                </iframe>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tmu-reel-item">
                                <iframe class="tmu-reel-video" src="https://www.instagram.com/reel/DHn57DfSTzI/embed/"
                                    frameborder="0" scrolling="no" allowtransparency="true" allowfullscreen="true"
                                    loading="lazy" title="Instagram Reel 2">
                                </iframe>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tmu-reel-item">
                                <iframe class="tmu-reel-video" src="https://www.instagram.com/reel/DCT49FeOt6x/embed/"
                                    frameborder="0" scrolling="no" allowtransparency="true" allowfullscreen="true"
                                    loading="lazy" title="Instagram Reel 3">
                                </iframe>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tmu-reel-item">
                                <iframe class="tmu-reel-video" src="https://www.instagram.com/reel/DCJR2JQIgOX/embed/"
                                    frameborder="0" scrolling="no" allowtransparency="true" allowfullscreen="true"
                                    loading="lazy" title="Instagram Reel 4">
                                </iframe>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tmu-reel-item">
                                <iframe class="tmu-reel-video" src="https://www.instagram.com/reel/DCEuwZbJT2H/embed/"
                                    frameborder="0" scrolling="no" allowtransparency="true" allowfullscreen="true"
                                    loading="lazy" title="Instagram Reel 5">
                                </iframe>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="tmu-swiper-nav tmu-swiper-button-prev">
                    <i class="bi bi-chevron-left"></i>
                </div>
                <div class="tmu-swiper-nav tmu-swiper-button-next">
                    <i class="bi bi-chevron-right"></i>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Reel Showcase Section End ============================ -->





    <!-- faq area start -->
    <div class="faq-area mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title text-center mb-2 mb-lg-4">FAQs</h2>
                </div>

                {{-- <div class="col-12 mt-5 mt-lg-0">
                    <div id="accordion" class="accordion-area">
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-one">
                                <h5 class="mb-0">
                                    <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                        aria-expanded="true" aria-controls="f-one">
                                        Is TMU CDOE UGC-approved?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-one" class="show collapse" aria-labelledby="ff-one" data-parent="#accordion">
                                <div class="card-body">
                                    Yes. All distance and online education programmes offered by TMU’s CDOE are recognized
                                    and approved by the University Grants Commission (UGC) and other relevant regulatory
                                    bodies, ensuring validity and credibility.</div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-two">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                        aria-expanded="true" aria-controls="f-two">
                                        02. What is the eligibility for an Online MBA?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#accordion">
                                <div class="card-body">
                                    A bachelor’s degree in any discipline from a recognized university is required.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-three">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                        aria-expanded="true" aria-controls="f-three">
                                        03. How can I apply for admission to TMU CDOE?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-three" class="collapse" aria-labelledby="ff-three" data-parent="#accordion">
                                <div class="card-body">
                                    You can apply online via the official TMU CDOE website <a
                                        href="https://www.cdoe.tmu.ac.in/">https://www.cdoe.tmu.ac.in/</a>. The process
                                    involves filling out the application form, uploading the required documents, and paying
                                    the application fee online.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-four">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                        aria-expanded="true" aria-controls="f-four">
                                        04. Can I pursue an Online MBA while working?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-four" class="collapse" aria-labelledby="ff-four" data-parent="#accordion">
                                <div class="card-body">
                                    Yes, the programme is designed for working professionals and offers flexible learning
                                    options.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-five">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-five"
                                        aria-expanded="true" aria-controls="f-five">
                                        05. What specialisations does TMU Online MBA offer?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-five" class="collapse" aria-labelledby="ff-five" data-parent="#accordion">
                                <div class="card-body">
                                    TMU CDOE offers specialisations in marketing, finance, and human resources management.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- <style>
                    .fresh-faqs {
                        gap: 20px;
                        /* space between tabs and content */
                    }

                    .fresh-faqs-tabs {
                        min-width: 180px;
                    }

                    .fresh-faqs-tabs .fresh-faqs-tab-btn {
                        border: 1px solid #ccc;
                        background: #fff;
                        color: #000;
                        border-radius: 50px;
                        padding: 8px 18px;
                        font-weight: 600;
                        margin-bottom: 10px;
                        transition: all 0.2s ease;
                        cursor: pointer;
                    }

                    .fresh-faqs-tabs .fresh-faqs-tab-btn:hover {
                        border-color: #003366;
                        color: #003366;
                    }

                    .fresh-faqs-tabs .fresh-faqs-tab-btn.active {
                        background: #0d3b66;
                        color: #fff;
                        border-color: #0d3b66;
                    }

                    .fresh-faqs-content .fresh-faqs-tab-pane {
                        display: none;
                    }

                    .fresh-faqs-content .fresh-faqs-tab-pane.active {
                        display: block;
                    }
                </style>

                <style>
                    /* FAQ container */
                    .fresh-faqs {
                        display: flex;
                        align-items: flex-start;
                        gap: 24px;
                        /* space between tabs & content */
                        width: 100%;
                        /* make it responsive */
                    }

                    /* Left Tabs */
                    .fresh-faqs-tabs {
                        flex: 0 0 220px;
                        /* fixed width for tabs */
                    }

                    /* Tab Buttons */
                    .fresh-faqs-tab-btn {
                        border: 1px solid #ccc;
                        background: #fff;
                        color: #000;
                        border-radius: 50px;
                        padding: 10px 20px;
                        font-weight: 600;
                        margin-bottom: 12px;
                        transition: all 0.2s ease;
                        cursor: pointer;
                        text-align: left;
                        width: 100%;
                        /* full width inside tabs column */
                    }

                    .fresh-faqs-tab-btn:hover {
                        border-color: #003366;
                        color: #003366;
                    }

                    .fresh-faqs-tab-btn.active {
                        background: #0d3b66;
                        color: #fff;
                        border-color: #0d3b66;
                    }

                    /* Right Content */
                    .fresh-faqs-content {
                        flex: 1;
                        /* take all remaining width */
                        min-width: 0;
                        /* prevents flexbox overflow issues */
                        max-width: calc(100% - 220px - 24px);
                        /* stays fixed even when toggled */
                    }

                    /* Accordion inside content */
                    .fresh-faqs-content .accordion {
                        width: 100%;
                        /* force full width */
                        max-width: 100%;
                        /* prevent auto-shrinking */
                    }
                </style>

                <div class="fresh-faqs d-flex">
                    <!-- Left Tabs -->
                    <div class="fresh-faqs-tabs d-flex flex-column">
                        <button class="fresh-faqs-tab-btn active" data-target="#fresh-faqs-general">General</button>
                        <button class="fresh-faqs-tab-btn" data-target="#fresh-faqs-admission">Admission</button>
                        <button class="fresh-faqs-tab-btn" data-target="#fresh-faqs-academics">Academics</button>

                    </div>

                    <!-- Right Content -->
                    <div class="fresh-faqs-content flex-grow-1 ps-4">
                        <div class="fresh-faqs-tab-pane active" id="fresh-faqs-general">
                            <div class="col-12 mt-5 mt-lg-0">
                                <div id="accordion" class="accordion-area">
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-one">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                                    aria-expanded="true" aria-controls="f-one">
                                                    Q1. Is there any distinction between Online and On-Campus Degrees?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-one" class="show collapse" aria-labelledby="ff-one"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                No, both formats offer the same level of academic rigor, recognition, and
                                                credibility. TMU Online degrees are equivalent to traditional on-campus
                                                degrees in every respect.</div>
                                        </div>
                                    </div>
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-two">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-two" aria-expanded="true" aria-controls="f-two">
                                                    Q2. How are the courses delivered?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-two" class="collapse" aria-labelledby="ff-two"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Programs are conducted through a comprehensive digital platform featuring
                                                recorded lectures, live interactive classes, discussion forums, assignments,
                                                quizzes, and proctored final exams.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-three">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-three" aria-expanded="true" aria-controls="f-three">
                                                    Q3. Is Placement Assistance available?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, TMU will provides virtual career support including resume-building
                                                workshops, industry-led webinars, career counselling, and placement
                                                opportunities through its T&D department.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-four">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-four" aria-expanded="true" aria-controls="f-four">
                                                    Q4. Can International students apply?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Definitely. TMU Online welcomes learners from around the world, provided
                                                they meet the eligibility requirements and have access to the necessary
                                                digital tools.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-five">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-five" aria-expanded="true" aria-controls="f-five">
                                                    Q5. What programs are offered through TMU Online?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                TMU Online offers a range of Undergraduate (UG) and Postgraduate (PG) degree
                                                programs across various disciplines
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-six">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-six" aria-expanded="true" aria-controls="f-six">
                                                    Q6. Are Online Degrees accepted by employers?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, online degrees from accredited institutions are widely accepted by
                                                employers, especially when they focus on relevant skills and industry needs.
                                                TMU Online degrees are UGC-entitled and recognized at par with traditional
                                                degrees.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="fresh-faqs-tab-pane" id="fresh-faqs-admission">
                            <div class="col-12 mt-5 mt-lg-0">
                                <div id="accordion" class="accordion-area">
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-one">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                                    aria-expanded="true" aria-controls="f-one">
                                                    Q1. What are the Eligibility Requirements?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-one" class="show collapse" aria-labelledby="ff-one"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Eligibility depends on the program level:<br>
                                                <b>Undergraduate Programs:</b><br>
                                                BBA: Completion of 10+2 with a Minimum of 50% Marks.<br>
                                                BA: Completion of 10+2 from a Recognized Board.<br><br>
                                                <b>Postgraduate Programs:</b><br>
                                                MBA: A Bachelor’s Degree from a Recognized University is required.<br><br>
                                                All Applicants must submit Academic Certificates and a Valid
                                                Government-issued ID.
                                                Some programs may have additional requirements or assessments.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-two">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-two" aria-expanded="true" aria-controls="f-two">
                                                    Q2. What documents are needed for Admission?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-two" class="collapse" aria-labelledby="ff-two"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Here’s a breakdown of required documents:<br><br>
                                                <b>Domestic Students:</b><br>
                                                - 10th, 12th Mark sheet and Passing Certificates<br>
                                                - Bachelor’s Degree Certificate with Marks sheets<br>
                                                - Government-issued ID (Aadhaar, PAN, Passport)<br><br>
                                                <b>International Students:</b><br>
                                                - O’Level and A’Level or Equivalent Qualifications<br>
                                                - Bachelor’s Degree Certificate with Marks sheets<br>
                                                - Passport Copy (Mandatory)<br><br>
                                                Once documents are ready, the admissions team will assist you through the
                                                process.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-three">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-three" aria-expanded="true" aria-controls="f-three">
                                                    Q3. Is there an Entrance Exam?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                No entrance test is required. Admission is based on eligibility criteria and
                                                document verification.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-four">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-four" aria-expanded="true" aria-controls="f-four">
                                                    Q4. Are EMI options available for Tuition Fees?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, Flexible EMI plans are available at affordable rates. Visit the program
                                                page or speak with a counsellor for more details.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-five">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-five" aria-expanded="true" aria-controls="f-five">
                                                    Q5. Is there a Refund Policy?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, refunds are available in accordance with UGC guidelines. Requests must
                                                be made within the specified timeframe, and a processing fee may apply.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fresh-faqs-tab-pane" id="fresh-faqs-academics">
                            <div class="col-12 mt-5 mt-lg-0">
                                <div id="accordion" class="accordion-area">

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-one">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                                    aria-expanded="true" aria-controls="f-one">
                                                    Q1. How are classes get conducted?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-one" class="show collapse" aria-labelledby="ff-one"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Classes include live sessions and recorded lectures accessible via the
                                                Learning Management System (LMS).
                                                Students can participate in group discussions and interactive activities.
                                                All live sessions are recorded for later viewing.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-two">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-two" aria-expanded="true" aria-controls="f-two">
                                                    Q2. Where can I find study materials?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-two" class="collapse" aria-labelledby="ff-two"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                All learning resources—such as lecture notes, e-books, videos, case studies,
                                                and quizzes—are available on the LMS for self-paced access.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-three">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-three" aria-expanded="true" aria-controls="f-three">
                                                    Q3. How are exams administered?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Exams are conducted online with secure proctoring. The process includes:<br>
                                                i) Advance Notification of exam schedules via Email/SMS and LMS.<br>
                                                ii) Online proctored exams taken from home using a secure browser.<br>
                                                iii) Evaluation and Result Declaration.<br><br>
                                                Mock exams are provided to help students familiarize themselves with the
                                                system.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-four">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-four" aria-expanded="true" aria-controls="f-four">
                                                    Q4. How do students access industry insights and expert sessions?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                TMU Online hosts Industry Interaction webinars featuring entrepreneurs, tech
                                                leaders,
                                                marketing professionals, and subject experts at frequent intervals.
                                                These sessions offer valuable insights and networking opportunities.
                                                Recordings are available on the student portal for later access.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-five">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-five" aria-expanded="true" aria-controls="f-five">
                                                    Q5. Will faculty be available for doubt resolution?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, students can interact with faculty during live Q&A sessions,
                                                discussion boards, and scheduled one-on-one mentoring.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-six">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-six" aria-expanded="true" aria-controls="f-six">
                                                    Q6. Does TMU Online offer career support?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Yes. TMU Online provides career services including resume reviews,
                                                interview preparation, and access to job opportunities through
                                                recruitment drives and career platforms.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="ff-seven">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#f-seven" aria-expanded="true" aria-controls="f-seven">
                                                    Q7. Where can I view the academic calendar?
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                The academic calendar is available on the LMS and includes key dates
                                                for assignments, exams, and other academic milestones.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <script>
                    document.querySelectorAll('.fresh-faqs-tabs .fresh-faqs-tab-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            // remove active from all
                            document.querySelectorAll('.fresh-faqs-tabs .fresh-faqs-tab-btn').forEach(btn => btn
                                .classList.remove('active'));
                            document.querySelectorAll('.fresh-faqs-content .fresh-faqs-tab-pane').forEach(pane => pane
                                .classList.remove('active'));

                            // activate clicked
                            button.classList.add('active');
                            const target = document.querySelector(button.getAttribute('data-target'));
                            if (target) target.classList.add('active');
                        });
                    });
                </script> --}}


                <div class="fresh-faqs">
                    <!-- TOP TABS -->
                    <div class="fresh-faqs-tabs d-flex justify-content-center align-items-center gap-2 flex-wrap">
                        <button class="fresh-faqs-tab-btn active" data-target="#fresh-faqs-general">General</button>
                        <button class="fresh-faqs-tab-btn" data-target="#fresh-faqs-admission">Admission</button>
                        <button class="fresh-faqs-tab-btn" data-target="#fresh-faqs-academics">Academics</button>
                    </div>

                    <!-- CONTENT -->
                    <div class="fresh-faqs-content">
                        <!-- ================= General ================= -->
                        <div class="fresh-faqs-tab-pane active" id="fresh-faqs-general">
                            <div class="col-12">
                                <div id="accordion-general" class="accordion-area">
                                    <!-- G1 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h1">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c1" aria-expanded="true" aria-controls="gen-c1">
                                                    Q1. Is there any distinction between Online and On-Campus Degrees? <i
                                                        class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c1" class="collapse show" aria-labelledby="gen-h1"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                No, both formats offer the same level of academic rigor, recognition, and
                                                credibility. TMU Online
                                                degrees are equivalent to traditional on-campus degrees in every respect.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G2 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h2">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c2" aria-expanded="false"
                                                    aria-controls="gen-c2">
                                                    Q2. How are the courses delivered? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c2" class="collapse" aria-labelledby="gen-h2"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                Programs are conducted through a comprehensive digital platform featuring
                                                recorded lectures, live interactive classes, discussion forums, assignments,
                                                quizzes, and proctored final exams.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G3 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h3">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c3" aria-expanded="false"
                                                    aria-controls="gen-c3">
                                                    Q3. Is Placement Assistance available? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c3" class="collapse" aria-labelledby="gen-h3"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                Yes, TMU will provides virtual career support including resume-building
                                                workshops, industry-led
                                                webinars, career counselling, and placement opportunities through its
                                                T&amp;D department.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G4 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h4">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c4" aria-expanded="false"
                                                    aria-controls="gen-c4">
                                                    Q4. Can International students apply? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c4" class="collapse" aria-labelledby="gen-h4"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                Definitely. TMU Online welcomes learners from around the world, provided
                                                they meet the eligibility
                                                requirements and have access to the necessary digital tools.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G5 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h5">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c5" aria-expanded="false"
                                                    aria-controls="gen-c5">
                                                    Q5. What programs are offered through TMU Online? <i
                                                        class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c5" class="collapse" aria-labelledby="gen-h5"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                TMU Online offers a range of Undergraduate (UG) and Postgraduate (PG) degree
                                                programs across
                                                various disciplines.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G6 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="gen-h6">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#gen-c6" aria-expanded="false"
                                                    aria-controls="gen-c6">
                                                    Q6. Are Online Degrees accepted by employers? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="gen-c6" class="collapse" aria-labelledby="gen-h6"
                                            data-bs-parent="#accordion-general">
                                            <div class="card-body">
                                                Yes, online degrees from accredited institutions are widely accepted by
                                                employers, especially when
                                                they focus on relevant skills and industry needs. TMU Online degrees are
                                                UGC-entitled and
                                                recognized at par with traditional degrees.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================= Admission ================= -->
                        <div class="fresh-faqs-tab-pane" id="fresh-faqs-admission">
                            <div class="col-12">
                                <div id="accordion-admission" class="accordion-area">
                                    <!-- A1 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="adm-h1">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#adm-c1" aria-expanded="true" aria-controls="adm-c1">
                                                    Q1. What are the Eligibility Requirements? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="adm-c1" class="collapse show" aria-labelledby="adm-h1"
                                            data-bs-parent="#accordion-admission">
                                            <div class="card-body">
                                                Eligibility depends on the program level:<br>
                                                <b>Undergraduate Programs:</b><br>
                                                BBA: Completion of 10+2 with a Minimum of 50% Marks.<br>
                                                BA: Completion of 10+2 from a Recognized Board.<br><br>
                                                <b>Postgraduate Programs:</b><br>
                                                MBA: A Bachelor’s Degree from a Recognized University is required.<br><br>
                                                All Applicants must submit Academic Certificates and a Valid
                                                Government-issued ID. Some
                                                programs may have additional requirements or assessments.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- A2 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="adm-h2">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#adm-c2" aria-expanded="false"
                                                    aria-controls="adm-c2">
                                                    Q2. What documents are needed for Admission? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="adm-c2" class="collapse" aria-labelledby="adm-h2"
                                            data-bs-parent="#accordion-admission">
                                            <div class="card-body">
                                                Here’s a breakdown of required documents:<br><br>
                                                <b>Domestic Students</b><br>
                                                10 th , 12 th Mark sheet and Passing Certificates<br>
                                                Bachelor’s Degree Certificate with Marks sheets<br>
                                                Government-issued ID (Aadhaar, PAN, Passport)<br><br>
                                                <b>International Students</b><br>
                                                O’Level and A’Level or Equivalent Qualifications<br>
                                                Bachelor’s Degree Certificate with Marks sheets<br>
                                                Passport Copy (Mandatory)<br><br>
                                                Once documents are ready, the admissions team will assist you through the
                                                process.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- A3 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="adm-h3">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#adm-c3" aria-expanded="false"
                                                    aria-controls="adm-c3">
                                                    Q3. Is there an Entrance Exam? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="adm-c3" class="collapse" aria-labelledby="adm-h3"
                                            data-bs-parent="#accordion-admission">
                                            <div class="card-body">
                                                No entrance test is required. Admission is based on eligibility criteria and
                                                document verification.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- A4 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="adm-h4">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#adm-c4" aria-expanded="false"
                                                    aria-controls="adm-c4">
                                                    Q4. Are EMI options available for Tuition Fees? <i
                                                        class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="adm-c4" class="collapse" aria-labelledby="adm-h4"
                                            data-bs-parent="#accordion-admission">
                                            <div class="card-body">
                                                Yes, Flexible EMI plans are available at affordable rates. Visit the program
                                                page or speak with a
                                                counsellor for more details.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- A5 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="adm-h5">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#adm-c5" aria-expanded="false"
                                                    aria-controls="adm-c5">
                                                    Q5. Is there a Refund Policy? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="adm-c5" class="collapse" aria-labelledby="adm-h5"
                                            data-bs-parent="#accordion-admission">
                                            <div class="card-body">
                                                Yes, refunds are available in accordance with UGC guidelines. Requests must
                                                be made within the
                                                specified timeframe, and a processing fee may apply.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================= Academics ================= -->
                        <div class="fresh-faqs-tab-pane" id="fresh-faqs-academics">
                            <div class="col-12">
                                <div id="accordion-academics" class="accordion-area">
                                    <!-- C1 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h1">
                                            <h5 class="mb-0">
                                                <button class="btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c1" aria-expanded="true" aria-controls="acd-c1">
                                                    Q1. How are classes get conducted? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c1" class="collapse show" aria-labelledby="acd-h1"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                Classes include live sessions and recorded lectures accessible via the
                                                Learning Management System
                                                (LMS). Students can participate in group discussions and interactive
                                                activities. All live sessions are
                                                recorded for later viewing.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C2 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h2">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c2" aria-expanded="false"
                                                    aria-controls="acd-c2">
                                                    Q2. Where can I find study materials? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c2" class="collapse" aria-labelledby="acd-h2"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                All learning resources—such as lecture notes, e-books, videos, case studies,
                                                and quizzes—are
                                                available on the LMS for self-paced access.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C3 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h3">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c3" aria-expanded="false"
                                                    aria-controls="acd-c3">
                                                    Q3. How are exams administered? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c3" class="collapse" aria-labelledby="acd-h3"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                Exams are conducted online with secure proctoring. The process includes:<br>
                                                i) Advance Notification of exam schedules via Email/SMS and LMS.<br>
                                                ii) Online proctored exams taken from home using a secure browser<br>
                                                iii) Evaluation and Result Declaration<br>
                                                Mock exams to help students familiarize themselves with the system
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C4 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h4">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c4" aria-expanded="false"
                                                    aria-controls="acd-c4">
                                                    Q4. How do students access industry insights and expert sessions? <i
                                                        class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c4" class="collapse" aria-labelledby="acd-h4"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                TMU Online hosts Industry Interaction webinars featuring entrepreneurs, tech
                                                leaders, marketing
                                                professionals, and subject experts at frequent Intervals. These sessions
                                                offer valuable insights and
                                                networking opportunities. Recordings are available on the student portal for
                                                later access.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C5 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h5">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c5" aria-expanded="false"
                                                    aria-controls="acd-c5">
                                                    Q5. Will faculty be available for doubt resolution? <i
                                                        class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c5" class="collapse" aria-labelledby="acd-h5"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                Yes, students can interact with faculty during live Q&amp;A sessions,
                                                discussion boards, and scheduled
                                                one-on-one mentoring.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C6 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h6">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c6" aria-expanded="false"
                                                    aria-controls="acd-c6">
                                                    Q6. Does TMU Online offer career support? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c6" class="collapse" aria-labelledby="acd-h6"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                Yes. TMU Online provides career services including resume reviews, interview
                                                preparation, and
                                                access to job opportunities through recruitment drives and career platforms.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- C7 -->
                                    <div class="card single-faq-inner">
                                        <div class="card-header" id="acd-h7">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#acd-c7" aria-expanded="false"
                                                    aria-controls="acd-c7">
                                                    Q7. Where can I view the academic calendar? <i class="fa fa-eye"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="acd-c7" class="collapse" aria-labelledby="acd-h7"
                                            data-bs-parent="#accordion-academics">
                                            <div class="card-body">
                                                The academic calendar is available on the LMS and includes key dates for
                                                assignments, exams, and
                                                other academic milestones.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    // Tab switching (no page-centering scroll)
                    document.querySelectorAll('.fresh-faqs-tab-btn').forEach(btn => {
                        btn.addEventListener('click', () => {
                            document.querySelectorAll('.fresh-faqs-tab-btn').forEach(b => b.classList.remove('active'));
                            btn.classList.add('active');

                            const target = btn.getAttribute('data-target');
                            document.querySelectorAll('.fresh-faqs-tab-pane').forEach(p => p.classList.remove(
                                'active'));
                            const pane = document.querySelector(target);
                            if (pane) pane.classList.add('active');

                            // If you want to keep the tab row horizontally scrollable on mobile:
                            // const tabs = document.querySelector('.fresh-faqs-tabs');
                            // tabs.scrollTo({ left: btn.offsetLeft - tabs.clientWidth/2 + btn.clientWidth/2, behavior: 'smooth' });
                        });
                    });
                </script>
                <!-- =================== /FAQs (Bootstrap 5, fixed) =================== -->
                <!-- =================== /FAQs (Top Tabs) =================== -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- faq area end -->


@endsection
