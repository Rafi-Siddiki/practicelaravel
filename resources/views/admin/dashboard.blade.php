<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edf2f7;
            color: #2d3748;
        }

        .navbar {
            background-color: #1a202c;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h2 {
            margin: 0;
            font-size: 20px;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-left: 10px;
            background-color: #2d3748;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #4a5568;
        }

        .logout-button {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #2d3748;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #4a5568;
        }

        .user-name {
            color: #a0aec0;
            margin-left: 10px;
            font-size: 16px;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        .container h1 {
            font-size: 28px;
            margin: 20px 0;
            color: #1a202c;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 40px;
            color: #4a5568;
        }

        .card h3 {
            margin: 15px 0;
            font-size: 18px;
            color: #2d3748;
        }

        .card a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>Admin Dashboard</h2>
        <div class="nav-links">
            <span class="user-name">Welcome, {{ Auth::user()->name }}</span>
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                @csrf
                <button type="submit" class="logout-button">Log Out</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>
        <div class="dashboard">
            <div class="card">
                <i class="fas fa-box"></i>
                <h3>Manage Products</h3>
            </div>
            <div class="card">
                <i class="fas fa-shopping-cart"></i>
                <h3>Edit Orders</h3>
            </div>
            <div class="card">
                <i class="fas fa-tag"></i>
                <h3>Create Coupons</h3>
            </div>
            <div class="card">
                <i class="fas fa-user-plus"></i>
                <h3>Create Staff Accounts</h3>
            </div>
            <div class="card">
                <a href="{{ route('profile.edit') }}">
                    <i class="fas fa-user-circle"></i>
                    <h3>Edit Profile</h3>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
