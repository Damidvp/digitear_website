<?php
    function connexionPDO_overline(){
        $login="overline";
        $mdp="overline";
        $bd="digitear";
        $serveur="localhost";
        try {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp);
            return $conn;
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die();
        }
    }
	
	function connexionPDO_distributeur(){
        $login="distributeur";
        $mdp="distributeur";
        $bd="digitear";
        $serveur="localhost";
        try {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp);
            return $conn;
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die();
        }
    }
	
	function connexionPDO(){
        $login="root";
        $mdp="";
        $bd="digitear";
        $serveur="localhost";
        try {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp);
            return $conn;
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die();
        }
    }
    
    
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
	// prog de test
	header('Content-Type:text/plain');
	
	echo "test";
	
}