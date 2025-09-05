@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/toc.css') }}">

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="mt-5">
            <h2 style="color: #ffffff;" class="mt-5">Blog</h2>
            <p class="breadcrumbs" style="color: #ffffff;">
                <a href="{{route('home')}}">Home </a> <a href="{{route('blog')}}">&gt; Blogs</a>
            </p>
        </div>
    </section>
    <!-- breadcrumb end -->
    <div class="blog-area pd-top-60 pd-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-page-content">
                        <div class="single-blog-inner">
                            <div class="thumb">
                                <img src="{{ 'https://www.tmu.ac.in/' . ($blog->post_path ?? 'assets/img/default.jpg') }}"
                                    alt="{{ $blog->alt_tag_main_image }}">

                            </div>
                            <div class="details">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> BY ADMIN</li>
                                    <li><i class="fa fa-calendar-check-o"></i> {{ $blog->posted_at }}</li>
                                </ul>
                                <h1 class="title">{{ $blog->post_title }}</h1>
                                <div class="toc">
                                    <h3>Table of Contents</h3>
                                    <ul id="tocList"></ul> <!-- TOC will be populated here by JavaScript -->
                                </div>
                                <div id="blogs69">
                                    <p>{!! $blog->full_post !!}</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tag-and-share">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>Related Tags :</h6>
                                    <div class="tags">
                                        <a href="#">Treands, </a>
                                        <a href="#">Inttero, </a>
                                        <a href="#">Estario</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                    <div class="blog-share">
                                        <h6>Share :</h6>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="blog-comment">
                            <div class="section-title style-small">
                                <h3>Comments</h3>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="assets/img/team/1.png" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5>
                                        <a href="#">Aaron Holmes</a>
                                        <span class="date">25 July 2020</span>
                                    </h5>
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat
                                        tincidunt. Nam sem lacus, ornare non ante sed, ultricies</p>
                                    <a href="#">REPLY</a>
                                </div>
                            </div>
                            <div class="media nesting">
                                <a href="#">
                                    <img src="assets/img/team/2.png" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5>
                                        <a href="#">Aaron Holmes</a>
                                        <span class="date">25 July 2020</span>
                                    </h5>
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat
                                        tincidunt. Nam sem lacus</p>
                                    <a href="#">REPLY</a>
                                </div>
                            </div>
                            <div class="media border-0">
                                <a href="#">
                                    <img src="assets/img/team/3.png" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5>
                                        <a href="#">Aaron Holmes</a>
                                        <span class="date">25 July 2020</span>
                                    </h5>
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat
                                        tincidunt. Nam sem lacus, ornare non ante sed, ultricies</p>
                                    <a href="#">REPLY</a>
                                </div>
                            </div>
                        </div>
                        <form class="blog-comment-form">
                            <div class="mb-3">
                                <h3 class="mb-0">Leave a Reply</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-inner style-bg-border">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-base">Post Comment</button>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        {{-- <div class="widget widget_search">
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> --}}
                        {{-- <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>
                            <ul class="catagory-items">
                                <li><a href="#">Tempor lorem interdum <i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">Auctor mattis lacus <i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">Dolor proin <i class="fa fa-caret-right"></i></a></li>
                                <li><a href="#">Pharetra amet <i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div> --}}
                        @if ($recentBlogs && count($recentBlogs))
                            <div class="widget widget-recent-post">
                                <h4 class="widget-title">Recent Blogs</h4>
                                <ul>
                                    @foreach ($recentBlogs as $recent)
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="{{ 'https://www.tmu.ac.in/' . ($recent->post_thumb_path ?? 'assets/img/default.jpg') }}"
                                                        alt="blog">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h5 class="title">
                                                        <a href="{{ route('show.blog', $recent->n_slug) }}">
                                                            {{ \Illuminate\Support\Str::limit($recent->post_title, 50) }}
                                                        </a>
                                                    </h5>
                                                    <div class="post-info">
                                                        <i class="fa fa-calendar"></i>
                                                        <span>{{ $recent->posted_at }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- <div class="widget widget_price">
                            <h4 class="widget-title">Price</h4>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Free Courses
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Paid Courses
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Only Subscription
                            </label>
                        </div>
                        <div class="widget widget_level">
                            <h4 class="widget-title">Level</h4>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Beginner
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Intermediate
                            </label>
                            <label class="single-checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Advanced
                            </label>
                        </div>
                        <div class="widget widget_tags mb-0">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">Art</a>
                                <a href="#">Creative</a>
                                <a href="#">Article</a>
                                <a href="#">Designer</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Project</a>
                                <a href="#">Personal</a>
                                <a href="#">Landing</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.getElementById('blogs69');
            const tocList = document.getElementById('tocList');
            const collapseAfter = 12; // Number of items after which to collapse
            let currentParent = tocList; // Initial TOC parent to which headings are appended
            let lastH2 = null; // To keep track of the last added h2
            let lastH3 = null; // To keep track of the last added h3

            if (content && tocList) {
                const headings = content.querySelectorAll('h2, h3, h4');

                headings.forEach((heading, index) => {
                    if (heading.textContent.trim() === '') return; // Skip empty headings

                    const level = parseInt(heading.tagName.charAt(1)); // Get heading level (2, 3, or 4)
                    const anchor = document.createElement('a');
                    const headingId = `heading-${index}`;
                    heading.id = headingId; // Assign a unique ID
                    anchor.href = `#${headingId}`;
                    anchor.textContent = heading.textContent;

                    const listItem = document.createElement('li');
                    listItem.appendChild(anchor);

                    if (level === 2) {
                        // If it's an h2, append directly to the main TOC list
                        tocList.appendChild(listItem);
                        currentParent = listItem; // Update currentParent to this h2 for nesting h3 and h4
                        lastH2 = listItem; // Store the reference to the last h2 added
                        lastH3 = null; // Reset h3, because we are starting fresh under a new h2
                    } else if (level === 3) {
                        if (!lastH2) {
                            // If there is no h2 yet, treat this as a top-level heading (though it's an h3)
                            tocList.appendChild(listItem);
                            currentParent = listItem; // h3 becomes the main item until h2 is found
                        } else {
                            // If it's an h3 and there's an h2, append it as a child of the last h2
                            let nestedList = currentParent.querySelector('ul');
                            if (!nestedList) {
                                nestedList = document.createElement('ul');
                                currentParent.appendChild(nestedList); // Create a nested list under the h2
                            }
                            nestedList.appendChild(listItem);
                            lastH3 = listItem; // Store the reference to the last h3 added
                        }
                    } else if (level === 4) {
                        if (!lastH3) {
                            // If there's no h3, append directly to the main toc or h2
                            if (!lastH2) {
                                tocList.appendChild(listItem); // If no h2 or h3, append directly
                            } else {
                                let nestedList = currentParent.querySelector('ul');
                                if (!nestedList) {
                                    nestedList = document.createElement('ul');
                                    currentParent.appendChild(
                                        nestedList); // Create a nested list under the h2
                                }
                                nestedList.appendChild(listItem); // Add h4 under h2 if no h3 is found
                            }
                        } else {
                            // If it's an h4, and we have an h3, append it under the last h3
                            let nestedList = lastH3.querySelector('ul');
                            if (!nestedList) {
                                nestedList = document.createElement('ul');
                                lastH3.appendChild(nestedList); // Create a nested list under the last h3
                            }
                            nestedList.appendChild(listItem);
                        }
                    }

                    // Collapse list items after a certain number
                    if (index >= collapseAfter) {
                        listItem.classList.add('collapsed');
                        listItem.style.display = 'none';
                    }

                    // Remove link focus color after click
                    anchor.addEventListener('click', function() {
                        setTimeout(() => {
                            anchor.blur();
                        }, 100); // Slight delay to allow the click action to complete
                    });
                });

                // Add "Show More" button if needed
                if (headings.length > collapseAfter) {
                    const showMoreBtn = document.createElement('button');
                    showMoreBtn.textContent = 'Show More';
                    showMoreBtn.classList.add('tmu-btn', 'btn-1', 'read-more', 'ms-2', 'mt-2', 'py-1', 'px-3',
                        'fs-12');
                    tocList.appendChild(showMoreBtn);

                    showMoreBtn.addEventListener('click', function() {
                        const collapsedItems = tocList.querySelectorAll('.collapsed');
                        collapsedItems.forEach(item => {
                            item.style.display = item.style.display === 'none' ? 'list-item' :
                                'none';
                        });
                        showMoreBtn.textContent = showMoreBtn.textContent === 'Show More' ? 'Show Less' :
                            'Show More';
                    });
                }
            }
        });
    </script>

@endsection
