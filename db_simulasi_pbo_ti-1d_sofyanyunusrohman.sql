/*
 Navicat Premium Dump SQL

 Source Server         : sems2
 Source Server Type    : MySQL
 Source Server Version : 80402 (8.4.2)
 Source Host           : localhost:3306
 Source Schema         : db_simulasi_pbo_ti-1d_sofyanyunusrohman

 Target Server Type    : MySQL
 Target Server Version : 80402 (8.4.2)
 File Encoding         : 65001

 Date: 18/06/2026 13:47:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tabel_pendaftaran
-- ----------------------------
DROP TABLE IF EXISTS `tabel_pendaftaran`;
CREATE TABLE `tabel_pendaftaran`  (
  `id_pendaftaran` int NOT NULL AUTO_INCREMENT,
  `nama_calon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `asal_sekolah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nilai_ujian` decimal(5, 2) NOT NULL,
  `biaya_pendaftaran_dasar` int NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pilihan_prodi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `lokasi_kampus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenis_prestasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tingkat_prestasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `instansi_sponsor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabel_pendaftaran
-- ----------------------------
INSERT INTO `tabel_pendaftaran` VALUES (1, 'Andi Saputra', 'SMA N 1 Jakarta', 85.50, 250000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (2, 'Budi Santoso', 'SMA N 2 Bandung', 78.00, 250000, 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (3, 'Citra Kirana', 'SMA N 3 Semarang', 88.25, 250000, 'Reguler', 'Teknik Informatika', 'Kampus Cabang', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (4, 'Dewi Lestari', 'SMA N 1 Yogyakarta', 82.00, 250000, 'Reguler', 'Manajemen Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (5, 'Eko Prasetyo', 'SMK N 1 Surabaya', 75.50, 250000, 'Reguler', 'Teknik Komputer', 'Kampus Cabang', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (6, 'Fina Amalia', 'SMA N 5 Jakarta', 80.00, 250000, 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (7, 'Gilang Ramadhan', 'SMA N 1 Malang', 84.50, 250000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (8, 'Hana Pertiwi', 'SMA N 2 Bogor', 79.75, 250000, 'Reguler', 'Manajemen Informatika', 'Kampus Cabang', NULL, NULL, NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (9, 'Ihsan Maulana', 'SMA N 1 Surakarta', 92.00, 250000, 'Prestasi', NULL, NULL, 'Juara 1 Olimpiade Komputer', 'Nasional', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (10, 'Jihan Fahira', 'SMA N 3 Medan', 95.50, 250000, 'Prestasi', NULL, NULL, 'Juara 2 Lomba Web Design', 'Provinsi', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (11, 'Kevin Sanjaya', 'SMA N 1 Bali', 90.00, 250000, 'Prestasi', NULL, NULL, 'Juara 1 FLS2N', 'Nasional', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (12, 'Lina Marlina', 'SMA N 2 Makassar', 91.25, 250000, 'Prestasi', NULL, NULL, 'Hafidz Quran 30 Juz', 'Internasional', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (13, 'Muhammad Iqbal', 'SMA N 1 Padang', 89.50, 250000, 'Prestasi', NULL, NULL, 'Juara 3 Debat Bahasa Inggris', 'Nasional', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (14, 'Nadia Saphira', 'SMA N 4 Palembang', 93.00, 250000, 'Prestasi', NULL, NULL, 'Juara 1 Pencak Silat', 'Provinsi', NULL, NULL);
INSERT INTO `tabel_pendaftaran` VALUES (15, 'Oka Antara', 'SMA Taruna Nusantara', 88.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KEMENDAGRI-001', 'Kementerian Dalam Negeri');
INSERT INTO `tabel_pendaftaran` VALUES (16, 'Putri Ayu', 'SMA Krida Nusantara', 87.50, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KEMENKEU-042', 'Kementerian Keuangan');
INSERT INTO `tabel_pendaftaran` VALUES (17, 'Qori Anisa', 'SMA N 1 Depok', 86.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-BPS-112', 'Badan Pusat Statistik');
INSERT INTO `tabel_pendaftaran` VALUES (18, 'Rizky Febian', 'SMA N 2 Tangerang', 85.25, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KEMENHUB-099', 'Kementerian Perhubungan');
INSERT INTO `tabel_pendaftaran` VALUES (19, 'Siti Badriah', 'SMA N 1 Bekasi', 89.00, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-BMKG-077', 'BMKG');
INSERT INTO `tabel_pendaftaran` VALUES (20, 'Tegar Septian', 'SMA N 3 Cirebon', 88.75, 250000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KEMENLU-005', 'Kementerian Luar Negeri');

SET FOREIGN_KEY_CHECKS = 1;
