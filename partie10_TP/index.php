<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP Partie 10</title>
</head>

<body>

    <h1 class="text-center mb-5">Formulaire d'enregistrement</h1>

    <form action="index.php" method="POST" class="container col-6 row g-3 mx-auto">

        <div class="mb-3 col-md-6">
            <label for="lastName" class="form-label">Votre nom :</label>
            <input type="text" class="form-control" id="lastName" placeholder="Nom" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="firstName" class="form-label">Votre prénom :</label>
            <input type="text" class="form-control" id="firstName" placeholder="Prénom" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="birthDate" class="form-label">Votre date de naissance :</label>
            <input type="date" class="form-control" id="birthDate" placeholder="jj/mm/aaaa" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="country" class="form-label">Votre pays de naissance :</label>
            <input type="text" class="form-control" id="country" placeholder="pays de naissance" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="nationality" class="form-label">Votre nationnalité :</label>
            <input type="text" class="form-control" id="nationality" placeholder="nationalité" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Votre adresse :</label>
            <input type="text" class="form-control" id="address" placeholder="adresse" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="mail" class="form-label">Votre email :</label>
            <input type="email" class="form-control" id="address" placeholder="email" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="phoneNumber" class="form-label">Votre numéro de téléphone :</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="00.00.00.00.00" required>
        </div>

        <select class="form-select mb-3 col-md-6" aria-label="Default select example" required>
            <option selected>Plus haut diplôme obtenu : </option>
            <option value="1">sans</option>
            <option value="2">Bac</option>
            <option value="3">Bac+2</option>
            <option value="4">Bac+3 ou supérieur</option>
        </select>

        <div class="mb-3 col-md-6">
            <label for="poleEmploiNumber" class="form-label">Votre numéro Pôle Emploi :</label>
            <input type="text" class="form-control" id="poleEmploiNumber" placeholder="numéro Pôle Emploi" required>
        </div>

        <select class="form-select mb-3 col-md-6" aria-label="Default select example" required>
            <option selected>Nombre de badge obtenu : </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10 ou plus</option>
        </select>

        <div class="mb-3 col-md-6">
            <label for="codecademyCount" class="form-label">Votre lien compte Codecademy :</label>
            <input type="url" class="form-control" id="codecademyCount" placeholder="lien codecademy" required>
        </div>

        <div class="mb-3">
            <label for="hero" class="form-label">Si vous étiez un.e super héro.ïne.s, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control" id="hero" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="hack" class="form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
            <textarea class="form-control" id="hack" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="skills" class="form-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Non
                </label>
            </div>
        </div>

        <div class="col-12 text-center mb-3">
            <button class="btn colorButton" type="submit">Submit form</button>
        </div>
    </form>

    <footer class="mt-5">
        copyright : Céline Louvel 2021
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>