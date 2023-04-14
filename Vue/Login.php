<?php include_once "$racine/modele/bd.admin.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Vue/css/Login.css">
    <title>YnoResto</title>
</head>

<body>
    <div class="login_div">
        <div class="connexion">
            <p>Connexion</p>
        </div>
        <div class="form_div">
        <?php if (!isLoggedOn()){ ?>
            <form class="form" action="./?action=login" method="post">
                <div class="input">
                    <label for="email">Email</label>
                    <input type="text" name="mail" id="nom" placeholder="Email">
                </div>
                <div class="separation"></div>
                <div class="input">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="password" placeholder="Mot de passe">
                </div>
                <div class="input">
                    <input class="button" type="submit" value="Se connecter">
                </div>
            </form>
            <?php
            } else {
                echo "Vous êtes déjà connecté !"; } ?>
        </div>

    </div>
