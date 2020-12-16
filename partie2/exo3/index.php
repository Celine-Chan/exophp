<?php
    $age = 22;
    $gender = 'femme';
    $result;

    if ($gender == 'femme' && $age >= 18) {
        $result = 'Vous êtes une femme et vous êtes majeur.';
    } elseif ($gender == 'femme' && $age <= 18) {
        $result = 'Vous êtes une femme et vous êtes mineur.';
    } elseif ($gender == 'homme' && $age >= 18) {
        $result = 'Vous êtes un homme et vous êtes majeur.';
    } elseif ($gender == 'homme' && $age <= 18) {
        $result = 'Vous êtes un homme et vous êtes mineur.';
    };

    // pas obligé de mettre le dernier elseif, juste mettre else + echo.
    // $result a la place de echo et rappeler la variable dans le body
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>

<body>
    <?php
        echo $result;
    ?>
</body>
</html>