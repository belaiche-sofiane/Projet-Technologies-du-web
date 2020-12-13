<html>
    <head>
        <title>Formulaire d'inscription</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/connexion.css" media="screen" type="text/css" />
        
    </head>
    <body>
        <div id="container">
        <h1>Inscription au site</h1>
        <form method="post" action="inscription.php">
            <p>
                <label for="email">Adresse email : </label>
                <br>
                <input name="adresse_email" type="mail" id="login" required>
            </p>
            <p>
                <label for="pwd">Mot de passe : </label>
                <br>
                <input name="mot_de_passe" type="password" id="pwd" required>
            </p>
            <input type="submit" value="cliquer ici pour s'inscrire">
            <p id="emplacement_erreur">
                    <?php
                    if(isset($_GET['erreur'])){
                                    $err = $_GET['erreur'];
                                    if($err==1 || $err==2)
                                        echo "<p style='color:red'>Utilisateur deja existant</p>";
                                }
                                ?>
            </p>
            
        </form>
        
    </div>
    </body>
</html>