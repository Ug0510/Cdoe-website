@extends('layouts.app')
@section('CDOE', 'Home | TMU')
@section('content')

    <style>
        :root {
            --tmu-blue: #0D2352;
            --tmu-orange: #ff7900;
        }

        /* Card container styling */
        .iqac-pdf-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px 20px;
            border: 1px solid #f0f0f0;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 100%;
            /* Ensures all cards in a row match height */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .icon-holder {
            width: 60px;
            height: 60px;
            background: #fdfdfd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        .pdf-icon-img {
            width: 35px;
            opacity: 0.6;
        }

        .pdf-desc {
            font-size: 15px;
            /* Slightly larger for better UI */
            font-weight: 700;
            color: #000;
            line-height: 1.5;
            margin-bottom: 20px;
            /* Ensures alignment even with different text lengths */
            min-height: 65px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .footer-holder {
            margin-top: auto;
            /* Pushes the button to the bottom */
        }

        .tmu-btn-link {
            display: inline-flex;
            align-items: center;
            text-decoration: none !important;
            color: var(--tmu-orange);
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .tmu-btn-link i {
            margin-left: 8px;
            font-size: 10px;
        }

        /* Hover State */
        .iqac-pdf-card:hover {
            transform: translateY(-8px);
            border-color: var(--tmu-orange);
            box-shadow: 0 15px 35px rgba(0, 16, 85, 0.1);
        }

        .iqac-pdf-card:hover .icon-holder {
            background: #fff4ee;
        }

        .iqac-pdf-card:hover .tmu-btn-link {
            color: var(--tmu-blue);
        }

        /* Fix for Mobile (One-by-One) */
        @media (max-width: 767px) {
            .pdf-desc {
                min-height: auto;
            }

            .col-12 {
                margin-bottom: 10px;
                /* Space between stacked cards */
            }
        }
    </style>

    <!-- breadcrumb start -->
    <section class="breadcrumb-section">
        <div class="mt-5">
            <h2 style="color: #ffffff;" class="mt-5">Mandatory Disclosure</h2>
            <p class="breadcrumbs" style="color: #ffffff;">
                <a href="{{ route('home') }}">Home </a> &gt; Mandatory Disclosure
            </p>
        </div>
    </section>
    <!-- breadcrumb end -->

    <section class="tmu-pdf-grid-aesthetic py-5">
        <div class="container">

            <div class="section-header">
                <h1 style="font-size:2.5rem;" class="text-center mb-3">UGC Approval and Compliance <br><span class="highlight"
                        style="color:#ff7900"></span></h1>
            </div>

            <div class="row g-4">

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">UGC-Precaution Notice</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/UGC-Precaution-notice.pdf') }}"
                                    target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">Fee Refund Rule</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/Circular_18_Fee_refund_rule.pdf') }}"
                                    target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">Admission Date Extension</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/Admission_Date_Extension.pdf') }}"
                                    target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">Application submitted for UGC DEB Approval</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/BCA_Proposal_Application.pdf') }}" target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">TMU Regulatory Body Approval</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/Proposal_Establishment_CFOE.pdf') }}"
                                    target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">CIQA Reports</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/CIQA_report.pdf') }}" target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">Sample Feedback Form</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="#">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="section-header">
                <h2 style="font-size:2.5rem;" class="text-center mb-3 mt-3">Certificate of NAAC <br><span class="highlight"
                        style="color:#ff7900"></span></h2>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-3 d-flex mb-3">
                    <div class="iqac-pdf-card w-100">
                        <div class="icon-holder">
                            <img src="{{ asset('/assets/img/icon/sheet.svg') }}" alt="PDF Icon" class="pdf-icon-img">
                        </div>
                        <p class="pdf-desc">Certificate of NAAC</p>
                        <div class="footer-holder">
                            <a class="tmu-btn-link" href="{{ asset('/assets/pdf/NAAC.pdf') }}" target="_blank">
                                <span>View PDF</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
