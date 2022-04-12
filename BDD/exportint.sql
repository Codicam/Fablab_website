-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Genere le :  Jeu 10 Mars 2022 à 07:46
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnees :  `AUGE COLLOMB`
--

-- --------------------------------------------------------

--
-- Structure de la table `CommanderMateriaux`
--

CREATE TABLE `CommanderMateriaux` (
  `Id_Fournisseur_Fournisseurs` bigint(20) NOT NULL,
  `Id_Materiau_Materiaux` bigint(20) NOT NULL,
  `Id_CommandeM_CommanderMateriaux` bigint(20) NOT NULL,
  `Date_CommandeM_CommanderMateriaux` date DEFAULT NULL,
  `Qte_CommandeM_CommanderMateriaux` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `CommanderProduits`
--

CREATE TABLE `CommanderProduits` (
  `Id_Fournisseur_Fournisseurs` bigint(20) NOT NULL,
  `Id_Produit_Produits` bigint(20) NOT NULL,
  `Id_CommandeP` bigint(20) NOT NULL,
  `Date_CommandeP` date DEFAULT NULL,
  `Qte_CommandeP` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Consommer`
--

CREATE TABLE `Consommer` (
  `Id_User_Utilisateurs` bigint(20) NOT NULL,
  `Id_Produit_Produits` bigint(20) NOT NULL,
  `Qte_Consommer_Consommer` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Dispenser`
--

CREATE TABLE `Dispenser` (
  `Id_Staff_Staff` bigint(20) NOT NULL,
  `Id_Formation_Formation` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Emprunter`
--

CREATE TABLE `Emprunter` (
  `Id_User_Utilisateurs` bigint(20) NOT NULL,
  `Id_Outil` bigint(20) NOT NULL,
  `ID_Emprunt_Emprunter` bigint(20) NOT NULL,
  `Date_Emprunt_Emprunter` date DEFAULT NULL,
  `Date_RetourEmprunt_Emprunter` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Formation`
--

CREATE TABLE `Formation` (
  `Id_Formation_Formation` bigint(20) NOT NULL,
  `Nom_Formation_Formation` varchar(50) NOT NULL,
  `Description_Formation_Formation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Formation`
--

INSERT INTO `Formation` (`Id_Formation_Formation`, `Nom_Formation_Formation`, `Description_Formation_Formation`) VALUES
(1, 'Impression 3D', 'Formation à l\'utilisation des imprimantes 3D du Fablab.'),
(2, 'Decoupe laser', 'Creation de fichiers pour decoupe laser et mise en place de la decoupe.');

-- --------------------------------------------------------

--
-- Structure de la table `Fournisseurs`
--

CREATE TABLE `Fournisseurs` (
  `Id_Fournisseur_Fournisseurs` bigint(20) NOT NULL,
  `Nom_Fournisseur_Fournisseurs` varchar(50) DEFAULT NULL,
  `Adresse_Fournisseur_Fournisseurs` varchar(200) DEFAULT NULL,
  `Tel_Fournisseur_Fournisseurs` varchar(16) DEFAULT NULL,
  `Mail_Fournisseur_Fournisseurs` varchar(100) DEFAULT NULL,
  `Id_Staff_Staff` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Machines`
--

CREATE TABLE `Machines` (
  `Id_Machine_Machines` bigint(20) NOT NULL,
  `Nom_Machine_Machines` varchar(20) DEFAULT NULL,
  `Description_Machine_Machines` text,
  `Id_Emplacement_Rangements` bigint(20) DEFAULT NULL,
  `formation_id_formation_formation` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Machines`
--

INSERT INTO `Machines` (`Id_Machine_Machines`, `Nom_Machine_Machines`, `Description_Machine_Machines`, `Id_Emplacement_Rangements`, `formation_id_formation_formation`) VALUES
(1, 'ZortraxM200+', 'Imprimante 3D.\r\nVolume d\'impression : 200mm x 200mm x 200mm\r\nSurnom : Joe', 2, 1),
(2, 'ZortraxM200+', 'Imprimante 3D\r\nVolume d\'impression : 200mm x 200mm x 200mm\r\nSurnom : Jack', 2, 1),
(3, 'ZortraxM200+', 'Imprimante 3D\r\nVolume d\'impression : 200mm x 200mm x 200mm\r\nSurnom : William', 2, 1),
(4, 'ZortraxM300+', 'Imprimante 3D\r\nVolume d\'impression : 300mm x 300mm x 300mm\r\nSurnom : Averell', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Materiaux`
--

CREATE TABLE `Materiaux` (
  `Id_Materiau_Materiaux` bigint(20) NOT NULL,
  `Nom_Materiau_Materiaux` varchar(50) DEFAULT NULL,
  `Description_Materiau_Materiaux` varchar(200) DEFAULT NULL,
  `Qte_Materiau_Materiaux` float DEFAULT NULL,
  `Unite_Materiau_Materiaux` varchar(20) DEFAULT NULL,
  `Prix_Materiau_Materiaux` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Outils`
--

CREATE TABLE `Outils` (
  `Id_Outil` bigint(20) NOT NULL,
  `Nom_Outil_Outils` varchar(50) DEFAULT NULL,
  `Description_outil_Outils` varchar(200) DEFAULT NULL,
  `Prix_Outil_Outils` decimal(10,0) DEFAULT NULL,
  `Id_Emplacement_Rangements` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Participe`
--

CREATE TABLE `Participe` (
  `Id_User_Utilisateurs` bigint(20) NOT NULL,
  `Id_Formation_Formation` bigint(20) NOT NULL,
  `Date_Formation_Formation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE `Produits` (
  `Id_Produit_Produits` bigint(20) NOT NULL,
  `Nom_Produit_Produits` varchar(50) DEFAULT NULL,
  `Description_Produit_Produits` varchar(200) DEFAULT NULL,
  `Qte_Produit_Produits` smallint(6) DEFAULT NULL,
  `Unite_Produit_Produits` varchar(20) DEFAULT NULL,
  `Prix_Produit_Produits` decimal(10,0) DEFAULT NULL,
  `Id_Emplacement_Rangements` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Rangements`
--

CREATE TABLE `Rangements` (
  `Id_Emplacement_Rangements` bigint(20) NOT NULL,
  `Nom_Emplacement_Rangements` varchar(50) DEFAULT NULL,
  `Description_Emplacement_Rangements` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Rangements`
--

INSERT INTO `Rangements` (`Id_Emplacement_Rangements`, `Nom_Emplacement_Rangements`, `Description_Emplacement_Rangements`) VALUES
(1, 'Ilot central', 'Ensemble de machines au centre droit du Fablab lorsqu\'on y entre par la grande double-porte du bâtiment L.'),
(2, 'Paillasse mur ouest', 'Paillasse devant le mur oriente au sud, c\'est-à-dire à droite en venant de la grande double-porte du bâtiment L.');

-- --------------------------------------------------------

--
-- Structure de la table `Staff`
--

CREATE TABLE `Staff` (
  `Id_Staff_Staff` bigint(20) NOT NULL,
  `Nom_Staff_Staff` varchar(50) DEFAULT NULL,
  `Prenom_Staff_Staff` varchar(30) DEFAULT NULL,
  `Promo_Staff_Staff` varchar(10) DEFAULT NULL,
  `Mail_Staff_Staff` varchar(100) DEFAULT NULL,
  `Tel_Staff_Staff` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Staff`
--

INSERT INTO `Staff` (`Id_Staff_Staff`, `Nom_Staff_Staff`, `Prenom_Staff_Staff`, `Promo_Staff_Staff`, `Mail_Staff_Staff`, `Tel_Staff_Staff`) VALUES
(1, 'AUGE-COLLOMB', 'Louis', 'I124', 'louis.auge-collomb@2024.icam.fr', '0750078367');
(2, 'FOURCAUD','Timothée','I124','timothee.fourcaud@2024.icam.fr','0750078367');

-- --------------------------------------------------------

--
-- Structure de la table `Usine`
--

CREATE TABLE `Usine` (
  Id_Materiau_Materiaux bigint(20) NOT NULL,
  `Id_Machine_Machines` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `Id_User_Utilisateurs` bigint(20) NOT NULL,
  `Nom_User_Utilisateurs` varchar(50) DEFAULT NULL,
  `Prenom_User_Utilisateurs` varchar(30) DEFAULT NULL,
  `Promo_User_Utilisateurs` varchar(10) DEFAULT NULL,
  `Mail_User_Utilisateurs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`Id_User_Utilisateurs`, `Nom_User_Utilisateurs`, `Prenom_User_Utilisateurs`, `Promo_User_Utilisateurs`, `Mail_User_Utilisateurs`) VALUES
(1, 'AUGE-COLLOMB', 'Louis', 'I124', 'louis.auge-collomb@2024.icam.fr');

--
-- Index pour les tables exportees
--

--
-- Index pour la table `CommanderMateriaux`
--
ALTER TABLE `CommanderMateriaux`
  ADD PRIMARY KEY (`Id_CommandeM_CommanderMateriaux`),
  ADD KEY `FK_CommanderMateriaux_Id_Fournisseur_Fournisseurs` (`Id_Fournisseur_Fournisseurs`),
  ADD KEY `FK_CommanderMateriaux_Id_Materiau_Materiaux` (`Id_Materiau_Materiaux`);

--
-- Index pour la table `CommanderProduits`
--
ALTER TABLE `CommanderProduits`
  ADD PRIMARY KEY (`Id_CommandeP`),
  ADD KEY `FK_CommanderProduits_Id_Fournisseur_Fournisseurs` (`Id_Fournisseur_Fournisseurs`),
  ADD KEY `FK_CommanderProduits_Id_Produit_Produits` (`Id_Produit_Produits`);

--
-- Index pour la table `Consommer`
--
ALTER TABLE `Consommer`
  ADD KEY `FK_Consommer_Id_User_Utilisateurs` (`Id_User_Utilisateurs`),
  ADD KEY `FK_Consommer_Id_Produit_Produits` (`Id_Produit_Produits`);

--
-- Index pour la table `Dispenser`
--
ALTER TABLE `Dispenser`
  ADD KEY `FK_Dispenser_Id_Staff_Staff` (`Id_Staff_Staff`),
  ADD KEY `FK_Dispenser_Id_Formation_Formation` (`Id_Formation_Formation`);

--
-- Index pour la table `Emprunter`
--
ALTER TABLE `Emprunter`
  ADD PRIMARY KEY (`ID_Emprunt_Emprunter`),
  ADD KEY `FK_Emprunter_Id_User_Utilisateurs` (`Id_User_Utilisateurs`),
  ADD KEY `FK_Emprunter_Id_Outil` (`Id_Outil`);

--
-- Index pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD PRIMARY KEY (`Id_Formation_Formation`);

--
-- Index pour la table `Fournisseurs`
--
ALTER TABLE `Fournisseurs`
  ADD PRIMARY KEY (`Id_Fournisseur_Fournisseurs`),
  ADD KEY `FK_Fournisseurs_Id_Staff_Staff` (`Id_Staff_Staff`);

--
-- Index pour la table `Machines`
--
ALTER TABLE `Machines`
  ADD PRIMARY KEY (`Id_Machine_Machines`),
  ADD KEY `FK_Machines_Id_Emplacement_Rangements` (`Id_Emplacement_Rangements`),
  ADD KEY `FK_Machines_formation_id_formation_formation` (`formation_id_formation_formation`);

--
-- Index pour la table `Materiaux`
--
ALTER TABLE `Materiaux`
  ADD PRIMARY KEY (`Id_Materiau_Materiaux`);

--
-- Index pour la table `Outils`
--
ALTER TABLE `Outils`
  ADD PRIMARY KEY (`Id_Outil`),
  ADD KEY `FK_Outils_Id_Emplacement_Rangements` (`Id_Emplacement_Rangements`);

--
-- Index pour la table `Participe`
--
ALTER TABLE `Participe`
  ADD KEY `FK_Participe_Id_User_Utilisateurs` (`Id_User_Utilisateurs`),
  ADD KEY `FK_Participe_Id_Formation_Formation` (`Id_Formation_Formation`);

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`Id_Produit_Produits`),
  ADD KEY `FK_Produits_Id_Emplacement_Rangements` (`Id_Emplacement_Rangements`);

--
-- Index pour la table `Rangements`
--
ALTER TABLE `Rangements`
  ADD PRIMARY KEY (`Id_Emplacement_Rangements`);

--
-- Index pour la table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Id_Staff_Staff`);

--
-- Index pour la table `Usine`
--
ALTER TABLE `Usine`
  ADD KEY `FK_Usine_Id_Materiau_Materiaux` (Id_Materiau_Materiaux),
  ADD KEY `FK_Usine_Id_Machine_Machines` (`Id_Machine_Machines`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`Id_User_Utilisateurs`);

--
-- AUTO_INCREMENT pour les tables exportees
--

--
-- AUTO_INCREMENT pour la table `CommanderMateriaux`
--
ALTER TABLE `CommanderMateriaux`
  MODIFY `Id_CommandeM_CommanderMateriaux` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `CommanderProduits`
--
ALTER TABLE `CommanderProduits`
  MODIFY `Id_CommandeP` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Emprunter`
--
ALTER TABLE `Emprunter`
  MODIFY `ID_Emprunt_Emprunter` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Formation`
--
ALTER TABLE `Formation`
  MODIFY `Id_Formation_Formation` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Fournisseurs`
--
ALTER TABLE `Fournisseurs`
  MODIFY `Id_Fournisseur_Fournisseurs` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Machines`
--
ALTER TABLE `Machines`
  MODIFY `Id_Machine_Machines` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Materiaux`
--
ALTER TABLE `Materiaux`
  MODIFY `Id_Materiau_Materiaux` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Outils`
--
ALTER TABLE `Outils`
  MODIFY `Id_Outil` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `Id_Produit_Produits` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Rangements`
--
ALTER TABLE `Rangements`
  MODIFY `Id_Emplacement_Rangements` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Id_Staff_Staff` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `Id_User_Utilisateurs` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportees
--

--
-- Contraintes pour la table `CommanderMateriaux`
--
ALTER TABLE `CommanderMateriaux`
  ADD CONSTRAINT `FK_CommanderMateriaux_Id_Fournisseur_Fournisseurs` FOREIGN KEY (`Id_Fournisseur_Fournisseurs`) REFERENCES `Fournisseurs` (`Id_Fournisseur_Fournisseurs`),
  ADD CONSTRAINT `FK_CommanderMateriaux_Id_Materiau_Materiaux` FOREIGN KEY (`Id_Materiau_Materiaux`) REFERENCES `Materiaux` (`Id_Materiau_Materiaux`);

--
-- Contraintes pour la table `CommanderProduits`
--
ALTER TABLE `CommanderProduits`
  ADD CONSTRAINT `FK_CommanderProduits_Id_Fournisseur_Fournisseurs` FOREIGN KEY (`Id_Fournisseur_Fournisseurs`) REFERENCES `Fournisseurs` (`Id_Fournisseur_Fournisseurs`),
  ADD CONSTRAINT `FK_CommanderProduits_Id_Produit_Produits` FOREIGN KEY (`Id_Produit_Produits`) REFERENCES `Produits` (`Id_Produit_Produits`);

--
-- Contraintes pour la table `Consommer`
--
ALTER TABLE `Consommer`
  ADD CONSTRAINT `FK_Consommer_Id_Produit_Produits` FOREIGN KEY (`Id_Produit_Produits`) REFERENCES `Produits` (`Id_Produit_Produits`),
  ADD CONSTRAINT `FK_Consommer_Id_User_Utilisateurs` FOREIGN KEY (`Id_User_Utilisateurs`) REFERENCES `Utilisateurs` (`Id_User_Utilisateurs`);

--
-- Contraintes pour la table `Dispenser`
--
ALTER TABLE `Dispenser`
  ADD CONSTRAINT `FK_Dispenser_Id_Formation_Formation` FOREIGN KEY (`Id_Formation_Formation`) REFERENCES `Formation` (`Id_Formation_Formation`),
  ADD CONSTRAINT `FK_Dispenser_Id_Staff_Staff` FOREIGN KEY (`Id_Staff_Staff`) REFERENCES `Staff` (`Id_Staff_Staff`);

--
-- Contraintes pour la table `Emprunter`
--
ALTER TABLE `Emprunter`
  ADD CONSTRAINT `FK_Emprunter_Id_Outil` FOREIGN KEY (`Id_Outil`) REFERENCES `Outils` (`Id_Outil`),
  ADD CONSTRAINT `FK_Emprunter_Id_User_Utilisateurs` FOREIGN KEY (`Id_User_Utilisateurs`) REFERENCES `Utilisateurs` (`Id_User_Utilisateurs`);

--
-- Contraintes pour la table `Fournisseurs`
--
ALTER TABLE `Fournisseurs`
  ADD CONSTRAINT `FK_Fournisseurs_Id_Staff_Staff` FOREIGN KEY (`Id_Staff_Staff`) REFERENCES `Staff` (`Id_Staff_Staff`);

--
-- Contraintes pour la table `Machines`
--
ALTER TABLE `Machines`
  ADD CONSTRAINT `FK_Machines_Id_Emplacement_Rangements` FOREIGN KEY (`Id_Emplacement_Rangements`) REFERENCES `Rangements` (`Id_Emplacement_Rangements`),
  ADD CONSTRAINT `FK_Machines_formation_id_formation_formation` FOREIGN KEY (`formation_id_formation_formation`) REFERENCES `Formation` (`Id_Formation_Formation`);

--
-- Contraintes pour la table `Outils`
--
ALTER TABLE `Outils`
  ADD CONSTRAINT `FK_Outils_Id_Emplacement_Rangements` FOREIGN KEY (`Id_Emplacement_Rangements`) REFERENCES `Rangements` (`Id_Emplacement_Rangements`);

--
-- Contraintes pour la table `Participe`
--
ALTER TABLE `Participe`
  ADD CONSTRAINT `FK_Participe_Id_Formation_Formation` FOREIGN KEY (`Id_Formation_Formation`) REFERENCES `Formation` (`Id_Formation_Formation`),
  ADD CONSTRAINT `FK_Participe_Id_User_Utilisateurs` FOREIGN KEY (`Id_User_Utilisateurs`) REFERENCES `Utilisateurs` (`Id_User_Utilisateurs`);

--
-- Contraintes pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD CONSTRAINT `FK_Produits_Id_Emplacement_Rangements` FOREIGN KEY (`Id_Emplacement_Rangements`) REFERENCES `Rangements` (`Id_Emplacement_Rangements`);

--
-- Contraintes pour la table `Usine`
--
ALTER TABLE `Usine`
  ADD CONSTRAINT `FK_Usine_Id_Machine_Machines` FOREIGN KEY (`Id_Machine_Machines`) REFERENCES `Machines` (`Id_Machine_Machines`),
  ADD CONSTRAINT `FK_Usine_Id_Materiau_Materiaux` FOREIGN KEY (Id_Materiau_Materiaux) REFERENCES `Materiaux` (`Id_Materiau_Materiaux`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
