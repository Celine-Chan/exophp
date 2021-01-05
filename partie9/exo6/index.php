<?php
//Afficher le nombre de jour dans le mois de février de l'année 2016.

$numberDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo 'Il y avait ' . $numberDays . ' jours en février 2016.';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>
    
</body>
</html>