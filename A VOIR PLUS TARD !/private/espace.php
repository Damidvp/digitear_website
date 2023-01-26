<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<title>Digitear | Espace distributeur</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="../../D_DIGITEAR.png" />

  <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  
  <link rel="stylesheet" href="../bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../login.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="login.js"></script>
  
  <script type="text/javascript" src="jquery.js"></script>
  <script src="jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<body>
<?php 
session_start(); 
 
/*  
si session_is_registred() renvoie false cela siginifie que le visiteur  
n'a pas de session d'ouvert, il n'est donc pas loggué ni autorisé à  
acceder à l'espace membres 
*/ 
if(!isset($_SESSION['username'])) 
    { 
    header('Location: controler/check_login.php');
    } 
?>   

<?php include('nav_espace.php'); ?>
<br/><br/><br/>
Cet espace est réservé !

<h1>Liste de toutes les versions</h1>
<table>
	<?php
	for($i=0; $i<count($listeAllVersions); $i++){
		echo "<tr><td>".$listeAllVersions[$i]->getTypeVersion()." - ".$listeAllVersions[$i]->getNumVersion()."<br/><b>Descriptif : </b>".$listeAllVersions[$i]->getNotePatch()."</td></tr>";
	}
	?>
</table>
</body>

<footer>
<?php include('footer_espace.php'); ?>
</footer>
</html>