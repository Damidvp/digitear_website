<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Satis 2017</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="satis.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="jquery.js"></script>
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
<div class="titre">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        <ul class="breadcrumb">
        <li> <a href="../archive.php">Artículos</a></li>
        <li class="active">Satis 2017</li>
        </ul>
        <b> Digitear en Satis 2017 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5> Publicado el 26/10/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>

<div class="satis">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 ">
      
      
          <h3><p>En el evento <a href="http://www.satis-expo.com/fr/"><img src="img/satis.png"></a>
          Overline Systems y su socio de renta <a href="http://www.tapages.fr/"> TAPAGES & NOCTURNES</a> los esperan en el stand B43 el 8 y 9 de noviembre de 2017 para hablar de las novedades en cuando a alquiler de productos :</p></h3>
        
      
    </div>  
  </div>
</div>
</div>


<div class="digitear">
<div class="container text-center" style="margin-top: 2em;">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <a href="http://digitear.eu"><img src="img/digitear.png"></a>

     
    </div>  
  </div>
</div>
</div>

<div class="ban">
<div class="container text-center" style="margin-top: 2em;">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
     
        
        <a href="http://digitear.eu"><img src="img/banall.jpg"></a>

   
    </div>  
  </div>
</div>
</div>
</div>

<br />
<br />
<br />
<br />
<br />




</body>

<footer>

<?php include('footer.php'); ?> 






</footer>
</html>