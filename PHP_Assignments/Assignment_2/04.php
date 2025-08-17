<html>
    <body>
        <form method="post">
            Enter Day Number : 
            <input type="number" name="num">
            <br>
            <input type="Submit" Value="Check">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST") 
            {
                $num=$_POST['num'];
                switch($num)
                {
                    case 1:
                        echo "Sunday";
                        break;
                    case 2:
                        echo "Monday";
                        break;
                    case 3:
                        echo "Tuesday";
                        break;
                    case 4:
                        echo "Wednesday";
                        break;
                    case 5:
                        echo "Thursday";
                        break;
                    case 6:
                        echo "Friday";
                        break;
                    case 7:
                        echo "Saturday";
                        break;
                    default:
                        echo "Enter number from 1-7";
                        break;
                }
            }       
        ?>   
    </body>
</html>