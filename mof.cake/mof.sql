/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : mof

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-12-07 12:45:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mof_footer
-- ----------------------------
DROP TABLE IF EXISTS `mof_footer`;
CREATE TABLE `mof_footer` (
  `footer_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `footer_title` varchar(30) NOT NULL,
  `footer_img` varchar(255) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mof_footer
-- ----------------------------
INSERT INTO `mof_footer` VALUES ('1', '莫夫教室', 'uploads/20161130/20161130164828327.png');
INSERT INTO `mof_footer` VALUES ('2', '技术', 'uploads/20161201/20161201110410281.gif');

-- ----------------------------
-- Table structure for mof_image
-- ----------------------------
DROP TABLE IF EXISTS `mof_image`;
CREATE TABLE `mof_image` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `imgs` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='莫夫首页轮播图';

-- ----------------------------
-- Records of mof_image
-- ----------------------------
INSERT INTO `mof_image` VALUES ('1', '莫夫', 'uploads/20161130/20161130163909630.jpg', '2016-11-30 16:39:16', '2016-11-30 16:39:16');
INSERT INTO `mof_image` VALUES ('2', '技术', 'uploads/20161201/20161201111600578.gif', '2016-12-01 11:16:01', '2016-12-01 11:16:01');
INSERT INTO `mof_image` VALUES ('3', '莫夫教室', 'uploads/20161207/20161207092832552.png', '2016-12-07 09:28:34', '2016-12-07 09:28:34');

-- ----------------------------
-- Table structure for mof_middle
-- ----------------------------
DROP TABLE IF EXISTS `mof_middle`;
CREATE TABLE `mof_middle` (
  `middle_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `middle_title` varchar(30) NOT NULL,
  `middle_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`middle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mof_middle
-- ----------------------------
INSERT INTO `mof_middle` VALUES ('1', '匠人之心', 'uploads/20161130/20161130165218906.jpg', '2016-11-30 16:52:19', '2016-11-30 16:52:19');

-- ----------------------------
-- Table structure for mof_technology
-- ----------------------------
DROP TABLE IF EXISTS `mof_technology`;
CREATE TABLE `mof_technology` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `describe` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mof_technology
-- ----------------------------
INSERT INTO `mof_technology` VALUES ('1', '莫夫', '莫夫技术', 'uploads/20161130/20161130161638801.jpg', '2016-12-01 17:53:00', '2016-12-01 17:53:00');
INSERT INTO `mof_technology` VALUES ('2', '教室', '魔都', 'uploads/20161130/20161130162709581.png', '2016-11-30 16:27:10', '2016-11-30 16:27:10');
INSERT INTO `mof_technology` VALUES ('5', '5', 'unix', 'uploads/20161204/20161204175953809.png', '2016-12-04 18:02:58', '2016-12-04 18:02:58');

-- ----------------------------
-- Table structure for mof_twelve
-- ----------------------------
DROP TABLE IF EXISTS `mof_twelve`;
CREATE TABLE `mof_twelve` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='莫夫首页12张图';

-- ----------------------------
-- Records of mof_twelve
-- ----------------------------
INSERT INTO `mof_twelve` VALUES ('1', '1', 'www.baidu.com', 'uploads/20161130/20161130163900504.jpg', '2016-11-30 16:39:01', '2016-11-30 16:39:01');
INSERT INTO `mof_twelve` VALUES ('2', '莫夫', 'www.google.com', 'uploads/20161201/20161201125559858.jpg', '2016-12-01 12:56:01', '2016-12-01 12:56:01');

-- ----------------------------
-- Table structure for mof_user
-- ----------------------------
DROP TABLE IF EXISTS `mof_user`;
CREATE TABLE `mof_user` (
  `user_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mof_user
-- ----------------------------
INSERT INTO `mof_user` VALUES ('1', 'admin', 'eyJpdiI6IkZkU0pRdklUY3F2NUhoSlhDQlp2eUE9PSIsInZhbHVlIjoiMWpuM2NhN3pUQ0J5NmxQY2twV01WZz09IiwibWFjIjoiZmYwZWRmN2Y1M2QxZWY4NDAyNjRmNjY1M2E0ZTM2OWYwMDVhNzM4ZjIyYzU5MDIwM2I0ZTI1ZjIzMDQzMGU2NCJ9');
