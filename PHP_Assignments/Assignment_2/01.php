<html>
    <head>
        <title>Odd / Evenn Checker</title>
    </head>
    <body>
        <h2>Check if a Number is Even or Odd</h2>
        <form method="post">
            Input Number : 
            <input type="number" name="num"> <br>
            <input type="submit" value="Check">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $num=$_POST['num'];

                if($num%2==0)
                {
                    echo "The Number $num is even";
                }
                else
                {
                    echo "The Number $num is Odd";
                }
            }
        ?>
    </body>
</html>