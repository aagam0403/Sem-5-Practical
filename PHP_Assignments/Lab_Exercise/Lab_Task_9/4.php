<?php
$str = "Number are 12345 and 500";
preg_match_all('/\d+/',$str,$matches);
print_r($matches[0]);
?>