<?php
$name = 'Céline';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>

<body>

    <p>Bonjour <?= $name ?>, comment vas-tu ?</p>

    <!-- ou -->

    <?php
        echo 'Bonjour ' . $name . ', comment vas-tu ?</br>';
    ?>

    <!-- ou -->

    <?php
        echo "Bonjour $name, comment vas-tu ?";
    ?>

</body>

</html>