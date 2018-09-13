<!doctype html>

<!--
    exercise 02-01-01
    author cynthia sepulveda 
    date 8.10.18
-->
<html>

<head>
    <title>functions </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passing Parameters</h2>
    <?php
        // function that will increment the number by value (adding 1)
       function incrementByValue($countByValue) {
           ++$countByValue;
           echo "<p>incrementByValue() value is $countByValue</p>";
       }

       function incrementByReference(&$countByReference) {
           ++$countByReference;
           echo "<p>incrementByReference() value is $countByReference.</p>";
       }

       // main program
       $count = 1;
       echo "<p>Main program starting value is $count.</p>";
       incrementByValue($count);
       echo "<p>Main program value after incrementByValue() is $count.</p>";

       $count = 1;
       echo "<p>Main program starting value is $count.</p>";
       incrementByReference($count);
       echo "<p>Main program value after incrementByReference() is $count.</p>";
        ?>

        <h2>Default Arguments </h2>

        <?php
        function paint($room="office", $color="red") {
            return "<p>The color of the room is {$room} is {$color}.</p>";
        }
        
        echo paint();
        echo paint("bedroom", "blue");
        echo paint("bedroom", null);
        echo paint("bedroom");
        echo paint("blue");
      
        ?>



</body>

</html>
