<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Contact</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="contact.css" rel="stylesheet" type="text/css">

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
      <li style="font-size:1.2em;" ><a class="inactive" href="../index.php">Home</a></li>
      

      <li  class="dropdown">
      <a  id="dig_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em">Digitear <span class="caret"></span></a>
      <ul id="dig_sousmenus" class="dropdown-menu">
      <li><a href="presentation.php">Presentation</a></li>
      <li><a href="inear.php">InEar</a></li>
      <li><a href="beltpack.php">Beltpack</a></li>
      <li><a href="chargerbox.php">Charger Box</a></li>
      <li><a href="accesspoint.php">AccessPoint</a></li>
      <li><a href="txbox.php">TX-Box</a></li>
      </ul>
      </li>

      <li style="font-size:1.2em;"><a class="inactive" href="dl.php">Downloads</a></li>
      <li style="font-size:1.2em;"><a class="inactive" href="../distri/distri.php">Distributors</a></li>



      <li class="active" class="dropdown">
      <a  id="ctc_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:1.2em; font-weight:bold;">Contact <span class="caret"></span></a>
      <ul id="ctc_sousmenus" class="dropdown-menu">
        <li><a href="demonstration.php">Demonstration</a></li>
      <li><a href="contact.php">Information</a></li>
    </ul>
  </li>
<li class="icone"><a href="https://fr.linkedin.com/company/overline-systems"><img src="img/linkedin.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
<li class="icone"><a href="https://www.facebook.com/overlinesystems.fr/"><img src="img/facebook.png" style="max-height: 1.5em; max-width: 1.5em"></img></a></li>
</ul>

    <ul class="nav navbar-nav navbar-right">
	<li><a class="bckg_flag" href="../../es/index.php"><div ><img src="../img/flag_esp_big.png" alt="ES" style="max-height: 1.5em; max-width: 1.5em" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="index.php"><div ><img src="../img/flag_eng_big.png" style="max-height: 1.5em; max-width: 1.5em; border: 2px solid white; border-radius:25px; transform:scale(1.5);" /><div class="text_flag"></div></div></a></li>
      <li><a class="bckg_flag" href="../../fr/index.php"><div ><img src="../img/flag_fr_big.png" style="max-height: 1.5em; max-width: 1.5em; " /><div class="text_flag"></div></div></a></li>
      <!-- <li><a href="index.php"><img src="flag/es.png"></img></a></li>
      <li><a href="index.php"><img src="flag/gb.png"></img></a></li> -->

     
    </ul>

</div>
</nav>

<div id="main">
<div class="container">
  <div class="row">
      <div class="col-md-9">
        <div class="well well-sm">
          <form class="form-horizontal" action="formulaire.php" method="post">
          <fieldset>
            <legend class="text-center">Contact Us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nom">Company Name</label>
              <div class="col-md-9">
                <input id="nom" name="nom" type="text" placeholder="Enter your company name..." class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-Mail Address</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Enter your E-mail..." class="form-control">
              </div>
            </div>

    
             <div class="form-group">
              <label class="col-md-3 control-label" for="objet">Subject</label>
              <div class="col-md-9">
                <input id="objet" name="objet" type="text" placeholder="Enter subject..." class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Enter message..." rows="5"></textarea>
              </div>
            </div>

   
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="envoi" value="Send the form">Send</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
          <div class="col-md-3">
          <b><p>Sales:</p></b>
          <p> <a href="mailto:digitear-sales@overline-systems.com">digitear-sales@overline-systems.com</a></p>
          <b><p>Support:</p></b>
          <p> <a href="mailto:digitear-support@overline-systems.com" target="_top">digitear-support@overline-systems.com</a></p>
    </div>
  </div>
</div>




<div class="container">
  <div class="row-fluid">
        <div class="col-md-9">
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2834.3741768176287!2d-1.0900309840846865!3d44.73238247909913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a2fd457b65cd%3A0xea7f58220e9315e8!2s21+Avenue+Sophie+Wallerstein%2C+33510+Andernos-les-Bains!5e0!3m2!1sfr!2sfr!4v1504173494606" style="max-width:100%; max-height:100%;" width="832" height="350" frameborder="0" style="border:0;" allowfullscreen></iframe>

	 </div>
	  
      
        <div class="col-md-3">
        <h2>Overline Systems</h2>
        <address>
          
          21 Avenue Sophie Wallerstein<br>
          33510 Andernos-les-Bains<br>
          Aquitaine<br>
          France<br>
        </address>
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