-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Mai 2017 à 09:33
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webcup2017`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_wc`
--

CREATE TABLE `article_wc` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(255) NOT NULL,
  `contenu_article` text NOT NULL,
  `date_article` date NOT NULL,
  `auteur_article` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='La table des articles / billet. ';

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_wc`
--

CREATE TABLE `commentaire_wc` (
  `id_commentaire` int(11) NOT NULL,
  `titre_commentaire` varchar(400) NOT NULL,
  `contenu_commentaire` text NOT NULL,
  `date_commentaire` date NOT NULL,
  `auteur_commentaire` varchar(255) NOT NULL,
  `user_commentaire` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livredor_wc`
--

CREATE TABLE `livredor_wc` (
  `id_livredor` int(11) NOT NULL,
  `contenu_livredor` text NOT NULL,
  `date_livredor` datetime NOT NULL,
  `auteur_livredor` varchar(255) NOT NULL,
  `avatar_user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livredor_wc`
--

INSERT INTO `livredor_wc` (`id_livredor`, `contenu_livredor`, `date_livredor`, `auteur_livredor`, `avatar_user`) VALUES
(27, 'cc', '2017-05-08 12:59:58', 'romane-deboisvilliers@hotmail.fr', '590dad0ed6b5247'),
(26, 'qdssqd', '2017-05-08 12:56:12', 'timoz@hotmail.fr', '590dad0ed6b52178'),
(28, 'coucou je suis une loutre ', '2017-05-08 13:01:10', 'timoz974', '590dad0ed6b52178');

-- --------------------------------------------------------

--
-- Structure de la table `user_wc`
--

CREATE TABLE `user_wc` (
  `id_user` int(11) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `pseudo_user` text NOT NULL,
  `mdp_user` varchar(255) NOT NULL,
  `avatar_user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='La table des users ';

--
-- Contenu de la table `user_wc`
--

INSERT INTO `user_wc` (`id_user`, `mail_user`, `pseudo_user`, `mdp_user`, `avatar_user`) VALUES
(62, 'romane-deboisvilliers@hotmail.fr', '', 'loutre', '590dad0ed6b5247'),
(69, 'timoz@hotmail.fr', 'timoz974', 'loutre', '590dad0ed6b52178');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article_wc`
--
ALTER TABLE `article_wc`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaire_wc`
--
ALTER TABLE `commentaire_wc`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `livredor_wc`
--
ALTER TABLE `livredor_wc`
  ADD PRIMARY KEY (`id_livredor`);

--
-- Index pour la table `user_wc`
--
ALTER TABLE `user_wc`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article_wc`
--
ALTER TABLE `article_wc`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire_wc`
--
ALTER TABLE `commentaire_wc`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `livredor_wc`
--
ALTER TABLE `livredor_wc`
  MODIFY `id_livredor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `user_wc`
--
ALTER TABLE `user_wc`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
