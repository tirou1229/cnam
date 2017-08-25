<?php

namespace core\database;
use \PDO;

class Bdd {

    public $pdo;
    public $host = 'localhost';
    public $dbname = 'cnam';
    public $user = 'root';
    public $password = '';
    
    public function connexion (){

        if($this->pdo === NULL){
            $pdo = new PDO("mysql:host=localhost;dbname=cnam", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            $this->pdo = $pdo;
            return $this->pdo;
        }
        return $this->pdo;
    }
}

?>