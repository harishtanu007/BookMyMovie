-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 06:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `movieDate` varchar(255) NOT NULL,
  `movieTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingID`, `movieID`, `date`, `time`, `venue`, `seat`, `userId`, `amount`, `paymentMode`, `movieDate`, `movieTime`) VALUES
(16, 8, '20-07-31', '01:01 AM', 'CineBistro, Town Brookhaven', 49, 3, 300, 'Paypal', '2020-08-01', '9:00 PM'),
(17, 10, '20-07-31', '01:09 AM', 'AMC theater, Buckhead', 49, 3, 300, 'Credit Card', '2020-08-02', '1:00 PM'),
(18, 8, '20-07-31', '01:38 AM', 'Fox Theatre, Atlanta', 49, 32, 300, 'Credit Card', '2020-07-25', '1:00 PM'),
(19, 8, '20-07-31', '08:06 AM', 'Fox Theatre, Atlanta', 49, 3, 300, 'Paypal', '2020-07-18', '5:00 PM'),
(20, 14, '20-07-31', '02:59 PM', 'AMC theater, Buckhead', 49, 32, 300, 'Debit Card', '2020-08-08', '11:00 AM'),
(21, 15, '20-07-31', '04:45 PM', 'AMC theater, Buckhead', 49, 32, 300, 'Debit Card', '2020-08-02', '11:00 AM'),
(22, 8, '20-07-31', '10:25 PM', 'AMC theater, Buckhead', 49, 32, 300, 'Debit Card', '2020-08-08', '11:00 AM'),
(23, 14, '20-07-31', '10:39 PM', 'Fox Theatre, Atlanta', 49, 32, 300, 'Paypal', '2020-08-02', '5:00 PM'),
(24, 9, '20-07-31', '10:43 PM', 'AMC theater, Buckhead', 49, 1, 300, 'Debit Card', '2020-08-01', '11:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `movieId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movieId`, `Name`, `Genre`, `Director`, `Description`, `image`, `imdb`) VALUES
(8, 'Joker', 'Drama', 'Todd Phillips', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 'joker.jpg', '8.5'),
(9, 'The Godfather', 'Drama', 'Francis Ford Coppola', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'godfather.jpg', '9.2'),
(10, 'Once Upon a Time... In Hollywood', 'Drama', 'Quentin Tarantino', 'A faded television actor and his stunt double strive to achieve fame and success in the final years of Hollywood\'s Golden Age in 1969 Los Angeles.', 'onceupon.jpg', '7.7'),
(11, 'Hotel Transylvania 3', 'Comedy', 'Genndy Tartakovsky', 'Count Dracula and company participate in a cruise for sea-loving monsters, unaware that their boat is being commandeered by the monster-hating Van Helsing family.', 'hotel.jpg', '6.3'),
(12, 'The Hangover', 'Comedy', 'Todd Phillips', 'Three buddies wake up from a bachelor party in Las Vegas, with no memory of the previous night and the bachelor missing. They make their way around the city in order to find their friend before his wedding.', 'hangover.jpg', '7.7'),
(13, 'The Dictator', 'Comedy', 'Larry Charles', 'The heroic story of a dictator who risked his life to ensure that democracy would never come to the country he so lovingly oppressed.', 'dictator.jpg', '6.4'),
(14, 'Avengers: Endgame', 'Action', 'Anthony Russo', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 'avengers3.jpg', '8.4'),
(15, 'Spider-Man: Far from Home', 'Action', 'Jon Watts', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', 'spiderman.jpg', '7.5'),
(16, 'Alita: Battle Angel', 'Action', 'Robert Rodriguez', 'A deactivated cyborg is revived, but cannot remember anything of her past life and goes on a quest to find out who she is.', 'alita.jpg', '7.3'),
(17, 'Jumanji: The Next Level', 'Adventure', 'Jake Kasdan', 'In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.', 'jumanji.jpg', '6.7'),
(18, 'The Lord of the Rings: The Return of the King', 'Adventure', 'Peter Jackson', 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.', 'lor.jpg', '8.9'),
(19, 'Journey to the Center of the Earth', 'Adventure', 'Eric Brevig', 'On a quest to find out what happened to his missing brother, a scientist, his nephew and their mountain guide discover a fantastic and dangerous lost world in the center of the earth.', 'journey.jpg', '5.8'),
(20, 'John Wick: Chapter 3 - Parabellum', 'Crime', 'Chad Stahelski', 'John Wick is on the run after killing a member of the international assassins\' guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.', 'johnwick.jpg', '7.5'),
(21, 'El Camino: A Breaking Bad Movie', 'Crime', 'Vince Gilligan', 'El Camino: A Breaking Bad Movie follows fugitive Jesse Pinkman as he runs from his captors, the law and his past.', 'breakingbad.jpg', '7.3');

-- --------------------------------------------------------

--
-- Table structure for table `showorder`
--

CREATE TABLE `showorder` (
  `showOrderId` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showorder`
--

INSERT INTO `showorder` (`showOrderId`, `date`, `timeslot`, `theater`, `movieName`, `seat`) VALUES
(33, '2020-08-01', '9:00 PM', 'CineBistro, Town Brookhaven', 'Joker', '49'),
(35, '2020-08-02', '1:00 PM', 'AMC theater, Buckhead', 'Once Upon a Time... In Hollywood', '49'),
(36, '2020-07-25', '1:00 PM', 'Fox Theatre, Atlanta', 'Joker', '49'),
(37, '2020-08-08', '11:00 AM', 'AMC theater, Buckhead', 'Joker', '49'),
(38, '2020-07-18', '5:00 PM', 'Fox Theatre, Atlanta', 'Joker', '49'),
(39, '2020-08-08', '11:00 AM', 'AMC theater, Buckhead', 'Avengers: Endgame', '49'),
(40, '2020-08-02', '11:00 AM', 'AMC theater, Buckhead', 'Spider-Man: Far from Home', '49'),
(41, '2020-08-01', '11:00 AM', 'AMC theater, Buckhead', 'Joker', '50'),
(42, '2020-08-02', '5:00 PM', 'Fox Theatre, Atlanta', 'Avengers: Endgame', '49'),
(43, '2020-08-01', '11:00 AM', 'AMC theater, Buckhead', 'The Godfather', '49'),
(44, '', '11:00 AM', 'AMC theater, Buckhead', 'El Camino: A Breaking Bad Movie', '50');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `theaterId` int(11) NOT NULL,
  `theaterName` varchar(255) DEFAULT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theaterId`, `theaterName`, `seat`) VALUES
(5, 'AMC theater, Buckhead', 0),
(6, 'Fox Theatre, Atlanta', 0),
(7, 'CineBistro, Town Brookhaven', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `timeslotId` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`timeslotId`, `time`) VALUES
(6, '11:00 AM'),
(7, '1:00 PM'),
(8, '5:00 PM'),
(9, '9:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `status`, `email`, `phone`, `image`) VALUES
(1, 'admin', 'admin', 101, '', '', ''),
(3, 'user', 'user', 202, 'user@gmail.com', '6781231231', 'user.jpg'),
(32, 'Harish', 'test', 202, 'harishtanu007@gmail.com', '6786969619', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD UNIQUE KEY `BookingID` (`bookingID`);

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `showorder`
--
ALTER TABLE `showorder`
  ADD PRIMARY KEY (`showOrderId`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theaterId`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`timeslotId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `showorder`
--
ALTER TABLE `showorder`
  MODIFY `showOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `theaterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `timeslotId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
