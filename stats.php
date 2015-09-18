<?php
/*
Neoterranos & LkY
Page stats.php

Statistiques du site.

Quelques indications (utiliser l'outil de recherche et rechercher les mentions données) :

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations / erreurs :
--------------------------
$_GET['see'] contient des caractères invalides (tentative de hack ?)
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

if($_GET['see'] == '' || !isset($_GET['see']))
{
        include('stats/index.php');
}

else
{
        if(strpos($_GET['see'], '.') !== FALSE || strpos($_GET['see'], ':') !== FALSE || strpos($_GET['see'], 'http') !== FALSE) //$_GET['see'] contient des caractères invalides (tentative de hack ?)
        {
                include('stats/index.php');
        }
        
        else if(file_exists('stats/'.$_GET['see'].'.php'))
        {
				include('stats/'.$_GET['see'].'.php');
        }
        else
        {
				echo('prouttte');
                include('stats/index.php');
        }
}

include('includes/bas.php');
mysql_close();
?>