<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | Connexion</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../../../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  
  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../login.css" rel="stylesheet" type="text/css">

  <!-- <script type="text/javascript" src="login.js"></script> -->
  
  <script type="text/javascript" src="../jquery.js"></script>
  <script src="../jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../bootstrap.min.js"></script>
  
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

<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="main">
<h2>Accéder à l'espace distributeur</h2>
<form id="form_id" action="check_login.php" method="post" name="myform">
<label>E-mail</label>
<input type="text" name="username" id="username"/>
<label>Mot de passe</label>
<input type="password" name="password" id="password"/>
<input type="submit" value="Connexion" name="submit" id="submit"/>
</form>
<br/>
<span><b class="note">Attention : </b>Cet espace est exclusivement réservé aux distributeurs Digitear <br/><br/></span>
</div>
</div>
</div>
<div class="espace"></div>
</body>

<footer>
<?php include('footer.php'); ?>
</footer>
</html>