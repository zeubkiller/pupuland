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
$client->listePizzas[1] = 2;  // je veux deux "Campagnarde" (n�1)
?>

<?php 
//ici les parametres pour la connexion
   $host="localhost"; 
   $base="test"; 
   $passe=""; 

//on effectue la connexion
       @mysql_connect("$host","$base","$passe");
 
//Selection de la base de donn�es qui porte le meme nom que votre login
          $select_base=@mysql_select_db("$base"); 

		  $res = 0 ;

?>
    <head>
        <title>drutest</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h2>Le pat&eacute; est dru, je r&eacute;pete, Le pat&eacute; est dru</h2>
         
        <p>
            <?php echo "foutre PHP."; ?>

			<?php
			//Si la connexion echoue
			 if (!$select_base) 
			//Afficher la ligne suivante
				echo "<font color=\"#CC0000\"><b>Mauvaise configuration!!! </b></font><br>  
			V�rifiez que votre login et mot de passe sont bien saisi pour la connexion 
			� la base <b>$base</b>"; 

			//Sinon afficher celle-ci
			 else echo "<font color=\"#00CC00\"><b>Connexion OK</b></font> a la base <b>$base</b> <br>"; 
			
			if ($client->listePizzas[1] == 2)
				echo " 2 pizza youpi <br>";
			
			$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'fuckit');
			echo " macaroni <br>";
			
			$statement = $pdo->query("SELECT * FROM *");
			
			echo $statement;
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