<?php
$servername="localhost";
$username="root";
$password="";
$dbname="students";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>";
while ($row = mysqli_fetch_array($result)) 
{
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['age'] . "</td>
          </tr>";
}
echo "</table>";
mysqli_close($conn);
?>