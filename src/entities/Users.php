<?php
class Users extends Personne{
  private $id;
  private $email;
  private $password;
  
  public function __construct($nom,$prenom,$id,$email,$password)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->id = $id;
    $this->email = $email;
    $this->password = $password;
  }

  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function setPassword($password){
    $this->password = $password;
  }

  //getters
  public function getId(){
    return $this->id;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }

  //metiers
  public function printF(){
    echo 'Nom: ' .$this->nom. ' Prenom: ' .$this->prenom. 
    ' Email: ' .$this->email;
  }
}