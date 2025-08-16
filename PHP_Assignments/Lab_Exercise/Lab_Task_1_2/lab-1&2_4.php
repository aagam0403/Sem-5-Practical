<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
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
