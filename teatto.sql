-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2022 г., 18:53
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teatto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
                              `id` bigint(20) UNSIGNED NOT NULL,
                              `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `code`, `image`, `created_at`, `updated_at`) VALUES
                                                                                          (1, 'Черный чай', 'black_tea', '', NULL, NULL),
                                                                                          (2, 'Зеленый чай', 'green_tea', '', NULL, NULL),
                                                                                          (3, 'Пуэры', 'puers', '', NULL, NULL),
                                                                                          (4, 'Иван-чай', 'ivan_tea', '', NULL, NULL),
                                                                                          (5, 'Эксклюзивные чаи', 'vip_tea', '', NULL, NULL),
                                                                                          (6, 'Каркаде', 'karkade', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
                              `id` int(10) UNSIGNED NOT NULL,
                              `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
                                                          (20, '2014_10_12_000000_create_users_table', 1),
                                                          (21, '2014_10_12_100000_create_password_resets_table', 1),
                                                          (22, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
                                                          (24, '2022_06_17_182045_create_products_table', 1),
                                                          (25, '2022_06_17_183049_create_categories_table', 1),
                                                          (26, '2022_09_18_101331_create_blogs_table', 2),
                                                          (27, '2022_09_18_101907_add_paid_to_users_table', 3),
                                                          (28, '2022_09_18_102114_create_categories_table', 4),
                                                          (29, '2022_09_18_102214_create_blogs_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
                                   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
    ('lae345@mail.ru', '$2y$10$2e7i4OE1ZkZ64TaYgDrgJOQ994kUe4BI4nNEcZmP9iMeLXQlfTgUS', '2022-11-16 05:52:34');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
                                          `id` bigint(20) UNSIGNED NOT NULL,
                                          `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `tokenable_id` bigint(20) UNSIGNED NOT NULL,
                                          `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `abilities` text COLLATE utf8mb4_unicode_ci,
                                          `last_used_at` timestamp NULL DEFAULT NULL,
                                          `created_at` timestamp NULL DEFAULT NULL,
                                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `category_id` int(11) NOT NULL,
                            `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `desc` text COLLATE utf8mb4_unicode_ci,
                            `sale` int(11) NOT NULL DEFAULT '0',
                            `old_price` int(11) DEFAULT NULL,
                            `price` int(11) NOT NULL,
                            `image` text COLLATE utf8mb4_unicode_ci,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `code`, `desc`, `sale`, `old_price`, `price`, `image`, `created_at`, `updated_at`) VALUES
                                                                                                                                             (1, 'Черный чай \"Зимняя вишня\"', 1, 'black_tea-zimniaya-vishnya', '\"Зимняя вишня\" - смесь из отборных сортов крупного листового чая с ягодами вишни. Нежный вкус вишни с ароматом миндаля подарит вам незабываемые мгновения!- Способ приготовления: 1 чайная ложка на 1 чашку, залить горячей водой (t воды 90 С), настоять 3-5 минут. Приятного чаепития всей семьей!', 1, 219, 186, 'https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg', NULL, NULL),
                                                                                                                                             (2, 'Зеленый чай \"Абрикосовый джем\"', 2, 'green_tea-abrikosoviy_djem', 'Золотистый абрикос, сладкий изюм и кислинка клюквы - идеальное сочетание для фруктового зеленого чая - не приторно сладкое, но ароматное и с долгим многогранным послевкусием.', 1, 209, 169, 'https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg', NULL, NULL),
                                                                                                                                             (3, 'Эксклюзивный чай KUSMI TEA \"DETOX\"', 5, 'test', 'Чай Kusmi Detox мате с интенсивным вкусом лимона, освежающий напиток на основе зеленого и матового чая.', 0, 1, 7000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
    (1, 'Андрей', 'lae345@mail.ru', NULL, '$2y$10$4X.0HUDk/HLdfx2j/FnMhetWc.KXN0RhqR8HMdFqQTiv0vzxku0fC', 'MU0PMAFNnTBJfbUhXHez8r6HVtaKGviJVR1HwLLa5E3nnSWj6TURmTNZQZxi', '2022-10-15 03:54:24', '2022-10-15 03:54:24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
