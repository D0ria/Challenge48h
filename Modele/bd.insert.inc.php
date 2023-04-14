<?php

include_once "bd.inc.php";
function getinsertByIdR($Nom,$Commentaire,$Prix,$Note,$Id) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into commentaire (Nom,Commentaire,Prix,Note,Idetablissement)
        values(:Nom,:Commentaire,:Prix,:Note,:Id);");
        $req->bindValue(':Nom', $Nom, PDO::PARAM_STR);
        $req->bindValue(':Commentaire', $Commentaire, PDO::PARAM_STR);
        $req->bindValue(':Prix', $Prix, PDO::PARAM_STR);
        $req->bindValue(':Note', $Note, PDO::PARAM_STR);
        $req->bindValue(':Id', $Id, PDO::PARAM_INT);

        $req->execute();

        $result = 'Insertion réussite';

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        $result = "Echec de l'insertion";
        die();
    }
    return $result;
}
