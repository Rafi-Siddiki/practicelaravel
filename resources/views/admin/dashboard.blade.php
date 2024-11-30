<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #1a202c;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
        }
        .navbar a:hover {
            background-color: #2d3748;
        }
        .container {
            display: flex;
            flex-direction: column;
            padding: 20px;
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
        .logout-form {
            display: inline;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>Admin Dashboard</h2>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">Log Out</button>
        </form>
    </div>

    <div class="container">
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
        </div>
    </div>

</body>
</html>