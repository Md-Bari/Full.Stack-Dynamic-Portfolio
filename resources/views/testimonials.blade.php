@extends('index')

@push('style')
<link rel="stylesheet" href="css/testimonial.css">
@endpush

@section('content')

<button class="toggle-mode" onclick="toggleDarkMode()">Toggle Dark Mode</button>

<section class="testimonials">
  <h1 id="typedTitle">Testimonials</h1>

  <div class="testimonials-grid" id="testimonialSlider">
    <div class="testimonial-card">
      <img src="{{ asset('assets/images/Wallpaper.jpg') }}" alt="Client A Photo" class="testimonial-image">
      <p>“Md Rofiqul is an excellent developer. Delivered our project on time and with great quality!”</p>
      <div class="testimonial-author">— Client A</div>
    </div>

    <div class="testimonial-card">
      <img src="{{ asset('assets/images/p2.jpg') }}" alt="Client B Photo" class="testimonial-image">
      <p>“Highly professional and communicative, would recommend him for Laravel projects.”</p>
      <div class="testimonial-author">— Client B</div>
    </div>

    <div class="testimonial-card">
      <img src="{{ asset('assets/images/p3.jpg') }}" alt="Client C Photo" class="testimonial-image">
      <p>“Rofiqul took our idea and turned it into a live product, exceeding our expectations.”</p>
      <div class="testimonial-author">— Client C</div>
    </div>
  </div>
</section>

<script src="js/script.js"></script>

@endsection
