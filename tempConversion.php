<!doctype html>
<html>
    <head>
        <title>Temp Conversuon</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
       <h2>Finding Celsius</h2>
        <?php
        //global
        $counter = 0;
//     while loop
            while ($counter <= 100){
                ++$counter;
                $convert = number_format(($counter - 32) * 5/9, 2);
                
                
              echo "fahrenheit: $counter Celsius: $convert <br>";
            }
        ?>
    </body>
