<?php
session_start();
include('head.php');
include('menu.php');?>

<div class="main1">
<script type="text/javascript" src="../js/liste_dynamique.js"> </script>
<p> si vous souhaitez afficher la liste des recettes cliquez sur afficher:
                   <input type="submit" value="afficher" id="bouton">
                   
                   </p>
                   <ul id="liste_messages">
                     
                   </ul>
                  <table id="tab_messages">
                   </table>
</div>





<?php
include('footer.php');
?>











