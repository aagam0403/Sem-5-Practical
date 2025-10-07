<?php
class Product
{
    public $name;
    public $price;
    public static $count = 0;
    const discount = 0.1;
    public function __construct($n, $p)
    {
        $this->name = $n;
        $this->price = $p;
        self::$count += 1;
    }
    public function finalprice()
    {
        echo "Final Price : " . ($this->price - ($this->price * self::discount)) . "<br>";
    }
}
$p = new Product("abcd", 100);
$p->finalprice();
?>