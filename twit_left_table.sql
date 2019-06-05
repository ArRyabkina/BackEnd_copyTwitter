-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 06:08
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ann_pn_17`
--

-- --------------------------------------------------------

--
-- Структура таблицы `twit_left_table`
--

CREATE TABLE `twit_left_table` (
  `id` int(10) NOT NULL,
  `text` varchar(355) NOT NULL,
  `link` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twit_left_table`
--

INSERT INTO `twit_left_table` (`id`, `text`, `link`) VALUES
(1, 'ПУтиным', 'https://vc.ru/flood/22448-youtube-for-designers'),
(2, 'Школьный', 'https://vc.ru/flood/22448-youtube-for-designers'),
(3, 'Учеба', 'https://vc.ru/flood/22448-youtube-for-designers'),
(4, 'Купил_книгу', 'https://vc.ru/flood/22448-youtube-for-designers'),
(5, 'Иду-домой', 'https://vc.ru/flood/22448-youtube-for-designers'),
(6, 'ПОшел_домой', 'https://vc.ru/flood/22448-youtube-for-designers'),
(7, 'СИжу_на_Уроках', 'https://vc.ru/flood/22448-youtube-for-designers'),
(8, 'Играл_в_игры_сто_часов_подряд', 'https://vc.ru/flood/22448-youtube-for-designers'),
(9, 'саморазвитие', 'https://vc.ru/flood/22448-youtube-for-designers'),
(10, 'Иду_домой_младшие', 'https://vc.ru/flood/22448-youtube-for-designers');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
