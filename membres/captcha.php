<?php
/*
Neoterranos & LkY
Page captcha.php

Génère un captcha.

Quelques indications : (utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations/erreurs :
--------------------------
Aucune information/erreur
--------------------------
*/

session_start();
header ("Content-type: image/png");
$image = imagecreate(320, 100);

$blanc = imagecolorallocate($image, 255, 255, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
$gris = imagecolorallocate($image, 200,200,200);
$jaune = imagecolorallocate($image, 255, 255, 0);
$rouge = imagecolorallocate($image, 200, 39, 45);
$vert = imagecolorallocate($image, 45, 255, 39);
$cyan = imagecolorallocate($image, 0, 255, 255);
$magenta = imagecolorallocate($image, 200, 0, 200);
$orange = imagecolorallocate($image, 255, 160, 0);
$bleu = imagecolorallocate($image, 60, 75, 200);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$vertf = imagecolorallocate($image, 20, 140, 17);

/*$Anoir = imagecolorallocatealpha($image, 0, 0, 0, 80);
$Ajaune = imagecolorallocatealpha($image, 255, 255, 0, 80);
$Ablanc = imagecolorallocatealpha($image, 255, 255, 255, 80);
$Arouge = imagecolorallocatealpha($image, 200, 39, 45, 80);
$Avert = imagecolorallocatealpha($image, 45, 200, 39, 80);
$Acyan = imagecolorallocatealpha($image, 0, 255, 255, 80);
$Amagenta = imagecolorallocatealpha($image, 255, 0, 255, 80);
$Aorange = imagecolorallocatealpha($image, 255, 128, 0, 80);
$Ableu = imagecolorallocatealpha($image, 39, 45, 200, 80);
$Ableuclair = imagecolorallocatealpha($image, 156, 227, 254, 80);

$A2noir = imagecolorallocatealpha($image, 0, 0, 0, 25);
$A2jaune = imagecolorallocatealpha($image, 255, 255, 0, 25);
$A2blanc = imagecolorallocatealpha($image, 255, 255, 255, 25);
$A2rouge = imagecolorallocatealpha($image, 200, 39, 45, 25);
$A2vert = imagecolorallocatealpha($image, 45, 200, 39, 25);
$A2cyan = imagecolorallocatealpha($image, 0, 255, 255, 25);
$A2magenta = imagecolorallocatealpha($image, 255, 0, 255, 25);
$A2orange = imagecolorallocatealpha($image, 255, 128, 0, 25);
$A2bleu = imagecolorallocatealpha($image, 39, 45, 200, 25);
$A2bleuclair = imagecolorallocatealpha($image, 156, 227, 254, 25);*/

//Toutes les couleurs
$colors = Array($vert, $noir, $jaune, $blanc, $rouge, $cyan, $magenta, $orange, $bleu, $bleuclair, $gris, $vertf);
$Tcolors = count($colors);

/*$colors2 = Array($Avert, $Anoir, $Ajaune, $Ablanc, $Arouge, $Acyan, $Amagenta, $Aorange, $Ableu, $Ableuclair);
$Tcolors2 = count($colors2);
$colors3 = Array($A2vert, $A2noir, $A2jaune, $A2blanc, $A2rouge, $A2cyan, $A2magenta, $A2orange, $A2bleu, $A2bleuclair);
$Tcolors3 = count($colors3);*/

//couleurs autorisées pour les caractères
$Lcolors = Array($noir, $rouge, $magenta, $bleu, $vertf);
$TLcolors = count($Lcolors);

$polices = Array('baveuse3d'); //Pensez à en rajouter !!
$Tpolices = count($polices);

//définition des caractères autorisés.
$carac = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$Tcarac = strlen($carac);

//définition des lignes noires
$nb_lignes = mt_rand(3,7);
$i = 1;
while($i<=$nb_lignes)
{
	ImageLine($image, mt_rand(0,40), mt_rand(0,100), mt_rand(280, 320), mt_rand(0,100), $noir);
	$i++;
}

//définition des lignes colorées.
$nb_lignes = mt_rand(3,7);
$i = 1;
while($i<=$nb_lignes)
{
	ImageLine($image, mt_rand(0,40), mt_rand(0,100), mt_rand(280,320), mt_rand(0,100), $colors[mt_rand(0,$Tcolors-1)]);
	$i++;
}

//définition des ellipses
$nb_ellipses = mt_rand(1,6);
$i = 1;
while($i<= $nb_ellipses)
{
	ImageEllipse($image, mt_rand(0,320), mt_rand(0,100), 25+mt_rand(0,15), 25+mt_rand(0,15), $colors[mt_rand(0,$Tcolors-1)]);
	$i++;
}

//définition des triangles
$nb_triangles = mt_rand(1,6);
$i = 1;
while($i<=$nb_triangles)
{
	$array = Array(mt_rand(0,300), mt_rand(0,100), mt_rand(0,300), mt_rand(0,100), mt_rand(0,300), mt_rand(0,100));
	ImagePolygon($image, $array, 3, $colors[mt_rand(0,$Tcolors-1)]);
	$i++;
}


$aupifcolor = $Lcolors[mt_rand(0,$TLcolors-1)]; //la couleur des caractères
$ecart = 300/2; //écart entre les caractères

$_SESSION['captcha'] = ''; //La voilà !! Enfin !!

$i = 0;
while($i <= 1)
{
	$lettre = $carac[mt_rand(0, $Tcarac-1)]; //choix de lettre
	$_SESSION['captcha'] .= $lettre; //stockage
	$taille = mt_rand(35,45); //taille
	$angle = mt_rand(-35,35); //angle
	$y = mt_rand(20, 60); //ordonnée
	$police = $polices[mt_rand(0, $Tpolices-1)]; //police :p
	
	imagettftext($image, $taille, $angle, $ecart*$i+45, $y, $aupifcolor, 'polices/'.$police.'.ttf', $lettre);
	$i++;
}

imagepng($image); //On envoie et on prie :p
?>