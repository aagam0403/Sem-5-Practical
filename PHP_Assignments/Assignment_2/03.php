<html>
    <head>
        <title>Grade Checker</title>
    </head>
    <body>
        <form method="post">
            Enter your Marks : 
            <input type="number" name="num">
            <br>
            <input type="Submit" Value="Check">
        </form>    
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $num=$_POST['num'];
                if($num>=90)
                {
                    echo "A Grade";
                }
                elseif($num>=75 && $num<=89)
                {
                    echo "B Grade";
                }
                elseif($num>=50 && $num<=74)
                {
                    echo "C Grade";
                }
                else
                {
                    echo "Fail";
                }
            }
        ?>
    </body>
</html>