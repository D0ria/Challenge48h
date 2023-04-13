<?php
$serveur = $_SERVER['REQUEST_URI'];
switch($serveur){
    case '/':
        require __DIR__ ."/Front/Accueil.html";
        break;
    // case '/Tirage.html.php':
    //     require __DIR__ . "/Tirage.html.php";

        // break;
    default:
        echo "Error 404";
}
?>