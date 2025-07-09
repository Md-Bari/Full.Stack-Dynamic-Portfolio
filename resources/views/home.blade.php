@extends('index')

@push('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
@endpush

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-text">
        <h3>Hey there!</h3>
        <h2 style="color: orangered;">Md Rofiqul Bari Shitol</h2>
        <h1>Laravel Developer</h1>
        <p>Here is a professional Laravel Developer who can develop any type of web page using Laravel for you.</p>
        <a href="{{ url('/about') }}" class="btn">See My Work</a>


    </div>

    <div class="hero-image">
        <div class="image-decor">
            <div class="blob-background"></div>
            <img src="{{ asset('assets/images/shitol.png') }}" alt="Profile Photo" class="profile-photo" />
        </div>
        <div class="social-icons">
            <br>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</section>

<!-- Floating Project Cards -->
<section class="project-floats text-center py-5 bg-light">
    <h2 class="section-title mb-5">Projects & Experience</h2>
    <div class="container d-flex justify-content-center gap-4 flex-wrap">
        <div class="float-card p-4 bg-white shadow rounded-4">
            <h3>Projects</h3>
            <p>10+</p>
        </div>
        <div class="float-card p-4 bg-white shadow rounded-4">
            <h3>Experience</h3>
            <p>3+ Years</p>
        </div>
        <div class="float-card p-4 bg-white shadow rounded-4">
            <h3>Clients</h3>
            <p>10+</p>
        </div>
    </div>
</section>

@endsection
