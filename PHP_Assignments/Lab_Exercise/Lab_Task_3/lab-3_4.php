<!DOCTYPE html>
<html>
<head>
    <title>Form with Multiple Submit Buttons</title>
</head>
<body>
<?php
$n1 = $n2 = $result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if ($_POST['add'] == "Add") 
    {
        $result = $n1 + $n2;
    } 
    elseif ($_POST['sub'] == "Sub") 
    {
        $result = $n1 - $n2;
    } 
    elseif ($_POST['mul'] == "Mul") 
    {
        $result = $n1 * $n2;
    }
    elseif ($_POST['div'] == "Div") 
    {
        if ($n2 != 0) 
        {
            $result = $n1 / $n2;
        } 
        else 
        {
            $result = "Division by zero!";
        }
    }
}
?>

<form method="POST">
    <table border="1" cellpadding="5">
        <tr>
            <th colspan="2">Form with Multiple Submit Buttons</th>
        </tr>
        <tr>
            <td>Value 1</td>
            <td><input type="number" name="n1" value="<?php echo $n1; ?>" required></td>
        </tr>
        <tr>
            <td>Value 2</td>
            <td><input type="number" name="n2" value="<?php echo $n2; ?>" required></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" value="<?php echo $result; ?>" readonly></td>
        </tr>
        <tr>
            <td><input type="submit" name="add" value="Add"></td>
            <td><input type="submit" name="sub" value="Sub"></td>
        </tr>
        <tr>
            <td><input type="submit" name="mul" value="Mul"></td>
            <td><input type="submit" name="div" value="Div"></td>
        </tr>
    </table>
</form>
</body>
</html>