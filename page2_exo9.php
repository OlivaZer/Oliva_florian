<h1>Exo9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :
afficherRadio($nomsRadio);

</p>

<h2>Résultat</h2>

<?php

    $nomsRadio = array(
    "Masculin",
    "Féminin ",
    "Autre");

        //function afficherRadio($valeur){
                    //foreach($valeurs as $valeur){
                    // echo '<input type="radio" name="raduiButton" value="'.$valeur.'" > '.$valeur '.<br> ;                 
                    //}

            function afficherRadio($valeurs) {
                foreach ($valeurs as $valeur) {
                    echo '<input type="radio" name="radioButton" value="' . $valeur . '">' . $valeur . '<br>';
                }
             }

       afficherRadio ($nomsRadio);

        ?>

       