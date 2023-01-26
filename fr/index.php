<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digitear | Accueil</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="D_DIGITEAR.png" />
	
  <link href="styletxt.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

  <link rel="stylesheet" href="bootstrap.min.css">
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="styletxt.css" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
  <script src="jquery.js"></script>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  
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

<nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse ">
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
    <ul id="barre_menu" class="nav navbar-nav">
      <li style="font-size:1.2em; font-weight:bold;" class="active"><a href="index.php">Accueil</a></li>
      
      <li class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em;">Digitear <span class="caret"></span></a>
      <ul id="dig_sousmenus" class="dropdown-menu">

      <li><a href="digitear/presentation.php">Présentation</a></li>
      <li><a href="digitear/inear.php">InEar</a></li>
      <li><a href="digitear/beltpack.php">Beltpack</a></li>
      <li><a href="digitear/chargerbox.php">Charger Box</a></li>
      <li><a href="digitear/accesspoint.php">Access Point</a></li>
      <li><a href="digitear/txbox.php">TX-Box</a></li>
      </ul>
      </li>

      <li style="font-size:1.2em;"><a class="inactive" href="digitear/dl.php">Téléchargements</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="distri/distri.php">Distributeurs</a></li>

      <li class="dropdown">
      <a  id ="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Contact <span class="caret"></span></a>

        <ul id ="ctc_sousmenus" class="dropdown-menu">
      <li><a href="digitear/demonstration.php">Démonstration</a></li>
      <li><a href="digitear/contact.php">Information</a></li>
       </ul>
      </li>
    
      <li><a class="icone" href="https://fr.linkedin.com/company/overline-systems"><img  src="img/linkedin.png" alt="LinkedIn" style="max-height: 1.5em; max-width: 1.5em" /></a></li>
      <li><a class="icone" href="https://www.facebook.com/overlinesystems.fr/"><img  src="img/facebook.png" alt="Facebook" style="max-height: 1.5em; max-width: 1.5em" /></a></li>
      </ul>

   <ul class="nav navbar-nav navbar-right">
      <li><a class="bckg_flag" href="../es/index.php"><div ><img src="img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../en/index.php"><div ><img src="img/flag_eng_big.png" alt="EN" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="index.php"><div ><img src="img/flag_fr_big.png" alt="FR" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <!--<li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/fr.png"></img></a></li>--> 

     
    </ul>
  </div>
  
</div>
</nav>
<div id="main">
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-interval="9000" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
<div class="center-block">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/Bann&b.png" alt="Digitear" style="height:15%; width:100%;">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/banall.jpg" alt="Digitear" style="height:15%; width:100%;">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/GAMME3.jpg" alt="Digitear" style="height:10%; width:29.387%;">
      <div class="carousel-caption">
      </div>

    </div>
   </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>
<br/>
<br/>

<!-- presentation article -->
<div class="article">
  <div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-xs-12">
            <!-- Taille image 482x350 -->
            <div class="featured-article">
                <a href="news/ibc2019.php" style="color:white; text-decoration:none;">
                    <img src="img/logo_ibc_2019_forindex.jpg" alt="IBC 2019" class="thumb" width="435">
                <div class="block-title">
                    <h2>IBC 2019</h2>
					
                    <p class="by-author"><small>Le 09/09/2019</small></p>
					
					
                </div>
				</a>
            </div>
            <!-- taille image 150x90 -->
        </div>
        <div class="col-md-7 col-lg-7 col-xs-12">
            <ul class="media-list main-list">
              
              <li class="media">
                <a class="pull-left" href="news/broadcastasia2019.php">
                    <img class="media-object" src="img/broadcastasia.jpg" alt="BroadcastAsia 2019"> 
				</a>
                <div class="media-body">
				<a class="pull-left" href="news/broadcastasia2019.php">
                  <h4 class="media-heading">BroadcastAsia 2019</h4>
                  <p class="by-author">Le 10/06/2019</p>
				</a>
                </div>
              </li>
              
              <li class="media">
                <a class="pull-left" href="news/digitear_2019_1.php">
                  <img class="media-object" src="img/news_digitear.jpg" alt="Digitear News">
                </a>
                <div class="media-body">
				<a class="pull-left" href="news/digitear_2019_1.php">
                  <h4 class="media-heading">Digitear en 2019</h4>
                  <p class="by-author">Le 30/04/2019</p>
				</a>
                </div>
              </li>
              
              <li class="media">
                <a class="pull-left" href="news/gotham2019_1.php">
                  <img class="media-object" src="img/gotham_pic_n2019.JPG" alt="Gotham 2019">
                </a>
                <div class="media-body">
				<a class="pull-left" href="news/gotham2019_1.php">
                  <h4 class="media-heading">Rencontre avec GOTHAM SOUND au NABSHOW 2019</h4>
                  <p class="by-author">Le 11/04/2019</p>
				</a>
                </div>
              </li>
              
              
            </ul>
        </div>
    </div>
  </div>
</div>

<div class="col-md-11 col-lg-11 col-xs-12">
<div style="text-align:right;">
  <a style="text-decoration:none;" href="archive.php">Articles plus anciens...</a>
</div>
</div>
<!-- fin presentation article -->


<!--
<div class="container">
  <div class="row articles">
    <div class="col-sm-4" style="color:black">

      <a href="digitear/inear.php"><img src="img/2120.jpg"></img><h3>DECOUVREZ L'<b>INEAR</b></h3>
      <p>Oreillette sans fil intra auriculaire</p>
      <p>recevant le flux audio numérique</p></a>
    </div>
    <div class="col-sm-4">
      <a href="digitear/beltpack.php"><img src="img/1120.jpg"></img><h3>PRESENTATION DU <b>BELTPACK</b></h3>
      <p>Boitier compact assurant le communication sans-fil</p>
      <p>entre le réseau Digitear et l'oreillette InEar</p></a>
    </div>
    <div class="col-sm-4">
      <a href="digitear/txbox.php"><img src="img/3120.jpg"></img><h3>LA <b>TXBOX</b> SE DEVOILE</h3>        
      <p>Base au format 2U assurant la transmission</p>
      <p>de 8 canaux audio full-duplex</p></a>
    </div>
  </div>
</div>-->

<br />
<br />
<br />
</div>

<footer>

<!-- Permet à l'utilisateur d'accepter l'utilisation des cookies (loi RGPD) -->
<script src="cookiechoices.js"></script>
  <script>document.addEventListener('DOMContentLoaded', function(event){cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'privacy/mentions.php');});</script>
 
  <div class="container text-center">
    <hr />
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-6">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="digitear/contact.php">Contactez-nous</a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="privacy/mentions.php">Mentions légales</a></li>
        </ul>
      </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="http://overline-systems.com">© 2019 Overline Systems</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>


</footer>
</body>
</html>