<?php
/*
Neoterranos & LkY
Page connexion.php

Permet de se connecter au site.

Quelques indications : (Utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations/erreurs :
--------------------------
Membre qui essaie de se connecter alors qu'il l'est déjà
Vous êtes bien connecté
Erreur de mot de passe
Erreur de pseudo doublon (normalement impossible)
Pseudo inconnu
--------------------------
*/

session_start();
header('Content-type: text/html; charset=utf-8');
include('../includes/config.php');

/********Actualisation de la session...**********/

include('../includes/fonctions.php');
connexionbdd();
actualiser_session();

/********Fin actualisation de session...**********/

if(isset($_SESSION['membre_id']))
{
	$informations = Array(//Membre qui essaie de se connecter alors qu'il l'est déjà
					true,
					'Vous êtes déjà connecté',
					'Vous êtes déjà connecté avec le pseudo <span class="pseudo">'.htmlspecialchars($_SESSION['membre_pseudo'], ENT_QUOTES).'</span>.',
					' - <a href="'.ROOTPATH.'/membres/deconnexion.php">Se déconnecter</a>',
					ROOTPATH.'/index.php',
					5
					);
	
	require_once('../information.php');
	exit();
}

if($_POST['validate'] != 'ok')
{
/********Entête et titre de page*********/

$titre = 'Connexion';

include('../includes/haut.php'); //contient le doctype, et head.


/**********Fin entête et titre***********/
?>		
		<div id="colonne_gauche">
		<?php
		include('../includes/colg.php');
		?>
		</div>
		
		<div id="contenu">
			<div id="map">
				<a href="../index.php">Accueil</a> => <a href="connexion.php">Connexion</a>
			</div>
					
			<h1>Formulaire de connexion</h1>
			<p>Pour vous connecter, indiquez votre pseudo et votre mot de passe.<br/>
			Vous pouvez aussi cocher l'option "Me connecter automatiquement à mon
			prochain passage." pour laisser une trace sur votre ordinateur pour être
			connecté automatiquement.<br/>
			Ce système de trace est basé sur les cookies, ce sont des petits fichiers
			contenant votre numéro d'identification ainsi qu'une version cryptée de votre
			mot de passe. Ces fichiers ne peuvent en aucun cas endommager votre ordinateur,
			ni l'affecter d'aucune façons, vous pourrez les supprimer à tout moment dans
			les options de votre navigateur.</p>
			
			<form name="connexion" id="connexion" method="post" action="connexion.php">
				<fieldset><legend>Connexion</legend>
					<label for="pseudo" class="float">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_SESSION['connexion_pseudo'])) echo $_SESSION['connexion_pseudo']; ?>"/><br/>
					<label for="mdp" class="float">Passe :</label> <input type="password" name="mdp" id="mdp"/><br/>
					<input type="hidden" name="validate" id="validate" value="ok"/>
					<input type="checkbox" name="cookie" id="cookie"/> <label for="cookie">Me connecter automatiquement à mon prochain passage.</label><br/>
					<div class="center"><input type="submit" value="Connexion" /></div>
				</fieldset>
			</form>
			
			<h1>Options</h1>
			<p><a href="inscription.php">Je ne suis pas inscrit !</a><br/>
			<a href="moncompte.php?action=reset">J'ai oublié mon mot de passe !</a>
			</p>
			<?php
}
			
			else
			{
				$result = sqlquery("SELECT COUNT(membre_id) AS nbr, membre_id, membre_pseudo, membre_mdp FROM membresdru WHERE
				membre_pseudo = '".mysql_real_escape_string($_POST['pseudo'])."' GROUP BY membre_id", 1);
				
				if($result['nbr'] == 1)
				{
					if(md5($_POST['mdp']) == $result['membre_mdp'])
					{
						$_SESSION['membre_id'] = $result['membre_id'];
						$_SESSION['membre_pseudo'] = $result['membre_pseudo'];
						$_SESSION['membre_mdp'] = $result['membre_mdp'];
						unset($_SESSION['connexion_pseudo']);
						
						if(isset($_POST['cookie']) && $_POST['cookie'] == 'on')
						{
							setcookie('membre_id', $result['membre_id'], time()+365*24*3600);
							setcookie('membre_mdp', $result['membre_mdp'], time()+365*24*3600);
						}
						
						$informations = Array(/*Vous êtes bien connecté*/
										false,
										'Connexion réussie',
										'Vous êtes désormais connecté avec le pseudo <span class="pseudo">'.htmlspecialchars($_SESSION['membre_pseudo'], ENT_QUOTES).'</span>.',
										'',
										ROOTPATH.'/index.php',
										3
										);
						require_once('../information.php');
						exit();
					}
					
					else
					{
						$_SESSION['connexion_pseudo'] = $_POST['pseudo'];
						$informations = Array(/*Erreur de mot de passe*/
										true,
										'Mauvais mot de passe',
										'Vous avez fourni un mot de passe incorrect.',
										' - <a href="'.ROOTPATH.'/index.php">Index</a>',
										ROOTPATH.'/membres/connexion.php',
										3
										);
						require_once('../information.php');
						exit();
					}
				}
				
				else if($result['nbr'] > 1)
				{
					$informations = Array(/*Erreur de pseudo doublon (normalement impossible)*/
									true,
									'Doublon',
									'Deux membres ou plus ont le même pseudo, contactez un administrateur pour régler le problème.',
									' - <a href="'.ROOTPATH.'/index.php">Index</a>',
									ROOTPATH.'/contact.php',
									3
									);
					require_once('../information.php');
					exit();
				}
				
				else
				{
					$informations = Array(/*Pseudo inconnu*/
									true,
									'Pseudo inconnu',
									'Le pseudo <span class="pseudo">'.htmlspecialchars($_POST['pseudo'], ENT_QUOTES).'</span> n\'existe pas dans notre base de données. Vous avez probablement fait une erreur.',
									' - <a href="'.ROOTPATH.'/index.php">Index</a>',
									ROOTPATH.'/membres/connexion.php',
									5
									);
					require_once('../information.php');
					exit();
				}
			}
			?>			
		</div>

		<?php
		include('../includes/bas.php');
		mysql_close();
		?>