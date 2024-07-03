<?php

require_once ('bdd.php');

$id = $_GET["ville_id"];

$query = "DELETE FROM villes_france_free WHERE ville_id = $id";

$execution=$bdd->exec($query);

?>