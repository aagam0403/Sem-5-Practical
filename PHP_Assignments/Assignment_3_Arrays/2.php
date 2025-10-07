<?php
function reverseSort($arr){
    rsort($arr);
    return $arr;
}
$array1 = array(32,344,12,1,31);
$array2 = str_split("GLS UNIVERSITY");
print_r(reverseSort($array1));
echo "<br>";
print_r(reverseSort($array2));
?>
