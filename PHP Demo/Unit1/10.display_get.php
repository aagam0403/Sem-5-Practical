<html>
<head>
    <title>Display GET Data </title>
</head>
<body>
    <h2>Data received using GET</h2>
    <?php 
    if (isset($_GET['name']) && isset($_GET['phone']))
        {
            echo "Name :".htmlspecialchars($_GET['name'])."<br>";
            echo "Phone :".htmlspecialchars($_GET['phone'])."<br>";
        }
        else
        {
            echo "No data received";
        }
    ?>
</body>
</html>