<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        echo "Thank you, $name, for registering with email: $email "
;    }
?>