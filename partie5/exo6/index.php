<?php

    $departements = [
        76 => 'Seine-Maritime',
        27 => 'Eure',
        14 => 'Calvados',
        61 => 'Orne',
        50 => 'Manche'
    ];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>

    <?= $departements[76]; ?>
    <?= array_search('Seine-Maritime', $departements); ?>

    

</body>
</html>