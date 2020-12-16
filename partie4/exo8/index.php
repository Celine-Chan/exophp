<?php

// rajouter une valeur par défaut dans les paramètres 
    function sumNumber($firstNumber = 2, $secondNumber = 8, $thirdNumber = 6) {
        return $firstNumber + $secondNumber + $thirdNumber;
    };

    /**
     * 
     * @param string $lastName on récupère le nom du personnage
     * @param string $firstName on récupère le prénom du personnage
     * @param string $classe on récupère la class du personnage, par défaut ce sera un assassin
     * 
     * @return string return la phrase bienvenue
     */

    function creerPerso($lastName, $firstName, $classe = 'assassin') {
        return "Bienvenue dans le jeu $lastName $firstName, vous êtes de la classe  $classe";
    };

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- si les 3 paramètres ne sont pas appelés,la valeur par défaut dans la fonction est appelé -->
    <?= sumNumber(10, 5) . '</br>'?>

    <?= creerPerso('LOUVEL', 'Céline') ?>

</body>
</html>