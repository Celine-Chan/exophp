<?php
// english
echo date('l j F Y, H:i') . '</br>';

// french
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr.utf8');
echo strftime('%A %d %B %G, %H:%M:%S');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>

<body>
    
</body>
</html>