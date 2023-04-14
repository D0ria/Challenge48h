<?php

include_once "bd.inc.php";

function getUtilisateurs() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from admin");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByMail($mail){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select Nom, Email, Mdp from admin where Email=:mail");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


// function inscription($mail, $mdp, $admin) 
// {
//     $cnx = connexionPDO();
//     $req = $cnx->prepare("INSERT INTO admin VALUES(''+$admin+','+$mail+','+$mdp');");
//     $req->execute();
// }

function login($mail, $mdp) 
{
    if (!isset($_SESSION)) 
    {
        session_start();
    }

    $util = getUtilisateurByMail($mail);

    $mdpBD = $util["Mdp"];

    // if (trim($mdpBD) == trim(crypt($mdp, $mdpBD))) 
    if (trim($mdpBD) == trim($mdp))
    {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["Email"] = $mail;
        $_SESSION["Mdp"] = $mdpBD;
    }
}

function logout() 
{
    if (!isset($_SESSION)) 
    {
        session_start();
    }

    unset($_SESSION["Email"]);
    unset($_SESSION["Mdp"]);
    session_destroy();
}

function isLoggedOn() 
{
    $ret = false;
    
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION["Email"])) {
        $util = getUtilisateurByMail($_SESSION["Email"]);
        if ($util["Email"] == $_SESSION["Email"] && $util["Mdp"] == $_SESSION["Mdp"]) {
            $ret = true;
        }
    }
    return $ret;
}

function getMailULoggedOn()
{
    if (isLoggedOn()){
        $ret = $_SESSION["Email"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

?>