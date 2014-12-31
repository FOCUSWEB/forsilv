/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : forsilv

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-01-01 02:48:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fsv_admin_user
-- ----------------------------
DROP TABLE IF EXISTS `fsv_admin_user`;
CREATE TABLE `fsv_admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `auth_key` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fsv_admin_user
-- ----------------------------
INSERT INTO `fsv_admin_user` VALUES ('1', 'admin', '$2y$13$o5MakeduYLaMpD/A01CueuZvdMqmevnI.VB6YG/SWqmqh3D5I8Seq', '10', null);

-- ----------------------------
-- Table structure for fsv_news
-- ----------------------------
DROP TABLE IF EXISTS `fsv_news`;
CREATE TABLE `fsv_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fsv_news
-- ----------------------------
