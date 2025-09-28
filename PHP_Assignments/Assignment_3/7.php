<?php
$statement1 = "Sunset is the time of day when our sky meets the outer space solar winds.";
$statement2 = "There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. I love looking at the clouds.";

// 1. Reverse
echo strrev($statement1) . "<br>";

// 2. Uppercase first char
echo ucfirst($statement1) . "<br>";
echo ucfirst($statement2) . "<br>";

// 3. Count 'clouds'
echo "Occurrences of 'clouds': " . substr_count(strtolower($statement2), "clouds") . "<br>";

// 4. Replace pink → red
echo str_replace("pink", "red", $statement2) . "<br>";

// 5. Word count
echo "Word Count: " . str_word_count($statement2) . "<br>";

// 6. Fetch “I love looking at the clouds.”
preg_match("/I love looking at the clouds./", $statement2, $match);
print_r($match);
echo "<br>";

// 7. Sort array of words
$words = explode(" ", $statement2);
sort($words);
print_r($words);
echo "<br>";

// 8. Reverse string
echo strrev($statement2) . "<br>";

// 9. Display only "spinning"
$str = "purple swirls, spinning and twisting";
$parts = explode(",", $str);
echo trim(explode(" ", $parts[1])[1]) . "<br>";

// 10. Add string
echo $statement2 . " I love rainy days." . "<br>";

// 11. Remove "blender" word
echo str_replace("blender", "", $statement2);
?>
