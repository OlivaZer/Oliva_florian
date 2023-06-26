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


    // Appel de la fonction " afficherTableHTML" pour afficher le tableau HTML
            afficherTableHTML($capitales);
    


            function afficherTableHTML($capitales) {
                ksort($capitales);
                echo "<table>";
                echo "<tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien wiki</th>
                    </tr>";
                    
                foreach ($capitales as $pays => $capitale) {
                    $paysMajuscules = strtoupper($pays);
                    $capitaleWiki = strtolower(str_replace(' ', '_', $capitale));
                    $wikiURL = "https://fr.wikipedia.org/wiki/".$capitaleWiki;
                    
                    echo "<tr>
                            <td>$paysMajuscules</td>
                            <td>$capitale</td>
                            <td><a href='$wikiURL'>Wiki</a></td>
                        </tr>";
                }
                
                echo "</table>";
            }