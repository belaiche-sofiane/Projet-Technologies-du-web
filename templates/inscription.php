<?php



$comptes = json_decode(file_get_contents("../data/users.json"), true);

$login = $_REQUEST["adresse_email"];

$pwd = md5($_REQUEST["mot_de_passe"]);

foreach ($comptes as $c) {
    if ($c['login'] != $login) {
        array_push($comptes, [
            "login" => $login,
            "pwd" => $pwd
            
        ]);
       
        
        file_put_contents("../data/users.json", json_encode($comptes));
       session_start();
       $_SESSION['connexion'] = true;

        //break;
        
    
   
    }
    else{ 
        header('Location: formulaire_inscription.php?erreur=1');
        break;
        
        

    } 

}
?>


<?php
include('./head.php');
include('./menu.php');?>

<div class='accueil'>
<p id="felicitationInscription">Felicitaions vous etes inscrit<p>
</div>
<?php
include('./footer.php');
?>
