<h1>Exo 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/

Le tableau passé en argument sera le suivant :

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>


<h2>Résultat</h2>

<?php

 //Création du mon tableau " array " avec une clef " première colone " et de sa valeur " deuxième colone "

    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "Espagne" => "Madrid",
        "USA" => "Washington",
        "Italie" => "Rome"
    );

    // Création de la variabl
    $lien = "https://fr.wikipedia.org/wiki/Wikipédia:Accueil_principal";

    // Appel de la fonction " afficherTableHTML" pour afficher le tableau HTML
            afficherTableHTML($capitales);
    


    function afficherTableHTML($capitales) {
        
        // Utilisation de la fonction "ksort()" pour trier le tableau $capitales par ordre alphabétique 
        ksort($capitales);

        ksort($lien);

        

        // Utilisation de la balise <table> pour créer un tableau HTML
        echo "<table>";

        // Création des ligne du tableau $capitales
        echo "<tr><th>Pays</th><th>Capitale</th><th>Lien Wiki</th></tr>";
        
    
        foreach ($capitales as $pays => $capitale) {

            // Convertier des mots en MAJUSCULE avec la fonction "strtoupper"
            $paysMajuscules = strtoupper($pays);
            
            
            // On ajoute la une ligne avec les variable $paysMajuscules et $capitales
            echo "<tr><td>$paysMajuscules</td><td>$capitale</td>$lien</tr>";
        }
            
        
    }

