-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:15 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wanarata`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `hits_album` int(5) NOT NULL DEFAULT '1',
  `tgl_posting` date NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `album_seo`, `keterangan`, `gbr_album`, `aktif`, `hits_album`, `tgl_posting`, `jam`, `hari`, `username`) VALUES
(50, 'Wanarata', 'wanarata', '', 'imggalery41.jpg', 'Y', 0, '2020-07-27', '21:43:52', 'Senin', 'admin'),
(51, 'Outbound', 'outbound', '', 'imgtentangkami21.jpg', 'Y', 0, '2020-07-27', '21:44:07', 'Senin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sub_judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `utama` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` longtext CHARACTER SET latin1 NOT NULL,
  `keterangan_gambar` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `username`, `judul`, `sub_judul`, `youtube`, `judul_seo`, `headline`, `aktif`, `utama`, `isi_berita`, `keterangan_gambar`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`, `status`) VALUES
(22, 62, 'admin', 'Wanarata', '', '', 'wanarata', 'Y', 'N', 'Y', '<p>sdfsdf</p>\r\n', '', 'Kamis', '2020-07-30', '08:49:12', '54800842_845150039218195_5439047052743909606_n.jpg', 0, '', 'Y'),
(23, 61, 'admin', 'Wanarata, Wahana Wisata Baru di Kroya ', '', '', 'wanarata-wahana-wisata-baru-di-kroya-', 'Y', 'N', 'Y', '<p>CILACAP &ndash; Wahana wisata Wanarata Desa Karangmangu Kecamatan Kroya, menjadi wisata unggulan baru bagi masyarakat Kroya. Sebab wahana tersebut menyajikan berbagai macam spot selfie dan ruang untuk bersantai. Wanarata yang dibangun dengan anggaran BUMDes Karangmangu, diharapkan dapat menjadi solusi untuk memajukan perekonomian masyarakat Desa Karangmangu. &ldquo;Kroya selama ini belum memiliki wahana wisata, jadi Wanarata hadir untuk memberikan warna baru. Masyarakat tidak melulu main ke alun-alun Kroya, namun bisa menikmati tempat baru,&rdquo; ungkap Direktur BUMDes Karangmangu, Abas. Dia mengatakan, dengan adanya Wanatara, masyarakat Desa Karangmangu bisa berjualan aneka kue tradisional di sekitarnya. Selain itu, rencananya Wanarata akan dijadikan shelter kuliner tradisional.<br />\r\n&nbsp;</p>\r\n\r\n<p>&ldquo;Masyarakat bisa berjualan, menambah penghasilan. Jadi yang menganggur bisa memiliki pendapatan,&rdquo; kata dia. Menurutnya, Wanarata bakal terus diperbaharui supaya masyarakat bisa puas bermain di wahana tersebut. &ldquo;Kita sedang membuat kolam renang, rencananya H+7 lebaran bisa jadi dan digunakan oleh pengunjung,&rdquo; ujarnya.<br />\r\n<br />\r\nSalah seorang pengunjung, Nandana mengatakan, dengan berdirinya Wanarata, dia tak usah jauh-jauh untuk bertamasya bersama keluarga. &ldquo;Disini banyak spot selfie bagus, selain itu kita tidak usah jauh-jauh mencari tempat untuk bermain. Sebelumnya saya dan keluarga harus jauh-jauh ke Cilacap kota untuk mencari objek. Sekarang di Kroya juga sudah ada,&rdquo; ungkapnya. Dia berharap, Wanarata bisa terus dikembangkan supaya menjadi pilihan wisata unggulan di Cilacap. &ldquo;Semoga bisa terus dikembangkan dan bisa dikenal oleh masyarakat di luar Cilacap. Karena otomatis bisa menambah kesejahteraan masyarakat juga,&rdquo; kata dia.<br />\r\n<br />\r\nSumber:&nbsp;<a href=\"https://radarbanyumas.co.id/wanarata-wahana-wisata-baru-di-kroya/\">https://radarbanyumas.co.id/wanarata-wahana-wisata-baru-di-kroya/</a><br />\r\nCopyright &copy; Radarbanyumas.co.id</p>\r\n', '', 'Kamis', '2020-07-30', '08:49:01', '65972840_2335058533287534_796509074880152261_n.jpg', 0, '', 'Y'),
(27, 62, 'admin', 'Edukasi dan konseling gizi dalam rangka hari gizi nasional', '', '', 'edukasi-dan-konseling-gizi-dalam-rangka-hari-gizi-nasional', 'Y', 'N', 'Y', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus nunc, pharetra eget viverra quis, pretium vel odio. Maecenas tristique mi non erat rhoncus, vitae convallis turpis congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque efficitur erat et sollicitudin venenatis. Quisque nec ipsum posuere, vehicula neque vitae, blandit sapien. Ut purus nunc, malesuada at sem sed, pellentesque malesuada sem. In lectus est, venenatis quis lacinia at, bibendum ac risus. Phasellus feugiat aliquam enim, a sollicitudin neque euismod sed. Pellentesque lectus nulla, tempor ut nunc nec, dictum malesuada ante. Etiam vitae dui fermentum, tempus nisl nec, egestas quam. Donec sagittis enim eu porttitor feugiat.</p>\r\n\r\n<p>Donec erat orci, placerat et risus blandit, vehicula ullamcorper nibh. Morbi quis laoreet odio. Suspendisse dolor nisi, bibendum id nulla sed, lacinia facilisis felis. In vestibulum, eros sit amet volutpat faucibus, nunc ipsum dapibus lorem, non sagittis orci ex at elit. Donec non lorem egestas, laoreet nisi vel, faucibus libero. Quisque aliquam porta turpis, eu dignissim turpis mollis quis. Nulla elit lorem, fringilla non consectetur id, efficitur ac neque. Nunc mattis odio porttitor, interdum ex non, egestas libero.</p>\r\n\r\n<p>Donec nec sollicitudin ligula. Vestibulum viverra eget ligula quis auctor. Cras mollis nunc ac ligula mollis iaculis. Sed in erat ultrices, cursus libero et, placerat neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit est libero, quis volutpat lorem euismod a. Fusce gravida erat in elementum imperdiet. Aenean sem enim, efficitur vitae lacus non, tincidunt commodo ligula. Sed consectetur mi ac nunc vestibulum ultrices. Phasellus posuere interdum ipsum et pretium.</p>\r\n\r\n<p>Praesent non finibus dolor, ac mattis enim. Duis consequat ligula quis quam sodales condimentum. Aliquam dolor velit, efficitur id maximus vel, venenatis eget lectus. Praesent non viverra sem. Aenean eu diam sem. Praesent aliquam nec purus imperdiet cursus. Phasellus egestas ut enim id elementum. Pellentesque egestas tempor mauris, eu varius libero facilisis ac. Curabitur tincidunt feugiat nisi et egestas. Vivamus a sem luctus urna scelerisque faucibus. Fusce ac nunc quis neque varius lacinia. Aenean at tortor nec lorem rhoncus elementum sit amet vitae ligula.</p>\r\n\r\n<p>Vestibulum bibendum lectus ac mollis luctus. Duis pharetra dui nec sapien sodales pharetra. Duis quis mauris eleifend, blandit ex at, ullamcorper turpis. Donec at lobortis tellus, eget viverra libero. Curabitur vitae lacus vestibulum neque bibendum vehicula. Morbi sit amet massa rutrum, volutpat sapien a, aliquet lorem. Morbi rutrum libero quis tellus ullamcorper convallis. Nunc posuere sapien a turpis viverra sollicitudin. Fusce mattis sagittis tempus. Duis viverra aliquam tristique. Praesent ac ultrices lorem. Fusce laoreet ornare dolor. Phasellus vitae feugiat sem.</p>\r\n', '', 'Kamis', '2020-07-30', '08:48:48', '83429488_512476456069271_3548701194519352742_n.jpg', 0, '', 'Y'),
(28, 62, 'admin', 'Gathering Barrack Esport', '', '', 'gathering-barrack-esport', 'Y', 'N', 'Y', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus nunc, pharetra eget viverra quis, pretium vel odio. Maecenas tristique mi non erat rhoncus, vitae convallis turpis congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque efficitur erat et sollicitudin venenatis. Quisque nec ipsum posuere, vehicula neque vitae, blandit sapien. Ut purus nunc, malesuada at sem sed, pellentesque malesuada sem. In lectus est, venenatis quis lacinia at, bibendum ac risus. Phasellus feugiat aliquam enim, a sollicitudin neque euismod sed. Pellentesque lectus nulla, tempor ut nunc nec, dictum malesuada ante. Etiam vitae dui fermentum, tempus nisl nec, egestas quam. Donec sagittis enim eu porttitor feugiat.</p>\r\n\r\n<p>Donec erat orci, placerat et risus blandit, vehicula ullamcorper nibh. Morbi quis laoreet odio. Suspendisse dolor nisi, bibendum id nulla sed, lacinia facilisis felis. In vestibulum, eros sit amet volutpat faucibus, nunc ipsum dapibus lorem, non sagittis orci ex at elit. Donec non lorem egestas, laoreet nisi vel, faucibus libero. Quisque aliquam porta turpis, eu dignissim turpis mollis quis. Nulla elit lorem, fringilla non consectetur id, efficitur ac neque. Nunc mattis odio porttitor, interdum ex non, egestas libero.</p>\r\n\r\n<p>Donec nec sollicitudin ligula. Vestibulum viverra eget ligula quis auctor. Cras mollis nunc ac ligula mollis iaculis. Sed in erat ultrices, cursus libero et, placerat neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit est libero, quis volutpat lorem euismod a. Fusce gravida erat in elementum imperdiet. Aenean sem enim, efficitur vitae lacus non, tincidunt commodo ligula. Sed consectetur mi ac nunc vestibulum ultrices. Phasellus posuere interdum ipsum et pretium.</p>\r\n\r\n<p>Praesent non finibus dolor, ac mattis enim. Duis consequat ligula quis quam sodales condimentum. Aliquam dolor velit, efficitur id maximus vel, venenatis eget lectus. Praesent non viverra sem. Aenean eu diam sem. Praesent aliquam nec purus imperdiet cursus. Phasellus egestas ut enim id elementum. Pellentesque egestas tempor mauris, eu varius libero facilisis ac. Curabitur tincidunt feugiat nisi et egestas. Vivamus a sem luctus urna scelerisque faucibus. Fusce ac nunc quis neque varius lacinia. Aenean at tortor nec lorem rhoncus elementum sit amet vitae ligula.</p>\r\n\r\n<p>Vestibulum bibendum lectus ac mollis luctus. Duis pharetra dui nec sapien sodales pharetra. Duis quis mauris eleifend, blandit ex at, ullamcorper turpis. Donec at lobortis tellus, eget viverra libero. Curabitur vitae lacus vestibulum neque bibendum vehicula. Morbi sit amet massa rutrum, volutpat sapien a, aliquet lorem. Morbi rutrum libero quis tellus ullamcorper convallis. Nunc posuere sapien a turpis viverra sollicitudin. Fusce mattis sagittis tempus. Duis viverra aliquam tristique. Praesent ac ultrices lorem. Fusce laoreet ornare dolor. Phasellus vitae feugiat sem.</p>\r\n', '', 'Kamis', '2020-07-30', '08:48:40', '83090929_859245161178242_2015965146833338256_n.jpg', 0, '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album`, `username`, `jdl_gallery`, `gallery_seo`, `keterangan`, `gbr_gallery`, `aktif`) VALUES
(259, 51, 'admin', 'Wanarata', 'wanarata', '', 'Chrysanthemum1.jpg', 'Y'),
(269, 50, 'admin', '', '', '', '65716891_594637470943747_6794563167069300511_n1.jpg', 'Y'),
(267, 50, 'admin', '', '', '', '54800842_845150039218195_5439047052743909606_n1.jpg', 'Y'),
(268, 50, 'admin', '', '', '', '65972840_2335058533287534_796509074880152261_n1.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `maps` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `maps`, `keterangan`) VALUES
(1, 'WANARATA', 'wanarata@gmail.com', 'http://localhost/wanarata/', 'https://www.instagram/official_wanarata', '089987654321', '', 'Wanarata', 'favicon.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `sidebar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `sidebar`) VALUES
(62, 'event', 'admin', 'event', 'Y', 0),
(61, 'Berita', 'admin', 'berita', 'Y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id_logo` int(5) NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id_logo`, `gambar`) VALUES
(15, 'header.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2016-10-18', 8, '1476767634'),
('::1', '2016-10-19', 56, '1476853077'),
('::1', '2016-10-23', 3, '1477189804'),
('::1', '2016-10-24', 2, '1477282258'),
('::1', '2016-10-28', 1, '1477643326'),
('::1', '2016-10-29', 5, '1477751374'),
('::1', '2016-11-05', 12, '1478338548'),
('::1', '2016-11-07', 3, '1478532409'),
('::1', '2016-11-09', 1, '1478685628'),
('::1', '2016-11-10', 16, '1478737204'),
('::1', '2016-11-15', 6, '1479170013'),
('::1', '2016-11-16', 1, '1479298311'),
('::1', '2016-11-24', 1, '1479975378'),
('::1', '2016-12-03', 8, '1480739926'),
('::1', '2016-12-28', 1, '1482890441'),
('::1', '2017-01-10', 8, '1484055828'),
('::1', '2017-01-17', 24, '1484638202'),
('::1', '2017-02-11', 5, '1486772442'),
('::1', '2017-02-22', 61, '1487780784'),
('::1', '2017-02-23', 219, '1487866676'),
('::1', '2017-02-24', 21, '1487945831'),
('::1', '2017-02-25', 7, '1487982298'),
('::1', '2017-02-27', 8, '1488168649'),
('::1', '2017-02-27', 8, '1488168649'),
('::1', '2017-02-28', 4, '1488267473'),
('::1', '2019-05-22', 97, '1558485696'),
('127.0.0.1', '2019-05-22', 2, '1558485536'),
('::1', '2020-07-28', 10, '1595955362'),
('::1', '2020-07-29', 23, '1596038163'),
('::1', '2020-07-30', 8, '1596075275');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`) VALUES
(22, 'event', 'admin', 'event', 18),
(28, 'berita', 'admin', 'berita', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
('admin', 'bff0cc42103de1b4721370e84dc24f635a7afeca41198c9b3e03946a1b6b7191d14356408a5e57ce6daf77e6e800c66fac7ab0482d57d48d23e6808e4b562daa', 'WANARATA', 'wanarata@gmail.com', '', '', 'admin', 'N', 'q173s8hs1jl04st35169ccl8o7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id_logo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
