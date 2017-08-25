<?php

namespace core\user;
use core\bdd\Bdd;
use PDO;

class User {

    public $bdd;

    public function __construct($bdd){
        $this->bdd = $bdd;
    }

    /* Ajoute login mdp et img dans bdd */
    public function inscription($mail, $mdp, $img){
        //var_dump($this->bdd);
        $requete = $this->bdd->query("SELECT * FROM `user_wc` WHERE `mail_user` = '$mail'");
        $verif_login = $requete->fetch(PDO::FETCH_ASSOC);
        var_dump($requete);
        if ($verif_login == '1' || $verif_login > '1') {
           echo "erreur ce login existe déjà.";
        }else {
          $requete = $this->bdd->prepare("INSERT INTO `user_wc`(`id_user`, `mail_user`, `mdp_user`, `avatar_user`) VALUES (NULL,'$mail','$mdp','$img')");
          //var_dump($requete);
          $requete->execute();
        }
    }

    /* méthode pour l'ajax upload img b64*/
    public function upImgBase($img){
      function save_to_file($image, $img) {
         $fp = fopen('public/img/avatar/'.$img.'.jpg', 'w');
         fwrite($fp, $image);
         fclose($fp);
         echo "save";
      }

      if(isset($_POST['dataCanvas'])){
        echo "Existe <br/>";
        //echo $_POST['dataCanvas'];
        $data_url = $_POST['dataCanvas'];
        $image = base64_decode(str_replace('data:image/jpeg;base64,', '', $data_url));
        save_to_file($image,$img);
      }else{
        //echo "null";
      }
    }

    /* méthode pour la connexion */
    public function connexionUser($mail, $mdp) {
      if($mail == $mailBdd && $mdp == $mdpBdd){

      }
    }


}
