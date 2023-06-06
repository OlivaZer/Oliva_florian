<h1>Exo 8:</h1>

<p> Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :
</p>

<h2>Résultat :</h2>

<?php
$nb = 8;
$multiple = 1 ;
$resultat = $nb * $multiple;

/*while ($multiple <= 10){
        $resultat = $nb * $multiple;
        echo " $nb * $multiple = $resultat <br> ";
        $multiple++;
    }*/

    


for ($multiple = 1; $multiple <= 10; $multiple++){
    $resultat = $nb * $multiple;
    echo "$nb * $multiple = $resultat <br>";
        
    }