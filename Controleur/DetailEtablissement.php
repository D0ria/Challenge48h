<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.insert.inc.php";
include_once "$racine/modele/bd.etablissement.inc.php";
include_once "$racine/modele/bd.commentaire.inc.php";

// recuperation des donnees GET, POST, et SESSION
$id = $_POST['id'];

if (isset($_POST['Nom'])){
    $Nom = $_POST["Nom"];
    $Commentaire = $_POST["Commentaire"];
    $Prix = $_POST["Prix"];
    $Note = $_POST["Note"];

    $result = getinsertByIdR($Nom,$Commentaire,$Prix,$Note,$id);
}

// traitement si necessaire des donnees recuperees
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$detailEtablissement = getDetailEtablissement($id);
$commentaire = getDetailCommentaire($id);

// appel du script de vue qui permet de gerer l'affichage des donnees
// $titre = "Liste des Modeles répertoriés";
include "$racine/Vue/entete.php";
include "$racine/Vue/DetailEtablissement.php";
include "$racine/Vue/pied.php";



?>
