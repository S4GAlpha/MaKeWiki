-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 25, 2024 alle 23:10
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makewiki`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `ID_immagine` int(11) NOT NULL,
  `NomeFile` varchar(64) NOT NULL,
  `path` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `immagini`
--

INSERT INTO `immagini` (`ID_immagine`, `NomeFile`, `path`) VALUES
(1, 'Hoi4-logo', 'images/img/wikiPage/game/hoi4/Hoi4-logo.jpg'),
(2, 'sus', 'images/gif/sus.gif'),
(3, 'sus', 'images/gif/sus.gif'),
(4, '_73598873-acd6-4c83-883d-e19f563a1f17.jpeg', './uploaded_images/_73598873-acd6-4c83-883d-e19f563a1f17.jpeg'),
(5, '_f9dda7be-6499-4321-b1fa-d52da69f2cb3.jpeg', './uploaded_images/_f9dda7be-6499-4321-b1fa-d52da69f2cb3.jpeg'),
(6, 'bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg', './uploaded_images/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg'),
(7, 'bandiera-pirata-jollyroger.jpg', './uploaded_images/bandiera-pirata-jollyroger.jpg'),
(8, 'bandiera-pirata-jollyroger.jpg', './uploaded_images/bandiera-pirata-jollyroger.jpg'),
(9, 'zXDC6Cbx5O5B1E_sq7nk_VLPT3qT.png', './uploaded_images/zXDC6Cbx5O5B1E_sq7nk_VLPT3qT.png'),
(10, 'dragonball.jpeg', './uploaded_images/dragonball.jpeg'),
(11, 'dragonball.jpeg', './uploaded_images/dragonball.jpeg'),
(12, '2x1_NSwitch_KonosubaGodsBlessingOnThisWonderfulWorld_image1600w.', './uploaded_images/2x1_NSwitch_KonosubaGodsBlessingOnThisWonderfulWorld_image1600w.jpg'),
(13, 'Anime_KonoSuba_Aqua-1024x576.jpg', './uploaded_images/Anime_KonoSuba_Aqua-1024x576.jpg'),
(14, 'maxresdefault.jpg', './uploaded_images/maxresdefault.jpg'),
(15, 'NMhxKjGdQ21NnPG4rzwny977go_LzoF-hbY988P6C084-iPYewMuzZu3u6YpiVIH', './uploaded_images/NMhxKjGdQ21NnPG4rzwny977go_LzoF-hbY988P6C084-iPYewMuzZu3u6YpiVIH.png'),
(16, '241360 (1).jpg', './uploaded_images/241360 (1).jpg'),
(17, 'artworks-eZd9iJexsBIGOG42-lqFRIg-t1080x1080.jpg', './uploaded_images/artworks-eZd9iJexsBIGOG42-lqFRIg-t1080x1080.jpg'),
(18, 'images.jpeg', './uploaded_images/images.jpeg'),
(19, 'Anime_KonoSuba_Aqua-1024x576.jpg', 'uploaded_imagesAnime_KonoSuba_Aqua-1024x576.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `imm_user`
--

CREATE TABLE `imm_user` (
  `fk_id_utente` int(11) NOT NULL,
  `fk_id_immagine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `imm_user`
--

INSERT INTO `imm_user` (`fk_id_utente`, `fk_id_immagine`) VALUES
(3, 19);

-- --------------------------------------------------------

--
-- Struttura della tabella `imm_wiki`
--

CREATE TABLE `imm_wiki` (
  `fk_id_immagine` int(32) NOT NULL,
  `fk_id_wiki` int(32) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `imm_wiki`
--

INSERT INTO `imm_wiki` (`fk_id_immagine`, `fk_id_wiki`, `tipo`) VALUES
(1, 1, 'Logo'),
(12, 25, 'Logo'),
(18, 27, 'Logo');

-- --------------------------------------------------------

--
-- Struttura della tabella `messaggi`
--

CREATE TABLE `messaggi` (
  `ID_messaggio` int(32) NOT NULL,
  `FK_ID_utenti` int(32) NOT NULL,
  `FK_ID_wiki` int(32) NOT NULL,
  `Contenuto` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `messaggi`
--

INSERT INTO `messaggi` (`ID_messaggio`, `FK_ID_utenti`, `FK_ID_wiki`, `Contenuto`) VALUES
(1, 1, 1, 'Bello ma non bellissimo'),
(2, 3, 1, 'La sborra'),
(3, 3, 1, 'Sium'),
(4, 3, 1, 'ess'),
(5, 3, 1, 'Essaiuem'),
(9, 3, 1, 'Va bene cosi'),
(10, 3, 1, 'Super Idol'),
(13, 3, 25, 'Anime molto bello, soprattutto quando Kazuma trova l\'amore...');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferenze`
--

CREATE TABLE `preferenze` (
  `ID_preferenza` int(32) NOT NULL,
  `fk_ID_wiki` int(32) NOT NULL,
  `fk_ID_utente` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `preferenze`
--

INSERT INTO `preferenze` (`ID_preferenza`, `fk_ID_wiki`, `fk_ID_utente`) VALUES
(23, 1, 3),
(28, 25, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `ID_utente` int(32) NOT NULL,
  `Nick` varchar(256) NOT NULL,
  `Nome` varchar(256) NOT NULL,
  `Cognome` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `descrizione` varchar(512) NOT NULL,
  `wiki_count` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`ID_utente`, `Nick`, `Nome`, `Cognome`, `email`, `password`, `isAdmin`, `descrizione`, `wiki_count`) VALUES
(1, 'LoSqualo', 'Gianni', 'GianGianni', 'dsagdasf', '', 0, '', 0),
(3, 'Don', 'Pier', 'Giorgio', 'piergiorgio@gmail.com', 'af851317dd10fb534b1cd73a1bc30c7a', 0, '\r\n                            L\'unico e inimitabile', 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `wikipages`
--

CREATE TABLE `wikipages` (
  `ID_wiki` int(32) NOT NULL,
  `Titolo` varchar(256) NOT NULL,
  `fk_id_utente` int(32) NOT NULL,
  `Descrizione` varchar(512) NOT NULL,
  `Tipologia` varchar(256) NOT NULL,
  `pathWiki` varchar(256) NOT NULL,
  `Data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `wikipages`
--

INSERT INTO `wikipages` (`ID_wiki`, `Titolo`, `fk_id_utente`, `Descrizione`, `Tipologia`, `pathWiki`, `Data`) VALUES
(1, 'Heart of Iron IV', 1, 'wiki dove parliamo di come prepararsi alla guerra', 'VideoGame', 'Heart of Iron IV.php', '2024-05-18'),
(25, 'Konosuba', 3, 'Anime dallo stile comico', 'Anime', 'Konosuba.php', '2024-05-25'),
(27, 'Overflow', 3, 'Uno degli Hanime più noti direi', 'Anime', 'Overflow.php', '2024-05-25');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`ID_immagine`);

--
-- Indici per le tabelle `imm_user`
--
ALTER TABLE `imm_user`
  ADD PRIMARY KEY (`fk_id_utente`,`fk_id_immagine`),
  ADD KEY `fk_id_image` (`fk_id_immagine`);

--
-- Indici per le tabelle `imm_wiki`
--
ALTER TABLE `imm_wiki`
  ADD PRIMARY KEY (`fk_id_immagine`,`fk_id_wiki`),
  ADD KEY `fk_id_wiki` (`fk_id_wiki`);

--
-- Indici per le tabelle `messaggi`
--
ALTER TABLE `messaggi`
  ADD PRIMARY KEY (`ID_messaggio`),
  ADD KEY `fk_ID_wikis` (`FK_ID_wiki`),
  ADD KEY `fk_ID_utenti` (`FK_ID_utenti`);

--
-- Indici per le tabelle `preferenze`
--
ALTER TABLE `preferenze`
  ADD PRIMARY KEY (`ID_preferenza`),
  ADD KEY `wikiPreferenza` (`fk_ID_wiki`),
  ADD KEY `utentePreferenza` (`fk_ID_utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`ID_utente`);

--
-- Indici per le tabelle `wikipages`
--
ALTER TABLE `wikipages`
  ADD PRIMARY KEY (`ID_wiki`),
  ADD KEY `FK_id_utente` (`fk_id_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `ID_immagine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `messaggi`
--
ALTER TABLE `messaggi`
  MODIFY `ID_messaggio` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `preferenze`
--
ALTER TABLE `preferenze`
  MODIFY `ID_preferenza` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `ID_utente` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `wikipages`
--
ALTER TABLE `wikipages`
  MODIFY `ID_wiki` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `imm_user`
--
ALTER TABLE `imm_user`
  ADD CONSTRAINT `fk_id_image` FOREIGN KEY (`fk_id_immagine`) REFERENCES `immagini` (`ID_immagine`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`fk_id_utente`) REFERENCES `utenti` (`ID_utente`);

--
-- Limiti per la tabella `imm_wiki`
--
ALTER TABLE `imm_wiki`
  ADD CONSTRAINT `fk_id_immagine` FOREIGN KEY (`fk_id_immagine`) REFERENCES `immagini` (`ID_immagine`),
  ADD CONSTRAINT `fk_id_wiki` FOREIGN KEY (`fk_id_wiki`) REFERENCES `wikipages` (`ID_wiki`);

--
-- Limiti per la tabella `messaggi`
--
ALTER TABLE `messaggi`
  ADD CONSTRAINT `fk_ID_utenti` FOREIGN KEY (`FK_ID_utenti`) REFERENCES `utenti` (`ID_utente`),
  ADD CONSTRAINT `fk_ID_wikis` FOREIGN KEY (`FK_ID_wiki`) REFERENCES `wikipages` (`ID_wiki`);

--
-- Limiti per la tabella `preferenze`
--
ALTER TABLE `preferenze`
  ADD CONSTRAINT `utentePreferenza` FOREIGN KEY (`fk_ID_utente`) REFERENCES `utenti` (`ID_utente`),
  ADD CONSTRAINT `wikiPreferenza` FOREIGN KEY (`fk_ID_wiki`) REFERENCES `wikipages` (`ID_wiki`);

--
-- Limiti per la tabella `wikipages`
--
ALTER TABLE `wikipages`
  ADD CONSTRAINT `FK_id_utente` FOREIGN KEY (`fk_id_utente`) REFERENCES `utenti` (`ID_utente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
