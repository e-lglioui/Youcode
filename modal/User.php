<?php
include_once __DIR__ ."/../database/connexion.php";
class User{
private $nom;
private $prenom;
private $email;
private $password;
private $connect;
private $rol;
private $class;

public function __construct($nom,$prenom,$email,$mot_pass){
    $this->connect= new Connexion();
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->password=$mot_pass;
}

public function creatAcount(){
  $sql= "INSERT INTO `users`( `nom`, `prenom`, `email`, `mot_pass`) VALUES ('$this->nom','$this->prenom','$this->email','$this->password')";
}


}