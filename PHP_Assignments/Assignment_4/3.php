<?php
    class MathOperations {
        const PI = 3.14159;

        public static function areaOfCircle($radius) {
            return self::PI * $radius * $radius;
        }
    }

    echo "Area of Circle: " . MathOperations::areaOfCircle(7) . "<br>";
?>