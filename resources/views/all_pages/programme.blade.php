@extends('layouts.app')

@section('CDOE', 'Online Programmes & Specialisations | TMU CDOE')

@section('content')

<style>
    /* ==========================================================================
       TMU Online Programmes - Cohesive Production Design
       ========================================================================== */

    .programmes-page-wrapper {
        background-color: #F8FAFC;
        padding-bottom: 80px;
    }

    /* Hero Banner (Matching Website Breadcrumb Banner Style & Height) */
    .prog-hero {
        background-image: linear-gradient(135deg, rgba(0, 26, 64, 0.88) 0%, rgba(0, 45, 98, 0.92) 100%), url('/assets/img/bread-crum.jpg');
        background-size: cover;
        background-position: center;
        min-height: 420px;
        padding: 165px 0 90px 0;
        position: relative;
        overflow: hidden;
        color: #ffffff;
        display: flex;
        align-items: center;
    }

    .prog-hero::before {
        content: '';
        position: absolute;
        top: -40%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255, 121, 0, 0.18) 0%, transparent 65%);
        border-radius: 50%;
        pointer-events: none;
    }

    .hero-badge-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 121, 0, 0.15);
        border: 1px solid rgba(255, 121, 0, 0.4);
        color: #FF7900;
        font-size: 0.78rem;
        font-weight: 700;
        padding: 5px 14px;
        border-radius: 30px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 14px;
    }

    .prog-hero-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 12px;
        letter-spacing: -0.5px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    }

    .prog-hero-title span.accent-orange {
        color: #FF7900;
    }

    .prog-hero-sub {
        font-size: 1.05rem;
        color: #cbd5e1;
        max-width: 620px;
        margin: 0 auto;
        line-height: 1.55;
        font-weight: 400;
    }

    .prog-breadcrumbs {
        margin-top: 16px;
        font-size: 0.88rem;
        color: #94a3b8;
    }

    .prog-breadcrumbs a {
        color: #FF7900;
        text-decoration: none;
    }

    /* Filter Bar Section */
    .filter-bar-container {
        margin-top: -36px;
        margin-bottom: 35px;
        position: relative;
        z-index: 20;
    }

    .filter-card {
        background: #ffffff;
        border-radius: 30px;
        padding: 6px 10px;
        box-shadow: 0 10px 30px rgba(0, 33, 71, 0.08);
        border: 1px solid rgba(226, 232, 240, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        width: fit-content;
        margin: 0 auto;
        max-width: 100%;
    }

    .filter-tabs-group {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #F1F5F9;
        padding: 4px;
        border-radius: 30px;
        white-space: nowrap;
    }

    .tab-btn {
        border: none;
        background: transparent;
        color: #64748B;
        font-size: 0.86rem;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }

    .tab-btn:hover {
        color: #002D62;
    }

    .tab-btn.active {
        background: #002D62;
        color: #ffffff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .tab-btn.active .tab-count {
        background: #FF7900;
        color: #ffffff;
    }

    .tab-count {
        font-size: 0.72rem;
        background: #CBD5E1;
        color: #475569;
        padding: 1px 7px;
        border-radius: 10px;
        font-weight: 700;
    }

    /* Meta Header */
    .programmes-meta-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 28px;
    }

    .meta-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #002D62;
        margin: 0;
    }

    .meta-title span {
        color: #FF7900;
    }

    /* ==========================================================================
       Compact & Cohesive TMU Cards Design
       ========================================================================== */
    .card-column {
        margin-bottom: 28px;
        transition: all 0.25s ease;
    }

    .tmu-prog-card {
        background: #ffffff;
        border-radius: 14px;
        border: 1px solid #E2E8F0;
        box-shadow: 0 4px 16px rgba(0, 33, 71, 0.04);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease;
    }

    .tmu-prog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 30px rgba(0, 45, 98, 0.08);
        border-color: rgba(255, 121, 0, 0.35);
    }

    .tmu-card-media {
        position: relative;
        width: 100%;
        height: 165px;
        overflow: hidden;
        background: #001A40;
    }

    .tmu-card-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .tmu-prog-card:hover .tmu-card-media img {
        transform: scale(1.05);
    }

    .media-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 26, 64, 0.35) 0%, transparent 60%);
        pointer-events: none;
    }

    .tmu-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        padding: 3px 10px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        z-index: 3;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .tmu-badge.pg {
        background: #FF7900;
        color: #ffffff;
    }

    .tmu-badge.ug {
        background: #002D62;
        color: #ffffff;
    }

    .tmu-card-body {
        padding: 20px 18px 18px 18px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: space-between;
    }

    .tmu-card-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }

    .meta-item {
        font-size: 0.78rem;
        font-weight: 600;
        color: #64748B;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .meta-item i {
        color: #FF7900;
        font-size: 0.85rem;
    }

    .tmu-card-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: #002D62;
        line-height: 1.35;
        margin-bottom: 8px;
        transition: color 0.2s ease;
    }

    .tmu-prog-card:hover .tmu-card-title {
        color: #FF7900;
    }

    .tmu-card-desc {
        font-size: 0.84rem;
        color: #64748B;
        line-height: 1.45;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .tmu-card-footer {
        padding-top: 14px;
        border-top: 1px solid #F1F5F9;
    }

    .tmu-btn-explore {
        background: #002D62;
        color: #ffffff;
        font-size: 0.86rem;
        font-weight: 600;
        padding: 9px 16px;
        border-radius: 8px;
        text-decoration: none !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        transition: background 0.25s ease, box-shadow 0.25s ease;
    }

    .tmu-btn-explore:hover {
        background: #FF7900;
        color: #ffffff;
        box-shadow: 0 4px 14px rgba(255, 121, 0, 0.28);
    }

    .tmu-btn-explore i {
        font-size: 0.95rem;
        transition: transform 0.25s ease;
    }

    .tmu-btn-explore:hover i {
        transform: translateX(4px);
    }

    /* Empty State */
    .empty-state-box {
        text-align: center;
        padding: 60px 20px;
        background: #ffffff;
        border-radius: 16px;
        border: 1px dashed #CBD5E1;
        margin: 30px 0;
    }

    .empty-state-box i {
        font-size: 3rem;
        color: #CBD5E1;
        margin-bottom: 12px;
    }

    .empty-state-box h4 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #002D62;
        margin-bottom: 6px;
    }

    .empty-state-box p {
        color: #64748B;
        font-size: 0.9rem;
        margin-bottom: 16px;
    }

    .btn-reset-filter {
        background: #002D62;
        color: #ffffff;
        border: none;
        padding: 8px 20px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-reset-filter:hover {
        background: #FF7900;
    }

    @media (max-width: 767.98px) {
        .prog-hero {
            padding: 135px 0 65px 0;
            min-height: 360px;
        }

        .prog-hero-title {
            font-size: 1.9rem;
        }

        .filter-card {
            padding: 4px;
            width: 100%;
            border-radius: 30px;
            overflow-x: auto;
        }

        .filter-tabs-group {
            width: 100%;
            justify-content: flex-start;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
            padding: 4px;
        }

        .filter-tabs-group::-webkit-scrollbar {
            display: none;
        }

        .tab-btn {
            flex: 0 0 auto;
            justify-content: center;
            padding: 8px 14px;
            font-size: 0.82rem;
            white-space: nowrap;
        }

        /* Mobile Horizontal Cards Slider with Visible Scrollbar */
        #progGrid {
            display: flex !important;
            flex-wrap: nowrap !important;
            overflow-x: auto !important;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 22px !important;
            margin-left: -12px !important;
            margin-right: -12px !important;
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        #progGrid .card-column {
            flex: 0 0 85% !important;
            max-width: 85% !important;
            scroll-snap-align: start;
        }

        /* Visible Sleek Orange Mobile Scrollbar */
        #progGrid::-webkit-scrollbar {
            height: 7px !important;
            display: block !important;
        }

        #progGrid::-webkit-scrollbar-track {
            background: #E2E8F0;
            border-radius: 10px;
        }

        #progGrid::-webkit-scrollbar-thumb {
            background: #FF7900;
            border-radius: 10px;
        }

        #progGrid::-webkit-scrollbar-thumb:hover {
            background: #e66d00;
        }
    }
</style>

<div class="programmes-page-wrapper">

    <!-- Hero Header -->
    <section class="prog-hero text-center">
        <div class="container position-relative" style="z-index: 5;">
            <div class="hero-badge-pill">
                <i class="bi bi-shield-check"></i> UGC & DEB Approved Programmes
            </div>
            <h1 class="prog-hero-title">
                Our Online <span class="accent-orange">Programmes</span>
            </h1>
            <p class="prog-hero-sub">
                Explore UGC & DEB approved flexible online degree programmes designed to empower working professionals and students.
            </p>
            <div class="prog-breadcrumbs">
                <a href="{{ route('home') }}">Home</a> &nbsp;&gt;&nbsp; Programmes
            </div>
        </div>
    </section>

    <!-- Filter Bar Container -->
    <div class="container">
        <div class="filter-bar-container">
            <div class="filter-card">
                <!-- Filter Tabs Only -->
                <div class="filter-tabs-group">
                    <button class="tab-btn active" data-filter="all">
                        All <span class="tab-count">13</span>
                    </button>
                    <button class="tab-btn" data-filter="pg">
                        Postgraduate <span class="tab-count">11</span>
                    </button>
                    <button class="tab-btn" data-filter="ug">
                        Undergraduate <span class="tab-count">2</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Meta Results Header -->
        <div class="programmes-meta-header">
            <h2 class="meta-title">
                Showing <span id="activeCountDisplay">13</span> <span id="activeLabelDisplay">Online</span> Programmes
            </h2>
        </div>

        <!-- Elegant 3-Column Responsive Grid with Uniform Spacing -->
        <div class="row g-4 gy-4 gy-lg-5" id="progGrid">

            <!-- 1. MBA in Finance -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_finance.png') }}" alt="MBA in Finance" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Finance</h3>
                            <p class="tmu-card-desc">Master corporate financial management, investment banking, and capital market analytics.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('finance.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. MBA in HR Management -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_hr.png') }}" alt="MBA in HR Management" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in HR Management</h3>
                            <p class="tmu-card-desc">Strategic workforce leadership, talent acquisition, and corporate human capital management.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('hr.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. MBA in Marketing -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_marketing.png') }}" alt="MBA in Marketing" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Marketing</h3>
                            <p class="tmu-card-desc">Brand positioning, market research, strategic pricing, and consumer behavior analysis.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('marketing.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. MBA in Digital Marketing -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_dm.png') }}" alt="MBA in Digital Marketing" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Digital Marketing</h3>
                            <p class="tmu-card-desc">Performance advertising, SEO strategies, content marketing, and growth analytics.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('digital_marketing.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. MBA in International Business -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_ib.png') }}" alt="MBA in International Business" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in International Business</h3>
                            <p class="tmu-card-desc">Cross-border trade operations, multinational strategy, and global market compliance.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('ib.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. MBA in Logistics & Supply Chain -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_lscm.png') }}" alt="MBA in Logistics & Supply Chain" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Logistics & Supply Chain</h3>
                            <p class="tmu-card-desc">Global supply chain management, freight logistics, inventory control, and warehousing.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('lscm.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7. MBA in Data Analytics -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_da.png') }}" alt="MBA in Data Analytics" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Data Analytics</h3>
                            <p class="tmu-card-desc">Predictive decision modeling, business intelligence, and big data visualization.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('data_analytics.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8. MBA in Agri Business -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_agri.png') }}" alt="MBA in Agri Business" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Agri Business</h3>
                            <p class="tmu-card-desc">Agritech enterprise leadership, food processing management, and rural marketing.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('agri_business.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 9. MBA Hospital & Healthcare Management -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_healthcare.jpg') }}" alt="MBA Hospital & Healthcare Management" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA Hospital & Healthcare Management</h3>
                            <p class="tmu-card-desc">Healthcare administration, hospital operations, patient care systems, and health informatics.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="#" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 10. MBA Operations Strategy & Project Management -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_operations.jpg') }}" alt="MBA Operations Strategy & Project Management" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA Operations Strategy & Project Management</h3>
                            <p class="tmu-card-desc">Process optimization, agile project execution, strategic operations, and risk management.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="#" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 11. MBA in Banking, Fintech & AI -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="pg">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge pg">Postgraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_mba_fintech.jpg') }}" alt="MBA in Banking, Fintech & AI" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 2 Years</span>
                                <span class="meta-item"><i class="bi bi-mortarboard"></i> Master's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">MBA in Banking, Fintech & AI</h3>
                            <p class="tmu-card-desc">Digital banking ecosystems, AI in algorithmic finance, blockchain, and automated risk analytics.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="#" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 12. Online BBA -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="ug">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge ug">Undergraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_bba.png') }}" alt="Online BBA" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 3 Years</span>
                                <span class="meta-item"><i class="bi bi-book"></i> Bachelor's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">Online BBA</h3>
                            <p class="tmu-card-desc">Core business administration, leadership fundamentals, accounting, and management.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('bba.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 13. Online BCA -->
            <div class="col-lg-4 col-md-6 col-sm-12 card-column" data-level="ug">
                <div class="tmu-prog-card">
                    <div class="tmu-card-media">
                        <span class="tmu-badge ug">Undergraduate</span>
                        <img src="{{ asset('assets/img/programmes/online_bca.png') }}" alt="Online BCA" loading="lazy">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="tmu-card-body">
                        <div>
                            <div class="tmu-card-meta">
                                <span class="meta-item"><i class="bi bi-clock"></i> 3 Years</span>
                                <span class="meta-item"><i class="bi bi-code-slash"></i> Bachelor's Degree</span>
                            </div>
                            <h3 class="tmu-card-title">Online BCA</h3>
                            <p class="tmu-card-desc">Software engineering, web application development, cloud concepts, and database systems.</p>
                        </div>
                        <div class="tmu-card-footer">
                            <a href="{{ route('bca.programme') }}" class="tmu-btn-explore">
                                <span>Explore Programme</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Empty State -->
        <div id="noResultsStateBox" class="empty-state-box" style="display: none;">
            <i class="bi bi-search"></i>
            <h4>No Programmes Found</h4>
            <p>We couldn't find any programmes matching your selected filter.</p>
            <button class="btn-reset-filter" id="resetFiltersBtn">Reset All Filters</button>
        </div>

    </div>

</div>

<!-- Real-time Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const cardCols = document.querySelectorAll('.card-column');
        const countDisplay = document.getElementById('activeCountDisplay');
        const labelDisplay = document.getElementById('activeLabelDisplay');
        const emptyState = document.getElementById('noResultsStateBox');
        const resetBtn = document.getElementById('resetFiltersBtn');

        let activeFilter = 'all';

        function filterProgrammes() {
            let matchesCount = 0;

            cardCols.forEach(col => {
                const level = col.getAttribute('data-level');
                const matchesTab = (activeFilter === 'all') || (level === activeFilter);

                if (matchesTab) {
                    col.style.display = '';
                    matchesCount++;
                } else {
                    col.style.display = 'none';
                }
            });

            countDisplay.textContent = matchesCount;

            if (labelDisplay) {
                if (activeFilter === 'pg') {
                    labelDisplay.textContent = 'Postgraduate';
                } else if (activeFilter === 'ug') {
                    labelDisplay.textContent = 'Undergraduate';
                } else {
                    labelDisplay.textContent = 'Online';
                }
            }

            if (matchesCount === 0) {
                emptyState.style.display = 'block';
            } else {
                emptyState.style.display = 'none';
            }
        }

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                activeFilter = this.getAttribute('data-filter');
                filterProgrammes();
            });
        });

        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                activeFilter = 'all';
                tabBtns.forEach(b => b.classList.remove('active'));
                tabBtns[0].classList.add('active');
                filterProgrammes();
            });
        }
    });
</script>

@endsection
