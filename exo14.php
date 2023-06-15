<h1>Exo 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

  $dateNaissance = "17-01-1985";
  $aujourdhui = date(21-05-2018);
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'Votre age est '.$diff-> y;

