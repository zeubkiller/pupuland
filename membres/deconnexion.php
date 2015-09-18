<?php
/*
Neoterranos & LkY
Page deconnexion.php

Permet de se déconnecter du site.

Quelques indications : (Utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations/erreurs :
--------------------------
Déconnexion
--------------------------
*/

session_start();
include('../includes/config.php');
include('../includes/fonctions.php');
connexionbdd();
mysql_query("DELETE FROM connectes WHERE connectes_id = ".$_SESSION['membre_id']) or exit(mysql_error());
vider_cookie();
session_destroy();

$informations = Array(/*Déconnexion*/
				false,
				'Déconnexion',
				'Vous êtes à présent déconnecté.',
				' - <a href="'.ROOTPATH.'/membres/connexion.php">Se connecter</a>',
				ROOTPATH.'/index.php',
				5
				);

require_once('../information.php');
exit();
?>