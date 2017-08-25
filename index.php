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
$bdd = new core\database\Bdd();
<<<<<<< HEAD
//$bdd->connexion();
//$bdd->add();
//var_dump($bdd);
//var_dump($user);
 

=======
$bdd->connexion();
$bdd->add();
>>>>>>> b9c0477bd9aca5bece6639146526a01923eff11a
ob_start();
// si home on affiche home
if($p === 'home'){
    require(ROOT . '/app/html/view/home.php');
}

elseif($p === 'admin'){
    require(ROOT . '');
}

elseif($p === 'form'){
    require(ROOT . '/app/html/view/form.php');
}

else{
    require(ROOT . '/app/html/view/404.php');
}
// si autre page on affiche autre page
/* elseif($p === 'cool'){
    require(ROOT . '/public/pages/cool.php');
} */


// $content affiche le contenu d'une page
$content = ob_get_clean();
// Affiche le template
require(ROOT . '/app/html/template/default.php');
