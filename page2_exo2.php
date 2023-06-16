<h1>Exo2_page2</h1>

<p>
Soit le tableau suivant :
$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.

Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

Affichage

Pays Capitale
ALLEMAGNE Berlin
FRANCE Paris
ITALIE Rome
USA Washington
</p>

<h2>Résultat</h2>

<?php

 //Création du mon tableau " array " avec une clef " première colone " et de sa valeur " deuxième colone "

    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    );

    // Appel de la fonction " afficherTableHTML" pour afficher le tableau HTML
            afficherTableHTML($capitales);
    


    function afficherTableHTML($capitales) {
        
        // Utilisation de la fonction "ksort()" pour trier le tableau $capitales par ordre alphabétique 
        ksort($capitales);
        // Utilisation de la balise <table> pour créer un tableau HTML
        echo "<table>";
        // Création des ligne du tableau $capitales
        echo "<tr><th>Pays</th><th>Capitale</th></tr>";
        
    
        foreach ($capitales as $pays => $capitale) {
            // Convertier des mots en MAJUSCULE avec la fonction "strtoupper"
            $paysMajuscules = strtoupper($pays);
            
            // On ajoute la une ligne avec les variable $paysMajuscules et $capitales
            echo "<tr><td>$paysMajuscules</td><td>$capitale</td></tr>";
        }
            
        
    }

        




