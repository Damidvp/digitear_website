<?php

include_once '../dao/bd.inc.version.php';

//On récupère les données GET/POST/SESSION
$uneVersionDAO = new VersionDAO();
$listeAllVersions = $uneVersionDAO->getVersions();
//On traite les données

//On appelle la vue correspondante

include_once '../espace.php';

?>