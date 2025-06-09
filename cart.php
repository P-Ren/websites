<?php
// include_once 'config.php';
// include_once 'function.php';

// In a real application, you would manage session for cart items
// session_start();

// Example static cart data (in a real app, this would come from $_SESSION['cart'])
$cartItems = [
    [
        'id' => 1,
        'name' => 'Smart Watch Pro',
        'price' => 129.99,
        'image' => 'https://placehold.co/100x70/A78BFA/FFFFFF?text=Smart+Watch',
        'quantity' => 1
    ],
    [
        'id' => 2,
        'name' => 'Wireless Headphones',
        'price' => 89.99,
        'image' => 'https://placehold.co/100x70/6366F1/FFFFFF?text=Headphones',
        'quantity' => 2
    ],
    [
        'id' => 3,
        'name' => 'Fast Charger Kit',
        'price' => 34.99,
        'image' => 'https://placehold.co/100x70/4F46E5/FFFFFF?text=Charger',
        'quantity' => 1
    ]
];

$cartTotal = array_reduce($cartItems, function($sum, $item) {
    return $sum + ($item['price'] * $item['quantity']);
}, 0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Clexy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .navbar-brand {
            font-weight: 700;
            color: #0d6efd;
        }
        .cart-item-image {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
        }
        .cart-summary-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
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
                        <a class="nav-link" href="index.php">Home</a>
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
                        <a class="nav-link active" aria-current="page" href="cart.php"><i class="fas fa-shopping-cart"></i> (<?php echo count($cartItems); ?>)</a>
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

    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Your Shopping Cart</h2>

            <?php if (empty($cartItems)): ?>
                <div class="alert alert-info text-center" role="alert">
                    Your cart is empty. <a href="index.php" class="alert-link">Start shopping!</a>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Cart Items</h4>
                                <?php foreach ($cartItems as $item): ?>
                                    <div class="row align-items-center py-3 border-bottom">
                                        <div class="col-md-2">
                                            <img src="<?php echo $item['image']; ?>" class="img-fluid rounded cart-item-image" alt="<?php echo $item['name']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="mb-0"><?php echo $item['name']; ?></h5>
                                            <small class="text-muted">Price: $<?php echo number_format($item['price'], 2); ?></small>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-sm">
                                                <button class="btn btn-outline-secondary quantity-btn" type="button" data-action="decrease" data-item-id="<?php echo $item['id']; ?>">-</button>
                                                <input type="text" class="form-control text-center" value="<?php echo $item['quantity']; ?>" readonly>
                                                <button class="btn btn-outline-secondary quantity-btn" type="button" data-action="increase" data-item-id="<?php echo $item['id']; ?>">+</button>
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <p class="fw-bold mb-0">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p>
                                        </div>
                                        <div class="col-md-1 text-end">
                                            <button class="btn btn-danger btn-sm remove-item-btn" data-item-id="<?php echo $item['id']; ?>"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card cart-summary-card bg-light">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Order Summary</h4>
                                <ul class="list-group list-group-flush">
                                    <?php foreach ($cartItems as $item): ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
                                            <?php echo $item['name']; ?> (x<?php echo $item['quantity']; ?>)
                                            <span>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center bg-light fw-bold text-primary fs-5">
                                        Total:
                                        <span>$<?php echo number_format($cartTotal, 2); ?></span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-lg w-100 mt-4">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <footer class="footer mt-auto py-4 bg-dark text-light">
        <div class="container text-center">
            <p>&copy; <?php echo date("Y"); ?> Clexy. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.dataset.itemId;
                const action = this.dataset.action;
                const input = this.parentNode.querySelector('input');
                let quantity = parseInt(input.value);

                if (action === 'increase') {
                    quantity++;
                } else if (action === 'decrease' && quantity > 1) {
                    quantity--;
                }
                input.value = quantity;

                // PHP: In a real application, send AJAX request to update cart in session/database
                // fetch('update_cart.php', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({ item_id: itemId, quantity: quantity })
                // })
                // .then(response => response.json())
                // .then(data => {
                //     if (data.success) {
                //         // Reload page or update cart totals dynamically
                //         window.location.reload();
                //     } else {
                //         alert('Failed to update cart.');
                //     }
                // })
                // .catch(error => console.error('Error:', error));
                console.log(`Item ${itemId} quantity updated to ${quantity} (simulated).`);
                // For this static demo, just reload to reflect changes if you modify the PHP array.
                // In a dynamic app, you'd update the display without full reload.
                // alert('Cart updated (simulated)!'); // Replace with a Bootstrap toast/modal
            });
        });

        document.querySelectorAll('.remove-item-btn').forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.dataset.itemId;
                if (confirm('Are you sure you want to remove this item from your cart?')) { // Replace with Bootstrap modal
                    // PHP: In a real application, send AJAX request to remove item from cart
                    // fetch('remove_from_cart.php', {
                    //     method: 'POST',
                    //     headers: { 'Content-Type': 'application/json' },
                    //     body: JSON.stringify({ item_id: itemId })
                    // })
                    // .then(response => response.json())
                    // .then(data => {
                    //     if (data.success) {
                    //         window.location.reload();
                    //     } else {
                    //         alert('Failed to remove item.');
                    //     }
                    // })
                    // .catch(error => console.error('Error:', error));
                    console.log(`Item ${itemId} removed from cart (simulated).`);
                    alert('Item removed (simulated)!'); // Replace with a Bootstrap toast/modal
                    // For this static demo, you would need to manually remove from the $cartItems array
                    // and re-render the page, or just reload for simplicity.
                    // window.location.reload();
                }
            });
        });
    </script>
</body>
</html>
