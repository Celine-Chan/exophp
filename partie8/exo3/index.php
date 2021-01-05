<?php

// stocker cookie

$pseudo = '';
$password = '';

if (isset($_POST['pseudo'])) {
    setcookie('pseudo', $_POST['pseudo'], time() + 365 * 24 * 3600, null, null, false, true);
}

if (isset($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
    <title>exo 3</title>
</head>

<body>

    <h1 class="text-center">Formulaire d'identification</h1>

    <form action="index.php" method="POST" class="container mt-5">
        <div class="form-outline mb-4">
            <input type="text" id="pseudo" name="pseudo" class="form-control" />
            <label class="form-label" for="pseudo">pseudo</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
        </div>

        <div class="form-outline mb-4 text-center">
            <input type="submit" value="valider" class="btn btn-secondary">

            <a href="index2.php" type="submit" class="btn btn-primary">Envoyer</a>
            <a href="index3.php" type="submit" class="btn btn-primary">modifier index</a>
        </div>
    </form>






    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
</body>

</html>