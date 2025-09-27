<?php
// 1. Add and subtract 15 days
$today = new DateTime();
echo "Today: " . $today->format("d-m-Y") . "<br>";

$add = (clone $today)->modify("+15 days");
$sub = (clone $today)->modify("-15 days");

echo "After +15 days: " . $add->format("d-m-Y") . "<br>";
echo "Before -15 days: " . $sub->format("d-m-Y") . "<br>";

// 2. Using date_modify() with 25 days
$date = new DateTime();
$date->modify("+25 days");
echo "After +25 days: " . $date->format("d-m-Y") . "<br>";

$date = new DateTime();
$date->modify("-25 days");
echo "Before -25 days: " . $date->format("d-m-Y");
?>
