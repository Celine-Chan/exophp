<?php

var_dump($_FILES);

$civility = '';
$lastname = '';
$firstname = '';
$fileExercise = '';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exo 7</title>
</head>

<body>

    <?php
    if (isset($_POST['civility']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['fileExercise'])) {
        $civility = $_POST['civility'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $fileExercise = $_FILES['fileExercise'];
    } else {
        $civility = 'Non défini';
        $lastname = 'Non défini';
        $firstname = 'Non défini';
        $fileExercise = 'Non défini';
    ?>

        <form action="index.php" method="POST" class="container" enctype="multipart/form-data">
            <div>
                <label for="civility">Votre genre :</label>
                <select name="civility" class="custom-select">
                    <option value="null" disabled selected>Veuillez choisir :</option>
                    <option value="madame">Madame</option>
                    <option value="monsieur">Monsieur</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lastname">Votre nom :</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Nom">
            </div>

            <div class="form-group">
                <label for="firstname">Votre prénom :</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Prénom">
            </div>

            <div class="form-group">
                <label for="fileExercise">Votre fichier :</label>
                <input type="file" name="fileExercise">
                <button type="submit" value="Envoyer le fichier">Envoyer</button>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
            
        </form>

        <?php
        if (isset($_FILES['fileExercise'])) {
            ?>
            <p><?= $_FILES['fileExercise']['name'] ?> </p>
            <p><?= $_FILES['fileExercise']['type'] ?></p>
            <?php
        }
        ?>
        

    <?php } ?>

    <p>Votre civilité est : <?= $civility ?></p>
    <p>Votre nom est : <?= $lastname ?></p>
    <p>Votre prénom est : <?= $firstname ?></p>
    <p>Votre fichier est : <?= $file ?></p>

    <a href="index.php" type="submit" class="btn btn-danger">Retour index</a>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>