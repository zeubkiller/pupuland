-- phpMyAdmin SQL Dump
-- version 4.3.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 22 Septembre 2015 à 19:32
-- Version du serveur :  5.5.43-MariaDB
-- Version de PHP :  5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `armand`
--
--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`ID` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`ID`, `titre`, `message`, `date`) VALUES
(39, 'gvj', 'jvklvo', '2015-04-18 15:27:37'),
(40, 'ttttttttt', 'kkkkkkkkk', '2015-04-18 15:28:19');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
`ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date`) VALUES
(1, 'biteman', 'foutre alors', '0000-00-00 00:00:00'),
(2, 'foutreman', 'refoutre!', '2015-04-03 18:11:21'),
(3, 'guy', 'jtink salope', '2015-04-03 18:11:39'),
(4, 'foutreman', 'jte cut', '2015-04-03 18:59:46'),
(5, 'guy', 'ça fonctionne toujours c la foly', '2015-04-04 11:14:12'),
(6, 'guy', 'ouaich guy est ce que jsuis online', '2015-04-04 14:46:53'),
(7, 'guy', 'test', '2015-04-04 15:03:55'),
(8, 'guy', 'c''était nimp hier soir', '2015-04-05 12:00:16'),
(9, 'wegro', 'puceau de noir', '2015-04-08 16:36:48'),
(10, '81212', 'envoie chatte au 8 12 12', '2015-04-08 16:37:58'),
(11, '81212', 'Et tu saura si ''as une chatte', '2015-04-08 16:38:11'),
(12, 'chatteman', 'penis ambidextre', '2015-04-08 16:38:48'),
(13, 'pseudo', 'druuuuuuuuuuuuu', '2015-04-10 19:21:55'),
(14, 'pseudo', 'ca marche presque', '2015-04-10 19:22:05'),
(15, 'pseudo', 'ddredredre', '2015-04-10 19:23:36'),
(16, 'dafuq', 'wewe', '2015-04-11 09:31:38'),
(17, 'pouet', 'gne', '2015-04-11 09:35:48'),
(18, 'mouep', 'pioupiou', '2015-04-11 09:40:02'),
(19, 'doubidou', 'stach', '2015-04-11 09:43:42'),
(20, 'doubidou', 'restach', '2015-04-11 09:43:49'),
(21, 'prout', 'gnedrupaté', '2015-04-11 10:18:05'),
(22, '&lt;strong&gt;walou&lt;/strong&gt;', 'blabla', '2015-04-11 10:19:35'),
(23, '&amp;pseudo=lalali', 'lolilol', '2015-04-11 10:20:49'),
(24, 't', 'bon ca a l''air de fonctionner tavu', '2015-04-11 10:29:00'),
(25, 'sqr', 'aaaaa', '2015-04-12 17:07:11'),
(26, 'dru', 'lafoy', '2015-04-12 17:19:36'),
(27, 'dru', 'lafoy2', '2015-04-12 17:20:14'),
(28, 'dru', 'prout non mais ho', '2015-04-12 17:30:39'),
(29, 'dru', 'allez ca marche^^', '2015-04-12 17:30:44'),
(30, 'guesttavu', 'wegrobienoubien', '2015-04-12 17:43:31'),
(31, 'user1000', 'wéwé', '2015-04-12 17:51:35'),
(32, 'user1000', 'gne ouaich', '2015-04-12 18:01:42'),
(33, 'user1000', 'pouet', '2015-04-12 18:05:40'),
(34, 'Tu pusssss', 'George', '2015-04-13 16:54:52'),
(35, 'le mec il confond pseudo et message', 'guy', '2015-04-13 16:55:14'),
(36, 'TT_', 'pucelle', '2015-04-13 16:59:00'),
(37, 'TT_', 'pute', '2015-04-15 17:26:06'),
(38, 'FisDePute', 'ola patata', '2015-04-15 17:26:11'),
(39, 'user1000', 'gnééé', '2015-04-18 13:59:20'),
(40, 'user1000', 'w00t', '2015-04-18 13:59:26'),
(41, 'wewe', 'tavu', '2015-04-22 17:34:42');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`ID`) COMMENT 'identifoutre';

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
 ADD PRIMARY KEY (`ID`) COMMENT 'identifoutre';

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;--
-- Base de données :  `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE IF NOT EXISTS `connectes` (
  `connectes_id` int(11) NOT NULL,
  `connectes_ip` varchar(16) NOT NULL,
  `connectes_membre` varchar(16) NOT NULL,
  `connectes_actualisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `connectes`
--

INSERT INTO `connectes` (`connectes_id`, `connectes_ip`, `connectes_membre`, `connectes_actualisation`) VALUES
(-1, '109.74.86.154', '109.74.86.154', 1441760171);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
`membre_id` int(11) NOT NULL,
  `membre_pseudo` varchar(32) NOT NULL,
  `membre_mdp` varchar(40) NOT NULL,
  `membre_mail` varchar(100) NOT NULL,
  `membre_inscription` bigint(20) NOT NULL,
  `membre_naissance` varchar(11) NOT NULL,
  `membre_msn` varchar(255) NOT NULL,
  `membre_yahoo` varchar(255) NOT NULL,
  `membre_aim` varchar(255) NOT NULL,
  `membre_localisation` varchar(255) NOT NULL,
  `membre_profession` varchar(255) NOT NULL,
  `membre_avatar` varchar(255) NOT NULL,
  `membre_biographie` text NOT NULL,
  `membre_signature` text NOT NULL,
  `membre_derniere_visite` bigint(20) NOT NULL,
  `membre_banni` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`membre_id`, `membre_pseudo`, `membre_mdp`, `membre_mail`, `membre_inscription`, `membre_naissance`, `membre_msn`, `membre_yahoo`, `membre_aim`, `membre_localisation`, `membre_profession`, `membre_avatar`, `membre_biographie`, `membre_signature`, `membre_derniere_visite`, `membre_banni`) VALUES
(1, 'dru', 'a67954fc1c7cf79f412296c9a7b2ef21', '', 1428830313, '', '', '', '', '', '', '', '', '', 1428860180, 0),
(12, 'dru3', 'a67954fc1c7cf79f412296c9a7b2ef21', 'bite@couilles.com', 1428842408, '', '', '', '', '', '', '', '', '', 1428842408, 0);

-- --------------------------------------------------------

--
-- Structure de la table `membresdru`
--

CREATE TABLE IF NOT EXISTS `membresdru` (
`membre_id` int(11) NOT NULL,
  `membre_pseudo` varchar(32) NOT NULL,
  `membre_mdp` varchar(40) NOT NULL,
  `membre_inscription` bigint(20) NOT NULL,
  `membre_avatar` varchar(255) NOT NULL,
  `membre_derniere_visite` bigint(20) NOT NULL,
  `membre_banni` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membresdru`
--

INSERT INTO `membresdru` (`membre_id`, `membre_pseudo`, `membre_mdp`, `membre_inscription`, `membre_avatar`, `membre_derniere_visite`, `membre_banni`) VALUES
(1, 'pute1', 'a67954fc1c7cf79f412296c9a7b2ef21', 1428845005, '', 1428845005, 0),
(2, 'pute2', 'a67954fc1c7cf79f412296c9a7b2ef21', 1428845274, '', 1428845274, 0),
(3, 'user1000', 'a67954fc1c7cf79f412296c9a7b2ef21', 1428861075, '', 1440785037, 0),
(4, 'TT_', 'a67954fc1c7cf79f412296c9a7b2ef21', 1428944261, '', 1429123642, 0),
(5, 'FisDePute', '0ba0dd14265fced34a1202aeced9f02d', 1429118693, '', 1429119330, 0),
(6, 'dolin007', 'b66b4bb5660c5fa066796f3429528cef', 1429819277, '', 1429819624, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `connectes`
--
ALTER TABLE `connectes`
 ADD UNIQUE KEY `membre_id` (`connectes_id`,`connectes_membre`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
 ADD PRIMARY KEY (`membre_id`), ADD UNIQUE KEY `membre_pseudo` (`membre_pseudo`), ADD UNIQUE KEY `membre_mail_3` (`membre_mail`), ADD UNIQUE KEY `membre_mail_4` (`membre_mail`);

--
-- Index pour la table `membresdru`
--
ALTER TABLE `membresdru`
 ADD PRIMARY KEY (`membre_id`), ADD UNIQUE KEY `membre_pseudo` (`membre_pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
MODIFY `membre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `membresdru`
--
ALTER TABLE `membresdru`
MODIFY `membre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `foutretable`
--

CREATE TABLE IF NOT EXISTS `foutretable` (
  `id` int(11) NOT NULL,
  `couleur` varchar(25) NOT NULL,
  `quantite` int(11) NOT NULL,
  `refoutre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE IF NOT EXISTS `jeux_video` (
`ID` int(10) unsigned NOT NULL,
  `nom` varchar(255) NOT NULL,
  `possesseur` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'Florent', 'NES', 4, 1, 'Un jeu d''anthologie !'),
(2, 'Sonic', 'Patrick', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'Florent', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'Florent', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'Michel', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'Patrick', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Patrick', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'Michel', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'Michel', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d''histoire d''amour. A essayer !'),
(10, 'Yoshi''s Island', 'Florent', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'Florent', 'PC', 44, 12, 'Un bon jeu d''action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'Patrick', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'Florent', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'Michel', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'Michel', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'Michel', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'Patrick', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'Michel', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'Florent', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 'Patrick', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'Patrick', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'Florent', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'Patrick', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'Patrick', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'Florent', 'PS', 20, 1, 'Comme sur PC mais la c''est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'Patrick', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'Florent', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'Florent', 'Megadrive', 15, 1, 'Vivez l''aventure de l''homme araignée'),
(29, 'Midtown Madness 3', 'Michel', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'Florent', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'Michel', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'Patrick', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'Michel', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'Florent', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'Patrick', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'Michel', 'PS2', 20, 2, 'Un shoot''em up pour pc'),
(37, 'Crazy Taxi', 'Florent', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'Mathieu', 'PS2', 10, 1, 'Le jeu de l''émission'),
(39, 'FIFA 64', 'Michel', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'Florent', 'PS2', 10, 1, 'Le jeu de l''émission'),
(41, 'Monopoly', 'Sebastien', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'Corentin', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L''Empereur', 'Florent', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'Mathieu', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Mathieu', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'Corentin', 'PC', 15, 32, 'L''autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'Sébastien', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'Sebastien', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'Florent', 'Xbox', 29, 1, 'Jeu de gestion d''un parc d''attraction'),
(50, 'Splinter Cell', 'Patrick', 'Xbox', 53, 1, 'Jeu magnifique !');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
`id` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
`ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date`) VALUES
(1, 'biteman', 'foutre alors', '0000-00-00 00:00:00'),
(2, 'foutreman', 'refoutre!', '2015-04-03 18:11:21'),
(3, 'guy', 'jtink salope', '2015-04-03 18:11:39'),
(4, 'foutreman', 'jte cut', '2015-04-03 18:59:46'),
(5, 'guy', 'ça fonctionne toujours c la foly', '2015-04-04 11:14:12'),
(6, 'guy', 'ouaich guy est ce que jsuis online', '2015-04-04 14:46:53'),
(7, 'guy', 'test', '2015-04-04 15:03:55'),
(8, 'guy', 'c''était nimp hier soir', '2015-04-05 12:00:16'),
(9, 'wegro', 'puceau de noir', '2015-04-08 16:36:48'),
(10, '81212', 'envoie chatte au 8 12 12', '2015-04-08 16:37:58'),
(11, '81212', 'Et tu saura si ''as une chatte', '2015-04-08 16:38:11'),
(12, 'chatteman', 'penis ambidextre', '2015-04-08 16:38:48'),
(13, 'pseudo', 'druuuuuuuuuuuuu', '2015-04-10 19:21:55'),
(14, 'pseudo', 'ca marche presque', '2015-04-10 19:22:05'),
(15, 'pseudo', 'ddredredre', '2015-04-10 19:23:36'),
(16, 'dafuq', 'wewe', '2015-04-11 09:31:38'),
(17, 'pouet', 'gne', '2015-04-11 09:35:48'),
(18, 'mouep', 'pioupiou', '2015-04-11 09:40:02'),
(19, 'doubidou', 'stach', '2015-04-11 09:43:42'),
(20, 'doubidou', 'restach', '2015-04-11 09:43:49'),
(21, 'prout', 'gnedrupaté', '2015-04-11 10:18:05'),
(22, '&lt;strong&gt;walou&lt;/strong&gt;', 'blabla', '2015-04-11 10:19:35'),
(23, '&amp;pseudo=lalali', 'lolilol', '2015-04-11 10:20:49'),
(24, 't', 'bon ca a l''air de fonctionner tavu', '2015-04-11 10:29:00'),
(25, 'sqr', 'aaaaa', '2015-04-12 17:07:11'),
(26, 'dru', 'lafoy', '2015-04-12 17:19:36'),
(27, 'dru', 'lafoy2', '2015-04-12 17:20:14'),
(28, 'dru', 'prout non mais ho', '2015-04-12 17:30:39'),
(29, 'dru', 'allez ca marche^^', '2015-04-12 17:30:44'),
(30, 'guesttavu', 'wegrobienoubien', '2015-04-12 17:43:31'),
(31, 'user1000', 'wéwé', '2015-04-12 17:51:35'),
(32, 'user1000', 'gne ouaich', '2015-04-12 18:01:42'),
(33, 'user1000', 'pouet', '2015-04-12 18:05:40'),
(34, 'Tu pusssss', 'George', '2015-04-13 16:54:52'),
(35, 'le mec il confond pseudo et message', 'guy', '2015-04-13 16:55:14'),
(36, 'TT_', 'pucelle', '2015-04-13 16:59:00'),
(37, 'TT_', 'pute', '2015-04-15 17:26:06'),
(38, 'FisDePute', 'ola patata', '2015-04-15 17:26:11'),
(39, 'user1000', 'ouinouin', '2015-04-18 13:56:09'),
(40, 'fdgdfg', 'dfgshdhsdhgsdg', '2015-04-23 10:48:51'),
(41, 'pute', 'foutre', '2015-04-23 10:49:09'),
(42, 'foutre', 'pute', '2015-04-23 10:49:16'),
(43, 'az', 'er', '2015-08-28 18:00:03'),
(44, 'pseudoooo', 'jure le ca marcheeeee', '2015-08-28 18:00:12');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `foutretable`
--
ALTER TABLE `foutretable`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
 ADD KEY `ID` (`ID`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
 ADD PRIMARY KEY (`ID`) COMMENT 'identifoutre';

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;--
-- Base de données :  `theo`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
