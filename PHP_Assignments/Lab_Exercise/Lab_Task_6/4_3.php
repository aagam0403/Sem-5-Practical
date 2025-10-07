<?php
$students = array(
    "John" => array(
        "Math" => 85,
        "Science" => 90,
        "English" => 78
    ),
    "Alice" => array(
        "Math" => 92,
        "Science" => 88,
        "English" => 95
    ),
    "Bob" => array(
        "Math" => 75,
        "Science" => 80,
        "English" => 70
    )
);
?>
<html>
<body>
    <h2>Student Marks and Total</h2>
<table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Math</th>
            <th>Science</th>
            <th>English</th>
            <th>Total</th>
        </tr>
<?php
        foreach($students as $name => $marks) {
            $total = array_sum($marks);
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>".$marks["Math"]."</td>";
            echo "<td>".$marks["Science"]."</td>";
            echo "<td>".$marks["English"]."</td>";
            echo "<td>$total</td>";
            echo "</tr>";
        }
?>
</table>
</body>
</html>