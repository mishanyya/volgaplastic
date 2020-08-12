-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 14 2019 г., 13:41
-- Версия сервера: 10.2.23-MariaDB
-- Версия PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u444091408_volga`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lodki`
--

CREATE TABLE `lodki` (
  `nazvanie` varchar(50) NOT NULL COMMENT 'название',
  `foto` varchar(50) NOT NULL COMMENT 'ссылка на фото',
  `dlina` varchar(50) NOT NULL COMMENT 'длина',
  `shirina` varchar(50) NOT NULL COMMENT 'ширина',
  `vysota` varchar(50) NOT NULL COMMENT 'высота',
  `passaziro` varchar(50) NOT NULL COMMENT 'пассажировместимость',
  `nagruzka` varchar(50) NOT NULL COMMENT 'нагрузка',
  `moshnost` varchar(50) NOT NULL COMMENT 'мощность',
  `ves` varchar(50) NOT NULL COMMENT 'вес',
  `tcena` varchar(50) NOT NULL COMMENT 'цена'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='про лодки';

--
-- Дамп данных таблицы `lodki`
--

INSERT INTO `lodki` (`nazvanie`, `foto`, `dlina`, `shirina`, `vysota`, `passaziro`, `nagruzka`, `moshnost`, `ves`, `tcena`) VALUES
('Бударка 8700', '1422774791.png', '8,7', '1,65', '', '9', '600', '15', '219', '95000 115000'),
('Кальмарик', '1422774690.png', '3,10', '1,10', '', '2', '250', '5', '38', '28000'),
('КАРТОП Лисенок', '1422774075.png', '3,0', '1,25', '0,42', '2', '180', '15', '45', '25000'),
('Кулас одно-двух местный', '1422774852.png', '3,5/4,1', '1,05', '0,26', '1/2', '', '', '38/42', '23000/25000'),
('Мариман', '1422774446.png', '4,70', '1,70', '0,82', '5', '500', '80', '200', '145000'),
('Орион 4,30', '1422774273.png', '4,30', '1,45', '0,50', '30', '380', '15', '60', '45000'),
('Охотник 007', '1422774182.png', '3,70', '1,35', '0,50', '3', '380', '15', '55', '45000'),
('Подгребок', '1422774634.png', '2,85', '1,15', '', '2', '250', '5', '45', '25000'),
('Рыбак', '1422774537.png', '4,70', '1,68', '0,68', '4', '450', '60', '180', '80000/100000'),
('Спринтер 6000', '1422779854.png', '6,0', '2,25', '', '5', '580', '115', '400', '225000'),
('Статус 5300', '1422779885.png', '5,3', '2,0', '', '5', '450', '90', '300', '170000'),
('Южный', '1422774351.png', '5,30', '2,0', '0,85', '5', '600', '150', '250', '160000'),
('Юла 3600', '1422779927.png', '3,6', '1,65', '', '3', '300', '15', '95', '45000'),
('Юла 3600Р', '1422773256.png', '3,6', '1,65', '', '3', '300', '15', '95', '50000');

-- --------------------------------------------------------

--
-- Структура таблицы `osnova`
--

CREATE TABLE `osnova` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `metka` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `osnova`
--

INSERT INTO `osnova` (`id`, `text`, `metka`) VALUES
(1, 'ПКФ ООО \"Волгапластик\"', 'h1'),
(2, 'Лодки и бударки,  катера и охотничьи  куласы - для отдыха, рыбалки, туристических прогулок.', 'h21'),
(3, 'Стоимость изготовления на заказ лодок, бударок, катеров и охотничьих куласов из пластика', 'h22'),
(4, '9378275550', 'tlf'),
(5, '9627522788', 'tlf'),
(6, '8512490989', 'tlf'),
(7, 'Проектирование и производство пластиковых лодок, катеров, яхт и плавсредств, под мотор и для рыбалки, по индивидуальному заказу.', 'h3'),
(8, 'Ремонт катеров и изготовление изделий из стеклопластика по индивидуальному заказу.', 'h3'),
(9, 'Гибкая система скидок.', 'h3'),
(10, 'Дополнительная комплектация (по желанию Заказчика)', 'h3'),
(11, 'Гибкая система скидок.', 'h3'),
(12, 'ГАРАНТИЯ НА ВСЕ ИЗДЕЛИЯ', 'h4'),
(13, 'Лодки изготавливаются только на заказ', 'h5'),
(14, 'Фотографии образцов предоставлены для ознакомления', 'h5'),
(15, 'г.Астрахань', 'h31');

-- --------------------------------------------------------

--
-- Структура таблицы `parol`
--

CREATE TABLE `parol` (
  `login` varchar(50) NOT NULL COMMENT 'логин',
  `parol` varchar(50) NOT NULL COMMENT 'пароль',
  `vrem_parol` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='таблица логина и пароля';

--
-- Дамп данных таблицы `parol`
--

INSERT INTO `parol` (`login`, `parol`, `vrem_parol`) VALUES
('volgaplastic@mail.ru', '5254abee9ce173de6b68c5976f1650292f5bbe3a', 77048);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lodki`
--
ALTER TABLE `lodki`
  ADD UNIQUE KEY `nazvanie` (`nazvanie`);

--
-- Индексы таблицы `osnova`
--
ALTER TABLE `osnova`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parol`
--
ALTER TABLE `parol`
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `osnova`
--
ALTER TABLE `osnova`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
