<html>
    <head>
        <style>
            body {
                background-color: #f5f5f5;
            }
            table {
                border-collapse: collapse;
                background-color: white;
            }
            th {
                background-color: orchid;
                color: white;
                padding: 8px;
            }
            td {
                text-align:center;
                color: black;
                padding: 6px;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            input[type="submit"] {
                background-color: orchid;
                color: white;
                border: none;
                padding: 6px 12px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: mediumorchid;
            }
        </style>
    </head>
    <body>
        <form action="lab-5_2_2.php" method="POST">
            <table border="1" style="padding:5px;margin:8px;">
                <tr>
                    <th colspan="4" style="color:white;">Restaurant Menu</th>
                </tr>
                <tr>
                    <th>Category</th>
                    <th>Item</th>
                    <th>Price (₹)</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>Starters</td>
                    <td>Spring Roll</td>
                    <td>120</td>
                    <td><input type="number" name="spring"></td>
                </tr>
                <tr>
                    <td>Starters</td>
                    <td>Paneer Tikka</td>
                    <td>180</td>
                    <td><input type="number" name="tikka"></td>
                </tr>
                <tr>
                    <td>Main Course</td>
                    <td>Butter Paneer</td>
                    <td>250</td>
                    <td><input type="number" name="panner"></td>
                </tr>
                <tr>
                    <td>Main Course</td>
                    <td>Veg Biryani</td>
                    <td>200</td>
                    <td><input type="number" name="biryani"></td>
                </tr>
                <tr>
                    <td>Dessert</td>
                    <td>Gulab Jamun</td>
                    <td>60</td>
                    <td><input type="number" name="jamun"></td>
                </tr>
                <tr>
                    <td>Dessert</td>
                    <td>Ice Cream</td>
                    <td>80</td>
                    <td><input type="number" name="icecream"></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center;">
                        <input type="submit" value="Generate Bill">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
