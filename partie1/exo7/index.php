<?php
$lastname = 'Louvel';
$firstname = 'Céline';
$age = 30;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>

<body>

    <p>Bonjour <?= $lastname ?> <?= $firstname ?>, tu as <?= $age ?> ans.</p>

<!-- ou -->

    <?php
        echo 'Bonjour ' . $lastname  . ' ' . $firstname . ', tu as ' . $age . ' ans.</br>';
    ?>

    <!-- ou -->
    <?php
        echo "Bonjour $lastname $firstname, tu as $age ans.";
    ?>
</body>

</html>