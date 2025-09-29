<?php
    class Car 
    {
        public $brand;
        public $model;
        public $year;

        public function displayInfo() 
        {
            echo "Brand: $this->brand, Model: $this->model, Year: $this->year<br>";
        }
    }

    $car1 = new Car();
    $car1->brand = "Ford";
    $car1->model = "Mustang";
    $car1->year = 2021;
    $car1->displayInfo();

    $car2 = new Car();
    $car2->brand = "Tesla";
    $car2->model = "Model S";
    $car2->year = 2023;
    $car2->displayInfo();
?>