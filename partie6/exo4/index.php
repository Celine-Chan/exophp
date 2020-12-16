<?php

var_dump($_GET);

if (isset($_GET['language']) && isset($_GET['server'])) {
    $language = $_GET['language'];
    $server = $_GET['server'];
} else {
    $language = 'il manque le paramètre language';
    $server = 'il manque le paramètre server';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exo 2</title>
</head>

<body>

    <div class="container text-center">

        <a type="button" href="index.php?language=PHP&server=WAMP" class="btn btn-primary">Envoi des paramètres</a>

        <a type="button" href="index.php" class="btn btn-danger">retour index</a>

    </div>

    <div class="container text-center bg-light m-2">
        <p>Paramètre language : <?= $language ?></p>
        <p>Paramètre server : <?= $server ?></p>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>