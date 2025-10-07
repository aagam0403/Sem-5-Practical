<?php
$sem = array(1=>43,2=>65,3=>85,4=>25,5=>65);
ksort($sem);
foreach($sem as $s=>$m){
    echo "Sem $s : $m<br>";
}

$sem2 = array(1=>43,2=>65,3=>85,4=>25,5=>65);
asort($sem2);
foreach($sem2 as $s=>$m){
    echo "Sem $s : $m<br>";
}

?>