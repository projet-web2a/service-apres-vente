<?php
require 'C:/wamp64/www/projet/core/avisC.php';
$ec= new avisC();
$ec->trier_avis();
header('Location: serviceapresvente.php');  
?>