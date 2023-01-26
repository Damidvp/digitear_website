<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Démonstration</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="demonstration.css" rel="stylesheet" type="text/css">

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
      <li style="font-size:1.2em;" ><a class="inactive" href="../index.php">Accueil</a></li>
      

      <li class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Digitear <span class="caret"></span></a>
      <ul id ="dig_sousmenus" class="dropdown-menu">
      <li><a href="presentation.php">Présentation</a></li>
      <li><a href="inear.php">InEar</a></li>
      <li><a href="beltpack.php">Beltpack</a></li>
      <li><a href="chargerbox.php">Charger Box</a></li>
      <li><a href="accesspoint.php">AccessPoint</a></li>
      <li><a href="txbox.php">TX-Box</a></li>
      </ul>
      </li>


      <li style="font-size:1.2em;"><a class="inactive" href="dl.php">Téléchargements</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="../distri/distri.php">Distributeurs</a></li>


      <li class="active"  class="dropdown">
      <a  id="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em; font-weight:bold;">Contact <span class="caret"></span></a>
      <ul id="ctc_sousmenus" class="dropdown-menu">
        <li><a href="demonstration.php">Démonstration</a></li>
      <li><a href="contact.php">Information</a></li>
    </ul>
  </li>

  <li><a class="icone" href="https://fr.linkedin.com/company/overline-systems"><img src="img/linkedin.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
  <li><a class="icone" href="https://www.facebook.com/overlinesystems.fr/"><img src="img/facebook.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>

</ul>

    <ul class="nav navbar-nav navbar-right">
	<li><a class="bckg_flag" href="../../es/index.php"><div ><img src="../img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../../en/index.php"><div ><img src="../img/flag_eng_big.png" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../index.php"><div ><img src="../img/flag_fr_big.png" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <!-- <li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/gb.png"></img></a></li> -->

     
    </ul>
</div>
</div>
</nav>

<div id="main">
<div class="article">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">

                      
          <h3><p>Notre équipe commerciale se tient à votre disposition pour vous proposer des démonstrations sur notre système Digitear.</p></h3>

             
        
    </div>
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
      
        
          <h3><p>Il vous suffit pour cela d'adresser une demande par le biais de ce formulaire :</p></h3>
          

       
      
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
              <label class="col-md-3 control-label" for="nom">Nom ou raison sociale</label>
              <div class="col-md-9">
                <input id="nom" name="nom" type="text" placeholder="Entrez votre nom/entreprise ici..." class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Entrez votre E-mail ici..." class="form-control">
              </div>
            </div>

            <div class="form-group">
			  <label class="col-md-3 control-label" for="objet">Objet</label>
			  <div class="col-md-9">
			    <input id="objet" name="objet" type="text" placeholder="Entrez l'objet de votre E-mail ici..." class="form-control">
			  </div>
			</div>
             
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Entrez votre message ici, et vos disponibilités..." rows="5"></textarea>
              </div>
            </div>

   
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="envoi" value="Envoyer le formulaire">Envoyer</button>
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
      
        
        <h3><p>Nous vous recontacterons alors pour planifier un rendez-vous en fonction de vos disponibilités.</p></h3>

      
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

</body>
<footer>

<?php include('footer.php'); ?> 

</footer>

</html>