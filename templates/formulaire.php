<?php
session_start();
if (! $_SESSION["connexion"]) {
    header("location: ./connexion.php");
}
include'./head.php';
include'./menu.php';

?>
<div id="formulaire">
             <form action="./ajout_recettes.php" method="POST">
              
        <!-- <form action="traitement_json.php" method="POST"> -->
            <p>
                <label>Titre de la recette :</label>
                <input type="text" required name="titre" placeholder="Clafoutis à la cerise" size="40" pattern="^[^0-9]+$">
                <!-- L'attribut "pattern" utilise une expression régulière (ou regexp) interdisant de saisir des chiffres -->
            </p>
            <p>
                <label>Type de recette :</label>
                <input type="radio" name="type" value="entree" id="type_entree">
                <label for="type_entree">entrée</label>
                <input type="radio" name="type" value="plat" id="type_plat" checked>
                <label for="type_plat">plat</label>
                <input type="radio" name="type" value="dessert" id="type_dessert">
                <label for="type_dessert">dessert</label>
            </p>
            <p>
                <label>Type de cuisine :</label>
                <select name="cuisine">
                    <option value=""></option>
                    <option value="africaine">cuisine d'Afrique</option>
                    <option value="asiatique">cuisine d'Asie</option>
                    <option value="europeenne">cuisine d'Europe</option>
                    <option value="amérique">cuisine d'Amérique</option>
                </select>
            </p>
            <p>
                <label>Allergènes :</label>
                <input type="checkbox" name="allergenes[]" value="arachide" id="allergene_arachide">
                <label for="allergene_arachide">arachides</label>
                <input type="checkbox" name="allergenes[]" value="crevette" id="allergene_crevette">
                <label for="allergene_crevette">crevettes</label>
                <input type="checkbox" name="allergenes[]" value="" id="allergene_lactose">
                <label for="allergene_lactose">lactose</label>
            </p>
            <p>
                <label>Nombre de personnes (personne) :</label>
                <input type="text" name="nombre">
            </p>

           <p> Nom de l'auteur: <input type="text" required name="auteur" placeholder="exemple mathias" size="40" pattern="^[^0-9]+$">     </p>



            <p>
                <label>Temps de préparation (mn) :</label>
                <input type="number" name="temps" required min="5" max="180" step="5">
            </p>
            <p><label>Instructions de la recette: </br></label>
            <style> textarea {
                width: 500px;
                height: 200px;
            }
        </style>
                <textarea  name="recette" placeholder=" Veuillez Saisir les ingrédients ici SVP!"></textarea>
            </p>
            <p>
                <label>Illustration:</label>
                <input type="text" name="photo" placeholder="http://blabla.com/image.jpg" size="40">
            </p>
            <p>
                <label>Illustration (fichier) :</label>
                <input type="file" name="photo_fichier" accept="image/jpeg">
            </p>
            <p>
                <label>Date d'ajout :</label>
                <input name="date" type="date">
            </p>
            <p>
                <label>Adresse email de l'auteur :</label>
                <input type="email" name="adresse" required placeholder="cherif@auxprunes.com">
            </p>
            <p>
                <input type="submit" value="Valider">
            </p>
        </form>
        </div>
<?php include'footer.php';?>