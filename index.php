<?php 
	if(!isset($_COOKIE["language"])){
		if (substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2) == "sl") {
			include "slo.php";
		}
		else {
			include "en.php";
		}		
	} else {
		$lang = $_COOKIE["language"];
		if ($lang == "sl") {
			include "slo.php";
		}
		else {
			include "en.php";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jan Hribar, jhribar8@gmail.com">
	<meta name="owner" content="Sirarstvo Čepon">
	<meta name="HandheldFriendly" content="true">
	<meta name="description" content="Cheese dairy Čepon is a new and young farm with a heritage">
	<meta name="keywords" content="kozjereja, sirarstvo, koze, mleko, sir, Čepon, čepon, cepon, Cepon, pridelovanje, mlekarna, sirarna, sir, kozji sir, kozji izdelki, jogurt, kozji jogurt, sirarstvo čepon, sirarstvo cepon, cheese dairy Cepon, cheese dairy Čepon, goat, cheese trade, milk, cheese, čepon, cepon, produce, milk production, dairy, goat cheese, goat yogurt, goat products, yogurt">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="icon" type="image/png" href="imgs/favicon.png">
</head>
</html>