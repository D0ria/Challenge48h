<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Accueil.css">
    <title>YnoResto</title>
</head>

<body>
    <div class="conn_div">
        <a href="/Login.php" class="login">Connexion</a>
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

</body>

</html>