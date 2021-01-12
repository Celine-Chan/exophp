<?php

$errorMessages = [];

$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])+$/';
$regexAddress = '/^([0-9a-z\'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})+$/';
$regexMail = '/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}+$/';
$regexPhoneNumber = '/^0[1-68]([-. ]?[0-9]{2}){4}+$/';
$regexpoleEmploiNumber = '/^[0-9a-z]+$/';
$regexUrl = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$regexTextArea = '/^[0-9a-z]+$/';

var_dump($_POST);

var_dump($errorMessages);

// lastName
if (isset($_POST['lastName'])) {
    if (!preg_match($regexName, $_POST['lastName'])) {
        $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
    }
    if (empty($_POST['lastName'])) {
        $errorMessages['lastName'] = 'Veuillez saisir votre nom.';
    }
}

// firstName
if (isset($_POST['firstName'])) {
    if (!preg_match($regexName, $_POST['firstName'])) {
        $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
    }
    if (empty($_POST['firstName'])) {
        $errorMessages['firstName'] = 'Veuillez saisir votre prénom.';
    }
}

$date = date('d/m/Y');

// birthDate
if (isset($_POST['birthDate'])) {
    if (!preg_match($regexBirthDate, $_POST['birthDate'])) {
        $errorMessages['birthDate'] = 'Veuillez saisir une date valide.';
    }
    if (empty($_POST['birthDate'])) {
        $errorMessages['birthDate'] = 'Veuillez saisir une date.';
    }
    // if (isset($_POST['birthDate']) > $date){
    //     $errorMessages['birthDate'] = 'Veuillez saisir une date dans le passé';
    // }
}

// country
if (isset($_POST['country'])) {
    if (!preg_match($regexName, $_POST['country'])) {
        $errorMessages['country'] = 'Veuillez saisir un pays valide.';
    }
    if (empty($_POST['country'])) {
        $errorMessages['country'] = 'Veuillez saisir un pays.';
    }
}

//nationality
if (isset($_POST['nationality'])) {
    if (!preg_match($regexName, $_POST['nationality'])) {
        $errorMessages['nationality'] = 'Veuillez saisir une nationalité valide.';
    }
    if (empty($_POST['nationality'])) {
        $errorMessages['nationality'] = 'Veuillez saisir une nationalité.';
    }
}

//address
if (isset($_POST['address'])) {
    if (!preg_match($regexAddress, $_POST['address'])) {
        $errorMessages['address'] = 'Veuillez saisir une adresse valide.';
    }
    if (empty($_POST['address'])) {
        $errorMessages['address'] = 'Veuillez saisir une adresse.';
    }
}

//email
if (isset($_POST['mail'])) {
    if (!preg_match($regexMail, $_POST['mail'])) {
        $errorMessages['mail'] = 'Veuillez saisir une adresse email valide.';
    }
    if (empty($_POST['mail'])) {
        $errorMessages['mail'] = 'Veuillez saisir une adresse email.';
    }
}

//phoneNumber
if (isset($_POST['phoneNumber'])) {
    if (!preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
        $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone valide.';
    }
    if (empty($_POST['phoneNumber'])) {
        $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone.';
    }
}

//certificate

//poleEmploiNumber
if (isset($_POST['poleEmploiNumber'])) {
    if (!preg_match($regexpoleEmploiNumber, $_POST['poleEmploiNumber'])) {
        $errorMessages['poleEmploiNumber'] = 'Veuillez saisir un numéro Pôle Emploi valide.';
    }
    if (empty($_POST['poleEmploiNumber'])) {
        $errorMessages['poleEmploiNumber'] = 'Veuillez saisir un numéro Pôle Emploi.';
    }
}

//badge

//codecademyCount
if (isset($_POST['codecademyCount'])) {
    if (!preg_match($regexUrl, $_POST['codecademyCount'])) {
        $errorMessages['codecademyCount'] = 'Veuillez saisir un lien valide.';
    }
    if (empty($_POST['codecademyCount'])) {
        $errorMessages['codecademyCount'] = 'Veuillez saisir un lien Codecademy.';
    }
}

//hero
if (isset($_POST['hero'])) {
    if (!preg_match($regexTextArea, $_POST['hero'])) {
        $errorMessages['hero'] = 'Veuillez remplir le champ correctement.';
    }
    if (empty($_POST['hero'])) {
        $errorMessages['hero'] = 'Veuillez remplir le champ.';
    }
}

//hack
if (isset($_POST['hack'])) {
    if (!preg_match($regexTextArea, $_POST['hack'])) {
        $errorMessages['hack'] = 'Veuillez remplir le champ correctement.';
    }
    if (empty($_POST['hack'])) {
        $errorMessages['hack'] = 'Veuillez remplir le champ.';
    }
}

