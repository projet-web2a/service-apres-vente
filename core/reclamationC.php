<?php

require_once 'C:/wamp64/www/projet/config.php';
class reclamationC 
{
	
function ajouter_reclamation($reclamation){
		$sql="insert into reclamation (nom,prenom,refe,message,date_reclamation) values (:nom, :prenom,:refe,:message,:date_reclamation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$reclamation->get_nom();
        $prenom=$reclamation->get_prenom();
        $refe=$reclamation->get_refe();
        $message=$reclamation->get_message();
        $date_reclamation=$reclamation->get_date_reclamation();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':message',$message);
		$req->bindValue(':date_reclamation',$date_reclamation);
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }	
        function afficher_reclamations()
	{
  		$db = config::getConnexion();
       		$sql="SELECT *FROM reclamation";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$reclamation= $req->fetchALL(PDO::FETCH_OBJ);
		return $reclamation;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



    function SupprimerReclamation($id_reclamation)
    {
        $sql="DELETE  from reclamation where id_reclamation=$id_reclamation";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
}
 function modifier_reclamation($id_reclamation)
    {
        $sql="UPDATE   reclamation  set etat= 'valide' where id_reclamation=$id_reclamation";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
 public function trier_reclamation_desc()
      {

        $sql="SELECT *FROM reclamation order by date_reclamation DESC ";


          $db = config::getConnexion();
          try{
          $req=$db->query($sql);
            $liste= $req->fetchALL(PDO::FETCH_OBJ);
          return $liste;
          }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          } 
      }
       public function trier_reclamation_asc()
      {

        $sql="SELECT *FROM reclamation order by date_reclamation ASC ";


          $db = config::getConnexion();
          try{
          $req=$db->query($sql);
            $liste= $req->fetchALL(PDO::FETCH_OBJ);
          return $liste;
          }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          } 
      }
        function rechercher_reclamation($refe)
    {
        $sql="SELECT * FROM reclamation WHERE refe=$refe";
         //connexion bd
        $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
        $req->execute();
        $reclamation= $req->fetchALL(PDO::FETCH_OBJ);
        return $reclamation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   

         
    }
    
}
?>