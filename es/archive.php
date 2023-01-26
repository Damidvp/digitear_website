<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Artículos </title>
	
  <link rel="shortcut icon" type="image/x-icon" href="D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="bootstrap.min.css">
   
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="archivetxt.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  
  <?php include('piwik.php'); ?> 
  
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

     <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Overline Systems"></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
    <ul class="nav navbar-nav">
      <li style="font-size:1.2em;"><a class="inactive" href="index.php">Inicio</a></li>
      

      <li class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Digitear <span class="caret"></span></a>
      <ul id="dig_sousmenus" class="dropdown-menu">

      <li><a href="digitear/presentation.php">Presentación</a></li>
      <li><a href="digitear/inear.php">InEar</a></li>
      <li><a href="digitear/beltpack.php">Beltpack</a></li>
      <li><a href="digitear/chargerbox.php">Charger Box</a></li>
      <li><a href="digitear/accesspoint.php">AccessPoint</a></li>
      <li><a href="digitear/txbox.php">TX-Box</a></li>
      </ul>
      </li>
     
      <li style="font-size:1.2em;"><a class="inactive" href="digitear/dl.php">Descargas</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="distri/distri.php">Distribuidores</a></li>
     
      <li class="dropdown">
      <a  id="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Contactarnos <span class="caret"></span></a>

      <ul id="ctc_sousmenus" class="dropdown-menu">
      <li><a href="digitear/demonstration.php">Demonstración</a></li>
      <li><a href="digitear/contact.php">Información</a></li>
    </ul>
  </li>

<li class="icone"><a href="https://fr.linkedin.com/company/overline-systems"><img src="img/linkedin.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
<li class="icone"><a href="https://www.facebook.com/overlinesystems.fr/"><img src="img/facebook.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>

      </ul>

   <ul class="nav navbar-nav navbar-right">
       <li><a class="bckg_flag" href="index.php"><div ><img src="img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../en/index.php"><div ><img src="img/flag_eng_big.png" alt="EN" style="max-height: 1.5em; max-width: 1.5em;" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../fr/index.php"><div ><img src="img/flag_fr_big.png" style="max-height: 1.5em; max-width: 1.5em; " /><div class="text_flag"></div></div></a></li>
      <!-- <li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/gb.png"></img></a></li>--> 

     
    </ul>
	</div>
  
</div>
</nav>


<div id="main" style="min-height:100%">
<div class="container_fluid">
<div class="dossier">
<center>
<ul>
  <li style="list-style-type: none; list-style-position:inside;">
    <span id="articles"><b>Artículos</b></span>
	<hr class="separator" style="width: 50%;"><br/>
	<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
    <ul class="list-icons" style="margin: 0; padding: 0;">
	<li><a href="news/ibc2019.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>09/09/2019</i> - IBC 2019 (English version)</a></li>
	<li><a href="news/broadcastasia2019.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>10/06/2019</i> - BroadcastAsia 2019</a></li>
	<li><a href="news/digitear_2019_1.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>30/04/2019</i> - Digitear en 2019</a></li>
	<li><a href="news/gotham2019_1.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>11/04/2019</i> - Encuentro con Gotham Sound en el Nabshow 2019</a></li>
	<li><a href="news/nab2019.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>25/03/2019</i> - Nabshow 2019</a></li>
     <li><a href="news/nab2018.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>05/04/2018</i> - Overline Systems y Digitear al NAB Show en Las Vegas</a></li>
     <li><a href="news/satis2017.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>26/10/2017</i> - Digitear en Satis 2017</a></li>
     <li><a href="news/loctapage.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>10/10/2017</i> - Digitear disponible en alquiler</a></li>
     <li><a href="news/ibc2017.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>25/09/2017</i> - Overline Systems en el salón IBC 2017</a></li>
	 <li><a href="news/case.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>25/09/2017</i> - ¿Usted desea disfrutar de la calidad Overline?</a></li>
	 <li><a href="news/sortie.php"><img class="logo_article" src="img/imgarticle.png" width="30" height="30" alt="Article"></img><i>22/09/2017</i> - Salida de la nueva gama Digitear</a></li>
     
    
    </ul>
	</div>
  </li>
 </ul>
 </center>
</div>
</div>
</div>
<div class="espace"></div>





</body>

<footer>

<script type="text/javascript" src="cookiechoices.js"></script>
<script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Este sitio web utiliza cookies para ofrecer la mejor experiencia. Usted acepta el uso de cookies navigando a nuestro sitio web.', 'Aceptar', 'Más informaciones (FR)', 'privacy/mentions.php');});</script>

<div class="container text-center">
    <hr />
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-6">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="digitear/contact.php">Contactarnos</a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="privacy/mentions.php">Política de cookies (FR)</a></li>
        </ul>
      </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="http://overline-systems.com">© 2019 Overline Systems.</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

</footer>
</html>