-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 11:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `idKorisnika` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `datumRodjenja` date NOT NULL,
  `tezina` int(11) NOT NULL,
  `visina` int(11) NOT NULL,
  `adresaStanovanja` varchar(30) NOT NULL,
  `brojDobijenih` int(11) NOT NULL,
  `brojIzgubljenih` int(11) NOT NULL,
  `brPlatneKartice` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefon` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password1` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`idKorisnika`, `ime`, `prezime`, `datumRodjenja`, `tezina`, `visina`, `adresaStanovanja`, `brojDobijenih`, `brojIzgubljenih`, `brPlatneKartice`, `email`, `telefon`, `username`, `password1`) VALUES
(20, 'Mladen', 'Zvjerac', '1977-02-13', 100, 186, 'Nedeljka Gvozdenovića 22b', 12, 5, 1234567, 'mladen56717@its.edu.rs', 63377745, 'mz', 'tool'),
(21, 'Karlo', 'Hungar', '2000-02-12', 140, 188, 'Moravska3,Jagodina', 4, 5, 7777777, 'karlo@gmail.com', 656245125, 'karlo', 'veliki'),
(23, 'Bosiljka', 'Pilic', '1995-12-05', 89, 183, 'Dusmanina Janka2', 6, 7, 4562147, 'bosanoga@youtube.com', 66231454, 'bosa', 'noga'),
(24, 'Borjan', 'Dubravković', '1979-07-02', 122, 199, 'Jajačka 12', 2, 6, 324515, 'dubravko99@gmail.com', 6332142, 'borko', 'jaje');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `idKorpe` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `ippADD` varchar(30) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `idKorisnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `narudzbine`
--

CREATE TABLE `narudzbine` (
  `idNarudzbine` int(11) NOT NULL,
  `idKorisnika` int(11) NOT NULL,
  `idProizvoda` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `trxID` varchar(30) NOT NULL,
  `p-status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `idProizvoda` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cijena` double NOT NULL,
  `namjena` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nazivModela` varchar(30) CHARACTER SET utf8 NOT NULL,
  `proizvodjac` varchar(30) CHARACTER SET utf8 NOT NULL,
  `velicina` varchar(9) CHARACTER SET utf8 NOT NULL,
  `vrsta` varchar(30) CHARACTER SET utf8 NOT NULL,
  `boja` varchar(30) CHARACTER SET utf8 NOT NULL,
  `slika` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`idProizvoda`, `kolicina`, `cijena`, `namjena`, `nazivModela`, `proizvodjac`, `velicina`, `vrsta`, `boja`, `slika`) VALUES
(7032, 2, 36, 'trening', 'Dragon12', 'Reebok', 'L', 'duks', 'Crna', 'duks3.jpg'),
(7033, 2, 56, 'trening', 'Black and Yellow', 'Adidas', 'L', 'duks', 'Crna', 'duks.jpg'),
(7035, 3, 122, 'trening', 'RedCock', 'Under Armour', '42', 'patike', 'Crvena', 'patike.jpeg'),
(7036, 5, 49, 'trening', 'Marble AOP', 'Adidas', 'M', 'duks', 'Plava', 'duks/adidas/Marble Aop.jpeg'),
(7038, 3, 222, 'borba', 'BackBlow', 'Everlast', 'L', 'štitnici za glavu', 'Crna', 'glava1.jpg'),
(7039, 5, 159, 'Fitnes', 'RedSonya12', 'Reebok', 'S', 'duks', 'Crvena', 'duks6.jpg'),
(7040, 4, 104, 'trening', 'Croped W', 'Adidas', 'S', 'duks', 'Crna', 'duks/adidas/Cropped W.jpg'),
(7041, 8, 69, 'trening', 'Navy', 'Adidas', 'XL', 'duks', 'Plava', 'duks/adidas/Navy.jpg'),
(7042, 3, 24, 'borba', 'gummy', 'Wilson', 'S', 'štitnici za zube', 'Crvena', 'zubi1.jpg'),
(7043, 12, 9, 'trening', 'Nike-SRB orao', 'Nike', 'XL', 'majica', 'Crvena', 'nike_orao2_1.jpg'),
(7044, 3, 66, 'trening', 'NorthLeach W', 'Adidas', 'S', 'duks', 'Crvena', 'duks/adidas/Northleach Womeen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac`
--

CREATE TABLE `proizvodjac` (
  `IDProizvodjaca` int(11) NOT NULL,
  `nazivProizvodjaca` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodjac`
--

INSERT INTO `proizvodjac` (`IDProizvodjaca`, `nazivProizvodjaca`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Reebok'),
(4, 'Champion'),
(5, 'Lonsdale');

-- --------------------------------------------------------

--
-- Table structure for table `vrsta`
--

CREATE TABLE `vrsta` (
  `idKategorije` int(100) NOT NULL,
  `nazivKategorije` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Dumping data for table `vrsta`
--

INSERT INTO `vrsta` (`idKategorije`, `nazivKategorije`) VALUES
(1, 'duks'),
(2, 'majica'),
(4, 'patike'),
(5, 'rukavice'),
(6, 'štitnik za glavu'),
(7, 'štitnik za zube');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`idKorisnika`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`idKorpe`);

--
-- Indexes for table `narudzbine`
--
ALTER TABLE `narudzbine`
  ADD PRIMARY KEY (`idNarudzbine`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`idProizvoda`);

--
-- Indexes for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  ADD PRIMARY KEY (`IDProizvodjaca`);

--
-- Indexes for table `vrsta`
--
ALTER TABLE `vrsta`
  ADD PRIMARY KEY (`idKategorije`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `idKorisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `idKorpe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `narudzbine`
--
ALTER TABLE `narudzbine`
  MODIFY `idNarudzbine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `idProizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7045;

--
-- AUTO_INCREMENT for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  MODIFY `IDProizvodjaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vrsta`
--
ALTER TABLE `vrsta`
  MODIFY `idKategorije` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
