<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Mobile: <input type="text" name="mobile" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    if(!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Invalid Name<br>";
    }
    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
        echo "Invalid Email<br>";
    }
    if(!preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Invalid Mobile Number<br>";
    }
    if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/", $password)) {
        echo "Weak Password<br>";
    }

    if(preg_match("/^[a-zA-Z ]+$/", $name) &&
       preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email) &&
       preg_match("/^[0-9]{10}$/", $mobile) &&
       preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/", $password)) {
        echo "Registration Successful";
    }
}
?>
</body>
</html>
