<!doctype html>
<html>

<head>
    <!--        
   Exercises 02_01_01
   Author: cynthia sepulveda
   date sept. 11. 18
   
   HelloWord.php
   -->
   <title>Hello World</title>
   <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    
</head>
<body>
<?php
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456);
    
    echo "<p>Hello $worldVar! <br>";
    echo "The $worldVar is ", number_format(WORLD_INFO, 0) , " miles from the $sunVar. <br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "the $sunVar's core Tempature is aproximatly ", number_format(SUN_INFO)," degrees farenheit.<br>";
        echo "Hello", $moonVar, "!<br>";
    echo "The $moonVar is ", number_format(MOON_INFO)," miles in diameter.</p>";
    
    ?>
</body>
</html>
