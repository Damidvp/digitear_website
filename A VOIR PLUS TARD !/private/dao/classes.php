<?php

class Grade {

	private $_numGrade;
	private $_libGrade;
	
	public function __construct(){ }
	
	public function getNumGrade(){
		return $this->_numGrade;
	}
	
	public function getLibGrade(){
		return $this->_libGrade;
	}
	
	public function setNumGrade($ng){
		$this->_numGrade = $ng;
	}
	
	public function setLibGrade($lg){
		$this->_libGrade = $lg;
	}
	
	
}

class User {

	private $_idUser;
	private $_password;
	private $_numGrade;
	
	public function __construct(){ }
	
	public function getIdUser(){
		return $this->_idUser;
	}
	
	public function getPassword(){
		return $this->_password;
	}
	
	public function getNumGrade(){
		return $this->_numGrade;
	}
	
	public function setIdUser($iu){
		$this->_idUser = $iu;
	}
	
	public function setPassword($pw){
		$this->_password = $pw;
	}
	
	public function setNumGrade($ng){
		$this->_numGrade = $ng;
	}
	
}

class Version {
	
	private $_numVersion;
	private $_typeVersion;
	private $_notePatch;
	
	public function __construct(){ }
	
	public function getNumVersion(){
		return $this->_numVersion;
	}
	
	public function getTypeVersion(){
		return $this->_typeVersion;
	}
	
	public function getNotePatch(){
		return $this->_notePatch;
	}
	
	public function setNumVersion($nv){
		$this->_numVersion = $nv;
	}
	
	public function setTypeVersion($tv){
		$this->_typeVersion = $tv;
	}
	
	public function setNotePatch($np){
		$this->_notePatch = $np;
	}
	
}

class Download {
	
	private $_idUser;
	private $_numVersion;
	private $_typeVersion;
	private $_dateHeure;
	
	public function __construct(){ }
	
	public function getIdUser(){
		return $this->_idUser;
	}
	
	public function getNumVersion(){
		return $this->_numVersion;
	}
	
	public function getTypeVersion(){
		return $this->_typeVersion;
	}
	
	public function getDateHeure(){
		return $this->_dateHeure;
	}
	
	public function setIdUser($iu){
		$this->_idUser = $iu;
	}
	
	public function setNumVersion($nv){
		$this->_numVersion = $nv;
	}
	
	public function setTypeVersion($tv){
		$this->_typeVersion = $tv;
	}
	
	public function setDateHeure($dh){
		$this->_dateHeure = $dh;
	}
	
}

class Edit{
	
	private $_idUser;
	private $_numVersion;
	private $_typeVersion;
	private $_dateHeure;
	
	public function __construct(){ }
	
	public function getIdUser(){
		return $this->_idUser;
	}
	
	public function getNumVersion(){
		return $this->_numVersion;
	}
	
	public function getTypeVersion(){
		return $this->_typeVersion;
	}
	
	public function getDateHeure(){
		return $this->_dateHeure;
	}
	
	public function setIdUser($iu){
		$this->_idUser = $iu;
	}
	
	public function setNumVersion($nv){
		$this->_numVersion = $nv;
	}
	
	public function setTypeVersion($tv){
		$this->_typeVersion = $tv;
	}
	
	public function setDateHeure($dh){
		$this->_dateHeure = $dh;
	} 
	
}

?>