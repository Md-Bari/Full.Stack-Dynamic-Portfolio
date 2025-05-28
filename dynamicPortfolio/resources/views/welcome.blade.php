<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>

    .flex-container {
      display: flex;
      justify-content: space-between; 
      align-items: center;
    }

    .nav-links a {
      margin-left: 15px;
      text-decoration: none;
      color: #000;
      font-weight: 500;
    }

    nav {
      padding: 10px 20px;
      border-bottom: 1px solid #ccc;
      font-family: Arial, sans-serif;
    }

    section {
      padding: 20px;
      font-family: Arial, sans-serif;
    }

    section img {
      max-width: 150px;
      border-radius: 8px;
    }

    h1 {
      margin-bottom: 0;
    }

    h3 {
      margin-top: 5px;
      color: #555;
    }
    .no-decor{
        text-decoration:none;
    }
    .no-decor:hover{
        background-color:red;
        padding:6px;
        margin:10px;
    }
  </style>
  <title>Md Rofiqul Bari Shitol</title>
</head>
<body>
  <nav>
    <div class="flex-container">
      <div class="logo">Shitol</div>
      <div class="nav-links">
        <a href="#" class="no-decor">About</a>
        <a href="#" class="no-decor" >Research Projects</a>
        <a href="#" class="no-decor">Blog</a>
        <a href="#" class="no-decor">Contact</a>
        <a href="#" class="no-decor">LinkedIn</a>
        <a href="#" class="no-decor">GitHub</a>
      </div>
    </div>
  </nav>
  <section>
    <div class="flex-container">
      <div>
        <h1>Myself Md Rofiqul Bari Shitol</h1>
        <h3>I am Daffodil International University.</h3>
      </div>
      <div>
        <img src="assets/images/img.jpeg" alt="Md Rofiqul Bari Shitol" />
      </div>
    </div>
  </section>
</body>
</html>
