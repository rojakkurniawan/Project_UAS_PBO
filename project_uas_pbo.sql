-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 18.05
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uas_pbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `address`
--

INSERT INTO `address` (`id`, `name`, `phone`, `address`, `city`, `province`, `country`, `postal_code`, `created_at`, `updated_at`) VALUES
('1', 'Abdul Aziz', '085156087172', 'Jalan H Jasirin No 24', 'Tangerang', 'Banten', 'Indonesia', '15134', '2024-06-25 01:12:54', '2024-06-25 01:12:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_24_170727_create_address_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `category_product` varchar(255) NOT NULL,
  `url_image_product` varchar(1000) NOT NULL,
  `description_product` longtext NOT NULL,
  `price_product` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `category_product`, `url_image_product`, `description_product`, `price_product`) VALUES
(1, 'Smartphone Samsung Galaxy S21', '', 'https://images.samsung.com/is/image/samsung/id-feature-epic--in-every-way-392140754?$FB_TYPE_A_MO_JPG$', 'Smartphone Samsung Galaxy S21 dilengkapi dengan layar 6.2 inci, kamera 64MP, dan baterai 4000mAh. Cocok untuk Anda yang mencari ponsel dengan performa tinggi dan harga terjangkau.', 12999000),
(2, 'Laptop Dell XPS 13', '', 'https://images.tokopedia.net/img/cache/700/attachment/2021/11/9/162839454/162839454_32a6d407-fb1c-4dba-9380-4334a6635ba6.jpg?ect=4g', 'Laptop Dell XPS 13 memiliki prosesor Intel i7, RAM 16GB, dan SSD 512GB. Ideal untuk kebutuhan komputasi sehari-hari dan pekerjaan profesional.', 19999000),
(3, 'Headphone Sony WH-1000XM4', '', 'https://www.sony.com/image/e0112dbbc58230645d1427e380ba8c36?fmt=png-alpha&wid=720', 'Headphone Sony WH-1000XM4 menawarkan suara berkualitas tinggi dengan teknologi noise-cancelling. Nyaman digunakan dalam jangka waktu lama.', 4999000),
(4, 'Apple Watch Series 7', '', 'https://www.cnet.com/a/img/resize/ee504b673071fd8d410dbcb671fb3458f3597361/hub/2022/04/26/0ae8cbf4-e3ed-408f-a0ce-722df0106dc8/applewatch-unitylights.jpg?auto=webp&width=1200', 'Apple Watch Series 7 dengan layar Retina Always-On 1.4 inci, pelacak aktivitas, dan monitor detak jantung. Tahan air hingga 50 meter.', 8499000),
(5, 'iPad Pro 11-inch', '', 'https://cdn.mos.cms.futurecdn.net/qf8VEqFqS8B9LLJJJkaaaT.jpg', 'iPad Pro 11-inch dilengkapi dengan layar Liquid Retina 11 inci, penyimpanan 128GB, dan dukungan Apple Pencil. Cocok untuk hiburan dan produktivitas.', 13999000),
(6, 'Smartphone Xiaomi Mi 11', '', 'https://asset.kompas.com/crops/2SsDneouQvXV4LuFDypES5ixscg=/0x0:1024x683/750x500/data/photo/2021/03/17/6051862111920.jpg', 'Xiaomi Mi 11 dilengkapi dengan layar AMOLED 6.81 inci, prosesor Snapdragon 888, dan kamera 108MP. Cocok untuk pengguna yang mencari ponsel dengan spesifikasi tinggi.', 9999000),
(7, 'Tablet Samsung Galaxy Tab S7', '', 'https://media.suara.com/pictures/970x544/2020/08/26/27435-samsung-galaxy-tab-s7.jpg', 'Galaxy Tab S7 memiliki layar 11 inci, prosesor Snapdragon 865+, dan S Pen yang responsif. Ideal untuk produktivitas dan hiburan.', 11999000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hg1fCEfZBCdAoVa5RCxYlm2kSVWQfJC1jfQr9tTh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 OPR/110.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNTl1WjEwbmFHQ2xoT25VMHNkQThZSVI5bUI0QXEyNGQyakJ3Y1p3YyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2hvbWUiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1719419615),
('iaJxACmgWQfx7YfvPFwBIAQeR4J7tF2NkRwvKBeh', 1, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidWFzeTdOS0lsSDBXWGtBbHZlNEoxTlZNaGozUTU5eUE1RWhKUXA5USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2hlY2tvdXQ/ZGVzY3JpcHRpb249TGFwdG9wJTIwRGVsbCUyMFhQUyUyMDEzJTIwbWVtaWxpa2klMjBwcm9zZXNvciUyMEludGVsJTIwaTclMkMlMjBSQU0lMjAxNkdCJTJDJTIwZGFuJTIwU1NEJTIwNTEyR0IuJTIwSWRlYWwlMjB1bnR1ayUyMGtlYnV0dWhhbiUyMGtvbXB1dGFzaSUyMHNlaGFyaS1oYXJpJTIwZGFuJTIwcGVrZXJqYWFuJTIwcHJvZmVzaW9uYWwuJmlkPTImbmFtZT1MYXB0b3AlMjBEZWxsJTIwWFBTJTIwMTMmcHJpY2U9MTk5OTkwMDAmdXJsX2ltYWdlPWh0dHBzJTNBJTJGJTJGaW1hZ2VzLnRva29wZWRpYS5uZXQlMkZpbWclMkZjYWNoZSUyRjcwMCUyRmF0dGFjaG1lbnQlMkYyMDIxJTJGMTElMkY5JTJGMTYyODM5NDU0JTJGMTYyODM5NDU0XzMyYTZkNDA3LWZiMWMtNGRiYS05MzgwLTQzMzRhNjYzNWJhNi5qcGclM0ZlY3QlM0Q0ZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1719483755),
('sAe4qi7HXmhIpPxyoCUBG9lhf6oQUDnUpR8AW3EB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQk5Dd3dvVFc4Wlcza3dEWDFzamh3b0lENW03WlRpV0J5ZDd6bnZOSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ3MDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NoZWNrb3V0P2Rlc2NyaXB0aW9uPVNtYXJ0cGhvbmUlMjBTYW1zdW5nJTIwR2FsYXh5JTIwUzIxJTIwZGlsZW5na2FwaSUyMGRlbmdhbiUyMGxheWFyJTIwNi4yJTIwaW5jaSUyQyUyMGthbWVyYSUyMDY0TVAlMkMlMjBkYW4lMjBiYXRlcmFpJTIwNDAwMG1BaC4lMjBDb2NvayUyMHVudHVrJTIwQW5kYSUyMHlhbmclMjBtZW5jYXJpJTIwcG9uc2VsJTIwZGVuZ2FuJTIwcGVyZm9ybWElMjB0aW5nZ2klMjBkYW4lMjBoYXJnYSUyMHRlcmphbmdrYXUuJmlkPTEmbmFtZT1TbWFydHBob25lJTIwU2Ftc3VuZyUyMEdhbGF4eSUyMFMyMSZwcmljZT0xMjk5OTAwMCZ1cmxfaW1hZ2U9aHR0cHMlM0ElMkYlMkZpbWFnZXMuc2Ftc3VuZy5jb20lMkZpcyUyRmltYWdlJTJGc2Ftc3VuZyUyRmlkLWZlYXR1cmUtZXBpYy0taW4tZXZlcnktd2F5LTM5MjE0MDc1NCUzRiUyNEZCX1RZUEVfQV9NT19KUEclMjQiO319', 1719420391);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uniq_product`
--

CREATE TABLE `uniq_product` (
  `id_product` varchar(255) NOT NULL,
  `judul_1` varchar(255) NOT NULL,
  `judul_2` varchar(255) NOT NULL,
  `judul_3` varchar(255) NOT NULL,
  `judul_4` varchar(255) NOT NULL,
  `judul_5` varchar(255) NOT NULL,
  `judul_6` varchar(255) NOT NULL,
  `desc_1` varchar(1000) NOT NULL,
  `desc_2` varchar(1000) NOT NULL,
  `desc_3` varchar(1000) NOT NULL,
  `desc_4` varchar(1000) NOT NULL,
  `desc_5` varchar(1000) NOT NULL,
  `desc_6` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `uniq_product`
--

INSERT INTO `uniq_product` (`id_product`, `judul_1`, `judul_2`, `judul_3`, `judul_4`, `judul_5`, `judul_6`, `desc_1`, `desc_2`, `desc_3`, `desc_4`, `desc_5`, `desc_6`) VALUES
('1', 'Desain dan Build Quality Premium', 'Layar Dynamic AMOLED 2X', 'Prosesor Exynos 2100/Snapdragon 888', 'Kamera yang Canggih', 'Daya Tahan Baterai yang Baik', 'Integrasi Ekosistem Samsung', 'Samsung Galaxy S21 memiliki desain yang elegan dengan pilihan warna yang menarik dan material yang berkualitas tinggi. Bagian belakangnya menggunakan material yang tahan lama, sementara rangkanya terbuat dari aluminium yang memberikan kesan premium dan kokoh saat digenggam.\r\n', 'Galaxy S21 dilengkapi dengan layar Dynamic AMOLED 2X berukuran 6,2 inci yang menawarkan kualitas gambar yang tajam, warna yang kaya, dan kontras yang mendalam. Refresh rate 120Hz memberikan pengalaman visual yang sangat halus, baik untuk gaming maupun browsing.\r\n', 'Ditenagai oleh prosesor Exynos 2100 (untuk pasar global) atau Snapdragon 888 (untuk pasar AS), Galaxy S21 menawarkan kinerja yang sangat cepat dan efisien. Ini membuat multitasking, gaming, dan penggunaan aplikasi berat menjadi lancar tanpa hambatan.\r\n', 'Samsung Galaxy S21 memiliki sistem kamera yang canggih dengan sensor utama 12MP, ultrawide 12MP, dan telefoto 64MP. Fitur-fitur seperti Space Zoom, Single Take, dan perekaman video 8K memungkinkan pengguna untuk mengambil foto dan video berkualitas tinggi dalam berbagai kondisi pencahayaan.\r\n', 'Dengan baterai berkapasitas 4000mAh, Galaxy S21 menawarkan daya tahan baterai yang memadai untuk penggunaan sehari penuh. Selain itu, fitur pengisian cepat, pengisian nirkabel, dan pengisian nirkabel terbalik menambah kenyamanan pengguna dalam menjaga daya perangkat.\r\n', 'Galaxy S21 mendapatkan dukungan software yang baik dengan pembaruan sistem operasi yang rutin dan cepat. Selain itu, integrasi dengan ekosistem Samsung, seperti Samsung DeX, Samsung Health, dan SmartThings, memberikan nilai tambah yang signifikan bagi pengguna yang sudah menggunakan produk-produk lain dari Samsung.'),
('2', 'Desain dan Build Quality Premium', 'Layar InfinityEdge', 'Prosesor Intel Generasi Terbaru', 'Daya Tahan Baterai yang Luar Biasa', 'Touchpad Berkualitas Tinggi', 'Konektivitas dan Fitur Keamanan', 'Dell XPS 13 dikenal dengan desainnya yang elegan dan material premium. Chassis terbuat dari aluminium yang kokoh dengan tampilan yang ramping dan modern. Bagian palm rest dari serat karbon atau kaca memberikan kenyamanan dan estetika yang menarik.\r\n', 'XPS 13 memiliki layar InfinityEdge yang hampir tanpa bezel, memberikan pengalaman visual yang imersif. Layar ini tersedia dalam resolusi Full HD+ dan 4K Ultra HD+, yang menawarkan kecerahan tinggi, warna akurat, dan detail tajam, ideal untuk pekerjaan kreatif dan hiburan.\r\n', 'Laptop ini ditenagai oleh prosesor Intel Core generasi terbaru, yang menawarkan performa cepat dan efisiensi energi yang baik. Kombinasi ini memungkinkan multitasking lancar, pemrosesan data yang cepat, dan kinerja yang andal untuk aplikasi berat.\r\n', 'Dengan berat yang ringan dan ukuran yang kompak, XPS 13 sangat portabel dan mudah dibawa kemana-mana. Daya tahan baterai yang panjang memastikan Anda dapat bekerja sepanjang hari tanpa perlu sering mengisi daya, membuatnya ideal untuk profesional yang sering bepergian.\r\n', 'Dell XPS 13 dilengkapi dengan keyboard yang nyaman dan responsif, dengan key travel yang cukup untuk mengetik dalam waktu lama. Touchpadnya besar dan akurat, mendukung multi-touch gestures, sehingga memudahkan navigasi dan produktivitas.\r\n', 'Meskipun berukuran kecil, XPS 13 menawarkan port yang cukup, termasuk Thunderbolt 4, USB-C, dan slot microSD. Fitur keamanan seperti pembaca sidik jari dan pengenalan wajah Windows Hello memberikan lapisan perlindungan tambahan untuk data Anda.'),
('3', 'Teknologi Noise Cancelling Terbaik di Kelasnya\r\n', 'Kualitas Suara Superior\r\n', 'Fitur Adaptive Sound Control\r\n', 'Kenyamanan Pemakaian yang Luar Biasa\r\n', 'Masa Pakai Baterai yang Panjang\r\n', 'Fitur Canggih dan Kontrol Sentuh\r\n', 'Sony WH-1000XM4 menawarkan teknologi noise cancelling yang sangat canggih, yang secara efektif menghilangkan suara latar belakang yang tidak diinginkan. Dengan prosesor QN1 dan algoritma baru, headphone ini mampu beradaptasi dengan lingkungan sekitar untuk memberikan pengalaman mendengarkan yang lebih tenang dan fokus.\r\n', 'Headphone ini dilengkapi dengan driver 40mm yang menghasilkan suara berkualitas tinggi dengan detail yang jernih dan bass yang dalam. Dukungan untuk codec LDAC memungkinkan streaming audio berkualitas tinggi melalui Bluetooth, sehingga Anda dapat menikmati musik dengan resolusi hampir sama dengan kualitas CD.\r\n', 'Adaptive Sound Control secara otomatis menyesuaikan pengaturan noise cancelling berdasarkan aktivitas dan lokasi Anda. Misalnya, saat berjalan, berlari, atau berada di transportasi umum, headphone ini akan menyesuaikan pengaturan untuk memberikan kenyamanan mendengarkan yang optimal tanpa mengorbankan kesadaran situasional.\r\n', 'Desain over-ear yang ergonomis dengan bantalan telinga yang lembut membuat WH-1000XM4 sangat nyaman digunakan untuk jangka waktu yang lama. Bobotnya yang ringan dan tekanan yang pas memastikan kenyamanan tanpa rasa lelah meskipun digunakan sepanjang hari.\r\n', 'Sony WH-1000XM4 menawarkan masa pakai baterai hingga 30 jam dengan fitur noise cancelling aktif. Fitur pengisian cepat juga tersedia, yang memberikan pemutaran hingga 5 jam hanya dengan 10 menit pengisian, memastikan Anda selalu siap mendengarkan kapan saja.\r\n', 'Headphone ini dilengkapi dengan kontrol sentuh yang intuitif pada earcup, memungkinkan Anda mengatur volume, mengubah lagu, atau menjawab panggilan telepon dengan mudah. Fitur seperti Speak-to-Chat secara otomatis menghentikan musik saat Anda mulai berbicara, dan sensor deteksi wear otomatis menghentikan pemutaran saat headphone dilepas.'),
('4', 'Desain dan Layar yang Lebih Besar\r\n', 'Ketahanan yang Lebih Baik\r\n', 'Pengisian Daya yang Lebih Cepat\r\n', 'Fitur Kesehatan yang Komprehensif\r\n', 'Pelacakan Aktivitas dan Kebugaran yang Lebih Baik\r\n', 'Integrasi dengan Ekosistem Apple\r\n', 'Apple Watch Series 7 memiliki layar yang lebih besar dan tepi yang lebih tipis dibandingkan dengan pendahulunya. Layar Retina Always-On yang lebih luas memudahkan membaca notifikasi dan informasi lainnya, serta memberikan pengalaman visual yang lebih imersif dan nyaman.\r\n', 'Series 7 dirancang dengan kaca depan yang lebih tahan retak, tahan debu dengan sertifikasi IP6X, dan tetap tahan air hingga kedalaman 50 meter. Ini membuatnya lebih tangguh dan cocok untuk berbagai aktivitas luar ruangan maupun olahraga air.\r\n', 'Pengisian daya Apple Watch Series 7 lebih cepat sekitar 33% dibandingkan dengan Series 6. Ini memungkinkan Anda mengisi daya hingga 80% dalam waktu sekitar 45 menit, sehingga Anda dapat lebih cepat kembali menggunakan jam tangan ini setelah pengisian singkat.\r\n', 'Apple Watch Series 7 dilengkapi dengan berbagai fitur kesehatan canggih, termasuk sensor detak jantung, pemantauan oksigen darah (SpO2), dan aplikasi EKG. Fitur-fitur ini membantu memantau kondisi kesehatan secara real-time dan memberikan peringatan dini jika terdeteksi sesuatu yang tidak normal.\r\n\r\n', 'Jam tangan ini mendukung berbagai jenis latihan dan aktivitas, termasuk berlari, bersepeda, berenang, dan yoga. Fitur pelacakan aktivitasnya memberikan data yang akurat tentang kalori yang terbakar, durasi latihan, dan tingkat kebugaran, membantu pengguna mencapai tujuan kebugaran mereka dengan lebih efektif.\r\n\r\n', 'Apple Watch Series 7 terintegrasi dengan mulus dengan ekosistem Apple lainnya, seperti iPhone, AirPods, dan layanan Apple seperti Apple Music dan Apple Pay. Ini memungkinkan pengguna untuk menerima panggilan, mengirim pesan, mendengarkan musik, dan melakukan pembayaran langsung dari pergelangan tangan mereka, meningkatkan kenyamanan dan produktivitas sehari-hari.'),
('5', 'Layar Liquid Retina dengan ProMotion\r\n', 'Chip M1 yang Kuat\r\n', 'Kamera Canggih dengan Teknologi LiDAR\r\n', 'Kompatibilitas dengan Aksesori\r\n', 'Dukungan 5G dan Wi-Fi 6\r\n', 'Penyimpanan dan Memori yang Luas\r\n', 'iPad Pro 11-inch memiliki layar Liquid Retina yang menawarkan warna yang akurat, kecerahan tinggi, dan teknologi ProMotion dengan refresh rate hingga 120Hz. Ini menghasilkan pengalaman visual yang sangat mulus dan responsif, ideal untuk segala hal mulai dari menonton video hingga menggambar dengan Apple Pencil.\r\n', 'Ditenagai oleh chip Apple M1, iPad Pro 11-inch menawarkan kinerja yang sangat cepat dan efisien. Chip ini memungkinkan multitasking yang lancar, rendering grafis yang cepat, dan kemampuan menjalankan aplikasi yang membutuhkan daya komputasi tinggi, menjadikan iPad Pro setara dengan banyak laptop kelas atas.\r\n\r\n', 'iPad Pro 11-inch dilengkapi dengan sistem kamera canggih yang mencakup kamera wide 12MP dan ultra-wide 10MP, serta pemindai LiDAR untuk pengukuran kedalaman yang presisi. Ini meningkatkan kemampuan augmented reality (AR) dan memungkinkan fotografi serta perekaman video yang berkualitas tinggi.\r\n\r\n', 'iPad Pro 11-inch mendukung berbagai aksesori, termasuk Apple Pencil generasi kedua dan Magic Keyboard. Apple Pencil memungkinkan pengambilan catatan dan ilustrasi yang presisi, sementara Magic Keyboard menambahkan kemampuan mengetik yang nyaman dan trackpad yang fungsional, menjadikan iPad Pro perangkat produktivitas yang luar biasa.\r\n', 'Dengan dukungan untuk jaringan 5G, iPad Pro 11-inch menawarkan kecepatan internet yang sangat cepat saat berada di luar jangkauan Wi-Fi. Selain itu, dukungan untuk Wi-Fi 6 memastikan koneksi yang lebih cepat dan stabil saat terhubung ke jaringan nirkabel, meningkatkan produktivitas dan hiburan tanpa gangguan.\r\n\r\n', 'iPad Pro 11-inch tersedia dengan opsi penyimpanan mulai dari 128GB hingga 2TB, memungkinkan pengguna untuk menyimpan banyak aplikasi, dokumen, foto, dan video. Dengan RAM hingga 16GB (tergantung pada model), perangkat ini dapat menangani tugas-tugas berat dan multitasking tanpa hambatan, menjadikannya pilihan ideal untuk profesional kreatif dan bisnis.'),
('6', 'Layar AMOLED dengan Resolusi Tinggi\r\n', 'Performa Tinggi dengan Prosesor Snapdragon 888\r\n', 'Kamera Utama 108MP\r\n', 'Desain Premium dan Elegan\r\n', 'Baterai Besar dengan Pengisian Cepat\r\n', 'Audio Stereo Harman Kardon\r\n', 'Xiaomi Mi 11 memiliki layar AMOLED 6,81 inci dengan resolusi WQHD+ (3200 x 1440) dan refresh rate 120Hz. Layar ini menawarkan kualitas gambar yang tajam, warna yang hidup, dan kontras yang mendalam, serta dilindungi oleh Corning Gorilla Glass Victus untuk ketahanan ekstra.\r\n', 'Ditenagai oleh chipset Qualcomm Snapdragon 888, Xiaomi Mi 11 menawarkan kinerja yang sangat cepat dan efisien. Chipset ini mendukung tugas-tugas berat seperti gaming, multitasking, dan pemrosesan data dengan lancar, serta mendukung konektivitas 5G untuk kecepatan internet yang sangat cepat.\r\n', 'Kamera utama 108MP di Xiaomi Mi 11 memungkinkan pengambilan foto dengan resolusi sangat tinggi dan detail yang luar biasa. Dilengkapi dengan teknologi Super Pixel 9-in-1, kamera ini menghasilkan gambar yang lebih terang dan jernih, bahkan dalam kondisi cahaya rendah. Kamera ini juga mendukung perekaman video 8K untuk kualitas video yang sangat tinggi.\r\n', 'Xiaomi Mi 11 memiliki desain yang ramping dan elegan dengan bodi yang terbuat dari kaca dan bingkai logam. Desainnya yang ergonomis membuatnya nyaman digenggam dan digunakan sehari-hari, serta tersedia dalam berbagai pilihan warna yang menarik.\r\n', 'Dilengkapi dengan baterai berkapasitas 4600mAh, Xiaomi Mi 11 menawarkan daya tahan baterai yang cukup untuk penggunaan sepanjang hari. Fitur pengisian cepat 55W memastikan baterai dapat diisi penuh dalam waktu singkat. Selain itu, perangkat ini juga mendukung pengisian nirkabel 50W dan pengisian nirkabel terbalik 10W.\r\n', 'Mi 11 dilengkapi dengan speaker stereo yang disetel oleh Harman Kardon, menawarkan kualitas audio yang superior untuk pengalaman mendengarkan yang lebih mendalam dan menyenangkan. Baik untuk mendengarkan musik, menonton film, atau bermain game, kualitas audio yang dihasilkan sangat memuaskan.'),
('7', 'Layar LTPS TFT dengan Refresh Rate 120Hz\r\n', 'Performa Tinggi dengan Prosesor Snapdragon 865+\r\n', 'S Pen yang Ditingkatkan\r\n', 'Baterai Besar dengan Pengisian Cepat\r\n', 'Audio Quad Speaker dengan AKG dan Dolby Atmos\r\n', 'Kompatibilitas dengan Keyboard dan Samsung DeX\r\n', 'Samsung Galaxy Tab S7 memiliki layar LTPS TFT berukuran 11 inci dengan resolusi 2560 x 1600. Refresh rate 120Hz membuat pengalaman visual lebih halus dan responsif, sangat ideal untuk gaming, menonton video, dan kegiatan produktif lainnya.\r\n', 'Ditenagai oleh chipset Qualcomm Snapdragon 865+, Galaxy Tab S7 menawarkan kinerja yang sangat cepat dan efisien. Prosesor ini mendukung multitasking yang lancar, aplikasi berat, dan gaming dengan grafis tinggi tanpa lag, memberikan pengalaman penggunaan yang sangat memuaskan.\r\n', 'Galaxy Tab S7 dilengkapi dengan S Pen terbaru yang memiliki latensi sangat rendah, membuat pengalaman menulis dan menggambar lebih alami dan responsif. S Pen juga mendukung berbagai fitur produktivitas seperti Air Actions dan penulisan langsung ke teks.\r\n', 'Tablet ini dilengkapi dengan baterai berkapasitas 8000mAh yang mampu bertahan lama untuk penggunaan sehari penuh. Fitur pengisian cepat 45W memungkinkan Anda mengisi daya tablet dengan cepat, sehingga Anda bisa kembali menggunakannya tanpa harus menunggu lama.\r\n', 'Galaxy Tab S7 memiliki sistem audio quad speaker yang disetel oleh AKG dan didukung oleh Dolby Atmos. Ini memberikan kualitas suara yang jernih, kaya, dan imersif, baik saat menonton film, mendengarkan musik, atau bermain game.\r\n\r\n', 'Tablet ini mendukung aksesori keyboard yang dapat dihubungkan untuk meningkatkan produktivitas, menjadikannya pengganti laptop yang potensial. Fitur Samsung DeX memungkinkan Anda mengubah antarmuka tablet menjadi pengalaman desktop yang lebih lengkap, mendukung multitasking yang lebih efisien.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aziz', 'aziz@gmail.com', NULL, '$2y$12$b68WizX0hxzJ.sn.SrKtxuDJxGIqDtZAysqUwrDVuOgFh9rjZUPmG', NULL, '2024-06-13 10:20:26', '2024-06-13 10:20:26'),
(2, 'sir', 'sir@gmail.com', NULL, '$2y$12$8dk5../vx3Ukv5wbsFw.XunFHBjtSlfzZueOgt.o8mWVrgTdb91Qi', NULL, '2024-06-18 07:35:29', '2024-06-18 07:35:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
