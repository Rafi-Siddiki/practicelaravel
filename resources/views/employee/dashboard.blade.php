<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #1a202c;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h2 {
            margin: 0;
            font-size: 18px;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar a,
        .navbar .logout-form button {
            color: white;
            background-color: #4a5568;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .navbar a:hover,
        .navbar .logout-form button:hover {
            background-color: #2d3748;
        }

        .navbar .user-name {
            color: #a0aec0;
            font-size: 16px;
        }

        .container {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .container h1 {
            font-size: 28px;
            color: #2d3748;
            margin-bottom: 20px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 40px;
            color: #2d3748;
        }

        .card h3 {
            margin: 15px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>Employee Dashboard</h2>
        <div class="nav-links">
            <span class="user-name">Welcome, {{ Auth::user()->name }}</span>
            <a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i> Edit Profile</a>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i> Log Out</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h1>Welcome to the Employee Dashboard</h1>
        <div class="dashboard">
            <div class="card">
                <i class="fas fa-box"></i>
                <h3>Update Order Status</h3>
            </div>
            <div class="card">
                <i class="fas fa-shopping-cart"></i>
                <h3>Cancel Order</h3>
            </div>
            <div class="card">
                <i class="fas fa-eye"></i>
                <h3>View Stock</h3>
            </div>
        </div>
    </div>

</body>
</html>
