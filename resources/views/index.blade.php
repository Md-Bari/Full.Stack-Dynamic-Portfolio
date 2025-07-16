<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Portfolio - Laravel Developer')</title>

  <!-- External Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

  @stack('style')
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ url('/') }}"><span>Rafiqul</span>Shitol</a>

      <!-- Toggle Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/academic') }}">Academics</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/testimonials') }}">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>

        <!-- CV Button -->
        <div class="text-lg-end text-center">
          <a href="{{ asset('cv.pdf') }}" download>
            <button class="btn btn-cv">Download CV</button>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div>
    @yield('content')
  </div>
  <!-- Footer -->
  <footer class="site-footer mt-5">
    <div class="container py-4">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-3">
          <h5 class="footer-logo"><span>Rafiqul</span>Shitol</h5>
          <p class="text-muted">A passionate Laravel developer delivering clean and modern web solutions.</p>
        </div>

        <div class="col-md-4 mb-3">
          <h6 class="text-uppercase fw-bold mb-2">Quick Links</h6>
          <ul class="list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-4 mb-3">
          <h6 class="text-uppercase fw-bold mb-2">Follow Me</h6>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <hr />
      <div class="text-center small text-muted">
        © {{ date('Y') }} Md Rofiqul Bari Shitol. All Rights Reserved.
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
