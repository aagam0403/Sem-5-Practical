<?php
$date1 = mktime(10, 30, 0, 8, 15, 2025);
echo "Mktime : " . date("l, d-M-Y h:i A", $date1) . "<br>";
$date2 = strtotime("15 August 2025 10:30 am");
echo "strtotime : " . date("l, d-M-Y h:i A", $date2);
?>
