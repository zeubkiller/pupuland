<?php
/*
Neoterranos & LkY
Page nb_membres.php

Affiche une liste complète des membres.

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

$titre = 'Liste des membres du site';

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
                                <a href="index.php">Accueil</a> => <a href="stats.php?see=nb_membres">Liste des membres</a>
                        </div>
<?php
						$membre_query = sqlquery("SELECT membre_id, membre_pseudo, membre_inscription
						FROM membresdru
						ORDER BY membre_id ASC", 2); //ORDER BY s'occupe du tri !
						$i = 0;
?>
                        <div class="membre_liste">
                                <table>
                                        <thead>
											<th>N° du membre</th>
											<th>Pseudonyme</th>
											<th>Date d'inscription</th>
                                        </thead>
                                        
                                        <tfoot>
											<th>N° du membre</th>
											<th>Pseudonyme</th>
											<th>Date d'inscription</th>
                                        </tfoot>
										<tbody>
<?php
											while(isset($membre_query[$i]))
											{
													echo '<tr class="ligne_'.($i%2).'">
													<td>'.$membre_query[$i]['membre_id'].'</td>
													<td><a href="membres/user.php?id='.$membre_query[$i]['membre_id'].'">'.htmlspecialchars($membre_query[$i]['membre_pseudo'], ENT_QUOTES).'</a></td>
													<td>'.mepd($membre_query[$i]['membre_inscription']).'</td>
													</tr>
													
													';
													$i++;
											}
											
											if($i == 0) echo '<tr><td colspan="3">Pas de membre trouvé.</td></tr>';
?>
                                        </tbody>
                                </table>
                        </div>
                </div>