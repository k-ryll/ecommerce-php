<link rel="stylesheet" href="css/cart.css">
<div class='success-message'>
<?php
include 'classes/session.php';
class Payment {
    public function processPayment($amount) {
        echo "<p class='success-text'> Payment of \$$amount processed successfully!</p>";
        unset($_SESSION['total']); 
        unset($_SESSION['cart']); 
}
}
?>

