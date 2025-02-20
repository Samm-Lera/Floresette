-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 08:21 AM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(254, 20, 53, 'Helia', 1250, 1, 'Helia.png');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

DROP TABLE IF EXISTS `customize`;
CREATE TABLE `customize` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_and_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`id`, `name`, `stock`, `sold`, `price`, `image`, `date_and_time`) VALUES
(3, 'Rose', 99, 0, 45, 'rose.jpg', '0000-00-00 00:00:00'),
(4, 'Sunflower', 99, 0, 100, 'sunflower.jpg', '0000-00-00 00:00:00'),
(5, 'Tulip', 97, 0, 100, 'tulip.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(12) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(15, 16, 'Jea Mae Pernia', 'jeamaepernia@gmail.com', 2147483647, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

DROP TABLE IF EXISTS `online_payment`;
CREATE TABLE `online_payment` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` int(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `delivery_charges` int(50) NOT NULL,
  `placed_on` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `tracking_number` varchar(100) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `reference_number` varchar(20) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'Paid - Prepairing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_payment`
--

INSERT INTO `online_payment` (`id`, `user_id`, `name`, `contact_number`, `email`, `method`, `address`, `total_products`, `total_price`, `note`, `delivery_charges`, `placed_on`, `time`, `tracking_number`, `delivery_date`, `delivery_time`, `reference_number`, `order_type`, `payment_status`) VALUES
(35, 20, 'Dann Sison', '9569123627', 'dannr12284853@gmail.com', 'online payment', '159 ascano st malibay Brgy.176 Pasay - NCR zip:1300', ', Bloom in Blue (1) ', 1299, '', 100, '20-Feb-2024', '02:54:36', 'FLRSSTPH2024022002543620', 'FLORESSETTE EXPRESS', ' 9:00 AM - 11:00 AM', '1111111111111', 'fixed-ONLINE', 'Paid - Prepairing'),
(36, 20, 'Dann Sison', '9569123627', 'dannr12284853@gmail.com', 'online payment', '159 ascano st malibay Brgy.176 Pasay - NCR zip:1300', ', Sweet Sunrise (1) , Clouds of Affection (5) ', 15640, '', 100, '20-Feb-2024', '02:57:03', 'FLRSSTPH2024022002570320', 'FLORESSETTE EXPRESS', ' 9:00 AM - 11:00 AM', '1234123123456', 'fixed-ONLINE', 'Paid - Prepairing'),
(40, 20, 'Dann Sison', '9569123627', 'dannr12284853@gmail.com', 'online payment', '159 ascano st malibay Brgy.176 Pasay - NCR zip:1300', ', Mini Aria Bloom Box (1) ', 590, '', 100, '20-Feb-2024', '04:56:51', 'FLRSSTPH2024022004565120', 'FLORESSETTE EXPRESS', ' 9:00 AM - 11:00 AM', '098709809865', 'fixed-ONLINE', 'Paid - Prepairing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(100) NOT NULL,
  `custom_note` varchar(100) NOT NULL,
  `delivery_charges` int(100) NOT NULL,
  `placed_on` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `tracking_number` varchar(40) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `payment_status` varchar(30) NOT NULL DEFAULT 'Pending (COD)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `contact_number`, `email`, `note`, `method`, `address`, `total_products`, `total_price`, `custom_note`, `delivery_charges`, `placed_on`, `time`, `tracking_number`, `delivery_date`, `delivery_time`, `order_type`, `payment_status`) VALUES
(93, 20, 'Dann Sison', '9569123627', 'dannr12284853@gmail.com', '', 'cash on delivery', '159 ascano st malibay Brgy.176 Pasay - NCR zip:1300', ', Helia (1) ', 1250, '', 100, '20-Feb-2024', '04:05:49', 'FLRSSTPH2024022004054920', 'FLORESSETTE EXPRESS', ' 9:00 AM - 11:00 AM', 'fixed-COD', 'On-transit');

-- --------------------------------------------------------

--
-- Table structure for table `payee`
--

DROP TABLE IF EXISTS `payee`;
CREATE TABLE `payee` (
  `payee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `shipping_rate` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payee`
--

INSERT INTO `payee` (`payee_id`, `name`, `contact_number`, `qr_code`, `shipping_rate`, `date`) VALUES
(32, 'Juan Dela Crush', '09876543212', 'bdcb6414071ce880f3fa1dc18e2eda5b.jpg', 50, '2024-02-19 14:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_and_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `stock`, `sold`, `price`, `image`, `date_and_time`) VALUES
(45, 'Caitlyn Bloom Box', 'A luxurious arrangement of exquisite flowers elegantly presented in a stylish box. Each bloom radiates sophistication and charm, creating a stunning centerpiece that\'s perfect for any special occasion or heartfelt gesture.', 97, 1, 499, 'Caitlyn Bloom Box.jpg', '2022-01-01 08:23:17'),
(46, 'Isla Bloom Box', 'A captivating arrangement of vibrant flowers nestled in a chic box. Each bloom exudes elegance, adding a touch of glamour to any space. Perfect for expressing love, appreciation, or celebration in style.', 37, 63, 450, 'Isla Bloom Box.png', '2022-01-03 15:45:59'),
(47, 'Mini Aria Bloom Box', 'A petite yet enchanting arrangement of delicate flowers elegantly presented in a charming box. Each bloom sings with beauty, offering a delightful touch of elegance for any occasion or sentiment.', 98, 2, 590, 'Mini Aria Bloom Box.png', '2022-01-05 11:30:42'),
(48, 'Mini Ava Daisy Bloom Box', 'The Mini Ava Daisy Bloom Box features an enchanting array of cheerful daisies, each petal radiating with sunny hues and delicate charm. This petite yet vibrant arrangement is a perfect gesture to bring joy and warmth to any space.', 98, 3, 399, 'Mini Ava Daisy Bloom Box.png', '2022-01-07 19:55:21'),
(49, 'Mini Daisy Bloom Box', 'The Mini Daisy Bloom Box is a charming ensemble of petite daisies, exuding the essence of simplicity and cheerfulness. Each bloom boasts delicate petals and a sunny disposition, making it a delightful gift to brighten any room or occasion.', 99, 1, 360, 'Mini Daisy Bloom Box.png', '2022-01-10 06:12:33'),
(51, 'Mini Ivy Rose Bloom Box', 'The Mini Ivy Rose Bloom Box features exquisite roses nestled amidst delicate ivy leaves, creating a captivating blend of elegance and charm. Each bloom exudes romance and beauty, making it a perfect gesture for expressing love and admiration.', 98, 2, 285, 'Mini Ivy Rose Bloom Box.png', '2022-01-12 13:20:05'),
(52, 'Bloom in Blue', 'Bloom in Blue showcases nature\'s serenity with its striking blue petals that evoke tranquility and calmness. Each bloom radiates elegance and grace, adding a touch of sophistication to any floral arrangement or garden landscape.', 98, 2, 1299, 'Bloom in Blue.png', '2022-01-14 22:01:48'),
(53, 'Helia', 'Helia is a radiant and enchanting flower that symbolizes warmth and light. With its vibrant hues and graceful petals, Helia exudes beauty and positivity, bringing joy and brightness to any environment it graces.', 15, 49, 1250, 'Helia.png', '2022-01-17 09:38:27'),
(54, 'Juliette Rose Fresh Flower Bouquet', 'Introducing the Juliette Rose Fresh Flower Bouquet, a stunning arrangement of delicate roses in various shades of pink, red, and cream. Each bloom exudes romance and elegance, making it the perfect gesture for expressing love and admiration.', 99, 1, 1399, 'Juliette Rose Fresh Flower Bouqu.png', '2022-01-19 17:20:11'),
(55, 'Lily Bouquet', 'The Lily Bouquet is a captivating ensemble of elegant lilies, each bloom showcasing exquisite petals in shades of white, pink, or orange. With their graceful form and enchanting fragrance, lilies add a touch of sophistication and beauty to any occasion.', 99, 1, 1199, 'Lily Bouquet.png', '2022-01-22 04:59:36'),
(56, 'Floral Fiesta Bouquet', 'The Floral Fiesta Bouquet bursts with vibrant colors and lively blooms, creating a celebration of nature\'s beauty. With a captivating blend of roses, daisies, and other delightful flowers, this arrangement is a perfect centerpiece for any festive occasion', 98, 2, 999, 'Floral Fiesta Bouquet.png', '2024-01-07 05:59:08'),
(57, 'Spring Bouquet', 'The Spring Bouquet is a charming medley of fresh blooms, capturing the essence of the season\'s renewal. With a delightful mix of tulips, daffodils, and hyacinths, this arrangement brings a burst of color and joy to any space.', 99, 1, 890, 'Spring Bouquet.png', '2024-01-04 19:20:36'),
(58, 'Elena-Fresh-Flower-Bouquet', 'Introducing the Elena Fresh Flower Bouquet, a stunning arrangement featuring a harmonious blend of roses, lilies, and vibrant greenery. Each bloom exudes elegance and charm, making it the perfect choice for brightening any occasion with natural beauty.', 99, 1, 1250, 'Elena-Fresh-Flower-Bouquet.png', '2024-01-02 11:40:15'),
(59, 'Valerie Rose Fresh Flower Bouquet', 'Presenting the Valerie Rose Fresh Flower Bouquet, a breathtaking ensemble of velvety roses in a variety of captivating hues. Each bloom exudes romance and sophistication, making it the perfect gift to convey love and admiration with timeless elegance.', 99, 5, 1599, 'Valerie Rose Fresh Flower Bouque.png', '2023-01-30 03:55:48'),
(60, 'Lovely Lillian', 'Lovely Lillian blooms with delicate petals in soft shades of pink and white, exuding a gentle charm and grace. This elegant flower adds a touch of romance and beauty to any bouquet or floral arrangement, captivating hearts with its understated loveliness.', 99, 1, 1785, 'Lovely Lillian.png', '2023-01-27 17:10:26'),
(61, 'Lily Fresh Flower Bouquet', 'The Lily Fresh Flower Bouquet showcases the timeless elegance of lilies in various captivating hues. With their graceful petals and enchanting fragrance, each bloom exudes sophistication and beauty, making it a perfect choice for any special occasion.', 99, 1, 1460, 'Lily Fresh Flower Bouquet.png', '2023-01-25 09:34:59'),
(62, 'One Dozen Fossilized Flower Bouquet', 'The One Dozen Fossilized Flower Bouquet is a unique and exquisite arrangement featuring preserved blooms frozen in time. Each delicate flower retains its natural beauty and color, offering a captivating glimpse into the past with timeless elegance.', 0, 100, 1999, 'One Dozen Fossilized Flower Bouq.jpg', '2023-01-22 22:09:03'),
(63, 'Sweet Sunrise', 'Sweet Sunrise blooms with radiant petals in shades of orange, pink, and yellow, evoking the warmth and beauty of a dawn sky. This vibrant flower exudes energy and joy, making it a perfect addition to any bouquet or floral arrangement.', 19, 2, 2190, 'Sweet Sunrise.png', '2023-01-20 14:22:48'),
(64, 'A Dozen Crochet Roses', 'A Dozen Crochet Roses offers a charming twist on traditional blooms, meticulously crafted with intricate crochet patterns. Each delicate rose exudes vintage charm and timeless elegance, making it a perfect gift for adding a touch of handmade beauty to any', 99, 1, 2420, 'A Dozen Crochet Roses.png', '2023-01-18 06:40:14'),
(65, 'Ava Daisy Fresh Flower Bouquet', 'Introducing the Ava Daisy Fresh Flower Bouquet, a delightful arrangement featuring cheerful daisies in a variety of vibrant hues. Each bloom exudes happiness and charm, making it the perfect choice for brightening any space with its simple yet captivating', 99, 1, 2350, 'Ava Daisy Fresh Flower Bouquet.jpg', '2023-01-11 03:47:29'),
(66, 'Cappuccino Rose Fresh Flower Bouquet', 'The Cappuccino Rose Fresh Flower Bouquet offers a sophisticated blend of creamy beige and soft brown hues, reminiscent of a warm cappuccino. Each bloom exudes elegance and charm, making it a perfect choice for adding a touch of refined beauty to any occas', 99, 1, 2799, 'Cappuccino Rose Fresh Flower Bou.png', '2023-01-06 09:25:37'),
(67, 'Clouds of Affection', 'Clouds of Affection blooms with fluffy white petals resembling soft clouds, evoking feelings of warmth and tenderness. This delicate flower exudes a sense of gentle affection and purity, making it a heartfelt choice for expressing love and appreciation.', 94, 6, 2690, 'Clouds of Affection.png', '2023-01-11 03:47:29'),
(68, 'Elsie Pink Fresh Flower Bouquet', 'The Elsie Pink Fresh Flower Bouquet, a captivating arrangement of delicate pink blooms exuding elegance and grace. Each flower radiates with a soft hue, creating a charming display that\'s perfect for expressing love and admiration.', 99, 1, 2580, 'Elsie Pink Fresh Flower Bouquet.png', '2023-01-03 20:49:55'),
(69, 'Everly Blue Fresh Flower Bouquet', 'Presenting the Everly Blue Fresh Flower Bouquet, a mesmerizing ensemble of blooms in serene shades of blue. Each delicate flower exudes tranquility and beauty, offering a soothing presence that\'s perfect for bringing a sense of calm to any space.', 98, 2, 3570, 'Everly Blue Fresh Flower Bouquet.png', '2022-01-26 20:33:45'),
(70, 'Cosmic Cascade Bleeding Heart', 'The Cosmic Cascade Bleeding Heart is a captivating perennial with heart-shaped blossoms dangling gracefully, resembling celestial teardrops. Its vibrant pink petals and unique form add a touch of wonder and elegance, making it a standout in any garden.', 99, 1, 3690, 'Cosmic Cascade Bleeding Heart.png', '2024-01-09 13:45:29'),
(71, 'Crystal Petal', 'Crystal Petal is a stunning bloom akin to translucent crystals, boasting delicate, shimmering petals that catch the light. Its ethereal beauty and captivating charm make it a prized addition to any bouquet, adding a touch of elegance and enchantment.', 99, 1, 3420, 'Crystal Petal.png', NULL),
(72, 'Dreamweaver Dandelion', 'The Dreamweaver Dandelion, a whimsical bloom that dances in the breeze like threads of a dream. Its feathery seeds spread wishes and hopes, embodying the magic of imagination and possibility, inviting one to chase their dreams with every gentle gust.', 99, 1, 3750, 'Dreamweaver Dandelion.png', NULL),
(73, 'Gerbera Galore', 'Gerbera Galore bursts with vivacious colors, each bloom a radiant celebration of joy and vitality. With its bold presence and charming petals, this flower embodies optimism, making it perfect for brightening any space with exuberant cheer.', 99, 1, 3299, 'Gerbera Galore.png', NULL),
(75, 'Radiant Ripple Phlox', 'Radiant Ripple Phlox dazzles with its vibrant clusters of star-shaped blossoms, creating a mesmerizing display of color. With hues ranging from deep purples to soft pinks, this resilient perennial adds a stunning ripple of beauty to any garden landscape.', 99, 1, 3840, 'Radiant Ripple Phlox.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `flat` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_number`, `flat`, `street`, `barangay`, `city`, `region`, `zip`, `password`, `user_type`) VALUES
(16, 'Jea Mae Pernia', 'jeamaepernia@gmail.com', '', '', '', '', '', '', '', '105c38e94ae40547ee8c955c67a2c417', 'user'),
(17, 'admin', 'admin@gmail.com', '', '', '', '', '', '', '', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(18, 'Philip Niko Alvarado', 'philipnikoalvarado@gmail.com', '', '', '', '', '', '', '', '105c38e94ae40547ee8c955c67a2c417', 'user'),
(19, '', '', '', '', '', '', '', '', '', '', 'guest'),
(20, 'Dann Sison', 'dannr12284853@gmail.com', '9569123627', '159', 'ascano st malibay', '176', 'Pasay', 'NCR', '1300', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(21, 'Kuya Rider', 'rider@gmail.com', '', '', '', '', '', '', '', '2c308cebf509cd27afe35ee987083f38', 'rider');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(71, 16, 48, 'Mini Ava Daisy Bloom Box', 399, 'Mini Ava Daisy Bloom Box.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payee`
--
ALTER TABLE `payee`
  ADD PRIMARY KEY (`payee_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `online_payment`
--
ALTER TABLE `online_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payee`
--
ALTER TABLE `payee`
  MODIFY `payee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
