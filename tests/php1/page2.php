<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?
class Commande {
    var $nomClient;
    var $listePizzas;
}

?>

    <head>
        <title>Accueil</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        <p>
            Cette ligne a Ã©tÃ© Ã©crite entiÃ¨rement en HTML.<br />
            Ouaich les gros ici c'est le space tchaaa vuuuu!<br />
            Ouaich les gros ici c'est le space tchaaa vuuuu2!<br />

            <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>


			<?php phpinfo(); ?>
        </p>
    </body>
</html>
