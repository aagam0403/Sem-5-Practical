<?php
$birthDate = new DateTime("2000-05-15");
$currentDate = new DateTime("now");

$diff = $currentDate->diff($birthDate);
echo "Age: " . $diff->y . " years, " . $diff->m . " months, " . $diff->d . " days.";
?>
