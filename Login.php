<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <title>YnoResto</title>
</head>

<body>
    <div class="login_div">
        <div class="connexion">
            <p>Connexion</p>
        </div>
        <div class="form_div">
            <form class="form" action="Accueil.php" method="post">
                <div class="input">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom">
                </div>
                <div class="separation"></div>
                <div class="input">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="input">
                    <input type="submit" value="Se connecter">
                </div>
            </form>
        </div>

    </div>

</body>

</html>