<html>
    <body>
        <form method="post">
            Enter a String : 
            <input type="text" name="str">
            <input type="Submit" value="Submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $str=$_POST['str'];

                echo "Original String: " . $str . "<br>";
                echo "Length of String: " . strlen($str) . "<br>";
                echo "Uppercase: " . strtoupper($str) . "<br>";
                echo "Reversed: " . strrev($str) . "<br>";
                echo "Word Count: " . str_word_count($str) . "<br>";
            }
        ?>
    </body>
</html>