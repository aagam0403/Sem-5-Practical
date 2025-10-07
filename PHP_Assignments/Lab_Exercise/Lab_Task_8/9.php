<?php
class CartItem
{
    public $name;
    public $price;
    public $quantity;
    public function getTotalPrice($n, $p, $q)
    {
        $this->name = $n;
        $this->price = $p;
        $this->quantity = $q;
        echo "Name : " . $this->name . "<br>";
        echo "Price : " . $this->price . "<br>";
        echo "Quantity : " . $this->quantity . "<br>";
        echo "Total Price : " . ($this->price * $this->quantity);
    }
}
$c = new CartItem();
$c->getTotalPrice("Apple", 20, 5);
?>