<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nokshi - Handmade Products</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <h1>Nokshi</h1>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>New Collection 2018</h2>
            <p>Handmade pottery products designed with love.</p>
            <a href="#" class="btn">View Products</a>
        </div>
    </section>

    <!-- Product Collection -->
    <section class="collection">
        <div class="container">
            <h2>Our Collection</h2>
            <div class="products">
                <?php
                $products = [
                    ["name" => "Pottery Tea Mug", "price" => "$30.00", "image" => "assets/product1.jpg"],
                    ["name" => "Pottery Showpiece", "price" => "$40.00", "image" => "assets/product2.jpg"],
                    ["name" => "Pottery Water Jug", "price" => "$50.00", "image" => "assets/product3.jpg"],
                ];

                foreach ($products as $product) {
                    echo "
                    <div class='product'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h3>{$product['name']}</h3>
                        <p>{$product['price']}</p>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- New Collection -->
    <section class="new-collection">
        <div class="container">
            <h2>New Collection</h2>
            <div class="products">
                <?php
                $newProducts = [
                    ["name" => "Handmade Pot", "price" => "$35.00", "image" => "assets/product4.jpg"],
                    ["name" => "Pottery Tea Mug", "price" => "$30.00", "image" => "assets/product5.jpg"],
                    ["name" => "Pottery Water Jug", "price" => "$50.00", "image" => "assets/product6.jpg"],
                ];

                foreach ($newProducts as $product) {
                    echo "
                    <div class='product'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h3>{$product['name']}</h3>
                        <p>{$product['price']}</p>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 Nokshi. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>