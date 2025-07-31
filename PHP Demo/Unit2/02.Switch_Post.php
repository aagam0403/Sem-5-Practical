<?php
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['num']))
    {
        $d=$_POST['num'];
        switch($d)
        {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
        }
    }
?>