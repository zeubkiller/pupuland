<div id="chat">   
			<?php
				// Connexion � la base de donn�es
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'bitefoutreteub');
				}
				catch(Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}

				// R�cup�ration des 10 derniers messages
				$reponse = $bdd->query('SELECT pseudo, message, date FROM minichat ORDER BY DATE DESC LIMIT 0, 10');
				
				$donnees = $reponse->fetchAll();
				
				$donnees = array_reverse($donnees);
				//print_r($donnees);

				// Affichage de chaque message (toutes les donn�es sont prot�g�es par htmlspecialchars)
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
		   <form action="minichat_post.php" method="post">
				<p>
					<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php if (isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>"/><br />
					
					
					<!--- OLD
					<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value=""/><br /> -->
					<label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

					<input type="submit" value="Envoyer" />
				</p>
			</form>
		</div>