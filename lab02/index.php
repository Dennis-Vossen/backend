<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
</head>
<body>
<h3>PHP lab 02</h3>
	<?php
	
	$naam = "karim";
	$nederlands = "8.5";
	$engels = "7.7";
	$rekenen = "6.7";
	$programmeren = "8.5";
	$databases = "9.4";
	
	echo "<table>
		<caption>
		<strong>Rapport</strong>
		</caption>
		<thead>
			<tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th></tr>
		</thead>
		<tbody>
			<tr><td>$naam</td><td>$nederlands</td><td>$engels</td><td>$rekenen</td><td>$programmeren</td><td>$databases</td><td>-----------</td></tr>
		</tbody>
		<tfoot>
			<tr><td colspan='6'>Groep gemiddeld</td><td>-----------</td></tr>
		</tfoot>
		</table>"
	
	?>
	
</body>
</html>
