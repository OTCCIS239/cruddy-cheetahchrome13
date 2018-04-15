-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 06:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `gems`
--

CREATE TABLE `gems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gems`
--

INSERT INTO `gems` (`id`, `name`, `type`, `cut`, `size`, `description`, `price`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Burmese Ruby', 'Ruby', 'Cabochon', 'Avg. 24mm x 30mm 35ct.', 'Avg. 35ct. Burmese ruby', '20.99', 10, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(2, 'Guatemalan Jade', 'Jadeite', 'Cabochon', '35mm x 40mm 50ct.', 'Guatemalan blue Mayan/Olmec jadeite', '50.00', 9, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(3, 'African Malachite', 'Malachite', 'Cabochon', 'Avg. 30mm x 45mm 15ct.', 'African (Congo) malachite avg. 15ct.', '17.99', 7, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jewelries`
--

CREATE TABLE `jewelries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jewelries`
--

INSERT INTO `jewelries` (`id`, `name`, `type`, `description`, `price`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Mexican rainbow obsidian pendant', 'Pendant', 'Mexican rainbow obsidian pendant made with Argentium silver - no chain', '150.00', 1, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(2, 'Men\'s heavy silver ring size 10', 'Ring', 'Men\'s size 10 solid heavy silver ring, made with 2 troy oz. of Argentium silver', '250.00', 1, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(3, 'Women\'s turquoise silver ring size 6.5', 'Ring', 'Women\'s size 6.5 turquoise silver ring, sterling silver with a 10ct. Royston turquoise cabochon and 18kt. gold bezel ', '239.99', 1, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

CREATE TABLE `metals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metals`
--

INSERT INTO `metals` (`id`, `name`, `type`, `form`, `description`, `price`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Argentium silver', 'Silver', 'Casting grain', 'Argentium silver casting grain for vacuum casting - priced per troy oz.', '17.85', 100, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(2, '24k gold ', 'Gold', 'Casting grain', '24k gold casting grain for alloying and vacuum casting', '1400.00', 10, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(3, '18k gold', 'Gold', 'Casting grain', '18k gold alloy casting grain for vacuum casting ', '1350.00', 10, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_11_141035_create_gems_table', 1),
(4, '2018_04_13_184516_create_jewelries_table', 1),
(5, '2018_04_13_190547_create_metals_table', 1),
(6, '2018_04_13_190800_create_tools_table', 1),
(7, '2018_04_13_190853_create_supplies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `name`, `type`, `description`, `price`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Herkules white label saw blades', 'Saw blades', 'Herkules white label saw blades - most popular sizes assortment pack - 50 count', '64.99', 10, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(2, 'Dense charcoal soldering block', 'Soldering block', 'Dense European type charcoal soldering block', '12.99', 12, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(3, 'Battern\'s self-pickling flux', 'Flux', 'Battern\'s self-pickling flux - 8 fluid oz.', '15.00', 10, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `type`, `description`, `price`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Pedinghaus goldsmith\'s hammer', 'Hammer', 'Pedinghaus goldsmith\'s hammer 10 oz. size - German made', '89.99', 3, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(2, 'Lindstrom flat-nose pliers', 'Pliers', 'Lindstrom flat-nose pliers - med size', '45.00', 7, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00'),
(3, 'Original Knew Concepts jewellers 3\" saw frame', 'Saw', 'Original Knew Concepts jewellers 3\" saw frame - comes with blade assortment pack', '54.00', 5, 'images/default.jpg', '2018-04-14 05:00:00', '2018-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gems`
--
ALTER TABLE `gems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jewelries`
--
ALTER TABLE `jewelries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metals`
--
ALTER TABLE `metals`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
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
-- AUTO_INCREMENT for table `gems`
--
ALTER TABLE `gems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jewelries`
--
ALTER TABLE `jewelries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metals`
--
ALTER TABLE `metals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
