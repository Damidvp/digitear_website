<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Présentation</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="presentationtxt.css" rel="stylesheet" type="text/css">

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

<?php include('nav.php'); ?> 

<div id="main">

<div id="carousel-example-generic" class="carousel slide carousel-fade" data-interval="9000" data-ride="carousel" style="padding-top:25px;">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <div class="center-block">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/digitear by OL.gif" alt="Digitear" style="height:70%; width:70%;">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/synoptique_bt_2.gif" alt="synoptique" style="height:70%; width:70%;">
      <div class="carousel-caption">
      <h1></h1>
      </div>
    </div>
	
	<div class="item">
      <img class="img-responsive" src="img/opera.jpg" alt="opera" style="height:83.675%; width:83.675%;">
      <div class="carousel-caption">
      <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/loge.png" alt="PlateauTv" style="height:33.285%; width:33.285%;">
      <div class="carousel-caption">
      <h1></h1>
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


<!--
<div class="container">
<div class="row">
<center>
<div class="videoWrapper">
<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRYIwqF3E7LIMavAfTBivBJmoxZ9uulL1IsiwlIliSuaYmi903AxThCRQg2z7OXiA/embed?start=true&loop=true&delayms=2000" style="margin-top: 3.68em; z-index:1;" frameborder="0" width="1080" height="637" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>
</center>
</div>
</div>
-->

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="presentation">
       
        <h3>La nouvelle solution monitoring Digitear d'Overline Systems est une innovation en termes de discrétion, de qualité, de confort et de facilité d'utilisation pour tous les professionnels du broadcast et du live.</h3>
      
      </div>
    </div>
  </div>
</div>
<br/>
<!--
<center>
<!-- Lien YTB vers diaporama Digitear
<div class="col-lg-6 col-md-6">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w8V2qlrvk2c" gesture="media" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<!-- Lien YTB vers présentation Digitear by Gotham Sound
<div class="col-lg-6 col-md-6">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e0nqYqd47VI" gesture="media" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</center>
-->
<center>
<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://www.youtube.com/embed/e0nqYqd47VI" gesture="media" frameborder="0" scrolling="no" allow="accelerometer; autoplay;" allowfullscreen></iframe>
</div>
</div>
</center>


<div class="container">
 <div class="row">
  <div class="col-md-6">
            <div class="well">
            <h2><b>Qualité</b></h2>
            <h4><p>Signal audio numérique non compressé</p>
            <p>Robustesse des liaisons sans fil longues portée</p>
            <p>Made in France</p><br /></h4>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <h2><b>Ergonomie</b></h2>
            <h4><p><a href = "inear.php">InEar</a> invisible à l'antenne</p>
            <p>Adaptation naturelle à l'oreille</p>
            <p>Embouts silicones interchangeables</p><br /></h4>
            </div>
          </div>
        </div>
      </div>
	
<div class="container">
 <div class="row">
  <div class="col-md-6">
            <div class="well">
            <h2><b>Simplicité</b></h2>
            <h4><p>Base rackable avec déport d'affichage de l'écran de contrôle</p>
            <p>Gestion centralisée de 8 canaux audio distincts depuis la base</p>
            <p>Réutilisation possible du réseau existant</p>
            <p>Déport d'antennes illimité</p></h4>

            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <h2><b>Flexibilité</b></h2>
            <h4><p><a href = "inear.php">InEar</a> rechargeable</p>
            <p><a href = "chargerbox.php">Boîtier chargeur</a> nomade tout intégré</p>
            <p>Niveau audio et Talk-Back en accès direct depuis le <a href = "beltpack.php">Beltpack</a></p>
            <br /></h4>
            </div>
          </div>
        </div>
      </div>
	  <br />
	  <br />
<hr style="width:85%;"/>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="gamme">
       
        <center><h3><b>La gamme Digitear</b></h3></center>
      
      </div>
    </div>
  </div>
</div>
<!-- <div class="container">
  <div class="row">
    <div class="col-sm-4" style="height:25%; width:33%; text-align:center;">
      <a href="inear.php">
	  <div class="inear" style="">
        <img class="digimg" style="height:150px; width:150px;" src="img/INEAR_LOGO.jpg">
        <div class="txt_ie">INEAR</div>
      </div>
	  </a>
    </div>
    <div class="col-sm-4" style="height:25%; width:34%; text-align:center;">
      <a href="txbox.php">
	  <div class="txbox" style="">
        <img class="digimg" style="height:190px; width:270px;" src="img/TXBOX_LOGO.png">
        <div class="txt_tx">TX-BOX</div>
      </div>
	  </a>
    </div>
     <div class="col-sm-4" style="height:25%; width:33%; text-align:center;">
      <a href="chargerbox.php">
	  <div class="chargerbox" style="">
        <img class="digimg" src="img/8320.jpg">
        <div class="txt_cb">CHARGER BOX</div>
      </div>
	  </a>
    </div>
  </div>
</div>
<br/>
<br/>
<br/>
<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-6" style="height:25%; width:50%; text-align:center;">
      <a href="beltpack.php">
	  <div class="beltpack" style="">
       <img class="digimg" style="height:150px; width:100px;" src="img/BELTPACK_LOGO.png">      
        <div class="txt_bp">BELTPACK</div>

      </div>
	  </a>
    </div>
    <div class="col-sm-6" style="height:25%; width:50%; text-align:center;">
      <a href="accesspoint.php">
	  <div class="accesspoint" style="">
        <img class="digimg" style="height:180px; width:290px;" src="img/4320.jpg">
        <div class="txt_ap">ACCESSPOINT</div>
      </div>
	  </a>
    </div>
  </div>
</div>
<br/> -->


<!-- TEST TABLEAU -->

<div class="container">
<div class="row">
<div id="ie" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="inear.php" style="text-decoration:none;">
    <div>
      <img class="img_responsive" src="img/INEAR_LOGO_2.jpg">
      
    </div>
	<div class="txt_item" style="text-align:center;"><span class="main_txt"><b>INEAR</b></span><div class="dcpt">Oreillette</div></div>
  </a>
</div>
</div>
<div id="tx" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="txbox.php" style="text-decoration:none;">
	<div>
       <img class="img_responsive" src="img/TXBOX_LOGO_2.png">
       
    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">TX-BOX</span></b><div class="dcpt">Station duplex</div></div>
  </a>
</div>
</div>
<div id="cb" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="chargerbox.php" style="text-decoration:none;">
	<div>
       <img class="img_responsive" src="img/8320_2.jpg">
       
    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">CHARGER BOX</span></b><div class="dcpt">Chargeur</div></div>
  </a>
</div>
</div>
<div id="bp" class="col-md-6" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="beltpack.php" style="text-decoration:none;">
	<div>
      <img class="img_responsive" src="img/BELTPACK_LOGO_2.png">      

    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">BELTPACK</span></b><div class="dcpt">Boîtier portable</div></div>
  </a>
</div>
</div>
<div id="ap" class="col-md-6" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="accesspoint.php" style="text-decoration:none;">
	<div>
      <img class="img_responsive" src="img/4320_2.jpg">
      
    </div>
	<div class="txt_item" style="text-align:center;"><span class="main_txt"><b>ACCESSPOINT</b></span><div class="dcpt">Antenne Wi-fi</div></div>
  </a>
</div>
</div>
</div>
</div>
<br/>
<!-- FIN TEST TABLEAU -->

<!-- TEST TABLEAU II -->
<!--
<div class="container">
<table class="table_icones" style="width:100%;">
<tr>
<td class="table_icones_ie" style="width:33%; text-align:center;">
  <a href="inear.php">
    <div class="inear">
      <img class="digimg" style="height:40%; width:40%;" src="img/INEAR_LOGO.jpg">
      
    </div>
  </a>
</td>
<td class="table_icones_tx" style="width:34%; text-align:center;">
  <a href="txbox.php">
	<div class="txbox">
       <img class="digimg" style="height:70%; width:70%;" src="img/TXBOX_LOGO.png">
       
    </div>
  </a>
</td>
<td class="table_icones_cb" style="width:33%; text-align:center;">
  <a href="chargerbox.php">
	<div class="chargerbox">
       <img class="digimg" style="height:85%; width:85%;" src="img/8320.jpg">
       
    </div>
  </a>
</td>
</tr>
<tr>
<td class="table_txt" style="width:33%; text-align:center;"><div id="txt_ie" class="txt_ie">INEAR<div class="dcpt">Oreillette</div></div></td>
<td class="table_txt" style="width:34%; text-align:center;"><div class="txt_tx">TX-BOX<div class="dcpt">Station duplex</div></div></td>
<td class="table_txt" style="width:33%; text-align:center;"><div class="txt_cb">CHARGER BOX<div class="dcpt">Chargeur</div></div></td>
</tr>
</table>
</div>
<br/>
<br/>
<div class="container">
<table class="table_icones" cellspacing="3" style="width:100%;">
<tr>
<td class="table_icones_bp" style="width:50%; text-align:center;">
  <a href="beltpack.php">
	<div class="beltpack">
      <img class="digimg" style="height:18%; width:18%;" src="img/BELTPACK_LOGO.png">      
      

    </div>
  </a>
</td>
<td class="table_icones_ap" style="width:50%; text-align:center;">
  <a href="accesspoint.php">
	<div class="accesspoint">
      <img class="digimg" style="height:50%; width:50%;" src="img/4320.jpg">
      
    </div>
  </a>
</td>
</tr>
<tr>
<td class="table_txt" style="width:50%; text-align:center;"><div class="txt_bp">BELTPACK<div class="dcpt">Boîtier portable</div></div></td>
<td class="table_txt" style="width:50%; text-align:center;"><div class="txt_ap">ACCESSPOINT<div class="dcpt">Antenne Wi-fi</div></div></td>
</tr>
</table>
</div>
<br/>
<!-- FIN TEST TABLEAU II -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="doc">
       
       <h2><b>MANUEL D'INSTALLATION RAPIDE</b></h2>
       <i class="material-icons">picture_as_pdf</i><a href="doc/GUIDE_FR_070619.pdf">Manuel au format PDF</a>
       <br></br>
      </div>
    </div>
  </div>  
</div>
</div>






<footer>

<?php include('footer.php'); ?> 

</footer>
</body>
</html>
	