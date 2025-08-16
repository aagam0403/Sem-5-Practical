<?php
$products = [
    ["name" => "Wireless Mouse", "price" => 350, "category" => "Electronics"],
    ["name" => "Bluetooth Speaker", "price" => 1200, "category" => "Electronics"],
    ["name" => "Notebook", "price" => 80, "category" => "Stationery"],
    ["name" => "Pen Drive 64GB", "price" => 700, "category" => "Electronics"],
    ["name" => "Water Bottle", "price" => 150, "category" => "Home & Kitchen"],
    ["name" => "Desk Lamp", "price" => 950, "category" => "Home & Kitchen"]
];
function displayTable($data) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Name</th><th>Price (₹)</th><th>Category</th></tr>";
    foreach ($data as $item) {
        echo "<tr>
                <td>{$item['name']}</td>
                <td>{$item['price']}</td>
                <td>{$item['category']}</td>
              </tr>";
    }
    echo "</table>";
}
echo "<h3>All Products:</h3>";
displayTable($products);
$filtered = array_filter($products, function($p) {
    return $p['price'] > 500;
});
echo "<h3>Products with Price > ₹500:</h3>";
displayTable($filtered);
?>
