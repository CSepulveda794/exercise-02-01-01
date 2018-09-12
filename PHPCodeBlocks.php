<!doctype html>

<!--
    exercise 02-01-01
    author cynthia sepulveda 
    date 8.10.18
-->
<html>
    <head>
         <title>PHP Code Blocks</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <p>  
<!--           we started using strings and attaching them wil multiple items to conjoin them-->
            <?php
                echo "this text is displayed using standard PHP script delimeters.<br>";
            print "second string";
            print ("<br>Third string ");
                echo "<h1>This is a" , " multipul argument string</h1>";
                echo "<h1>This is a" . " multipul argument string</h1>";
                print ("<h2>This is some Math: " . ( 2 + 3) . "<h2>");
            ?>
        </p>
    </body>
</html>