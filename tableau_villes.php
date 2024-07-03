<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLEAU</title>
</head>
<style>

body {
    display: flex;
    justify-content: center;
}

table {
    border: 2px solid black;
    width: 500px; 
}

tr, td, th {
    border: 2px solid black;
    width: 250px;
    text-align: center; 
}
</style>
<body>
<table>
    <tr>
        <th>Nom de la ville</th>
        <th>Code postal</th>
    </tr>
            <?php
                require_once ('bdd.php');

                // Écriture de la requête
                $requete = 'SELECT * FROM villes_france_free';
                
                // Réalisation de la requête
                $reponse = $bdd->query($requete);
                
                foreach ($reponse as $info) {
                    echo "<tr>";
                    echo "<td>" . $info['ville_nom'] . "</td>";
                    echo "<td>" . $info['ville_code_postal'] . "</td>";
                    echo "</tr>";
                }
                $bdd->exec($requete);
            ?>
</table>
</body>
</html>