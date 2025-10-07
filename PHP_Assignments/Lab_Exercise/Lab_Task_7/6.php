<?php
    $str="Name,Age,Course,Grade";
    $token=strtok($str,",");
    while ($token) {
    echo $token . "<br>";
    $token = strtok(","); 
}
?>