<?php
//Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.

$firstDate = new DateTime('2016-05-16');
$secondDate = new DateTime('2021-01-06');

$diff = $secondDate->diff($firstDate)->format('%a');

echo $diff;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>

<body>
    
</body>
</html>