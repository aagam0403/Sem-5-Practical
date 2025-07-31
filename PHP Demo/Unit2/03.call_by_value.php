<?php
function addTen($num)
{
    $num=$num+10;
    echo "Inside function,value is $num";
}
$original=20;
echo "Before function call, value is: $original";

addTen($original);
echo "After function call,value is: $original";
?>