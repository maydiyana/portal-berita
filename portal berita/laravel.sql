-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2023 pada 08.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'UI UX', 'ui-ux', '2023-09-20 07:01:40', '2023-09-20 07:01:40'),
(2, 'Computer', 'com', '2023-09-20 07:01:59', '2023-09-20 07:01:59'),
(3, 'Hoodie', 'hoodie', '2023-10-07 04:10:59', '2023-10-07 04:10:59'),
(4, 'Celana', 'celana', '2023-10-08 03:54:28', '2023-10-08 03:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `title`, `created_at`, `updated_at`) VALUES
(7, 'olahraga', '2023-09-20 06:57:55', '2023-09-20 06:57:55'),
(8, 'valorant', '2023-09-20 07:01:21', '2023-09-20 07:01:21'),
(9, 'Taanggal 20 Restock', '2023-10-08 03:55:01', '2023-10-08 03:55:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_23_104327_create_posts_table', 1),
(6, '2023_08_23_132337_create_catagories_table', 1),
(7, '2023_09_16_172833_data_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `exc` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `catagory_id`, `user_id`, `slug`, `exc`, `image`, `body`, `created_at`, `updated_at`) VALUES
(7, 'Segini Lhoo Gaji Para Programmer', 2, 4, 'segini-lhoo-gaji-para-programmer', 'Gaji programmer tentu akan berbeda antara satu perusahaan dengan perusahaan lain. Ada beberapa hal y...', 'post-images/HJa48jzdRTutR2zkxBsi7RaH8CXZOKmCBhua6c4z.jpg', '<div>Gaji <em>programmer</em> tentu akan berbeda antara satu perusahaan dengan perusahaan lain. Ada beberapa hal yang menyebabkan perbedaan gaji ini, seperti ukuran perusahaan, status karyawan, dan banyak/sedikitnya tugas yang diberikan.<br><br></div><div>Dikutip dari <strong>Salary Explorer</strong>, <em>programmer</em> di Indonesia memiliki gaji rata-rata 12,8 juta rupiah per bulan, dengan rentang gaji terkecil 5,8 juta rupiah dan gaji terbesar mencapai 20,3 juta rupiah.<br><br></div><div>Sementara <strong>Glassdoor</strong> mengungkapkan bahwa <em>programmer</em> pemula (pengalaman 0-1 tahun) memiliki rata-rata gaji 5,3 juta rupiah setiap bulan.<br><br></div>', '2023-10-07 04:04:03', '2023-10-07 04:04:03'),
(8, 'Inilah Daftar Bahasa Pemograman Favorit', 1, 4, 'inilah-daftar-bahasa-pemograman-favorit', 'Ada banyak sekali bahasa pemrograman yang bisa digunakan saat ini. Berikut penjelasan contoh-contoh...', 'post-images/yeSp3AuJ7p1K75nlDClqwr0euAArf1d0sWMODr18.jpg', '<div>Ada banyak sekali bahasa pemrograman yang bisa digunakan saat ini. Berikut penjelasan contoh-contoh bahasa pemrograman.<br><br>1. Java<br>Bahasa pemrograman yang pertama yakni Java. Sedikit informasi, bahasa pemrograman Java sudah digunakan di lebih dari 3 miliar perangkat di seluruh dunia. Pada umumnya Java dipakai untuk aplikasi di smartphone, aplikasi desktop, dan pengembangan situs.<br><br>2. Python<br>Bahasa pemrograman kedua yang sangat populer adalah Python. Bahasa pemrograman yang satu ini sudah berkembang sejak tahun 1980-an dan hingga kini masih banyak dibutuhkan oleh para programer, terutama untuk melakukan coding secara dinamis.<br><br>3. JavaScript<br>Selain itu, ada juga bahasa pemrograman yakni JavaScript yang cukup populer digunakan untuk mengelola website. Saking populernya, hampir 97% situs di seluruh dunia menggunakan bahasa pemrograman JavaScript.<br><br>4. HTML<br>HTML (HyperText Markup Language) adalah sebuah bahasa pemrograman markup yang digunakan untuk membuat halaman web, sehingga dapat menampilkan berbagai informasi yang dibutuhkan di dalam sebuah browser internet.<br><br>HTML merupakan standar internet yang didefinisikan dan dikendalikan penggunaannya oleh World Wide Web Consortium (W3C). HTML berisikan kode-kode tag yang menginstruksikan browser untuk menghasilkan tampilan.<br><br>5. PHP<br>PHP atau PHP Hypertext Preprocessor adalah bahasa pemrograman yang juga banyak digunakan saat ini. PHP sering dipakai untuk membuat website yang dinamis, meskipun tidak menutup kemungkinan digunakan juga untuk pemakaian yang lain. PHP biasanya berjalan pada sistem operasi Linux, tapi juga bisa dijalankan dengan hosting di Windows.<br><br>6. ASP<br>Active Server Pages atau ASP adalah salah satu bahasa pemrograman website untuk menciptakan halaman website yang dinamis. ASP merupakan salah satu produk yang disediakan oleh Microsoft, yang mana merupakan server side scripting yang bekerja pada server website.<br><br>7. CSS<br>CSS atau Cascading Style Sheets adalah bahasa stylesheet yang digunakan untuk mengatur tampilan dokumen yang ditulis dalam bahasa markup. Penggunaan CSS yang paling umum adalah untuk memformat halaman web yang ditulis dengan HTML dan XHTML/XML.<br><br>8. Perl<br>Perl adalah bahasa pemrograman mesin dengan sistem operasi Unix, seperti SunOS, Linux, BSD, dan HP-UX. Selain itu, Perl juga tersedia untuk sistem operasi lainnya seperti DOS, Windows, PowerPC, BeOS, VMS, EBCDIC, dan PocketPC.<br><br>9. XML<br>Extensible Markup Language atau disebut juga XML adalah bahasa markup serbaguna yang direkomendasikan oleh World Wide Web Consortium (W3C) untuk mendeskripsikan berbagai macam data. Selain itu, XML menggunakan tags markup seperti halnya di HTML, tetapi penggunaannya tidak terbatas pada tampilan halaman website saja.<br><br>10. WML<br>Wireless Markup Language atau disingkat WML adalah bahasa pemrograman yang digunakan dalam aplikasi berbasis XML (Extensible Markup Language). Sebagai informasi, WML adalah bahasa pemrograman yang digunakan dalam aplikasi wireless. Karena itu, WML bisa dibilang hampir sama dengan HTML tapi hanya berfungsi pada perangkat nirkabel.<br><br>Nah, itu dia penjelasan mengenai 10 bahasa pemrograman beserta fungsi, jenis, dan contohnya. Semoga artikel ini dapat membantu kamu yang sedang belajar tentang bahasa pemrograman, detikers.<br><br></div>', '2023-10-07 04:06:44', '2023-10-07 04:06:44'),
(9, 'Hoodie H&M Warna Hitam Size XL', 3, 4, 'hoodie-h&m-warna-hitam-size-xl', 'Kata hoodie berasal dari Bahasa Inggris “hood” yang artinya adalah tudung atau penutup kepala. Dari...', 'post-images/duJkqI1BcNmCBT55uPQhBnUCR9A2qAsjMNzYdlHN.jpg', '<div>Kata hoodie berasal dari Bahasa Inggris “hood” yang artinya adalah tudung atau penutup kepala. Dari sini, Anda sudah mendapatkan jawaban apa itu hoodie dan cirinya yang pertama, yaitu memiliki penutup kepala</div>', '2023-10-07 04:13:08', '2023-10-07 04:16:37'),
(10, 'Jaket H&M Ukuran L Hitam', 3, 4, 'jaket-h&m-ukuran-l-hitam', '\"Kemeja Jaket Shacket merupakan kemeja dengan konsep seperti Jaket Semi Parka yang ketika digunakan...', 'post-images/Q5eiZUzt0lIsJI3RWsBNq4KUk5WfEKL67MItnX9J.jpg', '<div>\"Kemeja Jaket Shacket merupakan kemeja dengan konsep seperti Jaket Semi Parka yang ketika digunakan cocok untuk sehari-hari maupun acara formal.<br><br>Dengan bahan Fleece yang tidak terlalu tebal dan tidak tipis membuat kemeja ini menjadi lebih hangat, tidak panas dan bisa dijadikan Sweater / Jaket.<br><br># KELEBIHAN BAHAN FLEECE<br>&gt; Kain fleece dapat bekerja dengan baik sebagai insulator tubuh meski dalam kondisi basah.<br>&gt; Lebih cepat kering.<br>&gt; Bahan fleece cenderung bersifat elastis.<br>&gt; Kain fleece memiliki kemampuan breathability yang cukup baik sehingga memungkinkan terjadinya sirkulasi udara pada saat digunakan.<br><br>ize Chart:<br>Size M&nbsp;<br>Lebar Dada&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 47 CM&nbsp;<br>Panjang Badan&nbsp; &nbsp; : 67 CM&nbsp;<br>Panjang Tangan&nbsp; : 56 CM&nbsp;<br>Bahu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 43 CM<br><br><br>Size L&nbsp;<br>Lebar Dada&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 53 CM&nbsp;<br>Panjang Badan&nbsp; &nbsp; : 72 CM&nbsp;<br>Panjang Tangan&nbsp; : 60 CM&nbsp;<br>Bahu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 44 CM<br><br><br>XL&nbsp;<br>Lebar Dada&nbsp; &nbsp; &nbsp; &nbsp;: 53 CM&nbsp;<br>Panjang Badan&nbsp; : 76 CM<br>Panjang Tangan : 61 CM&nbsp;<br>Bahu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 44 CM&nbsp;<br><br><br>XXL &nbsp;<br>Lebar Dada&nbsp; &nbsp; &nbsp; &nbsp;: 55 CM&nbsp;<br>Panjang Badan&nbsp; : 77 CM<br>Panjang Tangan : 62 CM&nbsp;<br>Bahu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 50 CM<br><br>Size L Bisa digunakan untuk tinggi badan up to 165\"</div>', '2023-10-07 04:15:21', '2023-10-07 04:15:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'maydiyana', 'maydiyana12', 'myd@gmail.com', '$2y$10$9x38Jv4yWmLPZdseLawDjOI17HH65OBdeFQ5sd4s8n0DqQQvISaM6', NULL, '2023-09-20 06:56:48', '2023-09-20 06:56:48'),
(3, 'abdul', 'abdul123', 'itsmaydiyana@gmail.com', '$2y$10$arEBWdnXVKGFayYf9UHwG.gZCChUOqbdrZRrEE1fLWDASw5tcRFB2', NULL, '2023-09-20 07:00:42', '2023-09-20 07:00:42'),
(4, 'azizah', 'azizah', 'azz@gmail.com', '$2y$10$QVCU33px6N.DnAYgEkFd/uUziZEiIWKq6tCjBn.NjDYSxBlzK6GDO', NULL, '2023-09-25 23:37:41', '2023-09-25 23:37:41'),
(5, 'axsa', 'salsa', 'a@gmail.com', '$2y$10$RoKbFDweOWmlMCzrpEWL8uRhTzoWP5xvQpNhgY5H5ZtdmYV7hwOvS', NULL, '2023-09-28 05:17:18', '2023-09-28 05:17:18'),
(6, 'asd', 'dsa', 'asd@gmail.com', '$2y$10$t.L4jAKlH1Ph66V.ilKHlORuHZsfBCKpRk5q1rqS4KZzdXeMCcOc2', NULL, '2023-10-07 03:04:24', '2023-10-07 03:04:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catagories_name_unique` (`name`),
  ADD UNIQUE KEY `catagories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT untuk tabel `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
