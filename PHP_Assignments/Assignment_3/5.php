<?php
// Next 6 Sundays
echo "Next 6 Sundays:<br>";
for($i=1; $i<=6; $i++){
    echo date("d-m-Y", strtotime("next Sunday +".($i-1)." week")) . "<br>";
}

// Next Thursday
echo "<br>Next Thursday: " . date("d-m-Y", strtotime("next Thursday"));
?>
