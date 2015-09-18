<?php
/*
Neoterranos & LkY
Page index.php

Index des statistiques du site (page incluse).

Quelques indications (utiliser l'outil de recherche et rechercher les mentions données) :

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations / erreurs :
--------------------------
Aucune information / erreur
--------------------------
*/

/********En-tête et titre de page*********/

$titre = 'Statistiques du site';

include('includes/haut.php'); //contient le doctype, et head.

/**********Fin en-tête et titre***********/
?>
                <div id="colonne_gauche">
                <?php
                include('includes/colg.php');
                ?>
                </div>
                
                <div id="contenu">
                        <div id="map">
                                <a href="index.php">Accueil</a> => <a href="stats.php">Statistiques</a>
                        </div>
                        
                        <h1>Statistiques</h1>
                        
                        Bienvenue sur la page des statistiques du site.<br/>
                        Ici, vous pourrez voir les statistiques concernant les membres, les forums, les news, etc., etc. :)<br/>
                        Bonne visite !
                        
                        <h2>Membres</h2>
                        <div class="center">
                                -> <a href="stats.php?see=nb_membres">Il y a <?php echo $num1; if($num1 <= 1) echo ' membre inscrit'; else echo ' membres inscrits'; ?>.</a><br/>
                                -> <a href="stats.php?see=connectes">Il y a <?php echo $num2; if($num2 <= 1) echo ' visiteur'; else echo ' visiteurs' ?>.</a><br/>
                                -> <a href="stats.php?see=passed">Voir les dernières visites de chaque membre.</a><br/>
                        </div>
                </div>