<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'bitefoutreteub');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO articles (titre, message) VALUES(?, ?)');
//ori//$req->execute(array($_POST['pseudo'], $_POST['message']));


//pastesté//$req->execute(array(htmlspecialchars($_POST['pseudo']), $_POST['message']));
$cleantitre = htmlspecialchars($_POST['titre']) ;
$req->execute(array($cleantitre, $_POST['message']));

//htmlspecialchars($donnees['date'])

// Redirection du visiteur vers la page du minichat
//header('Location: index.php/?pseudo='.$_POST['pseudo']);
//page.php?param1=valeur1

header('Location: '.$_POST['origin']);
?>
