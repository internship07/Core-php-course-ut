<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['product_name'];
    $price = floatval($_POST['product_price']);

    if ($name && !is_nan($price)) {
        $_SESSION['products'][] = ['name' => $name, 'price' => $price];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Billing Form</h1>
<form method="post">
    <label>Product Name</label>
    <input type="text" name="product_name" required>
    <label>Product Price</label>
    <input type="number" name="product_price" required>
    <button type="submit">Add Product</button>
</form>

<h2>Invoice</h2>
<ul id="product-list">
    <?php 
    $total = 0;
    foreach ($_SESSION['products'] as $product) {
        echo "<li>{$product['name']} - ₹{$product['price']}</li>";
        $total += $product['price'];
    }
    ?>
</ul>

<h3>Total Price: <span id="total-price">₹<?= number_format($total, 2) ?></span></h3>
<button id="clear-form">Clear Form</button>
<script src="script.js"></script>
</body>
</html>