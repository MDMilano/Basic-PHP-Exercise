<!-- 8. Forms and User Input

Exercise:
Create an HTML form that asks for your name and age.
When submitted, display a greeting like: Hello [name], you are [age] years old. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise8.php" method="POST">
        <input type="text" name="name" placeholder="Enter your name"> <br>
        <input type="number" name="age" placeholder="Enter your age"> <br>
        <input type="submit" value="display" placeholder="submit">
    </form>
</body>
</html>