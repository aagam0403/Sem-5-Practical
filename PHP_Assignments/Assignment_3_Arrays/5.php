<?php
function AVERAGE($arr){
    return array_sum($arr)/count($arr);
}
$temp = array(32,43,13,56,75,33,65);
echo "Average: ".AVERAGE($temp);
?>
