<h1>Exo15</h1>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
    adresse e-mail a le bon format. <br>
    Affichage <br>
    L’adresse elan@elan-formation.fr est une adresse e-mail valide<br>
    L’adresse contact@elan est une adresse e-mail invalide
</p>

<h2>
    Résultat
</h2>

  <?php 

        $email1 = 'elan@elan-formation.fr'; // Déclaration de la première adresse e-mail à vérifier
        $email2 = 'contact@elan'; // Déclaration de la deuxième adresse e-mail à vérifier

        // Vérification de la première adresse e-mail
        //FILTER_VALIDATE_EMAIL indique à la fonction filter_var() de valider l'adresse e-mail en vérifiant si elle correspond au format attendu d'une adresse e-mail valide.
        if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse $email1 est une adresse e-mail valide <br>";
        } else {
            echo "L'adresse $email1 est une adresse e-mail invalide <br>";
        }

        // Vérification de la deuxième adresse e-mail
        if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse $email2 est une adresse e-mail valide <b>";
        } else {
            echo "L'adresse $email2 est une adresse e-mail invalide <br>";
        }
        ?>
        



