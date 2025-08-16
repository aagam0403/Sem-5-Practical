<html>
    <head>
        <title>Student Result</title>
    </head>
    <body>
        <form action="lab-5_3_2.php" method="POST">
            <table border="1">
                <tr>
                    <th colspan="2">Student Exam Result</th>
                </tr>
                <tr>
                    <td>Student Name:</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>English:</td>
                    <td><input type="number" name="english" required></td>
                </tr>
                <tr>
                    <td>Math:</td>
                    <td><input type="number" name="math" required></td>
                </tr>
                <tr>
                    <td>Science:</td>
                    <td><input type="number" name="science" required></td>
                </tr>
                <tr>
                    <td>Computer:</td>
                    <td><input type="number" name="computer" required></td>
                </tr>
                <tr>
                    <td>Social Studies:</td>
                    <td><input type="number" name="ss" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Show Result"></td>
                </tr>
            </table>
        </form>
    </body>
</html>