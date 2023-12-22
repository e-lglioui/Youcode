<?php
include_once __DIR__ ."/../modal/User.php";
class userControler{

public function regester($nom,$prenom,$email,$mot_pass){
    $nom=$this->validation($nom);
    $prenom=$this->validation($prenom);
    $email=$this->validation($email);
    $mot_pass = password_hash($mot_pass, PASSWORD_DEFAULT);
    $connexion = new Connexion();
    $user = new User($nom,$prenom,$email,$mot_pass);
    $user->creatAcount();
}

public function login($email,$password){
    $email=$this->validation($email);
    $password=$this->validation($password);
    $connexion = new Connexion();
    $user = new User('','',$email,$password);
    $user->findAcount($email,$password);

}

public function validation($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data); 
    $data = addslashes($data); 
    return $data;
}
}
?>