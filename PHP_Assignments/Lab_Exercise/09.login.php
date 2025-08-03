<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['name'])&& isset($_POST['id']))
    {
        $username=$_POST['name'];
        $userid=$_POST['id'];
        if($userid=="")
        {
            echo "Welcome $username!<br>";
            echo "Note : ID field was left blank";
        }
        else
        {
            echo "Invalid Login";
        }
    }
    else
    {
        echo "Form data missing";
    }
}
?>