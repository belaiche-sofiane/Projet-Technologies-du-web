<?php
  include "../PHP/bdd.php";
  $brut = lire ();
  $encode = json_encode($brut);
  $recettes = json_decode($encode,true);
  $id=$_GET["id"];

  foreach($recettes as $cle=>$rec){
    if($rec["id"] == $id){
      array_splice($recettes,$cle,1);
    }

  }
  file_put_contents("../data/data.json", json_encode($recettes));
  header('location: supprimer.php');
?>
