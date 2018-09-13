<!doctype html>

<!--
    exercise 02-01-01
    author cynthia sepulveda 
    date 8.10.18
-->
<html>
    <head>
         <title>Intrest Array</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
       <h2>Intrest Array</h2>
        <p>  
            <?php
                $intrestRate1 = .0725;
                $intrestRate2 = .0750;
                $intrestRate3 = .0775;
                $intrestRate4 = .0800;
                $intrestRate5 = .0825;
                $intrestRate6 = .0850;
                $intrestRate7 = .0875;
            $ratesArray = [$intrestRate1, $intrestRate2, $intrestRate3, $intrestRate4, $intrestRate5, $intrestRate6, $intrestRate7];
            echo "<p>Intrest Rate 1: ", $ratesArray[0],2,"<br></p>";
            echo "<p>Intrest Rate 2: ", $ratesArray[1],2,"<br></p>";
            echo "<p>Intrest Rate 3: ", $ratesArray[2],"<br></p>";
            echo "<p>Intrest Rate 4: ", $ratesArray[3],"<br></p>";
            echo "<p>Intrest Rate 5: ", $ratesArray[4],"<br></p>";
            echo "<p>Intrest Rate 6: ", $ratesArray[5],"<br></p>";
            echo "<p>Intrest Rate 7 : ", $ratesArray[6],"<br></p>";
            ?>
        </p>
    </body>
</html>