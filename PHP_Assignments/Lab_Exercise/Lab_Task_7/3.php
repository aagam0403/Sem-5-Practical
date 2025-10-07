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
        echo "Uppercase : ".strtoupper($n)."<br>";
        echo "Lowercase : ".strtolower($n)."<br>";
        echo "Capitalize first character of each word : ".ucwords($n)."<br>";
        echo "Capitalize first character of string : ".ucfirst($n);
    }
?>
</body>
</html>