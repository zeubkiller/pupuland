<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudodo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
	
    </form>

<?php
// Connexion à la base de données
echo('<br/>test0<br/>');
try
{
	$pdosql = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'azerty', '');
	
	echo('<br/>test1<br/>');
	$bidon = $pdosql->query("SELECT * FROM *");
	echo('<br/>test2<br/>');
	try{
		$dbh = new PDO("sqlite:$fichierDb");
		echo('<br/>test3<br/>');
	}
	catch (PDOException $e){
		echo 'Connection failed: ' . $e->getMessage();
	}
	
	$dbh->exec("CREATE TABLE table1 (nom VARCHAR(50),message VARCHAR(50))");
	
	$dbh->exec("INSERT INTO table1 (nom, message) VALUES ('Trop1','mess1')");
	$dbh->exec("INSERT INTO table1 (nom, message) VALUES ('Trop2','mess2')");
	
	echo('<br/>test3.5<br/>');
	
	$res = $dbh->query('SELECT * FROM table1');
	
	while ($donnees = $res->fetch())
	{
		echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
	}
	
	echo $val [0]; 
	echo $val [1]; 
	echo $val [2]; 
	echo $val [3]; 
	echo $val [4]; 
	echo $val [5]; 
	
	
	echo('<br/>test4<br/>');
	$dbh->exec("CREATE TABLE minichat (pseudo VARCHAR(50),message VARCHAR(250))");
	echo('<br/>test5<br/>');
	$dbh->exec("INSERT INTO minichat (pseudo,message) VALUES ('pseud','mess')");
	echo('<br/>test6<br/>');
	$res = $dbh->query('SELECT * FROM table1');
	echo('<br/>test7<br/>');
	$val=$res->fetch();
	echo $val [0]; 
	echo $val [0]; 
	echo('<br/>test10000<br/>');
	
			
}
catch(Exception $e)
{
		echo 'EXCEP ';
        die('Erreur : '.$e->getMessage());
}

$dbh->exec("CREATE TABLE minichat (pseudo VARCHAR(50),message VARCHAR(50))");

$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Récupération des 10 derniers messages

$dbh->exec("INSERT INTO minichat (pseudo, message) VALUES ('pseudo1','message1')");
$dbh->exec("INSERT INTO minichat (pseudo, message) VALUES ('pseudo2','message2')");
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>