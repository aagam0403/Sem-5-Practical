<?php
abstract class LibraryItem
{
    abstract function getDetails();
    abstract function borrowItem();
}
class Book extends LibraryItem
{
    public $name;
    public $price;
    public function __construct($n, $p)
    {
        $this->name = $n;
        $this->price = $p;
    }
    public function getDetails()
    {
        echo "Book Name : " . $this->name . "<br>";
    }
    public function borrowItem()
    {
        echo "Book Price : " . $this->price . "<br>";
    }
}
class Magazine extends LibraryItem
{
    public $name;
    public $price;
    public function __construct($n, $p)
    {
        $this->name = $n;
        $this->price = $p;
    }
    public function getDetails()
    {
        echo "Magazine Name : " . $this->name . "<br>";
    }
    public function borrowItem()
    {
        echo "Magazine Price : " . $this->price . "<br>";
    }
}
$b = new Book("PHP", 100);
$m = new Magazine("Times of India", 500);
$b->getDetails();
$b->borrowItem();
$m->getDetails();
$m->borrowItem();
?>