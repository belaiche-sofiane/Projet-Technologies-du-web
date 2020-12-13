<?php
session_start();
if (! $_SESSION["connexion"]) {
    header("location: connexion.php");
}
?>
<?php

include('head.php');
include('menu.php');?>
    

<div class="main1">
<?php



    include "../PHP/bdd.php";
    $recettes = lire();

    
    $i = 1;
    foreach ($recettes as $rec) {
    
  echo '<form action="supression.php" method="GET">';
   echo "<p id=\"".$rec->id."\"><strong>RECETTE ".$i."</strong></br>";

   echo '<input type="hidden" name="id" value="' . $rec->id . '">';

   echo "titre de la recette: " . $rec->titre . "</br>";

   echo "type de la cuisine: " . $rec->type_cuisine . "</br>";

   echo "mail de l'auteur de la recette: " . $rec->adresse_auteur . "</br>";

   echo "instructions de la recette: " . $rec->instructions_recette . "</br>";
   echo "temps_de_cuisson: " . $rec->temps_de_cuisson . "</br>"; 
   echo "nombre_de_personnes: " . $rec->nombre_de_personnes . "</br>";
   echo "auteur_de_la_recette: " . $rec->auteur_de_la_recette . "</br>";
   echo "adresse_auteur: " . $rec->adresse_auteur . "</br>";
 
   echo "photo_de_la_recette: </br><img src='../images/" .$rec->photo_de_la_recette . "' width=300px height=300px >" . "</br>";
   echo "photo_de_la_recette depuis le web: </br><img src='" .$rec->url_photo . "' width=30px height=30px >" . "</br>";
   echo "date: " . $rec->date . "</br>";
   echo "<input type=submit value=Supprimer> </p>" . "</br>";
   echo '</form>';
 
        $i++;

    }

?>
<?php
include('footer.php');
?>