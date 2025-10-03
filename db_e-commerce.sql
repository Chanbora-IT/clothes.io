-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 04:11 AM
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
-- Database: `db_e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Girl', 2, '2024-03-16 18:44:56', '2024-03-16 19:28:08'),
(3, 'Men', 2, '2024-03-16 19:33:08', '2024-03-16 19:33:08'),
(4, 'Women', 2, '2024-03-16 19:33:17', '2024-03-16 19:33:17'),
(5, 'Boy', 2, '2024-03-16 19:34:00', '2024-03-16 19:34:00'),
(6, 'Old Men', 2, '2024-03-16 19:34:24', '2024-03-16 19:34:24'),
(7, 'Old Women', 2, '2024-03-16 19:34:34', '2024-03-16 19:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_03_03_070833_create_products_table', 1),
(5, '2024_03_03_071004_create_website_logo_table', 1),
(6, '2024_03_03_071027_create_category_table', 2),
(7, '2024_03_03_071044_create_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `Viewers` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `thumbnail`, `description`, `user_id`, `Viewers`, `created_at`, `updated_at`) VALUES
(1, 'រកឃើញ​ចម្លាក់​សត្វអណ្តើក ពេលធ្វើកំណាយ​ស្រះទឹក នៅ​ប្រាសាទបាយ័ន', '26-04-24-12-16-03_662a1679b8667_1714034280_medium.jpg', 'កម្លាំងអង្គភាពនគរបាលការពារបេតិកភណ្ឌប្រចាំតំបន់អង្គរ​ ផ្នែកនីតិវិធី និងកម្លាំងប៉ុស្តិ៍ការពារទី១០ សហការជាមួយភ្នាក់ងារអាជ្ញាធរជាតិអប្សរា កាលពីថ្ងៃទី២២ ខែមេសា ឆ្នាំ​២០២៤ បាន​ចុះទៅ​ប្រាសាទបាយ័ន ស្ថិតនៅភូមិរហាល សង្កាត់នគរធំ ក្រុង/ខេត្តសៀមរាប ដើម្បីធ្វើការប្រគល់ទទួលរូបអណ្ដើក ចំនួន០១ ធ្វើពីថ្មភក់ មានទំហំ បណ្តោយ៥៧ស.ម ទទឹង៤៣ស.ម និងកម្រាស់២១ស.ម ដែលក្រុមគម្រោងអាជ្ញាធរជាតិអប្សរា បានកំណាយរកឃើញត្រង់ចំណុចកណ្តាលស្រះទឹកខាងកើតឆៀងខាងជើង ក្នុងជម្រៅដី១,៥០ម៉ែត្រ។', 1, 6, '2024-04-26 05:16:03', '2024-04-26 05:16:03'),
(2, 'នេះគឺជាតម្លៃឡាន Toyota Tacoma ឆ្នាំ 2024 ប្រភេទ TRD Off-road 4WD ពេលមកដល់ខ្មែរ!', '26-04-24-11-31-44_662b11cfe6879_1714098600_medium.jpg', 'បើយោងតាមគេហទំព័រ Auto US Direct ដែលជាអ្នកនាំចូលឡានពីសហរដ្ឋអាមេរិកដោយផ្ទាល់ បានបង្ហាញឲ្យឃើញពីតម្លៃឡានភីកអាប់ Toyota Tacoma ឆ្នាំ 2024 ប្រភេទ TRD Off-road 4WD ពេលមកដល់ខ្មែរ ដោយមានតម្លៃសរុប ខ្ទង់ $77,000 បូករួមទាំងថ្លៃពន្ធនាំចូលរួចស្រេច ផងដែរ។', 1, 6, '2024-04-26 04:31:44', '2024-04-26 04:31:44'),
(3, 'ស្វែងយល់អត្ថន័យលេខកូដសញ្ញា Check ដែល​មានអក្សរមួយ​នៅខាងមុខ និងលេខ៤ខ្ទង់ខាងក្រោយ', '26-04-24-11-32-44_66222fc56b364_1713516480_medium.jpg', 'ជាទូទៅ លេខកូដនៃសញ្ញា Check មានអក្សរមួយនៅខាងមុខ និងលេខ៤ខ្ទង់​នៅខាងក្រោយ ដែល​វាបញ្ជាក់ច្បាស់លាស់​រាល់បញ្ហានីមួយៗ។ សម្រាប់អក្សរនៅខាងមុខនោះ គឺមានដូចជា៖\r\n-P: តំណាងឱ្យពាក្យ Powertrain ដែលសំដៅ​លើប្លុកម៉ាស៊ីន ហើយ​ជួបញឹកញាប់​ច្រើនជាងគេបំផុត\r\n-B: តំណាង​ឱ្យពាក្យ Body ដែលសំដៅ​លើតួរថយន្ត\r\n-C: តំណាង​ឱ្យពាក្យ Chassis ដែលសំដៅលើ​សាក់ស៊ី\r\n-U: តំណាង​ឱ្យ Network Communication ឬបណ្តាញ​ទំនាក់ទំនង។', 1, 1, '2024-04-26 04:32:45', '2024-04-26 04:32:45'),
(4, 'ធ្វើលិខិតថ្កោលទោស​តាមអនឡាញ​ដំណាក់កាលទី២ ចាប់ពីខែក្រោយ នឹង​កាន់តែងាយ​ស្រួលរហ័សជាងមុនទៀត', '26-04-24-11-33-36_662b52f599050_1714115280_medium.jpg', 'ក្រសួងយុត្តិធម៌ បាន​ចេញ​សេចក្តីជូនដំណឹង​ថា ដើម្បីបង្កើនភាព​ងាយស្រួល​ និងភាពឆាប់រហ័សបន្ថែម​ទៀត​ដល់​សាធារណជន លើការស្នើសុំ​ព្រឹត្តិបត្រ​ថ្កោលទោស​ ក្រសួង​នឹងដាក់​ឱ្យដំណើរការ សេវាព្រឹត្តិបត្រថ្កោលទោស​តាមប្រព័ន្ធឌីជីថល​ក្នុងដំណាក់កាលទី២ ចាប់ពីថ្ងៃទី២ ខែឧសភា ឆ្នាំ​២០២៤ ខាងមុខនេះតទៅ។', 1, 5, '2024-04-26 04:33:36', '2024-04-26 04:33:36'),
(5, 'ត្រៀមៗចូលឆ្នាំ រាំហុយដី “ក្រមុំស្រុកណា” ឮតែភ្លេងកន្រ្តាក់ដៃកន្រ្តាក់ជើងងក់ក្បាលភ្លែត', '26-04-24-11-34-12_660b7fcedbc29_1712029620_medium.jpg', 'ត្រៀមអបអរសាទរបុណ្យចូលឆ្នាំខ្មែរខាងមុខនេះ កំលោះសង្ហារពីរដួង នរិទ្ធ និង វណ្ណដា ចាប់ដៃគ្នាផលិតបទចម្រៀងគុណភាពថ្មីមួយ ទុកជាកាដូសម្រាប់អ្នកគាំទ្ររាំលេងកម្សាន្ដក្នុងឱកាសបុណ្យចូលឆ្នាំខ្មែរ ឮតែភ្លេងក៏ចង់រាំ។កាលពីយប់ថ្ងៃទី១ មេសា ម្សិលមិញនេះ នរិទ្ធ សម្បូរស្នេហ៍ បានបញ្ចេញវីដេអូចម្រៀងរបស់ខ្លួនជាផ្លូវការ ដែលចាប់គូច្រៀងរួមគ្នាជាមួយកំពូល Rapper វណ្ណដា មានចំណងជើងថា «ក្រមុំស្រុកណា» កំពុងទទួលបានការគាំទ្រយ៉ាងច្រើនពីសំណាក់មហាជន ត្រឹមតែ ១៥ម៉ោងប៉ុណ្ណោះមានអ្នកចូលទស្សនាលើ You tube ផ្លូវការ Norith-នរិទ្ធ រហូតដល់ទៅជាង ៣០ម៉ឺននាក់ ចំនួននេះបង្ហាញឱ្យឃើញពីសន្ទុះនៃការចូល ចិត្តនៃស្នាដៃអ្នកទាំងពីរ។', 1, 0, '2024-04-26 04:34:12', '2024-04-26 04:34:12'),
(6, 'ត្រៀមខ្លួនហើយឬនៅ សម្រាប់ដំណើរទៅលេងបុណ្យភ្នំ-ឧទ្យានជាតិគិរីរម្យ នាដើមខែឧសភា ឆ្នាំ២០២៤ នេះ?', '26-04-24-11-35-03_662241c976e9d_1713521040_medium.jpg', 'មិនទាន់អស់ចំហាយសប្បាយចូលឆ្នាំថ្មី ប្រពៃណីជាតិខ្មែរ ឆ្នាំ២០២៤ ផង នៅថ្ងៃទី១៩ ខែមេសា នេះ ស្រាប់តែលេចដំណឹងដ៏រំភើបមួយទៀត។ នោះគឺពិធីបុណ្យភ្នំ-ឧទ្យានជាតិគិរីរម្យដែលរៀបចំដោយគិរីរម្យផាញរីសត គាំទ្រដោយក្រសួងទេសចរណ៍ ក្រសួងពាណិជ្ជកម្ម ក្រសួងបរិស្ថាន និងរដ្ឋបាលខេត្ដកំពង់ស្ពឺ។ពិធីបុណ្យដែលរៀបចំឡើងរយៈពេល ១យប់ ២ថ្ងៃ ពោលគឺនៅថ្ងៃទី៤ និងទី៥ ខែឧសភា ឆ្នាំ២០២៤ នឹងផ្ដល់ឱកាសពិសេសសម្រាប់អ្នកចូលរួម ដោយមានកម្មវិធីបោះតង់ ផ្ដល់ជូនអាហារពេលល្ងាចបែបGala dinner ការប្រគំតន្ដ្រី រាំកម្សាន្ដ និងកម្មវិធីចាប់រង្វាន់ ព្រមទាំងមានដំណើរកម្សាន្ដទៅតំបន់អេកូទេសចរណ៍ចំបក់ទៀតផង។', 1, 0, '2024-04-26 04:35:03', '2024-04-26 04:35:03'),
(7, 'កាំភ្លើង​ធំ​ឈរ​លេខ ១ ប៉ុណ្ណោះ​អាសន្ន ហើយ​តាម​ប្រកិត​ពី​ក្រោយ​ដោយ​ Man City', '27-04-24-12-01-35_662b993e8550e_1714133280_medium.jpg', 'ខណៈ​លីគ​ធំៗ​ដូច​ជា​អាល្លឺម៉ង់ និង​អ៊ីតាលី​រក​ឃើញ​ម្ចាស់​ពាន​ទៅ​ហើយ​នោះ លីគ​កំពូល​អង់គ្លេស​កំពុង​ស្ថិត​ក្នុង​ដំណាក់​កាល​មួយ​ប្រកួត​ប្រជែង​គ្នា​យ៉ាង​ក្ដៅ​គគុក ដោយ​បណ្ដា​ក្លឹប​កំពូល​តារាង​កំពុង​ប្រកៀក​ប្រកិត​គ្នា​យ៉ាង​ខ្លាំង។\r\n\r\nក្នុង​លីគ​កំពូល​អង់គ្លេស មាន ២០ ក្រុម ហើយ​មួយ​រដូវ​កាល​មាន​ប្រកួត​សរុប ៣៨ ប្រកួត។', 1, 1, '2024-04-27 05:01:35', '2024-04-27 05:01:35'),
(9, 'ដៃធ្លាប់កាន់ម៉ៃក្រូស្រែកច្រៀងលើឆាក បច្ចុប្បន្ន Celine បានត្រឹមសំងំព្យាបាលជំងឺកម្រជាមួយក្ដីសង្ឃឹម', '27-04-24-12-25-31_662b5c28d3b4b_1714117620_medium.jpg', 'តារាចម្រៀងសហរដ្ឋអាមេរិក និងជាម្ចាស់បទ “The Power Of love” Celine Dion បានរៀបរាប់ពីទុក្ខលំបាករបស់ខ្លួនក្នុងដំណាក់ការព្យាបាលជំងឺកម្រ និងប្រាប់ពីក្ដីសង្ឃឹមរបស់នាង។Celine Dion បានចែករំលែកព័ត៌មានលម្អិតអំពីសុខភាពរបស់នាងជាលើកដំបូងក្នុងបទសម្ភាសន៍ជាមួយ ទស្សនាវដ្ដី Vogue របស់បារាំង ដែលបានចេញផ្សាយកាលពីថ្មីៗនេះ។ តារាស្រី វ័យ ៥៦ឆ្នាំដែលកំពុងមានជម្ងឺ Stiff Person Syndrome បានបង្ហាញពីដំណើរការព្យាបាលរបស់នាង និងរបៀបដែលនាងទទួលយកដើម្បីរស់នៅជាមួយជំងឺនេះ។', 1, 1, '2024-04-27 05:25:31', '2024-04-27 05:25:31'),
(10, 'មេរបស់ NewJeans ចង់រើបម្រះរើបង្វេចចាកចេញពី HYBE', '27-04-24-12-26-15_662604c2524bd_1713767580_medium.jpg', 'នៅថ្ងៃទី ២២ ខែមេសានេះ HYBE បាន​ស្នើឲ្យនាយិកាផលិតកម្ម Ador ដែលជាអ្នកបង្កើត NewJeans មានឈ្មោះថា Min Hee Jin ចុះចេញពីតំណែង។ព័ត៌មាន​នេះ​បានចេញ​ផ្សាយ​ពាសពេញ​បណ្ដាញសង្គម​ ស្របពេល HYBE បាន​ដឹងដំណឹង​ និងរកឃើញភស្តុតាងថា Min Hee Jin មាន​បំណងចង់ឲ្យ Ador ដកខ្លួន​ចេញពី HYBE។ជាការពិត Ador បាន​ក្លាយជាក្រុមហ៊ុនបុត្រសម្ព័ន្ធរបស់ HYBE ខណៈដែល Min Hee Jin និងក្រុមប្រឹក្សាប្រតិបត្តិបច្ចុប្បន្នរបស់ Ador មានភាគហ៊ុន ត្រឹម ២០ភាគរយនៅ HYBE។', 1, 1, '2024-04-27 05:26:15', '2024-04-27 05:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `regular_price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Viewers` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `color`, `size`, `thumbnail`, `sale_price`, `regular_price`, `discount`, `category_id`, `stock_qty`, `user_id`, `created_at`, `updated_at`, `Viewers`) VALUES
(1, 'shirt001', 'abc', 'Blue,Grey', 'M,L', '24-03-24-01-04-02_Shirt (3).jpg', 11.40, 12.00, 5.00, 3, 50, 1, '2024-03-24 06:04:02', '2024-03-24 06:04:02', 2),
(2, 'Pants', 'pants for man', 'Red,Grey', 'M,XL', '24-03-24-01-05-12_Sweatshort (3).jpg', 8.10, 9.00, 10.00, 3, 30, 1, '2024-03-24 06:05:12', '2024-03-24 06:05:12', 1),
(3, 'Cropped shirt', 'cropped shirt', 'Blue,Black', 'M,L', '24-03-24-02-17-26_DN3.jpg', 7.20, 8.00, 10.00, 4, 50, 1, '2024-03-24 07:17:26', '2024-03-24 07:17:26', 4),
(4, 'Jectket', 'jecket for boy', 'Grey,Black', 'S,M', '24-03-24-02-19-30_DN.jpg', 16.00, 20.00, 20.00, 5, 40, 1, '2024-03-24 07:19:30', '2024-03-24 07:19:30', 5),
(5, 'Jacket002', 'jacket for man', 'Blue,Black', 'M,L', '04-04-24-09-29-30_Jacket (2)-cr-450x672.jpg', 18.05, 19.00, 5.00, 3, 30, 1, '2024-04-04 14:29:30', '2024-04-04 14:29:30', 0),
(6, 'Crop hoodie001', 'good for women', 'Grey,Black', 'S,M,L', '04-04-24-09-30-23_Crop-Hoodie (3)-cr-450x672.jpg', 14.00, 20.00, 30.00, 4, 20, 1, '2024-04-04 14:30:23', '2024-04-04 14:30:23', 1),
(7, 'Trousers003', 'this products for man', 'Blue,Black', 'M,L', '04-04-24-09-31-06_Trousers (3)-cr-450x672.jpg', 17.10, 18.00, 5.00, 3, 40, 1, '2024-04-04 14:31:06', '2024-04-04 14:31:06', 1),
(8, 't-shirt0012', 'this is for girl', 'Blue,Grey', 'S,M', '04-04-24-09-31-58_T-Shirt-With-Print (3)-cr-450x672.jpg', 11.40, 12.00, 5.00, 2, 30, 1, '2024-04-04 14:31:58', '2024-04-04 14:31:58', 2),
(9, 'shirt0015', 'this products is for boy', '', 'S,M', '04-04-24-09-32-45_Shirt (3) (1).jpg', 10.80, 12.00, 10.00, 5, 30, 1, '2024-04-04 14:32:45', '2024-04-04 14:32:45', 2),
(10, 'pants', 'this is for little girl', 'Blue,Grey', 'S,M', '04-04-24-09-35-56_pants-girl.jpg', 9.50, 10.00, 5.00, 2, 40, 1, '2024-04-04 14:35:57', '2024-04-04 14:35:57', 0),
(11, 'shirt019', 'this  is for girls', 'Blue,Black', 'S,M', '04-04-24-09-36-39_shirt-girl.jpg', 11.40, 12.00, 5.00, 2, 10, 1, '2024-04-04 14:36:39', '2024-04-04 14:36:39', 4),
(12, 'Pink pants', 'this is for girl', 'Red,Grey', 'S,M', '04-04-24-09-37-50_pants-girls2.jpg', 11.40, 12.00, 5.00, 2, 10, 1, '2024-04-04 14:37:50', '2024-04-04 14:37:50', 0),
(13, 'shirt0022', 'this is for man', 'Blue,Grey', 'M,L,XL', '04-04-24-11-00-51_Shirt (3)-cr-450x672.jpg', 14.25, 15.00, 5.00, 3, 30, 1, '2024-04-04 16:00:51', '2024-04-04 16:00:51', 3),
(14, 'shose001', 'this is for man', 'Black', 'M,L', '04-04-24-11-01-27_nike.jpg', 28.50, 30.00, 5.00, 3, 20, 1, '2024-04-04 16:01:27', '2024-04-04 16:01:27', 0),
(15, 'blue shirt002', 'this shirt for man', 'Blue', 'M,L', '04-04-24-11-02-02_Shirt (3) (1).jpg', 11.20, 14.00, 20.00, 3, 30, 1, '2024-04-04 16:02:02', '2024-04-04 16:02:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `thumbnail`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$WNTQ53HhCEy8o.avWSiosOw8WMRl3OeigMz98a02Uz2j.XSh.3J6e', '090324064402-2429.jpg', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', '$2y$10$BsrQ43BDzwoEsECZ9lbR9OgT7yFJgVcpZ1epmwPIoo79W.wCQv296', '090324074622-anime8.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_logo`
--

CREATE TABLE `website_logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_logo`
--

INSERT INTO `website_logo` (`id`, `thumbnail`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '16-03-24-07-07-57_Free-Certificate-Backgrounds.jpg', 1, NULL, '2016-03-23 17:00:00'),
(3, '24-03-24-02-26-47_TEN11.png', 1, '2024-03-24 07:26:47', '2024-03-24 07:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_logo`
--
ALTER TABLE `website_logo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_logo`
--
ALTER TABLE `website_logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
