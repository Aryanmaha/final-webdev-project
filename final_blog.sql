-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 10:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(17, 'Chinese Cuisine', 'chinese-cuisine', 'One of the most diverse cuisines in the world, Chinese cuisine has been around for over 200 years. Some of the ingredients are chosen from the greens in the mountains and some of the finest people should tuck into is the fresh, salty seafood and lamb. It is one of the various types of cuisines that has remained a favourite throughout.', '1673232973.jpg', 'Chinese Cuisine', 'Chinese Cuisine', 'Chinese Cuisine', 0, 0, '2023-01-08 15:56:13', '2023-01-11 00:14:53', 3),
(18, 'Japanese Cuisine', 'japanese-cuisine', 'Have you ever eaten with chopsticks? if you haven’t, then you should tuck into some of the finest Japanese food with chopsticks. Some of the most well known Japanese cuisines are Sushi and Tofu.  The flavours has always a rich taste one’s mouth, which is not something that happens with every dish. These are dishes that can be eaten with fried vegetables and boiled rice', '1673233001.jpg', 'Japanese Cuisine', 'Japanese Cuisine', 'Japanese Cuisine', 0, 0, '2023-01-08 15:56:41', '2023-01-15 19:30:04', 3),
(19, 'Italian Cuisine', 'italian-cuisine', 'Spaghetti, Pasta, Pizza and a few others, are some of the various types of Italian cuisines people from around the world love and are ordering it at restaurants or eating at home. Italian cuisine is one of the best and the true taste they say is only found in Italy.\r\n\r\nSome of the typical Italian products are tomatoes and basil, olive oil and Prosciutto de Parma. Cheese, cakes, ice-cream, fruit, sweets and cookies are some of the most favorite deserts among the Italians.', '1673233020.jpg', 'Italian Cuisine', 'Italian Cuisine', 'Italian Cuisine', 0, 0, '2023-01-08 15:57:00', '2023-01-15 19:30:14', 3),
(20, 'Greek Cuisine', 'greek-cuisine', 'Greek Cuisine is one of the most unique types of cuisines that offer some of the finest kebab with lamb, pork and chicken meat. When it comes to defining Greek cuisine, elegance and diverse are the 2 words that come to mind. Fruit, nuts, legumes and herbs are some of the local seasonal treasures and bread, olives and wine are some of the oldest ingredients.', '1673233043.jpg', 'Greek Cuisine', 'Greek Cuisine', 'Greek Cuisine', 0, 0, '2023-01-08 15:57:23', '2023-01-15 19:30:19', 3),
(22, 'Indian Cuisine', 'indian-cuisine', '<p><span style=\"font-family: Raleway, sans-serif; font-size: 17px;\">No vacation is complete without enjoying a wholesome Indian meal. Indian cuisine offers some of the most yummy dishes like Tandoori Chicken, Paneer Butter Masala, Naan bread, and many more. Those who had the chance too tuck into the best, have always licked their fingers after each meal.</span><br></p>', '1673850691.jpg', 'Indian Cuisine', 'Indian Cuisine', 'Indian Cuisine', 0, 0, '2023-01-15 19:31:31', '2023-01-15 19:31:31', 3),
(23, 'Spanish Cuisine', 'spanish-cuisine', '<p><span style=\"font-family: Raleway, sans-serif; font-size: 17px;\">Every time people hear of Spanish cuisines, they feel the need to go to Spain. Well, they aren’t entirely wrong. &nbsp;Spanish cuisine has a character of its own as it offers a diverse range of seafood along with Paella, tapas, stews, chorizo, Serrano ham and beans. The cuisine is not homogeneous and the culture of the country is defined by its food.</span><br></p>', '1673850727.jpg', 'Spanish Cuisine', 'Spanish Cuisine', 'Spanish Cuisine', 0, 0, '2023-01-15 19:32:07', '2023-01-15 19:32:07', 3),
(24, 'Mediterranean Cuisine', 'mediterranean-cuisine', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-size: 18px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, sans-serif;\">It can be difficult to define what exactly Mediterranean cuisine is as there is great variety of dishes in it. The key ingredients of Mediterranean cuisine are basic foods such as olive oil, fresh vegetables, wheat (such as bread and pasta), and grape (such as wine).<br></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-size: 18px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, sans-serif;\">Mediterranean food styles include culinary delicacies from countries such as Morocco, Italy, Portugal, Spain, Greece, Turkey, and the Middle East.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-size: 18px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, sans-serif;\">Mediterranean food culture is also the basis of the Mediterranean diet. This kind of diet contains olive oil, fresh vegetables and fruits, seafood, and nuts.</p>', '1674117094.jpg', 'Mediterranean Cuisine', 'Mediterranean Cuisine', 'Mediterranean Cuisine', 0, 0, '2023-01-18 21:31:34', '2023-01-18 21:31:34', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment_body`, `created_at`, `updated_at`) VALUES
(15, 4, 1, 'nice nice', '2023-01-18 00:48:54', '2023-01-18 00:48:54'),
(16, 6, 3, 'wow soo good', '2023-01-18 20:01:17', '2023-01-18 20:01:17'),
(18, 4, 3, 'sdsdsdsd', '2023-01-18 21:01:51', '2023-01-18 21:01:51'),
(19, 4, 3, 'sdsdsd', '2023-01-18 21:01:56', '2023-01-18 21:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_03_035230_add_role_as_to_users_table', 2),
(6, '2023_01_03_042520_create_categories_table', 3),
(7, '2023_01_09_092947_create_posts_table', 4),
(9, '2023_01_10_235838_create_post_table', 5),
(11, '2023_01_18_101026_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_iframe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `name`, `slug`, `description`, `yt_iframe`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(4, 18, 'Oyakodon (Chicken and Egg Rice Bowl)', 'oyakodon-chicken-and-egg-rice-bowl', '<p><span style=\"color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\">Oyakodon is the one-bowl comfort that can be cooked up in 30 minutes! Here, tender pieces of chicken, onions, and eggs are simmered in an umami-rich sauce and then poured over a bowl of fluffy steamed rice. I haven’t met anyone who doesn’t enjoy it.</span><br></p>', 'https://www.youtube.com/embed/SAluC5k0Ip8', 'Oyakodon (Chicken and Egg Rice Bowl)', 'Oyakodon (Chicken and Egg Rice Bowl)', 'Oyakodon (Chicken and Egg Rice Bowl)', 0, 3, '2023-01-15 21:00:33', '2023-01-17 20:57:23'),
(5, 18, 'Gyudon (Japanese Beef Rice Bowl)', 'gyudon-japanese-beef-rice-bowl', '<p><span style=\"color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\">This hearty rice bowl is extremely simple to put together, but it’s also famous for being a quick, nutritious meal that never fails to satisfy.</span><br></p>', 'https://www.youtube.com/embed/GEePXuniy2M', 'Gyudon (Japanese Beef Rice Bowl)', 'Gyudon (Japanese Beef Rice Bowl)', 'Gyudon (Japanese Beef Rice Bowl)', 0, 3, '2023-01-15 21:01:32', '2023-01-17 21:02:23'),
(6, 18, 'Yakimeshi (Japanese Fried Rice)', 'yakimeshi-japanese-fried-rice', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\">I believe fried rice was created out of necessity. It is indeed the most convenient and comforting meal that turns leftovers into something so delicious! You can whip up this classic Japanese fried rice under 20 minutes.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\"><span style=\"box-sizing: inherit; font-weight: 700;\">Substitutions: </span>I used ham, egg and green onion in the recipe, but you can easily use bacon, frozen edamame, crab sticks, green peas or whatever you have in the fridge.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\"><span style=\"box-sizing: inherit; font-weight: 700;\">Variations:</span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 20px; padding: 0px; list-style-position: outside; list-style-image: initial; color: rgb(33, 33, 33); font-family: -apple-system, BlinkMacSystemFont, \"segoe ui\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"helvetica neue\", sans-serif; font-size: 20px;\"><li style=\"box-sizing: inherit; margin-bottom: 5px; list-style-position: inherit;\"><a href=\"https://www.justonecookbook.com/omurice/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(208, 2, 27); outline: none; text-decoration: underline;\">Omurice</a> – <em style=\"box-sizing: inherit;\">Sweet and savory tomato-based fried rice wrapped in a soft thin omelette</em>.</li><li style=\"box-sizing: inherit; margin-bottom: 5px; list-style-position: inherit;\"><a href=\"https://www.justonecookbook.com/shrimp-fried-rice/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(208, 2, 27); outline: none; text-decoration: underline;\">Shrimp Fried Rice</a> – <em style=\"box-sizing: inherit;\">Use frozen shrimp.</em></li><li style=\"box-sizing: inherit; margin-bottom: 5px; list-style-position: inherit;\"><a href=\"https://www.justonecookbook.com/kimchi-fried-rice/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(208, 2, 27); outline: none; text-decoration: underline;\">Kimchi Fried Rice</a> – <em style=\"box-sizing: inherit;\">Kimchi + eggs = excellent fried rice!</em></li><li style=\"box-sizing: inherit; margin-bottom: 5px; list-style-position: inherit;\"><a href=\"https://www.justonecookbook.com/salmon-fried-rice-recipe/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(208, 2, 27); outline: none; text-decoration: underline;\">Salmon Fried Rice</a> – <em style=\"box-sizing: inherit;\">I usually use leftover salmon to make this fried rice, but you can use canned salmon.</em></li></ul>', 'https://www.youtube.com/embed/RE9gtTLZ5Ic', 'Yakimeshi (Japanese Fried Rice)', 'Yakimeshi (Japanese Fried Rice)', 'Yakimeshi (Japanese Fried Rice)', 0, 3, '2023-01-15 21:02:18', '2023-01-17 21:03:00'),
(7, 17, 'Peking Roasted Duck', 'peking-roasted-duck', '<div style=\"font-family: Calibri; font-size: 19px;\"><span class=\"infoimagetitle\" style=\"margin-top: 10px; display: block;\">Beijing Roasted Duck</span></div><p style=\"line-height: 25px; padding-bottom: 35px; margin-bottom: 0px; font-family: Calibri; font-size: 19px; clear: none !important;\">Peking duck (北京烤鸭 Běijīng kǎoyā) is a famous dish from&nbsp;<a href=\"https://www.chinahighlights.com/beijing/\" style=\"text-decoration: underline; color: rgb(0, 0, 0); cursor: pointer;\">Beijing</a>, enjoying world fame, and considered as one of China national dishes. Peking duck is savored for its thin and crispy skin. Sliced Peking duck is often eaten with pancakes, sweet bean sauce, or soy sauce with mashed garlic. It is a must-taste dish in Beijing!</p><p style=\"line-height: 25px; padding-bottom: 35px; margin-bottom: 0px; font-family: Calibri; font-size: 19px; clear: none !important;\">As “the first dish to taste in China”,&nbsp;<a href=\"https://www.chinahighlights.com/beijing/food/beijing-duck.htm\" style=\"text-decoration: underline; color: rgb(0, 0, 0); cursor: pointer;\">Beijing Roast Duck</a>&nbsp;used to be a royal dish in medieval China. It has been a “national dish of diplomacy” since the 1970s, when it was first used for the reception of foreign guests by Premier Zhou Enlai (the first Premier of the People\'s Republic of China). It is highly praised by heads of state, government officials, and domestic and foreign tourists.</p>', 'https://www.youtube.com/embed/eyjSPg3Bzz0', 'Peking Roasted Duck', 'Peking Roasted Duck', 'Peking Roasted Duck', 0, 3, '2023-01-18 21:32:38', '2023-01-18 21:32:38'),
(8, 17, 'Kung Pao Chicken', 'kung-pao-chicken', '<p style=\"line-height: 25px; padding-bottom: 35px; margin-bottom: 0px; font-family: Calibri; font-size: 19px; clear: none !important;\">Kung Pao Chicken (宫保鸡丁 gōngbào jīdīng) is a famous Sichuan-style specialty, popular with both Chinese and foreigners. The major ingredients are diced chicken, dried chili, cucumber, and fried peanuts (or cashews).</p><p style=\"line-height: 25px; padding-bottom: 35px; margin-bottom: 0px; font-family: Calibri; font-size: 19px; clear: none !important;\">People (Chinese takeaways) in Western countries have created a Western-style kung pao chicken, for which the diced chicken is covered with cornstarch, and vegetables, sweet and sour sauce, and mashed garlic are added. See&nbsp;<a href=\"https://www.chinahighlights.com/travelguide/chinese-food/cooking/kung-pao-chicken.htm\" style=\"text-decoration: underline; color: rgb(0, 0, 0); cursor: pointer;\">How to Cook Kung Pao Chicken</a>&nbsp;for a classic recipe and its history.</p>', 'https://www.youtube.com/embed/_QWXjebXiWk', 'Kung Pao Chicken', 'Kung Pao Chicken', 'Kung Pao Chicken', 0, 3, '2023-01-18 21:33:53', '2023-01-18 21:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'aryan maharjan', 'dmonryner@gmail.com', NULL, '$2y$10$JXSSkpVXFXz19WiZp6.eLOqnzmMAsVA3BtJQ6W4Zv/KHsNsV2vq1K', NULL, '2023-01-02 16:44:41', '2023-01-02 16:44:41', 0),
(2, 'YO YO', 'ABC@GMAL.COM', NULL, '$2y$10$aVdgQDCrKseQeBKQJRQKjuP4sjKWZvHBbKO1kkuBsdys8aWC4RORO', NULL, '2023-01-02 16:45:36', '2023-01-10 18:24:07', 0),
(3, 'admin', 'admin@example.com', NULL, '$2y$10$9RHR9S4opcTS/rPSFBexjeX34ykLKTp72iUcBOmrXMWar1d9Q3CA.', NULL, '2023-01-02 17:02:17', '2023-01-02 17:02:17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
