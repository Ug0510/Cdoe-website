@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

  <!-- Breadcrumb Section -->
  <section class="breadcrumb-section">
    <div class="mt-5">
      <h1>Facilities</h1>
      <p class="breadcrumbs" style="color: #ffffff;">
        <a href="#">Home </a> &gt; Facilities
      </p>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <h2>Watch Our Latest Video</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5Z7qEEcWy5g?si=bW-l032sUhtaW78S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </section>

  <!-- Gallery Section -->
  <section class="container gallery-section">
    <!-- Image 1 -->
    <div class="gallery-item">
      <a href="#lightbox1">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_115921AMByGPSMapCamera.jpg" alt="Gallery Image 1">
      </a>
    </div>
    <div id="lightbox1" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_115921AMByGPSMapCamera.jpg" alt="Gallery Image 1">
    </div>

    <!-- Image 2 -->
    <div class="gallery-item">
      <a href="#lightbox2">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_120444PMByGPSMapCamera.jpg" alt="Gallery Image 2">
      </a>
    </div>
    <div id="lightbox2" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_120444PMByGPSMapCamera.jpg" alt="Gallery Image 2">
    </div>

    <!-- Image 3 -->
    <div class="gallery-item">
      <a href="#lightbox3">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_120828PMByGPSMapCamera.jpg" alt="Gallery Image 3">
      </a>
    </div>
    <div id="lightbox3" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_120828PMByGPSMapCamera.jpg" alt="Gallery Image 3">
    </div>

    <!-- Image 4 -->
    <div class="gallery-item">
      <a href="#lightbox4">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_122403PMByGPSMapCamera.jpg" alt="Gallery Image 4">
      </a>
    </div>
    <div id="lightbox4" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_122403PMByGPSMapCamera.jpg" alt="Gallery Image 4">
    </div>

    <!-- Image 5 -->
    <div class="gallery-item">
      <a href="#lightbox5">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_124942PMByGPSMapCamera.jpg" alt="Gallery Image 5">
      </a>
    </div>
    <div id="lightbox5" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_124942PMByGPSMapCamera.jpg" alt="Gallery Image 5">
    </div>

    <!-- Image 6 -->
    <div class="gallery-item">
      <a href="#lightbox6">
        <img src="https://www.cdoe.tmu.ac.in/img/20231227_125147PMByGPSMapCamera.jpg" alt="Gallery Image 6">
      </a>
    </div>
    <div id="lightbox6" class="lightbox">
      <button class="lightbox-close" onclick="window.location.hash=''">×</button>
      <img src="https://www.cdoe.tmu.ac.in/img/20231227_125147PMByGPSMapCamera.jpg" alt="Gallery Image 6">
    </div>
  </section>

  @endsection