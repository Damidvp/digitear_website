<?php

require_once "../dao/bd.inc.php";
require_once "../dao/bd.inc.user.php";

// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
//$login_valide = "moi";
//$pwd_valide = "lemien";

// on teste si nos variables sont définies
if(isset($_POST['submit'])){
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$unUserDAO = new UserDAO(); //On appelle la classe DAO pour comparer le login saisi avec la Database
		$login_valide = $_POST['username'];
		$pwd_valide = $_POST['password'];
		$user = $unUserDAO->getUserById($login_valide); //Récupération de l'user dans la BDD
		// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
		if ($user!=null) {
			if($pwd_valide == $user->getPassword()){// dans ce cas, tout est ok, on peut démarrer notre session

				// on la démarre :)
				session_start ();
				// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];

				// on redirige notre visiteur vers une page de notre section membre
				header ('location: ../controler/liste_patchs.php');
			} else {
				echo '<body onLoad="alert(\'Mot de passe incorrect !\')">';
			}
		}
		else {
			// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
			echo '<body onLoad="alert(\'Ce compte n\'existe pas !\')">';
		}
	}
	else 	{
		echo 'Les variables du formulaire ne sont pas déclarées.';
	}
}

include_once "../login.php";
?>