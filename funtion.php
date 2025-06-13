<?php
// functions.php

// Include the database configuration
// This ensures $conn (database connection) is available in these functions
// include_once 'config.php';

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/**
 * Fetches all products from the database.
 * @return array An array of product associative arrays.
 */
function getAllProducts() {
    global $conn; // Access the global database connection
    $products = [];
    $sql = "SELECT id, name, description, price, image_url, category FROM products ORDER BY name ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

/**
 * Fetches a single product by its ID.
 * @param int $productId The ID of the product to fetch.
 * @return array|null An associative array of product data, or null if not found.
 */
function getProductById($productId) {
    global $conn;
    $sql = "SELECT id, name, description, price, image_url, category FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc(); // Returns null if no row found
}

/**
 * Fetches products by category.
 * @param string $category The category to filter by.
 * @param int|null $limit Optional limit for the number of products.
 * @return array An array of product associative arrays.
 */
function getProductsByCategory($category, $limit = null) {
    global $conn;
    $products = [];
    $sql = "SELECT id, name, description, price, image_url, category FROM products WHERE category = ?";
    if ($limit) {
        $sql .= " LIMIT ?";
    }
    $stmt = $conn->prepare($sql);
    if ($limit) {
        $stmt->bind_param("si", $category, $limit);
    } else {
        $stmt->bind_param("s", $category);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

/**
 * Adds a product to the session-based cart.
 * @param int $productId The ID of the product to add.
 * @param int $quantity The quantity to add.
 * @return bool True on success, false on failure.
 */
function addToCart($productId, $quantity = 1) {
    // Ensure product exists before adding to cart
    $product = getProductById($productId);
    if (!$product) {
        return false; // Product not found
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$productId] = [
            'id' => $productId,
            'name' => $product['name'],
            'price' => $product['price'],
            'image' => $product['image_url'],
            'quantity' => $quantity
        ];
    }
    return true;
}

/**
 * Updates the quantity of a product in the cart.
 * @param int $productId The ID of the product to update.
 * @param int $newQuantity The new quantity.
 * @return bool True on success, false if item not in cart or quantity invalid.
 */
function updateCartQuantity($productId, $newQuantity) {
    if (!isset($_SESSION['cart'][$productId])) {
        return false; // Item not in cart
    }
    if ($newQuantity <= 0) {
        unset($_SESSION['cart'][$productId]); // Remove if quantity is 0 or less
    } else {
        $_SESSION['cart'][$productId]['quantity'] = $newQuantity;
    }
    return true;
}

/**
 * Removes a product from the cart.
 * @param int $productId The ID of the product to remove.
 * @return bool True on success, false if item not in cart.
 */
function removeFromCart($productId) {
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
        return true;
    }
    return false;
}

/**
 * Gets all items currently in the cart.
 * @return array An array of cart items.
 */
function getCartItems() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

/**
 * Calculates the total price of items in the cart.
 * @return float The total price.
 */
function getCartTotal() {
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    return $total;
}

/**
 * Clears the entire cart.
 */
function clearCart() {
    unset($_SESSION['cart']);
}

// You can add more functions here, e.g., for user authentication, order processing, etc.

?>
