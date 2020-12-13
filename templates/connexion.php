<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../CSS/connexion.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

    
    <form action="./traitement_connexion.php" method="post">
    Votre login : <input type="mail" name="login">
    <br />
    Votre mot de passe : <input type="password" name="pwd"><br />

    <input type="submit" value="Connexion">


    <a href="formulaire_inscription.php" > <bouton id="Ins">Inscription</bouton> </a> 
    <?php
    if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
    </form>

    </body>
    </html>