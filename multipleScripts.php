<!doctype html>

<!--
    exercise 02-01-01
    author cynthia sepulveda 
    date 8.10.18
-->
<html>
    <head>
         <title>PHP Enviornment Infor </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <h1>PHP Enviornment Info</h1>
<!--        starting to learn how to get information from the computer and displaying it on to the web browser-->
        
        <p>
            The PHP code was rendered with PHP version 
            <?php
            echo phpversion();
            ?>
        </p>
        <p>
            The PHP code was rendered with zend engine version 
            <?php
            echo zend_version();
            ?>
        </p>
        <p>
            The PHP default mime type is
            <?php
            echo ini_get("default_mimetype");
            ?>
        </p>
        <p>
            The maximum allowable execution time of php script is
            <?php
            echo ini_get("max_execution_time");
            ?>
        </p>
    </body>
</html>