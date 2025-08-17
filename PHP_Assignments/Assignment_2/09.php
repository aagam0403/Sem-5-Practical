<?php
function changeByValue($num) {
    $num = $num + 10;
    echo "Inside changeByValue function: " . $num . "<br>";
}
function changeByReference(&$num) 
{
    $num = $num + 10;
    echo "Inside changeByReference function: " . $num . "<br>";
}

$value = 50;
echo "Original value: " . $value . "<br>";

changeByValue($value);
echo "After calling changeByValue: " . $value . "<br><br>";

changeByReference($value);
echo "After calling changeByReference: " . $value . "<br>";
?>
