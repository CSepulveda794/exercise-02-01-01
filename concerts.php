<!doctype html>
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
   $concerts = array("Harry Styles","Chris Issac", "Niall Horan", "Adele", "Selena Gomez", "James Taylor");
    $concerts[] = "Zayn Malik";
    $concerts[] = "Calum Hood";
    
    echo "<p>The following ", count($concerts), " concerts are schedualed:</p><p>";
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    ?>
</body>
</html>
