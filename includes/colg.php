<?php
/*
Neoterranos & LkY
Page colg.php

La colonne de gauche de votre site.

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

?>
<div id="statistiques"><h1>Site</h1>
	ouaich<br/>


	<a href="<?php echo ROOTPATH; ?>/stats.php?see=nb_membres"><?php echo $num1 = get('nb_membres'); if($num1 <= 1) echo ' membre inscrit'; else echo ' membres inscrits'; ?></a><br/>
	<a href="<?php echo ROOTPATH; ?>/stats.php?see=connectes"><?php echo $num2 = get('connectes'); if($num2 <= 1) echo ' visiteur'; else echo ' visiteurs' ?></a><br/>
	<a href="<?php echo ROOTPATH; ?>/stats.php?see=passed">Dernières visites</a><br/>


</div>
<div id="statistiques"><h1>Chat</h1>
	
<?php 
	include('chat.php'); 
	
?>

</div>