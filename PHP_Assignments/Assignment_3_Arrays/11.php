<?php
$directions = array("Up"=>"North","Down"=>"South","Left"=>"West","Right"=>"East");
echo "Keys: ".implode(", ",array_keys($directions))."<br>";
echo "Values: ".implode(", ",array_values($directions));
?>
