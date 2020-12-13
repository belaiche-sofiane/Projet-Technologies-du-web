<?php
    session_start();
    // var_dump($_REQUEST);

    // Récupération des variables envoyées par le formulaire.
    // $_REQUEST permet de récupérer les variables envoyées par la méthode GET ou
    // la méthode POST, sans avoir à changer le code.
    $titre = $_REQUEST["titre"];
    $cuisine = $_REQUEST["cuisine"];
    $recette = $_REQUEST["recette"];
    $adresse = $_REQUEST["adresse"];
    $temps = $_REQUEST["temps"];
    $nombre = $_REQUEST["nombre"];
    $auteur = $_REQUEST["auteur"];
  
    $recette = $_REQUEST["recette"];
    $photo_fichier = $_REQUEST["photo_fichier"];
    $photo_url = $_REQUEST["photo"];
    $date = $_REQUEST["date"];

    if (! isset($_SESSION["mes_recettes"])) {
        $_SESSION["mes_recettes"] = [];
    }

    


    $recettesExistantes = json_decode(file_get_contents("../data/data.json"));

   
    array_push($recettesExistantes, [
        "id" => md5(rand()) ,
        "titre" => $titre,
        "type_cuisine" => $cuisine ,
        "adresse_auteur" => $adresse,
        "instructions_recette" => $recette,
        "temps_de_cuisson" => $temps,
        "nombre_de_personnes" => $nombre,
        "auteur_de_la_recette" => $auteur,
         "adresse_auteur" => $adresse,
        "url_photo" => $photo_url,
        "photo_de_la_recette" => $photo_fichier,
        "date" => $date,
      
      
    ]);

    
   //var_dump($recettesExistantes);
    file_put_contents("../data/data.json", json_encode ($recettesExistantes));
    // session_destroy();
?>

<?php
session_start();
include('./head.php');
include('./menu.php');?>

<div class='accueil'>
<p id="felicitation">félicitaions, votre recette a été ajouté.</p>
</div>
<?php
include('./footer.php');
?>
