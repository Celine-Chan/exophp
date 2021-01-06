<?php

$monthsArray = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];

$startIntYears = 2015;
$endIntYears = 2025;

// déterminer le 1er jour du mois.
$firstDayMonth = date('Y-m-01');
//echo $firstDayMonth;

//calculer le nombre de jours dans le mois.
$numberDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
//$numberDaysInMonth = date('t', mktime());

//calculer le nombre de case du calendrier (par mois).

//dessiner un tableau avec thead with jour de la semaine.


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo 9</title>
</head>

<body>

    <p class="text-center" style="color: #C51162; font-size: 4rem"><strong>TP Calendrier</strong></p>

    <form class="form-inline container mt-5" method="GET" action="index.php">
        <select class="form-select my-1 mr-sm-2" id="chooseMonth" name="selectMonth">
            <option selected>Mois</option>

            <?php
            foreach ($monthsArray as $keyMonths => $valueMonths) { ?>

                <option value="<?= $keyMonths ?>"><?= $valueMonths ?></option>

            <?php } ?>
        </select>

        <select class="form-select my-1 mr-sm-2 mt-3" id="chooseYear" name="selectYear">
            <option selected>Année</option>

            <?php
            for ($startIntYears; $startIntYears <= $endIntYears; $startIntYears++) { ?>

                <option><?= $startIntYears ?></option>

            <?php } ?>
        </select>

        <button type="submit" class="btn btn-lg my-1 mt-3" style="background-color: #C51162; color: white;">Afficher</button>
    </form>

    <table class="table table-bordered container mt-5">
        <thead>
            <tr class="text-center">
                <th scope="col" class="table-info">Lundi</th>
                <th scope="col" class="table-success">Mardi</th>
                <th scope="col" class="table-danger">Mercredi</th>
                <th scope="col" class="table-warning">Jeudi</th>
                <th scope="col" class="table-info">Vendredi</th>
                <th scope="col" class="table-success">Samedi</th>
                <th scope="col" class="table-danger">Dimanche</th>
            </tr>
        </thead>

        <tbody class="border-dark">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>