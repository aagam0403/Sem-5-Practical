<?php
$students = array(
    "Ravi"=>array("Maths"=>90,"Science"=>85),
    "Rahul"=>array("Maths"=>75,"Science"=>80)
);
foreach($students as $name=>$details){
    echo "$name:<br>";
    foreach($details as $sub=>$marks){
        echo "$sub: $marks<br>";
    }
}
?>
