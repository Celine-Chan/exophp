<?php
//Afficher la date du jour - 20 jours.
setlocale(LC_TIME, 'fr.utf8');
echo strftime('%A %d %B %G', strtotime('-22 days'));

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>
    
</body>
</html>