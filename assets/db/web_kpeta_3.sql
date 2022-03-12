/*
Navicat MySQL Data Transfer

Source Server         : Localhost74
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : web_kpeta

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-12 12:51:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `absen`
-- ----------------------------
DROP TABLE IF EXISTS `absen`;
CREATE TABLE `absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `status_absen` varchar(255) NOT NULL,
  `jam_absen` varchar(10) NOT NULL,
  `tanggal_absen` varchar(10) NOT NULL,
  `koordinat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of absen
-- ----------------------------
INSERT INTO `absen` VALUES ('1', '6', 'nama disini', 'email disini', 'sekolah ', 'yes', '05:24', '2022-03-11', '-6.3799296,106.8924928', 'image_1647059095.png', '-6.3799296', '106.8924928', 'Rawasepat, West Java, Indonesia');
INSERT INTO `absen` VALUES ('2', '6', 'nama disini', 'email disini', 'sekolah ', 'yes', '05:29', '2022-03-10', '-6.3799296,106.8924928', 'image_1647059390.png', '-6.3799296', '106.8924928', 'Rawasepat, West Java, Indonesia');

-- ----------------------------
-- Table structure for `daftar_pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `daftar_pegawai`;
CREATE TABLE `daftar_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nuptk` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(255) DEFAULT NULL,
  `jenis_ptk` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat_jalan` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `rw` varchar(255) DEFAULT NULL,
  `nama_dusun` varchar(255) DEFAULT NULL,
  `desa_kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tugas_tambahan` varchar(255) DEFAULT NULL,
  `sk_cpns` varchar(255) DEFAULT NULL,
  `tanggal_cpns` varchar(255) DEFAULT NULL,
  `sk_pengangkatan` varchar(255) DEFAULT NULL,
  `tmt_pengangkatan` varchar(255) DEFAULT NULL,
  `lembaga_pengangkatan` varchar(255) DEFAULT NULL,
  `pangkat_golongan` varchar(255) DEFAULT NULL,
  `sumber_gaji` varchar(255) DEFAULT NULL,
  `nama_ibu_kandung` varchar(255) DEFAULT NULL,
  `status_perkawinan` varchar(255) DEFAULT NULL,
  `nama_suami_istri` varchar(255) DEFAULT NULL,
  `nip_suami_istri` varchar(255) DEFAULT NULL,
  `pekerjaan_suami_istri` varchar(255) DEFAULT NULL,
  `tmt_pns` varchar(255) DEFAULT NULL,
  `sudah_lisensi_kepala_sekolah` varchar(255) DEFAULT NULL,
  `pernah_diklat_kepengawasan` varchar(255) DEFAULT NULL,
  `keahlian_braille` varchar(255) DEFAULT NULL,
  `keahlian_bahasa_isyarat` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `nama_wajib_pajak` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `nomor_rekening_bank` varchar(255) DEFAULT NULL,
  `rekening_atas_nama` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `karpeg` varchar(255) DEFAULT NULL,
  `karis_karsu` varchar(255) DEFAULT NULL,
  `lintang` varchar(255) DEFAULT NULL,
  `bujur` varchar(255) DEFAULT NULL,
  `nuks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of daftar_pegawai
-- ----------------------------
INSERT INTO `daftar_pegawai` VALUES ('6', 'SMAN 1 ANJATAN', '20215984', 'Andi Shofiandie', '4241762663200023', 'L', 'Indramayu', '1984-09-09', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Curug', '7', '4', 'Curug III', 'Curug', 'Kec. Kandanghaur', '45254', null, '085798864743', 'andimoslemalawi@gmail.com', 'Pembina Ekstrakurikuler', null, null, '800/ /SMA.08/2006', '2006-07-17', 'Kepala Sekolah', null, 'Sekolah', 'Walimah', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212210910840004', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('7', 'SMAN 1 ANJATAN', '20215984', 'Anton', '7042767668130263', 'L', 'Indramayu', '1989-07-10', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Arjasari', '1', '2', 'Arjasari Barat', 'Arjasari', 'Kec. Patrol', '45257', null, '087727021999', 'antonbr515@gmail.com', null, null, null, '800/220/SMA.08/2014', '2014-01-01', 'Kepala Sekolah', null, 'Sekolah', 'Minih', 'Kawin', 'Aulia Martdiany', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212311007890001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('9', 'SMAN 1 ANJATAN', '20215984', 'Bertifelley Permata Putri Priyatno', '5454772673230072', 'P', 'Indramayu', '1994-01-22', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Matahari BTN Cipancuh Asri Rt.29 Rw.13', null, null, null, 'Cipancuh', 'Kec. Haurgeulis', null, null, '082127082255', 'putribertifelley@gmail.com', 'Pembina Ekstrakurikuler', null, null, '800/001/SMA.08/2017', '2017-01-03', 'Kepala Sekolah', null, 'APBD Provinsi', 'Elmi Puspitawati', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212016201940002', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('10', 'SMAN 1 ANJATAN', '20215984', 'Dede Mulyaningsih', '1057760661300053', 'P', 'Tegal', '1982-07-25', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Blok Kubanggading', '16', '7', 'Kubanggading', 'Cipancuh', 'Kec. Haurgeulis', '45264', null, '081328482663', 'mulyaningsihdede70@gmail.com', null, null, null, '800/160/SMA.08/2006', '2006-09-21', 'Kepala Sekolah', null, 'Sekolah', 'Ngatiyah', 'Kawin', 'DIDI SUWANDI', null, 'Wiraswasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212016507820004', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('12', 'SMAN 1 ANJATAN', '20215984', 'DIAN HAYATI', null, 'P', 'INDRAMAYU', '1995-01-31', null, 'Guru Honor Sekolah', 'Guru BK', 'Islam', 'Bugis', '13', '4', 'Pasar', 'Bugis', 'Kec. Anjatan', '45256', null, '083123723270', 'dianhayati296@gmail.com', null, null, null, '800/446/SMA.08/2017', '2017-08-21', 'Kepala Sekolah', null, 'Sekolah', 'UHDATUL HIDAH', 'Kawin', 'MUH SUBHAN, S.Pd.', '197311082008011003', 'PNS/TNI/Polri', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '839011327437000', 'DIAN HAYATI', 'ID', null, null, null, '3212237101950001', null, null, null, '-6.3738', '107.9574', null);
INSERT INTO `daftar_pegawai` VALUES ('13', 'SMAN 1 ANJATAN', '20215984', 'Ela Nurlaelatul Jannah', '1248764665300083', 'P', 'Indramayu', '1986-09-16', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Jendral A. Yani', '26', '10', 'Sasak Mijan', 'Anjatan Utara', 'Kec. Anjatan', '45256', null, '087717761044', 'elajanna741@gmail.com', null, null, null, '800/001/SMA.08/2010', '2010-07-02', 'Kepala Sekolah', null, 'Sekolah', 'Hj. Maemanah', 'Kawin', 'Mohammad Jamali', null, 'Wiraswasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235609860003', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('17', 'SMAN 1 ANJATAN', '20215984', 'Husnul Khotimah Wati', '3439748648300002', 'P', 'Indramayu', '1970-01-07', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Komplek Pintu Air Bugistua', '13', '4', 'Bugistua', 'Bugistua', 'Kec. Anjatan', '45256', null, '085722977066', 'husnulkhotimahwati99@gmail.com', null, null, null, '800/214/sma.08/2014', '2014-07-01', 'Kepala Sekolah', null, 'Sekolah', 'Tarih', 'Kawin', null, null, 'Sudah Meninggal', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212234701700001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('21', 'SMAN 1 ANJATAN', '20215984', 'Ilah makhilah', '9655761661300012', 'P', 'Indramayu', '1983-03-23', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Irigasi timur', '4', '3', 'Sukareja Gribig', 'Lempuyang', 'Kec. Anjatan', '45256', null, '085295749806', 'bundahilya4458@gmail.com', null, null, null, '800/123/SMA.08/2006', '2006-07-17', 'Kepala Sekolah', null, 'Sekolah', 'Hj. Jumaroh', 'Kawin', 'Ade Sumantri', '197604042002121002', 'PNS/TNI/Polri', null, 'Ya', 'Tidak', 'Tidak', 'Tidak', '474225331437000', 'Ade Sumantri / Ilah Makhilah,S.Pd (Isteri)', 'ID', null, null, null, '3212236303830001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('24', 'SMAN 1 ANJATAN', '20215984', 'Kuslinah', '8541763665210042', 'P', 'INDRAMAYU', '1985-02-09', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Raya Limpas', '1', '2', 'Limpas', 'Limpas', 'Kec. Patrol', '45258', null, '083195533374', 'kuslinahgeo@gmail.com', null, null, null, '800/229/SMA/08/2013', '2013-07-15', 'Kepala Sekolah', null, 'Sekolah', 'DARSINAH', 'Kawin', 'SURENDI', null, 'Karyawan Swasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212314902850002', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('25', 'SMAN 1 ANJATAN', '20215984', 'Meity Suryandari', '858754655300032', 'P', 'Bandung', '1976-05-26', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Situraja', '9', '4', 'Kiarakurung', 'Situraja', 'Kec. Gantar', '45264', null, '085659672503', 'meisury.finding@gmail.com', 'Pembina Ekstrakurikuler', null, null, '800/001/SMA-08/2016', '2016-01-04', 'Kepala Sekolah', null, 'Sekolah', 'Euis Djuliasih', 'Kawin', 'Eri Setiawan', null, 'Lainnya', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '798422507437000', 'Meity Suryandari', 'ID', null, null, null, '3212256605760001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('26', 'SMAN 1 ANJATAN', '20215984', 'Mochammad Iqbal', null, 'L', 'Indramayu', '1993-08-23', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Manis', '3', '6', 'Jati', 'Pasir Biru', 'Kec. Cibiru', '40615', null, '082226296213', 'mi038083@gmail.com', 'Pembina Ekstrakurikuler', null, null, '800/001/SMA.08/2017', '2017-01-03', 'Kepala Sekolah', null, 'Sekolah', 'Heni Hendariah', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212202308930006', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('29', 'SMAN 1 ANJATAN', '20215984', 'Mulyati', '5254763664130103', 'P', 'Indramayu', '1985-09-22', null, 'Guru Pengganti', 'Guru Mapel', 'Islam', 'Komplek Desa', '2', '3', 'Desa', 'Eretan Kulon', 'Kec. Kandanghaur', '45254', null, '081223280497', 'imoel_firdaus@yahoo.com', 'Pembina Ekstrakurikuler', null, null, '896/Kep.379-Disdik/2020', '2020-07-14', 'Pemerintah Propinsi', null, 'APBD Provinsi', 'RASITI', 'Kawin', 'MOCHAMAD AHLIDIN FIRDAUS', '198701172014121002', 'PNS/TNI/Polri', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '549180826437000', 'MOCHAMAD AHLIDIN FIRDAUS MULYATI ISTERI', 'ID', null, null, null, '3212236209850003', '3212212605140003', null, null, '-6.325492963214', '108.07572841644', null);
INSERT INTO `daftar_pegawai` VALUES ('31', 'SMAN 1 ANJATAN', '20215984', 'Novita Ekawati', '1446767668230163', 'P', 'SUBANG', '1989-11-14', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Raya Haurgeulis', '19', '8', 'Sukajadi', 'Sukajati', 'Kec. Haurgeulis', '45264', null, '081220364473', 'ekawatinovita09@gmail.com', null, null, null, '800/220/SMA.08/2014', '2014-07-01', 'Kepala Sekolah', null, 'Sekolah', 'HARTI', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235411890001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('34', 'SMAN 1 ANJATAN', '20215984', 'NURFADILAH', null, 'P', 'INDRAMAYU', '1996-07-10', null, 'Guru Honor Sekolah', 'Guru BK', 'Islam', 'Sumur Galih', '2', '4', 'Sumur Galih Permai', 'Anjatan Baru', 'Kec. Anjatan', null, null, '081779250617', 'nurfadilah1300001149@webmail.uad.ac.id', null, null, null, '800/446/SMA.08/2017', '2017-08-21', 'Kepala Sekolah', null, 'Sekolah', 'SUNENTI', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235007960008', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('35', 'SMAN 1 ANJATAN', '20215984', 'Nurlaela', '7447771672230093', 'P', 'Indramayu', '1993-11-15', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Blok MTA No. 44 Pilang Payung', null, null, null, 'Salamdarma', 'Kec. Anjatan', null, null, '083878955600', 'olive_laela@ymail.com', null, null, null, '800/001/SMA.08/2017', '2017-01-03', 'Kepala Sekolah', null, 'APBD Provinsi', 'Marpuah', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235511930005', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('37', 'SMAN 1 ANJATAN', '20215984', 'Risma Ayu Puspita', '7454772673230082', 'P', 'Indramayu', '1994-01-22', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Blok Gadel', null, null, null, 'Sukamelang', 'Kec. Kroya', null, '022535520', '08977715029', 'rismaayu.22puspita@gmail.com', null, null, null, '800/059/SMA.08/2021', '2021-01-04', 'Kepala Sekolah', null, 'Yayasan', 'Kiptiyah', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212026201940001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('38', 'SMAN 1 ANJATAN', '20215984', 'Rizki Dwi Kamalul Jamal', null, 'L', 'Indramayu', '1995-06-25', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Blok I', '3', '2', 'Blok I', 'Cibereng', 'Kec. Terisi', '45260', null, '085793372783', 'rdwikj@gmail.com', 'Pembina Ekstrakurikuler', null, null, '20/Y-ALM/02.12/E3/1/2018', '2018-01-03', 'Ketua Yayasan', null, 'Yayasan', 'INOH', 'Kawin', 'Dwi Septi Nurlestari', null, 'Lainnya', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212212506950003', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('40', 'SMAN 1 ANJATAN', '20215984', 'Shalim Nugroho', '6546771672130113', 'L', 'Indramayu', '1993-12-14', null, 'Guru Honor Sekolah', 'Guru BK', 'Islam', 'Konca Kulon Rt. 04 Rw. 04', null, null, 'Konca', 'Anjatan Baru', 'Kec. Anjatan', null, null, '087826960341', 'adiyat.nugroho@gmail.com', null, null, null, '800/001/SMA.08/2017', '2017-01-03', 'Kepala Sekolah', null, 'APBD Provinsi', 'Sri Iskamti', 'Kawin', 'SITI AROFAH RACHMAWATI', null, 'Karyawan Swasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212231412930007', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('41', 'SMAN 1 ANJATAN', '20215984', 'SITI AROFAH RACHMAWATI', null, 'P', 'INDRAMAYU', '1995-05-10', null, 'Guru Honor Sekolah', 'Guru BK', 'Islam', 'Konca Kulon', '4', '4', 'Konca Kulon', 'Anjatan Baru', 'Kec. Anjatan', '45256', null, '083872610210', 'sitiarofahrachmawati@gmail.com', null, null, null, null, '2018-01-02', 'Kepala Sekolah', null, 'Sekolah', 'TUSLIKHA', 'Kawin', 'SHALIM NUGROHO', null, 'Karyawan Swasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212234405950002', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('47', 'SMAN 1 ANJATAN', '20215984', 'Syafaat Hadid', '4533758660200073', 'L', 'Indramayu', '1980-12-01', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'DUSUN KESAN RT 04/05', '0', '0', null, 'BUGIS', 'Kec. Haurgeulis', '45256', null, '081223719012', 'ditsyuusei@gmail.com', null, null, null, '800/ 301 /SMA.08/2009', '2009-10-22', 'Kepala Sekolah', null, 'Sekolah', 'FATMAWATI', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212230112800001', null, null, '-', null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('51', 'SMAN 1 ANJATAN', '20215984', 'Upik Wahyuningsih', '5143764666200013', 'P', 'Sleman', '1987-02-07', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Haurgeulis', '6', '2', 'Sumurwedi', 'Sumbermulya', 'Kec. Haurgeulis', '45264', null, '081214755163', 'upikwahyuningsih888@gmail.com', null, null, null, '800/ /SMA.08/2011', '2011-07-01', 'Kepala Sekolah', null, 'Sekolah', 'Suranti', 'Kawin', 'Miratno', null, 'Wiraswasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212014702870005', '3212011208150006', null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('52', 'SMAN 1 ANJATAN', '20215984', 'Wawat', null, 'P', 'Indramayu', '1994-02-19', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Cilandak', '23', '9', 'Cilandak', 'Anjatan Utara', 'Kec. Anjatan', '45257', null, '081939709247', 'wawatbahis@gmail.com', null, null, null, '800/001/SMA.08/2017', '2017-01-03', 'Kepala Sekolah', null, 'Sekolah', 'Eyeng', 'Belum Kawin', null, null, 'Tidak dapat diterapkan', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235902940002', '3212230206092618', null, null, '-6.379447546378', '107.93878555298', null);
INSERT INTO `daftar_pegawai` VALUES ('54', 'SMAN 1 ANJATAN', '20215984', 'Zahrotul Jannah', '5838763663300002', 'P', 'Indramayu', '1985-05-06', null, 'Guru Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. KH. Abdul Basyir', '16', '8', 'Blok 11', 'Kertanegera', 'Kec. Haurgeulis', '45264', null, '083816575330', 'zahrotul313yes@gmail.com', null, null, null, '800/001/SMA.08/2011', '2013-01-03', 'Kepala Sekolah', null, 'Sekolah', 'Wasriah', 'Kawin', 'SARIFUDIN', null, 'Lainnya', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212014605850013', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('55', 'SMAN 1 ANJATAN', '20215984', 'Agus Rohimat', null, 'L', 'BANDUNG', '1991-01-28', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'jl', '21', '1', null, 'Anjatan', 'Kec. Anjatan', '45256', null, null, 'agusrohimat212@gmail.com', null, null, null, '800/221/SMA.08/2014', '2014-07-01', 'Kepala Sekolah', null, 'Sekolah', 'LILIS', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3204152801910001', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('56', 'SMAN 1 ANJATAN', '20215984', 'Ali Murtado', '5939774675130032', 'L', 'Indramayu', '1996-06-07', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Cilandak Lor', '3', '1', 'Blok Sumber Bhakti', 'Cilandak Lor', 'Kec. Anjatan', '45256', '0234611337', '083148084787', 'alimurtado1996@gmail.com', null, null, null, '800/4115.A/SMKN1SUKRA/2016', '2016-07-18', 'Kepala Sekolah', null, 'Sekolah', 'SEPAT', 'Belum Kawin', 'Risma Ayu Puspita', null, 'Lainnya', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212230706960004', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('57', 'SMAN 1 ANJATAN', '20215984', 'Bahtiar Rifai', '5750763665200012', 'L', 'Indramayu', '1985-04-18', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Baleraja', '2', '4', 'Pasirmuncang', 'Baleraja', 'Kec. Gantar', '45264', '-', '087727783432', 'rifaimu@gmail.com', null, null, null, '800/002/SMA.08/2008', '2008-01-04', 'Kepala Sekolah', null, 'Sekolah', 'Renti', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212251804850004', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('58', 'SMAN 1 ANJATAN', '20215984', 'Daryam', '8335746649200013', 'L', 'Indramayu', '1968-10-03', '196810031994120992', 'PNS_Kepala_Sekolah', 'Kepala Sekolah', 'Islam', 'BTN Griya Asri I Jalan Cendana 1 No. 18/B5', '33', '9', 'PEKANDANGAN', 'PEKANDANGAN', 'Kec. Indramayu', '45216', '082128818937', '082128818937', 'jtbdaryam@yahoo.com', 'Kepala Sekolah', '76364/A2/C/1994', '1994-12-01', '0538/1/I02.Kep/KP/Ib/1996', '1996-11-01', 'Pemerintah Kab/Kota', 'IV/b', 'APBD Provinsi', 'WADER', 'Kawin', 'LIA HERISLIAWATI', '197202291995032003', 'PNS/TNI/Polri', '1996-11-01', 'Ya', 'Tidak', 'Tidak', 'Tidak', '474223443437000', 'DARYAM', 'ID', null, null, null, '3212150310680005', '3212150306098338', 'G 234168', 'AA 03003965', '-6.354357', '108.323901', '14023L0010218141009460');
INSERT INTO `daftar_pegawai` VALUES ('59', 'SMAN 1 ANJATAN', '20215984', 'Didi Rasidi', '1057767669110013', 'L', 'Indramayu', '1989-07-25', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Dusun Karangjaya', '13', '3', null, 'Mangunjaya', 'Kec. Anjatan', '45256', '082317622332', '082317622332', 'hikmal.harun@gmail.com', null, null, null, '800/229/SMA.08/2010', '2010-12-01', 'Pemerintah Pusat', null, 'Sekolah', 'Jubaedah', 'Kawin', 'DIDA APRIANDINI', null, 'Lainnya', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '751286410437000', 'DIDI RASIDI', 'ID', null, null, null, '3212231507890003', '3173020202160027', null, null, '-6.3992254', '107.911216', null);
INSERT INTO `daftar_pegawai` VALUES ('61', 'SMAN 1 ANJATAN', '20215984', 'Ermanto', '2142762664110073', 'L', 'Indramayu', '1984-08-10', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Jl. Jendral A. Yani', '1', '1', 'Babakan Dewi', 'Anjatan Utara', 'Kec. Anjatan', '45256', null, '082316927703', 'ermantom84@gmail.com', null, null, null, '800/200/SMA.08/2009', '2009-01-01', 'Kepala Sekolah', null, 'Sekolah', 'Roedah', 'Kawin', 'Rastinih', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212231008840012', null, null, null, '-6.340826678405', '107.96041607828', null);
INSERT INTO `daftar_pegawai` VALUES ('62', 'SMAN 1 ANJATAN', '20215984', 'Galih Subita', '2854758659200022', 'L', 'Indramayu', '1980-05-22', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Jl. Jendral A. Yani', '28', '10', 'Sasakmijan', 'Anjatan Utara', 'Kec. Anjatan', '45256', null, '087823366288', 'galihsubita@gmail.com', null, null, null, '800/044/SMA.08/2008', '2008-02-04', 'Kepala Sekolah', null, 'Sekolah', 'Sukinih', 'Kawin', 'DESY AMELIA PUTRI', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212012205800002', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('63', 'SMAN 1 ANJATAN', '20215984', 'Heni Indrianingsih', '8547764665300072', 'P', 'Indramayu', '1986-02-15', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Haurgeulis', '23', '11', 'Cipancuh', 'Cipancuh', 'Kec. Haurgeulis', '45264', null, '085224665004', 'heniindrianingsih86@gmail.com', null, null, null, '800/002/SMA.08/2008', '2008-01-04', 'Kepala Sekolah', null, 'Sekolah', 'ROHAYATI', 'Kawin', 'Yudi Rahmayanto', null, 'Karyawan Swasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212015502860007', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('64', 'SMAN 1 ANJATAN', '20215984', 'Imam Fawzy', '7635767668200012', 'L', 'Indramayu', '1989-03-03', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Blok Karangrata', '2', '5', 'Karangrata', 'Anjatan', 'Kec. Anjatan', '45256', null, '085224228505', 'zatan.fawzy@gmail.com', null, null, null, '800/0015/SMA.08/2008', '2008-01-01', 'Pemerintah Pusat', null, 'Sekolah', 'Titin', 'Kawin', 'NOVITASARI', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '813841954437000', 'IMAM FAWZY', 'ID', null, null, null, '3212230303890002', '3212232003180006', null, null, '-6.344203546212', '107.95824766159', null);
INSERT INTO `daftar_pegawai` VALUES ('65', 'SMAN 1 ANJATAN', '20215984', 'Khaerul Muslimin', '357764666110043', 'L', 'Indramayu', '1986-10-25', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Dusun Sasak Mijan', '28', '10', 'Sasak Mijan', 'Anjatan Utara', 'Kec. Anjatan', '45256', null, '087727007711', 'khaerulmuslimin01@gmail.com', null, null, null, '800/355/SMA.08/2010', '2010-12-01', 'Kepala Sekolah', null, 'Sekolah', 'Rasiah', 'Kawin', 'RIA NUR ANDIKA', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '814020020437000', 'KHAERUL MUSLIMIN', 'ID', null, null, null, '3212232510860001', '3212232004180002', null, null, '-6.2254649', '106.8020575', null);
INSERT INTO `daftar_pegawai` VALUES ('66', 'SMAN 1 ANJATAN', '20215984', 'Lia Herlia Nengsih', '5144761662230213', 'P', 'Cirebon', '1983-08-12', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Jl. Raya Pintu Air bugis', '10', '3', 'Lungmalang', 'Bugis', 'Kec. Anjatan', '45256', null, '087727739307', 'liaherlia185@gmail.com', null, null, null, '800/265/SMA.08/2013', '2013-09-02', 'Kepala Sekolah', null, 'Sekolah', 'Kusmi', 'Kawin', 'Harismawan', null, 'Wiraswasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212235208830008', null, null, null, null, null, null);
INSERT INTO `daftar_pegawai` VALUES ('67', 'SMAN 1 ANJATAN', '20215984', 'Nanang Saepudin', null, 'L', 'Indramayu', '1985-04-19', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Jl. Raya Anjatan', '17', '7', 'BUYUT MILAH', 'Anjatan Utara', 'Kec. Anjatan', '45256', null, '083148085569', 'nanangsae1985@gmail.com', null, null, null, '800/221/SMA.08/2014', '2014-07-01', 'Kepala Sekolah', null, 'Sekolah', 'KASTIMAH', 'Kawin', 'SUNENGSIH', null, 'Pedagang Kecil', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '814059077437000', 'NANANG SAEPUDIN', 'ID', null, null, null, '3212231904850004', '3212230406096675', null, null, '-6.340037798667', '107.96144485474', null);
INSERT INTO `daftar_pegawai` VALUES ('68', 'SMAN 1 ANJATAN', '20215984', 'Sri Wahyuningsih', '2834763664230312', 'P', 'Indramayu', '1985-05-02', null, 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekolah', 'Islam', 'Dusun Kebon Randu', '6', '2', 'Kebon Randu', 'Anjatan Baru', 'Kec. Anjatan', '45256', null, '082315703297', 'sriw68116@gmail.com', null, null, null, '800/223/SMA.08/2010', '2010-07-05', 'Kepala Sekolah', null, 'Sekolah', 'Karsem', 'Kawin', 'ROKI ROKIDIN', null, 'Wiraswasta', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', '813765724437000', 'Sri Wahyuningsih', 'ID', null, null, null, '3212234205850001', '3212232702180008', null, null, '-6.2254649', '106.8020575', null);
INSERT INTO `daftar_pegawai` VALUES ('70', 'SMAN 1 ANJATAN', '20215984', 'SUWARJO BIN RASAM', '2635751650200002', 'L', 'Indramayu', '1973-03-03', null, 'Tenaga Honor Sekolah', 'Pesuruh/Office Boy', 'Islam', 'Jl. Raya Kopyah', '4', '2', 'Blok Konca', 'Kopyah', 'Kec. Anjatan', '45256', null, null, 'aajoe2017@gmail.com', null, null, null, '800/200/SMA.08/2008', '2008-01-01', 'Kepala Sekolah', null, 'Sekolah', 'SUMINIH', 'Belum Kawin', null, null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212230303730006', '3212230106092192', null, null, '-6.368881293186', '107.95449405676', null);
INSERT INTO `daftar_pegawai` VALUES ('71', 'SMAN 1 ANJATAN', '20215984', 'Tanali', '3239733633200003', 'L', 'Indramayu', '1955-09-07', null, 'Tenaga Honor Sekolah', 'Penjaga Sekolah', 'Islam', 'Jl. Raya Kopyah', '4', '2', 'Blok Konca', 'Kopyah', 'Kec. Anjatan', '45256', null, null, 'tanali7303@gmail.com', null, null, null, '800/210/sma.08/2008', '2008-01-01', 'Kepala Sekolah', null, 'Sekolah', 'Taswinah', 'Kawin', 'Karsem', null, 'Tidak bekerja', null, 'Tidak', 'Tidak', 'Tidak', 'Tidak', null, null, 'ID', null, null, null, '3212230709550008', '3212230406090140', null, null, '-6.368985547889', '107.95524745888', null);

-- ----------------------------
-- Table structure for `lokasi`
-- ----------------------------
DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat_long` varchar(50) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of lokasi
-- ----------------------------

-- ----------------------------
-- Table structure for `pengguna`
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `npsn` int(10) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `password_default` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal_add` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('3', 'Didi Rasidi', 'hikmal.harun@gmail.com', '20215984', 'SMAN 1 ANJATAN', 'Tenaga Honor Sekolah', 'Dusun Karangjaya, RT 13, RW 3, Desa Mangunjaya, Kec. Anjatan, Kode Pos 45256', 'jamesbond.jpg', '155544b49dd3f45e72b46867df66c353', 'RmWhCa41', '1', '1', '1645070703');
INSERT INTO `pengguna` VALUES ('4', 'Admin', 'admin@sman1anjatan.sch.id', '20215984', 'SMAN 1 ANJATAN', 'Tenaga Honor Sekolah', 'SMAN 1 ANJATAN', 'default.jpg', 'b1b79d2c93994d3081e3a4473d3f02b3', 'admin', '1', '1', '1645070703');
INSERT INTO `pengguna` VALUES ('6', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', '20215984', 'SMAN 1 ANJATAN', '-', '-', 'default.jpg', 'b1b79d2c93994d3081e3a4473d3f02b3', 'admin*', '2', '1', '1647055978');

-- ----------------------------
-- Table structure for `pengguna_riwayat`
-- ----------------------------
DROP TABLE IF EXISTS `pengguna_riwayat`;
CREATE TABLE `pengguna_riwayat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengguna_riwayat
-- ----------------------------
INSERT INTO `pengguna_riwayat` VALUES ('1', 'admin', 'vans.bear23@gmail.com', 'instansi', '1', 'Login', '17-02-2022 11:01:44', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('2', 'admin', 'vans.bear23@gmail.com', 'instansi', '1', 'Logout', '17-02-2022 11:04:35', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('3', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '17-02-2022 11:05:31', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('4', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '17-02-2022 11:11:28', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('5', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '27-02-2022 17:59:25', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('6', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '27-02-2022 20:36:28', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('7', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '27-02-2022 20:36:32', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('8', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '27-02-2022 20:36:43', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('9', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '27-02-2022 21:11:43', '192.168.20.17', 'Chrome', 'Mozilla/5.0 (Linux; Android 9; vivo 1902) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('10', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '27-02-2022 21:13:32', '192.168.20.99', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('11', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '27-02-2022 21:25:34', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('12', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 06:57:50', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('13', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 07:13:36', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('14', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 07:14:06', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('15', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 09:28:20', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('16', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 15:24:45', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('17', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 15:35:53', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('18', 'Admin', 'admin@sman1anjatan.sch.id', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 15:36:09', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('19', 'Admin', 'admin@sman1anjatan.sch.id', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 15:37:15', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('20', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 15:40:45', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('21', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 15:40:57', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('22', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Login', '08-03-2022 15:41:55', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('23', 'Didi Rasidi', 'hikmal.harun@gmail.com', 'SMAN 1 ANJATAN', '1', 'Logout', '08-03-2022 15:42:09', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('24', 'Admin', 'admin@sman1anjatan.sch.id', 'SMAN 1 ANJATAN', '1', 'Login', '12-03-2022 10:28:57', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('25', 'Admin', 'admin@sman1anjatan.sch.id', 'SMAN 1 ANJATAN', '1', 'Login', '12-03-2022 10:29:40', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('26', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '12-03-2022 10:36:43', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('27', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '12-03-2022 10:49:20', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('28', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '12-03-2022 12:18:40', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('29', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '12-03-2022 12:22:46', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36');
INSERT INTO `pengguna_riwayat` VALUES ('30', 'Pandu Reynaldo', 'pandureynaldo02@gmail.com', 'SMAN 1 ANJATAN', '2', 'Login', '12-03-2022 12:45:48', '::1', 'Chrome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36');

-- ----------------------------
-- Table structure for `sekolah`
-- ----------------------------
DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
  `npsn` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=293 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sekolah
-- ----------------------------
INSERT INTO `sekolah` VALUES ('1', 'SMKN 1 MAJALENGKA', '20213853');
INSERT INTO `sekolah` VALUES ('2', 'SMK KORPRI MAJALENGKA', '20213854');
INSERT INTO `sekolah` VALUES ('3', 'SMKS YIC JATIWANGI', '20213855');
INSERT INTO `sekolah` VALUES ('4', 'SMKS PGRI DAWUAN', '20213856');
INSERT INTO `sekolah` VALUES ('5', 'SMKN 1 MAJA', '20213857');
INSERT INTO `sekolah` VALUES ('6', 'SMKN 1 KADIPATEN', '20213871');
INSERT INTO `sekolah` VALUES ('7', 'SMKN 1 TALAGA', '20213872');
INSERT INTO `sekolah` VALUES ('8', 'SMAN 1 CIKIJING', '20213873');
INSERT INTO `sekolah` VALUES ('9', 'SMA PRAKARYA SINDANG', '20213874');
INSERT INTO `sekolah` VALUES ('10', 'SMAS PGRI 1 MAJALENGKA', '20213877');
INSERT INTO `sekolah` VALUES ('11', 'SLB NEGERI MAJALENGKA', '20213878');
INSERT INTO `sekolah` VALUES ('12', 'SLB C YPLB MAJALENGKA', '20213879');
INSERT INTO `sekolah` VALUES ('13', 'SLB BC YP AL AZHAR', '20213880');
INSERT INTO `sekolah` VALUES ('14', 'SLB GELORA KARYA', '20213881');
INSERT INTO `sekolah` VALUES ('15', 'SLB AL-MUFTI', '20213882');
INSERT INTO `sekolah` VALUES ('16', 'SMAN 1 KASOKANDEL', '20213883');
INSERT INTO `sekolah` VALUES ('17', 'SMAN 1 JATITUJUH', '20213884');
INSERT INTO `sekolah` VALUES ('18', 'SMAN 1 JATIWANGI', '20213885');
INSERT INTO `sekolah` VALUES ('19', 'SMAN 1 RAJAGALUH', '20213886');
INSERT INTO `sekolah` VALUES ('20', 'SMAN 1 BANTARUJEG', '20213887');
INSERT INTO `sekolah` VALUES ('21', 'SMAN 2 MAJALENGKA', '20213889');
INSERT INTO `sekolah` VALUES ('22', 'SMAN 1 TALAGA', '20213891');
INSERT INTO `sekolah` VALUES ('23', 'SMAN 1 SUKAHAJI', '20213892');
INSERT INTO `sekolah` VALUES ('24', 'SMAN 1 MAJALENGKA', '20213893');
INSERT INTO `sekolah` VALUES ('25', 'SMAN 1 MAJA', '20213894');
INSERT INTO `sekolah` VALUES ('26', 'SMAN 1 LIGUNG', '20213895');
INSERT INTO `sekolah` VALUES ('27', 'SMAN 1 LEUWIMUNDING', '20213896');
INSERT INTO `sekolah` VALUES ('28', 'SMAN 1 KADIPATEN', '20213897');
INSERT INTO `sekolah` VALUES ('29', 'SLB B YPLB MAJALENGKA', '20213898');
INSERT INTO `sekolah` VALUES ('30', 'SLB WELAS ASIH', '20214001');
INSERT INTO `sekolah` VALUES ('31', 'SLB ABC MUHAMMADIYAH JATIWANGI', '20214016');
INSERT INTO `sekolah` VALUES ('32', 'SLB A YPLB MAJALENGKA', '20214017');
INSERT INTO `sekolah` VALUES ('33', 'SMKS TELEMATIKA INDRAMAYU', '20215946');
INSERT INTO `sekolah` VALUES ('34', 'SMKS TELADAN KERTASEMAYA', '20215947');
INSERT INTO `sekolah` VALUES ('35', 'SMKS PUI JATIBARANG', '20215948');
INSERT INTO `sekolah` VALUES ('36', 'SMKS PGRI KAMAL JUNTINYUAT', '20215949');
INSERT INTO `sekolah` VALUES ('37', 'SMKS PGRI KANDANGHAUR', '20215950');
INSERT INTO `sekolah` VALUES ('38', 'SMKS PGRI JATIBARANG', '20215971');
INSERT INTO `sekolah` VALUES ('39', 'SMKS PGRI INDRAMAYU', '20215972');
INSERT INTO `sekolah` VALUES ('40', 'SMKS NASIONAL INDRAMAYU', '20215973');
INSERT INTO `sekolah` VALUES ('41', 'SMAN 1 LOSARANG', '20215974');
INSERT INTO `sekolah` VALUES ('42', 'SMAN 1 KROYA', '20215975');
INSERT INTO `sekolah` VALUES ('43', 'SMAN 1 KRANGKENG', '20215976');
INSERT INTO `sekolah` VALUES ('44', 'SMAN 1 SUKAGUMIWANG', '20215977');
INSERT INTO `sekolah` VALUES ('45', 'SMAN 1 KANDANGHAUR', '20215978');
INSERT INTO `sekolah` VALUES ('46', 'SMAN 1 JATIBARANG', '20215979');
INSERT INTO `sekolah` VALUES ('47', 'SMAN 1 INDRAMAYU', '20215980');
INSERT INTO `sekolah` VALUES ('48', 'SMAN 1 HAURGEULIS', '20215981');
INSERT INTO `sekolah` VALUES ('49', 'SMAN 1 TERISI', '20215982');
INSERT INTO `sekolah` VALUES ('50', 'SMAN 1 TUKDANA', '20215983');
INSERT INTO `sekolah` VALUES ('51', 'SMAN 1 ANJATAN', '20215984');
INSERT INTO `sekolah` VALUES ('52', 'SMAS YAPIN KERTASEMAYA', '20215985');
INSERT INTO `sekolah` VALUES ('53', 'SMAS PUI JATIBARANG', '20215987');
INSERT INTO `sekolah` VALUES ('54', 'SMAS PGRI PATROL', '20215988');
INSERT INTO `sekolah` VALUES ('55', 'SMAS PGRI GABUS WETAN', '20215990');
INSERT INTO `sekolah` VALUES ('56', 'SMAN 1 SINDANG', '20215991');
INSERT INTO `sekolah` VALUES ('57', 'SMAN 1 SLIYEG', '20215992');
INSERT INTO `sekolah` VALUES ('58', 'SMAN 2 INDRAMAYU', '20215993');
INSERT INTO `sekolah` VALUES ('59', 'SMKS PELITA JATIBARANG', '20215994');
INSERT INTO `sekolah` VALUES ('60', 'SMKS ISLAM TERISI', '20215995');
INSERT INTO `sekolah` VALUES ('61', 'SMKS NU KAPLONGAN', '20215996');
INSERT INTO `sekolah` VALUES ('62', 'SMKN 2 INDRAMAYU', '20215997');
INSERT INTO `sekolah` VALUES ('63', 'SMKN 1 SINDANG', '20215998');
INSERT INTO `sekolah` VALUES ('64', 'SMKN 1 LOSARANG', '20216001');
INSERT INTO `sekolah` VALUES ('65', 'SMKN 1 LELEA', '20216002');
INSERT INTO `sekolah` VALUES ('66', 'SMKN 1 KANDANGHAUR', '20216003');
INSERT INTO `sekolah` VALUES ('67', 'SMKN 1 INDRAMAYU', '20216004');
INSERT INTO `sekolah` VALUES ('68', 'SMKN 1 ANJATAN', '20216005');
INSERT INTO `sekolah` VALUES ('69', 'SMKS MUHAMMADIYAH KANDANGHAUR', '20216006');
INSERT INTO `sekolah` VALUES ('70', 'SMKS MUHAMMADIYAH HAURGEULIS', '20216007');
INSERT INTO `sekolah` VALUES ('71', 'SMKS MANDIRI HAURGEULIS', '20216009');
INSERT INTO `sekolah` VALUES ('72', 'SMKS ENDANG DARMA AYU INDRAMAYU', '20216010');
INSERT INTO `sekolah` VALUES ('73', 'SMKS AL IRSYAD AL ISLAMIYYAH HAURGEULIS', '20216011');
INSERT INTO `sekolah` VALUES ('74', 'SMAS PGRI 2 SINDANG', '20216175');
INSERT INTO `sekolah` VALUES ('75', 'SMAS AL ISHLAH BOARDING SCHOOL', '20216194');
INSERT INTO `sekolah` VALUES ('76', 'SMAS ASSALAFIAH INDRAMAYU', '20216195');
INSERT INTO `sekolah` VALUES ('77', 'SMAS PGRI 1 SINDANG', '20216196');
INSERT INTO `sekolah` VALUES ('78', 'SMAS P MKGR KERTASEMAYA', '20216197');
INSERT INTO `sekolah` VALUES ('79', 'SMAS NU WIDASARI', '20216198');
INSERT INTO `sekolah` VALUES ('80', 'SMAS NU KAPLONGAN', '20216200');
INSERT INTO `sekolah` VALUES ('81', 'SMAS NU JUNTINYUAT', '20216201');
INSERT INTO `sekolah` VALUES ('82', 'SMAS NU INDRAMAYU', '20216202');
INSERT INTO `sekolah` VALUES ('83', 'SMAS MUHAMMADIYAH KARANGAMPEL', '20216203');
INSERT INTO `sekolah` VALUES ('84', 'SMAS MUHAMMADIYAH JATIBARANG', '20216205');
INSERT INTO `sekolah` VALUES ('85', 'SMAS MUHAMMADIYAH HAURGEULIS', '20216207');
INSERT INTO `sekolah` VALUES ('86', 'SMAS ISLAM AT-TAQWA KANDANGHAUR', '20216208');
INSERT INTO `sekolah` VALUES ('87', 'SMAS NU SUKRA', '20216210');
INSERT INTO `sekolah` VALUES ('88', 'SMAS DARUL FIKRI BUGIS', '20216211');
INSERT INTO `sekolah` VALUES ('89', 'SMAS YSMP CANDRADIMUKA', '20216212');
INSERT INTO `sekolah` VALUES ('90', 'SLB PELANGI KASIH', '20233748');
INSERT INTO `sekolah` VALUES ('91', 'SMAS BUDHI UTOMO KRANGKENG', '20233749');
INSERT INTO `sekolah` VALUES ('92', 'SMAS LINGGAJATI ARAHAN', '20233750');
INSERT INTO `sekolah` VALUES ('93', 'SMAS MAARIF LOH BENER', '20233751');
INSERT INTO `sekolah` VALUES ('94', 'SMAN 1 LOHBENER', '20233752');
INSERT INTO `sekolah` VALUES ('95', 'SMAS DARUSSALAM KADANGHAUR', '20233753');
INSERT INTO `sekolah` VALUES ('96', 'SMKS BANGUN BANGSA MANDIRI', '20233754');
INSERT INTO `sekolah` VALUES ('97', 'SMKS FARMASI WIDIA UTAMA INDRAMAYU', '20233755');
INSERT INTO `sekolah` VALUES ('98', 'SMKS MUHAMMADIYAH INDRAMAYU', '20233757');
INSERT INTO `sekolah` VALUES ('99', 'SMKN 1 BALONGAN', '20233758');
INSERT INTO `sekolah` VALUES ('100', 'SMKN 1 BONGAS', '20233759');
INSERT INTO `sekolah` VALUES ('101', 'SMKN 1 GANTAR', '20233760');
INSERT INTO `sekolah` VALUES ('102', 'SMKN 1 JATIBARANG', '20233761');
INSERT INTO `sekolah` VALUES ('103', 'SMKS NU HAURGEULIS', '20233763');
INSERT INTO `sekolah` VALUES ('104', 'SMKS PONPES CADANGPINGGAN', '20233764');
INSERT INTO `sekolah` VALUES ('105', 'SMKS FARMASI INDRAMAYU', '20241338');
INSERT INTO `sekolah` VALUES ('106', 'SMKN 1 KRANGKENG', '20241355');
INSERT INTO `sekolah` VALUES ('107', 'SMKS MAARIF LANGUT', '20244212');
INSERT INTO `sekolah` VALUES ('108', 'SMKS PUI HAURGEULIS', '20244757');
INSERT INTO `sekolah` VALUES ('109', 'SMAS BS MIFTAHUL ULUM TERISI', '20246434');
INSERT INTO `sekolah` VALUES ('110', 'SMAS MUHAMMADIYAH SLIYEG', '20246451');
INSERT INTO `sekolah` VALUES ('111', 'SMAS AL MIZAN JATIWANGI', '20247179');
INSERT INTO `sekolah` VALUES ('112', 'SMAS DAARUL AMANAH', '20247180');
INSERT INTO `sekolah` VALUES ('113', 'SMAN 1 SUMBERJAYA', '20247182');
INSERT INTO `sekolah` VALUES ('114', 'SMKS ANALIS KIMIA YPPT MAJALENGKA', '20247183');
INSERT INTO `sekolah` VALUES ('115', 'SMKS MEC MAJALENGKA', '20247184');
INSERT INTO `sekolah` VALUES ('116', 'SMKS PUTERA NUSANTARA MAJALENGKA', '20247185');
INSERT INTO `sekolah` VALUES ('117', 'SMKS MUHAMMADIYAH MAJALENGKA', '20247186');
INSERT INTO `sekolah` VALUES ('118', 'SMKS PELITA NUSANTARA KERTAJATI', '20247187');
INSERT INTO `sekolah` VALUES ('119', 'SMKS PGRI MAJALENGKA', '20247188');
INSERT INTO `sekolah` VALUES ('120', 'SMKS PGRI JATIWANGI', '20247189');
INSERT INTO `sekolah` VALUES ('121', 'SMKS PUI CIKIJING', '20247190');
INSERT INTO `sekolah` VALUES ('122', 'SMKS PUI MAJALENGKA', '20247191');
INSERT INTO `sekolah` VALUES ('123', 'SMKS RISE MAJALENGKA', '20247192');
INSERT INTO `sekolah` VALUES ('124', 'SMK TRI DAYA BUDI MAJALENGKA', '20247193');
INSERT INTO `sekolah` VALUES ('125', 'SMKS WAHANA BAKTI MAJALENGKA', '20247194');
INSERT INTO `sekolah` VALUES ('126', 'SMKS YPIB', '20247195');
INSERT INTO `sekolah` VALUES ('127', 'SMKS YPPT MAJALENGKA', '20247196');
INSERT INTO `sekolah` VALUES ('128', 'SMKN 1 PALASAH', '20247197');
INSERT INTO `sekolah` VALUES ('129', 'SMKN 1 PANYINGKIRAN', '20247198');
INSERT INTO `sekolah` VALUES ('130', 'SLB NEGERI PAHLAWAN KABUPATEN INDRAMAYU', '20251992');
INSERT INTO `sekolah` VALUES ('131', 'SMAS PERJUANGAN DWI WARNA', '20252154');
INSERT INTO `sekolah` VALUES ('132', 'SMAN 1 GANTAR', '20252460');
INSERT INTO `sekolah` VALUES ('133', 'SMKS MUHAMMADIYAH JATIBARANG', '20252980');
INSERT INTO `sekolah` VALUES ('134', 'SMAS NU DUKUHJATI', '20252983');
INSERT INTO `sekolah` VALUES ('135', 'SLB/C GANDASARI JATIBARANG', '20253006');
INSERT INTO `sekolah` VALUES ('136', 'SMKS HASANUDIN KANDANGHAUR', '20253107');
INSERT INTO `sekolah` VALUES ('137', 'SMKS MUHAMMADIYAH SEGERAN JUNTINYUAT', '20253138');
INSERT INTO `sekolah` VALUES ('138', 'SMKS EL HUDA KEDOKANGABUS', '20253309');
INSERT INTO `sekolah` VALUES ('139', 'SMKS CENDEKIA WANASARI', '20253554');
INSERT INTO `sekolah` VALUES ('140', 'SMKS KEBANGSAAN LOSARANG', '20253564');
INSERT INTO `sekolah` VALUES ('141', 'SMKS ISLAM DARUL ISTIQOMAH', '20253571');
INSERT INTO `sekolah` VALUES ('142', 'SMKS NU GABUSWETAN', '20253574');
INSERT INTO `sekolah` VALUES ('143', 'SMKS AL HUDA KEDUNGWUNGU', '20253847');
INSERT INTO `sekolah` VALUES ('144', 'SMKS FATAHILLAH LOHBENER', '20254031');
INSERT INTO `sekolah` VALUES ('145', 'SMKN 1 GABUSWETAN', '20254099');
INSERT INTO `sekolah` VALUES ('146', 'SMKS GLOBAL JATITUJUH', '20254319');
INSERT INTO `sekolah` VALUES ('147', 'SMKN 1 SUKRA', '20255284');
INSERT INTO `sekolah` VALUES ('148', 'SMKS YABUJAH SEGERAN', '20255767');
INSERT INTO `sekolah` VALUES ('149', 'SMKS BINTANG SEMBILAN KEDOKANBUNDER', '20255799');
INSERT INTO `sekolah` VALUES ('150', 'SMKN 1 CIKEDUNG', '20255901');
INSERT INTO `sekolah` VALUES ('151', 'SMKS PLUS AS SALAFIYAH KERANGKENG', '20256281');
INSERT INTO `sekolah` VALUES ('152', 'SMAN 1 SINDANGWANGI', '20258140');
INSERT INTO `sekolah` VALUES ('153', 'SLB TUNAS TEKAD SUMBERJAYA', '20258213');
INSERT INTO `sekolah` VALUES ('154', 'SLB KAMILIA SHANTARI', '20258214');
INSERT INTO `sekolah` VALUES ('155', 'SLB CIREMAI KASIH', '20258232');
INSERT INTO `sekolah` VALUES ('156', 'SMKS KESEHATAN BHAKTI KENCANA JATIWANGI', '20263961');
INSERT INTO `sekolah` VALUES ('157', 'SMKS AR RAHMAT', '20263962');
INSERT INTO `sekolah` VALUES ('158', 'SMKN KEHUTANAN KADIPATEN', '20263963');
INSERT INTO `sekolah` VALUES ('159', 'SMKN 1 KERTAJATI', '20263964');
INSERT INTO `sekolah` VALUES ('160', 'SMKS PANCA WAWASAN NUSANTARA', '20263966');
INSERT INTO `sekolah` VALUES ('161', 'SMKS PERJUANGAN BANGSA LIGUNG', '20263967');
INSERT INTO `sekolah` VALUES ('162', 'SMKN 1 LEMAHSUGIH', '20263968');
INSERT INTO `sekolah` VALUES ('163', 'SMAN 1 JUNTINYUAT', '20264424');
INSERT INTO `sekolah` VALUES ('164', 'SMAN 1 KEDOKANBUNDER', '20264425');
INSERT INTO `sekolah` VALUES ('165', 'SMKS AL WASHLIYAH SUKRA', '20264426');
INSERT INTO `sekolah` VALUES ('166', 'SMKS NU KARANGAMPEL', '20264428');
INSERT INTO `sekolah` VALUES ('167', 'SLB NEGERI 2 INDRAMAYU', '20264429');
INSERT INTO `sekolah` VALUES ('168', 'SMK KARYA NASIONAL SINDANGWANGI', '20268221');
INSERT INTO `sekolah` VALUES ('169', 'SMKS ISLAM ASY SYAFIIYYAH KRANGKENG', '20268569');
INSERT INTO `sekolah` VALUES ('170', 'SMKS DARUL ULUM KERTASEMAYA', '20268572');
INSERT INTO `sekolah` VALUES ('171', 'SMKS ISLAM AL MUAMMILIN', '20268573');
INSERT INTO `sekolah` VALUES ('172', 'SMKS NU KERTASEMAYA', '20268574');
INSERT INTO `sekolah` VALUES ('173', 'SMK NAHDLATUL ULAMA KRANGKENG', '20268575');
INSERT INTO `sekolah` VALUES ('174', 'SMKS AS SAKIENAH BOARDING SCHOOL', '20268852');
INSERT INTO `sekolah` VALUES ('175', 'SMKS NUSANTARA TERISI', '20268853');
INSERT INTO `sekolah` VALUES ('176', 'SMKS BINA PERSADA TERISI', '20269060');
INSERT INTO `sekolah` VALUES ('177', 'SMKS NU KARANGANYAR', '20269454');
INSERT INTO `sekolah` VALUES ('178', 'SMK NU AL BASYARIYAH KEDOKANBUNDER', '20269849');
INSERT INTO `sekolah` VALUES ('179', 'SMKS PEMBANGUNAN TUKDANA', '20270665');
INSERT INTO `sekolah` VALUES ('180', 'SMKN 1 TERISI', '20271070');
INSERT INTO `sekolah` VALUES ('181', 'SMKN 1 WIDASARI', '20271071');
INSERT INTO `sekolah` VALUES ('182', 'SMKS PGRI KARANGAMPEL', '20271073');
INSERT INTO `sekolah` VALUES ('183', 'SMKS SUAKA SINDANG', '20271075');
INSERT INTO `sekolah` VALUES ('184', 'SMKN 1 ARAHAN', '20271076');
INSERT INTO `sekolah` VALUES ('185', 'SMKN 1 PATROL', '20271077');
INSERT INTO `sekolah` VALUES ('186', 'SMK KESEHATAN 1 SUKRA', '20271103');
INSERT INTO `sekolah` VALUES ('187', 'SMKS BINA INSANI', '20271841');
INSERT INTO `sekolah` VALUES ('188', 'SMKS IBS TATHMAINUL QULUUB', '20271883');
INSERT INTO `sekolah` VALUES ('189', 'SMKS YASIKA KASOKANDEL', '20276124');
INSERT INTO `sekolah` VALUES ('190', 'SMKS IBNU SINA RAJAGALUH', '20276125');
INSERT INTO `sekolah` VALUES ('191', 'SMK AL FARIZI BANTARUJEG', '20276126');
INSERT INTO `sekolah` VALUES ('192', 'SMKS AL TAUFIK BANTARUJEG', '20276127');
INSERT INTO `sekolah` VALUES ('193', 'SMKS AL-HIKMAH KARANGAMPEL', '69728102');
INSERT INTO `sekolah` VALUES ('194', 'SMKS AS-SALAAM JATIBARANG', '69734355');
INSERT INTO `sekolah` VALUES ('195', 'SMKS YAPIIM INDRAMAYU', '69754418');
INSERT INTO `sekolah` VALUES ('196', 'SMKS CAKRAWALA', '69754526');
INSERT INTO `sekolah` VALUES ('197', 'SMKS NU SUKRA', '69754527');
INSERT INTO `sekolah` VALUES ('198', 'SMKS NU CIDEMPET', '69754528');
INSERT INTO `sekolah` VALUES ('199', 'SMKS NU RAUDLATUL MUTA`ALLIMIN', '69754532');
INSERT INTO `sekolah` VALUES ('200', 'SMKS SAYID SABIQ INDRAMAYU', '69754533');
INSERT INTO `sekolah` VALUES ('201', 'SMKS MUHAMMADIYAH KARANGAMPEL', '69754534');
INSERT INTO `sekolah` VALUES ('202', 'SMKS AN NUR SUKAGUMIWANG', '69754611');
INSERT INTO `sekolah` VALUES ('203', 'SMKS ATTHAHIRIYAH BANGODUA', '69754612');
INSERT INTO `sekolah` VALUES ('204', 'SMKS PGRI 1 GANTAR', '69754614');
INSERT INTO `sekolah` VALUES ('205', 'SMAS NU TENAJAR KIDUL', '69757511');
INSERT INTO `sekolah` VALUES ('206', 'SMKS NU BONGAS', '69757941');
INSERT INTO `sekolah` VALUES ('207', 'SMKS MIFTAHUL JANNAH LELEA', '69759191');
INSERT INTO `sekolah` VALUES ('208', 'SMK BINA WIRAUSAHA TALAGA', '69764522');
INSERT INTO `sekolah` VALUES ('209', 'SMKS NASIONAL JATIWANGI', '69764523');
INSERT INTO `sekolah` VALUES ('210', 'SMKS PEJUANG NEGERI HAURGEULIS', '69768179');
INSERT INTO `sekolah` VALUES ('211', 'SMKS MUHAMMADIYAH TERISI', '69768180');
INSERT INTO `sekolah` VALUES ('212', 'SMAN 1 BONGAS', '69768187');
INSERT INTO `sekolah` VALUES ('213', 'SMKS AL-TAFAQQUH FIDDIN SINDANGWANGI', '69774540');
INSERT INTO `sekolah` VALUES ('214', 'SMKS DHARMA NEGARA', '69786575');
INSERT INTO `sekolah` VALUES ('215', 'SMKS PEMBAHARUAN GANTAR', '69786578');
INSERT INTO `sekolah` VALUES ('216', 'SMKS YAPIN KERTASEMAYA', '69786581');
INSERT INTO `sekolah` VALUES ('217', 'SMKS RISE SLEMAN', '69786582');
INSERT INTO `sekolah` VALUES ('218', 'SMKS SAUNG BALONG NUSANTARA', '69794862');
INSERT INTO `sekolah` VALUES ('219', 'SMK AL- AMIIN SANGKANHURIP', '69794873');
INSERT INTO `sekolah` VALUES ('220', 'SMKN 1 MALAUSMA', '69812059');
INSERT INTO `sekolah` VALUES ('221', 'SMKS BANGKIT INDONESIA TALAGA', '69816737');
INSERT INTO `sekolah` VALUES ('222', 'SMKS NU SUKAGUMIWANG', '69826571');
INSERT INTO `sekolah` VALUES ('223', 'SMK DARUSSALAM', '69830632');
INSERT INTO `sekolah` VALUES ('224', 'SMK KARANGMANGU', '69831538');
INSERT INTO `sekolah` VALUES ('225', 'SMK NU PEMBANGUNAN BONGAS', '69831539');
INSERT INTO `sekolah` VALUES ('226', 'SMK NU REHOBOT KROYA', '69831540');
INSERT INTO `sekolah` VALUES ('227', 'SMKS NURUL QURAN', '69840995');
INSERT INTO `sekolah` VALUES ('228', 'SMK NAHDLATUL ULAMA LOSARANG', '69849580');
INSERT INTO `sekolah` VALUES ('229', 'SMK NU CIKEDUNG', '69849585');
INSERT INTO `sekolah` VALUES ('230', 'SMK MAARIF SUKASLAMET', '69862818');
INSERT INTO `sekolah` VALUES ('231', 'SMK NU CANTIGI', '69867943');
INSERT INTO `sekolah` VALUES ('232', 'SMK NUSA MANGGA SUCI', '69873706');
INSERT INTO `sekolah` VALUES ('233', 'SMK KARYA BAKTI', '69880227');
INSERT INTO `sekolah` VALUES ('234', 'SMA NU KARANGANYAR', '69880471');
INSERT INTO `sekolah` VALUES ('235', 'SMK AULIYA TELADAN MANDIRI (ATM)', '69883478');
INSERT INTO `sekolah` VALUES ('236', 'SMK NU AMPERA', '69887367');
INSERT INTO `sekolah` VALUES ('237', 'SMK ISLAM TERPADU AL IRSYADY', '69888465');
INSERT INTO `sekolah` VALUES ('238', 'SMK SENI INDRAMAYU', '69888852');
INSERT INTO `sekolah` VALUES ('239', 'SMA NEGERI 1 LELEA', '69888854');
INSERT INTO `sekolah` VALUES ('240', 'SMK NU LEMAH AYU', '69889032');
INSERT INTO `sekolah` VALUES ('241', 'SMA IT NURUL BAROKAH', '69892332');
INSERT INTO `sekolah` VALUES ('242', 'SMK BHAKTI SATRIA BUANA', '69892475');
INSERT INTO `sekolah` VALUES ('243', 'SMK ISLAM DARUL FIKRI', '69892476');
INSERT INTO `sekolah` VALUES ('244', 'SMK MAARIF AL MIZAN', '69893742');
INSERT INTO `sekolah` VALUES ('245', 'SLB ABDUL MUCHYI', '69894293');
INSERT INTO `sekolah` VALUES ('246', 'SMK AL FATIH TERISI', '69894392');
INSERT INTO `sekolah` VALUES ('247', 'SMK INSAN KAMIL', '69894394');
INSERT INTO `sekolah` VALUES ('248', 'SLB MUTIARA HATI', '69896875');
INSERT INTO `sekolah` VALUES ('249', 'SMA NURUL FAJRI', '69900793');
INSERT INTO `sekolah` VALUES ('250', 'SMK DARUL MAARIF', '69906465');
INSERT INTO `sekolah` VALUES ('251', 'SMK PGRI I HAURGEULIS', '69919132');
INSERT INTO `sekolah` VALUES ('252', 'SMK AL WASHLIYAH ANJATAN', '69931775');
INSERT INTO `sekolah` VALUES ('253', 'SMK ASH SHOBUNIYYAH CIKEDUNG', '69931787');
INSERT INTO `sekolah` VALUES ('254', 'SMK ISAS LEUWIMUNDING', '69938154');
INSERT INTO `sekolah` VALUES ('255', 'SMK NUSANTARA AKHFAS', '69939998');
INSERT INTO `sekolah` VALUES ('256', 'SMK SINAR FAJAR CIKIJING', '69940392');
INSERT INTO `sekolah` VALUES ('257', 'SMK NU DARUSSALAM', '69942788');
INSERT INTO `sekolah` VALUES ('258', 'SMKN 1 LEUWIMUNDING', '69944965');
INSERT INTO `sekolah` VALUES ('259', 'SMK AL HIJRAH BONGAS', '69945455');
INSERT INTO `sekolah` VALUES ('260', 'SMK DARUL MUFLIHIN BONGAS', '69945623');
INSERT INTO `sekolah` VALUES ('261', 'SMK AS SAHIDU GABUSWETAN', '69945625');
INSERT INTO `sekolah` VALUES ('262', 'SMK DZUL ZALALI WA IKROM ANJATAN', '69945952');
INSERT INTO `sekolah` VALUES ('263', 'SMK MADINATUL ROSUL LOHBENER', '69945954');
INSERT INTO `sekolah` VALUES ('264', 'SMA BIDYATUL MUBTADIN TUKDANA', '69946173');
INSERT INTO `sekolah` VALUES ('265', 'SMK DARUSHSHOLIHIN KROYA', '69946175');
INSERT INTO `sekolah` VALUES ('266', 'SMK NURUR RAHMAH', '69946817');
INSERT INTO `sekolah` VALUES ('267', 'SMA AL QUDDUSU BANGODUA', '69946819');
INSERT INTO `sekolah` VALUES ('268', 'SMK ISLAM NUSANTARA', '69947079');
INSERT INTO `sekolah` VALUES ('269', 'SMK AL MUSTAQIM CIKEDUNG', '69947092');
INSERT INTO `sekolah` VALUES ('270', 'SMK BENTENG PANCASILA', '69947224');
INSERT INTO `sekolah` VALUES ('271', 'SMK MAARIF ARAHAN', '69947225');
INSERT INTO `sekolah` VALUES ('272', 'SMK NU DARMA AJI', '69947287');
INSERT INTO `sekolah` VALUES ('273', 'SMK IT HIDAYATUL MUJAHIDIN', '69947344');
INSERT INTO `sekolah` VALUES ('274', 'SMK PARIWISATA YAPPMI JATIBARANG', '69948195');
INSERT INTO `sekolah` VALUES ('275', 'SMK AL MUSTHOFA INDRAMAYU', '69948290');
INSERT INTO `sekolah` VALUES ('276', 'SMA NEGERI 1 SUKRA', '69948448');
INSERT INTO `sekolah` VALUES ('277', 'SMK AL HIKMAH ANJATAN', '69948626');
INSERT INTO `sekolah` VALUES ('278', 'SMK NU KELAUTAN KAPLONGAN', '69950622');
INSERT INTO `sekolah` VALUES ('279', 'SMK TARUNA INDRAMAYU', '69952016');
INSERT INTO `sekolah` VALUES ('280', 'SMK RISTEK INDRAMAYU', '69952350');
INSERT INTO `sekolah` VALUES ('281', 'SMK NAILUL KHOIR', '69952604');
INSERT INTO `sekolah` VALUES ('282', 'SMK NU AL QURANIYAH', '69952846');
INSERT INTO `sekolah` VALUES ('283', 'SMK PLUS WARDATUL JANNAH', '69954090');
INSERT INTO `sekolah` VALUES ('284', 'SMK MAARIF AL-GHOZALI', '69954454');
INSERT INTO `sekolah` VALUES ('285', 'SMA NEGERI 1 GABUSWETAN', '69954820');
INSERT INTO `sekolah` VALUES ('286', 'SMK REPUBLIK', '69957088');
INSERT INTO `sekolah` VALUES ('287', 'SMK MIGAS BALONGAN INDRAMAYU', '69957365');
INSERT INTO `sekolah` VALUES ('288', 'SMK AL-ANWARIYYAH', '69959887');
INSERT INTO `sekolah` VALUES ('289', 'SMA AL WAHHAB SUKAGUMIWANG', '69962019');
INSERT INTO `sekolah` VALUES ('290', 'SMA NEGERI 1 CANTIGI', '69962245');
INSERT INTO `sekolah` VALUES ('291', 'SMK KARYA NASIONAL KADIPATEN', '69978566');
INSERT INTO `sekolah` VALUES ('292', 'SMK HAFADATA YUSUF', '69985500');

-- ----------------------------
-- Table structure for `skema`
-- ----------------------------
DROP TABLE IF EXISTS `skema`;
CREATE TABLE `skema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `npsn` int(10) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `hari_kerja` int(10) NOT NULL,
  `masuk` int(11) NOT NULL,
  `pulang` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal_add` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of skema
-- ----------------------------

-- ----------------------------
-- Table structure for `token`
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `tanggal_add` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of token
-- ----------------------------
INSERT INTO `token` VALUES ('5', 'pandureynaldo02@gmail.com', '2neu1fVr3UWwgkqSY0Am4aIMPzocE7OKtRydvBxjlbhJQLD9Cip8FZX5GsN6H', '1647055976');
INSERT INTO `token` VALUES ('6', 'pandureynaldo02@gmail.com', 'LOwubnk3BT5dlSJqHrW6p4Zs2M7fD0gjVzy1KtRPUX8FvYomQcIEAaihxNCeG', '1647055978');
