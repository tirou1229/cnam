<?php
session_start();
define('ROOT', (__DIR__));

if(isset($_GET['p'])){
    $p = $_GET['p'];
}
else{
    $p = 'home';
}

require(ROOT . '/core/Autoloader.class.php');
core\Autoloader::register();

// ex : $form = new app\html\BsForm();
$bdd = new core\bdd\Bdd();
$user = new core\user\User($bdd->connexion());
//var_dump($user);
 

ob_start();
// si home on affiche home
if($p === 'home'){
    require(ROOT . '/public/pages/home.php');
}
// si autre page on affiche autre page
/* elseif($p === 'cool'){
    require(ROOT . '/public/pages/cool.php');
} */


// $content affiche le contenu d'une page
$content = ob_get_clean();
// Affiche le template
require(ROOT . '/public/pages/templates/defaut.php');
