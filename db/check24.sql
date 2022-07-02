-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2022 at 04:25 PM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `check24`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `commenter_name` varchar(200) NOT NULL DEFAULT '',
  `commenter_email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT '',
  `website` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci,
  `post_id` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `name`, `content`) VALUES
(1, 'imprint', 'About-us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n<br><br><br>\r\n<strong>Lorem Ipsum</strong>\r\n<br><br>\r\namet conseletur 17\r\n<br><br>\r\n55555 Sadjpscing\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `picture_link` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `body` text,
  `author_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `picture_link`, `body`, `author_id`, `created_at`) VALUES
(3, 'asdf', 'https://via.placeholder.com/300X160', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed magna eros. Ut dignissim nibh diam, at scelerisque justo condimentum sit amet. Maecenas laoreet venenatis ligula vitae efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam et elementum ipsum. Nullam eu blandit nibh. Suspendisse vitae dapibus lacus, sed fermentum nibh. Morbi ac tortor a lorem maximus tincidunt. Phasellus semper pharetra libero, sit amet mollis dui sagittis a. Donec nec viverra leo. Aliquam suscipit auctor metus, at hendrerit nisl suscipit sit amet. Nullam quis nisl sed augue accumsan dignissim. Donec tristique ut nibh vitae aliquet.\n\nMaecenas at gravida dolor, in lobortis metus. Pellentesque fringilla dapibus orci nec auctor. Pellentesque ac nisi ut nisi commodo viverra at sagittis leo. Nunc porta ultrices ipsum, at vulputate felis varius ut. Duis vitae felis tellus. Curabitur pretium tristique eros vel tincidunt. Vestibulum suscipit, leo at aliquam varius, mauris dolor ullamcorper risus, a auctor lacus metus id tellus. Duis maximus lorem diam, vel ullamcorper lacus iaculis et. Sed rutrum, nibh eget rutrum vulputate, leo enim mattis nisi, non sollicitudin ipsum magna at sem. Donec nec mi elit. Pellentesque vitae risus at purus lobortis consequat. Proin pretium vehicula ligula a convallis.\n\n', 1, '2022-06-30 12:34:33'),
(4, 'asdf1', 'https://via.placeholder.com/300X160', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed magna eros. Ut dignissim nibh diam, at scelerisque justo condimentum sit amet. Maecenas laoreet venenatis ligula vitae efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam et elementum ipsum. Nullam eu blandit nibh. Suspendisse vitae dapibus lacus, sed fermentum nibh. Morbi ac tortor a lorem maximus tincidunt. Phasellus semper pharetra libero, sit amet mollis dui sagittis a. Donec nec viverra leo. Aliquam suscipit auctor metus, at hendrerit nisl suscipit sit amet. Nullam quis nisl sed augue accumsan dignissim. Donec tristique ut nibh vitae aliquet.\r\n\r\nMaecenas at gravida dolor, in lobortis metus. Pellentesque fringilla dapibus orci nec auctor. Pellentesque ac nisi ut nisi commodo viverra at sagittis leo. Nunc porta ultrices ipsum, at vulputate felis varius ut. Duis vitae felis tellus. Curabitur pretium tristique eros vel tincidunt. Vestibulum suscipit, leo at aliquam varius, mauris dolor ullamcorper risus, a auctor lacus metus id tellus. Duis maximus lorem diam, vel ullamcorper lacus iaculis et. Sed rutrum, nibh eget rutrum vulputate, leo enim mattis nisi, non sollicitudin ipsum magna at sem. Donec nec mi elit. Pellentesque vitae risus at purus lobortis consequat. Proin pretium vehicula ligula a convallis.\r\n\r\n', 1, '2022-06-30 12:34:33'),
(5, 'asdf12', 'https://via.placeholder.com/300X160', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed magna eros. Ut dignissim nibh diam, at scelerisque justo condimentum sit amet. Maecenas laoreet venenatis ligula vitae efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam et elementum ipsum. Nullam eu blandit nibh. Suspendisse vitae dapibus lacus, sed fermentum nibh. Morbi ac tortor a lorem maximus tincidunt. Phasellus semper pharetra libero, sit amet mollis dui sagittis a. Donec nec viverra leo. Aliquam suscipit auctor metus, at hendrerit nisl suscipit sit amet. Nullam quis nisl sed augue accumsan dignissim. Donec tristique ut nibh vitae aliquet.\r\n\r\nMaecenas at gravida dolor, in lobortis metus. Pellentesque fringilla dapibus orci nec auctor. Pellentesque ac nisi ut nisi commodo viverra at sagittis leo. Nunc porta ultrices ipsum, at vulputate felis varius ut. Duis vitae felis tellus. Curabitur pretium tristique eros vel tincidunt. Vestibulum suscipit, leo at aliquam varius, mauris dolor ullamcorper risus, a auctor lacus metus id tellus. Duis maximus lorem diam, vel ullamcorper lacus iaculis et. Sed rutrum, nibh eget rutrum vulputate, leo enim mattis nisi, non sollicitudin ipsum magna at sem. Donec nec mi elit. Pellentesque vitae risus at purus lobortis consequat. Proin pretium vehicula ligula a convallis.\r\n\r\n', 1, '2022-06-30 12:34:33'),
(6, 'asdf123', 'https://via.placeholder.com/300X160', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed magna eros. Ut dignissim nibh diam, at scelerisque justo condimentum sit amet. Maecenas laoreet venenatis ligula vitae efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam et elementum ipsum. Nullam eu blandit nibh. Suspendisse vitae dapibus lacus, sed fermentum nibh. Morbi ac tortor a lorem maximus tincidunt. Phasellus semper pharetra libero, sit amet mollis dui sagittis a. Donec nec viverra leo. Aliquam suscipit auctor metus, at hendrerit nisl suscipit sit amet. Nullam quis nisl sed augue accumsan dignissim. Donec tristique ut nibh vitae aliquet.\r\n\r\nMaecenas at gravida dolor, in lobortis metus. Pellentesque fringilla dapibus orci nec auctor. Pellentesque ac nisi ut nisi commodo viverra at sagittis leo. Nunc porta ultrices ipsum, at vulputate felis varius ut. Duis vitae felis tellus. Curabitur pretium tristique eros vel tincidunt. Vestibulum suscipit, leo at aliquam varius, mauris dolor ullamcorper risus, a auctor lacus metus id tellus. Duis maximus lorem diam, vel ullamcorper lacus iaculis et. Sed rutrum, nibh eget rutrum vulputate, leo enim mattis nisi, non sollicitudin ipsum magna at sem. Donec nec mi elit. Pellentesque vitae risus at purus lobortis consequat. Proin pretium vehicula ligula a convallis.\r\n\r\n', 1, '2022-06-30 12:34:33'),
(7, 'sdf', 'dfsdfs', '<p>fsdfsdfsdf</p>', 1, '2022-07-02 11:07:02'),
(8, 'This is my title', 'link to the picture', '<p>content</p>', 1, '2022-07-02 11:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT '',
  `last_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT '',
  `avatar` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `avatar`) VALUES
(1, 'Mamdouh', 'Zaqout', 'mamdouh', '27056a6b69866d4e3cd3b4c0d21b6b43', '', ''),
(6, 'Mamdouh1', 'Zaqout1', 'mamdouh1', '27056a6b69866d4e3cd3b4c0d21b6b43', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
