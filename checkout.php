<div class="checkout">
<link rel="stylesheet" href="css/cart.css">
<?php
include 'classes/session.php';
echo "<h2>Checkout Page</h2>";

if (isset($_SESSION['total'])) {
    $total = number_format($_SESSION['total'], 2);
    echo "<p>Total Amount: \${$total}</p>";
} else {
    echo "<p>Your cart is empty.</p>";
}

echo "<a href='success.php'>Pay with Dummy Credit Card</a>";
?>
</div>
