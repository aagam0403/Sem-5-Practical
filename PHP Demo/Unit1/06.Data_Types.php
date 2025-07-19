<?php
    $name = "John";
    $age = 25;
    $price = 499.99;
    $isStudent = true;
    $skills = array("PHP","HTML","CSS");
    $middleName = NULL;

    echo "Name = ".$name."<br>";
    echo "Age = ".$age."<br>";
    echo "Price = ".$price."<br>";
    echo "Is Student ? = ".($isStudent?"Yes":"No")."<br>";
    echo "Skills = ".implode(".", $skills)."<br>";
    echo "Middle Name = ".$middleName."<br>";
?>