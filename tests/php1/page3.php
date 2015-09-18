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
 
//Selection de la base de données qui porte le meme nom que votre login
          $select_base=@mysql_select_db("$base"); 

		  $res = 0 ;

?>
    <head>
        <title>Accueil</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
         
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            Ouaich les gros ici c'est le space tchaaa vuuuu!<br />
			
            Ouaich les gros ici c'est le space tchaaa vuuuu2!<br />

            <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>

			<?php
			//Si la connexion echoue
			 if (!$select_base) 
			//Afficher la ligne suivante
				echo "<font color=\"#CC0000\"><b>Mauvaise configuration!!! </b></font><br>  
			Vérifiez que votre login et mot de passe sont bien saisi pour la connexion 
			à la base <b>$base</b>"; 

			//Sinon afficher celle-ci
			 else echo "<b>Félicitations!!!</b> <br>Vous avez réussi à vous connecter correctement à 
			votre base de données <b>$base</b>"; 
			
			if ($client->listePizzas[1] == 2)
				echo " 2 pizza oueeee </br>";
			
			$pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
			$statement = $pdo->query("SELECT * FROM *");
			
			try{
			$dbh = new PDO("sqlite:$fichierDb");
			}
			catch (PDOException $e){
			echo 'Connection failed: ' . $e->getMessage();
			}

			$dbh->exec("CREATE TABLE table1 (nom VARCHAR(50))");
			$dbh->exec("INSERT INTO table1 (nom) VALUES ('Trop fort Dean')");

			$res = $dbh->query('SELECT * FROM table1');
			$val=$res->fetch();
			echo $val [0]; 

			
			?> 
			
			<?php phpinfo(); ?>
        </p>
    </body>
</html>