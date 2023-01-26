<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | InEar </title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="ineartxt.css" rel="stylesheet" type="text/css">

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
      <img class="img-responsive" src="img/IN.jpg" alt="inear" style="height:70%; width:70%;">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/IN2.jpg" alt="inear" style="height:70%; width:70%;">
      <div class="carousel-caption">
      <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/IN3.jpg" alt="inear" style="height:70%; width:70%;">
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
            <center><h2><b>PRODUCT PRESENTATION</b></h2></center>
        
            <h4>Wireless earpiece, receiving the digital audio stream from the <a href="beltpack.php">Beltpack</a>.</h4>
            </p>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <center><h2><b>TECHNICAL PRESENTATION</b></h2></center>
        
                    
            <h4><li><b>APTX Audio codec</b> high quality digital sound</li>
            <li><b>Bluetooth</b> 4.2</li>
            <li><b>Range</b> < 10m (30 feet) from the <a href="beltpack.php">Beltpack</a></li>
            <li><b>Autonomy</b>: 3 hours in continuous operation - 6 hours in Eco Mode (30% usage)</li>
            <li><b>Dimensions</b>: 19.5 x 15 x 9 mm (49 ⁄ 64in x 38 ⁄ 64in x 23 ⁄ 64in)</li>
            <li><b>Weight</b>: 4 grams (0.14 ounces)</li></h4>
            </div>
  </div>
 </div>
</div>


<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
  <div class="row">
      <div class="doc">
       
       <div class="col-lg-12"><h2><b>TECHNICAL DOCUMENTS</b></h2><br/></div>
	   <div class="col-lg-12">
	  <ul>
	  <a href="doc/DOC_INEAR_EN_250319.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">User Manual <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_INEAR_FR_250319.pdf">
      <li class="boxtech" style="list-style-type: none;">  
	  <b style="font-size:18px">User Manual <img src="../flag/fr.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_INEAR_ES_120619.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">User Manual <img src="../flag/es.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="doc/DENR-en.pdf">
      <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Product Sheet <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="mailto:digitear-support@overline-systems.com">
	  <li id="courriel" style="list-style-type: none;">
	  <b style="font-size:18px">Contact the support <img src="../img/courriel.JPG" width="21" /></b>
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