<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
</head>
<body>
	<?php
		include_once "dao/bd.inc.grade.php";
		include_once "dao/bd.inc.user.php";
		include_once "dao/bd.inc.version.php";
		include_once "dao/bd.inc.download.php";
		include_once "dao/bd.inc.edit.php";
		
		$unGradeDAO = new GradeDAO();
		print_r($unGradeDAO);
		echo "<br/>";
		$unUserDAO = new UserDAO();
		print_r($unUserDAO);
		echo "<br/>";
		$uneVersionDAO = new VersionDAO();
		print_r($uneVersionDAO);
		echo "<br/>";
		$unDownloadDAO = new DownloadDAO();
		print_r($unDownloadDAO);
		echo "<br/>";
		$unEditDAO = new EditDAO();
		print_r($unEditDAO);
		
		echo "<br/><br/>";
		
		print_r($unGradeDAO->getGradeById("2"));
		echo "<br/>";
		print_r($unUserDAO->getUserById("virginie@overline-systems.com"));
		echo "<br/>";
		print_r($uneVersionDAO->getVersionById("1.0", "TXBOX"));
		echo "<br/>";
		print_r($unDownloadDAO->getDownloadsByUser("virginie@overline-systems.com"));
		echo "<br/>";
		print_r($unEditDAO->getEditsByVersion("1.0", "BELTPACK"));
		
	?>
	
</body>
</html>