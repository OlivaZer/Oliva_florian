<h1>Exo12</h1>

<p>
La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

</p>

<h2>Résultat</h2>

<?php
    $tableauValeurs = array(true,
     "texte",
      10, 25.369,
        array("valeur1",
              "valeur2"
        ));

    // Balise <pre> pour le formatage en colonne
    echo "<pre>"; 
    
        foreach ($tableauValeurs as $valeur) {
            var_dump($valeur);
        }
    // Fermeture de la balise <pre>
    echo "</pre>";