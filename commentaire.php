<?php
        require "ConnexionDB.php";
        use connexion\connexion;
        $connexion = new connexion(); 
            $Nom = $_POST["Nom"];
            $Commentaire = $_POST["Commentaire"];
            $Prix = $_Post["Prix"];
            $Note = $_POST["Note"];
            $newuser = $conn->query("INSERT INTO commentaire (Nom, Commentaire, Prix,Note) VALUES ('$Nom', '$Commentaire', '$Prix','$Note')");
           // print($newuser);
            require __DIR__ ."/Accueil.html";
        ?>