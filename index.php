<?php
// Include configuration and functions;
// In a real application, you would connect to your database here
// include_once 'config.php';
// include_once 'functions.php';

// Example static product data (in a real app, this would come from a database)
$products = [
    [
        'id' => 1,
        'name' => 'Smart Watch Pro',
        'price' => 129.99,
        'image' => 'https://placehold.co/300x200/A78BFA/FFFFFF?text=Smart+Watch',
        'description' => 'A revolutionary smart watch with advanced health tracking.',
        'category' => 'Smart & Handy Watch'
    ],
    [
        'id' => 2,
        'name' => 'Wireless Headphones',
        'price' => 89.99,
        'image' => 'https://placehold.co/300x200/6366F1/FFFFFF?text=Headphones',
        'description' => 'Immersive sound experience with noise cancellation.',
        'category' => 'Modern & Stylish'
    ],
    [
        'id' => 3,
        'name' => 'Fast Charger Kit',
        'price' => 34.99,
        'image' => 'https://placehold.co/300x200/4F46E5/FFFFFF?text=Charger+Kit',
        'description' => 'Charge your devices in record time with this new system.',
        'category' => 'Latest Technology'
    ],
    [
        'id' => 4,
        'name' => 'Xenolex Smart TV',
        'price' => 799.00,
        'image' => 'https://placehold.co/300x200/312E81/FFFFFF?text=Smart+TV',
        'description' => '4K Ultra HD Smart TV with stunning visuals.',
        'category' => 'Highly Recommended'
    ],
    [
        'id' => 5,
        'name' => 'Gaming Console',
        'price' => 499.00,
        'image' => 'https://placehold.co/300x200/334155/FFFFFF?text=Console',
        'description' => 'Next-gen gaming experience with incredible graphics.',
        'category' => 'Highly Recommended'
    ],
    [
        'id' => 6,
        'name' => 'Portable Speaker',
        'price' => 59.99,
        'image' => 'https://placehold.co/300x200/1E293B/FFFFFF?text=Speaker',
        'description' => 'Compact and powerful speaker for on-the-go music.',
        'category' => 'Highly Recommended'
    ],
    [
        'id' => 7,
        'name' => 'Drone Camera',
        'price' => 299.99,
        'image' => 'https://placehold.co/300x200/0F172A/FFFFFF?text=Drone',
        'description' => 'Capture breathtaking aerial footage with ease.',
        'category' => 'Highly Recommended'
    ],
    [
        'id' => 8,
        'name' => 'Smart Home Hub',
        'price' => 149.99,
        'image' => 'https://placehold.co/300x200/1F2937/FFFFFF?text=Smart+Hub',
        'description' => 'Control all your smart devices from one central hub.',
        'category' => 'Highly Recommended'
    ],
    [
        'id' => 9,
        'name' => 'Robot Vacuum',
        'price' => 249.99,
        'image' => 'https://placehold.co/300x200/374151/FFFFFF?text=Robot+Vacuum',
        'description' => 'Automated cleaning for a spotless home.',
        'category' => 'Highly Recommended'
    ],
];

// Function to get products by category (for demonstration)
function getProductsByCategory($category, $limit = null) {
    global $products;
    $filtered = array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
    if ($limit) {
        return array_slice($filtered, 0, $limit);
    }
    return $filtered;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clexy - Your E-commerce Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif; /* Assuming Inter font for a modern look */
        }
        .navbar-brand {
            font-weight: 700;
            color: #0d6efd; /* Bootstrap primary blue */
        }
        .hero-section {
            background-color: #f8f9fa; /* Light background for hero */
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        .hero-image {
            max-height: 450px; /* Adjust as needed */
            object-fit: contain;
        }
        .category-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .category-card:hover {
            transform: translateY(-5px);
        }
        .category-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #0d6efd;
            margin: 0 auto 15px;
        }
        .product-card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 10px rgba(0,0,0,0.15);
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .banner-section {
            background: linear-gradient(to right, #0d6efd, #6610f2); /* Blue to purple gradient */
            color: white;
            padding: 60px 0;
            border-radius: 15px;
            margin-top: 50px;
        }
        .footer {
            background-color: #343a40; /* Dark footer */
            color: #f8f9fa;
            padding: 40px 0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Clexy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> (0)</a>
                        <?php
                            // PHP: Display dynamic cart item count here
                            // echo '<a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> (' . (isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0) . ')</a>';
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h1 class="display-4 fw-bold text-dark">Capture Your World<br>In Motion : ZOSMO</h1>
                    <p class="lead text-muted mt-3">Discover the ultimate stabilization for your creative journey. Smooth, cinematic shots are now within reach.</p>
                    <a href="#" class="btn btn-primary btn-lg mt-4">Shop Now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://placehold.co/600x400/007bff/FFFFFF?text=ZOSMO+Camera" class="img-fluid rounded shadow-lg hero-image" alt="ZOSMO Camera">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <img src="https://placehold.co/150x150/007bff/FFFFFF?text=Smart+Watch" class="img-fluid mb-3 mx-auto" alt="Smart & Handy Watch">
                        <h5 class="card-title fw-bold">Smart & Handy Watch</h5>
                        <p class="card-text text-muted">Explore our collection of cutting-edge smartwatches.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Collection</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <img src="https://placehold.co/150x150/28a745/FFFFFF?text=Charging+System" class="img-fluid mb-3 mx-auto" alt="Latest Technology New Charging system">
                        <h5 class="card-title fw-bold">Latest Technology New Charging system</h5>
                        <p class="card-text text-muted">Revolutionary charging solutions for all your devices.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Collection</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <img src="https://placehold.co/150x150/6f42c1/FFFFFF?text=Headphones" class="img-fluid mb-3 mx-auto" alt="Modern & Stylish">
                        <h5 class="card-title fw-bold">Modern & Stylish</h5>
                        <p class="card-text text-muted">Fashion-forward gadgets that blend style and function.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Choose your Category</h2>
            <div class="row justify-content-center text-center g-4">
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="fw-semibold">Mobile Phones</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-laptop"></i></div>
                        <p class="fw-semibold">Laptops</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-camera"></i></div>
                        <p class="fw-semibold">Cameras</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-tv"></i></div>
                        <p class="fw-semibold">TVs & Home</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-headphones-alt"></i></div>
                        <p class="fw-semibold">Audio</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a href="#" class="d-block text-decoration-none text-dark">
                        <div class="category-icon"><i class="fas fa-gamepad"></i></div>
                        <p class="fw-semibold">Gaming</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Highly Recommended</h2>
            <div class="row g-4">
                <?php
                // PHP: Loop through products to display them dynamically
                // In a real application, you would fetch these from your database
                $recommendedProducts = getProductsByCategory('Highly Recommended'); // Or fetch all products for this section
                foreach ($recommendedProducts as $product) {
                ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card product-card h-100">
                            <a href="product.php?id=<?php echo $product['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold"><?php echo $product['name']; ?></h5>
                                    <p class="card-text text-muted mb-2"><?php echo substr($product['description'], 0, 50); ?>...</p>
                                    <p class="card-text fw-bold text-primary">$<?php echo number_format($product['price'], 2); ?></p>
                                </div>
                            </a>
                            <div class="card-footer bg-white border-0 pt-0 pb-3">
                                <button class="btn btn-sm btn-outline-primary w-100 add-to-cart-btn" data-product-id="<?php echo $product['id']; ?>">
                                    Add to Cart
                                </button>
                                <?php
                                    // PHP: Add JavaScript for AJAX add to cart or form submission
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="banner-section text-center p-5 rounded-3 shadow-lg">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="https://placehold.co/300x200/FFFFFF/000000?text=TV+Image" class="img-fluid rounded" alt="Xenolex Smart TV">
                    </div>
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bold mb-3">Xenolex Smart TV</h2>
                        <p class="lead mb-4">Experience entertainment like never before with stunning visuals and smart features.</p>
                        <a href="#" class="btn btn-light btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-4">
        <div class="container text-center">
            <p>&copy; <?php echo date("Y"); ?> Clexy. All rights reserved.</p>
            <div class="social-icons mt-3">
                <a href="#" class="text-light mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // JavaScript for client-side interactions (e.g., AJAX add to cart)
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.dataset.productId;
                // In a real PHP application, you would send an AJAX request here
                // fetch('add_to_cart.php', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({ product_id: productId, quantity: 1 })
                // })
                // .then(response => response.json())
                // .then(data => {
                //     if (data.success) {
                //         alert('Product added to cart!'); // Replace with a Bootstrap modal/toast
                //         // Update cart count in navbar
                //     } else {
                //         alert('Failed to add product to cart.');
                //     }
                // })
                // .catch(error => console.error('Error:', error));
                console.log('Product ' + productId + ' added to cart (simulated).');
                alert('Product added to cart (simulated)!'); // Use a Bootstrap modal in production
            });
        });
    </script>
</body>
</html>
