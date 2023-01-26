<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digitear | IBC 2017</title>
	
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

     
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="ibc.css" rel="stylesheet" type="text/css">

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
        <li class="active">IBC 2017</li>
        </ul>
        <b> Overline Systems au salon IBC 2017 </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5> Publié le 25/09/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="ibc">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-lg-offset-3 col-md-offset-3">

                      
          <h3><p>Ce fût un plaisir d’échanger avec vous à Amsterdam lors de l’édition 2017 d’IBC (du 15 au 19 septembre 2017). Cette 7ème participation fût l’occasion de vous présenter pour la première fois la version finale de notre gamme Digitear.</p></h3>

             
        
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
      
        
          <h3><p>Notre dirigeant, Monsieur LOMBARD, tient particulièrement à vous remercier pour l’accueil que vous avez réservé à cette nouvelle gamme de produits.</p></h3>

       
      
    </div>  
  </div>
</div>

<div class="digitear">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Nous sommes particulièrement enjoués que vous ayez constaté sur notre oreillette HF, tout comme nous vous l’avions précédemment annoncé, une grande qualité audio ainsi qu’une excellente couverture RF. C’est à chaque fois un plaisir d’échanger avec vous concernant vos suggestions et besoins.</p></h3>

      
    </div>  
  </div>
</div>
</div>

<div class="ban">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Chacun y voit une utilisation particulière de part ses différentes fonctions. Le Digitear intéresse particulièrement le milieu du broadcast mais a aussi un avenir intéressant dans le milieu sportif et l’aide aux conférenciers. Une nouvelle aventure démarre pour OVERLINE SYSTEMS !</p></h3>

      
    </div>  
  </div>
</div>
</div>



<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Merci pour vos précieux retours. Nous vous attendons aussi nombreux et passionnés l’année prochaine sur le salon.</p></h3>

      
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