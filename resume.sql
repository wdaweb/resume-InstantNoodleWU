-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `school` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(224) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `education`
--

INSERT INTO `education` (`id`, `school`, `education`, `major`, `from_year`, `to_year`, `text`) VALUES
(1, '中華大學', '學士學位', '資訊工程', '2015', '2019', '當班代');

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_content` varchar(230) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `job_name`, `com_name`, `job_content`, `from_year`, `from_mon`, `to_year`, `to_mon`) VALUES
(1, 'PT計時服務員', '星巴克', '烹煮咖啡', '2016年', '9月', '2018年', '9月');

-- --------------------------------------------------------

--
-- 資料表結構 `mydb`
--

CREATE TABLE `mydb` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mydb`
--

INSERT INTO `mydb` (`id`, `acc`, `pw`) VALUES
(1, 'abc', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `self`
--

CREATE TABLE `self` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `self_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `self`
--

INSERT INTO `self` (`id`, `name`, `username`, `tel`, `email`, `self_text`, `addr`) VALUES
(14, '吳勻皓', 'InstantNoodleWU', '0958902909', 'thedeath1943@hotmail.com', '我好帥', '110台北市信義區信義路五段7號');

-- --------------------------------------------------------

--
-- 資料表結構 `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `sen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_offr` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_site` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `status`
--

INSERT INTO `status` (`id`, `sen`, `job_type`, `salary`, `job_offr`, `job_site`, `lan`, `skill`) VALUES
(2, '四年', '全職', '40-50', '全端網頁工程師', '台北市', '英文,中文', 'php');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mydb`
--
ALTER TABLE `mydb`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `self`
--
ALTER TABLE `self`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mydb`
--
ALTER TABLE `mydb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `self`
--
ALTER TABLE `self`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
