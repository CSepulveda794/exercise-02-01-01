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
        $returnValue = false;
        echo "Die 1: $die1<br>Die 2: $die2<br>";
        
        if ($die1 === $die2) {
            echo "The roll was double ", $faceNameplural[$die1 - 1], ".<br>";
            $returnValue = true;
        }
        if ($die1 !== $die2) {
            echo "The roll was a ", $faceNameSingular[$die1 - 1], " and a ", $faceNameSingular[$die2 - 1], ".<br>";
                echo "The roll was double ", $faceNameplural[$die1 - 1], ".<br>";
            $returnValue = false;
        }
        return $returnValue;
    }
    //going to display our score 
    function displayScoreText($score, $doubles) {
        if ($doubles){
        if ($score === 2){
            echo "you rolled snake eyes!<br>";
        }else if ($score === 12){
            echo "you rolled a boxcars!<br>";
        }
        }
        else {
            if ($score === 3){
            echo "you rolled a duce!<br>";
        }
        elseif ($score === 5){
            echo "you rolled a feaver five!<br>";
        }
        else if ($score === 7){
            echo "you rolled a natural!<br>";
        }
        else if ($score === 9){
            echo "you rolled a nina!<br>";
        }
        else if ($score === 11){
            echo "you rolled a yo!<br>";
        }
         else{
            echo "your roll has no nick name!<br>";
        }
        }
    }
    
    $dice = array();
    while($rollNumber <= 5) {
         $dice[0] = rand(1,6);
    $dice[1] = rand(1,6);
    echo "<p>";
    $score = $dice[0] + $dice[1];
    echo "The total score for the roll was $score.<br>";
    $doubles = checkForDoubles($dice[0], $dice[1]);
    displayScoreText($score, $doubles);
    echo "</p>";
        if($doubles){
            ++$doubleCount
        }
        ++rollNumber;
    }
   echo "<p>Doubles occurred on $doubleCount of the NBR_ROLLS rolls.</p>"
    
    ?>
</body>

</html>
