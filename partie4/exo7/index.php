<?php

    function showIdentity($age, $gender) {
        if ($gender == 'homme' && $age >= 18) {
            return 'Vous êtes un homme et vous êtes majeur.';
        } elseif ($gender == 'homme' && $age < 18) {
            return 'Vous êtes un homme et vous êtes mineur.';
        } elseif ($gender == 'femme' && $age >= 18){
            return 'Vous êtes une femme et vous êtes majeur.';
        } else {
            return 'Vous êtes une femme et vous êtes mineur.';
        }
        
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
    
    <p><?= showIdentity(25, 'homme') ?></p>

</body>
</html>