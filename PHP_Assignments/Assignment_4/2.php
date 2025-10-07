<?php
$str = "Hello World";
if(preg_match("/^Hello/", $str)) {
    echo "String starts with Hello";
} else {
    echo "String does not start with Hello";
}
?>
