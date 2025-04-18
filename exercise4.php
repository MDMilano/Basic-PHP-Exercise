<!-- 4. Control Structures

Exercise:
Write a script that checks if a user’s grade (e.g., 85) is:

    - “Passed” if 75 and above

    - “Failed” if below 75

Add another condition for “With Honors” if grade is 90 or above. -->

<?php

    $grade = 90;

    if ($grade < 75){
        echo "Failed" . "<br>";
    } else if ($grade > 75){
        echo "Passed" . "<br>";
    } 
    
    if ($grade >= 90){
        echo "With Honors";
    }

?>
