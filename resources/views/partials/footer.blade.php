<!-- footer area start -->
<style>
    .modern-social-wrapper {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .modern-social-card {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #E2E8F0;
        box-shadow: 0 4px 14px rgba(0, 45, 98, 0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #002D62;
        text-decoration: none !important;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .modern-social-card .social-svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
        transition: transform 0.3s ease, fill 0.3s ease;
    }

    /* Unified Hover Style for All Social Icons */
    .modern-social-card:hover {
        background: #FF7900;
        border-color: #FF7900;
        color: #ffffff;
        transform: translateY(-4px) scale(1.06);
        box-shadow: 0 10px 22px rgba(255, 121, 0, 0.35);
    }

    .modern-social-card:hover .social-svg {
        transform: scale(1.1);
        fill: #ffffff;
    }
</style>
<footer class="footer-area footer-area-2 bg-gray">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-6">
                        <div class="widget widget_about text-center">
                            <a href="/"><img src="{{ asset('/assets/img/logos/logo.png') }}" alt="img"></a>
                            <div class="details">
                                <p>Edumint tetur sadipscing elitr tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua.</p>
                                    <ul class="social-media">
                                        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="Facebook"></a></li>
                                        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/5969/5969020.png" alt="X"></a></li> 
                                        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" alt="Instagram"></a></li>
                                        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/4494/4494497.png" alt="Pinterest"></a></li>
                                    </ul>
                            </div>
                        </div>
                    </div> -->
                <div class="col-lg-5 col-12 mb-5">
                    <a href="/"><img class="mb-3" src="{{ asset('/assets/img/logos/logo-footer.png') }}" width="60%"
                            alt="img"></a>
                    <div class="details">
                        <p class="text-justify" style="font-size: 14px;">Teerthanker Mahaveer University offers UGC and
                            DEB-approved online programmes, combining academic rigour with flexibility. Pursue
                            accredited online education with TMU Online, and start your future-ready journey today.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Quick Links</h4>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li><a href="/how-to-apply">How to Apply</a></li>
                                    <li><a href="/admissions-rules">Admission Rules</a></li>
                                    <li><a href="/facilities">Facilities</a></li>
                                    <li><a href="/programme">Programmes</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li><a href="{{ route('blog') }}">Blogs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('mandatory.disclosure') }}"
                                            target="_blank">Mandatory Disclosure</a></li>
                                    <!-- <li><a href="{{ route('programme') }}">Programmes</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-3 col-md-6">
                    <div class="widget widget_blog_list">
                        <h4 class="widget-title">News & Blog</h4>
                        <ul>
                            <li>
                                <h6><a href="blog-details.html">Big Ideas Of Business Branding Info.</a></h6>
                                <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                            </li>
                            <li>
                                <h6><a href="blog-details.html">Ui/Ux Ideas Of Business Branding Info.</a></h6>
                                <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_contact">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="details">
                            <li><i class="fa fa-map-marker"></i> Delhi Road, NH9, Moradabad, Uttar Pradesh 244001
                            </li>
                            <li><i class="fa fa-envelope"></i>support@tmuonline.ac.in</li>
                            <li><i class="fa fa-phone"></i>+91 8679007289</li>
                            <!-- <li><i class="fa fa-phone"></i> +91 9520942111</li> -->
                        </ul>

                        <!-- Modern Ultra-Clean Social Vector Cards -->
                        <div class="modern-social-wrapper mt-3">
                            <a href="https://www.facebook.com/TMUOnlineUniversity" target="_blank"
                                rel="noopener noreferrer" class="modern-social-card facebook" aria-label="Facebook">
                                <svg class="social-svg" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/tmu-online" target="_blank"
                                rel="noopener noreferrer" class="modern-social-card linkedin" aria-label="LinkedIn">
                                <svg class="social-svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/tmu.online/" target="_blank" rel="noopener noreferrer"
                                class="modern-social-card instagram" aria-label="Instagram">
                                <svg class="social-svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12 align-center">
                <p>Copyrights © 2026 All Rights Reserved by Teerthanker Mahaveer University, Moradabad.
                </p>
            </div>
            <!-- <div class="col-md-7 text-md-right align-self-center mt-md-0 mt-2">
                        <div class="widget_nav_menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>
                                <li><a href="blog.html">blog</a></li>
                            </ul>
                        </div>
                    </div> -->
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- floating whatsapp inquiry button start -->
<a href="https://wa.me/917300849446?text=Hi%2C%20I%20have%20an%20inquiry%20regarding%20TMU%20Online%20programmes." 
   class="floating-whatsapp-btn" 
   target="_blank" 
   rel="noopener noreferrer" 
   title="Chat on WhatsApp"
   aria-label="Chat with us on WhatsApp">
    <span class="whatsapp-icon-circle">
        <i class="fa-brands fa-whatsapp"></i>
    </span>
    <span class="whatsapp-btn-text">Whats App</span>
</a>
<!-- floating whatsapp inquiry button end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
<!-- all plugins here -->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- main js  -->
<script src="{{ asset('assets/js/main.js') }}?v={{ time() }}"></script>

<!-- Lightbox2 JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!-- Optional: Lightbox Configuration (if needed) -->
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true, // Allows navigating from last image back to first
        'fadeDuration': 300,
        // 'albumLabel': "Image %1 of %2" // Customize caption format if desired
    })
</script>

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const tmuReelSwiper = new Swiper('.tmu-reel-swiper', {
            // Core parameters for larger slides
            slidesPerView: 1.3,   // Show fewer slides initially
            spaceBetween: 20,     // Adjust space between larger slides
            centeredSlides: true, // Keep active slide centered
            loop: true,           // Enable continuous looping
            grabCursor: true,

            // Responsive Breakpoints - Showing fewer slides per view
            breakpoints: {
                // 576px and up
                576: {
                    slidesPerView: 1.8, // Still quite large
                    spaceBetween: 25
                },
                // 768px and up (Tablet)
                768: {
                    slidesPerView: 2.5, // Maybe 2 full and parts of neighbours
                    spaceBetween: 30
                },
                // 992px and up (Small Desktop)
                992: {
                    slidesPerView: 3.2, // 3 full and parts
                    spaceBetween: 35
                },
                // 1200px and up (Large Desktop)
                1200: {
                    slidesPerView: 3.5, // Show even fewer for larger display
                    spaceBetween: 40
                }
            },

            // Navigation arrows - Using the new classes
            navigation: {
                nextEl: '.tmu-swiper-button-next', // Target the wrapper class
                prevEl: '.tmu-swiper-button-prev', // Target the wrapper class
            },

            // Keyboard navigation
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },

            // Accessibility
            a11y: {
                prevSlideMessage: 'Previous reel',
                nextSlideMessage: 'Next reel',
            },
        });

        // --- Overlay interaction code removed ---

    }); // End DOMContentLoaded
</script>


</body>

</html>