/*
Navicat MySQL Data Transfer

Source Server         : 10.99.19.126
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : v

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2017-11-07 16:21:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `v_comment`
-- ----------------------------
DROP TABLE IF EXISTS `v_comment`;
CREATE TABLE `v_comment` (
  `com_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `vid` bigint(20) NOT NULL,
  `com_content` varchar(200) DEFAULT NULL,
  `com_time` varchar(20) NOT NULL,
  `sid` bigint(20) NOT NULL,
  `com_status` int(2) NOT NULL,
  `com_pid` int(20) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_comment
-- ----------------------------
INSERT INTO `v_comment` VALUES ('1', '1', '问的人分手的', '', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('4', '1', 'gsfdfh', '', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('5', '1', 'jrejy', '', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('6', '1', 'erhbgfb', '', '35', '0', '1');
INSERT INTO `v_comment` VALUES ('7', '1', 'ngfbn', '', '36', '0', '1');
INSERT INTO `v_comment` VALUES ('8', '1', 'vbfng', '', '37', '0', '0');
INSERT INTO `v_comment` VALUES ('9', '1', 'rttgrhh', '', '38', '0', '0');
INSERT INTO `v_comment` VALUES ('10', '1', null, '', '40', '0', '0');
INSERT INTO `v_comment` VALUES ('11', '1', null, '', '39', '0', '0');
INSERT INTO `v_comment` VALUES ('12', '0', '哈哈哈哈哈哈哈哈哈哈哈哈哈', '1509036166', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('13', '0', '哈哈哈哈哈哈哈哈哈哈哈哈哈', '1509036382', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('14', '1', '哈哈哈哈哈哈哈哈哈哈哈', '1509064878', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('15', '1', '哈哈哈哈哈哈哈哈哈哈哈', '1509064983', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('16', '0', '阿斯蒂芬噶是的弗格森的风格', '1509081163', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('17', '2', '色胆如天瓦尔特', '1509081255', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('18', '0', '萨达大飞哥', '1509084705', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('19', '0', '发电公司发根深蒂固', '1509084781', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('20', '1', '官方好地方', '1509084946', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('21', '1', '贼66', '1509279449', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('22', '7', '可以', '1509279486', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('23', '7', '评论成功', '1509341938', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('24', '11', '666', '1509346744', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('25', '11', '11111', '1509361576', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('26', '11', 'asd', '1509362016', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('27', '12', '666\r\n', '1509775052', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('28', '12', '去去去', '1509879510', '1', '0', '0');
INSERT INTO `v_comment` VALUES ('29', '15', 'sadf', '1509894540', '1', '1', '0');
INSERT INTO `v_comment` VALUES ('30', '14', '123', '1509897679', '1', '1', '0');
INSERT INTO `v_comment` VALUES ('31', '15', '@123   123123', '1509957700', '2', '0', '0');

-- ----------------------------
-- Table structure for `v_config`
-- ----------------------------
DROP TABLE IF EXISTS `v_config`;
CREATE TABLE `v_config` (
  `conf_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `conf_name` varchar(20) NOT NULL,
  `conf_value` varchar(50) NOT NULL,
  `conf_sort` varchar(50) NOT NULL,
  `conf_logo` char(50) NOT NULL,
  `conf_pid` bigint(10) NOT NULL,
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_config
-- ----------------------------
INSERT INTO `v_config` VALUES ('4', '大连名族大学视频网站', '大连名族大学视频网站', '大连名族大学视频网站', '', '1');
INSERT INTO `v_config` VALUES ('5', '大连名族大学视频网站', '大连名族大学视频网站', '大连名族大学视频网站', '', '0');
INSERT INTO `v_config` VALUES ('8', '234234', '213421432', '12342134', '', '0');
INSERT INTO `v_config` VALUES ('9', '123', '123123123', '123123', '', '0');

-- ----------------------------
-- Table structure for `v_log`
-- ----------------------------
DROP TABLE IF EXISTS `v_log`;
CREATE TABLE `v_log` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `log_time` varchar(20) NOT NULL,
  `log_where` varchar(20) DEFAULT NULL,
  `log_who` varchar(20) DEFAULT NULL,
  `log_what` varchar(20) DEFAULT NULL,
  `log_how` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_log
-- ----------------------------
INSERT INTO `v_log` VALUES ('1', '1503579712', null, null, null, null);
INSERT INTO `v_log` VALUES ('2', '1504769438', null, null, null, null);
INSERT INTO `v_log` VALUES ('3', '1504775111', '/v1/index.php/admin/', 'admin', 'login from 0.0.0.0', '用户登录成功');
INSERT INTO `v_log` VALUES ('4', '1504855510', '/v1/index.php/admin/', 'admin', 'select from 0.0.0.0', '查询成功');
INSERT INTO `v_log` VALUES ('5', '1504861100', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('6', '1504861494', '/v1/index.php/admin/', 'admin', 'select from 0.0.0.0', '查询成功');
INSERT INTO `v_log` VALUES ('7', '1504864759', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('8', '1504864860', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('9', '1504864975', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('10', '1504865313', '/v1/index.php/admin/', 'admin', 'select from 0.0.0.0', '查询成功');
INSERT INTO `v_log` VALUES ('11', '1504865330', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('12', '1504865512', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('13', '1504866052', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('14', '1504866129', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('15', '1504866721', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('16', '1504868321', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('17', '1504869620', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('18', '1504938733', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('19', '1504938823', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('20', '1504938839', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('21', '1504938893', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('22', '1504938919', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('23', '1504940401', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('24', '1504941067', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('25', '1504941154', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('26', '1504941502', '/v1/index.php/admin/', 'admin', 'update from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('27', '1504941592', '/v1/index.php/admin/', 'admin', 'update from 0.0.0.0', '用户修改成功');
INSERT INTO `v_log` VALUES ('28', '1504941609', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('29', '1504941617', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('30', '1504958645', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('31', '1504959166', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('32', '1504959461', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('33', '1504959673', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('34', '1504959825', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('35', '1505276739', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('36', '1505279614', '/v1/index.php/admin/', 'admin', 'select from 0.0.0.0', '查询成功');
INSERT INTO `v_log` VALUES ('37', '1505280562', '/v1/index.php/admin/', 'admin', 'delete from 0.0.0.0', '删除成功');
INSERT INTO `v_log` VALUES ('38', '1508061443', '/v1/index.php/admin/', 'admin', 'login from 0.0.0.0', '用户登录成功');
INSERT INTO `v_log` VALUES ('39', '1508136886', '/v1/index.php/admin/', 'admin', 'login from 0.0.0.0', '用户登录成功');
INSERT INTO `v_log` VALUES ('40', '1508136919', '/v1/index.php/admin/', 'admin', 'insert from 0.0.0.0', '用户添加成功');
INSERT INTO `v_log` VALUES ('41', '1508154321', '/index.php/admin/pub', 'admin', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('42', '1508163274', '/index.php/admin/pub', 'admin', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('43', '1508168809', '/index.php/admin/pub', 'admin', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('44', '1508169965', '/index.php/admin/pub', 'admin', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('45', '1508170054', '/index.php/admin/sys', 'admin', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('46', '1508170128', '/index.php/admin/sys', 'admin', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('47', '1508200822', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('48', '1508202751', '/index.php/admin/pub', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('49', '1508202781', '/index.php/admin/pub', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('50', '1508215862', '/v1/index.php/admin/', '1', 'login from 0.0.0.0', '用户登录成功');
INSERT INTO `v_log` VALUES ('51', '1508218214', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('52', '1508233598', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('53', '1508237627', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('54', '1508240675', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('55', '1508240704', '/index.php/admin/sys', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('56', '1508243703', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('57', '1508243782', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('58', '1508243876', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('59', '1508302317', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('60', '1508308372', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('61', '1508310475', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('62', '1508310585', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('63', '1508311112', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('64', '1508311605', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('65', '1508311849', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('66', '1508320201', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('67', '1508320233', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('68', '1508320414', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('69', '1508320488', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('70', '1508320530', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('71', '1508320559', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('72', '1508320612', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('73', '1508320634', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('74', '1508320657', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('75', '1508320684', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('76', '1508323640', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('77', '1508323684', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('78', '1508338906', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('79', '1508399454', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('80', '1508399665', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('81', '1508401337', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('82', '1508402133', '/index.php/admin/oth', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('83', '1508402144', '/index.php/admin/oth', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('84', '1508418741', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('85', '1508465823', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('86', '1508465847', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('87', '1508466107', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('88', '1508472707', '/index.php/admin/tea', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('89', '1508477315', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('90', '1508482862', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('91', '1508740738', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('92', '1508841573', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('93', '1508843109', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('94', '1508908257', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('95', '1508913675', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('96', '1508976728', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('97', '1508980661', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('98', '1509014275', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('99', '1509062568', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('100', '1509157710', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('101', '1509158309', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('102', '1509173851', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('103', '1509204366', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('104', '1509204421', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('105', '1509204536', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('106', '1509204782', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('107', '1509205069', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('108', '1509205290', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('109', '1509205524', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('110', '1509206295', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('111', '1509232917', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('112', '1509242891', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('113', '1509244429', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('114', '1509244435', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('115', '1509244442', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('116', '1509244447', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('117', '1509244453', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('118', '1509244460', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('119', '1509244465', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('120', '1509244470', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('121', '1509342105', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('122', '1509343105', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('123', '1509343190', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('124', '1509343306', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('125', '1509343705', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('126', '1509352314', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('127', '1509365397', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('128', '1509627914', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('129', '1509628660', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('130', '1509628856', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('131', '1509628946', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('132', '1509630347', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('133', '1509709215', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('134', '1509762165', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('135', '1509764073', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('136', '1509781088', '/index.php/admin/pub', 'asd', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('137', '1509781352', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('138', '1509844960', '/index.php/admin/pub', '1', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('139', '1509870249', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('140', '1509870269', '/index.php/admin/sys', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('141', '1509871078', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('142', '1509878802', '/index.php/admin/sys', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('143', '1509878825', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('144', '1509878897', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('145', '1509879001', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('146', '1509879074', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加失败');
INSERT INTO `v_log` VALUES ('147', '1509879127', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('148', '1509879651', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加失败');
INSERT INTO `v_log` VALUES ('149', '1509879679', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('150', '1509886559', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('151', '1509886590', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('152', '1509886670', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('153', '1509887463', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('154', '1509887871', '/index.php/Admin/Sys', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('155', '1509887906', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('156', '1509887925', '/index.php/admin/sys', '1', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('157', '1509888036', '/index.php/admin/sys', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('158', '1509888205', '/index.php/admin/sys', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('159', '1509888308', '/index.php/admin/sys', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('160', '1509888539', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('161', '1509888550', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('162', '1509888582', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('163', '1509888624', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('164', '1509888806', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('165', '1509888834', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('166', '1509888864', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('167', '1509888901', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('168', '1509888909', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('169', '1509888937', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('170', '1509889878', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('171', '1509890136', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('172', '1509890149', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('173', '1509890201', '/index.php/admin/adm', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('174', '1509890315', '/index.php/admin/adm', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('175', '1509890802', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('176', '1509891528', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('177', '1509893768', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('178', '1509893785', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('179', '1509893886', '/index.php/admin/adm', '1', 'delete from 127.0.0.', '删除成功');
INSERT INTO `v_log` VALUES ('180', '1509894266', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('181', '1509894440', '/index.php/admin/tea', '1', 'insert from 127.0.0.', '用户添加成功');
INSERT INTO `v_log` VALUES ('182', '1509895101', '/index.php/admin/tea', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('183', '1509895715', '/index.php/admin/tea', '1', 'update from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('184', '1509946729', '/index.php/admin/pub', '褚治广', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('185', '1509948755', '/index.php/admin/pub', '褚治广', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('186', '1509948826', '/index.php/admin/pub', 'asd', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('187', '1509948890', '/index.php/admin/pub', 'asd', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('188', '1509951966', '/index.php/admin/pub', '褚治广', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('189', '1509952158', '/index.php/admin/pub', '褚治广', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('190', '1509959052', '/index.php/admin/pub', '褚治广', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('191', '1509959400', '/index.php/admin/pub', '褚治广', 'login from 10.99.19.', '用户登录成功');
INSERT INTO `v_log` VALUES ('192', '1509959639', '/index.php/admin/pub', '褚治广', 'login from 10.99.19.', '用户登录成功');
INSERT INTO `v_log` VALUES ('193', '1509959904', '/index.php/admin/sys', '褚治广', 'insert from 10.99.19', '用户修改成功');
INSERT INTO `v_log` VALUES ('194', '1509959985', '/index.php/admin/sys', '褚治广', 'update from 10.99.19', '用户修改成功');
INSERT INTO `v_log` VALUES ('195', '1509960006', '/index.php/admin/tea', '褚治广', 'update from 10.99.19', '用户修改成功');
INSERT INTO `v_log` VALUES ('196', '1509960057', '/index.php/admin/pub', '223', 'login from 10.99.19.', '用户登录成功');
INSERT INTO `v_log` VALUES ('197', '1509960059', '/index.php/admin/pub', '223', 'login from 10.99.19.', '用户登录成功');
INSERT INTO `v_log` VALUES ('198', '1509960135', '/index.php/admin/sys', '褚治广', 'delete from 10.99.19', '删除成功');
INSERT INTO `v_log` VALUES ('199', '1509960136', '/index.php/admin/pub', '223', 'login from 10.99.19.', '用户登录成功');
INSERT INTO `v_log` VALUES ('200', '1509960169', '/index.php/admin/adm', '褚治广', 'delete from 10.99.19', '删除成功');
INSERT INTO `v_log` VALUES ('201', '1509960185', '/index.php/admin/adm', '褚治广', 'update from 10.99.19', '用户修改成功');
INSERT INTO `v_log` VALUES ('202', '1509960287', '/index.php/admin/adm', '褚治广', 'delete from 10.99.19', '删除成功');
INSERT INTO `v_log` VALUES ('203', '1509962091', '/index.php/admin/sys', '褚治广', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('204', '1509971928', '/index.php/admin/sys', '褚治广', 'insert from 127.0.0.', '用户修改成功');
INSERT INTO `v_log` VALUES ('205', '1509971993', '/index.php/admin/pub', '223', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('206', '1509972330', '/index.php/admin/pub', '223', 'login from 127.0.0.1', '用户登录成功');
INSERT INTO `v_log` VALUES ('207', '1509972430', '/index.php/admin/pub', '223', 'login from 127.0.0.1', '用户登录成功');

-- ----------------------------
-- Table structure for `v_slide`
-- ----------------------------
DROP TABLE IF EXISTS `v_slide`;
CREATE TABLE `v_slide` (
  `slide_id` int(255) NOT NULL AUTO_INCREMENT,
  `slide_pic` varchar(255) DEFAULT NULL,
  `slide_video` varchar(255) DEFAULT NULL,
  `slide_time` varchar(255) NOT NULL,
  `types` int(2) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_slide
-- ----------------------------
INSERT INTO `v_slide` VALUES ('1', '[\"14\",\"9\",\"8\"]', null, '1508919312', '1');
INSERT INTO `v_slide` VALUES ('2', '[\"14\",\"13\",\"12\",\"9\",\"8\"]', null, '1508920180', '1');
INSERT INTO `v_slide` VALUES ('3', '[\"14\",\"13\",\"12\",\"9\",\"8\"]', '[\"13\",\"12\",\"9\",\"8\"]', '1509000885', '1');
INSERT INTO `v_slide` VALUES ('4', null, '[\"32\"]', '1509244265', '1');
INSERT INTO `v_slide` VALUES ('5', null, '[\"9\",\"8\"]', '1509244297', '1');
INSERT INTO `v_slide` VALUES ('6', '[\"14\",\"13\",\"12\",\"9\",\"8\"]', '[\"32\",\"14\",\"13\",\"9\"]', '1509244581', '1');
INSERT INTO `v_slide` VALUES ('7', null, '[\"35\",\"34\",\"32\",\"14\",\"13\",\"9\"]', '1509343334', '1');
INSERT INTO `v_slide` VALUES ('8', '[\"14\",\"13\",\"12\",\"9\",\"8\"]', '[\"35\",\"34\",\"32\",\"14\",\"9\"]', '1509343505', '1');
INSERT INTO `v_slide` VALUES ('9', '[\"11\",\"10\",\"9\",\"8\",\"7\"]', '[\"36\",\"32\",\"14\",\"13\",\"12\"]', '1509344469', '1');
INSERT INTO `v_slide` VALUES ('10', null, '[\"36\",\"32\",\"14\",\"13\",\"12\"]', '1509774138', '1');
INSERT INTO `v_slide` VALUES ('11', null, '[\"37\",\"36\",\"32\",\"14\",\"13\"]', '1509774546', '1');
INSERT INTO `v_slide` VALUES ('12', '[\"12\",\"12\",\"11\",\"7\",\"1\"]', '[\"37\",\"37\",\"36\",\"32\",\"14\"]', '1509774851', '1');
INSERT INTO `v_slide` VALUES ('13', null, '[\"37\",\"37\",\"37\",\"36\",\"32\"]', '1509878926', '1');
INSERT INTO `v_slide` VALUES ('14', null, '[\"39\",\"37\",\"37\",\"37\",\"36\"]', '1509890266', '0');
INSERT INTO `v_slide` VALUES ('15', null, '[\"44\",\"39\",\"37\",\"37\",\"37\"]', '1509894290', '0');
INSERT INTO `v_slide` VALUES ('16', null, '[\"45\",\"44\",\"39\",\"37\",\"37\"]', '1509894510', '2');

-- ----------------------------
-- Table structure for `v_sort`
-- ----------------------------
DROP TABLE IF EXISTS `v_sort`;
CREATE TABLE `v_sort` (
  `sort_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sort_name` varchar(20) NOT NULL,
  `tid` int(11) NOT NULL,
  `sort_intro` varchar(200) NOT NULL,
  `sort_img` longtext NOT NULL,
  `sort_pid` bigint(20) NOT NULL,
  PRIMARY KEY (`sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_sort
-- ----------------------------
INSERT INTO `v_sort` VALUES ('1', '123', '0', '嗯嗯嗯', '', '0');
INSERT INTO `v_sort` VALUES ('2', '高数', '0', '哈哈哈', '', '0');
INSERT INTO `v_sort` VALUES ('4', '123', '0', '123', '', '0');
INSERT INTO `v_sort` VALUES ('9', '分隔符电视广告', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '2');
INSERT INTO `v_sort` VALUES ('6', '22', '0', '123123123123', '', '0');
INSERT INTO `v_sort` VALUES ('13', '哈哈哈', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '3');
INSERT INTO `v_sort` VALUES ('8', '哈哈哈哈哈哈', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '2');
INSERT INTO `v_sort` VALUES ('12', '12', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '3');
INSERT INTO `v_sort` VALUES ('14', '沙发斯蒂芬', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '2');
INSERT INTO `v_sort` VALUES ('44', '321312312', '0', '', '/Upload/upload_p2017-11-05/59ff2879b11e1.jpg', '43');
INSERT INTO `v_sort` VALUES ('34', '测试使用', '0', '', '/Upload/upload_p2017-10-30/59f6bfd526725.jpg', '2');
INSERT INTO `v_sort` VALUES ('35', '测试使用', '0', '', '/Upload/upload_p2017-10-30/59f6c049744e2.jpg', '2');
INSERT INTO `v_sort` VALUES ('36', '12321341234人', '0', '', '/Upload/upload_p2017-10-30/59f6c1d8c1f66.jpg', '2');
INSERT INTO `v_sort` VALUES ('37', '777', '0', '', '/Upload/upload_p2017-11-04/59fd2be7efdf2.jpg', '2');
INSERT INTO `v_sort` VALUES ('39', '1', '0', '', '/Upload/upload_p2017-11-05/59feed568f66b.jpg', '2');
INSERT INTO `v_sort` VALUES ('42', '生物', '0', '撒旦法撒打发斯蒂芬', '/Upload/upload_p2017-11-05/59ff1755c4a2f.jpg', '0');
INSERT INTO `v_sort` VALUES ('43', '测试', '0', '张纯', '2', '0');
INSERT INTO `v_sort` VALUES ('45', '方法', '0', '方法', '/Upload/upload_p2017-11-05/59ff2927b01d4.jpg', '2');
INSERT INTO `v_sort` VALUES ('32', '阿斯蒂芬规划和返回', '0', '', '', '2');

-- ----------------------------
-- Table structure for `v_student`
-- ----------------------------
DROP TABLE IF EXISTS `v_student`;
CREATE TABLE `v_student` (
  `sid` bigint(20) NOT NULL AUTO_INCREMENT,
  `std_num` bigint(20) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_pwd` varchar(20) NOT NULL,
  `std_time` varchar(20) NOT NULL,
  `std_addr` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_student
-- ----------------------------
INSERT INTO `v_student` VALUES ('1', '333', '123', '123', '', '');
INSERT INTO `v_student` VALUES ('2', '444', '123', '123', '', '');
INSERT INTO `v_student` VALUES ('39', '12', 'a', '111', '', '');
INSERT INTO `v_student` VALUES ('37', '10', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('36', '9', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('35', '8', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('34', '7', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('33', '6', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('32', '5', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('31', '4', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('30', '3', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('29', '2', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('28', '1', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('41', '14', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('43', '1', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('44', '2', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('45', '3', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('46', '4', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('47', '5', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('48', '6', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('49', '7', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('50', '8', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('51', '9', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('52', '10', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('54', '12', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('56', '14', 'a', '', '', '');
INSERT INTO `v_student` VALUES ('57', '123', '张纯', '', '', '');
INSERT INTO `v_student` VALUES ('58', '25', '孔佳依', '', '', '');

-- ----------------------------
-- Table structure for `v_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `v_teacher`;
CREATE TABLE `v_teacher` (
  `tid` bigint(20) NOT NULL AUTO_INCREMENT,
  `t_rname` varchar(20) NOT NULL,
  `t_num` varchar(20) NOT NULL,
  `t_pwd` varchar(50) NOT NULL,
  `t_role` int(2) NOT NULL,
  `t_time` varchar(20) NOT NULL,
  `t_addr` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_teacher
-- ----------------------------
INSERT INTO `v_teacher` VALUES ('12', '张纯', '123123123', '', '1', '', '');
INSERT INTO `v_teacher` VALUES ('10', '', '', '1f06574d1b40011c30f9741a3abb1f20', '0', '', '');
INSERT INTO `v_teacher` VALUES ('11', '223', '123', '27dc95892febc404b933876dd0eb83e4', '6', '', '');
INSERT INTO `v_teacher` VALUES ('13', '张纯', '23333333', '', '2', '', '');
INSERT INTO `v_teacher` VALUES ('17', '兔子', '170409024', '', '6', '', '');

-- ----------------------------
-- Table structure for `v_top`
-- ----------------------------
DROP TABLE IF EXISTS `v_top`;
CREATE TABLE `v_top` (
  `top_id` int(11) NOT NULL AUTO_INCREMENT,
  `top_course` varchar(255) NOT NULL,
  `top_slide` varchar(255) NOT NULL,
  `top_systemname` varchar(255) NOT NULL,
  `top_logo` varchar(255) NOT NULL,
  `top_pic` varchar(255) NOT NULL,
  `top_time` varchar(255) NOT NULL,
  `top_head` varchar(255) NOT NULL,
  `top_foot` varchar(255) NOT NULL,
  PRIMARY KEY (`top_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_top
-- ----------------------------
INSERT INTO `v_top` VALUES ('1', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '高数', '', '', '', '', '');
INSERT INTO `v_top` VALUES ('2', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '高数', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '', '', '', '');
INSERT INTO `v_top` VALUES ('3', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u82f1\\u8bed\",\"3\":\"\\u4f53\\u80b2\",\"4\":\"\\u5316\\u5b66\",\"5\":\"\\u7269\\u7406\"}', '', '生物', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f08272f0be8.png', '', '1508934260', '', '');
INSERT INTO `v_top` VALUES ('4', '{\"1\":\"\\u82f1\\u8bed\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u4f53\\u80b2\",\"4\":\"\\u5316\\u5b66\",\"5\":\"\\u751f\\u7269\"}', '', '语文', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f082cdd37ee.png', '', '1508934350', '', '');
INSERT INTO `v_top` VALUES ('5', '{\"1\":\"\\u82f1\\u8bed\",\"2\":\"\\u82f1\\u8bed\",\"3\":\"\\u82f1\\u8bed\",\"4\":\"\\u82f1\\u8bed\",\"5\":\"\\u82f1\\u8bed\"}', '', '英语', 'C:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-26/59f181039d1e5.jpg', '', '1508999428', '', '');
INSERT INTO `v_top` VALUES ('6', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '高数', '/Upload/upload_f2017-10-27/59f28ee80c4f2.jpg', '', '1509068521', '', '');
INSERT INTO `v_top` VALUES ('7', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u82f1\\u8bed\",\"3\":\"\\u4f53\\u80b2\",\"4\":\"\\u5316\\u5b66\",\"5\":\"\\u7269\\u7406\"}', '', '哈哈哈哈哈哈', '/Upload/upload_f2017-10-28/59f3eb700720f.jpg', '', '1509157745', '', '');
INSERT INTO `v_top` VALUES ('8', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '哈哈哈哈哈哈哈', '/Upload/upload_f2017-10-28/59f3edc2465ab.png', '', '1509158339', '', '');
INSERT INTO `v_top` VALUES ('9', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '略略略', '/Upload/upload_f2017-10-28/59f3f24eea5bc.jpg', '', '1509159504', '', '');
INSERT INTO `v_top` VALUES ('10', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u9ad8\\u6570\",\"3\":\"\\u9ad8\\u6570\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '666666', '/Upload/upload_f2017-10-28/59f3f292ee666.jpg', '', '1509159572', '', '');
INSERT INTO `v_top` VALUES ('11', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u82f1\\u8bed\",\"3\":\"\\u4f53\\u80b2\",\"4\":\"\\u9ad8\\u6570\",\"5\":\"\\u9ad8\\u6570\"}', '', '视频网站', '/Upload/upload_f2017-10-30/59f70775ce70e.jpg', '', '1509361526', '', '');
INSERT INTO `v_top` VALUES ('12', '{\"1\":\"\\u7b54\\u590d\",\"2\":\"\\u4e8c\\u5206\",\"3\":\"\\u5927\\u8303\\u56f4\",\"4\":\"\\u8be5\\u5982\\u4f55\",\"5\":\"\\u7231\\u5983\"}', '', 'fet', '/Upload/upload_f2017-11-05/59feca416a760.jpg', '', '1509870146', '', '');
INSERT INTO `v_top` VALUES ('13', '{\"1\":\"\\u9ad8\\u6570\",\"2\":\"\\u82f1\\u8bed\",\"3\":\"\\u5927\\u7269\",\"4\":\"\\u8ba1\\u7b97\\u673a\\u7f51\\u7edc\",\"5\":\"\\u7ec4\\u6210\\u539f\\u7406\"}', '', '大连名族大学视频网站', '/Upload/upload_f2017-11-05/59fecd5118aa4.jpg', '', '1509870930', '', '');

-- ----------------------------
-- Table structure for `v_ved`
-- ----------------------------
DROP TABLE IF EXISTS `v_ved`;
CREATE TABLE `v_ved` (
  `ved_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sid` bigint(20) NOT NULL,
  `vid` bigint(20) NOT NULL,
  `ved_time` varchar(20) NOT NULL,
  PRIMARY KEY (`ved_id`)
) ENGINE=MyISAM AUTO_INCREMENT=297 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_ved
-- ----------------------------
INSERT INTO `v_ved` VALUES ('1', '1', '1', '');
INSERT INTO `v_ved` VALUES ('2', '0', '1', '');
INSERT INTO `v_ved` VALUES ('3', '0', '1', '');
INSERT INTO `v_ved` VALUES ('4', '0', '1', '');
INSERT INTO `v_ved` VALUES ('5', '1', '11', '1509347722');
INSERT INTO `v_ved` VALUES ('6', '1', '0', '1509347724');
INSERT INTO `v_ved` VALUES ('7', '1', '0', '1509347726');
INSERT INTO `v_ved` VALUES ('8', '1', '0', '1509347728');
INSERT INTO `v_ved` VALUES ('9', '1', '11', '1509347738');
INSERT INTO `v_ved` VALUES ('10', '1', '0', '1509347740');
INSERT INTO `v_ved` VALUES ('11', '1', '0', '1509347742');
INSERT INTO `v_ved` VALUES ('12', '1', '0', '1509347744');
INSERT INTO `v_ved` VALUES ('13', '1', '7', '1509347932');
INSERT INTO `v_ved` VALUES ('14', '1', '0', '1509347934');
INSERT INTO `v_ved` VALUES ('15', '1', '0', '1509347936');
INSERT INTO `v_ved` VALUES ('16', '1', '0', '1509347938');
INSERT INTO `v_ved` VALUES ('17', '1', '7', '1509347998');
INSERT INTO `v_ved` VALUES ('18', '1', '11', '1509349955');
INSERT INTO `v_ved` VALUES ('19', '1', '0', '1509349957');
INSERT INTO `v_ved` VALUES ('20', '1', '0', '1509349959');
INSERT INTO `v_ved` VALUES ('21', '1', '0', '1509349961');
INSERT INTO `v_ved` VALUES ('22', '1', '11', '1509350022');
INSERT INTO `v_ved` VALUES ('23', '1', '11', '1509350030');
INSERT INTO `v_ved` VALUES ('24', '1', '11', '1509350062');
INSERT INTO `v_ved` VALUES ('25', '1', '11', '1509350093');
INSERT INTO `v_ved` VALUES ('26', '1', '0', '1509350095');
INSERT INTO `v_ved` VALUES ('27', '1', '0', '1509350097');
INSERT INTO `v_ved` VALUES ('28', '1', '0', '1509350099');
INSERT INTO `v_ved` VALUES ('29', '1', '11', '1509350122');
INSERT INTO `v_ved` VALUES ('30', '1', '0', '1509350123');
INSERT INTO `v_ved` VALUES ('31', '1', '0', '1509350124');
INSERT INTO `v_ved` VALUES ('32', '1', '0', '1509350125');
INSERT INTO `v_ved` VALUES ('33', '1', '11', '1509350261');
INSERT INTO `v_ved` VALUES ('34', '1', '0', '1509350263');
INSERT INTO `v_ved` VALUES ('35', '1', '0', '1509350265');
INSERT INTO `v_ved` VALUES ('36', '1', '0', '1509350267');
INSERT INTO `v_ved` VALUES ('37', '1', '11', '1509350358');
INSERT INTO `v_ved` VALUES ('38', '1', '0', '1509350360');
INSERT INTO `v_ved` VALUES ('39', '1', '0', '1509350362');
INSERT INTO `v_ved` VALUES ('40', '1', '0', '1509350364');
INSERT INTO `v_ved` VALUES ('41', '1', '11', '1509350452');
INSERT INTO `v_ved` VALUES ('42', '1', '0', '1509350454');
INSERT INTO `v_ved` VALUES ('43', '1', '0', '1509350456');
INSERT INTO `v_ved` VALUES ('44', '1', '0', '1509350458');
INSERT INTO `v_ved` VALUES ('45', '1', '11', '1509350878');
INSERT INTO `v_ved` VALUES ('46', '1', '11', '1509350879');
INSERT INTO `v_ved` VALUES ('47', '1', '0', '1509350880');
INSERT INTO `v_ved` VALUES ('48', '1', '0', '1509350881');
INSERT INTO `v_ved` VALUES ('49', '1', '0', '1509350882');
INSERT INTO `v_ved` VALUES ('50', '1', '0', '1509350883');
INSERT INTO `v_ved` VALUES ('51', '1', '0', '1509350884');
INSERT INTO `v_ved` VALUES ('52', '1', '0', '1509350885');
INSERT INTO `v_ved` VALUES ('53', '1', '11', '1509350901');
INSERT INTO `v_ved` VALUES ('54', '1', '11', '1509350902');
INSERT INTO `v_ved` VALUES ('55', '1', '0', '1509350904');
INSERT INTO `v_ved` VALUES ('56', '1', '0', '1509350905');
INSERT INTO `v_ved` VALUES ('57', '1', '0', '1509350906');
INSERT INTO `v_ved` VALUES ('58', '1', '0', '1509350907');
INSERT INTO `v_ved` VALUES ('59', '1', '0', '1509350908');
INSERT INTO `v_ved` VALUES ('60', '1', '0', '1509350909');
INSERT INTO `v_ved` VALUES ('61', '1', '11', '1509351039');
INSERT INTO `v_ved` VALUES ('62', '1', '0', '1509351041');
INSERT INTO `v_ved` VALUES ('63', '1', '0', '1509351043');
INSERT INTO `v_ved` VALUES ('64', '1', '0', '1509351045');
INSERT INTO `v_ved` VALUES ('65', '1', '11', '1509351111');
INSERT INTO `v_ved` VALUES ('66', '1', '11', '1509351146');
INSERT INTO `v_ved` VALUES ('67', '1', '0', '1509351148');
INSERT INTO `v_ved` VALUES ('68', '1', '0', '1509351150');
INSERT INTO `v_ved` VALUES ('69', '1', '0', '1509351152');
INSERT INTO `v_ved` VALUES ('70', '1', '3', '1509351167');
INSERT INTO `v_ved` VALUES ('71', '1', '3', '1509351169');
INSERT INTO `v_ved` VALUES ('72', '1', '3', '1509351171');
INSERT INTO `v_ved` VALUES ('73', '1', '3', '1509351173');
INSERT INTO `v_ved` VALUES ('74', '1', '3', '1509351389');
INSERT INTO `v_ved` VALUES ('75', '1', '0', '1509351391');
INSERT INTO `v_ved` VALUES ('76', '1', '0', '1509351393');
INSERT INTO `v_ved` VALUES ('77', '1', '0', '1509351395');
INSERT INTO `v_ved` VALUES ('78', '12', '11', '1509351604');
INSERT INTO `v_ved` VALUES ('79', '1', '0', '1509351606');
INSERT INTO `v_ved` VALUES ('80', '1', '0', '1509351608');
INSERT INTO `v_ved` VALUES ('81', '1', '0', '1509351610');
INSERT INTO `v_ved` VALUES ('82', '2', '11', '1509352087');
INSERT INTO `v_ved` VALUES ('83', '1', '0', '1509352089');
INSERT INTO `v_ved` VALUES ('84', '1', '0', '1509352091');
INSERT INTO `v_ved` VALUES ('85', '1', '0', '1509352093');
INSERT INTO `v_ved` VALUES ('86', '1', '11', '1509354719');
INSERT INTO `v_ved` VALUES ('87', '1', '0', '1509354721');
INSERT INTO `v_ved` VALUES ('88', '1', '0', '1509354723');
INSERT INTO `v_ved` VALUES ('89', '1', '0', '1509354725');
INSERT INTO `v_ved` VALUES ('90', '1', '7', '1509361480');
INSERT INTO `v_ved` VALUES ('91', '1', '0', '1509361482');
INSERT INTO `v_ved` VALUES ('92', '1', '0', '1509361484');
INSERT INTO `v_ved` VALUES ('93', '1', '0', '1509361486');
INSERT INTO `v_ved` VALUES ('94', '1', '11', '1509361560');
INSERT INTO `v_ved` VALUES ('95', '1', '0', '1509361561');
INSERT INTO `v_ved` VALUES ('96', '1', '0', '1509361564');
INSERT INTO `v_ved` VALUES ('97', '1', '0', '1509361566');
INSERT INTO `v_ved` VALUES ('98', '1', '11', '1509361578');
INSERT INTO `v_ved` VALUES ('99', '1', '0', '1509361580');
INSERT INTO `v_ved` VALUES ('100', '1', '0', '1509361582');
INSERT INTO `v_ved` VALUES ('101', '1', '0', '1509361584');
INSERT INTO `v_ved` VALUES ('102', '1', '11', '1509361997');
INSERT INTO `v_ved` VALUES ('103', '1', '0', '1509361999');
INSERT INTO `v_ved` VALUES ('104', '1', '0', '1509362001');
INSERT INTO `v_ved` VALUES ('105', '1', '0', '1509362003');
INSERT INTO `v_ved` VALUES ('106', '1', '11', '1509362018');
INSERT INTO `v_ved` VALUES ('107', '1', '0', '1509362020');
INSERT INTO `v_ved` VALUES ('108', '1', '0', '1509362022');
INSERT INTO `v_ved` VALUES ('109', '1', '0', '1509362024');
INSERT INTO `v_ved` VALUES ('110', '1', '0', '1509362166');
INSERT INTO `v_ved` VALUES ('111', '1', '0', '1509362168');
INSERT INTO `v_ved` VALUES ('112', '1', '0', '1509362170');
INSERT INTO `v_ved` VALUES ('113', '1', '0', '1509362172');
INSERT INTO `v_ved` VALUES ('114', '1', '11', '1509366832');
INSERT INTO `v_ved` VALUES ('115', '1', '0', '1509366835');
INSERT INTO `v_ved` VALUES ('116', '1', '0', '1509366837');
INSERT INTO `v_ved` VALUES ('117', '1', '0', '1509366839');
INSERT INTO `v_ved` VALUES ('118', '1', '12', '1509774983');
INSERT INTO `v_ved` VALUES ('119', '1', '0', '1509774985');
INSERT INTO `v_ved` VALUES ('120', '1', '0', '1509774987');
INSERT INTO `v_ved` VALUES ('121', '1', '0', '1509774990');
INSERT INTO `v_ved` VALUES ('122', '1', '12', '1509775038');
INSERT INTO `v_ved` VALUES ('123', '1', '0', '1509775040');
INSERT INTO `v_ved` VALUES ('124', '1', '0', '1509775042');
INSERT INTO `v_ved` VALUES ('125', '1', '0', '1509775044');
INSERT INTO `v_ved` VALUES ('126', '1', '12', '1509775054');
INSERT INTO `v_ved` VALUES ('127', '1', '0', '1509775057');
INSERT INTO `v_ved` VALUES ('128', '1', '0', '1509775059');
INSERT INTO `v_ved` VALUES ('129', '1', '0', '1509775061');
INSERT INTO `v_ved` VALUES ('130', '1', '7', '1509859159');
INSERT INTO `v_ved` VALUES ('131', '1', '0', '1509859161');
INSERT INTO `v_ved` VALUES ('132', '1', '0', '1509859163');
INSERT INTO `v_ved` VALUES ('133', '1', '0', '1509859165');
INSERT INTO `v_ved` VALUES ('134', '1', '12', '1509870194');
INSERT INTO `v_ved` VALUES ('135', '1', '0', '1509870196');
INSERT INTO `v_ved` VALUES ('136', '1', '0', '1509870198');
INSERT INTO `v_ved` VALUES ('137', '1', '0', '1509870200');
INSERT INTO `v_ved` VALUES ('138', '1', '0', '1509870432');
INSERT INTO `v_ved` VALUES ('139', '1', '0', '1509870435');
INSERT INTO `v_ved` VALUES ('140', '1', '0', '1509870865');
INSERT INTO `v_ved` VALUES ('141', '1', '0', '1509870868');
INSERT INTO `v_ved` VALUES ('142', '1', '12', '1509879185');
INSERT INTO `v_ved` VALUES ('143', '1', '0', '1509879187');
INSERT INTO `v_ved` VALUES ('144', '1', '0', '1509879189');
INSERT INTO `v_ved` VALUES ('145', '1', '0', '1509879191');
INSERT INTO `v_ved` VALUES ('146', '1', '12', '1509879490');
INSERT INTO `v_ved` VALUES ('147', '1', '12', '1509879492');
INSERT INTO `v_ved` VALUES ('148', '1', '0', '1509879494');
INSERT INTO `v_ved` VALUES ('149', '1', '0', '1509879496');
INSERT INTO `v_ved` VALUES ('150', '1', '0', '1509879498');
INSERT INTO `v_ved` VALUES ('151', '1', '12', '1509879512');
INSERT INTO `v_ved` VALUES ('152', '1', '0', '1509879514');
INSERT INTO `v_ved` VALUES ('153', '1', '0', '1509879516');
INSERT INTO `v_ved` VALUES ('154', '1', '0', '1509879518');
INSERT INTO `v_ved` VALUES ('155', '1', '14', '1509894307');
INSERT INTO `v_ved` VALUES ('156', '1', '0', '1509894309');
INSERT INTO `v_ved` VALUES ('157', '1', '0', '1509894311');
INSERT INTO `v_ved` VALUES ('158', '1', '0', '1509894313');
INSERT INTO `v_ved` VALUES ('159', '1', '15', '1509894523');
INSERT INTO `v_ved` VALUES ('160', '1', '0', '1509894525');
INSERT INTO `v_ved` VALUES ('161', '1', '0', '1509894528');
INSERT INTO `v_ved` VALUES ('162', '1', '0', '1509894530');
INSERT INTO `v_ved` VALUES ('163', '1', '15', '1509894542');
INSERT INTO `v_ved` VALUES ('164', '1', '0', '1509894544');
INSERT INTO `v_ved` VALUES ('165', '1', '0', '1509894546');
INSERT INTO `v_ved` VALUES ('166', '1', '0', '1509894548');
INSERT INTO `v_ved` VALUES ('167', '1', '15', '1509897418');
INSERT INTO `v_ved` VALUES ('168', '1', '0', '1509897420');
INSERT INTO `v_ved` VALUES ('169', '1', '0', '1509897422');
INSERT INTO `v_ved` VALUES ('170', '1', '0', '1509897424');
INSERT INTO `v_ved` VALUES ('171', '1', '15', '1509897532');
INSERT INTO `v_ved` VALUES ('172', '1', '0', '1509897535');
INSERT INTO `v_ved` VALUES ('173', '1', '0', '1509897537');
INSERT INTO `v_ved` VALUES ('174', '1', '0', '1509897539');
INSERT INTO `v_ved` VALUES ('175', '1', '15', '1509897546');
INSERT INTO `v_ved` VALUES ('176', '1', '15', '1509897548');
INSERT INTO `v_ved` VALUES ('177', '1', '15', '1509897562');
INSERT INTO `v_ved` VALUES ('178', '1', '0', '1509897564');
INSERT INTO `v_ved` VALUES ('179', '1', '0', '1509897567');
INSERT INTO `v_ved` VALUES ('180', '1', '0', '1509897569');
INSERT INTO `v_ved` VALUES ('181', '1', '14', '1509897666');
INSERT INTO `v_ved` VALUES ('182', '1', '0', '1509897668');
INSERT INTO `v_ved` VALUES ('183', '1', '0', '1509897671');
INSERT INTO `v_ved` VALUES ('184', '1', '0', '1509897673');
INSERT INTO `v_ved` VALUES ('185', '1', '14', '1509897682');
INSERT INTO `v_ved` VALUES ('186', '1', '0', '1509897684');
INSERT INTO `v_ved` VALUES ('187', '1', '0', '1509897686');
INSERT INTO `v_ved` VALUES ('188', '1', '0', '1509897688');
INSERT INTO `v_ved` VALUES ('189', '1', '14', '1509897722');
INSERT INTO `v_ved` VALUES ('190', '1', '0', '1509897724');
INSERT INTO `v_ved` VALUES ('191', '1', '0', '1509897727');
INSERT INTO `v_ved` VALUES ('192', '1', '0', '1509897729');
INSERT INTO `v_ved` VALUES ('193', '1', '15', '1509947052');
INSERT INTO `v_ved` VALUES ('194', '1', '0', '1509947054');
INSERT INTO `v_ved` VALUES ('195', '1', '0', '1509947055');
INSERT INTO `v_ved` VALUES ('196', '1', '0', '1509947058');
INSERT INTO `v_ved` VALUES ('197', '1', '0', '1509947623');
INSERT INTO `v_ved` VALUES ('198', '1', '0', '1509947625');
INSERT INTO `v_ved` VALUES ('199', '1', '0', '1509947627');
INSERT INTO `v_ved` VALUES ('200', '1', '0', '1509947629');
INSERT INTO `v_ved` VALUES ('201', '1', '0', '1509947799');
INSERT INTO `v_ved` VALUES ('202', '1', '0', '1509947801');
INSERT INTO `v_ved` VALUES ('203', '1', '0', '1509947803');
INSERT INTO `v_ved` VALUES ('204', '1', '0', '1509947805');
INSERT INTO `v_ved` VALUES ('205', '1', '15', '1509954498');
INSERT INTO `v_ved` VALUES ('206', '1', '0', '1509954500');
INSERT INTO `v_ved` VALUES ('207', '1', '0', '1509954502');
INSERT INTO `v_ved` VALUES ('208', '1', '0', '1509954504');
INSERT INTO `v_ved` VALUES ('209', '1', '15', '1509954998');
INSERT INTO `v_ved` VALUES ('210', '1', '0', '1509955000');
INSERT INTO `v_ved` VALUES ('211', '1', '0', '1509955002');
INSERT INTO `v_ved` VALUES ('212', '1', '0', '1509955004');
INSERT INTO `v_ved` VALUES ('213', '1', '15', '1509955824');
INSERT INTO `v_ved` VALUES ('214', '1', '0', '1509955825');
INSERT INTO `v_ved` VALUES ('215', '1', '0', '1509955827');
INSERT INTO `v_ved` VALUES ('216', '1', '0', '1509955829');
INSERT INTO `v_ved` VALUES ('217', '1', '15', '1509955861');
INSERT INTO `v_ved` VALUES ('218', '1', '0', '1509955862');
INSERT INTO `v_ved` VALUES ('219', '1', '0', '1509955864');
INSERT INTO `v_ved` VALUES ('220', '1', '0', '1509955866');
INSERT INTO `v_ved` VALUES ('221', '1', '15', '1509955987');
INSERT INTO `v_ved` VALUES ('222', '1', '0', '1509955989');
INSERT INTO `v_ved` VALUES ('223', '1', '0', '1509955991');
INSERT INTO `v_ved` VALUES ('224', '1', '0', '1509955992');
INSERT INTO `v_ved` VALUES ('225', '1', '15', '1509956038');
INSERT INTO `v_ved` VALUES ('226', '1', '0', '1509956040');
INSERT INTO `v_ved` VALUES ('227', '1', '0', '1509956042');
INSERT INTO `v_ved` VALUES ('228', '1', '0', '1509956044');
INSERT INTO `v_ved` VALUES ('229', '1', '15', '1509956115');
INSERT INTO `v_ved` VALUES ('230', '1', '0', '1509956116');
INSERT INTO `v_ved` VALUES ('231', '1', '0', '1509956118');
INSERT INTO `v_ved` VALUES ('232', '1', '0', '1509956120');
INSERT INTO `v_ved` VALUES ('233', '1', '15', '1509957105');
INSERT INTO `v_ved` VALUES ('234', '1', '0', '1509957107');
INSERT INTO `v_ved` VALUES ('235', '1', '0', '1509957109');
INSERT INTO `v_ved` VALUES ('236', '1', '0', '1509957111');
INSERT INTO `v_ved` VALUES ('237', '1', '15', '1509957179');
INSERT INTO `v_ved` VALUES ('238', '1', '0', '1509957181');
INSERT INTO `v_ved` VALUES ('239', '1', '0', '1509957183');
INSERT INTO `v_ved` VALUES ('240', '1', '0', '1509957185');
INSERT INTO `v_ved` VALUES ('241', '1', '15', '1509957223');
INSERT INTO `v_ved` VALUES ('242', '1', '0', '1509957225');
INSERT INTO `v_ved` VALUES ('243', '1', '0', '1509957227');
INSERT INTO `v_ved` VALUES ('244', '1', '0', '1509957229');
INSERT INTO `v_ved` VALUES ('245', '1', '15', '1509957279');
INSERT INTO `v_ved` VALUES ('246', '1', '0', '1509957281');
INSERT INTO `v_ved` VALUES ('247', '1', '0', '1509957283');
INSERT INTO `v_ved` VALUES ('248', '1', '0', '1509957285');
INSERT INTO `v_ved` VALUES ('249', '1', '15', '1509957359');
INSERT INTO `v_ved` VALUES ('250', '1', '0', '1509957361');
INSERT INTO `v_ved` VALUES ('251', '1', '0', '1509957363');
INSERT INTO `v_ved` VALUES ('252', '1', '0', '1509957365');
INSERT INTO `v_ved` VALUES ('253', '1', '15', '1509957413');
INSERT INTO `v_ved` VALUES ('254', '1', '0', '1509957415');
INSERT INTO `v_ved` VALUES ('255', '1', '0', '1509957417');
INSERT INTO `v_ved` VALUES ('256', '1', '0', '1509957419');
INSERT INTO `v_ved` VALUES ('257', '1', '15', '1509957673');
INSERT INTO `v_ved` VALUES ('258', '1', '0', '1509957675');
INSERT INTO `v_ved` VALUES ('259', '1', '0', '1509957676');
INSERT INTO `v_ved` VALUES ('260', '1', '0', '1509957678');
INSERT INTO `v_ved` VALUES ('261', '1', '15', '1509957702');
INSERT INTO `v_ved` VALUES ('262', '1', '0', '1509957703');
INSERT INTO `v_ved` VALUES ('263', '1', '0', '1509957705');
INSERT INTO `v_ved` VALUES ('264', '1', '0', '1509957707');
INSERT INTO `v_ved` VALUES ('265', '1', '15', '1509957774');
INSERT INTO `v_ved` VALUES ('266', '1', '0', '1509957776');
INSERT INTO `v_ved` VALUES ('267', '1', '0', '1509957778');
INSERT INTO `v_ved` VALUES ('268', '1', '0', '1509957780');
INSERT INTO `v_ved` VALUES ('269', '1', '15', '1509957876');
INSERT INTO `v_ved` VALUES ('270', '1', '0', '1509957877');
INSERT INTO `v_ved` VALUES ('271', '1', '0', '1509957879');
INSERT INTO `v_ved` VALUES ('272', '1', '0', '1509957881');
INSERT INTO `v_ved` VALUES ('273', '1', '15', '1509957897');
INSERT INTO `v_ved` VALUES ('274', '1', '0', '1509957899');
INSERT INTO `v_ved` VALUES ('275', '1', '0', '1509957901');
INSERT INTO `v_ved` VALUES ('276', '1', '0', '1509957903');
INSERT INTO `v_ved` VALUES ('277', '1', '15', '1509957919');
INSERT INTO `v_ved` VALUES ('278', '1', '0', '1509957921');
INSERT INTO `v_ved` VALUES ('279', '1', '0', '1509957923');
INSERT INTO `v_ved` VALUES ('280', '1', '0', '1509957924');
INSERT INTO `v_ved` VALUES ('281', '1', '12', '1509962130');
INSERT INTO `v_ved` VALUES ('282', '1', '0', '1509962132');
INSERT INTO `v_ved` VALUES ('283', '1', '0', '1509962134');
INSERT INTO `v_ved` VALUES ('284', '1', '0', '1509962136');
INSERT INTO `v_ved` VALUES ('285', '1', '12', '1509962150');
INSERT INTO `v_ved` VALUES ('286', '1', '0', '1509962154');
INSERT INTO `v_ved` VALUES ('287', '1', '0', '1509962156');
INSERT INTO `v_ved` VALUES ('288', '1', '0', '1509962157');
INSERT INTO `v_ved` VALUES ('289', '1', '0', '1509968161');
INSERT INTO `v_ved` VALUES ('290', '1', '0', '1509968163');
INSERT INTO `v_ved` VALUES ('291', '1', '0', '1509968165');
INSERT INTO `v_ved` VALUES ('292', '1', '0', '1509968166');
INSERT INTO `v_ved` VALUES ('293', '1', '0', '1509968342');
INSERT INTO `v_ved` VALUES ('294', '1', '0', '1509968346');
INSERT INTO `v_ved` VALUES ('295', '1', '0', '1509968348');
INSERT INTO `v_ved` VALUES ('296', '1', '0', '1509968349');

-- ----------------------------
-- Table structure for `v_video`
-- ----------------------------
DROP TABLE IF EXISTS `v_video`;
CREATE TABLE `v_video` (
  `vid` bigint(20) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(20) NOT NULL,
  `v_intro` varchar(200) NOT NULL,
  `v_img` text NOT NULL,
  `sort_id` bigint(20) NOT NULL,
  `tid` bigint(20) NOT NULL,
  `v_time` varchar(20) NOT NULL,
  `v_content` longtext,
  `v_status` int(2) NOT NULL,
  `v_addr` varchar(50) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_video
-- ----------------------------
INSERT INTO `v_video` VALUES ('1', '撒大是大非', '案发二奥翁热奥无若', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '14', '9', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('2', '发给回复', '梵蒂冈和风格和', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '13', '9', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('3', '是的弗格森的风格', '沃尔威特', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '12', '1', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('4', 'sdfsdf', '锐思特', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '9', '9', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('5', '请问', '惹他认为二人', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '8', '9', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('6', '二婚头给你呗', '惹他一条烟5好', 'D:\\phpStudy\\WWW\\vn/Web/Upload/upload_f2017-10-25/59f0552f1a70b.png', '15', '2', '1508976728', '', '0', '');
INSERT INTO `v_video` VALUES ('7', '6666666', '阿富汗是打工皇帝', '/Upload/upload_p2017-10-30/59f6c049744e2.jpg', '32', '2', '1509242891', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20171029/1509242697504547.mp4\" data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('12', '777', '777', '/Upload/upload_p2017-11-04/59fd2be7efdf2.jpg', '37', '0', '1509764073', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20171104/1509764068774270.mp4\" data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('8', '测试视频', '测试使用', '/Upload/upload_p2017-10-30/59f6c049744e2.jpg', '33', '0', '1509343105', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20171030/1509343099541727.mp4\" data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('9', '测试视频', '测试使用', '/Upload/upload_p2017-10-30/59f6c049744e2.jpg', '34', '0', '1509343190', '<p><video class=\"edui-upload-video  vjs-default-skin  video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('10', '测试视频', '测试使用', '/Upload/upload_p2017-10-30/59f6c049744e2.jpg', '35', '0', '1509343306', '<p><video class=\"edui-upload-video  vjs-default-skin   video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('11', '343212', '123123123123', '/Upload/upload_p2017-10-30/59f6c1d8c1f66.jpg', '36', '0', '1509343705', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20171030/1509343702833955.mp4\" data-setup=\"{}\"></video></p>', '0', '');
INSERT INTO `v_video` VALUES ('13', '1', '12', '/Upload/upload_p2017-11-05/59feed568f66b.jpg', '39', '1', '1509879127', '', '0', '');
INSERT INTO `v_video` VALUES ('14', '122', '123123121321', '/Upload/upload_p2017-11-05/59ff2879b11e1.jpg', '44', '1', '1509894266', '', '0', '');
INSERT INTO `v_video` VALUES ('15', '反反复复付', '反反复复付付', '/Upload/upload_p2017-11-05/59ff2927b01d4.jpg', '45', '1', '1509894440', '<p><video class=\"edui-upload-video  vjs-default-skin video-js\" controls=\"\" preload=\"none\" width=\"420\" height=\"280\" src=\"/ueditor/php/upload/video/20171105/1509894431567546.mp4\" data-setup=\"{}\"></video></p>', '1', '');
