-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 maj 2018 kl 13:24
-- Serverversion: 10.1.30-MariaDB
-- PHP-version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `public news`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `anvandare`
--

CREATE TABLE `anvandare` (
  `id` int(5) NOT NULL,
  `fnamn` varchar(50) NOT NULL,
  `enamn` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `kon` int(1) NOT NULL,
  `anamn` varchar(50) NOT NULL,
  `hash` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `anvandare`
--

INSERT INTO `anvandare` (`id`, `fnamn`, `enamn`, `adress`, `epost`, `mobil`, `kon`, `anamn`, `hash`) VALUES
(32, 'Samuel', 'Gramenius', 'sd', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$UvmIpGJlxywTUeJcg9YqUOIaCfnkr8kux6gHvTIASHoY7/cwaoTS6'),
(33, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$UGG/uMJjAENeVJM1U0lrhOh5WMgUMG6XP0HK2RcmK4Yy7ku4ed8g6'),
(34, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$S1TpiY1MDhrZ4wIrZmkkWeihOK3VYx.BRM0MCdPSi56XuzadSfNfa'),
(35, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$ogmZytZq9JmZMg.oFra3Lu.y.n3Uoukpv8kDqJSLOiCEe68rZ22NC'),
(36, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '0788018212', 1, '123', '$2y$10$tv0POr3iomy7D/BVi.kEiezCL6YdlE19kSUUMdqqOatsmtVLrZxp2'),
(37, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$zFKholrcI9VQRZUgcwPu7OQaT62e7/E6g4vwBwMSD8WRlUFlYz6Mq'),
(38, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$TjO0B8OVbtQ5ENW89KJUauvLEFEFS3BGtZ5R4DFtIisEFJqWODe5q'),
(39, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$RgW2RU1Pn86cGqEEJsnM2ut7SYGs30w3om7JvItrFh4BKCN7ziZNC'),
(40, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$qlgQ/cb.J6amRKEace93ued1ECLgbuzPXarCge8Vm0We1TUoWZ.fK'),
(41, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$t7q2lgjcx90zuKqq.VRADOhIH8z/s/TUJkKro/eEKL/KAXczKmt4G'),
(42, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$xEPp6BFBmxbrLPiyAIzPGO9FQG6igE.RIbsbeZRdoEzQ/veQcfKW.'),
(43, 'Samuel', 'Gramenius', 'brotorpsvÃ¤gen 4', 'samuel.gramenius@hotmail.com', '123', 1, '123', '$2y$10$aYF9K4tQjTBQwJVfzhko5eS0sK3hQMCn6wHNkw9K8B5poPq74eCMG');

-- --------------------------------------------------------

--
-- Tabellstruktur `nyheter`
--

CREATE TABLE `nyheter` (
  `rubrik` varchar(35) NOT NULL,
  `text` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `anvandare`
--
ALTER TABLE `anvandare`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `anvandare`
--
ALTER TABLE `anvandare`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
