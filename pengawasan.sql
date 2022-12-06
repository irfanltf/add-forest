-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 03:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengawasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pekerjaan`
--

CREATE TABLE `pengajuan_pekerjaan` (
  `id_peng` int(11) NOT NULL,
  `nama` varchar(258) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status` enum('pengajuan','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_pekerjaan`
--

INSERT INTO `pengajuan_pekerjaan` (`id_peng`, `nama`, `email`, `nama_perusahaan`, `tanggal`, `lokasi`, `latitude`, `longitude`, `pekerjaan`, `status`) VALUES
(8, 'joni panggabean', 'mega@gmail.com', 'syswareindonesia', '2020-11-14', 'SPBU 34-10506, Jalan Biduri Pandan, RW 02, Jakarta Special Capital Region, Galur, Johar Baru, Central Jakarta, 10530, Indonesia', -6.1749903, 106.8522482, 'configurasi ecw5211-l', 'selesai'),
(10, 'hendri prasetyo', 'hendri@gmail.com', 'syswareindonesia', '2020-11-16', 'Jalan Griya Utama, RW 20, North Jakarta, Sunter Agung, Jakarta Special Capital Region, Sunter Agung, Tanjung Priok, 17705, Indon', -6.141949299999999, 106.8550293, 'install bitdefender', 'pengajuan'),
(12, 'suryani', 'suryanii0818@gmail.com', 'Perhutani', '2020-11-25', 'Jalan Trembesi, PPK Kemayoran, Jakarta Special Capital Region, Pademangan Timur, Pademangan, 17705, Indonesia', -6.143776158991699, 106.85449496281885, 'configurasi ecw5211-l', 'selesai'),
(13, 'suryani', 'suryanii0818@gmail.com', 'Perhutani', '2020-11-30', 'RT 02, RW 07, Cililitan, East Jakarta, Jakarta Special Capital Region, 13520, Indonesia', -6.258687999999999, 106.86300159999999, 'Konfigurasi Switch edgecore', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(1218) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `tgl_lahir`, `jabatan`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'admin', 'admin@gmail.com', '2000-03-09', 'System Enginer', 'default.jpg', '$2y$10$3cYEnHE9G0eTzYoULDMdJentnGgVpg/ICPabxVw6jozBOyBhMsROK', 1, 1, 1552725364),
(10, 'andi susanto', 'andisusanto@gmail.com', '1978-09-10', 'System Enginer', 'default.jpg', '$2y$10$3cYEnHE9G0eTzYoULDMdJentnGgVpg/ICPabxVw6jozBOyBhMsROK', 3, 1, 1556113386),
(11, 'joni panggabean', 'mega@gmail.com', '2020-08-14', 'System Enginer', 'default3.png', '$2y$10$7epJkvb3dV4QHbQoYDT38eKOMhIx0OloFsn0oCx47looqen8xeHPK', 2, 1, 1596967892),
(26, 'shoni setiawan', 'shonis@gmail.com', '1999-09-12', 'Network Security', 'default.png', '$2y$10$SnCcgUa89MBPG7PIMKEXue4Iw0oHL4iFRRMHKk4ih2Eej4uLQjHNS', 2, 1, 1605333432),
(27, 'hendri prasetyo', 'hendri@gmail.com', '1998-09-21', 'Network Enginer', 'default.jpg', '$2y$10$7epJkvb3dV4QHbQoYDT38eKOMhIx0OloFsn0oCx47looqen8xeHPK', 2, 1, 1605334020),
(29, 'suryani', 'suryanii0818@gmail.com', '1999-03-27', 'System Enginer', 'default.jpg', '$2y$10$iwvbYpQKn313/O3jAJLCHeHJPWbi4ClCo7mrQm00l9i2Ghot90/4W', 2, 1, 1606698044),
(30, 'bastian ginting', 'bastian@gmail.com', '1998-11-24', 'Network Security', 'default.png', '$2y$10$tK79/DRzf/54J52jjDb.1e8gJjQw7gR5Pxrmhb8x/WhawV0Qm1UJK', 2, 1, 1606698854);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 4),
(7, 1, 6),
(8, 3, 6),
(9, 3, 2),
(10, 1, 5),
(11, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Pengajuan'),
(5, 'Pengajuan_pekerjaan'),
(6, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'karyawan'),
(3, 'pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'User/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Manajemen', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Sub Menu Manajemen', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'buat laporan pekerjaan', 'pengajuan', 'fas fa-fw fa-atlas', 1),
(10, 5, 'Pengajuan Pekerjaan', 'Pengajuan_pekerjaan', 'fas fa-fw fa-atlas', 1),
(12, 1, 'Akun', 'admin/akun', 'fas fa-fw fa-user-tie', 1),
(14, 6, 'Laporan', 'laporan', 'fas fa-fw fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(25, 'hendri@gmail.com', 'KqkIi4yvGZBfe8nPcB+u2qc4DCi8yf7ATAHN+3cFcOs=', 1605334020),
(26, 'hendri@gmail.com', 'R+lAdYjAPaJ0L2fG6YIOBRNsRn0aRTe7VSOpLPJQmv8=', 1605334105),
(29, 'suryanii0818@gmail.com', 'ipCRlPvqfMjfHMRAiozisxFQ7UMkbQfoCGb62Peo4Qg=', 1606698249);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan_pekerjaan`
--
ALTER TABLE `pengajuan_pekerjaan`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_pekerjaan`
--
ALTER TABLE `pengajuan_pekerjaan`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
