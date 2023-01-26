<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Tapages & Nocturnes</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="loctapage.css" rel="stylesheet" type="text/css">

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
        <li class="active">Alquiler con Tapages & Nocturnes</li>
        </ul>
        <b>Digitear disponible en alquiler</b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publicado el 10/10/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>



<div class="txt">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
          <h3><p>Con mucha felicidad, le informamos que el sistema Digitear está disponible a la renta con nuestro socio: </p></h3>            
        
    </div>
</div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <a href="http://www.tapages.fr/"><img src="img/tapages.jpg" ></a>

      
    </div>  
  </div>
</div>
</div>


<div class="text">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Dirección y contacto:</p></h3>

      
    </div>  
  </div>
</div>
</div>


<div class="container" >
  <div class="row">
        <div class="col-md-4 text-center col-md-offset-4">
			<a href="https://goo.gl/maps/J4UBGX7Wk772">
                <div class="box">
                        <div class="box-content">
                              
                              <h3><b><p>Tapages & Nocturnes</p></b></h3>
                              <h4><p>10 rue André Citroën</p></h4>
                              <h4><p>92110 CLICHY</p></h4>
                              <h4><p>Francia</p></h4>
                              <br />
                              <h4><p>Alquiler: <i>+33 1 43 18 36 07</i></p></h4>
                              <h4><p>Estándar: <i>+33 1 43 18 36 00</i></p></h4>
                              <h4><p>E-mail: <i>overline@tapages.fr</i></p></h4>
                              <br />
                              <h4><p><u>Horario de apertura:</u></p></h4>
                              <h4><p>Lunes-Viernes: <i>de 9:00 a 19:00</i></p></h4>
                              <h4><p>Sábado: <i>de 9:00 a 13:00</i></p></h4>
                           

                        </div>
                    </div>
				 </a>
                </div>
              </div>
            </div>
          </div>





</body>

<footer>

<?php include('footer.php'); ?> 






</footer>
</html>