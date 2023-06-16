<h1>Exo1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.

Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;

Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE
</p>


<h2>Résultat</h2>

<?php

$texte = "Mon texte en paramètre";
convertirMajRouge($texte);

// Définition de ma fonction  convertirMajRouge qui s'applique sur ma variable $texte
function convertirMajRouge($texte) {
    // utilisation de la fonction mb_strtroupper pour mettre le texte de ma variable $texte en MAJUDSCULE
    $texteMajuscule = mb_strtoupper($texte);
    // création de la variable $texteRouge pour passer la variable $texteMajuscule en rouge en lui applicant du style css 
    $texteRouge = "<span style='color:red;'>{$texteMajuscule}</span>";
    // Affichage de ma variable $texteRouge
    echo $texteRouge;
}



?>



