<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!-- <p><a href="chat/minichat.php">Archives</a></p> -->

<div id="articles">   
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

		// Récupération des 10 derniers messages
		$reponse = $bdd->query('SELECT titre, message, date FROM articles ORDER BY DATE DESC LIMIT 0, 10');
		
		$donnees = $reponse->fetchAll();
		
		$donnees = array_reverse($donnees);
		print_r($donnees);

		// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
		foreach ($donnees as &$current) {
			echo '<p><h3><strong>' 
			//. htmlspecialchars($current['titre']) 
			. $current['titre']
			. '</strong></br> '
			//. htmlspecialchars($current['date']) 
			. '</h3></br>' 
			. htmlspecialchars($current['message']) . '</p>';
		}
		/*
		while ($donnees = $reponse->fetch())
		{
			echo '<p><strong>' . htmlspecialchars($donnees['titre']) . '</strong></br> ' . htmlspecialchars($donnees['date']) . ':</br>' . htmlspecialchars($donnees['message']) . '</p>';
		}
		*/

		$reponse->closeCursor();

	?>
   <form action="article_post.php" method="post">
		<p>
		
					<label for="titre">Titre</label> : <input type="text" name="titre" id="titre"/><br />
					<label for="message">Message</label> :
			
			 
			
			<!--- OLD
			<label for="titre">titre</label> : <input type="text" name="titre" id="titre" value=""/><br /> -->
			  <input type="text" name="message" id="message" /><br />

			<input type="hidden" name="origin" id="origin" value="<?php echo curPageURL();?>"/>
			
			<input type="submit" value="Envoyer" />
		</p>
	</form>
</div>