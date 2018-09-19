<!doctype html>

<html>
	<head>
		<title>Odd Numbers</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		 <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
   <h2>Odd numbers</h2>
<!--  runs though all the numbers and only displays odd numbers -->
    <?php
        $num = 0;
        
        while($num <= 100){
          if($num % 2 != 0){
              echo "$num <br>";
          }
            $num++;
        }
        ?>
	</body>
</html>