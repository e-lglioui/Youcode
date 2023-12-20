<?php
class Connexion{
private $host="localhost";
private $dbname="youcode";
private $username="root";
private $mot_pass="";
private $pdo;

public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->mot_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    
    public function getConnection()
    {
        return $this->pdo;
    }
}
?>