<?php

include_once "bd.inc.php";

function getEtablissementById($id) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from modele where idmodele=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEtablissement() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select Nom, Adresse, Type, Notemoyenne, Prixmoyen from etablissement;");
        $req->execute();

        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $ligne;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
