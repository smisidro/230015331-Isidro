<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
   <?php
   
        echo "<h1>Functions</h1>";

        function greet($name) {
            return "Hello, " . $name . "!";
        }

        
        function square($number) {
            return $number * $number;
        }

        echo "<p>" . greet("Alice") . "</p>";
        echo "<p>The square of 4 is: " . square(4) . "</p>";

    ?>

</body>
</html>