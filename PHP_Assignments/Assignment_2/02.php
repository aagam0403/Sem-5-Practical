<html>
    <head>
        <title>Age Checker</title>
    </head>
    <body>
        <form method="get">
            Enter Age : 
            <input type="number" name="age">
            <br>
            <input type="Submit" value="Check">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                $age=$_GET['age'];
                if($age<18)
                {
                    echo "Age $age is not eligible for voting";
                }
                else
                {
                    echo "Age $age is eligible for voting";
                }
            }
        ?>
    </body>
</html>