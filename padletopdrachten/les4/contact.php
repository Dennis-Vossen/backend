<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php include 'php/header.php';?>
	<?php include 'php/menu.php';?>
	
	
	Naam:<input type="text" name="naam">
	E-mail:<input type="email" name="email">
	Onderwerp:<input type="text" name="subject">
	Bericht: <textarea name="bericht" cols="20" rows="4"></textarea>
	
	<?php include 'php/footer.php';?>
</body>
</html>