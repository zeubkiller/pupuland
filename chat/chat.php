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

<p><a href="chat/minichat.php">Archives</a></p>

<div id="chat">   
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
				$reponse = $bdd->query('SELECT pseudo, message, date FROM minichat ORDER BY DATE DESC LIMIT 0, 10');
				
				$donnees = $reponse->fetchAll();
				
				$donnees = array_reverse($donnees);
				//print_r($donnees);

				// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
				foreach ($donnees as &$current) {
					echo '<p><strong>' 
					//. htmlspecialchars($current['pseudo']) 
					. $current['pseudo']
					. '</strong></br> '
					//. htmlspecialchars($current['date']) . ':</br>' 
					. htmlspecialchars($current['message']) . '</p>';
				}
				/*
				while ($donnees = $reponse->fetch())
				{
					echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong></br> ' . htmlspecialchars($donnees['date']) . ':</br>' . htmlspecialchars($donnees['message']) . '</p>';
				}
				*/

				$reponse->closeCursor();

			?>
		   <form action="chat/minichat_post.php" method="post">
				<p>
				
					 <?php 	if (isset($_SESSION['membre_pseudo']))
					{
					?>	 	
						<label for="pseudo">
					<?php
						 echo $_SESSION['membre_pseudo'];
					?>	 
						</label> :
						 <input type="hidden" name="pseudo" id="pseudo" value="<?php echo $_SESSION['membre_pseudo'];?>"/>
						 
					<?php
					}
					else
					{
					?>
							<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br />
							<label for="message">Message</label> :
					<?php
					}
					 ?>
					 
					
					<!--- OLD
					<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value=""/><br /> -->
					  <input type="text" name="message" id="message" /><br />

					<input type="hidden" name="origin" id="origin" value="<?php echo curPageURL();?>"/>
					
					<input type="submit" value="Envoyer" />
				</p>
			</form>
		</div>