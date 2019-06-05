-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 06:07
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
-- Структура таблицы `twit`
--

CREATE TABLE `twit` (
  `id` int(11) NOT NULL,
  `clova` varchar(355) NOT NULL,
  `account_image` varchar(355) NOT NULL,
  `account_name` varchar(355) NOT NULL,
  `account_link` varchar(355) NOT NULL,
  `post_image` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twit`
--

INSERT INTO `twit` (`id`, `clova`, `account_image`, `account_name`, `account_link`, `post_image`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempora, cum sed saepe sint labore assumenda dignissimos obcaecati quidem, quaerat cumque dolor ad molestias eveniet repellendus perspiciatis nihil! Dolorum, odio.', 'images/post1.jpg', 'Habr', '@lorem ipsum dolor sit amet', 'images/habr.jpg'),
(4, 'Just play this game? It is really cool. ))))', 'images/avatar.jpg', '@test76867392', '#', 'images/4.jpg'),
(5, 'What aaaaa', 'images/avatar.jpg', '@test76867392', '#', 'images/2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `twit`
--
ALTER TABLE `twit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `twit`
--
ALTER TABLE `twit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
