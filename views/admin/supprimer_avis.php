<?php
require 'C:/wamp64/www/projet/core/avisC.php';


$id=$_GET['id'];
$ec= new avisC();
$ec->supprimer_avis($id);
header('Location: serviceapresvente.php');  
?>