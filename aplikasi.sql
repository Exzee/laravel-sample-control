-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2022 pada 18.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `form_laborat`
--

CREATE TABLE `form_laborat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_form_laborat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample_masuk_id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_kirim_laborat` date NOT NULL,
  `status_laborat` enum('Diproses','Selesai','Batal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Diproses',
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_laporan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_selesai_laborat` date DEFAULT NULL,
  `status_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `form_laborat`
--

INSERT INTO `form_laborat` (`id`, `kode_form_laborat`, `sample_masuk_id`, `karyawan_id`, `tanggal_kirim_laborat`, `status_laborat`, `keterangan`, `kode_laporan`, `tanggal_selesai_laborat`, `status_sample`, `created_at`, `updated_at`) VALUES
(1, 'FL-80119', 29, 5, '2020-10-07', 'Batal', 'Eum culpa sint harum voluptatibus labore aut id minima. Doloribus maiores culpa perspiciatis eos qui totam repudiandae facilis. Deserunt omnis aliquam nihil et nam in quos.', 'LAB-26966', '2021-08-20', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(2, 'FL-75230', 18, 2, '2021-07-11', 'Diproses', 'Nihil ad suscipit modi et. Aliquid doloribus autem voluptas et libero mollitia at. Consequatur sed ea nobis nulla suscipit. Dolores alias quibusdam at similique molestiae.', 'LAB-41286', '2020-10-03', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(3, 'FL-55987', 33, 1, '2020-12-17', 'Batal', 'Id sint soluta ut dolores repudiandae molestias molestiae. Eaque velit dolorem possimus cumque dignissimos quidem. Aperiam repellendus commodi quo et qui qui et distinctio.', 'LAB-55437', '2021-01-11', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(4, 'FL-38714', 46, 2, '2020-09-08', 'Batal', 'Magni occaecati perspiciatis et quasi sit nesciunt. Culpa omnis assumenda nihil rerum consequuntur. Non voluptatem ex rerum animi.', 'LAB-83770', '2021-02-03', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(5, 'FL-97001', 57, 2, '2021-04-05', 'Diproses', 'Qui mollitia est aliquam eos velit iure. Dolorem sit eos quaerat dolorum. Provident harum dolore nam.', 'LAB-77684', '2020-10-14', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(6, 'FL-94210', 21, 3, '2021-01-21', 'Selesai', 'Sit omnis illum possimus quod amet expedita delectus. Totam nostrum perspiciatis illo suscipit sit iste. Quis earum aspernatur asperiores quia facilis iusto.', 'LAB-37629', '2021-04-25', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(7, 'FL-71283', 2, 5, '2021-07-02', 'Diproses', 'Consequuntur illo laborum neque eos voluptas similique ut. Voluptas iusto officiis autem. Maiores voluptatem facilis repudiandae cumque.', 'LAB-93288', '2021-02-11', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(8, 'FL-25382', 51, 6, '2021-03-10', 'Diproses', 'Cumque qui nesciunt rerum hic voluptatem aspernatur adipisci. Fugiat dolore numquam quibusdam et illum doloremque. Quo doloremque dolor veniam et. Qui et non est sint ipsa sunt deleniti.', 'LAB-35447', '2020-09-28', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(9, 'FL-44413', 37, 9, '2021-02-24', 'Diproses', 'Velit consequatur est officia nemo. Ex tenetur aut est quos aliquam. Natus laboriosam aut autem ipsam. Eum vero ea molestiae id.', 'LAB-21406', '2021-06-09', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(10, 'FL-17102', 27, 2, '2020-12-15', 'Batal', 'Sequi cupiditate quia rerum odit. Hic in non et a atque eos vel. Non consequuntur voluptas libero explicabo molestiae quam earum.', 'LAB-22595', '2021-06-29', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(11, 'FL-08289', 4, 6, '2021-04-01', 'Batal', 'Cupiditate explicabo aperiam rerum nesciunt ratione voluptatum voluptatem quos. Repellendus enim eum ea aut et natus. Aut ullam deserunt vero magni et magnam adipisci.', 'LAB-72536', '2021-03-02', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(12, 'FL-18132', 24, 10, '2021-05-06', 'Batal', 'Voluptas eum et numquam sed debitis esse et impedit. Veniam id voluptate velit accusamus autem nobis qui. Dolor beatae expedita et quia consectetur.', 'LAB-06011', '2020-10-09', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(13, 'FL-88522', 21, 8, '2020-11-12', 'Diproses', 'Id sapiente dolores qui quo eum. Doloremque ut et sit excepturi. Dolores aspernatur officia labore ab incidunt dignissimos omnis. Repellat vero aut fugit nostrum fugit rerum placeat.', 'LAB-87365', '2021-07-15', 'Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(14, 'FL-12902', 48, 2, '2021-01-16', 'Batal', 'Culpa ut sit saepe mollitia et sunt quia. Ullam quo laborum repellendus est praesentium officia impedit.', 'LAB-47699', '2021-03-12', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(15, 'FL-59378', 29, 5, '2021-07-16', 'Diproses', 'Voluptas vel animi mollitia veritatis non accusantium molestiae. Est perferendis molestiae quaerat dolores. Cum nobis vel cupiditate et saepe quis.', 'LAB-23685', '2021-08-28', 'Tidak Kembali', '2022-09-05 16:53:30', '2022-09-05 16:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_badge` int(11) NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Laki-Laki',
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` enum('Menikah','Belum Menikah') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Menikah',
  `jabatan` enum('Operator','Supervisor','Superintendent','Manager','General Manager','Deputy General Manager') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Operator',
  `status_jabatan` enum('Tetap','Kontrak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tetap',
  `foto_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `no_badge`, `nama_karyawan`, `jenis_kelamin`, `tanggal_lahir`, `email`, `no_hp`, `agama`, `tahun_masuk`, `status_pernikahan`, `jabatan`, `status_jabatan`, `foto_karyawan`, `created_at`, `updated_at`) VALUES
(1, 93846, 'Waluyo Abyasa Siregar', 'Perempuan', '1995-08-22', 'garang.yuliarti@example.net', '(+62) 414 9982 582', 'Budha', '0093', 'Menikah', 'Operator', 'Kontrak', 'Avatars/ndllB7TZIvuWGk3rHbKxDouhZu20iw1gQIJyevgv.png', '2022-09-05 16:53:29', '2022-10-20 10:21:45'),
(2, 78175, 'Zelda Aryani', 'Laki-Laki', '1992-11-28', 'zamira42@example.net', '0694 2824 1247', 'Hindu', '0196', 'Belum Menikah', 'Deputy General Manager', 'Tetap', 'Avatars/fZQMTdXDNGF4Ez7n5sjsQUr9aZVY3yuvCYIG2Sr9.png', '2022-09-05 16:53:29', '2022-10-20 10:21:57'),
(3, 58001, 'Padma Almira Lailasari S.Sos', 'Perempuan', '1995-09-22', 'omandasari@example.org', '0596 5383 221', 'Budha', '9105', 'Belum Menikah', 'Deputy General Manager', 'Tetap', 'Avatars/0F2ZGSrjXegIwG3gZIA34qP8p7bLkeBlm07fNwRb.png', '2022-09-05 16:53:29', '2022-10-20 10:22:08'),
(4, 2059, 'Ratih Pratiwi S.Pt', 'Laki-Laki', '2002-01-18', 'vuyainah@example.org', '0210 3606 8435', 'Katolik', '4866', 'Belum Menikah', 'Supervisor', 'Kontrak', 'Avatars/vOgyr5g7OJAaM7IEckaJlfe4PUSU9JawFIg4n23b.png', '2022-09-05 16:53:29', '2022-10-20 10:22:25'),
(5, 77957, 'Ifa Wulandari', 'Perempuan', '1992-11-24', 'zulaikha72@example.net', '0498 0583 2012', 'Budha', '0739', 'Belum Menikah', 'Operator', 'Kontrak', 'Avatars/EaVZi6COTZOPjrEZ3jEmIdijdkVZmGoTo5IoNcEU.jpg', '2022-09-05 16:53:29', '2022-10-20 10:22:39'),
(6, 4216, 'Lala Kania Zulaika S.Sos', 'Laki-Laki', '1999-02-01', 'olivia75@example.com', '0982 6379 258', 'Islam', '6433', 'Menikah', 'Superintendent', 'Kontrak', 'Avatars/s0Z6EfIguXZhI1lo92obaJCIgaMWVadCfPoeBMXg.png', '2022-09-05 16:53:29', '2022-10-20 10:22:52'),
(7, 84222, 'Siti Ilsa Hariyah', 'Perempuan', '1995-05-27', 'elma67@example.org', '(+62) 21 9314 4073', 'Hindu', '7823', 'Belum Menikah', 'Supervisor', 'Kontrak', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(8, 67468, 'Ayu Handayani', 'Laki-Laki', '1995-11-24', 'dinda57@example.com', '0562 1080 089', 'Kristen', '9502', 'Menikah', 'Supervisor', 'Kontrak', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(9, 64157, 'Aurora Rika Hastuti', 'Laki-Laki', '1995-01-20', 'lili06@example.org', '0324 6146 499', 'Katolik', '3232', 'Belum Menikah', 'General Manager', 'Kontrak', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(10, 60905, 'Kasim Nashiruddin M.Kom.', 'Laki-Laki', '2000-12-20', 'vsaputra@example.com', '(+62) 420 0292 0979', 'Islam', '0421', 'Menikah', 'Supervisor', 'Kontrak', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_10_191648_create_karyawan_table', 1),
(6, '2022_07_19_122951_create_sample_masuk_table', 1),
(7, '2022_07_21_111601_create_sample_keluar_table', 1),
(8, '2022_07_23_163411_create_form_laborat_table', 1),
(9, '2022_08_12_002204_add_role_user_to_users_table', 1),
(10, '2022_08_12_095825_add_keterangan_to_form_laborat_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `sample_keluar`
--

CREATE TABLE `sample_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_sample_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expedisi_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kirim` date NOT NULL,
  `segment` enum('Domestic','Export') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Domestic',
  `jenis_sample` enum('Complaint','Market') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Complaint',
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_sample` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_sample_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sample_keluar`
--

INSERT INTO `sample_keluar` (`id`, `kode_sample_keluar`, `expedisi_pengiriman`, `tanggal_kirim`, `segment`, `jenis_sample`, `customer`, `product`, `lot_number`, `deskripsi_sample`, `foto_sample_keluar`, `created_at`, `updated_at`) VALUES
(1, 'SK-36098', 'UD Hastuti Yulianti (Persero) Tbk', '2022-06-04', 'Export', 'Complaint', 'CV Nugroho', 'Molestiae quae iusto cupiditate.', '36522', 'Atque quibusdam adipisci voluptatem sunt omnis. Ut suscipit enim ipsum maiores rerum. Nesciunt debitis aut aut non laboriosam et.', NULL, '2022-09-05 16:53:30', '2022-09-10 13:22:49'),
(2, 'SK-00496', 'PT Rahayu', '2022-05-19', 'Export', 'Complaint', 'PD Utami Safitri (Persero) Tbk', 'Repellendus sed quam.', '26978', 'Asperiores incidunt et optio dolorum asperiores ea. Ipsum dolores unde quas et aut. Quia illum explicabo necessitatibus nulla.', NULL, '2022-09-05 16:53:30', '2022-09-10 13:23:10'),
(3, 'SK-80870', 'Perum Palastri Utami', '2020-01-19', 'Domestic', 'Complaint', 'PT Wijayanti Anggraini Tbk', 'Odio quod.', '25043', 'Dicta sunt error eos corrupti id eum. Sit eveniet eos tempore perspiciatis laboriosam. Nostrum nemo itaque aut natus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(4, 'SK-59720', 'CV Namaga Tbk', '2022-06-06', 'Export', 'Market', 'Perum Permata', 'Cumque cupiditate.', '32339', 'Quisquam voluptates corporis eaque placeat laudantium. Omnis ea quo consequatur eum velit possimus vel id. Cupiditate laborum deleniti qui atque.', NULL, '2022-09-05 16:53:30', '2022-09-10 13:30:00'),
(5, 'SK-36386', 'PT Simanjuntak', '2020-08-18', 'Domestic', 'Market', 'CV Dabukke', 'Iste architecto placeat.', '12054', 'Amet rem provident perspiciatis consequatur voluptate ea ipsum. Neque rerum modi explicabo doloribus. Quas earum nisi beatae omnis. Quidem nihil ut quia ipsam iste iste qui.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(6, 'SK-89187', 'PD Hardiansyah Fujiati', '2019-06-20', 'Domestic', 'Market', 'PD Habibi Wibowo Tbk', 'Optio et quisquam eaque eligendi.', '94214', 'Qui et quisquam occaecati. Nostrum earum perferendis aut ut ratione maxime quibusdam dolorem. Eum deserunt provident quas ipsam quia. Eum eos similique et odio sapiente in laudantium consectetur.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(7, 'SK-58504', 'PT Hassanah', '2020-02-20', 'Export', 'Complaint', 'CV Agustina Damanik', 'Autem similique.', '93542', 'Nobis totam quo cum et animi iste doloremque. Provident quaerat deserunt enim fugiat. Mollitia voluptas id ducimus est.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(8, 'SK-01342', 'CV Suartini Lailasari', '2019-04-10', 'Export', 'Market', 'Perum Saragih Wulandari Tbk', 'Sint.', '20991', 'Quia dolorum cumque molestiae ducimus qui facere. Saepe vitae est minima aspernatur provident iste quo id. Debitis consequuntur est accusantium et.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(9, 'SK-26134', 'PT Wijayanti Prasetya Tbk', '2019-09-17', 'Export', 'Complaint', 'UD Pangestu Astuti', 'Porro.', '81962', 'Nesciunt corrupti culpa laboriosam repudiandae odio odio. Non voluptate tenetur doloremque nesciunt quis eos. Consequatur omnis itaque quia. Quis temporibus nobis molestiae aut eligendi expedita.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(10, 'SK-97661', 'Perum Laksita Nurdiyanti Tbk', '2019-01-25', 'Export', 'Market', 'PT Rahimah Tbk', 'Eos dolor.', '61861', 'Nihil libero minima modi adipisci vero. Dignissimos eos nisi sunt rem ducimus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(11, 'SK-40347', 'Perum Suartini', '2019-12-16', 'Export', 'Complaint', 'PD Narpati Prasetya', 'Ipsa animi.', '99112', 'Ratione vero atque quos. Saepe enim eum tenetur doloribus ad ea quia. Consectetur dolores quis consectetur et laboriosam. Eveniet mollitia nobis ex ut.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(13, 'SK-75456', 'Perum Namaga Anggriawan (Persero) Tbk', '2019-10-24', 'Export', 'Complaint', 'UD Dabukke', 'Optio aut consequatur quisquam.', '09767', 'Totam atque veniam est et rem porro. Reprehenderit et quidem dignissimos aliquid. Magnam aut aut cumque doloribus at molestiae. Minus est consequatur ea odio.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(14, 'SK-34889', 'PT Namaga (Persero) Tbk', '2019-10-17', 'Domestic', 'Market', 'Perum Suartini', 'Aut.', '46628', 'Aliquam itaque quos consequuntur. Dignissimos quis praesentium et accusamus et.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(15, 'SK-51008', 'CV Salahudin', '2020-03-31', 'Domestic', 'Market', 'PT Situmorang (Persero) Tbk', 'Ipsam voluptatem.', '72221', 'Dolor laudantium quis consequatur et provident. Rerum quam tempore doloribus error impedit ut quos qui. Molestiae laborum labore nemo voluptas quo.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sample_masuk`
--

CREATE TABLE `sample_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_sample_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terima` date NOT NULL,
  `segment` enum('Domestic','Export') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Domestic',
  `jenis_sample` enum('Complaint','Market') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Complaint',
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_sample` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_sample_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sample_masuk`
--

INSERT INTO `sample_masuk` (`id`, `kode_sample_masuk`, `nama_pengirim`, `tanggal_terima`, `segment`, `jenis_sample`, `customer`, `product`, `lot_number`, `problem`, `deskripsi_sample`, `foto_sample_masuk`, `created_at`, `updated_at`) VALUES
(1, 'SM-49006', 'Bakidin Tampubolon', '2021-03-11', 'Export', 'Complaint', 'PD Padmasari Hutasoit', 'Delectus non consequatur voluptas.', '01745', 'Nobis minus molestiae.', 'Reprehenderit perferendis quia voluptates ducimus aut occaecati. Dolor voluptas et quisquam rem. Enim sapiente et et aperiam eveniet. Vitae ea illum ut eos iure.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(2, 'SM-15362', 'Warji Rajasa S.Pt', '2021-07-24', 'Domestic', 'Complaint', 'CV Farida Tbk', 'Et.', '89292', 'Officia quidem odio.', 'Repudiandae ut et aliquam veniam est sed rerum. Iusto dolores aut esse enim. Adipisci dolor quod sed sed repudiandae consequatur earum deleniti.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(3, 'SM-51804', 'Danu Sitompul', '2021-08-29', 'Export', 'Complaint', 'CV Prakasa Utama Tbk', 'Dolor accusamus.', '09712', 'Corrupti at repellat.', 'Quae expedita cum omnis voluptatum quos aut est. Et at minima iusto et et. Sunt esse provident corrupti necessitatibus rerum iure.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(4, 'SM-69743', 'Elma Oktaviani', '2020-10-25', 'Export', 'Complaint', 'PT Mandala Maheswara', 'Odio.', '66236', 'Quis eos facilis.', 'Aut eius magnam vel. Tempore voluptatem culpa harum eligendi facilis. Eos similique sunt expedita ut magni vel.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(5, 'SM-62351', 'Radit Megantara', '2021-06-03', 'Domestic', 'Market', 'Perum Padmasari Situmorang', 'Sequi consequatur a qui.', '51869', 'Amet sunt deleniti recusandae.', 'Qui consectetur molestiae et nesciunt dolor impedit ipsum. Quisquam quisquam rerum velit eligendi eum.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(6, 'SM-73390', 'Septi Utami', '2020-11-15', 'Export', 'Complaint', 'CV Damanik', 'Rerum officia.', '12388', 'Omnis aut quam labore.', 'Aspernatur harum et qui distinctio. Enim est odit facere debitis at ex corporis. Pariatur totam dolores repudiandae consequatur et. Alias dolores ea quis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(7, 'SM-60718', 'Darmaji Mansur', '2021-02-17', 'Export', 'Complaint', 'UD Kusmawati Tbk', 'Et ea.', '69440', 'Delectus quis distinctio cumque.', 'Amet eos consequatur aliquam nihil perferendis neque. Veritatis dolorem iure doloribus perferendis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(8, 'SM-81736', 'Tania Maida Safitri', '2020-12-10', 'Export', 'Market', 'CV Pudjiastuti Hariyah (Persero) Tbk', 'Consequatur et quo.', '03451', 'Et cupiditate esse.', 'Eos dolor ducimus quis quia et molestiae aut eaque. Illum dolorem dolore qui repudiandae non. Nam incidunt deleniti animi aut. Ut autem eaque ipsa omnis ut. Voluptas qui et pariatur et nihil non.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(9, 'SM-20829', 'Bakiono Hakim', '2021-03-13', 'Domestic', 'Market', 'PD Suartini Wibisono Tbk', 'Et repudiandae eos.', '33997', 'In qui explicabo velit.', 'Et sed eligendi et doloremque. Officia dicta et pariatur in ea qui quis beatae. Voluptatem dicta est ut officiis perferendis et voluptatum tempora. Et ad voluptatem quas nulla quaerat reiciendis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(10, 'SM-13075', 'Jane Dinda Wulandari', '2021-03-08', 'Export', 'Complaint', 'CV Widiastuti (Persero) Tbk', 'Quod sapiente.', '72077', 'Ut qui.', 'Qui inventore enim consequatur unde harum. Eaque placeat et voluptatum maiores eligendi. Animi consequatur doloremque quisquam possimus qui. Odio ea quaerat nobis debitis perferendis eum et.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(11, 'SM-19380', 'Mahfud Wahyudin', '2021-07-24', 'Export', 'Complaint', 'CV Tamba', 'Minus amet.', '51875', 'Accusamus quis fugit dolor.', 'Sunt qui et ullam neque. Debitis autem illo quae. Pariatur autem possimus qui. Animi architecto quidem enim et omnis earum.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(12, 'SM-14037', 'Kairav Uwais', '2020-12-02', 'Export', 'Market', 'UD Manullang', 'Voluptas assumenda officia.', '91693', 'Ut culpa laborum.', 'Velit est asperiores sint non ut. Tempora quis expedita vel et. Tenetur expedita et eius minus.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(13, 'SM-96825', 'Putri Ade Suryatmi S.Pt', '2020-09-21', 'Domestic', 'Complaint', 'PD Prastuti Hardiansyah', 'Quia et.', '69320', 'Officiis adipisci consequatur.', 'Voluptas qui eos omnis ea. Rerum modi dolores occaecati et. Omnis dolores accusantium quod eum. Et et porro asperiores perspiciatis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(14, 'SM-95947', 'Ina Lintang Widiastuti S.Kom', '2021-01-04', 'Export', 'Market', 'CV Kusumo Narpati (Persero) Tbk', 'Dignissimos voluptatem.', '47532', 'Tempora modi sit.', 'Dolore ad nemo deserunt sunt ea repudiandae. Libero corrupti vel est aliquid ut minima saepe. Vel saepe quia corporis soluta magnam numquam nihil iusto. Quia in omnis eaque.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(15, 'SM-49704', 'Gandi Saefullah', '2021-02-01', 'Export', 'Market', 'PD Nasyidah', 'Illo molestiae in sit.', '51310', 'Impedit quisquam et et odio veritatis.', 'Asperiores qui esse vel corporis sint enim vitae. Qui magnam dolorem numquam dolorem. Aut tempore id aut at. Facilis voluptas sed voluptatum et non.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(16, 'SM-69523', 'Zaenab Purnawati M.Kom.', '2021-06-12', 'Export', 'Complaint', 'CV Mandasari Mansur (Persero) Tbk', 'Enim eveniet eius.', '17678', 'Rem esse consequatur.', 'Id porro architecto aut. Sed aut mollitia sapiente. Ad libero ex earum et minima. Consequatur sed blanditiis facilis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(17, 'SM-94479', 'Uli Hasanah', '2021-02-16', 'Export', 'Complaint', 'CV Gunawan Lailasari (Persero) Tbk', 'Rerum sit.', '00497', 'Nostrum id molestiae fugiat in dolor.', 'Omnis incidunt enim officia iste aspernatur officia temporibus. Eius sit quae ea perferendis. Quae sed voluptate quia eveniet quasi. Est et ullam quod est est quasi nostrum omnis.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(18, 'SM-55315', 'Hesti Purnawati M.TI.', '2021-02-18', 'Domestic', 'Complaint', 'CV Prakasa', 'Iusto.', '17485', 'Voluptates sunt omnis.', 'Quis placeat sit voluptas veritatis. Et magni quae sunt aut ut. Ipsam omnis qui repudiandae consectetur sed sapiente. Et voluptatem ut aut.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(19, 'SM-28920', 'Ridwan Manullang S.Sos', '2021-03-23', 'Domestic', 'Market', 'PD Melani', 'Rerum accusantium ut.', '15005', 'Est quam.', 'Ut quis accusantium laudantium et. Expedita et quae suscipit harum enim voluptatem ea. Aut quam natus recusandae laborum. Dolor minima tempora illum. Voluptatem quia et qui et et.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(20, 'SM-11175', 'Tasdik Habibi', '2020-09-08', 'Domestic', 'Complaint', 'UD Rahimah Hutasoit (Persero) Tbk', 'Exercitationem veniam.', '54460', 'Occaecati quidem sed aliquam accusantium.', 'Nulla et beatae tempore molestiae. Sequi deserunt eveniet pariatur in culpa. Qui omnis expedita sapiente accusantium. In numquam voluptatem id et.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(21, 'SM-96840', 'Dasa Cawuk Rajata S.Kom', '2020-12-09', 'Export', 'Market', 'PD Uyainah (Persero) Tbk', 'Occaecati.', '25128', 'Tempore quo.', 'Aperiam officia tenetur sit quasi temporibus enim officia. Repellat ea voluptas quasi quibusdam dolor deserunt aliquid. Dolores nemo debitis voluptas quia rerum perspiciatis doloremque.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(22, 'SM-66308', 'Vino Okta Hutagalung M.Kom.', '2021-03-07', 'Export', 'Complaint', 'CV Pudjiastuti Wijayanti', 'Quo et.', '29674', 'Perspiciatis fuga.', 'Fugiat libero architecto quibusdam. Minus sint numquam magni necessitatibus qui id eaque. Id ipsum possimus nihil maiores consequatur tempora.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(23, 'SM-91545', 'Fitria Purwanti S.Ked', '2021-01-15', 'Export', 'Market', 'PT Ramadan (Persero) Tbk', 'Quibusdam veniam.', '57126', 'Eaque atque.', 'Sed tempora non aliquam perspiciatis et asperiores repellendus nulla. Eum voluptatum numquam quia a iste. Nulla ea nam ipsam qui odit. Vitae ad sed ut voluptatem ratione.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(24, 'SM-65215', 'Natalia Mulyani', '2021-04-13', 'Export', 'Market', 'UD Damanik', 'Et.', '88353', 'Necessitatibus quo deserunt quia adipisci.', 'Maxime fugiat quis quis nisi. In est architecto iste voluptas. Odio ullam nesciunt illum voluptatem. Vitae eveniet nihil accusamus. Officiis inventore est suscipit quis iure.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(25, 'SM-88015', 'Ibun Makara Budiyanto', '2021-05-27', 'Export', 'Market', 'PD Riyanti', 'Assumenda.', '76206', 'Et nesciunt dolorem.', 'Odio vel est fuga. Non voluptatem voluptas nulla nulla nam voluptatem eum aliquam. Autem molestiae temporibus sed est autem enim.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(26, 'SM-90018', 'Maya Hana Anggraini S.Psi', '2020-10-24', 'Domestic', 'Market', 'CV Usada', 'Qui dolorem sint.', '72501', 'Ullam aut qui.', 'Est eius qui quidem facilis temporibus. Et vel dolorem et alias.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(27, 'SM-14384', 'Zalindra Padmasari', '2021-08-05', 'Export', 'Complaint', 'UD Hidayat Hidayanto (Persero) Tbk', 'Reiciendis culpa.', '61917', 'Quaerat et minus fugiat.', 'Iste adipisci tempore eos repellat architecto sed natus nulla. Doloribus tempore deserunt impedit fugit. Rerum et quos possimus laudantium autem. Distinctio inventore perferendis corrupti.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(28, 'SM-78367', 'Darsirah Hakim', '2021-06-08', 'Domestic', 'Complaint', 'CV Kuswoyo Tbk', 'Enim placeat.', '20678', 'Et voluptas ut.', 'Dolore a minima incidunt provident ut. Nulla non harum ad praesentium deserunt hic. Rerum culpa reiciendis soluta ipsam.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(29, 'SM-38739', 'Michelle Farida', '2020-11-09', 'Domestic', 'Market', 'UD Wasita', 'At sed praesentium.', '27237', 'Temporibus commodi quo quisquam quae ipsam.', 'A sequi voluptatem tenetur vero. Autem et ea voluptatem ut distinctio. Quasi aliquid consectetur distinctio sint quod occaecati ut. Sed dolorem corrupti atque maxime.', NULL, '2022-09-05 16:53:29', '2022-09-05 16:53:29'),
(30, 'SM-43882', 'Unjani Nurul Yulianti', '2021-06-02', 'Export', 'Complaint', 'UD Suartini Usamah', 'Qui est corrupti voluptates.', '82486', 'Nesciunt cumque praesentium blanditiis.', 'Minima qui ea qui. Voluptatem in facere vel ducimus vel libero repellat qui.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(31, 'SM-51344', 'Kadir Lazuardi', '2020-10-11', 'Domestic', 'Market', 'PD Maulana', 'Iste consectetur.', '20053', 'Facere voluptatem officia.', 'Est ut harum vel omnis explicabo velit aut veritatis. Numquam quibusdam temporibus laudantium voluptatum sunt. Delectus harum rem occaecati repellat. Et sequi sequi ipsa quam.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(32, 'SM-41086', 'Makuta Nashiruddin', '2021-04-23', 'Export', 'Complaint', 'PT Marpaung Tbk', 'Accusantium rerum quaerat.', '77460', 'Excepturi quis natus quis.', 'Laboriosam rerum culpa velit unde. Itaque molestias magnam non error quia saepe. Qui quia eos quia qui et qui. Ducimus ad libero qui culpa rem possimus. Mollitia sit architecto ad autem.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(33, 'SM-22167', 'Marwata Haryanto', '2021-08-28', 'Export', 'Market', 'UD Namaga Tbk', 'Ut distinctio ratione.', '83889', 'Ut ullam eum.', 'Assumenda cum et perspiciatis aperiam in velit. Deserunt veniam et ut omnis numquam debitis. Error eius ut et ut. Deserunt voluptatum ex beatae autem explicabo. Voluptas sequi et fugiat tempore.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(34, 'SM-45988', 'Cici Agustina', '2020-11-02', 'Domestic', 'Complaint', 'Perum Hidayanto Siregar (Persero) Tbk', 'Nemo excepturi.', '18144', 'Neque et numquam.', 'Modi nihil et voluptatum. Qui quia qui eum ex. Cupiditate quia nihil facilis voluptatum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(35, 'SM-61663', 'Laras Michelle Handayani S.IP', '2021-07-19', 'Domestic', 'Complaint', 'Perum Oktaviani Mandala', 'Ut deserunt.', '35683', 'Corporis quaerat explicabo amet eos.', 'Autem placeat non eveniet sed. Omnis sint ut voluptate placeat perferendis quo tempora asperiores. Qui sit magni sit est omnis. Quis iusto minus est impedit rerum excepturi maxime.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(36, 'SM-69325', 'Narji Hasan Anggriawan S.Gz', '2021-06-30', 'Export', 'Complaint', 'CV Mandasari', 'Itaque.', '80996', 'Quos placeat consequatur.', 'Et et repellendus aspernatur quasi amet. Nesciunt amet libero tenetur aliquam eum totam non. Est possimus dolores animi sequi. Sapiente doloremque maiores eum ex.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(37, 'SM-31737', 'Parman Prayoga', '2021-01-17', 'Domestic', 'Market', 'UD Mangunsong', 'Ipsa.', '36838', 'Delectus voluptatibus nihil.', 'In cum dolores quae eligendi possimus. Nisi iste rerum velit aperiam nesciunt quia. Enim reiciendis praesentium ullam facere asperiores. Enim a libero laudantium impedit ex ut dolorem.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(38, 'SM-50306', 'Prayogo Gangsa Widodo', '2021-03-11', 'Domestic', 'Market', 'Perum Hakim', 'Eaque atque.', '52023', 'Autem dolor.', 'Nisi quo repellat fugiat laborum magnam modi ut. Iusto sint corrupti odio quo.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(39, 'SM-29599', 'Damu Wawan Wasita M.TI.', '2020-09-18', 'Export', 'Market', 'PT Yuniar Prakasa', 'Ratione quae.', '09953', 'Placeat eveniet sint eos.', 'At modi quo tenetur eaque facere debitis. Non aut qui vel ex aperiam corrupti sint. Fuga autem dolor incidunt totam. Iste vel cumque omnis et optio omnis.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(40, 'SM-05128', 'Purwanto Kuswoyo', '2021-04-20', 'Export', 'Complaint', 'PD Lailasari Zulaika', 'Et nihil.', '16559', 'Nihil non alias labore et cupiditate.', 'Neque pariatur sunt minus alias rerum aliquam. Doloribus magni ab et. Ut voluptatem omnis velit architecto sed. Autem ipsam odit aut.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(41, 'SM-05385', 'Labuh Santoso S.Farm', '2021-04-21', 'Export', 'Complaint', 'UD Melani Simbolon (Persero) Tbk', 'Nihil.', '07886', 'Qui qui.', 'Corrupti quis repudiandae praesentium quis eius ipsa beatae. Temporibus optio itaque velit consequatur. Eligendi ut minus soluta quidem deserunt commodi.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(42, 'SM-41760', 'Zizi Fujiati', '2021-07-18', 'Export', 'Complaint', 'UD Kuswandari (Persero) Tbk', 'Cumque.', '55455', 'Rerum sit.', 'Consequatur est voluptas aut. Sint libero velit est fuga. Magni ad voluptatum fugiat qui omnis dolores.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(43, 'SM-44405', 'Laras Rahimah', '2020-12-30', 'Domestic', 'Market', 'UD Novitasari', 'Repudiandae dolores.', '14214', 'Tempora ea inventore quis.', 'Dolorum quibusdam aspernatur qui repellat quidem quae in voluptas. Illum ducimus itaque officia repellendus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(44, 'SM-06958', 'Mursinin Mangunsong', '2021-05-26', 'Domestic', 'Market', 'PD Rahimah Lailasari', 'Debitis enim.', '45324', 'Temporibus omnis qui non.', 'Perferendis dolorem atque est qui. Autem ut sint rerum atque dolor perspiciatis autem officia. Sunt enim nostrum neque sunt aut iure. Sint earum repudiandae enim qui.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(45, 'SM-47628', 'Salman Saragih', '2021-08-10', 'Export', 'Complaint', 'CV Prayoga (Persero) Tbk', 'Nemo voluptatem.', '25462', 'Unde tenetur.', 'Molestiae repellat impedit eveniet deleniti adipisci sunt. In quo ut earum nesciunt quia. Autem magnam ipsam corrupti deleniti animi accusamus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(46, 'SM-56407', 'Ophelia Puji Hasanah', '2021-05-29', 'Domestic', 'Market', 'Perum Siregar Riyanti', 'Porro sapiente facere laboriosam provident.', '77748', 'Provident atque fuga.', 'Dolor tenetur dolorem est fugiat. Soluta ab numquam autem. Atque est aut necessitatibus quod. Id magni voluptatum iure omnis voluptatum corrupti.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(47, 'SM-36854', 'Indra Suwarno S.I.Kom', '2020-10-04', 'Export', 'Complaint', 'PT Zulkarnain Samosir', 'At minus non voluptates ea.', '95854', 'Soluta eaque consequatur.', 'Labore accusamus qui eius expedita. Facere harum maiores ut. Sequi eos ea omnis eveniet. Dolorem ducimus suscipit iure ut laboriosam.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(48, 'SM-69978', 'Ami Zaenab Widiastuti M.Ak', '2021-03-17', 'Export', 'Complaint', 'UD Andriani Sirait (Persero) Tbk', 'Praesentium molestiae voluptatem.', '26453', 'Ut suscipit quis dolorem.', 'Provident ut atque sit ut et reprehenderit non. Repellat ab qui ut sit. Doloremque dolores velit rerum in.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(49, 'SM-19874', 'Maman Salahudin', '2021-08-30', 'Domestic', 'Complaint', 'PT Wahyuni', 'Velit ad.', '60006', 'Quo ad omnis temporibus ad.', 'Sit ut ratione dolor eligendi. Quis quidem quia nam quis. Reprehenderit beatae optio molestias ut eligendi.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(50, 'SM-68765', 'Capa Rajasa S.Psi', '2021-05-27', 'Export', 'Complaint', 'CV Prasetyo', 'Minima aut.', '63650', 'Temporibus necessitatibus rerum.', 'Ea perspiciatis error sint quia facilis qui. Non asperiores rerum provident excepturi aut assumenda veniam. Possimus quia explicabo fugit.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(51, 'SM-70258', 'Martana Thamrin', '2021-03-02', 'Domestic', 'Complaint', 'PD Hastuti', 'Et quas.', '51745', 'Maxime cupiditate vel.', 'Ex illum ratione sequi quidem natus. Aut deserunt eum molestias repellendus. Et provident consequatur animi explicabo magnam.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(52, 'SM-34837', 'Ami Zaenab Puspita S.Ked', '2020-09-06', 'Domestic', 'Market', 'CV Kuswandari Astuti (Persero) Tbk', 'Dolore provident est iusto.', '34063', 'Dignissimos velit nisi.', 'Sequi id qui blanditiis eius incidunt doloribus possimus. Magnam voluptate est ea laborum ad. Quo culpa qui minus voluptates iste deserunt.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(53, 'SM-71775', 'Ghaliyati Siti Puspita', '2020-10-01', 'Domestic', 'Market', 'Perum Yuniar Namaga', 'Omnis voluptatum quisquam qui.', '51147', 'In atque atque.', 'Ullam iusto alias rerum corporis placeat fugit commodi. Perferendis earum rerum voluptas odit. Neque vero autem ratione sit. Sed asperiores natus quas qui. Ab eius voluptatem aut ut ea quos aliquid.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(54, 'SM-55228', 'Pranata Koko Wibowo', '2020-11-09', 'Export', 'Market', 'UD Wulandari Mulyani', 'A.', '81753', 'Vel tempore.', 'Aut delectus necessitatibus harum dolor aliquid distinctio maiores. Nemo quos sed consequatur voluptatibus natus eum facere. Quia consequatur cum harum pariatur.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(55, 'SM-96334', 'Ade Usada', '2021-08-25', 'Export', 'Market', 'Perum Lailasari Tbk', 'Voluptatem explicabo.', '21601', 'Corporis deserunt deserunt esse.', 'Quo quia molestias sit ea libero. Et vel sed facilis ipsum dolor provident. Voluptate et rerum fuga quibusdam.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(56, 'SM-60139', 'Baktiadi Winarno', '2021-03-15', 'Export', 'Market', 'UD Mulyani Mandasari Tbk', 'Assumenda debitis.', '34051', 'Praesentium dolor et odio est.', 'Et tenetur voluptatem inventore ea atque rem. Fugit aut amet nesciunt sunt quibusdam qui necessitatibus. Nobis nobis ducimus reiciendis enim nemo reprehenderit repudiandae sequi.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(57, 'SM-26633', 'Cahya Kusumo S.Psi', '2021-01-24', 'Domestic', 'Complaint', 'UD Usada Latupono', 'Provident.', '49185', 'Accusantium voluptatem dolor.', 'Eveniet aut reprehenderit fugit numquam eaque aut deleniti. Nam voluptatum nobis voluptate et totam dolore iste. Quis suscipit facere nostrum aut odio nemo excepturi.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(58, 'SM-81238', 'Puti Permata M.Ak', '2020-10-01', 'Domestic', 'Complaint', 'UD Mustofa Zulkarnain', 'Est veritatis.', '15653', 'Tempora at tempora.', 'Et velit delectus non vero voluptas quo hic. Consequatur occaecati totam culpa ex. Veritatis quidem aperiam doloribus quisquam fugit. Earum odio nam aliquam omnis omnis enim.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(59, 'SM-59116', 'Belinda Maryati S.T.', '2020-11-22', 'Export', 'Market', 'Perum Nuraini', 'Sed quae dolores.', '30799', 'Quia aut quidem.', 'Placeat animi provident sit maxime ut velit. Cumque possimus similique ea voluptatem modi. Velit quia recusandae asperiores vel sapiente. Quisquam sed quam nemo quia.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(60, 'SM-42801', 'Nadine Yuniar S.Ked', '2021-01-10', 'Export', 'Market', 'Perum Suwarno (Persero) Tbk', 'At placeat.', '89392', 'Asperiores dignissimos quibusdam iusto eum modi.', 'Corporis molestiae adipisci minus nesciunt. Quia tempora qui eligendi officiis ut sit aperiam. Soluta dolores et autem est ad reprehenderit.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(61, 'SM-84166', 'Iriana Rahayu', '2021-06-11', 'Domestic', 'Complaint', 'CV Gunawan Budiyanto', 'Nisi sunt quisquam.', '96350', 'Nulla quia ut.', 'Dolores mollitia aperiam non. Laboriosam expedita distinctio molestiae sed qui id nam. Qui reprehenderit repudiandae ratione omnis. Voluptas magnam et quo.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(62, 'SM-58851', 'Ismail Januar', '2021-01-20', 'Export', 'Complaint', 'PT Laksita', 'Est consequuntur.', '54165', 'Occaecati voluptatibus sit.', 'Mollitia voluptatem odio aliquam hic. Mollitia aliquam dolorem est nostrum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(63, 'SM-28674', 'Nyana Hidayanto M.TI.', '2021-04-06', 'Domestic', 'Market', 'CV Anggraini Rahmawati (Persero) Tbk', 'Nostrum est.', '44470', 'Accusamus doloribus labore sunt exercitationem.', 'Modi voluptas quas ut odit labore et. Enim aliquid natus eum maxime.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(64, 'SM-63035', 'Atma Damanik', '2020-09-07', 'Domestic', 'Complaint', 'PD Tarihoran Iswahyudi Tbk', 'Numquam.', '69967', 'Amet corporis consequatur earum.', 'Odio quo quam quae aut. Rerum consequuntur voluptates impedit voluptatum reiciendis incidunt. Sed alias dolores ut ut sunt autem.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(65, 'SM-70561', 'Estiono Raihan Mansur', '2020-12-12', 'Domestic', 'Market', 'PD Setiawan Melani', 'Illum praesentium possimus.', '07028', 'Voluptatem sit et.', 'Cum eum doloribus repudiandae mollitia non similique. Quisquam dolores beatae quibusdam. Nemo numquam delectus asperiores sit consequatur accusantium rerum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(66, 'SM-80127', 'Ani Nurul Riyanti S.Psi', '2021-04-30', 'Export', 'Complaint', 'CV Simanjuntak (Persero) Tbk', 'Facilis.', '11659', 'Tempore recusandae.', 'Quibusdam distinctio ut qui architecto. Sint consequatur vel ea et iste unde. Excepturi recusandae porro consequatur qui.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(67, 'SM-94240', 'Koko Pratama', '2020-10-22', 'Domestic', 'Market', 'UD Utami Sihotang', 'Sunt.', '43451', 'Quis expedita vero non.', 'Consectetur incidunt quidem maxime aut aut. Velit consequatur distinctio temporibus molestiae repellendus molestiae optio. Sequi quia id aut hic unde reprehenderit.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(68, 'SM-85341', 'Elma Nova Permata S.Psi', '2021-01-15', 'Export', 'Market', 'PT Kurniawan Hasanah Tbk', 'In.', '45680', 'Occaecati pariatur architecto voluptatem.', 'Enim animi facere beatae laborum sint ut. Laudantium rerum minima non vel ratione nemo. Quia earum ducimus consequatur nesciunt.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(69, 'SM-45515', 'Qori Wastuti S.Ked', '2021-07-16', 'Export', 'Market', 'CV Purwanti Pudjiastuti', 'Eum amet quo.', '29789', 'Aut assumenda autem.', 'Doloremque amet nesciunt ullam iure nihil accusantium consequatur. Molestiae enim provident laboriosam necessitatibus dolorem. Qui quia minima aliquid ut dolor.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(70, 'SM-82888', 'Kenari Darsirah Hidayat M.Kom.', '2020-12-15', 'Export', 'Complaint', 'PT Ardianto', 'Et deserunt minima vel.', '22473', 'Ut esse.', 'Expedita reiciendis officia aut perspiciatis inventore. Dicta vel earum praesentium cum vero quia officia. Dolorem ea rerum ea perspiciatis. Eius ratione rerum beatae in.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(71, 'SM-75831', 'Jindra Simanjuntak', '2020-10-27', 'Export', 'Market', 'CV Riyanti Suwarno', 'Aperiam architecto.', '98452', 'Repellat itaque quia in laboriosam.', 'Consectetur ea doloribus asperiores blanditiis corporis veniam. Repudiandae eum tempore ipsam laudantium provident. Natus atque inventore adipisci est optio modi.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(72, 'SM-56776', 'Febi Zulaikha Mulyani M.M.', '2021-05-28', 'Export', 'Market', 'PT Kuswandari (Persero) Tbk', 'Voluptatibus ipsum expedita.', '52965', 'Odio consequuntur laboriosam et nulla.', 'Dolorum saepe reiciendis accusantium vero quidem. Hic consequatur perspiciatis repudiandae sed expedita velit. Repellat possimus provident voluptas fugit recusandae ipsum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(73, 'SM-25310', 'Baktiono Luhung Saptono S.Psi', '2020-12-21', 'Domestic', 'Complaint', 'CV Laksmiwati Tbk', 'In delectus tempore.', '45606', 'Debitis excepturi cupiditate eaque.', 'Recusandae rerum sequi dicta et repellendus. Dolores sed nostrum necessitatibus et. Delectus deserunt nemo temporibus consequuntur quod. Ut reprehenderit autem ea omnis rerum sunt.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(74, 'SM-28183', 'Rahayu Nasyidah S.Pt', '2021-02-25', 'Domestic', 'Market', 'PT Kusumo Hartati', 'Distinctio quia.', '13760', 'Labore voluptatem repudiandae.', 'Facilis quia recusandae fugiat quo blanditiis. Atque at qui tempora dolorem. Quo quae consequuntur tempora.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(75, 'SM-38905', 'Julia Utami', '2021-07-09', 'Export', 'Complaint', 'UD Marbun Gunarto Tbk', 'Debitis et.', '33671', 'Consequatur dignissimos quia eum tempora repellat.', 'Ex aut minus temporibus eos. Aut minus aut reprehenderit voluptate delectus. Eos eos doloribus veniam rerum et possimus voluptas inventore. Veritatis beatae dolor quibusdam qui ducimus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(76, 'SM-69401', 'Wani Melani', '2021-03-14', 'Domestic', 'Complaint', 'UD Hassanah Palastri', 'Voluptatibus mollitia.', '43554', 'Enim quisquam accusamus quia.', 'Illo et sed optio ipsam quis. Earum neque et sint nisi voluptatibus. Eum qui perferendis sunt. Autem rem et non adipisci et.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(77, 'SM-44702', 'Luthfi Rajasa S.Psi', '2020-10-08', 'Domestic', 'Complaint', 'UD Hutasoit (Persero) Tbk', 'Modi neque ipsam omnis.', '92844', 'Dolores ex nam harum.', 'Commodi cupiditate expedita deserunt atque. Ipsa nam nihil nesciunt ad ipsam necessitatibus quaerat. Expedita vitae ea sit quae inventore tenetur magni.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(78, 'SM-13955', 'Maras Mulyanto Pranowo S.Ked', '2021-04-16', 'Domestic', 'Market', 'Perum Najmudin Tbk', 'Et ducimus et id.', '27490', 'Nobis cupiditate in.', 'In in id enim rerum et. Id alias in nisi omnis eum. Consequatur aut doloribus repudiandae ut sint.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(79, 'SM-71102', 'Zulfa Astuti', '2020-11-01', 'Domestic', 'Market', 'PD Narpati Situmorang (Persero) Tbk', 'Ab voluptatem quis.', '97768', 'Non ut.', 'Est sed magni itaque assumenda ex. Eum esse porro doloribus est et. Ipsa iusto qui maiores laborum beatae quisquam provident.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(80, 'SM-95440', 'Hartana Galiono Samosir S.H.', '2021-07-26', 'Export', 'Market', 'PT Rahmawati (Persero) Tbk', 'Pariatur impedit eius dicta.', '63598', 'Voluptas eos animi sit quo.', 'Aut dolore fugiat qui laborum. Nemo reiciendis officiis iure deserunt repudiandae consequuntur. Repellat neque corporis perspiciatis sit. Saepe excepturi nihil quia numquam.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(81, 'SM-85534', 'Yuni Nasyidah', '2020-09-15', 'Domestic', 'Market', 'PD Yuliarti', 'Cumque vero recusandae.', '11429', 'Corporis eaque corrupti.', 'Fugit accusamus doloribus aspernatur totam voluptate sed. Vitae sit tempora laboriosam accusamus fugiat facere. Qui et officia sit qui quo. Expedita quidem qui dolores dolorum id laudantium.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(82, 'SM-82567', 'Karimah Rahayu M.Kom.', '2020-10-01', 'Export', 'Market', 'PD Haryanti Mandala', 'Ex aut.', '50428', 'Et provident omnis quos.', 'Modi ut blanditiis et ratione eaque aut. Quis qui qui ipsam dolorum. Error non qui accusamus eum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(83, 'SM-09887', 'Maya Mulyani', '2021-02-18', 'Export', 'Market', 'UD Mayasari Wulandari Tbk', 'Voluptatem id.', '27135', 'Error sint accusamus debitis qui.', 'Eligendi qui sunt sed et iure. Ipsum laudantium dolorem quia dolor. Adipisci eaque sunt expedita libero. Sed in suscipit nemo ipsum quos facere aut.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(84, 'SM-70160', 'Uchita Riyanti M.Ak', '2020-09-30', 'Domestic', 'Complaint', 'PT Agustina', 'Maiores architecto doloribus id sed.', '72889', 'Suscipit sunt rerum voluptatem eum.', 'Dolore perspiciatis totam est ut at. Magnam incidunt ut quo dolorem vero. Tempora qui esse reprehenderit qui consequatur.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(85, 'SM-01369', 'Chelsea Agustina', '2021-01-13', 'Domestic', 'Market', 'CV Mansur', 'Rerum facere.', '89962', 'Dolore impedit magni vel omnis.', 'Odio doloribus quo id animi ad. Ut impedit omnis et quisquam sunt sunt culpa error. Porro aperiam rerum dolorem a similique est. Ipsa harum id modi magnam et.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(86, 'SM-53749', 'Kajen Wasita', '2021-08-24', 'Domestic', 'Market', 'CV Ardianto', 'Velit repellat.', '22822', 'Placeat aut.', 'Animi qui non voluptas aut. Dolores repellendus voluptatem suscipit perspiciatis quis. Aut dicta et est ab perspiciatis saepe quo. Veritatis vel aut alias et.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(87, 'SM-40063', 'Karen Usada', '2021-03-16', 'Export', 'Market', 'Perum Tarihoran', 'Dolor.', '68243', 'Non consequatur cum ullam impedit.', 'Illum architecto rerum sed quae in cumque aut. Omnis ullam voluptatem libero unde amet qui. Qui eum in unde odio dolor repellat. Et ipsum eum odit tenetur.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(88, 'SM-08494', 'Saiful Kuswoyo S.E.', '2021-01-14', 'Export', 'Market', 'UD Sudiati Rahayu', 'Perferendis.', '43937', 'Veritatis itaque quisquam optio ducimus labore.', 'Libero sed rerum aut laborum assumenda fuga eius. Perferendis consequatur esse dolorum aliquam et nemo dolor. Repellat nobis sunt neque aut beatae omnis minima necessitatibus.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(89, 'SM-68032', 'Ilsa Kusmawati', '2021-07-17', 'Export', 'Complaint', 'PT Pradipta (Persero) Tbk', 'In earum.', '75199', 'Mollitia eos qui repellendus.', 'Vel officia temporibus perspiciatis et. Sint ratione consequatur aut et est magni.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(90, 'SM-69617', 'Kairav Manullang', '2020-09-29', 'Export', 'Complaint', 'CV Prasasta Tbk', 'Repellat.', '44619', 'Omnis rem ut.', 'Quia reprehenderit repudiandae quo aperiam. Neque ut non placeat voluptas. Quam quos vel sit unde omnis laborum nihil enim.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(91, 'SM-34714', 'Vera Palastri', '2020-12-15', 'Domestic', 'Market', 'UD Yulianti', 'Non eius consequatur eaque.', '76863', 'Voluptas vel sint iste.', 'Quia cumque quo repellendus laborum officia tempora reiciendis. Aspernatur hic placeat neque vero quas ea. Blanditiis excepturi praesentium fugiat cumque.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(92, 'SM-56152', 'Ghaliyati Pratiwi S.E.', '2021-07-28', 'Export', 'Market', 'PT Ramadan (Persero) Tbk', 'Qui ad.', '45884', 'Quaerat praesentium est debitis asperiores.', 'Sed et expedita amet vel est. Exercitationem aut est quisquam quo illum. Aperiam ipsum alias ut ut accusantium aut.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(93, 'SM-40407', 'Hafshah Zulaika', '2021-02-01', 'Export', 'Complaint', 'UD Puspasari Tbk', 'Consequatur tempore.', '33011', 'Modi delectus.', 'Optio fugiat voluptatem voluptas illo culpa doloremque. Asperiores aspernatur ut omnis voluptas. Neque similique inventore nulla sed itaque incidunt. Et fugit quaerat nostrum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(94, 'SM-28315', 'Nurul Nurul Lailasari S.Pd', '2020-09-09', 'Domestic', 'Complaint', 'CV Pradana Tbk', 'Aut exercitationem asperiores.', '18024', 'Voluptas vitae sint corporis.', 'Porro in quia fuga magni. Porro voluptatem vero aut rerum provident. Sit corporis commodi quis vero.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(95, 'SM-34579', 'Darmanto Umar Budiman', '2020-10-09', 'Domestic', 'Market', 'PD Napitupulu', 'Quia eaque deleniti.', '91480', 'Quis minima incidunt.', 'Minus impedit libero nostrum facilis autem. Odit et sint odio nihil deserunt. Sit architecto quos veritatis veniam quia. Explicabo blanditiis porro fugiat quas cum cum.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(96, 'SM-10338', 'Nurul Suryatmi', '2021-04-18', 'Export', 'Complaint', 'UD Hastuti (Persero) Tbk', 'Dolores.', '47142', 'Non consequatur qui consequatur.', 'Illo ullam id quis ab nemo omnis maxime. Officia ea blanditiis cupiditate quis. Voluptas ipsum laudantium sapiente ut est.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(97, 'SM-88605', 'Baktiadi Marpaung', '2021-07-16', 'Domestic', 'Complaint', 'CV Jailani (Persero) Tbk', 'Culpa autem impedit laudantium numquam.', '06796', 'Debitis ea repudiandae libero aut.', 'Est blanditiis quia ullam. Fuga illo reprehenderit sint a dolorem id. Modi culpa possimus omnis voluptatem aut unde. Neque dolorum et ex id fugiat deserunt eaque.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(98, 'SM-34222', 'Yunita Andriani S.E.I', '2021-03-07', 'Domestic', 'Complaint', 'CV Oktaviani Kusmawati Tbk', 'Ab aspernatur.', '71373', 'Ea beatae nobis.', 'Tempora iusto architecto sequi quasi facilis quia. Iure non qui ad molestiae quam voluptas. Delectus accusantium earum dicta vel.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(99, 'SM-57549', 'Dalima Wastuti', '2021-07-23', 'Domestic', 'Market', 'CV Anggraini Novitasari', 'Recusandae repellendus.', '28177', 'Illo aliquid a nostrum.', 'Ex aperiam aut ab. Nulla rem beatae doloremque sunt reiciendis excepturi aliquid. Adipisci aut atque fugit repellat sed rem.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30'),
(100, 'SM-25977', 'Okta Mangunsong', '2020-12-14', 'Export', 'Market', 'Perum Pangestu Winarno Tbk', 'Adipisci.', '79126', 'Perferendis et.', 'Perspiciatis ipsum tenetur at ipsam non. Est neque itaque laborum eos nemo molestiae sint.', NULL, '2022-09-05 16:53:30', '2022-09-05 16:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Rizqi', 'rizqi', 'makosh@gmail.com', '2022-09-05 16:53:31', '$2y$10$TbJbpqX/bSYzGlmZeg5hO.yRj8f/xaTmAYLljjDiKpkk/2S7Kx3oa', 'Admin', 'zCVm42bmYzBJ0v9FVN2b8G37xIwlTZirG4XCPp21k1UnxdpAshDG2rLKufEu', '2022-09-05 16:53:31', '2022-09-05 16:53:31'),
(2, 'User Biasa', 'userbiasa', 'user@gmail.com', NULL, '$2y$10$yRDzxKU9bEn2kuGjOTJxhueC9HZ8vVfbGy7ZGGRAjeAktdBm6dhd.', 'User', NULL, '2022-09-10 05:08:46', '2022-09-10 05:08:46'),
(3, 'Super Admin', 'superadmin', 'admin@offrizqi.site', NULL, '$2y$10$q56P7qJCEz1UofvsHle2kuzaDIYSW8X5qQX3dYhNnwfbadIV6aH.i', 'Admin', NULL, '2022-10-25 15:49:05', '2022-10-25 15:49:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `form_laborat`
--
ALTER TABLE `form_laborat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `form_laborat_kode_form_laborat_unique` (`kode_form_laborat`),
  ADD KEY `form_laborat_sample_masuk_id_foreign` (`sample_masuk_id`),
  ADD KEY `form_laborat_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawan_no_badge_unique` (`no_badge`),
  ADD UNIQUE KEY `karyawan_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sample_keluar`
--
ALTER TABLE `sample_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sample_keluar_kode_sample_keluar_unique` (`kode_sample_keluar`);

--
-- Indeks untuk tabel `sample_masuk`
--
ALTER TABLE `sample_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sample_masuk_kode_sample_masuk_unique` (`kode_sample_masuk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `form_laborat`
--
ALTER TABLE `form_laborat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sample_keluar`
--
ALTER TABLE `sample_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `sample_masuk`
--
ALTER TABLE `sample_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_laborat`
--
ALTER TABLE `form_laborat`
  ADD CONSTRAINT `form_laborat_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_laborat_sample_masuk_id_foreign` FOREIGN KEY (`sample_masuk_id`) REFERENCES `sample_masuk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
