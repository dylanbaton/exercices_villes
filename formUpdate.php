<?php

require_once ('bdd.php');

$id = $_GET["id"];

$requete="SELECT * FROM villes_france_free WHERE ville_id=$id";
$infos=$bdd->query($requete);
$resultat=$infos->fetch(PDO::FETCH_ASSOC);
?>


<form action="traitementUpdate.php" method="GET">

    code postale
    <input type="text" name="ville_code_postal" value="<?php echo $resultat["ville_code_postal"];?>">

    <input type="hidden" name="ville_id" value="<?php echo $id;?>">

    <input type="submit" value="envoyer">

</form>