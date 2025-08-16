<html>
    <head></head>
    <body>
        <h1>Calculator</h1>
        <form method="POST">
            <label>Number 1</label>
            <input type="number" name="n1" required><br><br>
            <label>Number 2</label>
            <input type="number" name="n2" required><br><br>
            <label>Operation</label>
            <select name="op" required>
                <option value="add">Add</option>
                <option value="sub">Sub</option>
                <option value="mul">Mul</option>
                <option value="div">Div</option>
            </select><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $n1=$_POST["n1"];
                $n2=$_POST["n2"];
                $op=$_POST["op"];
                switch($op)
                {
                    case "add":
                        echo ($n1+$n2);
                        break;
                    case "sub":
                        echo ($n1-$n2);
                        break;
                    case "mul":
                        echo ($n1*$n2);
                        break;
                    case "div":
                        echo ($n1/$n2); 
                        break;   
                    default:
                        echo "Invalid choice";
                }
            }
        ?>
    </body>
</html>