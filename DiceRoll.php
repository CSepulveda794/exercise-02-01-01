<!doctype html>
<html>

<head>
    <!--        
   Exercises 02_01_01
   Author: cynthia sepulveda
   date sept. 11. 18
   
   HelloWord.php
   -->
   <title>Dice Roll</title>
   <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    
</head>
<body>
<h2>Dice Roll</h2>
<?php
   $faceNameSingular = array("one", "two", "three", "four", "five", "six");
    $faceNameplural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    
    function checkForDoubles($die1, $die2){
        global $faceNameSingular;
        global $faceNameplural;
        echo "Die 1: $die1<br>Die 2: $die2<br>";
        
        if ($die1 === $die2) {
            echo "The roll was double ", $faceNameplural[$die1 - 1], ".<br>";
        }
        if ($die1 !== $die2) {
            echo "The roll was a ", $faceNameSingular[$die1 - 1], " and a ", $faceNameSingular[$die2 - 1], ".<br>";
        }
    }
    $dice = array();
    $dice[0] = rand(1,6);
    $dice[1] = rand(1,6);
    echo "<p>";
    $score = $dice[0] + $dice[1];
    echo "The total score for the roll was $score.<br>";
    checkForDoubles($dice[0], $dice[1]);
    echo "</p>";
    
    ?>
</body>
</html>
