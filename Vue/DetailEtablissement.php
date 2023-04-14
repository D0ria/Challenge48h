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