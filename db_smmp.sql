-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 07:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(50) NOT NULL,
  `author` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `judul` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `isi` longblob NOT NULL,
  `gambar` blob DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `author`, `judul`, `isi`, `gambar`, `create_at`) VALUES
(1, 'tes1 author', 'tes1 judul', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742c2073656420646f20656975736d6f642074656d706f7220696e6369646964756e74207574206c61626f726520657420646f6c6f7265206d61676e6120616c697175612e20506f727461206c6f72656d206d6f6c6c697320616c697175616d2075742e204c696265726f206a7573746f206c616f726565742073697420616d6574206375727375732073697420616d65742064696374756d2e204c656f2075726e61206d6f6c657374696520617420656c656d656e74756d2065752e20496d706572646965742070726f696e206665726d656e74756d206c656f2076656c206f72636920706f727461206e6f6e2e2056656c20666163696c6973697320766f6c7574706174206573742076656c6974206567657374617320647569206964206f726e61726520617263752e204672696e67696c6c61207574206d6f7262692074696e636964756e742061756775652e20557420706c616365726174206f726369206e756c6c612070656c6c656e7465737175652e204d6174746973206e756e632073656420626c616e646974206c696265726f20766f6c7574706174207365642063726173206f726e61726520617263752e20466163696c69736973206c656f2076656c206672696e67696c6c612065737420756c6c616d636f727065722065676574206e756c6c6120666163696c69736920657469616d2e, 0x706e67656767202834292e706e67, '2022-12-21 00:41:24'),
(5, 'Tes2 Author', 'Tes2 Judul', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742c2073656420646f20656975736d6f642074656d706f7220696e6369646964756e74207574206c61626f726520657420646f6c6f7265206d61676e6120616c697175612e20506f727461206c6f72656d206d6f6c6c697320616c697175616d2075742e204c696265726f206a7573746f206c616f726565742073697420616d6574206375727375732073697420616d65742064696374756d2e204c656f2075726e61206d6f6c657374696520617420656c656d656e74756d2065752e20496d706572646965742070726f696e206665726d656e74756d206c656f2076656c206f72636920706f727461206e6f6e2e2056656c20666163696c6973697320766f6c7574706174206573742076656c6974206567657374617320647569206964206f726e61726520617263752e204672696e67696c6c61207574206d6f7262692074696e636964756e742061756775652e20557420706c616365726174206f726369206e756c6c612070656c6c656e7465737175652e204d6174746973206e756e632073656420626c616e646974206c696265726f20766f6c7574706174207365642063726173206f726e61726520617263752e20466163696c69736973206c656f2076656c206672696e67696c6c612065737420756c6c616d636f727065722065676574206e756c6c6120666163696c69736920657469616d2e0d0a0d0a4d6f7262692074656d70757320696163756c69732075726e6120696420766f6c7574706174206c616375732e2050726f696e207361676974746973206e69736c2072686f6e637573206d61747469732072686f6e6375732e20496420637572737573206d6574757320616c697175616d20656c656966656e64206d6920696e206e756c6c612e20457569736d6f64206e69736920706f727461206c6f72656d206d6f6c6c697320616c697175616d20757420706f72747469746f72206c656f2e20436f6d6d6f646f20756c6c616d636f727065722061206c6163757320766573746962756c756d207365642061726375206e6f6e2e2056656c20666163696c6973697320766f6c7574706174206573742076656c69742065676573746173206475692e20426c616e646974207475727069732063757273757320696e206861632e20566573746962756c756d206d617474697320756c6c616d636f727065722076656c6974207365642e205365642066656c697320656765742076656c697420616c697175657420736167697474697320696420636f6e73656374657475722070757275732e20417263752064696374756d20766172697573206475697320617420636f6e7365637465747572206c6f72656d2e2050686173656c6c757320766573746962756c756d206c6f72656d2073656420726973757320756c7472696369657320747269737469717565206e756c6c6120616c69717565742e204964206469616d206d616563656e617320756c74726963696573206d692065676574206d61757269732070686172657472612065742e204d616c65737561646120626962656e64756d206172637520766974616520656c656d656e74756d20637572616269747572207669746165206e756e63207365642076656c69742e204574206d616c6573756164612066616d6573206163207475727069732065676573746173207365642074656d7075732e, '', '2022-12-21 05:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto` longblob NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '', 'tes1 keterangan', '2022-12-20 16:00:39', NULL),
(2, '', 'tes2 keterangan', '2022-12-20 16:02:20', NULL),
(3, '', 'tes3 keterangan', '2022-12-20 16:02:29', NULL),
(4, '', 'tes4 keterangan', '2022-12-20 16:13:35', NULL),
(5, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2022-12-24 15:25:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'tes1', 'tes1', '', '2022-12-20 16:40:34', NULL, 0),
(2, 'tes2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Mauris vitae ultricies leo integer malesuada nunc. Dignissim diam quis enim lobortis. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Nam at lectus urna duis convallis. Varius duis at consectetur lorem donec massa sapien faucibus. Nulla facilisi nullam vehicula ipsum a. Justo laoreet sit amet cursus sit amet dictum sit amet. Feugiat nisl pretium fusce id velit ut tortor. Lorem dolor sed viverra ipsum nunc aliquet.', '', '2022-12-20 17:11:25', NULL, 0),
(4, 'Tes3 Judul', 'Tes 4 Keterangan Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porta lorem mollis aliquam ut. Libero justo laoreet sit amet cursus sit amet dictum. Leo urna molestie at elementum eu. Imperdiet proin fermentum leo vel orci porta non. Vel facilisis volutpat est velit egestas dui id ornare arcu. Fringilla ut morbi tincidunt augue. Ut placerat orci nulla pellentesque. Mattis nunc sed blandit libero volutpat sed cras ornare arcu. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam.', '', '2022-12-21 05:28:26', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin','User') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Superadmin', '202cb962ac59075b964b07152d234b70', 'Super Admin', '2022-12-15 13:34:54', NULL),
(3, 'arya', 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '2022-12-15 13:34:54', NULL),
(4, 'tes', 'tes', '202cb962ac59075b964b07152d234b70', 'User', '2022-12-19 16:01:35', NULL),
(5, 'tes1', 'tes1', 'caf1a3dfb505ffed0d024130f58c5cfa', 'User', '2022-12-19 17:32:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `informasi_` text NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminatan`
--

CREATE TABLE `tb_peminatan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_peminatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_smmp`
--

CREATE TABLE `tb_profil_smmp` (
  `id_smmp` int(11) NOT NULL,
  `profil_smmp` text NOT NULL,
  `alamat_smmp` varchar(100) NOT NULL,
  `hp_smmp` varchar(20) NOT NULL,
  `email_smmp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_peminatan`
--
ALTER TABLE `tb_peminatan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_profil_smmp`
--
ALTER TABLE `tb_profil_smmp`
  ADD PRIMARY KEY (`id_smmp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_peminatan`
--
ALTER TABLE `tb_peminatan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profil_smmp`
--
ALTER TABLE `tb_profil_smmp`
  MODIFY `id_smmp` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
