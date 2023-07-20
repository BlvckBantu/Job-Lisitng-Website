-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2020 at 12:03 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--
CREATE DATABASE IF NOT EXISTS `cv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cv`;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `Full_name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` text NOT NULL,
  `Nationality` text NOT NULL,
  `Job_title` text NOT NULL,
  `work_experience` text NOT NULL,
  `education_training` text NOT NULL,
  `personal_skills` text NOT NULL,
  `Other_skills` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`Full_name`, `Email`, `Phone_number`, `Address`, `DOB`, `Gender`, `Nationality`, `Job_title`, `work_experience`, `education_training`, `personal_skills`, `Other_skills`) VALUES
('Calvin', 'blvckbantu@gmail.com', 746076300, '542 mimi street', '2020', 'Male', 'Kenyan', 'Software Engineer', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.'),
('Calvin', 'blvckbantu@gmail.com', 746076300, '542 mimi street', '2020', 'Male', 'Kenyan', 'Software Engineer', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.'),
('Calvin', 'blvckbantu@gmail.com', 746076300, '542 mimi street', '2020', 'Male', 'Kenyan', 'Managing Director', 'preparing accounts and tax returns. administering payrolls and controlling income and expenditure. auditing financial information. compiling and presenting reports, budgets, business plans, commentaries and financial statements. analysing accounts and business plans.', 'preparing accounts and tax returns. administering payrolls and controlling income and expenditure. auditing financial information. compiling and presenting reports, budgets, business plans, commentaries and financial statements. analysing accounts and business plans.', 'preparing accounts and tax returns. administering payrolls and controlling income and expenditure. auditing financial information. compiling and presenting reports, budgets, business plans, commentaries and financial statements. analysing accounts and business plans.', 'preparing accounts and tax returns. administering payrolls and controlling income and expenditure. auditing financial information. compiling and presenting reports, budgets, business plans, commentaries and financial statements. analysing accounts and business plans.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
