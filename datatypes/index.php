<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
</head>
<body>
	<?php
	
	$naam = "carl";
	$adres = "kruislaan 111";
	$woonplaats = "Utrecht";
	
	$dollars = 999.99;
	$koers = 1.2;
	$euros = $dollars * $koers;
	
	echo "Bedrag in euro's is:", number_format((float)$euros, 2, '.', '');;
	
	?>
</body>
</html>