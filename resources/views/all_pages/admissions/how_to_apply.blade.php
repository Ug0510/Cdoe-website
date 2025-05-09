@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')


    <!-- Breadcrumb Section -->
  <section class="breadcrumb-section">
    <div class="mt-5">
      <h1>How to apply</h1>
      <p class="breadcrumbs" style="color: #ffffff;">
        <a href="#">Home </a> &gt; How to Apply
      </p>
    </div>
  </section>
    <!-- breadcrumb end -->

    <div class="container mt-5">
        <div class="course-course-detaila-inner">
            <div class="course-details-nav-tab text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="tab1" aria-selected="true">Online Mode</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                            aria-selected="false">Offline Mode</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="ratings-list-inner mb-4">
                        <div class="course-details-content text-center">
                            <h4 class="title">For Online Application follow the Steps below</h4>
                            <img src="{{ asset('assets/img/admission2.png') }}" alt="img"
                                class="img-fluid mb-4" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="ratings-list-inner mb-4">
                        <div class="course-details-content text-center">
                            <h4 class="title">For Online Application follow the Steps below</h4>
                            <img src="{{ asset('assets/img/admission1.webp') }}" alt="img"
                                class="img-fluid mb-4" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection