<?php
$email = "example@test.com";
if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
    echo "Valid Email";
} else {
    echo "Invalid Email";
}
?>
