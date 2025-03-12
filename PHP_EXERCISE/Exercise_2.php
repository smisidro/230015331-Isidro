<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <?php

    echo "<h1>Conditional Statements</h1>";

    $number = -5; 
    
    if ($number % 2 == 0) {
        echo $number . " is even.\n";
    } else {
        echo $number . " is odd.\n";
    }
    
    echo "<br>";

    if ($number > 0) {
        echo $number . " is positive.\n";
    } elseif ($number < 0) {
        echo $number . " is negative.\n";
    } else {
        echo $number . " is zero.\n";
    }
    ?>
    
</body>
</html>