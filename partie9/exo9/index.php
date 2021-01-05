<?php



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
    <title>Exo 8</title>
</head>

<body>

    <p class="text-center"><strong>Sélectionner une date</strong></p>

    <form class="form-inline text-center">
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Mois</option>
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>

        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Année</option>
            <option value="1">2020</option>
            <option value="2">2021</option>
            <option value="3">2022</option>
        </select>

        <button type="submit" class="btn btn-secondary my-1">Submit</button>
    </form>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
</body>

</html>