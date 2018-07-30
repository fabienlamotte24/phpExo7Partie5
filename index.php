<?php
/*Création tableau associatif departement*/
  $departements = array(
    /*Détermination des éléments clé => valeur*/
    'Aisne' => 02,
    'Nord' => 59,
    'Oise' => 60,
    'Pas-de-Calais' => 62,
    'Somme' => 80);
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
<p>
  <?php
  /*Ajout du département 51*/
    $departements[51] = 'reims';
    /*Affichage de toues les valeurs*/
    echo var_dump($departements);
  ?>
</p>
  </body>
</html>
