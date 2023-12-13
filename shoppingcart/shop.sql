-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-01-27 03:57:35
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shop`
--
CREATE DATABASE IF NOT EXISTS `product` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `product`;

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `chocolate` (
  `data-pid` VARCHAR(15) NOT NULL DEFAULT '',
  `data-name` varchar(50) NOT NULL DEFAULT '',
  `data-brand` varchar(10) NOT NULL DEFAULT '',
  `data-price` FLOAT NOT NULL DEFAULT '0'
) 

/**ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='圖書資料';

--
-- 資料表的匯出資料 `books`
--/**('1423219500101', '義美杏仁巧克球(黑可可)117g', '義美', 89.0)
('1423062400101', 'KitKat威化巧克力濃黑巧克力口味3入', 'KitKat', 39.0),
('1423113600101', '77乳加迷你量販包', '77', 129.0)**/

INSERT INTO `chocolate` (`data-pid`, `data-name`, `data-brand`, `data-price`) 
VALUES

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
