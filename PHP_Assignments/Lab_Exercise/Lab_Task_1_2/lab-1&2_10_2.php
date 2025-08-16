<!DOCTYPE html>
<html>
<head>
    <title>Receive Data</title>
</head>
<body>
    <?php
        if (isset($_GET["name"]) && isset($_GET["age"])) {
            $name = $_GET["name"];
            $age = $_GET["age"];
            echo "<h3>Hello, $name! You are $age years old.</h3>";
        } else {
            echo "<h3>No data received.</h3>";
        }
    ?>
</body>
</html>
