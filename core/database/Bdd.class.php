<?php

namespace core\database;

use \PDO;

class Bdd {

    private $pdo;
    public $host = 'localhost';
    public $dbname = 'cnam';
    public $user = 'root';
    public $password = '';

    public function connexion() {
        if ($this->pdo === NULL) {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo = $pdo;
            return $this->pdo;
        }
        return $this->pdo;
    }

    public function add() {
        
        $req = $this->pdo()->prepare('INSERT INTO propos(text) VALUES(:text)');
        $req->execute(array(
            'text' => $_POST['text']
        ));
    }
}