<?php
$password = "Test@1234";
if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/", $password)) {
    echo "Strong Password";
} else {
    echo "Weak Password";
}
?>
