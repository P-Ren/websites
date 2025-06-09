<?php
// config.php

// Database configuration
define('DB_HOST', 'localhost'); // Your database host
define('DB_USER', 'root');     // Your database username
define('DB_PASS', '');         // Your database password
define('DB_NAME', 'ecommerce'); // Your database name

// Establish database connection (using MySQLi for example)
// In a real application, you would handle connection errors more robustly
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    // Set character set to utf8mb4 for proper emoji and international character support
    $conn->set_charset("utf8mb4");

} catch (Exception $e) {
    // Log the error and display a user-friendly message
    error_log($e->getMessage()); // Log the error to your server's error log
    die("Database connection failed. Please try again later."); // Display a generic error to the user
}

// You can also define other global settings here, e.g.,
// define('SITE_NAME', 'Clexy E-commerce');
// define('CURRENCY_SYMBOL', '$');

// Start session (important for cart management and user login)
// session_start();

?>
