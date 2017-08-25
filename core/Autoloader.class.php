<?php
// Cette page permet de charger les classes
namespace core;

/* Liste de class générique */
/*
- accés à bdd
- gérer des mails
- user (ajouter, modifier, suprimmer, connecter)
- article (ajouter, supprimer, modifier, commenter)
- admin (ajouter, supprimer, modifier article et user) 
*/

class Autoloader {

    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    //fonction qui charge les classes
    private static function autoload($class){
        $className = str_replace('\\', '/', $class);
        //var_dump($className);
        require (ROOT .'/' . $className . '.class.php');
    }
}
