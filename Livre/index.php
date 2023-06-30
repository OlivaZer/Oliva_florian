
<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Définir une fonction pour afficher la bibliographie d'un auteur
function afficherBibliographie(Auteur $auteur) {
    // Créer un tableau contenant les livres de l'auteur

    $livres = [
        // Création d'un objet Livre pour le livre 'Ca'
        new Livre('Ca', '1138', '1986', '20', $auteur),
        // Création d'un objet Livre pour le livre 'Simetierre'
        new Livre('Simetierre', '374', '1983', '15', $auteur),
        // Création d'un objet Livre pour le livre 'Le Fléau'
        new Livre('Le Fléau', '823', '1978', '14', $auteur),
        // Création d'un objet Livre pour le livre 'Shining'
        new Livre('Shining', '447', '1977', '16', $auteur),
    ];

    // Afficher le titre de la bibliographie avec le nom de l'auteur
    echo 'Bibliographie de ' . $auteur->toString() . ':<br><br>';

    // Parcourir les livres et afficher leurs détails
    foreach ($livres as $livre) {
        // Afficher le titre du livre
        echo 'Titre : ' . $livre->getTitre() . '<br>';
        // Afficher l'année de publication du livre
        echo 'Année : ' . $livre->getAnnee() . '<br>';
        // Afficher le nombre de pages du livre
        echo 'Pages : ' . $livre->getPages() . ' pages' . '<br>';
        // Afficher le prix du livre
        echo 'Prix : ' . $livre->getPrix() . ' €<br><br>';
    }
}

// Créer un objet Auteur avec le nom "King" et le prénom "Stephen"
$auteur = new Auteur('King', 'Stephen');

// Afficher la bibliographie de l'auteur
afficherBibliographie($auteur);

?>