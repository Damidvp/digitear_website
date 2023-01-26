<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | BroadcastAsia 2019</title>
	
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
        <li class="active">BroadcastAsia 2019</li>
        </ul>
        <b> BroadcastAsia 2019 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Publié le 10/06/2019</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="sortie">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Une nouvelle opportunité de nous rencontrer cette année s'offre à vous. En effet, nous serons présents du 18 au 20 juin au salon <b>BroadcastAsia 2019</b> à Singapour, <b>stand #4E3-01</b>.
</h3></p>
             
           
    </div>  
  </div>
</div>
</div>
<br/>


<center>
<img class="img-responsive" src="img/broadcastasia.png" width="470" alt="BroadcastAsia"></img>
</center>
<br/>	

<hr width="80%"/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Avant toute chose, nous tenons à remercier <b><a href="http://bci.com.sg" style="text-decoration:none;">Broadcast Communications International</a></b> de nous avoir invités à cet évènement.
</h3></p>
			
    </div>  
  </div>
</div>
<br/>

<center>
<img class="img-responsive" src="img/bci_logo.png" width="430" alt="Broadcast Communications International"></img>
</center>
<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h4><p>
Si vous avez déjà croisé notre gamme Digitear le mois dernier à Las Vegas, vous avez pu découvrir de nouvelles fonctionnalités comme entre autres le <b>mode Talk-Back</b>, qui permet d'utiliser le <a href="../digitear/beltpack.php" style="text-decoration:none;">Beltpack</a> comme un système 4 fils à part entière.
</h4></p>
<h4><p>
Nos ingénieurs ont travaillé sur le <a href="../digitear/beltpack.php" style="text-decoration:none;">Beltpack</a> et le <a href="../digitear/inear.php" style="text-decoration:none;">Inear</a>, et voici le résultat : il est maintenant possible de connecter n'importe quel appareil disposant de la <b>technologie Bluetooth</b> avec l'un d'entre eux.
</h4></p>
<h4><p>
L'oreillette <img src='img/digitear.png' width="62"/> peut également se connecter sur n'importe quel <b>périphérique Smartphone</b>, et ainsi accéder à des applications <b>IFB</b> (Interruptible Feedback) directement depuis ce dernier, tout en conservant une qualité de son Broadcast et une parfaite discrétion.
</h4></p>
<h4><p>
La connexion avec les <b>Airpods de chez Apple</b> a été optimisée, permettant de les utiliser sur un beltpack <img src='img/digitear.png' width="62"/>, écouteurs et microphones confondus.
</h4></p>
<h4><p>
Ces fonctionnalités supplémentaires seront disponibles sur les appareils que nous exposeront au salon <b>BroadcastAsia 2019</b>.
</h4></p>
			
    </div>  
  </div>
</div>
<br/>
<center>
<table cellspacing="50"><tr><td>
<img class="img-responsive" src="img/BP2.jpg" width="390" alt="Beltpack Digitear"></img>
</td><td>
<img class="img-responsive" src="img/2.jpg" width="365" alt="InEar Digitear"></img>
</td>
</tr></table>
</center>
</div>
<br/>

<hr width="80%"/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h4><p>
Nous y présenterons également une de nos autres gammes, déjà très présente sur le marché du broadcast en France : la <b>gamme UC</b>. Vous pouvez la découvrir sur le <b><a href="http://www.overline-systems.com/uc-range.htm" style="text-decoration:none;">site officiel <img src="img/logo.png" style="width:60px; height:27px;"/></a></b>.
</h4></p>
			
    </div>  
  </div>
</div>
<br/>

<center>
<img class="img-responsive" src="img/uc_system.png" width="510" alt="UC System"></img>
</center>
<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
<h3><p>
Rendez-vous donc sur le <b>stand #4E3-01</b> pour découvrir ces dernières nouveautés !
</h3></p>
			
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