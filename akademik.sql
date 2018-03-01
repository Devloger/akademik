/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : akademik

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-06 16:10:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `alerts`
-- ----------------------------
DROP TABLE IF EXISTS `alerts`;
CREATE TABLE `alerts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `student_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alerts_student_id_index` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of alerts
-- ----------------------------
INSERT INTO `alerts` VALUES ('1', 'Coś się spaliło w pokoju', '2', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null, '3');
INSERT INTO `alerts` VALUES ('2', 'Coś się spaliło w pokoju', '9', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '13');
INSERT INTO `alerts` VALUES ('3', 'Problem z drzwiami', '11', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '15');
INSERT INTO `alerts` VALUES ('4', 'Mikrofalówka nie działa', '14', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null, '19');
INSERT INTO `alerts` VALUES ('5', 'Coś z sufitem jest nie tak', '15', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null, '23');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_10_23_195801_create_students_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_10_25_100550_create_rooms_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_10_25_100621_create_payments_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_10_25_100630_create_alerts_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_10_25_100845_create_room_students_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_10_26_163838_add_soft_deletes_to_students_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_10_28_180122_add_student_id_column_to_an_alert_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_10_29_203905_add_column_data_kaucji_for_room_student', '1');
INSERT INTO `migrations` VALUES ('11', '2017_10_30_105116_add_soft_deletes_to_rooms_table', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `payments`
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_student_id` int(10) unsigned NOT NULL,
  `value` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of payments
-- ----------------------------
INSERT INTO `payments` VALUES ('1', '1', '322', '2018-01-06 15:10:35', '2018-01-06 15:10:35');
INSERT INTO `payments` VALUES ('2', '2', '388', '2018-01-06 15:10:35', '2018-01-06 15:10:35');
INSERT INTO `payments` VALUES ('3', '3', '388', '2018-01-06 15:10:36', '2018-01-06 15:10:36');
INSERT INTO `payments` VALUES ('4', '4', '397', '2018-01-06 15:10:36', '2018-01-06 15:10:36');
INSERT INTO `payments` VALUES ('5', '5', '506', '2018-01-06 15:10:36', '2018-01-06 15:10:36');
INSERT INTO `payments` VALUES ('6', '6', '506', '2018-01-06 15:10:36', '2018-01-06 15:10:36');
INSERT INTO `payments` VALUES ('7', '7', '395', '2018-01-06 15:10:37', '2018-01-06 15:10:37');
INSERT INTO `payments` VALUES ('8', '8', '395', '2018-01-06 15:10:37', '2018-01-06 15:10:37');
INSERT INTO `payments` VALUES ('9', '9', '362', '2018-01-06 15:10:37', '2018-01-06 15:10:37');
INSERT INTO `payments` VALUES ('10', '10', '476', '2018-01-06 15:10:37', '2018-01-06 15:10:37');
INSERT INTO `payments` VALUES ('11', '11', '476', '2018-01-06 15:10:37', '2018-01-06 15:10:37');
INSERT INTO `payments` VALUES ('12', '12', '339', '2018-01-06 15:10:38', '2018-01-06 15:10:38');
INSERT INTO `payments` VALUES ('13', '13', '462', '2018-01-06 15:10:38', '2018-01-06 15:10:38');
INSERT INTO `payments` VALUES ('14', '14', '510', '2018-01-06 15:10:38', '2018-01-06 15:10:38');
INSERT INTO `payments` VALUES ('15', '15', '470', '2018-01-06 15:10:38', '2018-01-06 15:10:38');
INSERT INTO `payments` VALUES ('16', '16', '464', '2018-01-06 15:10:39', '2018-01-06 15:10:39');
INSERT INTO `payments` VALUES ('17', '17', '550', '2018-01-06 15:10:39', '2018-01-06 15:10:39');
INSERT INTO `payments` VALUES ('18', '18', '550', '2018-01-06 15:10:39', '2018-01-06 15:10:39');
INSERT INTO `payments` VALUES ('19', '19', '328', '2018-01-06 15:10:39', '2018-01-06 15:10:39');
INSERT INTO `payments` VALUES ('20', '20', '328', '2018-01-06 15:10:40', '2018-01-06 15:10:40');
INSERT INTO `payments` VALUES ('21', '21', '328', '2018-01-06 15:10:40', '2018-01-06 15:10:40');
INSERT INTO `payments` VALUES ('22', '22', '405', '2018-01-06 15:10:40', '2018-01-06 15:10:40');
INSERT INTO `payments` VALUES ('23', '23', '405', '2018-01-06 15:10:40', '2018-01-06 15:10:40');

-- ----------------------------
-- Table structure for `rooms`
-- ----------------------------
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `count` tinyint(3) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rooms
-- ----------------------------
INSERT INTO `rooms` VALUES ('1', '1', '322', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('2', '2', '388', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('3', '3', '397', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('4', '2', '506', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('5', '3', '395', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('6', '1', '362', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('7', '2', '476', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('8', '2', '339', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('9', '3', '462', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('10', '1', '510', '2018-01-06 15:10:34', '2018-01-06 15:10:34', null);
INSERT INTO `rooms` VALUES ('11', '1', '470', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `rooms` VALUES ('12', '2', '464', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `rooms` VALUES ('13', '3', '550', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `rooms` VALUES ('14', '3', '328', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `rooms` VALUES ('15', '2', '405', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);

-- ----------------------------
-- Table structure for `room_students`
-- ----------------------------
DROP TABLE IF EXISTS `room_students`;
CREATE TABLE `room_students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `kaucja` tinyint(1) NOT NULL DEFAULT '0',
  `from` date NOT NULL,
  `to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `kaucja_data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of room_students
-- ----------------------------
INSERT INTO `room_students` VALUES ('1', '1', '1', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('2', '2', '2', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('3', '3', '2', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('4', '4', '3', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('5', '5', '4', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('6', '6', '4', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('7', '7', '5', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('8', '8', '5', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('9', '9', '6', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('10', '10', '7', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('11', '11', '7', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('12', '12', '8', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('13', '13', '9', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('14', '14', '10', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('15', '15', '11', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('16', '16', '12', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('17', '17', '13', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('18', '18', '13', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('19', '19', '14', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('20', '20', '14', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('21', '21', '14', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('22', '22', '15', '0', '2018-01-06', '2018-04-06', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null, '2018-01-06');
INSERT INTO `room_students` VALUES ('23', '23', '15', '1', '2018-01-06', '2018-04-06', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null, '2018-01-06');

-- ----------------------------
-- Table structure for `students`
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `album` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_pesel_unique` (`pesel`),
  UNIQUE KEY `students_album_unique` (`album`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('1', 'Maja', 'Stępień', '98070174600', '1980-04-09', '58356', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `students` VALUES ('2', 'Alan', 'Mróz', '50021975180', '1968-04-21', '17304', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `students` VALUES ('3', 'Liliana', 'Sikora', '84053117177', '1982-11-19', '28779', '2018-01-06 15:10:35', '2018-01-06 15:10:35', null);
INSERT INTO `students` VALUES ('4', 'Kajetan', 'Kowalczyk', '80040982760', '1962-05-24', '10829', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null);
INSERT INTO `students` VALUES ('5', 'Miłosz', 'Kalinowska', '18030124555', '1980-11-15', '73367', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null);
INSERT INTO `students` VALUES ('6', 'Błażej', 'Wysocka', '38011776290', '1955-02-13', '21389', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null);
INSERT INTO `students` VALUES ('7', 'Adrian', 'Nowicka', '95010883581', '1939-05-11', '45149', '2018-01-06 15:10:36', '2018-01-06 15:10:36', null);
INSERT INTO `students` VALUES ('8', 'Gustaw', 'Gajewska', '36090415004', '1922-06-23', '51504', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null);
INSERT INTO `students` VALUES ('9', 'Blanka', 'Adamczyk', '41112748226', '1953-04-08', '61251', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null);
INSERT INTO `students` VALUES ('10', 'Jakub', 'Adamski', '80020648716', '1942-09-02', '84820', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null);
INSERT INTO `students` VALUES ('11', 'Norbert', 'Krawczyk', '79051254539', '1956-11-10', '25386', '2018-01-06 15:10:37', '2018-01-06 15:10:37', null);
INSERT INTO `students` VALUES ('12', 'Robert', 'Kaczmarek', '41041056038', '1965-08-15', '69573', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null);
INSERT INTO `students` VALUES ('13', 'Adrian', 'Bąk', '19091309451', '1918-05-25', '66503', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null);
INSERT INTO `students` VALUES ('14', 'Stanisław', 'Wiśniewska', '24013029856', '1938-03-23', '48332', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null);
INSERT INTO `students` VALUES ('15', 'Maurycy', 'Woźniak', '85091822627', '1926-11-01', '89536', '2018-01-06 15:10:38', '2018-01-06 15:10:38', null);
INSERT INTO `students` VALUES ('16', 'Antoni', 'Andrzejewski', '88091400158', '1967-12-07', '84934', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null);
INSERT INTO `students` VALUES ('17', 'Dawid', 'Kalinowska', '29090387781', '1951-01-02', '49619', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null);
INSERT INTO `students` VALUES ('18', 'Paweł', 'Wójcik', '48111508824', '1963-06-26', '18702', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null);
INSERT INTO `students` VALUES ('19', 'Fabian', 'Andrzejewski', '63050285485', '1945-11-16', '28002', '2018-01-06 15:10:39', '2018-01-06 15:10:39', null);
INSERT INTO `students` VALUES ('20', 'Michał', 'Urbańska', '36050442082', '1993-10-04', '87333', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null);
INSERT INTO `students` VALUES ('21', 'Patryk', 'Michalska', '97102303388', '1974-04-18', '55475', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null);
INSERT INTO `students` VALUES ('22', 'Iwo', 'Dąbrowski', '17230202430', '1961-11-18', '70209', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null);
INSERT INTO `students` VALUES ('23', 'Jacek', 'Kaczmarczyk', '74082415935', '1945-12-14', '82870', '2018-01-06 15:10:40', '2018-01-06 15:10:40', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Krystian Bogucki', 'krystian1@wp.pl', '$2a$04$X94RZ1tzPZjl5X/S42lNIuY19ae.cM.JQ6vcytxjd1pvb1esxAfwC', 'TA2DBfkd9F', '2018-01-06 15:10:34', '2018-01-06 15:10:34');
