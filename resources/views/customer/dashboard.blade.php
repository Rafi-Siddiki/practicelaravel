<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #edf2f7;
            color: #2d3748;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .navbar {
            background-color: #1a202c;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar h2 {
            margin: 0;
            font-size: 20px;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar a,
        .navbar .logout-form button {
            background-color: #4a5568;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar a:hover,
        .navbar .logout-form button:hover {
            background-color: #2d3748;
        }

        .navbar .logout-form {
            margin: 0;
            display: inline;
        }

        .navbar .user-name {
            color: #a0aec0;
            font-size: 16px;
        }

        .container {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            text-align: center;
        }

        .container h1 {
            font-size: 28px;
            color: #2d3748;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2d3748;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
            flex: 1 1 calc(33.333% - 20px);
            margin: 10px;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .product-card p {
            color: #666;
        }

        .product-card button {
            background-color: #1a202c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-card button:hover {
            background-color: #2d3748;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>Customer Dashboard</h2>
        <div class="nav-links">
            <span class="user-name">Welcome, {{ Auth::user()->name }}</span>
            <a href="#"><i class="fas fa-truck"></i> Track Orders</a>
            <a href="{{ route('profile.edit') }}"><i class="fas fa-user-circle"></i> Edit Profile</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i> Log Out</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h1>Welcome to the Customer Dashboard</h1>

        <!-- Electronics Section -->
        <div class="section">
            <h2>Electronics</h2>
            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Smartphone">
                    <h3>Smartphone</h3>
                    <p>$699</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Laptop">
                    <h3>Laptop</h3>
                    <p>$999</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Headphones">
                    <h3>Headphones</h3>
                    <p>$199</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Food Section -->
        <div class="section">
            <h2>Food</h2>
            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Pizza">
                    <h3>Pizza</h3>
                    <p>$15</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Burger">
                    <h3>Burger</h3>
                    <p>$10</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Clothing Section -->
        <div class="section">
            <h2>Clothing</h2>
            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="T-Shirt">
                    <h3>T-Shirt</h3>
                    <p>$25</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Jacket">
                    <h3>Jacket</h3>
                    <p>$60</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
