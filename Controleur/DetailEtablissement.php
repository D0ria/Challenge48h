<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.etablissement.inc.php";

// recuperation des donnees GET, POST, et SESSION

// traitement si necessaire des donnees recuperees
$id = $_POST['id'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$detailEtablissement = getDetailEtablissement($id);

// appel du script de vue qui permet de gerer l'affichage des donnees
// $titre = "Liste des Modeles répertoriés";
include "$racine/Vue/entete.php";
include "$racine/Vue/DetailEtablissement.php";
include "$racine/Vue/pied.php";



?>
