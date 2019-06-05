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
-- Структура таблицы `twit_right_table`
--

CREATE TABLE `twit_right_table` (
  `id` int(10) NOT NULL,
  `name` varchar(355) NOT NULL,
  `link_ac` varchar(355) NOT NULL,
  `text_link` varchar(355) NOT NULL,
  `link_btn` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twit_right_table`
--

INSERT INTO `twit_right_table` (`id`, `name`, `link_ac`, `text_link`, `link_btn`, `img`) VALUES
(1, '@onediorussia', '#', 'Onedio.ru', '#', 'images/1.jpg'),
(2, '@ktvsktvs', '#', 'Катавасия', '#', 'images/1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
