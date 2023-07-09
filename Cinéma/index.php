<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Introduction POO - Exo - Cinema - Exo 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
</head>

<body>
    <h1>Introduction POO - Exo - Cinema - Exo 3</h1>
    <p> <b>Consignes : </b><br>
    Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
    </p>
    <h2>Affichage :</h2>

    <?php

    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
    });
    
    
    
    //Mes genres
    $drame = new Genre("drame");
    $comedie = new Genre("comedie");
    $action = new Genre("action");
    $historique = new Genre("historique");
    
    //Mes réalisateurs
    $realisateur1 = new Realisateur("Besson", "Luc", "Homme", "1959-03-18");
    $realisateur2 = new Realisateur ("Campbell","Martin","Homme","1943-09-24");
    $realisateur3 = new Realisateur ("Fukunaga","Cary Joji","Homme", "1970-07-10");
    $realisateur4 = new Realisateur ("Spielberg", "Steven", "Homme", "1946-12-18");
    

    //Mes acteurs
    $acteur1 = new Acteur("Reno", "Jean", "Homme", "1948-07-30");
    $acteur2 = new Acteur ("Brosnan","Pierce","Homme","1953-04-16");
    $acteur3 = new Acteur ("Craig","Daniel","Homme", "1968-03-02");
    $acteur4 = new Acteur ("Hanks", "Tom", "Homme", "1956-07-09");
    $acteur5 = new Acteur ("Neeson", "Liam", "Homme", "1952-06-07");
    $acteur6 = new Acteur ("Willis", "Bruce", "Homme","1955-03-19");

    //Mes role
    $role1 = new Role ("Léon");
    $role2 = new Role ("James Bond");
    $role3 = new Role ("Capitaine John H.Miller");
    $role4 = new Role ("Korben Dallas");


    //Mes films

    $film1 = new Film("Léon", "1994", $realisateur1, 125 , "La rencontre entre Jean Reno (Léon) et Natalie Portman ( Mathilda ) ", $drame);
    //Acteur:Jean Reno //Role: Leon

    $film2 = new Film("James Bond Goldeneyes", "1995", $realisateur2 , 86 , "Première apparition de Pierces Brosnan dans un James Bond", $comedie);
    //Acteur: Pierce Brosnan //Role: James Bond

    $film3 = new Film("James Bond No time to die", "2021", $realisateur3 , 106 , "Le dernier James Bond avec Daniel Craig comme acteur", $action);
    //Acteur: Daniel Craig //Role: James Bond

    $film4 = new Film("Il faut sauver le soldat Ryan", "1998", $realisateur4, 95 , "Mais où est passé le soldat James Francis Ryan ?", $historique );
    //Acteur:Tom Kanks //Role: Capitaine John H.Miller

    $film5 = new Film("Le cinquième Elément","1997", $realisateur1, 126 , "De l'Egype au taxi de Bruce Willis", $drame);
    //Acteur: Bruce Willis //Role: Korben Dallas

    $film6 = new Film("La liste de Schindler's","1993", $realisateur4, 187 , "Liam Neeson pouurat-il tous les sauver ?", $drame);
    //Acteur: Liam Neeson  //Role: Oskar Schindler

    //Casting

    $casting1 = new Casting ($acteur1, $film1, $role1);
    $casting2 = new Casting ($acteur3, $film3, $role2);
    $casting4 = new Casting ($acteur2, $film2, $role2);
    $casting3 = new Casting ($acteur4, $film4, $role3);
    $casting5 = new Casting ($acteur6, $film5, $role4);
    $casting6 = new Casting ($acteur4, $film6, $role2);

    //Mes resultat de test
    //film1 et film4, meme acteur + femme
    //film2 et film3, meme role
    //film1 et film5, meme realisateur
    //film5 et film6, meme genre, meme acteur, meme role


    //**Methode d'affichage */

    //Variables
    $afficherFilms = [ $film1, $film2, $film3, $film4, $film5, $film6 ];

    //functions
    function afficherTousFilms($afficherFilms) {
        foreach ($afficherFilms as $afficherFilm) {
            echo '<div>'. $afficherFilm. '<hr></div>' ;
        }
    }

    //**Affichage */

    echo '<h2> Tous mes films</h2>';
    afficherTousFilms($afficherFilms);
    //Lister la filmographie d'un réalisateur
    echo '<h2> Les films par réalisateurs</h2>';
    echo $realisateur1 -> afficherFilmReal();

    //Lister les films par genre
    echo '<h2> Les films par genres</h2>';
    echo $drame -> filmsParGenres();

    //Lister le casting d'un film
    echo '<h2> Casting par films</h2>';
    echo $film1-> afficherCasting();

    //Lister la filmographie d'un acteur
    echo '<h2> Films par acteurs</h2>';
    echo $acteur1 ->afficherFimographie();

    //Lister la liste des acteurs ayant incarné un rôle précis
    echo '<h2> Acteurs par roles</h2>';


    ?>

</body>

</html>