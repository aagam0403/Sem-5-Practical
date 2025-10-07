<?php
$a = array(1,2,3,4,5);
$b = array(5,4,3,2,1);
$c = array();
for($i=0;$i<count($a);$i++){
    $c[$i] = $a[$i]+$b[$i];
}
print_r($c);
?>
