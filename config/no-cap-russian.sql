-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 14 2024 г., 08:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `no-cap-russian`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id_cart`, `user_id`, `product_id`, `quantity`) VALUES
(1, 5, 2, 3),
(2, 5, 8, 1),
(3, 5, 4, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int NOT NULL,
  `name_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Футболки'),
(2, 'Носки'),
(3, 'Кепки');

-- --------------------------------------------------------

--
-- Структура таблицы `collections`
--

CREATE TABLE `collections` (
  `id_collection` int NOT NULL,
  `name_collection` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `collections`
--

INSERT INTO `collections` (`id_collection`, `name_collection`) VALUES
(1, 'Океания'),
(2, 'Африка');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL,
  `discount` int DEFAULT '0',
  `category_id` int NOT NULL,
  `collection_id` int NOT NULL,
  `first_img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `second_img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `discount`, `category_id`, `collection_id`, `first_img`, `second_img`) VALUES
(1, 'Футболка Палау', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 200, 0, 1, 1, 'palau_shirt_1.jpg', 'palau_shirt_2.jpg'),
(2, 'Футболка Тонга', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 200, 10, 1, 1, 'tonga_shirt_1.jpg', 'tonga_shirt_2.jpg'),
(3, 'Футболка Кабо-Верде', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 150, 0, 1, 2, 'cape-verde_shirt_1.jpg', 'cape-verde_shirt_2.jpg'),
(4, 'Футболка Фиджи', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 200, 0, 1, 1, 'fiji_shirt_1.jpg', 'fiji_shirt_2.jpg'),
(5, 'Футболка Вануату', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 200, 20, 1, 1, 'vanuatu_shirt_1.jpg', 'vanuatu_shirt_2.jpg'),
(6, 'Футболка Кирибати', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 200, 0, 1, 1, 'kiribati_shirt_1.jpg', 'kiribati_shirt_2.jpg'),
(7, 'Футболка Габон', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 150, 10, 1, 2, 'gabon_shirt_1.jpg', 'gabon_shirt_2.jpg'),
(8, 'Футболка Нигерия', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 150, 0, 1, 2, 'nigeria_shirt_1.jpg', 'nigeria_shirt_2.jpg'),
(9, 'Кепка Нигерия', 'Стиль: Это футболка с круглым вырезом для повседневного образа.</br>\nЦвет: В описании указано, что она выглядит блекло и размыто, что наводит на мысль о винтажных цветах.</br>\nДизайн: В нем упоминается \"закатный\" дизайн, вызывающий ностальгию и ощущение расслабленности.</br>\nМатериал: \"Сверхмягкий органический хлопок\" подчеркивает комфорт и экологичность.', 100, 0, 3, 2, 'nigeria_cup_1.jpg', 'nigeria_cup_2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `score` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(1, 'Uwuwewewe Ugweuhem Osas', '21 bananas', 'osas21@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', 'uploads/1706538858PhotoReal_black_messy_hair_white_guy_in_glasses_red_shirt_dark_0.jpg'),
(2, 'uvuvwevwevwe ugwemuhwem osas', 'The pilot', 'pilot0545@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', 'uploads/1706542832PhotoReal_black_messy_hair_white_guy_in_glasses_red_shirt_dark_0.jpg'),
(3, 'Ibrahim Al Abdul', 'Lil Osama', 'Osama911@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', 'uploads/1706542864PhotoReal_black_messy_hair_white_guy_in_glasses_red_shirt_dark_0.jpg'),
(4, 'Burlakov Danil Andreevich', 'Central C4', 'danil_c4@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', 'uploads/1706689782PhotoReal_black_messy_hair_white_guy_in_glasses_red_shirt_dark_0.jpg'),
(5, 'eminem slim marshall', 'eminem', 'real_slim@mm.com', 'f52412c4ff1dacd2111f4951f3db1260', NULL),
(6, 'sldjask', 'popa', 'kjkjk$sdsfd.sdf', '19e3f623b3fa27717e94204383b94dd7', NULL),
(7, 'Дядя Стёпа', 'Каланча', 'Stepa@gmail.com', 'ad13a2a07ca4b7642959dc0c4c740ab6', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id_collection`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `collections`
--
ALTER TABLE `collections`
  MODIFY `id_collection` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
