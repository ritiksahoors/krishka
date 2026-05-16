-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2026 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishika`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(70) DEFAULT NULL,
  `category_name` varchar(70) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `category_name`, `status`, `updated_at`) VALUES
(1, '69ef2a300151e.jpeg', 'Sarees', 1, '2026-04-27 09:19:44'),
(2, '69ef2a6f710c3.jpeg', ' Dress Materials', 1, '2026-04-27 09:20:47'),
(3, '69ef2a95934de.jpeg', 'Blouses', 1, '2026-04-27 09:21:25'),
(4, '69ef2aa9bba54.jpeg', 'Kurtis & Kurtas', 1, '2026-04-27 09:21:45'),
(5, '69ef2abea4671.jpeg', 'Dupattas', 1, '2026-04-27 09:22:06'),
(6, '69ef2ad065acc.jpeg', 'Jewellery', 1, '2026-04-27 09:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `status`) VALUES
(1, 'Red', 1),
(2, 'Blue', 1),
(3, 'Green', 1),
(4, 'Gold', 1),
(5, 'Black', 1),
(6, 'White', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE `fabric` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`id`, `name`, `status`) VALUES
(1, 'Cotton', 1),
(2, 'Silk', 1),
(3, 'Georgette', 1),
(4, 'Chiffon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `phone`, `image`, `status`) VALUES
(1, 'admin', '$2y$10$IO1J1Bd15kNmTUVLne3WruV', 'monalisadas123@gmail.com', '9987456210', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(70) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `review` varchar(20) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `sub_category_id` int(10) DEFAULT NULL,
  `sub_subcategory_id` varchar(20) DEFAULT NULL,
  `fabric` varchar(20) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_discount_price` varchar(30) DEFAULT NULL,
  `pro_discount` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `length` varchar(20) DEFAULT NULL,
  `blouse` varchar(20) DEFAULT NULL,
  `about_item` longtext DEFAULT NULL,
  `featured_pro` int(10) DEFAULT NULL,
  `special_off` int(10) DEFAULT NULL,
  `trending_now` int(4) DEFAULT NULL,
  `product_image1` varchar(70) DEFAULT NULL,
  `product_image2` varchar(70) DEFAULT NULL,
  `product_image3` varchar(70) DEFAULT NULL,
  `product_image4` varchar(70) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `rating`, `review`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `fabric`, `product_price`, `product_discount_price`, `pro_discount`, `color`, `length`, `blouse`, `about_item`, `featured_pro`, `special_off`, `trending_now`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `status`) VALUES
(1, 'gdgds', '1.2', '1334', 1, 1, '1', '1', '1220', '1098.00', '10', '1,2', NULL, 'Included', '<p>fgbfcbgf</p>\r\n', 1, 1, 1, '6a084f41a7807.jpeg', '', '', '', 1),
(2, 'fvghncb', '2.1', '1036', 2, 7, '27', '2', '2365', '2246.75', '5', '1', NULL, 'Included', '<p>fdgcvjhbnmk,</p>\r\n', 1, 1, 1, '6a0850b742405.jpeg', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `sub_category_name` varchar(70) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_category_name`, `category_id`, `status`, `updated_at`) VALUES
(1, 'Cotton Sarees', 1, 1, '2026-04-04 12:20:19'),
(2, 'Silk Sarees', 1, 1, '2026-04-04 12:20:30'),
(3, 'Sambalpuri Sarees', 1, 1, '2026-04-04 12:20:53'),
(4, 'Kalamkari Sarees', 1, 1, '2026-04-04 12:21:04'),
(5, 'Ikkat Sarees', 1, 1, '2026-04-04 12:21:32'),
(6, 'Designer Sarees', 1, 1, '2026-04-04 12:21:43'),
(7, 'Cotton Dress Materials', 2, 1, '2026-04-04 12:22:06'),
(8, 'Silk Dress Materials', 2, 1, '2026-04-04 12:22:17'),
(9, 'Kalamkari Dress Materials', 2, 1, '2026-04-04 12:22:34'),
(10, 'Designer Dress Materials', 2, 1, '2026-04-04 12:22:51'),
(11, 'Ready-made Blouses', 3, 1, '2026-04-04 12:24:15'),
(12, 'Unstitched Blouses', 3, 1, '2026-04-04 12:25:33'),
(13, 'Designer Blouses', 3, 1, '2026-04-04 12:25:52'),
(14, 'Daily Wear', 4, 1, '2026-04-04 12:26:10'),
(15, 'Party Wear', 4, 1, '2026-04-04 12:29:23'),
(16, 'Designer Collection', 4, 1, '2026-04-04 12:29:37'),
(17, 'Cotton Dupattas', 5, 1, '2026-04-04 12:30:01'),
(18, 'Silk Dupattas', 5, 1, '2026-04-04 12:30:20'),
(19, 'Designer Dupattas', 5, 1, '2026-04-04 12:30:36'),
(20, 'Bangles', 6, 1, '2026-04-04 12:30:54'),
(21, 'Mangalsutra', 6, 1, '2026-04-04 12:31:06'),
(22, 'Beads Chains', 6, 1, '2026-04-04 12:31:18'),
(23, 'Bracelets', 6, 1, '2026-04-04 12:31:30'),
(24, 'Ikkat Dress Materials', 2, 1, '2026-04-06 07:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE `sub_subcategory` (
  `id` int(11) NOT NULL,
  `sub_subcategoryname` varchar(50) DEFAULT NULL,
  `sub_category_id` varchar(10) DEFAULT NULL,
  `category_id` varchar(10) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_subcategory`
--

INSERT INTO `sub_subcategory` (`id`, `sub_subcategoryname`, `sub_category_id`, `category_id`, `status`, `updated_at`) VALUES
(1, 'Plain Handloom', '1', '1', 1, '2026-04-06 07:09:17'),
(2, 'Temple Border', '1', '1', 1, '2026-04-06 07:09:29'),
(3, 'Checked Cotton', '1', '1', 1, '2026-04-06 07:09:43'),
(4, 'Floral Prints', '1', '1', 1, '2026-04-06 07:09:58'),
(5, 'Block Prints', '1', '1', 1, '2026-04-06 07:10:11'),
(6, 'Daily Wear Prints', '1', '1', 1, '2026-04-06 07:10:23'),
(7, 'Pure Banarasi', '2', '1', 1, '2026-04-06 07:10:57'),
(8, 'Semi Banarasi', '2', '1', 1, '2026-04-06 07:11:12'),
(9, 'Bridal Banarasi', '2', '1', 1, '2026-04-06 07:11:25'),
(10, 'Pure Kanjivaram', '2', '1', 1, '2026-04-06 07:11:44'),
(11, 'Soft Kanjivaram', '2', '1', 1, '2026-04-06 07:11:57'),
(12, 'Bridal Collection', '2', '1', 1, '2026-04-06 07:12:21'),
(13, 'Lightweight Silk', '2', '1', 1, '2026-04-06 07:13:23'),
(14, ' Party Wear Silk', '2', '1', 1, '2026-04-06 07:13:40'),
(15, 'Single Ikat', '3', '1', 1, '2026-04-06 07:13:57'),
(16, ' Double Ikat', '3', '1', 1, '2026-04-06 07:14:09'),
(17, 'Traditional', '2', '1', 1, '2026-04-06 07:14:22'),
(18, 'Modern Design', '2', '1', 1, '2026-04-06 07:14:36'),
(19, 'Printed Kalamkari', '4', '1', 1, '2026-04-06 07:14:56'),
(20, 'Handpainted Kalamkari', '4', '1', 1, '2026-04-06 07:15:12'),
(21, 'Cotton Ikkat', '5', '1', 1, '2026-04-06 07:15:26'),
(22, 'Silk Ikkat', '5', '1', 1, '2026-04-06 07:15:39'),
(23, 'Sequin Work', '6', '1', 1, '2026-04-06 07:15:54'),
(24, 'Embroidery Work', '6', '1', 1, '2026-04-06 07:16:06'),
(25, 'Heavy Work Sarees', '6', '1', 1, '2026-04-06 07:16:18'),
(26, 'Reception Collection', '6', '1', 1, '2026-04-06 07:16:30'),
(27, 'Floral', '7', '2', 1, '2026-04-06 07:16:46'),
(28, 'Casual Wear', '7', '2', 1, '2026-04-06 07:16:57'),
(29, 'Light Embroidery', '7', '2', 1, '2026-04-06 07:17:17'),
(30, 'Heavy Embroidery', '7', '2', 1, '2026-04-06 07:17:34'),
(31, 'Daily Wear', '8', '2', 1, '2026-04-06 07:17:55'),
(32, 'Festive Wear', '8', '2', 1, '2026-04-06 07:18:10'),
(33, 'Bridal Collection', '8', '2', 1, '2026-04-06 07:18:25'),
(34, 'Premium Range', '8', '2', 1, '2026-04-06 07:18:37'),
(35, 'Printed Kalamkari', '9', '2', 1, '2026-04-06 07:18:55'),
(36, 'Handpainted Kalamkari', '9', '2', 1, '2026-04-06 07:19:08'),
(37, 'Cotton Ikkat', '24', '2', 1, '2026-04-06 07:20:37'),
(38, 'Silk Ikkat', '24', '2', 1, '2026-04-06 07:20:50'),
(39, 'Fancy Designs', '10', '2', 1, '2026-04-06 07:21:23'),
(40, 'Trendy Collection', '10', '2', 1, '2026-04-06 07:21:35'),
(41, 'Ethnic Wear', '10', '2', 1, '2026-04-06 07:21:46'),
(42, 'Special Occasion', '10', '2', 1, '2026-04-06 07:21:59'),
(43, 'Party Wear', '11', '3', 1, '2026-04-06 07:22:26'),
(44, 'Bridal', '11', '3', 1, '2026-04-06 07:22:38'),
(45, 'Daily Wear', '11', '3', 1, '2026-04-06 07:22:49'),
(46, 'Cotton Blouses', '11', '3', 1, '2026-04-06 07:23:05'),
(47, 'Printed', '12', '3', 1, '2026-04-06 07:23:24'),
(48, 'Plain', '12', '3', 1, '2026-04-06 07:23:38'),
(49, 'Banarasi', '12', '3', 1, '2026-04-06 07:23:51'),
(50, 'Designer Pieces', '12', '3', 1, '2026-04-06 07:24:06'),
(51, 'Heavy Work', '13', '3', 1, '2026-04-06 07:24:23'),
(52, 'Custom Designs', '13', '3', 1, '2026-04-06 07:24:35'),
(53, 'Back Design', '13', '3', 1, '2026-04-06 07:24:46'),
(54, 'Trendy Styles', '13', '3', 1, '2026-04-06 07:24:59'),
(55, 'Cotton Kurtis', '14', '4', 1, '2026-04-06 07:25:17'),
(56, 'Simple Designs', '14', '4', 1, '2026-04-06 07:25:37'),
(57, 'Embroidered Kurtis', '15', '4', 1, '2026-04-06 07:25:58'),
(58, 'Fancy Kurtas', '15', '4', 1, '2026-04-06 07:26:10'),
(59, 'Indo-Western', '16', '4', 1, '2026-04-06 07:26:22'),
(60, 'Premium Designs', '16', '4', 1, '2026-04-06 07:26:35'),
(61, 'Printed Dupattas', '17', '5', 1, '2026-04-06 07:27:00'),
(62, 'Plain Dupattas', '17', '5', 1, '2026-04-06 07:27:14'),
(63, 'Banarasi Dupattas', '18', '5', 1, '2026-04-06 07:27:27'),
(64, 'Designer Silk', '18', '5', 1, '2026-04-06 07:27:41'),
(65, 'Heavy Work Dupattas', '19', '5', 1, '2026-04-06 07:27:59'),
(66, 'Festive Collection', '19', '5', 1, '2026-04-06 07:28:13'),
(67, 'Bridal Sets', '20', '6', 1, '2026-04-06 07:28:28'),
(68, 'Daily Wear', '20', '6', 1, '2026-04-06 07:28:44'),
(69, 'Gold Plated', '20', '6', 1, '2026-04-06 07:28:57'),
(70, 'Oxidised', '20', '6', 1, '2026-04-06 07:29:08'),
(71, 'Traditional', '21', '6', 1, '2026-04-06 07:29:20'),
(72, ' Modern Designs', '21', '6', 1, '2026-04-06 07:29:34'),
(73, 'Single Layer', '22', '6', 1, '2026-04-06 07:29:48'),
(74, 'Multi Layer', '22', '6', 1, '2026-04-06 07:30:01'),
(75, 'Daily Wear', '23', '6', 1, '2026-04-06 07:30:19'),
(76, 'Party Wear', '23', '6', 1, '2026-04-06 07:30:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
