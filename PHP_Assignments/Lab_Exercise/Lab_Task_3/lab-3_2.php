<html>
<body>
<form action="lab-3_2_2.php" method="POST">
    <table border="1" cellpadding="5">
        <tr>
            <th colspan="2">School ID Registration Form</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
            </td>
        </tr>
        <tr>
            <td>Expected Year of Graduation</td>
            <td>
                <input type="number" name="year" placeholder="Enter Graduation Year" required>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <input type="text" name="addr1" placeholder="Street Address" required><br><br>
                <input type="text" name="addr2" placeholder="Address Line 2">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
