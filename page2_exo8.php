<h1>Exo8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :
repeterImage($url,4);

</p>

<h2>Résultat</h2>

    <?php
   
    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    $nombreDeFois = 4;
    

    function repeterImage($url,$nombreDeFois) {

        for ($i = 0; $i < $nombreDeFois; $i++ ) {
           echo  "<img src='$url' alt='Image'>";

        }
 
    }
    repeterImage($url,$nombreDeFois);


    ?>

    