<h1>Exo 4</h1>
 
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php

//strrev() pour inverser une chaine de caractère
//str_replace (" ","",$variable_à_modifier)
//strtolower() pour passer la chaine de caractère en minuscule

$phrase = "Engage le jeu que je le gagne ";
//$palindrome = str_replace ( " ", "" ,$phrase);
//echo $palindrome;
$palindrome =  str_replace(" ", "",strtolower(strrev($phrase))); // formule pour enchainer plusieurs instructions.

echo "$palindrome <br>" ;
    if ($phrase == $palindrome ){
        echo "c'est un palindrome <br> ";
    }

    else {
        echo "ce n'est pas un palindrome <br>";
    }