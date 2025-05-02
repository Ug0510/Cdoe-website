@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')
   
   
   
   
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
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>


    <!-- course area start -->
    <div class="course-area mt-3 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-11 my-3">
                    <div class="section-title style-white text-center">
                        <h2 class="title">Top Featured Courses</h2>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="https://test.cdoeadmissions.tmu.ac.in/images/m1.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h6><a href="./mba-finance.php">Master of Business Administration in Finance</a>
                                        </h6>
                                        <p>The Master of Business Administration in Finance provides advanced knowledge
                                            in financial management</p>
                                    </div>
                                    <div class="emt-course-meta">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> Management
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="price text-right">
                                                    Duration: <span>2Years</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="https://test.cdoeadmissions.tmu.ac.in/images/m2.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h6><a href="course-details.html">Master of Business Administration in Human
                                                Resource Management</a></h6>
                                        <p>The Master of Business Administration in Human Resource Management equips
                                            students with skills in talent management, organizational development</p>
                                    </div>
                                    <div class="emt-course-meta">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> Management
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="price text-right">
                                                    Duration: <span>2Years</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="https://test.cdoeadmissions.tmu.ac.in/images/m3.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h6><a href="course-details.html">Master of Business Administration in
                                                Marketing</a></h6>
                                        <p>The Master of Business Administration in Marketing and International Business
                                            combines advanced marketing strategies with global business expertise,
                                            focusing</p>
                                    </div>
                                    <div class="emt-course-meta">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> Management
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="price text-right">
                                                    Duration: <span>2Years</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area End -->


    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10 col-md-11">
            <div class="section-title style-white text-center">
              <h2 class="title">Gallery</h2>
            </div>
          </div>
        </div>
      
        <!-- Custom Gallery -->
        <div class="custom-gallery">
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/1.webp') }}" alt="Image 1" onclick="openLightbox(0)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/2.webp') }}" alt="Image 2" onclick="openLightbox(1)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/3.webp') }}" alt="Image 1" onclick="openLightbox(2)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/4.webp') }}" alt="Image 2" onclick="openLightbox(3)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/5.webp') }}" alt="Image 1" onclick="openLightbox(4)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/6.webp') }}" alt="Image 2" onclick="openLightbox(5)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/7.webp') }}" alt="Image 1" onclick="openLightbox(6)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/8.webp') }}" alt="Image 2" onclick="openLightbox(7)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/9.webp') }}" alt="Image 1" onclick="openLightbox(8)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item">
            <img src="{{ asset('/assets/img/gallery/10.webp') }}" alt="Image 2" onclick="openLightbox(9)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/11.webp') }}" alt="Image 1" onclick="openLightbox(10)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/12.webp') }}" alt="Image 2" onclick="openLightbox(11)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/13.webp') }}" alt="Image 1" onclick="openLightbox(12)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/14.webp') }}" alt="Image 2" onclick="openLightbox(13)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/15.webp') }}" alt="Image 1" onclick="openLightbox(14)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/16.webp') }}" alt="Image 2" onclick="openLightbox(15)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/17.webp') }}" alt="Image 1" onclick="openLightbox(16)">
            <div class="custom-caption">Caption 1</div>
          </div>
          <div class="custom-gallery-item d-none d-sm-block">
            <img src="{{ asset('/assets/img/gallery/18.webp') }}" alt="Image 2" onclick="openLightbox(17)">
            <div class="custom-caption">Caption 2</div>
          </div>
          <!-- Add more items as needed -->
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





    <!-- work area start -->
    <div class="work-area">
        <div class="container">
            <div class="section-title style-white text-center mb-4 mb-md-5">
                <h2 class="title">Why Choose TMU?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-1.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">1</div>
                        </div>
                        <div class="details">
                            <h5>Online Sessions by Industry Experts</h5>
                            <p>Learn directly from top industry professionals who share real-world insights, latest
                                trends, and business strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-2.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">2</div>
                        </div>
                        <div class="details">
                            <h5>Internship Opportunities</h5>
                            <p>Gain practical exposure through internships, helping you apply theoretical knowledge and
                                enhance your employability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-3.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">3</div>
                        </div>
                        <div class="details">
                            <h5>Flexible Examination Options</h5>
                            <p>Appear for exams at your convenience with flexible scheduling and remote assessment
                                options.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-4.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">4</div>
                        </div>
                        <div class="details">
                            <h5>User-Friendly LMS</h5>
                            <p>Access lectures, assignments, and study materials anytime through an intuitive and
                                interactive platform.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-5.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">5</div>
                        </div>
                        <div class="details">
                            <h5>24/7 Access to Digital Library</h5>
                            <p>Explore a vast collection of e-books, journals, and research materials anytime, anywhere.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ asset('/assets/img/icon/i-6.svg') }}" class="why-icon" alt="img">
                            <div class="intro-count">6</div>
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
                <img src="{{ asset('/assets/img/degree.webp') }}" alt="TMU Degree Certificate" class="img-fluid rounded-3" />
            </div>

            <p class="mt-4 degree-caption">
                Master of Business Administration<br />
                <span class="badge bg-primary-subtle text-primary-emphasis mt-2">Online Mode | First Division with
                    Distinction</span>
            </p>

            <!-- Optional CTA -->
            <a href="#" class="btn btn-dark mt-3 px-4 ">Explore Our MBA Program</a>
        </div>
    </section>



    <div class="work-area pd-top-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-11">
                    <div class="section-title style-white text-center">
                        <h2 class="title">Admission Process</h2>
                    </div>
                </div>
            </div>
            <section class="m-5 d-none d-sm-block">
                <div class="admiossion-container ">
                    <img src="{{ asset('/assets/img/admission-process.png') }}" class="admission-img" alt="">
                </div>
            </section>

            <section class="m-5 d-block d-sm-none">
                <div class="admiossion-container">
                    <img src="{{ asset('/assets/img/admission-process-mobile.png') }}" class="admission-img" alt="">
                </div>
            </section>
        </div>
    </div>

    <!--events-area start-->
    <!-- <div class="events-area pd-top-110 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-11">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line">EVENTS</h6>
                        <h2 class="title">Latest Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <ul class="single-blog-list-wrap style-white" style="background-color: var(--heading-color);">
                        <li>
                            <div class="media single-blog-list-inner style-white">
                                <div class="media-left date">
                                    <span>JAN</span>
                                    20
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        <li><i class="fa fa-folder-open-o"></i> Air transport</li>
                                    </ul>
                                    <h5><a href="blog-details.html">Clone sit amet, consec tetur elit</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media single-blog-list-inner">
                                <div class="media-left date">
                                    <span>FEB</span>
                                    26
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        <li><i class="fa fa-folder-open-o"></i> Air transport</li>
                                    </ul>
                                    <h5><a href="blog-details.html">Maecenas interdum lorem eleifend</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media single-blog-list-inner">
                                <div class="media-left date">
                                    <span>JAN</span>
                                    28
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        <li><i class="fa fa-folder-open-o"></i> Air transport</li>
                                    </ul>
                                    <h5><a href="blog-details.html">Nunc scelerisque tincidunt elit. </a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button class="hover-button">View all</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="event-thumb">
                        <img src="{{ asset('/assets/img/other/events.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--events-area end-->


    <!-- ============================ Reel Showcase Section Start ============================ -->
    <section class="tmu-reel-showcase py-5 position-relative">
        <div class="tmu-reel-background-element tmu-reel-bg-el-1"></div>
        <div class="tmu-reel-background-element tmu-reel-bg-el-2"></div>

        <div class="container position-relative">
            <h2 class="tmu-reel-showcase__title text-center mb-5">Student Stories & Campus Life</h2>

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


    <!-- <div class="faq-area recruiter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <section class="recruiter-section">
                        <div class="container">
                            <h2>Our Recruiters</h2>
                            <div id="logo-container" class="semi-circle-container"></div>
                            <div class="controls">
                                <button id="prev">Prev</button>
                                <button id="next">Next</button>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-5">
                    <div class="about-area-inner">
                        <div class="section-title mb-0">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 col-md-11">
                                    <div class="section-title style-white text-center">
                                        <h2 class="title"></h2>
                                    </div>
                                </div>
                            </div>
                            <p class="content">Have ipsum dolor sit amet, elitr, sed diam nonumy eirmod tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo et ea rebum.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box bg-light-blue p-3 b-radius-5">
                                            <div class="media">
                                                <div class="media-left mr-0">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>1200+</h5>
                                                    <p>Learners & counting</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box bg-light-blue p-3 b-radius-5">
                                            <div class="media">
                                                <div class="media-left mr-0">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>350+</h5>
                                                    <p>Learners & counting</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <!-- faq area start -->
    <div class="faq-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-area-inner">
                        <div class="section-title mb-0">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 col-md-11">
                                    <div class="section-title style-white text-center">
                                        <h2 class="title">FAQ</h2>
                                    </div>
                                </div>
                            </div>
                            <p class="content">Have ipsum dolor sit amet, elitr, sed diam nonumy eirmod tempor invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo et ea rebum.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box bg-light-blue p-3 b-radius-5">
                                            <div class="media">
                                                <div class="media-left mr-0">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>1200+</h5>
                                                    <p>Learners & counting</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box bg-light-blue p-3 b-radius-5">
                                            <div class="media">
                                                <div class="media-left mr-0">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>350+</h5>
                                                    <p>Learners & counting</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <div id="accordion" class="accordion-area">
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-one">
                                <h5 class="mb-0">
                                    <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                        aria-expanded="true" aria-controls="f-one">
                                        01. What does you simply dummy in do ?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-one" class="show collapse" aria-labelledby="ff-one" data-parent="#accordion">
                                <div class="card-body">
                                    What does you dummy text of free available in market printing has industry been
                                    industry's standard dummy text ever.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-two">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                        aria-expanded="true" aria-controls="f-two">
                                        02. What graphics dummy of free design ?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#accordion">
                                <div class="card-body">
                                    What graphics simply dummy text of free available in market printing industry has
                                    been industry's standard dummy text ever.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-three">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                        aria-expanded="true" aria-controls="f-three">
                                        03. Why we are the best ?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-three" class="collapse" aria-labelledby="ff-three" data-parent="#accordion">
                                <div class="card-body">
                                    Why we are dummy text of free available in market printing industry has been
                                    industry's standard dummy text ever.
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq-inner">
                            <div class="card-header" id="ff-four">
                                <h5 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                        aria-expanded="true" aria-controls="f-four">
                                        04. What industries dummy covered ?
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="f-four" class="collapse" aria-labelledby="ff-four" data-parent="#accordion">
                                <div class="card-body">
                                    What industries text of free available in market printing industry has been
                                    industry's standard dummy text ever.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->


    @endsection
