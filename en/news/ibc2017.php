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
        <li> <a href="../archive.php">Articles</a></li>
        <li class="active">IBC 2017</li>
        </ul>
        <b> Overline Systems at IBC 2017 show </b>

       
   
    </div>  
  </div>
</div>
</div>

<div class="date">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
          <h5>Published on 25/09/2017</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="ibc">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-lg-offset-3 col-md-offset-3">

                      
          <h3><p>It was a pleasure to meet you at the Amsterdam IBC edition 2017 (from September 15th to 19th 2017). Our 7th participation was the occasion to present for the first time the final version of our range Digitear.</p></h3>

             
        
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
      
        
          <h3><p>Owner & Managing Director, Mr LOMBARD, is particularly keen to thanking you for the welcome you reserved for this new product line.</p></h3>

       
      
    </div>  
  </div>
</div>

<div class="digitear">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>We are particularly pleased that you complimented our InEar, which as previously announced, has great audio quality as well as excellent RF coverage.  It is always a pleasure to communicate with you concerning your suggestions and needs.</p></h3>

      
    </div>  
  </div>
</div>
</div>

<div class="ban">
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Due to DIGITEAR's different functions, different uses can be attributed.  The broadcast environment is particularly interested in Digitear, but there is also a future in the sports environment and the conference circuit.  A new adventure starts for OVERLINE SYSTEMS!</p></h3>

      
    </div>  
  </div>
</div>
</div>



<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h3><p>Thank you for your feedback.  We look forward to seeing you as numerous and passionate at next year's show.</p></h3>

      
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