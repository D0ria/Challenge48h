<div>
    <h1>Detail de l'établissement <?= $detailEtablissement['Nom'] ?> </h1><br><br>
    <div class="vignette">
        <fieldset>
            <?= $detailEtablissement['Nom'] ?><br>
            <?= $detailEtablissement['Adresse'] ?><br>
            <?=  $detailEtablissement['Type'] ?><br>
            <?=  $detailEtablissement['Notemoyenne'] ?><br>
            <?=  $detailEtablissement['Prixmoyen'] ?>  € <br>
            <img src="<?=  $detailEtablissement['Logo'] ?>" > <br>
            <a href="<?=  $detailEtablissement['Carte'] ?>" target="_blank">Voir Carte</a> <br>
        </fieldset>
    </div>
</div>

<div>
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

<form action="./?action=detailEtablissement" method="post">
    <label>Nom:</label>
    <input type="text" name="Nom" required><br>
    <label>Commentaire:</label>
    <input type="text" name="Commentaire" required><br>
    <label>Prix:</label>
    <input type="text" name="Prix" required>€<br>
    <label>Note:</label>
    <input type="text" name="Note" required>/5<br>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Envoie">
</form>