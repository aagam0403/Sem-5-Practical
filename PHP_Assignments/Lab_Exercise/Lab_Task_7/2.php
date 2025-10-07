<html>
<body>
    <form method="POST">
        String : <input type="text" name="n">
        <input type="submit">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n=$_POST["n"];
        echo "Ltrim : ".ltrim($n)."<br>";
        echo "Rtrim : ".rtrim($n)."<br>";
        echo "Trim : ".trim($n)."<br>";
    }
?>
</body>
</html>