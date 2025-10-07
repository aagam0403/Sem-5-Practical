<?php
abstract class Shape
{
    abstract public function area();
}

interface Printable
{
    public function printDetails();
}

class Circle extends Shape implements Printable
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function printDetails()
    {
        echo "Circle Radius: {$this->radius}, Area: " . $this->area() . "<br>";
    }
}

class Square extends Shape implements Printable
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        return $this->side * $this->side;
    }

    public function printDetails()
    {
        echo "Square Side: {$this->side}, Area: " . $this->area() . "<br>";
    }
}

class Triangle extends Shape implements Printable
{
    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return 0.5 * $this->base * $this->height;
    }

    public function printDetails()
    {
        echo "Triangle Base: {$this->base},Height: {$this->height}, Area: " . $this->area() . "<br>";
    }
}

$shapes = [
    new Circle(5),
    new Square(4),
    new Triangle(6, 3)
];

foreach ($shapes as $shape) {
    $shape->printDetails();
}
?>