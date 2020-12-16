<?php
    
    function showCookie($cookie) {
        return $cookie;
    };
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
</head>

<body>
    <?= showCookie('Aujourd\'hui, j\'ai mangé des cookies.') ?>
</body>


</html>