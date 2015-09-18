<?php
/*
Neoterranos & LkY
Page passed.php

Affiche une liste complète des dates de visite des membres.

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

$titre = 'Liste des dernières visites';

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
                                <a href="index.php">Accueil</a> => <a href="stats.php?see=passed">Liste des visites</a>
                        </div>
                        
                        <h1>Liste des visites</h1>

                <?php                
                $membre_query = sqlquery("SELECT membre_id, membre_pseudo, membre_derniere_visite, connectes_id
                FROM membresdru
                LEFT JOIN connectes
                ON membre_id = connectes_id
                ORDER BY membre_derniere_visite DESC", 2);
                $i = 0;
                ?>
                        <div class="membre_liste">
                                <table>
                                        <thead>
                                                <th>N° du membre</th>
                                                <th>Pseudonyme</th>
                                                <th>Dernière connexion</th>
                                                <th>Statut</th>
                                        </thead>
                                        
                                        <tfoot>
                                                <th>N° du membre</th>
                                                <th>Pseudonyme</th>
                                                <th>Dernière connexion</th>
                                                <th>Statut</th>
                                        </tfoot>
                                        
                                        <tbody>
                <?php
                while(isset($membre_query[$i]))
                {
                        if($membre_query[$i]['connectes_id'] == $membre_query[$i]['membre_id']) //gestion des statuts de connexion
                        {
                                $statut = '<span class="actif">Connecté</span>';
                        }
                        
                        else
                        {
                                $statut = '<span class="inactif">Déconnecté</span>';
                        }
                        
                        echo '<tr class="ligne_'.($i%2).'">
                        <td>'.$membre_query[$i]['membre_id'].'</td>
                        <td><a href="membres/user.php?id='.$membre_query[$i]['membre_id'].'">'.htmlspecialchars($membre_query[$i]['membre_pseudo'], ENT_QUOTES).'</a></td>
                        <td>'.mepd($membre_query[$i]['membre_derniere_visite']).'</td>
                        <td>'.$statut.'</td>
                        </tr>
                        
                        ';
                        $i++;
                }
                
                if($i == 0) echo '<tr><td colspan="4">Pas de membre trouvé.</td></tr>';
                ?>
                                        </tbody>
                                </table>
                        </div>
                </div>