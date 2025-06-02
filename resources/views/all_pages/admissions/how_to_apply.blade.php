@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')


    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="mt-5">
            <h1 style="color: #ffffff;" class="mt-5">How to apply</h1>
            <p class="breadcrumbs" style="color: #ffffff;">
                <a href="#">Home </a> &gt; How to Apply
            </p>
        </div>
    </section>
    <!-- breadcrumb end -->

    <div class="container mt-5">
        <!-- <div class="row justify-content-center mb-3">
            <div class="col-xl-8 col-lg-10 col-md-11">
                <div class="section-title style-white text-center">
                    <h2 class="title">How to Apply</h2>
                </div>
            </div>
        </div> -->
        <div class="course-course-detaila-inner">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="ratings-list-inner mb-4">
                        <div class="course-details-content text-center">
                            <h4 class="title">For Online Application, follow the steps below</h4>
                            <img src="{{ asset('assets/img/admission2.png') }}" alt="img" class="img-fluid mb-4"
                                style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection