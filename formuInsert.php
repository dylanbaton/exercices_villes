<?php

require_once ('bdd.php') ;

$ville_nom= $_GET["ville_nom"];
$ville_departement= $_GET["ville_departement"];

$query="INSERT INTO villes_france_free(ville_nom, ville_departement ) VALUES('$ville_nom','$ville_departement')";

$bdd->exec($query);
?>