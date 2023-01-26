<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Téléchargements</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="bootstrap.min.css">
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="dltxt.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="jquery.js"></script>
  <script src="jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  
 <?php include('../piwik.php'); ?>
 
   <script>
  	$(document).ready(function(){
		$("#dig_menu").click(function(){
			if($("#dig_sousmenus").is(":hidden")){
				$("#dig_sousmenus").slideDown(350);
				$("#ctc_sousmenus").slideUp(350);
			} else {
				$("#dig_sousmenus").slideUp(350);
			}
		}
	);
});

$(document).ready(function(){
		$("#ctc_menu").click(function(){
			if($("#ctc_sousmenus").is(":hidden")){
				$("#ctc_sousmenus").slideDown(350);
				$("#dig_sousmenus").slideUp(350);
			} else {
				$("#ctc_sousmenus").slideUp(350);
			}
		}
	);
});

//Rétracte le menu déroulant lors d'un clic n'importe où sur la page
$(document).ready(function(){
	var div_cliquable = $('#dig_menu');
	$(document.body).click(function(e) {

		// Si ce n'est pas #ma_div ni un de ses enfants
		if( !$(e.target).is(div_cliquable) && !$.contains(div_cliquable[0],e.target) ) {
		$("#dig_sousmenus").slideUp(350); // Rétracte le menu
		}
	}
	);
});

$(document).ready(function(){
	var div_cliquable = $('#ctc_menu');
	$(document.body).click(function(e) {

		// Si ce n'est pas #ma_div ni un de ses enfants
		if( !$(e.target).is(div_cliquable) && !$.contains(div_cliquable[0],e.target) ) {
		$("#ctc_sousmenus").slideUp(350); // Rétracte le menu
		}
	}
	);
});

</script>

</head>
	
<body>	

<nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     
  
  <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="Overline Systems"></a>

    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li style="font-size:1.2em;" ><a class="inactive" href="../index.php">Accueil</a></li>
      

      <li class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Digitear <span class="caret"></span></a>
      <ul id="dig_sousmenus" class="dropdown-menu">
      <li><a href="presentation.php">Présentation</a></li>
      <li><a href="inear.php">InEar</a></li>
      <li><a href="beltpack.php">Beltpack</a></li>
      <li><a href="chargerbox.php">Charger Box</a></li>
      <li><a href="accesspoint.php">AccessPoint</a></li>
      <li><a href="txbox.php">TX-Box</a></li>
      </ul>
      </li>


      <li style="font-size:1.2em; font-weight:bold;" class="active" ><a href="dl.php">Téléchargements</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="../distri/distri.php">Distributeurs</a></li>


      <li class="dropdown">
      <a id="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Contact <span class="caret"></span></a>
      <ul id="ctc_sousmenus" class="dropdown-menu">
        <li><a href="demonstration.php">Démonstration</a></li>
      <li><a href="contact.php">Information</a></li>
    </ul>
  </li>

<li><a class="icone" href="https://fr.linkedin.com/company/overline-systems"><img src="img/linkedin.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
<li><a class="icone" href="https://www.facebook.com/overlinesystems.fr/"><img src="img/facebook.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>

</ul>

    <ul class="nav navbar-nav navbar-right">
	<li><a class="bckg_flag" href="../../es/index.php"><div ><img src="../img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../../en/index.php"><div ><img src="../img/flag_eng_big.png" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../index.php"><div ><img src="../img/flag_fr_big.png" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <!-- <li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/gb.png"></img></a></li> -->

     
    </ul>
</div>
</div>
</nav>

	 
<div id="main">

<div class="container-fluid">

 <div class="titlepage">
	 <br />
	  <center><h1><span><b>TELECHARGEMENTS</b></span></h1>
	  <hr style="width:75%">
	  <br />
	  
	  </center>
	  </div>

  <center>
  
  <div class="row_doc">
      <h2><b>InEar</b></h2>
      <div class="doc">
	  <ul>
	  <a href="doc/DOC_INEAR_FR_250319.pdf">
      <li style="list-style-type: none;">  
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/fr.png" />)</b> 
	  <p><i>(517 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_INEAR_EN_250319.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/gb.png" />)</b> 
	  <p><i>(516 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_INEAR_ES_120619.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/es.png" />)</b> 
	  <p><i>(516 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DENR-fr.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit</b> 
	  <p><i>(95 Ko)</i></p>
	  </li>
	  </a>
	  </ul>
     </div>
  </div>  
  </center>

</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
      <h2><b>Beltpack</b></h2>
      <div class="doc">
	  <ul>
	  <a href="doc/DOC_BELTPACK_FR_170519.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/fr.png" />)</b>
	  <p><i>(596 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_BELTPACK_EN_170519.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/gb.png" />)</b>
	  <p><i>(600 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_BELTPACK_ES_120619.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/es.png" />)</b>
	  <p><i>(594 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DEDPS-fr.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit</b>
	  <p><i>(414 Ko)</i></p>
	  </li>
	  </a>
      </ul>
     </div>
  </div>  
  </center>
</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
      <h2><b>Charger Box</b></h2>
      <div class="doc">
	  <ul>
	  <a href="doc/DOC_CHARGERBOX_FR_250319.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/fr.png" />)</b>
	  <p><i>(518 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_CHARGERBOX_EN_250319.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/gb.png" />)</b>
	  <p><i>(517 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_CHARGERBOX_ES_050619.pdf">
	  <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/es.png" />)</b>
	  <p><i>(517 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DEBC-fr.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit</b>
	  <p><i>(2 197 Ko)</i></p>
	  </li>
	  </a>
      </ul> 
     </div>
  </div>  
  </center>
</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
      <h2><b>Access Point</b></h2></a>
      <div class="doc">
	  <ul>
	  <a href="doc/ACCESSPOINT.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/fr.png" />)</b>
	  <p><i>(763 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_ACCESSPOINT_EN_220319.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/gb.png" />)</b>
	  <p><i>(754 Ko)</i></p>
	  </li>
	  </a>
	  
	  <a href="doc/DEAU-fr.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit</b>
	  <p><i>(4 584 Ko)</i></p>
	  </li>
	  </a>
      </ul>
     </div>
  </div>  
  </center>
</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
      <h2><b>TX-Box</b></h2></a>
      <div class="doc">
	  <ul>
	  <a href="doc/DOC_TXBOX_FR_100419.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/fr.png" />)</b>
	  <p><i>(1 361 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_TXBOX_EN_100419.pdf">
	  <li style="list-style-type: none;">  
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/gb.png" />)</b>
	  <p><i>(1 361 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DOC_TXBOX_ES_120619.pdf">
	  <li style="list-style-type: none;">  
	  <b style="font-size:18px">Manuel utilisateur (<img src="../flag/es.png" />)</b>
	  <p><i>(994 Ko)</i></p>
	  </li>
	  </a>
	  <a href="doc/DEDS-fr.pdf">
      <li style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit</b>
	  <p><i>(319 Ko)</i></p>
	  </li>
	  </a>
      </ul>
     </div>
  </div>  
  </center>
</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
       <h2><b>Documentation</b></h2>
       <div class="doc">
	   <ul>
	   <a href="doc/SCHEMA.pdf">
       <li style="list-style-type: none;">
	   <b style="font-size:18px">Schéma de principe</b>
	   <p><i>(1 967 Ko)</i></p>
	   </li>
	   </a>
	   </ul>
      </div>
  </div>  
  </center>
</div>

<div class="container-fluid">
  <center>
  <div class="row_doc">
       <h2><b>Remote Control</b></h2>
	   <h4><i>(Contrôle à distance)</i></h4>
       <div class="doc">
	   <ul>
	   <a href="doc/DOC_RC_FR_050419.pdf">
       <li style="list-style-type: none;">
	   <b style="font-size:18px">Guide d'utilisation (<img src="../flag/fr.png" />)</b>
	   <p><i>(410 Ko)</i></p>
	   </li>
	   </a>
	   <a href="doc/DOC_RC_EN_050419.pdf">
       <li style="list-style-type: none;">
	   <b style="font-size:18px">Guide d'utilisation (<img src="../flag/gb.png" />)</b>
	   <p><i>(427 Ko)</i></p>
	   </li>
	   </a>
	   <a href="doc/remoteControlv1.0.zip">
       <li style="list-style-type: none;">
	   <b style="font-size:18px">Remote Control Software</b>
	   <p><i>(33 098 Ko)</i></p>
	   </li>
	   </a>
	   </ul>
       <br/>
      </div>
  </div>  
  </center>
</div>
<br/>

<br/>

</div>

</body>
<footer>

<?php include('footer.php'); ?> 

</footer>
</html>	