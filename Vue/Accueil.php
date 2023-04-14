    <div class="login_div">
        <a href="./?action=login" class="login">Connexion</a>
    </div>
    <div class="title_div">
        <h1 class="title">YnoResto</h1>
        <div class="image_devise">
            <img class="image" src="assets/image.png" alt="image de fond">
            <div class="devise">
                <div class="devise_text">
                    <p>Trouve</p>
                </div>
                <div class="devise_text2">
                    <p>Note</p>
                </div>
                <div class="devise_text3">
                    <p>A proximite</p>
                </div>
            </div>
        </div>
    </div>

    <div class="choose_div">
        <div class="choose_title">
            <p>Choisis ton campus</p>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="campus" value="jeanmace">
                Jean Mace
            </label>
            <label>
                <input type="radio" name="campus" value="perrache">
                Perrache
            </label>
            <label>
                <input type="radio" name="campus" value="villeurbane">
                Villeurbane
            </label>
        </div>
    </div>

    <div class="map">
        <div class="map_left">

        </div>
        <div class="map_right">

        </div>

    </div>

    <div>
        <?php foreach ($listeRestau as $key => $value) : ?>
            <div class="vignette">
            <fieldset>
                <?= $value['Nom'] ?> | <?= $value['Adresse'] ?><br>
                <?=  $value['Type'] ?> | <?=  $value['Notemoyenne'] ?><br>
                <?=  $value['Prixmoyen'] ?>  € <br>
                <form method="post" action="./?action=detailEtablissement">
                    <input type="hidden" name="id" value="<?= $value['Id'] ?>">
                    <input type="submit" value="Voir Detail">
                </form>
            </fieldset>
            </div>
        <?php endforeach ?>
    </div>
