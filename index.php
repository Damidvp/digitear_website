

 <?php
 
$bln = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($bln){
    case "fr":
        //Redirection vers la langue française
        header("Location: fr/index.php");
        break;
	case "es":
        //Redirection ves la langue espagnole
        header("Location: es/index.php");
        break;
    case "en":
       //Redirection vers la langue anglaise
        header("Location: en/index.php");
        break;        
    default:
        //Redirection vers la langue par défaut, au cas ou il y a une détection d'une langue non supportée
        header("Location: en/index.php");
        break;
}

 ?>
<!--
 <html>
 
 <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digitear</title>
  
	<link rel="shortcut icon" type="image/x-icon" href="fr/D_DIGITEAR.png" />
	<link href="animation.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <script type="text/javascript" src="jquery.js"></script>
    <script src="fr/jquery.min.js" type="text/javascript"></script>

	<script>
	
		//Fonction permettant de loader les images avant l'animation (réduit les bugs interface)
		function preload(arrayOfImages) {
			$(arrayOfImages).each(function(){
				$('<img/>')[0].src = this;
				// Alternatively you could use:
				// (new Image()).src = this;
			});
		}
		
		preload([
			"img_anim/great_digitear1_gauche.jpg",
			"img_anim/great_digitear1_droite.jpg",
			"img_anim/great_digitear1_bw_gauche.png",
			"img_anim/great_digitear1_bw_droite.png"
		]);

		
		//Animations sur clic div FR / ENG
		//Simule un clic sur lien à gauche
		function simulateClickOnLeft() {
			var cb = document.getElementById('link_gauche');
			if (cb.dispatchEvent) {
				var evt = document.createEvent('MouseEvents');
				evt.initEvent('click', true, true);

				cb.dispatchEvent(evt);
			} else {
				cb.click();
			}
		}
		//Simule un clic sur lien à droite
		function simulateClickOnRight() {
			var cb = document.getElementById('link_droite');
			if (cb.dispatchEvent) {
				var evt = document.createEvent('MouseEvents');
				evt.initEvent('click', true, true);

				cb.dispatchEvent(evt);
			} else {
				cb.click();
			}
		}
		function animateClickOnLeft() {
			$('#img_anim_bis').fadeOut(450);
			$('#txt_droite').animate({'opacity' : '0'}, {duration : 500});			
            setTimeout("$('#txt_gauche').animate({'left' : '75%'}, {duration : 1200})", 350);
			document.getElementById('txt_gauche').style.backgroundColor = 'rgba(255, 255, 255, 0.89)';
			document.getElementById('txt_gauche').style.border = '3px solid #0090D4';
			document.getElementById('txt_gauche').style.transition = 'border 350ms ease-in';
			setTimeout("document.getElementById('link_gauche').href = 'fr/index.php'", 1500);
			setTimeout("simulateClickOnLeft()", 1500);
			
		}
		function animateClickOnRight() {
			$('#img_anim_bis').fadeOut(450);
			$('#txt_gauche').animate({'opacity' : '0'}, {duration : 500});
			setTimeout("$('#txt_droite').animate({'right' : '75%'}, {duration : 1200})", 350);
			document.getElementById('txt_droite').style.backgroundColor = 'rgba(255, 255, 255, 0.89)';
			document.getElementById('txt_droite').style.border = '3px solid #0090D4';
			document.getElementById('txt_droite').style.transition = 'border 350ms ease-in';
			setTimeout("document.getElementById('link_droite').href = 'en/index.php';", 1500);
			setTimeout("simulateClickOnRight()", 1500);
		}
		
	</script>
 </head>
 
 <body>
 
 <!-- Animation ? -->
 <!--
 <div id="all">
 <img id="img_anim_bis" src="img_anim/great_digitear1_bw_2.jpg" alt="Digitear System">
 <img id="img_anim" src="img_anim/great_digitear1_2.jpg" alt="Digitear System" hidden>
 
 <center>
 <div id="gauche" valign="center">
 
 <a id="link_gauche" href="#"><div id="txt_gauche" onclick="animateClickOnLeft()">
 <h3>Démarrez votre expérience</h3>
 <img id="digitear_gauche" src="img_anim/digitear.png" alt="Logo Digitear" />
 <br /><br />
 <img id="frflag_gauche" src="img_anim/great_frflag.png" alt="FR Flag" />
 </div></a>
 
 </div>
 
 </center>
 
 <center>
 <div id="droite" valign="center">
 
 <a id="link_droite" href="#"><div id="txt_droite" onclick="animateClickOnRight();">
 <h3>Start your experience</h3>
 <img id="digitear_droite" src="img_anim/digitear.png" alt="Logo Digitear" />
 <br /><br />
 <img id="ukflag_droite" src="img_anim/great_ukflag.png" alt="UK Flag" />
 </div></a>
 
 </div>
 </center>
 
 </div>
 
 </body>
 
 <footer>
 <div id="copyright">© 2018-2019 Overline Systems</div>
 </footer>
 
 </html>
 -->