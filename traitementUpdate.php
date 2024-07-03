<?php

require_once ('bdd.php'); 

$ville_code_postal = $_GET['ville_code_postal'];
$id = $_GET['ville_id'];

$requete = "UPDATE villes_france_free SET ville_code_postal ='$ville_code_postal' WHERE ville_id = $id";

$bdd->exec($requete);

?>