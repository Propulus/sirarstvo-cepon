<!DOCTYPE html>
<html>
<head>
	<title>Sirarstvo Čepon</title>
	<meta charset="UTF-8">
	<meta name="author" content="Jan Hribar, jhribar8@gmail.com">
	<meta name="owner" content="Sirarstvo Čepon">
	<meta name="HandheldFriendly" content="true">
	<meta name="description" content="Sirarstvo (Cheese dairy) Čepon is a new and young farm with a heritage">
	<meta name="keywords" content="goat, cheese trade, milk, cheese, čepon, cepon, produce, milk production, dairy, goat cheese, goat yogurt, goat products, yogurt, sirarstvo čepon, sirarstvo cepon, cheese dairy Cepon, cheese dairy Čepon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
  <link rel="icon" type="image/png" href="imgs/favicon.png">
  <link rel="stylesheet" href="css/font-awesome/css/all.css">
  <link rel="stylesheet" href="css/w3.css">
  <script src="jquery-3.3.1.min.js"></script>
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
    color: black;
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
	    background-image: url("imgs/site/doma.JPG");
	    min-height: 100%;
	}
	
	/* portoflio img */
	.bgimg-2 {
	    background-image: url("imgs/site/molze.JPG");
	    min-height: 400px;
	}
	
	/* location img */
	.bgimg-3 {
	    background-image: url("imgs/site/ivancna.JPG");
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


  .mainTitle {
    position: relative;
    bottom: 140px;
  }

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
        <p>This site uses cookies to track traffic and keep track of your language setting. To learn more <a href="cookies_en.php" class="w3-hover-text-blue">click here</a>.</p>
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
    <a href="#home"    class="w3-bar-item w3-text-black w3-button home">HOME</a>
    <a href="#about"   class="w3-bar-item w3-text-black w3-button w3-hide-small aboutUs"><i class="fa fa-user"></i> ABOUT US</a>
    <a href="#portfolio" class="w3-bar-item w3-text-black w3-button w3-hide-small portfolio"><i class="fa fa-th"></i> PRODUCTS</a>
    <a href="#contact"   class="w3-bar-item w3-text-black w3-button w3-hide-small contact"><i class="fa fa-envelope"></i> CONTACT</a>
    <a class="w3-bar-item w3-right w3-hover-black w3-button flagen">
      <img class="flagIcon" id="enFlag" src="imgs/flags/en.svg">
    </a>
    <a class="w3-bar-item w3-right w3-hover-black w3-button flagsi">
      <img class="flagIcon  w3-sepia-max" id="siFlag" src="imgs/flags/si.svg">      
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about"    class="w3-bar-item w3-button nasT"    onclick="toggleFunction()">ABOUT US</a>
    <a href="#portfolio"  class="w3-bar-item w3-button mapT"    onclick="toggleFunction()">PRODUCTS</a>
    <a href="#contact"    class="w3-bar-item w3-button kontaktT"  onclick="toggleFunction()">CONTACT</a>
  </div>  
</div>



<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity mainTitle"><span class="w3-hide-small">SIRARSTVO</span> ČEPON</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">About us</h3>
  <p>Farm and cheese dairy ČEPON is located above the Stična monastery in the municipality of Ivančna Gorica. The founders of the farm were the late Vincencij and his wife Heos Ferdinanda Čepon, who have started raising goats and producing goat milk over 26 years ago. That is how they started the ČEPON brand.</p>
  <P>In 2010, more so because of luck, after doing some work for them, rather than serious intent of delving into working with goats, a young carpenter, called Jure Dremelj joined them. He grew fond of them quickly and started coming around more and more often, learning the craft from Vincencij. Jure was a farm boy already, so he wasn’t a stranger to farm work. In 2017  Vincencij came to the conclusion that, due to old age, he should stop the farm but Jure convinced him to give him a long-term lease for the farm and the brand.</P>
  <P>That is how Jure Dremelj with his partner Sara Dremelj, back then Hribar, became the holder of the farm on January 1. 2018, and continues to carry on the work.</P>
  <div class="w3-row-padding">
        <div class="w3-col m6 w3-center w3-padding-large">
            <img src="imgs/site/koze.JPG" onclick="onClick(this)" class="w3-round w3-image" alt="Curious bunch" width="500" height="333">
        </div>
        <div class="w3-col m6 w3-center w3-padding-large">
            <p>There are over 50 dairy goats on the farm with about 40 does, which are being fed on two big pastures right next to the barn. There are also other leased fenced pastures. The fodder is comprised out of pasture grass, hay and grain mixtures with which we strive for ecologically friendly farming</p>
        </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-col m4">
          <p>We produce:</p>
          <ul>
              <li>Fresh goat milk</li>
              <li>Goat yogurt</li>
              <li>Goat curd</li>
              <li>Goat kefir</li>
              <li>Young goat cheese</li>
              <li>Mature goat cheese</li>
              <li>Smoked goat cheese</li>
              <li>Whey</li>
          </ul>
      </div>      
      <div class="w3-col m8">
        <p>The products are sold in the trading network of Mercator and Interspar as well as the Ljubljana market place and some fairs. Of course all of the products can also be tasted and bought at the farm, but we would like you to announce yourself beforehand via the phone number listed in the "Contact" section. After all there is a lot of work to be done on and outside of the farm.</p>
      </div>
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PRODUCTS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">Our products</h3>
    <p class="w3-center"><em>Here are some of out excellent products<br> <i>Click on an image to enlarge it.</i></em></p><br>
  
    <div class="w3-row-padding w3-center">
        <div class="w3-col m12">
            <img src="imgs/izdelki/p9.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="All products">
        </div>
    </div>
  <!-- mlek (l) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m6">
            <img src="imgs/izdelki/p1.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Milk 660ml">
        </div>
        <div class="w3-col m6 prodText">
            <h4>Goat milk</h4>
            <i>Goats are known to be the pickiest eaters of the dairy producing animals. They choose only the best and healthiest plants. They are known for not getting cancer, which is why there is a lot of research going on with which they hope to find a more universal cure for cancer. Even from before the times of Hippocrates goat milk, and other goat dairy products have been used to cure many illnesses. Therefore there is plenty of scientific literature about the benefits of goat milk, which is why it is even often recommended by doctors for certain patients, who then when they try it, happily enjoy it from then on.</i>
        </div>
    </div>
    <!-- lonček (d) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m6 w3-hide-small prodText">
            <h4>Yogurt from goat milk in a cup</h4>
            <i>To get yogurt, the very healthy milk is heated up and while it is cooling, a yogurt culture of microorganisms is added. After which it is fermented and cooled completely. That is a probiotic yogurt, which can be used as a standalone refreshing drink, or eaten with seasonal fruit to the taste of the individual.</i>
        </div>
        <div class="w3-col m6">
            <img src="imgs/izdelki/p5.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Yogurt in a cup">
        </div>
        <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
            <h4>Yogurt from goat milk in a cup</h4>
            <i>To get yogurt, the very healthy milk is heated up and while it is cooling, a yogurt culture of microorganisms is added. After which it is fermented and cooled completely. That is a probiotic yogurt, which can be used as a standalone refreshing drink, or eaten with seasonal fruit to the taste of the individual.</i>
        </div>
    </div>
  
  <div class="w3-row-padding w3-center">
      <button id="loadButton" class="w3-button w3-padding-large w3-light-grey w3-center">Load MORE!</button>
  </div>

    <div class="hiddenProduct"  hidden="true">
        <!-- mladi sir (l) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m6">
                <img src="imgs/izdelki/p2.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Young cheese">
            </div>
            <div class="w3-col m6 prodText">
            <h4>Young goat cheese</h4>
              <i>Cheese is again, similair to curd, since it is made from it. Milk is heated, pasteurized, given a culture, stirred and given rennet. After the rennet bits of cheese start to form, which are then collected into a cheese cloth and put into a mold to form it's shape. We then let the whey out of it, removing water from it. It is then vacuum packed and can be used in this form in the next 30 days. It's great with meat products or on it's own.</i>
            </div>
        </div>
        <!-- zorjeni sir (d) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m6 w3-hide-small prodText">
                <h4>Matured goat cheese</h4>
                <i>Prior to vacuum packaging young cheese it is taken to rippen where it is cleaned regularly and taken care of for at least 60 days at a specific temperature and humidity. It is much firmer than young cheese but used in the same way.</i>
            </div>
            <div class="w3-col m6">
                <img src="imgs/izdelki/p3.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Mature cheese">
            </div>
            <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
                <h4>Matured goat cheese</h4>
                <i>Prior to vacuum packaging young cheese it is taken to rippen where it is cleaned regularly and taken care of for at least 60 days at a specific temperature and humidity. It is much firmer than young cheese but used in the same way.</i>
            </div>
        </div>
        <!-- kajeni sir (l) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-row-padding w3-center">
                <div class="w3-col m6">
                    <img src="imgs/izdelki/p4.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Smoked cheese">
                </div>
                <div class="w3-col m6 prodText">
                    <h4>Smoked goat cheese</h4>
                    <i>Prior to vacuum packaging the matured cheese is put into a smoke chamber adding a aftertaste of corresponding strength to the time in the chamber. The loved taste of cheese is coupled with the special taste of goat milk, decorated with the aftertaste of smoke, creating a gourmet's dream.</i>
                </div>
            </div>
        </div>        
        <!-- jogurt v flašlo (d) -->
      <div class="w3-row-padding w3-center">
          <div class="w3-col m6 w3-hide-small prodText">
              <h4>Yogurt from goat milk in a bottle</h4>
              <i>To get yogurt, the very healthy milk is heated up and while it is cooling, a yogurt culture of microorganisms is added. After which it is fermented and cooled completely. That is a probiotic yogurt, which can be used as a standalone refreshing drink, or eaten with seasonal fruit to the taste of the individual.</i>
          </div>
          <div class="w3-col m6">
            <img src="imgs/izdelki/p6.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Yogurt in a bottle">
          </div>
          <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
              <h4>Yogurt from goat milk in a bottle</h4>
              <i>To get yogurt, the very healthy milk is heated up and while it is cooling, a yogurt culture of microorganisms is added. After which it is fermented and cooled completely. That is a probiotic yogurt, which can be used as a standalone refreshing drink, or eaten with seasonal fruit to the taste of the individual.</i>
          </div>
      </div>
  
      <div class="w3-row-padding w3-center">
          <div class="w3-col m6">
              <img src="imgs/izdelki/p7.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Kefir">
          </div>
          <div class="w3-col m6 prodText">
              <h4>Kefir from goat milk</h4>
              <i>Pasteurized goat milk is poured over kefir seeds and left to ferment for one day at 23 degrees celsius. The result is a refreshing drink with a slightly more acidic flavour which is undoubtfully very beneficial to one's health.</i>
          </div>
      </div>
  
      <div class="w3-row-padding w3-center">
        <div class="w3-col m6 w3-hide-small prodText">
              <h4>Sausages from goat meat</h4>
              <i>A completely seasonal product around at the time of March until May, when the young are big enough to be useful for food production. Due to the incredibly experienced and skilled butcher, these are beloved by all our friends. These aren't quite for sale, but they can be tasted when you visit our farm.</i>
          </div>
        <div class="w3-col m6">
          <img src="imgs/izdelki/p8.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Goat sausages">
        </div>
        <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
              <h4>Sausages from goat meat</h4>
              <i>A completely seasonal product around at the time of March until May, when the young are big enough to be useful for food production. Due to the incredibly experienced and skilled butcher, these are beloved by all our friends. These aren't quite for sale, but they can be tasted when you visit our farm.</i>
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

<!-- CONTACT img -->
<div class="bgimg-3 w3-display-container">
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
    	  			<img src="imgs/site/map.JPG" class="mapIMG w3-col m12" alt="satelitska slika kmetije">
    				<i class="tooltiptext w3-col m12">click on the image to go to the exact location in Google Maps</i>    				
    			</div>
    		</a>
        <i>Image from Google Maps <i class="far fa-copyright">Google</i></i>
    	</div>
    	<div class="w3-col m6 w3-panel">
    	  	<div class="w3-large w3-margin-bottom">
    			<i class="fa fa-map-marker-alt fa-fw w3-hover-text-red w3-xlarge w3-margin-right"></i> Stična, Slovenija<br>
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-indigo w3-xlarge w3-margin-right"></i> phone: 031 280 034<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-mail: kontakt@sirarstvo-cepon.si<br>
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
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> phone: 031 280 034<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-mail: kontakt@sirarstvo-cepon.si<br>
    			<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Stična 103, 1295 Ivančna Gorica, Slovenija<br>
    	  	</div>
    	</div>
  	</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  	<p><small>We do not guarantee data on this site to be accurate and current. This site is for informational purposes.</small></p>
    <p><small>If you wish to see information about our cookies <a href="cookies_en.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">click here</a>, if you wish to see information about our Privacy policy <a href="privacy_policy_en.php" class="w3-hover-text-green">click here</a></small></p>
    <p>Your usage of our site is your responsibility, using our images is free if our site is cited as the source.</p>
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
      if(readCookie("accepted_cookies")=="yes"){
        setCookie("language", "en", 365);
      }
      location.reload();
    });
    $(".flagsi").on("click", function(){      
      if(readCookie("accepted_cookies")=="yes"){
        setCookie("language", "sl", 365);        
      }
      location.reload();
    });

    $("#accept_cookies").on("click", function(){
      setCookie("accepted_cookies", "yes", 365);
      $("#cookie_banner").hide();
      console.log(readCookie("accepted_cookies"));
    });
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime()+(exdays*24*60*60*1000));
      var expires = "; expires="+d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1,c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }
	
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
