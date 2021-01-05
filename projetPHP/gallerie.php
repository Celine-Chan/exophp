<?php

//scandir
$dir = 'img/';
$galleryUpload = scandir($dir);

//var_dump(scandir($dir));

for ($i = 0; $i < count($galleryUpload); $i++) { // count = compte tous les éléments d'un tableau ou quelque chose d'un objet 
    if ($galleryUpload[$i] == '.' || $galleryUpload[$i] == '..') { 
        unset($galleryUpload[$i]); //unset = détruit une variable
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Gallerie Upload</title>
</head>

<body>

    <div class="card-columns">
        <?php
        foreach ($galleryUpload as $imgUpload) {
        ?>

            <div class="card">

                <img src="<?php echo $dir ?><?php echo $imgUpload ?>" class="card-img-top" alt="<?php echo $imgUpload ?>">

            </div>

        <?php } ?>
    </div>

    <div class="text-center">
    <a href="index.php" type="submit" class="btn" id="bouton">Upload</a>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <script src="assets/script.js"></script>
</body>

</html>