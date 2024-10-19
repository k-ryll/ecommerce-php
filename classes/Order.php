<?php

class Order {
    public function addToCart($product) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        
        $productId = $product->id;
        
        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]->quantity += $product->quantity; // Increment quantity
        } else {
            $_SESSION['cart'][$productId] = $product; // Add new product
        }

        $this->updateTotal();
    }

    public function displayCart() {
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo "<p>Your cart is empty.</p>";
            return;
        }

        foreach ($_SESSION['cart'] as $product) {
            echo "<div class='cart-item'>";
            echo "<h3>{$product->name}</h3>";
            echo "<p>Price: \${$product->price}</p>";
            echo "<p>Quantity: {$product->quantity}</p>";
            echo "</div>";
        }
        echo "<p><strong>Total: \$" . number_format($this->getTotal(), 2) . "</strong></p>";

    }

    public function getTotal() {
        $total = 0;

        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
                $total += $product->price * $product->quantity;
            }
        }

        return $total;
    }

    // Method to update the total in the session
    private function updateTotal() {
        $_SESSION['total'] = $this->getTotal();
    }
}
?>