@extends('index')
@section('content')
<section class="container py-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold">Academic Certificates</h1>
    <p class="text-muted">Here are some of my academic achievements and certifications.</p>
  </div>

  <div class="row g-4">
    <!-- Certificate Card 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm rounded-4">
        <img src="assets\images\me.jpg" class="card-img-top rounded-top-4" alt="Certificate 1">
        <div class="card-body">
          <h5 class="card-title">Bachelor of Science in CSE</h5>
          <p class="card-text">Awarded by Daffodil International University in 2025.</p>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="path/to/certificate1.pdf" class="btn btn-outline-primary btn-sm" target="_blank">View Certificate</a>
        </div>
      </div>
    </div>

    <!-- Certificate Card 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm rounded-4">
        <img src="assets\images\me.jpg" class="card-img-top rounded-top-4" alt="Certificate 2">
        <div class="card-body">
          <h5 class="card-title">Web Development Course</h5>
          <p class="card-text">Completed from Coursera in 2024.</p>
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
          <a href="path/to/certificate2.pdf" class="btn btn-outline-primary btn-sm" target="_blank">View Certificate</a>
        </div>
      </div>
    </div>

    <!-- Add more certificates as needed -->
  </div>
</section>
@endsection
