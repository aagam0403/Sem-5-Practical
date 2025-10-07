<?php
class Car {
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    function displayInfo() {
        echo "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}<br>";
    }
}

$car1 = new Car("Toyota", "Fortuner", 2022);
$car2 = new Car("Hyundai", "Creta", 2023);

$car1->displayInfo();
$car2->displayInfo();
?>