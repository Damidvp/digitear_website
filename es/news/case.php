<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Planificar una reunión</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="case.css" rel="stylesheet" type="text/css">

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
        <li class="active">Demostraciones de Digitear</li>
        </ul>
        <b> ¿Usted desea disfrutar de la calidad Overline? </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5> Publicado el 25/09/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="article">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">

                      
          <h3><p>Nuestro equipo comercial está a su disposición para proponerle demostraciones de nuestro sistema Digitear sobre nuestro sitio web.</p></h3>

             
        
    </div>
  </div>
</div>

<div class="img">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          
        <img src="img/flight.png"/>
       
      
    </div>  
  </div>
</div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h3><p>Solo tiene que hacer une solicitud a esta dirección de correo electrónico :</p></h3>
          <h3><p><a href="mailto:digitear-sales@overline-systems.com">digitear-sales@overline-systems.com</a></p></h3>

       
      
    </div>  
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Nosotros le daremos nuestra respuesta para así poder planificar una reunión en función de sus disponibilidades.</p></h3>

      
    </div>  
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>La excelencia de la intercomunicación puede estar a su disposición con solo una solicitud.  Si tiene una pregunta o alguna incógnita, no dude en contactarnos.  Nuestra compaña estudia las soluciones de intercomunicación en relación directa con nuestros clientes para satisfacer sus necesidades de la forma más eficaz posible.</p></h3>

      
    </div>  
  </div>
</div>



<div class="img">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          
        <img src="img/debout.png"/>
       
      
    </div>  
  </div>
</div>
</div>
</div>
</div>

</body>

<footer>

<?php include('footer.php'); ?> 






</footer>
</html>