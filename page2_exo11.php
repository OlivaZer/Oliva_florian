<h1>Exo11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date. <br>
Exemple :
formaterDateFr("2018-02-23");<br>
Affichage :
vendredi 23 février 2018

</p>

<h2>Résultat</h2>

<?php



function formaterDateFr($dateString) {
    // Création d'un objet DateTime à partir de la chaîne de caractères
    $date = new DateTime($dateString);
  
    // Récupération des informations de la date
    $jourSemaine = $date->format('l');
    $jour = $date->format('d');
    $mois = $date->format('F');
    $annee = $date->format('Y');
  
    // Conversion des noms des jours et des mois en français
    $jourSemaineFr = [
        'Sunday' => 'dimanche',
        'Monday' => 'lundi',
        'Tuesday' => 'mardi',
        'Wednesday' => 'mercredi',
        'Thursday' => 'jeudi',
        'Friday' => 'vendredi',
        'Saturday' => 'samedi'
    ];
    $moisFr = [
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre'
    ];
  
    // Construction de la date formatée en français
    $dateFormatee = $jourSemaineFr[$jourSemaine] . ' ' . $jour . ' ' . $moisFr[$mois] . ' ' . $annee;
  
    // Affichage de la date formatée
    echo $dateFormatee;
}


formaterDateFr("2018-02-23");


    
// doc :https://www.develop4fun.fr/afficher-la-date-du-jour-en-francais-avec-php/