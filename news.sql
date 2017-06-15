/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-15 16:06:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `submitTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'ewrger', '2133123123');
INSERT INTO `news` VALUES ('2', 'ryjrty', '42353253');
INSERT INTO `news` VALUES ('3', 'grgregwer', '34324');
INSERT INTO `news` VALUES ('4', 'gertergre', '2342422');
INSERT INTO `news` VALUES ('6', 'gferb', '3425345');
INSERT INTO `news` VALUES ('8', 'gefdg', '3453453');
