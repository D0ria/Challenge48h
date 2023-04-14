<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vue/css/DetailEtablissement.css">
</head>

<body>
    <div class="detail_div">
        <div class="retour">
            <a href="./?action=defaut">
                <p>retour</p>
            </a>
        </div>
        <div class="titre">
            <h1>Detail de l'établissement <?= $detailEtablissement['Nom'] ?> </h1>
        </div>
        <div class="cadre_div">
            <div class="image">
                <img src="<?= $detailEtablissement['Logo'] ?>">
            </div>
            <div class="cadre">
                <div class="left">
                    <p><?= $detailEtablissement['Nom'] ?></p>
                    <p><?= $detailEtablissement['Adresse'] ?></p>
                    <p><?= $detailEtablissement['Type'] ?></p>
                    <p><?= $detailEtablissement['Notemoyenne'] ?> /5</p>
                    <p><?= $detailEtablissement['Prixmoyen'] ?> €</p>
                    <a href="<?= $detailEtablissement['Carte'] ?>" target="_blank">Voir Carte</a>
                </div>
            </div>
        </div>

    </div>

    <div class="commentaire">
        <h1>Commentaire</h1>
    </div>

    <form action="./?action=detailEtablissement" method="post" class="envoiform">
        <div class="input">
            <label>Nom:</label>
            <input type="text" name="Nom" required>
        </div>
        <div class="input">
            <label>Commentaire:</label>
            <input type="text" name="Commentaire" required>
        </div>
        <div class="input">
            <label>Prix (€):</label>
            <input type="text" name="Prix" required>
        </div>
        <div class="input">
            <label>Note (/5):</label>
            <input type="range" step="1" name="Note" min="0" max="5" required>
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="taille">
            <input type="submit" value="Envoie" class="submit">
        </div>
    </form>

    <div class="com">
        <?php if ($commentaire != "Aucun commentaire pour l'instant") {
            foreach ($commentaire as $key => $value) : ?>
                <div class="vignette">
                    <fieldset>
                        <?= $value['Nom'] ?> <br>
                        <?= $value['Commentaire'] ?> <br>
                        <?= $value['Prix'] ?> € <br>
                        <?= $value['Note'] ?> € <br>
                    </fieldset>
                </div>
            <?php endforeach;
        } else {
            ?> Aucun commentaire pour l'instant... <?php
                                                } ?>
    </div>