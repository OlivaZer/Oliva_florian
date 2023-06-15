<h1>exo12</h1>

<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat</h2>

<?php

    function direBonjour($personnes){
        foreach ($personnes as $prenom => $langue){
            switch ($langue){
                case'FRA' :
                    echo "Salut, $prenom !<br>";
                break;
                    case 'ENG' : 
                echo "Hello, $prenom ! <br>";
                break;
                    case 'ESP' :
                echo "Hola, $prenom ! <br>";
                
                
    
            }
                

        }

    }

$personnes = array (
'Mickael' => "FRA",
'Virgile' => "ESP",
'Marie-Claire' => "ENG"
);

direBonjour ($personnes);


 
    

        




  

 