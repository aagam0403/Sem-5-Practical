<?php
$str = "P H P is awes ome!";
$str = preg_replace_callback('/([a-zA-Z]+(?:\s+[a-zA-Z]+)+[!?.]?)/', function($matches) {
    return str_replace(' ', '', $matches[0]);
}, $str);
echo $str;
?>