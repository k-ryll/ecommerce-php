<link rel="stylesheet" href="css/homepage.css">
<link rel="stylesheet" href="css/cart.css">
<?php
    include 'includes/header.php';
?>
<div class="checkout">
<?php

include 'classes/Order.php';
include 'classes/Product.php';
include_once 'classes/product_list.php'; 

$order = new Order();
if (isset($_GET['add'])) {
    $productId = $_GET['add'];

    if (isset($products[$productId])) {
        $product = $products[$productId];
        $order->addToCart($product); 
    } else {
        echo "Product not found.";
    }
}

if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']); 
    unset($_SESSION['total']); 
}



echo "<h2>Your Cart:</h2>";
?>
<div class="cart-container">
<?php
$order->displayCart();


?>
</div>
<form method="POST">
    <button type="submit" name="clear_cart">Clear Cart</button>
</form>

</div>
<?php 
    include "checkout.php";
    include 'includes/footer.php';
?>
