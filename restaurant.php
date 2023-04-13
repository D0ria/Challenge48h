<?php
 namespace restaurant;
 use connexion\connexion;

class products extends connexion
{
    function affichage_produit()
    {
        $connect = $this->host();
        $produits = $connect->query("SELECT * FROM etablissement ORDER BY Id DESC");
        foreach ($produits as $i) {
            echo $i["Id"], " ", $i["Nom"], " ", $i["Adresse"], " ", $i["Lattitude"], " ", $i["Longitude"], " ", $i["Type"], " ", $i["Notemoyenne"]," ",$i["Prixmoyen"]," ",$i["Idcampus"];
            echo "<br>";
        }
    }
}
?>