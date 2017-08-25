<?php

namespace core\bdd; 
use PDO;

class Bdd {

    public $connexion;

    public function connexion(){
        if($this->connexion === NULL){
              $connexion = new PDO('mysql:host=localhost;dbname=webcup2017;charset=utf8', 'root', '');
              $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
              $this->connexion = $connexion;
              //var_dump('appeler');
              return $this->connexion;
        }
        else{
            //var_dump('rappeler');
            return $this->connexion;
        }
    }



}
