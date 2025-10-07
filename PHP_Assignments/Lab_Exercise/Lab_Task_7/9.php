<?php
$today=date_create();
$new_year=date("Y")+1;
$next_year=date_create("1 January $new_year");
$diff=date_diff($today,$next_year);
echo "Days left : ".$diff->days;
?>