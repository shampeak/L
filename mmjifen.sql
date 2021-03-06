-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016 年 07 月 15 日 13:57
-- 服务器版本: 5.6.23-log
-- PHP 版本: 5.6.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mmjifen`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `jifengzengsong`
--

INSERT INTO `jifengzengsong` (`id`, `from`, `to`, `fenshu`, `tm`) VALUES
(3, 29, 23, 5, 1467128474);

-- --------------------------------------------------------

--
-- 表的结构 `qiandao`
--

CREATE TABLE IF NOT EXISTS `qiandao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tm` varchar(64) NOT NULL COMMENT '签到时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `qiandao`
--

INSERT INTO `qiandao` (`id`, `uid`, `tm`) VALUES
(1, 87, '2016-07-07 11:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `remote`
--

CREATE TABLE IF NOT EXISTS `remote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `deny` int(11) NOT NULL DEFAULT '0',
  `save` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

--
-- 转存表中的数据 `remote`
--

INSERT INTO `remote` (`id`, `rid`, `deny`, `save`) VALUES
(89, 58, 0, 0),
(88, 57, 0, 0),
(87, 56, 0, 0),
(86, 55, 0, 0),
(85, 54, 0, 0),
(84, 53, 0, 0),
(83, 52, 0, 0),
(82, 51, 0, 0),
(81, 50, 0, 0),
(80, 49, 0, 0),
(79, 48, 0, 0),
(78, 47, 0, 0),
(77, 46, 0, 0),
(76, 45, 0, 0),
(75, 44, 0, 0),
(74, 43, 0, 0),
(73, 42, 0, 0),
(72, 41, 0, 0),
(71, 40, 0, 0),
(70, 39, 0, 0),
(69, 38, 0, 0),
(68, 37, 0, 0),
(67, 36, 0, 0),
(66, 35, 0, 0),
(65, 34, 0, 0),
(64, 33, 0, 0),
(63, 32, 0, 0),
(62, 31, 0, 0),
(61, 30, 0, 0),
(60, 29, 0, 0),
(31, 59, 0, 0),
(32, 60, 0, 0),
(33, 61, 0, 0),
(34, 62, 0, 0),
(35, 63, 0, 0),
(36, 64, 0, 0),
(37, 65, 0, 0),
(38, 66, 0, 0),
(39, 67, 0, 0),
(40, 68, 0, 0),
(41, 69, 0, 0),
(42, 70, 0, 0),
(43, 71, 0, 0),
(44, 72, 0, 0),
(45, 73, 0, 0),
(46, 74, 0, 0),
(47, 75, 0, 0),
(48, 76, 0, 0),
(49, 79, 0, 0),
(50, 80, 0, 0),
(51, 81, 0, 0),
(52, 82, 0, 0),
(53, 83, 0, 0),
(54, 84, 0, 0),
(55, 85, 0, 0),
(56, 86, 0, 1),
(57, 87, 0, 1),
(58, 88, 0, 0),
(59, 89, 0, 0),
(90, 90, 0, 0),
(91, 91, 0, 0),
(92, 92, 0, 0),
(93, 93, 0, 0);

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
  `mima` varchar(64) DEFAULT NULL,
  `code` varchar(64) DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `name`, `mima`, `code`, `headimg`, `mobile`, `password`, `gender`, `company`, `title`, `weixin`, `createAt`, `regAt`, `active`, `sort`, `send`, `received`) VALUES
(43, '雒珊珊', '5525175', '7794674', NULL, '18519330917', NULL, NULL, '市场主管', '市场主管', NULL, 1467712717, 0, 1, 0, 0, 0),
(12, ' 游晓峰', 'you4045', '1005367', NULL, '13513644045', NULL, 1, '', '', '', 1467066948, 0, 1, 0, 0, 0),
(87, '测试', '123', '123', '/upload/201607/07/b4189e598f2a971a7b88c4571d30e7db.jpg', '13811069199', NULL, 1, 'h s j d j', 'd h d j j d', 'hshdjd', 1467860468, 0, 1, 0, 0, 0),
(25, '陈合喜', '8994143', '9043818', NULL, '13255316043', NULL, NULL, 'SEO', 'SEO', NULL, 1467110969, 0, 1, 0, 0, 0),
(45, 'leibo@netconcepts.cn', '5842386', '1536983', NULL, '13827292981', NULL, NULL, '大大大是', '大大大是', NULL, 1467712721, 0, 1, 0, 0, 0),
(32, '洪永志', '8239251', '3310686', NULL, '18401482381', NULL, NULL, '员工', '员工', NULL, 1467192091, 0, 1, 0, 0, 0),
(33, '封小洋', '5488563', '4273689', NULL, '15821162195', NULL, NULL, 'sem/seo', 'sem/seo', NULL, 1467712668, 0, 1, 0, 0, 0),
(34, '刘海政', '4940371', '8590972', NULL, '13466589581', NULL, NULL, '营销策划', '营销策划', NULL, 1467712668, 0, 1, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
