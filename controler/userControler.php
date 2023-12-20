<?php
include_once __DIR__ ."/../modal/User.php";
session_start();
class userControler{

public function regester($nom,$prenom,$email,$mot_pass){
    $nom=$this->validation($nom);
    $prenom=$this->validation($prenom);
    $email=$this->validation($email);
    $mot_pass = password_hash($mot_pass, PASSWORD_DEFAULT);
    $user = new User($nom,$prenom,$email,$mot_pass);
    $user->creatAcount();
}



public function validation($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data); 
    $data = addslashes($data); 
    return $data;
}
}