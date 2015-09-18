<?php
/*
Neoterranos & LkY
Page index.php

Index du site.

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
header('Content-type: text/html; charset=utf-8');
include('includes/config.php');

/********Actualisation de la session...**********/

include('includes/fonctions.php');

connexionbdd();

actualiser_session();


/********Fin actualisation de session...**********/

/********Entête et titre de page*********/

$titre = 'Inscription';



include('includes/haut.php'); //contient le doctype, et head.

/**********Fin entête et titre***********/
?>

		<div id="colonne_gauche">
		<?php
		include('includes/colg.php');
		?>
		</div>
		
	
		
		<div id="contenu">
			<?php
			if(isset($_SESSION['membre_pseudo']))
			{
			?>
				<p> bonjour membre <strong>
				<?php
				echo ($_SESSION['membre_pseudo']);
				?>
				</strong><br/>
				Voir <a href="stats.php">les stats</a><br/>
				</p>
			<?php
			}
			else
			{
			?>
				<p> bonjour pas membre </p>
				<p>Ce site parlera de trucs et est ouvert à tous.
				Cependant, faut me payer pour <a href="membres/inscription.php">s'inscrire</a>
				
				Le Webdrumaster
			<?php
			}
			?>
			
			<div class="well">
				<p>Petit texte en html tavu encadré tout mignon</p>
			</div>
			
		</div>
		
		<?php
		include('blog/blog.php');
		
		//include('stats/index.php');
		
		include('includes/bas.php');
		mysql_close();
		?>