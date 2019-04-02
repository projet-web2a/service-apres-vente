<?php 
 
require 'C:/wamp64/www/projet/entites/avis.php';
require 'C:/wamp64/www/projet/core/avisC.php';
$avis=new avisC();
$listeavis=$avis->afficher_avis();


?>

<?php require 'head.php';?>
<div class="container-fluid">	
<div class="card p-3 mb-2 bg-info text-white">  
	<div class="card-header">
			    <h1 class="card-title text-center">avis</h1>

	</div>
<div class="card-body">
<table class="table table-bordered table-hover table-dark ">
  <thead >
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">refe</th>
      <th scope="col">commentaire</th>
      <th scope="col">note </th>
      <th scope="col"> date_avis </th>
     
    </tr>
  </thead>
  <tbody>
<?php foreach($listeavis as $avis): ?>
    <tr>
      <td> <?= $avis->nom; ?> </td>
      <td> <?= $avis->prenom ?> </td>
      <td> <?= $avis->refe; ?> </td>
      <td> <?= $avis->commentaire; ?> </td>
      <td> <?= $avis->note; ?> </td>
      <td> <?= $avis->date_avis; ?> </td>

      
    </tr>
  </tbody>
            <?php endforeach; ?>

</table>

</div>
</div>
  </div>	
