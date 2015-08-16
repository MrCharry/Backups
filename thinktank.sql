-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.20 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 think_tank 的数据库结构
CREATE DATABASE IF NOT EXISTS `think_tank` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `think_tank`;


-- 导出  表 think_tank.think_tank_experience 结构
CREATE TABLE IF NOT EXISTS `think_tank_experience` (
  `exp_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `think_name` varchar(128) DEFAULT NULL,
  `think_detail` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `FK_THINK_TA_REFERENCE_THINK_TA` (`res_id`),
  CONSTRAINT `FK_THINK_TA_REFERENCE_THINK_TA` FOREIGN KEY (`res_id`) REFERENCES `think_tank_resume` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_paper 结构
CREATE TABLE IF NOT EXISTS `think_tank_paper` (
  `id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `think_paper` varchar(64) DEFAULT NULL,
  `think_pubtime` date DEFAULT NULL,
  `think_abstract` text,
  `think_body_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_TIHINK_T_REFERENCE_THINK_TA` (`res_id`),
  CONSTRAINT `FK_TIHINK_T_REFERENCE_THINK_TA` FOREIGN KEY (`res_id`) REFERENCES `think_tank_resume` (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_resume 结构
CREATE TABLE IF NOT EXISTS `think_tank_resume` (
  `res_id` int(11) NOT NULL,
  `think_name` varchar(64) DEFAULT NULL,
  `think_school` varchar(64) DEFAULT NULL,
  `think_avatar_url` varchar(255) DEFAULT NULL,
  `think_title` text,
  `think_introduction` text,
  `think_email` text,
  `think_phone` varchar(32) DEFAULT NULL,
  `think_address` varchar(128) DEFAULT NULL,
  `think_keyword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_thinker 结构
CREATE TABLE IF NOT EXISTS `think_tank_thinker` (
  `thinker_id` int(11) NOT NULL AUTO_INCREMENT,
  `thinker_name` varchar(128) NOT NULL DEFAULT '0',
  `thinker_workspace` varchar(128) NOT NULL DEFAULT '0',
  `thinker_title` varchar(128) NOT NULL DEFAULT '0',
  `thinker_photo_url` varchar(256) DEFAULT '0',
  `thinker_description` text NOT NULL,
  `thinker_email` varchar(128) NOT NULL,
  `thinker_phone` varchar(128) NOT NULL,
  `thinker_address` varchar(128) DEFAULT NULL,
  `keyword` varchar(128) DEFAULT NULL,
  KEY `thinker_id` (`thinker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_user 结构
CREATE TABLE IF NOT EXISTS `think_tank_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(200) DEFAULT '0',
  `user_password` varchar(200) DEFAULT '0',
  `user_name` varchar(200) DEFAULT '0',
  `user_phone` varchar(200) DEFAULT '0',
  `user_register_time` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='用户基本信息表';

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_user_bookmark 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_bookmark` (
  `bookmark_id` int(11) NOT NULL AUTO_INCREMENT,
  `thinker_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bookmark_time` datetime DEFAULT NULL,
  KEY `favorite_id` (`bookmark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户收藏夹';

-- 数据导出被取消选择。


-- 导出  表 think_tank.think_tank_user_search 结构
CREATE TABLE IF NOT EXISTS `think_tank_user_search` (
  `search_id` int(11) NOT NULL AUTO_INCREMENT,
  `search_keyword` varchar(50) DEFAULT NULL,
  `search_time` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  KEY `search_id` (`search_id`),
  KEY `search_user_id` (`user_id`),
  CONSTRAINT `search_user_id` FOREIGN KEY (`user_id`) REFERENCES `think_tank_user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户搜索记录';

-- 数据导出被取消选择。
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
