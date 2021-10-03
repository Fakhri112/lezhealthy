-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_and_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tag1` varchar(20) NOT NULL,
  `tag2` varchar(20) NOT NULL,
  `tag3` varchar(20) NOT NULL,
  `tag4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `sumber`, `judul`, `deskripsi`, `tag1`, `tag2`, `tag3`, `tag4`) VALUES
(1, 'rica-rica', 'Ayam Rica-Rica', 'Rica-rica merupakan salah satu bumbu bercita rasa pedas yang berasal dari Manado, Sulawesi Utara. Bumbu rica-rica cocok dimasak dengan ikan, daging sapi, atau ayam. Kali ini, kamu bisa mencoba olahan ayam dengan bumbu rica-rica yang pedas manis', 'Pedas', 'Makanan Basah', 'Sambal', 'Lauk'),
(3, 'teriyaki-tahu', 'Tahu Teriyaki', 'Ingin menikmati saus teriyaki tanpa daging sapi? Bisa kok. Dengan menggunakan tahu sebagai alternatif daging tentunya akan menghadirkan masakan yang lebih sehat. Cita rasa yang yang disajikan juga tidak kalah enak dengan teriyaki yang menggunakan daging sapi sebagai komposisi utamanya.', 'Camilan', 'Vegetarian', '', ''),
(4, 'mie-ayam-jakarta', 'Mie Ayam Jakarta Spesial', 'Mie ayam memang menjadi salah satu makanan favori banyak orang, rasanya yang enak dan mengenyangkan bisa menjadi pilihan untuk makan siang, karena sudah terdapat karbohidrat, sayuran dan protein. Kali ini, kita akan berbagi resep mie ayam Jakarta spesial, ini terbuat dari mie basah, toping ayam dan tambahan sayuran dengan bumbu yang meresap dan nikmat.', 'Makanan Basah', 'Rebus', '', ''),
(5, 'soto-vegan', 'Soto Bening Vegetarian', 'Sedang mencari ide resep soto bening vegetarian yang unik? Cara membuatnya memang susah-susah gampang. Jika salah mengolah maka hasilnya akan hambar dan bahkan tidak sedap. Padahal soto bening vegetarian yang enak seharusnya punya aroma dan rasa yang bisa memancing selera kita.', 'Vegetarian', 'Makanan Basah', '', ''),
(6, 'es-buah', 'Es Buah Kekinian', 'Eksistensi dari es buah memang selalu terjaga sampai saat ini, meski kemunculannya sudah sejak lama. Minuman ini masih menjadi satu sajian yang melegakan dahaga ketika panas terik. Dengan berbagai modifikasi bahan, es buah kekinian pun hadir dan menjadi minuman andalan.\r\n', 'Minuman', '', '', ''),
(7, 'omelet', 'Telur Omelet ala Hotel', 'Telur dadar atau omelet adalah variasi hidangan telur goreng yang disiapkan dengan cara mengocok telur dan menggorengnya dengan minyak goreng atau mentega panas di sebuah wajan. omelette terkenal sebagai makanan yang sering ada di prasmanan hotel saat sarapan. Ciri khas omelet hotel biasanya berisi paprika dan harum mentega. ', 'Breakfast', 'Goreng', '', ''),
(8, 'semur-ayam-saus-tiram', 'Semur Ayam Saus Tiram Jamur Kancing', 'Semur adalah masakan asimilasi dari Eropa yang menjadi masakan rumahan populer di keluarga Indonesia. Berbagai protein hewani dan nabati bisa menjadi bintang utamanya, tidak terkecuali ayam. Sedangkan untuk pelengkapnya, semur sering ditambahkan potongan kentang dan tomat.', 'Makanan Basah', 'Lauk', '', ''),
(9, 'sambal-matah', 'Sambal Matah', 'Sambal matah adalah salah satu sambal khas Indonesia yang berasal dari Bali. Sambal ini tidak mengalami proses masak dengan api. Hanya iris-mengiris semua bahan lalu campur dan beri sedikit minyak kelapa serta di bumbui dengan sedikit garam dan di beri perasan jeruk nipis.', 'Pedas', 'Sambal', '', ''),
(10, 'telur-ceplok-masak-santan', 'Telur Ceplok Masak Santan', 'Sajikan dan nikmati enak dan sedapnya olahan telur ceplok yang disajikan dengan variasi bumbu berbeda yang lezat. Sajian kali ini akan dapat dihidangka bersama dengan sepiring nasi hangat yang enak dan sedap.', 'Makanan Basah', 'Lauk', 'Goreng', ''),
(11, 'tahu-cabai-garam-praktis', 'Tahu Cabai Garam Praktis', 'Resep tahu cabai garam cukup mudah dipraktikkan di rumah. Bahan-bahan yang digunakan pun hampir selalu ada di tiap dapur.  Tahu cabai garam biasa disajikan di restoran chinese food. Teksturnya yang kering dan rasanya yang gurih membuat tahu cabai garam cocok dijadikan sebagai camilan atau lauk makan.', 'Camilan', 'Goreng', 'Lauk', 'Vegetarian'),
(12, 'teh-cocktail', 'Teh Cocktail', 'Cocktail buah atau koktil adalah makanan yang terbuat dari potongan buah dan sirup serta disajikan dalam keadaan dingin. Meskipun namanya mirip dengan minuman beralkohol yang disebut “koktail”, koktail buah sama sekali tidak dicampur atau mengandung alkohol. Cocktail buah dapat dikreasikan menjadi aneka resep yang menggugah selera.', 'Minuman', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
