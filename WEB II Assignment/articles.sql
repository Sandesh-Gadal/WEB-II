-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 07:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtitle`, `content`, `category`, `image_path`, `author`, `created_at`) VALUES
(11, 'The Future of Renewable Energy', ' Innovations Shaping a Sustainable World', 'The renewable energy sector is rapidly evolving, driven by technological advancements and increasing awareness of environmental issues. Key innovations include improvements in solar panel efficiency, wind turbine design, and energy storage solutions. These developments are essential for meeting global energy demands while reducing carbon footprints.', 'science', '360_F_554514065_A5Y17mmaZgxkbcKri1g52RrLDtLzOU54.jpg', 'Jane Smith', '2024-06-09 17:53:53'),
(12, 'The Rise of Remote Work', 'How Telecommuting is Changing the Workplace', ' Remote work has become a mainstream option for many businesses, offering flexibility and efficiency. The COVID-19 pandemic accelerated this shift, leading to the adoption of new technologies and collaboration tools. Companies now face the challenge of maintaining productivity and employee engagement in a virtual environment.', 'technology', 'download.jpeg', 'John Doe', '2024-06-09 17:55:22'),
(13, 'Breakthroughs in Artificial Intelligence', 'Transforming Industries and Daily Life', 'Artificial intelligence (AI) is revolutionizing various sectors, from healthcare to finance. Recent breakthroughs in machine learning and natural language processing are enabling more sophisticated and intuitive applications. These advancements are poised to improve decision-making, automate routine tasks, and enhance user experiences.', 'technology', 'images.jpeg', 'Sandesh Gadal', '2024-06-09 17:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
