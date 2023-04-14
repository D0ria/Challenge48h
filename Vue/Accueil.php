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
                <input type="radio" name="campus" value="jeanmace" onclick="showDiv('option1')">
                Jean Mace
            </label>
            <label>
                <input type="radio" name="campus" value="perrache" onclick="showDiv('option2')">
                Perrache
            </label>
            <label>
                <input type="radio" name="campus" value="villeurbane" onclick="showDiv('option3')">
                Villeurbane
            </label>
        </div>
    </div>

    <div class="map">
        <div id="option1" style="display:none">
            <iframe width="100%" height="500px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/jean-mace_899436?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <p class="fullscreen"><a href="//umap.openstreetmap.fr/fr/map/jean-mace_899436">Voir en plein ecran</a></p>
        </div>
        <div id="option2" style="display:none">
            <iframe width="100%" height="500px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/nouveau-campus_899565?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <p class="fullscreen"><a href="//umap.openstreetmap.fr/fr/map/nouveau-campus_899565">Voir en plein ecran</a></p>

        </div>
        <div id="option3" style="display:none">
            <iframe width="100%" height="500px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/campus-impulse-villeurbane_899509?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <p class="fullscreen"><a href="//umap.openstreetmap.fr/fr/map/campus-impulse-villeurbane_899509">Voir en plein ecran</a></p>
        </div>
    </div>

    <div id=etablissement>
        <?php foreach ($listeRestau as $key => $value) : ?>
            <div class="vignette">
                <div class="vignette_div">
                    <span class="vignette_title"><?= $value['Nom'] ?></span><br>
                    <?= $value['Adresse'] ?><br>
                    <?= $value['Type'] ?><br>
                    <?= $value['Notemoyenne'] ?><br>
                    <?= $value['Prixmoyen'] ?> € <br>
                </div>
                <div class="vignette_form">
                    <form method="post" action="./?action=detailEtablissement">
                        <input type="hidden" name="id" value="<?= $value['Id'] ?>">
                        <input class="detail" type="submit" value="Voir Detail">
                    </form>
                </div>

            </div>
        <?php endforeach ?>
    </div>

    <a href="./?action=InsertCommentaire">Commenter</a>

    </body>

    </html>

    <script>
        function showDiv(divId) {
            // Masquer toutes les div
            document.getElementById('option1').style.display = 'none';
            document.getElementById('option2').style.display = 'none';
            document.getElementById('option3').style.display = 'none';

            // Afficher la div correspondante
            document.getElementById(divId).style.display = 'block';
        }
    </script>