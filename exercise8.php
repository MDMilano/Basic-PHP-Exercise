<!-- 8. Forms and User Input

Exercise:
Create an HTML form that asks for your name and age.
When submitted, display a greeting like: Hello [name], you are [age] years old. -->
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);

        echo "Hello " . $name . ", your " . $age . " years old."; 
    }

?>