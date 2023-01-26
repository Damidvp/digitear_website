<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<title>Digitear | TX-Box</title>

  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="txbox.css" rel="stylesheet" type="text/css">

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
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-interval="9000" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="center-block">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="img/TB.jpg" alt="txbox" style="height:70%; width:70%;">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/TB3.jpg" alt="txbox" style="height:70%; width:70%;">
      <div class="carousel-caption">
      <h1></h1>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="img/TB2_NEW.png" alt="txbox" style="height:62.75%; width:62.75%;">
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
            <center><h2><b>PRESENTATION DU PRODUIT</b></h2></center>
        
            <h4>Base au format 2U assurant la transmission de 8 canaux audio full-duplex entre ses 8 entrées/sorties analogiques et le réseau numérique Digitear.</h4>
            </p>
            </div>
          </div>
  <div class="col-md-6">
            <div class="well">
            <center><h2><b>PRESENTATION TECHNIQUE</b></h2></center>
        
                    
            <h4><li><b>8 canaux full-duplex</b> sur le réseau Digitear</li>
            <li><b>Contrôle à distance</b> depuis une application PC connectée au réseau</li>
            <li><b>Fonctions principales accessibles :</b>
           <div class="tabulation"><p>- Gain des entrées et sorties audio analogiques</p>
           <p>- Niveau de latence/robustesse du signal radio</p>
           <p>- Visualisation des niveaux des batteries Beltpack et InEar</p>
            <p>- Visualisation des niveaux audio en entrée</p></li>
            <li><b>Poids</b> 4 kg</li></div></h4>  
            
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
       
       <div class="col-lg-12"><h2><b>DOCUMENTS TECHNIQUES</b></h2><br/></div>
	   <div class="col-lg-12">
	  <ul>
	  <a href="doc/DOC_TXBOX_FR_100419.pdf">
      <li class="boxtech" style="list-style-type: none;">  
	  <b style="font-size:18px">Manuel utilisateur <img src="../flag/fr.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_TXBOX_EN_100419.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur <img src="../flag/gb.png" /></b> 
	  </li>
	  </a>
	  <a href="doc/DOC_TXBOX_ES_120619.pdf">
	  <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Manuel utilisateur <img src="../flag/es.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="doc/DEDS-fr.pdf">
      <li class="boxtech" style="list-style-type: none;">
	  <b style="font-size:18px">Fiche produit <img src="../flag/fr.png" /></b> 
	  </li>
	  </a>
	  </ul>
	  <br/>
	  </div>
	  <div class="col-lg-8">
	  <ul>
	  <a href="mailto:digitear-support@overline-systems.com">
	  <li id="courriel" style="list-style-type: none;">
	  <b style="font-size:18px">Contacter le support <img src="../img/courriel.JPG" width="21" /></b>
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