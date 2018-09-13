<html>

<head>
    <!--        
   Exercises 02_01_01
   Author: cynthia sepulveda
   date sept. 11. 18
   
   concerts.php
   -->
    <title>Hello World</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>

</head>

<body>
    <h1>Central Valley Civics Center</h1>
    <h2>Summer Concert Season</h2>
    <?php
  //addition
    $x = 100;
    $y = 200;
    
    $returnValue = $x + $y;
    echo "<h2>Adddition</h2>";
    echo '<p>$returnValue after addition expression: ', $returnValue, " </p>";
        
    //subtraction 
        
        $z = 10;
        $n = 7;
    
    $returnValue = $z - $n;
    echo "<h2>Subtraction</h2>";
    echo '<p>$returnValue after subtraction expression: ', $returnValue, " </p>";
        
        //division 
        $a = 24;
        $b = 3;
    
    $returnValue = $a / $b;
    echo "<h2>Division</h2>";
    echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";
        
        //modulus
        
        $c = 10;
        $d = 7;
    
    $returnValue = $c % $d;
    echo "<h2>Modulus</h2>";
    echo '<p>$returnValue after modulus expression: ', $returnValue, " </p>";
    
    //unary
    echo "<h2>Unary increment: Prefix Notation</h2>";
    $studentID = 100;
    $curstudentID = ++$studentID;
    echo "The first student ID is: ", $curstudentID, "<br>";
    $studentID = 101;
    $curstudentID = ++$studentID;
    echo "The second student ID is: ", $curstudentID, "<br>";
    $studentID = 102;
    $curstudentID = ++$studentID;
    echo "The third student ID is: ", $curstudentID, "<br>";
    
    echo "<h2>Unary increment: postfix notation</h2>";
    $studentID = 100;
    $curstudentID = $studentID++;
    echo "The first student ID is: ", $curstudentID, "<br>";
    $studentID = 101;
    $curstudentID = $studentID++;
    echo "The second student ID is: ", $curstudentID, "<br>";
    $studentID = 102;
    $curstudentID = $studentID++;
    echo "The third student ID is: ", $curstudentID, "<br>";
    
    
    
    echo "<h1>Assignment Operators</h1>";
    $number = 100;
    $number += 50;
    echo '$number: ', $number;
    
    echo "<h1>Conditional Operators</h1>";
    $value1 = "first text string";
    $value2 = "second text string";
    $returnValue = ($value1 == $value2);
    echo '$returnValue is: ', $returnValue;
    ?>
</body>

</html>
