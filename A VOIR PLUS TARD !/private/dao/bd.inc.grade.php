<?php

include_once "bd.inc.php";
include_once "classes.php";

class GradeDAO {
	private $_numGrade = 'numGrade as _numGrade';
	private $_libGrade = 'libGrade as _libGrade';
	
	public function getGrades(){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_numGrade, $this->_libGrade FROM grade;");
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToGradeArray($req);
	}
	
	public function getGradeById($id){
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT $this->_numGrade, $this->_libGrade FROM grade WHERE numGrade = :id;");
			$req->bindValue(':id', $id, PDO::PARAM_STR);
			$req->execute();
		} catch(PDOException $e){
			print "Erreur !: ".$e->getMessage();
			die();
		}
		return $this->cursorToGrade($req);
	}
	
	//Retourne un tableau d'objets
	private function cursorToGradeArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $tab;
	}
	
	//Retourne un objet
	private function cursorToGrade($curseur) {
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class(),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}
}

//Partie TEST
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__){
	header('Content-Type:text/plain');

	$unGradeDAO = new GradeDAO();
	print_r($unGradeDAO->getGradeById("1"));
}
	

?>