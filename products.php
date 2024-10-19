<?php 
    include 'includes/header.php';
    include 'classes/product_list.php';
?>
<link rel="stylesheet" href="css/homepage.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/style.css">
<div class="product">
<?php
include 'classes/session.php';
include_once 'classes/Product.php';


foreach ($products as $product) {
    $product->displayProduct();
}

?>    
</div>
<?php
    include 'includes/footer.php';
?>



