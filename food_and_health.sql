-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 05:25 AM
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
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `username`, `blog_name`, `status`) VALUES
(1, 'Fakhrie', 'teh-cocktail', 'OFF'),
(2, 'harukanakagawa', 'teh-cocktail', 'OFF'),
(4, 'harukanakagawa12', 'sayur-asem', 'OFF'),
(6, 'shani_indira', 'bubur-edamame-telur-puyuh', 'OFF'),
(7, 'shani_indira', 'ayam-krispy-bumbu-cabai', 'ON'),
(8, 'shani_indira', 'tumis-udang-buncis', 'ON'),
(9, 'shani_indira', 'tumis-kacang-panjang-dan-tempe', 'OFF'),
(10, 'akicha', 'sayur-asem', 'ON'),
(11, 'shani_indira', 'sambal-goreng-tempe', 'ON'),
(12, 'shani_indira', 'resep-kangkung-krispy', 'ON'),
(13, 'shani_indira', 'kangkung-bumbu-tauco', 'ON'),
(14, 'shani_indira', 'kangkung-bumbu-kemiri-pedas', 'OFF'),
(15, 'yuki_kashiwagi', 'tumis-udang-buncis', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_tips`
--

CREATE TABLE `kitchen_tips` (
  `id` int(11) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen_tips`
--

INSERT INTO `kitchen_tips` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(2, 'Membilas Sayur dengan Garam', 'Saat mencuci kangkung, arnong/selada air atau genjer serta tanaman air lainnya jangan lupa saat bilasan pertama bubuhkan sesendok garam lalu diamkan sejenak agar binatang-binatan kecil yang mungkin hidup dibatang dan daunnya mati. Biasanya yang hobi nongkrong disitu lintah, keong, ulat dan cacing air. Brokoli dan kembang kol juga sering ada ulatnya, jadi jangan lupa pula menggunakan cara ini.', 'membilas-sayur'),
(3, 'Cara Mengupas Kentang Lebih Mudah', '1.)Iris tipis melingkar di kulit kentang.\r\n\r\n2.) kemudian rebus kentang tersebut selama lima menit.\r\n\r\n3.) Usai direbus, langsung dimasukkan ke dalam semangkuk air dingin dan tunggu lagi selama lima menit. Dijamin deh kulit kentang lebih mudah dikupas dan kentang tidak akan menjadi coklat.', 'cara-mengupas-kentang-lebih-mudah'),
(4, 'Cara agar Tahu Bisa Tahan Lama', 'Agar tahu lebih awet ketika disimpan, cuci bersih dengan air, kemudian siram dengan air panas, setelah itu lap dengan tisu dapur, simpan didalam tupperware, tutup rapat, kemudian letakkan didalam kulkas. Jika tahu adalah kualitas baik maka bisa bertahan selama 1 minggu.', 'cara-agar-tahu-awet'),
(5, 'Membilas Sayur dengan Garam', 'Saat mencuci kangkung, arnong/selada air atau genjer serta tanaman air lainnya jangan lupa saat bilasan pertama bubuhkan sesendok garam lalu diamkan sejenak agar binatang-binatan kecil yang mungkin hidup dibatang dan daunnya mati. Biasanya yang hobi nongkrong disitu lintah, keong, ulat dan cacing air. Brokoli dan kembang kol juga sering ada ulatnya, jadi jangan lupa pula menggunakan cara ini.', 'membilas-sayur-dengan-garam'),
(6, 'Cara Menyimpan Daging di Freezer', 'Jika menyimpan daging di freezer, pastikan daging tidak keluar masuk freezer berulangkali, karena hal ini bisa membuat bakteri berkembangbiak. Sebaiknya potong-potong dulu dagingnya sesuai dengan perkiraan kebutuhan per tiapkali masak dan simpan di plastik kecil-kecil secara terpisah, sehingga ketika akan mengambil, bisa ambil seperlunya saja.', 'cara-menyimpan-daging-di-freezer'),
(7, 'Memasak Daun Kates Supaya Tidak Pahit', 'Agar kembang kates, daun kates dan pare tidak terlalu pahit ketika dikonsumsi, sebaiknya di rebus bersamaan dengan daun jambu biji (caranya, rebus air, ambil beberapa lembar daun jambu biji, tunggu hingga mendidih, masukkan daun jambu, tunggu sampai kurang lebih 5 menit, masukkan kembang, daunkates, pare) diamkan sebentar, matikan api. Baru setelah itu tiriskan dan siap untuk dimasak sesuai selera.', 'memasak-daun-kates-supaya-tidak-pahit'),
(8, 'Membersihkan Peralatan Masak yang Kotor Karena Kunyit', 'Jika peralatan masak kusam akibat noda dari bumbu yang berwarna seperti kunir/kunyit, atau panci yang terlalu sering dibuat merebus air jadi kekuningan. Segera ambil satu sendok baking soda, beri sedikit air, gosok-gosokkan ke panci, diamkan sebentar, lalu bilas. Jika masih ada noda bisa diulang lagi.', 'membersihkan-peralatan-masak-yang-kotor-karena-kunyit'),
(9, 'Jangan Simpan Sayur di Kulkas Menggunakan Plastik Kresek', 'Jika menyimpan sayuran di dalam kulkas, jangan menggunak tas plastik kresek, tapi gunakan koran atau majalah bekas. Sebab dengan cara ini bisa mencegah air embun sayuran menggenang yang bisa mengakibatkan sayur cepat busuk.', 'jangan-simpan-sayur-di-kulkas-menggunakan-plastik-kresek'),
(10, 'Menghilangkan Rasa Panas di Tangan Karena Cabe atau Sambal', 'Untuk menghilangkan rasa panas ditangan akibat terlalu lama berkontak dengan cabe atau sambal, bisa dilakukan dengan cara cuci bersih tangan dengan sabun sampai 2 atau 3 kali, kemudian di lap, dan masukkan tangan kedalam beras, benam dan remas-remas beras sebentar, dijamin rasa panas ditangan akan hilang', 'menghilangkan-rasa-panas-di-tangan-karena-cabe-atau-sambal'),
(11, 'Mengurangi Kuah yang Keasinan', 'Kamu bisa menaruh satu kentang yang sudah dipotong-potong agak besar ke dalam kuah masakan yang sedang kamu masak. Dijamin rasa asinnya akan berkurang.', 'mengurangi-kuah-yang-keasinan'),
(12, 'Cara Mudah Mengupas Kulit Jahe', 'Cara mudah untuk mengupas kulit jahe adalah dengan menggunakan sendok dan bukan pisau.', 'mengupas-kulit-jahe'),
(13, 'Memasak Sayur Pare yang Pahit agar Enak', 'Potong dan rendam pare dengan air selama 5-10 menit. Ambil dan peras pare beberapa kali sampai airnya keluar. Kemudian pare yang telah direndam diberi jeruk nipis.', 'memasak-sayur-pare-yang-pahit-agar-enak'),
(14, 'Membuat Alpukat agar Cepat Matang', 'Kalau kamu membeli alpukat yang belum matang, kamu bisa menaruhnya di dekat apel. Karena asam yang dimiliki apel dapat membuat alpukat menjadi matang.', 'membuat-alpukat-cepat-matang');

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
(1, 'rica-rica', 'Ayam Rica-Rica', 'Rica-rica merupakan salah satu bumbu bercita rasa pedas yang berasal dari Manado, Sulawesi Utara. Bumbu rica-rica cocok dimasak dengan ikan, daging sapi, atau ayam. Kali ini, kamu bisa mencoba olahan ayam dengan bumbu rica-rica yang pedas manis', 'Pedas', 'Lauk', 'Goreng', ''),
(3, 'teriyaki-tahu', 'Tahu Teriyaki', 'Ingin menikmati saus teriyaki tanpa daging sapi? Bisa kok. Dengan menggunakan tahu sebagai alternatif daging tentunya akan menghadirkan masakan yang lebih sehat. Cita rasa yang yang disajikan juga tidak kalah enak dengan teriyaki yang menggunakan daging sapi sebagai komposisi utamanya.', 'Camilan', '', '', ''),
(4, 'mie-ayam-jakarta', 'Mie Ayam Jakarta Spesial', 'Mie ayam memang menjadi salah satu makanan favori banyak orang, rasanya yang enak dan mengenyangkan bisa menjadi pilihan untuk makan siang, karena sudah terdapat karbohidrat, sayuran dan protein. Kali ini, kita akan berbagi resep mie ayam Jakarta spesial, ini terbuat dari mie basah, toping ayam dan tambahan sayuran dengan bumbu yang meresap dan nikmat.', 'Makanan Basah', 'Rebus', '', ''),
(5, 'soto-vegan', 'Soto Bening Vegetarian', 'Sedang mencari ide resep soto bening vegetarian yang unik? Cara membuatnya memang susah-susah gampang. Jika salah mengolah maka hasilnya akan hambar dan bahkan tidak sedap. Padahal soto bening vegetarian yang enak seharusnya punya aroma dan rasa yang bisa memancing selera kita.', 'Rebus', 'Makanan Basah', 'Sayur', ''),
(6, 'es-buah', 'Es Buah Kekinian', 'Eksistensi dari es buah memang selalu terjaga sampai saat ini, meski kemunculannya sudah sejak lama. Minuman ini masih menjadi satu sajian yang melegakan dahaga ketika panas terik. Dengan berbagai modifikasi bahan, es buah kekinian pun hadir dan menjadi minuman andalan.\r\n', 'Minuman', '', '', ''),
(7, 'omelet', 'Telur Omelet ala Hotel', 'Telur dadar atau omelet adalah variasi hidangan telur goreng yang disiapkan dengan cara mengocok telur dan menggorengnya dengan minyak goreng atau mentega panas di sebuah wajan. omelette terkenal sebagai makanan yang sering ada di prasmanan hotel saat sarapan. Ciri khas omelet hotel biasanya berisi paprika dan harum mentega. ', 'Breakfast', 'Goreng', '', ''),
(8, 'semur-ayam-saus-tiram', 'Semur Ayam Saus Tiram Jamur Kancing', 'Semur adalah masakan asimilasi dari Eropa yang menjadi masakan rumahan populer di keluarga Indonesia. Berbagai protein hewani dan nabati bisa menjadi bintang utamanya, tidak terkecuali ayam. Sedangkan untuk pelengkapnya, semur sering ditambahkan potongan kentang dan tomat.', 'Makanan Basah', 'Lauk', '', ''),
(9, 'sambal-matah', 'Sambal Matah', 'Sambal matah adalah salah satu sambal khas Indonesia yang berasal dari Bali. Sambal ini tidak mengalami proses masak dengan api. Hanya iris-mengiris semua bahan lalu campur dan beri sedikit minyak kelapa serta di bumbui dengan sedikit garam dan di beri perasan jeruk nipis.', 'Pedas', 'Sambal', '', ''),
(10, 'telur-ceplok-masak-santan', 'Telur Ceplok Masak Santan', 'Sajikan dan nikmati enak dan sedapnya olahan telur ceplok yang disajikan dengan variasi bumbu berbeda yang lezat. Sajian kali ini akan dapat dihidangka bersama dengan sepiring nasi hangat yang enak dan sedap.', 'Makanan Basah', 'Lauk', 'Goreng', ''),
(11, 'tahu-cabai-garam-praktis', 'Tahu Cabai Garam Praktis', 'Resep tahu cabai garam cukup mudah dipraktikkan di rumah. Bahan-bahan yang digunakan pun hampir selalu ada di tiap dapur.  Tahu cabai garam biasa disajikan di restoran chinese food. Teksturnya yang kering dan rasanya yang gurih membuat tahu cabai garam cocok dijadikan sebagai camilan atau lauk makan.', 'Camilan', 'Goreng', 'Lauk', ''),
(12, 'teh-cocktail', 'Teh Cocktail', 'Cocktail buah atau koktil adalah makanan yang terbuat dari potongan buah dan sirup serta disajikan dalam keadaan dingin. Meskipun namanya mirip dengan minuman beralkohol yang disebut “koktail”, koktail buah sama sekali tidak dicampur atau mengandung alkohol. Cocktail buah dapat dikreasikan menjadi aneka resep yang menggugah selera.', 'Minuman', '', '', ''),
(13, 'ayam-krispy-bumbu-cabai', 'Ayam Krispy Bumbu Cabai', 'Ayam bisa diolah menjadi berbagai macam menu makanan. Bahkan saat ini, ayam yang sudah digoreng dengan tepung diberi sedikit sensasi hancur dengan cara digeprek.\r\n\r\nMemangnya, apa saja kandungan gizi di dalam daging ayam segar? Berdasarkan Data Komposisi Pangan Indonesia, 100 gram daging ayam memiliki kandungan gizi', 'Lauk', 'Pedas', 'Goreng', ''),
(14, 'bubur-edamame-telur-puyuh', 'Bubur Edamame Telur Puyuh', 'Edamame merupakan sumber protein nabati untuk membangun otot dan sel-sel tubuh. Edamame juga mengandung serat yang baik untuk pencernaan anak.', 'Makanan Basah', 'Rebus', '', ''),
(15, 'kangkung-bumbu-kemiri-pedas', 'Kangkung Bumbu Kemiri Pedas', 'Kangkung bumbu kemiri pedas. Kangkung merupakan salah satu tanaman yang banyak ditemui di negara-negara Asia, khususnya di Indonesia.', 'Sayur', 'Pedas', '', ''),
(16, 'kangkung-bumbu-tauco', 'Kangkung Bumbu Tauco', 'Kangkung bumbu tauco. kangkung Tak jauh berbeda dengan jenis sayuran lainnya, sayuran yang punya nama latin Ipomoea aquatica ini mengandung sejumlah nutrisi yang baik bagi tubuh.', 'Sayur', 'Makanan Basah', '', ''),
(17, 'resep-kangkung-krispy', 'Resep Kangkung Krispy', 'Kangkung merupakan salah satu tanaman yang banyak ditemui di negara-negara Asia, khususnya di Indonesia. Dikutip dari situs Data Komposisi Pangan Indonesia, berikut ini adalah kandungan gizi yang terdapat pada 100 gram (g) kangkung segar', 'Sayur', 'Camilan', 'Goreng', ''),
(18, 'sambal-goreng-tempe', 'Sambal Goreng Tempe', 'Tempe adalah makanan yang pasti tidak asing bagi Anda. Makanan fermentasi dari kacang kedelai ini telah menemani hidup sebagai orang Indonesia. Rasa khas tempe dan struktur yang sangat berbeda dari tahu ini selain murah juga bisa bikin ketagihan. Beragam kandungan pada tempe menyimpan banyak manfaat bagi kesehatan tubuh.', 'Sambal', 'Pedas', 'Goreng', 'Makanan Basah'),
(19, 'sambal-pelecing-kangkung', 'Sambal Pelecing Kangkung', 'Kangkung adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Tumbuhan ini banyak dijual di pasar-pasar. ', 'Sambal', 'Pedas', '', ''),
(20, 'sayur-asem', 'Sayur Asem', 'Sayur asem adalah satu di antara menu masakan yang memiliki rasa asam, tetapi ada pula yang membuatnya menjadi pedas. Masakan ini terdiri dari berbagai campuran sayur-sayuran dan kacang-kacangan.', 'Sayur', 'Kuah', 'Makanan Basah', 'Rebus'),
(21, 'tumis-kacang-panjang-dan-tempe', 'Tumis Kacang Panjang dan Tempe', 'Kacang panjang tentu buka nama sayuran yang terdengar asing di telinga masyarakat Indonesia. Meski umum dimakan, mungkin tak banyak yang mengetahui kandungan gizi dan manfaat kesehatan dari kacang panjang.', 'Sayur', 'Makanan Basah', 'Lauk', 'Goreng'),
(22, 'tumis-udang-buncis', 'Tumis Udang Buncis', 'Udang merupakan salah satu boga bahari yang banyak dikonsumsi di seluruh dunia. Dalam dunia hewan, udang masuk ke dalam ordo decapoda dan banyak dibudidayakan secara komersial dalam budi daya perairan.', 'Sayur', 'Makanan Basah', 'Lauk', 'Goreng');

-- --------------------------------------------------------

--
-- Table structure for table `submit_resep`
--

CREATE TABLE `submit_resep` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_resep` varchar(1000) NOT NULL,
  `deskripsi_resep` varchar(1000) NOT NULL,
  `komposisi` varchar(2000) NOT NULL,
  `cara_buat` varchar(2000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status_resep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_resep`
--

INSERT INTO `submit_resep` (`id`, `username`, `nama_resep`, `deskripsi_resep`, `komposisi`, `cara_buat`, `gambar`, `status_resep`) VALUES
(4, 'shani_indira', 'Kentang Goreng Renyah Ala KFC', 'French fries atau kentang goreng seringkali dijadikan sebagai camilan saat waktu senggang. Apalagi kalau kentang goreng krispi dicampur dengan bumbu keju jadi makin enak. Kentang goreng bisa dibikin sendiri dengan tekstur yang garing di luar dan empuk di dalamnya.', '2 buah kentang ukuran besar\r\nGaram secukupnya\r\nAir secukupnya\r\nMinyak goreng', 'Cuci bersih kentang, Bunda bisa mengupasnya atau tidak. Lalu potong tipis kemudian baru potong panjang.\r\n\r\nRebus air hingga mendidih, dan tambahkan garam secukupnya supaya suhu stabil. Setelah mendidih, rebus kentang sebentar saja. Angkat dan letakkan dalam tray. Dinginkan baru setelah itu masukkan ke dalam freezer.\r\n\r\nPanaskan minyak hingga suhu 170 derajat Celcius. Keluarkan kentang dari freezer, lalu keringkan dengan tisu sebelum digoreng.\r\n\r\nMasukkan kentang jika minyak sudah panas. Goreng hingga kentang mengambang dan berwarna keemasan. Angkat dan tiriskan. Taburkan sedikit garam dan aduk hingga tercampur rata.\r\n\r\nSajikan dengan sambal cocol atau topping kesukaan', 'french-fries-ala-nigella-lawson-1_169.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `blog_name`) VALUES
(116, 0, 'Bagus', 'shani_indira', '2021-10-23 08:13:43', 'sayur-asem'),
(117, 0, 'Jadi Pengen Coba', 'shani_indira', '2021-10-23 08:20:45', 'ayam-krispy-bumbu-cabai'),
(119, 0, 'EwingHD', 'shani_indira', '2021-10-26 06:28:50', 'sayur-asem'),
(145, 0, 'lucu', 'akicha', '2021-11-03 05:26:55', 'tumis-udang-buncis'),
(153, 0, 'Udah pernah nyobak', 'yuki_kashiwagi', '2021-11-08 03:25:20', 'tumis-udang-buncis'),
(154, 0, 'bagus', 'shani_indira', '2021-11-17 03:11:30', 'kangkung-bumbu-tauco');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nohp`, `gambar`) VALUES
('akicha', '$2y$10$HxuJrbiM1dAwHjYr593wBO/fRTEId4BAobMbRtSjRn5uWlg5gv5Ba', '123@gmail.com', '08123444555', 'akicha.png'),
('shani_indira', '$2y$10$MBnLigPRbNLEJ8rPVBZT4OOtDt5oqXup/6F/j2f6MrzhYm4C4f3KG', '123@gmail.com', '08970871222', 'shani_indira.png'),
('yuki_kashiwagi', '$2y$10$xCQ0qn.lC3ZHpcQv0pGbnOZFXTkbTG2X1u0h/euhrjA4B7pYXmGRS', '123@gmail.com', '089708712921', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_tips`
--
ALTER TABLE `kitchen_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_resep`
--
ALTER TABLE `submit_resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kitchen_tips`
--
ALTER TABLE `kitchen_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `submit_resep`
--
ALTER TABLE `submit_resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
