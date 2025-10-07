<?php
$students = array(
    array(
        "Roll Number" => "101",
        "Name" => "John",
        "Course" => "IT",
        "Marks" => 95
    ),
    array(
        "Roll Number" => "102",
        "Name" => "Alice",
        "Course" => "CS",
        "Marks" => 88
    ),
    array(
        "Roll Number" => "103",
        "Name" => "Bob",
        "Course" => "IT",
        "Marks" => 92
    ),
    array(
        "Roll Number" => "104",
        "Name" => "Eve",
        "Course" => "CS",
        "Marks" => 85
    ),
    array(
        "Roll Number" => "105",
        "Name" => "Charlie",
        "Course" => "IT",
        "Marks" => 98
    )
);
$top_student = $students[0]; 
foreach($students as $student) {
    if($student["Marks"] > $top_student["Marks"]) {
        $top_student = $student;
    }
}
?>
<html>
<body>
    <h2>All Student Details</h2>
<table border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Course</th>
            <th>Marks</th>
        </tr>
<?php
        foreach($students as $student) {
            echo "<tr>";
            echo "<td>".$student["Roll Number"]."</td>";
            echo "<td>".$student["Name"]."</td>";
            echo "<td>".$student["Course"]."</td>";
            echo "<td>".$student["Marks"]."</td>";
            echo "</tr>";
        }
?>
</table>
    <h2>Top Scorer</h2>
    <table border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Course</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td><?php echo $top_student["Roll Number"]; ?></td>
            <td><?php echo $top_student["Name"]; ?></td>
            <td><?php echo $top_student["Course"]; ?></td>
            <td><?php echo $top_student["Marks"]; ?></td>
        </tr>
    </table>
</body>
</html>