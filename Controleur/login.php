<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.admin.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["mdp"])){
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    login($mail,$mdp);

    if(isLoggedOn())
    {
        $title = "Connecté";
        include "$racine/Controleur/Accueil.php";
    }
    else
    {
        $titre = "Authentification";
        // include "$racine/vue/entete.php";
        include "$racine/Vue/Login.php";
        include "$racine/Vue/pied.php";
    }
}
else
{
    // on affiche le formulaire de connexion
    $titre = "Authentification";
    // include "$racine/vue/entete.php";
    include "$racine/Vue/Login.php";
    include "$racine/Vue/pied.php";
}

?>