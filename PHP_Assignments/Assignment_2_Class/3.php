<?php
class MathOperations {
    const PI = 3.14159;

    public static function areaOfCircle($radius) {
        return self::PI * $radius * $radius;
    }
}

// Call without creating object
echo "Area of Circle (r=5): " . MathOperations::areaOfCircle(5);
?>