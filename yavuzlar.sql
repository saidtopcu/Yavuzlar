-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 03:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yavuzlar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'said', 'admin1@example.com', '$2y$10$3wnWIO8Un7r1BRgSao23yuShX5TvMK1oip/kO0KOa7SUc/sU8Ik2u'),
(2, 'taha', 'admin2@example.com', '$2y$10$Y4GFbt4kraL4zm6n2S7uFej8AWcOFO4ah62zeuQwLnnhXifrR1RyK');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_published` date NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `date_published`, `author`) VALUES
(1, 'Kırmızı Takım (Red Team) Nedir ve Siber Güvenlikteki Önemi', 'Kırmızı Takım Nedir?...', '2023-07-23', 'TAHA OZEN'),
(2, 'Kırmızı Takımın Görevleri', 'Penetrasyon Testleri: Kırmızı Takım, organizasyonun ağlarına ve sistemlerine yetkisiz...', '2023-07-24', 'TAHA OZEN'),
(3, 'Kırmızı Takımın Önemi', 'Gerçek Dünya Senaryolarının Simülasyonu: Kırmızı Takım, gerçek saldırı senaryolarını taklit ederek organizasyonun gerçek dünya koşullarında ne kadar savunmasız olduğunu gösterir...', '2023-07-25', 'TAHA OZEN'),
(4, 'Sonuç', 'Kırmızı Takım, organizasyonların siber güvenliklerini güçlendirmek ve savunma önlemlerini etkinleştirmek için kritik bir rol oynar. Gerçek saldırganlar gibi düşünmek ve hareket etmek, kurumların daha dirençli bir güvenlik altyapısı oluşturmasına yardımcı olur. Bu nedenle, Kırmızı Takım testleri, siber güvenlik stratejilerinin ayrılmaz bir parçası haline gelmiştir ve organizasyonların dijital varlıklarını koruma konusunda daha güçlü bir konuma geçmesine katkı sağlar.', '2023-07-26', 'TAHA OZEN');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `description`, `date`, `author`) VALUES
(1, 'RED TEAM NEDİR', 'Siber dünyanın hızla büyüyen tehditlerine karşı savunma yapmak, organizasyonlar için giderek daha zor ve hayati hale geliyor. Kırmızı Takım (Red Team) ise bu zorlu mücadelede kritik bir rol üstleniyor.', '2023-01-20', 'TAHA OZEN'),
(2, 'Siber güvenlikte kullanılan Araçlar', 'Siber güvenlikte kullanılan  tolllar', '2023-01-21', 'TAHA OZEN'),
(3, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum esse eveniet atque, labore rem in neque veniam ipsa cumque non earum eligendi necessitatibus sint. Officia minus culpa inventore a labore?', '2020-01-01', 'Name Surname'),
(4, 'RED TEAM', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum esse eveniet atque, labore rem in neque veniam ipsa cumque non earum eligendi necessitatibus sint. Officia minus culpa inventore a labore?', '2020-01-01', 'Name Surname');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim_formu`
--

CREATE TABLE `iletisim_formu` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iletisim_formu`
--

INSERT INTO `iletisim_formu` (`id`, `fullname`, `email`, `subject`, `message`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'Hello, I\'m interested in your service.', NULL),
(2, 'Jane Smith', 'jane.smith@example.com', 'Hi, I have a question about your product.', NULL),
(3, 'said', 'saidtopcu@outlook.com', 'Test', 'test'),
(4, 'said', 'saidtopcu@outlook.com', 'Test', 'test'),
(5, 'said', 'saidtopcu@outlook.com', 'Test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim_formu`
--
ALTER TABLE `iletisim_formu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iletisim_formu`
--
ALTER TABLE `iletisim_formu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
