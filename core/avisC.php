<?php

require_once 'C:/wamp64/www/projet/config.php';
class avisC 
{
	
function ajouter_avis($avis){
		$sql="insert into avis (nom,prenom,refe,commentaire,note,date_avis) values (:nom, :prenom,:refe,:commentaire,:note,:date_avis)";
		$db = config::getConnexion();





    
		try{
        $req=$db->prepare($sql);
		
        $nom=$avis->get_nom();
        $prenom=$avis->get_prenom();
        $refe=$avis->get_refe();
        $commentaire=$avis->get_commentaire();
        $note=$avis->get_note();
        $date_avis=$avis->get_date_avis();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':refe',$refe);

		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':note',$note);
		$req->bindValue(':date_avis',$date_avis);
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }	
        function afficher_avis()
	{
  		$db = config::getConnexion();
       		$sql="SELECT *FROM avis";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$avis= $req->fetchALL(PDO::FETCH_OBJ);
		return $avis;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
      function recuperer_produit()
  {
      $db = config::getConnexion();
          $sql="SELECT *FROM produit";

    try{
    $req=$db->prepare($sql);
      $req->execute();
    $listeproduits= $req->fetchALL(PDO::FETCH_OBJ);
    return $listeproduits;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


    function Supprimer_avis($id_avis)
    {
        $sql="DELETE  from avis where id_avis=$id_avis";
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
 function modifier_avis($id_avis)
    {
        //$sql="UPDATE   avis  set etat= 'valide' where id_reclamation=$id_reclamation";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
 public function trier_avis_desc()
      {

        $sql="SELECT *FROM avis order by date_avis DESC ";


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
       public function trier_avis_asc()
      {

        $sql="SELECT *FROM avis order by date_avis ASC ";


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
        function rechercher_avis($refe)
    {
        $sql="SELECT * FROM avis WHERE refe=$refe";
         //connexion bd
        $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
        $req->execute();
        $avis= $req->fetchALL(PDO::FETCH_OBJ);
        return $avis;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   

         
    }
}
?>