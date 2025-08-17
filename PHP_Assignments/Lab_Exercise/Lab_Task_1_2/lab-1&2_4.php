<!DOCTYPE html>
<html>
<body>
    <?php
        $n1 = 24;
        $n2 = 12;
    ?>

    <h2>Arithmetic Operations on <?php echo "$n1 and $n2"; ?></h2>

    <table>
        <tr>
            <th>Add</th>
            <th>Sub</th>
            <th>Mul</th>
            <th>Div</th>
        </tr>
        <tr>
            <td><?php echo ($n1 + $n2); ?></td>
            <td><?php echo ($n1 - $n2); ?></td>
            <td><?php echo ($n1 * $n2); ?></td>
            <td><?php echo round($n1 / $n2, 2); ?></td>
        </tr>
    </table>
</body>
</html>
