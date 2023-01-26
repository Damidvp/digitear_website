<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | ChargerBox </title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="chargerbox.css" rel="stylesheet" type="text/css">

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
  </ol>
  <div class="center-block">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/CB.jpg" alt="chargerbox" style="height:70%; width:70%;">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/CB2.jpg" alt="chargerbox" style="height:70%; width:70%;">
      <div class="carousel-caption">
      <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/CB3.jpg" alt="chargerbox" style="height:70%; width:70%;">
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
        
            <h4>La Charger Box permite recargar un conjunto completo de receptores sin cable. Específicamente, un <a href = "beltpack.php">Beltpack</a>, dos auriculares <a href="inear.php">InEar</a> y una batería <a href="beltpack.php">Beltpack</a> de repuesto.</h4>
            </p>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <center><h2><b>PRESENTACIÓN TÉCNICA</b></h2></center>
        
                    
            <h4><li><b>Tiempo de recarga <a href="inear.php">InEar</a>:</b> 2 horas</li>
            <li><b>Tiempo de recarga <a href="beltpack.php">Beltpack</a> y batería de repuesto:</b> 3 horas</li>
            <li><b>Proporcionado</b> con una batería de repuesto y un mini cargador USB</li>
            <li>Dispone de un <b>modo nómada</b> que permite la recarga de los <a href="inear.php">InEar</a> gracias a la batería de repuesto del <a href="beltpack.php">Beltpack</a></li></h4>
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
	  <a href="doc/DOC_CHARGERBOX_FR_250319.pdf">
      <li class="boxtech" style="list-style-type: none;">  
	  <b style="font-size:18px">Guía del usuario <img src="../flag/fr.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_CHARGERBOX_EN_250319.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Guía del usuario <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_CHARGERBOX_ES_050619.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Guía del usuario <img src="../flag/es.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="doc/DEBC-fr.pdf">
      <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Ficha técnica <img src="../flag/fr.png" /></b> 
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