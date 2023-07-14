<?php
session_start();

// Retrieve the product ID and quantity from the form
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// If the shopping cart doesn't exist yet, create it as an empty array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add the product to the shopping cart
if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id] += $quantity;
} else {
    $_SESSION['cart'][$product_id] = $quantity;
}

// Redirect back to the product page
header("Location: products.php");
?>