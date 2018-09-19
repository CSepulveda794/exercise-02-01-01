<!doctype html>
<html>
    <head>
        <title>is even</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
       <h2>While Logic</h2>
<!--       Made and array to count from 0 to 100-->
        <?php
        $counter = 0;
        $numbers = array();
        while ($counter <= 100) {
            $numbers[] = $counter;
            ++$counter;
        } foreach($numbers as $currentNum){
            echo "$currentNum<br>";
        }
        ?>
    </body>




