<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 450px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-login {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
        }
        .btn-login:hover {
            background: #218838;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Register</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <!-- Display session error -->
    @if (session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="id">User ID</label>
            <input type="text" name="id" id="id" value="{{ old('id') }}" required>
        </div>

        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="student_id">Student ID </label>
            <input type="text" name="student_id" id="student_id" value="{{ old('student_id') }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone </label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>

        <div class="form-group">
            <label for="avatar">Avatar (Profile Picture)</label>
            <input type="file" name="avatar" id="avatar" accept="image/*">
        </div>

        <div class="form-group">
            <label for="password">Password </label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password </label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit" class="btn-login">Register</button>
    </form>
</div>
</body>
</html>
