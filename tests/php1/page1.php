<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?
class Commande {
    var $nomClient;
    var $listePizzas;
}

$client = new Commande();
$client->nomClient="PHPDebutant";
$client->listePizzas[0] = 5;  // disons que 0 est le code pour "Pizza Royale", j'en veux 5
$client->listePizzas[1] = 2;  // je veux deux "Campagnarde" (n°1)
?>

<?php
//ici les parametres pour la connexion
   $host="tsointsoin2.sql.free.fr";
   $base="tsointsoin2";
   $passe="v9ekjh41";

//on effectue la connexion
       @mysql_connect("$host","$base","$passe");

//Selection de la base de donnees qui porte le meme nom que votre login
          $select_base=@mysql_select_db("$base");

		  $res = 0 ;

?>
    <head>
        <title>Accueil</title>
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        <p>
            Cette ligne a ete ecrite entierement en HTML.<br />
            Ouaich les gros ici c'est le space tchaaa vuuuu!<br />
            Ouaich les gros ici c'est le space tchaaa vuuuu2!<br />

            <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>

			<?php phpinfo(); ?>
        </p>
    </body>
</html>
