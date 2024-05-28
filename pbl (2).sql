-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:21 AM
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
-- Database: `pbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_login_email_failed`
--

CREATE TABLE `log_login_email_failed` (
  `id` int(11) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `login_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_login_email_failed`
--

INSERT INTO `log_login_email_failed` (`id`, `email`, `login_at`) VALUES
(1, 'sukotyasp@polines.ac.id', '2023-01-30 14:55:16'),
(2, 'sukotyasp@polines.ac.id', '2023-02-07 09:39:40'),
(3, 'afiat.sadida@polines.ac.id', '2023-02-23 11:35:40'),
(4, 'afiat.sadida@polines.ac.id', '2023-02-23 11:36:09'),
(5, 'raditya.artha@polines.ac.id', '2023-02-23 11:36:30'),
(6, 'afiat.sadida@polines.ac.id', '2023-02-23 11:37:40'),
(7, 'raditya.artha@polines.ac.id', '2023-02-23 11:41:55'),
(8, 'afiat.sadida@polines.ac.id', '2023-02-23 11:45:34'),
(9, 'afiat.sadida@polines.ac.id', '2023-02-23 11:49:11'),
(10, 'afiat.sadida@polines.ac.id', '2023-02-23 11:50:11'),
(11, 'eriko@polines.ac.id', '2023-02-23 11:51:55'),
(12, 'eriko@polines.ac.id', '2023-02-23 11:52:12'),
(13, 'afiat.sadida@polines.ac.id', '2023-02-23 12:01:24'),
(14, 'adegunapramurti@polines.ac.id', '2023-02-23 12:28:15'),
(15, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:29:35'),
(16, 'adegunapramurti@polines.ac.id', '2023-02-23 12:29:59'),
(17, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:30:29'),
(18, 'adegunapramurti@polines.ac.id', '2023-02-23 12:30:42'),
(19, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:31:15'),
(20, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:33:21'),
(21, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:34:05'),
(22, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:34:21'),
(23, 'adegunapramurti@polines.ac.id', '2023-02-23 12:35:28'),
(24, 'adegunapramurti@polines.ac.id', '2023-02-23 12:35:39'),
(25, 'pangestuningtyas@polines.ac.id', '2023-02-23 12:36:44'),
(26, 'catur.waluyo@polines.ac.id', '2023-02-23 12:53:02'),
(27, 'hutama.arif@polines.ac.id', '2023-02-23 14:09:11'),
(28, 'hutama.arif@polines.ac.id', '2023-02-23 14:09:45'),
(29, 'siti.hasanah@polines.ac.id', '2023-02-23 14:57:47'),
(30, 'siti.hasanah@polines.ac.id', '2023-02-23 14:59:54'),
(31, 'siti.hasanah@polines.ac.id', '2023-02-23 15:00:14'),
(32, 'achmad.fahrulaji@polines.ac.id', '2023-02-23 15:15:39'),
(33, 'raditya.artha@polines.ac.id', '2023-02-23 15:15:55'),
(34, 'achmad.fahrulaji@polines.ac.id', '2023-02-23 15:16:25'),
(35, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:22:22'),
(36, 'hutama.arif@polines.ac.id', '2023-02-23 15:27:22'),
(37, 'achmad.fahrulaji@polines.ac.id', '2023-02-23 15:46:37'),
(38, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:48:28'),
(39, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:04'),
(40, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:10'),
(41, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:27'),
(42, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:34'),
(43, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:51'),
(44, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:49:57'),
(45, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:22'),
(46, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:25'),
(47, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:26'),
(48, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:32'),
(49, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:51'),
(50, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:50:56'),
(51, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:51:04'),
(52, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:21'),
(53, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:25'),
(54, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:26'),
(55, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:27'),
(56, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:35'),
(57, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:52:36'),
(58, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:54:11'),
(59, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:54:15'),
(60, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:54:27'),
(61, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:54:48'),
(62, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:55:52'),
(63, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:58:12'),
(64, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:58:18'),
(65, 'sri.kusumastuti@polines.ac.id', '2023-02-23 15:59:06'),
(66, 'sri.kusumastuti@polines.ac.id', '2023-02-23 16:03:38'),
(67, 'sri.kusumastuti@polines.ac.id', '2023-02-23 16:03:40'),
(68, 'sri.kusumastuti@polines.ac.id', '2023-02-23 16:07:44'),
(69, 'sri.kusumastuti@polines.ac.id', '2023-02-23 16:07:49'),
(70, 'roni.apriantoro@polines.ac.id', '2023-02-23 16:23:51'),
(71, 'roni.apriantoro28@polines.ac.id', '2023-02-23 16:31:39'),
(72, 'catur.waluyo@polines.ac.id', '2023-02-23 16:38:40'),
(73, 'catur.waluyo@polines.ac.id', '2023-02-23 16:40:35'),
(74, 'catur.waluyo@polines.ac.id', '2023-02-23 16:40:48'),
(75, 'achmad.fahrulaji@polines.ac.id', '2023-02-23 19:45:21'),
(76, 'muttabik.fathul@polines.ac.id', '2023-02-23 19:54:21'),
(77, 'muttabik.fathul@polines.ac.id', '2023-02-23 19:55:39'),
(78, 'muttabik.fathul@polines.ac.id', '2023-02-23 19:59:04'),
(79, 'destine.fajar.wiedayanti@polines.ac.id', '2023-02-23 23:39:46'),
(80, 'destine.fajar.wiedayanti@polines.ac.id', '2023-02-23 23:40:03'),
(81, 'destine.fajar.wiedayanti@polines.ac.id', '2023-02-23 23:43:52'),
(82, 'destine.fajar.wiedayanti@polines.ac.id', '2023-02-23 23:43:59'),
(83, 'suwarto@polines.ac.id', '2023-02-24 00:57:51'),
(84, 'suwarto@polines.ac.id', '2023-02-24 01:01:07'),
(85, 'suwarto@polines.ac.id', '2023-02-24 01:04:35'),
(86, 'suwarto@polines.ac.id', '2023-02-24 01:05:12'),
(87, 'suwarto@polines.ac.id', '2023-02-24 01:08:10'),
(88, 'suwarto@polines.ac.id', '2023-02-24 01:08:36'),
(89, 'suwarto@polines.ac.id', '2023-02-24 01:13:41'),
(90, 'suwarto@polines.ac.id', '2023-02-24 01:14:01'),
(91, 'suwarto@polines.ac.id', '2023-02-24 01:17:12'),
(92, 'suwarto@polines.ac.id', '2023-02-24 01:18:29'),
(93, 'suwarto@polines.ac.id', '2023-02-24 01:18:56'),
(94, 'suwarto@polines.ac.id', '2023-02-24 09:04:38'),
(95, 'suwarto@polines.ac.id', '2023-02-24 09:05:00'),
(96, 'suwarto@polines.ac.id', '2023-02-24 09:05:05'),
(97, 'suwarto@polines.ac.id', '2023-02-24 09:05:11'),
(98, 'suwarto@polines.ac.id', '2023-02-24 09:07:27'),
(99, 'suwarto@polines.ac.id', '2023-02-24 09:08:23'),
(100, 'suwarto@polines.ac.id', '2023-02-24 09:08:26'),
(101, 'suwarto@polines.ac.id', '2023-02-24 09:08:36'),
(102, 'suwarto@polines.ac.id', '2023-02-24 09:08:42'),
(103, 'suwarto@polines.ac.id', '2023-02-24 09:09:58'),
(104, 'suwarto@polines.ac.id', '2023-02-24 09:10:03'),
(105, 'anung.suwarno@polines.ac.id', '2023-02-24 09:12:31'),
(106, 'anung.suwarno@polines.ac.id', '2023-02-24 09:12:37'),
(107, 'anung.suwarno@polines.ac.id', '2023-02-24 09:12:59'),
(108, 'suwarto@polines.ac.id', '2023-02-24 09:15:01'),
(109, 'anung.suwarno@polines.ac.id', '2023-02-24 09:15:47'),
(110, 'suwarto@polines.ac.id', '2023-02-24 09:25:01'),
(111, 'suwarto@polines.ac.id', '2023-02-24 09:25:03'),
(112, 'suwarto@polines.ac.id', '2023-02-24 09:25:06'),
(113, 'suwarto@polines.ac.id', '2023-02-24 09:25:09'),
(114, 'suwarto@polines.ac.id', '2023-02-24 09:25:13'),
(115, 'suwarto@polines.ac.id', '2023-02-24 09:25:33'),
(116, 'suwarto@polines.ac.id', '2023-02-24 09:25:36'),
(117, 'suwarto@polines.ac.id', '2023-02-24 09:25:59'),
(118, 'suwarto@polines.ac.id', '2023-02-24 09:26:04'),
(119, 'suwarto@polines.ac.id', '2023-02-24 09:26:08'),
(120, 'suwarto@polines.ac.id', '2023-02-24 09:26:58'),
(121, 'anung.suwarno@polines.ac.id', '2023-02-24 09:27:47'),
(122, 'anung.suwarno@polines.ac.id', '2023-02-24 09:27:49'),
(123, 'anung.suwarno@polines.ac.id', '2023-02-24 09:27:56'),
(124, 'anung.suwarno@polines.ac.id', '2023-02-24 09:28:20'),
(125, 'anung.suwarno@polines.ac.id', '2023-02-24 09:28:24'),
(126, 'anung.suwarno@polines.ac.id', '2023-02-24 09:28:26'),
(127, 'anung.suwarno@polines.ac.id', '2023-02-24 09:28:49'),
(128, 'anung.suwarno@polines.ac.id', '2023-02-24 09:28:51'),
(129, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:13'),
(130, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:22'),
(131, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:25'),
(132, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:43'),
(133, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:46'),
(134, 'anung.suwarno@polines.ac.id', '2023-02-24 09:29:49'),
(135, 'suwarto@polines.ac.id', '2023-02-24 09:30:57'),
(136, 'anung.suwarno@polines.ac.id', '2023-02-24 09:34:07'),
(137, 'anung.suwarno@polines.ac.id', '2023-02-24 09:34:10'),
(138, 'anung.suwarno@polines.ac.id', '2023-02-24 09:34:13'),
(139, 'anung.suwarno@polines.ac.id', '2023-02-24 09:34:25'),
(140, 'anung.suwarno@polines.ac.id', '2023-02-24 09:34:28'),
(141, 'suwarto@polines.ac.id', '2023-02-24 09:34:57'),
(142, 'suwarto@polines.ac.id', '2023-02-24 09:35:00'),
(143, 'suwarto@polines.ac.id', '2023-02-24 09:35:02'),
(144, 'suwarto@polines.ac.id', '2023-02-24 09:35:04'),
(145, 'achmad.fahrulaji@polines.ac.id', '2023-02-24 09:35:20'),
(146, 'suwarto@polines.ac.id', '2023-02-24 09:39:42'),
(147, 'suwarto@polines.ac.id', '2023-02-24 09:40:29'),
(148, 'amin@polines.ac.id', '2023-02-24 10:00:52'),
(149, 'endro.wasito@polines.ac.id', '2023-02-24 10:27:47'),
(150, 'endro.wasito@polines.ac.id', '2023-02-24 10:28:28'),
(151, 'endro.wasito@polines.ac.id', '2023-02-24 10:31:04'),
(152, 'endro.wasito@polines.ac.id', '2023-02-24 10:31:51'),
(153, 'endro.wasito@polines.ac.id', '2023-02-24 10:32:22'),
(154, 'endro.wasito@polines.ac.id', '2023-02-24 10:32:36'),
(155, 'endro.wasito@polines.ac.id', '2023-02-24 10:33:40'),
(156, 'endro.wasito@polines.ac.id', '2023-02-24 10:34:44'),
(157, 'endro.wasito@polines.ac.id', '2023-02-24 10:37:06'),
(158, 'endro.wasito@polines.ac.id', '2023-02-24 10:37:17'),
(159, 'endro.wasito@polines.ac.id', '2023-02-24 10:37:24'),
(160, 'endro.wasito@polines.ac.id', '2023-02-24 10:39:40'),
(161, 'endro.wasito@polines.ac.id', '2023-02-24 10:39:50'),
(162, 'endro.wasito@polines.ac.id', '2023-02-24 10:39:54'),
(163, 'endro.wasito@polines.ac.id', '2023-02-24 10:41:00'),
(164, 'endro.wasito@polines.ac.id', '2023-02-24 10:41:09'),
(165, 'endro.wasito@polines.ac.id', '2023-02-24 10:41:16'),
(166, 'endro.wasito@polines.ac.id', '2023-02-24 10:44:43'),
(167, 'endro.wasito@polines.ac.id', '2023-02-24 10:45:42'),
(168, 'endro.wasito@polines.ac.id', '2023-02-24 10:57:35'),
(169, 'suwarto@polines.ac.id', '2023-02-24 10:59:45'),
(170, 'suwarto@polines.ac.id', '2023-02-24 10:59:53'),
(171, 'suwarto@polines.ac.id', '2023-02-24 11:00:28'),
(172, 'suwarto@polines.ac.id', '2023-02-24 11:02:25'),
(173, 'suwarto@polines.ac.id', '2023-02-24 11:02:28'),
(174, 'suwarto@polines.ac.id', '2023-02-24 11:02:30'),
(175, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:15'),
(176, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:18'),
(177, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:20'),
(178, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:53'),
(179, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:55'),
(180, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:04:58'),
(181, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:12:00'),
(182, 'sri.wahyuningsih.sulaiman@polines.ac.id', '2023-02-24 11:12:04'),
(183, 'suwarto@polines.ac.id', '2023-02-24 11:12:27'),
(184, 'suwarto@polines.ac.id', '2023-02-24 11:12:30'),
(185, 'suwarto@polines.ac.id', '2023-02-24 11:14:31'),
(186, 'suwarto@polines.ac.id', '2023-02-24 11:43:22'),
(187, 'suwarto@polines.ac.id', '2023-02-24 11:43:28'),
(188, 'suwarto@polines.ac.id', '2023-02-24 11:43:52'),
(189, 'suwarto@polines.ac.id', '2023-02-24 11:44:08'),
(190, 'suwarto@polines.ac.id', '2023-02-24 11:44:10'),
(191, 'septiantartebe@polines.ac.id', '2023-02-24 11:56:19'),
(192, 'septiantartebe@polines.ac.id', '2023-02-24 11:56:51'),
(193, 'suwarto@polines.ac.id', '2023-02-24 12:35:44'),
(194, 'suwarto@polines.ac.id', '2023-02-24 12:35:52'),
(195, 'suwarto@polines.ac.id', '2023-02-24 12:35:54'),
(196, 'sugeng.iriyanto@polines.ac.id', '2023-02-24 12:54:28'),
(197, 'hutama.arif@polines.ac.id', '2023-02-24 13:14:13'),
(198, 'suwarto@polines.ac.id', '2023-02-24 14:42:54'),
(199, 'erielilavindi@polines.ac.id', '2023-02-24 14:59:32'),
(200, 'erielilavindi@polines.ac.id', '2023-02-24 14:59:49'),
(201, 'ditamatematika@polines.ac.id', '2023-02-24 16:05:43'),
(202, 'ditamatematika@polines.ac.id', '2023-02-24 16:07:57'),
(203, 'suwarto@polines.ac.id', '2023-02-24 16:41:25'),
(204, 'roni.apriantoro@polines.ac.id', '2023-02-24 17:29:25'),
(205, 'suwarto@polines.ac.id', '2023-02-24 19:43:02'),
(206, 'hutama.arif@polines.ac.id', '2023-02-24 19:46:47'),
(207, 'tedjo.mulyono@polines.ac.id', '2023-02-25 00:05:50'),
(208, 'tedjo.mulyono@polines.ac.id', '2023-02-25 00:06:59'),
(209, 'nur.maziyah@polines.ac.id', '2023-02-25 11:35:00'),
(210, 'andriyan.eka.sapta@polines.ac.id', '2023-02-25 12:20:39'),
(211, 'andriyan.eka.sapta@polines.ac.id', '2023-02-25 12:20:55'),
(212, 'andriyan.eka.sapta@polines.ac.id', '2023-02-25 12:21:31'),
(213, 'suwarto@polines.ac.id', '2023-02-25 15:31:56'),
(214, 'suwarto@polines.ac.id', '2023-02-25 15:32:47'),
(215, 'suwarto@polines.ac.id', '2023-02-25 15:33:35'),
(216, 'prihatiningsih@polines.ac.id', '2023-02-25 18:26:28'),
(217, 'yusuf.hendrawanto@polines.ac.id', '2023-02-25 22:16:34'),
(218, 'mella.katrinasari@polines.ac.id', '2023-02-26 13:51:17'),
(219, 'mona.inayah.pratiwi@polines.ac.id', '2023-02-26 15:05:13'),
(220, 'mona.inayah.pratiwi@polines.ac.id', '2023-02-26 15:05:57'),
(221, 'suwarto@polines.ac.id', '2023-02-26 21:09:17'),
(222, 'suwarto@polines.ac.id', '2023-02-26 21:10:21'),
(223, 'suwarto@polines.ac.id', '2023-02-26 21:11:09'),
(224, 'suwarto@polines.ac.id', '2023-02-26 21:12:39'),
(225, 'suwarto@polines.ac.id', '2023-02-26 21:13:15'),
(226, 'suwarto@polines.ac.id', '2023-02-26 21:13:39'),
(227, 'suwarto@polines.ac.id', '2023-02-26 21:14:35'),
(228, 'suwarto@polines.ac.id', '2023-02-26 21:21:10'),
(229, 'suwarto@polines.ac.id', '2023-02-26 21:22:57'),
(230, 'suwarto@polines.ac.id', '2023-02-26 21:23:20'),
(231, 'suwarto@polines.ac.id', '2023-02-26 21:24:04'),
(232, 'suwarto@polines.ac.id', '2023-02-26 21:39:24'),
(233, 'suwarto@polines.ac.id', '2023-02-26 21:39:49'),
(234, 'suwarto@polines.ac.id', '2023-02-26 21:40:23'),
(235, 'suwarto@polines.ac.id', '2023-02-26 21:42:35'),
(236, 'suwarto@polines.ac.id', '2023-02-26 21:43:07'),
(237, 'ana.putri.nastiti@polines.ac.id', '2023-02-27 03:37:34'),
(238, 'primasiwi.harprastanti@polines.ac.id', '2023-02-27 08:09:49'),
(239, 'aminuddin.rizal@polines.ac.id', '2023-02-27 08:56:50'),
(240, 'aminuddin.rizal@polines.ac.id', '2023-02-27 08:57:04'),
(241, 'aminuddin.rizal@polines.ac.id', '2023-02-27 08:59:38'),
(242, 'aminuddin.rizal@polines.ac.id', '2023-02-27 09:22:30'),
(243, 'aminuddin.rizal@polines.ac.id', '2023-02-27 09:23:57'),
(244, 'eko.widiarto@polines.ac.id', '2023-02-27 10:54:59'),
(245, 'eko.widiarto@polines.ac.id', '2023-02-27 10:55:07'),
(246, 'eko.widiarto@polines.ac.id', '2023-02-27 10:55:31'),
(247, 'eko.widiarto@polines.ac.id', '2023-02-27 10:57:02'),
(248, 'eko.widiarto@polines.ac.id', '2023-02-27 10:59:23'),
(249, 'eko.widiarto@polines.ac.id', '2023-02-27 10:59:56'),
(250, 'eko.widiarto@polines.ac.id', '2023-02-27 11:00:00'),
(251, 'eko.widiarto@polines.ac.id', '2023-02-27 11:00:08'),
(252, 'eko.widiarto@polines.ac.id', '2023-02-27 11:01:39'),
(253, 'eko.widiarto@polines.ac.id', '2023-02-27 11:01:44'),
(254, 'eko.widiarto@polines.ac.id', '2023-02-27 11:01:59'),
(255, 'eko.widiarto@polines.ac.id', '2023-02-27 11:03:41'),
(256, 'eko.widiarto@polines.ac.id', '2023-02-27 11:03:44'),
(257, 'eko.widiarto@polines.ac.id', '2023-02-27 11:03:51'),
(258, 'eko.widiarto@polines.ac.id', '2023-02-27 11:06:24'),
(259, 'eko.widiarto@polines.ac.id', '2023-02-27 11:06:41'),
(260, 'eko.widiarto@polines.ac.id', '2023-02-27 11:06:51'),
(261, 'eko.widiarto@polines.ac.id', '2023-02-27 11:06:59'),
(262, 'eko.widiarto@polines.ac.id', '2023-02-27 11:07:15'),
(263, 'eko.widiarto@polines.ac.id', '2023-02-27 11:07:20'),
(264, 'eko.widiarto@polines.ac.id', '2023-02-27 11:07:22'),
(265, 'eko.widiarto@polines.ac.id', '2023-02-27 11:07:41'),
(266, 'eko.widiarto@polines.ac.id', '2023-02-27 11:12:16'),
(267, 'eko.widiarto@polines.ac.id', '2023-02-27 11:18:25'),
(268, 'khairul.saleh@polines.ac.id', '2023-02-27 11:26:00'),
(269, 'eko.widiarto@polines.ac.id', '2023-02-27 12:37:42'),
(270, 'eko.widiarto@polines.ac.id', '2023-02-27 12:37:59'),
(271, 'eko.widiarto@polines.ac.id', '2023-02-27 12:38:05'),
(272, 'eko.widiarto@polines.ac.id', '2023-02-27 12:38:37'),
(273, 'eko.widiarto@polines.ac.id', '2023-02-27 12:39:08'),
(274, 'eko.widiarto@polines.ac.id', '2023-02-27 12:39:15'),
(275, 'eko.widiarto@polines.ac.id', '2023-02-27 12:39:25'),
(276, 'eko.widiarto@polines.ac.id', '2023-02-27 12:45:14'),
(277, 'atikahayujanitra@polines.ac.id', '2023-02-27 13:14:37'),
(278, 'atikahayujanitra@polines.ac.id', '2023-02-27 13:14:51'),
(279, 'atikahayujanitra@polines.ac.id', '2023-02-27 13:14:54'),
(280, 'atikahayujanitra@polines.ac.id', '2023-02-27 13:14:56'),
(281, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:13:27'),
(282, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:14:22'),
(283, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:15:17'),
(284, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:15:45'),
(285, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:18:38'),
(286, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:20:01'),
(287, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:24:44'),
(288, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:25:03'),
(289, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:27:15'),
(290, 'rio.devilito@polines.ac.id', '2023-02-27 14:27:32'),
(291, 'baktiyar.mhermawan@polines.ac.id', '2023-02-27 14:27:51'),
(292, 'rio.devilito@polines.ac.id', '2023-02-27 14:29:01'),
(293, 'teguh.budi.santosa@polines.ac.id', '2023-02-27 18:10:57'),
(294, 'teguh.budi.santosa@polines.ac.id', '2023-02-27 18:11:26'),
(295, 'teguh.budi.santosa@polines.ac.id', '2023-02-27 18:11:36'),
(296, 'bagas.putra.pradana@polines.ac.id', '2023-02-27 21:08:15'),
(297, 'atikahayujanitra@polines.ac.id', '2023-02-27 23:41:07'),
(298, 'atikahayujanitra@polines.ac.id', '2023-02-27 23:41:13'),
(299, 'atikahayujanitra@polines.ac.id', '2023-02-27 23:41:21'),
(300, 'sugiarti@polines.ac.id', '2023-02-28 03:50:36'),
(301, 'sugiarti@polines.ac.id', '2023-02-28 03:51:20'),
(302, 'sugiarti@polines.ac.id', '2023-02-28 03:51:24'),
(303, 'sugiarti@polines.ac.id', '2023-02-28 03:53:50'),
(304, 'sugiarti@polines.ac.id', '2023-02-28 03:53:57'),
(305, 'sugiarti@polines.ac.id', '2023-02-28 03:54:09'),
(306, 'sugiarti@polines.ac.id', '2023-02-28 03:54:38'),
(307, 'sugiarti@polines.ac.id', '2023-02-28 03:55:00'),
(308, 'sugiarti@polines.ac.id', '2023-02-28 03:55:03'),
(309, 'friskaayufs@polines.ac.id', '2023-02-28 05:45:00'),
(310, 'friskaayufs@polines.ac.id', '2023-02-28 05:45:23'),
(311, 'friskaayufs@polines.ac.id', '2023-02-28 05:48:10'),
(312, 'friskaayufs@polines.ac.id', '2023-02-28 05:54:30'),
(313, 'ahmad.wafa@polines.ac.id', '2023-02-28 06:59:14'),
(314, 'ahmad.wafa@polines.ac.id', '2023-02-28 07:00:37'),
(315, 'ahmad.wafa@polines.ac.id', '2023-02-28 07:06:22'),
(316, 'ahmad.wafa@polines.ac.id', '2023-02-28 08:19:46'),
(317, 'hartono.ak@polines.ac.id', '2023-02-28 08:45:43'),
(318, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:52:22'),
(319, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:53:54'),
(320, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:53:57'),
(321, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:53:59'),
(322, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:54:03'),
(323, 'irfan.mujahidin@polines.ac.id', '2023-02-28 08:55:00'),
(324, 'irfan.mujahidin@polines.ac.id', '2023-02-28 09:00:26'),
(325, 'irfan.mujahidin@polines.ac.id', '2023-02-28 09:00:30'),
(326, 'irfan.mujahidin@polines.ac.id', '2023-02-28 09:00:50'),
(327, 'irfan.mujahidin@polines.ac.id', '2023-02-28 09:00:58'),
(328, 'irfan.mujahidin@polines.ac.id', '2023-02-28 09:01:04'),
(329, 'm.cahyoardi.p@polines.ac.id', '2023-02-28 09:40:33'),
(330, 'm.cahyoardi.p@polines.ac.id', '2023-02-28 09:40:41'),
(331, 'm.cahyoardi.p@polines.ac.id', '2023-02-28 09:40:43'),
(332, 'm.cahyoardi.p@polines.ac.id', '2023-02-28 09:40:44'),
(333, 'm.cahyoardi.p@polines.ac.id', '2023-02-28 09:41:05'),
(334, 'eko.widiarto@polines.ac.id', '2023-02-28 09:46:22'),
(335, 'eko.widiarto@polines.ac.id', '2023-02-28 09:46:39'),
(336, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:24:50'),
(337, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:25:13'),
(338, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:26:20'),
(339, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:26:35'),
(340, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:26:40'),
(341, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:26:45'),
(342, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:26:55'),
(343, 'sindung.hadwi.ws@polines.ac.id', '2023-02-28 11:27:03'),
(344, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 11:46:30'),
(345, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 11:46:54'),
(346, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 11:46:58'),
(347, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 11:48:51'),
(348, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 12:43:54'),
(349, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 12:44:19'),
(350, 'sugeng.iriyanto@polines.ac.id', '2023-02-28 12:56:55'),
(351, 'sugeng.iriyanto@polines.ac.id', '2023-02-28 12:57:04'),
(352, 'lalu.yahya@polines.ac.id', '2023-02-28 14:41:05'),
(353, 'lalu.yahya@polines.ac.id', '2023-02-28 14:42:52'),
(354, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 15:32:13'),
(355, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 16:32:26'),
(356, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 16:33:24'),
(357, 'didiek.susilo.tamtomo@polines.ac.id', '2023-02-28 17:08:42'),
(358, 'iswanti@polines.ac.id', '2023-02-28 17:56:30'),
(359, 'iswanti@polines.ac.id', '2023-02-28 17:56:54'),
(360, 'iswanti@polines.ac.id', '2023-02-28 17:57:14'),
(361, 'iswanti@polines.ac.id', '2023-02-28 17:58:08'),
(362, 'eko.widiarto@polines.ac.id', '2023-03-01 09:20:50'),
(363, 'arum@polines.ac.id', '2023-03-01 10:31:33'),
(364, 'arum@polines.ac.id', '2023-03-01 10:35:29'),
(365, 'arum@polines.ac.id', '2023-03-01 11:04:38'),
(366, 'arum@polines.ac.id', '2023-03-01 11:34:02'),
(367, 'suharto@polines.ac.id', '2023-03-07 08:10:47'),
(368, 'suharto@polines.ac.id', '2023-03-07 08:11:05'),
(369, 'suharto@polines.ac.id', '2023-03-07 08:12:09'),
(370, 'suharto@polines.ac.id', '2023-03-07 08:13:37'),
(371, 'p3m@polines.ac.id', '2023-03-17 14:31:17'),
(372, 'p3m@polines.ac.id', '2023-03-17 14:43:35'),
(373, 'sahid@polines.ac.id', '2023-03-17 17:29:14'),
(374, 'sahid@polines.ac.id', '2023-03-17 17:29:46'),
(375, 'sahid@polines.ac.id', '2023-03-17 17:30:39'),
(376, 'sahid@polines.ac.id', '2023-03-17 17:31:31'),
(377, 'sahid@polines.ac.id', '2023-03-17 17:31:46'),
(378, 'sahid@polines.ac.id', '2023-03-17 17:32:39'),
(379, 'jumi@polines.ac.id', '2023-04-12 13:14:39'),
(380, 'jumi@polines.ac.id', '2023-04-12 13:20:43'),
(381, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:31:28'),
(382, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:31:41'),
(383, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:31:56'),
(384, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:32:09'),
(385, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:32:26'),
(386, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:32:57'),
(387, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:33:33'),
(388, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:34:47'),
(389, 'mella.katrinasari@polines.ac.id', '2023-04-13 05:38:58'),
(390, 'mella.katrinasari@polines.ac.id', '2023-04-13 10:45:51'),
(391, 'budib.subagio@polines.ac.id', '2023-04-29 18:27:24'),
(392, 'budib.subagio@polines.ac.id', '2023-04-29 18:27:27'),
(393, 'budib.subagio@polines.ac.id', '2023-04-29 18:27:31'),
(394, 'budib.subagio@polines.ac.id', '2023-04-29 18:27:37'),
(395, 'budib.subagio@polines.ac.id', '2023-04-29 18:29:00'),
(396, 'budib.subagio@polines.ac.id', '2023-04-29 18:29:04'),
(397, 'budib.subagio@polines.ac.id', '2023-04-29 18:29:06'),
(398, 'budib.subagio@polines.ac.id', '2023-04-29 18:29:07'),
(399, 'budib.subagio@polines.ac.id', '2023-04-29 18:30:42'),
(400, 'budib.subagio@polines.ac.id', '2023-04-29 18:46:22'),
(401, 'budib.subagio@polines.ac.id', '2023-04-29 18:46:26'),
(402, 'budib.subagio@polines.ac.id', '2023-04-29 18:48:29'),
(403, 'budib.subagio@polines.ac.id', '2023-04-29 18:56:56'),
(404, 'budib.subagio@polines.ac.id', '2023-04-29 18:57:01'),
(405, 'budib.subagio@polines.ac.id', '2023-04-29 18:57:06'),
(406, 'budib.subagio@polines.ac.id', '2023-04-29 18:57:09'),
(407, 'budib.subagio@polines.ac.id', '2023-04-29 18:59:40'),
(408, 'budib.subagio@polines.ac.id', '2023-04-29 18:59:44'),
(409, 'budib.subagio@polines.ac.id', '2023-04-29 18:59:47'),
(410, 'budib.subagio@polines.ac.id', '2023-04-29 19:02:16'),
(411, 'budib.subagio@polines.ac.id', '2023-04-29 19:07:46'),
(412, 'budib.subagio@polines.ac.id', '2023-04-29 19:08:10'),
(413, 'budib.subagio@polines.ac.id', '2023-04-29 19:08:17'),
(414, 'budib.subagio@polines.ac.id', '2023-04-29 19:12:40'),
(415, 'budib.subagio@polines.ac.id', '2023-04-29 19:13:39'),
(416, 'budib.subagio@polines.ac.id', '2023-04-29 19:14:16'),
(417, 'budib.subagio@polines.ac.id', '2023-04-29 19:15:02'),
(418, 'budib.subagio@polines.ac.id', '2023-04-29 19:26:28'),
(419, 'sugiarti@polines.ac.id', '2023-05-02 13:53:20'),
(420, 'sugiarti@polines.ac.id', '2023-05-02 13:53:32'),
(421, 'sugiarti@polines.ac.id', '2023-05-02 13:53:41'),
(422, 'sugiarti@polines.ac.id', '2023-05-02 13:53:46'),
(423, 'sugiarti@polines.ac.id', '2023-05-02 13:53:50'),
(424, 'sugiarti@polines.ac.id', '2023-05-02 13:54:00'),
(425, 'sugiarti@polines.ac.id', '2023-05-02 13:54:09'),
(426, 'sugiarti@polines.ac.id', '2023-05-02 13:54:17'),
(427, 'sugiarti@polines.ac.id', '2023-05-02 13:54:23'),
(428, 'sugiarti@polines.ac.id', '2023-05-02 13:55:44'),
(429, 'sugiarti@polines.ac.id', '2023-05-02 13:56:19'),
(430, 'sugiarti@polines.ac.id', '2023-05-10 15:13:56'),
(431, 'sugiarti@polines.ac.id', '2023-05-10 15:15:14'),
(432, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:04:32'),
(433, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:05:52'),
(434, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:06:45'),
(435, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:08:37'),
(436, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:08:41'),
(437, 'primasiwi.harprastanti@polines.ac.id', '2023-05-30 09:12:12'),
(438, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:00:11'),
(439, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:00:36'),
(440, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:00:48'),
(441, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:00:54'),
(442, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:01:02'),
(443, 'mella.katrinasari@polines.ac.id', '2023-05-30 13:25:10'),
(444, 'sarana@polines.ac.id', '2023-05-30 15:56:20'),
(445, 'sarana@polines.ac.id', '2023-05-30 15:56:34'),
(446, 'sarana@polines.ac.id', '2023-05-30 15:57:48'),
(447, 'sarana@polines.ac.id', '2023-05-30 15:58:16'),
(448, 'sarana@polines.ac.id', '2023-05-30 15:58:51'),
(449, 'sarana@polines.ac.id', '2023-05-30 15:59:52'),
(450, 'sarana@polines.ac.id', '2023-05-30 16:03:17'),
(451, 'sarana@polines.ac.id', '2023-05-30 16:06:14'),
(452, 'sarana@polines.ac.id', '2023-05-30 16:12:07'),
(453, 'sarana@polines.ac.id', '2023-05-30 16:12:23'),
(454, 'wadir3@polines.ac.id', '2023-06-05 17:31:39'),
(455, 'wadir3@polines.ac.id', '2023-06-05 17:31:48'),
(456, 'wadir3@polines.ac.id', '2023-06-05 17:31:51'),
(457, 'wadir3@polines.ac.id', '2023-06-05 17:31:53'),
(458, 'wadir3@polines.ac.id', '2023-06-05 17:31:55'),
(459, 'wadir3@polines.ac.id', '2023-06-05 17:32:00'),
(460, 'wadir3@polines.ac.id', '2023-06-05 17:32:01'),
(461, 'upps@polines.ac.id', '2023-07-04 13:38:16'),
(462, 'wan2@polines.ac.id', '2023-08-14 13:27:26'),
(463, 'nugroho.ju@polines.ac.id', '2023-10-05 11:52:18'),
(464, 'atman.risnendi@polines.ac.id', '2023-10-05 13:05:24'),
(465, 'atman.risnendi@polines.ac.id', '2023-10-05 13:05:41'),
(466, 'atman.risnendi@polines.ac.id', '2023-10-05 13:05:44'),
(467, 'atman.risnendi@polines.ac.id', '2023-10-05 13:05:48'),
(468, 'atman.risnendi@polines.ac.id', '2023-10-05 13:05:55'),
(469, 'atman.risnendi@polines.ac.id', '2023-10-26 18:27:53'),
(470, 'atman.risnendi@polines.ac.id', '2023-10-26 18:27:59'),
(471, 'atman.risnendi@polines.ac.id', '2023-10-26 18:28:00'),
(472, 'atman.risnendi@polines.ac.id', '2023-10-26 18:28:01'),
(473, 'atman.risnendi@polines.ac.id', '2023-10-26 18:28:06'),
(474, 'atman.risnendi@polines.ac.id', '2023-10-26 18:28:08'),
(475, 'atman.risnendi@polines.ac.id', '2023-10-26 18:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `log_suspicious_action`
--

CREATE TABLE `log_suspicious_action` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity` varchar(128) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `id_html` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `urutan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `url`, `icon`, `id_html`, `parent_id`, `urutan`) VALUES
(1, 'Administrator', '#', '', NULL, '0', '1'),
(2, 'Beranda', 'home', 'fas fa-home', NULL, '1', '1'),
(3, 'User Management', '#', 'fas fa-users-cog', NULL, '1', '2'),
(4, 'Users', 'manage-user', NULL, NULL, '3', '1'),
(5, 'Roles', 'manage-role', NULL, NULL, '3', '2'),
(6, 'Menus', 'manage-menu', NULL, NULL, '3', '3'),
(8, 'Backup Database', 'dbbackup', 'fas fa-database', NULL, '7', '1'),
(9, 'PENELITIAN', '#', 'fas fas-book', NULL, '0', '1'),
(10, 'Usulan Penelitian', 'usulan-penelitian', 'fas fa-sticky-note', NULL, '9', '1'),
(12, 'Menu Admin', '#', '-', NULL, '0', '1'),
(14, 'Menu Pengusul', '#', 'fas fas-user', NULL, '0', '1'),
(15, 'Referensi Skema', 'ref-skema', 'fa fa-book-open', NULL, '9', '1'),
(16, 'Daftar Usulan', 'usulan', 'fa fa-file-invoice', NULL, '14', '1'),
(17, 'Menu Reviewer', '#', NULL, NULL, '0', '1'),
(18, 'Review Usulan', 'review-usulan', 'fa fa-user-check', NULL, '17', '1'),
(19, 'Plotting Reviewer', 'plotting-reviewer', 'fas fa-user-tie', NULL, '12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_01_234158_create_menus_table', 1),
(6, '2024_02_02_053619_create_permission_tables', 1),
(7, '2024_02_03_232722_create_role_has_menus_tables', 1),
(8, '2024_02_03_235312_add_menu_id_on_permission', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `menu_id`) VALUES
(1, 'create_user', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 4),
(2, 'read_user', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 4),
(3, 'update_user', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 4),
(4, 'delete_user', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 4),
(5, 'create_role', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 5),
(6, 'read_role', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 5),
(7, 'update_role', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 5),
(8, 'delete_role', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 5),
(9, 'create_menu', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 6),
(10, 'read_menu', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 6),
(11, 'update_menu', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 6),
(12, 'delete_menu', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 6),
(13, 'backup_database', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46', 8),
(15, 'read_mahasiswa', 'web', '2024-02-17 21:55:47', '2024-02-17 21:55:47', 11),
(16, 'read_dosen', 'web', '2024-02-17 21:56:17', '2024-02-17 21:56:17', 10),
(18, 'update_dosen', 'web', '2024-02-17 21:56:41', '2024-02-17 21:56:41', 10),
(19, 'update_mahasiswa', 'web', '2024-02-17 22:00:40', '2024-02-17 22:00:40', 11);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_dosen`
--

CREATE TABLE `ref_dosen` (
  `dosen_id` varchar(24) NOT NULL COMMENT 'NIP',
  `dosen_nama` varchar(128) DEFAULT NULL,
  `dosen_gelar_depan` varchar(16) DEFAULT NULL,
  `dosen_gelar_belakang` varchar(64) DEFAULT NULL,
  `dosen_nama_lengkap` varchar(256) DEFAULT NULL COMMENT 'Gabungan Gelar Depan, Nama, Gelar Belakang',
  `dosen_nidn` varchar(32) DEFAULT NULL,
  `dosen_nik` varchar(32) DEFAULT NULL,
  `dosen_sinta_id` varchar(16) DEFAULT NULL,
  `dosen_email_polines` varchar(64) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `jabfung_id` int(11) DEFAULT NULL,
  `pendidikan_id` int(11) NOT NULL DEFAULT 10,
  `api_json_data` longtext DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_dosen`
--

INSERT INTO `ref_dosen` (`dosen_id`, `dosen_nama`, `dosen_gelar_depan`, `dosen_gelar_belakang`, `dosen_nama_lengkap`, `dosen_nidn`, `dosen_nik`, `dosen_sinta_id`, `dosen_email_polines`, `prodi_id`, `jabfung_id`, `pendidikan_id`, `api_json_data`, `is_active`) VALUES
('198810142019031007', 'Amran Yobioktabera', NULL, 'M.Kom.', 'Amran Yobioktabera, M.Kom.', '0014108804', NULL, '0014108804', 'amranyobi@polines.ac.id', 11, 2, 10, NULL, 1),
('199109172022031007', 'Suko Tyas Pernanda', NULL, 'S.ST., M.Cs.', 'Suko Tyas Pernanda, S.ST., M.Cs.', '0017099108', NULL, '6805337', 'sukotyasp@polines.ac.id', 11, 2, 10, NULL, 1),
('33422115', 'Muhammad Rizky Faizullah Sudibyo', 'Prof.', 'PhD.', 'Prof. Muhammad Rizky Faizullah Sudibyo PhD.', NULL, NULL, NULL, 'rizky33422115@mhs.polines.ac.id', 11, 5, 14, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_iku`
--

CREATE TABLE `ref_iku` (
  `iku_id` int(11) NOT NULL,
  `iku_nama` varchar(512) DEFAULT NULL,
  `iku_target` varchar(128) DEFAULT NULL,
  `iku_satuan` varchar(48) DEFAULT NULL,
  `iku_tahun` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `jenis_skema_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_iku`
--

INSERT INTO `ref_iku` (`iku_id`, `iku_nama`, `iku_target`, `iku_satuan`, `iku_tahun`, `is_active`, `jenis_skema_id`) VALUES
(1, 'Rasio Pendapatan BLU terhadap Biaya Operasional', '54', '%', 2022, 0, NULL),
(2, 'Realisasi Pendapatan BLU Tahun 2022', '41000000000', 'Rp', 2022, 0, NULL),
(3, 'Realisasi Pendapatan BLU dari Optimalisasi Aset', '1350000000', 'Rp', 2022, 0, NULL),
(4, 'Persentase Penyelesaian Modernisasi Pengelolaan BLU', '106', NULL, 2022, 0, NULL),
(5, 'Persentase Lulusan S1 dan D4/D3/D2 yang berhasil mendapatkan pekerjaan, melanjutkan studi atau menjadi wiraswasta', '80', '%', 2022, 0, NULL),
(6, 'Persentase Lulusan S1 dan D4/D3/D2 yang menghabiskan paling sedikit 20 (dua puluh) SKS di luar kampus, atau meraih prestasi paling rendah tingkat nasional', '15', '%', 2022, 0, NULL),
(7, 'Persentase dosen yang berkegiatan tridharma di kampus \nlain, di <i>QS100</i> berdasarkan bidang ilmu (<i>QS100 by\n subject</i>), bekerja sebagai praktisi di dunia industri atau\n membina mahasiswa yang berhasil meraih prestasi \npaling rendah tingkat nasional dalam 5 (lima) tahun\n terakhir', '20', '%', 2022, 0, NULL),
(8, 'Persentase dosen tetap berkualifikasi akademik S3, memiliki sertifikat kompetensi/profesi yang diakui oleh industri dan dunia kerja atau berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja', '40', '%', 2022, 0, NULL),
(9, 'Jumlah keluaran penelitian dan pengabdian kepada masyarakat yang berhasil mendapat rekognisi internasional atau diterapkan oleh masyarakat per jumlah dosen\n', '0.15', 'hasil penelitian per jumlah dosen', 2022, 0, NULL),
(10, 'Persentase program studi S1 dan D4/D3/D2 yang melaksanakan kerjasama dengan mitra', '50', '%', 2022, 0, NULL),
(11, 'Presentase mata kuliah S1 dan D4/D3/D2 yang menggunakan metode pembelajaran pemecahan kasus (case method) atau pembelajaran kelompok berbasis projek (team-based project) sebagaian besar bobot evaluasi', '50', '%', 2022, 0, NULL),
(12, 'Presentase program studi SI dan D4/D3/D2 yang memiliki akreditasi atau sertifikat internasional yang diakui pemerintah', '5', '%', 2022, 0, NULL),
(13, 'Rata-rata predikat SAKIP Satker minimal B', 'A', NULL, 2022, 0, NULL),
(14, 'Rata-rata Nilai Kinerja Anggaran atas pelaksanaan RKA-K/L Satker minimal 93', '93.5', '%', 2022, 0, NULL),
(15, 'Publikasi Ilmiah (IK-2.01.02) Internasional', NULL, NULL, NULL, 1, 1),
(16, 'Publikasi Ilmiah (IK-2.01.02) Nasional Terakreditasi', NULL, NULL, NULL, 1, 1),
(17, 'Publikasi Ilmiah (IK-2.01.02) Nasional Tidak Terakreditasi', NULL, NULL, NULL, 1, 1),
(18, 'Pemakalah dalam pertemuan ilmiah (IK-2.01.02) Internasional', NULL, NULL, NULL, 1, 1),
(19, 'Pemakalah dalam pertemuan ilmiah (IK-2.01.02) Nasional', NULL, NULL, NULL, 1, 1),
(20, 'Pemakalah dalam pertemuan ilmiah (IK-2.01.02) Lokal', NULL, NULL, NULL, 1, 1),
(21, 'Keynote Speaker dalam pertemuan ilmiah (IK-2.01.02) Internasional', NULL, NULL, NULL, 1, 1),
(22, 'Keynote Speaker dalam pertemuan ilmiah (IK-2.01.02) Nasional', NULL, NULL, NULL, 1, 1),
(23, 'Keynote Speaker dalam pertemuan ilmiah (IK-2.01.02) Lokal', NULL, NULL, NULL, 1, 1),
(24, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten', NULL, NULL, NULL, 1, 1),
(25, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten Sederhana', NULL, NULL, NULL, 1, 1),
(26, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Hak Cipta', NULL, NULL, NULL, 1, 1),
(27, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Merek Dagang', NULL, NULL, NULL, 1, 1),
(28, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Rahasia Dagang', NULL, NULL, NULL, 1, 1),
(29, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Desain Produk Industri', NULL, NULL, NULL, 1, 1),
(30, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Indikasi Geografis', NULL, NULL, NULL, 1, 1),
(31, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Varietas Tanaman', NULL, NULL, NULL, 1, 1),
(32, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Topografi Sirkuit Terpadu', NULL, NULL, NULL, 1, 1),
(33, 'Teknologi Tepat guna (IK-2.01.03) (IK-3.02.06)', NULL, NULL, NULL, 1, 1),
(34, 'Model/Purwarupa/Desain/ Karya seni/Rekayasa Sosial (IK-2.01.03)', NULL, NULL, NULL, 1, 1),
(35, 'Buku Ajar (ISBN)', NULL, NULL, NULL, 1, 1),
(36, 'Jumlah Dana Kerjasama Penelitian atau PKM(IK-5.01.01) (IK-5.01.02) Internasional', NULL, NULL, NULL, 1, 1),
(37, 'Jumlah Dana Kerjasama Penelitian atau PKM(IK-5.01.01) (IK-5.01.02) Nasional', NULL, NULL, NULL, 1, 1),
(38, 'Jumlah Dana Kerjasama Penelitian atau PKM(IK-5.01.01) (IK-5.01.02) Regional', NULL, NULL, NULL, 1, 1),
(39, 'Publikasi ilmiah (IK-2.01.02) Nasional terakreditasi atau Internasional', NULL, NULL, NULL, 1, 2),
(40, 'Pemakalah dalam pertemuan ilmiah) (IK-2.01.02) Nasional atau Internasional', NULL, NULL, NULL, 1, 2),
(41, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten', NULL, NULL, NULL, 1, 2),
(42, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten sederhana', NULL, NULL, NULL, 1, 2),
(43, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Hak Cipta', NULL, NULL, NULL, 1, 2),
(44, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Merek dagang', NULL, NULL, NULL, 1, 2),
(45, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Rahasia dagang', NULL, NULL, NULL, 1, 2),
(46, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Desain Produk Industri', NULL, NULL, NULL, 1, 2),
(47, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Indikasi Geografis', NULL, NULL, NULL, 1, 2),
(48, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Varietas Tanaman', NULL, NULL, NULL, 1, 2),
(49, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Topografi Sirkuit Terpadu', NULL, NULL, NULL, 1, 2),
(50, 'Teknologi Tepat Guna (IK-2.01.03) (IK-3.02.06)', NULL, NULL, NULL, 1, 2),
(51, 'Model/Purwarupa/Desain/Karya seni/Rekayasa Sosial (IK-2.01.03)', NULL, NULL, NULL, 1, 2),
(52, 'Buku Ajar (ISBN) (IK-2.01.03)', NULL, NULL, NULL, 1, 2),
(53, 'Tingkat Kesiapan Teknologi (TKT) (IK-3.02.06)', NULL, NULL, NULL, 1, 2),
(54, 'Jumlah Mahasiswa Yang terlibat dalam melaksanakan pengabdian (IK-1.02.12)', NULL, NULL, NULL, 1, 2),
(55, 'Kerjasama Mitra (IK-5.01.01) (IK-5.01.02)', NULL, NULL, NULL, 1, 2),
(56, 'Publikasi Ilmiah (IK-2.01.02) Internasional Terindeks Scopus', NULL, NULL, NULL, 1, 3),
(57, 'Keynote Speaker dalam pertemuan ilmiah (IK-2.01.02) Internasional', NULL, NULL, NULL, 1, 3),
(58, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten', NULL, NULL, NULL, 1, 3),
(59, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Paten Sederhana', NULL, NULL, NULL, 1, 3),
(60, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Hak Cipta', NULL, NULL, NULL, 1, 3),
(61, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Merek Dagang', NULL, NULL, NULL, 1, 3),
(62, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Rahasia Dagang', NULL, NULL, NULL, 1, 3),
(63, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Desain Produk Industri', NULL, NULL, NULL, 1, 3),
(64, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Indikasi Georafis', NULL, NULL, NULL, 1, 3),
(65, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Varietas', NULL, NULL, NULL, 1, 3),
(66, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Tanaman', NULL, NULL, NULL, 1, 3),
(67, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Perlindungan Topografi', NULL, NULL, NULL, 1, 3),
(68, 'Hak Atas Kekayaan Intelektual (HKI) (IK-2.01.04) Sirkuit Terpadu', NULL, NULL, NULL, 1, 3),
(69, 'Teknologi Tepat guna (IK-2.01.03) (IK-3.02.06)', NULL, NULL, NULL, 1, 3),
(70, 'Model/Purwarupa/Desain/ Karya seni/Rekayasa Sosial (IK-2.01.03)', NULL, NULL, NULL, 1, 3),
(71, 'Buku Ajar (ISBN)', NULL, NULL, NULL, 1, 3),
(72, 'Jumlah Kerjasama (IK-5.01.01) (IK-5.01.02) Internasiomal', NULL, NULL, NULL, 1, 3),
(73, 'Jumlah Kerjasama (IK-5.01.01) (IK-5.01.02) Nasional', NULL, NULL, NULL, 1, 3),
(74, 'Jumlah Kerjasama (IK-5.01.01) (IK-5.01.02) Regional', NULL, NULL, NULL, 1, 3),
(75, 'Jumlah Mahasiswa Yang terlibat dalam melaksanakan (IK-1.02.12)', NULL, NULL, NULL, 1, 3),
(76, 'Jumlah Kerja Sama dengan Dunia Kerja (DU/DI) dalam negeri / luar negeri (IK-5.01.01) (IK-5.01.02)', NULL, NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ref_jabatan_fungsional`
--

CREATE TABLE `ref_jabatan_fungsional` (
  `jabfung_id` int(11) NOT NULL,
  `jabfung_kode` varchar(8) DEFAULT NULL,
  `jabfung_nama` varchar(64) DEFAULT NULL,
  `jabfung_order` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_jabatan_fungsional`
--

INSERT INTO `ref_jabatan_fungsional` (`jabfung_id`, `jabfung_kode`, `jabfung_nama`, `jabfung_order`) VALUES
(1, 'TP', 'Tenaga Pengajar', 1),
(2, 'AA', 'Asisten Ahli', 2),
(3, 'L', 'Lektor', 3),
(4, 'LK', 'Lektor Kepala', 4),
(5, 'PROF', 'Profesor', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_skema`
--

CREATE TABLE `ref_jenis_skema` (
  `jenis_skema_id` int(11) NOT NULL,
  `jenis_skema_nama` varchar(32) DEFAULT NULL,
  `jenis_skema_icon` varchar(64) DEFAULT NULL,
  `jenis_skema_color` varchar(32) DEFAULT NULL,
  `jenis_skema_deskripsi` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_jenis_skema`
--

INSERT INTO `ref_jenis_skema` (`jenis_skema_id`, `jenis_skema_nama`, `jenis_skema_icon`, `jenis_skema_color`, `jenis_skema_deskripsi`) VALUES
(1, 'Penelitian', 'graduation-cap', 'info', NULL),
(2, 'Pengabdian', 'hand-holding-heart', 'success', NULL),
(3, 'Matching Fund', 'sync-alt', 'warning', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_kriteria_penilaian`
--

CREATE TABLE `ref_kriteria_penilaian` (
  `kriteria_id` int(11) NOT NULL,
  `tahap_review_id` int(11) NOT NULL,
  `kriteria_nama` varchar(128) NOT NULL,
  `kriteria_keterangan` varchar(256) DEFAULT NULL,
  `kriteria_bobot` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_kriteria_penilaian`
--

INSERT INTO `ref_kriteria_penilaian` (`kriteria_id`, `tahap_review_id`, `kriteria_nama`, `kriteria_keterangan`, `kriteria_bobot`) VALUES
(1, 1, 'Rekam Jejak PTM', '<li>Kesesuaian Keahlian</li><li>Prestasi penelitian dan publikasi, HKI, Kerjasama</li>', 20),
(2, 1, 'Mutu Penelitian', '', 30),
(3, 1, 'Kelayakan Penelitian', '<li>Keberlanjutan penelitian</li><li>Biaya</li><li>Perencanaan/alokasi waktu kerjasama</li>', 20),
(4, 1, 'Kesesuaian keahlian pengusul dengan program', '', 15),
(5, 1, 'Pentingnya kerjasama penelitian', '', 15),
(6, 2, 'Rekam Jejak PTM', '<li>Kesesuaian Keahlian</li><li>Prestasi penelitian dan publikasi, HKI, Kerjasama</li>', 20),
(7, 2, 'Mutu Penelitian', '', 30),
(8, 2, 'Kelayakan Penelitian', '<li>Keberlanjutan penelitian</li><li>Biaya</li><li>Perencanaan/alokasi waktu kerjasama</li>', 20),
(9, 2, 'Kesesuaian keahlian pengusul dengan program', '', 15),
(10, 2, 'Pentingnya kerjasama penelitian', '', 15),
(11, 3, 'Rekam Jejak PTM', '<li>Kesesuaian Keahlian</li><li>Prestasi penelitian dan publikasi, HKI, Kerjasama</li>', 20),
(12, 3, 'Mutu Penelitian', '', 30),
(13, 3, 'Kelayakan Penelitian', '<li>Keberlanjutan penelitian</li><li>Biaya</li><li>Perencanaan/alokasi waktu kerjasama</li>', 20),
(14, 3, 'Kesesuaian keahlian pengusul dengan program', '', 15),
(15, 3, 'Pentingnya kerjasama penelitian', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ref_luaran_tambahan`
--

CREATE TABLE `ref_luaran_tambahan` (
  `luaran_tambahan_id` int(11) NOT NULL,
  `luaran_tambahan_nama` varchar(64) DEFAULT NULL,
  `luaran_tambahan_slug` varchar(16) DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='mengacu ke universitas_karya.ref_tipe';

--
-- Dumping data for table `ref_luaran_tambahan`
--

INSERT INTO `ref_luaran_tambahan` (`luaran_tambahan_id`, `luaran_tambahan_nama`, `luaran_tambahan_slug`, `is_aktif`) VALUES
(1, 'HKI', 'hki', 1),
(2, 'Bahan Ajar', 'bahan-ajar', 1),
(3, 'Bahan Ajar dengan ISBN', 'bahan-ajar-isbn', 1),
(4, 'Jasa', 'jasa', 1),
(5, 'Metode', 'metode', 1),
(6, 'Model', 'model', 1),
(7, 'Sistem', 'sistem', 1),
(8, 'Produk/Barang', 'produk', 1),
(9, 'MoU', 'mou', 1),
(10, 'Seminar Internasional terindeks Scopus', 'seminar-scopus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_luaran_wajib`
--

CREATE TABLE `ref_luaran_wajib` (
  `luaran_wajib_id` tinyint(1) NOT NULL,
  `luaran_wajib_nama` varchar(64) DEFAULT NULL,
  `luaran_wajib_deskripsi` varchar(128) DEFAULT NULL,
  `luaran_wajib_slug` varchar(16) DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='mengacu ke universitas_karya.ref_tipe';

--
-- Dumping data for table `ref_luaran_wajib`
--

INSERT INTO `ref_luaran_wajib` (`luaran_wajib_id`, `luaran_wajib_nama`, `luaran_wajib_deskripsi`, `luaran_wajib_slug`, `is_aktif`) VALUES
(1, 'Jurnal Nasional Terakreditasi', NULL, 'jurnal', 1),
(2, 'Jurnal Nasional Terakreditasi min. Sinta 2', NULL, 'jurnas-st2', 1),
(3, 'Produk Iptek-Sosbud', 'metode, teknologi tepat guna, blueprint, purwarupa, sistem, kebijakan, model, rekayasa sosial', 'produk', 1),
(4, 'Produk Iptek-Sosbud min. TKT 5', 'metode, teknologi tepat guna, blueprint, ', 'produk-tkt5', 1),
(5, 'Seminar Nasional', NULL, 'semnas', 1),
(6, 'Artikel (PMUP)', 'Artikel ilmiah di Prosiding Nasional dan Artikel terbit di media masa', 'artikel-pmup', 1),
(7, 'Artikel (PMK)', 'Artikel ilmiah untuk publikasi/prosiding dan media masa', 'artikel-pmk', 1),
(8, 'Artikel (PMP)', 'Artikel ilmiah untuk publikasi/prosiding dan media masa', 'artikel-pmp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_mahasiswa`
--

CREATE TABLE `ref_mahasiswa` (
  `mhs_id` varchar(32) NOT NULL,
  `mhs_nama` varchar(128) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `json_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_mahasiswa`
--

INSERT INTO `ref_mahasiswa` (`mhs_id`, `mhs_nama`, `prodi_id`, `json_data`) VALUES
('3.34.22.1.01', 'Afi Nurul Hikam', 11, ''),
('3.34.22.2.04', 'Aufaa Hamiidah Aryana', 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_nilai`
--

CREATE TABLE `ref_nilai` (
  `nilai_id` int(11) NOT NULL,
  `nilai_value` tinyint(4) DEFAULT NULL,
  `nilai_keterangan` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_nilai`
--

INSERT INTO `ref_nilai` (`nilai_id`, `nilai_value`, `nilai_keterangan`) VALUES
(1, 1, 'Sangat Kurang'),
(2, 2, 'Kurang'),
(3, 3, 'Cukup'),
(4, 4, 'Baik'),
(5, 5, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `ref_pendidikan`
--

CREATE TABLE `ref_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `pendidikan_nama` varchar(64) NOT NULL,
  `pendidikan_kode` varchar(16) NOT NULL,
  `pendidikan_jenjang_kkni` int(11) NOT NULL,
  `is_profesi` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_pendidikan`
--

INSERT INTO `ref_pendidikan` (`pendidikan_id`, `pendidikan_nama`, `pendidikan_kode`, `pendidikan_jenjang_kkni`, `is_profesi`, `is_active`) VALUES
(1, 'SD/MI', 'SD', 0, 0, 1),
(2, 'SMP/MTS', 'SMP', 1, 0, 1),
(3, 'SMA/SMK/MA', 'SMA', 2, 0, 1),
(4, 'Diploma 1', 'D1', 3, 0, 1),
(5, 'Diploma 2', 'D2', 4, 0, 1),
(6, 'Diploma 3', 'D3', 5, 0, 1),
(7, 'Diploma 4', 'D4', 6, 0, 1),
(8, 'Sarjana', 'S1', 6, 0, 1),
(9, 'Profesi', 'Profesi I', 7, 1, 1),
(10, 'Magister', 'S2', 8, 0, 1),
(11, 'Magister Terapan', 'S2 Terapan', 8, 0, 1),
(12, 'Profesi', 'Profesi II', 8, 1, 1),
(13, 'Spesialis', 'Sp. 1', 8, 1, 1),
(14, 'Doktor', 'S3', 9, 0, 1),
(15, 'Doktor Terapan', 'S3 Terapan', 9, 0, 1),
(16, 'Sub-Spesialis', 'Sp. 2', 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_prodi`
--

CREATE TABLE `ref_prodi` (
  `prodi_id` int(11) NOT NULL,
  `prodi_inisial` varchar(8) DEFAULT NULL,
  `prodi_nama` varchar(64) DEFAULT NULL,
  `prodi_kode_pddikti` varchar(16) DEFAULT NULL,
  `prodi_jenjang_kode` varchar(16) DEFAULT NULL,
  `prodi_jenjang` varchar(64) DEFAULT NULL,
  `prodi_jurusan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_prodi`
--

INSERT INTO `ref_prodi` (`prodi_id`, `prodi_inisial`, `prodi_nama`, `prodi_kode_pddikti`, `prodi_jenjang_kode`, `prodi_jenjang`, `prodi_jurusan`) VALUES
(1, 'KG', 'Konstruksi Gedung', '22403', 'D3', 'Diploma III', 'Teknik Sipil'),
(2, 'KS', 'Konstruksi Sipil', '22402', 'D3', 'Diploma III', 'Teknik Sipil'),
(3, 'PG', 'Teknik Perawatan dan Perbaikan Gedung', '22303', 'D4', 'Sarjana Terapan', 'Teknik Sipil'),
(4, 'JJ', 'Perancangan Jalan dan Jembatan', '22301', 'D4', 'Sarjana Terapan', 'Teknik Sipil'),
(5, 'ME', 'Teknik Mesin', '21401', 'D3', 'Diploma III', 'Teknik Mesin'),
(6, 'KE', 'Teknik Konversi Energi', '21406', 'D3', 'Diploma III', 'Teknik Mesin'),
(7, 'MS', 'Teknik Mesin Produksi dan Perawatan', '21301', 'D4', 'Sarjana Terapan', 'Teknik Mesin'),
(8, 'LT', 'Teknik Listrik', '20403', 'D3', 'Diploma III', 'Teknik Elektro'),
(9, 'EK', 'Teknik Elektronika', '20401', 'D3', 'Diploma III', 'Teknik Elektro'),
(10, 'TK', 'Teknik Telekomunikasi', '20402', 'D3', 'Diploma III', 'Teknik Elektro'),
(11, 'IK', 'Teknik Informatika', '55401', 'D3', 'Diploma III', 'Teknik Elektro'),
(12, 'TE', 'Teknik Telekomunikasi', '20302', 'D4', 'Sarjana Terapan', 'Teknik Elektro'),
(13, 'AK', 'Akuntansi', '62401', 'D3', 'Diploma III', 'Akuntansi'),
(14, 'KP', 'Keuangan dan Perbankan', '61406', 'D3', 'Diploma III', 'Akuntansi'),
(15, 'KA', 'Komputerisasi Akuntansi', '57302', 'D4', 'Sarjana Terapan', 'Akuntansi'),
(16, 'PS', 'Perbankan Syari\'ah', '61306', 'D4', 'Sarjana Terapan', 'Akuntansi'),
(17, 'KU', 'Analis Keuangan', '61310', 'D4', 'Sarjana Terapan', 'Akuntansi'),
(18, 'AM', 'Akuntansi Manajerial', '62301', 'D4', 'Sarjana Terapan', 'Akuntansi'),
(19, 'AB', 'Administrasi Bisnis', '63411', 'D3', 'Diploma III', 'Administrasi Bisnis'),
(20, 'MP', 'Manajemen Pemasaran', '61404', 'D3', 'Diploma III', 'Administrasi Bisnis'),
(21, 'MB', 'Manajemen Bisnis Internasional', '93308', 'D4', 'Sarjana Terapan', 'Administrasi Bisnis'),
(22, 'BT', 'Administrasi Bisnis Terapan', '63311', 'D4', 'Sarjana Terapan', 'Administrasi Bisnis'),
(23, 'TT', 'Teknik Telekomunikasi', '20101', 'S2', 'Magister Terapan', 'Teknik Elektro'),
(24, 'PE', 'Teknologi Rekayasa Pembangkit Energi', '21309', 'D4', 'Sarjana Terapan', 'Teknik Mesin'),
(25, 'IL', 'Teknologi Rekayasa Instalasi Listrik', '20303', 'D4', 'Sarjana Terapan', 'Teknik Elektro'),
(26, 'TI', 'Teknologi Rekayasa Komputer', '56301', 'D4', 'Sarjana Terapan', 'Teknik Elektro'),
(27, 'RE', 'Teknologi Rekayasa Elektronika', '20307', 'D4', 'Sarjana Terapan', 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `ref_status`
--

CREATE TABLE `ref_status` (
  `status_id` int(11) NOT NULL,
  `status_nama` varchar(64) DEFAULT NULL,
  `status_color` varchar(32) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_valid_next` int(11) DEFAULT NULL,
  `is_conditionally_valid_next` int(11) DEFAULT NULL,
  `is_invalid_next` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_status`
--

INSERT INTO `ref_status` (`status_id`, `status_nama`, `status_color`, `is_active`, `is_valid_next`, `is_conditionally_valid_next`, `is_invalid_next`) VALUES
(1, 'Draf', 'warning', 1, 2, NULL, NULL),
(2, 'Diusulkan', 'success', 1, 6, 3, 5),
(3, 'Perbaikan Berkas', 'warning', 1, 4, NULL, NULL),
(4, 'Ajuan Perbaikan', 'success', 1, 6, 3, 5),
(5, 'Ditolak', 'danger', 1, NULL, 2, NULL),
(6, 'Berkas Diterima', 'success', 1, 8, NULL, NULL),
(7, 'Lolos Proposal', 'success', 0, 8, NULL, NULL),
(8, 'Laporan Kemajuan', 'success', 1, 9, NULL, NULL),
(9, 'Laporan Akhir', 'success', 1, 10, NULL, NULL),
(10, 'Selesai', 'success', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahap_review`
--

CREATE TABLE `ref_tahap_review` (
  `tahap_review_id` int(11) NOT NULL,
  `tahap_review_nama` varchar(50) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_tahap_review`
--

INSERT INTO `ref_tahap_review` (`tahap_review_id`, `tahap_review_nama`, `status_id`) VALUES
(1, 'Proposal', 6),
(2, 'Laporan Kemajuan', 8),
(3, 'Laporan Akhir', 9);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2024-02-09 08:50:46', '2024-02-09 08:50:46'),
(3, 'admin p3m', 'web', '2024-02-18 21:30:03', '2024-02-18 21:30:03'),
(4, 'dosen', 'web', '2024-02-18 21:30:22', '2024-02-18 21:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_menus`
--

CREATE TABLE `role_has_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_has_menus`
--

INSERT INTO `role_has_menus` (`id`, `menu_id`, `role_id`) VALUES
(113, 14, 4),
(114, 16, 4),
(115, 17, 4),
(116, 18, 4),
(117, 9, 3),
(118, 10, 3),
(119, 15, 3),
(120, 12, 3),
(122, 1, 1),
(123, 2, 1),
(124, 3, 1),
(125, 4, 1),
(126, 5, 1),
(127, 6, 1),
(128, 9, 1),
(129, 10, 1),
(130, 15, 1),
(131, 12, 1),
(132, 19, 1),
(133, 14, 1),
(134, 16, 1),
(135, 17, 1),
(136, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(16, 1),
(16, 3),
(18, 1),
(18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `trx_outbox_mail`
--

CREATE TABLE `trx_outbox_mail` (
  `outbox_id` int(11) NOT NULL,
  `outbox_sender` varchar(256) DEFAULT NULL,
  `outbox_recipient` varchar(256) DEFAULT NULL,
  `outbox_subject` varchar(256) DEFAULT NULL,
  `outbox_content` text DEFAULT NULL,
  `outbox_status` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema`
--

CREATE TABLE `trx_skema` (
  `trx_skema_id` int(11) NOT NULL,
  `trx_skema_nama` varchar(64) DEFAULT NULL,
  `trx_skema_kode` varchar(16) DEFAULT NULL,
  `jenis_skema_id` int(11) DEFAULT NULL,
  `periode_tahun` int(11) DEFAULT NULL,
  `proposal_max_upload` date DEFAULT NULL,
  `revisi_proposal_max_upload` date DEFAULT NULL,
  `laporan_kemajuan_max_upload` date DEFAULT NULL,
  `laporan_akhir_max_upload` date DEFAULT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema`
--

INSERT INTO `trx_skema` (`trx_skema_id`, `trx_skema_nama`, `trx_skema_kode`, `jenis_skema_id`, `periode_tahun`, `proposal_max_upload`, `revisi_proposal_max_upload`, `laporan_kemajuan_max_upload`, `laporan_akhir_max_upload`, `updated_at`, `created_at`, `is_active`) VALUES
(1, 'Penelitian Terapan Pratama (PTP)', 'PTP', 1, 2023, '2023-06-12', '2023-06-30', NULL, NULL, '2024-05-08', '2024-05-07', 1),
(2, 'Penelitian Terapan Kompetitif (PTK)', 'PTK', 1, 2023, '2023-08-20', '2023-05-02', NULL, NULL, '2024-05-07', '2024-05-07', 1),
(3, 'Penelitian Terapan Unggulan Prodi (PTUP)', 'PTUP', 1, 2023, '2023-03-12', '2023-06-16', NULL, NULL, '2024-05-07', '2024-05-07', 1),
(4, 'Pengabdian kepada Masyarakat Pratama (PMP)', 'PMP', 2, 2023, '2023-03-20', '2023-06-30', NULL, NULL, '2024-05-07', '2024-05-07', 1),
(5, 'Pengabdian kepada Masyarakat Kompetitif (PMK)', 'PMK', 2, 2023, '2023-04-05', '2023-05-10', NULL, NULL, '2024-05-07', '2024-05-07', 1),
(6, 'Pengabdian kepada Masyarakat Unggulan Prodi (PMUP)', 'PMUP', 2, 2023, '2023-03-12', '2023-06-16', NULL, NULL, '2024-05-07', '2024-05-07', 1),
(7, 'Matching Fund Institusi (MFI)', 'MFI', 3, 2023, '2023-06-14', '2023-06-27', '2023-03-23', '2023-04-06', '2024-05-07', '2024-05-07', 1),
(8, 'Penelitian Terapan Pratama', 'PTP', 1, 2024, '2024-02-24', NULL, NULL, NULL, '2024-05-07', '2024-05-07', 1),
(15, 'Skema Percobaan', 'SP', NULL, 2023, NULL, NULL, NULL, NULL, '2024-05-07', '2024-05-07', 1),
(16, 'Skema Percobaan Lagi', 'SP', 2, 2024, '2024-05-09', '2024-05-09', NULL, NULL, '2024-05-09', '2024-05-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema_file`
--

CREATE TABLE `trx_skema_file` (
  `skema_file_id` int(11) NOT NULL,
  `trx_skema_id` int(11) NOT NULL,
  `file_key` varchar(32) NOT NULL,
  `file_caption` varchar(32) DEFAULT NULL,
  `file_accepted_type` varchar(128) DEFAULT NULL,
  `file_template` varchar(256) DEFAULT NULL,
  `is_required` tinyint(1) DEFAULT 0,
  `is_report` tinyint(1) DEFAULT 0,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema_file`
--

INSERT INTO `trx_skema_file` (`skema_file_id`, `trx_skema_id`, `file_key`, `file_caption`, `file_accepted_type`, `file_template`, `is_required`, `is_report`, `updated_at`, `created_at`, `is_active`) VALUES
(1, 1, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(2, 1, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(3, 2, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(4, 2, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(5, 3, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(6, 3, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(7, 3, 'roadmap_prodi', 'Roadmap Penelitian Program Studi', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(8, 4, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(9, 4, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(10, 5, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(11, 5, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(12, 6, 'proposal', 'Proposal', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(13, 6, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(14, 6, 'roadmap_prodi', 'Roadmap Pengabdian Program Studi', 'application/pdf', NULL, 1, 0, '2024-05-07', '2024-05-07', 1),
(15, 7, 'proposal', 'Proposal', 'application/pdf', 'template-9b327b1a-bdc8-3abc-9ed9-bc778a7757bb.docx', 1, 0, '2024-05-07', '2024-05-07', 1),
(16, 7, 'rab', 'Rencana Anggaran Biaya (RAB)', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'template-58a894d9-b088-3b61-82da-1f2652993620.xlsx', 1, 0, '2024-05-07', '2024-05-07', 1),
(18, 7, 'pernyataan-tidak-studi-lanjut', 'Pernyataan Tidak Studi Lanjut', 'application/pdf', 'template-1d390129-4426-3372-a4be-507c00e518eb.docx', 1, 0, '2024-05-07', '2024-05-07', 1),
(19, 7, '-pernyataan-kesepakatan-pengusul', ' Pernyataan Kesepakatan Pengusul', 'application/pdf', 'template-4160eab2-6817-3aac-bb7a-04fd4be63815.docx', 1, 0, '2024-05-07', '2024-05-07', 1),
(20, 7, 'pernyataan-komitmen-pihak-mitra', 'Pernyataan Komitmen Pihak Mitra', 'application/pdf', 'template-3d3d92ca-97f7-3104-ab94-d31aa76801b1.docx', 1, 0, '2024-05-07', '2024-05-07', 1),
(21, 1, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(22, 2, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(23, 3, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(24, 4, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(25, 5, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(26, 6, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(27, 7, 'laporan-kemajuan', 'Laporan Kemajuan', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(28, 1, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(29, 2, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(30, 3, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(31, 4, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(32, 5, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(33, 6, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(34, 7, 'laporan-akhir', 'Laporan Akhir', 'application/pdf', NULL, NULL, 1, '2024-05-07', '2024-05-07', 1),
(39, 16, 'SP', 'Skema Percobaan Lagi', '.png', NULL, 0, 0, '2024-05-09', '2024-05-09', 1),
(40, 1, 'SP', 'Skema Percobaan', '.png', 'D:\\Aplikasi\\XAMPP\\tmp\\phpA53A.tmp', 0, 0, '2024-05-09', '2024-05-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema_luaran_tambahan`
--

CREATE TABLE `trx_skema_luaran_tambahan` (
  `trx_skema_id` int(11) NOT NULL,
  `luaran_tambahan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema_luaran_tambahan`
--

INSERT INTO `trx_skema_luaran_tambahan` (`trx_skema_id`, `luaran_tambahan_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(3, 1),
(3, 2),
(4, 1),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(5, 1),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(6, 1),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(7, 1),
(7, 3),
(7, 10),
(8, 1),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema_luaran_wajib`
--

CREATE TABLE `trx_skema_luaran_wajib` (
  `trx_skema_id` int(11) NOT NULL,
  `luaran_wajib_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema_luaran_wajib`
--

INSERT INTO `trx_skema_luaran_wajib` (`trx_skema_id`, `luaran_wajib_id`) VALUES
(1, 3),
(1, 5),
(2, 1),
(2, 3),
(3, 2),
(3, 4),
(4, 8),
(5, 7),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema_pendanaan`
--

CREATE TABLE `trx_skema_pendanaan` (
  `pendanaan_id` int(11) NOT NULL,
  `trx_skema_id` int(11) DEFAULT NULL,
  `pendanaan_key` varchar(32) DEFAULT NULL,
  `pendanaan_nama` varchar(64) DEFAULT NULL,
  `pendanaan_keterangan` varchar(128) DEFAULT NULL,
  `pendanaan_persentase` int(11) DEFAULT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema_pendanaan`
--

INSERT INTO `trx_skema_pendanaan` (`pendanaan_id`, `trx_skema_id`, `pendanaan_key`, `pendanaan_nama`, `pendanaan_keterangan`, `pendanaan_persentase`, `updated_at`, `created_at`, `is_active`) VALUES
(2, 2, 'bhn_pakai', 'Bahan habis pakai dan peralatan', 'Coba', 60, '2024-05-08', '2024-05-07', 0),
(4, 4, 'bhn_pakai', 'Bahan habis pakai dan peralatan', NULL, 60, '2024-05-07', '2024-05-07', 1),
(6, 6, 'bhn_pakai', 'Bahan habis pakai dan peralatan', NULL, 60, '2024-05-07', '2024-05-07', 1),
(7, 7, 'bhn_pakai', 'Bahan habis pakai dan peralatan', NULL, 60, '2024-05-07', '2024-05-07', 0),
(9, 2, 'perjalanan', 'Perjalanan', NULL, 30, '2024-05-07', '2024-05-07', 1),
(11, 4, 'perjalanan', 'Perjalanan', NULL, 30, '2024-05-07', '2024-05-07', 1),
(12, 5, 'perjalanan', 'Perjalanan', NULL, 30, '2024-05-07', '2024-05-07', 1),
(13, 6, 'perjalanan', 'Perjalanan', NULL, 30, '2024-05-07', '2024-05-07', 1),
(14, 7, 'perjalanan', 'Perjalanan', NULL, 30, '2024-05-07', '2024-05-07', 0),
(15, 1, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(16, 2, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(17, 3, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(18, 4, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(19, 5, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(20, 6, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 1),
(21, 7, 'lain', 'Lain-lain', 'publikasi, seminar, laporan, lainnya', 40, '2024-05-07', '2024-05-07', 0),
(22, 7, 'honorarium', 'Honorarium Tenaga Peneliti/Pakar', NULL, 0, '2024-05-07', '2024-05-07', 1),
(23, 7, 'peralatan_pendukung', 'Peralatan Pendukung Terkait Langsung dengan Kegiatan', NULL, 0, '2024-05-07', '2024-05-07', 1),
(24, 7, 'prototype', 'Bahan Prototype/Produksi Skala Terbatas/Bahan Habis Penelitian', NULL, 0, '2024-05-07', '2024-05-07', 1),
(25, 7, 'survey', 'Survey', NULL, 0, '2024-05-07', '2024-05-07', 1),
(26, 7, 'pengujian', 'Biaya Pengujian Produk', NULL, 0, '2024-05-07', '2024-05-07', 1),
(27, 7, 'patenpublikasi', 'Pendaftaran HKI, Publikasi Jurnal', NULL, 0, '2024-05-07', '2024-05-07', 1),
(28, 7, 'perjalanan', 'Biaya Perjalanan Dinas', NULL, 0, '2024-05-07', '2024-05-07', 1),
(29, 7, 'mahasiswa', 'Bantuan Insentif Mahasiswa', NULL, 0, '2024-05-07', '2024-05-07', 1),
(30, 7, 'produksi', 'Biaya Produksi Skala Terbatas', NULL, 0, '2024-05-07', '2024-05-07', 1),
(69, 1, 'bhn_pakai', 'Hohoho', 'ha', 50, '2024-05-09', '2024-05-09', 1),
(70, 16, 'bhn_pakai', 'Hohoho', 'ha', 10, '2024-05-28', '2024-05-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_skema_settings`
--

CREATE TABLE `trx_skema_settings` (
  `trx_skema_id` int(11) NOT NULL,
  `setting_key` varchar(64) NOT NULL,
  `setting_label` varchar(64) DEFAULT NULL,
  `setting_type` varchar(64) DEFAULT NULL,
  `setting_value` varchar(128) DEFAULT NULL,
  `is_visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_skema_settings`
--

INSERT INTO `trx_skema_settings` (`trx_skema_id`, `setting_key`, `setting_label`, `setting_type`, `setting_value`, `is_visible`) VALUES
(1, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(1, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(1, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '1', 1),
(1, 'max_dana', 'Maksimum Pendanaan', 'value', '7500000', 0),
(1, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(1, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(1, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(1, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(1, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '0', 0),
(2, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(2, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(2, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '2', 1),
(2, 'max_dana', 'Maksimum Pendanaan', 'value', '15000000', 0),
(2, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(2, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(2, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(2, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(2, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '1', 0),
(3, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(3, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(3, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '1', 1),
(3, 'max_dana', 'Maksimum Pendanaan', 'value', '25000000', 0),
(3, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(3, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '3', 1),
(3, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(3, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(3, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '0', 0),
(4, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(4, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(4, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '1', 1),
(4, 'max_dana', 'Maksimum Pendanaan', 'value', '7500000', 0),
(4, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(4, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(4, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(4, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(4, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '0', 0),
(5, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(5, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(5, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '2', 1),
(5, 'max_dana', 'Maksimum Pendanaan', 'value', '10000000', 0),
(5, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(5, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(5, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(5, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(5, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '1', 0),
(6, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '0', 0),
(6, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'max', 0),
(6, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '1', 1),
(6, 'max_dana', 'Maksimum Pendanaan', 'value', '10000000', 0),
(6, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(6, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(6, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '8', 0),
(6, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '0', 0),
(6, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '0', 0),
(7, 'allow_dosen_asing', 'Ijinkan Penambahan Dosen Asing', 'binary', '1', 1),
(7, 'jenis_pendanaan', 'Jenis Pendanaan', 'value', 'normal', 0),
(7, 'max_anggota', 'Maksimum Keanggotaan (termasuk menjadi Ketua)', 'value', '1', 1),
(7, 'max_dana', 'Maksimum Pendanaan', 'value', '50000000', 0),
(7, 'max_ketua', 'Maksimum Keanggotaan sebagai Ketua', 'value', '1', 1),
(7, 'min_jabfung_ketua', 'Jabatan Fungsional Minimum Ketua', 'ref', '2', 1),
(7, 'min_kkni_pendidikan_ketua', 'Minimum Pendidikan Ketua', 'ref', '9', 1),
(7, 'require_data_mitra', 'Membutuhkan Data Mitra', 'binary', '1', 0),
(7, 'require_member_verification', 'Memerlukan Verifikasi Keanggotaan', 'binary', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan`
--

CREATE TABLE `trx_usulan` (
  `usulan_id` int(11) NOT NULL,
  `usulan_judul` varchar(256) DEFAULT NULL,
  `usulan_abstrak` text DEFAULT NULL,
  `usulan_pendanaan` decimal(15,2) DEFAULT NULL,
  `trx_skema_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `is_submitted` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(64) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan`
--

INSERT INTO `trx_usulan` (`usulan_id`, `usulan_judul`, `usulan_abstrak`, `usulan_pendanaan`, `trx_skema_id`, `is_active`, `is_submitted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Project Based Learning SIPMAS IK2B Genap 2024', '-', 0.00, 6, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Sipmas Percobaan Kedua', 'Ini percobaan kedua', 10000000.00, 15, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_anggota_dosen`
--

CREATE TABLE `trx_usulan_anggota_dosen` (
  `anggota_dosen_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `dosen_id` varchar(24) DEFAULT NULL,
  `is_ketua` tinyint(1) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_anggota_dosen`
--

INSERT INTO `trx_usulan_anggota_dosen` (`anggota_dosen_id`, `usulan_id`, `dosen_id`, `is_ketua`, `is_verified`) VALUES
(2, 2, '33422115', 1, 1),
(4, 1, '198810142019031007', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_anggota_dosen_luar`
--

CREATE TABLE `trx_usulan_anggota_dosen_luar` (
  `anggota_dosen_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `dosen_nama` varchar(200) NOT NULL,
  `dosen_institusi` varchar(200) NOT NULL,
  `dosen_negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_anggota_mhs`
--

CREATE TABLE `trx_usulan_anggota_mhs` (
  `anggota_mhs_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `mhs_id` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_anggota_mhs`
--

INSERT INTO `trx_usulan_anggota_mhs` (`anggota_mhs_id`, `usulan_id`, `mhs_id`) VALUES
(1, 2, '3.34.22.2.04'),
(2, 2, '3.34.22.1.01');

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_dana`
--

CREATE TABLE `trx_usulan_dana` (
  `usulan_dana_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `pendanaan_id` int(11) DEFAULT NULL,
  `pendanaan_value` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_dana`
--

INSERT INTO `trx_usulan_dana` (`usulan_dana_id`, `usulan_id`, `pendanaan_id`, `pendanaan_value`) VALUES
(1, 2, 4, 10000.00),
(2, 2, 22, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_file`
--

CREATE TABLE `trx_usulan_file` (
  `usulan_file_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `skema_file_id` int(11) DEFAULT NULL,
  `file_name` varchar(512) DEFAULT NULL,
  `file_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Pending, 1: Valid, 2: Tidak Valid',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_file`
--

INSERT INTO `trx_usulan_file` (`usulan_file_id`, `usulan_id`, `skema_file_id`, `file_name`, `file_status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `is_active`) VALUES
(1, 2, 1, 'percobaan_file.pdf', 1, NULL, NULL, NULL, NULL, 1),
(2, 2, 15, 'coba_lagi.pdf', 1, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_iku`
--

CREATE TABLE `trx_usulan_iku` (
  `usulan_id` int(11) DEFAULT NULL,
  `iku_id` int(11) DEFAULT NULL,
  `iku_realisasi` varchar(256) DEFAULT NULL,
  `iku_bukti` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_iku`
--

INSERT INTO `trx_usulan_iku` (`usulan_id`, `iku_id`, `iku_realisasi`, `iku_bukti`) VALUES
(2, 63, 'hhh', 'ooo'),
(2, 5, 'hhh', 'ooop');

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_luaran_tambahan`
--

CREATE TABLE `trx_usulan_luaran_tambahan` (
  `usulan_id` int(11) DEFAULT NULL,
  `luaran_tambahan_id` int(11) DEFAULT NULL,
  `luaran_tambahan_target` varchar(256) DEFAULT NULL,
  `luaran_tambahan_realisasi` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_luaran_tambahan`
--

INSERT INTO `trx_usulan_luaran_tambahan` (`usulan_id`, `luaran_tambahan_id`, `luaran_tambahan_target`, `luaran_tambahan_realisasi`) VALUES
(2, 1, 'RRRRRRRRRRRRRRRRRR', 'AAAAAAAAAAAAAAAa');

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_luaran_wajib`
--

CREATE TABLE `trx_usulan_luaran_wajib` (
  `usulan_luaran_wajib_id` int(11) NOT NULL,
  `usulan_id` int(11) NOT NULL,
  `luaran_wajib_id` tinyint(4) NOT NULL,
  `luaran_wajib_realisasi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_luaran_wajib`
--

INSERT INTO `trx_usulan_luaran_wajib` (`usulan_luaran_wajib_id`, `usulan_id`, `luaran_wajib_id`, `luaran_wajib_realisasi`) VALUES
(1, 2, 1, 'HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHh'),
(2, 2, 3, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'),
(3, 2, 3, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAA');

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_mitra`
--

CREATE TABLE `trx_usulan_mitra` (
  `usulan_id` int(11) NOT NULL,
  `mitra_kategori` tinyint(4) DEFAULT NULL COMMENT '0: Dalam Negeri, 1: Luar Negeri',
  `mitra_nama` varchar(128) DEFAULT NULL,
  `mitra_alamat` varchar(512) DEFAULT NULL,
  `mitra_email` varchar(128) DEFAULT NULL,
  `mitra_telp` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_reviewer`
--

CREATE TABLE `trx_usulan_reviewer` (
  `usulan_reviewer_id` int(11) NOT NULL,
  `tahap_review_id` int(11) DEFAULT NULL,
  `dosen_id` varchar(24) DEFAULT NULL,
  `usulan_id` int(11) NOT NULL,
  `reviewer_urutan` tinyint(4) DEFAULT NULL,
  `reviewer_komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_reviewer`
--

INSERT INTO `trx_usulan_reviewer` (`usulan_reviewer_id`, `tahap_review_id`, `dosen_id`, `usulan_id`, `reviewer_urutan`, `reviewer_komentar`) VALUES
(1, 2, '199109172022031007', 1, NULL, 'Tetap semangat dan jangan menyerah'),
(2, 1, '198810142019031007', 2, NULL, NULL),
(3, 1, '33422115', 2, 1, NULL),
(4, 2, '33422115', 2, 1, NULL),
(5, 3, '33422115', 2, 1, NULL),
(6, 1, '199109172022031007', 2, 2, NULL),
(7, 2, '199109172022031007', 2, 2, NULL),
(8, 3, '199109172022031007', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_reviewer_nilai`
--

CREATE TABLE `trx_usulan_reviewer_nilai` (
  `reviewer_nilai_id` bigint(20) NOT NULL,
  `usulan_reviewer_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `nilai_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_reviewer_nilai`
--

INSERT INTO `trx_usulan_reviewer_nilai` (`reviewer_nilai_id`, `usulan_reviewer_id`, `kriteria_id`, `nilai_id`) VALUES
(1, 1, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `trx_usulan_status`
--

CREATE TABLE `trx_usulan_status` (
  `usulan_status_id` int(11) NOT NULL,
  `usulan_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `status_komentar` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trx_usulan_status`
--

INSERT INTO `trx_usulan_status` (`usulan_status_id`, `usulan_id`, `status_id`, `status_komentar`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_active`) VALUES
(1, 1, 6, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '2024-02-09 08:50:46', '$2y$10$8/JxSFXc0bc1pcytTqb7..RyyP4PCAiNRTbperaoLUPYxtoeBhuJe', 'Mhmu68tBJZlMsfr37qUUJiFohrnV9t1boD5cELRj5beq6UeN8Lbe6LYWhul8', '2024-02-09 08:50:46', '2024-02-09 08:50:46'),
(2, 'Suko Tyas', 'sukotyasp@polines.ac.id', '2024-02-19 13:54:34', '$2y$10$Pq2r6sZP4zzkrAuVjfPRMOfp6BDgIiCEOL56r0wUnNoP/848mI1PO', NULL, '2024-02-09 08:52:30', '2024-02-19 13:54:34'),
(3, 'Marvin', 'marvin@polines.ac.id', '2024-02-19 14:29:01', '$2y$10$GXtLKsVEBoadErckzzj/P.uhswWCcKqWXmxZdEdVdKsevCyIjfORu', NULL, '2024-02-19 14:29:01', '2024-02-19 14:29:01'),
(4, 'aldi', 'aldiadmin@gmail.com', NULL, '$2y$10$4aTzJxsKO0STyiuhfKgBmeD.kTtk5MyZ3Yg8630SXAsLRr1JFuiEG', NULL, '2024-03-18 02:41:02', '2024-03-18 02:41:02'),
(5, 'Luqman Aldi Prawiratama', 'aldidosen@gmail.com', '2024-03-20 03:48:17', '$2y$10$TMc9IruQ3KaVefMfvZp3kOK523qQmwd4428boM5SB9qfV1AiqNZZG', NULL, '2024-03-20 02:29:52', '2024-03-20 03:48:17'),
(6, 'Luqman Aldi Prawiratama', 'aldiadmin1@gmail.com', '2024-03-27 02:32:15', '$2y$10$vHKSScny3RKrCkNWkaa3oe9PFte8VxV2xGaCB1F3cl2pnUNHQe46W', NULL, '2024-03-27 02:32:15', '2024-03-27 02:32:15'),
(7, 'Muhammad Rizky Faizullah Sudibyo', 'rizky@gmail.com', '2024-04-28 23:14:11', '$2y$10$Kssy1/DDFQNxvA.8Mdogn.0mEpI/Cpxo/6h7kv/Gpk3vmFOoDyO3.', NULL, '2024-04-28 23:13:58', '2024-04-28 23:14:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `log_login_email_failed`
--
ALTER TABLE `log_login_email_failed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_suspicious_action`
--
ALTER TABLE `log_suspicious_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ref_dosen`
--
ALTER TABLE `ref_dosen`
  ADD PRIMARY KEY (`dosen_id`),
  ADD KEY `jabfung_id` (`jabfung_id`),
  ADD KEY `pendidikan_id` (`pendidikan_id`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `ref_iku`
--
ALTER TABLE `ref_iku`
  ADD PRIMARY KEY (`iku_id`),
  ADD KEY `jenis_usulan_id` (`jenis_skema_id`);

--
-- Indexes for table `ref_jabatan_fungsional`
--
ALTER TABLE `ref_jabatan_fungsional`
  ADD PRIMARY KEY (`jabfung_id`);

--
-- Indexes for table `ref_jenis_skema`
--
ALTER TABLE `ref_jenis_skema`
  ADD PRIMARY KEY (`jenis_skema_id`);

--
-- Indexes for table `ref_kriteria_penilaian`
--
ALTER TABLE `ref_kriteria_penilaian`
  ADD PRIMARY KEY (`kriteria_id`),
  ADD KEY `tahap_review_id` (`tahap_review_id`);

--
-- Indexes for table `ref_luaran_tambahan`
--
ALTER TABLE `ref_luaran_tambahan`
  ADD PRIMARY KEY (`luaran_tambahan_id`);

--
-- Indexes for table `ref_luaran_wajib`
--
ALTER TABLE `ref_luaran_wajib`
  ADD PRIMARY KEY (`luaran_wajib_id`);

--
-- Indexes for table `ref_mahasiswa`
--
ALTER TABLE `ref_mahasiswa`
  ADD PRIMARY KEY (`mhs_id`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `ref_nilai`
--
ALTER TABLE `ref_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `ref_prodi`
--
ALTER TABLE `ref_prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `ref_status`
--
ALTER TABLE `ref_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `ref_tahap_review`
--
ALTER TABLE `ref_tahap_review`
  ADD PRIMARY KEY (`tahap_review_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_menus`
--
ALTER TABLE `role_has_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_has_menus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `trx_outbox_mail`
--
ALTER TABLE `trx_outbox_mail`
  ADD PRIMARY KEY (`outbox_id`);

--
-- Indexes for table `trx_skema`
--
ALTER TABLE `trx_skema`
  ADD PRIMARY KEY (`trx_skema_id`),
  ADD KEY `jenis_usulan_id` (`jenis_skema_id`);

--
-- Indexes for table `trx_skema_file`
--
ALTER TABLE `trx_skema_file`
  ADD PRIMARY KEY (`skema_file_id`),
  ADD KEY `trx_skema_id` (`trx_skema_id`);

--
-- Indexes for table `trx_skema_luaran_tambahan`
--
ALTER TABLE `trx_skema_luaran_tambahan`
  ADD PRIMARY KEY (`trx_skema_id`,`luaran_tambahan_id`),
  ADD KEY `luaran_tambahan_id` (`luaran_tambahan_id`);

--
-- Indexes for table `trx_skema_luaran_wajib`
--
ALTER TABLE `trx_skema_luaran_wajib`
  ADD PRIMARY KEY (`trx_skema_id`,`luaran_wajib_id`),
  ADD KEY `trx_skema_luaran_wajib_ibfk_2` (`luaran_wajib_id`);

--
-- Indexes for table `trx_skema_pendanaan`
--
ALTER TABLE `trx_skema_pendanaan`
  ADD PRIMARY KEY (`pendanaan_id`),
  ADD KEY `trx_skema_id` (`trx_skema_id`);

--
-- Indexes for table `trx_skema_settings`
--
ALTER TABLE `trx_skema_settings`
  ADD PRIMARY KEY (`trx_skema_id`,`setting_key`);

--
-- Indexes for table `trx_usulan`
--
ALTER TABLE `trx_usulan`
  ADD PRIMARY KEY (`usulan_id`),
  ADD KEY `trx_skema_id` (`trx_skema_id`);

--
-- Indexes for table `trx_usulan_anggota_dosen`
--
ALTER TABLE `trx_usulan_anggota_dosen`
  ADD PRIMARY KEY (`anggota_dosen_id`),
  ADD UNIQUE KEY `usulan_id` (`usulan_id`,`dosen_id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- Indexes for table `trx_usulan_anggota_dosen_luar`
--
ALTER TABLE `trx_usulan_anggota_dosen_luar`
  ADD PRIMARY KEY (`anggota_dosen_id`),
  ADD KEY `usulan_id` (`usulan_id`);

--
-- Indexes for table `trx_usulan_anggota_mhs`
--
ALTER TABLE `trx_usulan_anggota_mhs`
  ADD PRIMARY KEY (`anggota_mhs_id`),
  ADD KEY `usulan_id` (`usulan_id`),
  ADD KEY `mhs_id` (`mhs_id`);

--
-- Indexes for table `trx_usulan_dana`
--
ALTER TABLE `trx_usulan_dana`
  ADD PRIMARY KEY (`usulan_dana_id`),
  ADD KEY `usulan_id` (`usulan_id`),
  ADD KEY `pendanaan_id` (`pendanaan_id`);

--
-- Indexes for table `trx_usulan_file`
--
ALTER TABLE `trx_usulan_file`
  ADD PRIMARY KEY (`usulan_file_id`),
  ADD UNIQUE KEY `usulan_id` (`usulan_id`,`skema_file_id`,`is_active`),
  ADD KEY `skema_file_id` (`skema_file_id`);

--
-- Indexes for table `trx_usulan_iku`
--
ALTER TABLE `trx_usulan_iku`
  ADD KEY `iku_id` (`iku_id`),
  ADD KEY `usulan_id` (`usulan_id`);

--
-- Indexes for table `trx_usulan_luaran_tambahan`
--
ALTER TABLE `trx_usulan_luaran_tambahan`
  ADD KEY `luaran_tambahan_id` (`luaran_tambahan_id`),
  ADD KEY `usulan_id` (`usulan_id`);

--
-- Indexes for table `trx_usulan_luaran_wajib`
--
ALTER TABLE `trx_usulan_luaran_wajib`
  ADD PRIMARY KEY (`usulan_luaran_wajib_id`),
  ADD KEY `luaran_tambahan_id` (`luaran_wajib_id`),
  ADD KEY `usulan_id` (`usulan_id`);

--
-- Indexes for table `trx_usulan_mitra`
--
ALTER TABLE `trx_usulan_mitra`
  ADD KEY `usulan_id` (`usulan_id`);

--
-- Indexes for table `trx_usulan_reviewer`
--
ALTER TABLE `trx_usulan_reviewer`
  ADD PRIMARY KEY (`usulan_reviewer_id`),
  ADD KEY `usulan_id` (`usulan_id`),
  ADD KEY `trx_usulan_reviewer_ibfk_3` (`dosen_id`),
  ADD KEY `tahap_review_id` (`tahap_review_id`);

--
-- Indexes for table `trx_usulan_reviewer_nilai`
--
ALTER TABLE `trx_usulan_reviewer_nilai`
  ADD PRIMARY KEY (`reviewer_nilai_id`),
  ADD KEY `nilai_id` (`nilai_id`),
  ADD KEY `kriteria_id` (`kriteria_id`),
  ADD KEY `usulan_reviewer_id` (`usulan_reviewer_id`);

--
-- Indexes for table `trx_usulan_status`
--
ALTER TABLE `trx_usulan_status`
  ADD PRIMARY KEY (`usulan_status_id`),
  ADD KEY `usulan_id` (`usulan_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_login_email_failed`
--
ALTER TABLE `log_login_email_failed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `log_suspicious_action`
--
ALTER TABLE `log_suspicious_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_iku`
--
ALTER TABLE `ref_iku`
  MODIFY `iku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `ref_jabatan_fungsional`
--
ALTER TABLE `ref_jabatan_fungsional`
  MODIFY `jabfung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_jenis_skema`
--
ALTER TABLE `ref_jenis_skema`
  MODIFY `jenis_skema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_kriteria_penilaian`
--
ALTER TABLE `ref_kriteria_penilaian`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ref_luaran_tambahan`
--
ALTER TABLE `ref_luaran_tambahan`
  MODIFY `luaran_tambahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ref_luaran_wajib`
--
ALTER TABLE `ref_luaran_wajib`
  MODIFY `luaran_wajib_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ref_nilai`
--
ALTER TABLE `ref_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ref_status`
--
ALTER TABLE `ref_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ref_tahap_review`
--
ALTER TABLE `ref_tahap_review`
  MODIFY `tahap_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_has_menus`
--
ALTER TABLE `role_has_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `trx_outbox_mail`
--
ALTER TABLE `trx_outbox_mail`
  MODIFY `outbox_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_skema`
--
ALTER TABLE `trx_skema`
  MODIFY `trx_skema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trx_skema_file`
--
ALTER TABLE `trx_skema_file`
  MODIFY `skema_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `trx_skema_pendanaan`
--
ALTER TABLE `trx_skema_pendanaan`
  MODIFY `pendanaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `trx_usulan`
--
ALTER TABLE `trx_usulan`
  MODIFY `usulan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_usulan_anggota_dosen`
--
ALTER TABLE `trx_usulan_anggota_dosen`
  MODIFY `anggota_dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33422116;

--
-- AUTO_INCREMENT for table `trx_usulan_anggota_dosen_luar`
--
ALTER TABLE `trx_usulan_anggota_dosen_luar`
  MODIFY `anggota_dosen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_usulan_anggota_mhs`
--
ALTER TABLE `trx_usulan_anggota_mhs`
  MODIFY `anggota_mhs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_usulan_dana`
--
ALTER TABLE `trx_usulan_dana`
  MODIFY `usulan_dana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_usulan_file`
--
ALTER TABLE `trx_usulan_file`
  MODIFY `usulan_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_usulan_luaran_wajib`
--
ALTER TABLE `trx_usulan_luaran_wajib`
  MODIFY `usulan_luaran_wajib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trx_usulan_reviewer`
--
ALTER TABLE `trx_usulan_reviewer`
  MODIFY `usulan_reviewer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trx_usulan_reviewer_nilai`
--
ALTER TABLE `trx_usulan_reviewer_nilai`
  MODIFY `reviewer_nilai_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_usulan_status`
--
ALTER TABLE `trx_usulan_status`
  MODIFY `usulan_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ref_dosen`
--
ALTER TABLE `ref_dosen`
  ADD CONSTRAINT `ref_dosen_ibfk_1` FOREIGN KEY (`jabfung_id`) REFERENCES `ref_jabatan_fungsional` (`jabfung_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ref_dosen_ibfk_2` FOREIGN KEY (`pendidikan_id`) REFERENCES `ref_pendidikan` (`pendidikan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ref_dosen_ibfk_3` FOREIGN KEY (`prodi_id`) REFERENCES `ref_prodi` (`prodi_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ref_iku`
--
ALTER TABLE `ref_iku`
  ADD CONSTRAINT `ref_iku_ibfk_1` FOREIGN KEY (`jenis_skema_id`) REFERENCES `ref_jenis_skema` (`jenis_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ref_kriteria_penilaian`
--
ALTER TABLE `ref_kriteria_penilaian`
  ADD CONSTRAINT `ref_kriteria_penilaian_ibfk_1` FOREIGN KEY (`tahap_review_id`) REFERENCES `ref_tahap_review` (`tahap_review_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ref_mahasiswa`
--
ALTER TABLE `ref_mahasiswa`
  ADD CONSTRAINT `ref_mahasiswa_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `ref_prodi` (`prodi_id`);

--
-- Constraints for table `ref_tahap_review`
--
ALTER TABLE `ref_tahap_review`
  ADD CONSTRAINT `ref_tahap_review_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `ref_status` (`status_id`) ON UPDATE CASCADE;

--
-- Constraints for table `role_has_menus`
--
ALTER TABLE `role_has_menus`
  ADD CONSTRAINT `role_has_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trx_skema`
--
ALTER TABLE `trx_skema`
  ADD CONSTRAINT `trx_skema_ibfk_2` FOREIGN KEY (`jenis_skema_id`) REFERENCES `ref_jenis_skema` (`jenis_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_skema_file`
--
ALTER TABLE `trx_skema_file`
  ADD CONSTRAINT `trx_skema_file_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_skema_luaran_tambahan`
--
ALTER TABLE `trx_skema_luaran_tambahan`
  ADD CONSTRAINT `trx_skema_luaran_tambahan_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_skema_luaran_tambahan_ibfk_2` FOREIGN KEY (`luaran_tambahan_id`) REFERENCES `ref_luaran_tambahan` (`luaran_tambahan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_skema_luaran_wajib`
--
ALTER TABLE `trx_skema_luaran_wajib`
  ADD CONSTRAINT `trx_skema_luaran_wajib_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_skema_luaran_wajib_ibfk_2` FOREIGN KEY (`luaran_wajib_id`) REFERENCES `ref_luaran_wajib` (`luaran_wajib_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_skema_pendanaan`
--
ALTER TABLE `trx_skema_pendanaan`
  ADD CONSTRAINT `trx_skema_pendanaan_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_skema_settings`
--
ALTER TABLE `trx_skema_settings`
  ADD CONSTRAINT `trx_skema_settings_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan`
--
ALTER TABLE `trx_usulan`
  ADD CONSTRAINT `trx_usulan_ibfk_1` FOREIGN KEY (`trx_skema_id`) REFERENCES `trx_skema` (`trx_skema_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_anggota_dosen`
--
ALTER TABLE `trx_usulan_anggota_dosen`
  ADD CONSTRAINT `trx_usulan_anggota_dosen_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `ref_dosen` (`dosen_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_anggota_dosen_ibfk_2` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_anggota_dosen_luar`
--
ALTER TABLE `trx_usulan_anggota_dosen_luar`
  ADD CONSTRAINT `trx_usulan_anggota_dosen_luar_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_anggota_mhs`
--
ALTER TABLE `trx_usulan_anggota_mhs`
  ADD CONSTRAINT `trx_usulan_anggota_mhs_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_anggota_mhs_ibfk_2` FOREIGN KEY (`mhs_id`) REFERENCES `ref_mahasiswa` (`mhs_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_dana`
--
ALTER TABLE `trx_usulan_dana`
  ADD CONSTRAINT `trx_usulan_dana_ibfk_1` FOREIGN KEY (`pendanaan_id`) REFERENCES `trx_skema_pendanaan` (`pendanaan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_dana_ibfk_2` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_file`
--
ALTER TABLE `trx_usulan_file`
  ADD CONSTRAINT `trx_usulan_file_ibfk_1` FOREIGN KEY (`skema_file_id`) REFERENCES `trx_skema_file` (`skema_file_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_file_ibfk_2` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_iku`
--
ALTER TABLE `trx_usulan_iku`
  ADD CONSTRAINT `trx_usulan_iku_ibfk_1` FOREIGN KEY (`iku_id`) REFERENCES `ref_iku` (`iku_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_iku_ibfk_2` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_luaran_tambahan`
--
ALTER TABLE `trx_usulan_luaran_tambahan`
  ADD CONSTRAINT `trx_usulan_luaran_tambahan_ibfk_1` FOREIGN KEY (`luaran_tambahan_id`) REFERENCES `ref_luaran_tambahan` (`luaran_tambahan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_luaran_tambahan_ibfk_2` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_luaran_wajib`
--
ALTER TABLE `trx_usulan_luaran_wajib`
  ADD CONSTRAINT `trx_usulan_luaran_wajib_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_luaran_wajib_ibfk_2` FOREIGN KEY (`luaran_wajib_id`) REFERENCES `ref_luaran_wajib` (`luaran_wajib_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_mitra`
--
ALTER TABLE `trx_usulan_mitra`
  ADD CONSTRAINT `trx_usulan_mitra_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_reviewer`
--
ALTER TABLE `trx_usulan_reviewer`
  ADD CONSTRAINT `trx_usulan_reviewer_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_reviewer_ibfk_3` FOREIGN KEY (`dosen_id`) REFERENCES `ref_dosen` (`dosen_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_reviewer_ibfk_4` FOREIGN KEY (`tahap_review_id`) REFERENCES `ref_tahap_review` (`tahap_review_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_reviewer_nilai`
--
ALTER TABLE `trx_usulan_reviewer_nilai`
  ADD CONSTRAINT `trx_usulan_reviewer_nilai_ibfk_3` FOREIGN KEY (`nilai_id`) REFERENCES `ref_nilai` (`nilai_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_reviewer_nilai_ibfk_4` FOREIGN KEY (`kriteria_id`) REFERENCES `ref_kriteria_penilaian` (`kriteria_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_reviewer_nilai_ibfk_5` FOREIGN KEY (`usulan_reviewer_id`) REFERENCES `trx_usulan_reviewer` (`usulan_reviewer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `trx_usulan_status`
--
ALTER TABLE `trx_usulan_status`
  ADD CONSTRAINT `trx_usulan_status_ibfk_1` FOREIGN KEY (`usulan_id`) REFERENCES `trx_usulan` (`usulan_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_usulan_status_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `ref_status` (`status_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
