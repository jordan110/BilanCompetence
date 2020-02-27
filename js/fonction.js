
$(document).ready(function() {
	$("#generer").click (function() {
		
		$.ajax({
        url : 'bdd/database.php', // La ressource ciblée
        success: function(requete){ // code_html contient le HTML renvoyé
           
           $('#citation').html(requete);
        }
 

    	});
	});
});

