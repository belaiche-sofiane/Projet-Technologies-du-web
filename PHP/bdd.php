<?php
    function lire() {
        $file= '../data/data.json';
        $data = file_get_contents($file);
        $rec = json_decode($data);
        return $rec;
    }

    //lire le fichier json
    function lirejson(){
        $file= '../data/data.json';
        $data = file_get_contents($file);
       
        return $data;   
    }
    function del_recette($id){
        

    }
?>