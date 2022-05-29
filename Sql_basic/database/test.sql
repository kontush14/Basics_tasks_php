-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: database:3306
-- Час створення: Трв 29 2022 р., 09:36
-- Версія сервера: 8.0.28
-- Версія PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `author` varchar(50) NOT NULL,
  `article` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `pages`
--

INSERT INTO `pages` (`id`, `author`, `article`) VALUES
(1, 'Petrov', 'In his article he talks about cars.'),
(2, 'Ivanov', 'Wrote an article on inflation.'),
(3, 'Sydorov', 'Invented a new chemical element.'),
(4, 'Osykina', 'She also wrote about cars.'),
(5, 'Vetrov', 'Wrote an article on how to develop design elements.');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `age` int NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `birthday`) VALUES
(1, 'Dmytro', 24, '1998-01-01'),
(2, 'Mykola', 21, '2000-05-02'),
(3, 'Light', 24, '1995-12-24'),
(4, 'Franz', 35, '1967-07-02');

-- --------------------------------------------------------

--
-- Структура таблиці `workers`
--

CREATE TABLE `workers` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `salary` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `workers`
--

INSERT INTO `workers` (`id`, `name`, `age`, `salary`) VALUES
(1, 'Dmytro', 23, 400),
(2, 'Petro', 25, 700),
(3, 'Zhenya', 23, 900),
(4, 'Mykola', 23, 1000),
(5, 'Ivan', 23, 700),
(6, 'Kyrylo', 28, 1000),
(7, 'Nikita', 26, 300),
(8, 'Svetlana', 24, 1200),
(9, 'Yaroslav', 30, 1200),
(10, 'Petro', 31, 1000);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
