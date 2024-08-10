-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 12:08 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bouquet`
--

CREATE TABLE IF NOT EXISTS `bouquet` (
  `id` int(11) NOT NULL,
  `nume` text NOT NULL,
  `descriere` text NOT NULL,
  `img` text NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bouquet`
--

INSERT INTO `bouquet` (`id`, `nume`, `descriere`, `img`, `pret`) VALUES
(1, 'Rose Bouquet', 'Classic elegance in a bundle, the symbol of love and romance.', 'atestatouquets1.jpeg', 12.99),
(2, 'Sunflower Bouquet', 'Radiant and cheerful, bringing the warmth of the sun indoors.', 'atestatouquets2.jpg', 35.99),
(3, 'Daisy Bouquet', ' Simple yet charming, exuding innocence and purity.', 'atestatouquets3.jpg', 29.99),
(4, 'Iris Bouquet', 'Exotic and graceful, a symbol of faith, hope, and wisdom.', 'atestatouquets4.jpeg', 56.99),
(5, 'Orchid Bouquet', 'Elegant and exotic, representing luxury and refinement.', 'atestatouquets5.png', 42.99),
(6, 'Tulip Bouquet', ' Colorful and vibrant, a herald of spring s arrival.', 'atestatouquets6.png', 38.99),
(7, 'Poopy Bouquet', 'Playful and whimsical, bringing joy and laughter.', 'atestatouquets7.png', 19.99),
(8, 'Daffodil Bouquet', 'Bright and cheerful, signaling the arrival of spring.', 'atestatouquets8.jpeg', 26.99),
(9, 'Periwinkle Bouquet', 'Delicate and enchanting, evoking memories of a serene garden.', 'atestatouquets9.jpg', 30.99),
(10, 'Blue Bouquet', 'Cool and calming, invoking feelings of tranquility and peace.', 'atestatouquets10.jpeg', 34.99),
(11, 'Red Bouquet', 'Passionate and intense, expressing deep love and desire.', 'atestatouquets11.jpeg', 59.99),
(12, 'Colourful Bouquet', 'Bursting with hues, a celebration of life s diversity and beauty.', 'atestatouquets12.jpeg', 37.99);

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE IF NOT EXISTS `comanda` (
  `id` int(11) NOT NULL,
  `nume` text NOT NULL,
  `img` longtext NOT NULL,
  `cantitate` int(11) NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`id`, `nume`, `img`, `cantitate`, `pret`) VALUES
(1, 'Rose', '/atestat/images/rose.jpg', 1, 4.99),
(2, 'Sunflower', '/atestat/images/sunflower.jpg', 1, 5.99),
(3, 'Daisy', '/atestat/images/daisy.jpg', 1, 2.99),
(4, 'Tulip', '/atestat/images/tulip.jpg', 1, 3.99),
(5, 'Periwinkle', '/atestat/images/periwinkle.jpg', 1, 6.99),
(6, 'Poppy', '/atestat/images/poppy.jpg', 1, 2.99),
(7, 'Iris', '/atestat/images/iris.jpg', 1, 5.99),
(8, 'Daffodil', '/atestat/images/daffodil.jpg', 1, 4.99);

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE IF NOT EXISTS `cos` (
  `nume` text NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wrapper`
--

CREATE TABLE IF NOT EXISTS `wrapper` (
  `idw` int(11) NOT NULL,
  `culoare` text NOT NULL,
  `img` text NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wrapper`
--

INSERT INTO `wrapper` (`idw`, `culoare`, `img`, `pret`) VALUES
(1, 'black', '\\atestat\\wrapper\\w1.jpg', 17),
(2, 'green', '\\atestat\\wrapper\\w2.jpg', 12),
(3, 'grey', '\\atestat\\wrapper\\w3.jpg', 15),
(4, 'pink', '\\atestat\\wrapper\\w4.jpg', 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
