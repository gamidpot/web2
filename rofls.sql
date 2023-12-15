-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2023 г., 15:31
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rofls`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rofls`
--

CREATE TABLE `rofls` (
  `id` int NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rofls`
--

INSERT INTO `rofls` (`id`, `image`, `name`, `price`) VALUES
(1, 'https://avatars.mds.yandex.net/i?id=d03eec53d6a9b3287014725efcfa835adf67935a-11031910-images-thumbs&n=13', 'Гангер', 5999),
(2, 'https://avatars.mds.yandex.net/i?id=37401ebec2c49ffd81c57e126e8f373b-5305537-images-thumbs&n=13', 'Собирашка', 7999),
(3, 'https://avatars.mds.yandex.net/get-images-cbir/1525498/oO95NbMXBQhznZTHi0jBRA6354/ocr', 'Мажор ', 19999),
(4, 'https://images-na.ssl-images-amazon.com/images/I/51OsjAi-fnL._SL1245_.jpg', 'ХЦЕшник', 999);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rofls`
--
ALTER TABLE `rofls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rofls`
--
ALTER TABLE `rofls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
