-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 16 2021 г., 06:13
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `scheduler`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `idS` int(5) NOT NULL COMMENT 'Ключ',
  `name` varchar(80) NOT NULL COMMENT 'Название сотрудника'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`idS`, `name`) VALUES
(3, 'Вася'),
(35, 'Влад'),
(25, 'Гена'),
(24, 'Данил'),
(29, 'Дима'),
(33, 'Динис'),
(22, 'Женя'),
(1, 'Иван'),
(34, 'Коля'),
(37, 'крейг'),
(31, 'Маша'),
(27, 'Михаил'),
(28, 'Никита'),
(5, 'Павел'),
(4, 'Пётр'),
(2, 'Петя'),
(23, 'Рома'),
(30, 'Саша'),
(26, 'Света'),
(21, 'Сергей'),
(36, 'Сэм'),
(38, 'Таня');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `idP` int(5) NOT NULL COMMENT 'Ключ',
  `work` varchar(35) NOT NULL COMMENT 'Название проекта',
  `Monday` varchar(50) DEFAULT NULL,
  `Tuesday` varchar(50) DEFAULT NULL,
  `Wednesday` varchar(50) DEFAULT NULL,
  `Thursday` varchar(50) DEFAULT NULL,
  `Friday` varchar(50) DEFAULT NULL,
  `Saturday` varchar(50) DEFAULT NULL,
  `Sunday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`idP`, `work`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`) VALUES
(27, 'Проект-1', 'Влад', 'Динис', 'Женя', 'Саша', 'Сергей', 'Пётр', 'Маша'),
(28, 'йцуйцу', 'Влад', 'Динис', 'Маша', 'Света', 'крейг', 'Саша', 'Сергей'),
(31, 'asdasd', 'Коля', 'Дима', 'крейг', 'Саша', 'Пётр', 'Рома', 'Никита'),
(39, 'выф', 'Дима', 'Гена', 'Дима', 'Света', 'Рома', 'Саша', ''),
(40, 'Проект-qwe', 'крейг', 'Женя', 'Никита', 'Сергей', 'Света', 'Рома', 'Саша'),
(41, 'фвыфв', '', '', 'Данил', '', 'Света', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idS`),
  ADD UNIQUE KEY `names` (`name`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idP`),
  ADD UNIQUE KEY `Works` (`work`),
  ADD KEY `Tuesday` (`Tuesday`),
  ADD KEY `Wednesday` (`Wednesday`),
  ADD KEY `Thursday` (`Thursday`),
  ADD KEY `Friday` (`Friday`),
  ADD KEY `Saturday` (`Saturday`),
  ADD KEY `Sunday` (`Sunday`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `idS` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Ключ', AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `idP` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Ключ', AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
