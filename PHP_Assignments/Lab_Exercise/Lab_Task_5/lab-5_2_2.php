<!DOCTYPE html>
<html>
<head>
    <title>Your Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #d36ac2;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        .total-row td {
            font-weight: bold;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prices = [
        "Spring Roll" => 120,
        "Paneer Tikka" => 180,
        "Butter Paneer" => 250,
        "Veg Biryani" => 200,
        "Gulab Jamun" => 60,
        "Ice Cream" => 80
    ];

    $items = [
        "Spring Roll" => $_POST['spring'] ?? 0,
        "Paneer Tikka" => $_POST['tikka'] ?? 0,
        "Butter Paneer" => $_POST['panner'] ?? 0,
        "Veg Biryani" => $_POST['biryani'] ?? 0,
        "Gulab Jamun" => $_POST['jamun'] ?? 0,
        "Ice Cream" => $_POST['icecream'] ?? 0
    ];

    $subtotal = 0;

    echo "<h1>Your Bill</h1>";
    echo "<table>";
    echo "<tr><th>Item</th><th>Quantity</th><th>Price</th><th>Total</th></tr>";

    foreach ($items as $item => $qty) {
        if ($qty > 0) {
            $price = $prices[$item];
            $total = $price * $qty;
            $subtotal += $total;
            echo "<tr><td>$item</td><td>$qty</td><td>₹$price</td><td>₹$total</td></tr>";
        }
    }

    $gst = $subtotal * 0.18;
    $grand_total = $subtotal + $gst;

    echo "<tr class='total-row'><td colspan='3'>Subtotal</td><td>₹" . number_format($subtotal, 2) . "</td></tr>";
    echo "<tr class='total-row'><td colspan='3'>GST (18%)</td><td>₹" . number_format($gst, 2) . "</td></tr>";
    echo "<tr class='total-row'><td colspan='3'>Grand Total</td><td>₹" . number_format($grand_total, 2) . "</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
