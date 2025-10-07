<?php
$data = array(
    "HR" => array("Girish","neha","puja"),
    "Account" => array("asha","rehan","tina"),
    "Sales" => array("Twisha","keyuri","rohit")
);
foreach($data as $dept => $names){
    sort($names);
    echo $dept.": ".implode(", ",$names)."<br>";
}
?>
