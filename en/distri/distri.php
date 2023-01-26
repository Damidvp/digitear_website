<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digitear | Distributors </title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../D_DIGITEAR.png" />
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="distritxt.css">
  
  <!-- JS -->
  
  <script src="jquery.js" type="text/javascript"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <script src="jquery.vmap.js" type="text/javascript"></script>
  <script src="maps/jquery.vmap.world.js" type="text/javascript"></script>
  <script src="maps/jquery.vmap.continents.js" type="text/javascript"></script>
  <script src="jquery.vmap.sampledata.js" type="text/javascript"></script>
  <script src="jquery.vmap.programdata.js" type="text/javascript"></script>
  

  <!-- FONTS -->
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <script>
	$(document).ready(function(){
		$(".display").click(function(){
			if($(".lgd").is(":hidden")){
				$(".lgd").slideDown(400);
				document.getElementById('display').textContent = "Hide map caption";
			} else {
				$(".lgd").slideUp(400);
				document.getElementById('display').textContent = "Display map caption";
			}
		}
	);
});

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
  
  <script type="text/javascript">
  var isZoom=false;
  var dX,dY,dS;
  jQuery(document).ready(function() {
    jQuery('#vmap').vectorMap({
      map: 'world_en',
      backgroundColor: '#ffffff',
      color: '#ffffff',
      hoverOpacity: 0.7,
      selectedColor: '#666666',
      borderColor: '#ffffff',
      colors : test,
      enableZoom: false,
      showTooltip: true,
      onRegionOver : function (element, code, region)
      {
        highlightRegionOfCountry(code);
      },
      onRegionOut : function (element, code, region)
      {
        unhighlightRegionOfCountry(code);
      },
      onRegionClick: function (element, code, region)
      {
        if(!isZoom){ //first click; zooms in
          if(countryMap[code]=="Asia"){
            dX=280;dY=-100;dS=1.3;
          }
          if(countryMap[code]=="Africa"){
            dX=150;dY=150;dS=1.7;
          }
          if(countryMap[code]=="Europe"){
            dX=170;dY=50;dS=2.4;
          }
          if(countryMap[code]=="northAmerica"){
            dX=-200;dY=-200;dS=1.5;
          }
          if(countryMap[code]=="Australia"){
            dX=470;dY=300;dS=2;
          }
          if(countryMap[code]=="southAmerica"){
            dX=-200;dY=300;dS=1.5;
          }
          zoomInOnContinent(dX,dY,dS);
          isZoom=true;
          setRegion(code);
          setRegionColors();
          }
        else{ //second click on country
          $('#description-box').html('');
          countrySelected = true;
          selectedCode = code;
          displayBoxText(code);
        }
      }
    });
    document.getElementById("description-box").style.display = "none";
    document.getElementById("backButton").style.display = "none";
    $('#directions').text('Select your continent');
    
  });

  function backButtonClick(){
    if(isZoom){
      zoomOutOnContinent(dX,dY,dS);
      isZoom=false;
      $('#vmap').vectorMap('set', 'colors', test);
    }
  }
  </script>

<body>


  <?php include('nav.php'); ?> 
    
	<div id="main">
    <center><div id="vmap"></div></center>
    <div id="directions"></div>
	
    <div id="backButton" onClick="backButtonClick();">Back</div>
    
    <!--Use this to display data-->
    <div id="description-box"></div>
	
	<!-- Coder à partir d'ici pour faire la légende -->
	<br />
	<center><button id="display" class="display">Display map caption</button></center>
	<center>
	<div class="lgd" hidden>
		<!-- Table utilisée pour construire la légende par continent -->
		<hr width="80%">
		<center>
		<table>
		<tr>
		<td valign="top">
		<!-- Une cellule = un continent -->
		<div class="continent">
		<h4><b>Europe :</b></h4>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#66DDCB;"></div> <!-- Permet d'afficher un rectangle coloré -->
				<span style="margin-left:3px;"><i>Cinema Pro Ltd.</i></span> <!-- Affiche le texte correspondant -->
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#35EAFF;"></div> 
				<span style="margin-left:3px;"><i>Leading Technologies</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#35CAFD;"></div> 
				<span style="margin-left:3px;"><i>Defi Technique</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#0090D4;"></div> 
				<span style="margin-left:3px;"><i>Overline Systems</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#0050E4;"></div> 
				<span style="margin-left:3px;"><i>COEL Audio Solutions</i></span>
			</div>		
		</div>
		</td>
		
		<td valign="top">
		<div class="continent">
		<h4><b>North America :</b></h4>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#FFCC31;"></div> 
				<span style="margin-left:3px;"><i>Sonotechnique</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#FAAD31;"></div> 
				<span style="margin-left:3px;"><i>TNR Distribution</i></span>
			</div>
			
		</div>
		</td>
		
		<td valign="top">
		<div class="continent">
		<h4><b>Latin America :</b></h4>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#EE4520;"></div> 
				<span style="margin-left:3px;"><i>Exea Media</i></span>
			</div>
			
		</div>
		</td>
		
		<td valign="top">
		<div class="continent">
		<h4><b>Asia :</b></h4>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#119966;"></div> 
				<span style="margin-left:3px;"><i>Dreamfly Ltd.</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#11EE66;"></div> 
				<span style="margin-left:3px;"><i>Gulf Broadcast Technology</i></span>
			</div>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#238033;"></div> 
				<span style="margin-left:3px;"><i>Broadcast Communications International</i></span>
			</div>
			
			
		</div>
		</td>
		
		<td valign="top">
		<div class="continent">
		<h4><b>Africa :</b></h4>
			<div class="ligne_ovl">
				<div class="color_ovl" style="background-color:#7011CA;"></div> 
				<span style="margin-left:3px;"><i>LTS Network</i></span>
			</div>
			
		</div>
		</td>
		
		</tr>
		</table>
		</center>
		<br />
	</div>
	</center>
	</div>
 
  </body>

  <footer>

    <?php include('footer.php'); ?>

  </footer>
  
</html>
