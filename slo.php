<!DOCTYPE html>
<html>
<head>
	<title>Sirarstvo Čepon</title>
	<meta charset="UTF-8">
	<meta name="author" content="Jan Hribar, jhribar8@gmail.com">
	<meta name="owner" content="Sirarstvo Čepon">
	<meta name="HandheldFriendly" content="true">
	<meta name="description" content="Sirarstvo Čepon je mlada kmetija z dediščino">
	<meta name="keywords" content="kozjereja, sirarstvo, koze, mleko, sir, Čepon, čepon, cepon, Cepon, pridelovanje, mlekarna, sirarna, sir, kozji sir, kozji izdelki, jogurt, kozji jogurt, sirarstvo čepon, sirarstvo cepon, cheese dairy Cepon, cheese dairy Čepon">
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

  h4 {
    color: orange;
    font-weight: bold;
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

  .parTekst {
    font-weight: bold;
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

	.tooltip {
	    position: relative;
	    display: inline-block;
	    /*border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
	}
	
	/* Tooltip text */
	.tooltip .tooltiptext {
	    visibility: hidden;
	    background-color: bisque;
	    color: #777;
	    text-align: center;
	    padding: 5px 0;
	    border-radius: 1px;
	    font-size: 2.2em;
	 
	    /* Position the tooltip text - see examples below! */
	    position: absolute;
	    z-index: 1;
	}
	
	/* Show the tooltip text when you mouse over the tooltip container */
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
        <p>Ta stran uporablja piškotke, da spremlja promet in shranjuje vašo izbiro jezika. Da izveste več <a href="cookies_sl.php" class="w3-hover-text-blue">kliknite tukaj</a>.</p>
      </div>
      <div class="w3-col" style="margin-right: 3em">
        <button id="accept_cookies" class="w3-display-right">Sprejmem</button>
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
    <a href="#home" 	 class="w3-bar-item w3-button home">DOMOV</a>
    <a href="#about" 	 class="w3-bar-item w3-button w3-hide-small aboutUs"><i class="fa fa-user"></i> O NAS</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small portfolio"><i class="fa fa-th"></i> IZDELKI</a>
    <a href="#contact" 	 class="w3-bar-item w3-button w3-hide-small contact"><i class="fa fa-envelope"></i> KONTAKT</a>
    <a class="w3-bar-item w3-right w3-hover-black w3-button flagen">
      <img class="flagIcon  w3-sepia-max" id="enFlag" src="imgs/flags/en.svg">
    </a>
    <a class="w3-bar-item w3-right w3-hover-black w3-button flagsi">
      <img class="flagIcon" id="siFlag" src="imgs/flags/si.svg">      
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" 		class="w3-bar-item w3-button nasT" 		onclick="toggleFunction()">O NAS</a>
    <a href="#portfolio" 	class="w3-bar-item w3-button mapT" 		onclick="toggleFunction()">IZDELKI</a>
    <a href="#contact" 		class="w3-bar-item w3-button kontaktT"	onclick="toggleFunction()">KONTAKT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">SIRARSTVO </span> ČEPON</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">O NAS</h3>
    <p>Kmetija ČEPON se nahaja nad samostanom Stična v občini Ivančna gorica. Ustanovitelja kmetije sta bila pokojni Vincencij in njegova žena  Heos Ferdinanda Čepon, ki sta pred dobrimi 26 leti začela z vzrejo koz in predelavo kozjega mleka. Tako sta tudi začela pot blagovne znamke ČEPON.</p>
    <p>V letu 2010 se jima je bolj po naključju zaradi naročila mizarskih storitev, kot pa z resnim namenom ukvarjati se s kozjerejo pridružil mladi mizar Jure Dremelj, kateremu pa so koze precej hitro prirasle k srcu in je vedno pogosteje obiskoval kmetijo in se pri pokojnem Vincenciju Čepon priučil veščin, ki so potrebne na kmetiji. V letu 2017 je Vincencij Čepon sprejel odločitev, da zaradi starosti zapre dopolnilno dejavnost in »ugasne« kmetijo, vendar ga je Jure Dremelj prepričal, da mu je kmetijo z mlekarskim obratom oddal v dolgoročni najem skupaj z blagovno znamko.</p>
    <p>Tako je Jure Dremelj s partnerko Saro Hribar (takrat še Hribar – sedaj Dremelj) s 1. 1. 2018 postal nosilec dopolnilne dejavnosti na kmetiji in nadaljuje z delom na kmetiji in v mlekarni. </p>
    <div class="w3-row-padding">
        <div class="w3-col m6 w3-center w3-padding-large">
            <img src="imgs/site/koze.JPG" onclick="onClick(this)" class="w3-round w3-image" alt="Radovedna skupščina" width="500" height="333">
        </div>
        <div class="w3-col m6 w3-center w3-padding-large">
            <p>Na kmetiji je več kot 50 molznih koz in še približno toliko (30-40) mladic, ki se pasejo na dveh večji pašnikih v neposredni bližini hleva. Poleg tega k kmetiji spada še več ha najetih zemljišč, ki so vsa ograjena. Kmetija je usmerjena v ekološko kmetovanje. Krmni obrok je sestavljen iz paše, mrve in posebne žitne mešanice za ekološko rejo.</p>
        </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-col m4">
          <p>V mlekarni se proizvaja:</p>
          <ul>
              <li>Sveže kozje mleko</li>
              <li>Kozji jogurt</li>
              <li>Kozja skuta</li>
              <li>Kefir</li>
              <li>Mladi kozji sir</li>
              <li>Zorjeni kozji sir</li>
              <li>Dimljeni kozji sir</li>
              <li>Sirotka</li>
          </ul>
      </div>      
      <div class="w3-col m8">
        <p>Svoje proizvode tržita v trgovski mreži Mercator ter v trgovinah Interspar, nekaj pa tudi na ljubljanski pokriti tržnici in na različnih sejmih. Seveda pa je vse trenutno razpoložljive proizvode možno pokusiti in kupiti na sami kmetiji, za kar pa je zaželjena predhodne najava na GSM številko, saj delo na kmetiji zahteva veliko dela tudi izven mlekarne in hleva.</p>
      </div>
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide parTekst">IZDELKI</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  	<h3 class="w3-center">Naši izdelki</h3>
  	<p class="w3-center"><em>Tukaj je nekaj naših odličnih izdelkov<br> <i>Kliknite sličico, da jo osredotočite</i></em></p><br>
	
  	<div class="w3-row-padding w3-center">
  	  	<div class="w3-col m12">
  	  	  	<img src="imgs/izdelki/p9.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Vsi izdelki">
  	  	</div>
  	</div>
	<!-- mlek (l) -->
  	<div class="w3-row-padding w3-center">
  	  	<div class="w3-col m6">
  	  	  	<img src="imgs/izdelki/p1.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Mleko 660ml">
  	  	</div>
  	  	<div class="w3-col m6 prodText">
            <h4>Kozje mleko</h4>
  	  	  	<i>Za koze velja, da so najbolj izbirčne med živalmi, ki dajejo mleko. Izbirajo samo najboljše in zdravilne rastline. Zato koze nikdar ne dobijo raka in s tem fenomenom zaposlujejo številne raziskovalce, ki upajo, da bi morda prav s pomočjo koz odkrili »čudežno formulo« proti raku. Že od Hipokrata naprej pa velja, da so kozje mleko, kozje kislo mleko, kozja sirotka, kozji jogurt in kozji sir prava zdravila za vrsto bolezni. O kozjem mleku in njegovem zdravilnem učinku je sicer veliko strokovne literature, ki je dostopna na svetovnem spletu. Proizvod se trži v trgovski verigi Mercator in trgovinah Interspar.</i>
  	  	</div>
  	</div>
    <!-- lonček (d) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m6 w3-hide-small prodText">
            <h4>Jogurt iz kozjega mleka v lončku</h4>
            <i>Zdravilnemu kozjemu mleku se po pasterizaciji med hlajenjem doda jogurtova kultura, nato sledi fermentacija  in nato dokončno hlajenje - nastane probiotični tekoči jogurt. Jogurt se lahko uporabi kot samostojni osvežilni napitek, dodaja pa se mu lahko različno sezonsko sadje po lastni izbiri posameznika. Proizvod se trži v trgovski verigi Mercator in trgovinah Interspar.</i>
        </div>
        <div class="w3-col m6">
            <img src="imgs/izdelki/p5.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Jogurt v lončku">
        </div>
        <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
            <h4>Jogurt iz kozjega mleka v lončku</h4>
            <i>Zdravilnemu kozjemu mleku se po pasterizaciji med hlajenjem doda jogurtova kultura, nato sledi fermentacija  in nato dokončno hlajenje - nastane probiotični tekoči jogurt. Jogurt se lahko uporabi kot samostojni osvežilni napitek, dodaja pa se mu lahko različno sezonsko sadje po lastni izbiri posameznika. Proizvod se trži v trgovski verigi Mercator in trgovinah Interspar.</i>
        </div>
    </div>
	
	<div class="w3-row-padding w3-center">
  		<button id="loadButton" class="w3-button w3-padding-large w3-light-grey w3-center">Naloži VEČ!</button>
	</div>

  	<div class="hiddenProduct"  hidden="true">
        <!-- mladi sir (l) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m6">
                <img src="imgs/izdelki/p2.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Mladi sir">
            </div>
            <div class="w3-col m6 prodText">
            <h4>Mladi sir iz kozjega mleka</h4>
              <i>Pasteriziranemu kozjemu mleku se med postopkom doda kultura in sirilo. Po opravljenem postopku dogrevanja, mešanja in hlajenja, se mešanica sirnih zrn s sirotko nadeva v sirarske modele in pusti, da se sirotka odteče. Nato se ga vakuumsko zapakira in se kot takega lahko uporabi naslednji 30 dni. Uživa se ga lahko samostojno ali kot priloga ustreznim mesnim ali drugim dobrotam.</i>
            </div>
        </div>
        <!-- zorjeni sir (d) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m6 w3-hide-small prodText">
                <h4>Zorjeni sir iz kozjega mleka</h4>
                <i>Mladi kozji sir se namesto vakumskega pakiranja shrani v zorilnico, kjer se ga neguje med zorjenjem naslednjih najmanj 60 dni na predpisani temperaturi in ob predpisani vlagi. Po svoji strukturi je precej bol čvrst od mladega sira, velja pa enak način uporabe, kot za mladi sir.</i>
            </div>
            <div class="w3-col m6">
                <img src="imgs/izdelki/p3.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Zreli sir">
            </div>
            <div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
                <h4>Zorjeni sir iz kozjega mleka</h4>
                <i>Mladi kozji sir se namesto vakumskega pakiranja shrani v zorilnico, kjer se ga neguje med zorjenjem naslednjih najmanj 60 dni na predpisani temperaturi in ob predpisani vlagi. Po svoji strukturi je precej bol čvrst od mladega sira, velja pa enak način uporabe, kot za mladi sir.</i>
            </div>
        </div>
        <!-- kajeni sir (l) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-row-padding w3-center">
                <div class="w3-col m6">
                    <img src="imgs/izdelki/p4.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Prekajeni sir">
                </div>
                <div class="w3-col m6 prodText">
                    <h4>Dimljeni zorjeni sir iz kozjega mleka</h4>
                    <i>Zorjeni kozji sir se pred vakuumskim pakiranjem krajši (za milejši priokus) ali malo daljši čas (nekaj ur) preseli v dimno komoro. Za poznavalce in gurmane je posebej iskan prehranski proizvod oziroma kulinarična dobrota.</i>
                </div>
            </div>
        </div>        
        <!-- jogurt v flašlo (d) -->
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6 w3-hide-small prodText">
            <h4>Jogurt iz kozjega mleka v flaški</h4>
              <i>Zdravilnemu kozjemu mleku se po pasterizaciji med hlajenjem doda jogurtova kultura, nato sledi fermentacija  in nato dokončno hlajenje - nastane probiotični tekoči jogurt. Jogurt se lahko uporabi kot samostojni osvežilni napitek, dodaja pa se mu lahko različno sezonsko sadje po lastni izbiri posameznika. Proizvod se trži v trgovski verigi Mercator in trgovinah Interspar.</i>
  	  		</div>
    	  	<div class="w3-col m6">
    	    	<img src="imgs/izdelki/p6.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Jogurt v flaški">
    	  	</div>
    	  	<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
  	  		  	<h4>Jogurt iz kozjega mleka v flaški</h4>
              <i>Zdravilnemu kozjemu mleku se po pasterizaciji med hlajenjem doda jogurtova kultura, nato sledi fermentacija  in nato dokončno hlajenje - nastane probiotični tekoči jogurt. Jogurt se lahko uporabi kot samostojni osvežilni napitek, dodaja pa se mu lahko različno sezonsko sadje po lastni izbiri posameznika. Proizvod se trži v trgovski verigi Mercator in trgovinah Interspar.</i>
  	  		</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    	  	<div class="w3-col m6">
    	  	  	<img src="imgs/izdelki/p7.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Kefir">
    	  	</div>
    	  	<div class="w3-col m6 prodText">
              <h4>Kefir iz kozjega mleka</h4>
    	  	  	<i>Pasterizirano kozje mleko prelije preko kefirjevi zrn in približni en dan pusti fermentirati na temperaturi 23 stopinj. Dobimo fermentirani osvežilni napitek malce kislejšega okusa, vendar v njegovo zdravilno vlogo v prehrani ni dvomiti.</i>
    	  	</div>
    	</div>
	
    	<div class="w3-row-padding w3-center">
    		<div class="w3-col m6 w3-hide-small prodText">
              <h4>Klobase iz kozjega mesa</h4>
  	  		  	<i>Gre za povsem sezonski proizvod v času meseca marca, aprila ali maja, ko so mladiči dovolj veliki, da je njihovo meso uporabno za prehrano. Glede na izkušnje in preverjeno strokovnost mesarja, so precej iskan in zaželjen mesni proizvod pri mesojedih uporabnikih predvsem v širšem družinskem krogu in med prijatelji. Proizvod še ni namenjen prodaji, možno pa ga je preizkusiti ob obisku na kmetiji.</i>
  	  		</div>
    		<div class="w3-col m6">
    			<img src="imgs/izdelki/p8.jpg" onclick="onClick(this)" class="w3-hover-opacity productIMG" alt="Kozje klobase">
    		</div>
    		<div class="w3-col m6 w3-hide-medium w3-hide-large prodText">
              <h4>Klobase iz kozjega mesa</h4>
  	  		  	<i>Gre za povsem sezonski proizvod v času meseca marca, aprila ali maja, ko so mladiči dovolj veliki, da je njihovo meso uporabno za prehrano. Glede na izkušnje in preverjeno strokovnost mesarja, so precej iskan in zaželjen mesni proizvod pri mesojedih uporabnikih predvsem v širšem družinskem krogu in med prijatelji. Proizvod še ni namenjen prodaji, možno pa ga je preizkusiti ob obisku na kmetiji.</i>
  	  		</div>
    	</div>
    	<div class="w3-row-padding w3-center">
    		<button id="hideButton" class="w3-button w3-padding-large w3-light-grey w3-center">Skrij</button>
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

<!-- contact img -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
 	<div class="w3-display-middle">
 		<span class="w3-xxlarge w3-text-white w3-wide kontaktT parTekst">KONTAKT</span>
 	</div>
</div>

<!-- Contact -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  	<h3 class="w3-center">KJE SE NAHAJAMO</h3>
  	<p class="w3-center"><i>Obiščite nas!</i></p>
	<!-- desktop panel -->
  	<div class="w3-row-padding w3-padding-32 w3-section w3-hide-small">
    	<div class="w3-col m6 w3-container">
    		<a class="tooltip" href="https://www.google.com/maps/place/Vincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji/@45.9480871,14.7865867,410m/data=!3m1!1e3!4m12!1m6!3m5!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!2sVincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji!8m2!3d45.9480602!4d14.7877294!3m4!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!8m2!3d45.9480602!4d14.7877294">
    			<div class="w3-row-padding">
    	  			<img src="imgs/site/map.JPG" class="mapIMG w3-col m12" alt="satelitska slika kmetije">
    				<i class="tooltiptext w3-col m12">kliknite na sliko, da vas zapelje na točno lokacijo v Google Maps</i>    				
    			</div>
    		</a>
    	</div>
    	<div class="w3-col m6 w3-panel">
    	  	<div class="w3-large w3-margin-bottom">
    			<i class="fa fa-map-marker-alt fa-fw w3-hover-text-red w3-xlarge w3-margin-right"></i> Stična, Slovenija<br>
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-indigo w3-xlarge w3-margin-right"></i> telefon: 031 280 034<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-pošta: kontakt@sirarstvo-cepon.si<br>
    			<i class="fa fa-envelope fa-fw w3-hover-text-khaki w3-xlarge w3-margin-right"></i> Stična 103, 1295 Ivančna Gorica, Slovenija<br>
    	  	</div>
    	</div>
  	</div>

  	<!-- phone panel -->
  	<div class="w3-show-small w3-hide-medium w3-hide-large w3-container">  		
  		<div class="w3-panel">
    	  	<div class="w3-large w3-margin-bottom">
    	  		<a href="https://www.google.com/maps/place/Vincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji/@45.9480871,14.7865867,410m/data=!3m1!1e3!4m12!1m6!3m5!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!2sVincencij+%C4%8Cepon+sirarstvo+in+kozjereja+-+nosilec+dopolnilne+dejavnosti+na+kmetiji!8m2!3d45.9480602!4d14.7877294!3m4!1s0x4765222d9dafc64b:0x8ed36c94c8e35fef!8m2!3d45.9480602!4d14.7877294">
    				<i class="fa fa-map-marked-alt fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Kje smo</br>
    			</a>
    			<i class="fa fa-mobile-alt fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> telefon: 031 280 034<br>
    			<i class="fa fa-at fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> e-pošta: kontakt@sirarstvo-cepon.si<br>
    			<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Stična 103, 1295 Ivančna Gorica, Slovenija<br>
    	  	</div>
    	</div>
  	</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  	<p><small>Ne zagotavljamo, da so podatki na tej strani točni in trenutni. Stran je v informativne namene.</small></p>
    <p><small>Če želite informacije o naših piškotkih <a href="cookies_sl.php" title="cookies" target="_blank" class="w3-hover-text-green">kliknite sem</a>, če želite videti pravilnik o zasebnosti <a href="privacy_policy_sl.php" class="w3-hover-text-green">kliknite sem</a></small></p>
  	<p>To stran poganja <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
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
