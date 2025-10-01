<?php
abstract class Shape {
    abstract public function calculateArea();
}

interface Drawable {
    public function draw();
}

class Circle extends Shape implements Drawable {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14159 * $this->radius * $this->radius;
    }

    public function draw() {
        echo "Drawing Circle with radius $this->radius<br>";
    }
}

class Rectangle extends Shape implements Drawable {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function draw() {
        echo "Drawing Rectangle with length $this->length and width $this->width<br>";
    }
}

$circle = new Circle(8);
echo "Circle Area: " . $circle->calculateArea() . "<br>";
$circle->draw();

$rectangle = new Rectangle(10, 12);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
$rectangle->draw();
?>
