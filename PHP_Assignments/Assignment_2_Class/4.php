<?php
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function display() {
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }
}

class Student extends Person {
    public $rollNo;

    function __construct($name, $age, $rollNo) {
        parent::__construct($name, $age);
        $this->rollNo = $rollNo;
    }

    function display() {
        echo "Name: {$this->name}, Age: {$this->age}, Roll No: {$this->rollNo}<br>";
    }
}

$student1 = new Student("Hetu", 20, 101);
$student1->display();
?>
