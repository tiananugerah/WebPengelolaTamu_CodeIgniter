-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 08:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `batan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `nip` varchar(255) NOT NULL DEFAULT '',
  `nip_lama` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `gol` varchar(255) DEFAULT NULL,
  `lulusan` varchar(255) DEFAULT NULL,
  `sekolah_kampus` varchar(255) DEFAULT NULL,
  `jabatan_fungsional` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nip_lama`, `nama_pegawai`, `bagian`, `gol`, `lulusan`, `sekolah_kampus`, `jabatan_fungsional`, `status`) VALUES
('1', '123', 'aa', 'q', 'qwe', 'qwe', 'er', 'qwe', 'qw'),
('19581010 198701 1 001', '330003669', 'Ir. Hasan, MT.', 'BIDANG TEKNOFISIKA', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Analis penelitian dan Pengembangan', 'PNS'),
('19590901 198203 1 004', '330002186', 'Agus Sunarya, ST.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'IV/a', 'S1', 'Teknik Industri', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19591014 198812 1 001', '330004153', 'Dr. Ir. Djoko Hadi Prajitno, M. Sc.', 'BIDANG TEKNOFISIKA', 'IV/b', 'S3', 'S3 Rekayasa Pertambangan', 'Peneliti Ahli Madya', 'PNS'),
('19600511 198502 1 001', '330002912', 'Dr.Jupiter Sitorus Pane. M.Sc. ', 'KEPALA PUSAT', 'IV/c', 'S3', 'lmu Pengelolaan SDA&Lingkungan', 'Kepala PSTNT', 'PNS'),
('19601024 198303 2 001', '330002580', 'Dra. Rini Heroe Oetami, MT.', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'IV/b', 'S2', 'S2 Rekayasa Nuklir', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19610221 198203 1 005', '330002188', 'Koswara, S.Kom.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'IV/a', 'S1', 'S1 Komputer', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19610305 198303 1 006', '330002465', 'Dandung Nurhono, S.Sos', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'IV/b', 'S1', 'S1 Humas', 'Arsiparis Ahli Madya', 'PNS'),
('19610522 198403 1 002', '330002779', 'Dr. Dani Gustaman Syarif, M.Eng.', 'BIDANG TEKNOFISIKA', 'IV/e', 'S3', 'S3 Nuklir Engineering', 'Peneliti Ahli Utama', 'PNS'),
('19611007 198201 1 002', '330002105', 'Ahmad Sidik', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'II/a', 'SD', 'SD', 'Teknisi Laboratorium', 'PNS'),
('19611008 198203 2 003', '330002263', 'Foni Latifa', 'SUBBIDANG KETEKNIKAN', 'III/b', 'SMA', 'STM Elektro', 'Pranata Nuklir Penyelia', 'PNS'),
('19611021 198103 1 001', '330001948', 'Edy Priatna', 'SUBBAGIAN PERLENGKAPAN', 'III/b', 'SMA', 'SMA IPS', 'Pengemudi', 'PNS'),
('19611022 198203 1 002', '50032242', 'Suharyono', 'UNIT PENGAMANAN NUKLIR', 'III/b', 'SMA', 'SMA IPS', 'Pranata Nuklir Penyelia', 'PNS'),
('19611023 198803 1 002', '330003951', 'Drs. Putu Sukmabuana, M.Eng.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'IV/b', 'S2', 'S2 Teknik Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19611030 198603 2 002', '330003340', 'Sri Karyani', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/b', 'SMA', 'SMA IPS', 'Sekretaris Pimpinan', 'PNS'),
('19611121 199101 2 001', '330004606', 'Dra. Veronica Indriati Sri Wardhani, MT.', 'BIDANG TEKNOFISIKA', 'IV/a', 'S2', 'Rekayasa Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19620212 198503 1 008', '330002983', 'Wahyu Irianto', 'UNIT PENGAMANAN NUKLIR', 'III/d', 'SMA', 'STM Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19620213 198302 1 001', '330002416', 'Eko Rustiadi', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/b', 'SMA', 'SMA IPA', 'Teknisi Peralatan', 'PNS'),
('19620306 198201 1 001', '330002106', 'Usman', 'UNIT PENGAMANAN NUKLIR', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19620314 198903 1 003', '330004311', 'Drs. Suhulman', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/d', 'S1', 'S1 Kimia', 'Pengendali Dampak Lingkungan Muda', 'PNS'),
('19620429 198303 1 003', '330002463', 'Dadang Fachrudin', 'SUBBAGIAN PERLENGKAPAN', 'III/b', 'SMA', 'SMA IPS', 'Teknisi peralatan dan Instalasi', 'PNS'),
('19620514 198302 1 001', '330002405', 'Raharja, SE.', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/d', 'S1', 'S1 Ekonomi', 'Analis Manajemen Perkantoran', 'PNS'),
('19620701 199003 1 006', '330004512', 'Drs. Reinaldy Nazar, MT.', 'BIDANG TEKNOFISIKA', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19621010 198403 1 022', '330002730', 'Sugito', 'SUBBIDANG KETEKNIKAN', 'III/d', 'SMA', 'STM Elektro', 'Pranata Nuklir Penyelia', 'PNS'),
('19630409 198503 1 001', '330002998', 'Khasairin, S.Sos.', 'UNIT JAMINAN MUTU', 'III/d', 'S1', 'S1 Adm. Negara', 'Analis Manajemen Kepegawaian', 'PNS'),
('19630429 198302 2 001', '330002418', 'Heni', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/b', 'SMA', 'SMEA Tata Usaha', 'Pengadministrasi Kepegawaian', 'PNS'),
('19630511 199203 1 005', '330004864', 'Didin Samsudin', 'SUBBAGIAN KEUANGAN', 'III/b', 'SMA', 'SMA IPS', 'Pengelola  Adminstrasi Belanja Pegawai ', 'PNS'),
('19630804 199203 1 002', '330004825', 'Drs. Dadang Supriatna, MT', 'BIDANG KESELAMATAN KERJA DAN KETEKNIKAN', 'IV/b', 'S2', 'S2 Lingkungan', 'Kepala Bidang K3', 'PNS'),
('19630810 198603 2 001', '330003604', 'Dra. Arie Widowati, MT.', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'IV/a', 'S2', 'S2 Rekayasa Nuklir', 'Kepala Subbagian PKDI', 'PNS'),
('19630918 198301 1 001', '330002374', 'Wawan Handiaga', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/d', 'SMA', 'STM El. Industri', 'Pranata Nuklir Penyelia', 'PNS'),
('19631213 198403 2 006', '330002786', 'Natalia Adventini', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/d', 'SMA', 'SLA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19640314 199203 1 004', '330004810', 'Dr. Epung Saepul Bahrum', 'BIDANG TEKNOFISIKA', 'IV/a', 'S3', 'Fisika', 'Peneliti Ahli Muda', 'PNS'),
('19640323 198403 1 002', '330002737', 'Iswahyudi', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'SMA', 'Snakma Peternakan', 'Pranata Nuklir Mahir', 'PNS'),
('19640610 198601 1 002', '330003246', 'Yudi Setiadi', 'BIDANG TEKNOFISIKA', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19640614 199103 2 002', '330004663', 'Dra. Juni Chussetijowati', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'IV/a', 'S1', 'S1 Matematika', 'Pengawas Radiasi Ahli Madya', 'PNS'),
('19640702 198302 2 001', '330002421', 'Supartini Parmis, SAB', 'SUBBAGIAN KEUANGAN', 'III/d', 'S1', 'SAB', 'Kepala Subbagian Keuangan', 'PNS'),
('19640716 199303 1 002', '330004958', 'Dr. Alan Maulana, MT.', 'BIDANG TEKNOFISIKA', 'IV/b', 'S3', 'Fisika', 'Kepala Bagian Teknofisika', 'PNS'),
('19640718 198803 2 001', '330004070', 'Prof. Dr. Muhayatun, MT.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'IV/e', 'S3', 'S3 Matematika dan IPA (Kimia)', 'Peneliti Ahli Utama', 'PNS'),
('19640910 198410 1 001', '330002860', 'Dadang Basarah, S.Si.', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/d', 'S1', 'S1 Kimia', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19641115 199803 1 002', '330005108', 'Anton Mediawan, ST', 'SUBBIDANG AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING', 'III/d', 'S1', 'S1 Teknik Industri', 'Pranata Nuklir Muda', 'PNS'),
('19650113 198603 1 004', '330003335', 'Muhamad Yamin', 'BIDANG TEKNOFISIKA', 'III/d', 'SMA', 'SMA Analis', 'Pranata Nuklir Penyelia', 'PNS'),
('19650504 199010 1 001', '330004559', 'Dian Siswa, SAP', 'UNIT PENGAMANAN NUKLIR', 'III/c', 'S1', 'Administrasi Publik', 'Kepala Unit Pengamanan Nuklir', 'PNS'),
('19650505 198602 2 001', '330003330', 'Onih Setiati', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/d', 'SMA', 'SMA IPS', 'Pustakawan Penyelia', 'PNS'),
('19650921 198910 2 001', '330004320', 'Dr. Enung Nurlia, MT.', 'BIDANG TEKNOFISIKA', 'IV/b', 'S3', 'S3 Rekayasa Pertambangan', 'Pranata Nuklir Ahli Madya', 'PNS'),
('19651228 199803 2 003', '330005129', 'Komarasari', 'SUBBAGIAN KEUANGAN', 'III/b', 'SMA', 'SMEA Tata Buku', 'Bendahara ', 'PNS'),
('19660323 199203 2 002', '330004900', 'Titin Sri Mulyati', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'SMA', 'SMA IPA', 'Pranata Nuklir Mahir', 'PNS'),
('19660421 198603 1 004', '330003437', 'Abdul Patah', 'BIDANG TEKNOFISIKA', 'III/b', 'D2', 'D2 PATN', 'Pranata Nuklir Mahir', 'PNS'),
('19670518 199201 2 001', '330004751', 'Dra. Azmairit Azis', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'IV/a', 'S1', 'S1 Kimia', 'Peneliti Ahli Madya', 'PNS'),
('19671014 198902 2 001', '330004239', 'Ratnasih', 'SUBBAGIAN PERLENGKAPAN', 'III/b', 'SMA', 'SMA IPS', 'Pengelola Kendaraan', 'PNS'),
('19680131 198803 1 002', '330004017', 'Budy Darmono', 'BIDANG TEKNOFISIKA', 'III/c', 'SMA', 'STM Mesin', 'Teknisi Litkayasa Penyelia', 'PNS'),
('19680505 198803 1 002', '330004000', 'Ade Suherman', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'SMA', 'SMK Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19680829 198803 1 001', '330003973', 'Bahtiar Imanudin, S.ST.', 'SUBBAGIAN PERLENGKAPAN', 'III/d', 'D4', 'D IV-Elektromekanik', 'Pengelola Pengadaan Barang/Jasa Ahli Pertama', 'PNS'),
('19701209 199010 1 001', '330004561', 'Rudi Fitriadi Sutardi, S.ST.', 'UNIT PENGAMANAN NUKLIR', 'III/c', 'D4', 'D IV', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19710301 199203 1 001', '330004872', 'Muhamad Yuyus', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/b', 'SMA', 'STM Teknik Pengerjaan Logam', 'Teknisi Peralatan', 'PNS'),
('19710428 199901 1 001', '330005156', 'Asep Yana Mulyana, SH.', 'BAGIAN TATA USAHA    ', 'III/d', 'S1', 'S1 Hukum', 'Kepala Bagian Tata Usaha', 'PNS'),
('19721003 199203 1 003', '330004894', 'Muhamad Anwar', 'UNIT PENGAMANAN NUKLIR', 'III/b', 'SMA', 'STM Otomotif', 'Pranata Nuklir Mahir', 'PNS'),
('19740408 200112 1 001', '330005203', 'Tri Cahyo Laksono, S.ST', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/c', 'D4', 'Teknokimia', 'Pengawas Radiasi Ahli Muda', 'PNS'),
('19740601 199403 1 002', '330005018', 'Arief Faat', 'UNIT PENGAMANAN NUKLIR', 'III/b', 'SMA', 'STM Listrik', 'Pranata Nuklir Mahir', 'PNS'),
('19750822 199403 2 001', '330005011', 'Diah Dwiana Lestiani, M.Eng.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'IV/a', 'S2', 'S2 Fisika Nuklir', 'Peneliti Ahli Madya', 'PNS'),
('19760806 200112 1 001', '330005207', 'Teguh Subekti, S.ST.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/b', 'D4', 'Teknofisika Nuklir', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19761012 200212 2 002', '330005234', 'Neni Ratnawati, A.Md.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/c', 'D3', 'D3 Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19770220 200212 2 001', '330005235', 'Nia Ratnaningsih, A.Md.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/b', 'D3', 'D3 Teknik Mesin', 'Pranata Nuklir Penyelia', 'PNS'),
('19771203 200112 1 003', '330005212', 'Abdul Rohim Iso Suwarso, S.ST', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/c', 'D4', 'Teknofisika Nuklir', 'Kepala Subbidang OP ', 'PNS'),
('19780627 200501 2 008', '330005316', 'Eva Maria Widyasari, M.Si', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/c', 'S2', 'S2 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19781030 200501 1 006', '330005276', 'dr. Rudi Gunawan, Sp, KN', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'IV/a', 'S2', 'Kedokteran Nuklir', 'Dokter Ahli Madya', 'PNS'),
('19790220 200312 2 001', '330005269', 'Isti Daruwati, M.Si., Apt.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'IV/a', 'S2', 'S2 Farmasi', 'Kepala Bidang SBR ', 'PNS'),
('19791214 200501 1 010', '330005318', 'Rasito, S.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/c', 'S1', 'S1 Fisika', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19800111 200312 2 007', '330005268', 'Rizky Juwita Sugiharti, M.Pharm', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/d', 'S2', 'S2 Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19800222 200604 2 003', '330005370', 'Iim Halimah, M.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S2', '', 'Peneliti Ahli Muda', 'PNS'),
('19801115 200501 2 010', '330005314', 'Ertis Lita Elianie, S.AP', 'SUBBAGIAN PERLENGKAPAN', 'III/b', 'S1', 'S1 Administrasi Publik', 'Pengadministrasi BMN', 'PNS'),
('19810326 200801 2 012', '330005515', 'Syukria Kurniawati, M.Sc', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/d', 'S2', 'S2 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19810714 200312 1 005', '330005270', 'Setyo Purnomo, S.ST', 'SUBBIDANG KETEKNIKAN', 'III/c', 'D4', 'D4 Teknofisika Nuklir', 'Kepala Subbidang Keteknikan', 'PNS'),
('19810825 200501 2 009', '330005319', 'Endah Damastuti, M.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/c', 'S2', 'S1 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19820315 200801 2 028', '330005507', 'Yustika Kurniati, MT.', 'UNIT JAMINAN MUTU', 'III/c', 'S2', 'S2 Teknik Elektro', 'Kepala Unit Jaminan Mutu', 'PNS'),
('19821219 200801 2 018', '330005520', 'Woro Yatu Niken Syahfitri, S.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'S1 Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19830103 200501 2 009', '330005317', 'Maula Eka Sriyani, M.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/d', 'S2', 'S2 Farmasi', 'Peneliti Ahli Muda', 'PNS'),
('19830505 200604 1 004', '330005372', 'Nanda Nagara, ST.', 'BIDANG TEKNOFISIKA', 'III/c', 'S1', 'S1 Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19831016 200801 2 013', '330005521', 'Neneng Nur Aisyah, A.Md.', 'SUBBAGIAN KEUANGAN', 'III/a', 'D3', 'D3 Analis Kimia', 'Verikator Keuangan', 'PNS'),
('19831119 200801 1 007', '330005524', 'Asep Wahyu Shopiyudin, ST.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/a', 'S1', 'Teknik Elektro', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19840318 200312 1 004', '330005264', 'Asmunip Prayogo', 'UNIT PENGAMANAN NUKLIR', 'II/d', 'SMA', 'SMK Otomotif', 'Pranata Nuklir Terampil', 'PNS'),
('19840511 200912 1 003', '330005689', 'Rian Fitriana, S.ST.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/b', 'D4', 'Teknik Nuklir', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19840606 200801 1 008', '330005504', 'Prasetyo Basuki, M.Si', 'SUBBIDANG AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING', 'III/c', 'S2', 'Fisika', 'Kepala Subbidang ABNPD', 'PNS'),
('19840718 200604 2 002', '330005375', 'Mega Ardhya Garini, S.AP', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/c', 'S1', 'S1 Administrasi Publik', 'Analis Manajemen Kepegawaian', 'PNS'),
('19850118 200901 1 001', '330005590', 'Rezky Anggakusuma, S.Si', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/a', 'S1', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19850120 200912 2 003', '330005650', 'Indah Kusmartini, S.Si', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19850328 200901 1 002', '330005578', 'Rahmat Khatib Purnama, S.ST', 'UNIT PENGAMANAN NUKLIR', 'III/a', 'DIV', 'Teknokimia Nuklir', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19850720 200801 1 008', '330005503', 'Haryo Seno, MSi.', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/c', 'S2', 'Fisika', 'Pranata Nuklir Ahli Muda', 'PNS'),
('19850814 200801 2 004', '330005513', 'Afida Ikawati, MT', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/c', 'S2', 'S1 Teknik Lingkungan', 'Kepala Subbidang KKPR', 'PNS'),
('19851110 200912 1 001', '330005684', 'Hengki Wibowo, A.Md.', 'SUBBIDANG KETEKNIKAN', 'III/a', 'D3', 'Teknik Mesin', 'Teknisi Peralatan', 'PNS'),
('19851120 200901 1 003', '330005589', 'Veri Trisnawan, A.Md.', 'BIDANG TEKNOFISIKA', 'III/a', 'D3', 'D3 Elektronika dan Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19860224 200901 1 001', '330005587', 'Muhamad Basit Febrian , M.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S2', 'S1 Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19860303 200901 1 002', '330005586', 'Sigit Nugroho Pamungkas, S.ST.', 'SUBBIDANG KETEKNIKAN', 'III/c', 'D4', 'D IV Elektromekanik', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19860331 200801 1 006', '330005519', 'Teguh Hafiz Ambar Wibawa, M.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/a', 'S2', 'Kimia', 'Peneliti Ahli Muda', 'PNS'),
('19860603 201012 1 002', '330005748', 'Yayat Supriyatna, A.Md.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/a', 'D3', 'Teknik Elektro', 'Teknisi laboratorium', 'PNS'),
('19860622 200912 1 002', '330005648', 'Dikdik Sidik Purnama, S.Si', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/b', 'S1', 'Kimia', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19860825 200901 1 001', '330005591', 'Djoko Prakoso Dwi Atmodjo, A.Md.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'II/d', 'D3', 'D3 Elektronika Instrumentasi', 'Teknisi Laboratorium', 'PNS'),
('19861006 200604 1 004', '330005378', 'Dwi Handoko, S.ST', 'SUBBIDANG KETEKNIKAN', 'III/a', 'D4', 'Elektronika Instrumentasi ', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19861031 200501 1 003', '330005321', 'Haryatna', 'SUBBIDANG KETEKNIKAN', 'III/a', 'SMA', 'SMK Elektro', 'Teknisi Peralatan', 'PNS'),
('19861124 200901 1 002', '330005588', 'Santiko Tri Sulaksono, M.Si.', 'BIDANG TEKNOFISIKA', 'III/b', 'S1', 'S1 Fisika', 'Peneliti Ahli  Pertama', 'PNS'),
('19861210 201012 2 001', '330005720', 'Nailatussaadah, M.Si', 'SUBBIDANG AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING', 'III/c', 'S2', 'S2 Teknik Fisika', 'Pranata Nuklir Muda', 'PNS'),
('19870127 201403 1 004', '330005780', 'Yanuar Setiadi, S.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'Kimia', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19870318 200912 2 002', '330005649', 'Witri Nuraeni, A.Md.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/a', 'D3', 'Analis Kimia', 'Teknisi Laboratorium', 'PNS'),
('19870414 201012 2 001', '330005700', 'Kristanty Permata Vidiarsi. S.IP. ', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'III/b', 'S1', 'S1 Administrasi Negara', 'Analis Manajemen Kepegawaian', 'PNS'),
('19880306 200912 2 001', '330005691', 'Merita, M.Sc', 'BIDANG TEKNOFISIKA', 'III/c', 'S2', 'Kimia Engginering', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19880316 201012 1 002', '330005711', 'Hendris Wongso, S.Si.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'Biologi', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19880707 201503 2 004', '330005890', 'dr. Prabandhini Wardhani', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/c', 'S1', 'Dokter', 'Dokter Ahli Muda ', 'PNS'),
('19881219 200912 2 002', '330005655', 'Dessy Irmayanti Syukur, A.Md', 'SUBBAGIAN KEUANGAN', 'III/a', 'D3', 'D3 Akuntansi', 'Bendahara ', 'PNS'),
('19890717 201012 2 001', '330005751', 'Dwi Yuliansari Nurazizah, A.Md', 'SUBBIDANG KETEKNIKAN', 'III/a', 'D3', 'Teknik Elektro', 'Pranata Nuklir Mahir', 'PNS'),
('19891009 201801 2 001', '330005977', 'drg. Rizky Friskylia', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'III/b', 'S2', 'Dokter Gigi', 'Dokter Gigi Ahli Pertama', 'PNS'),
('19891229 201503 1 006', '330005894', 'drh. Isa Mahendra', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'Dokter Hewan', 'Analis Penelitian dan Pengembangan', 'PNS'),
('19900226 201902 1 002', '330006025', 'Ahmad Mudzakir Efendi, S.T', 'BIDANG TEKNOFISIKA', 'III/a', 'S1', 'Teknik Nuklir', 'Calon Peneliti Ahli Pertama', 'CPNS'),
('19900509 201503 2 007', '330005902', 'Yofi Ike Pratiwi, A.Md', 'BIDANG TEKNOFISIKA', 'II/c', 'D3', 'Analis Kimia', 'Pranata Nuklir Terampil', 'PNS'),
('19911022 201503 2 006', '330005892', 'Fuji Octa Indah Suciati, A.Md.', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'II/d', 'D3', 'Analis Kimia', 'Pranata Nuklir Terampil', 'PNS'),
('19911029 201503 1 004', '330005889', 'Danang Supriyanto, A.Md.', 'UNIT PENGAMANAN NUKLIR', 'II/c', 'D3', 'Elekronika dan Instrumentasi', 'Pranata Nuklir Terampil', 'PNS'),
('19920408 201503 1 003', '330005888', 'Aidil Fitri Ubaydillah, A.Md.', 'UNIT PENGAMANAN NUKLIR', 'II/c', 'D3', 'Elektronika', 'Pranata Nuklir Terampil', 'PNS'),
('19920426 201801 1 002', '330005960', 'Irsyad, S.ST', 'SUBBIDANG AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING', 'III/a', 'D4', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('19921221 201801 1 002', '330005978', 'Ahmad Kurniawan, S.KH.', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/b', 'S1', 'Dokter Hewan', 'Peneliti Ahli Pertama', 'PNS'),
('19930321 201503 1 002', '330005891', 'Harry Mukhrivan, A.Md.Kep', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'II/c', 'D3', 'Keperawatan', 'Teknisi Laboratorium', 'PNS'),
('19930622 201801 1 002', '330005976', 'Jakaria Usman, S.Si', 'BIDANG TEKNOFISIKA', 'III/a', 'S1', 'S1 Fisika', 'Peneliti Ahli  Pertama', 'PNS'),
('19930628 201801 1 002', '330005962', 'Badra Sanditya Rattyananda, S.T', 'BIDANG SENYAWA BERTANDA DAN RADIOMETRI', 'III/a', 'S1', 'S1 Kimia', 'Peneliti Ahli Pertama', 'PNS'),
('19930711 201503 2 002', '330005895', 'Avi Pradana Yulianti, A.Md', 'SUBBAGIAN PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH', 'II/c', 'S1', 'Teknik Perencanaan Wilayah dan Kota', 'Analis Kepegawaian Terampil', 'PNS'),
('19931123 201902 1 003', '330006023', 'Dani Muliawan, A.Md.', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'II/c', 'D3', 'Teknik Mekatronika', 'Calon Pranata Nuklir Terampil', 'CPNS'),
('19931125 201902 2 002', '330006028', 'Ester Novia Veranata Simbolon, A.Md.Kep', 'SUBBIDANG KESELAMATAN KERJA DAN PROTEKSI RADIASI', 'II/c', 'D3', 'Keperawatan Gigi', 'Calon Perawat Gigi Terampil', 'CPNS'),
('19940331 201801 1 001', '330005966', 'Sabilul Falah, S.ST', 'SUBBIDANG OPERASI DAN PERAWATAN ', 'III/a', 'D5', 'Elektromekanik', 'Pranata Nuklir Ahli Pertama', 'PNS'),
('234', '234', '234', '24', '23', '23', '23', '23', '23');

-- --------------------------------------------------------

--
-- Table structure for table `data_peserta`
--

CREATE TABLE IF NOT EXISTS `data_peserta` (
  `nim_nis_ktp` varchar(16) NOT NULL,
  `nama_peserta` varchar(30) NOT NULL,
  `kelas_semester` int(2) NOT NULL,
  `institusi_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `pembimbing` varchar(40) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peserta`
--

INSERT INTO `data_peserta` (`nim_nis_ktp`, `nama_peserta`, `kelas_semester`, `institusi_sekolah`, `jurusan`, `keterangan`, `pembimbing`, `id_surat_masuk`) VALUES
('171019410', 'Daffa Akbar Ramadhan', 11, 'SMK Merdeka Bandung', 'RPL', 'diterima', '19581010 198701 1 001', 1),
('171019597', 'Muhammad Ridwan Kusmana', 11, 'SMK Merdeka Bandung', 'TKJ', 'diterima', '19581010 198701 1 001', 1),
('2', 'qwe', 11, 'qwe', 'qwe', '1', '1', 3),
('2341', 'qw', 11, 'asd', 'asd', '1', '1', 3),
('4', 'qwe', 11, 'asd', 'asd', '1', '1', 3),
('6', 'asd', 11, 'qwe', 'qwe', '1', '19620212 198503 1 008', 3),
('9', 'asd', 11, 'asd', 'asd', '1', '1', 3),
('99', 'qw', 11, 'qw', 'as', '1', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`) VALUES
(1, 'pkl'),
(2, 'ta'),
(3, 'kp'),
(4, 'kunjungan industri'),
(5, 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id` int(11) NOT NULL,
  `kop_surat` varchar(40) NOT NULL,
  `tgl_surat` date NOT NULL,
  `id_surat_masuk` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `kop_surat`, `tgl_surat`, `id_surat_masuk`, `nip`) VALUES
(1, '52321UN40.A7.DI/PI/2019', '2019-08-14', 2, '196110221986031002'),
(2, 'B-3331/BATAN/SNT/HM. 03/8/2018', '2018-08-08', 1, '19630804 199203 1 002');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
`id_surat_masuk` int(11) NOT NULL,
  `kop_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `tgl_msk_kegiatan` date NOT NULL,
  `tgl_klr_kegiatan` date NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `kop_surat`, `tgl_surat`, `alamat`, `kota`, `kode_pos`, `id_kegiatan`, `tgl_msk_kegiatan`, `tgl_klr_kegiatan`, `gambar`) VALUES
(1, '016/K/SMK-Mdk/E.11/2018', '2018-08-07', 'Jl. Pahlawan No 54', 'Bandung', '40124', 2, '2019-01-01', '2019-03-31', ''),
(2, '5155UN40.A7.DI/PI/2018', '2018-10-31', 'Jl. Taman Sari No 17', 'Bandung', '40132', 3, '2019-06-01', '2019-08-31', ''),
(3, '028/K/SMK-Mdk/E.11/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', ''),
(4, '52321UN40.A7.DI/PI/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', 'kunyuk.jpg'),
(5, '52321UN40.A7.DI/PI/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', ''),
(6, '52321UN40.A7.DI/PI/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', ''),
(7, '52321UN40.A7.DI/PI/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', ''),
(8, '52321UN40.A7.DI/PI/2019', '2019-05-07', 'Jl. Pahlawan No 5', 'Bandung', '40124', 1, '2019-06-01', '2019-08-31', 'kunyuk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `type`) VALUES
(2, '12', '121', 2),
(111, 'a', 'a', 3),
(1, 'werw', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_peserta`
--
ALTER TABLE `data_peserta`
 ADD PRIMARY KEY (`nim_nis_ktp`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
 ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
