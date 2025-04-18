<!-- 5. Loops

Exercise:
Use a for loop to display numbers 1 to 10.
Use a while loop to display even numbers between 2 and 20. -->

<?php

    echo "For Loop: ";
    for ($num = 1; $num < 11; $num++){
        echo $num . " ";
    }

    echo "<br>";

    echo "While Loop (even numbers): ";
    $num = 2;
    while ($num <= 20){
        echo $num . " ";
        $num += 2;
    }

?>
