<?php
    include "bdd.php";
    $recettes = lirejson();
    http_response_code(200);

    header("content-type: application/json");

    echo $recettes;
?>