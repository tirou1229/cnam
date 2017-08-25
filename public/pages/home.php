<?php

var_dump($_POST);

/* POUR MON IMG CANVAS DEBUT */
//Je crée un cookie pour le nom de mon img
if(!isset($_COOKIE["IMGCookie"])) {
     $value = uniqid();
     setcookie("IMGCookie", $value, time() + 365*24*3600, null, null, false, true);
     header('Location: index.php');
     exit;
}
//Je crée un compteur pour synchroniser les noms de l'img dans le dossier et la bdd
if (!isset($_SESSION['compteur'])) {
    $_SESSION['compteur'] = 1;
} else {
    $compteurI = $_SESSION['compteur']++;
    $compteurI = $compteurI + 2;
		$compteurII = $compteurI + 1;
}
/* POUR MON IMG CANVAS FIN */

if(isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['mdp'])){
    $user->inscription($_POST['mail'], $_POST['mdp'], $_COOKIE["IMGCookie"].$_SESSION['compteur']);
}
$user->upImgBase($_COOKIE["IMGCookie"].$compteurI); //upload img ajaxé en js

?>



<!-- inscription -->
<form class="" action="" method="post" enctype="multipart/form-data">
	<p>inscription</p>
	<input type="email" name="mail" value="" placeholder="email" required> <br><br>
	<input type="password" name="mdp" value="" placeholder="mot de passe" required> <br><br>
	<input type="file" name="img" value="" id="file-input" placeholder="avatar" required> <br>
	<input type="submit" name="submit" value="Inscription">
</form>
<img id="apercu_avatar" alt="avatar"></img>

<br><br>

<!-- connexion -->
<form class="" action="" method="post">
	<p>connexion</p>
	<input type="email" name="mail" value="" placeholder="email" required> <br><br>
	<input type="password" name="mdp" value="" placeholder="mot de passe" required> <br><br>
	<input type="submit" name="submit" value="Connexion">
</form>


<script type="text/javascript">
/* Previsualisation de l'avatar DEBUT*/
function readURL(input) {
		if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
						$('#apercu_avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
		}
}

$("#file-input").change(function(){
		readURL(this);
});
/* Previsualisation de l'avatar FIN*/
</script>
