<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
        <?php

        echo "<h1>Form Handling</h1>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            echo "<p>Hello, $name!</p>";
        }
        ?>


        <form method="post">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
        </form>
        
</body>
</html>