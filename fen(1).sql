-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?06 �?27 �?14:28
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
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `haoyou`
--

INSERT INTO `haoyou` (`id`, `uid`, `fid`, `tm`) VALUES
(9, 1, 0, 1466974423),
(10, 0, 1, 1466974423),
(11, 1, 8, 1466974429),
(12, 8, 1, 1466974429);

-- --------------------------------------------------------

--
-- 表的结构 `jifen`
--

CREATE TABLE IF NOT EXISTS `jifen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `jifen` int(11) NOT NULL,
  `des` int(11) NOT NULL COMMENT '基础分 收到赠送的 签到的 答题和调查的 还有完善资料的',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `jifengzengsong`
--

CREATE TABLE IF NOT EXISTS `jifengzengsong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `fenshu` int(11) NOT NULL,
  `tm` int(11) NOT NULL COMMENT '时间戳',
  PRIMARY KEY (`id`),
  KEY `from` (`from`),
  KEY `to` (`to`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jifengzengsong`
--

INSERT INTO `jifengzengsong` (`id`, `from`, `to`, `fenshu`, `tm`) VALUES
(1, 8, 1, 5, 0),
(2, 1, 2, 5, 0);

-- --------------------------------------------------------

--
-- 表的结构 `qiandao`
--

CREATE TABLE IF NOT EXISTS `qiandao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tm` int(11) NOT NULL COMMENT '签到时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_da`
--

CREATE TABLE IF NOT EXISTS `s_da` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(11) NOT NULL COMMENT 'diaocha or zhishi',
  `da` text NOT NULL,
  `fen` int(11) NOT NULL DEFAULT '0' COMMENT '分数',
  `tm` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `s_da`
--

INSERT INTO `s_da` (`id`, `uid`, `type`, `da`, `fen`, `tm`) VALUES
(13, 1, 'diaocha', '{"2":"C","1":"C"}', 10, 1466952462),
(12, 1, 'zhishi', '{"1":"B","2":"B"}', 5, 1466951372);

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
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `s_diaocha`
--

INSERT INTO `s_diaocha` (`id`, `title`, `des`, `optionA`, `optionB`, `optionC`, `optionD`, `sort`) VALUES
(1, '你喜欢什么颜色', NULL, '红色', '绿色', '黄色', '白色', 2),
(2, '哪个语言是最好的语言', 'php', 'c', 'c++', 'java', 'perl', 3);

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
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `s_zhishi`
--

INSERT INTO `s_zhishi` (`id`, `title`, `des`, `optionA`, `optionB`, `optionC`, `optionD`, `da`, `sort`) VALUES
(1, '你喜欢什么颜色', NULL, '红色', '绿色', '黄色', '', 'B', 2),
(2, '哪个语言是最好的语言', 'php', 'c', 'c++', 'java', 'perl', 'A', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '姓名',
  `headimg` varchar(128) DEFAULT NULL,
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
  `send` int(11) NOT NULL DEFAULT '0' COMMENT '积分赠送次数',
  `received` int(11) NOT NULL DEFAULT '0' COMMENT '积分接收次数',
  PRIMARY KEY (`uid`),
  KEY `sort` (`sort`),
  KEY `send` (`send`),
  KEY `received` (`received`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `name`, `headimg`, `mobile`, `password`, `gender`, `company`, `title`, `weixin`, `createAt`, `regAt`, `active`, `sort`, `send`, `received`) VALUES
(1, '11', '/upload/201606/27/7fcc722e3dafda1ffbc3e7d4bdc44622.jpg', '12311111111', '202cb962ac59075b964b07152d234b70', 0, '22', '33', '44', 1466574836, 0, 1, 1, 3, 0),
(2, '李四3', '/upload/201606/27/34fdcd3fa4b122f8b86d972c1ac1dd1d.jpg', '13911111111', 'sdfsdfsdf', 1, '腾讯3', '经理3', '3', 1466574836, 0, 1, 1, 1, 1),
(8, '112', '', '15952890552', NULL, 1, '12', '12', '12', 1466593370, 0, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
