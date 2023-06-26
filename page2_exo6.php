<h1>Exo6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle"); alimenterListeDeroulante($elements);</p>


<h2>Résultat</h2>


<?php
    // Définition des éléments de la liste déroulante
    $elements = array("Monsieur", "Madame", "Mademoiselle");
    // // Appel de la fonction pour générer la liste déroulante
    $listeDeroulante = alimenterListeDeroulante($elements);

    function alimenterListeDeroulante($elements) {
        //Début de la balise de la liste déroulante
        $html = '<select>';
        // Parcours de chaque élément du tableau
        foreach ($elements as $valeur) {
            //Ajout des options à la liste déroulante
            $html .= '<option value="' . $valeur . '">' . $valeur . '</option>';
        }
        $html .= '</select>';
        // Fin de la balise de la liste déroulante 
        return $html;
    }

    // affichage de la liste déroulante 
    echo $listeDeroulante;