<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Nabshow 2019</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="nab2019.css" rel="stylesheet" type="text/css">

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
        <li> <a href="../index.php">Artículos</a></li>
        <li class="active">Nabshow 2019</li>
        </ul>
        <b> Nabshow 2019 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publicado el 25/03/2019</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="sortie">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
          <h3><p>Por séptimo año consecutivo, <b>Overline Systems</b> <img src="img/logo.png"/> estará en el <b>NABShow 2019</b> en las Vegas, del 8 al 11 de baril en el <b>Central Hall, Stand # C1154.</b></p></h3>

             
           
    </div>  
  </div>
</div>
</div>
<br />
<div class="logo">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          
          <img src="img/nab2019_logo.png" style="width:95%; height:95%;"/>
       
      
    </div>  
  </div>
</div>
</div>

<hr style="width:50%">
<center><img src="img/flight.png" style="width:300px; height:210px;"/></center>


<br />
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Nuestro equipo comercial, en conjunto con nuestro partner <a href='http://www.digitear.info'>TNR Distribution, LLC</a>, le harán descubrir la nueva versión <img src='img/digitear.png'/>.</p></h4>

      
    </div>  
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Esta innovación permite utilizar el sistema tanto como un <a href="../digitear/inear.php"><b>sistema de auriculares</b></a>, así como un <a href="../digitear/txbox.php"><b>sistema de órdones</b></a>.
		Actualmente, se trata del <a href="../digitear/beltpack.php"><b>sistema full duplex más pequeño</b></a> del mercado. <!-- Lien vers fiche technique ? --></p></h4>

      
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Vengan a hablar con nosotros y a escuchar todo sobre nuestros dispositivos y los nuevos softwares.  Por ejemplo: la <b> función Talk-Back</b> del Beltpack le permite comunicar con otro Beltpack.</p></h4>

      
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Nuestro equipo de ingenieros explora y crea nuevas e interesantes funciones constantemente. Las últimas mejoras incluyen la posibilidad de conectar varios Beltpack a los mismos canales de audio, así como la introducción de una Box GPO que permite derivar la entrada de un micrófono hacía aparatos de audio externos.</p></h4>

      
    </div>  
  </div>
</div>

<center>
<table>
<tr>
<td>
<img src ="img/zoom_on_inear.png" style="width:345px; height:150px;"/>
</td>
</tr>
</table>
</center>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Vengan a vernos para más información, pidan una <a href="../digitear/demonstration.php"><b>demostración</b></a> y pruebe el producto por usted mismo.</p></h3>
		<p><h3>¡Los esperamos en el <b>Stand # C1154</b>!</p></h3>

      
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