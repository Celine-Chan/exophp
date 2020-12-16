<?php 
$km = 1;
echo $km;

$km = 3;
echo $km;

$km = 125;
echo $km;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>

<body>

<?php $km = 1 ?>
<p>La variable km est de <?= $km ?> !</p>

<?php $km = 3 ?>
<p>La variable km est de <?= $km ?> !</p>

<?php $km = 125 ?>
<p>La variable km est de <?= $km ?> !</p>
    
</body>

</html>