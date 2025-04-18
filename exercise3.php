<!-- 3. Operators

Exercise:
Create a PHP script that takes two numbers and calculates:

- their sum, difference, product, and quotient

- check which one is greater using comparison operators -->
<?php

    $num1 = 10;
    $num2 = 5;

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2;
    $isGreater = $num1 > $num2;

    echo "The sum of two number is " . $sum . "<br>";
    echo "The difference of two number is " . $difference . "<br>";
    echo "The product of two number is " . $product . "<br>";
    echo "The quotient of two number is " . $quotient . "<br>";
    echo "Is num1 is greater than num2: " . $isGreater;

?>


