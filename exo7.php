<h1>Exo 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
</p>

<?php
$age = 10;

    if ($age >= 12){
        echo "Cadet";
    }
        elseif($age > 9){
            echo "Minime";

        }
        elseif( $age > 7 ){
            echo " Pupille";
        }

        else{
            echo " Poussin";
        }