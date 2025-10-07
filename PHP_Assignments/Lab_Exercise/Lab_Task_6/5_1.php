<?php
$fruits = array("Apple", "Banana", "Cherry");
echo "Number of fruits: " . count($fruits) . "<br>";
echo "Number of fruits using sizeof(): " . sizeof($fruits) . "<br><br>";

$vegetables = array("Carrot", "Potato");
$merged = array_merge($fruits, $vegetables);
echo "Merged array: ";
print_r($merged);
echo "<br><br>";

array_push($fruits, "Mango", "Orange");
echo "After array_push: ";
print_r($fruits);
echo "<br>";
$popped = array_pop($fruits);
echo "After array_pop (removed '$popped'): ";
print_r($fruits);
echo "<br><br>";

$index = array_search("Banana", $fruits);
echo "Index of 'Banana' in fruits: $index<br><br>";

sort($fruits);
echo "Fruits sorted (ascending): ";
print_r($fruits);
echo "<br>";
rsort($fruits);
echo "Fruits sorted (descending): ";
print_r($fruits);
echo "<br><br>";

if(in_array("Apple", $fruits)) {
    echo "'Apple' is in the fruits array.<br>";
} else {
    echo "'Apple' is not in the fruits array.<br>";
}

if(in_array("Grapes", $fruits)) {
    echo "'Grapes' is in the fruits array.<br>";
} else {
    echo "'Grapes' is not in the fruits array.<br>";
}
?>
