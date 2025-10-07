<?php
$email="abcd@gmail.com";
if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email))
{
    echo "Valid Email";
}
else{
    echo "Invalid Email";
}
?>