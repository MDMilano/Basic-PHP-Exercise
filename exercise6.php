<!-- 6. Arrays

Exercise:
Create an array of five fruits.

    - Use foreach to list each fruit.

    - Check if “Mango” is in the list using in_array(). -->

<?php

    $fruits = ["Apple","Banana","Mango","Orange","Grapes"];

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    if (in_array("Mango", $fruits)){
        echo "Mango is in the list!";
    } else {
        echo "Mango is not in the list!";
    }

?>