<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function display() {
        echo "Name: $this->name, Age: $this->age<br>";
    }
}

class Student extends Person {
    public $rollNo;

    public function __construct($name, $age, $rollNo) {
        parent::__construct($name, $age);
        $this->rollNo = $rollNo;
    }

    public function display() {
        echo "Name: $this->name, Age: $this->age, Roll No: $this->rollNo<br>";
    }
}

$student1 = new Student("Rahul", 22, "305");
$student1->display();

?>