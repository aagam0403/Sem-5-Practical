<html>
    <head>
        <style>
            table{
                border-collapse:collapse;
                width:40%;
                margin:10px;    
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name=$_POST["name"];
            $age=$_POST["age"];
            $gender=$_POST["gender"];
            $hobby=$_POST["hobbies"];
        }
    ?>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $age;?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gender;?></td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td><?php 
                foreach($hobby as $hobby){
                    echo $hobby."<br>";
                }
            ?></td>
        </tr>
    </table>
</body>
</html>