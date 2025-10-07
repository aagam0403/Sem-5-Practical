<?php
$str = "Order ID: 2456, Amount: 500";
preg_match_all("/\d+/", $str, $matches);
print_r($matches[0]);
?>
