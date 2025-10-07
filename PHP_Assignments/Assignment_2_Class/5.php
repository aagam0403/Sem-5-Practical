<?php
abstract class Shape {
    abstract public function calculateArea();
}

interface Drawable {
    public function draw();
}

class Circle extends Shape implements Drawable {
    private $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14159 * $this->radius * $this->radius;
    }

    public function draw() {
        echo "Drawing a Circle<br>";
    }
}

class Rectangle extends Shape implements Drawable {
    private $width;
    private $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function draw() {
        echo "Drawing a Rectangle<br>";
    }
}

$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "<br>";
$circle->draw();

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
$rectangle->draw();
?>
