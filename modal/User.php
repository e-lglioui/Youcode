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

public function creatAcount()
{
    $sql = "INSERT INTO `users` (`nom`, `prenom`, `email`, `mot_pass`) VALUES (?, ?, ?, ?)";
    $conn = $this->connect->getConnection();

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $this->nom, PDO::PARAM_STR);
        $stmt->bindParam(2, $this->prenom, PDO::PARAM_STR);
        $stmt->bindParam(3, $this->email, PDO::PARAM_STR);
        $stmt->bindParam(4, $this->password, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $stmt->closeCursor();
        $conn = null;
    }
}



}
?>