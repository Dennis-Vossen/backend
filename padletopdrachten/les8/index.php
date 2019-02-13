<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>les 8</title>
</head>
<body>
	<?php 
	
	$mark = "Mark Rutten";
	$marknl = 8.5;
	$marken = 7.7;
	$markrek = 9.0;
	$markprog = 8.3;
	$markdb = 6.9;
	$markgm = $marknl + $marken + $markrek + $markprog + $markdb;
	$markgm = $markgm / 5;
	$markgm = round ($markgm, 1);
	
	$dennis = "Dennis Vossen";
	$dennisnl = 8;
	$dennisen = 7.5;
	$dennisrek = 9.5;
	$dennisprog = 10;
	$dennisdb = 7;
	$dennisgm = $dennisnl + $dennisen + $dennisrek + $dennisprog + $dennisdb;
	$dennisgm = $dennisgm / 5;
	$markgm = round ($dennisgm, 1);
	
	$alv = "Alvana Lamslag";
	$alvnl = 6;
	$alven = 8;
	$alvrek = 5.5;
	$alvprog = 8.3;
	$alvdb = 1;
	$alvgm = $alvnl + $alven + $alvrek + $alvprog + $alvdb;
	$alvgm = $alvgm / 5;
	$alvgm = round ($alvgm, 1);
	
	echo "<table border='1'><tr><th>Naam </th><th>Nederlands</th><th>Engels </th><th>Rekenen</th><th>programmeren </th><th>Databases </th><th>Gemiddeld</th></tr>
	<tr><td>$mark</td><td>$marknl</td><td>$marken</td><td>$markrek</td><td>$markprog</td><td>$markdb</td><td>$markgm</td> </tr><tr><td>$dennis</td><td>$dennisnl</td><td>$dennisen</td><td>$dennisrek</td><td>$dennisprog</td><td>$dennisdb</td><td>$dennisgm</td> </tr><tr><td>$alv</td><td>$alvnl</td><td>$alven</td><td>$alvrek</td><td>$alvprog</td><td>$alvdb</td><td>$alvgm</td> </tr></table>";
	?>
</body>
</html>