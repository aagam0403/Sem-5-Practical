<?php
session_start();
$correct_username = "admin";
$correct_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['n'];
    $password = $_POST['p'];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
        header("Location: 1_2.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<html>
<body>
    <?php 
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form method="POST">
        <table border="1">
            <tr>
                <td>UserName :</td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="p"></td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="2"><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
