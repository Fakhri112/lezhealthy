-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 04:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `kitchen-tips`
--

CREATE TABLE `kitchen-tips` (
  `id` int(11) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen-tips`
--

INSERT INTO `kitchen-tips` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(2, 'Membilas Sayur dengan Garam', 'Saat mencuci kangkung, arnong/selada air atau genjer serta tanaman air lainnya jangan lupa saat bilasan pertama bubuhkan sesendok garam lalu diamkan sejenak agar binatang-binatan kecil yang mungkin hidup dibatang dan daunnya mati. Biasanya yang hobi nongkrong disitu lintah, keong, ulat dan cacing air. Brokoli dan kembang kol juga sering ada ulatnya, jadi jangan lupa pula menggunakan cara ini.', 'membilas-sayur'),
(3, 'CARA MENGUPAS KENTANG LEBIH MUDAH', '1.)Iris tipis melingkar di kulit kentang.\r\n\r\n2.) kemudian rebus kentang tersebut selama lima menit.\r\n\r\n3.) Usai direbus, langsung dimasukkan ke dalam semangkuk air dingin dan tunggu lagi selama lima menit. Dijamin deh kulit kentang lebih mudah dikupas dan kentang tidak akan menjadi coklat.', 'cara-mengupas-kentang-lebih-mudah'),
(4, 'Cara agar tahu awet', 'Agar tahu lebih awet ketika disimpan, cuci bersih dengan air, kemudian siram dengan air panas, setelah itu lap dengan tisu dapur, simpan didalam tupperware, tutup rapat, kemudian letakkan didalam kulkas. Jika tahu adalah kualitas baik maka bisa bertahan selama 1 minggu.', 'cara-agar-tahu-awet'),
(5, 'Membilas Sayur dengan Garam', 'Saat mencuci kangkung, arnong/selada air atau genjer serta tanaman air lainnya jangan lupa saat bilasan pertama bubuhkan sesendok garam lalu diamkan sejenak agar binatang-binatan kecil yang mungkin hidup dibatang dan daunnya mati. Biasanya yang hobi nongkrong disitu lintah, keong, ulat dan cacing air. Brokoli dan kembang kol juga sering ada ulatnya, jadi jangan lupa pula menggunakan cara ini.', 'membilas-sayur-dengan-garam'),
(6, 'Cara Menyimpan Daging di Freezer', 'Jika menyimpan daging di freezer, pastikan daging tidak keluar masuk freezer berulangkali, karena hal ini bisa membuat bakteri berkembangbiak. Sebaiknya potong-potong dulu dagingnya sesuai dengan perkiraan kebutuhan per tiapkali masak dan simpan di plastik kecil-kecil secara terpisah, sehingga ketika akan mengambil, bisa ambil seperlunya saja.', 'cara-menyimpan-daging-di-freezer'),
(7, 'Memasak Daun Kates Supaya Tidak Pahit', 'Agar kembang kates, daun kates dan pare tidak terlalu pahit ketika dikonsumsi, sebaiknya di rebus bersamaan dengan daun jambu biji (caranya, rebus air, ambil beberapa lembar daun jambu biji, tunggu hingga mendidih, masukkan daun jambu, tunggu sampai kurang lebih 5 menit, masukkan kembang, daunkates, pare) diamkan sebentar, matikan api. Baru setelah itu tiriskan dan siap untuk dimasak sesuai selera.', 'memasak-daun-kates-supaya-tidak-pahit'),
(8, 'Membersihkan Peralatan Masak yang Kotor Karena Kunyit', 'Jika peralatan masak kusam akibat noda dari bumbu yang berwarna seperti kunir/kunyit, atau panci yang terlalu sering dibuat merebus air jadi kekuningan. Segera ambil satu sendok baking soda, beri sedikit air, gosok-gosokkan ke panci, diamkan sebentar, lalu bilas. Jika masih ada noda bisa diulang lagi.', 'membersihkan-peralatan-masak-yang-kotor-karena-kunyit'),
(9, 'Jangan Simpan Sayur di Kulkas Menggunakan Plastik Kresek', 'Jika menyimpan sayuran di dalam kulkas, jangan menggunak tas plastik kresek, tapi gunakan koran atau majalah bekas. Sebab dengan cara ini bisa mencegah air embun sayuran menggenang yang bisa mengakibatkan sayur cepat busuk.', 'jangan-simpan-sayur-di-kulkas-menggunakan-plastik-kresek'),
(10, 'Menghilangkan Rasa Panas di Tangan Karena Cabe atau Sambal', 'Untuk menghilangkan rasa panas ditangan akibat terlalu lama berkontak dengan cabe atau sambal, bisa dilakukan dengan cara cuci bersih tangan dengan sabun sampai 2 atau 3 kali, kemudian di lap, dan masukkan tangan kedalam beras, benam dan remas-remas beras sebentar, dijamin rasa panas ditangan akan hilang', 'menghilangkan-rasa-panas-di-tangan-karena-cabe-atau-sambal'),
(11, 'Mengurangi kuah yang keasinan', 'Kamu bisa menaruh satu kentang yang sudah dipotong-potong agak besar ke dalam kuah masakan yang sedang kamu masak. Dijamin rasa asinnya akan berkurang.', 'mengurangi-kuah-yang-keasinan'),
(12, 'Mengupas kulit jahe', 'Cara mudah untuk mengupas kulit jahe adalah dengan menggunakan sendok dan bukan pisau.', 'mengupas-kulit-jahe'),
(13, 'Memasak sayur pare yang pahit agar enak', 'Potong dan rendam pare dengan air selama 5-10 menit. Ambil dan peras pare beberapa kali sampai airnya keluar. Kemudian pare yang telah direndam diberi jeruk nipis.', 'memasak-sayur-pare-yang-pahit-agar-enak'),
(14, 'Membuat alpukat agar cepat matang', 'Kalau kamu membeli alpukat yang belum matang, kamu bisa menaruhnya di dekat apel. Karena asam yang dimiliki apel dapat membuat alpukat menjadi matang.', 'membuat-alpukat-cepat-matang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kitchen-tips`
--
ALTER TABLE `kitchen-tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kitchen-tips`
--
ALTER TABLE `kitchen-tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
