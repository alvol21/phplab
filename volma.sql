-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Янв 19 2020 г., 10:38
-- Версия сервера: 8.0.1-dmr
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `volma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `loading_and_unloading_equipment`
--

CREATE TABLE `loading_and_unloading_equipment` (
  `number_of_equipment` int(11) NOT NULL,
  `short_characteristic` varchar(50) NOT NULL,
  `type_of_equipment` varchar(50) NOT NULL,
  `Workers_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `loading_and_unloading_equipment`
--

INSERT INTO `loading_and_unloading_equipment` (`number_of_equipment`, `short_characteristic`, `type_of_equipment`, `Workers_number`) VALUES
(1, 'trucks used for loading and unloading operations', 'big loader car', 5),
(2, 'trucks used for loading and unloading operations', 'big loader car', 5),
(3, 'trucks used for loading and unloading operations', 'big loader car', 6),
(4, 'trucks used for loading and unloading operations', 'light loader car', 6),
(5, 'trucks used for loading and unloading operations', 'light loader car', 7),
(6, 'trucks used for loading and unloading operations', 'light loader car', 7),
(7, 'At a height of 10 m, is able to lift a load of2,5t', 'backhoe loader', 8),
(8, 'At a height of 10 m, is able to lift a load of2,5t', 'backhoe loader', 8),
(9, 'At a height of 10 m, is able to lift a load of2,5t', 'backhoe loader', 9),
(10, 'At a height of 10 m, is able to lift a load of2,5t', 'backhoe loader', 9),
(11, 'At a height of 10 m, is able to lift a load of1,5t', 'Stackers', 10),
(12, 'At a height of 10 m, is able to lift a load of1,5t', 'Stackers', 10),
(13, 'At a height of 10 m, is able to lift a load of1,5t', 'Stackers', 11),
(14, 'At a height of 10 m, is able to lift a load of1,5t', 'Stackers', 5),
(15, 'At a height of 10 m, is able to lift a load of1,5t', 'Stackers', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `Logistics_activities1`
--

CREATE TABLE `Logistics_activities1` (
  `Order_number` int(11) NOT NULL,
  `date_of_order_sending` date NOT NULL,
  `date_of_receipt_of_the_order_by_the_customer` date NOT NULL,
  `article_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Logistics_activities1`
--

INSERT INTO `Logistics_activities1` (`Order_number`, `date_of_order_sending`, `date_of_receipt_of_the_order_by_the_customer`, `article_number`) VALUES
(1, '2001-01-20', '2001-02-20', 1111),
(2, '2002-01-20', '2002-02-20', 2222),
(3, '2003-01-20', '2003-02-20', 3333),
(4, '2004-01-20', '2004-02-20', 4444),
(5, '2005-01-20', '2005-02-20', 5555),
(6, '2006-01-20', '2006-02-20', 6666),
(7, '2007-01-20', '2007-02-20', 7777),
(8, '2008-01-20', '2008-02-20', 8888),
(9, '2009-01-20', '2009-02-20', 9999),
(10, '2010-01-20', '2010-02-20', 1011),
(11, '2011-01-20', '2011-02-20', 1101),
(12, '2012-01-20', '2012-02-20', 1102),
(13, '2013-01-20', '2013-02-20', 1103),
(14, '2014-01-20', '2014-02-20', 1104),
(15, '2015-01-20', '2015-02-20', 1105);

-- --------------------------------------------------------

--
-- Структура таблицы `Material3`
--

CREATE TABLE `Material3` (
  `article_number_materials` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Material3`
--

INSERT INTO `Material3` (`article_number_materials`, `name`) VALUES
(10000, 'Gyps'),
(11000, 'Gyps_SpecialDobavki'),
(12000, 'Cement_Izvest'),
(13000, 'Gyps_Pesok_Steklo'),
(14000, 'Izvest_SpecialDobavki'),
(15000, 'Cement_SpecialDobavki'),
(16000, 'Gyps_Pesok_Izvest'),
(20000, 'Cement'),
(21000, 'Keramzit'),
(30000, 'Pesok'),
(40000, 'Izvest'),
(50000, 'Steklo'),
(60000, 'Special_dobavki'),
(70000, 'Gyps_and_Steklo'),
(80000, 'Cement_Pesok'),
(90000, 'Cement_Pesok_SpecialDobavki');

-- --------------------------------------------------------

--
-- Структура таблицы `Product3`
--

CREATE TABLE `Product3` (
  `article_number` int(11) NOT NULL,
  `name1` varchar(40) NOT NULL,
  `short_characteristic_of_product` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Product3`
--

INSERT INTO `Product3` (`article_number`, `name1`, `short_characteristic_of_product`) VALUES
(1011, 'VOLMA', '123'),
(1101, 'VOLMA-BLOCK', ''),
(1102, 'VOLMA-DACHA', ''),
(1103, 'VOLMA-TERMOFACADE', ''),
(1104, 'VOLMA-List Montazh', ''),
(1105, 'VOLMA-MONTAZH', ''),
(1111, 'Volma-Sloi', 'VOLMA-Sloy is a dry plaster mix based on light gypsum binder and filler with mineral and chemical additives to assure strong adhesion, water-retaining capacity, and optimal service life.'),
(2222, 'VOLMA Gips Active', 'VOLMA Gips Active is a dry plaster mix based on gypsum binder and light filler with mineral and chemical additives to assure strong adhesion, water-retaining capacity, and optimal service life.'),
(3333, 'VOLMA-PLAST', 'VOLMA-Plast is a dry plaster mix based on gypsum binder and light filler with mineral and chemical additives to assure strong adhesion, water-retaining capacity, and optimal service life.'),
(4444, 'VOLMA-TSOKOL', 'VOLMA-Tsokol is a dry crack-resistant fiber-reinforced smoothing cement plaster based on Portland cement with modifying and mineral additives for improved mortar performance. This mix is intended for manual application inside and from the outside of the building. '),
(5555, 'VOLMA-Cement Active', 'VOLMA-Cement Active is a dry light cement lime levelling crack-resistant plaster mix based on Portland cement and hydrated lime with light filling agent and mineral additives to improve mortar performance, intended for machined application to indoor surfaces.'),
(6666, 'VOLMA-LUXE', ''),
(7777, 'VOLMA-Kholst', ''),
(8888, 'VOLMA-AQUASLOY', ''),
(9999, 'VOLMA-AQUAPLAST', '');

-- --------------------------------------------------------

--
-- Структура таблицы `Product_Materials`
--

CREATE TABLE `Product_Materials` (
  `article_number` int(11) NOT NULL,
  `article_number_materials` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Product_Materials`
--

INSERT INTO `Product_Materials` (`article_number`, `article_number_materials`) VALUES
(1011, 15000),
(1101, 16000),
(1102, 70000),
(1103, 80000),
(1104, 90000),
(1105, 11000),
(1111, 10000),
(2222, 20000),
(3333, 70000),
(4444, 80000),
(5555, 90000),
(6666, 11000),
(7777, 12000),
(8888, 13000),
(9999, 14000);

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `num_sale` int(11) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `Workers_number` int(11) NOT NULL,
  `article_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`num_sale`, `total`, `Workers_number`, `article_number`) VALUES
(1, '100.00', 12, 1111),
(2, '101.00', 12, 2222),
(3, '102.00', 13, 2222),
(4, '103.00', 14, 4444),
(5, '104.00', 15, 5555),
(6, '105.00', 12, 6666),
(7, '106.00', 13, 2222),
(8, '107.00', 14, 8888),
(9, '108.00', 15, 9999),
(10, '109.00', 12, 2222),
(11, '110.00', 13, 1101),
(12, '111.00', 14, 1102),
(13, '112.00', 15, 1103),
(14, '113.00', 12, 2222),
(15, '114.00', 13, 1105);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `Workers3`
--

CREATE TABLE `Workers3` (
  `Workers_number` int(11) NOT NULL,
  `Wrk_name` varchar(50) NOT NULL,
  `Wrk_position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Workers3`
--

INSERT INTO `Workers3` (`Workers_number`, `Wrk_name`, `Wrk_position`) VALUES
(1, 'Akulov Alexey Petrovich', 'Accountant'),
(2, 'Aliev Ilnar Rachidovich', 'Accountant'),
(3, 'Aldorova Irina Gennadievna', 'Designer'),
(4, 'Velichenko Viktor Alexandrovich', 'Designer'),
(5, 'Dmitriev Igor Vladimirovich', 'Loader'),
(6, 'Ivanov Andrey Petrovich', 'Loader'),
(7, 'Gromov Grigory Olegovich', 'Loader'),
(8, 'Dulnev Michail Sergeevich', 'Loader'),
(9, 'Serkov Kirill Igorevich', 'Loader'),
(10, 'Fedorov Maksim Pavlovich', 'Loader'),
(11, 'Nemchuk Grigory Dmitrovich', 'Loader'),
(12, 'Petrov Vladimir Nikolaevich', 'Marketer'),
(13, 'Sidorenko Sergey Andreevich', 'Marketer'),
(14, 'Oberemko Georgy Alekseevich', 'Marketer'),
(15, 'Ivanov Ivan Ivanich', 'Manager');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `loading_and_unloading_equipment`
--
ALTER TABLE `loading_and_unloading_equipment`
  ADD PRIMARY KEY (`number_of_equipment`);

--
-- Индексы таблицы `Logistics_activities1`
--
ALTER TABLE `Logistics_activities1`
  ADD PRIMARY KEY (`Order_number`);

--
-- Индексы таблицы `Material3`
--
ALTER TABLE `Material3`
  ADD PRIMARY KEY (`article_number_materials`);

--
-- Индексы таблицы `Product3`
--
ALTER TABLE `Product3`
  ADD PRIMARY KEY (`article_number`);

--
-- Индексы таблицы `Product_Materials`
--
ALTER TABLE `Product_Materials`
  ADD PRIMARY KEY (`article_number`,`article_number_materials`);

--
-- Индексы таблицы `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`num_sale`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Workers3`
--
ALTER TABLE `Workers3`
  ADD PRIMARY KEY (`Workers_number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Workers3`
--
ALTER TABLE `Workers3`
  MODIFY `Workers_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
