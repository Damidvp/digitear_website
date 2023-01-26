<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Demostración</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="demonstration.css" rel="stylesheet" type="text/css">

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

<nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     
      <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="Overline Systems"></a>
    </div>
   
<div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav">
      <li style="font-size:1.2em;" ><a class="inactive" href="../index.php">Inicio</a></li>
      

      <li  class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Digitear <span class="caret"></span></a>
      <ul id="dig_sousmenus" class="dropdown-menu">
      <li><a href="presentation.php">Presentación</a></li>
      <li><a href="inear.php">InEar</a></li>
      <li><a href="beltpack.php">Beltpack</a></li>
      <li><a href="chargerbox.php">Charger Box</a></li>
      <li><a href="accesspoint.php">AccessPoint</a></li>
      <li><a href="txbox.php">TX-Box</a></li>
      </ul>
      </li>

      <li style="font-size:1.2em;"><a class="inactive" href="dl.php">Descargas</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="../distri/distri.php">Distribuidores</a></li>



      <li class="active" class="dropdown">
      <a  id="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em; font-weight:bold;">Contactarnos <span class="caret"></span></a>
      <ul id="ctc_sousmenus" class="dropdown-menu">
        <li><a href="demonstration.php">Demostración</a></li>
      <li><a href="contact.php">Información</a></li>
    </ul>
  </li>
<li class="icone"><a href="https://fr.linkedin.com/company/overline-systems"><img src="img/linkedin.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
<li class="icone"><a href="https://www.facebook.com/overlinesystems.fr/"><img src="img/facebook.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
</ul>

    <ul class="nav navbar-nav navbar-right">
       <li><a class="bckg_flag" href="../index.php"><div ><img src="../img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../../en/index.php"><div ><img src="../img/flag_eng_big.png" alt="EN" style="max-height: 1.5em; max-width: 1.5em;" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../../fr/index.php"><div ><img src="../img/flag_fr_big.png" style="max-height: 1.5em; max-width: 1.5em; " /><div class="text_flag"></div></div></a></li>
      <!-- <li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/gb.png"></img></a></li> -->

     
    </ul>

</div>
</nav>

<div id="main">
<div class="article">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">

                      
          <h3><p>Nuestro equipo comercial está a su disposición para proponerle demostraciones de nuestro sistema Digitear.</p></h3>

             
        
    </div>
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
      
        
          <h3><p>Para obtener una demostración, solo tiene que efectuar una petición a través de este formulario :</p></h3>
          

       
      
    </div>  
  </div>
</div>



<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
        <div class="well well-sm">
          <form class="form-horizontal" action="formulaire.php" method="post">
          <fieldset>
                
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nom">Nombre o razón social</label>
              <div class="col-md-9">
                <input id="nom" name="nom" type="text" placeholder="Entra su nombre..." class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-Mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Entra su E-Mail..." class="form-control">
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-md-3 control-label" for="objet">Asunto</label>
              <div class="col-md-9">
                <input id="objet" name="objet" type="text" placeholder="Entra su asunto..." class="form-control">
              </div>
            </div>
    
             
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Mensaje</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Entra su mensaje..." rows="5"></textarea>
              </div>
            </div>

   
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="envoi" value="Envoyer le formulaire">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
      
        
        <h3><p>Nosotros le daremos nuestra respuesta para planificar una reunión en función de sus disponibilidades.</p></h3>

      
    </div>  
  </div>
</div>

<div class="image">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          
        <img src="img/flight.jpg"/>
		<br />
		<br />
       
      
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