-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016 �?06 �?22 �?20:04
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fen`
--

-- --------------------------------------------------------

--
-- 表的结构 `haoyou`
--

CREATE TABLE IF NOT EXISTS `haoyou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `tm` int(11) NOT NULL COMMENT '请求和回复',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `jifen`
--

CREATE TABLE IF NOT EXISTS `jifen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `jifen` int(11) NOT NULL,
  `des` int(11) NOT NULL COMMENT '基础分 收到赠送的 签到的 答题和调查的 还有完善资料的',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `jifengzengsong`
--

CREATE TABLE IF NOT EXISTS `jifengzengsong` (
  `id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `fenshu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `qiandao`
--

CREATE TABLE IF NOT EXISTS `qiandao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tm` int(11) NOT NULL COMMENT '签到时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_da`
--

CREATE TABLE IF NOT EXISTS `s_da` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'diaocha or zhishi',
  `da` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_diaocha`
--

CREATE TABLE IF NOT EXISTS `s_diaocha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `des` varchar(256) DEFAULT NULL,
  `optionA` varchar(128) NOT NULL,
  `optionB` varchar(128) DEFAULT NULL,
  `optionC` varchar(128) DEFAULT NULL,
  `optionD` varchar(128) DEFAULT NULL,
  `da` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `s_diaocha`
--

INSERT INTO `s_diaocha` (`id`, `title`, `des`, `optionA`, `optionB`, `optionC`, `optionD`, `da`) VALUES
(1, '你喜欢什么颜色', NULL, '红色', '绿色', '黄色', '白色', 'D'),
(2, '哪个语言是最好的语言', 'php', 'c', 'c++', 'java', 'perl', 'A');

-- --------------------------------------------------------

--
-- 表的结构 `s_zhishi`
--

CREATE TABLE IF NOT EXISTS `s_zhishi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `des` varchar(256) DEFAULT NULL,
  `optionA` varchar(128) NOT NULL,
  `optionB` varchar(128) DEFAULT NULL,
  `optionC` varchar(128) DEFAULT NULL,
  `optionD` varchar(128) DEFAULT NULL,
  `da` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '姓名',
  `mobile` varchar(32) DEFAULT NULL COMMENT '手机号',
  `password` varchar(64) DEFAULT NULL COMMENT '密码',
  `gender` int(2) DEFAULT NULL COMMENT '性别',
  `company` varchar(64) DEFAULT NULL COMMENT '公司',
  `title` varchar(64) DEFAULT NULL COMMENT '职位',
  `weixin` varchar(64) DEFAULT NULL COMMENT '微信号',
  `createAt` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `regAt` int(11) NOT NULL DEFAULT '0',
  `active` int(2) NOT NULL DEFAULT '1' COMMENT '是否有效',
  `sort` int(2) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `name`, `mobile`, `password`, `gender`, `company`, `title`, `weixin`, `createAt`, `regAt`, `active`, `sort`) VALUES
(1, '张三122', '12311111111', '阿什顿发松岛枫', 1, '百度122', '经理122', '131123123122', 1466574836, 0, 1, 0),
(2, '李四', '13911111111', 'sdfsdfsdf', 1, '腾讯', '经理', NULL, 1466574836, 0, 1, 0),
(8, '112', '15952890552', NULL, 1, '1', '1', '1', 1466593370, 0, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
