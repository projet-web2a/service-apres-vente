<?php
   require 'C:/wamp64/www/projet/core/avisC.php';

    if(isset($_POST["search"]))

  {	

  $search=$_POST['search'];
	
	header("location: C:/wamp64/www/projet/views/admin/afficher_commentaire.php");}
	else  {
		echo "erreur";
	}
	//$reclamation = Reclamation::rechercher("prix");	
	//include ("afficherProduit.php");

?>