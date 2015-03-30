-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 11:00 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblyric`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(3) NOT NULL AUTO_INCREMENT,
  `id_artis` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `id_artis`, `nama`, `tahun`) VALUES
(1, 1, 'Overexposed', 2011),
(2, 2, 'Take Me Home', 2012),
(3, 3, 'Some Night', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE IF NOT EXISTS `artis` (
  `id_artis` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_artis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id_artis`, `nama`, `tahun`, `tempat_lahir`, `genre`) VALUES
(1, 'Maroon 5', 2002, 'Los Angeles', 'Pop rock, funk rock,'),
(2, 'One Direction', 2012, 'Inggris', 'Pop'),
(3, 'Fun', 2012, 'Inggris', 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE IF NOT EXISTS `correct` (
  `id_correct` int(3) NOT NULL AUTO_INCREMENT,
  `id_lyric` int(3) NOT NULL,
  `lyric` text NOT NULL,
  PRIMARY KEY (`id_correct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `correct`
--


-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(20) NOT NULL AUTO_INCREMENT,
  `id_lyric` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_komentar`,`id_lyric`,`id_member`),
  KEY `id_lyric` (`id_lyric`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_lyric`, `id_member`, `nama`, `isi`, `tanggal`) VALUES
(2, 1, 1, 'mandau', 'asd', '2013-06-19'),
(3, 4, 1, 'mandau', 'wew', '2013-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `lyric`
--

CREATE TABLE IF NOT EXISTS `lyric` (
  `id_lyric` int(3) NOT NULL AUTO_INCREMENT,
  `id_artis` int(3) NOT NULL,
  `id_member` int(3) NOT NULL,
  `id_album` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `lyric` text NOT NULL,
  `album` varchar(20) NOT NULL,
  `views` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_lyric`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lyric`
--

INSERT INTO `lyric` (`id_lyric`, `id_artis`, `id_member`, `id_album`, `judul`, `lyric`, `album`, `views`, `tanggal`) VALUES
(1, 1, 1, 1, 'One More Night', 'You and I go hard, \r\nat each other like we going to war\r\nYou and I go rough, \r\nwe keep throwing things and slammin\\'' the door\r\nYou and I get so, \r\ndamn dysfunctional we stopped keeping score\r\nYou and I get sick, \r\nyah I know that we can\\''t do this no more\r\n\r\nBut baby there you again, there you again making me love you\r\nYeah I stopped using my head, using my head let it all go\r\nGot you stuck on my body, on my body like a tattoo\r\nAnd now i\\''m feeling stupid, feeling stupid crawling back to you\r\nSo I cross my heart, and I hope to die, that I\\''ll only stay with you one more night\r\nAnd I know I said it a million times\r\nBut i\\''ll only stay with you one more night\r\n\r\nTrying to tell you no, but my body keeps on telling you yes\r\nTrying to tell you stop, but your lipstick got me so out of breath\r\nI\\''d be waking up, in the morning probably hating myself\r\nAnd i\\''d be waking up, feeling satisfied but guilty as hell\r\n\r\nBut baby there you go again, there you go again making me love you\r\nYeah I stopped using my head, using my head let it all go\r\nGot you stuck on my body, on my body like a tattoo\r\nAnd now i\\''m feeling stupid, feeling stupid crawling back to you\r\nSo I cross my heart, and I hope to die, that i\\''ll only stay with you one more night\r\nAnd I know i\\''ve said it a million times\r\nBut i\\''ll only stay with you one more night\r\n\r\nYeah baby give me one more night\r\nYeah baby give me one more night\r\nYeah baby give me one more night\r\n\r\nBut baby there you again, there you again making me love you\r\nYeah I stopped using my head, using my head let it all go\r\nGot you stuck on my body, on my body like a tattoo\r\nYeah, yeah, yeah, yeah\r\n\r\nSo I cross my heart, and I hope to die, that i\\''ll only stay with you one more night\r\nAnd I know i\\''ve said it a million times\r\nBut i\\''ll only stay with you one more night\r\n\r\n(yeah baby give me one more night)\r\n\r\nSo I cross my heart, and I hope to die, that i\\''ll only stay with you one more night\r\nAnd I know i\\''ve said it a million times\r\nBut i\\''ll only stay with you one more night\r\n\r\n(I don\\''t know, whatever...)', 'Overexposed', 146, '2013-05-31 15:58:52'),
(4, 1, 1, 1, 'heart attack', 'ya gitu', 'Overexposed', 28, '2013-06-11 10:14:40'),
(5, 2, 1, 2, 'What Makes You Beautiful', 'You\\''re insecure\r\nDon\\''t know what for\r\nYou\\''re turning heads\r\nWhen you walk through the do o or\r\nDon\\''t need make up to cover up\r\nBeing the way that you are is e eno ough\r\n\r\nEveryone else in the room can see it\r\nEveryone else but you u\r\n\r\nBaby you light up my world\r\nLike nobody else\r\nThe way that you flip your hair\r\nGets me overwhelmed\r\nBut when you smile at the ground\r\nIt ain\\''t hard to tell\r\nYou don\\''t know oh oh\r\nYou don\\''t know you\\''re beautiful\r\n\r\n]If only you saw what I can see\r\nYou\\''ll understand\r\nWhy I want you so desperately\r\nRight now I\\''m looking at you\r\nAnd I can\\''t believe\r\nYou don\\''t know oh oh\r\nYou don\\''t know you\\''re beautiful\r\nOh oh that\\''s what makes you beautiful\r\n\r\nSo c-come on you got it wrong\r\nTo prove I\\''m right I put it in a so o ong\r\nI don\\''t know why you\\''re being shy\r\nAnd turn away when I look into \r\nYour eye eye eyes\r\n\r\nEveryone else in the room can see it\r\nEveryone else but you\r\n\r\nBaby you light up my world\r\nLike nobody else\r\nThe way that you flip your hair\r\nGets me overwhelmed\r\nBut when you smile at the ground\r\nIt ain\\''t hard to tell\r\nYou don\\''t know oh oh\r\nYou don\\''t know you\\''re beautiful\r\n\r\nIf only you saw what I can see\r\nYou\\''ll understand\r\nWhy I want you so desperately\r\nRight now I\\''m looking at you\r\nAnd I can\\''t believe\r\nYou don\\''t know oh oh\r\nYou don\\''t know you\\''re beautiful\r\nOh oh that\\''s what makes you beautiful\r\n\r\nNananana nananaaa nana \r\nNananana nana\r\nNananana nananaaa nana \r\nNananana nana\r\n\r\nBaby you light up my world\r\nLike nobody else\r\nThe way that you flip your hair\r\nGets me overwhelmed\r\nBut when you smile at the ground\r\nIt ain\\''t hard to tell\r\nYou don\\''t know oh oh\r\nYou dont know you\\''re beautiful\r\n\r\nBaby you light up my world\r\nLike nobody else\r\nThe way that you flip your hair\r\nGets me overwhelmed\r\nBut when you smile at the ground\r\nIt ain\\''t hard to tell\r\nYou don\\''t know oh oh\r\nYou dont know you\\''re beautiful\r\n\r\nIf only you saw what I can see\r\nYou\\''ll understand\r\nWhy i want you so desperately\r\nright now I\\''m looking at you\r\nAnd I can\\''t believe\r\nYou don\\''t know oh oh\r\nYou dont know you\\''re beautiful\r\nOh oh you don\\''t know you\\''re beautiful\r\nOh oh that\\''s what makes you beautiful\r\n', 'Take Me Home', 6, '2014-05-25 16:09:27'),
(7, 2, 1, 2, 'One Thing', 'asd', 'Take Me Home', 1, '2014-05-30 10:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `email`, `tanggal`) VALUES
(1, 'mandau', '14606e3547bebb97b15f2833487023d7', 'admin@admin.com', '2013-05-29 10:36:01'),
(2, 'mei', '202cb962ac59075b964b07152d234b70', 'meirosya99@gmail.com', '2013-06-17 17:59:21'),
(4, 'aditya', '0433e3038e208089eb74b7d9c8f5725f', 'cosplay_ellenor@yahoo.com', '2014-05-25 15:42:28'),
(5, 'amirudin', '0433e3038e208089eb74b7d9c8f5725f', 'cosplay_ellenor@yahoo.com', '2014-05-30 10:04:05'),
(6, 'amirudin2', '0433e3038e208089eb74b7d9c8f5725f', 'cosplay_ellenor@yahoo.com', '2014-05-30 10:05:25'),
(7, 'aditya2', '0433e3038e208089eb74b7d9c8f5725f', 'cosplay_ellenor@yahoo.com', '2014-05-30 10:17:02'),
(8, 'adityabagus', 'e10adc3949ba59abbe56e057f20f883e', 'casdasd@yahoo.com', '2014-06-04 08:57:11'),
(9, 'username', 'e10adc3949ba59abbe56e057f20f883e', '2@yahoo.com', '2014-06-04 09:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id_req` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_req`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_req`, `judul`, `nama`, `isi`, `tanggal`) VALUES
(2, 'titanium', 'mandau', ' ya itu', '2013-06-15 14:14:37'),
(3, 'payphone', 'mei', 'asjdajslkdlad', '2013-06-17 18:08:02'),
(4, 'One More Night', 'One Direction', 'asdasdasdasd', '2014-06-05 10:56:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_lyric`) REFERENCES `lyric` (`id_lyric`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
