-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2018 г., 21:14
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `login` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`login`, `img`) VALUES
('admin', 'http://auth/images/6158163a.jpg'),
('admin', 'http://auth/images/9de068d6.jpg'),
('admin', 'http://auth/images/3ec0a3e8.jpg'),
('admin', 'http://auth/images/c43162e6.jpg'),
('admin', 'http://auth/images/574577f7.jpg'),
('admin', 'http://auth/images/77acd57f.jpg'),
('admin', 'http://auth/images/e53f05ab.jpg'),
('admin', 'http://auth/images/7553135f.jpg'),
('admin', 'http://auth/images/8f907136.jpg'),
('admin', 'http://auth/images/56988c5b.jpg'),
('Pluto', 'http://auth/images/14a8420e.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `rank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `rank`) VALUES
(1, 'admin', '55a8cd3a7472d1d03970165d500552ab', 'admin'),
(2, 'Pluto', '1f2f9e4741c4b9631063b52d4cee0d5d', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
