<?php
session_start();
include('./head.php');
include('./menu.php');




echo '<div class="main1">';
    include "../PHP/bdd.php";
    $recettes = lire();
   

   
    $i = 1;
    foreach ($recettes as $rec) {
    

   echo "</br></br><strong>RECETTE $i</strong></br>";

   echo "titre de la recette: " . $rec->titre . "</br>";

   echo "type de la cuisine: " . $rec->type_cuisine . "</br>";

   echo "mail de l'auteur de la recette: " . $rec->adresse_auteur . "</br>";

   echo "instructions de la recette: " . $rec->instructions_recette . "</br>";
   echo "temps_de_cuisson: " . $rec->temps_de_cuisson . "</br>"; 
   echo "nombre_de_personnes: " . $rec->nombre_de_personnes . "</br>";
   echo "auteur_de_la_recette: " . $rec->auteur_de_la_recette . "</br>";
   echo "adresse_auteur: " . $rec->adresse_auteur . "</br>";
 
   echo "photo_de_la_recette:</br> <img src='../images/" .$rec->photo_de_la_recette . "' width=300px height=300px >" . "</br>";
   echo "photo_de_la_recette depuis le web: </br><img src='" .$rec->url_photo . "' width=100px height=100px >" . "</br>";
   echo "date: " . $rec->date . "</br></br>";
 
        $i++;

    }








include('footer.php');
?>