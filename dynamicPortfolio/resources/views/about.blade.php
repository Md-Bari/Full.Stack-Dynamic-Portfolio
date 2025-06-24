<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About - Laravel Developer</title>
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

  <section class="about">
    <h1>About Me</h1>
    <p>Hello! I am Md Rofiqul Bari Shitol, a dedicated Laravel Developer passionate about building great web applications.</p>
    <p>I have experience working with Laravel framework and creating responsive, user-friendly websites.</p>
  </section>
</body>
</html>
