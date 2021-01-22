<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inclusion de fichier texte en PHP</title>
</head>
<body>
<h1>Lorem Ipsum</h1>
<?php
$f = fopen("fichier.txt", "r"); // ouverture du fichier en mode lecture seule

while ($ligne = fgets($f, 4096)) {
?>
    <p><?php echo $ligne; ?></p>
<?php
}
?>
</body>
</html>