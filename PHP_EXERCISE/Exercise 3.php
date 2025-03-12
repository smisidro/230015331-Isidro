<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loops</title>
</head>
<body>
    <?php

    echo "<h1>Loops</h1>";
    echo "<h2>BUZZ</h2>";

    for ($i = 1; $i <= 100; $i++) {
    
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n <br>";
    }
   
    elseif ($i % 3 == 0) {
        echo "Fizz\n <br>";
    }
    
    elseif ($i % 5 == 0) {
        echo "Buzz\n <br>";
    }
    
    else {
        echo $i . "\n";
    }
}
    
    echo "<h2>Fibonacci</h2>";

  

    $fib1 = 0;
    $fib2 = 1;
    $count = 0;


    while ($count < 10) {
    
        $fib3 = $fib1 + $fib2;

    
    if ($fib3 % 2 == 0) {
        echo $fib3 . "\n";
    }

    
        $fib1 = $fib2;
        $fib2 = $fib3;

    
        $count++;
}

?>


</body>
</html>