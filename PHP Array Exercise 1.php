<center>
<?php

 	echo "<br> ☆☆☆☆☆☆☆☆☆☆========================= PHP Array Exercise 1 =============================☆☆☆☆☆☆☆☆☆☆" . "<br><br>";



 	$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
 	var_dump($weather);
 	?>

 	<!DOCTYPE html>
 	<html lang="en">

<style type="text/css">


body {
	font-family: 'Lobster', cursive;
	background: -webkit-linear-gradient(wheat, pink);

}



</style>


 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Forecast</title>
 	</head>
 	<body onmousedown="return false" onselectstart="return false">

<br>
 		<h1><span style="color:blue">Todays</span> <span style="color:red">Weather</span> <span style="color:green">Report</span></h1>
 <br>
 		<?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some  " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". "; ?>

</center>
 	</body>
 	</html>