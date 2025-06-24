<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact - Laravel Developer</title>
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

  <section class="contact">
    <h1>Contact Me</h1>
    <p>You can reach me via email or phone:</p>
    <ul>
      <li>Email: rofiqul@example.com</li>
      <li>Phone: +880 1234 567890</li>
    </ul>
    <p>Or use the contact form below:</p>
    <form method="POST" action="#">
      @csrf
      <label for="name">Name:</label><br />
      <input type="text" id="name" name="name" required /><br />

      <label for="email">Email:</label><br />
      <input type="email" id="email" name="email" required /><br />

      <label for="message">Message:</label><br />
      <textarea id="message" name="message" rows="4" required></textarea><br />

      <button type="submit" class="btn">Send Message</button>
    </form>
  </section>
</body>
</html>
