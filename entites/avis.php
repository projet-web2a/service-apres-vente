<?php

class avis 
{


private $marque;
private $commentaire;
private $note;
    
    function __construct($marque,$commentaire,$note)
    {
      
        $this->marque=$marque;
        $this->commentaire=$commentaire;
        $this->note=$note;
        
    }
   
 function get_marque()
    {
    return $this->marque;
    }
     function get_commentaire()
    {
    return $this->commentaire;
    } 
    function get_note()
    {
        return $this->note;
    }
  

} 
?>