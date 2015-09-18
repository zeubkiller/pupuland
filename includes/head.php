<?php
/*

Page head.php

Page incluse créant le doctype etc etc.

Quelques indications : (utiliser l'outil de recherche et rechercher les mentions données)

*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
	<?php
	/**********Vérification du titre...*************/
	
	if(isset($titre) && trim($titre) != '')
	$titre = $titre.' : '.TITRESITE;
	
	else
	$titre = TITRESITE;
	
	/***********Fin vérification titre...************/
	?> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="language" content="fr" /><?php
//BOOTSTRAP
// <meta charset="utf-8">
// <meta http-equiv="X-UA-Compatible" content="IE=edge">
		?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="pupuland">
		<meta name="author" content="pupu">
		
		<title><?php echo $titre; ?></title>
	
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/css/design.css" type="text/css" media="screen" />
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/css/bootstrap.min.css" type="text/css" media="screen" />
		<link rel="icon" href="../../favicon.ico">
		<!-- Custom styles for this template 
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/css/starter-template.css" type="text/css" media="screen" />
		-->
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/css/theme.css" type="text/css" media="screen" />
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/css/blog.css" type="text/css" media="screen" />
		<?php
/*//BOOTSTRAP
?>
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
<?php
//BOOTSTRAP END
//*/
?>
		
	</head>
