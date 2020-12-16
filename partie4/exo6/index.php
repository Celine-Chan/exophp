<?php

function showIdentity($lastName, $firstName, $age ) {
    return 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>
    <?=  showIdentity('LOUVEL', 'Céline', 30) ?>
</body>
</html>