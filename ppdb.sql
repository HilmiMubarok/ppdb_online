-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 10:08 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `nisn` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(50) NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `desa` text NOT NULL,
  `rt` int(20) NOT NULL,
  `rw` int(20) NOT NULL,
  `nama_sekolah` text NOT NULL,
  `prov_sekolah` text NOT NULL,
  `kab_sekolah` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `pendapatan_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `pendapatan_ibu` text NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kode_ortu` int(50) NOT NULL,
  `prov_ortu` text NOT NULL,
  `kab_ortu` text NOT NULL,
  `kec_ortu` text NOT NULL,
  `desa_ortu` text NOT NULL,
  `rt_ortu` int(10) NOT NULL,
  `rw_ortu` int(10) NOT NULL,
  `nama_wali` text,
  `pekerjaan_wali` text,
  `pendapatan_wali` text,
  `alamat_wali` text,
  `kode_wali` int(100) DEFAULT NULL,
  `prov_wali` text,
  `kab_wali` text,
  `kec_wali` text,
  `desa_wali` text,
  `rt_wali` int(100) DEFAULT NULL,
  `rw_wali` int(100) DEFAULT NULL,
  `jurusan_akademik` text NOT NULL,
  `jurusan_terpadu` text NOT NULL,
  `foto` text NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pendaftar`
--

INSERT INTO `data_pendaftar` (`nisn`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `no_hp`, `email`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `rt`, `rw`, `nama_sekolah`, `prov_sekolah`, `kab_sekolah`, `nama_ayah`, `pekerjaan_ayah`, `pendapatan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendapatan_ibu`, `alamat_ortu`, `kode_ortu`, `prov_ortu`, `kab_ortu`, `kec_ortu`, `desa_ortu`, `rt_ortu`, `rw_ortu`, `nama_wali`, `pekerjaan_wali`, `pendapatan_wali`, `alamat_wali`, `kode_wali`, `prov_wali`, `kab_wali`, `kec_wali`, `desa_wali`, `rt_wali`, `rw_wali`, `jurusan_akademik`, `jurusan_terpadu`, `foto`, `status`) VALUES
('9999559972', 'Ahmad Fakhrudin', 'Laki-Laki', 'kendal', '1999-03-25', 'Islam', '089667031512', 'afakhrudin66@gmail.com', 'desa Truko', 51353, 'jawa tengah', 'kendal', 'kangkung', 'truko', 2, 3, 'SMP Muhammadiyah 5 Cepiring', 'jawa tengah', 'kendal', 'Mundakir', 'Pedagang', 'Rp 500.000 - Rp 1.000.000 / bulan', 'Fatonah', 'Pedagang', 'Rp 500.000 - Rp 1.000.000 / bulan', 'desa truko', 51353, 'jawa tengah', 'kendal', 'kangkung', 'Truko', 2, 3, '', '---', '---', '', 0, '', '', '', '', 0, 0, 'ipa', 'Teknik Komputer dan Jaringan', 'cc.JPG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`) VALUES
(1, 'TKJ.jpg'),
(2, 'Bagi takjil ipm-2.jpg'),
(3, 'hw4.jpg'),
(4, 'kegiatan tadarus.jpg'),
(5, 'lomba agustusan 2016-1.jpg'),
(6, 'sembilan.jpeg'),
(7, 'tujuh.jpg'),
(15, '8. Hal.3. PORSENI BESAR  IV MUHAMMADIYAH Daerah Kendal.jpg'),
(16, 'KUNJUNGAN KE SMK NEGERI.jpg'),
(17, 'PENYULUHAN BNN.jpg'),
(18, 'TKJ.jpg'),
(21, 'Lomba Agustusan 1945.JPG'),
(26, 'PD.IPM SAAT PELANTIKAN.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kegiatan`, `tanggal`, `waktu`, `lokasi`) VALUES
(1, 'pengisian formulir pendaftaran', '11 januari - 11 april 2020', '00.00 - 00.00', 'secara online'),
(2, 'pengumuman siswa yang diterima', '15 April - 1 mei 2020', '00.00 - 00.00', 'secara online'),
(3, 'Daftar Ulang', '2 mei - 16 mei 2020', '07.00 - 15.00', 'Sma Muhammadiyah 4 Kendal'),
(4, 'Awal Masuk Sekolah', '1 juni 2020', '07.00 wib', 'Sma Muhammadiyah 4 Kendal'),
(5, 'penempatan kelas', '1 juni 2020', '07.30', 'Sma Muhammadiyah 4 Kendal'),
(6, 'kegiatan MOS', '2 juni - 5 juni 2020 ', '07.00 - selesai', 'Sma Muhammadiyah 4 Kendal');

-- --------------------------------------------------------

--
-- Table structure for table `manage_pendaftaran`
--

CREATE TABLE `manage_pendaftaran` (
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_pendaftaran`
--

INSERT INTO `manage_pendaftaran` (`status`) VALUES
('Buka');

-- --------------------------------------------------------

--
-- Table structure for table `manage_pengumuman`
--

CREATE TABLE `manage_pengumuman` (
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_pengumuman`
--

INSERT INTO `manage_pengumuman` (`status`) VALUES
('Buka');

-- --------------------------------------------------------

--
-- Table structure for table `panduan_ppdb`
--

CREATE TABLE `panduan_ppdb` (
  `id_panduan` int(11) NOT NULL,
  `panduan_ppdb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panduan_ppdb`
--

INSERT INTO `panduan_ppdb` (`id_panduan`, `panduan_ppdb`) VALUES
(4, 'Calon Siswa mengisi Formulir pendaftaran secara online'),
(5, 'Calon Siswa mencetak Bukti pendaftaran berupa kartu pendaftaran'),
(6, 'Calon siswa dapat melihat Pengumuman hasil akhir lewat web'),
(7, 'Bagi calon siswa yang diterima harap melakukan daftar ulang dengan membawa Kartu Pendaftaran dan Juga Hasil Pengumuman yang sudah di cetak / Print'),
(8, 'Calon siswa tidak daftar ulang diangap mengundurkan diri'),
(9, 'Calon Siswa yang Sudah melakukan Daftar Ulang, selamat anda diterima di sma muhammadiyah 4 kendal'),
(10, 'gjhghj');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_daftar`
--

CREATE TABLE `syarat_daftar` (
  `id_syarat` int(11) NOT NULL,
  `syarat_daftar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat_daftar`
--

INSERT INTO `syarat_daftar` (`id_syarat`, `syarat_daftar`) VALUES
(1, 'Fotocopy ijazah SMP yang telah dilegalisir'),
(2, 'SKHUN(Surat Keterangan Hasil Ujian Nasional) Asli'),
(3, 'pas foto ukuran 3x4 sebanyak 5 lembar'),
(4, 'membayar biaya pendaftaran sebesar Rp. 150.000,-'),
(5, 'Calon Peserta Didik Wajib Hadir dengan berpakaian seragam sekolah Asal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `manage_pendaftaran`
--
ALTER TABLE `manage_pendaftaran`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `manage_pengumuman`
--
ALTER TABLE `manage_pengumuman`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `panduan_ppdb`
--
ALTER TABLE `panduan_ppdb`
  ADD PRIMARY KEY (`id_panduan`);

--
-- Indexes for table `syarat_daftar`
--
ALTER TABLE `syarat_daftar`
  ADD PRIMARY KEY (`id_syarat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panduan_ppdb`
--
ALTER TABLE `panduan_ppdb`
  MODIFY `id_panduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `syarat_daftar`
--
ALTER TABLE `syarat_daftar`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
