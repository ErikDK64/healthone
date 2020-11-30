-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Nov 2020 um 10:11
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `healthone`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medicijnen`
--

CREATE TABLE `medicijnen` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `maker` varchar(100) NOT NULL,
  `compansated` float(5,2) NOT NULL,
  `side_efect` varchar(100) NOT NULL,
  `benefits` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `medicijnen`
--

INSERT INTO `medicijnen` (`id`, `naam`, `maker`, `compansated`, `side_efect`, `benefits`) VALUES
(21, 'asdasd', 'agag', 21.00, 'qss', 'dasdasd'),
(22, 'asdasd', 'agag', 21.00, 'qss', 'dasdasd');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `patienten`
--

CREATE TABLE `patienten` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `woonplaats` varchar(100) NOT NULL,
  `zknummer` varchar(12) NOT NULL,
  `geboortedatum` varchar(100) NOT NULL,
  `soortverzekering` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `patienten`
--

INSERT INTO `patienten` (`id`, `naam`, `adres`, `woonplaats`, `zknummer`, `geboortedatum`, `soortverzekering`) VALUES
(4, 'asd', '', 'asd', '', '', 'asd'),
(5, 'asd', '', 'asd', '', '', 'asd'),
(6, 'sadas', 'ahgjh', 'jhjhjhhjnb', ' hh  h', ' h h ', ' hh  h'),
(7, 'sdasd', 'asfas', 'asfasf', 'asfasfa', 'asfasf', 'sfasfasfasf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `wachtwoord` varchar(64) NOT NULL,
  `apotheek` varchar(100) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `wachtwoord`, `apotheek`, `role`) VALUES
(1, 'erik', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '\r\n', 'admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `medicijnen`
--
ALTER TABLE `medicijnen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `patienten`
--
ALTER TABLE `patienten`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `medicijnen`
--
ALTER TABLE `medicijnen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT für Tabelle `patienten`
--
ALTER TABLE `patienten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
