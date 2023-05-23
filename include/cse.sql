-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 21 mai 2023 à 23:00
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cse`
--

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `id_droit` int(11) NOT NULL,
  `libelle_droit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `info_accueil`
--

CREATE TABLE `info_accueil` (
  `id_info_accueil` int(11) NOT NULL,
  `num_tel_info_accueil` int(11) NOT NULL,
  `email_info_accueil` varchar(255) NOT NULL,
  `emplacement_bureau_info_accueil` varchar(255) NOT NULL,
  `titre_info_accueil` varchar(255) NOT NULL,
  `texte_info_accueil` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `nom_message` varchar(100) NOT NULL,
  `prenom_message` varchar(100) NOT NULL,
  `adresse_mail_message` varchar(255) NOT NULL,
  `contenu_message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `nom_message`, `prenom_message`, `adresse_mail_message`, `contenu_message`) VALUES
(14, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(15, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(16, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(17, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(18, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(19, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(21, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(22, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(23, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(24, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'zlzibnfzarkhfbmeaigbmergnmoeqjtngoetjngoemtjçunh\r\n'),
(25, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'Bonjour , \r\nje vblalal   gtigjitg \r\ng rgojgrijg #A10000 alexandre duchemubn je vosu contacte pour blabla bla #A10000#A10000#A10000\r\nMerci'),
(26, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour '),
(27, 'Duchemin', 'Alexandre', 'alexandre.duchemin@lyceestvincent.fr', 'bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour bonjoour '),
(30, 'efgref', 'ergezgez', 'gezrtgeg@gmail.com', 'ezrfzerfezrfezrf'),
(31, 'efgref', 'ergezgez', 'gezrtgeg@gmail.com', 'ezrfzerfezrfezrf');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `nom_offre` varchar(50) NOT NULL,
  `description_offre` varchar(3000) NOT NULL,
  `date_debut_offre` date NOT NULL,
  `date_fin_offre` date NOT NULL,
  `nombre_place_minimum_offre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenariats`
--

CREATE TABLE `partenariats` (
  `partenaire_id` int(11) NOT NULL,
  `partenaire_nom` varchar(250) NOT NULL,
  `description_partenaire` varchar(250) NOT NULL,
  `lien_site_partenaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partenariats`
--

INSERT INTO `partenariats` (`partenarie_id`, `partenaire_nom`, `description_partenaire`, `lien_site_partenaire`) VALUES
(1, 'alexandre', 'vente chocolat bla bla bla bla', 'https://chocolat.fr');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(100) NOT NULL,
  `prenom_utilisateur` varchar(100) NOT NULL,
  `email_utilisateur` varchar(255) NOT NULL,
  `password_utilisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `info_accueil`
--
ALTER TABLE `info_accueil`
  ADD PRIMARY KEY (`id_info_accueil`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`);

--
-- Index pour la table `partenariats`
--
ALTER TABLE `partenariats`
  ADD PRIMARY KEY (`partenarie_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id_droit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `info_accueil`
--
ALTER TABLE `info_accueil`
  MODIFY `id_info_accueil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partenariats`
--
ALTER TABLE `partenariats`
  MODIFY `partenarie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
