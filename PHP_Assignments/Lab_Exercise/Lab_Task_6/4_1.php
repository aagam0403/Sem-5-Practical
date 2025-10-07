<?php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
?>
<html>
<body>
    <h2>Matrix</h2>
    <table border="1">
        <?php
        foreach($matrix as $row) {
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