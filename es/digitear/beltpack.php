<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | BeltPack </title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="beltpack.css" rel="stylesheet" type="text/css">

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
  </ol>
  <div class="center-block">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/BP2.jpg" alt="beltpack" style="height:70%; width:70%;">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/BP.jpg" alt="beltpack" style="height:70%; width:70%;">
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

<div class="espace">
</div>

<div class="container">
 <div class="row">
  <div class="col-md-6">
            <div class="well">
            <p>
            <center><h2><b>PRESENTACIÓN DEL PRODUCTO</b></h2></center>
        
            <h4>Pequeña caja que asegura la comunicación inalámbrica entre la red Digitear y el auricular <a href="inear.php">InEar</a>. Así como las funciones de selección de canal, ajustes y talk-back.</h4>
            </p>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <center><h2><b>PRESENTACIÓN TÉCNICA</b></h2></center>
        
                    
            <h4><li><b>Codec audio APTX</b> .</li>
            <li><b>Bluetooth</b> 4.2</li>
            <li><b>Wifi</b> 802.11n</li>
            <li><b>Autonomía:</b> Alrededor 6 hours</li>
            <li><b>Selección</b> de fuente y nivel de entrada del micrófono</li>
            <li>Visualización de los niveles de batería del <a href="beltpack.php">Beltpack</a> y del <a href="inear.php">InEar</a></li> 
            <li>Memorización de dos <a href="inear.php">InEar</a></li>
            <li>Rango de hasta <b>50 metros (160 feet)</b> en Wifi, hasta 10 metros (30 feet) en Bluetooth</a></li>
            <li><b>Conexión automática</b> al <a href="inear.php">InEar</a></a></li>
            <li><b>Dual Stream:</b> conexión a dos <a href="inear.php">InEar</a> simultáneamente</li>
            <li><b>Peso</b> 60 gramos (2 ounces) con la batería</li></h4>
            </div>
  </div>
 </div>
</div>

<div class="container">
  <div class="row">
      <div class="doc">
       
       <div class="col-lg-12"><h2><b>DOCUMENTOS TÉCNICOS</b></h2><br/></div>
	   <div class="col-lg-12">
	  <ul>
	  <a href="doc/DOC_BELTPACK_FR_170519.pdf">
      <li class="boxtech" style="list-style-type: none;">  
	  <b style="font-size:18px">Guía del usuario <img src="../flag/fr.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_BELTPACK_EN_170519.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Guía del usuario <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_BELTPACK_ES_120619.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Guía del usuario <img src="../flag/es.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="doc/DEDPS-en.pdf">
      <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Ficha técnica <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  <br/>
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="mailto:digitear-support@overline-systems.com">
	  <li id="courriel" style="list-style-type: none;">
	  <b style="font-size:18px">Contactar el soporto técnico <img src="../img/courriel.JPG" width="21" /></b>
	  </li>
	  </a>
	  </ul>
	  </div>
       
      
     </div>
    </div>
</div>
</div>
<br/>

</body>
<footer>

<?php include('footer.php'); ?> 

</footer>
</html>