<?php

class avis 
{

private $nom;
private $prenom;
private $refe;
private $commentaire;
private $note;
private $date_avis;
    
    function __construct($nom,$prenom,$refe,$commentaire,$note,$date_avis)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->refe=$refe;
        $this->commentaire=$commentaire;
        $this->note=$note;
        $this->date_avis=$date_avis;
        
    }
    function get_nom()
    {
        return $this->nom;
    }
     function get_prenom()
    {
        return $this->prenom;
    }
 function get_refe()
    {
    return $this->refe;
    }
     function get_commentaire()
    {
    return $this->commentaire;
    } 
    function get_note()
    {
        return $this->note;
    }
    function get_date_avis()
    {
        return $this->date_avis;
    }


} 
?>