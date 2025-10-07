<?php
$data = array(
    "Employee1"=>array("Name"=>"Ravi","Age"=>25,"Dept"=>"HR"),
    "Employee2"=>array("Name"=>"Rahul","Age"=>30,"Dept"=>"Sales")
);
print_r($data);
echo "<br>Total Elements: ".count($data,1);
?>
