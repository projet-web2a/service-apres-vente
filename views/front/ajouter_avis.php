<?php
require 'C:/wamp64/www/projet/entites/avis.php';
require 'C:/wamp64/www/projet/core/avisC.php';

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['refe']) and isset($_POST['commentaire'])and isset($_POST['note']))
{

$date = date("Y-m-d");
echo $date;
$av=new avis($_POST['nom'],$_POST['prenom'],$_POST['refe'],$_POST['commentaire'],$_POST['note'],$date);

$av1=new avisC();
$av1->ajouter_avis($av);
//header('Location: afficherEmploye.php');
}else{
	echo "vérifier les champs";
}
?>