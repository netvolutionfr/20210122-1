<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importation d'un fichier CSV</title>
</head>
<body>
<h1>Liste de noms et d'emails depuis CSV</h1>
<?php
$f = fopen("donnees.csv", "r");

$i = 0;

while($ligne = fgets($f, 4096)) {
    // traitement des lignes, une à une
    // Sauf que : la première ligne n'est pas intéressante... On crée donc un compteur et si ce compteur est à zéro, on ne traite pas la ligne
    if ($i > 0) {
        // Ok, maintenant chaque ligne contient des données séparées par des ";". On va découper la ligne selon les point-virgules
        $donnees = explode(";", $ligne);

        // et on obtient un tableau PHP
        echo "<ul>";

        echo "<li>";
        echo "Nom : ";
        echo $donnees[0];
        echo "</li>";

        echo "<li>";
        echo "Prénom : ";
        echo $donnees[1];
        echo "</li>";

        echo "<li>";
        echo "Email : ";
        echo $donnees[2];
        echo "</li>";

        echo "</ul>";
    }
    $i++;
}
?>
</body>
</html>