/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : yunsfaka

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-24 14:54:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ys_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ys_admin`;
CREATE TABLE `ys_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL COMMENT '登录名',
  `passwd` varchar(32) NOT NULL COMMENT '密码',
  `sip` varchar(32) DEFAULT NULL COMMENT '上次登录ip',
  `stime` int(32) DEFAULT NULL COMMENT '上次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ys_admin
-- ----------------------------
INSERT INTO `ys_admin` VALUES ('1', 'admin', 'a3524bbb35bec4c94653328944630525', '127.0.0.1', '1503557547');

-- ----------------------------
-- Table structure for `ys_config`
-- ----------------------------
DROP TABLE IF EXISTS `ys_config`;
CREATE TABLE `ys_config` (
  `id` int(1) NOT NULL,
  `name` varchar(100) DEFAULT NULL COMMENT '网站名称',
  `houzui` varchar(100) DEFAULT NULL COMMENT '后缀',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(100) DEFAULT NULL COMMENT '描述',
  `payid` varchar(100) DEFAULT NULL COMMENT '商户id',
  `paykey` varchar(100) DEFAULT NULL COMMENT '商户key',
  `kfqq` int(10) DEFAULT NULL COMMENT '客服QQ',
  `email` varchar(100) DEFAULT NULL COMMENT '用户下单提醒邮箱',
  `webst` varchar(10) DEFAULT NULL COMMENT '网站创建时间',
  `gtips` text COMMENT '公告',
  `altps` text COMMENT '首页弹出公告',
  `foot` text COMMENT '底部排版',
  `stmp` varchar(100) DEFAULT NULL COMMENT 'stmp配置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ys_config
-- ----------------------------
INSERT INTO `ys_config` VALUES ('1', '云尚发卡', '稳定、快速、安全、省心', '发卡系统', '发卡系统', '', '', '123456', '1234567@qq.com', '2017-08-15', ' <h3>云尚发卡系统【正版授权】\r\n                <span class=\"close\" data-close=\"note\"></span>\r\n            </h3>\r\n            <p> 请使用正版云尚发卡系统，切勿使用盗版。避免被别有用心之人安插后门导致资金损失</p>\r\n            <p><span class=\"label label-default\">云尚官方网址：<a href=\"http://www.yunscx.com\" target=\"_blank\">http://www.yunscx.com</a></span>\r\n            </p><p><span class=\"label label-success\">云尚软件正版授权，安全、信誉、稳定、可靠</span>\r\n        </p>\r\n            <p><span class=\"label label-danger\">客服QQ53331323</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=53331323&site=qq&menu=yes\" target=\"_blank\"><img border=\"0\" title=\"点击这里给我发消息\" alt=\"点击这里给我发消息\" src=\"http://wpa.qq.com/pa?p=2:53331323:51\"></a>\r\n        </p>\r\n            <p><span class=\"label label-danger\">交流QQ群568679748</span>\r\n                <a target=\"_blank\" href=\"//shang.qq.com/wpa/qunwpa?idkey=a5811474a3cf1aec57ddae46fe5fd2d3309184067a400a7982c4a7aa7458fc5e\"><img border=\"0\" src=\"//pub.idqqimg.com/wpa/images/group.png\" alt=\"云尚软件交流群\" title=\"云尚软件交流群\"></a>\r\n            </p>', '<div class=\"tpl-content-scope\">\r\n        <div class=\"note note-info\">\r\n            <h3>云尚发卡系统【正版授权】\r\n                <span class=\"close\" data-close=\"note\"></span>\r\n            </h3>\r\n            <p> 请使用正版云尚发卡系统，切勿使用盗版。避免被别有用心之人安插后门导致资金损失</p>\r\n            <p><span class=\"label label-default\">云尚官方网址：<a href=\"http://www.yunscx.com\" target=\"_blank\">http://www.yunscx.com</a></span>\r\n            </p><p><span class=\"label label-success\">云尚软件正版授权，安全、信誉、稳定、可靠</span>\r\n        </p>\r\n            <p><span class=\"label label-danger\">客服QQ53331323</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=53331323&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img border=\"0\" title=\"点击这里给我发消息\" alt=\"点击这里给我发消息\" src=\"http://wpa.qq.com/pa?p=2:53331323:51\"></a>\r\n        </p>\r\n            <p><span class=\"label label-danger\">交流QQ群568679748</span>\r\n                <a target=\"_blank\" href=\"//shang.qq.com/wpa/qunwpa?idkey=a5811474a3cf1aec57ddae46fe5fd2d3309184067a400a7982c4a7aa7458fc5e\"><img border=\"0\" src=\"//pub.idqqimg.com/wpa/images/group.png\" alt=\"云尚软件交流群\" title=\"云尚软件交流群\"></a>\r\n            </p>        </div>\r\n    </div>', ' <div class=\"am-footer-switch\">\r\n    友情链接：\r\n        <span class=\"am-footer-divider\"> | </span>\r\n        <a id=\"godesktop\" data-rel=\"desktop\" class=\"am-footer-desktop\" href=\"http://www.yunscx.com\" target=\"_blank\">\r\n            云尚官网\r\n        </a>\r\n    </div>\r\n    <div class=\"am-footer-miscs \">\r\n\r\n        <p>由 <a href=\"http://www.yunscx.com/\" title=\"云尚创想\"\r\n                target=\"_blank\" class=\"\">云尚创想</a>\r\n            提供技术支持</p>\r\n        <p>CopyRight©2017  Yunscx Inc.</p>\r\n        <p>京ICP备13033158</p>\r\n    </div>', '{\"server\":\"\",\"port\":\"\",\"user\":\"\",\"passwd\":\"\"}');

-- ----------------------------
-- Table structure for `ys_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ys_goods`;
CREATE TABLE `ys_goods` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '商品名称',
  `cid` int(100) NOT NULL COMMENT '商品分类id',
  `type` int(1) DEFAULT '1' COMMENT '商品类型 1 手工充值  2自动发卡',
  `money` decimal(65,2) DEFAULT '0.00' COMMENT '商品单价',
  `otitle` varchar(225) DEFAULT '充值账号' COMMENT '第一个输入框标题',
  `tcheck` int(1) DEFAULT '0' COMMENT '是否需要第二个输入框 1是 0否',
  `ttitle` varchar(225) DEFAULT '第二个输入框标题' COMMENT '第二个输入框标题',
  `scheck` int(1) DEFAULT '0' COMMENT '是否需要第三个输入框 0否 1是',
  `stitle` varchar(225) DEFAULT '第三个输入框标题' COMMENT '第三个输入框标题',
  `status` int(1) DEFAULT '1' COMMENT '1上架  2下架',
  `ord` int(100) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of ys_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `ys_kami`
-- ----------------------------
DROP TABLE IF EXISTS `ys_kami`;
CREATE TABLE `ys_kami` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `gid` int(100) NOT NULL COMMENT '所属商品',
  `knumber` varchar(225) NOT NULL COMMENT '卡号',
  `kpasswd` varchar(225) DEFAULT NULL COMMENT '卡密',
  `isok` int(1) DEFAULT '0' COMMENT '0待售  1 售出',
  `ctime` int(225) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8 COMMENT='卡密表';

-- ----------------------------
-- Records of ys_kami
-- ----------------------------

-- ----------------------------
-- Table structure for `ys_order`
-- ----------------------------
DROP TABLE IF EXISTS `ys_order`;
CREATE TABLE `ys_order` (
  `id` varchar(225) NOT NULL COMMENT '订单id',
  `oname` varchar(225) NOT NULL COMMENT '订单名称',
  `number` int(100) NOT NULL DEFAULT '1' COMMENT '数量',
  `gid` int(200) NOT NULL COMMENT '商品id',
  `money` decimal(65,2) NOT NULL COMMENT '订单单价',
  `cmoney` decimal(65,2) NOT NULL COMMENT '订单总价',
  `account` varchar(100) NOT NULL COMMENT '充值账号',
  `info` text NOT NULL COMMENT '充值信息',
  `type` int(1) NOT NULL COMMENT '订单类型 1手工订单  2自动发卡',
  `status` int(1) DEFAULT '0' COMMENT '0待付款 1待处理 2已处理 3已完成  4处理失败 5发卡失败',
  `payid` varchar(225) NOT NULL COMMENT '第三方支付平台id',
  `paytype` varchar(255) DEFAULT NULL COMMENT '支付方式',
  `ctime` int(225) NOT NULL COMMENT '下单日期',
  `odate` varchar(100) NOT NULL COMMENT '订单日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ys_order
-- ----------------------------

-- ----------------------------
-- Table structure for `ys_yclass`
-- ----------------------------
DROP TABLE IF EXISTS `ys_yclass`;
CREATE TABLE `ys_yclass` (
  `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `type` int(1) DEFAULT '1' COMMENT '手工充值 1  自动发卡 2',
  `name` varchar(100) DEFAULT NULL COMMENT '分类名称',
  `ord` int(100) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ys_yclass
-- ----------------------------
