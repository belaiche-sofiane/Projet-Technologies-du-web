window.addEventListener("DOMContentLoaded", function() {

   

    function lectureMessages() {
        var requete = new XMLHttpRequest();
		// on détermine ce qui doit se passer quand on recevra la réponse du service
		requete.addEventListener("load", function(event) {
			// on décode le format JSON pour obtenir un objet Javascript
            var recettes = JSON.parse(event.target.responseText);
            var listeMess = document.getElementById("liste_messages");
            listeMess.innerHTML = "";
           for (var i = 0; i < recettes.length; i++) {
                listeMess.innerHTML +="</br>"+"<li>"+"<strong>recette"+(i+1)+":</strong></li>"+ "</br>"
                +"<li>"+"titre de la recette: " + recettes[i].titre +"</li>"+"</br>"
                + "<li>"+"type de cuisine: "+ recettes[i].type_cuisine+ "</li>"+"</br>"
                +"<li>"+"l'auteur de la recette: "+ recettes[i].auteur_de_la_recette+ "</li>"+"</br>"
                +"<li>"+"adresse mail de l'auteur: "+ recettes[i].adresse_auteur+ "</li>"+"</br>"
                +"<li>"+"instructions de la recette: "+ recettes[i].instructions_recette+ "</li>"+"</br>"
                +"<li>"+"temps de cuisson en minutes: "+ recettes[i].temps_de_cuisson+ "</li>"+"</br>"
                +"<li>"+"image de la recette: </br>"+ "<img src='../images/"+recettes[i].photo_de_la_recette+"' width=300px height=300px >"+ "</li>"+"</br>"//
                +"<li>"+"image de la recette depuis le web:</br> "+ "<img src='"+recettes[i].url_photo+"' width=100px height=100px >"+ "</li>"+"</br>"//

                +"<li>"+"date d'ajout: "+ recettes[i].date + "</li>"+"</br>";
            }
            //version tableau
            /*listeMess.innerHTML += "<tbody>";
            for (var i = 0; i < recettes.length; i++) {
                listeMess.innerHTML += "<tr>";
                listeMess.innerHTML += "<td>"+"<strong>recette"+(i+1)+":</strong></td>"+ "</br>"
                +"<tr>"+"titre de la recette: " + recettes[i].titre +"</tr>"+"</br>"
                +"<li>"+"type de cuisine: "+ recettes[i].type_cuisine+ "</li>"+"</br>"
                +"<li>"+"l'auteur de la recette: "+ recettes[i].auteur_de_la_recette+ "</li>"+"</br>"
                +"<li>"+"adresse mail de l'auteur: "+ recettes[i].adresse_auteur+ "</li>"+"</br>"
                +"<li>"+"instructions de la recette: "+ recettes[i].instructions_recette+ "</li>"+"</br>"
                +"<li>"+"temps de cuisson en minutes: "+ recettes[i].temps_de_cuisson+ "</li>"+"</br>"
                +"<li>"+"image de la recette: "+ "<img src='"+recettes[i].photo_de_la_recette+"' width=40px height=40px >"+ "</li>"+"</br>"//
                +"<li>"+"image de la recette depuis le web: "+ "<img src='"+recettes[i].url_photo+"' width=40px height=40px >"+ "</li>"+"</br>"//

                +"<li>"+"date d'ajout: "+ recettes[i].date + "</li>"+"</br>";
                listeMess.innerHTML += "</tr>";
            }
            listeMess.innerHTML += "</tbody>";
            */

		});
		// on envoie la requête à l'URL du webservice
        requete.open("GET", "../PHP/lecturejson.php");
		requete.send();
    }

    var bouton = document.getElementById("bouton");
    bouton.addEventListener("click",function(event){
        lectureMessages();
    });


   
});
