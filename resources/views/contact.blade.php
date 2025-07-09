@extends('index')
@section('content')
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow-sm rounded-4">
        <div class="card-body p-5">
          <h1 class="text-center mb-4">Contact Me</h1>
          <p class="text-center mb-3">You can reach me via:</p>
          <ul class="list-unstyled text-center mb-4">
            <li><strong>Email:</strong> rofiqul@example.com</li>
            <li><strong>Phone:</strong> +880 1234 567890</li>
          </ul>
          <p class="text-center mb-4">Or use the contact form below:</p>

          <form method="POST" action="#">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control rounded-3" id="name" name="name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control rounded-3" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control rounded-3" id="message" name="message" rows="4" required></textarea>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg rounded-3">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
