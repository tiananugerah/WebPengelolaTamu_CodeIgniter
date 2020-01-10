DROP TABLE apoteker;

CREATE TABLE `apoteker` (
  `idApoteker` varchar(20) NOT NULL,
  `NamaApoteker` varchar(50) NOT NULL,
  `NoSIK` varchar(10) NOT NULL,
  PRIMARY KEY (`idApoteker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO apoteker VALUES("2601521000017","Drs.Arif,Apt","5121/B");
INSERT INTO apoteker VALUES("2601521000020","Dra.Rositas,Apt","5246/B");
INSERT INTO apoteker VALUES("2601521000033","Dra.Hanna,Apt","5243/B");
INSERT INTO apoteker VALUES("2601521000035","Drs.Andy,Apt","5401/B");
INSERT INTO apoteker VALUES("2601521000055","Drs.Rahadi,Apt","5014/B");



DROP TABLE cabang;

CREATE TABLE `cabang` (
  `Cabang` varchar(100) NOT NULL,
  `AlamatCabang` varchar(100) NOT NULL,
  `Telp` varchar(12) NOT NULL,
  PRIMARY KEY (`Cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE dokter;

CREATE TABLE `dokter` (
  `idDokter` varchar(20) NOT NULL,
  `NamaDokter` varchar(50) NOT NULL,
  `Spesialis` varchar(30) NOT NULL,
  PRIMARY KEY (`idDokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO dokter VALUES("110248000001","Dr.Lusiana","Anak");
INSERT INTO dokter VALUES("110248000002","Dr.Antoni","THT");
INSERT INTO dokter VALUES("110248000003","Dr.Elvrida","Mata");
INSERT INTO dokter VALUES("110248000004","Dr.Rocki","Penyakit Dalam");
INSERT INTO dokter VALUES("110248000005","Dr.Hary","Gigi");



DROP TABLE doktercabang;

CREATE TABLE `doktercabang` (
  `idDokter` varchar(20) NOT NULL,
  `Cabang` varchar(100) NOT NULL,
  KEY `idDokter` (`idDokter`),
  KEY `Cabang` (`Cabang`),
  CONSTRAINT `doktercabang_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`),
  CONSTRAINT `doktercabang_ibfk_2` FOREIGN KEY (`Cabang`) REFERENCES `cabang` (`Cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE jadwal;

CREATE TABLE `jadwal` (
  `idDokter` varchar(20) NOT NULL,
  `Hari` varchar(10) NOT NULL,
  `Jam_Mulai` time DEFAULT NULL,
  `Jam_Selesai` time DEFAULT NULL,
  KEY `idDokter` (`idDokter`),
  CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE nota;

CREATE TABLE `nota` (
  `No_Nota` int(11) NOT NULL,
  `idPegawai` varchar(20) NOT NULL,
  `Cabang` varchar(100) NOT NULL,
  `TglBeli` date NOT NULL,
  `ExDisc` double NOT NULL,
  `Jumlah` double NOT NULL,
  `Bayar` double NOT NULL,
  `Total` double NOT NULL,
  `Kembalian` double NOT NULL,
  PRIMARY KEY (`No_Nota`),
  KEY `idPegawai` (`idPegawai`),
  KEY `Cabang` (`Cabang`),
  CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`),
  CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`Cabang`) REFERENCES `cabang` (`Cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE obat;

CREATE TABLE `obat` (
  `NamaObat` varchar(50) NOT NULL,
  `QtyObat` int(11) NOT NULL,
  `Harga` double NOT NULL,
  PRIMARY KEY (`NamaObat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE pegawai;

CREATE TABLE `pegawai` (
  `idPegawai` varchar(20) NOT NULL,
  `NamaPegawai` varchar(50) NOT NULL,
  PRIMARY KEY (`idPegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pegawai VALUES("150113600001","Febri Ahmad");
INSERT INTO pegawai VALUES("150113600002","Anita Junita");
INSERT INTO pegawai VALUES("150113600003","Dessy Ayu Sari");
INSERT INTO pegawai VALUES("150113600004","Dika Syahputra");
INSERT INTO pegawai VALUES("150113600005","Alfiansyah");



DROP TABLE resep;

CREATE TABLE `resep` (
  `NoResep` varchar(20) NOT NULL,
  `Cabang` varchar(100) NOT NULL,
  `idApoteker` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `idDokter` varchar(20) NOT NULL,
  `NamaPasien` varchar(50) NOT NULL,
  PRIMARY KEY (`NoResep`),
  KEY `Cabang` (`Cabang`),
  KEY `idApoteker` (`idApoteker`),
  KEY `idDokter` (`idDokter`),
  CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`Cabang`) REFERENCES `cabang` (`Cabang`),
  CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`idApoteker`) REFERENCES `apoteker` (`idApoteker`),
  CONSTRAINT `resep_ibfk_3` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE resepobat;

CREATE TABLE `resepobat` (
  `NoResep` varchar(20) NOT NULL,
  `NamaObat` varchar(50) NOT NULL,
  `BanyakObat` int(11) NOT NULL,
  `AturanPakai` varchar(50) NOT NULL,
  KEY `NoResep` (`NoResep`),
  KEY `NamaObat` (`NamaObat`),
  CONSTRAINT `resepobat_ibfk_1` FOREIGN KEY (`NoResep`) REFERENCES `resep` (`NoResep`),
  CONSTRAINT `resepobat_ibfk_2` FOREIGN KEY (`NamaObat`) REFERENCES `obat` (`NamaObat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE transaksiobat;

CREATE TABLE `transaksiobat` (
  `No_Nota` int(11) NOT NULL,
  `NamaObat` varchar(50) NOT NULL,
  `QtyBeli` int(11) NOT NULL,
  KEY `No_Nota` (`No_Nota`),
  KEY `NamaObat` (`NamaObat`),
  CONSTRAINT `transaksiobat_ibfk_1` FOREIGN KEY (`No_Nota`) REFERENCES `nota` (`No_Nota`),
  CONSTRAINT `transaksiobat_ibfk_2` FOREIGN KEY (`NamaObat`) REFERENCES `obat` (`NamaObat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




