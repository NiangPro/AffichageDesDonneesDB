<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Chargement</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                <a href="?palmer" class="btn btn-dark">Palmer</a>
                <a href="?femme" class="btn btn-dark">Femme</a>
                <a href="?paysN" class="btn btn-dark">Pays N</a>
                <a href="?google" class="btn btn-dark">Google</a>               
                <a href="?genre" class="btn btn-dark">Genre</a>
                <a href="?parPays" class="btn btn-dark">Par Pays</a>
                <a href="?age" class="btn btn-dark">Age</a>
                <a href="?dept" class="btn btn-dark">8</a>
            </div>
        </div>
        <div class="row mt-3">
            <?php
                if (isset($_GET['palmer']))
                    affichageGenerale($palmer, ['Id', 'Prenom', 'Nom', 'Email', 'Sexe', 'Addresse IP', 'Naissance', 'Pays', 'Avatar']); 
                elseif (isset($_GET['femme']))
                    affichageGenerale($femme, ['Id', 'Prenom', 'Nom', 'Email', 'Sexe', 'Addresse IP', 'Naissance', 'Pays', 'Avatar']);
                elseif (isset($_GET['paysN']))
                    affichageGenerale($paysN, ['Id', 'Prenom', 'Nom', 'Email', 'Sexe', 'Addresse IP', 'Naissance', 'Pays', 'Avatar']);
                elseif (isset($_GET['google']))
                    affichageGenerale($google, ['Id', 'Prenom', 'Nom', 'Email', 'Sexe', 'Addresse IP', 'Naissance', 'Pays', 'Avatar']); 
                elseif (isset($_GET['parPays']))
                    affichageGenerale($parPays, ['Pays', 'Nombre d\'enregistrement']);
                elseif (isset($_GET['age']))
                    affichageGenerale($age, ['Prenom', 'Nom', 'Age']); 
                elseif (isset($_GET['genre']))
                    affichageGenerale($genre, ['Genre', 'Nombre Total']);
                elseif (isset($_GET['dept']))
                    affichageGenerale($dept, ['Prenom','Nom', 'Nombre']);
            ?> 

        </div>
    </div>
</body>
</html>