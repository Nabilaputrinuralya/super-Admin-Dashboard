-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_descriptions`
--

CREATE TABLE `about_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_descriptions`
--

INSERT INTO `about_descriptions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kamii merupakan siswi SMK Negeri 1 Cimahi, jurusan Sistem Informatika Jaringan dan Aplikasi (SIJA) yang sedang melaksanakan Praktik Kerja Lapangan (PKL) di PT. Eltran Indonesia. Kegiatan PKL ini dilaksanakan selama 6 bulan pada bulan Juli-Desember 2023.', '2023-11-16 19:44:43', '2023-12-01 00:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `about_teams`
--

CREATE TABLE `about_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` text NOT NULL,
  `jobposition` text NOT NULL,
  `instagramlink` text NOT NULL,
  `linkedinlink` text NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_teams`
--

INSERT INTO `about_teams` (`id`, `fullname`, `jobposition`, `instagramlink`, `linkedinlink`, `profilepicture`, `created_at`, `updated_at`) VALUES
(4, 'Fuji Anggraeni', 'Back-End Developer', 'https://www.instagram.com/fujianggr_/', 'https://www.linkedin.com/in/fuji-anggraeni-29371825b/', 'Desain tanpa judul (24).png', '2023-11-17 02:34:20', '2023-11-27 19:23:00'),
(5, 'Nabila Putri Nur Alya', 'Back-End Developer', 'https://www.instagram.com/nabilaptrnaa_/', 'https://www.linkedin.com/in/nabila-putri-nur-alya-475a10283/', 'Desain tanpa judul (24).png', '2023-11-18 20:16:31', '2023-11-18 22:08:29'),
(7, 'Pera Rahmawati', 'Front-End Developer', 'https://www.instagram.com/pera.rhmwt/', 'https://www.linkedin.com/in/pera-rahmawati/', 'Manene_Tradisi_Ganti_Baju_Mayat_di_Tana_Toraja.jpg', '2023-11-18 20:45:02', '2023-11-18 22:09:41'),
(24, 'test', 'Front-End Developer', 'n', 'm', 'Desain tanpa judul (24).png', '2023-11-24 02:17:37', '2023-11-24 02:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardtitle1` text DEFAULT NULL,
  `carddescription1` text DEFAULT NULL,
  `day` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `phonenumber` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `facebooklink` text DEFAULT NULL,
  `twitterlink` text DEFAULT NULL,
  `instagramlink` text DEFAULT NULL,
  `linkedinlink` text DEFAULT NULL,
  `cardtitle2` text DEFAULT NULL,
  `carddescription2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `cardtitle1`, `carddescription1`, `day`, `time`, `phonenumber`, `email`, `location`, `facebooklink`, `twitterlink`, `instagramlink`, `linkedinlink`, `cardtitle2`, `carddescription2`, `created_at`, `updated_at`) VALUES
(11, 'Let’s talk with us!', 'We take pride in our friendly customer care! Reach out and we’ll help you however we can.', 'Monday - Friday', '8.00 a.m. - 5.00 p.m.', '+62 881-0231-82562', 'proking_indonesia@gmail.com', 'Jl. Soekarno Hatta No.501, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265', 'm', 'm', 'm', 'm', 'w', 'mmm', '2023-10-31 19:44:20', '2023-11-01 01:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_card1s`
--

CREATE TABLE `contact_us_card1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardtitle` text NOT NULL,
  `carddescription` text NOT NULL,
  `day` text NOT NULL,
  `time` text NOT NULL,
  `phonenumber` text NOT NULL,
  `emailaddress` text NOT NULL,
  `locationaddress` text NOT NULL,
  `facebooklink` text NOT NULL,
  `twitterlink` text NOT NULL,
  `instagramlink` text NOT NULL,
  `linkedinlink` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_card1s`
--

INSERT INTO `contact_us_card1s` (`id`, `cardtitle`, `carddescription`, `day`, `time`, `phonenumber`, `emailaddress`, `locationaddress`, `facebooklink`, `twitterlink`, `instagramlink`, `linkedinlink`, `created_at`, `updated_at`) VALUES
(2, 'Let’s talk with us!', 'We take pride in our friendly customer care! Reach out and we’ll help you however we can.', 'Monday - Friday', '8.00 a.m. - 5.00 p.m.', '+62 881-0231-82562', 'proking_indonesia@gmail.com', 'Jl. Soekarno Hatta No.501, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265', 'https://www.instagram.com/nabilaptrnaa_/', 'https://www.instagram.com/nabilaptrnaa_/', 'https://www.instagram.com/nabilaptrnaa_/', 'https://www.linkedin.com/in/pera-rahmawati/', '2023-11-27 21:28:00', '2023-11-27 21:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_card2s`
--

CREATE TABLE `contact_us_card2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardtitle` text NOT NULL,
  `carddescription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_card2s`
--

INSERT INTO `contact_us_card2s` (`id`, `cardtitle`, `carddescription`, `created_at`, `updated_at`) VALUES
(1, 'Can\'t wait? Send a message!', 'Have a quick question? Fill out this form. If you need to include a picture or file attachment, please use emails.', '2023-11-17 00:49:42', '2023-11-21 01:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_send_messages`
--

CREATE TABLE `contact_us_send_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_send_messages`
--

INSERT INTO `contact_us_send_messages` (`id`, `fullname`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nabila putri nur alya', 'nabilaputri@gmail.com', '+628211545-690', '', 'm', '2023-11-19 05:26:00', '2023-11-19 05:26:00'),
(2, 'Nabila putri nur alya', 'admin@gmail.com', '+628211545-690', '', 'nm', '2023-11-19 05:26:19', '2023-11-19 05:26:19'),
(3, 'Fuji Anggraeni', 'nabilaputri567892@gmaiil.com', '+628211545-690', '', 'm', '2023-11-19 05:26:57', '2023-11-19 05:26:57'),
(4, 'c', 'c', 'c', '', 'c', '2023-11-19 05:33:57', '2023-11-19 05:33:57'),
(5, 'm', 'm', 'm', '', 'm', '2023-11-19 05:41:31', '2023-11-19 05:41:31'),
(6, 'Nabila putri nur alya', 'nabilaputri@gmail.com', '+628211545-690', '', 'haloo', '2023-11-19 20:12:39', '2023-11-19 20:12:39'),
(7, 'n', 'cc@gmail.com', '00', '', 'halo', '2023-11-19 20:25:28', '2023-11-19 20:25:28'),
(8, 'n', 'cc@gmail.com', '00', '', 'h', '2023-11-19 20:37:59', '2023-11-19 20:37:59'),
(9, 'test', 'cc@gmail.com', '089', '', 'test', '2023-11-19 20:58:10', '2023-11-19 20:58:10'),
(10, 'test', 'test@gmail.com', '00', '', 'nnn', '2023-11-19 21:21:18', '2023-11-19 21:21:18'),
(11, 'test', 'cc@gmail.com', '00', '', 'vvv', '2023-11-19 21:53:54', '2023-11-19 21:53:54'),
(12, 'b', 'n', 'n', 'Feedback', 'bbbbbb', '2023-11-19 22:04:12', '2023-11-19 22:04:12'),
(13, 'test', 'cc@gmail.com', '00', 'Feedback', 'mm', '2023-11-19 22:28:07', '2023-11-19 22:28:07'),
(14, 'nabila', 'test@gmail.com', '00', 'Feedback', 'ss', '2023-11-19 22:28:36', '2023-11-19 22:28:36'),
(15, 'n', 'n', 'n', 'Website Issue(s)', 'nn', '2023-11-19 23:45:22', '2023-11-19 23:45:22'),
(16, 'm', 'm', 'm', 'Website Issue(s)', 'm', '2023-11-20 00:17:10', '2023-11-20 00:17:10'),
(17, 'v', 'v', 'v', 'Website Issue(s)', 'cc', '2023-11-20 00:17:46', '2023-11-20 00:17:46'),
(18, 's', 's@gmail.com', '00', 'General Question(s)', 'dd', '2023-11-20 00:39:33', '2023-11-20 00:39:33'),
(19, 'halo', 'aa@gmail.com', '00', 'General Question(s)', 'dd', '2023-11-20 00:46:35', '2023-11-20 00:46:35'),
(20, 'n', 'n@gmail.com', '00', 'Feedback', 'd', '2023-11-20 00:47:07', '2023-11-20 00:47:07'),
(21, 'Nabila Putri Nur Alya', 's@gmail.com', 'm', 'Website Issue(s)', 'nn', '2023-11-20 00:48:28', '2023-11-20 00:48:28'),
(22, 'Nabila', 'nabila@gmail.com', '00', 'Feedback', 'halo', '2023-11-20 00:59:00', '2023-11-20 00:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websitelogo` varchar(255) NOT NULL,
  `locationaddress` text NOT NULL,
  `copyrightpage` text NOT NULL,
  `privacypolicypage` text NOT NULL,
  `termsofusepage` text NOT NULL,
  `copyright` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `websitelogo`, `locationaddress`, `copyrightpage`, `privacypolicypage`, `termsofusepage`, `copyright`, `created_at`, `updated_at`) VALUES
(2, 'Website_Logo_1.png', 'Jl. Soekarno Hatta No.501, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt cumque ea quia nihil. Quia, ut eligendi, sapiente dicta vitae assumenda dolore quaerat quasi error accusantium quae quo laborum quam soluta?', 'Copyright © 2023 ProKing Indonesia', '2023-11-18 23:47:44', '2023-12-10 03:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websiteimage` varchar(255) NOT NULL,
  `websitelogo` varchar(255) NOT NULL,
  `greetingsword` text NOT NULL,
  `websitedescription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `websiteimage`, `websitelogo`, `greetingsword`, `websitedescription`, `created_at`, `updated_at`) VALUES
(2, 'Website_Image_1.png', 'Website_Logo_2.png', 'Welcome  Too', 'ProKing (Project Taking) merupakan sebuah website yang dibuat khusus untuk mengelola vbeberapa proyek yang telah dibuat. Dengan ProKing, Anda akan lebih mudah dalam menampilkan serta mengelola proyek.', '2023-10-29 21:56:45', '2023-12-01 00:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jenkel`, `alamat`, `hp`, `jurusan`, `email`, `created_at`, `updated_at`) VALUES
(1, 'lala', 'perempuan', 'di rumah', '0000', 'apa saja', 'lala@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullname`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ardana Lyla', 'ardanalyla@gmail.com', '081234776891', 'Feedback', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.', 0, '2023-11-20 01:02:12', '2023-11-20 18:42:10'),
(3, 'Sastra Fadiano', 'sastraafadiano@gmail.com', '082144530094', 'Website Issue(s)', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.', 0, '2023-11-20 01:03:16', '2023-11-20 18:42:13');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_25_073703_create_project_pages_table', 1),
(7, '2023_09_27_071934_create_navbars_table', 2),
(8, '2023_09_29_024534_create_homes_table', 3),
(9, '2023_09_29_042403_create_abouts_table', 4),
(10, '2023_10_01_062958_create_abouts_table', 5),
(11, '2023_10_02_020146_create_about_d_s_table', 6),
(12, '2023_10_02_025051_create_home_d_s_table', 7),
(13, '2023_10_02_032721_create_contacts_table', 7),
(14, '2023_10_02_033314_create_contacts_table', 8),
(15, '2023_10_02_042905_create_footers_table', 9),
(16, '2023_10_02_062647_create_messages_table', 10),
(17, '2023_10_02_065622_create_messages_table', 11),
(18, '2023_10_02_072003_messages', 12),
(19, '2023_10_02_073902_create_candidats_table', 13),
(20, '2023_10_03_010943_create_contact1s_table', 14),
(21, '2023_10_03_020655_create_contact2s_table', 15),
(22, '2023_10_03_022517_create_contacts_table', 16),
(23, '2023_10_03_024000_create_contact_d_s_table', 17),
(24, '2023_10_03_025631_create_contacts_table', 18),
(25, '2023_10_03_030344_create_contact_d_s_table', 19),
(26, '2023_10_03_035205_create_contacts_table', 20),
(27, '2023_10_03_041258_create_contact_d_s_table', 21),
(28, '2023_10_03_045121_create_project_management_table', 22),
(29, '2023_10_03_065339_add_kode_siswa_to_project_pages', 23),
(30, '2023_10_03_073148_create_students_table', 24),
(31, '2023_10_03_092936_create_project_management_table', 25),
(32, '2023_10_04_033950_create_messages_table', 26),
(33, '2023_10_04_070452_messages', 27),
(34, '2023_10_05_022658_create_home_d_s_table', 28),
(35, '2023_10_10_030235_home', 29),
(36, '2023_10_10_030415_create_cobas_table', 30),
(37, '2023_10_10_030636_cobas', 31),
(38, '2023_10_27_031830_create_mahasiswas_table', 32),
(39, '2023_10_27_081403_messages', 33),
(40, '2023_10_30_041938_create_homes_table', 34),
(41, '2023_10_30_065257_create_abouts_table', 35),
(42, '2023_11_01_013539_create_contacts_table', 36),
(43, '2023_11_01_062708_create_about_teams_table', 37),
(44, '2023_11_01_063922_create_about_descriptiions_table', 38),
(45, '2023_11_01_064215_create_about_descriptions_table', 39),
(46, '2023_11_13_030742_create_about_descriptions_table', 40),
(47, '2023_11_13_033007_create_about_teams_table', 41),
(48, '2023_11_17_015954_create_about_teams_table', 42),
(49, '2023_11_17_022547_create_about_descriptions_table', 43),
(50, '2023_11_17_062421_create_contact_us_card1s_table', 44),
(51, '2023_11_17_071735_contact_us_card1', 45),
(52, '2023_11_17_072314_contactuscard1', 46),
(53, '2023_11_17_072516_create_contact_uscard2s_table', 47),
(54, '2023_11_17_074416_create_contact_us_card2s_table', 48),
(55, '2023_11_19_092759_create_contact_us_send_messages_table', 49),
(56, '2023_11_19_121518_contact_us_send_message', 50),
(57, '2023_11_20_075420_create_messages_table', 51),
(58, '2023_11_21_040908_create_user_management_table', 52),
(59, '2023_11_27_062040_create_portal_logins_table', 53),
(60, '2023_12_06_084315_projectpagw', 54),
(61, '2023_12_10_095806_projectpage', 55);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websitelogo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `websitelogo`, `created_at`, `updated_at`) VALUES
(4, 'UIMG_20230929651625b20189d.jpg', '2023-09-28 18:17:38', '2023-09-28 18:17:38');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portal_logins`
--

CREATE TABLE `portal_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectname` text NOT NULL,
  `projectlink` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portal_logins`
--

INSERT INTO `portal_logins` (`id`, `projectname`, `projectlink`, `created_at`, `updated_at`) VALUES
(5, 'Project Name 2', 'http://127.0.0.1:8000/login', '2023-11-28 19:52:37', '2023-11-28 19:52:37'),
(6, 'Project Name 1', 'v', '2023-11-28 19:52:49', '2023-11-28 19:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `projectpage`
--

CREATE TABLE `projectpage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectname` text NOT NULL,
  `projectdescription` text NOT NULL,
  `projectimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectpage`
--

INSERT INTO `projectpage` (`id`, `projectname`, `projectdescription`, `projectimage`, `created_at`, `updated_at`) VALUES
(1, 'Project Name 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_1.jpg', '2023-12-10 03:06:51', '2023-12-10 03:06:51'),
(2, 'Project Name 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_2.jpg', '2023-12-10 03:07:10', '2023-12-10 03:07:10'),
(3, 'Project Name 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_3.jpg', '2023-12-10 03:07:27', '2023-12-10 03:07:27'),
(4, 'Project Name 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_4.jpg', '2023-12-10 03:07:41', '2023-12-10 03:07:41'),
(5, 'Project Name 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_5.jpg', '2023-12-10 03:10:27', '2023-12-10 03:10:27'),
(6, 'Project Name 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Project_Image_6.jpg', '2023-12-10 03:10:51', '2023-12-10 03:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `project_management`
--

CREATE TABLE `project_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` text DEFAULT NULL,
  `projectname` text NOT NULL,
  `projectuser` text NOT NULL,
  `projectdeadline` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_management`
--

INSERT INTO `project_management` (`id`, `project_id`, `projectname`, `projectuser`, `projectdeadline`, `created_at`, `updated_at`) VALUES
(34, 'PROJ_20231201085221', 'p', 'p', '0012-12-12', '2023-12-01 01:52:21', '2023-12-01 01:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` text NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'STD-00000', 'STD-00000', '2023-10-03 01:03:11', '2023-10-03 01:03:11'),
(2, 'STD-01', 'Admin Satu dua', '2023-10-03 01:05:10', '2023-10-03 01:05:10'),
(3, 'STD-02', 'admin', '2023-10-03 01:05:14', '2023-10-03 01:05:14'),
(4, 'STD-00003', 'jihoon', '2023-10-03 01:06:35', '2023-10-03 01:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nabila Putri Nur Alya', 'nabilaputri@gmail.com', 1, '082115450690', 'UIMG_20231122655d6d972d50e.jpg', NULL, '$2y$10$z/SanE7pJpd04EnWRBsSCOvQcTdvo3RiC4ONE60m845l4IsSnxo5i', NULL, '2023-09-25 19:12:38', '2023-12-01 02:43:49'),
(2, 'Wyjyn hanolaaa', 'wyjynhanola@gmail.com', 2, 'pink', 'UIMG_20231004651d186bcc437.jpg', NULL, '$2y$10$0XKgrIOVaKBLUh2NPzpAAuRt61E4WWMezK3JEkscjgj.cYSqQb4nO', NULL, '2023-09-25 19:15:17', '2023-10-04 00:46:51'),
(3, 'yuta watira', 'yutawtr@gmail.com', 2, 'red', NULL, NULL, '$2y$10$DIa2/e59/GRxzYG4oUAJNutUaOO6deemX2vx9YytKHoLaD5dvFyvy', NULL, '2023-09-25 20:05:19', '2023-09-25 20:05:19'),
(26, 'Magnus Russel', 'carolyne.kuphal@example.com', NULL, NULL, NULL, '2023-10-18 00:58:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FG84oUgGQ0', '2023-10-18 00:58:44', '2023-10-18 00:58:44'),
(27, 'Carolina Kuvalis', 'kathlyn78@example.net', NULL, NULL, NULL, '2023-10-18 00:58:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GK4Xk6vLgr', '2023-10-18 00:58:44', '2023-10-18 00:58:44'),
(28, 'Sienna Gusikowski', 'freddy.rempel@example.org', NULL, NULL, NULL, '2023-10-18 00:58:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nH4jttLlxF', '2023-10-18 00:58:44', '2023-10-18 00:58:44'),
(29, 'hooni', 'hooni@gmail.com', 2, '000', '216731700705728_avatar.png', NULL, '$2y$10$zY7098tyQO3MxdeqhMaSC.ebE0/zGYuFTbg384W1negDSOqSjnFAa', NULL, '2023-11-22 19:15:28', '2023-11-22 19:15:28'),
(30, 'ayo', 'ayo@gmail.com', 2, '000', '48781700705941_avatar.png', NULL, '$2y$10$zXgyAMKX.W6CfVesNu.pL.Vk4VLQEGfXGxvTwKH1mfiImZnu2Rni2', NULL, '2023-11-22 19:19:01', '2023-11-22 19:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userproject` text NOT NULL,
  `userid` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `profilepicture` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `userproject`, `userid`, `username`, `email`, `phone`, `profilepicture`, `created_at`, `updated_at`) VALUES
(2, 'Proin pharetra', 'UZKI-000000', 'Suspendisse dui purus', 'Suspendisse@gmail.com', '081234556621', 'Profile_Picture_3.jpg', '2023-11-20 22:07:04', '2023-11-27 21:35:45'),
(3, 'Mauris orci', 'UZKI-00001', 'In porttitor', 'Inporttitor@gmail.com', '08215578876543', 'Profile_Picture_7.jpg', '2023-11-20 22:08:28', '2023-11-20 22:08:28'),
(4, 'Test', '123', 'Test user', 'test@gmail.com', '082144530094', 'Desain tanpa judul (24).png', '2023-11-23 20:10:54', '2023-11-23 20:10:54'),
(5, 'a', 'UZKI-00000', 'Suspendisse dui purus', 'cc@gmail.com', '081234776891', 'Desain tanpa judul (25).png', '2023-11-26 21:13:24', '2023-11-26 21:13:24'),
(6, 'Test', '20231127043555', 'Suspendisse dui purus', 'cc@gmail.com', '082144530094', 'Desain tanpa judul (25).png', '2023-11-26 21:35:55', '2023-11-26 21:35:55'),
(7, 'Proin pharetra', 'VZAD_20231127043702', 'Suspendisse dui purus', 'cc@gmail.com', '089', 'Desain tanpa judul (25).png', '2023-11-26 21:37:02', '2023-11-26 21:37:02'),
(8, 'Project Name 2', 'VZAD_20231128020917', 'aaa', 'test@gmail.com', '081234556621', 'Desain tanpa judul (25).png', '2023-11-27 19:09:17', '2023-11-27 19:09:17'),
(9, 'Project Name 2', 'VZAD_20231128021243', 'kominfo', 'cc@gmail.com', '081234556621', 'Desain tanpa judul (25).png', '2023-11-27 19:12:43', '2023-11-27 19:12:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_descriptions`
--
ALTER TABLE `about_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_teams`
--
ALTER TABLE `about_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_card1s`
--
ALTER TABLE `contact_us_card1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_card2s`
--
ALTER TABLE `contact_us_card2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_send_messages`
--
ALTER TABLE `contact_us_send_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portal_logins`
--
ALTER TABLE `portal_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectpage`
--
ALTER TABLE `projectpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_management`
--
ALTER TABLE `project_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_descriptions`
--
ALTER TABLE `about_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_teams`
--
ALTER TABLE `about_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us_card1s`
--
ALTER TABLE `contact_us_card1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_card2s`
--
ALTER TABLE `contact_us_card2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_send_messages`
--
ALTER TABLE `contact_us_send_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portal_logins`
--
ALTER TABLE `portal_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projectpage`
--
ALTER TABLE `projectpage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_management`
--
ALTER TABLE `project_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
