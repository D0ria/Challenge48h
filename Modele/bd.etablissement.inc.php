<?php

include_once "bd.inc.php";

function getDetailEtablissement($id) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from etablissement where id=:id");
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
