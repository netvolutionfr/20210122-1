<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intégrer des données CSV dans un tableau HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Liste des données du fichier CSV</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $f = fopen("http://www.filltext.com/?rows=20&fname={firstName}&lname={lastName}&email={email}", "r");
        while($donnees_json = fgets($f)) {
            $donnees = json_decode($donnees_json);

            $i = 1;
            foreach ($donnees as $donnee) {
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";

                echo "<td>";
                echo $donnee->fname;
                echo "</td>";

                echo "<td>";
                echo $donnee->lname;
                echo "</td>";

                echo "<td>";
                echo $donnee->email;
                echo "</td>";

                echo "</tr>";

                $i++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>