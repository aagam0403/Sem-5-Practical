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
        $arr=str_split($n);
        echo "str_split : ";
        print_r($arr);
        echo "<br>";
        echo "No. of words : ".str_word_count($n);
    }
?>
</body>
</html>