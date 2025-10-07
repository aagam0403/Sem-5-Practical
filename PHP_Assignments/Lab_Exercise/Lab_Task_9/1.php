<?php
$str="PHP programming";
    if(preg_match("/php/i",$str))
    {
        echo "'php' found in the text!";
    } 
    else 
    {
        echo "'php' not found in the text!";
    }
?>