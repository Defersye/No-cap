-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2024 г., 09:04
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MyMvcStore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Categories`
--

CREATE TABLE `Categories` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Categories`
--

INSERT INTO `Categories` (`id`, `name`) VALUES
(10, 'Вечериночные игры'),
(11, 'Викторины'),
(12, 'Детские игры'),
(13, 'Детективные игры'),
(14, 'Для одного'),
(15, 'Дуэльные игры'),
(16, 'Живые карточные игры (LCG)'),
(17, 'Карточные игры'),
(18, 'Квесты'),
(19, 'Командные игры'),
(20, 'Классические игры'),
(21, 'Книги-игры'),
(22, 'Кооперативные игры'),
(23, 'Логические игры'),
(24, 'Наборы игр'),
(25, 'Полукооперативные игры'),
(26, 'Приключенческие игры'),
(27, 'Семейные игры'),
(28, 'Стратегические игры'),
(29, 'Хардкорные игры'),
(30, 'Экономические игры');

-- --------------------------------------------------------

--
-- Структура таблицы `Customers`
--

CREATE TABLE `Customers` (
  `ID` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Customers`
--

INSERT INTO `Customers` (`ID`, `name`, `surname`, `email`, `phonenumber`) VALUES
(1, 'Иван', 'Иванов', 'ivan@example.com', '123-456-7890'),
(2, 'Мария', 'Петрова', 'maria@example.com', '987-654-3210'),
(3, 'Алексей', 'Сидоров', 'alex@example.com', '555-555-5555'),
(4, 'Елена', 'Козлова', 'elena@example.com', '777-888-9999'),
(5, 'Павел', 'Федоров', 'pavel@example.com', '333-222-1111'),
(6, 'Ольга', 'Лебедева', 'olga@example.com', '111-222-3333'),
(7, 'Андрей', 'Кузнецов', 'andrey@example.com', '999-777-5555'),
(8, 'Наталья', 'Морозова', 'natalia@example.com', '444-888-2222'),
(9, 'Владимир', 'Павлов', 'vladimir@example.com', '666-999-7777');

-- --------------------------------------------------------

--
-- Структура таблицы `OrderItems`
--

CREATE TABLE `OrderItems` (
  `ID` int NOT NULL,
  `IDorder` int NOT NULL,
  `IDproduct` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `OrderItems`
--

INSERT INTO `OrderItems` (`ID`, `IDorder`, `IDproduct`, `count`) VALUES
(2, 2, 2, 5),
(3, 2, 3, 2),
(4, 2, 4, 4),
(5, 3, 5, 1),
(6, 3, 6, 2),
(7, 4, 7, 3),
(8, 4, 8, 2),
(9, 5, 9, 4),
(10, 5, 10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `ID` int NOT NULL,
  `IDclient` int NOT NULL,
  `data` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`ID`, `IDclient`, `data`, `status`) VALUES
(1, 1, '2023-10-26', 'В обработке'),
(2, 2, '2023-10-27', 'Выполнен'),
(3, 2, '2023-10-28', 'В обработке'),
(4, 2, '2023-10-29', 'Выполнен'),
(5, 1, '2023-10-30', 'В обработке'),
(6, 3, '2023-10-31', 'В обработке'),
(7, 7, '2023-11-01', 'Выполнен'),
(8, 2, '2023-11-02', 'В обработке'),
(9, 1, '2023-11-03', 'Выполнен'),
(10, 3, '2023-11-04', 'Выполнен');

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `ID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `id_category` int NOT NULL,
  `image` varchar(30) NOT NULL,
  `age` varchar(10) NOT NULL,
  `countPlayers` int NOT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `slogan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`ID`, `name`, `price`, `description`, `id_category`, `image`, `age`, `countPlayers`, `hot`, `slogan`) VALUES
(53, 'Кодовое имя: Легион', 2500, 'Карточная игра, в которой игроки выступают в роли секретных агентов, пытающихся передать секретные коды своим союзникам.', 17, 'legion.jpg', '12+', 4, 0, 'Шпионская миссия начинается!'),
(54, 'Властелин колец: Кольцо арены', 2200, 'Стратегическая настольная игра, основанная на мире \"Властелина колец\", где игроки сражаются за контроль над территорией.', 28, 'lotr_arena.jpg', '14+', 2, 0, 'Завоюйте Средиземье!'),
(55, 'Шерлок Холмс: Консультант детектива', 1800, 'Логическая игра, где игроки играют в роли помощников Шерлока Холмса, расследуя сложные преступления.', 13, 'sherlock_detective.jpg', '10+', 3, 0, 'Раскройте тайны Лондона!'),
(56, 'Диковинные дела: Менеджер магазина монстров', 1500, 'Детская игра, где игроки управляют магазином, продающим различных монстров и общаются с клиентами.', 12, 'monster_shop.jpg', '6+', 2, 0, 'Монстры для каждого вкуса!'),
(57, 'За гранью реальности: Погоня за иллюзиями', 2800, 'Приключенческая игра, где игроки исследуют загадочные миры и сражаются с темными силами.', 26, 'beyond_reality.jpg', '16+', 4, 0, 'Откройте новую реальность!'),
(58, 'Легенды Андора: Семь звуков', 2100, 'Кооперативная настольная игра, где игроки сражаются с монстрами и исследуют мир фэнтезийных приключений.', 22, 'legends_of_andor.jpg', '12+', 4, 0, 'Спасите Андор от зла!'),
(59, 'Каркассон: Город', 1900, 'Стратегическая настольная игра, где игроки строят город, используя плитки и развивая свои территории.', 20, 'carcassonne_city.jpg', '10+', 4, 0, 'Стройте свой город мечты!'),
(60, 'Мафия: Город мафии', 1600, 'Вечеринка в стиле Мафии, где игроки играют роли городских жителей, пытающихся найти и вытеснить мафиозных боссов.', 10, 'mafia_city.jpg', '14+', 8, 0, 'Кто мафия, а кто не мафия?'),
(61, 'Космический шутер: За гранью галактики', 3000, 'Кооперативная настольная игра, где игроки пилотируют космические корабли, сражаясь с инопланетными угрозами.', 22, 'space_shooter.jpg', '12+', 4, 0, 'Спасите галактику от вторжения!'),
(62, 'Имаджинариум: Магия мечты', 2400, 'Логическая игра, где игроки строят воображаемые миры, используя карточные изображения и создавая свои фантазии.', 23, 'imaginarium_magic.jpg', '8+', 3, 0, 'Воплотите свои мечты в реальность!'),
(63, 'Дворецкий Кафки: Загадка лабиринта', 1700, 'Приключенческая игра, где игроки исследуют таинственный лабиринт, основанный на произведениях Франца Кафки.', 26, 'kafka_butler.jpg', '14+', 2, 0, 'Раскройте секреты лабиринта!'),
(64, 'Пираты Карибского моря: Поиск сокровищ', 2000, 'Приключенческая настольная игра, где игроки отправляются в путешествие по Карибскому морю, ища потерянные сокровища.', 26, 'pirates_of_caribbean.jpg', '10+', 4, 0, 'Удачи в поисках сокровищ!'),
(65, 'Пандемия: Вакцинация', 2900, 'Кооперативная настольная игра, где игроки борются с глобальной пандемией, разрабатывая и распространяя вакцины по всему миру.', 22, 'pandemic_vaccination.jpg', '12+', 4, 0, 'Спасите мир от вируса!'),
(66, 'Школа магии: Уроки заклинаний', 1800, 'Детская настольная игра, где молодые волшебники учатся заклинаниям и сражаются за звание лучшего студента школы магии.', 12, 'magic_school.jpg', '8+', 4, 0, 'Станьте настоящим волшебником!'),
(67, 'Люди Икс: Мутанты в борьбе', 2300, 'Стратегическая настольная игра, основанная на комиксах \"Люди Икс\", где игроки контролируют команду мутантов, сражаясь за свое место в мире.', 19, 'xmen_mutants.jpg', '14+', 3, 0, 'Защитите мир от угрозы мутантов!'),
(68, 'Загадки древности: Тайны пирамиды', 2000, 'Квестовая настольная игра, где игроки исследуют древние пирамиды, раскрывая их тайны и решая головоломки.', 18, 'ancient_mysteries.jpg', '10+', 2, 0, 'Разгадайте тайны пирамиды!'),
(69, 'Дом-2: Сценарий любви', 1500, 'Вечеринка с элементами романтики, где игроки играют роли участников реалити-шоу \"Дом-2\", строя свои отношения и решая конфликты.', 10, 'dom2_love.jpg', '18+', 6, 0, 'Найдите свою любовь на \"Дом-2\"!'),
(70, 'Игра престолов: Игра королей', 2600, 'Стратегическая настольная игра, основанная на вселенной \"Игры престолов\", где игроки борются за власть и контроль над Железным Троном.', 28, 'game_of_thrones_kings.jpg', '16+', 4, 0, 'Выиграйте игру королей!'),
(71, 'Машина времени: Путешествие в прошлое', 2100, 'Приключенческая настольная игра, где игроки путешествуют через временные линии, исследуя исторические события и влияя на будущее.', 26, 'time_machine.jpg', '12+', 3, 0, 'Измените ход истории!'),
(72, 'Магическая иллюзия: Побег из театра', 1900, 'Квестовая настольная игра, где игроки пытаются разгадать загадки и вырваться из заколдованного театра в стиле мистики и магии.', 18, 'magic_illusion.jpg', '14+', 4, 0, 'Сбегите из театра иллюзий!');

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `ID` int NOT NULL,
  `IDproduct` int NOT NULL,
  `IDclient` int NOT NULL,
  `score` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`ID`, `IDproduct`, `IDclient`, `score`, `text`) VALUES
(2, 2, 2, 4, 'Хорошее качество, но есть небольшие недостатки.'),
(3, 3, 3, 5, 'Прекрасный товар, всем рекомендую.'),
(4, 4, 4, 3, 'Неплохо, но можно улучшить.'),
(5, 5, 5, 5, 'Лучший продукт, который я когда-либо покупал.'),
(6, 6, 6, 4, 'Удовлетворительно, но можно улучшить.'),
(7, 7, 7, 2, 'Не понравился товар, ожидал большего.'),
(8, 8, 8, 5, 'Супер! Всем советую.'),
(9, 9, 9, 3, 'Средний товар, ничего особенного.'),
(10, 2, 2, 4, 'Хорошее соотношение цена/качество.'),
(11, 2, 2, 5, 'Отличный продукт, очень доволен.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDorder` (`IDorder`),
  ADD KEY `IDproduct` (`IDproduct`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDclient` (`IDclient`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dd` (`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDproduct` (`IDproduct`),
  ADD KEY `IDclient` (`IDclient`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`IDorder`) REFERENCES `Orders` (`ID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`IDproduct`) REFERENCES `Products` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`IDclient`) REFERENCES `Customers` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `Categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`IDproduct`) REFERENCES `Products` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`IDclient`) REFERENCES `Customers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
