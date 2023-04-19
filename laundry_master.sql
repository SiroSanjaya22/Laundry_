/*
 Navicat Premium Data Transfer

 Source Server         : Mata
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : laundry_master

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 31/03/2020 19:40:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for detail_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi`  (
  `No_Order` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Id_Pakaian` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jumlah_pakaian` int(11) NOT NULL,
  INDEX `No_Order`(`No_Order`) USING BTREE,
  INDEX `Id_Pakaian`(`Id_Pakaian`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of detail_transaksi
-- ----------------------------
INSERT INTO `detail_transaksi` VALUES ('1', 'C2', 2);

-- ----------------------------
-- Table structure for pakaian
-- ----------------------------
DROP TABLE IF EXISTS `pakaian`;
CREATE TABLE `pakaian`  (
  `Id_Pakaian` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jenis_Pakaian` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Id_Pakaian`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pakaian
-- ----------------------------
INSERT INTO `pakaian` VALUES ('B1', 'Baju Muslim');
INSERT INTO `pakaian` VALUES ('B2', 'Bad Cover');
INSERT INTO `pakaian` VALUES ('B3', 'Boneka');
INSERT INTO `pakaian` VALUES ('C1', 'Celana Dalam');
INSERT INTO `pakaian` VALUES ('C2', 'Celana Panjang');
INSERT INTO `pakaian` VALUES ('C3', 'Celana Pendek');
INSERT INTO `pakaian` VALUES ('D1', 'Daster');
INSERT INTO `pakaian` VALUES ('H1', 'Handuk');
INSERT INTO `pakaian` VALUES ('J1', 'Jaket');
INSERT INTO `pakaian` VALUES ('K1', 'Kaos');
INSERT INTO `pakaian` VALUES ('K2', 'Kaos Dalam');
INSERT INTO `pakaian` VALUES ('K3', 'Kaos Kaki');
INSERT INTO `pakaian` VALUES ('K4', 'Kebaya');
INSERT INTO `pakaian` VALUES ('K5', 'Kemeja');
INSERT INTO `pakaian` VALUES ('M1', 'Mukena');
INSERT INTO `pakaian` VALUES ('R1', 'Rok');
INSERT INTO `pakaian` VALUES ('R2', 'Rompi');
INSERT INTO `pakaian` VALUES ('S1', 'Sarung Bantal');
INSERT INTO `pakaian` VALUES ('S2', 'Sejadah');
INSERT INTO `pakaian` VALUES ('S3', 'Sarung Guling');
INSERT INTO `pakaian` VALUES ('S4', 'Selimut');
INSERT INTO `pakaian` VALUES ('S5', 'Seprei');
INSERT INTO `pakaian` VALUES ('S6', 'Sweater');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `No_Identitas` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `No_Hp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`No_Identitas`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('MD001', 'Maulana', 'Medan', '082282845087');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `groupid` int(11) NULL DEFAULT NULL,
  `status` bit(1) NULL DEFAULT b'0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'official@matadeveloper.com', 'matadeveloper', 'matadeveloper', 1, b'1');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `No_Order` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `No_Identitas` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tgl_Terima` date NULL DEFAULT NULL,
  `Tgl_Ambil` date NULL DEFAULT NULL,
  `total_berat` float NOT NULL,
  `diskon` float NOT NULL,
  `Total_Bayar` int(6) NULL DEFAULT NULL,
  `admin_id` int(8) NOT NULL DEFAULT 1,
  PRIMARY KEY (`No_Order`) USING BTREE,
  INDEX `No_Identitas`(`No_Identitas`) USING BTREE,
  INDEX `No_Identitas_2`(`No_Identitas`) USING BTREE,
  INDEX `No_Identitas_3`(`No_Identitas`) USING BTREE,
  INDEX `admin_id`(`admin_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('1', 'MD001', '2020-03-31', '2020-03-31', 2, 0, 14000, 1);

SET FOREIGN_KEY_CHECKS = 1;
