<h1>Exo7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
    dans le tableau associatif si la case est cochée ou non.<br>
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résulstat</h2>


<?php
    // Initialisation du tableau d'éléments avec leurs valeurs booléennes
    $elements = array(
        'Option 1' => true,
        'Option 2' => false,
        'Option 3' => true
    );
    
    genererCheckbox($elements);

    // Définition de la fonction pour générer les cases à cocher
    function genererCheckbox($elements) {
    // Parcours de chaque élément du tableau
        foreach ($elements as $label => $coche) {
            // Vérifie si la case doit être cochée
            $checked = $coche ? 'checked' : ''; 
             // Affichage de l'élément de case à cocher avec son label
            echo '<input type="checkbox" name="' . $label . '" ' . $checked . '>';
             // Affichage du label de l'élément
            echo $label . '<br>';
        }
    }