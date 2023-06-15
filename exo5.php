<h1>Exo 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales</p>

<h2>Résultat:</h2>

<?php

$francs = 100;
$moitier = $francs + 50;
$euros = round ($moitier / 10 );
echo " 100 francs = $euros euros";