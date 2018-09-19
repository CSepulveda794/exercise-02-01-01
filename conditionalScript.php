<!doctype html>

<html>
	<head>
		<title>Conditional Script</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>

	</head>

	<body>
<!--  giving back results to see if our number is greater than or less than 100     -->
        <?php
        
    $initVariable = 75;
        $result = "";
//        ($initVariable > 100) ? $result =  '$initVariable is greater than 100':
//        $result =  '$initVariable is less than or equal to 100';
        if ($initVariable > 100){
            $result = '$initVariable is greater than 100';
        } else {
            $result = '$initVariable is less than 100';
        }
        
        echo '<h3>$result:'."$result</h3>";
        ?>
	</body>
