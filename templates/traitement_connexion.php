<?php
session_start();

$login = $_REQUEST["login"];
$pwd= $_REQUEST["pwd"];

$comptes = json_decode(file_get_contents("../data/users.json"), true);

$trouve = false;
foreach ($comptes as $c) {
    if ($c["login"] == $login && $c["pwd"] == md5($pwd)) {
        $trouve = true;
        $_SESSION["connexion"] = $trouve;

        header("Location: ./formulaire.php");
    }
    else if ($c["login"] != $login || $c["pwd"] != md5($pwd)) {
        header('Location: connexion.php?erreur=1') ;

    } 
}
?>


