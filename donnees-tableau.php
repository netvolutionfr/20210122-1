<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intégrer des données CSV dans un tableau HTML</title>
</head>
<body>
<h1>Liste des données du fichier CSV</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $f = fopen("donnees.csv", "r");
    while($ligne = fgets($f)) {
        $donnees = explode(";", $ligne);
        echo "<tr>";

        echo "<td>";
        echo $donnees[0];
        echo "</td>";

        echo "<td>";
        echo $donnees[1];
        echo "</td>";

        echo "<td>";
        echo $donnees[2];
        echo "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>