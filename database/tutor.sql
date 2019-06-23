-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 12:16 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cywsitec_demo`
--
CREATE DATABASE IF NOT EXISTS `cywsitec_demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cywsitec_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(30000) NOT NULL,
  `duedate` varchar(100) NOT NULL,
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `title`, `description`, `duedate`, `user_role`) VALUES
(1, 'GENERAL PSYCHOLOGY Assignment', '<p><strong>Answer the following questions in about 1000 words. </strong></p><ul><li>Define Psychology. Describe the basic and applied fields of psychology.</li><li>Explain the characteristics of learn. Discuss observational theory of learning.</li><li>Discuss the factors in formation of attitude and factors causing attitudinal change.</li></ul><p><strong>Answer the following questions in about 400 words. </strong></p><ul><li>Explain the evolutionary and psychodynamic approaches to development.</li><li>Define attention. Explain its types and determinants.</li><li>Elucidate any two theories of intelligence. Discuss the role of heredity and environment in intelligence.</li><li>Explain three main memory systems.</li><li>Discuss Milgram&rsquo;s experiment on reactions to authority.</li></ul><p><strong>Answer the following questions in about 50 words. </strong></p><ul><li>Relationship of psychology with biological sciences.</li><li>Mental Age.</li><li>Second language acquisition.</li><li>Reinforcement.</li><li>Sensory deprivation.</li><li>Threshold.</li><li>Characteristics of intention.</li><li>Types of social distance</li></ul><p>&nbsp;</p>', '2019-06-22', 1),
(2, 'DEVELOPMENTAL PSYCHOLOGY Assignment', '<p><strong>Answer the following questions in about 1000 words. </strong></p><ul><li>Discuss the relationship of an adolescent to one&rsquo;s family with reference to parenting styles and attachment.</li><li>Describe adulthood developmental tasks.</li><li>Describe the stages and hazards during prenatal development.</li></ul><p><strong>Answer the following questions in about 400 words.</strong></p><ul><li>Discuss identity and identity crisis during adolescence.</li><li>Elucidate types of ageing and characteristics associated with successful ageing.</li><li>Explain Piaget&rsquo;s theory on cognitive development.</li><li>What are the types of attachment patterns? Discuss the development of attachment in early years.</li><li>Describe developmental disorders of scholastic skills.</li></ul><p><strong>Write brief notes on the following in about 50 words. </strong></p><ul><li>Self-esteem10. Mid-life crisis.</li><li>Epigenetic principle.</li><li>Psychosocial virtues or strengths.</li><li>Kubler-Ross Model.</li><li>Forward and backward conditioning.</li><li>Autonomy Vs Shame and Doubt.</li><li>Intellectualization.</li><li>Childhood autism.</li><li>Fully functioning person</li></ul>', '2019-06-30', 1),
(4, 'RESEARCH METHODS IN PSYCHOLOGY Assignment', '<p><strong>Answer the following question in about 1000 wordseach. </strong></p><ul><li>Discuss the concept and purpose of methodology of a research report. Explain the various details that are required to be included in it.</li><li>Describe the ways of manifesting and identifying a research problem. Discuss the nature, characteristics and importance of formulating a research problem.</li><li>Explain the different methods and types of research.</li></ul><p><strong>Answer the following questions in about 400 words each. </strong></p><ul><li>Discuss the relevance and strategies of writing an effective conclusion.</li><li>Discuss the writing process of the review of literature.</li><li>Discuss the characteristics of psychological test.</li><li>Discussthe meaning and types of questionnaire.</li><li>Discuss the different types of single subject design.</li></ul><p><strong>Answer the following in about 50 words each. </strong></p><ul><li>Summary of a report.</li><li>Table checklist.</li><li>Abstract.</li><li>Guidelines to write an introduction.</li><li>Advantages and disadvantages of experiment.</li><li>Guidelinesto follow in case study method.</li><li>Pilot test of questionnaire.</li><li>Stages of interview.</li><li>Halo effect.</li><li>Characteristics of observation.</li></ul>', '2019-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`) VALUES
(1, 'Admin', 'admin@tutor.co', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1),
(2, 'Adil', 'adil@gmail.com', 'b60f5ea13b5c61ac7a11579b565527cbe7b66c5c', 0),
(3, 'Nikhil', 'nikhil@mail.com', 'd36e671a37e64603e408883ed9be43ba9b8ccf79', 0),
(4, 'Meem', 'meem@mail.com', '37ecf970a482530dda5053528805b3acb8e93031', 0),
(5, 'Punit', 'punit@mail.com', 'b6a5f655242c868a3bf30aac27866cc42f2b94c6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
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
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
