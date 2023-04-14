<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// else{include "./getRacine.php";}

include_once "$racine/modele/bd.etablissement.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

$listeRestau = getEtablissement();

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
// $titre = "Liste des Modeles répertoriés";
include "$racine/vue/entete.php";
include "$racine/vue/Accueil.php";
include "$racine/vue/pied.php";
