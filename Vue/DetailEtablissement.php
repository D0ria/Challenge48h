<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vue/css/DetailEtablissement.css">
</head>
<body>
<div>
    <h1>Detail de l'établissement <?= $detailEtablissement['Nom'] ?> </h1><br><br>
    <div class="cadre">
            <div class = "left">
                <img src="<?=  $detailEtablissement['Logo'] ?>" > <br>
                <?= $detailEtablissement['Nom'] ?><br>
            </div>
            <div class = "right">
                <?= $detailEtablissement['Adresse'] ?><br>
                <?=  $detailEtablissement['Type'] ?><br>
                <?=  $detailEtablissement['Notemoyenne'] ?> /5<br>
                <?=  $detailEtablissement['Prixmoyen'] ?>  €<br>
                <a href="<?=  $detailEtablissement['Carte'] ?>" target="_blank">Voir Carte</a><br>
            </div>
    </div>
</div>

<form action="./?action=detailEtablissement" method="post" class="envoiform">
    <label>Nom:</label>
    <input type="text" name="Nom" required><br>
    <label>Commentaire:</label>
    <input type="text" name="Commentaire" required><br>
    <label>Prix:</label>
    <input type="text" name="Prix" required>€<br>
    <label>Note:</label>
    <input type="range" step="0.5" name="Note" min="0" max="5" required>/5<br>
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class = "taille"><input type="submit" value="Envoie" class="submit"></div>
</form>

<div class="com">
    <?php if($commentaire != "Aucun commentaire pour l'instant"){
        foreach ($commentaire as $key => $value) : ?>
            <div class="vignette">
                <fieldset>
                    <?= $value['Nom'] ?> <br>
                    <?=  $value['Commentaire'] ?> <br>
                    <?=  $value['Prix'] ?>  € <br>
                    <?=  $value['Note'] ?>  € <br>
                </fieldset>
            </div>
        <?php endforeach; 
        } 
        else {
            ?> Aucun commentaire pour l'instant... <?php
        } ?>
</div>



