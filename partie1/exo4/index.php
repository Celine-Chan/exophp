<?php
$day = 'Mercredi';

$number = 9;

$dotNumber = 2.5;

$boolean = true;


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>

<body>


<p>Aujourd'hui on est <?= $day; ?></p>

<p>Le chiffre est <?= $number ?></p>

<p>Le chiffre float est <?= $dotNumber ?></p>

<p>La réponse est <?= $boolean ?></p>

<!-- Pour avoir le type de la variable -->
<!-- <p><?= gettype($boolean) ?></p> -->
    
</body>

</html>