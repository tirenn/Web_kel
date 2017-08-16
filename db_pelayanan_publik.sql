-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 06:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelayanan_publik`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_agama`
--

CREATE TABLE `table_agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_agama`
--

INSERT INTO `table_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha');

-- --------------------------------------------------------

--
-- Table structure for table `table_akseptor_kb`
--

CREATE TABLE `table_akseptor_kb` (
  `id` int(11) NOT NULL,
  `akseptor_kb` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_akseptor_kb`
--

INSERT INTO `table_akseptor_kb` (`id`, `akseptor_kb`) VALUES
(1, 'Tidak Ada'),
(2, 'IUD'),
(3, 'Kondom'),
(4, 'PIL'),
(5, 'Suntik'),
(6, 'Susuk'),
(7, 'Vasektomi'),
(8, 'Tubektomi'),
(9, 'Tissu'),
(10, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `table_golongan_darah`
--

CREATE TABLE `table_golongan_darah` (
  `id` int(11) NOT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_golongan_darah`
--

INSERT INTO `table_golongan_darah` (`id`, `golongan_darah`) VALUES
(1, 'A'),
(2, 'AB'),
(3, 'B'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `table_ho`
--

CREATE TABLE `table_ho` (
  `ho_id` varchar(20) NOT NULL,
  `table_agama_id` int(11) NOT NULL,
  `table_jenis_kelamin_id` int(11) NOT NULL,
  `table_status_kawin_id` int(11) NOT NULL,
  `table_jenis_permohonan_id` int(11) NOT NULL,
  `table_status_berkas_id` int(11) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(25) DEFAULT NULL,
  `alamat_rumah` text,
  `telepon_atau_fax` varchar(20) DEFAULT NULL,
  `nama_perusahaan` varchar(25) DEFAULT NULL,
  `alamat_perusahaan` text,
  `noTelp_perusahaan` varchar(20) DEFAULT NULL,
  `jenis_usaha` varchar(25) DEFAULT NULL,
  `lokasi_usaha` text,
  `luas_tanah` varchar(25) DEFAULT NULL,
  `luas_usaha` varchar(25) DEFAULT NULL,
  `status_tanah` varchar(25) DEFAULT NULL,
  `nomor_registrasi` varchar(25) DEFAULT NULL,
  `create_on` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ho`
--

INSERT INTO `table_ho` (`ho_id`, `table_agama_id`, `table_jenis_kelamin_id`, `table_status_kawin_id`, `table_jenis_permohonan_id`, `table_status_berkas_id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `alamat_rumah`, `telepon_atau_fax`, `nama_perusahaan`, `alamat_perusahaan`, `noTelp_perusahaan`, `jenis_usaha`, `lokasi_usaha`, `luas_tanah`, `luas_usaha`, `status_tanah`, `nomor_registrasi`, `create_on`) VALUES
('24172399-e5f2-4dab-a', 1, 1, 1, 1, 1, 'TIO', 'NGAWI', '2017-12-31', 'MAHASISWA', 'NGAWI', '031313', 'BOJONAKAL', 'NGAEI', '1331312', 'TOKO', 'NGAWII', '24', '37', 'SEWA', 'REG-0816-HO-009', '2017-08-16 00:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `table_hubungan_keluarga`
--

CREATE TABLE `table_hubungan_keluarga` (
  `id` int(10) UNSIGNED NOT NULL,
  `hubungan_keluarga` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_hubungan_keluarga`
--

INSERT INTO `table_hubungan_keluarga` (`id`, `hubungan_keluarga`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua '),
(9, 'Famili Lain '),
(10, 'Pembantu '),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `table_imb`
--

CREATE TABLE `table_imb` (
  `id` varchar(20) NOT NULL,
  `table_agama_id` int(11) NOT NULL,
  `table_jenis_kelamin_id` int(11) NOT NULL,
  `table_status_kawin_id` int(11) NOT NULL,
  `table_jenis_permohonan_id` int(11) NOT NULL,
  `table_status_berkas_id` int(11) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `alamat_rumah` text,
  `telepon_atau_fax` varchar(15) DEFAULT NULL,
  `nama_perusahaan` varchar(25) DEFAULT NULL,
  `alamat_perusahaan` text,
  `lokasi_bangunan` text,
  `luas_bangunan` varchar(25) DEFAULT NULL,
  `fungsi_bangunan` varchar(25) DEFAULT NULL,
  `status_tanah` varchar(25) DEFAULT NULL,
  `batas_utara` varchar(25) DEFAULT NULL,
  `batas_timur` varchar(25) DEFAULT NULL,
  `batas_selatan` varchar(25) DEFAULT NULL,
  `batas_barat` varchar(25) DEFAULT NULL,
  `nomor_registrasi` varchar(25) DEFAULT NULL,
  `create_on` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_imb`
--

INSERT INTO `table_imb` (`id`, `table_agama_id`, `table_jenis_kelamin_id`, `table_status_kawin_id`, `table_jenis_permohonan_id`, `table_status_berkas_id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `alamat_rumah`, `telepon_atau_fax`, `nama_perusahaan`, `alamat_perusahaan`, `lokasi_bangunan`, `luas_bangunan`, `fungsi_bangunan`, `status_tanah`, `batas_utara`, `batas_timur`, `batas_selatan`, `batas_barat`, `nomor_registrasi`, `create_on`) VALUES
('b5f86119-4576-46f8-b', 2, 1, 1, 1, 1, 'TIO', 'NGAWI', '2017-12-31', 'MAHASISWA', 'LEGUNDI RT 07', '03423', 'BOJONAKAL', 'LEGUNDI RT 059 E032', 'LEGUNDI', '48', 'STATUS', 'BARU', 'NGAIW', 'SEPREH', NULL, 'JUNO', 'REG-0816-IMB-004', '2017-08-16 00:01:57'),
('ce8e57c4-08e9-4148-b', 2, 1, 1, 1, 1, 'TIO', 'NGAWI', '2017-12-31', 'MAHASISWA', 'LEGUNDI RT 07', '03423', 'BOJONAKAL', 'LEGUNDI RT 059 E032', 'LEGUNDI', '48', 'STATUS', 'BARU', 'NGAIW', 'SEPREH', 'KENDAL', 'JUNO', 'REG-0816-IMB-005', '2017-08-16 00:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_kelamin`
--

CREATE TABLE `table_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jenis_kelamin`
--

INSERT INTO `table_jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_permohonan_ho`
--

CREATE TABLE `table_jenis_permohonan_ho` (
  `id` int(11) NOT NULL,
  `jenis_permohonan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jenis_permohonan_ho`
--

INSERT INTO `table_jenis_permohonan_ho` (`id`, `jenis_permohonan`) VALUES
(1, 'Baru'),
(2, 'Perpanjangan'),
(3, 'Perluasan'),
(4, 'Pindah Alamat'),
(5, 'Balik Nama Pemohon'),
(6, 'Ganti Nama Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_permohonan_imb`
--

CREATE TABLE `table_jenis_permohonan_imb` (
  `id` int(11) NOT NULL,
  `jenis_permohonan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jenis_permohonan_imb`
--

INSERT INTO `table_jenis_permohonan_imb` (`id`, `jenis_permohonan`) VALUES
(1, 'Baru'),
(2, 'Perubahan / Perbaikan'),
(3, 'Balik Nama'),
(4, 'Penambahan Bangunan');

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_permohonan_kk`
--

CREATE TABLE `table_jenis_permohonan_kk` (
  `id` int(11) NOT NULL,
  `jenis_permohonan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jenis_permohonan_kk`
--

INSERT INTO `table_jenis_permohonan_kk` (`id`, `jenis_permohonan`) VALUES
(1, 'Baru'),
(2, 'Perubahan'),
(3, 'Pisah KK');

-- --------------------------------------------------------

--
-- Table structure for table `table_kelainan_khusus`
--

CREATE TABLE `table_kelainan_khusus` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelainan_khusus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_kelainan_khusus`
--

INSERT INTO `table_kelainan_khusus` (`id`, `kelainan_khusus`) VALUES
(1, 'Tidak Ada'),
(2, 'Tuna Wicara'),
(3, 'Tuna Rungu'),
(4, 'Tuna Netra'),
(5, 'Tuna Rungu/Wica'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `table_kelompok_pekerjaan`
--

CREATE TABLE `table_kelompok_pekerjaan` (
  `id` int(11) NOT NULL,
  `kelompok_pekerjaan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_kelompok_pekerjaan`
--

INSERT INTO `table_kelompok_pekerjaan` (`id`, `kelompok_pekerjaan`) VALUES
(0, 'Tidak Berisi'),
(1, 'Belum Bekerja'),
(2, 'Mengurus Rmh. Tgg'),
(3, 'Pelajar/Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Peg. Negeri Sipil'),
(6, 'TNI'),
(7, 'Kepolisian RI'),
(8, 'Perdagangan'),
(9, 'Petani/Perkebun'),
(10, 'Peternak'),
(11, 'Nelayan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Kary. Swasta'),
(16, 'Kary. BUMN'),
(17, 'Kary. BUMD'),
(18, 'Kary. Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani'),
(21, 'Buruh Nelayan'),
(22, 'Buruh Peternakan'),
(23, 'Pembantu Rmh. Tgg'),
(24, 'Tukang Cukur'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las'),
(30, 'Tukang Jahit'),
(31, 'Tukang Gigi'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Penata Rambut'),
(35, 'Mekanik'),
(36, 'Seniman'),
(37, 'Tabib'),
(38, 'Paraji'),
(39, 'Perancangan Busana'),
(40, 'Penerjemah'),
(41, 'Imam Masjid'),
(42, 'Pendeta'),
(43, 'Pastur'),
(44, 'Wartawan'),
(45, 'Ustadz/Mubaligh'),
(46, 'Juru masak'),
(47, 'Promotor Acara'),
(48, 'Anggota DPR-RI'),
(49, 'Angg. DPD'),
(50, 'Angg. BPK'),
(51, 'Presiden'),
(52, 'Wakil Presiden'),
(53, 'Angg. Mahkamah Kost.'),
(54, 'Angg. Kabinet Menteri'),
(55, 'Duta Besar'),
(56, 'Gubernur'),
(57, 'Wakil Gubernur'),
(58, 'Bupati'),
(59, 'Wakil Bupati'),
(60, 'Walikota'),
(61, 'Wakil Wali Kota'),
(62, 'Angg. DPRP Prof'),
(63, 'Angg. DPRD Prof Kab'),
(64, 'Dosen'),
(65, 'Guru'),
(66, 'Pilot'),
(67, 'Pengacara'),
(68, 'Notaris'),
(69, 'Arsitek'),
(70, 'Akuntan'),
(71, 'Konsultan'),
(72, 'Dokter'),
(73, 'Bidan '),
(74, 'Perawat'),
(75, 'Apoteker'),
(76, 'Psikiater'),
(77, 'Penyiar Televisi'),
(78, 'Penyiar Radio'),
(79, 'Pelaut'),
(80, 'Peneliti'),
(81, 'Sopir'),
(82, 'Pialang'),
(83, 'Paranormal'),
(84, 'Pedagang'),
(85, 'Perangkat'),
(86, 'Kepala Desa'),
(87, 'Biarawan'),
(88, 'Wiraswasta'),
(89, 'Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `table_kk_detail`
--

CREATE TABLE `table_kk_detail` (
  `id` varchar(20) NOT NULL,
  `table_akseptor_kb_id` int(11) DEFAULT NULL,
  `table_jenis_kelamin_id` int(11) NOT NULL,
  `table_hubungan_keluarga_id` int(10) UNSIGNED NOT NULL,
  `table_status_kawin_id` int(11) NOT NULL,
  `table_agama_id` int(11) NOT NULL,
  `table_golongan_darah_id` int(11) NOT NULL,
  `table_pendidikan_terakhir_id` int(11) NOT NULL,
  `table_status_pendidikan_id` int(11) NOT NULL,
  `table_kelompok_pekerjaan_id` int(11) NOT NULL,
  `table_kelainan_khusus_id` int(10) UNSIGNED DEFAULT NULL,
  `table_kk_header_id` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `nomr_akta_pengangkatan_anak` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_atau_tanggal_akta_kelahiran` varchar(25) NOT NULL,
  `nomor_atau_tanggal_akta_kawin_atau_cerai` varchar(25) DEFAULT NULL,
  `tempat_tinggal_terakhir` text NOT NULL,
  `nomor_dan_tanggal_surat_pindah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(25) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `tempat_tinggal_terakhir_ortu` text NOT NULL,
  `keterangan` text,
  `create_on` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_kk_detail`
--

INSERT INTO `table_kk_detail` (`id`, `table_akseptor_kb_id`, `table_jenis_kelamin_id`, `table_hubungan_keluarga_id`, `table_status_kawin_id`, `table_agama_id`, `table_golongan_darah_id`, `table_pendidikan_terakhir_id`, `table_status_pendidikan_id`, `table_kelompok_pekerjaan_id`, `table_kelainan_khusus_id`, `table_kk_header_id`, `nik`, `nama_lengkap`, `anak_ke`, `nomr_akta_pengangkatan_anak`, `tempat_lahir`, `tanggal_lahir`, `nomor_atau_tanggal_akta_kelahiran`, `nomor_atau_tanggal_akta_kawin_atau_cerai`, `tempat_tinggal_terakhir`, `nomor_dan_tanggal_surat_pindah`, `nama_ibu`, `nik_ibu`, `nama_ayah`, `nik_ayah`, `tempat_tinggal_terakhir_ortu`, `keterangan`, `create_on`) VALUES
('74ce31e2-2b78-4583-b', 2, 2, 2, 2, 2, 1, 2, 1, 1, 2, '178d4bd8-eb72-44c8-b', '12313', 'TIO', 1, '2', 'NGAWI', '2016-11-30', '3131231313', '1312321313', 'LEGUNDI', '3213131', 'RERA', '132313', 'DASAD', '3133213', 'VSFAA', 'ASDSADFAFDASDADAD ADFDADAD', '2017-08-16'),
('d2d1afbb-610f-448e-8', 2, 2, 1, 2, 4, 2, 2, 0, 1, 2, '178d4bd8-eb72-44c8-b', '31323213', 'SDADDAD', 31, '331231323113', 'FASAD', '2017-11-30', '1233413434', '54354334535', 'FASD', 'DADASD', 'RRFDAFADS', '12323132', 'DADSASD', '131233241', 'CASDADAD', 'SAADFAFADFADSADAS', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `table_kk_header`
--

CREATE TABLE `table_kk_header` (
  `id` varchar(20) NOT NULL,
  `table_status_berkas_id` int(11) NOT NULL,
  `table_jenis_permohonan_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(10) DEFAULT NULL,
  `jumlah_anggota_keluarga` int(11) DEFAULT NULL,
  `nomor_registrasi` varchar(20) DEFAULT NULL,
  `create_on` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_kk_header`
--

INSERT INTO `table_kk_header` (`id`, `table_status_berkas_id`, `table_jenis_permohonan_id`, `nama_lengkap`, `alamat`, `kode_pos`, `jumlah_anggota_keluarga`, `nomor_registrasi`, `create_on`) VALUES
('178d4bd8-eb72-44c8-b', 1, 3, 'TIO', 'RT/23 RW/23 NGAWI', '132', 2, 'REG-0816-KK-005', '2017-08-16'),
('20aacd98-c50c-4e2e-b', 1, 3, 'TIO', 'RT/23 RW/32 LEGUNDI', '132313', 2, 'REG-0816-KK-003', '2017-08-16'),
('2d3a61f0-99b6-4599-8', 1, 0, '', 'RT/ RW/ ', '', NULL, 'REG-0816-KK-002', '2017-08-16'),
('75ed93aa-d9e3-43a1-9', 1, 3, 'TIO', 'RT/23 RW/23 NGAWI', '132', 1, 'REG-0816-KK-004', '2017-08-16'),
('ab264cfa-e5d9-42c6-8', 1, 1, 'TIO', 'RT/23 RW/32 LEGUNDI', '132313', NULL, 'REG-0816-KK-001', '2017-08-16'),
('fb3048ff-e961-4ba4-9', 1, 1, NULL, 'RT/23 RW/23 NGAWI', '3132', NULL, 'REG-0816-KK-000', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `table_ktp`
--

CREATE TABLE `table_ktp` (
  `id` varchar(20) NOT NULL,
  `table_jenis_kelamin_id` int(11) NOT NULL,
  `table_golongan_darah_id` int(11) NOT NULL,
  `table_status_kawin_id` int(11) NOT NULL,
  `table_agama_id` int(11) NOT NULL,
  `table_status_berkas_id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `nomor_registrasi` varchar(25) DEFAULT NULL,
  `create_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ktp`
--

INSERT INTO `table_ktp` (`id`, `table_jenis_kelamin_id`, `table_golongan_darah_id`, `table_status_kawin_id`, `table_agama_id`, `table_status_berkas_id`, `nik`, `nama_lengkap`, `tanggal_lahir`, `tempat_lahir`, `pekerjaan`, `alamat`, `nomor_registrasi`, `create_on`) VALUES
('b2eda636-d2bc-4724-b', 2, 1, 1, 1, 1, '123123', 'TIO', '2017-12-31', 'NGAWI', 'MAHASISWA', 'NGAWODAMK RT/54 RW/52', 'REG-0816-IMB-002', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `table_pendidikan_terakhir`
--

CREATE TABLE `table_pendidikan_terakhir` (
  `id` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_pendidikan_terakhir`
--

INSERT INTO `table_pendidikan_terakhir` (`id`, `pendidikan_terakhir`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'Tidak Tamat SD'),
(3, 'SD/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'SLTA/Sederajat'),
(6, 'Diploma I/II'),
(7, 'Akademi/Dipl.III/S.Muda'),
(8, 'Dipl IV/Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `table_status_berkas`
--

CREATE TABLE `table_status_berkas` (
  `id` int(11) NOT NULL,
  `status_berkas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status_berkas`
--

INSERT INTO `table_status_berkas` (`id`, `status_berkas`) VALUES
(1, 'Formulir Diterima'),
(2, 'Berkas Diterima'),
(3, 'Berkas Sedang Diverivikasi'),
(4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `table_status_kawin`
--

CREATE TABLE `table_status_kawin` (
  `id` int(11) NOT NULL,
  `status_kawin` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status_kawin`
--

INSERT INTO `table_status_kawin` (`id`, `status_kawin`) VALUES
(1, 'Kawin'),
(2, 'Belum Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Table structure for table `table_status_pendidikan`
--

CREATE TABLE `table_status_pendidikan` (
  `id` int(11) NOT NULL,
  `status_pendidikan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status_pendidikan`
--

INSERT INTO `table_status_pendidikan` (`id`, `status_pendidikan`) VALUES
(0, 'Tidak Tamat'),
(1, 'Tamat'),
(2, 'Belum Tamat'),
(3, 'Tidak Sekolah'),
(4, 'Belum Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password_2` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password_2`, `email`) VALUES
('1', 'tedja', '65628b42a9bf369c9c413f6c82f04202', 'tedjadhi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_agama`
--
ALTER TABLE `table_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_akseptor_kb`
--
ALTER TABLE `table_akseptor_kb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_golongan_darah`
--
ALTER TABLE `table_golongan_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ho`
--
ALTER TABLE `table_ho`
  ADD PRIMARY KEY (`ho_id`),
  ADD KEY `table_ho_FKIndex1` (`table_status_berkas_id`),
  ADD KEY `table_ho_FKIndex2` (`table_jenis_permohonan_id`),
  ADD KEY `table_ho_FKIndex3` (`table_status_kawin_id`),
  ADD KEY `table_ho_FKIndex4` (`table_jenis_kelamin_id`),
  ADD KEY `table_ho_FKIndex5` (`table_agama_id`);

--
-- Indexes for table `table_hubungan_keluarga`
--
ALTER TABLE `table_hubungan_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_imb`
--
ALTER TABLE `table_imb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_imb_FKIndex1` (`table_status_berkas_id`),
  ADD KEY `table_imb_FKIndex2` (`table_jenis_permohonan_id`),
  ADD KEY `table_imb_FKIndex3` (`table_status_kawin_id`),
  ADD KEY `table_imb_FKIndex4` (`table_jenis_kelamin_id`),
  ADD KEY `table_imb_FKIndex5` (`table_agama_id`);

--
-- Indexes for table `table_jenis_kelamin`
--
ALTER TABLE `table_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_jenis_permohonan_ho`
--
ALTER TABLE `table_jenis_permohonan_ho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_jenis_permohonan_imb`
--
ALTER TABLE `table_jenis_permohonan_imb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_jenis_permohonan_kk`
--
ALTER TABLE `table_jenis_permohonan_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kelainan_khusus`
--
ALTER TABLE `table_kelainan_khusus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kelompok_pekerjaan`
--
ALTER TABLE `table_kelompok_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kk_detail`
--
ALTER TABLE `table_kk_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_kk_detail_FKIndex1` (`table_kk_header_id`),
  ADD KEY `table_kk_detail_FKIndex2` (`table_kelainan_khusus_id`),
  ADD KEY `table_kk_detail_FKIndex3` (`table_kelompok_pekerjaan_id`),
  ADD KEY `table_kk_detail_FKIndex4` (`table_status_pendidikan_id`),
  ADD KEY `table_kk_detail_FKIndex5` (`table_pendidikan_terakhir_id`),
  ADD KEY `table_kk_detail_FKIndex6` (`table_golongan_darah_id`),
  ADD KEY `table_kk_detail_FKIndex7` (`table_agama_id`),
  ADD KEY `table_kk_detail_FKIndex8` (`table_status_kawin_id`),
  ADD KEY `table_kk_detail_FKIndex9` (`table_hubungan_keluarga_id`),
  ADD KEY `table_kk_detail_FKIndex10` (`table_jenis_kelamin_id`),
  ADD KEY `table_kk_detail_FKIndex11` (`table_akseptor_kb_id`);

--
-- Indexes for table `table_kk_header`
--
ALTER TABLE `table_kk_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_kk_header_FKIndex1` (`table_status_berkas_id`);

--
-- Indexes for table `table_ktp`
--
ALTER TABLE `table_ktp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_ktp_FKIndex1` (`table_status_berkas_id`),
  ADD KEY `table_ktp_FKIndex2` (`table_agama_id`),
  ADD KEY `table_ktp_FKIndex3` (`table_status_kawin_id`),
  ADD KEY `table_ktp_FKIndex4` (`table_golongan_darah_id`),
  ADD KEY `table_ktp_FKIndex5` (`table_jenis_kelamin_id`);

--
-- Indexes for table `table_pendidikan_terakhir`
--
ALTER TABLE `table_pendidikan_terakhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_status_berkas`
--
ALTER TABLE `table_status_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_status_kawin`
--
ALTER TABLE `table_status_kawin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_status_pendidikan`
--
ALTER TABLE `table_status_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_jenis_permohonan_ho`
--
ALTER TABLE `table_jenis_permohonan_ho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_jenis_permohonan_imb`
--
ALTER TABLE `table_jenis_permohonan_imb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_ho`
--
ALTER TABLE `table_ho`
  ADD CONSTRAINT `table_ho_ibfk_1` FOREIGN KEY (`table_status_berkas_id`) REFERENCES `table_status_berkas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ho_ibfk_3` FOREIGN KEY (`table_status_kawin_id`) REFERENCES `table_status_kawin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ho_ibfk_4` FOREIGN KEY (`table_jenis_kelamin_id`) REFERENCES `table_jenis_kelamin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ho_ibfk_5` FOREIGN KEY (`table_agama_id`) REFERENCES `table_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ho_ibfk_6` FOREIGN KEY (`table_jenis_permohonan_id`) REFERENCES `table_jenis_permohonan_ho` (`id`);

--
-- Constraints for table `table_imb`
--
ALTER TABLE `table_imb`
  ADD CONSTRAINT `table_imb_ibfk_1` FOREIGN KEY (`table_status_berkas_id`) REFERENCES `table_status_berkas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_imb_ibfk_3` FOREIGN KEY (`table_status_kawin_id`) REFERENCES `table_status_kawin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_imb_ibfk_4` FOREIGN KEY (`table_jenis_kelamin_id`) REFERENCES `table_jenis_kelamin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_imb_ibfk_5` FOREIGN KEY (`table_agama_id`) REFERENCES `table_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_imb_ibfk_6` FOREIGN KEY (`table_jenis_permohonan_id`) REFERENCES `table_jenis_permohonan_imb` (`id`);

--
-- Constraints for table `table_kk_detail`
--
ALTER TABLE `table_kk_detail`
  ADD CONSTRAINT `table_kk_detail_ibfk_1` FOREIGN KEY (`table_kk_header_id`) REFERENCES `table_kk_header` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_10` FOREIGN KEY (`table_jenis_kelamin_id`) REFERENCES `table_jenis_kelamin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_11` FOREIGN KEY (`table_akseptor_kb_id`) REFERENCES `table_akseptor_kb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_2` FOREIGN KEY (`table_kelainan_khusus_id`) REFERENCES `table_kelainan_khusus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_3` FOREIGN KEY (`table_kelompok_pekerjaan_id`) REFERENCES `table_kelompok_pekerjaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_4` FOREIGN KEY (`table_status_pendidikan_id`) REFERENCES `table_status_pendidikan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_5` FOREIGN KEY (`table_pendidikan_terakhir_id`) REFERENCES `table_pendidikan_terakhir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_6` FOREIGN KEY (`table_golongan_darah_id`) REFERENCES `table_golongan_darah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_7` FOREIGN KEY (`table_agama_id`) REFERENCES `table_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_8` FOREIGN KEY (`table_status_kawin_id`) REFERENCES `table_status_kawin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_kk_detail_ibfk_9` FOREIGN KEY (`table_hubungan_keluarga_id`) REFERENCES `table_hubungan_keluarga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `table_kk_header`
--
ALTER TABLE `table_kk_header`
  ADD CONSTRAINT `table_kk_header_ibfk_1` FOREIGN KEY (`table_status_berkas_id`) REFERENCES `table_status_berkas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `table_ktp`
--
ALTER TABLE `table_ktp`
  ADD CONSTRAINT `table_ktp_ibfk_1` FOREIGN KEY (`table_status_berkas_id`) REFERENCES `table_status_berkas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ktp_ibfk_2` FOREIGN KEY (`table_agama_id`) REFERENCES `table_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ktp_ibfk_3` FOREIGN KEY (`table_status_kawin_id`) REFERENCES `table_status_kawin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ktp_ibfk_4` FOREIGN KEY (`table_golongan_darah_id`) REFERENCES `table_golongan_darah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `table_ktp_ibfk_5` FOREIGN KEY (`table_jenis_kelamin_id`) REFERENCES `table_jenis_kelamin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
