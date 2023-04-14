<?php

include_once "bd.inc.php";

function getDetailCommentaire($idEtablissement) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select Nom, Commentaire, Prix, Note from commentaire where Idetablissement=:id");
        $req->bindValue(':id', $idEtablissement, PDO::PARAM_INT);

        $req->execute();

        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $ligne;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    if(isset($resultat))
        return $resultat;
    else
        return "Aucun commentaire pour l'instant";
}

// function getCommentaire() {
//     $resultat = array();

//     try {
//         $cnx = connexionPDO();
//         $req = $cnx->prepare("select Nom, Commentaire, Prix, Note from commentaire;");
//         $req->execute();

//         while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
//             $resultat[] = $ligne;
//         }
//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage();
//         die();
//     }
//     return $resultat;
// }
