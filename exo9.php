<h1>Exo 9</h1>

<p> Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
..
<h2>Résultat :</h2>

<?php


$age = 18;
$sex = "H";

    if ($sex =="H" || $sex == "F"){
        if ($sex == "F" and $age >=18 and $age <=25   ){
            echo "imposable";
        }
        elseif($sex == "H" and $age >= 20  ){
            echo "imposable";
        }

        else{
            echo "pas imposable";
        }

    }

    