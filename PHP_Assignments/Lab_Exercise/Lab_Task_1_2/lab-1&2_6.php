<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        $n1 = 25;
        $n2 = 40;
    ?>
    <ol>
        <li><?php echo "A > B : ".($n1 > $n2 ? "True" : "False");?></li>
        <li><?php echo "A < B : ".($n1 < $n2 ? "True" : "False");?></li>
        <li><?php echo "A >= B : ".($n1 >= $n2? "True" : "False"); ?> </li>
        <li><?php echo "A <= B : ".($n1 <= $n2? "True" : "False"); ?> </li>     
    </ol>
</body>
</html>
