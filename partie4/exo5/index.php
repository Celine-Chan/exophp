<?php

    function showCake($numberCake, $cake) {
        return 'Aujourd\'ui, j\'ai mangé ' . $numberCake . ' ' . $cake;
    };

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>

<body>
    
    <?= showCake(5, 'cookies') ?>

</body>
</html>