<?php

    function resultNumber($firstNumber, $secondNumber) {
        if ($firstNumber > $secondNumber) {
            return 'le premier nombre est plus grand';
        } elseif ($firstNumber < $secondNumber) {
            return 'Le premier nombre est plus petit';
        } else {
            return 'Les deux nombres sont identiques';
        }
    };

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>

</head>
<body>
    <?= resultNumber(5, 5) ?>
</body>

</html>