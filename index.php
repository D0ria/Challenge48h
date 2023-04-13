<?php
use restaurant\products;
$serveur = $_SERVER['REQUEST_URI'];
switch($serveur){
    case '/':
        require __DIR__ ."/Accueil.html";
        $allproduct = new products();
        $allproduct->affichage_produit();
        break;
    case '/commentaire':
        require __DIR__ . "/commentaire.html";

        break;
    default:
        echo "Error 404";
}
?>