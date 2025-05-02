@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    {{-- Keep necessary styles, remove tab-specific ones --}}
    <style>
        .banner-title {
            position: absolute;
            top: 40%;
            left: 5%;
            transform: translateY(-50%);
            color: #fff;
            text-align: start;
            font-size: 2.4rem;
            font-weight: 700;
            max-width: 50vw;
        }

        #curriculum-section .single-faq-inner .card-header button {
            padding: 1rem;
            border-radius: 30px;
            background-color: #c2c2c230;
        }

        .single-faq-inner .card-header button i {
            right: 20px;
        }

        .single-faq-inner .card-body {
            padding: 0.5rem 1.5rem 0;
        }
    </style>

    <style>
        /* --- Global Styles & Variables --- */
        :root {
            --primary-color: #FF7900;
            --primary-color-dark: #E05A00;
            --secondary-color: #F8F9FA;
            --text-color: #343A40;
            --light-text-color: #6C757D;
            --border-color: #E9ECEF;
            --card-bg: #FFFFFF;
            --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.05);
            --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.08);
            --border-radius: 12px;
            --transition-speed: 0.3s;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            color: var(--text-color);
            background-color: #fdfdff;
            /* Very light off-white background */
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Curriculum Section --- */
        .curriculum-section {
            padding: 80px 0;
            overflow: hidden;
            /* Contain shadows */
        }

        /* --- Section Header --- */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .section-header h2 .highlight {
            color: var(--primary-color);
            font-weight: 700;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--light-text-color);
            max-width: 600px;
            margin: 0 auto 25px auto;
            /* Center the paragraph */
        }

        .btn-download {
            display: inline-block;
            background-color: var(--primary-color);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            /* Pill shape */
            text-decoration: none;
            font-weight: 500;
            transition: background-color var(--transition-speed) ease, transform var(--transition-speed) ease;
            box-shadow: 0 4px 10px rgba(255, 107, 0, 0.3);
            /* Orange glow */
        }

        .btn-download i {
            margin-right: 8px;
        }

        .btn-download:hover {
            background-color: var(--primary-color-dark);
            transform: translateY(-2px);
        }

        /* --- Stats Grid --- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
            text-align: center;
        }

        .stat-item {
            background-color: var(--card-bg);
            padding: 25px 15px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: transform var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            line-height: 1;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-color);
            line-height: 1.2;
        }

        .stat-label {
            font-size: 14px;
            line-height: 16px;
            margin-top: 6px;
            color: var(--light-text-color);
            font-weight: 400;
        }

        /* --- Curriculum Accordion --- */
        .curriculum-accordion {
            max-width: 900px;
            /* Slightly narrower than container */
            margin: 0 auto;
        }

        .accordion-item {
            background-color: var(--card-bg);
            margin-bottom: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-medium);
            /* Shadow from Image 2 */
            overflow: hidden;
            /* Important for max-height transition */
            border: 1px solid var(--border-color);
            /* Subtle border */
        }

        .accordion-header {
            background-color: transparent;
            /* Keep card background */
            border: none;
            width: 100%;
            padding: 20px 25px;
            text-align: left;
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-color);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color var(--transition-speed) ease;
            font-family: 'Poppins', sans-serif;
            /* Ensure font consistency */
        }

        .accordion-header:hover {
            background-color: #f8f9fa;
            /* Very subtle hover */
        }

        .toggle-icon {
            font-size: 1rem;
            color: var(--primary-color);
            transition: transform var(--transition-speed) ease;
        }

        /* Rotate icon when active */
        .accordion-item.active .toggle-icon {
            transform: rotate(180deg);
        }

        .accordion-content {
            max-height: 0;
            /* Initially hidden */
            overflow: hidden;
            transition: max-height var(--transition-speed) ease-out, padding var(--transition-speed) ease-out;
            /* Smooth transition */
            padding: 0 25px;
            /* No padding when closed */
            background-color: var(--card-bg);
            /* Ensure bg matches header */
        }

        /* Style for when content is shown */
        .accordion-item.active .accordion-content {
            /* max-height is set dynamically by JS */
            padding: 25px 25px 30px 25px;
            /* Add padding when open */
            border-top: 1px solid var(--border-color);
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            /* Responsive grid */
            gap: 20px;
            padding: 1rem 0 2rem;
        }

        .course-card {
            background-color: var(--secondary-color);
            /* Slightly different background for cards */
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            /* Subtle card border */
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .course-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.06);
        }

        .course-code {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .course-name {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-color);
            margin: 0;
            /* Override default p margin */
            line-height: 1.5;
        }

        .coming-soon {
            font-style: italic;
            color: var(--light-text-color);
            padding: 10px 0;
            /* Add some space */
        }


        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 20px;
            }

            .stat-icon {
                font-size: 2rem;
                margin-bottom: 10px;
            }

            .stat-number {
                font-size: 1.5rem;
            }

            .stat-label {
                font-size: 0.8rem;
            }

            .accordion-header {
                font-size: 1.1rem;
                padding: 18px 20px;
            }

            .accordion-item.active .accordion-content {
                padding: 20px;
            }

            .course-grid {
                grid-template-columns: 1fr;
                /* Stack cards on smaller screens */
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .section-header h2 {
                font-size: 1.8rem;
            }

            .section-header p {
                font-size: 1rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                /* 2 columns on smallest screens */
                gap: 15px;
            }

            .stat-item {
                padding: 20px 10px;
            }

            .btn-download {
                padding: 10px 25px;
                font-size: 0.9rem;
            }

            .accordion-header {
                font-size: 1rem;
                padding: 15px;
            }
        }



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



        /* Carreer Path Section Start   */
        /* --- Career Paths Section --- */
        .career-paths-section {
            padding: 80px 0;
            background-color: var(--secondary-color, #F8F9FA);
            /* Light background */
            overflow: hidden;
            /* Prevent potential horizontal scroll */
        }

        .career-paths-header {
            text-align: center;
            margin-bottom: 60px;
            max-width: 80vw;
            margin-left: auto;
            margin-right: auto;
        }

        .career-paths-header h2 {
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .career-paths-header h2 span {
            color: var(--primary-color, #FF6B00);
            font-weight: 700;
        }

        .career-paths-header p {
            font-size: 1.05rem;
            color: var(--light-text-color, #6C757D);
            line-height: 1.8;
        }

        .career-paths-content {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
            align-items: center;
            /* Vertically align items */
            gap: 40px;
            /* Space between image and list */
        }

        .career-paths-image-col {
            flex: 1 1 40%;
            /* Flex basis 40%, allow grow/shrink */
            min-width: 300px;
            /* Prevent image column from getting too small */
        }

        .career-image {
            display: block;
            width: 100%;
            height: auto;
            border-radius: var(--border-radius, 12px);
            /* Use theme radius */
            box-shadow: var(--shadow-medium, 0 8px 25px rgba(0, 0, 0, 0.08));
            /* Use theme shadow */
            object-fit: cover;
            /* Crop image nicely if aspect ratio differs */
            max-height: 450px;
            /* Optional: constrain image height */
        }

        .career-paths-list-col {
            flex: 1 1 55%;
            /* Flex basis 55%, allow grow/shrink */
        }

        .career-path-list {
            list-style: none;
            /* Remove default bullets */
            padding: 0;
            margin: 0;
            /* Create two columns using CSS Columns */
            column-count: 2;
            column-gap: 30px;
            /* Space between columns */
        }

        .career-path-item {
            display: flex;
            align-items: flex-start;
            /* Align icon with top of text line */
            margin-bottom: 18px;
            /* Space between list items */
            font-size: 1rem;
            color: var(--text-color, #343A40);
            font-weight: 500;
            break-inside: avoid-column;
            /* Prevent items from breaking across columns */
            padding: 5px 0;
            /* Add a little vertical padding */
            transition: color 0.3s ease;
        }

        .career-path-item i {
            color: var(--primary-color, #FF6B00);
            /* Use theme primary color */
            font-size: 1.1em;
            /* Slightly larger icon */
            margin-right: 12px;
            /* Space between icon and text */
            margin-top: 2px;
            /* Fine-tune vertical alignment */
        }

        /* Optional: Subtle hover effect */
        .career-path-item:hover {
            color: var(--primary-color, #FF6B00);
        }

        .career-path-item:hover i {
            transform: scale(1.1);
            /* Slightly grow icon on hover */
            transition: transform 0.2s ease;
        }

        /* --- Responsive Adjustments for Career Paths --- */
        @media (max-width: 992px) {
            .career-paths-header h2 {
                font-size: 2.1rem;
            }

            .career-paths-content {
                gap: 30px;
            }

            /* Optionally adjust flex-basis if needed */
        }


        @media (max-width: 768px) {
            .career-paths-header h2 {
                font-size: 1.8rem;
            }

            .career-paths-header p {
                font-size: 1rem;
            }

            .career-paths-header {
                margin-bottom: 40px;
            }

            /* Stack image and list on medium screens */
            .career-paths-image-col,
            .career-paths-list-col {
                flex: 1 1 100%;
                /* Make both take full width */
            }

            .career-paths-image-col {
                margin-bottom: 30px;
                /* Add space below image when stacked */
                text-align: center;
                /* Center image if needed */
            }

            .career-image {
                max-width: 80%;
                /* Don't let image stretch full width */
                margin: 0 auto;
                /* Center it */
            }
        }

        @media (max-width: 576px) {
            .career-path-list {
                column-count: 1;
                /* Go to a single column list on small screens */
            }

            .career-image {
                max-width: 95%;
                /* Allow image slightly wider */
            }

            .career-path-item {
                font-size: 0.95rem;
                margin-bottom: 15px;
            }

            .career-path-item i {
                margin-right: 10px;
            }

            .career-paths-section {
                padding: 40px 0;
            }
        }

        /* Carrer path section end */



        /* Who can apply Section start */
        /* --- Eligibility Section --- */
        .eligibility-section {
            padding: 80px 0;
            /* Optional: Add a subtle background gradient or texture if desired */
            /* background: linear-gradient(180deg, #fff 80%, var(--secondary-color, #f8f9fa) 100%); */
            background-color: #fff;
            /* Keep it clean by default */
        }

        .eligibility-card {
            background-color: var(--card-bg, #FFFFFF);
            border-radius: var(--border-radius, 12px);
            box-shadow: var(--shadow-medium, 0 8px 25px rgba(0, 0, 0, 0.08));
            overflow: hidden;
            /* Important for graphic positioning later if needed */
            position: relative;
            /* Context for absolute positioning if graphic overlaps */
            border: 1px solid var(--border-color, #E9ECEF);
        }

        .eligibility-content {
            display: flex;
            flex-wrap: wrap;
            /* Wrap on smaller screens */
            align-items: center;
            /* Align items vertically */
        }

        .eligibility-text {
            flex: 1 1 60%;
            /* Takes up more space */
            padding: 40px 45px;
            /* Generous padding */
            min-width: 300px;
            /* Ensure text area doesn't get too cramped */
        }

        .eligibility-title {
            font-size: 2.2rem;
            /* Slightly smaller than section headers */
            font-weight: 700;
            color: var(--text-color, #343A40);
            margin-bottom: 8px;
        }

        .eligibility-subtitle {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--light-text-color, #6C757D);
            margin-bottom: 30px;
        }

        .eligibility-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .eligibility-list li {
            display: flex;
            align-items: flex-start;
            /* Align icon with top of text */
            margin-bottom: 20px;
            /* Space between criteria */
            font-size: 1rem;
            line-height: 1.7;
            color: var(--text-color, #343A40);
        }

        .eligibility-list li i {
            font-size: 1.2em;
            /* Icon size */
            color: var(--primary-color, #FF6B00);
            /* Use theme color */
            margin-right: 15px;
            /* Space icon from text */
            margin-top: 3px;
            /* Fine-tune vertical align */
            flex-shrink: 0;
            /* Prevent icon from shrinking */
        }

        .eligibility-graphic {
            flex: 1 1 35%;
            /* Takes up less space */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            /* Optional: Add a subtle background pattern or different bg color here */
            /* background-color: var(--secondary-color, #f8f9fa); */
            min-height: 250px;
            /* Ensure space for graphic */
        }

        .plus-graphic {
            width: 120px;
            /* Adjust size as needed */
            height: 120px;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
            /* Soft shadow on graphic */
        }

        .plus-graphic line {
            stroke-width: 12;
            /* Thickness of the plus sign lines */
            stroke-linecap: round;
            /* Rounded ends */
        }


        /* --- Responsive Adjustments for Eligibility --- */

        @media (max-width: 992px) {
            .eligibility-text {
                padding: 35px 40px;
            }

            .plus-graphic {
                width: 100px;
                height: 100px;
            }
        }


        @media (max-width: 768px) {
            .eligibility-content {
                flex-direction: column-reverse;
                /* Stack: Graphic *above* text on mobile */
            }

            .eligibility-text,
            .eligibility-graphic {
                flex: 1 1 100%;
                /* Full width for both */
            }

            .eligibility-text {
                padding: 30px 25px 40px 25px;
                /* Adjust padding */
                text-align: center;
                /* Center text content */
            }

            .eligibility-title {
                font-size: 1.9rem;
            }

            .eligibility-subtitle {
                font-size: 1rem;
                margin-bottom: 25px;
            }

            .eligibility-list li {
                text-align: left;
                /* Keep list items left-aligned */
                font-size: 0.95rem;
                margin-bottom: 15px;
            }

            .eligibility-list li i {
                margin-right: 10px;
            }

            .eligibility-graphic {
                padding: 30px 20px;
                /* Reduce padding */
                min-height: auto;
                /* Remove min-height */
            }

            .plus-graphic {
                width: 80px;
                /* Smaller graphic */
                height: 80px;
                margin-bottom: 10px;
                /* Add space below graphic when stacked */
                filter: drop-shadow(0 3px 6px rgba(0, 0, 0, 0.1));
            }

            .plus-graphic line {
                stroke-width: 10;
            }
        }

        /* Who can apply section end  */
    </style>
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <img src="https://www.tmu.ac.in/uploads/programme_banners//1743837521_NaWW4UxPtR.jpg" alt="Programme Banner">
        <div class="banner-title">
            Master of Business Administration in Human Resource Management
        </div>
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
                            <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
                                Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz,
                                bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz
                                whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting
                                zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew
                                my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax
                                my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my
                                brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job,
                                kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad
                                quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick
                                brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves
                                quack! Blowzy red vixens fight for a quick jump.</p>
                            <div class="row pt-4">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Metus interdum metus
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Ligula cur maecenas
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Fringilla nulla
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Metus interdum metus
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Ligula cur maecenas
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Fringilla nulla
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                <h2>Career Paths After Online MBA <span>in Data Science and AI</span></h2>
                                <p>Transform your future at the nexus of data and innovation with Our Online MBA with
                                    Data Science specialisation. Discover varied career trajectories and spearhead
                                    change as a leader in data science and AI strategy as -</p>
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
                                            <i class="fas fa-check-circle"></i> Data Science Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Business Intelligence Director
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Analytics Solutions Architect
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Science Team Lead
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Analytics Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Governance Specialist
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Chief Analytics Officer
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Data Engineering Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> AI Strategy Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Machine Learning Engineer
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Chief Data Officer
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> AI Product Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Director of Data Strategy
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Predictive Analytics Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> AI Ethics Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Business Analytics Manager
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
                                        <svg class="plus-graphic" viewBox="0 0 100 100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="plusGradient" x1="0%" y1="0%"
                                                    x2="100%" y2="100%">
                                                    <!-- Use your theme's primary color and a variation -->
                                                    <stop offset="0%"
                                                        style="stop-color:var(--primary-color, #FF6B00); stop-opacity:1" />
                                                    <stop offset="100%"
                                                        style="stop-color:var(--primary-color-dark, #E05A00); stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <!-- Horizontal Bar -->
                                            <line x1="10" y1="50" x2="90" y2="50"
                                                stroke="url(#plusGradient)" />
                                            <!-- Vertical Bar -->
                                            <line x1="50" y1="10" x2="50" y2="90"
                                                stroke="url(#plusGradient)" />
                                        </svg>
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
                            <p class="text-justify">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax
                                quiz prog.
                                Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz,
                                bad nymph, for quick jigs vex! Fox nymphs grab</p>
                            {{-- Make sure accordion IDs are unique --}}
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                01. What does you simply dummy in do ?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    {{-- Ensure the 'show' class is only on the item you want open by default, or none --}}
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            What does you dummy text of free available in market printing has
                                            industry been industry's standard dummy text ever.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-six" aria-expanded="false" aria-controls="f-six">
                                                02. What graphics dummy of free design ?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            What graphics simply dummy text of free available in market printing
                                            industry has been industry's standard dummy text ever.
                                        </div>
                                    </div>
                                </div>
                                {{-- ... (rest of accordion items for faq) ... --}}
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-seven">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-seven" aria-expanded="false" aria-controls="f-seven">
                                                03. Why we are the best ?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-seven" class="collapse" aria-labelledby="ff-seven"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Why we are dummy text of free available in market printing industry
                                            has been industry's standard dummy text ever.
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-eight">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse"
                                                data-target="#f-eight" aria-expanded="false" aria-controls="f-eight">
                                                04. What industries dummy covered ?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-eight" class="collapse" aria-labelledby="ff-eight"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            What industries text of free available in market printing industry
                                            has been industry's standard dummy text ever.
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
