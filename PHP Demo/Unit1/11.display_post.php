<html>
<head>
    <title>Display POST Data </title>
</head>
<body>
    <h2>Data received using POST</h2>
    <?php 
    if (isset($_POST['name']) && isset($_POST['phone']))
        {
            echo "Name :".htmlspecialchars($_POST['name'])."<br>";
            echo "Phone :".htmlspecialchars($_POST['phone'])."<br>";
        }
        else
        {
            echo "No data received";
        }
        ?>
</body>
</html>