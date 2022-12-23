-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 07:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `username` varchar(255) NOT NULL,
  `chanda mama` int(11) NOT NULL,
  `lakdi ki kathi` int(11) NOT NULL,
  `nani teri morni` int(11) NOT NULL,
  `clap your hands` int(11) NOT NULL,
  `jack and jill` int(11) NOT NULL,
  `humpty dumpty` int(11) NOT NULL,
  `itsy bitsy spider` int(11) NOT NULL,
  `twinkle twinkle little star` int(11) NOT NULL,
  `dance part 1` int(11) NOT NULL,
  `dance part 2` int(11) NOT NULL,
  `dance part 3` int(11) NOT NULL,
  `dance part 4` int(11) NOT NULL,
  `dance part 5` int(11) NOT NULL,
  `sargam` int(11) NOT NULL,
  `komal and teevra` int(11) NOT NULL,
  `teental` int(11) NOT NULL,
  `ektal` int(11) NOT NULL,
  `alankar` int(11) NOT NULL,
  `origami dog cat fox fish mouse` int(11) NOT NULL,
  `envelope making` int(11) NOT NULL,
  `paper airplane` int(11) NOT NULL,
  `origami fish` int(11) NOT NULL,
  `paper boat` int(11) NOT NULL,
  `house shapes` int(11) NOT NULL,
  `simple nature` int(11) NOT NULL,
  `birthday cake` int(11) NOT NULL,
  `catepillar` int(11) NOT NULL,
  `fish` int(11) NOT NULL,
  `breathing exercise` int(11) NOT NULL,
  `suryanamaskar` int(11) NOT NULL,
  `all standing postures` int(11) NOT NULL,
  `all sitting postures` int(11) NOT NULL,
  `all lying down postures` int(11) NOT NULL,
  `counting of numbers` int(11) NOT NULL,
  `square triangle circle` int(11) NOT NULL,
  `even and odd numbers` int(11) NOT NULL,
  `addition and subtraction` int(11) NOT NULL,
  `unit places in maths` int(11) NOT NULL,
  `alphabets` int(11) NOT NULL,
  `different types of colors` int(11) NOT NULL,
  `seasons in year` int(11) NOT NULL,
  `spellings of numbers` int(11) NOT NULL,
  `rhyming words` int(11) NOT NULL,
  `vowels` int(11) NOT NULL,
  `evs part 1` int(11) NOT NULL,
  `evs part 2` int(11) NOT NULL,
  `evs part 3` int(11) NOT NULL,
  `evs part 4` int(11) NOT NULL,
  `evs part 5` int(11) NOT NULL,
  `quiz score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`username`, `chanda mama`, `lakdi ki kathi`, `nani teri morni`, `clap your hands`, `jack and jill`, `humpty dumpty`, `itsy bitsy spider`, `twinkle twinkle little star`, `dance part 1`, `dance part 2`, `dance part 3`, `dance part 4`, `dance part 5`, `sargam`, `komal and teevra`, `teental`, `ektal`, `alankar`, `origami dog cat fox fish mouse`, `envelope making`, `paper airplane`, `origami fish`, `paper boat`, `house shapes`, `simple nature`, `birthday cake`, `catepillar`, `fish`, `breathing exercise`, `suryanamaskar`, `all standing postures`, `all sitting postures`, `all lying down postures`, `counting of numbers`, `square triangle circle`, `even and odd numbers`, `addition and subtraction`, `unit places in maths`, `alphabets`, `different types of colors`, `seasons in year`, `spellings of numbers`, `rhyming words`, `vowels`, `evs part 1`, `evs part 2`, `evs part 3`, `evs part 4`, `evs part 5`, `quiz score`) VALUES
('vcvcvc', 20, 20, 0, 20, 20, 20, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24),
('acacac', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('aaaaaa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('root', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('vijay2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
