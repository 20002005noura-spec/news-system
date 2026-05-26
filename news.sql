-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2026 at 02:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, ''),
(2, 'sport'),
(3, 'sport'),
(4, 'أخبار رياضية');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `details`, `image`, `category_id`, `user_id`, `deleted`) VALUES
(7, 'انطلاق بطولة كرة السلة في غزة', 'نطلقت اليوم بطولة كرة السلة في قطاع غزة بمشاركة عدد كبير من الفرق المحلية، وسط أجواء حماسية وحضور جماهيري مميز.\r\n\r\nوشهدت المباراة الافتتاحية أداءً قويًا من الفريقين، حيث انتهت بفوز مثير بنتيجة 78-72 بعد منافسة شديدة حتى اللحظات الأخيرة.\r\n\r\nوأكد المنظمون أن البطولة تهدف إلى دعم الرياضة المحلية وتشجيع الشباب على ممارسة الرياضة وتنمية مهاراتهم، مع توقعات بمنافسة قوية خلال المباريات القادمة', 'المتخب الفلسطينيي.jfif', 4, 11, 1),
(8, 'انطلاق بطولة كرة السلة في غزة', 'نطلقت اليوم بطولة كرة السلة في قطاع غزة بمشاركة عدد كبير من الفرق المحلية، وسط أجواء حماسية وحضور جماهيري مميز.\r\n\r\nوشهدت المباراة الافتتاحية أداءً قويًا من الفريقين، حيث انتهت بفوز مثير بنتيجة 78-72 بعد منافسة شديدة حتى اللحظات الأخيرة.\r\n\r\nوأكد المنظمون أن البطولة تهدف إلى دعم الرياضة المحلية وتشجيع الشباب على ممارسة الرياضة وتنمية مهاراتهم، مع توقعات بمنافسة قوية خلال المباريات القادمة', 'المتخب الفلسطينيي.jfif', 4, 11, 1),
(9, 'منتخب فلسطين يحقق فوزًا مهمًا في تصفيات آسيا', 'حقق منتخب فلسطين لكرة القدم فوزًا مهمًا في مباراة ودية أمام خصم قوي، حيث قدم اللاعبون أداءً مميزًا طوال اللقاء. وسجل المنتخب هدف الفوز بعد هجمة منظمة في الشوط الثاني، مما أثار فرحة الجماهير والجهاز الفني. ويستعد المنتخب حاليًا لخوض مباريات التصفيات القادمة بهدف تحسين ترتيبه والتأهل للبطولات الدولية.', '1779671331_المتخب الفلسطينيي.jfif', 4, 11, 0),
(12, 'افتتاح ملعب رياضي جديد في المدينة لخدمة الشباب', 'تم اليوم افتتاح ملعب رياضي جديد في المدينة بحضور عدد من الشخصيات الرياضية والشبابية، وذلك ضمن جهود دعم الرياضة وتشجيع الشباب على ممارسة الأنشطة البدنية.\r\n\r\nويحتوي الملعب على تجهيزات حديثة ومرافق متكاملة تتيح للفرق المحلية التدريب وإقامة المباريات بشكل منظم، وسط توقعات بأن يصبح مركزًا مهمًا للبطولات المحلية في المستقبل.', '1779663412_المتخب الفلسطينيي.jfif', 4, 11, 0),
(13, 'افتتاح ملعب رياضي جديد في المدينة لخدمة الشباب', 'تم اليوم افتتاح ملعب رياضي جديد في المدينة بحضور عدد من الشخصيات الرياضية والشبابية، وذلك ضمن جهود دعم الرياضة وتشجيع الشباب على ممارسة الأنشطة البدنية.\r\n\r\nويحتوي الملعب على تجهيزات حديثة ومرافق متكاملة تتيح للفرق المحلية التدريب وإقامة المباريات بشكل منظم، وسط توقعات بأن يصبح مركزًا مهمًا للبطولات المحلية في المستقبل.', '1779664138_المتخب الفلسطينيي.jfif', 4, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'nn', 'noura2005@gmail.com', 'bjh'),
(3, 'nn', 'nn@gmail.com', 'nn'),
(5, 'mm', 'mm@gmail.com', 'mm'),
(6, 'noura', 'noura@gmail.com', '$2y$10$Zdq/5DkiRvIR30SRj.uGPO/IN4gxo6gDeioUeq2/YUJxw8buGS8Ky'),
(8, 'noura', 'noura1@gmail.com', '$2y$10$.mH/3wd1fKjpfgOtYoY6pOq31OGOSxW1bdb6EwJKIL0JbIBANr6yW'),
(9, 'noor', 'noor@gmail.com', '$2y$10$EbBac82ZmNSdWNP5jWytJ.ab3tPmv1osz6Hj4Hc3PEhKJNbH/ieu6'),
(10, 'oo', 'oo@gmail.com', '$2y$10$5EKPVkaXLJhCzPMj2DnyeOHcfiV7zsu2XJHXjTEE/liDybH9rdD1G'),
(11, 'moh', 'moh@gmail.com', '$2y$10$i.yS75rj4b.aCHAciWx/WOKE6hCy6LvQqFWrzUmmqXbVHD5H0mba6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
