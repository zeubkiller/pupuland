<?php
/*
Neoterranos & LkY
Page inscription.php

Permet de s'inscrire.

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
include('../includes/config.php');
?>

<?php
/********Actualisation de la session...**********/

include('../includes/fonctions.php');
connexionbdd();
actualiser_session();

/********Fin actualisation de session...**********/
?>

<?php
if(isset($_SESSION['membre_id']))
{
	header('Location: '.ROOTPATH.'/index.php');
	exit();
}
?>

<?php
/********Entête et titre de page*********/

$titre = 'Inscription 1/2';

include('../includes/haut.php'); //contient le doctype, et head.

/**********Fin entête et titre***********/
?>

<!--Colonne gauche-->
<div id="colonne_gauche">
<?php
include('../includes/colg.php');
?>
</div>
		
<!--Contenu-->
<div id="contenu">
			<div id="map">
				<a href="../index.php">Accueil</a> => <a href="inscription.php">Inscription 1/2</a>
			</div>
			
			<?php
			if($_SESSION['erreurs'] > 0)
			{
			?>
			<div class="border-red">
			<p>
			<h2>Raté gros noob :</h2>
			<?php
				echo $_SESSION['nb_erreurs'];
				echo $_SESSION['pseudo_info'];
				echo $_SESSION['mdp_info'];
				echo $_SESSION['mdp_verif_info'];
				echo $_SESSION['mail_info'];
				echo $_SESSION['mail_verif_info'];
				echo $_SESSION['date_naissance_info'];
				echo $_SESSION['qcm_info'];
				echo $_SESSION['captcha_info'];
			?>
			</p>
			</div>
			<?php
			}
			?>
			
			<h1>Formulaire d'inscription</h1>
			<p>Bienvenue sur la page d'inscription de mon site !<br/>
			Merci de remplir ces champs pour continuer.</p>
			<form action="trait-inscription.php" method="post" name="Inscription">
				<fieldset><legend>CAPTCHA!</legend>
					<?php
					//echo("");
					//include('../includes/charte.php');
					?>
					
					
					<label for="captcha" class="float">Entrez les 2 caractères (majuscules ou chiffres) contenus dans l'image :<br/> klik sur l'image <br/> pour en changer</label> <input type="text" name="captcha" id="captcha"> <br/>
					<A HREF="javascript:history.go(0)"><img src="captcha.php" /></A>
				</fieldset>
				<fieldset><legend>Identifiants</legend>
					<label for="pseudo" class="float">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" size="30" value="<?php if($_SESSION['pseudo_info'] == '') echo htmlspecialchars($_SESSION['form_pseudo'], ENT_QUOTES) ; else echo $_GET['pseudo'] ?>" /> <em>(compris entre 3 et 32 caractères)</em><br />
					<label for="mdp" class="float">Mot de passe :</label> <input type="password" name="mdp" id="mdp" size="30" value="<?php if($_SESSION['mdp_info'] == '') echo htmlspecialchars($_SESSION['form_mdp'], ENT_QUOTES) ; ?>" /> <em>(compris entre 2 et 50 caractères)</em><br />
					<label for="mdp_verif" class="float">Mot de passe (vérification) :</label> <input type="password" name="mdp_verif" id="mdp_verif" size="30" value="<?php if($_SESSION['mdp_verif_info'] == '') echo htmlspecialchars($_SESSION['form_mdp_verif'], ENT_QUOTES) ; ?>" /><br />
				</fieldset>
				<div class="center"><input type="submit" value="Inscription" /></div>
			</form>
		</div>


<!--bas-->
<?php
include('../includes/bas.php');
mysql_close();
?>

