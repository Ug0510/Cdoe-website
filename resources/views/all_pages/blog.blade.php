@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Blog</h2>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                @foreach ($activeBlogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-blog-inner style-border">
                            <div class="thumb">
                                <a href="{{ url('blog/' . $blog->n_slug) }}">
                                <img src="{{ 'https://www.tmu.ac.in/' . ($blog->monaco_image_path ?? 'assets/img/default.jpg') }}"
                                    alt="{{ $blog->alt_tag_main_image ?? 'Blog image' }}">
                                </a>
                            </div>
                            <div class="details">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> {{ $blog->category ?? 'General' }}</li>
                                    <li><i class="fa fa-calendar-check-o"></i>
                                        {{ \Carbon\Carbon::parse($blog->posted_at)->format('d F, Y') }}</li>
                                </ul>
                                <h5 class="title">
                                    <a href="{{ url('blog/' . $blog->n_slug) }}">
                                        {{ \Illuminate\Support\Str::limit($blog->post_title, 70) }}
                                    </a>
                                </h5>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->post_description), 80) }}</p>
                                {{-- Optional Read More Link --}}
                                {{-- <a class="read-more-text" href="{{ url('blog/' . $blog->n_slug) }}">READ MORE <i class="fa fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- blog area end -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var title = document.querySelector('.title a');
            var text = title.innerText || title.textContent;

            // Check if the text length is more than 32 characters
            if (text.length > 32) {
                // Truncate to 32 characters and add ellipsis
                text = text.substring(0, 32) + '...';
            }

            // Update the text content of the h5 title
            title.innerText = text;
        });
    </script>

@endsection
