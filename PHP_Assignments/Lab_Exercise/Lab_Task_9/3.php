<?php
$phone=1234567890;
if(preg_match("/^[0-9]{10}$/",$phone))
{
    echo "Valid Phone Number";
}
else{
    echo "Invalid Phone Number";
}
?>