-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2020 г., 19:01
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `upgame`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `title` varchar(40) NOT NULL COMMENT 'Название игры',
  `image` varchar(100) NOT NULL COMMENT 'Картинка игры',
  `platform` varchar(30) NOT NULL COMMENT 'Значек платформы',
  `janr` varchar(20) NOT NULL COMMENT 'Жанр',
  `sale` int(2) NOT NULL COMMENT 'Скидка',
  `price` int(5) NOT NULL COMMENT 'Цена',
  `href` varchar(50) NOT NULL COMMENT 'Ссылка на страницу с игрой',
  `popular` varchar(2) NOT NULL,
  `clas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`id_game`, `title`, `image`, `platform`, `janr`, `sale`, `price`, `href`, `popular`, `clas`) VALUES
(1, 'Grand Theft Auto V', '/img/gta5/gta-v.jpg', '/img/platform/key.png', 'Экшены, Приключения', 79, 309, '/game/grand-theft-auto-v', 'y', 'action'),
(2, 'Red Dead Redemption 2', '/img/RedDeadRedemption2/red-dead-redemption-2.jpg', '/img/platform/key.png', 'Экшены, RPG', 82, 429, '/game/red-dead-redemption-2', 'y', 'action'),
(3, 'PUBG', '../img/pubg/playerunknowns-battlegrounds.jpg', '../img/platform/steam.png', 'Экшены, Приключения', 62, 359, '/game/playerunknowns-battlegrounds', 'y', 'action'),
(4, 'Metro Exodus', '../img/metroExodus/metro-exodus-steam.jpg', '../img/platform/steam.png', 'Экшены', 81, 289, '/game/metro-exodus', 'y', 'zombi'),
(5, 'Overwatch', '../img/overwatch/overwatch1.jpg', '../img/platform/battle.png', 'Экшены', 72, 279, '/game/overwatch', 'y', 'action'),
(6, 'The Witcher 3: Wild Hunt', '../img/the-witcher-3-wild-hunt/the-witcher-3-wild-hunt.jpg', '../img/platform/key.png', 'RPG', 89, 129, '/game/the-witcher-3-wild-hunt', '', 'rpg'),
(7, 'The Elder Scrolls V: Skyrim', '../img/the-elder-scrolls-v-skyrim/the-elder-scrolls-v-skyrim.jpg', '../img/platform/steam.png', 'RPG', 72, 109, '/game/the-elder-scrolls-v-skyrim', '', 'rpg'),
(8, 'Dying Light', '../img/dying-light/dying-light.jpg', '../img/platform/steam.png', 'RPG', 85, 159, '/game/dying-light', '', 'zombi'),
(9, 'Fallout 4', '../img/fallout-4/fallout-4.jpg', '../img/platform/steam.png', 'RPG', 90, 85, '/game/fallout-4', '', 'rpg'),
(10, 'Far Cry 5', '../img/far-cry-5/far-cry-5.jpg', '../img/platform/uplay.png', 'Экшены, Приключения', 87, 255, '/game/far-cry-5', '', 'prikl'),
(11, 'Cyberpunk 2077', '../img/cyberpunk-2077/cyberpunk-2077.jpg', '../img/platform/key.png', 'RPG', 25, 1482, '/game/cyberpunk-2077', '', 'rpg'),
(12, 'Rust', '/img/rust/rust.jpg', '/img/platform/steam.png', 'Экшены, Приключения', 77, 139, '/game/rust', '', 'prikl'),
(13, 'DOOM Eternal', '/img/doom-eternal/doom-eternal (1).jpg', '/img/platform/steam.png', 'Экшены', 25, 1499, '/game/doom-eternal', 'y', 'zombi'),
(14, 'RESIDENT EVIL 3', '/img/resident-evil-3/resident-evil-3 (1).jpg', '/img/platform/steam.png', 'Экшены', 56, 872, '/game/resident-evil-3', 'y', 'zombi'),
(15, 'Dark Souls 3', '/img/dark-souls-3/dark-souls-3.jpg', '/img/platform/steam.png', 'Экшены', 90, 189, '/game/dark-souls-3', '', 'action'),
(16, 'Battlefield 1', '/img/battlefield-1/battlefield-1.jpg', '/img/platform/origin.png', 'Экшены', 75, 289, '/game/battlefield-1', 'y', 'action'),
(17, 'Terraria', '/img/terraria/terraria.jpg', '/img/platform/steam.png', 'Экшены, RPG', 64, 89, '/game/terraria', 'y', 'action'),
(18, 'Fallout 76', '/img/fallout-76/fallout-76.jpg', '/img/platform/key.png', 'RPG', 80, 249, '/game/fallout-76', 'y', 'rpg'),
(19, 'FIFA 19', '/img/fifa-2019/fifa-19.jpg', '/img/platform/origin.png', 'Спорт', 90, 299, '/game/fifa-19', '', 'sport'),
(20, 'Euro Truck Simulator 2', '/img/euro-truck-simulator-2/euro-truck-simulator-2.jpg', '/img/platform/steam.png', 'Симулятор', 92, 75, '/game/euro-truck-simulator-2', '', 'simul'),
(21, 'The Sims 4', '/img/the-sims-4/the-sims-4.jpg', '/img/platform/origin.png', 'Стратегия, Симулятор', 88, 239, '/game/the-sims-4', '', 'strateg'),
(22, 'Just Cause 4', '/img/just-cause-4/just-cause-4.jpg', '/img/platform/steam.png', 'Экшены, Приключения', 80, 265, '/game/not-available', '', 'prikl'),
(23, 'DiRT Rally', '/img/dirt-rally/dirt-rally.jpg', '/img/platform/steam.png', 'Гонки', 94, 45, '/game/not-available', '', 'gonki');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id_review`, `name`, `review`) VALUES
(1, 'Егор', 'Сайт супер, очень рад покупке!'),
(2, 'Антон', 'Действительно четкие цены, купил все работает!'),
(3, 'Fin', 'Спасибо за скидки');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
