-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 08:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `deskripsi_kategori` text NOT NULL,
  `foto_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`, `foto_kategori`) VALUES
(16, 'PANTAI', 'Dapat diartikan sebagai wisata yang memanfaatkan potensi sumber daya alam pantai beserta komponen pendukungnya, baik alami maupun buatan atau gabungan keduanya itu (John 0. Simond, 1978).', '20200810102439.jpg'),
(17, 'CURUG', 'Merupakan formasi aliran air yang jatuh dari ketinggian tertentu karena memang lintasan airnya yang demikian.', '20200810103013.jpg'),
(18, 'BUKIT', 'Pengertian Perbukitan didefinisikan sebagai beberapa bukit yang berjajar atau suatu rangkaian bukit yang panjang pada suatu daerah yang luas. Perbukitan dapat juga diartikan sebagai bentang alam berupa tonjolan- tonjolan di daratan.', '20200810103025.jpg'),
(19, 'GUNUNG', 'Gunung adalah sebuah bentuk tanah yang menonjol di atas wilayah sekitarnya. Gunung adalah bagian dari permukaan bumi yang menjulang lebih tinggi dibandingkan dengan daerah sekitarnya.', '20200810103042.jpg'),
(20, 'TAMAN', 'Taman adalah sebuah area atau sebidang tanah yang ditanami berbagai tumbuhan dan diberikan beberapa komponen tambahan yang bermanfaat bagi manusia.', '20200810103051.jpg'),
(26, 'DANAU', 'Tubuh perairan yang dikelilingi daratan dan terletak di daerah cekungan.', '20200810103058.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('superadmin','admin') NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`, `nama`) VALUES
(30, 'admin', '202cb962ac59075b964b07152d234b70', 'superadmin', 'Muhamad Muslih Himawan'),
(32, 'Yoga', '202cb962ac59075b964b07152d234b70', 'admin', 'Muhamad Prayogo'),
(62, 'efriza', '202cb962ac59075b964b07152d234b70', 'admin', 'Muhammad Efriza'),
(63, 'asd', 'asd', 'superadmin', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat_wisata` text NOT NULL,
  `harga` varchar(11) NOT NULL,
  `fasilitas` text NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kategori`, `nama_wisata`, `alamat_wisata`, `harga`, `fasilitas`, `lampiran`) VALUES
(123124, 18, 'ranggon hils', 'Gn. Picung, Kec. Pamijahan, Bogor, Jawa Barat 16810', '10rb', '1. Spot Camping Ground\r\n2. Toilet\r\n3. Pendopo\r\n4. Spot Selfie yang cukup banyak terhitung ada 16 titik spot.', '20200810203818.jpg'),
(123128, 17, 'Seribu', 'Gn. Sari, Kec. Pamijahan, Bogor, Jawa Barat 16810', '20rb', '1. MCK\r\n2. shelter \r\n3. tempat makan', '20200810203200.jpg'),
(123129, 17, 'Kondang', 'Gn. Sari, Kec. Pamijahan, Bogor, Jawa Barat 16810', '10rb', '1. Area parkir yang cukup luas\r\n2. Toilet\r\n3. Mushola\r\n4. Warung.', '20200810203338.jpg'),
(123132, 18, 'Kawah Ratu', 'Gn. Sari, Kec. Pamijahan, Bogor, Jawa Barat 16810', '20rb', '1. kawasan parkir\r\n2. tempat makan\r\n3. camping ground', '20200810203839.jpg'),
(123133, 17, 'Luhur', 'Jl. Hegarmanah, Pamijahan, Tapos I, Tenjolaya, Tapos I, Tenjolaya, Bogor, Jawa Barat 16370', '45rb', '1. warung-warung makanan\r\n2. kamar mandi\r\n3. tempat ibadah', '20200810203354.jpg'),
(123136, 17, 'Cigamea', 'Kec. Pamijahan, Kabupaten Bogor, Jawa Barat 16810', '10rb', '1. gazebo\r\n2. aula\r\n3. musola\r\n4. kamar ganti\r\n5. toilet', '20200810203529.jpg'),
(123138, 19, 'Batu Jonggol', 'Sukaharja, Sukamakmur, Bogor, Jawa Barat', '15rb', '1. Tempat parkir\r\n2. Warung', '20200810204433.jpg'),
(123140, 19, 'Pancar', 'Karang Tengah, Kec. Babakan Madang, Bogor, Jawa Barat', '10rb', '1. Tenda\r\n2. Hotel/Penginapan\r\n3. Kamar Mandi\r\n4. Pemandian Air Panas', '20200810204454.jpg'),
(123141, 18, 'Suaka Elang', 'Ciburayut, Cigombong, Bogor, Jawa Barat 16110', '50rb', '1. Musola\r\n2. Tempat Parkir\r\n3. Toilet', '20200810203907.jpg'),
(123146, 18, 'Paralayang', 'JL Raya Puncak Km 87, Bukit Paralayang, Puncak, West Java, Tugu Sel., Kec. Cisarua, Bogor, Jawa Barat 16750', '10rb', '1. Warung makan\r\n2. Mushola \r\n3. Tempat parkir', '20200810204020.jpg'),
(123148, 26, 'Telaga Warna', 'Jalan Raya Puncak - Cianjur, Tugu Utara,Cisarua,Bogor,Jawa Barat,Indonesia,16750', '25rb', '1. Kamar Mandi\r\n2. Musolah\r\n3. flying fox', '20200810205012.jpg'),
(123149, 20, 'Safari', 'Jalan Kapten Harun Kabir No. 724, Cibeureum, Cisarua, Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 16750', '220rb', '1. Toilet\r\n2. Musolah\r\n3. Kenadaraan Gratis', '20200810204801.jpg'),
(123150, 19, 'Kencana', 'Megamendung, Bogor, Jawa Barat', '35rb', '1. Pos pemberhentian\r\n2. Warung\r\n3. Camping Ground', '20200810204551.jpg'),
(123151, 20, 'Matahari', 'Jalan Raya Puncak KM 77 Cisarua, Bogor. ', '60rb', '1. Toilet\r\n2. Mushola\r\n3. Penginapan\r\n4. camping Ground', '20200810204734.jpg'),
(123152, 20, 'Bunga', 'Jl. Taman BungaRW.07, Ciluar, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16156', '40rb', '1. Mobil Wara-Wiri\r\n2. Mushola\r\n3. Doto Train', '20200810204833.jpg'),
(123158, 20, 'Buah Mekarsari', 'Jalan Raya Cileungsi -Jonggol KM.3, Mekarsari, Cileungsi, Mekarsari, Kec. Cileungsi, Bogor, Jawa Barat 16820', '50rb', '1. Outbound\r\n2. Wahana Perinan\r\n3. Musolah\r\n4. Toilet', '20200810204851.jpg'),
(123159, 19, 'Gede', 'Cipendawa, Kec. Pacet, Kabupaten Cianjur, Jawa Barat', '55rb', '1. Camping Ground\r\n2. klinik\r\n3. Pusat Informasi', '20200810204612.png'),
(123162, 18, 'Halimun', 'Gunung Sari, Pamijahan, Bogor.', '10rb', '1. Jembatan Gantung\r\n2. Rumah Hobbit\r\n3. Rumah Pohon', '20200810204127.jpg'),
(123163, 19, 'Kapur', 'Klapanunggal, Kec. Klapanunggal, Bogor, Jawa Barat 16710', '10 rb', 'NULL', '20200810204642.jpg'),
(123164, 19, 'Munara', 'Desa Kampung Sawah, Kecamatan Rumpin, Kabupaten Bogor. ', '20rb', '1. Warung\r\n2. Parkiran', '20200810204659.jpg'),
(123165, 18, 'Alas Bandawasa', 'Desa Pasir Jaya, Kecamatan Cigombong, Kabupaten Bogor. ', '5rb', '1.  toilet\r\n2.  kantin\r\n3.  parkir \r\n4.  mushola\r\n5.  area perkemahan. ', '20200810204237.jpg'),
(123166, 20, 'Kebun Raya ', 'Jl. Ir. H. Juanda No.13, Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16122', '15rb', '1. Pusat Informasi & Jasa pemandu Resmi.\r\n2. Mobil Keliling.\r\n3. Kafe Dedaunan.\r\n4. Toko Tanaman & Cenderamata.\r\n5. Museum Zoologi & Kantin Museum Zoologi.\r\n6. Musholla (di dekat Lapangan Kafe \r\n   Dedaunan & Rumah Anggrek)\r\n7. Toilet', '20200810204910.jpg'),
(123167, 17, 'Nangka', 'Sukajadi, Kec. Tamansari, Bogor, Jawa Barat 16370', '17rb', '1. Camping Ground\r\n2. Penginapan', '20200810203550.jpg'),
(123170, 26, 'Situ Rawa Gede', 'Sirnajaya,Sukamakmur,Bogor,Jawa Barat,Indonesia,16830.', '20rb', '1. parkir\r\n2. toilet\r\n3. mushola\r\n4. bale-bale istirahat\r\n5. kios-kios makanan.\r\n6. kendaraan air\r\n7. area berkemah\r\n8. kolam renang \r\n9. kolam terapi', '20200810205110.jpg'),
(123171, 17, 'cikuluwung', ' Pamijahan, Bogor Jawa Barat', '20rb', '1. Pelampung\r\n2. Area Parkir\r\n3. Gazebo\r\n4. Warung\r\n5. Toilet', '20200810203754.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123174;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
