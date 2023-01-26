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
        <li> <a href="../archive.php">Articles</a></li>
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
      
        
          <h5>Published on 03/25/2019</h5>

       
   
    </div>  
  </div>
</div>
</div>


<div class="sortie">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
            
          <h3><p>For its 7th consecutive year, <b>Overline Systems</b> <img src="img/logo.png"/> will be at Las Vegas' 2019 <b>NABShow</b> April 8-11th in <b>Central Hall, Stand # C1154.</b></p></h3>

             
           
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
      
        
        <h4><p>Our sales team and our partner, <a href='http://www.digitear.info'>TNR Distribution, LLC</a>, will be here to present to you Overline Systems' new and improved
		version of our communications solution <img src='img/digitear.png'/>.</p></h4>

      
    </div>  
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>This innovation is used as much as an <a href="../digitear/inear.php"><b>earpiece system</b></a> as it is as an <a href="../digitear/txbox.php"><b>intercom system</b></a>.
		It is the <a href="../digitear/beltpack.php"><b>smallest full duplex system</b></a> currently on the market. <!-- Lien vers fiche technique ? --></p></h4>

      
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Come chat with us and hear about our gadgets and newest software.  For example, the Digitear Beltpack's <b>Talk-Back function</b> allows Beltpacks to talk to one another.</p></h4>

      
    </div>  
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
      
        
        <h4><p>Our team of engineers is constantly creating cool new features to add to our system.  Our latest improvements include the ability to connect several Beltpacks to the same
		audio channels simultaneously and the introduction of a GPO Box to diverge microphone input to external audio devices.</p></h4>

      
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
      
        
        <h3><p>Come check us out for information, <a href="../digitear/demonstration.php"><b>demonstrations</b></a> and to test the product out yourself. Don't miss out!</p></h3>

      
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