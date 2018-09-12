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
           <h3>This is HTML</h3>
<!--           here we grabbed more information from the computere as displaying the api on the web browser -->
            <?php
                echo "This following PHP API function call.";
                phpinfo();
            ?>
        </p>
    </body>
</html>