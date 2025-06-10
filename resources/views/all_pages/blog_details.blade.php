@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Blog Details</h2>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="blog-area pd-top-120 pd-bottom-120">
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
                                <h3 class="title">{{ $blog->post_title }}</h3>
                                <p>{!! $blog->full_post !!}</p>
                            </div>
                        </div>
                        <div class="tag-and-share">
                            <div class="row">
                                <div class="col-sm-6">
                                    {{-- <h6>Related Tags :</h6>
                                    <div class="tags">
                                        <a href="#">Treands, </a>
                                        <a href="#">Inttero, </a>
                                        <a href="#">Estario</a>
                                    </div> --}}
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
                        </div>
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
                                                        <a href="{{ route('blog.detail', $recent->n_slug) }}">
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

@endsection
