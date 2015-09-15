-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.6.19 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 think_tank 的数据库结构
CREATE DATABASE IF NOT EXISTS `think_tank` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `think_tank`;


-- 导出  表 think_tank.think_tank_admin 结构
CREATE TABLE IF NOT EXISTS `think_tank_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(64) NOT NULL,
  `admin_password` varchar(64) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '1' COMMENT '0：已删除，1：未删除',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_admin 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `think_tank_admin` DISABLE KEYS */;
INSERT INTO `think_tank_admin` (`admin_id`, `admin_name`, `admin_password`, `deleted`) VALUES
	(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
	(7, 'HuangPei', 'f379eaf3c831b04de153469d1bec345e', 1),
	(8, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
	(9, 'Charry', '96e79218965eb72c92a549dd5a330112', 1);
/*!40000 ALTER TABLE `think_tank_admin` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_edit_experience 结构
CREATE TABLE IF NOT EXISTS `think_tank_edit_experience` (
  `edit_exp_id` int(10) NOT NULL AUTO_INCREMENT,
  `edit_thinker_id` int(10) NOT NULL DEFAULT '0',
  `edit_exp_start_time` date DEFAULT '0000-00-00',
  `edit_exp_end_time` date DEFAULT '0000-00-00',
  `edit_exp_name` varchar(128) DEFAULT NULL,
  `edit_exp_description` text,
  PRIMARY KEY (`edit_exp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_edit_experience 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `think_tank_edit_experience` DISABLE KEYS */;
INSERT INTO `think_tank_edit_experience` (`edit_exp_id`, `edit_thinker_id`, `edit_exp_start_time`, `edit_exp_end_time`, `edit_exp_name`, `edit_exp_description`) VALUES
	(1, 1, '0000-00-00', '0000-00-00', 'aaaaaaa', 'aaaaaaaaa'),
	(2, 0, '0000-00-00', '0000-00-00', NULL, NULL),
	(3, 0, '2011-11-01', '0000-00-00', 'aaaaa', 'aaaa'),
	(4, 0, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `think_tank_edit_experience` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_edit_paper 结构
CREATE TABLE IF NOT EXISTS `think_tank_edit_paper` (
  `edit_paper_id` int(10) NOT NULL AUTO_INCREMENT,
  `edit_thinker_id` int(10) NOT NULL DEFAULT '0',
  `edit_paper_title` varchar(64) DEFAULT NULL,
  `edit_paper_pubtime` datetime DEFAULT NULL,
  `edit_paper_abstract` text,
  `edit_paper_body_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`edit_paper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_edit_paper 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `think_tank_edit_paper` DISABLE KEYS */;
INSERT INTO `think_tank_edit_paper` (`edit_paper_id`, `edit_thinker_id`, `edit_paper_title`, `edit_paper_pubtime`, `edit_paper_abstract`, `edit_paper_body_url`) VALUES
	(1, 1, 'aaaaaa', '2015-08-22 18:06:35', 'aaaaaaaaa', 'aaaaaaaaaaaa');
/*!40000 ALTER TABLE `think_tank_edit_paper` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_edit_thinker 结构
CREATE TABLE IF NOT EXISTS `think_tank_edit_thinker` (
  `edit_thinker_id` int(10) NOT NULL AUTO_INCREMENT,
  `thinker_id` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `edit_thinker_name` varchar(128) DEFAULT NULL,
  `edit_thinker_title` varchar(128) DEFAULT NULL,
  `edit_thinker_workspace` varchar(128) DEFAULT NULL,
  `edit_thinker_photo_url` varchar(128) DEFAULT NULL,
  `edit_thinker_email` varchar(128) DEFAULT NULL,
  `edit_thinker_description` varchar(128) DEFAULT NULL,
  `edit_thinker_phone` varchar(128) DEFAULT NULL,
  `edit_thinker_keyword` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`edit_thinker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='user编辑thinker的操作中间表';

-- 正在导出表  think_tank.think_tank_edit_thinker 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `think_tank_edit_thinker` DISABLE KEYS */;
INSERT INTO `think_tank_edit_thinker` (`edit_thinker_id`, `thinker_id`, `edit_thinker_name`, `edit_thinker_title`, `edit_thinker_workspace`, `edit_thinker_photo_url`, `edit_thinker_email`, `edit_thinker_description`, `edit_thinker_phone`, `edit_thinker_keyword`) VALUES
	(1, 0000000002, 'name1', 'title1', 'work1', 'url1', '1112@qq.com', 'des1', 'phone1', 'key1'),
	(2, 0000000000, 'aaaaaaaa', 'aaaaaaaaaaaaaa', NULL, NULL, '', ' aaaaaaaaaaaaaaa', '', 'aaaaaaaaaaaaaaaaaa'),
	(3, 0000000000, '', '', NULL, NULL, '', ' ', '', ''),
	(4, 0000000000, '', '', NULL, NULL, '', ' ', '', '');
/*!40000 ALTER TABLE `think_tank_edit_thinker` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_experience 结构
CREATE TABLE IF NOT EXISTS `think_tank_experience` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `thinker_id` int(11) NOT NULL DEFAULT '0',
  `exp_start_time` date NOT NULL DEFAULT '0000-00-00',
  `exp_end_time` date NOT NULL DEFAULT '0000-00-00',
  `exp_name` varchar(128) NOT NULL DEFAULT '0',
  `exp_description` text NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_experience 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `think_tank_experience` DISABLE KEYS */;
INSERT INTO `think_tank_experience` (`exp_id`, `thinker_id`, `exp_start_time`, `exp_end_time`, `exp_name`, `exp_description`) VALUES
	(1, 1, '0000-00-00', '0000-00-00', 'aaaaaaa', 'aaaaaaaaa');
/*!40000 ALTER TABLE `think_tank_experience` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_paper 结构
CREATE TABLE IF NOT EXISTS `think_tank_paper` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `thinker_id` int(11) NOT NULL,
  `paper_title` varchar(64) DEFAULT NULL,
  `paper_pubtime` date DEFAULT NULL,
  `paper_abstract` text,
  `paper_body_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_paper 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `think_tank_paper` DISABLE KEYS */;
INSERT INTO `think_tank_paper` (`paper_id`, `thinker_id`, `paper_title`, `paper_pubtime`, `paper_abstract`, `paper_body_url`) VALUES
	(1, 1, 'naaaa', '2015-08-22', 'aaaaaaaaa', 'aaaaaaaaaaaa');
/*!40000 ALTER TABLE `think_tank_paper` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_search_keyword 结构
CREATE TABLE IF NOT EXISTS `think_tank_search_keyword` (
  `search_keyword_id` int(10) NOT NULL AUTO_INCREMENT,
  `search_keyword` varchar(128) DEFAULT '0',
  PRIMARY KEY (`search_keyword_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='关键词记录表 ';

-- 正在导出表  think_tank.think_tank_search_keyword 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `think_tank_search_keyword` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_tank_search_keyword` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_thinker 结构
CREATE TABLE IF NOT EXISTS `think_tank_thinker` (
  `thinker_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '注意：thinker_id不能为0',
  `creator_id` int(11) NOT NULL DEFAULT '0',
  `thinker_create_time` date NOT NULL DEFAULT '0000-00-00',
  `thinker_name` varchar(128) NOT NULL DEFAULT '0',
  `thinker_workspace` varchar(128) DEFAULT NULL,
  `thinker_title` varchar(128) DEFAULT NULL,
  `thinker_photo_url` varchar(256) DEFAULT NULL,
  `thinker_description` text NOT NULL,
  `thinker_email` varchar(128) NOT NULL,
  `thinker_phone` varchar(128) NOT NULL,
  `thinker_address` varchar(128) DEFAULT NULL,
  `thinker_keyword` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`thinker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_thinker 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `think_tank_thinker` DISABLE KEYS */;
INSERT INTO `think_tank_thinker` (`thinker_id`, `creator_id`, `thinker_create_time`, `thinker_name`, `thinker_workspace`, `thinker_title`, `thinker_photo_url`, `thinker_description`, `thinker_email`, `thinker_phone`, `thinker_address`, `thinker_keyword`) VALUES
	(1, 2, '0000-00-00', 'name0', 'qqqq', 'wew2q', '/Public/images/photo1.png', 'w323', '2123', '21234', NULL, NULL),
	(2, 1, '0000-00-00', 'name1', 'work1', 'title1', '/Public/images/photo1.png', 'des1', '1112@qq.com', 'phone1', 'add1', 'key1');
/*!40000 ALTER TABLE `think_tank_thinker` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_user 结构
CREATE TABLE IF NOT EXISTS `think_tank_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(200) NOT NULL DEFAULT '0',
  `user_password` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- 正在导出表  think_tank.think_tank_user 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `think_tank_user` DISABLE KEYS */;
INSERT INTO `think_tank_user` (`user_id`, `user_email`, `user_password`) VALUES
	(2, '332937893@qq.com', '123'),
	(13, '123@qq.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
	(15, '1234@qq.com', 'aaaaaa'),
	(16, '12345@qq.com', 'aaaaaa'),
	(17, 'aaa@qq.com', '111111'),
	(18, 'aaaa@qq.com', '111111'),
	(20, 'aaaaa@qq.com', '111111'),
	(21, '123456@qq.com', 'aaaaaa'),
	(22, '4444@qq.com', 'aaaaaa');
/*!40000 ALTER TABLE `think_tank_user` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_user_bookmark 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_bookmark` (
  `user_bookmark_id` int(11) NOT NULL AUTO_INCREMENT,
  `thinker_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bookmark_time` datetime DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0' COMMENT '0：未删除，1：已删除',
  PRIMARY KEY (`user_bookmark_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户收藏夹';

-- 正在导出表  think_tank.think_tank_user_bookmark 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `think_tank_user_bookmark` DISABLE KEYS */;
INSERT INTO `think_tank_user_bookmark` (`user_bookmark_id`, `thinker_id`, `user_id`, `bookmark_time`, `deleted`) VALUES
	(1, 1, 2, '2015-08-09 16:35:18', 0),
	(2, 1, 2, '2015-08-09 16:44:43', 0),
	(3, 2, 2, '2015-09-08 17:46:53', 0);
/*!40000 ALTER TABLE `think_tank_user_bookmark` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_user_info 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_info` (
  `user_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user_photo_url` varchar(200) DEFAULT NULL,
  `user_name` varchar(200) NOT NULL DEFAULT '0',
  `user_phone` varchar(200) NOT NULL DEFAULT '0',
  `user_register_time` date NOT NULL DEFAULT '0000-00-00',
  `user_exp` int(20) NOT NULL DEFAULT '0',
  `user_status` int(1) NOT NULL DEFAULT '1',
  `user_last_login_time` date NOT NULL,
  PRIMARY KEY (`user_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='用户基本信息表';

-- 正在导出表  think_tank.think_tank_user_info 的数据：~11 rows (大约)
/*!40000 ALTER TABLE `think_tank_user_info` DISABLE KEYS */;
INSERT INTO `think_tank_user_info` (`user_info_id`, `user_id`, `user_photo_url`, `user_name`, `user_phone`, `user_register_time`, `user_exp`, `user_status`, `user_last_login_time`) VALUES
	(42, 2, '/Public/images/photo1.png', 'aaaaa', '12345678910', '2015-08-12', 0, 1, '2015-03-11'),
	(43, 20, NULL, 'bgbbb', '12345678910', '2015-08-12', 0, 1, '2012-12-30'),
	(44, 21, NULL, 'aaaaa', '12345678910', '0000-00-00', 0, 1, '2012-12-29'),
	(45, 22, '/Public/images/user/2015-08-13/_1439399732.jpg', 'hp', '12345678910', '0000-00-00', 0, 1, '0000-00-00'),
	(46, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(47, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(48, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(49, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(50, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(51, 0, NULL, '0', '0', '0000-00-00', 0, 1, '2015-08-20'),
	(52, 0, NULL, '0', '0', '0000-00-00', 1, 1, '2015-08-20');
/*!40000 ALTER TABLE `think_tank_user_info` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_user_search 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_search` (
  `search_id` int(11) NOT NULL AUTO_INCREMENT,
  `search_keyword` varchar(50) DEFAULT NULL,
  `search_time` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0' COMMENT '0：表示未删除，1：表示删除',
  PRIMARY KEY (`search_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户搜索记录';

-- 正在导出表  think_tank.think_tank_user_search 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `think_tank_user_search` DISABLE KEYS */;
INSERT INTO `think_tank_user_search` (`search_id`, `search_keyword`, `search_time`, `user_id`, `deleted`) VALUES
	(3, 'kkkk', '2015-08-09 16:35:02', 2, 0);
/*!40000 ALTER TABLE `think_tank_user_search` ENABLE KEYS */;


-- 导出  表 think_tank.think_tank_user_thinker 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_thinker` (
  `user_thinker_id` int(10) NOT NULL AUTO_INCREMENT,
  `edit_thinker_id` int(10) NOT NULL DEFAULT '0' COMMENT 'edit_thinker的ID',
  `thinker_status` int(1) NOT NULL DEFAULT '0' COMMENT '0：待验证，1：已验证，2：未通过，3：修改过',
  `thinker_edit_time` date DEFAULT NULL COMMENT '最近修改时间',
  `editor_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_thinker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='user对thinker的操作记录';

-- 正在导出表  think_tank.think_tank_user_thinker 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `think_tank_user_thinker` DISABLE KEYS */;
INSERT INTO `think_tank_user_thinker` (`user_thinker_id`, `edit_thinker_id`, `thinker_status`, `thinker_edit_time`, `editor_id`) VALUES
	(2, 1, 1, '2015-08-09', 2),
	(4, 1, 1, '2015-08-10', 2),
	(5, 1, 1, '2015-08-22', 2);
/*!40000 ALTER TABLE `think_tank_user_thinker` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
