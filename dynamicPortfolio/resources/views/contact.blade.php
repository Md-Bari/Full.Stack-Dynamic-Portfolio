@extends('index')
@section('content')
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
@endsection