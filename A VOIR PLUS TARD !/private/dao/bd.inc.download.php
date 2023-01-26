<?php
include_once "bd.inc.php";
include_once "classes.php";

class DownloadDAO {
	private $_idUser = 'idUser as _idUser';
	private $_numVersion = 'numVersion as _numVersion';
	private $_typeVersion = 'typeVersion as _typeVersion';
	private $_dateHeure = 'dateHeure as _dateHeure';
	
	public function getDownloads(){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM download;");
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToDownloadArray($req);
	}
	
	public function getDownloadsByUser($id){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM download WHERE idUser = :id;");
			$req->bindValue(':id', $id, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToDownloadArray($req);
	}
	
	public function getDownloadsByVersion($num, $type){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_idUser, $this->_numVersion, $this->_typeVersion, $this->_dateHeure FROM download WHERE numVersion = :num AND typeVersion = :type;");
			$req->bindValue(':num', $num, PDO::PARAM_STR);
			$req->bindValue(':type', $type, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToDownloadArray($req);
	}
	
	public function addDownload($download){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("INSERT INTO download VALUES (:idUser, :numVersion, :typeVersion, :dateHeure);");
			$req->bindValue(':idUser', $download->getIdUser(), PDO::PARAM_STR);
			$req->bindValue(':numVersion', $download->getNumVersion(), PDO::PARAM_STR);
			$req->bindValue(':typeVersion', $download->getTypeVersion(), PDO::PARAM_STR);
			$req->bindValue(':dateHeure', $do->getDateHeure(), PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
	}

//Retourne un tableau d'objets
	private function cursorToDownloadArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $tab;
	}
	
	//Retourne un objet
	private function cursorToDownload($curseur) {
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}

}
?>