-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 12:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthtrektours`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'Hiking', 'Hiking abcd', '2022-10-10 14:19:05', '2022-10-10 14:19:05', 'flaticon-hiking'),
(2, 'City Tours', 'City Tours abcd', '2022-10-10 14:19:05', '2022-10-10 14:19:05', 'flaticon-city-tours'),
(3, 'Jungle Safari', 'Jungle Safari abcd', '2022-10-10 14:19:05', '2022-10-10 14:19:05', 'flaticon-jungle'),
(4, 'Beach Activity', 'Beach Activity abcd', '2022-10-10 14:19:05', '2022-10-10 14:19:05', 'flaticon-beach'),
(5, 'Ancient Sites', 'Visit top of the historical places in Pakistan', '2022-10-13 23:53:40', '2022-10-13 23:53:40', 'flaticon-map-marker'),
(6, 'Festivals Of Pakistan', 'Festivals Of Pakistan', '2022-10-14 00:08:10', '2022-10-13 19:00:00', 'flaticon-special');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'contact_us',
  `no_of_days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `ip_address`, `user_agent`, `created_at`, `updated_at`, `type`, `no_of_days`, `destination_id`) VALUES
(1, 'Akash Ahmed', 'akashrajput9@hotmail.com', '823975328709', 'test message', '127.0.0.1', 'chrome/mozala', '2022-10-10 16:59:49', '2022-10-10 16:59:49', 'contact_us', NULL, NULL),
(2, 'fgsd gfdsg', 'FGD@fdsh.com', 'wertwetert4', 'GDSGDFSH', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-16 13:52:35', '2022-10-16 13:52:35', 'contact_us', NULL, NULL),
(3, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-29 15:37:15', '2022-10-29 15:37:15', 'contact_us', '3', 3),
(4, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-29 15:39:03', '2022-10-29 15:39:03', 'custom_tour', '6', 4),
(5, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-29 16:30:40', '2022-10-29 16:30:40', 'custom_tour', '5', 2),
(6, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '59.103.74.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-30 00:10:22', '2022-10-30 00:10:22', 'custom_tour', '1', 2),
(7, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '59.103.74.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '2022-10-30 00:12:30', '2022-10-30 00:12:30', 'custom_tour', '1', 2),
(8, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-12 17:22:44', '2022-11-12 17:22:44', 'custom_tour', '3', 2),
(9, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03013563480', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-12 17:24:35', '2022-11-12 17:24:35', 'custom_tour', '3', 2),
(10, 'Akash Ahmed', 'akashrajput9@hotmail.com', '21321312', 'test', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-12 17:25:10', '2022-11-12 17:25:10', 'custom_tour', '32', 3),
(11, 'Akash Ahmed', 'akashrajput9@hotmail.com', '03331358380', 'ada', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '2022-11-12 17:31:12', '2022-11-12 17:31:12', 'custom_tour', '12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hunza Valley', 'Hunza, known as Heaven on Earth, is a beautiful mountainous valley located in the Gilgit- Baltistan region of Pakistan. Situated at the north/west of the Hunza River, it is surrounded by several high peaks including Rakaposhi, Hunza Peak, BojahagurDuanasir II, Darmyani Peak, Ghenta Sar, Ultar Sar and Ladyfinger Peak. The valley has different beautiful natural sights which are the attractions for tourists. \r\n  Besides its scenic beauty, tourists visit this valley to have a glimpse of the two most famous forts of Hunza known as Altit and Baltit fort. In Hunza, the bazaar of Karimbad is famous for its local handicrafts, handmade rugs, traditional embroidered caps, shawls, hand woven cloth (paffu) and its gemstones which are famous all over the world, particularly Ruby. The Ruby mines are famous tourist attractions.\r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(2, 'Skardu Valley', 'Ever been to the valley of Skardu in Gilgit-Baltistan, Pakistan? Best known for its amazing topographical features and incredibly beautiful weather, the place is truly a piece of heaven on earth. This alluring valley attracts all types of tourists from around the world including nature lovers, photographers, documentary filmmakers and mountaineers. \r\nSkardu, along with Gilgit, is a major tourism, trekking and expedition hub in Gilgit–Baltistan. It is surrounded by the mighty mountains of the Karakoram Range. The presence of lush green vegetation, historical forts, panoramic mountainous views, a cold desert, freshwater rivers and lakes make the valley of Skardu an epitome of natural beauty.\r\nThe top attractions to visit in Skardu are Deosai National Park, Upper Kachura Lake, Shangrilla Lake, Manthokha Waterfall, Satpara Lake, Katpana Desert, Kamosh waterfall, cold desert, shigar valley, Basho valley and Khaplu. \r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(3, 'Swat ', 'The beautiful Swat valley, popularly known as East Switzerland, situated on the swat river in Khyber Pakhtunkhwa is a delight for tourists and is characteristic of its magnificent natural beauty and rich historical past. Thanks to bustling rivers, waterfalls, winding streams, glacial lakes, pine forests, alpine meadows, snowy peaks of Mankial and Flaksair, fruit-filled orchards, lush green fields, and flower-filled mountain slopes, especially the friendly Swati people, known for its traditional hospitality. \r\nKalam, Mahodand Lake, Malam Jabba, Takht-i-Bahi, Saidu Sharif, White Palace, Ushu Forest, Mingora, and Buddha Stupas are some of the main attractions in Swat\r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(4, 'Kumrat Valley', 'Kumrat Valley is the most famous gem of a place to visit in the Upper Dir District of Khyber Pakhtunkhwa. It is one of the beautiful valleys of Pakistan, and a picturesque spot for travelers. Every summer season thousands of tourists from different areas of the country visit Kumrat valley and enjoy the pristine greenery and cool weather.\r\nThere are many attractions and places to visit in the Kumrat Valley, covering a wide area that is just waiting for you to explore! There are breathtaking lakes, soaring mountains, picturesque valleys, lush green forests, and other natural attractions in Kumrat. These wonders of nature make Kumrat the most beautiful place to visit on everyone’s list when they are in Khyber Pakhtunkhwa, Pakistan. Waterfall in jahazbanda, Panjkora River, Do Kala Chasma, Badagoi Pass, Katora Lake, Dojanga, Thal are the famous tourist attractions in Kumrat valley. \r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(5, 'Neelum Valley', 'Neelum Valley, located in the 200 km arched area of Azad Kashmir, is one of the most attractive places in the tourist community. This valley is famous for its beauty and some attractions. It has lush forests, various waterfalls, freshwater streams and lush green mountains. It wears white shawls in winter and the river is wide. The only thing on the Neelum River is that it is the border with neighboring Pakistan and India.\r\nThe most famous tourist attractions in Neelum Valley are Ratti Gali Lake, Sharda Valley, Kel, Arangkel, Taobut, Dhani Waterfall, Kutton Waterfall, Upper Neelum & Baboon Top. \r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(6, 'Fairy Meadows', 'Google “most beautiful places in Pakistan” and, most likely, the first results will be Fairy Meadows. This green plateau, perched delicately below the enormous Nanga Parbat, is unlike any other place in the world. Words cannot describe how beautiful this area actually is. \r\nNowadays, Fairy Meadows is practically a rite of passage for those traveling in Pakistan, both foreign and local. At some point, everyone comes to stay in a log cabin for a few days and to pay respect to the “Killer Mountain.” Besides, the crazy jeep rides and trek up to the meadows is worth the trip alone!\r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(7, 'Kalash Valley', 'Located among the majestic green mountains, Kalash Valley, also known as ‘Kalasha Valley,’ resides in the Chitral district of Khyber Pakhtunkhwa. The residents of Kalash, known as Kalashi or Kalasha, are scattered in three different valleys namely Bumburet, Rumbur, and Birir, which are collectively known as Kalash Valley. \r\nAs beautiful and colourful as Kalash is, one of the factors behind its tourist attraction is its festivals.  While the festivals in Kalash Valley are celebrated throughout the year at different times, the main ones are Chilam Joshi Festival, Uchal Festival, Poh Festival, and Choimus Festival. \r\n', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(8, 'Naltar Valley', 'Situated 34 km from the main Gilgit Valley and at an elevation of 15,348 ft., Naltar is a valley nestled atop a barren gorge featuring scenic beauty to those who visit. This beauty lies away from the hustle and bustle of Gilgit Baltistan’s towns and cities. It is an all-weather destination famous for being a tourist attraction for both summers and winters and providing soothing calm away from the hustle of the mainland. To those who visit Naltar in winter, it offers great skiing spots, and it is the best place to visit for those who go in summer. It has lush green landscapes and captivating lakes – everyone describes it as a true paradise.\r\nNaltar Valley has two villages Naltar Bala (Upper Village) and Naltar Paain (Lower Village). What sets Naltar apart from other valleys is its vast forest-covered area and its being home to three majestic lakes collectively known as the Bashkiri Lakes\r\n', '2022-10-11 00:28:08', '2022-10-11 00:28:08'),
(9, 'Balochistan', 'The hilly and arid geographic historical area of South and Western Asia known as Balochistan is known for its desert landscape. The Pir Ghayb waterfall, Moola Chotok, and Quid-e-Azam Residence make Balochistan Province one of Pakistan\'s most popular tourist destinations. Many of Balochistan\'s main towns and cities have an inviting ambiance that many visitors describe as providing a sense of security and serenity. Most activities in Balochistan are aimed toward outdoor pursuits since the region offers a wide variety of picturesque sites. Among the various places to go for fun in the sun, Sonmiani Beach, Sapat Beach, Kund Malir, and Gondrani Cave are few of the attractions.', '2022-10-11 00:36:31', '2022-10-11 00:36:31'),
(10, 'Chitral', 'Beautiful and stunning Chitral Valley is located in Pakistan\'s northern area. One of Pakistan\'s most popular tourist attractions, renowned for both its natural beauty and its fascinating culture. Chitral’s rivers, mountains, scenery, people, and climate all guarantee a very peaceful holiday. Bumburet Valley, Rumbur Valley, Birir Valley, Ayun valley, Garam Chashma, Bonni, Shandur Pass,Tirch Mir are well known tourist destinations to visit in Chitral.', '2022-10-11 00:36:46', '2022-10-11 00:36:46'),
(11, 'Murree Hills', 'Murree is one of the most important and popular summer resorts in Pakistan. People from all over the country visit this beautiful mountain resort to avoid the suffocating heat while in winters, when all the Northern Areas are difficult to reach, some of the people love to stay in nearest resort to enjoy the snow without any difficulty. Especially the dense green trees, cold weather, fresh air, beautiful valleys and the most important clouds on the road, these trees make you happily embrace you. Famous tourist destinations are Mall Road, Pindi Point, Kashmir Point, Patriata (New Murree), Ayubia, Nathiagali, changa gali, bhurban etc.', '2022-10-11 00:37:04', '2022-10-11 00:37:04'),
(12, 'Naran Valley', 'Naran is a medium-sized town in upper Kaghan Valley in Mansehra District of Khyber Pakhtunkhwa province of Pakistan. It is located 119 kilometers from Mansehra city at the altitude of 2,409 meters. It is located 70 kilometers from Babusar Top.', '2022-10-11 21:03:15', '2022-10-11 21:03:15'),
(13, 'Lahore ', 'Lahore is a stunning old city and is widely considered to be the cultural capital of Pakistan. It has gone through many transformations and since its establishment around the second century, the city has passed through many conquering hands, from Hindu, Moghul and Persian to Afghan, Sikh and British. \r\n\r\nPart of Lahore’s inner city is dotted with remnants of colonial architecture: a magnificent post office, white-pillared government buildings and a stunning gothic-esque cathedral. The other part is dominated by Moghul architecture, with shops and eateries crammed in among the ‘gates’ to the centuries old walled city.', '2022-10-11 21:03:15', '2022-10-11 21:03:15'),
(14, 'Sibi', 'Sibi has been a meeting point for Balouch chiefs and public since centuries, even today every 4th & 5th of February a Horse & cattle show is organised which is in continuation of the ancient annual meeting of all the chiefs of Balouchistan. The Horse & Cattle show is a great occasion to see Balouch people and the herds and know the culture of Balouchistan.', '2022-10-11 21:03:15', '2022-10-11 21:03:15'),
(15, 'Bahawalpur', 'Bahawalpur, the 12th largest city of Pakistan and an important city of southern Punjab is famous for its tranquility, cultural heritage and educational institutions. It was once the capital of former princely state of Bahawalpur, founded by Nawab Bahawal Khan Abbasi II. This remained an autonomous state for over 200 years. During the rule of last Nawab Sir Sadiq Muhammad Khan Abbasi V, the state acceded to Pakistan on 07 October, 1947 and merged into the Punjab on 14 October, 1954.', '2022-10-11 21:03:15', '2022-10-11 21:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Does the trip cost include the entry tickets?', 'No, Entry tickets are not included in the cost.', '2022-10-10 15:07:48', '2022-10-10 15:07:48'),
(2, 'Does the trip cost include the activities expense?', 'No, activities expense are not included in the cost.', '2022-10-10 15:07:48', '2022-10-10 15:07:48'),
(3, 'Does the trip cost include the local jeeps expense?', 'Yes, Jeep rides are not included in the cost.', '2022-10-10 15:07:48', '2022-10-10 15:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `day` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`id`, `tour_id`, `day`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'abcd', 'efgh', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(2, 1, 2, 'abcd', 'efgh', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(3, 2, 1, 'abcd', 'efgh', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(4, 2, 2, 'abcd', 'efgh', '2022-10-10 14:19:05', '2022-10-10 14:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_of_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_of_id` bigint(20) UNSIGNED NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image/jpg',
  `media_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_of_type`, `media_of_id`, `mime`, `media_file`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Destination', 1, 'image/jpg', '/assets/images/destinations/hunza3.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(2, 'App\\Models\\Destination', 2, 'image/jpg', '/assets/images/destinations/skardu3.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(3, 'App\\Models\\Destination', 3, 'image/jpg', '/assets/images/destinations/swat3.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(4, 'App\\Models\\Destination', 4, 'image/jpg', '/assets/images/destinations/kumrat8.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(5, 'App\\Models\\Destination', 5, 'image/jpg', '/assets/images/destinations/Neelum5.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(6, 'App\\Models\\Destination', 6, 'image/jpg', '/assets/images/destinations/fairymeadows7.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(7, 'App\\Models\\Destination', 7, 'image/jpg', '/assets/images/destinations/kalash3.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(8, 'App\\Models\\Tour', 1, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/Hunza/hunza1.jpg', 'Signature Hunza Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(9, 'App\\Models\\Tour', 2, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/skardu/skardu1.jpg', 'Signature Skardu Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(10, 'App\\Models\\Tour', 15, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/hunza/hunza2.jpg', 'Signature hunza Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(11, 'App\\Models\\Tour', 10, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/hunza/hunza3.jpg', 'Signature Skardu Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(12, 'App\\Models\\Tour', 16, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/Kumrat/kumrat3.jpg', 'Signature Skardu Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(13, 'App\\Models\\Tour', 17, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/skardu/skardu2.jpg', 'Signature Skardu Plans', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(14, 'App\\Models\\Tour', 12, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/Neelum/Neelum5.jpg', 'Neelum Valley', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(15, 'App\\Models\\Tour', 14, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/fairymeadows/fairymeadows7.jpg', 'Fairy Meadows', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(16, 'App\\Models\\Tour', 11, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/Neelum/Neelum6.jpg', 'Fairy Meadows', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(17, 'App\\Models\\Tour', 3, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/kumrat/kumrat6.jpg', 'Fairy Meadows', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(18, 'App\\Models\\Tour', 5, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/swat/swat5.jpg', 'Swat', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(19, 'App\\Models\\Tour', 6, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/chitral-kalash/kalash3.jpg', 'Kalash', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(20, 'App\\Models\\Tour', 7, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/chitral-kalash/kalash2.jpg', 'Kalash', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(21, 'App\\Models\\Tour', 8, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/chitral-kalash/kalash1.jpg', 'Kalash', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(22, 'App\\Models\\Tour', 13, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/naran/naran1.jpg', 'Naran', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(23, 'App\\Models\\Tour', 13, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/naran/naran2.jpg', 'Naran', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(24, 'App\\Models\\Tour', 13, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/naran/naran1.jpg', 'Naran', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(25, 'App\\Models\\Tour', 18, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/festivals/safarirally.jpg', 'Desert Safari Jeep Rally', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(26, 'App\\Models\\Tour', 19, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/festivals/sibi1.jpg', 'Sibi Mela', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(27, 'App\\Models\\Tour', 20, 'image/jpg', '/assets/images/earthtrektours_trip_thumbnails/festivals/melachiraghan.jpg', 'Mela Chiraghan', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(29, 'App\\Models\\Destination', 8, 'image/jpg', '/assets/images/destinations/Naltar-Valley.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(30, 'App\\Models\\Destination', 9, 'image/jpg', '/assets/images/destinations/balochistan.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(31, 'App\\Models\\Destination', 10, 'image/jpg', '/assets/images/destinations/chitral.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(32, 'App\\Models\\Destination', 11, 'image/jpg', '/assets/images/destinations/muree.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(33, 'App\\Models\\Destination', 12, 'image/jpg', '/assets/images/destinations/naranett.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(34, 'App\\Models\\Destination', 13, 'image/jpg', '/assets/images/destinations/lahore.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(35, 'App\\Models\\Destination', 14, 'image/jpg', '/assets/images/destinations/sibi.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(36, 'App\\Models\\Destination', 15, 'image/jpg', '/assets/images/destinations/bahawalpur.jpg', NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_07_122359_create_permission_tables', 1),
(6, '2022_10_09_021799_create_categories_table', 1),
(7, '2022_10_09_021800_create_destinations_table', 1),
(8, '2022_10_09_021801_create_tours_table', 1),
(9, '2022_10_09_021808_create_media_table', 1),
(10, '2022_10_09_021914_create_itineraries_table', 1),
(11, '2022_10_10_194751_create_reviews_table', 2),
(12, '2022_10_10_195936_create_faqs_table', 3),
(13, '2022_10_10_215022_create_contact_us_table', 4),
(14, '2022_10_12_115416_create_tour_destinations_table', 5),
(15, '2022_10_12_115556_create_tour_categories_table', 5),
(16, '2022_10_13_181817_create_tour_departures_table', 6),
(17, '2022_10_13_182014_drop_tour_date_from_tours_table', 6),
(18, '2022_10_13_200924_update_tours_table_for_slug_and_remove_category_id_and_destination_id_from_tours', 7),
(19, '2022_10_21_011757_icon_column_in_category', 7),
(21, '2022_10_29_201625_update_contact_us_table_for', 8),
(22, '2022_10_29_212438_create_newsletter_emails_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

CREATE TABLE `newsletter_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'akashrajput9@hotmail.com', '2022-10-30 01:06:50', '2022-10-30 01:06:50');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(2, 'user-create', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(3, 'user-edit', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(4, 'user-delete', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(5, 'role-list', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(6, 'role-create', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(7, 'role-edit', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(8, 'role-delete', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(9, 'trip-list', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(10, 'trip-create', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(11, 'trip-edit', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(12, 'trip-delete', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(13, 'blog-list', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(14, 'blog-publish', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(15, 'blog-create', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(16, 'blog-edit', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(17, 'blog-delete', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `tour_id`, `rating`, `title`, `review`, `created_at`, `updated_at`) VALUES
(6, 1, 14, 5, 'Amazin Service provider', 'They have excellent service', '2022-10-16 16:10:33', '2022-10-16 16:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-10-10 14:19:05', '2022-10-10 14:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `group_size` int(10) UNSIGNED NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `original_price` double(8,2) UNSIGNED DEFAULT NULL,
  `inclusion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `title`, `overview`, `duration`, `group_size`, `age`, `location`, `price`, `original_price`, `inclusion`, `is_featured`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Signature Hunza Plan', 'Hunza is a mountainous valley in the northern region of Gilgit Baltistan and attracts tourists from around the globe because of its scenic beauty and historical forts. It is home to Baltit fort and Altit fort which are over 900 years and 700 years old, respectively. The valley provides serenity and isolation from the rest of the world, and you can sense these for yourself by embarking on this trip with us! Khunjerab Pass is the 4,693-meter-high mountain pass in the Karakoram Mountains linking Pakistan and China.\r\n\r\nEarth Trek Tours has planned the trip strategically so you can visit Hunza, Naran and Khunjerab all on one trip. We will cover all landscapes and tourist spots such as Lulusar lake, Babusar top, Karimabad, Passu, Kunhar and much more!\r\n', 11, 60, 10, 'Hunza, GB, Pakistan', 45000.00, 47000.00, '<ul>\r\n<li>Luxury Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li>Hygienic Food [Breakfast & Dinner] Hotel Accommodation</li>\r\n<li>BBQ Night plus Bonfire</li>\r\n<li>Tour Guide</li>\r\n<li>Fun activities and family friendly environment</li>\r\n</ul>', 1, '2022-10-10 14:19:05', '2022-10-13 15:31:06', 'signature-hunza-plan'),
(2, 'Signature Skardu Plan', 'Skardu is the capital of Skardu District located in Gilgit-Baltistan and is famous around the globe for tourism and mountaineering. Its diverse landscape, culture, traditions and hospitality of locals attract millions of domestic and international tourists.\r\n\r\nEarth Trek Tour’s signature Skardu trip is a detailed travel experience covering all beautiful landscapes, rivers and valleys including Babusar top, Chilas, Nanga Parbat viewpoint, cold desert, Manthoka waterfall, Deosai plain and many more places!\r\n', 11, 60, 10, 'Skardu, GB, Pakistan', 45000.00, 47000.00, '<ul>\r\n<li>Air-Conditioned Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li>Hygienic Food [Breakfast & Dinner]</li>\r\n<li>Hotel Accommodation</li>\r\n<li>BBQ Night, Camping adventure and Bonfire.</li>\r\n<li>Jeeps for Basho Valley & Deosai Plains</li>\r\n<li>Tour Guide throughout the trip</li>\r\n<li>Fun activities and family friendly environment</li>\r\n</ul>', 1, '2022-10-10 14:19:05', '2022-10-13 15:31:06', 'signature-skardu-plan'),
(3, ' Kumrat Valley, Jahaz Banda & Katora Lake', 'The Six-day camping trip to the magical Kumrat Valley, Jahaz Banda and Kund Bunda will leave you enthralled. Scenic lush green valleys, glaciers, beautiful landscapes and much more will mark the tour! Kund Banda and Jahaz Banda are large meadows in the upper reaches of Kumrat Valley. We will take our tourists to several places including Kumrat Forrest and Valley, Panjkora river, Takki Banda, Kund Banda, Katora lake and many other tourist spots. With this trip, you will explore and fully witness nature’s wonders!', 6, 60, 5, 'Khyber Pakhtun Khuwa, Pakistan', 13999.00, 27999.00, '<ul>\r\n<li>Air-Conditioned Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li>Hygienic Food [Breakfast & Dinner]</li>\r\n<li>Camping adventure and Bonfire.</li>\r\n<li>Jeeps for Kumrat forest & Jahaz Banda</li>\r\n<li>Tour Guide throughout the trip</li>\r\n<li>Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 01:06:35', '2022-10-13 15:31:06', 'kumrat-valley-jahaz-banda-katora-lake'),
(5, 'Swat, Kalam Valley, Malam Jabba & Gabin\r\nJabba', 'Swat Valley is a tourist destination located in the northwest mountains and its scenic beauty has earned it the title of ‘mini Switzerland of Pakistan’. It has one of the oldest civilizations in history and is a major tourist destination in Pakistan with pleasant weather and spectacular natural beauty.\r\n\r\nThe three-day road trip will cover Swat Valley, Kalam Valley and Malam Jabba and tourists will visit multiple places including Bahrain, Ushu Valley, Mahodand Lake, White palace and Khanpur dam.\r\n', 6, 60, 10, 'Swat, KPK, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Air-Conditioned Transport [Coaster Saloon]</li>\r\n<li>Hygienic Food [Breakfast & Dinner]</li>\r\n<li>Hotel Accommodation</li>\r\n<li>Music and Bonfire</li>\r\n<li>Jeeps for Ushu Forest & Mahodand Lake</li>\r\n<li>Tour Guide throughout the trip</li>\r\n<li>Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 20:33:52', '2022-10-13 15:31:06', 'swat-kalam-valley-malam-jabba-gabin-jabba'),
(6, 'Choimus Festival Kalash Valley', 'Choimus Festival is held annually in winters for over seven days usually. Kalasha people and tourists celebrate the colourful festival with dances to traditional Kalasha music. The highlight of the festival is locals draped in the traditional black attire that is often available for visitors to purchase along with other souvenirs. Hospitable locals welcome tourists and travelers to join in their celebration and devour local foods and the mulberry wine, which is a Kalasha speciality. The festival is a getaway for people who like to interact with diverse cultures and experience nature in its raw form.', 6, 60, 5, 'Kalash, KPK, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li>Private Transport</li>\r\n<li>Entrance fees (Cable and car and Moon Valley)</li>\r\n<li>Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-11 20:35:49', '2022-10-13 15:31:06', 'choimus-festival-kalash-valley'),
(7, 'Uchal Festival Kalash Valley ', 'Uchal Festival is held annually in winters for over seven days usually. Kalasha people and tourists celebrate the colourful festival with dances to traditional Kalasha music. The highlight of the festival is locals draped in the traditional black attire that is often available for visitors to purchase along with other souvenirs. Hospitable locals welcome tourists and travelers to join in their celebration and devour local foods and the mulberry wine, which is a Kalasha speciality. The festival is a getaway for people who like to interact with diverse cultures and experience nature in its raw form.', 6, 60, 10, 'Kalash, KPK, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li>Private Transport</li>\r\n<li>Entrance fees (Cable and car and Moon Valley)</li>\r\n<li>Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-11 20:35:49', '2022-10-13 15:31:06', 'uchal-festival-kalash-valley'),
(8, 'Shandur Polo Festival', 'Ever heard of a polo ground at 3700 metres? Shandur Polo ground is the highest naturally designed polo ground in the world where the famous polo festival is held annually from 7th to 9th July. The Gilgit Baltistan and Chitral district teams meet for friendly matches to put up a show for the audience, that impatiently waits for a year to witness this game in the middle of scenic beauty of the lakes and snow-capped mountains. The festival is not only for polo lovers because the organisers have arranged for music, dancing and a camping village for a complete traveling experience for foreign and local tourists. After the festival, tourists often visit Hunza and the surrounding areas to make the most of their trip!', 6, 60, 10, 'Shandur, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li>Private Transport</li>\r\n<li>Entrance fees (Cable and car and Moon Valley)</li>\r\n<li>Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-11 20:43:59', '2022-10-13 15:31:06', 'shandur-polo-festival'),
(10, 'Hunza Valley, Attabad Lake & Khunjerab\r\nPass', 'Hunza is a mountainous valley in the northern region of Gilgit Baltistan and attracts tourists from around the globe because of its scenic beauty and historical forts. It is home to Baltit fort and Altit fort which are over 900 years and 700 years old, respectively. The valley provides serenity and isolation from the rest of the world, and you can sense these for yourself by embarking on this trip with us! Khunjerab Pass is the 4,693-meter-high mountain pass in the Karakoram Mountains linking Pakistan and China.\r\n\r\nEarth Trek Tours has planned the trip strategically so you can visit Hunza, Naran and Khunjerab all on one trip. We will cover all landscapes and tourist spots such as Lulusar lake, Babusar top, Karimabad, Passu, Kunhar and much more!', 7, 60, 5, 'Hunza, GB, Pakistan', 14999.00, 29999.00, '<ul>\r\n<li>Luxury Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner] Hotel Accommodation</li>\r\n<li> BBQ Night plus Bonfire</li>\r\n<li> Tour Guide</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 20:45:52', '2022-10-13 15:31:06', 'hunza-valley-attabad-lake-khunjerab-pass'),
(11, 'Arang Kel, Ratti Gali Lake & Taobut Village', 'In Earth Trek Tour’s Seven-day trip to Neelum Valley, tourists will have the golden opportunity to explore the breathtaking views of Neelum which are amongst the 10 northernmost districts of Azad Kashmir.\r\n\r\nYou will get the chance to visit several places, including Keran, Ratti Gali Lake, Kel Dhani waterfall, Shardah tourist village, Muzaffarbad and Kutton waterfall. We will cover all the beautiful landscapes, rivers, valleys and mountains on our way to Neelum Valley & Ratti Gali Lake.', 7, 60, 10, 'Neelum, Kashmir, Pakistan', 14999.00, 29999.00, '<ul>\r\n<li>Luxury Transport [Air-Conditioned Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner]</li>\r\n<li> Hotel Accommodation</li>\r\n<li> BBQ Night plus Bonfire</li>\r\n<li> Tour Guide</li>\r\n<li> Jeeps for Ratti Gali Lake & Tabout Valley</li>\r\n<li> Fun activities and a family friendly environment</li>\r\n</ul>', 0, '2022-10-11 20:52:06', '2022-10-13 15:31:06', 'arang-kel-ratti-gali-lake-taobut-village'),
(12, 'Neelum Valley, Shardah & Arang Kel', 'In Earth Trek Tour’s six-day trip in Neelum Valley, tourists will have the golden opportunity to explore the breathtaking views of Neelum which are amongst the 10 northernmost districts of Azad Kashmir. Shardah valley is a relatively smaller, less crowded place with fascinating views and picturesque beauty, whilst Arang Kel is a paradise of its own on the hilltop above Kel at an altitude of 8,379 feet.\r\n\r\nYou will get the chance to visit several places, including Keran, Ratti Gali Lake, Kel Dhani waterfall, Shardah tourist village, Muzaffarbad and Kutton waterfall. We will cover all the beautiful landscapes, rivers, valleys and mountains on our way to Neelum Valley & Ratti Gali Lake.', 6, 60, 10, 'Neelum, Kashmir, Pakistan', 15499.00, 29999.00, '<ul>\r\n<li>Luxury Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast/Dinner]</li>\r\n<li> BBQ Night plus Bonfire</li>\r\n<li> Hotel Accommodation</li>\r\n<li> Jeeps for Naltar Valley</li>\r\n<li> Tour Guide</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 20:52:06', '2022-10-13 15:31:06', 'neelum-valley-shardah-arang-kel'),
(13, 'Naran, Saif-Ul-Maluk Lake & Babusar Top', 'Naran Valley is the most popular travel destination in upper Kaghan Valley visited by thousands of tourists every year, especially in its peak season, which is marked by pleasant weather and scenic beauty.\r\n\r\nEarth Trek Tours’ Six day road trip to the valley includes sightseeing of Saif-ul-Maluk Lake, Babusar Top, Shogran, Siri/Paye, which are all tourist favourites with their enchanting views. Our diverse itineraries are planned bearing in mind the vast interests people hold. The tour includes exhilarating activities at destinations that are on an elevation of thousands of feet above the sea level. In our Naran Valley tour, you will visit picnic spots, interact with locals, understand the culture and get mesmerised by nature’s magic and make lifelong memories', 6, 60, 5, 'Naran, KPK, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Luxury Transport [Air-Conditioned Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner]</li>\r\n<li> Hotel Accommodation</li>\r\n<li> BBQ Night and Bonfire</li>\r\n<li> Tour Guide</li>\r\n<li> Jeeps for Saif-ul-Maluk & Siri/Paye Meadows</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 21:06:49', '2022-10-13 15:31:06', 'naran-saif-ul-maluk-lake-babusar-top'),
(14, 'Fairy Meadows & Nanga Parbat Basecamp.', 'Fairy Meadows is a classic stop for any tour group. It was named by German climbers and is locally known as Joot. It can be best described as an exotic grassland with lush green plateaus near a base camp site of Nanga Parbat.\r\n\r\nNanga Parbat is locally known as Diamer, which means ‘king of the mountains’. It is the ninth-highest mountain at about 8,126 m above sea level, with an immense dramatic peak covered with snow throughout the year.\r\n\r\nOur trip to these destinations would include visits to multiple tourist spots including Lulusar lake, Babusar top, Tato village, Chilas, Batakundi, and Kunhar.', 7, 60, 10, 'Fairy Meadows, GB, Pakistan', 14999.00, 29999.00, '<ul>\r\n<li>Luxury Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast/Dinner]</li>\r\n<li> Hotel Accommodation</li>\r\n<li> BBQ Night plus Bonfire</li>\r\n<li> Jeeps for Tato Village</li>\r\n<li> Tour Guide</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 21:13:48', '2022-10-13 15:31:06', 'fairy-meadows-nanga-parbat-basecamp'),
(15, 'Honeymoon Trip – Hunza, Attabad Lake & Khunjerab Pass', 'Hunza is a mountainous valley in the northern region of Gilgit Baltistan and attracts tourists from around the globe because of its scenic beauty and historical forts. It is home to Baltit fort and Altit fort which are over 900 years and 700 years old, respectively. The valley provides serenity and isolation from the rest of the world, and you can sense these for yourself by embarking on this trip with us! Khunjerab Pass is the 4,693-meter-high mountain pass in the Karakoram Mountains linking Pakistan and China.\r\n\r\nEarth Trek Tours has planned the trip strategically so you can visit Hunza, Naran and Khunjerab all on one trip. We will cover all landscapes and tourist spots such as Lulusar lake, Babusar top, Karimabad, Passu, Kunhar and much more!', 7, 60, 10, 'Hunza, GB, Pakistan ', 14999.00, 29999.00, '<ul>\r\n<li>Luxury Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner] Hotel Accommodation</li>\r\n<li> BBQ Night plus Bonfire</li>\r\n<li> Tour Guide</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 21:19:29', '2022-10-13 15:31:06', 'honeymoon-trip-hunza-attabad-lake-khunjerab-pass'),
(16, 'Kumrat Valley, Jahaz Banda & Kund Banda', 'The Six-day camping trip to the magical Kumrat Valley, Jahaz Banda and Kund Bunda will leave you enthralled. Scenic lush green valleys, glaciers, beautiful landscapes and much more will mark the tour! Kund Banda and Jahaz Banda are large meadows in the upper reaches of Kumrat Valley. We will take our tourists to several places including Kumrat Forrest and Valley, Panjkora river, Takki Banda, Kund Banda, Katora lake and many other tourist spots. With this trip, you will explore and fully witness nature’s wonders!', 6, 60, 10, 'Kumrat, KPK, Pakistan', 12499.00, 24999.00, '<ul>\r\n<li>Air-Conditioned Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner]</li>\r\n<li> Camping adventure and Bonfire</li>\r\n<li> Jeeps for Kumrat forest & Jahaz Banda</li>\r\n<li> Tour Guide throughout the trip</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 21:22:05', '2022-10-13 15:31:06', 'kumrat-valley-jahaz-banda-kund-banda'),
(17, 'Signature Honeymoon Plan – Skardu Valley, Basho Valley & Deosai Plains', 'Skardu is the capital of Skardu District located in Gilgit-Baltistan and is famous around the globe for tourism and mountaineering. Its diverse landscape, culture, traditions and hospitality of locals attract millions of domestic and international tourists.\r\n\r\nEarth Trek Tour’s signature Skardu trip is a detailed travel experience covering all beautiful landscapes, rivers and valleys including Babusar top, Chilas, Nanga Parbat viewpoint, cold desert, Manthoka waterfall, Deosai plain and many more places!', 10, 60, 10, 'Skardu, GB, Pakistan', 49999.00, 99999.00, '<ul>\r\n<li>Air-Conditioned Transport [Grand Cabin/Coaster Saloon]</li>\r\n<li> Hygienic Food [Breakfast & Dinner</li>\r\n<li> Hotel Accommodation</li>\r\n<li> BBQ Night according to itinerary</li>\r\n<li> Jeeps for Basho Valley & Deosai Plains</li>\r\n<li> Tour Guide throughout the trip</li>\r\n<li> Fun activities and family friendly environment</li>\r\n</ul>', 0, '2022-10-11 21:24:14', '2022-10-13 15:31:06', 'signature-honeymoon-plan-skardu-valley-basho-valley-deosai-plains'),
(18, 'Desert Safari Jeep Rally', 'Cholistan Desert Jeep Rally started back in 2005. The event portrays a softer and positive image of Paksitan abroad. The rally covers three districts of Punjab including Rahim Yar Khan, Bahawalnagar and Bahawalpur. The prime objective to hold this event in the majestic desert of Cholistan is to show outside world its history and rich culture and open this area as Winter Tourist Destination.', 5, 60, 5, 'Cholistan, Punjab, Pakistan', 24999.00, 27999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li> Private Transport</li>\r\n<li> Entrance fees (Palaces)</li>\r\n<li> Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-17 13:56:57', '2022-10-17 13:56:57', 'desert-safari-jeep-rally'),
(19, 'Sibi Mela', 'Sibi lies 163 Kms. – 3 hrs. drive to the South East of Quetta at the mouth of the famous “Bolan Pass”. Sibi is famous for SIBI MELA, where tribesmen flock from all over Baluchistan, parts of Sind and Punjab with their animals. The salient features of this “Mela” are horse and cattle and cultural shows, tent pegging, camel races, animal markets and exhibitions of handicrafts, tribal dresses and folk dances.', 5, 60, 5, 'Sibi, Balochistan, Pakistan', 24999.00, 27999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li>Private Transport</li>\r\n<li>Entrance fees (Palaces)</li>\r\n<li>Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-17 13:56:57', '2022-10-17 13:56:57', 'sibi-mela'),
(20, 'Mela Chiraghan – Where the light is stronger then darkness', 'Just adjacent to the fabulous Shalamar Gardens in Lahore is the shrine of 16th century famous sufi saint, Shah Hussain, which is the venue of an annual traditional celebration full of cultural zeal and color. The Festival is locally called as “Mela Chiraghan” or the Fesival of Lamps and it is one of the largest traditional events of the Punjab province. Mela Chiraghan is  celebrated during the last week of March and this three day event is full of holy rituals, joy, music and folk dances. One of the most attractive features is the traditional food stalls that are specially designed for this carnival.', 5, 60, 5, 'Lahore, Punjab, Pakistan', 24999.00, 27999.00, '<ul>\r\n<li>Specialized bilingual guide</li>\r\n<li>Private Transport</li>\r\n<li>Entrance fees (Palaces)</li>\r\n<li>Box lunch water, banana apple and chocolate</li>\r\n</ul>', 0, '2022-10-17 13:56:57', '2022-10-17 13:56:57', 'mela-chiraghan');

-- --------------------------------------------------------

--
-- Table structure for table `tour_categories`
--

CREATE TABLE `tour_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_categories`
--

INSERT INTO `tour_categories` (`id`, `tour_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(2, 2, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(3, 3, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(4, 5, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(5, 6, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(6, 7, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(7, 8, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(8, 10, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(9, 11, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(10, 12, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(11, 13, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(12, 14, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(13, 15, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(14, 16, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(15, 17, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(16, 5, 3, NULL, NULL),
(17, 5, 5, NULL, NULL),
(18, 8, 6, NULL, NULL),
(19, 7, 6, NULL, NULL),
(20, 6, 6, NULL, NULL),
(21, 1, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(22, 19, 6, NULL, NULL),
(23, 19, 2, NULL, NULL),
(24, 18, 6, NULL, NULL),
(25, 18, 5, NULL, NULL),
(26, 20, 6, NULL, NULL),
(27, 20, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_departures`
--

CREATE TABLE `tour_departures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `departure_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_departures`
--

INSERT INTO `tour_departures` (`id`, `tour_id`, `departure_date`, `created_at`, `updated_at`) VALUES
(1, 11, '2022-10-16', '2022-10-13 19:34:43', '2022-10-13 19:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `tour_destinations`
--

CREATE TABLE `tour_destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_destinations`
--

INSERT INTO `tour_destinations` (`id`, `tour_id`, `destination_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(2, 2, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(3, 3, 4, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(4, 5, 3, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(5, 6, 7, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(6, 7, 7, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(7, 8, 7, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(8, 10, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(9, 11, 5, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(10, 12, 5, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(11, 13, 12, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(12, 14, 6, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(13, 15, 1, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(14, 16, 4, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(15, 17, 2, '2022-10-12 07:12:15', '2022-10-12 07:12:15'),
(16, 20, 13, NULL, NULL),
(17, 19, 14, NULL, NULL),
(18, 18, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_unique_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `phone`, `avatar`, `dob`, `cnic`, `payment_customer_id`, `google_unique_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akash', 'Ahmed', 'akashrajput9@hotmail.com', NULL, '$2y$10$fN661eB8ZKM/9J8dBSwgn.D84KZPe4eBurA8HbVRMP2vLVqJ7sP0S', NULL, 'https://ui-avatars.com/api/?size=256&background=random&name=Akash%20Ahmed', NULL, '321321321', NULL, NULL, NULL, '2022-10-10 14:19:05', '2022-10-10 14:19:05'),
(2, 'Usama', 'Ashraf', 'usama.55927@iqra.edu.pk', NULL, '$2y$10$19jL5LYPFr8SK/53bHnSFeKZcdDz.h59C5s4rWm/yGSf2PWDdnycG', NULL, 'https://ui-avatars.com/api/?background=random&size=256&name=Usama%20Ashraf', NULL, '4540261695501', NULL, NULL, NULL, '2022-10-15 18:14:33', '2022-10-15 18:14:33'),
(3, 'Akash', 'Ahmed', 'akash.ahmed9743@yahoo.com', NULL, '$2y$10$I6tXs2vzOjFbCNWuZv3x7OiDLTSqDs25BYRjb2U9pm6a0kqNIFt4K', NULL, 'https://ui-avatars.com/api/?background=random&size=256&name=Akash%20Ahmed', NULL, '4540261695501', NULL, NULL, NULL, '2022-10-15 18:26:42', '2022-10-15 18:26:42'),
(4, 'Saba', 'Khan', 'sabakhan117@gmail.com', NULL, '$2y$10$FVoZN2zUOz10MpQ3rHxN0.4OVFms6HQ2Cbt/pR0Hk2VAj5oydmNzC', NULL, 'https://ui-avatars.com/api/?background=random&size=256&name=Saba%20Khan', NULL, '31303-1553697-1', NULL, NULL, NULL, '2022-11-01 06:08:21', '2022-11-01 06:08:21'),
(5, 'Zara', 'Akram', 'zaraakram112@gmail.com', NULL, '$2y$10$soODa2aFstDZvwElJTnnEeGQ32lQ4Z2hPPlZA63GIF/6KraLSfGEy', NULL, 'https://ui-avatars.com/api/?background=random&size=256&name=Zara%20Akram', NULL, '3130315536972', NULL, NULL, NULL, '2022-11-01 06:15:20', '2022-11-01 06:15:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_us_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itineraries_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_media_of_type_media_of_id_index` (`media_of_type`,`media_of_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_emails_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_categories_tour_id_foreign` (`tour_id`),
  ADD KEY `tour_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tour_departures`
--
ALTER TABLE `tour_departures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_departures_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_destinations_tour_id_foreign` (`tour_id`),
  ADD KEY `tour_destinations_destination_id_foreign` (`destination_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tour_categories`
--
ALTER TABLE `tour_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tour_departures`
--
ALTER TABLE `tour_departures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD CONSTRAINT `itineraries_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD CONSTRAINT `tour_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tour_categories_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_departures`
--
ALTER TABLE `tour_departures`
  ADD CONSTRAINT `tour_departures_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  ADD CONSTRAINT `tour_destinations_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tour_destinations_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
