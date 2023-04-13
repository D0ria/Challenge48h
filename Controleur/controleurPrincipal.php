<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "Accueil.php";
    $lesActions['InsertCommentaire'] = "InsertCommentaire.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>
