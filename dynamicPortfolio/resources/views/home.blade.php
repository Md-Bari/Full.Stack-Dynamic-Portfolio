<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - Laravel Developer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
  <nav>
    <div class="logo"><span>R</span>afiqul</div>
    <div class="nav-links">
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/services') }}">Services</a>
      <a href="{{ url('/projects') }}">Projects</a>
      <a href="{{ url('/testimonials') }}">Testimonials</a>
      <a href="{{ url('/contact') }}">Contact Us</a>
    </div>
    <button class="btn">Download CV</button>
  </nav>

  <section class="hero">
    <div class="hero-text">
      <h3>Hi I am</h3>
      <h2 style="color: orangered;">Md Rofiqul Bari Shitol</h2>
      <h1>Laravel Developer</h1>
      <p>Here is a professional Laravel Developer Who can develop any type of web page using laravel for you.</p>
      <button class="btn">More about ME</button>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    <div class="hero-image">
      <img src="{{ asset('assets/images/me2.png') }}" alt="Profile Photo" />
    </div>
  </section>
</body>
</html>
