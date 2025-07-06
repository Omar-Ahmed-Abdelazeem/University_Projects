-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 10:57 PM
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
-- Database: `echogifts`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(11) NOT NULL,
  `areaname` varchar(50) NOT NULL,
  `cityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `areaname`, `cityid`) VALUES
(1, 'Heliopolis', 1),
(2, 'Nasr City', 1),
(3, 'Maadi', 1),
(4, 'Zamalek', 1),
(5, 'New Cairo', 1),
(6, 'Smouha', 2),
(7, 'Sidi Gaber', 2),
(8, 'Montaza', 2),
(9, 'Roushdy', 2),
(10, 'Miami', 2),
(11, 'Dokki', 3),
(12, 'Mohandessin', 3),
(13, 'Haram', 3),
(14, 'Faisal', 3),
(15, 'Imbaba', 3),
(16, 'East Bank', 4),
(17, 'West Bank', 4),
(18, 'Karnak', 4),
(19, 'Armant', 4),
(20, 'Esna', 4),
(21, 'El Sad El Aali', 5),
(22, 'Gharb Sohail', 5),
(23, 'Al Nubia', 5),
(24, 'Kom Ombo', 5),
(25, 'Edfu', 5),
(26, 'Al Olaya', 6),
(27, 'Al Malaz', 6),
(28, 'Al Murabba', 6),
(29, 'King Fahd District', 6),
(30, 'Al Nakheel', 6),
(31, 'Al-Rehab', 7),
(32, 'Al-Safa', 7),
(33, 'Al-Rawdah', 7),
(34, 'Al-Hamra', 7),
(35, 'Al-Shatea', 7),
(36, 'Aziziyah', 8),
(37, 'Al-Haram', 8),
(38, 'Al-Nuzha', 8),
(39, 'Al-Shawqiyyah', 8),
(40, 'Mina', 8),
(41, 'Quba', 9),
(42, 'Al-Salam', 9),
(43, 'Al-Awali', 9),
(44, 'Al-Jurf', 9),
(45, 'Al-Mahdiyah', 9),
(46, 'Al-Faisaliah', 10),
(47, 'Al-Mazrouiah', 10),
(48, 'Al-Raka', 10),
(49, 'Al-Hada', 10),
(50, 'Al-Jamiyeen', 10),
(51, 'Deira', 11),
(52, 'Bur Dubai', 11),
(53, 'Jumeirah', 11),
(54, 'Al Barsha', 11),
(55, 'Marina', 11),
(56, 'Al Khalidiyah', 12),
(57, 'Mussafah', 12),
(58, 'Al Mushrif', 12),
(59, 'Al Reem Island', 12),
(60, 'Al Zahiyah', 12),
(61, 'Al Majaz', 13),
(62, 'Al Nahda', 13),
(63, 'Al Qasimia', 13),
(64, 'Al Tawun', 13),
(65, 'Muweilah', 13),
(66, 'Al Rashidiya', 14),
(67, 'Al Nuaimiya', 14),
(68, 'Al Rumailah', 14),
(69, 'Al Mowaihat', 14),
(70, 'Al Jurf', 14),
(71, 'Al Hili', 15),
(72, 'Al Jimi', 15),
(73, 'Al Foah', 15),
(74, 'Al Ain City Center', 15),
(75, 'Al Bateen', 15),
(76, 'Maarif', 16),
(77, 'Anfa', 16),
(78, 'Bourgogne', 16),
(79, 'Hay Hassani', 16),
(80, 'Sidi Bernoussi', 16),
(81, 'Agdal', 17),
(82, 'Hay Riad', 17),
(83, 'Akkari', 17),
(84, 'Souissi', 17),
(85, 'Yacoub El Mansour', 17),
(86, 'Fes El Bali', 18),
(87, 'Ville Nouvelle', 18),
(88, 'Fes El Jdid', 18),
(89, 'Ziat', 18),
(90, 'Batha', 18),
(91, 'Medina', 19),
(92, 'Gueliz', 19),
(93, 'Hivernage', 19),
(94, 'Palmeraie', 19),
(95, 'Menara', 19),
(96, 'Talborjt', 20),
(97, 'Hay Mohammadi', 20),
(98, 'Bensergao', 20),
(99, 'Dakhla', 20),
(100, 'Founty', 20),
(101, 'Abdoun', 21),
(102, 'Sweifieh', 21),
(103, 'Khalda', 21),
(104, 'Jabal Amman', 21),
(105, 'Shmeisani', 21),
(106, 'New Zarqa', 22),
(107, 'Zarqa Al Jadida', 22),
(108, 'Russeifa', 22),
(109, 'Al Qweismeh', 22),
(110, 'Jabal Tareq', 22),
(111, 'Al Yarmouk', 23),
(112, 'Al Hizam', 23),
(113, 'Hay Al Janoubi', 23),
(114, 'Al Barha', 23),
(115, 'Al Hoson', 23),
(116, 'Aqaba Center', 24),
(117, 'Al Karama', 24),
(118, 'Al Mahdiyah', 24),
(119, 'Al-Saadeh', 24),
(120, 'Marina Village', 24),
(121, 'Madaba Centre', 25),
(122, 'Ma’in', 25),
(123, 'Al-Faisaliah', 25),
(124, 'Dhiban', 25),
(125, 'Umm Ar-Rasas', 25);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(8, 'Books'),
(1, 'Electronics'),
(2, 'Fashion'),
(10, 'Food'),
(5, 'Furniture '),
(9, 'Gadgets'),
(4, 'Gamming'),
(6, 'Health & Beauty'),
(3, 'Home & Kitchen'),
(7, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `recieverid` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `senderid`, `recieverid`, `message`, `timestamp`) VALUES
(1, 1, 2, 'Hi, I saw your gift listing in Heliopolis. I\'m interested and would like to meet up to get it. When are you available?', '2025-05-03 17:37:57'),
(2, 2, 1, 'Hello! I\'m glad you\'re interested. I\'m available this weekend. What time works for you?', '2025-05-03 17:38:01'),
(3, 3, 4, 'Hello, I\'m interested in your gift posted in New Cairo. Could we meet to finalize the exchange? Let me know your availability.', '2025-05-03 17:38:07'),
(4, 4, 3, 'Hi! I\'m free after 4 PM this weekend. Does that work for you?', '2025-05-03 17:38:10'),
(5, 2, 5, 'Hi, I found your gift in Maadi. I\'d like to meet with you soon to pick it up. What time is convenient for you?', '2025-05-03 17:38:22'),
(6, 5, 2, 'Hey there! I\'m available tomorrow afternoon, around 3 PM. Does that work for you?', '2025-05-03 17:38:29'),
(7, 4, 1, 'Hey, I saw the gift in Zamalek. I\'m interested in receiving it. Can we arrange a meet-up?', '2025-05-03 17:38:31'),
(8, 1, 4, 'Hi! I\'m glad you\'re interested. Let\'s meet tomorrow at 5 PM. Is that good for you?', '2025-05-03 17:38:35'),
(9, 5, 3, 'Hello, I saw your listing in Nasr City. I\'d like to meet and pick it up soon. What’s a good time for you?', '2025-05-03 17:38:37'),
(10, 3, 5, 'Hi! I\'m free tomorrow morning at 10 AM. How does that sound?', '2025-05-03 17:38:41'),
(11, 6, 2, 'Hi! I found your gift in Downtown Cairo. Can we meet up so I can pick it up from you?', '2025-05-03 17:38:49'),
(12, 2, 6, 'Sure! I\'m free after 6 PM tomorrow. Let me know if that works.', '2025-05-03 17:38:51'),
(13, 3, 6, 'Hey, I saw your listing in Giza. I am interested and would like to meet. Let me know your availability.', '2025-05-03 17:38:54'),
(14, 6, 3, 'Hi! I\'m available on Saturday afternoon. Does that work for you?', '2025-05-03 17:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `countryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `countryid`) VALUES
(1, 'Cairo', 1),
(2, 'Alexandria', 1),
(3, 'Giza', 1),
(4, 'Luxor', 1),
(5, 'Aswan', 1),
(6, 'Riyadh', 2),
(7, 'Jeddah', 2),
(8, 'Mecca', 2),
(9, 'Medina', 2),
(10, 'Dammam', 2),
(11, 'Dubai', 3),
(12, 'Abu Dhabi', 3),
(13, 'Sharjah', 3),
(14, 'Ajman', 3),
(15, 'Al Ain', 3),
(16, 'Casablanca', 4),
(17, 'Rabat', 4),
(18, 'Fes', 4),
(19, 'Marrakesh', 4),
(20, 'Agadir', 4),
(21, 'Amman', 5),
(22, 'Zarqa', 5),
(23, 'Irbid', 5),
(24, 'Aqaba', 5),
(25, 'Madaba', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryid` int(11) NOT NULL,
  `countryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `countryname`) VALUES
(1, 'Egypt'),
(5, 'Jordan'),
(4, 'Morocco'),
(2, 'Saudi Arabia'),
(3, 'United Arab Emirates');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customersid` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customersid`, `email`, `password`, `username`) VALUES
(1, 'saif@saif0.com', 'Saif0', 'Agent 007'),
(2, 'ayoub@example.com', 'pass123', 'Ayoub'),
(3, 's@example.com', 'secure456', 'Fatima'),
(4, 'Hussein@example.com', 'hello789', 'Hussein'),
(5, 'Sa@example.com', 'mypassword', 'Saber'),
(6, 'omar@example.com', 'testpass', 'Omar'),
(7, 'ahmed.ali@example.com', 'password123', 'أحمد علي'),
(8, 'hassan@example.com', 'password123', 'حسن'),
(9, 'mohammed.ali@example.com', 'password123', 'محمد علي'),
(10, 'layla@example.com', 'password123', 'خالد'),
(11, 'omar.salem@example.com', 'password123', 'عمر سالم'),
(12, 'john.doe@example.com', 'password123', 'Saif'),
(13, 'jane.smith@example.com', 'password123', 'Saber'),
(14, 'mike.jones@example.com', 'password123', 'Hussein'),
(15, 'emily.brown@example.com', 'password123', 'Ayoub'),
(16, 'test@saif.com', '$2y$10$vhjTUb4EfnraEc.HRQYlDOhoMnTKSkz0yJ/N4bAnG0HUPZZ8s6MkC\n', 'Saber'),
(17, 'test@test.saif', '$2y$10$F6KaPMypX.c1EXIDl6Z/A.7wIt1.NXLC81SpExf1B1nFJcAcplBPO\n', 'Saif'),
(18, 'omar@omar.omar', '$2y$10$7ZAnNaV9cpcFyIOUEM8pwOpW7THDdfo.JoblnhWgS22m6Khj8Dnxu', 'omar');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productsid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `areaid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsid`, `title`, `details`, `img1`, `img2`, `img3`, `areaid`, `categoryid`, `customerid`) VALUES
(1, 'Smartphone', 'Latest model with high resolution camera, fast processor, and 128GB storage.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 1, 1, 1),
(2, 'Laptop', 'High-performance laptop with 16GB RAM and 512GB SSD.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 2, 1, 2),
(3, 'Headphones', 'Noise-cancelling headphones with deep bass and 20-hour battery life.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 3, 1, 3),
(4, 'Smartwatch', 'Fitness-focused smartwatch with heart rate monitor and GPS tracking.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 4, 1, 4),
(5, 'Bluetooth Speaker', 'Portable Bluetooth speaker with waterproof design and 12-hour battery life.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 5, 1, 5),
(6, 'Men\'s T-shirt', 'Cotton T-shirt with a comfortable fit and stylish design.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 6, 2, 1),
(7, 'Women\'s Dress', 'Elegant and stylish dress for evening wear or casual outings.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 7, 2, 2),
(8, 'Sneakers', 'Comfortable sneakers designed for daily wear and athletic activities.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 8, 2, 3),
(9, 'Handbag', 'Fashionable handbag made from genuine leather with adjustable straps.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 9, 2, 4),
(10, 'Jacket', 'Warm jacket made from high-quality materials, perfect for winter weather.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 10, 2, 5),
(11, 'Air Conditioner', 'Energy-efficient air conditioner with smart control feature and quiet operation.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 11, 3, 1),
(12, 'Washing Machine', 'Top-load washing machine with multiple wash cycles and energy-saving features.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 12, 3, 2),
(13, 'Refrigerator', 'Spacious refrigerator with energy-efficient compressor and frost-free technology.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 13, 3, 3),
(14, 'Microwave Oven', 'Microwave oven with quick defrost and easy-clean interior.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 14, 3, 4),
(15, 'Electric Kettle', 'Quick-boiling electric kettle with auto-shutoff and stainless steel finish.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 15, 3, 5),
(16, 'Game Console', 'Next-gen game console with 1TB storage and enhanced graphics.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 16, 4, 1),
(17, 'Gaming Chair', 'Ergonomic gaming chair with adjustable armrests and lumbar support.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 17, 4, 2),
(18, 'Digital Camera', 'DSLR camera with 20MP sensor and 4K video recording.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 18, 4, 3),
(19, 'Smart TV', '55-inch 4K Ultra HD Smart TV with Wi-Fi and streaming capabilities.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 19, 4, 4),
(20, 'Fitness Tracker', 'Waterproof fitness tracker with heart rate monitoring and sleep tracking.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 20, 4, 5),
(21, 'Sofa', 'Comfortable sofa made from premium materials, perfect for the living room.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 21, 5, 1),
(22, 'Dining Table', 'Stylish dining table made from solid wood with seating for 6.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 22, 5, 2),
(23, 'Chair', 'Ergonomic chair for office use, with adjustable height and lumbar support.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 23, 5, 3),
(24, 'Bookshelf', 'Modern bookshelf made of wood with multiple compartments for storage.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 24, 5, 4),
(25, 'Coffee Table', 'Stylish coffee table with glass top and metal legs.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 25, 5, 5),
(26, 'Face Cream', 'Nourishing face cream with anti-aging properties.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 26, 6, 1),
(27, 'Shampoo', 'Gentle shampoo for daily hair care, suitable for all hair types.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 27, 6, 2),
(28, 'Perfume', 'Luxury perfume with floral and woody notes, long-lasting fragrance.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 28, 6, 3),
(29, 'Toothpaste', 'Whitening toothpaste with fluoride for fresh breath and healthy teeth.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 29, 6, 4),
(30, 'Makeup Kit', 'Complete makeup kit with eyeshadows, lipsticks, and foundation.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 30, 6, 5),
(31, 'Tennis Racket', 'High-quality tennis racket for professional players.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 31, 7, 1),
(32, 'Yoga Mat', 'Non-slip yoga mat with extra thickness for comfort during workouts.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 32, 7, 2),
(33, 'Football', 'Premium leather football for training and matches.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 33, 7, 3),
(34, 'Running Shoes', 'Lightweight running shoes designed for comfort and speed.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 34, 7, 4),
(35, 'Dumbbells', 'Set of adjustable dumbbells for strength training at home.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 35, 7, 5),
(36, 'Novel', 'Bestselling novel by a famous author, gripping story and characters.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 36, 8, 1),
(37, 'Cookbook', 'Delicious recipes for every occasion, perfect for home cooks.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 37, 8, 2),
(38, 'Science Fiction Book', 'Futuristic adventure in a new galaxy with thrilling plot twists.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 38, 8, 3),
(39, 'Children\'s Book', 'Educational and fun book for young readers, full of colorful illustrations.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 39, 8, 4),
(40, 'History Book', 'In-depth look at historical events and their impact on the modern world.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 40, 8, 5),
(41, 'Guitar', 'Acoustic guitar with rich sound and smooth finish, perfect for beginners.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 41, 9, 1),
(42, 'Headphones', 'High-quality headphones for music lovers with crisp sound and deep bass.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 42, 9, 2),
(43, 'Microphone', 'Professional microphone for recording or live performances.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 43, 9, 3),
(44, 'Electric Piano', 'Portable electric piano with realistic sound and touch-sensitive keys.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 44, 9, 4),
(45, 'Vinyl Records', 'Collection of classic vinyl records, perfect for audiophiles.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 45, 9, 5),
(46, 'Olive Oil', 'Organic extra virgin olive oil for cooking and salads.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 46, 10, 1),
(47, 'Coffee Beans', 'Freshly roasted coffee beans from premium farms for a rich aroma.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 47, 10, 2),
(48, 'Organic Honey', 'Pure and natural honey with no additives or preservatives.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 48, 10, 3),
(49, 'Protein Powder', 'High-quality protein powder for muscle recovery and strength building.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 49, 10, 4),
(50, 'Chocolate Box', 'Assorted premium chocolates, perfect for gifting or indulging yourself.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 50, 10, 5),
(51, 'Bluetooth Earbuds', 'Compact earbuds with noise isolation and charging case.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 1, 1, 2),
(52, 'Leather Wallet', 'Slim wallet made from genuine leather with RFID protection.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 2, 2, 3),
(53, 'Rice Cooker', 'Automatic rice cooker with keep-warm function and steam tray.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 3, 3, 4),
(54, 'Gaming Keyboard', 'Mechanical keyboard with RGB lighting and programmable keys.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 4, 4, 5),
(55, 'Bean Bag Chair', 'Comfortable bean bag with soft velvet cover.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 5, 5, 1),
(56, 'Shaving Kit', 'Complete shaving kit with razor, brush, and balm.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 6, 6, 2),
(57, 'Resistance Bands', 'Set of resistance bands for full-body workouts.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 7, 7, 3),
(58, 'Notebook Journal', 'Hardcover journal with dotted pages for notes and planning.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 8, 8, 4),
(59, 'Music Tuner', 'Digital tuner for string instruments with clip-on sensor.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 9, 9, 5),
(60, 'Energy Bars', 'Pack of 12 high-protein energy bars in assorted flavors.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 10, 10, 1),
(61, 'Tablet Stand', 'Adjustable tablet holder for desks and countertops.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 11, 1, 2),
(62, 'Summer Hat', 'Breathable sun hat with wide brim and UV protection.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 12, 2, 3),
(63, 'Electric Grill', 'Smokeless indoor grill with temperature control.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 13, 3, 4),
(64, 'Streaming Webcam', '1080p HD webcam with built-in microphone.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 14, 4, 5),
(65, 'Floor Lamp', 'Modern standing lamp with adjustable brightness.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 15, 5, 1),
(66, 'Hair Dryer', 'Ionic hair dryer with multiple speed and heat settings.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 16, 6, 2),
(67, 'Boxing Gloves', 'Durable gloves for sparring and training sessions.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 17, 7, 3),
(68, 'Puzzle Book', 'Challenging puzzles to improve memory and focus.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 18, 8, 4),
(69, 'Ukulele', 'Beginner-friendly ukulele with carry bag and tuner.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 19, 9, 5),
(70, 'Tea Sampler', 'Set of herbal and green teas in assorted flavors.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 20, 10, 1),
(71, 'Portable Power Bank', '10,000mAh power bank with dual USB output.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 21, 1, 2),
(72, 'Skirt', 'Pleated skirt made from lightweight fabric, ideal for summer.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 22, 2, 3),
(73, 'Toaster', '2-slice toaster with wide slots and browning control.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 23, 3, 4),
(74, 'Streaming Stick', 'Portable media streaming device with voice control.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 24, 4, 5),
(75, 'Bookshelf Speaker', 'Compact bookshelf speaker with deep bass response.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 25, 9, 1),
(76, 'Wireless Charger', 'Fast wireless charger compatible with most smartphones.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 1, 1, 3),
(77, 'Action Camera', 'Waterproof action camera with 4K recording and wide-angle lens.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 2, 1, 4),
(78, 'Tablet', '10-inch Android tablet with 64GB storage and HD display.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 3, 1, 5),
(79, 'Noise Cancelling Earphones', 'In-ear earphones with active noise cancellation and mic.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 4, 1, 1),
(80, 'Smart Light Bulb', 'Wi-Fi enabled bulb with customizable color and scheduling.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 5, 1, 2),
(81, 'Winter Scarf', 'Woolen scarf for cold weather with classic design.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 6, 2, 3),
(82, 'Jeans', 'Slim-fit jeans made with stretch denim for comfort.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 7, 2, 4),
(83, 'Blender', 'Powerful blender with multi-speed settings and glass jar.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 11, 3, 3),
(84, 'Vacuum Cleaner', 'Bagless vacuum cleaner with HEPA filter and strong suction.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 12, 3, 4),
(85, 'Dehumidifier', 'Compact dehumidifier suitable for small rooms and closets.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 13, 3, 5),
(86, 'Gaming Mouse', 'Ergonomic mouse with customizable DPI and RGB lighting.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 16, 4, 3),
(87, 'Game Controller', 'Wireless controller compatible with major consoles and PC.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 17, 4, 4),
(88, 'VR Headset', 'Immersive virtual reality headset with 3D tracking.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 18, 4, 5),
(89, 'Gaming Monitor', '27-inch gaming monitor with 144Hz refresh rate and 1ms response time.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 19, 4, 1),
(90, 'Arcade Stick', 'Retro-style arcade controller for fighting games.', 'img/products/1.jpg', 'img/products/2.jpg', 'img/products/3.jpg', 20, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`),
  ADD UNIQUE KEY `name` (`categoryname`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`),
  ADD KEY `recieverid` (`recieverid`),
  ADD KEY `senderid` (`senderid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryid`),
  ADD UNIQUE KEY `name` (`countryname`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customersid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productsid`),
  ADD KEY `areaid` (`areaid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `customerid` (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customersid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`recieverid`) REFERENCES `customers` (`customersid`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`senderid`) REFERENCES `customers` (`customersid`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`countryid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customersid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
