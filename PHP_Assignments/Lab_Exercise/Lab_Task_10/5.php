<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);
    if ($username === "admin" && $password === "1234") {
        $_SESSION['username'] = $username;
        if ($remember) {
            setcookie("remember_user", $username, time() + 86400);
        } else {
            setcookie("remember_user", "", time() - 3600);
        }
        $message = "Login successful!";
    } else {
        $message = "Invalid username or password!";
    }
}
$stored_username = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : "";
?>
<html>
<body>
<h2><?php if(isset($message)) echo $message; ?></h2>
<form method="POST">
    Username: <input type="text" name="username" value="<?php echo $stored_username; ?>" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Remember Me: <input type="checkbox" name="remember" <?php if($stored_username) echo "checked"; ?>><br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>