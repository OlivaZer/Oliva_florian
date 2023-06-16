<?php

$montantAPayer = 152;
$montantVerse = 200;

$resteAPayer = $montantVerse - $montantAPayer;

$billets10 = 0;
$billets5 = 0;
$pieces2 = 0;
$pieces1 = 0;


while ($resteAPayer > 0) {
    if ($resteAPayer >= 10) {
        $resteAPayer -= 10;
        $billets10++;
    } elseif ($resteAPayer >= 5) {
        $resteAPayer -= 5;
        $billets5++;
    } elseif ($resteAPayer >= 2) {
        $resteAPayer -= 2;
        $pieces2++;
    } elseif ($resteAPayer >= 1) {
        $resteAPayer -= 1;
        $pieces1++;
    }
}


echo "Rendu de monnaie :\n";
echo $billets10 . " billets de 10 €\n";
echo $billets5 . " billet de 5 €\n";
echo $pieces2 . " pièce de 2 €\n";
echo $pieces1 . " pièce de 1 €\n";
?>


