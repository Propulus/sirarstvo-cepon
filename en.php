<!DOCTYPE html>
<html>
<head>
	<title>Cheese dairy Čepon</title>
	<meta charset="UTF-8">
	<meta name="author" content="Jan Hribar, jhribar8@gmail.com">
	<meta name="owner" content="Sirarstvo Čepon">
	<meta name="HandheldFriendly" content="true">
	<meta name="description" content="Sirarstvo Čepon je mlada kmetija z dediščino">
	<meta name="keywords" content="goat, cheese trade, milk, cheese, Čepon, čepon, Cepon, cepon, produce, milk production, dairy, goat cheese, goat yogurt, goat products, yogurt">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="icon" type="image/png" href="imgs/favicon.png">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<style>
	body,h1,h2,h3,h4,h5,h6 {
	  	font-family: "Karla", sans-serif;
	}

	a {
		text-decoration: none;
	}

	body, html {
	    height: 100%;
	    color: #777;
	    line-height: 1.8;
	}

	i {
		font-size: 1em;
	  	font-family: "Cardo", sans-serif;    
	}

	.prodText {
		margin-top: 1em;
	}

	/* parallax magic */
	.bgimg-1, .bgimg-2, .bgimg-3 {
	    background-attachment: fixed;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	
	/* home img */
	.bgimg-1 {
	    background-image: url("imgs/doma.jpg");
	    min-height: 100%;
	}
	
	/* portoflio img */
	.bgimg-2 {
	    background-image: url("imgs/molze.jpg");
	    min-height: 400px;
	}
	
	/* location img */
	.bgimg-3 {
	    background-image: url("imgs/ivancna.jpg");
	    min-height: 400px;
	}

	.flagIcon {
	  height: 1em;
	  width: 1.5em;
	}

	.mapIMG {
	  height: 80%;
	  width: 80%;
	}

	.productIMG {
	  width: 100%;
	  padding: 1em;
	}
	
	.w3-wide {letter-spacing: 10px;}
	.w3-hover-opacity {cursor: pointer;}
	/* Tooltip container */

	.tooltip {
	    position: relative;
	    display: inline-block;
	}
	
	.tooltip .tooltiptext {
	    visibility: hidden;
	    background-color: bisque;
	    color: #777;
	    text-align: center;
	    padding: 5px 0;
	    border-radius: 1px;
	    font-size: 2.2em;
	 
	    position: absolute;
	    z-index: 1;
	}
	
	.tooltip:hover .tooltiptext {
	    visibility: visible;
	}
  
	/* Turn off parallax scrolling for tablets and phones */
	@media only screen and (max-device-width: 1024px) {
	    .bgimg-1, .bgimg-2, .bgimg-3 {
	        background-attachment: scroll;
	    }
	}
</style>
<body>

<?php if(!isset($_COOKIE["accepted_cookies"])):?>
<div class="w3-bottom w3-amber" id="cookie_banner">
  <div class="w3-bar">
    <div class="w3-row-padding">
      <div class="w3-col">
        <p>This site uses cookies to track traffic and keep track of your language setting. To learn more <a href="cookies.php" class="w3-hover-text-blue">click here</a>.</p>
      </div>
      <div class="w3-col" style="margin-right: 3em">
        <button id="accept_cookies" class="w3-display-right">I accept</button>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">    
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
    </a>
    <a href="#home"    class="w3-bar-item w3-button home">HOME</a>
    <a href="#about"   class="w3-bar-item w3-button w3-hide-small aboutUs"><i class="fa fa-user"></i> ABOUT US</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small portfolio"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact"   class="w3-bar-item w3-button w3-hide-small contact"><i class="fa fa-envelope"></i> CONTACT</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-black flagen">
      <img class="flagIcon" id="enFlag" src="imgs/flags/en.svg">
    </a>
    <a class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-black flagsi">
      <img class="flagIcon   w3-sepia-max" id="siFlag" src="imgs/flags/si.svg">      
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about"    class="w3-bar-item w3-button nasT"    onclick="toggleFunction()">ABOUT US</a>
    <a href="#portfolio"  class="w3-bar-item w3-button mapT"    onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact"    class="w3-bar-item w3-button kontaktT"  onclick="toggleFunction()">CONTACT</a>
  </div>
</div>



<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">CHEESE DAIRY</span> ČEPON</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">About us</h3>
  <p class="w3-center"><i>Goats are our passion</i></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="w3-row-padding">
    <div class="w3-col m6 w3-center w3-padding-large">
      <br>
      <img src="imgs/koze.jpg" onclick="onClick(this)" class="w3-round w3-image" alt="Radovedna skupščina" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTOFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  	<h3 class="w3-center">Our products</h3>
  	<p class="w3-center"><em>Here are some of our excellent products<br> <i>Click on a picture to make it bigger and get to know more</i></em></p><br>
	
  	<div class="w3-row-padding w3-center">
  	  	<div class="w3-col m12">
  	  	  	<img src="imgs/izdelki/p9.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Vsi izdelki">
  	  	</div>
  	</div>
	
  	<div class="w3-row-padding w3-center">
  	  	<div class="w3-col m6">
  	  	  	<img src="imgs/izdelki/p1.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Mleko 660ml">
  	  	</div>
  	  	<div class="w3-col m6 prodText">
  	  	  	<i>Mleko 660ml ome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim </i>
  	  	</div>
  	</div>
  	<div class="w3-row-padding w3-center">
  	  	<div class="w3-col m6 w3-hide-small prodText">
  	  	  	<i>Mladi sir. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim </i>
  	  	</div>
  	  	<div class="w3-col m6">
  	  	  	<img src="imgs/izdelki/p2.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Mladi sir">
  	  	</div>
  	  	<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
  	  	  	<i>Mladi sir I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  	</div>
  	</div>
	
	<div class="w3-row-padding w3-center">
  		<button id="loadButton" class="w3-button w3-padding-large w3-light-grey w3-center">Show me more</button>
	</div>

  	<div class="hiddenProduct"  hidden="true">
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6">
    	  	  	<img src="imgs/izdelki/p3.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Zreli sir">
    	  	</div>
    	  	<div class="w3-col m6 prodText">
    	  	  	<i>Zreli sir I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
    	  	</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6 w3-hide-small prodText">
  	  		  	<i>Prekajeni sir I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    	  	<div class="w3-col m6">
    	  	  	<img src="imgs/izdelki/p4.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Prekajeni sir">
    	  	</div>
    	  	<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
  	  		  	<i>Prekajeni sir I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6">
    	  	  	<img src="imgs/izdelki/p5.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Jogurt v lončku">
    	  	</div>
    	  	<div class="w3-col m6 prodText">
    	  	  	<i>lorem upsum I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
    	  	</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6 w3-hide-small prodText">
  	  		  	<i>Jogurt v flaški I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    	  	<div class="w3-col m6">
    	    	<img src="imgs/izdelki/p6.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Jogurt v flaški">
    	  	</div>
    	  	<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
  	  		  	<i>Jogurt v flaški I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6">
    	  	  	<img src="imgs/izdelki/p7.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Kefir">
    	  	</div>
    	  	<div class="w3-col m6 prodText">
    	  	  	<i>lorem upsum I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
    	  	</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    		<div class="w3-col m6 w3-hide-small prodText">
  	  		  	<i>Kozje klobase I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    		<div class="w3-col m6">
    			<img src="imgs/izdelki/p8.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Kozje klobase">
    		</div>
    		<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
  	  		  	<i>Kozje klobase I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.</i>
  	  		</div>
    	</div>
    	<div class="w3-row-padding w3-center">
    		<button id="hideButton" class="w3-button w3-padding-large w3-light-grey w3-center">Hide</button>
    	</div>
  	</div>
</div>

<!-- focus img modal -->
<div id="focusModal" class="w3-modal w3-black" onclick="this.style.display='none'">
	<div class="w3-row-padding">
  		<span class="w3-button w3-xxxlarge w3-white w3-display-topright" title="Close Modal Image"><i class="fa fa-times"></i></span>
  		<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
  		 	<img id="focusIMG" class="w3-image">
  		 	<p id="focusTEXT" class="w3-opacity w3-large"></p>
  		</div>
  	</div>
</div>

<!-- Portfolio img -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
 	<div class="w3-display-middle">
 		<span class="w3-xxlarge w3-text-white w3-wide kontaktT">CONTACT</span>
 	</div>
</div>

<!-- Contact -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  	<h3 class="w3-center">Where are we</h3>
  	<p class="w3-center"><i>Visit us!</i></p>
	<!-- desktop panel -->
  	<div class="w3-row-padding w3-padding-32 w3-section w3-hide-small">
    	<div class="w3-col m6 w3-container">
    		<a class="tooltip" href="https://www.google.com/maps/place/Vincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji/@45.9480871,14.7865867,410m/data=!3m1!1e3!4m12!1m6!3m5!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!2sVincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji!8m2!3d45.9480602!4d14.7877294!3m4!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!8m2!3d45.9480602!4d14.7877294">
    			<div class="w3-row-padding">
    	  			<img src="imgs/map.jpg" class="mapIMG w3-col m12" alt="satelitska slika kmetije">
    				<i class="tooltiptext w3-col m12">click on the image to go to the exact location in Google Maps</i>    				
    			</div>
    		</a>
    	</div>
    	<div class="w3-col m6 w3-panel">
    	  	<div class="w3-large w3-margin-bottom">
    			<i class="fa fa-map-marker-alt fa-fw w3-hover-text-red w3-xlarge w3-margin-right"></i> Stična, Slovenija<br>
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-indigo w3-xlarge w3-margin-right"></i> phone: 051 370 878<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-mail: kontakt@sirarstvo-cepon.com<br>
    			<i class="fa fa-envelope fa-fw w3-hover-text-khaki w3-xlarge w3-margin-right"></i> Stična 103, 1295 Ivančna Gorica, Slovenija<br>
    	  	</div>
    	</div>
  	</div>

  	<!-- phone panel -->
  	<div class="w3-show-small w3-hide-medium w3-hide-large w3-container">  		
  		<div class="w3-panel">
    	  	<div class="w3-large w3-margin-bottom">
    	  		<a href="https://www.google.com/maps/place/Vincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji/@45.9480871,14.7865867,410m/data=!3m1!1e3!4m12!1m6!3m5!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!2sVincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji!8m2!3d45.9480602!4d14.7877294!3m4!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!8m2!3d45.9480602!4d14.7877294">
    				<i class="fa fa-map-marked-alt fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Where are we</br>
    			</a>
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> phone: 051 370 878<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-mail: kontakt@sirarstvo-cepon.com<br>
    			<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Stična 103, 1295 Ivančna Gorica, Slovenija<br>
    	  	</div>
    	</div>
  	</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  	<p><small>We do not guarantee data on this site to be accurate and current. This site is for informational purposes.</small></p>
  	<p>This site is powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>

  	// Modal Image Gallery
  	function onClick(element) {
  	  	document.getElementById("focusIMG").src = element.src;
  	  	document.getElementById("focusModal").style.display = "block";
  	  	var captionText = document.getElementById("focusTEXT");
  	  	captionText.innerHTML = element.alt;
  	}
  	
  	// adapt navbar
  	window.onscroll = function() {
  	    var navbar = document.getElementById("myNavbar");
  	    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
  	        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
  	    } else {
  	        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
  	    }
  	};
  
  	$("#loadButton").on("click", function(){
  		console.log($(this));
  		$(this).hide();
  	  	$(".hiddenProduct").show();
  	});

  	$("#hideButton").on("click", function(){
  		$("#loadButton").show();
  		$(".hiddenProduct").hide();
  	});

  	$(".flagen").on("click", function(){
      document.cookie = "language=en";
      location.reload();
  	});
  	$(".flagsi").on("click", function(){
      document.cookie = "language=sl";
      location.reload();
  	});

    $("#accept_cookies").on("click", function(){
      document.cookie = "accepted_cookies=yes";
      $("#cookie_banner").hide();
    });
	
  	// phone menu opener
  	function toggleFunction() {
  	    var x = document.getElementById("navDemo");
  	    if (x.className.indexOf("w3-show") == -1) {
  	        x.className += " w3-show";
  	    } else {
  	        x.className = x.className.replace(" w3-show", "");
  	    }
  	}
</script>
</body>
</html>
