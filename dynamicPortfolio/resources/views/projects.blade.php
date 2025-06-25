@extends('index')
@push('style')
<link rel="stylesheet" href="css/Project.css">
@endpush
@section('content')
<header>
    <h1>My Project Gallery</h1>
  </header>

  <main>
    <div class="project-container">
      <div class="project-card">
        <img src="assets/images/Wallpaper.jpg" alt="Project 1">
        <div class="project-content">
          <h2 class="project-title">Project One</h2>
          <p class="project-desc">A web based project on Data analysis.</p>
        </div>
      </div>

      <div class="project-card">
        <img src="assets/images/p2.jpg" alt="Project 2">
        <div class="project-content">
          <h2 class="project-title">Organico</h2>
          <p class="project-desc">A e commerce website for finding organic Products.</p>
        </div>
      </div>

      <div class="project-card">
        <img src="assets/images/p3.jpg" alt="Project 3">
        <div class="project-content">
          <h2 class="project-title">Project Three</h2>
          <p class="project-desc">A short description of Project Three goes here.</p>
        </div>
      </div>
    </div>
  </main>

@endsection