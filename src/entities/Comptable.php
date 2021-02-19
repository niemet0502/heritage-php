<?php
class Comptable extends Personne{
  private $certification;

  public function __construct($nom,$prenom,$certification)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->certification = $certification;
  }
  
  //getters
  public function getCertification(){
    return $this->certification;
  }

  //setters
  public function setCertification($certification){
    $this->certification = $certification;
  }

}