<html>
<body>
    <form method="POST">
        Element 1 : <input type="text" name="arr[]"><br><br>
        Element 2 : <input type="text" name="arr[]"><br><br>
        Element 3 : <input type="text" name="arr[]"><br><br>
        Element 4 : <input type="text" name="arr[]"><br><br>
        Element 5 : <input type="text" name="arr[]"><br><br>
        <input type="submit">
    </form>
<?php
    $arr=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $arr=$_POST["arr"];
    }
    for ($i=count($arr)-1;$i>=0;$i--){
        echo "$arr[$i]"."<br>";
    }
?>
</body>
</html>