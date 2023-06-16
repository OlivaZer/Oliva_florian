<h1>Exo3</h1>

<p>

</p>

<h2>Résultat</h2>

<?php
    //Création de la variable $lien qui contient l'url du site Elan
    $lien = "https://elan-formation.eu/accueil";
     
?>  
    <!-- Création de la structure HTML-->
        <!DOCTYPE html>
        <html>
        <head>
            <title>Lien hypertexte avec _blank</title>
        </head>
        <body>
            <h4>Elan Formation :</h4>
         <!-- Je lui précise qu'il doit afficher mon lien contenu dans la variable $lien  avec " < ?php echo $lien; ?>" -->

            <a href="<?php echo $lien; ?>" target="_blank">Accéder au lien</a> <!-- target=_blank servira à ouvrir le lien dans une autre fenêtre-->
        </body>
        </html>
