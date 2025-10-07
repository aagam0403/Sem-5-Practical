<?php
$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
echo "<table border=1>";
foreach($matrix as $row){
    echo "<tr>";
    foreach($row as $val){
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
