<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | IBC 2019</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="broadcastasia2019.css" rel="stylesheet" type="text/css">

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
        <li> <a href="../archive.php">Articles</a></li>
        <li class="active">IBC 2019</li>
        </ul>
        <b> IBC 2019 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publié le 09/09/2019</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="sortie">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
L'équipe <img src="img/logo.png" style="width:60px; height:27px;"/> débute sa rentrée avec sa <b>9ème participation à l'IBC</b>, qui se déroulera du <b>13 au 17 septembre 2019 à Amsterdam</b>. Rejoignez-nous sur notre <b>stand 8.E69</b> !
</p></h3>
             
           
    </div>  
  </div>
</div>
</div>
<br/>


<center>
<img class="img-responsive" src="img/logo_ibc_2019.png" width="250" alt="IBC"></img>
</center>
<br/>	



<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Nous y présenterons les <b>dernières fonctionnalités</b> du système <img src='img/digitear.png' width="62"/>, qui ne cessent de se multiplier cette année.
</p></h3>
			
    </div>  
  </div>
</div>
<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Merci à ceux qui sont venus nous rendre visite à <b>Singapour</b> il y 3 mois, et qui ont pu découvrir ces nouvelles options, 
comme <b>l'appairage des oreillettes InEar</b> à n'importe quel appareil Bluetooth (plus d'informations <a href="broadcastasia2019.php" style="text-decoration:none;"><b>ici</b></a>). Ce mois-ci, nous vous présentons <b>deux modes
d'utilisation supplémentaires</b> de <img src='img/digitear.png' width="62"/>, ainsi que <b>deux nouveaux appareils périphériques</b>.
</p></h3>
			
    </div>  
  </div>
</div>
<br/>

<center>
<img class="img-responsive" src="img/banall.jpg" width="550" alt="Broadcast Communications International"></img>
</center>
<br/>

<hr width="80%"/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h4><p>
Le <b>mode Broadcast</b> permet de connecter plusieurs beltpacks <img src='img/digitear.png' width="62"/> simultanément sur le même canal audio. 
</p>
</h4>
<h4><p>
Le <b>mode Stéréo</b> rend possible la réception simultanée de deux canaux audio par Beltpack.
</p>
</h4>
<h4><p>
Notre nouveau boîtier appelé <b>GPIO Box</b> permet de rediriger les micros cravates assignés sur la console de mixage vers le système d'intercom d'origine.
</p>
</h4>
<h4><p>
Enfin, la <b>matrice 8x8</b> permettant la communication entre 8 beltpacks <img src='img/digitear.png' width="62"/>, sera également présentée sur notre stand.
</p>
</h4>
			
    </div>  
  </div>
</div>

</div>
<hr width="80%"/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Nous restons disponibles pour toute <a href="../digitear/demonstration.php" style="text-decoration:none;"><b>demande de démonstration</b></a>, ou pour <a href="../digitear/contact.php" style="text-decoration:none;"><b>toute autre demande</b></a> relative à nos produits.
Nous vous attendons nombreux sur notre stand !
</h3></p>
			
    </div>  
  </div>
</div>
<br/>

<center>
<img class="img-responsive" src="../img/GAMME.png" width="550" alt="Broadcast Communications International"></img>
</center>

</div>
</body>

<footer>

<?php include('footer.php'); ?> 





</footer>
</html>