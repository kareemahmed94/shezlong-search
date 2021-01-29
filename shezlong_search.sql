-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 03:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shezlong_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'مشاكل الأطفال', 'مشاكل-الأطفال', NULL, NULL),
(2, 'مشاكل المراهقة', 'مشاكل-المراهقة', NULL, NULL),
(3, 'الاكتئاب', 'الاكتئاب', NULL, NULL),
(4, 'القلق والوسواس', 'القلق-والوسواس', NULL, NULL),
(5, 'استشارات الزواج / مشاكل العلاقات', 'استشارات-الزواج-/-مشاكل-العلاقات', NULL, NULL),
(6, 'اضطرابات الفصام', 'اضطرابات-الفصام', NULL, NULL),
(7, 'الإدمان', 'الإدمان', NULL, NULL),
(8, 'المشاكل الجنسية', 'المشاكل-الجنسية', NULL, NULL),
(9, 'مشاكل الشيخوخة', 'مشاكل-الشيخوخة', NULL, NULL);

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
(4, '2021_01_27_090200_create_therapists_table', 1),
(5, '2021_01_27_090315_create_categories_table', 1),
(6, '2021_01_27_090515_create_therapist_categories_table', 1),
(7, '2021_01_27_091653_create_therapist_sessions_table', 1);

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
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainSpec` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`id`, `name`, `title`, `mainSpec`, `avatar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'بسمه محمود', 'معالج نفسي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/71005-8d1c0f5cb4f2b0b5d729e07b81a07b48.jpg', 1, NULL, NULL),
(2, 'د. حسين حج أحمد', 'دكتوراه الصحة النفسية والعلاج النفسي', 'اضطرابات القلق، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/0e2fd49405cc114a1af3a9f7d9d3e091.png', 2, NULL, NULL),
(3, 'زين العابدين محمد سنهورى', 'دكتوراه علم النفس و استشارات نفسيه و اسريه', 'اضطرابات الشخصية، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/78e7cf4dce9fd9f67762e2df4af4495b.jpg', 3, NULL, NULL),
(4, 'أ. جيرمين نبيل', 'أخصائي نفسي إكلينيكي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/3652-da185f6f7b52549c3980134bf575cdc3.jpg', 4, NULL, NULL),
(5, 'جورجيت نادر', 'معالجة  نفسية', 'اضطرابات القلق، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/e3f67447c43693a04eaa9c20bc2e20a2.png', 5, NULL, NULL),
(6, 'مريم أيمن فوزي', 'معالج نفسي', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/dcecafe80144cb750b7f02a935b03dc0.jpg', 6, NULL, NULL),
(7, 'د. محمد سراج', 'دكتوراه/العلاج النفسي/القلق-الاكتئاب-الوسواس-إدمان الإباحية-العلاقات-اضطرابات الشخصية- المشكلات الجنسية-الجنسية المثلية -الاستشارات النفسية والزوجية ', 'الاكتئاب، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/17699-a9c01918ee9833db2e49192dde629711.jpg', 7, NULL, NULL),
(8, 'ولاء وحيد', 'اخصائي نفسي و مرشد نفسي', 'اضطراب كرب ما بعد الصدمة، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/42308-0dd487e662274296b06f8f175a0d008c.jpg', 8, NULL, NULL),
(9, 'د.فاطمة قطب', 'استشاري الصحة النفسية ', 'الاكتئاب، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/69925-92f3677d30bfbf19e9316296b8935a29.jpg', 9, NULL, NULL),
(10, 'د.علاء العشري', 'استشاري الطب النفسي و علاج الإدمان ', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/63645-22cc8e3f39e6c626422417802d5b41d3.jpg', 10, NULL, NULL),
(11, 'د. داليا الحلواني', 'أخصائي الطب النفسي و علاج الإدمان', 'اضطرابات الشخصية، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/b097a3d7ca52a97e29a86ab399929e38.jpg', 11, NULL, NULL),
(12, 'شيماء ثابت', 'معالج نفسي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/66278-cb6462a028fca30b27824e9730a9f61e.jpg', 12, NULL, NULL),
(13, 'سمر حمدي', 'استشاري علاج نفسي', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/66400-10b5914ad283cd452d1ffbd2a8c9c260.jpeg', 13, NULL, NULL),
(14, 'مارينا مقار', 'اخصائي نفسي اكلنيكي', 'الاكتئاب، اضطراب القلق العام', 'https://scontent.shezlong.com/therapist_profile_pictures/b7330b3fa41704fd2e8b31b2d6ea0953.png', 14, NULL, NULL),
(15, 'نورهان عبد الرحمن', 'معالج نفسى و زواجى  - ماجيستير علاقات زواجية- باحثة دكتوراة فى العلاج الزواجى.', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/a54faf360733b562ec6cc1a8e8cf5a8b.png', 15, NULL, NULL),
(16, 'د. دلال رضوان', 'دكتوراه علم النفس - فرنسا', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/59c7d1f7e68179f0e1aac2eff1f1e3c2.png', 16, NULL, NULL),
(17, 'مينا عزيز', 'أخصائى نفسى', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/63663-e10d9361f6b55801d2f0259f1dad1081.jpg', 17, NULL, NULL),
(18, 'دعاء فتحي علي', 'اخصائي نفسي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/273f4cce7199e68cabdcd937abf84c4f.jpg', 18, NULL, NULL),
(19, 'د. نورهان علاء مراد', 'طبيبة نفسية', 'الاكتئاب، اضطراب القلق العام', 'https://scontent.shezlong.com/therapist_profile_pictures/c34d24c21a17b4905fb1832ff59ab414.png', 19, NULL, NULL),
(20, 'شيماء جابر عبد الراضي', 'اخصائي نفسي  اكلينكي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/67574-db081bc67ea2a2c8a79094038c0c49fd.jpg', 20, NULL, NULL),
(21, 'أحمد حشيش', 'أخصائى العلاج النفسى', 'اضطرابات القلق، اضطراب كرب ما بعد الصدمة', 'https://scontent.shezlong.com/therapist_profile_pictures/17624-16f6f5a29072599a26673f9d048ff914.jpg', 21, NULL, NULL),
(22, 'ايمان محمود حسن على شعبان', 'دكتور صحة نفسية،معالج  ومرشد نفسي', 'اضطرابات القلق، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/46799-588f53f5d3a3557e46c2b9a419b8f00e.jpeg', 22, NULL, NULL),
(23, 'د.هدى جمال الدين علي', 'مدرس مساعد طب نفسي جامعة الاسكندرية -طبيب نفسي', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/63657-42b88a7998a56fa84d6ef610873bdf4a.jpg', 23, NULL, NULL),
(24, 'هدى رضوان', 'مستشار نفسي', 'اضطرابات المزاج، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/vspvyvdllilvbuqeilfcamsnpcsptgrc.jpg', 24, NULL, NULL),
(25, 'د.محمد سعيد زغلول', 'استشارى الطب النفسى وعلاج الادمان', '', 'https://scontent.shezlong.com/therapist_profile_pictures/b5945c3ab3c87ce258c208a30943985b.png', 25, NULL, NULL),
(26, 'أندرو نادي', 'مرشد-مشير نفسي', 'الاكتئاب، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/c4aeab678db0cc0021aba0d65a7161c3.jpg', 26, NULL, NULL),
(27, 'علي عبدالباسط عبدالصمد', 'معالج نفسي اكلينيكي، باحث دكتوراه فى علم النفس الإكلينيكي', 'الاضطرابات الجنسية، اضطراب الهوية الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/93f4df503cf39e06c12935a33caceb52.jpg', 27, NULL, NULL),
(28, 'سلمى عاصم', 'أخصائى نفسى -باحثة ماجستير', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/69912-93697bffd762789ee88c622538f77bae.jpg', 28, NULL, NULL),
(29, 'د.عبدالرحمن عبدالله العمري', 'معالج نفسي', 'اضطراب الوسواس القهري، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/72572-8f3a1bd1de25182bb75dae8859622608.jpg', 29, NULL, NULL),
(30, 'اسماء مختار', 'اختصاصية علاج نفسي وباحثة دكتوراه', 'اضطرابات المزاج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/66397-10a7a756f2bba5c20435cdd6d985a905.jpg', 30, NULL, NULL),
(31, 'وئام العايدي', 'معالج نفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/66276-e37506de83c65f6069166eae195b7bfc.jpeg', 31, NULL, NULL),
(32, 'أ. وفاء شلبي', 'معالجة نفسية', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/8650-7bb703e84d3f79230fedf1fb7f00764c.jpeg', 32, NULL, NULL),
(33, 'هناء نيازي', 'معالج نفسي', 'الاكتئاب، اضطراب القلق العام', 'https://scontent.shezlong.com/therapist_profile_pictures/1d0d74fe58be63f06b9dcf408b338b2f.png', 33, NULL, NULL),
(34, 'ميريت عجايبي', 'معالج نفسي', 'اضطراب كرب ما بعد الصدمة، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/ae89e0497eca764eed4f79b99a1a850f.png', 34, NULL, NULL),
(35, 'زينب شطا', 'أستاذ م. واستشاري الصحة النفسية', '', 'https://scontent.shezlong.com/therapist_profile_pictures/45444-a329d268eac17f27492bbb507f51f09f.png', 35, NULL, NULL),
(36, 'نرمين نعمان', 'أخصائي صحة نفسية وتحليل سلوكي', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/70591-7cceb790078f7432a4815d07c97c90eb.jpeg', 36, NULL, NULL),
(37, 'الاء محمد عيسى', 'اخصائية ومعالجة نفسية', 'اضطرابات المزاج، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/8871463ac4e125d1f8c6b8e804e9e0ee.jpg', 37, NULL, NULL),
(38, 'بشائر محمد عدلاوي', 'أخصائية نفسية إكلينيكية', 'اضطرابات المزاج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/7a557ac5f37e20e61dbd3f803a51feb1.png', 38, NULL, NULL),
(39, 'د. سعيد محمد', 'استشاري نفسي واسري وعلاقات ', 'العلاقات، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/77139-bac558c120161b9a9f642ff0a0081037.jpg', 39, NULL, NULL),
(40, 'هبة غنيم', 'معالج نفسي', 'الاكتئاب، اضطراب كرب ما بعد الصدمة', 'https://scontent.shezlong.com/therapist_profile_pictures/6f116c5863780ace12bab00aea5aeca9.jpg', 40, NULL, NULL),
(41, 'يارا فيصل', 'معالج نفسي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/65356-b2919c7d89da657aff48e21167a56246.jpg', 41, NULL, NULL),
(42, 'عماد العيدان', 'اختصاصي صحة نفسية و علاج نفسي', 'الاكتئاب، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/ccd5fe24eedbe014eb21fb1aa331ed13.png', 42, NULL, NULL),
(43, 'أميرة مصطفى', 'معالج نفسى', 'الاكتئاب، الفوبيا والرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/72581-09f6af77877bfa243a2bda2e718841dd.jpg', 43, NULL, NULL),
(44, 'محمد.شعبان', 'طبيب نفسية', 'اضطرابات القلق، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/c21579b231f30e8335d886db16fefc7a.png', 44, NULL, NULL),
(45, 'د. رحاب عبد الفتاح', 'طبيبة ومعالجة نفسية', 'اضطرابات المزاج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/z9pcldhkn6.jpg', 45, NULL, NULL),
(46, 'د. زكريا فاخوري', 'معالج نفسي / استشاري  علاقات أسرية - كندا - ترخيص مزاولة مهنة # ٠٠١٧٠٢', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/db93f7b8e3172697a102edaf7bb96141.jpg', 46, NULL, NULL),
(47, 'ايناس  دويدار', 'أخصائى الطب النفسي', 'الاكتئاب، اضطرابات الشخصية', 'https://scontent.shezlong.com/therapist_profile_pictures/274e4e4acc7fee9c91285bc058b7f865.png', 47, NULL, NULL),
(48, 'داليا صالح', 'دكتوراه العلاج النفسي - فرنسا', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/97c086ea93e9d9951f18a61be8c22bd9.png', 48, NULL, NULL),
(49, 'اميرة الساعي', 'معالج نفسي للصدمات النفسية والشعورية', 'اضطرابات القلق، اضطراب كرب ما بعد الصدمة', 'https://scontent.shezlong.com/therapist_profile_pictures/70e3c3197b633806474615f8edfb1142.jpg', 49, NULL, NULL),
(50, 'عبير طوسون أحمد', 'أستاذ علم النفس المساعد_ استشاري علم النفس الإكلينيكي، معالج نفسي ', 'اضطرابات القلق، اضطرابات التعلم', 'https://scontent.shezlong.com/therapist_profile_pictures/mydwbfuinvqxnomugdbflhwddhzcnbga.jpg', 50, NULL, NULL),
(51, 'د وليد طلعت', 'استشاري الطب النفسي وعلاج الإدمان والأمراض العصبية', 'اضطرابات المزاج، الاضطرابات الذهانية', 'https://scontent.shezlong.com/therapist_profile_pictures/934906dca4fbb3cbf2097eeed273e453.jpg', 51, NULL, NULL),
(52, ' هند البنا', 'استشاري الصحة النفسية والعلاقات الزوجية', 'العلاقات، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/39793-3e54a2df9ae626d181f138361255c6e3.jpg', 52, NULL, NULL),
(53, 'د. محمد الشامي', 'المستشار الطبي لموقع شيزلونج', 'اضطرابات القلق، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/3ddf20512df2bd85a4b2ad37e82b257b.png', 53, NULL, NULL),
(54, 'د. معتزبالله ابراهيم محمد علي', 'مدرس واستشاري مركز الطب النفسي كلية الطب جامعة عين شمس', 'الاضطرابات الجنسية، الخَرَف', 'https://scontent.shezlong.com/therapist_profile_pictures/31473ff47f178f7255df4e9a08dd82fe.jpg', 54, NULL, NULL),
(55, 'أ.روز عبدالله', 'اخصائية نفسية اكلينيكية', 'اضطرابات المزاج، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/393d008a43ca7b563ad9790f9577c00e.jpg', 55, NULL, NULL),
(56, 'أحمد حسن خليل', 'أخصائي العلاج النفسي الاكلينيكي', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/701eda1921abfe773a211abae064aea4.png', 56, NULL, NULL),
(57, 'د. هند عاطف ', 'مدرس علم النفس بكلية الآداب جامعة عين شمس ', 'اضطراب القلق العام، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/82757-df06039ce61821fc70717d3f9bf9070d.jpg', 57, NULL, NULL),
(58, 'مي عيسى', 'أستاذ الطب النفسي -رئيس قسم طب المخ و الأعصاب و الطب النفسي (سابقا)بكلية الطب جامعة طنطا', 'اضطراب الهلع ورهاب الخلاء، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/ace24ab39832c2523ebb99ccd32c2be1.png', 58, NULL, NULL),
(59, 'دكتور أيمن الديب', 'معالج نفسي', 'الاكتئاب، اضطرابات الشخصية', 'https://scontent.shezlong.com/therapist_profile_pictures/6383230acdb9d8a68e05cdb7451fc7a6.png', 59, NULL, NULL),
(60, 'يوشع محمود عمور', 'طبيب أخصائي امراض نفسية', '', 'https://scontent.shezlong.com/therapist_profile_pictures/78e6bf3ab27e1c8208533a0f70c4314d.png', 60, NULL, NULL),
(61, 'مروان الدحيلان', 'أخصائي توجيه وارشاد نفسي', 'اضطرابات القلق، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/8dc2fe0eea1355b670fc38fc3e745134.png', 61, NULL, NULL),
(62, 'فاطمة رمزى', 'معالج نفسي وأرشاد أسري', 'العلاقات، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/e3c254b1daf6f27ebbb26ce3ac8ecf27.png', 62, NULL, NULL),
(63, 'د.اسراء السحيمى', 'معالج نفسى اكلينيكى', 'الاكتئاب، الخلل الجنسي', 'https://scontent.shezlong.com/therapist_profile_pictures/3d484dfa50e59f64742ff9799c0bcb37.png', 63, NULL, NULL),
(64, 'ميراى فرنسيس', 'معالج نفسى', 'العلاقات، اضطرابات التواصل', 'https://scontent.shezlong.com/therapist_profile_pictures/69928-adb340071401fa77ab3bb21783a32113.jpg', 64, NULL, NULL),
(65, 'د. مي محمد محمود', 'اخصائي العلاج النفسي وعلاج إضطرابات القلق و الوسواس القهري', 'اضطرابات القلق، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/e4fccef825023a2a2c5c6c9350782134.png', 65, NULL, NULL),
(66, 'عصام جابر علي', 'دكتوراه الطب النفسي', 'اضطرابات المزاج، اضطرابات الشخصية', 'https://scontent.shezlong.com/therapist_profile_pictures/d31ea03447e5fc317d66b0867665df05.jpg', 66, NULL, NULL),
(67, 'مروه علاء الدين ابراهيم', 'اخصائي نفسي', 'اضطرابات التعلم، اضطرابات طيف التوحد', 'https://scontent.shezlong.com/therapist_profile_pictures/7e5811ef93834ec668fb2c123a6be5ff.png', 67, NULL, NULL),
(68, 'د فادى صفوت', 'أخصائي طب نفسي و علاج إدمان', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، اضطرابات المزاج', 'https://scontent.shezlong.com/therapist_profile_pictures/25d7bee36b33562c8810f7dd16915af2.jpg', 68, NULL, NULL),
(69, 'مينا جورجى', 'اخصائى الطب النفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/72bdb3c9e6cbd2bd7824fcf3c60894ca.png', 69, NULL, NULL),
(70, 'سحر داود', 'استشاري نفسي اطفال تخصص احتياجات خاصه', 'اضطرابات التعلم، اضطرابات طيف التوحد', 'https://scontent.shezlong.com/therapist_profile_pictures/8625cc4aeb7ce383c0457439a1532e32.png', 70, NULL, NULL),
(71, 'إسراء أحمد', 'أخصائية نفسية ومعالجة إدمان', '', 'https://scontent.shezlong.com/therapist_profile_pictures/e7d28ee8ebc0063f357d35d1331486d6.png', 71, NULL, NULL),
(72, 'د. سماء نصار', 'اخصائي نفسي اكلينيكي', 'اضطراب الهوية الجنسية، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/82444-22e5bcb3e40af11fff977db17ca7fb64.jpg', 72, NULL, NULL),
(73, 'يسرا مرسي', 'إختصاصى نفسى إكلينيكى ومعالج نفسى معتمد من وزارة الصحة  ', 'الاكتئاب، اضطراب القلق العام', 'https://scontent.shezlong.com/therapist_profile_pictures/75029-00e1081c8aaf7fad4986bf61e3cdbf06.png', 73, NULL, NULL),
(74, 'د. زاهر عدي', 'أخصائي الطب النفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/2f117115c0a6a27fbacb2d4ac89d132a.png', 74, NULL, NULL),
(75, 'مروة النجار', 'معالج نفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/1f57325832e552a88304bd76076a47da.png', 75, NULL, NULL),
(76, 'رامى عادل', 'أخصائي اجتماعي -معالج سلوكيات إدمانية- مشورة أسرية', 'الإدمان، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/74d9e4c5e7f9b20cd4be0bdf7da5d725.jpg', 76, NULL, NULL),
(77, 'عبد الرحمن صبري', 'أخصائي نفسي إكلينيكي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/46364aaf9c547c29378b419cfe9ffaab.jpg', 77, NULL, NULL),
(78, 'أ. منى ناصف', 'أخصائية العلاج النفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/37ec62c65f6fc565441a4403441612fa.png', 78, NULL, NULL),
(79, 'مروة أبو زهرة', 'أخصائي نفسى إكلينيكى', 'اضطراب الوسواس القهري، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/69915-ea56d75125b779e80322751427a1f175.jpg', 79, NULL, NULL),
(80, 'Dr Carlo Demarco', 'Consultant Psychologist and Master NLP Practitioner', 'اضطرابات المزاج، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/329380ef9a9dc334fbe69545eb054d96.png', 80, NULL, NULL),
(81, 'سمر  سعيد عبد الغني', 'أخصائي نفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/558a96b238ce7cb489ef8b4b144f9f7c.png', 81, NULL, NULL),
(82, 'محمد عبد العليم عزيز', 'طبيب ومعالج نفسي', 'اضطرابات القلق، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/5e9f47ba0b744fca685e9c582361f067.png', 82, NULL, NULL),
(83, 'صفاء اسماعيل', 'معالج نفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/f1f5d54f40da153b0ef28f575cdba7a7.png', 83, NULL, NULL),
(84, 'وسيم اشرف', 'أخصائي نفسي أكلينيكي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/24ccf923a4ce0eab433058faa241e0d3.jpg', 84, NULL, NULL),
(85, 'مارينا كمال', 'معالجه نفسيه', 'العلاقات، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/442f4583e9d4440a68cf9456b16b288d.png', 85, NULL, NULL),
(86, 'نسمه اسماعيل', 'اخصائية نفسيه اكلينيكيه', 'اضطرابات القلق، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/291b129be937baacb88cb4907e17f765.png', 86, NULL, NULL),
(87, 'منة علي', 'أخصائي نفسي إكلينيكي', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/53322-79073f9139a439a55f277593ca40b646.jpg', 87, NULL, NULL),
(88, 'أ. إسلام فاروق النحات', 'اختصاصى علاج نفسى - معالج معرفى سلوكى معتمد', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/d316dfbd1bf4c12f1f106c358874f076.png', 88, NULL, NULL),
(89, 'سعد المهدي', 'استشاري الطب النفسي', 'اضطراب الوسواس القهري، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/39042-a32d65290f1bfc91a8d7e1da35802f39.jpg', 89, NULL, NULL),
(90, 'منى صبرى', 'معالج نفسى', '', 'https://scontent.shezlong.com/therapist_profile_pictures/68218-a55cc2cf2b03f430437783f091675d62.jpeg', 90, NULL, NULL),
(91, 'مريم طه', 'مختصه نفسيه', 'اضطراب كرب ما بعد الصدمة، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/a335483d6abcfc6cc1726419f826c51b.jpg', 91, NULL, NULL),
(92, 'نرمين هاني', 'اخصائيه نفسية', 'الاكتئاب، اضطراب القلق العام', 'https://scontent.shezlong.com/therapist_profile_pictures/c2ad920d586f119098948f25716d1c3a.jpg', 92, NULL, NULL),
(93, 'ايمان حنفي', 'معالج نفسي', 'اضطرابات الشخصية، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/2cc8cf4173d849beeb5bc06b0b5e316c.png', 93, NULL, NULL),
(94, 'د. وائل وهبة', 'دكتوراة علم النفس - معالج نفسي معتمد من وزارة الصحة المصرية', 'اضطراب كرب ما بعد الصدمة، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/9371a086433c7e992252e492c9ff54aa.jpg', 94, NULL, NULL),
(95, 'فاطمة فوزى', '.مدرس مساعد الطب النفسى كلية الطب جامعة الزقازيق', 'الاكتئاب، الفصام', 'https://scontent.shezlong.com/therapist_profile_pictures/c0e7ff37fef3f86d53349b6008a27bac.png', 95, NULL, NULL),
(96, 'د. محمد السبحي', 'أخصائي الطب النفسي- معالج معرفي سلوكي', 'اضطراب كرب ما بعد الصدمة، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/13233fc2ef036ce3b84230527d2dcb75.png', 96, NULL, NULL),
(97, 'د. ايمان السيد', 'مُعالج نفسي مٌرخص مزاوله المهنه واستشاري أسري ،دكتوراه مرتبه الشرف الاولي', 'الاكتئاب، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/64655-8971185fbe37c6f910c1816b3a22ee23.jpg', 97, NULL, NULL),
(98, 'نرمين علي', 'معالج نفسي', 'الاكتئاب، اضطرابات الشخصية', 'https://scontent.shezlong.com/therapist_profile_pictures/69917-152fad3b3d9a7caf87a887ae18001333.jpeg', 98, NULL, NULL),
(99, 'أ. شادي عبدالله', 'أخصائي العلاج النفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/043fad8c1c58350ab27911e37dbbd96f.png', 99, NULL, NULL),
(100, 'عبدالرؤوف عبدالمجيد عفيفي علام', 'استشاري أول الطب النفسي والاعصاب', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/3ff26ef234a4b4afa0dfbfe3ff4d9d14.png', 100, NULL, NULL),
(101, 'أحمد حسين محفوظ', 'أخصائي الطب النفسي و علاج الادمان', 'الإدمان، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/2254ec6c22bba48903751934e029ad02.png', 101, NULL, NULL),
(102, 'غادة الخولي', 'استاذ دكتور و استشاري الطب النفسي', '', 'https://scontent.shezlong.com/therapist_profile_pictures/46468c898c0effaeaf1a55128d8b5d83.png', 102, NULL, NULL),
(103, 'دكتور  خالد مكي', ' استشاري الطب النفسي جامعة لندن وجامعة عين شمس . خبرة22 عاما في العلاج المعرفي والسلوكي وفي الوقاية والعلاج من الاكتئاب والقلق والوسواس القهري  والاضطرابات العاطفية والاسرية والجنسية وأمراض الاضطراب الوجداني والفصام والشيخوخة والادمان', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/7dcd0190e72cb1d04aea821d5574dc25.png', 103, NULL, NULL),
(104, 'د. فضل عفانة', 'استشاري الطب النفسي و علاح الادمان - فرنسا', '', 'https://scontent.shezlong.com/therapist_profile_pictures/1fc17fba20308e1d14cf402f946839a1.png', 104, NULL, NULL),
(105, 'أ  هالة الهواري', 'استشاري الصحة النفسية ', 'اضطراب فرط الحركة وتشتت الانتباه، اضطرابات السلوك المُمَزق', 'https://scontent.shezlong.com/therapist_profile_pictures/038b9cc9228b00ff6b87c554199c4361.png', 105, NULL, NULL),
(106, 'بشائر الطباع', 'اخصائي نفسي إكلينكي', 'اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي، الاضطراب الوجداني ثنائي القطب', 'https://scontent.shezlong.com/therapist_profile_pictures/bbf0ff2e9cedcc8ed4873877ade01121.png', 106, NULL, NULL),
(107, 'د. عمرو عبدالعزيز', 'أخصائي الطب النفسي و علاج الإدمان', '', 'https://scontent.shezlong.com/therapist_profile_pictures/8d81b3b31d2392295d90d074f577cdcf.jpg', 107, NULL, NULL),
(108, 'أ. ربيع عبدالرازق', 'أخصائي نفسي - محلل سلوك م مرخص', 'اضطراب كرب ما بعد الصدمة، الاضطرابات الجنسية', 'https://scontent.shezlong.com/therapist_profile_pictures/n8sg2ptjjtjpg.jpg', 108, NULL, NULL),
(109, 'د.سارة ابراهيم محمد', 'طبيب نفسي', 'الاكتئاب، العلاقات', 'https://scontent.shezlong.com/therapist_profile_pictures/64038-b50b73adc8736c61c535b56d1cae67e1.jpg', 109, NULL, NULL),
(110, 'د. ميادة عصام الدين', 'طبيبة نفسية', 'اضطرابات القلق، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/70587-eee1ade5e436b1022a58f7f99dd125e3.jpg', 110, NULL, NULL),
(111, 'د. أحمد عمرو عبد الله', 'أستاذ علم النفس الاكلينيكي المساعد', 'اضطرابات طيف التوحد، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/yrnwfziwgtdlbacmtrlylqhanseupfet.jpg', 111, NULL, NULL),
(112, 'ميرفت صبري', 'استشارى الصحة النفسية', 'اضطرابات القلق، اضطراب كرب ما بعد الصدمة', 'https://scontent.shezlong.com/therapist_profile_pictures/3fd193d2c70a1b838f30b53c0e40e30c.jpg', 112, NULL, NULL),
(113, 'إبراهيم مجدي حسين', 'اخصائي الطب النفسي و المخ و الاعصاب', 'اضطراب فرط الحركة وتشتت الانتباه، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/e8973c14e6fb027dfd64cb1cc62e6e05.jpg', 113, NULL, NULL),
(114, 'أ.سارة صلاح السيد', 'أخصائية علاج نفسي', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/21da951303555bd52268b67e8757af0b.jpg', 114, NULL, NULL),
(115, 'لينه شاكر', 'أخصائية نفسية', 'اضطرابات المزاج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/17054-74c45a7c3b82546b51a4cc555328e0a1.jpeg', 115, NULL, NULL),
(116, 'ا.سارة العشرى (اخصائية نفسية)', 'اخصائى نفسى إكلينيكى', 'الاكتئاب، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/77140-76f457aa7aaf615e066f572f67fcfa55.jpeg', 116, NULL, NULL),
(117, 'أحلام نبيلة بوشكيمة', 'أخصائية نفسانية إكلينيكية', 'الاكتئاب، اضطراب الوسواس القهري', 'https://scontent.shezlong.com/therapist_profile_pictures/43d48cc176885d01604eaac7b224bd60.png', 117, NULL, NULL),
(118, 'مروه السقا', 'اخصائيه نفسيه', 'اضطراب فرط الحركة وتشتت الانتباه، اضطرابات المزاج', 'https://scontent.shezlong.com/therapist_profile_pictures/2a0975e6c47775b835734b3098d1be02.png', 118, NULL, NULL),
(119, 'Mahmoud Rashed', 'أخصائي نفسي', 'اضطراب كرب ما بعد الصدمة، الإدمان', 'https://scontent.shezlong.com/therapist_profile_pictures/qhmhjbkcpivaqecinroxbhslqwbtluyv.jpg', 119, NULL, NULL),
(120, 'نجلاء صبري', 'معالجة نفسية', 'اضطراب كرب ما بعد الصدمة، اضطرابات الشخصية', 'https://scontent.shezlong.com/therapist_profile_pictures/55734fc74a9038983d17a34da33ac711.png', 120, NULL, NULL),
(121, 'د. اسماعيل هراس', 'أخصائي نفسى  د. دكتوراه فى الصحة النفسية والتربية الخاصة', 'اضطرابات التواصل، اضطرابات التعلم', 'https://scontent.shezlong.com/therapist_profile_pictures/a8955be418cb2a63d12ac9c9d02bc5ab.png', 121, NULL, NULL),
(122, 'محمود الجندي', 'أخصائي الطب النفسي', 'اضطرابات المزاج، الاكتئاب', 'https://scontent.shezlong.com/therapist_profile_pictures/82443-eeec8012b4056a6071bd7e8beadfe393.jpg', 122, NULL, NULL),
(123, 'آيه محمد حسن', 'أخصائية نفسية وعلاقات زوجية وأسرية', 'اضطرابات الإخراج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/uslpyrewfzrbathanidcmtlylengwftq.jpg', 123, NULL, NULL),
(124, 'محمد ناجي', 'اخصائي نفسي و اجتماعي', 'اضطراب كرب ما بعد الصدمة، اضطرابات المزاج', 'https://scontent.shezlong.com/therapist_profile_pictures/75026-7c676ac690658b6ce8965f3e94503670.png', 124, NULL, NULL),
(125, 'مصطفى عبد الحميد توفيق', 'أخصائى نفسى إكلينكى', '', 'https://scontent.shezlong.com/therapist_profile_pictures/6d4564a1fad1b0da9512a02ab80195fb.png', 125, NULL, NULL),
(126, 'ابراهيم محروص عبد الرحمن', 'أخصائى نفسى', '', 'https://scontent.shezlong.com/therapist_profile_pictures/65358-4812ca476b341c179d543532803a4f33.jpg', 126, NULL, NULL),
(127, 'د.شريفة علي', 'اخصائي صحة نفسية', '', 'https://scontent.shezlong.com/therapist_profile_pictures/67571-b0ec3053484dde73c1b4a48b8da7d75c.jpg', 127, NULL, NULL),
(128, 'أحمد  مغاوري', 'اختصاصي العلاج النفسي وعلاج الإدمان', '', 'https://scontent.shezlong.com/therapist_profile_pictures/0dd2ac866f7a69124da5fa0b318d5086.png', 128, NULL, NULL),
(129, 'دولت نصر', 'أخصائى الطب النفسى للأطفال والمراهقين والبالغين', 'الاكتئاب، اضطراب قلق الفراق، القلق العام، الرهاب الاجتماعي', 'https://scontent.shezlong.com/therapist_profile_pictures/d243926339a7aa72f8b6f784b982ff07.png', 129, NULL, NULL),
(130, 'حازم جلال', 'اخصائى نفسى', 'التأخر العقلي، اضطرابات طيف التوحد', 'https://scontent.shezlong.com/therapist_profile_pictures/11047dc3958aa813fbc3f570e7a38870.png', 130, NULL, NULL),
(131, 'محمد عادل النبوى', 'د.دكتوراة العلاج النفسى', '', 'https://scontent.shezlong.com/therapist_profile_pictures/a8936ac82c07af586644882567e76eeb.png', 131, NULL, NULL),
(132, 'منال مصطفى', 'اختصاصى نفسى إكلينيكى ومعالج نفسى معتمد بوزارة الصحة المصرية', 'الاكتئاب، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/75027-32a377c23c4a3a0555930f4239069920.jpg', 132, NULL, NULL),
(133, 'Yasmine Elkholi', 'معالج نفسي ماجستير فى العلاج النفسي', 'اضطرابات المزاج، اضطرابات القلق', 'https://scontent.shezlong.com/therapist_profile_pictures/rbuwftidcmtlyleqyrathaslewfzpngn.jpg', 133, NULL, NULL),
(134, 'نورهان الحناوي', 'أخصائية نفسية', '', 'https://scontent.shezlong.com/therapist_profile_pictures/e3fc86fc19959976d7a0680367479971.png', 134, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `therapist_categories`
--

CREATE TABLE `therapist_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `therapist_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_sessions`
--

CREATE TABLE `therapist_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `therapist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'بسمه محمود', 'Bassma_Mahmoud@shezlong.com', NULL, '$2y$10$Eu3HEto0H/FFccRcU2AaSuw7cbT83g7PfgKzGTxLf3B5qKJbnwG.i', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(2, 'د. حسين حج أحمد', 'Dr._Hussein_Haj_Ahmad@shezlong.com', NULL, '$2y$10$iqJiEYu0aMUdV671UTzZMeA4A5t45xb8n/Uee2333ckSXItiNQKN2', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(3, 'زين العابدين محمد سنهورى', 'Zein_El_Abdeen_Mohamed_Sanhoury_Salama@shezlong.com', NULL, '$2y$10$I36fWUoDxArssFVrMZ3xouM..Mc1BkkOf8PbcuLwiUpR.122lWcbG', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(4, 'أ. جيرمين نبيل', 'Ms._Germeen_Nabil@shezlong.com', NULL, '$2y$10$WFTHqV9YQOpp.0pj0HpcxO04H/hmLtBjtUFOBqMUQS/JnBX/sQvr.', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(5, 'جورجيت نادر', 'Mss._Georgette_Nader@shezlong.com', NULL, '$2y$10$oQ9y4/RqARiDipBgKwSnaexSTtsrIatI/C1x20.MNuZs5I2Q0gAGO', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(6, 'مريم أيمن فوزي', 'Mariam_Ayman_Fawzy@shezlong.com', NULL, '$2y$10$7vWLrlYkXeBt5QVQog.PK.gtB1dOW.ev4EqJbvrA14WCrNprz8qOe', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(7, 'د. محمد سراج', 'Mohamed_Seraj@shezlong.com', NULL, '$2y$10$D3waBfcdxjrId.LBUrUGWeyEKn88xEiHbWbTFLK8oT2/FSSmbjbum', NULL, '2021-01-29 11:08:42', '2021-01-29 11:08:42'),
(8, 'ولاء وحيد', 'Walaa_Waheed@shezlong.com', NULL, '$2y$10$GMKJrtGmAjyBjyHvZsgBIeD6aVDyO9gWmwNml4iw/E17eb6BYl//C', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(9, 'د.فاطمة قطب', 'Dr._Fatma_Kotb@shezlong.com', NULL, '$2y$10$w06ixW0E2i7kBQKkK7alZegWC8yaxE/SFots.ZEsxCqPmGByhlfka', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(10, 'د.علاء العشري', 'Dr.Alaa_Elashry@shezlong.com', NULL, '$2y$10$BSWnSq8CR7RUeOio3eNRgOcSV04iPBiRi9ZRfIWg824knpkw5NhcO', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(11, 'د. داليا الحلواني', 'Dr._Dalia_Alhalawany@shezlong.com', NULL, '$2y$10$ADjijWdAQQqWp08.Shlm9el0PTs3/OEBFdbGQDDAW4zX8flpDtGUG', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(12, 'شيماء ثابت', 'Sheimaa_Thabet@shezlong.com', NULL, '$2y$10$QwofGZJJcouoD0yU6wYmr.rh/2vgo/X47KO7wR9k1qCiVxtu5Ai4G', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(13, 'سمر حمدي', 'Samar_hamdy@shezlong.com', NULL, '$2y$10$niefk/keivmIj.SSxdYtV.QL8yqp9wxeu2zodQFxwBnaQjgLgmsjm', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(14, 'مارينا مقار', 'Marina_Makkar@shezlong.com', NULL, '$2y$10$Xa2cvaqm/9S/ORbXgW35rux3Ji1BH/mdJnqODs6LmJk2qtumPN6yO', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(15, 'نورهان عبد الرحمن', 'Nourhan_Ali_Abd_ElRahman@shezlong.com', NULL, '$2y$10$e.of3nhSHscMQ216eAvLjemzj8w2KK3wcJQZFeAzWdFp1SJ0huDXu', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(16, 'د. دلال رضوان', 'Dr._Dalal_Radwan@shezlong.com', NULL, '$2y$10$2NbkDfDbZ8rw0CjAMZYCJuzgxkvTLnRDEkcGO2Ye3VU1gpkhVAKz.', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(17, 'مينا عزيز', 'Mina_Aziz@shezlong.com', NULL, '$2y$10$xjIbv8013shyHTTK9VPqt.QWq8mQO.y4jtM8vxBXJCQe8LbGgml5G', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(18, 'دعاء فتحي علي', 'Doaa_Fathy_Aly@shezlong.com', NULL, '$2y$10$oHR9yc3lyApWT.EYfRvhLO7bqUg4Pkv9LREUMCaOUNU/c1Iwn/5/G', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(19, 'د. نورهان علاء مراد', 'Dr_Nourhan_Alaa_Mourad@shezlong.com', NULL, '$2y$10$q4nxIWBy5Zb.OxAjhxWLae2jx0nxQXiLQun/y8dPoDzMVapFWoxia', NULL, '2021-01-29 11:08:43', '2021-01-29 11:08:43'),
(20, 'شيماء جابر عبد الراضي', 'Shaimaa_Gaber@shezlong.com', NULL, '$2y$10$7vMlzw797x8GCNxcwy4S0..MzvQL8aHz8s5fColxMJeGXcUwpjm7u', NULL, '2021-01-29 11:08:44', '2021-01-29 11:08:44'),
(21, 'أحمد حشيش', 'Ahmed_Mohamed_Mansour_Hashesh@shezlong.com', NULL, '$2y$10$q/sDoWmYGSvbPQJuHfKffOiRxeBhIdaTZPduNcU2wZbCVYTirPliC', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(22, 'ايمان محمود حسن على شعبان', 'Eman_Mahmoued_Hassan_Aly_Shaban@shezlong.com', NULL, '$2y$10$Rf2GAZEerChgbNC.vTlkEO5MaYJUv2Y/6AFlu1lnWVkpUSALNeqnS', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(23, 'د.هدى جمال الدين علي', 'Dr._Hoda_Gamaleldeen_Aly@shezlong.com', NULL, '$2y$10$MLGB31W2nevrUmGWtz87SOqdF5uChLWZvXnyPbx.Jkhn/tvIFYiPm', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(24, 'هدى رضوان', 'Huda_Radwan@shezlong.com', NULL, '$2y$10$MD0nhkDOWMopQgujFnwHSuNlMGnO.TInCbZFdoKQ.aUCokorfGiOy', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(25, 'د.محمد سعيد زغلول', 'Mohammed_saied_zaghloul@shezlong.com', NULL, '$2y$10$GgJdgGixrAvCIw7hfuXgmegChQ.qxL7Hb8vUJsXxnMYjc3uSf6KZ.', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(26, 'أندرو نادي', 'Andrew_Nady@shezlong.com', NULL, '$2y$10$7PmKeRFWifPEfpMYib9lPu5UpDrqD03BvnpKIwVhglM.AsmjE7KGC', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(27, 'علي عبدالباسط عبدالصمد', 'Ali_Abdel_Basat_Abdel_Samad@shezlong.com', NULL, '$2y$10$ssi6XgchjYhyvLYzryVLbOVia5BFciFhnKAA812mkA0BnrYLQv65u', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(28, 'سلمى عاصم', 'Salma_Aseem@shezlong.com', NULL, '$2y$10$.LvEmubQV8shY3vG/Cw9UeyfmZkfI2gJBQSdV9Y5mRIClcJXX1FNq', NULL, '2021-01-29 11:08:46', '2021-01-29 11:08:46'),
(29, 'د.عبدالرحمن عبدالله العمري', 'Dr.Abdulrahman_A_Al_amri@shezlong.com', NULL, '$2y$10$GusnTPl9NHfZHOM7XQtrlOF1zTGQxnXAfeWiOGxBsK3pOKlKSqAxK', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(30, 'اسماء مختار', 'Asmaa_Mokhtar@shezlong.com', NULL, '$2y$10$dOsKuiRDO5uurK5JTIBNd.jffBZR238qLCrC0jfc4LjEfhVG5RLaW', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(31, 'وئام العايدي', 'Weaam_Elaidy@shezlong.com', NULL, '$2y$10$GPAgh4he4TyLT/vLJT5nKeJ/nzfHIESMp/.L6PIZZfk3diJSszM9m', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(32, 'أ. وفاء شلبي', 'Ms._Wafaa_Shalaby@shezlong.com', NULL, '$2y$10$I1BhPqLfEpeksvVRpO5HTOkDxMGMI3mnDINYM5QvT9LriLQY52FQ2', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(33, 'هناء نيازي', 'Hanaa_Niazii@shezlong.com', NULL, '$2y$10$FEuwFOIF3UcOXckeoHNkzOaWSGM4icnJnvmquQBuhLYB.o8A6IKae', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(34, 'ميريت عجايبي', 'Mirit_Agaiby@shezlong.com', NULL, '$2y$10$eUq/dzK0WKNbuzzbP4uqS.vo8T1vqFqpG.lYrKCskXhwy0CedJIZe', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(35, 'زينب شطا', 'Zeinab_Shata@shezlong.com', NULL, '$2y$10$jURmzyLX3pviRnh38AwDzOrnr8Rj/tcYSh2o/xL/CewzZqgZHuxlO', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(36, 'نرمين نعمان', 'Nermine_Noeman@shezlong.com', NULL, '$2y$10$.MoyN3hM2U9Ulvbb4Amz6.eiI52xZw.zyVJhKrCQpKYaU0VjfcdPu', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(37, 'الاء محمد عيسى', 'Alaa_Eisa@shezlong.com', NULL, '$2y$10$piT73dtLsGfR2tyK8UZqWOl66jyqHyWR9F2D4UqR4gRTPZROtAq8.', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(38, 'بشائر محمد عدلاوي', 'Bashaer_Mohamed_Adolay@shezlong.com', NULL, '$2y$10$iSJ/ePiLTYQ0xV4TJ3pMEeKHuGet9agrfaWjS33cMbbv3VvZ7CoLS', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(39, 'د. سعيد محمد', 'Dr.Saed_Mohamed@shezlong.com', NULL, '$2y$10$dkwoMb2VV732WHwMY9nuUuEHFdYRFlt9ncKeKxIhFGRkbJBHZVFD6', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(40, 'هبة غنيم', 'Heba_Goname@shezlong.com', NULL, '$2y$10$iem5WpreSfx.RkfsqfYHleYMyxzVmgt.RwAhjqQmBMjJeiLCkikKi', NULL, '2021-01-29 11:08:47', '2021-01-29 11:08:47'),
(41, 'يارا فيصل', 'Yara_Faysal@shezlong.com', NULL, '$2y$10$ZAo4D5U2/KI3sI/ci9TFjuN/3a3pfHKi8E2PuabP0oE1f7la1zbWu', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(42, 'عماد العيدان', 'Imad_Alidan@shezlong.com', NULL, '$2y$10$icc8MFdxVfRaPuZNhkQ6QO0owRmiiTTOrVI/bnAT/AeLnLtJEVZ6y', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(43, 'أميرة مصطفى', 'Amira_Moustafa@shezlong.com', NULL, '$2y$10$7xKdnydeeaEaZpdq3VncLudwAkmsguEAZ8zX54cKAeygHFhKNLob.', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(44, 'محمد.شعبان', 'Mohammed.Shaaban@shezlong.com', NULL, '$2y$10$/PKAR01EOMfm4MACmyAsLeqJGKbEBpVJ9jwf.5aM7.2wiHj2jIaty', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(45, 'د. رحاب عبد الفتاح', 'Dr._Rehab_Abdelfattah@shezlong.com', NULL, '$2y$10$AYyq8lWEEHdM0VWU2FV2p.8MfV32iehtsXm7PBpSwC1eKhIcT3nZS', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(46, 'د. زكريا فاخوري', 'Dr._Zacharia_Fakhoury,_DCC.__RP@shezlong.com', NULL, '$2y$10$yCRaDeUe6/XSyaN/hwuMVOrvfJeGvkBipOSiQlyPBMIUMpVbilAWq', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(47, 'ايناس  دويدار', 'Enas__dwdar@shezlong.com', NULL, '$2y$10$PJeEHLVs91iPLcr5KLnmm.3dPmXdYtvcEpQWW4xMeGXrXabatnMre', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(48, 'داليا صالح', 'Dalia_Saleh@shezlong.com', NULL, '$2y$10$mvLrbYt7eMR53XQGQg0SNubAD5yXjWGEwCrU14n0xvIoOa41QuivO', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(49, 'اميرة الساعي', 'Amira_Elsaey@shezlong.com', NULL, '$2y$10$HLX7Nvp5nrQcTHpPGN6CIO6CGoGu/w8QXeccbgxc2ZOV5K7QA9PRC', NULL, '2021-01-29 11:08:50', '2021-01-29 11:08:50'),
(50, 'عبير طوسون أحمد', 'Abeer_Toson_Ahmed@shezlong.com', NULL, '$2y$10$W4UENTtPpUxD5M2WXoHUeuq6P9mV1ae6B/q2Jp4yD.BNaHRsHGMCC', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(51, 'د وليد طلعت', 'Dr._Walid_Talat@shezlong.com', NULL, '$2y$10$xdvvrFLSHv3j3hrtvknZsuBEJ/bevdbBnAPu2cyQ2hWwWMRW2nOf2', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(52, ' هند البنا', 'Hend_Elbanna@shezlong.com', NULL, '$2y$10$hD13bG8O.95gUP/KsqMnROzvCdRedi/ogtUTtLR4n7oiTuToyhqkG', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(53, 'د. محمد الشامي', 'Dr._Mohammad_ElShami@shezlong.com', NULL, '$2y$10$3j8Bu45c7eMm0lkkkCbW0.u4crm9GtThgOJehS4emfySPJXfX/ewa', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(54, 'د. معتزبالله ابراهيم محمد علي', 'Dr._Moatazbellah_Ibrahim_Mohamed_Ali@shezlong.com', NULL, '$2y$10$SbbA7gQalop4kN3zaVtVXOcLAK/87WpwQDXTtj853JShKEPWqPflm', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(55, 'أ.روز عبدالله', 'Ms._Rose_Abdullah_@shezlong.com', NULL, '$2y$10$iLwrA9ucZfRHfZFTD2XWZeuRgS3nmp.xDBtWYsOGgxJP7d/5ZVRTO', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(56, 'أحمد حسن خليل', 'Ahmed_Hassan_Khalil@shezlong.com', NULL, '$2y$10$0aZ5EEUmWIY7PJRTueom1uuiSEgJBpuQqxSaq/5ttKZbGtF.W/kD2', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(57, 'د. هند عاطف ', 'Dr._Hend_Atef@shezlong.com', NULL, '$2y$10$TgCl3esrzAFHQICg5Z1daO8RDiS/2TBGV2gCHCvKIuUHFVVSUzVI.', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(58, 'مي عيسى', 'Mai_Eissa@shezlong.com', NULL, '$2y$10$m1vpFNM.ef4A4hHvbvofeuRRLmPBA59X4M4td5XOUX57M1bh2XoWe', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(59, 'دكتور أيمن الديب', 'Dr.Ayman_Eldeeb@shezlong.com', NULL, '$2y$10$HV/9wmJSWajitLczUmpjbOfeH9s7p00AQ87zLP5/S780vIbQJWYDa', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(60, 'يوشع محمود عمور', 'Youshaa_Mahmoud_Ammour@shezlong.com', NULL, '$2y$10$r7rd2KgI0lqZl.gMXeKI0OB.taCWaP/1C4HdGR7qVynucon5alkUG', NULL, '2021-01-29 11:08:51', '2021-01-29 11:08:51'),
(61, 'مروان الدحيلان', 'Marwan_AlDuhailan@shezlong.com', NULL, '$2y$10$E8YOXfCsawMmdvifnnZ4Tum2.ZjgqEawMuVO3jWL8CSPMVIBk0Zuq', NULL, '2021-01-29 11:08:53', '2021-01-29 11:08:53'),
(62, 'فاطمة رمزى', 'Fatma_Ramzy@shezlong.com', NULL, '$2y$10$esfSW9f3yeqP1rBrI8iNkekQf.q8wxn4HJM0dJPG34WW.N39IBnD2', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(63, 'د.اسراء السحيمى', 'Psy_Dr._Esraa_Elsehamy@shezlong.com', NULL, '$2y$10$0yC58TQIAkDeJID1ktQgyOx8nUyctpWehVbucvfCmCUCI4OW8LjCi', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(64, 'ميراى فرنسيس', 'Mireille_Francis@shezlong.com', NULL, '$2y$10$XtZndn8PFlqO4.GW.VwejucaVPxizGqbhlcTAO9ZUXeLg8J0U9Lc.', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(65, 'د. مي محمد محمود', 'Dr_.Mai_Mohamed@shezlong.com', NULL, '$2y$10$hGfzEzp8ebP78ZQPUEcSf.rbB1S9wcAaH5wb7yWvwXyyAzzGrseRu', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(66, 'عصام جابر علي', 'Essam_Gaber_Ali@shezlong.com', NULL, '$2y$10$l9v4gstmQtCE8MXyFP2JW.BSk9/IjIxNPQ9L1Cr6mG/X7IloJe4ny', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(67, 'مروه علاء الدين ابراهيم', 'Marwa_Alaa@shezlong.com', NULL, '$2y$10$S6vTXtZSkCHGKOer7vhvBu4App7P9RclrLros5wRsJ15Mj6H5OaU.', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(68, 'د فادى صفوت', 'Dr_Fady_Safwat@shezlong.com', NULL, '$2y$10$J2QLJ8VY99jD2ZLfB2F9husyX5jiY6hsgUdMfZK5c8.sN1bGBieMS', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(69, 'مينا جورجى', 'Mina_George@shezlong.com', NULL, '$2y$10$X3H7DoMR6V5TQEIStDAueegxzU/eHn7AbfcIU3xU38Bb5Yxwzkr.K', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(70, 'سحر داود', 'Sahar_Daoud@shezlong.com', NULL, '$2y$10$rpDrjsRWw2.mwg9PIByKIufdLkIPR4mWYPXPtkmecwJ9fT3K/CrvK', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(71, 'إسراء أحمد', 'Esraa_Ahmed@shezlong.com', NULL, '$2y$10$kEXPeAMP4nqOVGS7zubrbORTYAHjy6HZKRkFCdUjZSIHK51v5VPKS', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(72, 'د. سماء نصار', 'D.Samaa_Nassar@shezlong.com', NULL, '$2y$10$mm3FGuPVNZX7rnDFLwodturR/qRjbK6folrDkzIeQPq4yL3Bqk6Zu', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(73, 'يسرا مرسي', 'Yosra.Morsy@shezlong.com', NULL, '$2y$10$NX7OX4V5glZv2ib1r2851.MkKRhdA5KAC8GdX6QFdy3tljRnt.ZkW', NULL, '2021-01-29 11:08:54', '2021-01-29 11:08:54'),
(74, 'د. زاهر عدي', 'Dr._Zaher_Adi@shezlong.com', NULL, '$2y$10$kn8wjR5NHy.hwt9uXFmWGeyJGT6FUlhznW8uPyTRbMoOEuX0v/LqG', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(75, 'مروة النجار', 'Marwaelnagar@shezlong.com', NULL, '$2y$10$5kIbyWfKSQjjNufY4SGiauK4UQWSbIBlwW1sDDTxGRZKYI0L5NwPG', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(76, 'رامى عادل', 'Ramy_Adel@shezlong.com', NULL, '$2y$10$oDcL1r7cBceWB1kuZ/ZlYeEyOOAVPRtNCi3uuTZmSZdhujaZcKFru', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(77, 'عبد الرحمن صبري', 'Abdelrahman_Sabry@shezlong.com', NULL, '$2y$10$lfMIGFlX7K4iE9FaSNENhO50C9GadkSab45uD5/Qe95JZJRVF6rAK', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(78, 'أ. منى ناصف', 'Ms._Mona_Nassef@shezlong.com', NULL, '$2y$10$jeG6lCQzE2S/mswO8rvPEO0Qd3MmhbzExbuhef8JBfDOIgwqCMZPq', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(79, 'مروة أبو زهرة', 'Marwa.Abou_Zahra@shezlong.com', NULL, '$2y$10$eLaCYrVMBr87nFG44qwWe.xO7m6gpIrtNR/Ghaxb75xRmP9./mb/O', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(80, 'Dr Carlo Demarco', 'Dr_Carlo_Demarco_PhD__MSCA__ABBT_ABNLP@shezlong.com', NULL, '$2y$10$vS5bxbJfwEGEiAMoXEwKCuqHYf7useToErRvkxmu.jCZPzOG.EpIG', NULL, '2021-01-29 11:08:55', '2021-01-29 11:08:55'),
(81, 'سمر  سعيد عبد الغني', 'Samar_S._Abdel_Ghany@shezlong.com', NULL, '$2y$10$2Of7LQgAG0VkJ9jljA88QOOuo3Ist0QYA6hm/v1zUHv7T5k63Pl2y', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(82, 'محمد عبد العليم عزيز', 'Mohamed_Abdelalem_Aziz@shezlong.com', NULL, '$2y$10$a.JXE4Qz4WnL02W.mgBqGOM3cBrrFIydTyiiJuJJPHLUmMRinbc.e', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(83, 'صفاء اسماعيل', 'safaa_Ismail@shezlong.com', NULL, '$2y$10$ogSaf7NfxYJfjma/TGbSA.mQOtB4zKoReDb7ncyB7IyUv3ynOKWfG', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(84, 'وسيم اشرف', 'Wassim_ashraf@shezlong.com', NULL, '$2y$10$NqivQOUiZBl/GYny0PUMtOfnYzJkPNpillYiC5j1pWhSI1L.QqZm.', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(85, 'مارينا كمال', 'marina._kamal@shezlong.com', NULL, '$2y$10$Brt16fmhk87sBfFg/XzXpepGWW3cXhSM.lzTJ0794vyjZO5vX3D.y', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(86, 'نسمه اسماعيل', 'Nesma_Esmael@shezlong.com', NULL, '$2y$10$8TQ363tHRGH.YrFhV0qaf.Cdfc/fy7n9NqEmo5vohRylEqDoBQ15O', NULL, '2021-01-29 11:08:57', '2021-01-29 11:08:57'),
(87, 'منة علي', 'Menna_Ali@shezlong.com', NULL, '$2y$10$.5joxIDjQXYcEUHsxPCn0eHIDgVjTQQGeyOPvdAbMBg0XggyIKpyq', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(88, 'أ. إسلام فاروق النحات', 'Mr._Islam_Farouk_ELNahat@shezlong.com', NULL, '$2y$10$hoFPlKgu6.VsacrpV8LlyOmPdQyL3/jKJwADA.IrW4IqfdIld2WDO', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(89, 'سعد المهدي', '_.Saad_El_Mahdy@shezlong.com', NULL, '$2y$10$5f8C3torP8BJ.TmfmkuL0OqEy2nhyttXsh54FKVhkdbyQ0v7EmnOq', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(90, 'منى صبرى', 'mona_sabry@shezlong.com', NULL, '$2y$10$akYWK3wzRfp4ITGywyUdRePz4eXM3FL8/bn5tVa9DO6KlUftOqMui', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(91, 'مريم طه', 'Maryam_Taha@shezlong.com', NULL, '$2y$10$9E3uoUgA4E67iLfsIvd/7e3a9U1UbTp6hfMkAqEfQwKAAf016H9tq', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(92, 'نرمين هاني', 'Nermin_Hani@shezlong.com', NULL, '$2y$10$E3OmDW2okjBwJsYLgvA25OY96n5SK.s3pnItBALr7GkjtHI5cTkLy', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(93, 'ايمان حنفي', 'Iman_Hanafy@shezlong.com', NULL, '$2y$10$N4lXyx3G4AG991sap.o8BudL0rx8wstQDHFzD8uk8SZvhBdCG86fi', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(94, 'د. وائل وهبة', 'Dr._Wael_Wahba@shezlong.com', NULL, '$2y$10$zSI843pOLd7/LWauUVdo..OIqFtXGIuXZhILHlbP5v7MGYzhOdWzK', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(95, 'فاطمة فوزى', 'fatma_fawzy@shezlong.com', NULL, '$2y$10$dOhvqnMFY6jXfzEAwRh9ZepI9TiniX6oxUPDAEbxRWWbJ0hEPDGK.', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(96, 'د. محمد السبحي', 'Mohammad_Elsebahy@shezlong.com', NULL, '$2y$10$3kzSvTVg1OR./haWax5jdewF7FXlcuAsJ6/nUxD99X16bwjTENPMq', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(97, 'د. ايمان السيد', 'Dr._Eman_Elsayed@shezlong.com', NULL, '$2y$10$t3qf8lYyx5k4nRFJMH9I/.e4whG.9i/nh4ACAMK6fE8iJtniqFYtW', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(98, 'نرمين علي', 'Nermen_Ali@shezlong.com', NULL, '$2y$10$Uy9362RmqzJsf3.TR6m5sOl5IWyP7vWbIvMnB.PhrwG/9OJvo4JGC', NULL, '2021-01-29 11:08:58', '2021-01-29 11:08:58'),
(99, 'أ. شادي عبدالله', 'Shadi_A._S._Barbakh@shezlong.com', NULL, '$2y$10$ajEAFbzKeVj.J7X.KE8qAO5pRT81xdTeGwCUDCG0seh.CjL3c2dFq', NULL, '2021-01-29 11:08:59', '2021-01-29 11:08:59'),
(100, 'عبدالرؤوف عبدالمجيد عفيفي علام', 'Abdel_Raouf_Abdel_Megeed_Affify_Allam@shezlong.com', NULL, '$2y$10$LtgE5qR1adsL74/Q/NHeSuK7aM8rkSAtQP02TDuiju1VqwsFyRI2i', NULL, '2021-01-29 11:08:59', '2021-01-29 11:08:59'),
(101, 'أحمد حسين محفوظ', 'Ahmed_Hussien_Mahfouz@shezlong.com', NULL, '$2y$10$90Zjq0NTm2vsgtLIgVOUAOyEZBFdsPEIGXzI1dB1zPQ4jczdr7rq.', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(102, 'غادة الخولي', 'Ghada_ElKhouly@shezlong.com', NULL, '$2y$10$q5RIkN3nZSq2wYoMUMOYTuRXz5I3iU9lvwuv9oRRXQuqtf5LdM3Ai', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(103, 'دكتور  خالد مكي', 'KHALED__MAKKY@shezlong.com', NULL, '$2y$10$jHZS7VG9CzsJVqrIlTTSjerA5DQ2mbeIuNaXqPRfp/rYr/TwRIIe.', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(104, 'د. فضل عفانة', 'Dr._Fadel_Afana@shezlong.com', NULL, '$2y$10$PsxEHN7oVb/fnYjgYUeFmeAhhXMLOAkrCcklimUOoSC4Pl92QzIPm', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(105, 'أ  هالة الهواري', 'Ms._Hala_Al_Hawary@shezlong.com', NULL, '$2y$10$6RVazb3v1GmMq1viQkCnTu2L4q8GAwRHdBM6E9ZMLXrbvjB0bx0uW', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(106, 'بشائر الطباع', 'BashairAlTabbaa@shezlong.com', NULL, '$2y$10$uPz9wMdXHtAaQnpMSuLh/eKCNQ.QVBmAJOBZ61Nc7.RX94/1O6P52', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(107, 'د. عمرو عبدالعزيز', 'Amr_Abdelaziz@shezlong.com', NULL, '$2y$10$xYI.lAMVQbh7wxGGMwKKWuHwlDQFYifiLN.5sBcYzg3zsAGlitYJy', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(108, 'أ. ربيع عبدالرازق', 'Mr._Rabea_Abdelrazek@shezlong.com', NULL, '$2y$10$Qdd0IpkXKpqI7pn3d5vYqOwginIbEZz.yxiQZLJ7wDYYJwiLrNrXi', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(109, 'د.سارة ابراهيم محمد', 'Dr._Sara_Ibrahim_Mohammed@shezlong.com', NULL, '$2y$10$Sr74JQL0jgP/rYU7b9yLuOklXSfxJ0VD1tLlIjO.yyXSiiMttkR4y', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(110, 'د. ميادة عصام الدين', '_Mayada_Essam_Eldin@shezlong.com', NULL, '$2y$10$jAlxbObjTzF7/7wJ3Mlpge2v0P6hKqAZkfSFxhpafzYhgF9jQfkri', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(111, 'د. أحمد عمرو عبد الله', 'Dr._Ahmed_Amr_Abdullah@shezlong.com', NULL, '$2y$10$qSSqOUz24lY/ddhHcVpbDelkFmoKOTyGRlAb5u9dY/vmhILxm59e.', NULL, '2021-01-29 11:09:01', '2021-01-29 11:09:01'),
(112, 'ميرفت صبري', 'Mervat_Sabry@shezlong.com', NULL, '$2y$10$eAuzgDTH1iyQanS.z.jVneJ26FNWM4tWYZap.3LdGbzNgJphVYVk2', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(113, 'إبراهيم مجدي حسين', 'Ibrahim_magdy@shezlong.com', NULL, '$2y$10$xWNUovRNiqlAVj3NJmhnYOT3d9VjHTis.WiQlxs2D3NQ9oiMaPHw.', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(114, 'أ.سارة صلاح السيد', 'Sarah_Salah_Esaid@shezlong.com', NULL, '$2y$10$QiXGL49Hn1/tBv4W8R4LkO2p5t99mWiG.X5IUjZUm7A.VAXlix1vK', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(115, 'لينه شاكر', 'Lina_Shaker@shezlong.com', NULL, '$2y$10$Dx4o3jWKMg00v1rvEvJ6N.6H3pPalCMZ3Eg8UZ6iSrr2DNa.4/gY2', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(116, 'ا.سارة العشرى (اخصائية نفسية)', 'Sara_El-Ashry@shezlong.com', NULL, '$2y$10$mztgfmosA6LZxS4nodjlQeGRGyolYvFiq3Nx9BMiNJhqsS06H/pLe', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(117, 'أحلام نبيلة بوشكيمة', 'Bouchekima_Ahlam_Nabila@shezlong.com', NULL, '$2y$10$is4e2C9TxBSmfr06MSKDsO9A0weIlFAD30VnZCeH8EIHcC/urCzDm', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(118, 'مروه السقا', 'Marwah_alsaqqa@shezlong.com', NULL, '$2y$10$XsHIuo7xFGglLRbR9RsCSuRA8QiFhNUTho2nlVSHhCvfgoa8vR4y2', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(119, 'Mahmoud Rashed', 'Mahmoud_Rashed@shezlong.com', NULL, '$2y$10$lk6k6JO0J6eauUe3EEiXKuq/7Ue8GnQUWBxL7dx7in/TIqDVSFJ5u', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(120, 'نجلاء صبري', 'Naglaa_sabry@shezlong.com', NULL, '$2y$10$LdCq2Xfo..i5DCUqGweClOkxQEo3Nj/aYeEwRH7JyQF/8Hm8vA7wa', NULL, '2021-01-29 11:09:02', '2021-01-29 11:09:02'),
(121, 'د. اسماعيل هراس', 'Dr.Ismael_Harras@shezlong.com', NULL, '$2y$10$.Ojtkhx12RMnZ3BN.R8qTO9qFgoWXNntTAfM5m2mkvR3muHzyfMEe', NULL, '2021-01-29 11:09:04', '2021-01-29 11:09:04'),
(122, 'محمود الجندي', 'Mahmoud_Elgendy@shezlong.com', NULL, '$2y$10$PTfMvqccX7rTb5Z9C/zzp.TZ61LbnrTuskTJlxN5qYMqsxiC9AGaS', NULL, '2021-01-29 11:09:04', '2021-01-29 11:09:04'),
(123, 'آيه محمد حسن', 'Aya_Mohamed_Hassan@shezlong.com', NULL, '$2y$10$L0p6A.XxJ9p7MLu40ZXK..cvGAWbH/cIE1a1DDMmlMAkZoxmGJJdK', NULL, '2021-01-29 11:09:04', '2021-01-29 11:09:04'),
(124, 'محمد ناجي', 'Mohamad_Nagi,_MSW@shezlong.com', NULL, '$2y$10$Jjhiz5wRkrv00Q1oQKMj9.E907pzwhJ0ReG7uPWf48372UZbMrLM2', NULL, '2021-01-29 11:09:04', '2021-01-29 11:09:04'),
(125, 'مصطفى عبد الحميد توفيق', 'Mostafa_Abdelhamed_Tawfek@shezlong.com', NULL, '$2y$10$Prx982qbhBQOkp4vjzD7J.eSMrFYT5gX4y3rPpeUkuVPvBR3n3rZ6', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(126, 'ابراهيم محروص عبد الرحمن', 'Ibrahim_Mahros_Abd_Elrahman@shezlong.com', NULL, '$2y$10$7vomKF4d2J5iV5byUbvdu.2YnZ5jZEbIY1mPbaChqUCVizhW/D6LG', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(127, 'د.شريفة علي', 'Dr._Sherifa_Ali@shezlong.com', NULL, '$2y$10$IYkdvGIeX3qquQSqGYpj4eHT3bNyVfAg2nI1.7GVM/hrehGd3YhH6', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(128, 'أحمد  مغاوري', 'Ahmed_maghawry@shezlong.com', NULL, '$2y$10$NSK.c1op5jeJIUfLMO17nujdovBh22tewfLyJwu/kn9gOOQSn3hAu', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(129, 'دولت نصر', 'Dawlat.Nasr@shezlong.com', NULL, '$2y$10$P8DHBivW.1JQ29d6pLvXXuRWvggcbhlA1uWpJk0/5dYG5X8Hjg07.', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(130, 'حازم جلال', 'HAZEM_GALAL@shezlong.com', NULL, '$2y$10$gaPv7bei/gP9q/MWmC8JhuhqxZw1TguZPf4sNTv8IGSnK58Z2hz2C', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(131, 'محمد عادل النبوى', 'Mohamed_Adel_Elnabawy@shezlong.com', NULL, '$2y$10$5NS/r0BQ0h2KmshX0.dWXuDZZxu1sixdRYx9qCnMe6kmDm.Oczezy', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(132, 'منال مصطفى', 'Manal-Mostafa@shezlong.com', NULL, '$2y$10$XITqDplpHMlgVOgQyFMOGuBfLyCLaAbnq.j2XH8ntqzftrH92N.Qy', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(133, 'Yasmine Elkholi', 'Yasmine_Elkholi@shezlong.com', NULL, '$2y$10$C690TwsElWLhWpnqgzP/QeWdb4Q4BF8eVoDJUYKQcXgC8f5yGX2Du', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05'),
(134, 'نورهان الحناوي', 'Norhan_El_Henawy@shezlong.com', NULL, '$2y$10$o51jjUhXWWcXr.XpOtLXqua.MeDHcf8lFAqkelk/D7Dv6j20Wo0K6', NULL, '2021-01-29 11:09:05', '2021-01-29 11:09:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `therapists`
--
ALTER TABLE `therapists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapists_user_id_foreign` (`user_id`);

--
-- Indexes for table `therapist_categories`
--
ALTER TABLE `therapist_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapist_categories_therapist_id_foreign` (`therapist_id`),
  ADD KEY `therapist_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `therapist_sessions`
--
ALTER TABLE `therapist_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapist_sessions_therapist_id_foreign` (`therapist_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `therapist_categories`
--
ALTER TABLE `therapist_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `therapist_sessions`
--
ALTER TABLE `therapist_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `therapists`
--
ALTER TABLE `therapists`
  ADD CONSTRAINT `therapists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `therapist_categories`
--
ALTER TABLE `therapist_categories`
  ADD CONSTRAINT `therapist_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `therapist_categories_therapist_id_foreign` FOREIGN KEY (`therapist_id`) REFERENCES `therapists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `therapist_sessions`
--
ALTER TABLE `therapist_sessions`
  ADD CONSTRAINT `therapist_sessions_therapist_id_foreign` FOREIGN KEY (`therapist_id`) REFERENCES `therapists` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
