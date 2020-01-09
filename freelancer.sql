-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 04:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `darbai`
--

CREATE TABLE `darbai` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `antraste` varchar(255) NOT NULL,
  `aprasymas` text NOT NULL,
  `nuotrauka` varchar(255) NOT NULL,
  `kontaktai` varchar(255) NOT NULL,
  `kategorija` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darbai`
--

INSERT INTO `darbai` (`id`, `user_id`, `antraste`, `aprasymas`, `nuotrauka`, `kontaktai`, `kategorija`) VALUES
(19, 4, 'Fisherman iliustracija', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', 'papildomai/nuotraukos/Fisherman-iliustracija-picture.jpg', 'vienasvienasvienas', '1'),
(20, 4, 'Los Andzelo papludimys', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'papildomai/nuotraukos/Los-Andzelo-papludimys-picture.jpg', 'vienasvienas', '1');

-- --------------------------------------------------------

--
-- Table structure for table `darboskelbimai`
--

CREATE TABLE `darboskelbimai` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `antraste` varchar(255) NOT NULL,
  `pareigos` text NOT NULL,
  `reikalavimai` text NOT NULL,
  `kontaktai` text NOT NULL,
  `kategorija` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darboskelbimai`
--

INSERT INTO `darboskelbimai` (`id`, `user_id`, `antraste`, `pareigos`, `reikalavimai`, `kontaktai`, `kategorija`) VALUES
(7, 5, ' WEB DIZAINERIS (-Ä–)', 'Naudotojo sÄ…sajos architektÅ«ros projektavimas internetiniams puslapiams.\r\nWeb dizaino Å¡ablonÅ³ ir grafiniÅ³ elementÅ³ parengimas\r\nEsamÅ³ ir naujÅ³ produktÅ³ tobulinimas (UX, Usability atÅ¾vilgiu)\r\nKiti Ä¯vairÅ«s grafinio dizaino darbai', 'Geras darbÅ³ portfolio\r\nNe maÅ¾esnÄ— kaip 3 metÅ³ patirtis WEB/Mobile/Interactive dizaino srityje (bent jau vienoje iÅ¡ jÅ³)\r\nHTML5/CSS3/JS technologijÅ³ Å¾inios â€“ didelis privalumas\r\nPatirtis dirbant su Responsive Web Design\r\nPuikus ne tik kÅ«rybinis, bet ir analitinis mÄ…stymas\r\nGeri socialiniai Ä¯gÅ«dÅ¾iai\r\nPastabumas detalÄ—ms, kruopÅ¡tumas\r\nDidelis noras tobulÄ—ti ir mokytis', 'Kontaktinis asmuo\r\n', '2'),
(8, 6, 'PHP programuotojas (-a)', 'Darbo pobÅ«dis:\r\n15min grupei priklausanÄiÅ³ web portalÅ³ prieÅ¾iÅ«ra ir palaikymas, vystymas;\r\nNaujÅ³ funkcionalumÅ³ kÅ«rimas;\r\nDarbas su naujausiomis web technologijomis, jÅ³ taikymas;\r\nFront-End bei API/backend dalies kÅ«rimas, palaikymas;', 'Bent 3m. patirtis PHP programavimo srityje; \r\nBent 2m. OOP patirtis;\r\nPopuliariausiÅ³ PHP framework (symfony/laravel ir kt.) veikimo, ideologijos iÅ¡manymas;\r\nGebÄ—jimas greitai Ä¯sisavinti naujoves bei dirbti tiek individualiai, tiek komandoje;\r\nResponsive / adaptive iÅ¡manymas ir patirtis;\r\nHTML, CSS, JS, JQuery, GIT, LESS/SASS;', 'Programuotojas (-Ä—) dirbs Vilniuje ir bus tiesiogiai pavaldus programavimo skyriaus vadovui.\r\n15min.lt/karjera', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategorijos`
--

CREATE TABLE `kategorijos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorijos`
--

INSERT INTO `kategorijos` (`id`, `pavadinimas`) VALUES
(1, 'Fotografai'),
(2, 'Iliustratoriai');

-- --------------------------------------------------------

--
-- Table structure for table `skelbimukategorijos`
--

CREATE TABLE `skelbimukategorijos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skelbimukategorijos`
--

INSERT INTO `skelbimukategorijos` (`id`, `pavadinimas`) VALUES
(1, 'IT/programavimas'),
(2, 'Grafinis Dizainas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `tipas`, `email`) VALUES
(4, 'Dizainer1', 'vienasvienas', 'SamdomasD', 'kazkoks@gmail.com'),
(5, 'Darbdavys1', 'vienasvienas', 'Darbdavys', 'darbdavio@gmail.com'),
(6, 'Darbdavys2', 'vienasvienas', 'Darbdavys', 'darbdavio2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbai`
--
ALTER TABLE `darbai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darboskelbimai`
--
ALTER TABLE `darboskelbimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorijos`
--
ALTER TABLE `kategorijos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skelbimukategorijos`
--
ALTER TABLE `skelbimukategorijos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbai`
--
ALTER TABLE `darbai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `darboskelbimai`
--
ALTER TABLE `darboskelbimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategorijos`
--
ALTER TABLE `kategorijos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skelbimukategorijos`
--
ALTER TABLE `skelbimukategorijos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
