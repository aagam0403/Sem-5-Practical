<html>
    <body>
        <form method="post">
            Enter First Number :
            <input type="number" name="first">
            <br><br>
            Enter Second Number :
            <input type="number" name="second">
            <br><br>
            <input type="Submit" value="Add">
            <br><br>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $first=$_POST['first'];
                $second=$_POST['second'];
                $addd=$first+$second;
                echo "Sum = " . $addd;
            }
        ?>
    </body>
</html>