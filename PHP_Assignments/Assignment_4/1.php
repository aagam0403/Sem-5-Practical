<?php
$mobile = "9876543210";
if(preg_match("/^[0-9]{10}$/", $mobile)) {
    echo "Valid Mobile Number";
} else {
    echo "Invalid Mobile Number";
}
?>
