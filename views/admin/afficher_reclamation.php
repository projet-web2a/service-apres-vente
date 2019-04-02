<?php 
 
require 'C:/wamp64/www/projet/entites/reclamation.php';
require 'C:/wamp64/www/projet/core/reclamationC.php';
$reclamation=new reclamationC();
$listereclamations=$reclamation->afficher_reclamations();


?>

<?php require 'head.php';?>
<div class="container-fluid">	
<div class="card p-3 mb-2 bg-info text-white">  
	<div class="card-header">
			    <h1 class="card-title text-center">reclamation</h1>

	</div>
<div class="card-body">
<table class="table table-bordered table-hover table-dark ">
  <thead >
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">refe</th>
      <th scope="col">message</th>
      <th scope="col">date_reclamation </th>
      <th scope="col"> Action </th>
     
    </tr>
  </thead>
  <tbody>
<?php foreach($listereclamations as $reclamation): ?>
    <tr>
      <td> <?= $reclamation->nom; ?> </td>
      <td> <?= $reclamation->prenom ?> </td>
      <td> <?= $reclamation->refe; ?> </td>
      <td> <?= $reclamation->message; ?> </td>
      <td> <?= $reclamation->date_reclamation; ?> </td>
      <td
              <a href="modifier_reclamation.php?refe=<?= $reclamation->refe ?> "   class="btn btn-info"> Edit </a>
              <a onclick="return confirm('Are you sure you want to delete this entry ?')" href="Supprimer_reclamation.php?cin=<?= $reclamation->refe ?>" class="btn btn-danger"> Delete </a>
            </td>
    </tr>
  </tbody>
            <?php endforeach; ?>

</table>

</div>
</div>
  </div>	
