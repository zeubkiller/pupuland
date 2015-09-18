<?php

include('head.php'); //contient le doctype, et head.
?>
	<body>
		<div id="banniere">
			<a href="<?php echo ROOTPATH;?>/index.php"><img src="<?php echo ROOTPATH; ?>/includes/qgwc_banniere.gif"/></a>
		</div>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo ROOTPATH;?>/index.php">PUPUland</a>
			</div>
			
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
			  
<?php
if(isset($_SESSION['membre_id']) and isset($_SESSION['membre_pseudo']) )
{

echo ( '<strong style="background:#80BFFF">' . $_SESSION['membre_pseudo'] . '</strong> <span style="color:#2EFE64">Connecté</span> ');



?>
				<li><a href="<?php echo ROOTPATH; ?>/membres/moncompte.php">Gérer mon compte</a></li>
				<li><a href="<?php echo ROOTPATH; ?>/membres/deconnexion.php">Se déconnecter</a></li>
<?php
}

else
{
?>
				<li><a href="<?php echo ROOTPATH; ?>/membres/inscription.php">Inscription</a></li>
				<li><a href="<?php echo ROOTPATH; ?>/membres/connexion.php">Connexion</a>
<?php
}
?>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>
		