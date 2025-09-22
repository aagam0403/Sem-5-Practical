<?php
$date1 = new DateTime("2024-01-01");
$date2 = new DateTime("2024-09-22");

$diff = $date1->diff($date2);
echo "Number of days: " . $diff->days;
?>
