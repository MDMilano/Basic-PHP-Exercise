<!-- 7. Functions

Exercise:
Create a function calculateBMI($weight, $height) that returns the Body Mass Index (BMI).
Then call it with sample values and display the result. -->

<?php

    $weight = 70;
    $height = 1.75;

    function calculateBMI($weight, $height){
        $bmi = $weight / ($height * $height);
        return round($bmi, 2);   
    }

    $result = calculateBMI($weight, $height);
    echo "BMI: " . $result;

?>