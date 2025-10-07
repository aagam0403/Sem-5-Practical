<?php
$password = "Abc@1234";
if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/x", $password)) {
    echo "Strong Password!";
} else {
    echo "Weak Password!";
}
?>