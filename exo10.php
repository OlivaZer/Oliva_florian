<h1>Exo 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>


<h2>Résultat</h2>

<?php

$montant_à_payer = 152;
$somme_verser = 200;
$monnaie = $montant_à_payer - $montant_versé; 
$compteur = 0;


    while( $monnaie >= 10){
        $monnaie = $monnaie - 10;
        $compteur = $compteur + 1;
        echo "$compteur billets de 10 euros";

    }

    while ( $monnaie >= 5 ){
        $monnaie = $monnaie - 5;
        $compteur = $compteur + 1;
        echo "$compteur billet de 10 euros ";
    }

    while ( $monnaie >=2 ){
        $monnaie = $monnaie -2;
        $compteur = $compteur +1;
        echo "$compteur pièces de 2 euros";
    }

    while ($monnaie >=1 ){
        $monnaie = $monnaie - 1;
        $compteur = $compteur +1;
        echo "$compteur pièces de 1 euro";
    }

     
    



