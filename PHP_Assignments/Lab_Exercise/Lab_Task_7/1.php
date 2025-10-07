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
        echo "Length : ".strlen($n)."<br>";
        echo "Reverse String : ".strrev($n)."<br>";
    }
?>
</body>
</html>