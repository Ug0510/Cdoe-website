// on scroll down add class shrink in navbar and on scroll up remove class shrink

window.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.cus-nav');

    if (this.window.innerWidth < 992) {
        navbar.classList.add('shrink');
    }
});

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.cus-nav');

    if (this.window.innerWidth >= 992) {
        if (window.scrollY > 0) {
            navbar.classList.add('shrink');
        } else {
            navbar.classList.remove('shrink');
        }
    }
});


// --- Flourish Mobile Navbar Script ---
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('flourishNavbar');
    const toggleButton = document.getElementById('flourishNavbarToggle');
    const menuContent = document.getElementById('flourishNavbarMenu');

    // Check if mobile navbar elements exist before adding listeners
    if (navbar && toggleButton && menuContent) {

        const submenuToggles = navbar.querySelectorAll('.flourish-submenu-toggle');

        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent click from closing the main menu

                const parentLi = toggle.closest('.flourish-nav-item-has-submenu');

                if (parentLi) {
                    const currentlyOpen = parentLi.classList.contains('submenu-is-open');
                    // Close all others *before* opening the new one
                    closeOtherSubmenus(parentLi);
                    // Toggle the current one (if it wasn't the one already open, it will open)
                    if (!currentlyOpen) {
                        parentLi.classList.add('submenu-is-open');
                    }
                }
            });
        });

        // Helper function to close other submenus
        function closeOtherSubmenus(currentOpenLi) {
            submenuToggles.forEach(toggle => {
                const li = toggle.closest('.flourish-nav-item-has-submenu');
                // Close if it's not the current one OR if the current one is being clicked to close
                if (li !== currentOpenLi || li.classList.contains('submenu-is-open')) {
                    li.classList.remove('submenu-is-open');
                }
            });
        }

        // Main Toggle Logic
        toggleButton.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent triggering document click listener
            const isOpen = navbar.classList.toggle('is-open');
            toggleButton.setAttribute('aria-expanded', isOpen);

            // If closing the main menu, also close all submenus
            if (!isOpen) {
                closeAllSubmenus();
            }
        });

        // Outside Click Logic
        document.addEventListener('click', (event) => {
            // Check if the main navbar is open and the click was outside the navbar
            if (navbar.classList.contains('is-open') && !navbar.contains(event.target)) {
                closeMainMenu();
            }
        });

        // Function to close main menu and submenus
        function closeMainMenu() {
            navbar.classList.remove('is-open');
            toggleButton.setAttribute('aria-expanded', 'false');
            closeAllSubmenus();
        }

        // Function to close all submenus
        function closeAllSubmenus() {
            navbar.querySelectorAll('.flourish-nav-item-has-submenu.submenu-is-open').forEach(li => {
                li.classList.remove('submenu-is-open');
            });
        }

    }
    // No console error if elements aren't found, as they might intentionally be absent on desktop
});



; (function ($) {
    "use strict";

    $(document).ready(function () {

        /**-----------------------------
         *  Navbar fix
         * ---------------------------*/
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
            e.preventDefault();
        })

        /*-------------------------------------
            menu
        -------------------------------------*/
        $('.navbar-area .menu').on('click', function () {
            $(this).toggleClass('open');
            $('.navbar-area .navbar-collapse').toggleClass('sopen');
        });

        // mobile menu
        if ($(window).width() < 992) {
            $(".in-mobile").clone().appendTo(".sidebar-inner");
            $(".in-mobile ul li.menu-item-has-children").append('<i class="fas fa-chevron-right"></i>');
            $('<i class="fas fa-chevron-right"></i>').insertAfter("");

            $(".menu-item-has-children a").on('click', function (e) {
                // e.preventDefault();

                $(this).siblings('.sub-menu').animate({
                    height: "toggle"
                }, 300);
            });
        }

        var menutoggle = $('.menu-toggle');
        var mainmenu = $('.navbar-nav');

        menutoggle.on('click', function () {
            if (menutoggle.hasClass('is-active')) {
                mainmenu.removeClass('menu-open');
            } else {
                mainmenu.addClass('menu-open');
            }
        });

        /*--------------------------------------------------
            select onput
        ---------------------------------------------------*/
        if ($('.single-select').length) {
            $('.single-select').niceSelect();
        }

        /* --------------------------------------------------
            isotop filter 
        ---------------------------------------------------- */
        var $Container = $('.isotop-filter-area');
        if ($Container.length > 0) {
            $('.property-filter-area').imagesLoaded(function () {
                var festivarMasonry = $Container.isotope({
                    itemSelector: '.project-filter-item', // use a separate class for itemSelector, other than .col-
                    masonry: {
                        gutter: 0
                    }
                });
                $(document).on('click', '.isotop-filter-menu > button', function () {
                    var filterValue = $(this).attr('data-filter');
                    festivarMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
            $(document).on('click', '.isotop-filter-menu > button', function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            });
        }

        /*--------------------------------------------
            Search Popup
        ---------------------------------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#td-search-popup');

        $(document).on('click', '#body-overlay', function (e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '.search-bar', function (e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });

        /* -----------------------------------------------------
            Variables
        ----------------------------------------------------- */
        var leftArrow = '<i class="fa fa-angle-left"></i>';
        var rightArrow = '<i class="fa fa-angle-right"></i>';

        /*------------------------------------------------
            intro-slider
        ------------------------------------------------*/
        $('.intro-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                992: {
                    items: 4
                },
            }
        });

        /*------------------------------------------------
            testimonial-slider
        ------------------------------------------------*/
        $('.testimonial-slider').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            smartSpeed: 1500,
            items: 1,
        });

        /*------------------------------------------------
            testimonial-slider
        ------------------------------------------------*/
        $('.testimonial-slider-2').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            margin: 30,
            smartSpeed: 1500,
            items: 3,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                },
            }
        });

        /*------------------------------------------------
            testimonial-slider
        ------------------------------------------------*/
        $('.testimonial-slider-3').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            margin: 30,
            smartSpeed: 1500,
            items: 3,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 2
                },
            }
        });

        /*------------------------------------------------
            team-slider
        ------------------------------------------------*/
        $('.team-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                },
            }
        });

        /*------------------------------------------------
            institute-slider
        ------------------------------------------------*/
        $('.institute-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                992: {
                    items: 5
                },
            }
        });

        /*------------------------------------------------
            Magnific JS
        ------------------------------------------------*/
        $('.video-play-btn').magnificPopup({
            type: 'iframe',
            removalDelay: 260,
            mainClass: 'mfp-zoom-in',
        });
        $.extend(true, $.magnificPopup.defaults, {
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/Wimkqo8gDZ0'
                    }
                }
            }
        });

        /* -----------------------------------------
            fact counter
        ----------------------------------------- */
        $('.counter').counterUp({
            delay: 15,
            time: 2000
        });



        /**---------------------------------------
          Progress BAR
        ----------------------------------------*/
        function td_Progress() {
            var progress = $('.progress-rate');
            var len = progress.length;
            for (var i = 0; i < len; i++) {
                var progressId = '#' + progress[i].id;
                var dataValue = $(progressId).attr('data-value');
                $(progressId).css({ 'width': dataValue + '%' });
            }
        }
        var progressRateClass = $('.progress-item');
        if ((progressRateClass).length) {
            td_Progress();
        }
        $('.counting').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },

                {
                    duration: 2000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
        });


        /*----------------------------------------
           back to top
        ----------------------------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });

    });

    $(window).on("scroll", function () {
        /*---------------------------------------
            back-to-top
        -----------------------------------------*/
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }

        /*---------------------------------------
            sticky-active
        -----------------------------------------*/
        var scroll = $(window).scrollTop();
        if (scroll < 445) {
            $(".navbar").removeClass("sticky-active");
        } else {
            $(".navbar").addClass("sticky-active");
        }

    });


    $(window).on('load', function () {

        /*-----------------
            preloader
        ------------------*/
        // var preLoder = $("#preloader");
        // preLoder.fadeOut(0);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on('click', '.cancel-preloader a', function (e) {
            e.preventDefault();
            $("#preloader").fadeOut(2000);
        });

    });



})(jQuery);


$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
});


const images = [
    "assets/img/gallery/1.webp",
    "assets/img/gallery/2.webp",
    "assets/img/gallery/3.webp",
    "assets/img/gallery/4.webp",
    "assets/img/gallery/5.webp",
    "assets/img/gallery/6.webp",
    "assets/img/gallery/7.webp",
    "assets/img/gallery/8.webp",
    "assets/img/gallery/9.webp",
    "assets/img/gallery/10.webp",
    "assets/img/gallery/11.webp",
    "assets/img/gallery/12.webp",
    "assets/img/gallery/13.webp",
    "assets/img/gallery/14.webp",
    "assets/img/gallery/15.webp",
    "assets/img/gallery/16.webp",
    "assets/img/gallery/17.webp",
    "assets/img/gallery/18.webp",
    // Add more as needed
];
let currentImageIndex = 0;

function openLightbox(index) {
    currentImageIndex = index;
    const lightboxImg = document.getElementById("custom-lightbox-img");
    lightboxImg.classList.remove('show');
    setTimeout(() => {
        lightboxImg.src = images[currentImageIndex];
        lightboxImg.classList.add('show');
    }, 200);
    document.getElementById("custom-lightbox-caption").innerText =
        document.querySelectorAll('.custom-gallery-item')[currentImageIndex].querySelector('.custom-caption').innerText;
    document.getElementById("custom-lightbox").style.display = "flex";
}

function closeLightbox(event) {
    if (event.target.id === "custom-lightbox" || event.target.classList.contains('custom-close-btn')) {
        document.getElementById("custom-lightbox").style.display = "none";
        document.body.style.overflow = "auto";
    }
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    const lightboxImg = document.getElementById("custom-lightbox-img");
    lightboxImg.classList.remove('show');
    setTimeout(() => {
        lightboxImg.src = images[currentImageIndex];
        lightboxImg.classList.add('show');
    }, 200);
    document.getElementById("custom-lightbox-caption").innerText =
        document.querySelectorAll('.custom-gallery-item')[currentImageIndex].querySelector('.custom-caption').innerText;
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    const lightboxImg = document.getElementById("custom-lightbox-img");
    lightboxImg.classList.remove('show');
    setTimeout(() => {
        lightboxImg.src = images[currentImageIndex];
        lightboxImg.classList.add('show');
    }, 200);
    document.getElementById("custom-lightbox-caption").innerText =
        document.querySelectorAll('.custom-gallery-item')[currentImageIndex].querySelector('.custom-caption').innerText;
}
// recruiter section JS start

document.addEventListener('DOMContentLoaded', () => {
    const logos = [
        'assets/img/logos/1.jpg', 'assets/img/logos/2.jpg', 'assets/img/logos/3.jpg', 'assets/img/logos/4.jpg', 'assets/img/logos/5.jpg',
        'assets/img/logos/6.jpg', 'assets/img/logos/7.jpg', 'assets/img/logos/8.jpg', 'assets/img/logos/1.jpg',
        'assets/img/logos/2.jpg', 'assets/img/logos/3.jpg'
    ];
    const itemsPerPage = 5;
    let currentStart = 0;
    const container = document.getElementById('logo-container');
    const radius = 250; // px

    // pre-create img elements
    const imgElements = [];
    for (let i = 0; i < itemsPerPage; i++) {
        const img = document.createElement('img');
        img.className = 'semi-circle-logo';
        container?.appendChild(img);
        imgElements.push(img);
    }

    // position logos along the semi-circle
    function positionImgs() {
        imgElements.forEach((img, i) => {
            const idx = (currentStart + i) % logos.length;
            img.src = logos[idx];
            img.alt = `logo ${idx + 1}`;

            const angle = Math.PI * (i / (itemsPerPage - 1)); // 0→π
            const x = radius * Math.cos(angle);
            const y = radius * Math.sin(angle);

            img.style.left = `calc(50% + ${x}px - 32px)`;
            img.style.top = `calc(100% - ${y}px - 32px)`;
        });
    }

    function rotateNext() {
        imgElements.forEach(img => img.style.opacity = '0');
        setTimeout(() => {
            currentStart = (currentStart + 1) % logos.length;
            const first = imgElements.shift();
            imgElements.push(first);
            positionImgs();
            container.innerHTML = '';
            imgElements.forEach(el => container.appendChild(el));
            imgElements.forEach(img => img.style.opacity = '1');
        }, 300);
    }

    function rotatePrev() {
        imgElements.forEach(img => img.style.opacity = '0');
        setTimeout(() => {
            currentStart = (currentStart - 1 + logos.length) % logos.length;
            const last = imgElements.pop();
            imgElements.unshift(last);
            positionImgs();
            container.innerHTML = '';
            imgElements.forEach(el => container.appendChild(el));
            imgElements.forEach(img => img.style.opacity = '1');
        }, 300);
    }

    document.getElementById('next').addEventListener('click', rotateNext);
    document.getElementById('prev').addEventListener('click', rotatePrev);

    // auto-rotate every 3s, pause on hover
    let autoRotate = setInterval(rotateNext, 3000);
    container.addEventListener('mouseenter', () => clearInterval(autoRotate));
    container.addEventListener('mouseleave', () => {
        autoRotate = setInterval(rotateNext, 3000);
    });

    positionImgs();
});

// recruiter section JS end

async function downloadImage(url) {
    try {
        const response = await fetch(url, { mode: 'cors' });
        if (!response.ok) throw new Error('Network response was not ok');
        const blob = await response.blob();
        const filename = url.split('/').pop();
        const link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        window.URL.revokeObjectURL(link.href);
    } catch (error) {
        console.error('Download failed:', error);
        alert('Failed to download the image. Please try again or check the image URL.');
    }
}

// ============================================
// Download Brochure Section - OTP Flow
// ============================================
document.addEventListener('DOMContentLoaded', function () {
    // Elements
    const openModalBtn = document.getElementById('openBrochureModal');
    const closeModalBtn = document.getElementById('closeBrochureModal');
    const modalOverlay = document.getElementById('brochureModalOverlay');
    const brochureForm = document.getElementById('brochureForm');
    const otpForm = document.getElementById('otpForm');
    const step1 = document.getElementById('modalStep1');
    const step2 = document.getElementById('modalStep2');
    const step3 = document.getElementById('modalStep3');
    const backBtn = document.getElementById('backToStep1');
    const resendBtn = document.getElementById('resendOtpBtn');
    const closeSuccessBtn = document.getElementById('closeSuccessModal');

    // Check if elements exist before adding listeners
    if (!openModalBtn || !modalOverlay) return;

    let currentMobile = '';
    let currentName = '';
    let otpTimerInterval = null;

    // Open Modal
    openModalBtn.addEventListener('click', function () {
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    // Close Modal
    function closeModal() {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
        resetForm();
    }

    if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
    if (closeSuccessBtn) closeSuccessBtn.addEventListener('click', closeModal);

    modalOverlay.addEventListener('click', function (e) {
        if (e.target === modalOverlay) {
            closeModal();
        }
    });

    // Reset Form
    function resetForm() {
        if (brochureForm) brochureForm.reset();
        if (otpForm) otpForm.reset();
        if (step1) step1.style.display = 'block';
        if (step2) step2.style.display = 'none';
        if (step3) step3.style.display = 'none';
        clearErrors();
        if (otpTimerInterval) clearInterval(otpTimerInterval);
    }

    // Clear Errors
    function clearErrors() {
        document.querySelectorAll('.error-msg').forEach(el => el.textContent = '');
    }

    // Show Error
    function showError(elementId, message) {
        const el = document.getElementById(elementId);
        if (el) el.textContent = message;
    }

    // Validate Mobile
    function isValidMobile(mobile) {
        return /^[6-9]\d{9}$/.test(mobile);
    }

    // Show Loader
    function showLoader(btn, show) {
        if (!btn) return;
        const text = btn.querySelector('.btn-text');
        const loader = btn.querySelector('.btn-loader');
        if (show) {
            if (text) text.style.display = 'none';
            if (loader) loader.style.display = 'block';
            btn.disabled = true;
        } else {
            if (text) text.style.display = 'block';
            if (loader) loader.style.display = 'none';
            btn.disabled = false;
        }
    }

    // Start OTP Timer
    function startOtpTimer() {
        let seconds = 30;
        const timerEl = document.getElementById('otpTimer');
        if (resendBtn) resendBtn.disabled = true;

        otpTimerInterval = setInterval(function () {
            seconds--;
            if (timerEl) timerEl.innerHTML = `Resend OTP in <strong>${seconds}</strong>s`;

            if (seconds <= 0) {
                clearInterval(otpTimerInterval);
                if (timerEl) timerEl.textContent = '';
                if (resendBtn) resendBtn.disabled = false;
            }
        }, 1000);
    }

    // Send OTP API - calls Laravel backend
    async function sendOTPAPI(name, mobile) {
        const response = await fetch('/api/otp/send', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ name: name, mobile: mobile })
        });
        return await response.json();
    }

    // Verify OTP API - calls Laravel backend
    async function verifyOTPAPI(mobile, otp) {
        const response = await fetch('/api/otp/verify', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ mobile: mobile, otp: otp })
        });
        return await response.json();
    }

    // Download Brochure
    function downloadBrochure() {
        const link = document.createElement('a');
        link.href = '/assets/brochure/TMU-Online-Brochure.pdf';
        link.download = 'TMU-Online-Brochure.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    // Form Submit - Send OTP
    if (brochureForm) {
        brochureForm.addEventListener('submit', async function (e) {
            e.preventDefault();
            clearErrors();

            const nameInput = document.getElementById('brochureName');
            const mobileInput = document.getElementById('brochureMobile');
            const name = nameInput ? nameInput.value.trim() : '';
            const mobile = mobileInput ? mobileInput.value.trim() : '';

            // Validation
            if (!name) {
                showError('nameError', 'Please enter your name');
                return;
            }

            if (!mobile) {
                showError('mobileError', 'Please enter your mobile number');
                return;
            }

            if (!isValidMobile(mobile)) {
                showError('mobileError', 'Please enter a valid 10-digit mobile number');
                return;
            }

            currentMobile = mobile;
            currentName = name;
            const sendBtn = document.getElementById('sendOtpBtn');
            showLoader(sendBtn, true);

            try {
                const result = await sendOTPAPI(name, mobile);

                if (result.success) {
                    const displayMobile = document.getElementById('displayMobile');
                    if (displayMobile) displayMobile.textContent = '+91 ' + mobile;
                    if (step1) step1.style.display = 'none';
                    if (step2) step2.style.display = 'block';
                    startOtpTimer();
                } else {
                    showError('mobileError', result.message || 'Failed to send OTP');
                }
            } catch (error) {
                showError('mobileError', 'Something went wrong. Please try again.');
            }

            showLoader(sendBtn, false);
        });
    }

    // OTP Form Submit
    if (otpForm) {
        otpForm.addEventListener('submit', async function (e) {
            e.preventDefault();
            clearErrors();

            const otpInput = document.getElementById('otpInput');
            const otp = otpInput ? otpInput.value.trim() : '';

            if (!otp || otp.length !== 6) {
                showError('otpError', 'Please enter a valid 6-digit OTP');
                return;
            }

            const verifyBtn = document.getElementById('verifyOtpBtn');
            showLoader(verifyBtn, true);

            try {
                const result = await verifyOTPAPI(currentMobile, otp);

                if (result.success) {
                    if (step2) step2.style.display = 'none';
                    if (step3) step3.style.display = 'block';
                    downloadBrochure();
                } else {
                    showError('otpError', result.message || 'Invalid OTP');
                }
            } catch (error) {
                showError('otpError', 'Something went wrong. Please try again.');
            }

            showLoader(verifyBtn, false);
        });
    }

    // Resend OTP
    if (resendBtn) {
        resendBtn.addEventListener('click', async function () {
            resendBtn.disabled = true;

            try {
                const result = await sendOTPAPI(currentName, currentMobile);
                if (result.success) {
                    startOtpTimer();
                }
            } catch (error) {
                resendBtn.disabled = false;
            }
        });
    }

    // Back to Step 1
    if (backBtn) {
        backBtn.addEventListener('click', function () {
            if (step2) step2.style.display = 'none';
            if (step1) step1.style.display = 'block';
            if (otpTimerInterval) clearInterval(otpTimerInterval);
        });
    }

    // Only allow numbers in mobile input
    const mobileInput = document.getElementById('brochureMobile');
    if (mobileInput) {
        mobileInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });
    }

    // Only allow numbers in OTP input
    const otpInput = document.getElementById('otpInput');
    if (otpInput) {
        otpInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
        });
    }
});