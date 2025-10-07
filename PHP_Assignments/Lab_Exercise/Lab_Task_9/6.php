<?php
$str = "apple,orange;banana|grape";
$token = preg_split("/[,\;|]+/", $str);
print_r($token);
?>
