
   <link rel="stylesheet" href="css/cart.css">
   <?php
    include 'classes/session.php';
class Product {
    const DEFAULT_QUANTITY = 1;

    public $id;
    public $name;
    public $price;
    public $imagesrc;
    public $quantity;

    public function __construct($id, $name, $price, $description, $imagesrc,$quantity = self::DEFAULT_QUANTITY) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imagesrc = $imagesrc;
        $this->quantity = $quantity;
    }
    
    public function displayProduct() {
        echo "<div >
                <img src='{$this->imagesrc}' class='image' alt='{$this->name}'>
                <h2>{$this->name}</h2>
                <p>{$this->description}</p>
                <p>Price: {$this->price}</p>
                <a href='cart.php?add={$this->id}'>Add to Cart</a>
              </div>
                ";
    }
    
}
?>
    
