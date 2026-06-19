-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 09 2026 г., 19:42
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
-- База данных: `no-cap`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id_cart`, `user_id`, `product_id`, `quantity`) VALUES
(13, 5, 1, 5),
(15, 5, 2, 30),
(17, 5, 3, 67),
(29, 4, 1, 2),
(30, 4, 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int NOT NULL,
  `name_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'T-shirt'),
(2, 'Socks'),
(3, 'Cap');

-- --------------------------------------------------------

--
-- Структура таблицы `collections`
--

CREATE TABLE `collections` (
  `id_collection` int NOT NULL,
  `name_collection` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `collections`
--

INSERT INTO `collections` (`id_collection`, `name_collection`) VALUES
(1, 'Oceania'),
(2, 'Africa'),
(3, 'Latin America'),
(4, 'Asia'),
(5, 'Europe');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int NOT NULL,
  `name_contact` varchar(255) NOT NULL,
  `email_contact` varchar(255) NOT NULL,
  `text_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id_contact`, `name_contact`, `email_contact`, `text_contact`) VALUES
(1, 'Sir Alex Fergusson', 'sir-alex@gmail.com', 'This guy must have been born offside. (about Philippe Inzaghi)'),
(2, '123', 'asdfg@dsf.fgh', 'shawrtertejyhr');

-- --------------------------------------------------------

--
-- Структура таблицы `not_yet___reviews`
--

CREATE TABLE `not_yet___reviews` (
  `id_review` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `score` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `user_id` int NOT NULL,
  `order_hash_id` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_order` timestamp NOT NULL,
  `post_service` varchar(20) NOT NULL,
  `payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `product_id`, `quantity`, `user_id`, `order_hash_id`, `status`, `date_order`, `post_service`, `payment_method`) VALUES
(7, 11, 2, 4, '674628585', 'placed', '2025-01-04 12:06:57', 'Royal Mail', 'Card'),
(8, 1, 1, 4, '674628585', 'placed', '2025-01-04 12:06:57', 'Royal Mail', 'Card'),
(9, 5, 4, 4, '674628585', 'placed', '2025-01-04 12:06:57', 'Royal Mail', 'Card'),
(13, 2, 1, 4, '673252323', 'placed', '2025-01-04 13:10:46', 'Royal Mail', 'Transfer'),
(14, 3, 10, 1, '679150568', 'placed', '2025-06-15 03:21:28', 'DPD', 'Transfer'),
(15, 2, 2, 1, '679150568', 'placed', '2025-06-15 03:21:28', 'DPD', 'Transfer'),
(16, 7, 1, 1, '679150568', 'placed', '2025-06-15 03:21:28', 'DPD', 'Transfer');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `discount` int DEFAULT '0',
  `category_id` int NOT NULL,
  `collection_id` int NOT NULL,
  `first_img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `discount`, `category_id`, `collection_id`, `first_img`, `second_img`) VALUES
(1, 'Palau shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 200, 0, 1, 1, 'palau_shirt_1.jpg', 'palau_shirt_2.jpg'),
(2, 'Tonga shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 200, 10, 1, 1, 'tonga_shirt_1.jpg', 'tonga_shirt_2.jpg'),
(3, 'Cape Verde shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 150, 0, 1, 2, 'cape-verde_shirt_1.jpg', 'cape-verde_shirt_2.jpg'),
(4, 'Fiji shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 200, 0, 1, 1, 'fiji_shirt_1.jpg', 'fiji_shirt_2.jpg'),
(5, 'Vanuatu shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 200, 20, 1, 1, 'vanuatu_shirt_1.jpg', 'vanuatu_shirt_2.jpg'),
(6, 'Kiribati shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 200, 0, 1, 1, 'kiribati_shirt_1.jpg', 'kiribati_shirt_2.jpg'),
(7, 'Gabon shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 150, 10, 1, 2, 'gabon_shirt_1.jpg', 'gabon_shirt_2.jpg'),
(8, 'Nigeria shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 150, 0, 1, 2, 'nigeria_shirt_1.jpg', 'nigeria_shirt_2.jpg'),
(9, 'Peru shirt', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 250, 20, 1, 3, 'peru_shirt_1.jpg', 'peru_shirt_2.jpg'),
(10, 'Nigeria cap', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 100, 0, 3, 2, 'nigeria_cap_1.jpg', 'nigeria_cap_2.jpg'),
(11, 'Peru cap', 'Style: It is a crewneck t-shirt for a casual look.\r\nColor: The description implies a faded, washed-out look, suggesting vintage colors.\r\nDesign: It mentions a \"sunset\" design, evoking nostalgia and a relaxed feel.\r\nMaterial: \"Super-soft organic cotton\" highlights comfort and eco-friendliness.', 150, 0, 3, 3, 'peru_cap_1.jpg', 'peru_cap_2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subscription`
--

CREATE TABLE `subscription` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `subscribed_at`) VALUES
(30, 'poppa@p.com', '2024-12-28 06:23:19'),
(31, 'defersye@gmail.com', '2024-12-29 05:40:36'),
(32, 'danilburlakov315@gmail.com', '2024-12-29 05:40:45'),
(38, 'popa@kj.jj', '2025-01-04 13:18:34'),
(40, 'qqwe@eesaew.fg', '2025-06-15 02:53:47'),
(41, 'yui@yui.com', '2025-06-15 02:54:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `full_name` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `adress_1st_line` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress_2nd_line` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `full_name`, `login`, `email`, `password`, `avatar`, `country`, `postal_code`, `adress_1st_line`, `adress_2nd_line`, `created_at`) VALUES
(1, 'Uwuwewewe Ugweuhem Osas', '21 bananas', 'osas21@gmail.com', '3b08289242c87c83598acc3b2a2ad1dc', 'default_avatar.png', 'Russian Federation', '649100', 'Republic Altai, Gorno-Altaisk', 'Lenina st, 46', '2025-02-15 07:24:47'),
(2, 'Osama bin Laden', 'The pilot', 'pilot0545@gmail.com', 'a3452f94738cbeefe8c79c79f7336522', 'default_avatar.png', NULL, NULL, NULL, NULL, '2024-11-14 07:24:47'),
(3, 'Ibrahim Al Abdul', 'Ka Boom', 'boom911@gmail.com', '65079b006e85a7e798abecb99e47c154', 'default_avatar.png', NULL, NULL, NULL, NULL, '2001-09-11 07:24:47'),
(4, 'Burlakov Danil Andreevich', 'Central C4', 'danil_c4@gmail.com', 'f52412c4ff1dacd2111f4951f3db1260', 'default_avatar.png', 'Russian Federation', '456300', 'Republic Altai, Gorno-Altaisk', 'akjsdh st, 213, 2', '2005-08-13 07:24:47'),
(5, 'eminem slim marshall', 'eminem', 'real_slim@mm.com', 'f52412c4ff1dacd2111f4951f3db1260', 'default_avatar.png', NULL, NULL, NULL, NULL, '2007-08-04 07:24:47'),
(12, 'biggie smalls', 'notorious 911', 'biggie@rules.com', '58edbf7333ab8966b3532309070b7fc3', 'greatest hits.jpg', NULL, NULL, NULL, NULL, '1995-06-28 07:24:47');

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
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Индексы таблицы `not_yet___reviews`
--
ALTER TABLE `not_yet___reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `collections`
--
ALTER TABLE `collections`
  MODIFY `id_collection` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `not_yet___reviews`
--
ALTER TABLE `not_yet___reviews`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
