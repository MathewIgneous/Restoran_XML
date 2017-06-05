<!DOCTYPE html>
<html>
<head>
	<title>Restoran</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ovo je stranica o restoranu">
	<meta name="keywords" content="Restoran, hrana, pizza">
	<meta name="author" content="Mateo Cahun">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body
	<?php 
		$style="";
		if(isset($image))
			$style = "background-image: url('$image');";
		else
			$style = "background-image: url('images/Pozadina01.jpg');";
		echo 'style="'.$style.'"';
	?>>
	<header>
		<section><h1>Mateov Slasni Kutak</h1></section>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Menu.php">Menu</a></li>
				<li><a href="OHrani.php">Specijaliteti</a></li>
				<li><a href="Kontakt.php">Kontakt</a></li>
			</ul> 
		</nav>
	</header>