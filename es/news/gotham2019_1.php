<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Gotham Sound en el Nabshow 2019</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="gotham2019_1.css" rel="stylesheet" type="text/css">

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
<div class="titre">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        <ul class="breadcrumb">
        <li> <a href="../index.php">Inicio</a></li>
        <li> <a href="../index.php">Noticias</a></li>
        <li class="active">Gotham Sound en el Nabshow 2019</li>
        </ul>
        <b> Encuentro con Gotham Sound en el Nabshow 2019 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publicado el 11/04/2019</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="sortie">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
          <h3><p>Peter SCHNEIDER de la compañia <b>Gotham Sound</b> estuvo esta semana en el stand <b># C1154</b> donde el <b>equipo de Overline Systems</b> <img src="img/logo.png" style="width:60px; height:27px;"/> le presentó su nuevo sistema <img src='img/digitear.png'/>.</p></h3>

             
           
    </div>  
  </div>
</div>
</div>
<br/>
<div class="container">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
	<div class="embed-responsive embed-responsive-16by9">
		<!--
		<center>
		<iframe id="iframe" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fgothamsound%2Fvideos%2F423604158396746%2F&show_text=0" width="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
		</center>
		-->
		<center>
			<iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/ucCZBCZDB7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</center>
	</div>  
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
		<h3><p>Para más información sobre nuestra gama de productos <img src='img/digitear.png'/>, no duden en <b><a href="../digitear/contact.php">contactarnos</a></b> !
	</div>  
  </div>
</div>

<br/>
</div>

</body>

<footer>

<?php include('footer.php'); ?> 





</footer>
</html>