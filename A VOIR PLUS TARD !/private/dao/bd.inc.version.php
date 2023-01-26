<?php

include_once "bd.inc.php";
include_once "classes.php";

class VersionDAO {
	private $_numVersion = 'numVersion as _numVersion';
	private $_typeVersion = 'typeVersion as _typeVersion';
	private $_notePatch = 'notePatch as _notePatch';
	
	public function getVersions(){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_numVersion, $this->_typeVersion, $this->_notePatch FROM version;");
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToVersionArray($req);
	}
	
	public function getVersionById($num, $type){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_numVersion, $this->_typeVersion, $this->_notePatch FROM version WHERE numVersion = :num AND typeVersion = :type;");
			$req->bindValue(':num', $num, PDO::PARAM_STR);
			$req->bindValue(':type', $type, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToVersion($req);
	}
	
	public function addVersion($version){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("INSERT INTO version VALUES (:numVersion, :typeVersion, :notePatch);");
			$req->bindValue(':numVersion', $version->getNumVersion(), PDO::PARAM_STR);
			$req->bindValue(':typeVersion', $version->getTypeVersion(), PDO::PARAM_STR);
			$req->bindValue(':notePatch', $version->getNotePatch(), PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
	}

	public function updVersion($version){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("UPDATE version SET notePatch=:notePatch WHERE numVersion=:numVersion AND typeVersion=:typeVersion;");
			$req->bindValue(':numVersion', $version->getNumVersion(), PDO::PARAM_STR);
			$req->bindValue(':typeVersion', $version->getTypeVersion(), PDO::PARAM_STR);
			
			$resultat = $req->execute();
			
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $resultat;
	}

//Retourne un tableau d'objets
	private function cursorToVersionArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $tab;
	}
	
	//Retourne un objet
	private function cursorToVersion($curseur) {
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}

}
?>