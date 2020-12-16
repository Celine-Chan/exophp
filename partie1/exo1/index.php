<?php
    $name = 'Céline';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>

<body>

<h1><?php echo $name; ?></h1>
<!-- echo court -->
<h1><?= $name; ?></h1>
<p>Ceci est un paragraphe de <?= $name; ?></p>


</body>

</html>