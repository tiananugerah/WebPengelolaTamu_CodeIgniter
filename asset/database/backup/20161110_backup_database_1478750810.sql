DROP TABLE absensi;

CREATE TABLE `absensi` (
  `kd_absensi` int(3) NOT NULL AUTO_INCREMENT,
  `kd_siswa` int(3) NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  `keterangan` enum('h','s','i','a') NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `selesai` varchar(3) NOT NULL,
  PRIMARY KEY (`kd_absensi`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

INSERT INTO absensi VALUES("161","18","7","s","21/11/2010","yes");
INSERT INTO absensi VALUES("160","19","7","h","21/11/2010","yes");
INSERT INTO absensi VALUES("159","18","7","h","20/11/2010","yes");
INSERT INTO absensi VALUES("158","19","7","h","20/11/2010","yes");



DROP TABLE admin;

CREATE TABLE `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO admin VALUES("1","Agus Sumarna","sumarna@yahoo.com","pria","agus","fdf169558242ee051cca1479770ebac3");
INSERT INTO admin VALUES("2","Siera Nevada","siera@yahoo.com","Wanita","siera","47c0abc24dd9c450577173afdd173d64");
INSERT INTO admin VALUES("3","Siera Nevada","siera@yahoo.com","Wanita","siera","47c0abc24dd9c450577173afdd173d64");



DROP TABLE kelas;

CREATE TABLE `kelas` (
  `kd_kelas` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO kelas VALUES("9","3 IPS 1");
INSERT INTO kelas VALUES("8","3 IPA 2");
INSERT INTO kelas VALUES("7","3 IPA 1");



DROP TABLE siswa;

CREATE TABLE `siswa` (
  `kd_siswa` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `tgl_lahir` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  PRIMARY KEY (`kd_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO siswa VALUES("23","Heti Purnamawati","09/11/20","Poponcol","9");
INSERT INTO siswa VALUES("22","Agung Pramono","06/11/20","Johar","9");
INSERT INTO siswa VALUES("21","Asep Ruspayadi","05/11/20","Karawang","8");
INSERT INTO siswa VALUES("20","Dedi Ruspayadi","02/11/20","Serang","8");
INSERT INTO siswa VALUES("19","Pathona Detri Yhana","02/11/20","Depok","7");
INSERT INTO siswa VALUES("18","Agus Sumarna","01/11/20","Depok","7");



