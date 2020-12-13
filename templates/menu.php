<header>
        <h1>Marmit'UM</h1>  
            <nav id="main">
                  <ul>
                    <li><a href="accueil.php">Accueil |</a></li>
                    <li><a href="recettes_statique.php">Nos recettes |</a></li>
                    <li><a href="bouton_page_dynamique.php">Nos recettes (Dynamique) |</a></li>
                         
                    <li><a href="formulaire.php">Ajouter une recette |</a></li>
                    <?php
                    session_start();
                    if(!$_SESSION["connexion"]){
                       echo ' <li><a href="connexion.php">Connexion |</a></li>';
                    }
                    else{

			echo "<li><a href='supprimer.php'>Supprimer une recette |</a></li>";
                        echo '<li><a href="deconnexion.php">Déconnexion </a></li>';
                    }
                    ?>
		    <li><form action="recherche.php" method="GET">
                      <input type="text" placeholder="Rechercher une recette" name="recherche">
                      <input type="submit" value="valider">
      
                    </form></li>
                   
                    
                </ul>
            </nav>
                   






    </header>