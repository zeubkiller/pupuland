<?php

/*
function init_affichage_articles()
{
	if(isset($_SESSION['membre_id']) && intval($_SESSION['membre_id']) != 0) //Vérification id
	{
		//utilisation de la fonction sqlquery, on sait qu'on aura qu'un résultat car l'id d'un membre est unique.
		$retour = sqlquery("SELECT membre_id, membre_pseudo, membre_mdp FROM membresdru WHERE membre_id = ".intval($_SESSION['membre_id']), 1);
		
		//Si la requête a un résultat (id est : si l'id existe dans la table membres)
		if(isset($retour['membre_pseudo']) && $retour['membre_pseudo'] != '')
		{
			if($_SESSION['membre_mdp'] != $retour['membre_mdp'])
			{
			}
		}
	}
}
*/
function affiche_article_video_simple($titre="", $intro="", $iframe="", $source="")
{
	//$titre = "Pussygun, need dans BF";
	echo("<div class=\"blog-post\">");
	echo("<h2 class=\"blog-post-title\">".$titre."</h2>");
	echo("<p class=\"blog-post-meta\">[date] par <a href=\"#\">[Auteur]</a></p><hr>");
	echo("<p>".$intro."</p>");
	echo("<p>".$iframe."</p>");
	echo("<p>Source : ".$source."</p>");
	echo("<hr><hr></div>");
}
?>
<div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Articles</h1>
        <p class="lead blog-description">Portion "blog"</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Liens vers les tests</h2>
            <p class="blog-post-meta">[date] par <a href="#">[Auteur]</a></p>

            </p>
				<p><a href="/~theo/tests/js1">js1</a></p>
				<p><a href="/~theo/tests/php1">php1</a></p>
				<p><a href="/~theo/tests/php2">php2</a></p>
				<p><a href="/~theo/tests/php3">php3</a></p>
				<p><a href="/~theo/tests/php4/minichat.php">php4 minichat</a></p>
				<p><a href="/~theo/tests/qgwc/">QGWC</a>
			</p>
			
            <hr>
			<h2>Titre</h2>
            <p>Patati patata, <a href="#">un petit lien</a>, patareti patareta.</p>
            <blockquote>
              <p>Petite portion <strong>Blockquote</strong></p>
            </blockquote>
            <p>Gnegne <em>de l'italique</em> la folie.</p>
            
            <h3>Sous-titre exemple de portion code</h3>
            <p>Parce que le code c'est la vie</p>
            <pre><code>Example code block</code></pre>
            <h3>Pupuces</h3>
            <ul>
              <li>Pupuce a point 1.</li>
			  <li>Pupuce a point 2.</li>
			  <li>Pupuce a point 3.</li>
            </ul>
            <ol>
              <li>Pupuce a nombre 1.</li>
			  <li>Pupuce a nombre 2.</li>
			  <li>Pupuce a nombre 3.</li>
            </ol>
		  <hr><hr>
          </div><!-- /.blog-post -->
		  
		  
		  <?php
			affiche_article_video_simple("Sony",
							"Histoire : j'ai essayé des trucs sur mon Sony, ça marchait pas, j'ai cherché sur google, et j'ai trouvé ça : (anglais)",
							"<iframe name=\"embedded\" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder=\"no\" width=\"560\" height=\"315\" scrolling=\"no\" src=\"http://www.theonion.com/videos/embed?id=182\"></iframe>",
							"<a href=\"http://www.theonion.com\">theonion.com</a>"
							);
			
			affiche_article_video_simple("Pussygun, need dans BF",
							"Inventé par les forces spéciales israéliennes oui monssieur : (anglais)",
							"<iframe width=\"560\" height=\"315\" src=\"http://www.koreus.com/embed/kitty-cornershot\"  frameborder=\"0\" allowfullscreen></iframe>",
							"Koreus <a href=\"http://www.koreus.com/video/kitty-cornershot.html\">Un chat en peluche sur un fusil d&#039;assaut</a>"
							);
		  ?>

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->