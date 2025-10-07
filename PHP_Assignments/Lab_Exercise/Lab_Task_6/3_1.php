<?php
$student = array(
    "Roll Number" => "101",
    "Name" => "John",
    "Course" => "IT",
    "Marks" => 95
);
?>
<html>
<body>
    <h2>Student Details</h2>
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
<?php
        foreach($student as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
?>
    </table>
</body>
</html>
