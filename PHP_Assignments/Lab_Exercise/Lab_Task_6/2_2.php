<html>
<body>
    <form method="POST">
        Element 1 : <input type="text" name="arr[]"><br><br>
        Element 2 : <input type="text" name="arr[]"><br><br>
        Element 3 : <input type="text" name="arr[]"><br><br>
        Element 4 : <input type="text" name="arr[]"><br><br>
        Element 5 : <input type="text" name="arr[]"><br><br>
        Element 6 : <input type="text" name="arr[]"><br><br>
        Element 7 : <input type="text" name="arr[]"><br><br>
        Element 8 : <input type="text" name="arr[]"><br><br>
        <input type="submit">
    </form>
<?php
    $arr=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $arr=$_POST["arr"];
        $max=max($arr);
        $min=min($arr);
        echo "Max : $max"."<br>";
        echo "Min : $min"."<br>";
    }
?>
</body>
</html>