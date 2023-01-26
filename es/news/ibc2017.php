<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | IBC 2017 </title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="ibc.css" rel="stylesheet" type="text/css">

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
        <li class="active">IBC 2017</li>
        </ul>
        <b> Overline Systems en el salón IBC 2017 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publicado el 25/09/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="ibc">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-lg-offset-3 col-md-offset-3">

                      
          <h3><p>Fue un placer y un gran honor para nosotros el haberlos recibido en Amsterdam durante la edición 2017 de IBC (del 15 al 19 de septiembre). Esta séptima participación fue la ocasión de presentarles por primera vez la versión final de nuestra gama Digitear.</p></h3>

             
        
    </div>

    <div class="col-lg-2 col-md-2 ">

          <a href="http://www.satis-expo.com/fr/"><img src="img/ibc.png"></a>
      
    </div>  
  </div>
</div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h3><p>Nuestro dirigente, el Señor Lombard, quiere agradecerles por el recibimiento y la atención que ustedes han otorgado a esta nueva gama de productos.</p></h3>

       
      
    </div>  
  </div>
</div>

<div class="digitear">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Estamos particularmente felices con el hecho de que hayan constatado una gran calidad de audio en muestro auricular HF, así como una excelente cobertura RF.  Las cuales ya habíamos anunciado antes. Siempre es un placer comunicar e intercambiar con ustedes con respecto a sus necesidades y sugerencias.</p></h3>

      
    </div>  
  </div>
</div>
</div>

<div class="ban">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Cada uno ve una utilización particular según las diferentes funciones.  El Digitear interesa particularmente en el mundo del Broadcast, pero también, tiene futuro en el mundo deportivo y en la ayuda a los conferenciantes.  ¡Una nueva aventura ha empezado para OVERLINE SYSTEMS!</p></h3>

      
    </div>  
  </div>
</div>
</div>



<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Gracias por sus preciadas respuestas.  Los esperamos de la misma forma el año que viene en el salón, tan apasionados y en multitud.</p></h3>

      
    </div>  
  </div>
</div>


<div class="stand">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          
        <img src="img/stand.jpg"/>
       
      
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