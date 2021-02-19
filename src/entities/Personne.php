<?php
  class Personne{
    private $nom;
    private  $prenom;

    //constructor
    public function __construct($nom,$prenom)
    {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }

    //setters
    public function setNom($nom){
      $this->nom = $nom;
    }
    public function setPrenom($prenom){
      $this->prenom = $prenom;
    }
    
    //getters
    public function getNom()
    {
      return $this->nom;
    }
    public function getPrenom()
    {
      return $this->prenom;
    }
  }