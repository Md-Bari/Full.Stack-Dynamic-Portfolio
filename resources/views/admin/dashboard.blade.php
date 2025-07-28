<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            padding: 40px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            position: relative;
        }
        h1 {
            color: #343a40;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
            background: #e9ecef;
            margin: 10px 0;
        }
        .logout-btn {
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
            font-size: 16px;
        }
        .logout-btn:hover {
            background: #c82333;
        }
        form.logout-form {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>

        <h1>Welcome, Admin!</h1>

        <div class="card">
            <h3>Total Users: {{ \App\Models\User::count() }}</h3>
        </div>
        <div class="card">
            <h3>Recent Registrations</h3>
            <ul>
                @foreach (\App\Models\User::latest()->take(5)->get() as $user)
                    <li>{{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
