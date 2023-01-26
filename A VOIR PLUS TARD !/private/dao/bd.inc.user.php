<?php

include_once "bd.inc.php";
include_once "classes.php";

class UserDAO {
	private $_idUser = 'idUser as _idUser';
	private $_password = 'password as _password';
	private $_numGrade = 'numGrade as _numGrade';
	
	public function getUsers(){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_password, $this->_numGrade FROM user;");
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToUserArray($req);
	}
	
	public function getUserById($id){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_password, $this->_numGrade FROM user WHERE idUser = :id;");
			$req->bindValue(':id', $id, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToUser($req);
	}
	
	public function updUser($user){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("UPDATE user SET password=:password WHERE idUser=:idUser;");
			$req->bindValue(':idUser', $user->getIdUser(), PDO::PARAM_STR);
			$req->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
			
			$resultat = $req->execute();
			
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $resultat;
	}
	
	//Retourne un tableau d'objets
	private function cursorToUserArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $tab;
	}
	
	//Retourne un objet
	private function cursorToUser($curseur) {
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}
}

?>