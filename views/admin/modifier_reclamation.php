<?php
require 'C:/wamp64/www/projet/core/reclamationC.php';
$id=$_GET['id'];
$ec= new reclamationC();
$ec->modifier_Reclamation($id);
header('Location: serviceapresvente.php');  
?>