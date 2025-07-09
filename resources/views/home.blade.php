@extends('index')
@push('style')
<link rel="stylesheet" href="css/style.css">
@endpush
@section('content')

<section class="hero">
  <div class="hero-text">
    <h3>Hi I am</h3>
    <h2 style="color: orangered;">Md Rofiqul Bari Shitol</h2>
    <h1>Laravel Developer</h1>
    <p>Here is a professional Laravel Developer Who can develop any type of web page using Laravel for you.</p>
    <a href="{{ url('/about') }}"><button class="btn">More about ME</button></a>
  </div>

  <div class="hero-image">
    <div class="image-wrapper">
      <img src="{{ asset('assets/images/shitol.png') }}" alt="Profile Photo" />
    </div>

    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
  </div>
</section>

<!-- Floating Project Cards -->
<section class="project-floats">
  <h2 class="section-title">Projects & Experience</h2>
  <div class="floating-cards">
    <div class="float-card">
      <h3>Projects</h3>
      <p>10+</p>
    </div>
    <div class="float-card">
      <h3>Experience</h3>
      <p>3+ Years</p>
    </div>
    <div class="float-card">
      <h3>Clients</h3>
      <p>10+</p>
    </div>
  </div>
</section>

@endsection
