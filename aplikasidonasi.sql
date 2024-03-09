/*
 Navicat Premium Data Transfer

 Source Server         : Darren
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : aplikasidonasi

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 09/03/2024 08:35:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for donasi
-- ----------------------------
DROP TABLE IF EXISTS `donasi`;
CREATE TABLE `donasi`  (
  `id_donasi` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `id_program` int NULL DEFAULT NULL,
  `jumlah_donasi` int NULL DEFAULT NULL,
  `jenis_pembayaran` enum('DANA','GoPay','OVO') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `waktu` time NULL DEFAULT NULL,
  `pesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_donasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donasi
-- ----------------------------
INSERT INTO `donasi` VALUES (1, 2, 1, 150000, 'GoPay', '2024-02-07', '08:33:15', NULL);
INSERT INTO `donasi` VALUES (2, 5, 3, 300000, 'GoPay', '2024-02-15', '04:33:20', NULL);
INSERT INTO `donasi` VALUES (6, 8, 2, 300000, 'GoPay', '2024-02-28', '08:33:31', NULL);
INSERT INTO `donasi` VALUES (7, 9, 3, 20000, 'GoPay', '2024-02-28', '08:33:33', NULL);
INSERT INTO `donasi` VALUES (8, 9, 2, 50000, 'OVO', '2024-02-28', '08:33:35', NULL);
INSERT INTO `donasi` VALUES (9, 5, 8, 30000, 'DANA', '2024-03-01', '08:33:38', NULL);
INSERT INTO `donasi` VALUES (10, 5, 8, 20000, 'GoPay', '2024-03-02', '08:33:40', NULL);
INSERT INTO `donasi` VALUES (11, 5, 8, 20000, 'GoPay', '2024-03-02', '08:33:42', NULL);
INSERT INTO `donasi` VALUES (12, 5, 8, 20000, 'OVO', '2024-03-02', '08:33:44', NULL);
INSERT INTO `donasi` VALUES (13, 8, 8, 50000, 'OVO', '2024-03-02', '08:33:46', 'test');
INSERT INTO `donasi` VALUES (14, 5, 2, 30000, 'OVO', '2024-03-04', '19:34:16', 'test');
INSERT INTO `donasi` VALUES (15, 5, 1, 10000, 'GoPay', '2024-03-04', '08:38:24', 'test');
INSERT INTO `donasi` VALUES (16, 6, 2, 20000, 'GoPay', '2024-03-05', '09:50:10', 'a');
INSERT INTO `donasi` VALUES (17, 8, 2, 1000000, 'GoPay', '2024-03-05', '10:51:56', 'asdf');
INSERT INTO `donasi` VALUES (18, 5, 8, 10000, 'GoPay', '2024-03-05', '11:09:01', 'test4');
INSERT INTO `donasi` VALUES (19, 5, 3, 30000, 'GoPay', '2024-03-05', '14:01:59', 'Pesan');
INSERT INTO `donasi` VALUES (20, 10, 8, 2000000, 'DANA', '2024-03-07', '13:24:02', '123');

-- ----------------------------
-- Table structure for program
-- ----------------------------
DROP TABLE IF EXISTS `program`;
CREATE TABLE `program`  (
  `id_program` int NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_mulai` date NULL DEFAULT NULL,
  `tanggal_selesai` date NULL DEFAULT NULL,
  `target` int NULL DEFAULT NULL,
  `donasi_terkumpul` int NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_program`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of program
-- ----------------------------
INSERT INTO `program` VALUES (1, 'Bantu Korban Bencana Alam', '2024-01-01', '2024-06-01', 40000000, 160000, 'program1.jpg');
INSERT INTO `program` VALUES (2, 'Bantu Anak-Anak Palestina', '2024-01-01', '2029-01-24', 50000000, 1410000, 'program2.jpg');
INSERT INTO `program` VALUES (3, 'Sedekah Makanan Kepada Pemulung', '2024-02-17', '2024-05-16', 30000000, 370000, 'program3.jpg');
INSERT INTO `program` VALUES (8, 'Bantu Pengidap Kanker ', '2024-03-01', '2024-10-16', 40000000, 2150000, '17080546709205.jpeg');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `level` enum('admin','donatur') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'darren', '12', 'admin', '1709602380_11c1d25e65632a514c44.jpg', 'admin@gmail.com', '098765432');
INSERT INTO `user` VALUES (2, 'yogi', '123', 'donatur', NULL, NULL, NULL);
INSERT INTO `user` VALUES (5, 'user1', 'darren', 'donatur', '1709351000_9959cb351abb33b9f17b.jpeg', 'user1@gmail.com', '089522747300');
INSERT INTO `user` VALUES (6, 'user2', '1', 'donatur', '1709606886_346456b310b1dc1161cc.png', 'sumanto@gmail.com', '123');
INSERT INTO `user` VALUES (7, 'testing', 'testing', 'admin', NULL, NULL, NULL);
INSERT INTO `user` VALUES (8, 'Leonardo', 'leo', 'donatur', '1709602260_9747b0503d8df9067f87.jpeg', 'leonar@gmail.com', '08696969699');
INSERT INTO `user` VALUES (9, 'Van Darren', '1', 'donatur', NULL, NULL, NULL);
INSERT INTO `user` VALUES (10, 'Aldi', 'Taher', 'donatur', '1709792610_214bd55d75c718b0536b.jpeg', 'Aldi@gmail.com', '1742123213123');

-- ----------------------------
-- Triggers structure for table donasi
-- ----------------------------
DROP TRIGGER IF EXISTS `donasi`;
delimiter ;;
CREATE TRIGGER `donasi` AFTER INSERT ON `donasi` FOR EACH ROW UPDATE program set donasi_terkumpul = donasi_terkumpul+new.jumlah_donasi
where id_program=new.id_program
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table donasi
-- ----------------------------
DROP TRIGGER IF EXISTS `bataldonasi`;
delimiter ;;
CREATE TRIGGER `bataldonasi` AFTER DELETE ON `donasi` FOR EACH ROW UPDATE program set donasi_terkumpul= donasi_terkumpul-old.jumlah_donasi
where id_program=old.id_program
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
