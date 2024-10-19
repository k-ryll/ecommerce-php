<?php
include 'includes/header.php';
include 'classes/Payment.php';
include 'classes/session.php';

$payment = new Payment();
$payment->processPayment($_SESSION['total']);

include 'includes/footer.php';
?>
<link rel="stylesheet" href="css/cart.css">
