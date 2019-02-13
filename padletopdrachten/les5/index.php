<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$voornaam = 'Dennis';
		$achternaam = 'Vossen';
		$tussennaam = 'Anne Paolo';
		$volledigenaam = $voornaam . " " . $tussennaam . " " . $achternaam;
		$adres = 'Lindestraat';
		$postcode = '6096BW';
		$huisnummer = '7';
		$woonplaats = 'Grathem';
		$compleetadres = $adres ." ".$huisnummer."<br>".$postcode." ".$woonplaats;
			echo $volledigenaam. "<br>" . $compleetadres;
	
	?>
</body>
</html>