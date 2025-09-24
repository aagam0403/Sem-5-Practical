<?php
// yyyy-mm-dd to dd-mm-yyyy
$date = "2024-09-22";
$newDate = date("d-m-Y", strtotime($date));
echo "Converted Date: $newDate <br>";

// Convert string to date
$date = "10:30pm April 15 2014";
echo "Formatted Date: " . date("d-m-Y H:i:s", strtotime($date));
?>
