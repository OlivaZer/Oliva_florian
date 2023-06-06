<h1>Exo 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2> Résultat :</h2>

<?php

$TVA = 0.2;
$nbArticle = 5;
$prixHT = 9.99;
$text = "Prix unitaire de l’article";
$text2 = "Quantité ";
$text3 = "Taux de TVA";
$text4 = "Le montant de la facture à regler est de :";

$totalTTC = $nbArticle * $prixHT * (1 + $TVA);
echo "$text : $prixHT <br> $text2 : $nbArticle <br> $text3 : $TVA <br> $text4 $totalTTC ";
//echo  "Le montant de la facture à régler est de : $totalTTC €";



