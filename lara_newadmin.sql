-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2016 at 12:13 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lara_newadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=147 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `message`, `images`, `e_date`, `created_at`, `updated_at`) VALUES
(136, 'Cardio Monitoring ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '', '0000-00-00 00:00:00', '2015-12-26 02:48:56', '2015-12-26 02:48:56'),
(137, 'Rehabilitation Therapy', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '', '0000-00-00 00:00:00', '2015-12-26 02:50:24', '2015-12-26 03:33:49'),
(138, 'Medical Health Care', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '', '0000-00-00 00:00:00', '2015-12-26 03:42:40', '2015-12-26 03:42:40'),
(139, 'Background Checks', 'rtrtrt', 'google.png', '0000-00-00 00:00:00', '2015-12-26 03:43:13', '2015-12-31 00:48:29'),
(140, 'Special Doctor', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'bigstock-Elephant-Herd-39966508-1024x682.jpg', '2016-03-02 18:30:00', '2015-12-26 03:58:51', '2016-01-06 01:05:29'),
(141, '24 Hours Service', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'bigstock-Elephant-Herd-39966508-1024x682.jpg', '0000-00-00 00:00:00', '2015-12-26 03:59:04', '2015-12-28 01:18:11'),
(142, 'Cardio Monitoring ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '11239658_688979011234350_8884765014744742193_n.jpg', '0000-00-00 00:00:00', '2015-12-26 03:59:28', '2016-01-05 07:40:53'),
(143, 'Rehabilitation Therapy', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'dragons.gif', '0000-00-00 00:00:00', '2015-12-26 04:26:25', '2015-12-28 05:52:49'),
(144, 'Medical Health Care', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'google.png', '0000-00-00 00:00:00', '2015-12-26 04:37:40', '2015-12-31 00:47:50'),
(145, 'Background Checks\n', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'dragons.gif', '0000-00-00 00:00:00', '2015-12-31 00:50:52', '2016-01-01 01:17:34'),
(146, 'Special Doctor', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 'dragons.gif', '2016-02-01 18:30:00', '2016-01-01 03:41:02', '2016-01-06 01:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_02_090123_entrust_setup_tables', 2),
('2015_12_03_113006_create_sessions_table', 3),
('2015_12_14_103433_create-post-table', 4),
('2015_12_14_111856_edit-post-table', 5),
('2015_12_22_112619_create_event', 6),
('2016_01_01_062121_create_sendmsg_table', 7),
('2016_01_01_081028_table_sendmsg_table', 8),
('2016_01_01_090045_table_sendmsg_table_2', 9),
('2016_01_01_090129_table_sendmsg_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-post', 'create-post', 'create-post for admin', '2015-12-12 01:06:10', '2015-12-12 01:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'null', '<p>null</p>\r\n', '2015-12-14 05:49:42', '2015-12-15 08:00:33'),
(2, 'Test 2 ', 'This is message', '2015-12-14 06:49:10', '2015-12-14 06:49:10'),
(3, 'test 3', 'this is new message', '2015-12-14 06:49:45', '2015-12-14 06:49:45'),
(4, 'test 3', 'this is new message', '2015-12-14 06:50:07', '2015-12-14 06:50:07'),
(5, 'test 5', '<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>NAME</td>\r\n			<td>Description</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Krishna</td>\r\n			<td>This is Test</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rushabh</td>\r\n			<td>THis is test<', '2015-12-14 07:31:40', '2015-12-14 07:31:40'),
(6, 'Ronak Testrrrrrrrr', '<p>This is test</p>\r\n', '2015-12-14 07:35:23', '2015-12-15 08:35:52'),
(7, 'yhejyf', '<p>fjldskjlsdkv</p>\r\n', '2015-12-14 07:59:13', '2015-12-14 07:59:13'),
(8, 'yuyuy', '<p>yuyu</p>\r\n121212jjjgjhgjhghjghg]\r\njkhkjhkhkjhkjhjkhjkhkh\r\niuiuuu\r\n', '2015-12-14 08:15:39', '2015-12-26 02:53:03'),
(9, 'null', '<p>null</p>\r\n123\r\n123\r\n123\r\n123\r\n123', '2015-12-14 08:15:49', '2015-12-26 02:52:40'),
(10, 'Testtttttttttttttttt', '<p>TestererererTestererererTestererererTestererererTestererererTestererererTesterererer</p>\r\n', '2015-12-15 08:21:45', '2015-12-15 08:21:59'),
(11, 'hi dsfd', '<p>sdafsdfads</p>\r\n', '2015-12-15 08:38:31', '2015-12-15 08:38:31'),
(12, 'test123', '<p>ttestttt</p>\r\n', '2015-12-15 08:40:37', '2015-12-15 08:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', 'THis is administrator role', '2015-12-02 07:08:16', '2015-12-02 07:08:16'),
(2, 'user', 'User', 'this is user', '2015-12-02 07:09:52', '2015-12-02 07:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(17, 1),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sendmsgs`
--

CREATE TABLE IF NOT EXISTS `sendmsgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_phoneno` text COLLATE utf8_unicode_ci NOT NULL,
  `to_phoneno` text COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sendmsgs`
--

INSERT INTO `sendmsgs` (`id`, `from_phoneno`, `to_phoneno`, `message`, `created_at`, `updated_at`) VALUES
(1, '0', '2147483647', '<p>dsdsdsd</p>\r\n', '2016-01-01 02:28:55', '2016-01-01 02:28:55'),
(2, '+16572014282', '+918866134401', 'Hello\r\nI love Laravel\r\n', '2016-01-01 03:36:34', '2016-01-01 03:36:34'),
(3, '+16572014282', '+918866134401', 'This is Test\r\n', '2016-01-01 03:43:19', '2016-01-01 03:43:19'),
(4, '+16572014282', '+918866134401', 'This is Test\r\n', '2016-01-01 03:44:09', '2016-01-01 03:44:09'),
(5, '+16572014282', '+918866134401', '<p>dsdsdsd</p>\r\n', '2016-01-01 04:19:55', '2016-01-01 04:19:55'),
(6, '+16572014282', '+918866134401', 'This is test only', '2016-01-01 04:27:53', '2016-01-01 04:27:53'),
(7, '+16572014282', '+918866134401', 'This is test only', '2016-01-01 04:28:18', '2016-01-01 04:28:18'),
(8, '+16572014282', '+918866134401', '<p>Hi</p>\r\n', '2016-01-01 04:30:08', '2016-01-01 04:30:08'),
(9, '+16572014282', '+918866134401', '<p>ererer</p>\r\n', '2016-01-01 04:33:44', '2016-01-01 04:33:44'),
(10, '+16572014282', '+918866134401', 'This is test', '2016-01-04 07:48:22', '2016-01-04 07:48:22'),
(11, '+16572014282', '+918866134401', 'This is test', '2016-01-04 07:59:42', '2016-01-04 07:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'krishna', 'krishna@complitech.net', '$2y$10$ysNxuTZZB2X4xAshkgwjC.Nao2oNS5mL8k3LC3S5l06y85xDEgo1.', 'xLFMgisxIOQYEIasba2TO9WBrGAJxp78fgDLXpEVSo36JGCBiwkDQo10FVcL', '2015-11-27 03:03:39', '2016-01-19 07:16:53'),
(16, 'Ronak', 'ronak@complitech.net', '$2y$10$lzkefnIYkmsw1.zkFsS7CePsLfmvZtK6b1xNHWpOldG10iViGNiJC', 'nNY3LvwGM5jXXQSXFLIb8XckXYrkUk0UOYSQWQQTNiupJI5WJZ8VsrLh5RZM', '2015-12-04 02:23:27', '2016-02-29 04:42:32'),
(17, 'nilesh', 'nilesh@complitech.net', '$2y$10$gAS5ytdOG4TUNPAp4HzWyO5K.8AMwgLED4cJEiNwZ3rcAZTRSQMGy', NULL, '2015-12-12 05:03:50', '2015-12-12 05:03:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
