<?php
require 'C:/wamp64/www/projet/core/reclamationC.php';
$ec= new reclamationC();
$ec->trier_reclamation();
header('Location: serviceapresvente.php');  
?>