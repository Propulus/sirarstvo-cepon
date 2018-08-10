<?php 
	if (substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2) == "sl") {
		include "slo.php";
	}
	else {
		include "en.php";
	}
?>