<!doctype html>
<html>
    <head>
        <title>Gas Prices</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
       <h2>Gas Prices</h2>
<!--    Checking to see if a number is between two numbers       -->
        <?php
        $gasPrice = 5;
        if ($gasPrice >= 2 && $gasPrice <= 3){
             echo "<p>Gas Prices are between 2.00 and 3.00.</p>";
        } else {
            echo "<p>Gas Prices are not between 2.00 and 3.00.</p>";
        }
        ?>
    </body>
