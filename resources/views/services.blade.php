@extends('index')
@section('content')

<!-- Add Font Awesome (only once in your layout, if not added already) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<section class="services">
    <h1>My Services</h1>
    <ul class="service-list">
        <li><i class="fas fa-code"></i> Custom Laravel Web Development</li>
        <li><i class="fas fa-plug"></i> RESTful API Development</li>
        <li><i class="fas fa-tools"></i> Website Maintenance & Support</li>
        <li><i class="fas fa-database"></i> Database Design and Optimization</li>
        <li><i class="fab fa-vuejs"></i> Front-end Development with Blade & Vue.js</li>
    </ul>
</section>

<style>
.services {
    padding: 40px;
    background-color: #f4f4f4;
    text-align: center;
}

.services h1 {
    margin-bottom: 30px;
    font-size: 2em;
    color: #333;
}

.service-list {
    list-style: none;
    padding: 0;
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}

.service-list li {
    font-size: 18px;
    margin: 15px 0;
    display: flex;
    align-items: center;
}

.service-list i {
    margin-right: 12px;
    color: #0d6efd;
    min-width: 24px;
    font-size: 20px;
}
</style>

@endsection
