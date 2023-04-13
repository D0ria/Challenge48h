<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.insert.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST['Nom'])){
    $Nom = $_POST["Nom"];
    $Commentaire = $_POST["Commentaire"];
    $Prix = $_POST["Prix"];
    $Note = $_POST["Note"];

    $result = getinsertByIdR($Nom,$Commentaire,$Prix,$Note);

}

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Ajout Commentaire";
include "$racine/vue/entete.php";
include "$racine/vue/InsertCommentaire.php";
include "$racine/vue/pied.php";


?>