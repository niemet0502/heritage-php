<?php
class ResponsableTechnique extends Personne{
  private $domaine;

  public function __construct($nom,$prenom,$domaine)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->certification = $domaine;
  }

   //getters
   public function getDomaine(){
    return $this->domaine;
  }

  //setters
  public function setDomaine($domaine){
    $this->domaine = $domaine;
  }
}