-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2022 г., 09:52
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `combonate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animal`
--

CREATE TABLE `animal` (
  `ID_animal` int(11) NOT NULL,
  `ID_type` int(11) DEFAULT NULL,
  `ID_personality` int(11) DEFAULT NULL,
  `ID_gender` int(11) DEFAULT NULL,
  `Age` varchar(32) DEFAULT NULL,
  `Date_of_birth` varchar(32) DEFAULT NULL,
  `Nickname` varchar(32) DEFAULT NULL,
  `ID_breed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `animal`
--

INSERT INTO `animal` (`ID_animal`, `ID_type`, `ID_personality`, `ID_gender`, `Age`, `Date_of_birth`, `Nickname`, `ID_breed`) VALUES
(1, 2, 3, 1, '3 года', '17.04.2019', 'Трой', 1),
(2, 1, 2, 2, '2 года', '14.10.2020', 'Ава', 1),
(3, 1, 3, 1, '5 месяцев', '28.01.2022', 'Фред', 2),
(4, 2, 3, 2, '4 месяца', '19.02.2022', 'Дана', 1),
(5, 2, 2, 1, '5 лет', '24.05.2017', 'Кузя', 2),
(6, 2, 3, 1, '3 года', '03.07.2018', 'Мартин', 1),
(7, 2, 1, 1, '6 лет', '30.08.2018', 'Дик и Джек', 2),
(8, 2, 3, 1, '4 месяца', '07.02.2022', 'Буч', 2),
(9, 2, 2, 2, '2 года', '20.03.2020', 'Лэя', 1),
(10, 1, 3, 2, '5 лет', '24.10.2016', 'Адель', 2),
(11, 1, 3, 1, '5 лет', '20.04.2017', 'Рэй', 2),
(12, 1, 1, 2, '4 года', '14.01.2018', 'Бэтти', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `breed`
--

CREATE TABLE `breed` (
  `ID_breed` int(11) NOT NULL,
  `Name_breed` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `breed`
--

INSERT INTO `breed` (`ID_breed`, `Name_breed`) VALUES
(1, 'Породистая'),
(2, 'Непородистая');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `ID_education` int(11) NOT NULL,
  `Name_education` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`ID_education`, `Name_education`) VALUES
(1, 'Профессиональное образование'),
(2, 'Общее образование');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `ID_employee` int(11) NOT NULL,
  `Name_employee` varchar(32) DEFAULT NULL,
  `Surname_employee` varchar(32) DEFAULT NULL,
  `Patronymic_employee` varchar(32) DEFAULT NULL,
  `Contact_details_employee` varchar(15) DEFAULT NULL,
  `ID_post` int(11) NOT NULL,
  `ID_education` int(11) DEFAULT NULL,
  `ID_gender` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`ID_employee`, `Name_employee`, `Surname_employee`, `Patronymic_employee`, `Contact_details_employee`, `ID_post`, `ID_education`, `ID_gender`) VALUES
(1, 'Марго', 'Сусаева', 'Алексеевна', '9313738249', 5, 1, 2),
(2, 'Мария', 'Волкова', 'Олеговна', '9922842842', 2, 1, 2),
(3, 'Алексей', 'Дмитриев', 'Викторович', '9422944928', 1, 1, 1),
(4, 'Павел', 'Пастушкин', 'Викторович', '9168328372', 4, 1, 1),
(5, 'Галина', 'Сорокина', 'Витальевна', '9724853849', 3, 2, 2),
(6, 'Дарья', 'Борунова', 'Михайловна', '9832839593', 1, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID_feedback` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `ID_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID_feedback`, `Name`, `Email`, `Message`, `ID_users`) VALUES
(1, 'Ольга', 'isip_o.m.lazareva@mpt.ru', 'Здравствуйте, хотела бы забрать Лэю', 1),
(5, 'Ольга', 'isip_o.m.lazareva@mpt.ru', 'cwdxqwd', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `ID_gender` int(11) NOT NULL,
  `Name_gender` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `gender`
--

INSERT INTO `gender` (`ID_gender`, `Name_gender`) VALUES
(1, 'Мужской'),
(2, 'Женский');

-- --------------------------------------------------------

--
-- Структура таблицы `medical_inspection`
--

CREATE TABLE `medical_inspection` (
  `ID_medical_inspection` int(11) NOT NULL,
  `ID_animal` int(11) NOT NULL,
  `Date_of_inspection` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `medical_inspection`
--

INSERT INTO `medical_inspection` (`ID_medical_inspection`, `ID_animal`, `Date_of_inspection`) VALUES
(1, 4, '04.03.2022'),
(2, 7, '10.05.2022'),
(3, 9, '15.05.2022');

-- --------------------------------------------------------

--
-- Структура таблицы `personality`
--

CREATE TABLE `personality` (
  `ID_personality` int(11) NOT NULL,
  `Name_personality` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `personality`
--

INSERT INTO `personality` (`ID_personality`, `Name_personality`) VALUES
(1, 'Дружелюбный'),
(2, 'Спокойный'),
(3, 'Активный');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `ID_post` int(11) NOT NULL,
  `Name_post` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`ID_post`, `Name_post`) VALUES
(1, 'Волонтер'),
(2, 'Бухгалтер'),
(3, 'Уборщик'),
(4, 'Ветеринар'),
(5, 'Администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `securing_animals`
--

CREATE TABLE `securing_animals` (
  `ID_securing_animals` int(11) NOT NULL,
  `ID_animal` int(11) NOT NULL,
  `ID_employee` int(11) DEFAULT NULL,
  `Date_of_pinning` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `securing_animals`
--

INSERT INTO `securing_animals` (`ID_securing_animals`, `ID_animal`, `ID_employee`, `Date_of_pinning`) VALUES
(1, 1, 6, '20.04.2018'),
(2, 4, 3, '23.02.2022');

-- --------------------------------------------------------

--
-- Структура таблицы `settlement`
--

CREATE TABLE `settlement` (
  `ID_settlement` int(11) NOT NULL,
  `№Cage` int(11) DEFAULT NULL,
  `ID_animal` int(11) NOT NULL,
  `Date_of_settlement` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `settlement`
--

INSERT INTO `settlement` (`ID_settlement`, `№Cage`, `ID_animal`, `Date_of_settlement`) VALUES
(1, 2, 2, '16.10.2022'),
(2, 1, 6, '10.07.2018');

-- --------------------------------------------------------

--
-- Структура таблицы `treatment`
--

CREATE TABLE `treatment` (
  `ID_treatment` int(11) NOT NULL,
  `ID_medical_inspection` int(11) DEFAULT NULL,
  `Name_treatment` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `treatment`
--

INSERT INTO `treatment` (`ID_treatment`, `ID_medical_inspection`, `Name_treatment`) VALUES
(1, 1, 'Прививка'),
(2, 2, 'Кастрация'),
(3, 3, 'Осмотр');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `ID_type` int(11) NOT NULL,
  `Name_type` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`ID_type`, `Name_type`) VALUES
(1, 'Кошка'),
(2, 'Собака');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID_users` int(11) NOT NULL,
  `Name_users` varchar(32) DEFAULT NULL,
  `Surname_users` varchar(32) DEFAULT NULL,
  `Patronymic_users` varchar(32) DEFAULT NULL,
  `Email` varchar(32) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `Contact_details_users` varchar(15) DEFAULT NULL,
  `Address` varchar(32) DEFAULT NULL,
  `ID_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID_users`, `Name_users`, `Surname_users`, `Patronymic_users`, `Email`, `Password`, `Contact_details_users`, `Address`, `ID_animal`) VALUES
(1, 'Ольга', 'Лазарева', 'Михайловна', 'isip_o.m.lazareva@mpt.ru', 'qwerty123', '9677596397', 'г. Москва', 0),
(2, 'Елена', 'Петрова', 'Максимовна', 'elena@gmail.com', 'Password', '9539660856', 'г. Москва', 12),
(29, 'Даша', NULL, NULL, 'darya@mail.ru', 'ec6a6536ca304edf844d1d248a4f08dc', NULL, NULL, 0),
(32, 'Даша', NULL, NULL, 'darya1@mail.ru', '1234', NULL, NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`ID_animal`),
  ADD KEY `ID_breed` (`ID_breed`),
  ADD KEY `ID_type` (`ID_type`),
  ADD KEY `ID_personality` (`ID_personality`),
  ADD KEY `ID_gender` (`ID_gender`);

--
-- Индексы таблицы `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`ID_breed`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID_education`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID_employee`),
  ADD KEY `ID_post` (`ID_post`),
  ADD KEY `ID_education` (`ID_education`),
  ADD KEY `ID_gender` (`ID_gender`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_feedback`),
  ADD KEY `ID_users` (`ID_users`);

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID_gender`);

--
-- Индексы таблицы `medical_inspection`
--
ALTER TABLE `medical_inspection`
  ADD PRIMARY KEY (`ID_medical_inspection`),
  ADD KEY `ID_animal` (`ID_animal`);

--
-- Индексы таблицы `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`ID_personality`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID_post`);

--
-- Индексы таблицы `securing_animals`
--
ALTER TABLE `securing_animals`
  ADD PRIMARY KEY (`ID_securing_animals`),
  ADD KEY `ID_animal` (`ID_animal`),
  ADD KEY `ID_employee` (`ID_employee`);

--
-- Индексы таблицы `settlement`
--
ALTER TABLE `settlement`
  ADD PRIMARY KEY (`ID_settlement`),
  ADD KEY `ID_animal` (`ID_animal`);

--
-- Индексы таблицы `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`ID_treatment`),
  ADD KEY `ID_medical_inspection` (`ID_medical_inspection`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_users`),
  ADD KEY `ID_animal` (`ID_animal`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animal`
--
ALTER TABLE `animal`
  MODIFY `ID_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `breed`
--
ALTER TABLE `breed`
  MODIFY `ID_breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `ID_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `ID_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `ID_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `medical_inspection`
--
ALTER TABLE `medical_inspection`
  MODIFY `ID_medical_inspection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `personality`
--
ALTER TABLE `personality`
  MODIFY `ID_personality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `ID_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `securing_animals`
--
ALTER TABLE `securing_animals`
  MODIFY `ID_securing_animals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settlement`
--
ALTER TABLE `settlement`
  MODIFY `ID_settlement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `treatment`
--
ALTER TABLE `treatment`
  MODIFY `ID_treatment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `ID_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`ID_type`) REFERENCES `type` (`ID_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
