<?php
class Vehicle
{
    public $name;
    public $model;
    function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }
    function displayInfo()
    {
        echo "Vehicle: " . $this->name . ", Model: " . $this->model . "<br>";
    }
}
class Car extends Vehicle
{
    function displayInfo()
    {
        echo "Car - Name: " . $this->name . ", Model: " . $this->model . "<br>";
    }
}
class Bike extends Vehicle
{
    function displayInfo()
    {
        echo "Bike - Name: " . $this->name . ", Model: " . $this->model . "<br>";
    }
}
class Truck extends Vehicle
{
    function displayInfo()
    {
        echo "Truck - Name: " . $this->name . ", Model: " . $this->model . "<br>";
    }
}
$vehicles = [
    new Car("Toyota", "Corolla"),
    new Bike("Yamaha", "R15"),
    new Truck("Tata", "LPT 1613")
];
foreach ($vehicles as $v) {
    $v->displayInfo();
}
?>