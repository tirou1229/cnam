<?php
    function redimension($img_source, $largeur, $hauteur, $nouveau_nom_img, $qualite=100, $ext='jpg'){
		$TailleOriginal=getimagesize($img_source);//retourne le tableau avec les dimensions de l'image 
		
		$largeurOriginal=$TailleOriginal[0];
		$hauteurOriginal=$TailleOriginal[1];
	//***CALCUL DES REDIMENSIONS

			//PORTRAIT
		if(($hauteurOriginal/$largeurOriginal)>1){
			//echo "<br />Portrait<br />";
			$ratio=$hauteur/$hauteurOriginal;
			//echo "Nouvelle hauteur: $hauteur";
			$largeur=$largeurOriginal*$ratio;
			//echo "Nouvelle largeur : $largeur";		
			
			//CARRE
		}else if(($hauteurOriginal/$largeurOriginal)==1) {
			//echo "<br />Carré<br />";
			$largeur=$hauteur;
			//PAYSAGE
		}else{
		
			$ratio=$largeur/$largeurOriginal;
			//echo "Nouvelle largeur: $largeur";
			$hauteur=$hauteurOriginal*$ratio;
			//echo "Nouvelle hauteur : $hauteur";			
		}
		if($ext=='jpg' || $ext=='jpeg'){
			$Original=imagecreatefromjpeg($img_source);//img originale
			$NouvelleImage=imagecreatetruecolor($largeur, $hauteur);//Nouvelle image
		}else{
			$Original=imagecreatefrompng($img_source);//img originale
			$NouvelleImage=imagecreatetruecolor($largeur, $hauteur);//Nouvelle image
			
			imagesavealpha($NouvelleImage, true);
			// Fill the image with transparent color
			$color = imagecolorallocatealpha($NouvelleImage,0x00,0x00,0x00,127);
			imagefill($NouvelleImage, 0, 0, $color); 
		}
		
		imagecopyresampled($NouvelleImage, $Original, 0, 0, 0, 0, $largeur, $hauteur, $TailleOriginal[0], $TailleOriginal[1] );
	
	
	
	if($ext=='jpg' || $ext=='jpeg'){
		if(unlink($img_source)==true && imagejpeg($NouvelleImage,$nouveau_nom_img,$qualite)==true ){
			return true;
		}else{
			return false;
		}
	}else{
		if(unlink($img_source)==true && imagepng($NouvelleImage,$nouveau_nom_img)==true ){
			return true;
		}else{
			return false;
		}	
	}	
		
}
?> 