<?php
session_start();
include('head.php');
include('menu.php');?>

<body>

<?php
include "../PHP/bdd.php";
$brut = lire();
$encode = json_encode($brut);
$recettes = json_decode($encode,true);
$recherche = $_GET["recherche"];
//var_dump($recherche);

echo "<div class='main1'>";
$i = 1;
foreach ($recettes as $rec=>$jsons){
    foreach($jsons as $key=>$values) {
    if ($values == $recherche){
        echo "<strong>RECETTE $i</strong></br>";

        echo "titre de la recette: " . $jsons["titre"] . "</br>";
     
        echo "type de la cuisine: " . $jsons["type_cuisine"] . "</br>";
     
        echo "mail de l'auteur de la recette: " . $jsons["adresse_auteur"] . "</br>";
     
        echo "instructions de la recette: " . $jsons["instructions_recette"] . "</br>";
        echo "temps_de_cuisson: " . $jsons["temps_de_cuisson"] . "</br>"; 
        echo "nombre_de_personnes: " . $jsons["nombre_de_personnes"] . "</br>";
        echo "auteur_de_la_recette: " . $jsons["auteur_de_la_recette"] . "</br>";
        echo "adresse_auteur: " . $jsons["adresse_auteur"] . "</br>";
      
        echo "photo_de_la_recette:</br> <img src='../images/" .$jsons["photo_de_la_recette"] . "' width=300px height=300px >" . "</br>";
        echo "photo_de_la_recette depuis le web:</br> <img src='" .$jsons["url_photo"] . "' width=40px height=40px >" . "</br>";
        echo "date: " . $jsons["date"] . "</br>";
        
        }
        
    }
    $i++;
}




echo "</div>";

?>






</body>



<?php
include('footer.php');
?>





