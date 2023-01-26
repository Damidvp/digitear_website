<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Presentation</title>
  
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

$(document).ready(function(){
	$(".inear").hover(
		function(){
			$(".txt_ie").css({"opacity":"1"})
		}, function(){
			$(".txt_ie").css({"opacity":"0"})
		}
	);
	$(".txbox").hover(
		function(){
			$(".txt_tx").css({"opacity":"1"})
		}, function(){
			$(".txt_tx").css({"opacity":"0"})
		}
	);
	$(".chargerbox").hover(
		function(){
			$(".txt_cb").css({"opacity":"1"})
		}, function(){
			$(".txt_cb").css({"opacity":"0"})
		}
	);
	$(".beltpack").hover(
		function(){
			$(".txt_bp").css({"opacity":"1"})
		}, function(){
			$(".txt_bp").css({"opacity":"0"})
		}
	);
	$(".accesspoint").hover(
		function(){
			$(".txt_ap").css({"opacity":"1"})
		}, function(){
			$(".txt_ap").css({"opacity":"0"})
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
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="presentation">
       
        <h3>La nueva solución Digitear de Overline Systems es una innovación en términos de discreción, calidad, confort, y facilidad de utilización para todos los profesionales del broadcast y des los live.</h3>
      
      </div>
    </div>
  </div>
</div>

<center>
<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e0nqYqd47VI" gesture="media" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</center>

<div class="container">
 <div class="row">
  <div class="col-md-6">
            <div class="well">
            <h2><b>Calidad</b></h2>
            <h4><p>Señal de audio numérica sin comprimir</p>
            <p>Robustas conexiones sin cables</p>
            <p>Made in France</p><br /></h4>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <h2><b>Ergonomía</b></h2>
            <h4><p><a href = "inear.php">InEar</a> invisible a la antena</p>
            <p>Adaptación natural a la oreja</p>
            <p>Puntas de auriculares intercambiables</p><br /></h4>
            </div>
          </div>
        </div>
      </div>

<div class="container">
 <div class="row">
  <div class="col-md-6">
            <div class="well">
            <h2><b>Simplicidad</b></h2>
            <h4><p>Base transportable con pantalla de control</p>
            <p>Gestión centralizada de 8 canales de audio desde la base</p>
            <p>Posible reutilización de la red existente</p>
            <p>Repartición de antenas ilimitada</p></h4>

            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <h2><b>Flexibilidad</b></h2>
            <h4><p><a href = "inear.php">InEar</a> recargable</p>
            <p><a href = "chargerbox.php">Charger Box</a> nómada con todo integrado</p>
            <p>Nivel de audio y talkback en acceso directo desde el Beltpack</p>
            <br /></h4>
            </div>
          </div>
        </div>
      </div>
	  <br/>
	  <br/>
<hr style="width:85%;"/>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="gamme">
       
        <center><h3><b>La gama Digitear</b></h3></center>
      
      </div>
    </div>
  </div>
</div>
<!-- TEST TABLEAU -->
<div class="container">
<div class="row">
<div id="ie" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="inear.php" style="text-decoration:none;">
    <div>
      <img class="img_responsive" src="img/INEAR_LOGO_2.jpg">
      
    </div>
	<div class="txt_item" style="text-align:center;"><span class="main_txt"><b>INEAR</b></span><div class="dcpt">Auricular inalámbrico</div></div>
  </a>
</div>
</div>
<div id="tx" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="txbox.php" style="text-decoration:none;">
	<div>
       <img class="img_responsive" src="img/TXBOX_LOGO_2.png">
       
    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">TX-BOX</span></b><div class="dcpt">Consola central</div></div>
  </a>
</div>
</div>
<div id="cb" class="col-md-4" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="chargerbox.php" style="text-decoration:none;">
	<div>
       <img class="img_responsive" src="img/8320_2.jpg">
       
    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">CHARGER BOX</span></b><div class="dcpt">Caja de carga</div></div>
  </a>
</div>
</div>
<div id="bp" class="col-md-6" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig" href="beltpack.php" style="text-decoration:none;">
	<div>
      <img class="img_responsive" src="img/BELTPACK_LOGO_2.png">      

    </div>
	<div class="txt_item" style="text-align:center;"><b><span class="main_txt">BELTPACK</span></b><div class="dcpt">Estuche portatíl</div></div>
  </a>
</div>
</div>
<div id="ap" class="col-md-6" style="text-align:center; margin-top:25px;">
<div class="goods">
  <a class="link_dig"href="accesspoint.php" style="text-decoration:none;">
	<div>
      <img class="img_responsive" src="img/4320_2.jpg">
      
    </div>
	<div class="txt_item" style="text-align:center;"><span class="main_txt"><b>ACCESSPOINT</b></span><div class="dcpt">Antena Wi-fi</div></div>
  </a>
</div>
</div>
</div>
</div>
<br/>
<!-- FIN TEST TABLEAU -->

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="doc">
       
       <h2><b>MANUAL DE INSTALACIÓN RÁPIDA</b></h2>
       <i class="material-icons">picture_as_pdf</i><a href="doc/GUIDE_EN_070619.pdf"> Manual en el formato PDF (EN)</a>
 
      </div>
    </div>
  </div>  
</div>
<br />
</div>





<footer>

<?php include('footer.php'); ?> 

</footer>
</body>
</html>
