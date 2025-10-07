<?php
    $arr=array(1,2,3,4,5,6,7,8,9,10);
    $sum=0;
    $avg=0;
    foreach($arr as $value){
        $sum+=$value;
    }
    $avg=$sum/count($arr);
    echo "Sum : $sum"."<br>";
    echo "Average : $avg"."<br>";
?>