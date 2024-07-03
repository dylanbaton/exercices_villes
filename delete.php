<?php

require_once ('bdd.php');

$id = $_GET["id"];

$query = "DELETE FROM villes_france_free WHERE ville_id = 36832";

$execution=$bdd->exec($query);

?>