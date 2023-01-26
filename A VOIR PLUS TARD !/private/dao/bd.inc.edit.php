<?php
include_once "bd.inc.php";
include_once "classes.php";

class EditDAO {
	private $_idUser = 'idUser as _idUser';
	private $_numVersion = 'numVersion as _numVersion';
	private $_typeVersion = 'typeVersion as _typeVersion';
	private $_dateHeure = 'dateHeure as _dateHeure';
	
	public function getEdits(){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM edit;");
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToEditArray($req);
	}
	
	public function getEditsByUser($id){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM edit WHERE idUser = :id;");
			$req->bindValue(':id', $id, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToEditArray($req);
	}
	
	public function getEditsByVersion($num, $type){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM edit WHERE numVersion = :num AND typeVersion = :type;");
			$req->bindValue(':num', $num, PDO::PARAM_STR);
			$req->bindValue(':type', $type, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToEditArray($req);
	}
	
	public function addEdit($edit){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("INSERT INTO edit VALUES (:idUser, :numVersion, :typeVersion, :dateHeure);");
			$req->bindValue(':idUser', $edit->getIdUser(), PDO::PARAM_STR);
			$req->bindValue(':numVersion', $edit->getNumVersion(), PDO::PARAM_STR);
			$req->bindValue(':typeVersion', $edit->getTypeVersion(), PDO::PARAM_STR);
			$req->bindValue(':dateHeure', $edit->getDateHeure(), PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
	}

//Retourne un tableau d'objets
	private function cursorToEditArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $tab;
	}
	
	//Retourne un objet
	private function cursorToEdit($curseur) {
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}

}
?>