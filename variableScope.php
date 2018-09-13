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
<?php
    $globalVariable = "global variable";
    function scopeExample(){
        $localVariable = "local Varible";
        echo "<p>this is a $localVariable</p>";
    }
    function globalExample(){
        $globalVariable = "another one";
        echo "<p>this is a $globalVariable</p>";
    }
    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
    ?>
</body>
</html>
