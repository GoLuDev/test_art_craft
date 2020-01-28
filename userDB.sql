-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 28 2020 г., 11:16
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_art_craft`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `api_key`, `password`) VALUES
(4, 'User2', 'user2@mail.com', '', '12345678'),
(6, 'Юзя', 'user3@mail.com', '', '12345678'),
(7, 'User5', 'user5@mail.com', '', '12345678'),
(9, 'User7', 'user7@mail.com', '', '12345678'),
(10, 'User8', 'user8@mail.com', '', '12345678'),
(15, 'User', 'user@mail.com', '', '12345678'),
(16, 'User10', 'user10@mail.com', '', '12345678'),
(21, 'User15', 'user15@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(22, 'User16', 'user16@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(23, 'user17', 'user17@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(24, 'User18', 'user18@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(25, 'User19', 'user19@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(29, 'User20', 'user20@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(30, 'dsfg', 'sf@asd', '', 'b4b147bc522828731f1a016bfa72c073'),
(32, 'asd', 'asda6@aw8', '', '5dbbf50fe6c4bebcf7a0220fbae17009'),
(33, 'uasd', 'asd@awed', '', '202cb962ac59075b964b07152d234b70'),
(34, 'User21', 'user21@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(36, 'User22', 'user22@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(38, 'User23', 'user23@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(40, 'User24', 'user24@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(41, 'User25', 'user25@mail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(42, 'User26', 'user26@mail.com', 'ff4cd789317fbb1441e2d062979ceca3295d031e', '25d55ad283aa400af464c76d713c07ad'),
(43, 'User27', 'user27@mail.com', '09500b7a837cb34b58be012cf055d6901a1b04bf', '25d55ad283aa400af464c76d713c07ad'),
(44, 'User28', 'user28@mail.com', 'e952f2754c9c4d0417c83f4f51041f2e4b6499de', '25d55ad283aa400af464c76d713c07ad'),
(45, 'User29', 'user29@mail.com', 'a66034e5cec5aee94412bd67682b0e03d9aa5573', '25d55ad283aa400af464c76d713c07ad'),
(46, 'User30', 'user30@mail.com', '39c0848d5631ccddd9a1e037d31b8df6ffda4ab6', '25f9e794323b453885f5181f1b624d0b'),
(47, 'User31', 'user31@mail.com', 'f637b9ca32aeac66e35af80958313a8f92f2cd0a', '25d55ad283aa400af464c76d713c07ad');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
