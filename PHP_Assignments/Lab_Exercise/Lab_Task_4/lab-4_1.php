<html>
<body>
<?php
    $res = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        $num = $_POST["num"];
        if ($num >= 0) 
            {
            if ($num > 0) 
            {
                $res = "Positive";
            }
            else
            {
                $res = "Zero";
            }
        } 
        else 
        {
            $res = "Negative";
        }
    }
?>  
<form method="POST">
    <table border="1">
        <tr>
            <th>Enter Number:</th>
            <td><input type="number" name="num"></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><?php echo $res; ?></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>
</html>
