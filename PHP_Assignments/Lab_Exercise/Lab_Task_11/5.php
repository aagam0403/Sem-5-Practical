<?php
$servername = "localhost";
$username = "root";
$password = "Arham@1234";
$dbname = "students";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_age = $_POST['age'];
    $update_sql = "UPDATE students SET age=$new_age WHERE id=$id";
    mysqli_query($conn, $update_sql);
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM students WHERE id=$id";
    mysqli_query($conn, $delete_sql);
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
echo "<h2>Students Table</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['age']."</td>
            <td>
                <form style='display:inline;' method='POST'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <input type='number' name='age' placeholder='New Age' required>
                    <input type='submit' name='update' value='Update'>
                </form>
                <a href='?delete=".$row['id']."' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
mysqli_close($conn);
?>
