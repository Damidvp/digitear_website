<?php
include_once "bd.inc.user.php";
include_once "classes.php";

class Authentification{
	
	public function login($id,$password) {
		session_start();
				// le mot de passe est celui de l'utilisateur dans la base de donnees
		$_SESSION["username"]=$id;
		$_SESSION["password"]=$password;
	}
	
	public function logout() {
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	}
	
	public function isLoggedOn() {
		$ret = false;
		
		if (isset($_SESSION["username"])){
			$unUserDAO = new UserDAO();
			$user = $unUserDAO->getUserById($_SESSION["username"]);
			if ( $user->getIdUser() == $_SESSION["username"]
			  && $abo->getPassword() == $_SESSION["password"]
			 ) {
			$ret = true;
				
			}
		}
		return $ret ;
	}
	
	public function ovlIsLoggedOn() {
		session_start();
		$ret = false;
		if (isset($_SESSION['username'])) {
			$user = $this->getUserLoggedOn();
			if($user->getNumGrade == 2) {
				$ret = true;
			}
		}
		return $ret;
	}
	
	public function getUserLoggedOn(){
		if(isset($_SESSION["username"])){
			$unUserDAO = new UserDAO();
			$user = $unUserDAO->getUserById($_SESSION["username"]);
			return $user;
		}
		
	}
}
?>