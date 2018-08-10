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