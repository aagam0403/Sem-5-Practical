<?php
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);
$sumMatrix = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $sumMatrix[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
    }
}
?>
<html>
<body>
    <h2>Matrix 1</h2>
<table border="1" cellpadding="10">
<?php
        foreach($matrix1 as $row) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
?>
</table>
    <h2>Matrix 2</h2>
<table border="1" cellpadding="10">
<?php
        foreach($matrix2 as $row) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
?>
</table>
    <h2>Sum of Matrices</h2>
<table border="1" cellpadding="10">
<?php
        foreach($sumMatrix as $row) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
?>
</table>
</body>
</html>