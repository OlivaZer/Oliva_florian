<h1>Exo13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

    $notes =[10,12,8,19,3,16,11,13,9];
    $nbNote = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round ($sommeNotes / $nbNote,2 );

    echo "la moyenne générale est de $moyenne <b>";
