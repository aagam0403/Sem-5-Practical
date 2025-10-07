<?php
$cities = array("Mumbai", "Delhi", "Kolkata", "Chennai", "Bangalore", "Hyderabad", "Pune", "Ahmedabad", "Jaipur", "Lucknow");
sort($cities);
?>
<html>
<body>
    <h2>City List</h2>
    <ul>
        <?php
        foreach($cities as $city) {
            echo "<li>$city</li>";
        }
        ?>
    </ul>
    <form method="POST">
        Enter city to search: <input type="text" name="searchCity">
        <input type="submit" value="Search">
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchCity = $_POST["searchCity"];
    if(in_array($searchCity, $cities)) {
        echo "<p>$searchCity exists in the array.</p>";
    } else {
        echo "<p>$searchCity does not exist in the array.</p>";
    }
}
?>
</body>
</html>