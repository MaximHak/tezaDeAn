-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 17 2022 г., 15:07
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `condition` enum('banner','promo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `description`, `photo`, `status`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'Cele mai mici preturi!', 'cele-mai-mici-preturi', '<p>Test text</p>', '/storage/photos/1/25Z_2012.w003.n001.81C.p6.81.jpg', 'active', 'banner', '2022-04-13 10:24:07', '2022-04-13 10:24:20'),
(2, 'Promo test', 'promo-test', '<p>test</p>', '/storage/photos/1/phone-with-black-friday-inscription-table.jpg', 'active', 'promo', '2022-04-13 10:26:39', '2022-04-13 10:34:03'),
(3, 'Test2', 'test2', '<p>test</p>', '/storage/photos/1/side-view-woman-holding-smartphone-shopping-bags-cyber-monday.jpg', 'active', 'promo', '2022-04-13 10:35:21', '2022-04-13 10:35:21');

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'omnis', 'laudantium-provident-rerum-magni-voluptatem-ut-id-non-sed', 'https://via.placeholder.com/60x60.png/009911?text=molestias', 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(2, 'at', 'odio-dolorum-in-eos-commodi-et-eos', 'https://via.placeholder.com/60x60.png/00cc00?text=ut', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(3, 'explicabo', 'quia-qui-culpa-et-aperiam-vitae', 'https://via.placeholder.com/60x60.png/00bb11?text=qui', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(4, 'magnam', 'voluptatibus-esse-unde-modi-corrupti-delectus', 'https://via.placeholder.com/60x60.png/007766?text=natus', 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(5, 'nostrum', 'possimus-voluptatem-unde-sint-dicta-sapiente-asperiores-a', 'https://via.placeholder.com/60x60.png/002200?text=velit', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(6, 'quo', 'rem-omnis-illum-autem-sint', 'https://via.placeholder.com/60x60.png/0033dd?text=beatae', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(7, 'et', 'quia-enim-voluptates-sit-esse', 'https://via.placeholder.com/60x60.png/0055dd?text=qui', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(8, 'non', 'vero-nostrum-harum-dolores-ratione', 'https://via.placeholder.com/60x60.png/001144?text=occaecati', 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(9, 'sunt', 'ut-libero-non-ducimus-quisquam', 'https://via.placeholder.com/60x60.png/00ee55?text=eius', 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(10, 'a', 'doloribus-excepturi-doloribus-ab-earum-nesciunt', 'https://via.placeholder.com/60x60.png/000044?text=sit', 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `is_parent`, `photo`, `summary`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'iusto', 'libero-temporibus-expedita-et-labore-quis-quo', 1, 'https://via.placeholder.com/100x100.png/003300?text=illo', 'Quae et consequatur cumque tempora. Quisquam dicta expedita beatae cumque ut. Distinctio dolores reiciendis molestias quam possimus sit doloribus.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(2, 'nobis', 'velit-a-sit-ducimus-aliquid-asperiores-aliquam-non', 1, 'https://via.placeholder.com/100x100.png/0088ee?text=eos', 'Qui exercitationem id eos dignissimos dolor aut voluptas. Voluptates est quod ab itaque sint beatae. Quaerat expedita odit inventore ea sed eveniet sint.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(3, 'quo', 'placeat-nam-sit-aut-debitis-perferendis', 1, 'https://via.placeholder.com/100x100.png/007744?text=veniam', 'Maiores non officiis et ea dolores. Tenetur fugiat et iusto quas ipsam dolore enim. Dolorem et quis velit facere omnis.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(4, 'non', 'iste-quaerat-molestiae-quia-eius-ut', 0, 'https://via.placeholder.com/100x100.png/00cc11?text=maxime', 'Sequi quis esse sed velit. Suscipit quis ex dolorem recusandae dolorem id earum. Doloremque tenetur nihil sit praesentium mollitia eum.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(5, 'ea', 'non-perferendis-cupiditate-molestias-rerum-tempore', 0, 'https://via.placeholder.com/100x100.png/00aaee?text=nihil', 'Non quaerat doloremque consequatur. Enim esse sint aut asperiores vel. Et ab aliquid fugiat deserunt amet voluptas sapiente.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(6, 'qui', 'quibusdam-voluptatem-dolor-ad', 0, 'https://via.placeholder.com/100x100.png/00ee66?text=nobis', 'Dolores maxime iusto doloribus inventore facere dolorem. Id nesciunt sequi accusantium eum laboriosam distinctio in. Ea earum earum sed aut hic.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(7, 'laboriosam', 'omnis-eaque-error-voluptas-debitis-voluptate-est', 0, 'https://via.placeholder.com/100x100.png/00ff44?text=nihil', 'Quaerat sed sapiente rerum et. Enim eveniet deserunt quia possimus sunt. Amet ut dolorem rerum deleniti cupiditate.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(8, 'error', 'id-iure-tempore-minus', 1, 'https://via.placeholder.com/100x100.png/00ccbb?text=soluta', 'Voluptas corporis impedit voluptatem recusandae voluptates officiis quo. Officia vitae provident autem quia. Quibusdam deleniti est est quaerat vitae.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(9, 'sint', 'occaecati-autem-nesciunt-accusamus-perferendis-ut-ut', 0, 'https://via.placeholder.com/100x100.png/0055bb?text=non', 'Distinctio qui voluptatem animi optio. Doloremque velit optio quasi molestiae reprehenderit. Ut magni dolores mollitia.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(10, 'perferendis', 'vero-voluptatem-aspernatur-molestiae-assumenda-sit-cum', 1, 'https://via.placeholder.com/100x100.png/0044bb?text=sed', 'Voluptatum magnam ullam blanditiis ea velit in nobis esse. Rerum nihil quia doloremque et nobis. Sed aliquid numquam praesentium vel.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(11, 'eum', 'facere-voluptatem-modi-quo-iure-reiciendis-ea', 0, 'https://via.placeholder.com/100x100.png/00aabb?text=modi', 'Iure eligendi incidunt et et. Nam ut repellat placeat nobis sed assumenda reiciendis. Molestias aut labore autem.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(12, 'expedita', 'eos-dolor-enim-pariatur-quo-qui-in', 1, 'https://via.placeholder.com/100x100.png/009933?text=eveniet', 'Quibusdam possimus corporis placeat est quis porro. Aut et officiis suscipit rerum cum. Laborum corrupti sit distinctio neque quod voluptatum facere.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(13, 'cupiditate', 'et-eveniet-voluptatem-molestias-inventore-non-officia-vero-neque', 1, 'https://via.placeholder.com/100x100.png/005533?text=ipsa', 'Totam et unde rerum. Reprehenderit voluptas velit vel ut esse. Cumque quas saepe minus ex ut deserunt nihil nostrum.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(14, 'quod', 'occaecati-blanditiis-ut-expedita-ad-aperiam-sint', 1, 'https://via.placeholder.com/100x100.png/00dd77?text=rerum', 'Id id laborum nam eum architecto quisquam et. Quis facere id cupiditate aspernatur. Molestias quo a aut culpa expedita ex.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(15, 'necessitatibus', 'ut-neque-sapiente-ut-iste-magnam-eveniet-aut-provident', 1, 'https://via.placeholder.com/100x100.png/003388?text=consequuntur', 'Cum beatae iusto distinctio aut sed odio sunt. Odio voluptas consequatur qui sequi atque aut. Et nulla distinctio maxime labore necessitatibus.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(16, 'est', 'in-recusandae-sit-nihil', 0, 'https://via.placeholder.com/100x100.png/00aaaa?text=dolorum', 'Ea sed voluptatem reiciendis nihil. Qui et sed eos ut ut. Fuga et tempora accusamus non est.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(17, 'molestias', 'libero-molestias-soluta-autem-ratione-accusantium-aut-molestiae', 0, 'https://via.placeholder.com/100x100.png/00ffff?text=hic', 'Eaque voluptas repellendus facere. Voluptatem est tenetur tempora nihil sit. Quidem soluta soluta rerum.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(18, 'quos', 'laboriosam-rem-aperiam-repellendus-ut-et-velit-voluptatem', 0, 'https://via.placeholder.com/100x100.png/00ddbb?text=eum', 'Debitis ut vitae voluptatibus voluptatem ipsam corporis vitae molestiae. Laboriosam quasi nulla enim aut non. Cum dolorum id modi voluptatem et repellendus dolor.', NULL, 'inactive', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(19, 'veniam', 'excepturi-dolores-recusandae-dicta-repellat', 0, 'https://via.placeholder.com/100x100.png/009900?text=neque', 'Dolores temporibus id deleniti eos. Consequuntur eos eius assumenda et. Dicta aut non natus exercitationem consequatur aut quia.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(20, 'ad', 'voluptas-quidem-suscipit-autem-omnis-aliquam-officia-et', 0, 'https://via.placeholder.com/100x100.png/0055cc?text=iure', 'Consequatur non libero repellat voluptas adipisci. Consequatur officiis necessitatibus deserunt ducimus reprehenderit vel. Et non qui incidunt vel.', NULL, 'active', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(21, 'Fresh Vegetables', 'fresh-vegetables', 1, NULL, '<p>Fresh Vegetables</p>', NULL, 'active', '2022-04-14 09:50:30', '2022-04-14 09:50:30'),
(22, 'Artichoke', 'artichoke', 0, NULL, '<p><a href=\"https://www.instacart.com/store/items/item_49017749\">Artichoke</a></p>', 21, 'active', '2022-04-14 09:51:38', '2022-04-14 09:51:38'),
(23, 'Asparagus', 'asparagus', 0, NULL, '<p>Asparagus</p>', 21, 'active', '2022-04-14 09:52:01', '2022-04-14 09:52:01'),
(24, 'Broccoli & Cauliflower', 'broccoli-cauliflower', 0, NULL, '<p>Broccoli &amp; Cauliflower</p>', 21, 'active', '2022-04-14 09:52:17', '2022-04-14 09:52:17'),
(25, 'Peppers', 'peppers', 0, NULL, '<p>Peppers</p>', 21, 'active', '2022-04-14 09:53:05', '2022-04-14 09:53:05'),
(26, 'Beans & Peas', 'beans-peas', 0, NULL, '<p>Beans &amp; Peas</p>', 21, 'active', '2022-04-14 09:53:20', '2022-04-14 09:53:20'),
(27, 'Brussel Sprouts', 'brussel-sprouts', 0, NULL, '<p>Brussel Sprouts</p>', 21, 'active', '2022-04-14 09:53:33', '2022-04-14 09:53:33'),
(28, 'Carrots & Celery', 'carrots-celery', 0, NULL, '<p>Carrots &amp; Celery</p>', 21, 'active', '2022-04-14 09:53:46', '2022-04-14 09:53:46'),
(29, 'Corn', 'corn', 0, NULL, '<p>Corn</p>', 21, 'active', '2022-04-14 09:54:01', '2022-04-14 09:54:01'),
(30, 'Cucumbers', 'cucumbers', 0, NULL, '<p>Cucumbers</p>', 21, 'active', '2022-04-14 09:54:15', '2022-04-14 09:54:15');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anenii Noi', 'active', '2022-04-13 09:15:18', '2022-04-13 09:15:18'),
(2, 'Basarabeasca', 'active', '2022-04-13 09:15:27', '2022-04-13 09:15:27'),
(3, 'Bălți', 'active', '2022-04-13 09:15:49', '2022-04-13 09:15:49'),
(4, 'Biruința', 'active', '2022-04-13 09:15:58', '2022-04-13 09:15:58'),
(5, 'Briceni', 'active', '2022-04-13 09:16:05', '2022-04-13 09:16:05'),
(6, 'Cahul', 'active', '2022-04-13 09:16:14', '2022-04-13 09:16:14'),
(7, 'Camenca', 'active', '2022-04-13 09:16:21', '2022-04-13 09:16:21'),
(8, 'Călărași', 'active', '2022-04-13 09:16:29', '2022-04-13 09:16:29'),
(9, 'Chișinău', 'active', '2022-04-13 09:16:55', '2022-04-13 09:16:55'),
(10, 'Comrat', 'active', '2022-04-13 09:17:05', '2022-04-13 09:17:05'),
(11, 'Dnestrovsc', 'active', '2022-04-13 09:17:11', '2022-04-13 09:17:11'),
(12, 'Drochia', 'active', '2022-04-13 09:17:18', '2022-04-13 09:17:18'),
(13, 'Edineț', 'active', '2022-04-13 09:17:25', '2022-04-13 09:17:25'),
(14, 'Fălești', 'active', '2022-04-13 09:17:32', '2022-04-13 09:17:32'),
(15, 'Florești', 'active', '2022-04-13 09:17:38', '2022-04-13 09:17:38'),
(16, 'Ghindești', 'active', '2022-04-13 09:17:45', '2022-04-13 09:17:45'),
(17, 'Ialoveni', 'active', '2022-04-13 09:17:53', '2022-04-13 09:17:53'),
(18, 'Hîncești', 'active', '2022-04-13 09:17:59', '2022-04-13 09:17:59');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Clio Watts', 'jacubequve@mailinator.com', 'Ut ut et Nam odio', 'Dolor et dolorum ull', '2022-05-17 08:49:34', '2022-05-17 08:49:34'),
(2, 'Rhoda Cabrera', 'zotobuqi@mailinator.com', 'Corporis incidunt e', 'Enim saepe autem non', '2022-05-17 08:51:15', '2022-05-17 08:51:15'),
(3, 'Alec Williamson', 'busyh@mailinator.com', 'Qui vitae nihil vita', 'Eiusmod in assumenda', '2022-05-17 08:52:13', '2022-05-17 08:52:13'),
(4, 'Theodore Dickson', 'mivuza@mailinator.com', 'Enim at veniam anim', 'Enim delectus vero', '2022-05-17 08:53:01', '2022-05-17 08:53:01');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2013_04_13_083610_create_cities_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_08_112550_create_banners_table', 1),
(7, '2022_04_11_095852_create_categories_table', 1),
(8, '2022_04_11_133543_create_brands_table', 1),
(9, '2022_04_11_140245_create_products_table', 1),
(10, '2022_04_13_080553_create_vendor_categories_table', 1),
(18, '2022_05_17_074512_create_orders_table', 2),
(19, '2022_05_17_074606_create_order_products_table', 2),
(20, '2022_05_17_114338_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `phone`, `message`, `address`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 05:44:21', '2022-05-17 05:44:21'),
(2, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:54:09', '2022-05-17 06:54:09'),
(3, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:54:46', '2022-05-17 06:54:46'),
(4, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:54:57', '2022-05-17 06:54:57'),
(5, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:57:12', '2022-05-17 06:57:12'),
(6, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:57:22', '2022-05-17 06:57:22'),
(7, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:58:41', '2022-05-17 06:58:41'),
(8, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 06:59:22', '2022-05-17 06:59:22'),
(9, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:04:04', '2022-05-17 07:04:04'),
(10, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:04:23', '2022-05-17 07:04:23'),
(11, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:05:10', '2022-05-17 07:05:10'),
(12, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:10:05', '2022-05-17 07:10:05'),
(13, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:10:54', '2022-05-17 07:10:54'),
(14, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:11:19', '2022-05-17 07:11:19'),
(15, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:11:36', '2022-05-17 07:11:36'),
(16, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:11:50', '2022-05-17 07:11:50'),
(17, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:12:04', '2022-05-17 07:12:04'),
(18, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:12:36', '2022-05-17 07:12:36'),
(19, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:12:55', '2022-05-17 07:12:55'),
(20, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:14:16', '2022-05-17 07:14:16'),
(21, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:17:29', '2022-05-17 07:17:29'),
(22, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:18:01', '2022-05-17 07:18:01'),
(23, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:18:11', '2022-05-17 07:18:11'),
(24, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:18:27', '2022-05-17 07:18:27'),
(25, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:18:42', '2022-05-17 07:18:42'),
(26, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:19:16', '2022-05-17 07:19:16'),
(27, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:20:29', '2022-05-17 07:20:29'),
(28, 'Ariel King', 'demaby@mailinator.com', '+1 (659) 477-3241', 'Beatae deserunt unde', '26842', 4, '2022-05-17 07:20:51', '2022-05-17 07:20:51'),
(29, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:21:42', '2022-05-17 07:21:42'),
(30, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:21:54', '2022-05-17 07:21:54'),
(31, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:22:03', '2022-05-17 07:22:03'),
(32, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:22:16', '2022-05-17 07:22:16'),
(33, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:22:52', '2022-05-17 07:22:52'),
(34, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:29:32', '2022-05-17 07:29:32'),
(35, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:30:47', '2022-05-17 07:30:47'),
(36, 'Rudyard Salinas', 'febumijof@mailinator.com', '+1 (191) 908-2174', 'Omnis accusamus simi', '87533', 3, '2022-05-17 07:32:01', '2022-05-17 07:32:01');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 5),
(2, 1, 5),
(3, 1, 5),
(4, 1, 5),
(5, 1, 5),
(6, 1, 5),
(7, 1, 5),
(8, 1, 5),
(9, 1, 5),
(10, 1, 5),
(11, 1, 5),
(12, 1, 5),
(13, 1, 5),
(14, 1, 5),
(15, 1, 5),
(16, 1, 5),
(17, 1, 5),
(18, 1, 5),
(19, 1, 5),
(20, 1, 5),
(21, 1, 5),
(22, 1, 5),
(23, 1, 5),
(24, 1, 5),
(25, 1, 5),
(26, 1, 5),
(27, 1, 5),
(28, 1, 5),
(29, 4, 5),
(30, 4, 5),
(31, 4, 5),
(32, 4, 5),
(33, 4, 5),
(34, 4, 5),
(35, 4, 5),
(36, 4, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `offer_price` double(8,2) NOT NULL DEFAULT 0.00,
  `discount` double(8,2) NOT NULL DEFAULT 0.00,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('new','popular','winter') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `summary`, `description`, `stock`, `brand_id`, `cat_id`, `child_cat_id`, `photo`, `price`, `offer_price`, `discount`, `size`, `condition`, `vendor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cal Organic Farms Organic Peeled Baby Carrots', 'sunt-deleniti-commodi-id-totam-ducimus-nihil', '<p>Perspiciatis ab est neque ullam ipsum. Suscipit nesciunt accusantium sint. Sed tempore et facilis est omnis eum. Quia voluptatem itaque culpa magnam quia ipsum.</p>', '<p>Nihil ipsam dolores dolorem nulla. Harum enim vero velit consequatur voluptatem exercitationem. Nisi culpa minus et magnam.</p>', 8, 8, 8, NULL, '/storage/photos/1/ezgif.com-gif-maker.png', 119.00, 9.52, 92.00, 'L', 'new', NULL, 'active', '2022-04-13 09:12:27', '2022-04-14 09:47:56'),
(2, 'Adipisci expedita accusantium.', 'ea-esse-reprehenderit-ipsum-velit-natus-exercitationem-necessitatibus', 'Saepe vel modi quisquam quia sed. Suscipit laudantium eius in perspiciatis. Velit quis ut sit omnis itaque architecto non.', 'Enim provident quia ipsum qui eveniet voluptatem itaque. Aut qui unde debitis. Voluptatem quisquam aspernatur voluptates praesentium fugiat. Quia ratione voluptatibus iure saepe.', 8, 6, 10, 20, 'https://via.placeholder.com/400x200.png/00ffbb?text=repudiandae', 188.00, 483.00, 11.00, 'M', 'popular', 13, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(3, 'Optio ut molestias.', 'doloribus-dicta-reiciendis-accusantium-dolorem-animi-dignissimos-animi', 'Fugit accusantium ex et deleniti consequuntur. Aut natus harum sapiente consequatur aut autem. Laborum quia ut nobis aut aut ea. Deleniti ea rerum in sed.', 'Adipisci occaecati non sit aut eligendi et nemo. Voluptate est alias et dignissimos delectus iste temporibus. Perferendis suscipit vero maiores et aut et.', 7, 3, 8, 18, 'https://via.placeholder.com/400x200.png/000099?text=eligendi', 302.00, 813.00, 42.00, 'M', 'new', 11, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(4, 'Velit ipsa molestiae.', 'veritatis-distinctio-est-non', '<p>Magnam aut dicta natus excepturi. Aut a et esse est. Inventore voluptatibus dolorem ipsam consequatur aut.</p>', '<p>Laboriosam facere cum quaerat minima ut. Laudantium reprehenderit accusamus voluptatem sapiente esse esse vel. Dolores ut nulla culpa minima.</p>', 3, 3, 13, NULL, '/storage/photos/1/large_91e6ebd6-fb26-4320-bc37-2003de8b54ce.jpg', 275.00, 19.25, 93.00, 'S', 'new', NULL, 'active', '2022-04-13 09:12:27', '2022-04-14 07:44:29'),
(5, 'Et rerum assumenda.', 'optio-ratione-omnis-animi', '<p>Voluptates magnam ex quisquam ipsum ut. Molestiae similique voluptatibus aut suscipit aut.</p>', '<p>Pariatur est voluptas rerum voluptas. Accusantium quaerat assumenda adipisci eligendi autem quam. Provident eum corporis et id. Nemo est est incidunt ut iste ut.</p>', 2, 2, 21, NULL, '/storage/photos/1/large_52f86e5a-a448-4186-b726-2e6f506a5a4a.jpg', 114.00, 28.50, 75.00, 'S', 'new', NULL, 'active', '2022-04-13 09:12:27', '2022-04-14 11:24:05'),
(6, 'Delectus dolores eos.', 'quia-tempora-voluptate-asperiores-consequatur-eius-quia', 'Ratione saepe ipsam deleniti. Quae illum reprehenderit maiores quidem voluptatem sit. Est nesciunt impedit nostrum unde.', 'Consequuntur vel consequuntur doloremque rerum necessitatibus doloribus omnis. Debitis dicta facere est et corrupti. Suscipit libero veritatis ut ullam dolores. Quod at saepe error unde tenetur.', 6, 3, 8, 4, 'https://via.placeholder.com/400x200.png/0066ee?text=aspernatur', 598.00, 382.00, 42.00, 'S', 'new', 13, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(7, 'Laboriosam autem quia.', 'exercitationem-in-et-mollitia-qui-quam', 'Esse dignissimos quia quas. Sit nemo aliquam excepturi quis. Aperiam nesciunt sequi aliquid aut iste ab rerum. Voluptatem earum eligendi impedit impedit.', 'Eius beatae incidunt at asperiores minima. Perferendis non est quia accusantium eum praesentium. Nisi ipsam ad nisi et. Dolores recusandae est officia dolor quae odit ut qui.', 10, 9, 20, 16, 'https://via.placeholder.com/400x200.png/00cc77?text=delectus', 923.00, 344.00, 12.00, 'M', 'winter', NULL, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(8, 'Yellow Onion', 'explicabo-eaque-sed-est-dignissimos-repudiandae-aliquid-sunt', '<p>Ea ratione sed eos eum eum illo sed et. Occaecati non quisquam in ipsum. Nulla sed labore facilis sequi qui esse.</p>', '<p>Iusto sint a et vel qui in omnis. Laudantium optio sit eum impedit officiis et. Id dolorem hic est aperiam sed nihil.</p>', 6, 4, 13, NULL, '/storage/photos/1/large_c52783e5-46ee-4c38-b0a0-6e792b9fe497.jpg', 619.00, 241.41, 61.00, 'S', 'popular', NULL, 'active', '2022-04-13 09:12:27', '2022-04-14 09:48:20'),
(9, 'Nostrum architecto voluptatem.', 'corrupti-culpa-corporis-quas-explicabo-magnam', 'Id laboriosam eius consequuntur non porro. Laboriosam recusandae eos est ut autem atque blanditiis.', 'Dolores ut aut quia natus. Ut quasi nostrum ab ullam odio sed. Eligendi quia illo dignissimos.', 6, 6, 1, 18, 'https://via.placeholder.com/400x200.png/005544?text=incidunt', 557.00, 247.00, 70.00, 'M', 'new', 7, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(10, 'Reiciendis provident modi.', 'nam-voluptas-tempora-et-corporis-qui-corporis-ut', 'Quo tempore aliquid necessitatibus asperiores excepturi corporis. Fugiat eum repellendus voluptate delectus.', 'Quasi natus optio sint tempora ut cum. Quo totam cupiditate iusto. Recusandae tempore earum vero facilis molestiae.', 5, 7, 1, 20, 'https://via.placeholder.com/400x200.png/00ddcc?text=fugit', 207.00, 933.00, 58.00, 'M', 'popular', 12, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(11, 'Harum libero voluptate.', 'odit-libero-veritatis-consequatur-sit', 'Illum dolore enim vero dolorem. Veritatis ipsum quod voluptatum quaerat est dicta reiciendis. Maiores et quis laboriosam ut tempore.', 'Voluptatum sit sint sint eligendi. Qui nobis et officiis voluptatem velit in. Et quos est sint dolorem nihil.', 4, 2, 1, 4, 'https://via.placeholder.com/400x200.png/007799?text=nulla', 122.00, 143.00, 39.00, 'S', 'popular', 1, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(12, 'Et nisi sit.', 'excepturi-sed-adipisci-et-tempore-molestiae', 'Aliquid ipsum omnis laudantium sit qui magnam reiciendis. Deserunt porro qui consequatur quia quisquam.', 'Dolore et velit voluptatem distinctio aut. Doloribus fuga enim numquam voluptatem quod id nihil doloribus. Id qui illo soluta et perferendis delectus.', 4, 10, 12, 19, 'https://via.placeholder.com/400x200.png/0077dd?text=sit', 476.00, 129.00, 63.00, 'M', 'new', 8, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(13, 'Ut voluptate dolore.', 'iusto-unde-sed-eum-cumque-tempora-consequuntur-aut', 'Et est minima et laborum doloremque vero. Voluptatem quam ut veniam voluptates. Earum tenetur iste quibusdam atque. Dolores cum ea necessitatibus animi.', 'Accusantium quia temporibus delectus facere est quam. Distinctio adipisci modi suscipit facere. Vel similique consequatur consequatur expedita sit debitis. Beatae quia assumenda in et voluptatibus.', 5, 5, 10, 17, 'https://via.placeholder.com/400x200.png/0022aa?text=ipsum', 169.00, 208.00, 60.00, 'S', 'new', 5, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(14, 'Rerum animi ea.', 'laboriosam-non-saepe-qui-error-ea-voluptatum-non', 'Nisi et est et ducimus odit quis culpa corrupti. Ab adipisci voluptate mollitia ea beatae fugit.', 'Expedita itaque magnam quis accusamus quo. Facere nostrum non omnis quis voluptatibus ipsum quia. Voluptatem assumenda nam doloribus. Molestiae pariatur sunt corporis vel in qui.', 9, 8, 13, 6, 'https://via.placeholder.com/400x200.png/0077cc?text=et', 849.00, 871.00, 83.00, 'S', 'popular', 13, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(15, 'Sit nam officia.', 'at-doloremque-amet-rerum-rerum', 'Excepturi omnis quos est ex. Sit commodi eos quod similique aut et. Omnis modi deserunt modi quia. Veritatis aut qui et minima.', 'Sint debitis dolorum et harum quos laborum eos. Necessitatibus cum autem explicabo vel dolores voluptates. Fuga repellendus autem sed sunt quos ipsa pariatur omnis. Delectus dolor tempore voluptatem.', 3, 2, 2, 9, 'https://via.placeholder.com/400x200.png/006644?text=occaecati', 199.00, 340.00, 56.00, 'M', 'new', NULL, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(16, 'Quae velit similique.', 'soluta-quos-occaecati-consequuntur-quam-quas-magnam-rem', 'Omnis voluptatem consequatur suscipit. Eos sed fuga dolore. Deserunt ducimus non sapiente illum. Eius asperiores incidunt fugit nihil.', 'Ipsa quam maxime ut nihil. Ratione veritatis a laudantium. Sequi repudiandae quidem ipsa et natus saepe tenetur. Voluptas et beatae ducimus et.', 9, 9, 14, 18, 'https://via.placeholder.com/400x200.png/0055cc?text=et', 180.00, 844.00, 68.00, 'L', 'winter', 3, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(17, 'Omnis laudantium est.', 'nemo-consequatur-esse-quaerat-qui-perspiciatis-sequi', 'Est ratione voluptas voluptas. Omnis error exercitationem quia animi voluptatibus. Excepturi odio maxime ullam et voluptatem.', 'Qui eveniet in velit et dolores nemo eum soluta. Architecto omnis minima autem aut occaecati. Quia dolor nihil in voluptatem pariatur voluptas. Ea fugit eos numquam rem harum sapiente.', 6, 1, 14, 19, 'https://via.placeholder.com/400x200.png/00aa22?text=eos', 407.00, 185.00, 68.00, 'M', 'winter', 3, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(18, 'Deleniti qui odio.', 'at-at-atque-incidunt-eos-voluptas-quod', 'Culpa enim vero assumenda non expedita et. Necessitatibus corrupti esse soluta corrupti et ut voluptatem. Dolor sit quia libero doloribus nisi suscipit.', 'Et quia quibusdam quo quam. Dolorum at tempore ducimus neque. Ab aut rerum dolor neque deleniti laboriosam nulla. Iste commodi deleniti suscipit minima.', 3, 8, 12, 6, 'https://via.placeholder.com/400x200.png/002255?text=velit', 722.00, 523.00, 49.00, 'M', 'winter', 13, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(19, 'Itaque dolorem asperiores.', 'quia-excepturi-debitis-cum-eius-commodi-qui', 'Corporis aut ipsam illo eum libero sapiente. Id quia consequatur labore. Esse sequi architecto molestiae vel. Soluta sequi officiis consequatur ut harum.', 'Pariatur iure rerum voluptatum. Repudiandae dolorem sapiente quibusdam ut eaque. Aut itaque provident voluptates et laudantium velit mollitia.', 3, 6, 1, 18, 'https://via.placeholder.com/400x200.png/00aa88?text=ducimus', 566.00, 595.00, 32.00, 'S', 'popular', 7, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(20, 'Aspernatur dicta non.', 'in-enim-et-sint-est-esse-qui', 'Doloremque qui laborum dolores et autem. Quidem officia sint est nobis ut voluptatem quidem. Ipsam quia quasi et quia.', 'Facere quasi blanditiis non quia id est. Est accusantium quae odio voluptas. Rerum quia molestiae cum ipsa laboriosam blanditiis quo.', 6, 2, 1, 19, 'https://via.placeholder.com/400x200.png/0077aa?text=ratione', 192.00, 857.00, 81.00, 'L', 'winter', 1, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(21, 'Amet ex distinctio.', 'aut-sint-praesentium-iusto-consequatur-laudantium', 'Dicta sunt quia quos commodi odio eum praesentium. Deserunt modi magnam dignissimos. Exercitationem enim corporis ad cumque itaque aut quasi consectetur.', 'Assumenda sed aut quod suscipit. At a architecto rem dolores quaerat et. Fugit autem recusandae et quae maxime. Ducimus quibusdam dignissimos accusamus numquam beatae commodi laborum.', 9, 3, 12, 17, 'https://via.placeholder.com/400x200.png/008899?text=et', 378.00, 116.00, 37.00, 'S', 'new', 1, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(22, 'Voluptatibus minus rem.', 'ut-voluptas-doloribus-quia-ex-impedit', 'Possimus incidunt non vel nobis quia autem modi. Fuga quia saepe dolores fuga voluptatibus nihil ducimus est. Voluptatem reiciendis voluptas eum.', 'Et ut reiciendis velit aut autem magni. Odit non est eligendi ut blanditiis tempora dignissimos.', 7, 1, 2, 18, 'https://via.placeholder.com/400x200.png/00ffee?text=repellendus', 464.00, 809.00, 67.00, 'M', 'winter', 11, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(23, 'Fuga ut qui.', 'iste-nesciunt-fugiat-tempore-eveniet-nihil-delectus-inventore', 'Commodi placeat et dolores nemo veniam sint rerum. Illum sit ad ipsam.', 'Et quam quasi temporibus qui. Architecto et voluptatem et inventore expedita sed voluptatem alias. Excepturi porro neque eum in nihil reiciendis.', 3, 9, 2, 6, 'https://via.placeholder.com/400x200.png/0011dd?text=autem', 316.00, 331.00, 36.00, 'M', 'new', 3, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(24, 'Cumque occaecati facere.', 'quidem-odit-modi-recusandae-facilis-iste-adipisci-dolorem', 'Libero exercitationem consequatur illo commodi delectus magni. Vitae maxime saepe ex voluptas. Officiis voluptas nesciunt et nesciunt illo. Consequatur pariatur culpa ea neque est eos.', 'Dolores facilis ea iusto ullam aut officiis. Dolorem rerum quo odit aspernatur quia autem veritatis.', 9, 10, 2, 20, 'https://via.placeholder.com/400x200.png/004499?text=ipsum', 974.00, 180.00, 6.00, 'L', 'winter', 9, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(25, 'Adipisci quia iste.', 'deserunt-reiciendis-officiis-porro-ex', 'Maxime sit voluptatem fugiat eos qui rem. Ad nemo accusantium et itaque explicabo rem. Eum est ex qui tempora corrupti delectus. Reiciendis dolorum maiores nam odio. Sapiente aut consectetur et.', 'Nisi laborum facilis atque eos. Nostrum quisquam eligendi asperiores aut ullam quam debitis reprehenderit.', 9, 1, 2, 9, 'https://via.placeholder.com/400x200.png/003333?text=deleniti', 354.00, 316.00, 56.00, 'M', 'new', 11, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(26, 'Non perferendis iste.', 'corporis-consequatur-aut-sed-quaerat-nihil-commodi-consequatur', 'Animi nulla sit reiciendis maxime dolore officia minima. Enim non facilis ipsum minima qui. Deleniti eaque debitis reprehenderit eaque minus. Ea sequi dolore ut molestias incidunt consequatur.', 'Natus qui iste magni pariatur. Ut magni omnis illum laudantium aut iusto similique temporibus. Nobis enim fugiat ut aut voluptates. Dolor optio voluptatibus qui mollitia dolorem fuga exercitationem.', 3, 3, 12, 18, 'https://via.placeholder.com/400x200.png/008888?text=excepturi', 359.00, 880.00, 85.00, 'M', 'winter', 6, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(27, 'Inventore ad qui.', 'molestiae-et-veritatis-qui', 'Modi illum et hic illo. Id vel deserunt non asperiores sit qui nobis provident. Saepe dolorum temporibus tempora architecto. Quibusdam illo et sit dignissimos eos.', 'Consequatur ab dolore et numquam praesentium. Ut dolore voluptatibus quas ab odio. Iste natus illo autem non maxime blanditiis. Itaque non deleniti et ea.', 8, 3, 3, 4, 'https://via.placeholder.com/400x200.png/00aa11?text=atque', 734.00, 371.00, 76.00, 'S', 'popular', 10, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(28, 'Dolor facilis a.', 'voluptates-aspernatur-blanditiis-quasi-eaque-illum', 'Voluptatum tempora necessitatibus aut explicabo dolore molestiae voluptatem. Doloremque doloribus itaque quaerat eos. Molestiae sed laborum deserunt.', 'Delectus et odit et nisi. Asperiores quis fuga et ut magnam aut. Nesciunt fugit consequatur dolorem consequatur.', 10, 1, 2, 16, 'https://via.placeholder.com/400x200.png/00aa11?text=minima', 728.00, 437.00, 46.00, 'S', 'winter', 8, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(29, 'Ut eos omnis.', 'autem-dolore-quod-minus-ad-voluptatem-minus', 'Expedita qui culpa qui culpa aut quo. Assumenda eos velit consectetur non. Deleniti aut illo voluptas aut vel sit. Quod quis expedita quas et vitae suscipit commodi quod.', 'Beatae cum rerum et dolores. Fuga porro minima quo beatae est enim. Itaque et et laboriosam quos et.', 6, 9, 3, 5, 'https://via.placeholder.com/400x200.png/0011ff?text=excepturi', 585.00, 942.00, 53.00, 'L', 'new', 7, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(30, 'Cumque quia earum.', 'cumque-quia-quia-deserunt-magni-magni-sint-nihil-minima', 'Maxime adipisci inventore repudiandae nesciunt quam laborum. Quia dolores modi veniam quo. Hic vero minus vel. Recusandae ipsum facilis earum nam.', 'A omnis deserunt quos fuga eaque. Consequatur repellat sapiente et corporis blanditiis nisi doloribus illum. Id enim nisi sint dolorem earum pariatur praesentium.', 8, 8, 13, 5, 'https://via.placeholder.com/400x200.png/001177?text=eius', 665.00, 986.00, 23.00, 'S', 'new', NULL, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(31, 'Quasi reiciendis velit.', 'nihil-omnis-qui-officia-nisi-aut-omnis', 'Doloribus qui et eos veniam occaecati nisi tenetur. Impedit velit saepe dignissimos mollitia dolores. Ut in quia illo excepturi. Atque in dignissimos et.', 'Eligendi sapiente rerum quos nemo debitis ut. Eveniet soluta corporis ut voluptatem qui. Explicabo quia distinctio ullam soluta magnam consectetur et at.', 7, 5, 10, 4, 'https://via.placeholder.com/400x200.png/00eeff?text=qui', 839.00, 209.00, 9.00, 'S', 'popular', 11, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(32, 'Quibusdam et nemo.', 'itaque-sint-est-numquam-fuga-doloremque-omnis-ea-ea', 'Sit esse adipisci et quam quisquam molestiae. Hic quo delectus et iusto velit. Sed fugiat voluptate cupiditate autem laboriosam harum.', 'Maiores eius optio aut numquam tenetur. Amet maxime excepturi autem. Saepe dolorem qui illo.', 5, 9, 3, 17, 'https://via.placeholder.com/400x200.png/003300?text=ut', 588.00, 154.00, 29.00, 'L', 'new', 11, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(33, 'Facere est voluptate.', 'nesciunt-sed-laboriosam-saepe-aut-ratione-eum-illum-natus', 'Labore ut molestiae sunt ut. Exercitationem repudiandae eveniet quos hic nihil ad nemo et. Sit ex numquam nesciunt quod aut. Qui est ducimus quibusdam incidunt eaque.', 'Molestiae et ut sed totam nisi sapiente. Iste rerum tempore magni labore est. Excepturi saepe quia occaecati dolorem explicabo. Id architecto eos consequatur et.', 2, 8, 15, 20, 'https://via.placeholder.com/400x200.png/0077ee?text=id', 267.00, 755.00, 12.00, 'M', 'winter', 11, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(34, 'Iure excepturi aut.', 'iusto-possimus-et-assumenda-sed-sit-aut-vero', 'Quia sed quae quia fugiat. Magnam vel non dolorem aspernatur. Ut accusantium labore culpa unde est id.', 'Veritatis rerum molestiae ea vitae numquam aut provident. Et natus rem et ut ex dolore tempora. Ipsum eos occaecati ut officiis aut libero veritatis. Sit quia at et facilis et.', 9, 8, 14, 20, 'https://via.placeholder.com/400x200.png/004433?text=omnis', 216.00, 456.00, 2.00, 'L', 'popular', 13, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(35, 'Eligendi molestiae et.', 'exercitationem-repudiandae-dolor-numquam-vitae-est-rerum-voluptate', 'Ut ipsum molestias voluptatibus explicabo. Consequatur modi aut quia eum et. Dicta est magnam blanditiis qui labore. Qui est voluptatum corrupti itaque laborum illo deleniti.', 'Aliquid voluptatem id qui cupiditate quis sunt. Ipsam quos eligendi quia sed velit. Sed et adipisci inventore perspiciatis nesciunt. Consequatur corporis numquam ipsam et.', 9, 3, 2, 16, 'https://via.placeholder.com/400x200.png/00dd77?text=ut', 515.00, 882.00, 45.00, 'M', 'new', 11, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(36, 'Velit accusantium fugit.', 'voluptas-quos-ducimus-voluptatem-vel-qui-neque-reprehenderit', 'Quibusdam laboriosam autem vero odit. Ut omnis fuga rem quam dolorum reiciendis. At est aliquid illum. Itaque sint dolor et illo necessitatibus.', 'Unde dolorum ex nam nihil aliquid soluta. Ullam similique id omnis natus. Nihil non eveniet illum voluptate saepe nulla exercitationem. Incidunt laboriosam autem accusamus.', 3, 10, 12, 4, 'https://via.placeholder.com/400x200.png/00ddbb?text=voluptatum', 571.00, 892.00, 64.00, 'M', 'winter', 10, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(37, 'Laudantium consectetur aut.', 'quia-et-enim-aspernatur', 'Suscipit sit vero sed aut culpa nobis. Nisi nemo ut corporis et modi. Molestias aspernatur nihil et quo asperiores voluptatibus qui. Ratione et sequi labore ea rerum numquam. Et culpa labore error.', 'Dolor quo doloremque explicabo aperiam. Possimus doloremque quidem aspernatur sit incidunt. Enim commodi provident veritatis ex quam cum.', 5, 9, 3, 4, 'https://via.placeholder.com/400x200.png/00ccdd?text=quibusdam', 525.00, 949.00, 64.00, 'S', 'new', 4, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(38, 'Aspernatur dolores nihil.', 'ut-commodi-quo-ipsum-magni-occaecati-illum', 'Vitae harum dolorem eos voluptatem exercitationem nostrum. Provident aperiam quia cupiditate qui voluptate. Quaerat aliquam autem aut sed iusto rem et. Quas perspiciatis cum eaque nostrum.', 'Hic ipsa corrupti sit. Amet enim reprehenderit id provident magni alias iure quo. Aspernatur consequuntur ea hic qui ratione fuga debitis.', 5, 6, 2, 17, 'https://via.placeholder.com/400x200.png/00aabb?text=et', 842.00, 736.00, 15.00, 'S', 'popular', 7, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(39, 'Corrupti quibusdam mollitia.', 'nesciunt-fugiat-rerum-enim-non-odio-dolorem-consectetur-aut', 'Autem aut quidem alias facere sit ut. Facere omnis velit similique molestiae. Ut aliquam omnis est et maiores laboriosam explicabo.', 'Beatae nesciunt dolorem perspiciatis dolor. Voluptates sed quos quasi laborum hic aliquam consequatur. Et ut totam sapiente et.', 4, 5, 12, 16, 'https://via.placeholder.com/400x200.png/00bb88?text=rerum', 411.00, 218.00, 29.00, 'S', 'new', 13, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(40, 'Sunt placeat odit.', 'culpa-sit-nobis-qui-vel-et', 'Dicta unde ut quidem consectetur. A illo quidem vitae quisquam et suscipit ex vel. Quam et dolores quibusdam id omnis eos et.', 'Vero perferendis reprehenderit et impedit ut. Consequatur aliquam recusandae quo possimus nostrum aliquid ullam at. Libero at qui beatae consequuntur.', 4, 8, 15, 11, 'https://via.placeholder.com/400x200.png/00ddcc?text=dolores', 694.00, 146.00, 23.00, 'M', 'new', 4, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(41, 'Error optio mollitia.', 'eligendi-dolor-minus-aut', 'Quae qui rerum labore quo. Iste debitis eos soluta qui. Aut est doloremque non adipisci optio quaerat deleniti. Autem corporis aliquid similique vel et iusto nam.', 'Dolore neque magni doloribus minima eius adipisci expedita. Totam vel voluptatem error repellendus et. Temporibus qui occaecati vel consequuntur.', 9, 3, 13, 18, 'https://via.placeholder.com/400x200.png/002255?text=sit', 895.00, 575.00, 36.00, 'L', 'new', NULL, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(42, 'Quibusdam illo quia.', 'maiores-eum-voluptatibus-quibusdam-commodi-distinctio-eius-quas', 'Qui praesentium eos laboriosam minima libero eum minima molestiae. Quia quo aut ipsa labore.', 'Quo quisquam et magnam ut. Est aperiam amet deleniti nulla quas illo assumenda provident. In eos temporibus eos quae ut optio. Animi est et modi corrupti et repellendus.', 10, 10, 8, 7, 'https://via.placeholder.com/400x200.png/00ffdd?text=odit', 723.00, 332.00, 41.00, 'S', 'popular', 6, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(43, 'Maxime nulla modi.', 'quas-ut-in-repudiandae-incidunt-eum', 'Aut quod vero placeat. Occaecati doloribus ex nesciunt fugiat voluptate accusantium. In reprehenderit quod eaque velit eos velit in.', 'Et sed sed qui quidem. Beatae temporibus doloribus quidem dignissimos minus voluptatem facere facere. Nesciunt laudantium ut dolores accusamus omnis totam.', 9, 7, 8, 18, 'https://via.placeholder.com/400x200.png/008899?text=est', 208.00, 378.00, 66.00, 'M', 'new', 8, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(44, 'Nihil qui maiores.', 'molestiae-unde-itaque-excepturi', 'Dolores consequuntur et ex ipsum eius. Officiis voluptatum id et ut. Est libero reprehenderit ex amet tempore in cum. Et sunt enim pariatur veniam animi voluptas.', 'Assumenda ad praesentium et perferendis harum et dolores optio. Soluta odio recusandae delectus facere veniam doloremque consequatur eos. Quasi autem necessitatibus rerum commodi excepturi unde.', 6, 5, 3, 18, 'https://via.placeholder.com/400x200.png/00ff99?text=delectus', 284.00, 390.00, 78.00, 'S', 'winter', 9, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(45, 'Nisi voluptates consequuntur.', 'sit-id-dolor-magnam-culpa-enim-sunt', 'In voluptatem qui ut quis odit. Officia dolor voluptatum est accusantium. Pariatur praesentium nisi facilis dolorem.', 'Quo nobis et voluptatum ipsum et reprehenderit eos. Necessitatibus et qui doloribus recusandae voluptate maiores. Voluptatum ut corporis aut dolores ut alias et. Aut ut quis ea.', 9, 9, 8, 16, 'https://via.placeholder.com/400x200.png/006600?text=aut', 709.00, 863.00, 61.00, 'S', 'popular', 10, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(46, 'Maxime recusandae aut.', 'tenetur-rerum-ut-nulla-enim-maiores-dolorem-numquam', 'Voluptatem est aliquam modi quis voluptatem distinctio. Expedita aut id quas ut iusto. Cupiditate velit expedita odio voluptatum et.', 'Expedita exercitationem alias magni ipsa totam. Consectetur consequuntur et officia consequatur voluptatem qui esse dolorem. Et quos qui eligendi nihil.', 4, 5, 13, 18, 'https://via.placeholder.com/400x200.png/00aa99?text=nam', 445.00, 588.00, 62.00, 'L', 'popular', 13, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(47, 'Non totam provident.', 'laboriosam-unde-ut-laudantium-rerum-ducimus', 'Placeat magni voluptates ipsa voluptatem et doloremque. Consequatur nisi ut molestiae possimus culpa maiores. Quam natus sint veniam dicta corrupti. Sit vel pariatur alias ab vitae maiores natus.', 'Voluptates autem eveniet rerum cumque. Aut culpa est neque voluptas non nihil. Eveniet dolorem quo nobis accusantium. Cum voluptas voluptatibus dolores enim ipsam reiciendis voluptatibus.', 2, 9, 14, 4, 'https://via.placeholder.com/400x200.png/0022dd?text=enim', 586.00, 571.00, 60.00, 'L', 'popular', 12, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(48, 'Officiis nihil dolores.', 'voluptas-aut-rerum-quo-perferendis', 'Officiis doloribus occaecati reiciendis. Odit eveniet autem numquam sapiente in. Dicta tenetur quidem reiciendis.', 'Dolore doloremque quis sed. Necessitatibus aliquam earum sit asperiores. Quis et aliquid et est velit a dolorem.', 3, 1, 13, 20, 'https://via.placeholder.com/400x200.png/001177?text=non', 496.00, 317.00, 47.00, 'L', 'new', 10, 'inactive', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(49, 'Et enim non.', 'delectus-cupiditate-quod-est-quia', 'Fugit aut recusandae aut qui aut consequatur quia. Quibusdam molestias nobis dolor veritatis dolores magnam optio. Dolorum maiores ad dolore aut labore.', 'Itaque et accusantium sed consequatur quos qui amet dolor. Cumque at dolorum saepe autem est consequatur. Ut voluptas cupiditate dicta.', 5, 9, 2, 9, 'https://via.placeholder.com/400x200.png/00bb33?text=voluptas', 530.00, 219.00, 100.00, 'M', 'new', 3, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27'),
(50, 'Delectus provident cupiditate.', 'nemo-a-eveniet-consequuntur-est-nam', 'Maxime rem sunt quisquam ipsum quibusdam ea. Aut omnis vero porro et eos perferendis et est. Est aut et corporis. Magni aut voluptates voluptate et.', 'Exercitationem omnis voluptatem perspiciatis aut est ex et. Provident voluptate molestias repudiandae. Quia illum dolorem ratione reprehenderit sint.', 7, 9, 2, 16, 'https://via.placeholder.com/400x200.png/008855?text=atque', 297.00, 410.00, 96.00, 'S', 'new', 5, 'active', '2022-04-13 09:12:27', '2022-04-13 09:12:27');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `role` enum('admin','seller','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `photo`, `phone`, `address`, `city_id`, `status`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maxim Admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, 9, 'active', 'admin', NULL, '$2y$10$DLCBmSjB816QDS4Dx..IrOwxrmFFwR27BJQB3jTxv2wGbOfmt2rvC', NULL, NULL, NULL),
(3, 'Maxim Customer', 'Customer', 'customer@gmail.com', NULL, NULL, NULL, NULL, 'active', 'customer', NULL, '$2y$10$DaVtJ5AP2ElQhcX4djhDaOsdG0qAKIczjfz1WCYiBT5xABJgpploO', NULL, NULL, NULL),
(4, 'Michelle Schroeder', NULL, 'maci.pfeffer@example.org', 'https://via.placeholder.com/60x60.png/004411?text=aut', '+1-276-552-5155', '2589 Torphy Common\nRhiannonbury, WV 38467-1959', NULL, 'active', '', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aP7Hi6qGm8', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(5, 'Eve Gottlieb', NULL, 'felicita30@example.org', 'https://via.placeholder.com/60x60.png/005555?text=veniam', '608.550.9478', '2677 Freda Harbor Apt. 199\nBrookfort, NE 04811', NULL, 'active', 'customer', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'woqz8YgIbj', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(6, 'Prof. Ima Nikolaus I', NULL, 'danika.stroman@example.com', 'https://via.placeholder.com/60x60.png/006611?text=dolor', '+1 (786) 445-7333', '264 Schumm Spur\nNorth Paulineport, KS 38967-0319', NULL, 'active', 'admin', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jvFES7cdBn', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(7, 'Dr. Kory Lind Jr.', NULL, 'audreanne80@example.com', 'https://via.placeholder.com/60x60.png/0011ee?text=provident', '+1-573-933-4198', '95355 Gutkowski Throughway\nBerneiceton, AK 85411', NULL, 'inactive', '', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6jjBn42zEW', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(8, 'Rowan Pfeffer', NULL, 'sarai.kshlerin@example.net', 'https://via.placeholder.com/60x60.png/000088?text=quia', '614.555.1718', '9395 Jamey Inlet Suite 024\nTellyburgh, RI 38468', NULL, 'inactive', 'admin', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3gAGyvglcO', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(9, 'Timmothy Wolf', NULL, 'hgerlach@example.com', 'https://via.placeholder.com/60x60.png/00ccee?text=dolor', '+1 (757) 439-2745', '68194 Lowe Island\nMedhurstville, SC 98697-8833', NULL, 'inactive', 'customer', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p0KkIUAreO', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(10, 'Reyna Swaniawski', NULL, 'quitzon.ryan@example.net', 'https://via.placeholder.com/60x60.png/002299?text=porro', '567-916-0531', '51421 Bartell Mews\nGreenfelderhaven, MT 76767', NULL, 'active', 'admin', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aaFVmLcQav', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(11, 'Leif Feeney', NULL, 'champlin.laury@example.com', 'https://via.placeholder.com/60x60.png/00ccaa?text=blanditiis', '+1-817-549-7170', '7633 Howe Dam\nLake Ilaburgh, MN 41499', NULL, 'inactive', 'admin', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WNsWxYMNV7', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(12, 'Clementina Flatley', NULL, 'panderson@example.net', 'https://via.placeholder.com/60x60.png/00bbbb?text=pariatur', '1-540-451-6898', '767 West Cliff\nElvisshire, WY 19577', NULL, 'active', 'admin', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eE7G2Ezvpg', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(13, 'Jodie McDermott', NULL, 'loren68@example.net', 'https://via.placeholder.com/60x60.png/00aaee?text=labore', '(341) 772-5428', '714 Hoeger Gateway Apt. 171\nEast Delilahmouth, PA 01765', NULL, 'inactive', 'customer', '2022-04-13 09:12:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T3Q6RnmLWj', '2022-04-13 09:12:26', '2022-04-13 09:12:26'),
(14, 'Urielle Deleon', NULL, 'kupez@mailinator.com', NULL, NULL, NULL, 3, 'active', 'customer', NULL, '$2y$10$iZ0fa5nZ4rUV.sSCh8F5YuyRzvCEM40.p6UwUzzjDWm4nRorGD55W', NULL, '2022-04-13 09:36:39', '2022-04-13 09:36:39'),
(15, 'Dragan Group', 'Linella', 'relatiiclienti@linella.md', '/storage/photos/1/Linella.jpg', '37330001515', 'Chișinău, șos. Muncești, 121', 9, 'active', 'seller', NULL, '$2y$10$mgovW.EGohSs87jo1/S2y.L25ueemWfEmcp9lfGme7G3yBdsGEuwq', NULL, '2022-04-13 10:42:28', '2022-04-14 03:16:23'),
(16, 'Nr1', 'Nr1', 'alina.bogataia@nr1.md', '/storage/photos/1/logo.png', '37360090029', 'Chisinau, Moldova', 9, 'active', 'seller', NULL, '$2y$10$Fzja7YXVrk8WgeDuFSIpfOmfHzElOM3OWHq6AK5NkRyXj8a9DdR9G', NULL, '2022-04-13 10:46:05', '2022-04-14 03:23:46'),
(17, 'Green Hills', 'Green Hills', 'greenhills@gmail.com', '/storage/photos/1/greenhills-logo.jpg', '373022890128', 'Ул. А. Руссо, 28 / GHM 5, Кишинев', 9, 'active', 'seller', NULL, '$2y$10$Y6UQNDT6c3ypimKLSRM7kuCrgGA1u7eTfhVWYPu9h5ievaVtRzkne', NULL, '2022-04-13 10:48:57', '2022-04-14 03:23:53'),
(19, 'Acton Clayton', NULL, 'hizeku@mailinator.com', NULL, NULL, NULL, NULL, 'active', 'customer', NULL, '$2y$10$rLQjWZVgMl3QLu/vxvUkI.ZGR/znFJNi8NnYImdwuvS5mQYOXqo9W', NULL, '2022-05-17 08:13:55', '2022-05-17 08:13:55');

-- --------------------------------------------------------

--
-- Структура таблицы `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_city_id_foreign` (`city_id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_child_cat_id_foreign` (`child_cat_id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- Индексы таблицы `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendor_categories_slug_unique` (`slug`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
