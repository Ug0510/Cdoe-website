@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

<style>
    /* Breadcrumb Section */
    .breadcrumb-section {
      background-image: url('{{ asset('assets/img/bread-crum.jpg') }}');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .breadcrumb-section h1 {
      font-size: 3rem;
      font-weight: 600;
    }

    .breadcrumb-section .breadcrumb {
      font-size: 1.2rem;
    }

    .breadcrumb-section .breadcrumb a {
      color: white;
      text-decoration: none;
    }

    .breadcrumb-section .breadcrumb a:hover {
      text-decoration: underline;
    }

    /* Video Section */
    .video-section {
      margin: 40px auto;
      text-align: center;
    }

    .video-section iframe {
      width: 80%;
      max-width: 900px;
      height: 500px;
      border: none;
    }

    /* Gallery Section */
    .gallery-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 40px 5%;
    }

    .gallery-item {
      width: 48%;
      margin-bottom: 20px;
    }

    .gallery-item img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .gallery-item img:hover {
      transform: scale(1.05);
    }

    /* Lightbox Styles */
    .lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
      flex-direction: column;
    }

    .lightbox img {
      max-width: 90%;
      max-height: 90%;
      z-index: 1;
    }

    .lightbox:target {
      display: flex;
    }

    .lightbox-close {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      color: black;
      font-size: 20px;
      font-weight: bold;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .lightbox-close:hover {
      background-color: rgba(255, 255, 255, 1);
    }
  </style>
  <!-- Breadcrumb Section -->
  <section class="breadcrumb-section">
    <div>
      <h1>Your Page Title</h1>
      <p class="breadcrumb">
        <a href="#">Home</a> &gt; <a href="#">Gallery</a> &gt; Current Page
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