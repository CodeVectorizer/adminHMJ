-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2021 at 06:16 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmjti`
--

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
(1, '2021_02_28_181947_add_column_remember_token_to_tb_users', 1),
(2, '2021_03_01_070200_change_nama_to_name_at_tb_users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `id_angkatan` int(2) NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal_penulisan` datetime NOT NULL,
  `tanggal_update` datetime NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_kategori` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `penulis`, `judul`, `tanggal_penulisan`, `tanggal_update`, `gambar`, `isi`, `id_kategori`) VALUES
(1, 'Lukman Afandi', 'Title Test', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 1),
(2, 'Lukman Afandi', 'Title Test 2', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 2),
(3, 'Lukman Afandi', 'Title Test 3', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 2),
(4, 'Lukman Afandi', 'Title Test 5', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 1),
(5, 'Lukman Afandi', 'Title Test 9', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 1),
(6, 'Lukman Afandi', 'Title Test 100', '2021-03-01 14:23:25', '2021-03-01 14:23:25', 'article.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, deserunt. Fugit possimus, labore reiciendis autem consequatur illum odio quae accusantium quaerat odit inventore corporis laboriosam deserunt sint. Vero sunt fugit aliquam. Fugiat eaque iure dolore distinctio iste. Veritatis voluptatibus fugiat ut ullam, ea ab laborum in culpa, id, saepe unde repellendus tenetur! Pariatur quidem nisi eos fuga eaque! Quod veniam eaque fugiat incidunt possimus quia similique, adipisci voluptas praesentium, deleniti atque laborum? Doloribus nulla debitis accusantium sint, hic doloremque, tenetur iste incidunt numquam error, expedita excepturi? Saepe autem eius aliquid architecto natus, tenetur distinctio reprehenderit provident nemo, ut numquam dolor.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biro`
--

CREATE TABLE `tb_biro` (
  `id_biro` int(4) NOT NULL,
  `id_departemen` int(4) NOT NULL,
  `biro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biro`
--

INSERT INTO `tb_biro` (`id_biro`, `id_departemen`, `biro`) VALUES
(1, 1, 'Kesekretariatan'),
(2, 1, 'Sarana Dan Prasarana'),
(3, 2, 'Multimedia'),
(4, 2, 'Sistem Informasi'),
(5, 2, 'IT Support'),
(6, 2, 'Hardware'),
(7, 2, 'Game Development'),
(8, 3, 'Kewirausahaan'),
(9, 3, 'Usaha Mandiri'),
(10, 4, 'Internal TIF'),
(11, 4, 'Internal MIF'),
(12, 4, 'Internal TKK'),
(13, 4, 'Eksternal'),
(14, 4, 'Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id_departemen` int(4) NOT NULL,
  `departemen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id_departemen`, `departemen`) VALUES
(1, 'Administrasi'),
(2, 'Keilmuan'),
(3, 'Kewirausahaan'),
(4, 'Perhubungan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `id_form` int(4) NOT NULL,
  `judul_form` varchar(100) NOT NULL,
  `link_form` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int(2) NOT NULL,
  `golongan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(4) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `jabatan`, `periode`) VALUES
(1, 'Ketua Himpunan', 2021),
(2, 'Wakil Ketua Himpunan', 2021),
(3, 'Co', 2021),
(4, 'Anggota', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(4) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Artikel'),
(2, 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_kritiksaran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kritiksaran` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(4) NOT NULL,
  `nim` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `id_prodi` int(4) NOT NULL,
  `id_jabatan` int(4) NOT NULL,
  `id_biro` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(4) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `id_golongan` int(2) NOT NULL,
  `id_angkatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(3) NOT NULL,
  `name` varchar(35) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `email`, `password`, `foto_user`, `remember_token`) VALUES
(2, 'admin', 'admin', 'admin@admin.com', '$2y$10$2.cFNdpyyO/Q6r7TwRYbtOO71IPZM5VQZm9bT7gWEV2aNvS8y7WLK', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_biro`
--
ALTER TABLE `tb_biro`
  ADD PRIMARY KEY (`id_biro`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `id_prodi` (`id_prodi`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_biro` (`id_biro`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_golongan` (`id_golongan`,`id_angkatan`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `id_angkatan` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_biro`
--
ALTER TABLE `tb_biro`
  MODIFY `id_biro` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `id_departemen` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `id_form` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_kritiksaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_biro`
--
ALTER TABLE `tb_biro`
  ADD CONSTRAINT `tb_biro_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tb_departemen` (`id_departemen`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`);

--
-- Constraints for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD CONSTRAINT `tb_pengurus_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tb_pengurus_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`),
  ADD CONSTRAINT `tb_pengurus_ibfk_3` FOREIGN KEY (`id_biro`) REFERENCES `tb_biro` (`id_biro`);

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `tb_prodi_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `tb_angkatan` (`id_angkatan`),
  ADD CONSTRAINT `tb_prodi_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id_golongan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
