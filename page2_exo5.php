<h1>Exo5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville"); afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php
// Définition du tableau et de ses noms de champs d'entré que je souhaite afficher dans mon formulaire 
$nomsInput = array("Nom", "Prénom", "Ville");
//Cette ligne appelle la fonction afficherInput en passant le tableau $nomsInput en tant que paramètre. Cela affichera le formulaire avec les champs d'entrée correspondants.
afficherInput($nomsInput);

// deéfinition de la fonction afficherInput
function afficherInput($nomsInput) {
    
    echo '<form method="post">';
    //Cette ligne débute une boucle foreach qui itère sur chaque élément du tableau $nomsInput. À chaque itération, la valeur de l'élément courant est stockée dans la variable $nom.
    foreach ($nomsInput as $nom) {
        echo '<label for="' . $nom . '">' . $nom . ':</label>';
        echo '<input type="text" name="' . $nom . '" id="' . $nom . '"><br>';
    }
    
    //echo '<input type="submit" value="Envoyer"></form>';
}