<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Projects - Laravel Developer</title>
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

  <section class="projects">
    <h1>Projects</h1>
    <p>Here are some of the projects I have worked on:</p>
    <ul>
      <li>Portfolio Website (This Site)</li>
      <li>E-commerce Platform with Laravel and Vue.js</li>
      <li>Blog CMS with Custom Admin Panel</li>
      <li>Booking System for Small Businesses</li>
    </ul>
  </section>
</body>
</html>
