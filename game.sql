-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2022 at 07:50 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `title` varchar(30) NOT NULL,
  `dev` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ranking` int(2) NOT NULL,
  `trailer` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`title`, `dev`, `release_date`, `description`, `ranking`, `trailer`) VALUES
('Doom Eternal', 'id Software', '2020-03-20', 'Doom Eternal is a first-person shooter game developed by id Software and published by Bethesda Softworks. Set some time after the events of the 2016 game, the story follows the Doomguy once again, on a mission to end Hell\'s consumption of Earth and foil the alien Maykr\'s plans to exterminate humanity.', 3, 'https://www.youtube.com/watch?v=_UuktemkCFI'),
('Persona 5', 'Atlus', '2016-09-15', 'Persona 5 is a 2016 role-playing video game developed by Atlus. It is the sixth installment in the Persona series, which is part of the larger Megami Tensei franchise. Persona 5 takes place in modern-day Tokyo and follows a high school student known by the pseudonym Joker who transfers to a new school after being falsely accused of assault and put on probation. Over the course of a school year, he and other students awaken to a special power, becoming a group of secret vigilantes known as the Phantom Thieves of Hearts. They explore the Metaverse, a supernatural realm born from humanity\'s subconscious desires, to steal malevolent intent from the hearts of adults. As with previous games in the series, the party battles enemies known as Shadows using physical manifestations of their psyche known as their Personas. The game incorporates role-playing and dungeon crawling elements alongside social simulation scenarios.', 2, 'https://www.youtube.com/watch?v=QnDzJ9KzuV4'),
('Bloodborne', 'FromSoftware', '2015-03-24', 'Bloodborne is a 2015 action role-playing game developed by FromSoftware and published by Sony Computer Entertainment for the PlayStation 4. Bloodborne follows the player\'s character, a Hunter, through the decrepit Gothic, Victorian-era–inspired city of Yharnam, whose inhabitants are afflicted with a blood-borne disease. Attempting to find the source of the plague, the player\'s character unravels the city\'s mysteries while fighting beasts and cosmic beings.', 1, 'https://www.youtube.com/watch?v=G203e1HhixY');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
