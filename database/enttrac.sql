-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 09:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enttrac`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `rating`) VALUES
(35, 1, 7, 8),
(36, 1, 1, 7),
(43, 3, 8, 6),
(44, 3, 15, 6),
(45, 3, 31, 6),
(46, 3, 44, 6),
(47, 4, 12, 7),
(48, 5, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `noOfRatings` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_brand2` varchar(200) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_studio` varchar(255) NOT NULL,
  `item_format` varchar(255) NOT NULL,
  `item_synopsis` varchar(255) NOT NULL,
  `item_release` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_type`, `noOfRatings`, `item_brand`, `item_brand2`, `item_name`, `item_price`, `item_image`, `item_studio`, `item_format`, `item_synopsis`, `item_release`, `item_register`) VALUES
(1, 'Show', 626734, 'Drama', 'Supernatural', 'Anohana: The Flower We Saw That Day', 8.45, './assets/shows/Anohana.jpg', 'A-1 Pictures', 'Anime', 'Jinta Yadomi is peacefully living as a recluse, spending his days away from school and playing video games at home instead. One hot summer day, his childhood friend, Meiko \"Menma\" Honma, appears and pesters him to grant a forgotten wish. ', 'Apr 15, 2011 to Jun 24, 2011', '2020-03-28 11:08:57'),
(2, 'Show', 324242, 'Mystery', '', 'Dark', 9.62, './assets/shows/Dark.jpg', 'Studio Feels', 'Web Series', 'When two children go missing in a small German town, its sinful past is exposed along with the double lives and fractured relationships that exist among four families as they search for the kids. The mystery-drama series introduces an intricate puzzle fil', '1 December 2017 to 27 June 2020', '2020-03-28 11:08:57'),
(3, 'Show', 345455, 'Dark', 'Supernatural', 'Death Note', 6.54, './assets/shows/DeathNote.jpg', 'A-1 Pictures', 'Anime', 'something', 'Oct 4, 2006 to Jun 27, 2007', '2020-03-28 11:08:57'),
(4, 'Show', 767788, 'Comedy', '', 'The Big Bang Theory', 8.88, './assets/shows/TheBigBangTheory.jpg', 'Shaft', 'TV', 'The lives of four socially awkward friends, Leonard, Sheldon, Howard and Raj, take a wild turn when they meet the beautiful and free-spirited Penny.', '24 September 2007 to 16 May 2019', '2020-03-28 11:08:57'),
(5, 'Show', 123443, 'Shounen', '', 'Friends', 4.53, './assets/shows/Friends.jpg', 'Bones', 'Anime', 'Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.', 'N/A', '2020-03-28 11:08:57'),
(6, 'Show', 234235, 'Mystery', 'Thriller', 'La Casa De Papel', 9.54, './assets/shows/LaCasaDePapel.jpg', 'Madhouse', 'Anime', 'A criminal mastermind who goes by \"The Professor\" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. To help him carry out the ambitious plan, he recruits eight people with certain abilit', '2 May 2017 to ----', '2020-03-28 11:08:57'),
(7, 'Show', 874545, 'Comedy', '', 'The Office', 9.92, './assets/shows/TheOffice.jpg', 'Production I.G', 'Anime', 'A motley group of office workers go through hilarious misadventures at the Scranton, Pennsylvania, branch of the Dunder Mifflin Paper Company.', '24 March 2005 to 16 May 2013', '2020-03-28 11:08:57'),
(8, 'Show', 279334, 'Romance', '', 'The Simpsons', 3.45, './assets/shows/TheSimpsons.jpg', 'CloverWorks', 'Anime', 'Working-class father Homer Simpson and his dysfunctional family deal with comical situations and the ups-and-downs of life in the town of Springfield.', '17 December 1989 to ----', '2020-03-28 11:08:57'),
(9, 'Show', 895945, 'School', '', 'Lost', 4.56, './assets/shows/Lost.jpg', 'Studio Lol', 'Anime', 'The survivors of a plane crash find themselves stranded on a mysterious island. They are forced to work together for their survival when they realise that they are not alone on the island.', '22 September 2004 to May 23, 2010', '2020-03-28 11:08:57'),
(10, 'Show', 374757, 'School', '', 'Phineas and Ferb', 5.67, './assets/shows/PhineasAndFerb.jpg', 'Studio Cool', 'Anime', 'Phineas and Ferb embark on various adventures during their summer vacation, while trying to keep their sister from interfering with their plans.', 'August 17, 2007 to June 12, 2015', '2020-03-28 11:08:57'),
(11, 'Show', 454534, 'Action', 'Thriller', 'Star Wars', 7.68, './assets/shows/StarWars.jpg', 'Studio Sad', 'Anime', 'Star Wars is an American epic space opera media franchise created by George Lucas, which began with the eponymous 1977 film and quickly became a worldwide pop-culture phenomenon', 'May 25, 1977 to ----', '2020-03-28 11:08:57'),
(12, 'Show', 7898867, 'Action', 'Thriller', 'Erased', 8.98, './assets/shows/Erased.jpg', 'Studio Happy', 'Anime', 'When tragedy is about to strike, Satoru Fujinuma finds himself sent back several minutes before the accident occurs. The detached, 29-year-old manga artist has taken advantage of this powerful yet mysterious phenomenon, which he calls \"Revival,\" to save m', 'Jan 8, 2016 to Mar 25, 2016', '2020-03-28 11:08:57'),
(13, 'Show', 6553553, 'Shounen', '', 'Hajime no Ippo', 6.66, './assets/shows/HajimeNoIppo.jpg', 'Studio Disney', 'Anime', 'Makunouchi Ippo has been bullied his entire life. Constantly running errands and being beaten up by his classmates, Ippo has always dreamed of changing himself, but never has the passion to act upon it. One day, in the midst of yet another bullying, Ippo ', 'Oct 4, 2000 to Mar 29, 2014', '2020-03-28 11:08:57'),
(14, 'Movie', 1032017, 'Drama', 'Romance', 'Kimi No Na Wa', 9.00, './assets/movies/KimiNoNaWa.jpg', 'CoMix Wave Films', 'Anime', 'something', 'Aug 26, 2016', '2020-03-28 11:08:57'),
(15, 'Movie', 133455, 'Action', 'Thriller', '6 Underground', 6.10, './assets/movies/6Underground.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(16, 'Movie', 133455, 'Action', 'Thriller', 'Arjun Reddy', 6.10, './assets/movies/ArjunReddy.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(17, 'Movie', 133455, 'Action', 'Thriller', 'Avengers:Endgame', 6.10, './assets/movies/AvengersEndgame.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(18, 'Movie', 133455, 'Mystery', 'Thriller', 'Chernobyl', 6.10, './assets/movies/Chernobyl.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(19, 'Movie', 133455, 'Action', 'Thriller', 'Dangal', 6.10, './assets/movies/Dangal.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(20, 'Movie', 133455, 'Action', 'Thriller', 'Ford vs Ferrari', 6.10, './assets/movies/FordvsFerrari.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(21, 'Movie', 133455, 'Action', 'Thriller', 'Castaway', 6.10, './assets/movies/CastAway.jpg', 'Skydance Media', 'Netflix', 'something', 'N/A', '2020-03-28 11:08:57'),
(22, 'Movie', 133455, 'Action', 'Thriller', 'Joker', 6.10, './assets/movies/Joker.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(23, 'Movie', 133455, 'Action', 'Thriller', 'Mission Mangal', 6.10, './assets/movies/MissionMangal.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(24, 'Movie', 133455, 'Action', 'Thriller', 'Ode to My Father', 6.10, './assets/movies/OdeToMyFather.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(25, 'Movie', 133455, 'Action', 'Shounen', 'Parasite', 6.10, './assets/movies/Parasite.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(26, 'Movie', 133455, 'Comedy', 'Romance', 'Stand By Me Doraemon', 6.10, './assets/movies/StandByMeDoraemon.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(27, 'Movie', 133455, 'Shounen', 'Thriller', 'Suzumiya Haruhi no Shoushitsu', 6.10, './assets/movies/SuzumiyaHaruhinoShoushitsu.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(28, 'Movie', 133455, 'Action', 'Thriller', 'The Irishman', 6.10, './assets/movies/TheIrishman.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(29, 'Movie', 133455, 'Action', 'Thriller', '1917', 6.10, './assets/movies/1917.jpg', 'Skydance Media', 'Netflix', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(30, 'Song', 7845464, 'EDM', '', 'Alone', 7.80, './assets/songs/Alone.jpg', 'Alan Walker', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(31, 'Song', 7845464, 'EDM', '', 'Darkside', 8.10, './assets/songs/Darkside.jpg', 'Alan Walker', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(32, 'Song', 7845464, 'EDM', '', 'Faded', 9.40, './assets/songs/Faded.jpg', 'Alan Walker', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(33, 'Song', 7845464, 'Bollywood', '', 'Galti Se Mistake', 8.80, './assets/songs/GaltiSeMistake.jpg', 'Arijit Singh', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(34, 'Song', 7845464, 'Bollywood', '', 'Illahi', 8.50, './assets/songs/Illahi.jpg', 'Arijit Singh', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(35, 'Song', 7845464, 'Bollywood', '', 'Kabira', 8.30, './assets/songs/Kabira.jpg', 'Alan Walker', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(36, 'Song', 7845464, 'Tollywood', '', 'Maate Vinaduga', 9.10, './assets/songs/MaateVinaduga.jpg', 'Sid Sriram', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(37, 'Song', 7845464, 'Bollywood', '', 'Phir Wahi', 6.50, './assets/songs/PhirWahi.jpg', 'Arijit Singh', 'Song', 'something', 'N/A', '2020-03-28 11:08:57'),
(38, 'Song', 7845464, 'Hip-Hop', '', 'The Bigger Picture', 7.50, './assets/songs/TheBiggerPicture.jpg', 'Lil Baby', 'Song', 'something', '13 December 2019', '2020-03-28 11:08:57'),
(39, 'Game', 647478, 'Sports', '', 'Fifa 12', 8.10, './assets/games/Fifa12.jpg', 'EA Sports', 'PlayStation 3', 'something', '27 September 2011', '2020-03-28 11:08:57'),
(40, 'Game', 647478, 'Sports', '', 'Fifa 13', 8.10, './assets/games/Fifa13.jpg', 'EA Sports', 'Xbox 360', 'something', '25 September 2012', '2020-03-28 11:08:57'),
(41, 'Game', 647478, 'Sports', '', 'PES 2018', 8.10, './assets/games/PES2018.jpg', 'Konami', 'PC', 'something', '12 September 2017', '2020-03-28 11:08:57'),
(42, 'Game', 647478, 'RPG', '', 'Assassins Creed Odyssey', 8.10, './assets/games/AssassinsCreedOdyssey.jpg', 'Ubisoft', 'PC', 'something', '2 October 2018', '2020-03-28 11:08:57'),
(43, 'Game', 647478, 'RPG', '', 'Assassins Creed Syndicate', 8.10, './assets/games/AssassinsCreedSyndicate.jpg', 'Ubisoft', 'Playstation 4', 'something', '23 October 2015', '2020-03-28 11:08:57'),
(44, 'Game', 849375, 'RPG', '', 'Assassins Creed Unity', 8.10, './assets/games/AssassinsCreedUnity.jpg', 'Ubisoft', 'PC', 'something', '11 November 2014', '2020-03-28 11:08:57'),
(45, 'Game', 463452, 'FPS', '', 'Call of Duty Black Ops', 8.10, './assets/games/CODBlackOps.jpg', 'Activision', 'PC', 'something', '9 November 2010', '2020-03-28 11:08:57'),
(46, 'Game', 0, 'RPG', '', 'Cyberpunk 2077', 0.00, './assets/games/Cyberpunk2077.jpg', 'CD Projekt', 'Mobile', 'something', 'N/A', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(1, 'Rahul', 'Sahoo', 'Male', 'rahulatshaker@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Sandeep', 'Sah', 'Male', 'sandsah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Nganba', 'Irom', 'Male', 'nganbairom@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Rahul', 'Singh', 'Male', 'rahsin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
