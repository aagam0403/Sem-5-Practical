<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
<h2>Submitted School ID Registration Data</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <td><?php echo $_POST['fname'] . " " . $_POST['lname']; ?></td>
    </tr>
    <tr>
        <th>Expected Year of Graduation</th>
        <td><?php echo $_POST['year']; ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td>
            <?php 
                echo $_POST['addr1'] . "<br>" . $_POST['addr2']; 
            ?>
        </td>
    </tr>
</table>
</body>
</html>
