<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
</head>
<body>
	<?php
	
	$breedte = 10;
	$lengte = 11;
	$hoogte = 5;
	
	$oppervlakte = $lengte * $breedte;
	$volume = $lengte * $breedte * $hoogte;
	
	echo "containeroppervlakte is: ", $oppervlakte;
	echo "<br />containervolume is: ", $volume;
	
	?>
</body>
</html>