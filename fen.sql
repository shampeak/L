-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016 �?07 �?21 �?18:13
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
  `uid` int(11) NOT NULL DEFAULT '0',
  `tm` varchar(64) NOT NULL COMMENT '签到时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qiandao`
--

INSERT INTO `qiandao` (`id`, `uid`, `tm`) VALUES
(1, 48, '2016-07-07 10:00:00'),
(2, 48, '2016-07-19 16:00:00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- 转存表中的数据 `remote`
--

INSERT INTO `remote` (`id`, `rid`, `deny`, `save`) VALUES
(62, 29, 0, 0),
(63, 30, 0, 0),
(64, 31, 0, 0),
(65, 32, 0, 0),
(66, 33, 0, 0),
(67, 34, 0, 0),
(68, 35, 0, 0),
(69, 36, 0, 0),
(70, 37, 0, 0),
(71, 38, 0, 0),
(72, 39, 0, 0),
(73, 40, 0, 0),
(74, 41, 0, 0),
(75, 42, 0, 0),
(76, 43, 0, 0),
(77, 44, 0, 0),
(78, 45, 0, 0),
(79, 46, 0, 0),
(80, 47, 0, 0),
(81, 48, 0, 0),
(82, 49, 0, 0),
(83, 50, 0, 0),
(84, 51, 0, 0),
(85, 52, 0, 0),
(86, 53, 0, 0),
(87, 54, 0, 0),
(88, 55, 0, 0),
(89, 56, 0, 0),
(90, 57, 0, 0),
(91, 58, 0, 0),
(92, 59, 0, 0),
(93, 60, 0, 0),
(94, 61, 0, 0),
(95, 62, 0, 0),
(96, 63, 0, 0),
(97, 64, 0, 0),
(98, 65, 0, 0),
(99, 66, 0, 0),
(100, 67, 0, 0),
(101, 68, 0, 0),
(102, 69, 0, 0),
(103, 70, 0, 0),
(104, 71, 0, 0),
(105, 72, 0, 0),
(106, 73, 0, 0),
(107, 74, 0, 0),
(108, 75, 0, 0),
(109, 76, 0, 0),
(110, 79, 0, 0),
(111, 80, 0, 0),
(112, 81, 0, 0),
(113, 82, 0, 0),
(114, 83, 0, 0),
(115, 84, 0, 0),
(116, 85, 0, 0),
(117, 86, 0, 0),
(118, 87, 0, 0),
(119, 88, 0, 0),
(120, 89, 0, 0),
(121, 90, 0, 0),
(122, 91, 0, 0),
(123, 92, 0, 0),
(124, 93, 0, 0),
(125, 94, 0, 0),
(126, 95, 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `s_da`
--

INSERT INTO `s_da` (`id`, `uid`, `type`, `da`, `fen`, `tm`) VALUES
(17, 48, 'zhishi', '{"1":"A","7":"B","2":"B","4":"B","8":"B","6":"A","5":"B"}', 0, 1469081619);

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
  `optionE` varchar(128) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `s_diaocha`
--

INSERT INTO `s_diaocha` (`id`, `title`, `des`, `optionA`, `optionB`, `optionC`, `optionD`, `optionE`, `sort`) VALUES
(1, '你喜欢什么颜色', NULL, '红色', '绿色', '黄色', '白色', NULL, 2),
(2, '哪个语言是最好的语言', 'php', 'c', 'c++', 'java', 'perl', '123213', 3);

-- --------------------------------------------------------

--
-- 表的结构 `s_zhishi`
--

CREATE TABLE IF NOT EXISTS `s_zhishi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jiab` varchar(128) DEFAULT NULL,
  `jiatitle` varchar(128) DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `s_zhishi`
--

INSERT INTO `s_zhishi` (`id`, `jiab`, `jiatitle`, `title`, `des`, `optionA`, `optionB`, `optionC`, `optionD`, `da`, `sort`) VALUES
(1, '1', '1', '你喜欢什么颜色', NULL, '红色', '绿色', '黄色', '', 'B', 2),
(2, '1', '2', '哪个语言是最好的语言', 'php', 'c', 'c++', 'java', 'perl', 'A', 0),
(4, '2', '3', 'grace/1231231123', NULL, '1', '1', '1', '1', 'A', 1),
(5, 'zac', '1', '1', NULL, '1', '1', '1', '1', 'A', 0),
(6, 'zac', '1', '1', NULL, '1', '1', '1', '1', 'A', 0),
(7, '1', '1', '1', NULL, '1', '1', '1', '1', 'A', 0),
(8, 'zac', '2', '2', NULL, '2', '2', '2', '2', 'A', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '姓名',
  `headimg` varchar(128) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL COMMENT '手机号',
  `mima` varchar(64) DEFAULT NULL,
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
  `code` varchar(64) DEFAULT NULL,
  `fen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `sort` (`sort`),
  KEY `send` (`send`),
  KEY `received` (`received`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `name`, `headimg`, `mobile`, `mima`, `password`, `gender`, `company`, `title`, `weixin`, `createAt`, `regAt`, `active`, `sort`, `send`, `received`, `code`, `fen`) VALUES
(58, '洪永志', NULL, '18401482381', NULL, NULL, NULL, '员工', '员工', NULL, 1467269926, 0, 1, 0, 0, 0, '6956922', 0),
(56, 'lipeng', NULL, '13800001111', NULL, '2025553', NULL, '是加', '是加', NULL, 1467110518, 0, 1, 0, 0, 0, '8161892', 0),
(57, '雒珊珊', NULL, '18519330917', NULL, '7439507', NULL, '市场主管', '市场主管', NULL, 1467110518, 0, 1, 0, 0, 0, '1893988', 0),
(55, '测试', NULL, '18666666666', NULL, '6225314', NULL, '好', '好', NULL, 1467110518, 0, 1, 0, 0, 0, '6769205', 0),
(53, '微信', NULL, '15910801822', NULL, '2771538', NULL, 'PHP', 'PHP', NULL, 1467110518, 0, 1, 0, 0, 0, '7529839', 0),
(54, 'leibo@netconcepts.cn', NULL, '13827292981', NULL, '2156846', NULL, '大大大是', '大大大是', NULL, 1467110518, 0, 1, 0, 0, 0, '4139539', 0),
(51, '陈合喜', NULL, '13255316043', NULL, '6244845', NULL, 'SEO', 'SEO', NULL, 1467110518, 0, 1, 0, 0, 0, '7787000', 0),
(52, 'mandy', NULL, '18601212206', NULL, '9631890', NULL, 'Marketing Director', 'Marketing Director', NULL, 1467110518, 0, 1, 0, 0, 0, '9474826', 0),
(50, '游晓峰', NULL, '13513644045', NULL, '4728461', NULL, '总经理', '总经理', NULL, 1467110518, 0, 1, 0, 0, 0, '7778862', 0),
(48, '123111', '/upload/201607/20/a9afee00d58da052e54c7911ef9c03a5.jpg', '13811069199', '123', '123', 0, '123', '123', '122121', 1467110518, 0, 1, 0, 0, 0, '4884982', 34),
(49, '新年', NULL, '13789002222', NULL, '3589680', NULL, '主管', '主管', NULL, 1467110518, 0, 1, 0, 0, 0, '6707356', 0);

-- --------------------------------------------------------

--
-- 表的结构 `xianchang`
--

CREATE TABLE IF NOT EXISTS `xianchang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) NOT NULL DEFAULT '0',
  `timeb` varchar(16) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `timee` varchar(16) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `title` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nr` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=227 ;

--
-- 转存表中的数据 `xianchang`
--

INSERT INTO `xianchang` (`id`, `sort`, `timeb`, `timee`, `title`, `nr`) VALUES
(213, 0, '9:00', '9:10', '开场', ''),
(214, 1, '9:10', '9:50', '演讲主题：XXXXXX', '渠成  Netconcepts 中国创始人兼CEO'),
(215, 2, '9:50', '10:30', '演讲主题：XXXX ', 'Zac  知名网络营销专家、《SEO实战密码》作者'),
(216, 3, '10:30', '11:00', '颁奖', ''),
(217, 4, '11:00', '11:40', '演讲主题：XXXX', '刘禾'),
(218, 5, '11:40', '12:00 ', '抽奖', ''),
(219, 6, '12:00', '14:00', '午餐', ''),
(220, 7, '14:00', '14:45', '主题演讲：XXXXXX  ', '曹继忠   58到家在线电商总经理'),
(221, 8, '14:45', '15:30', '主题演讲：XXXXXX', '宋星  知名数据分析专家、网站分析在中国创始人'),
(222, 9, '15:30', '15:50 ', ' 抽奖', ''),
(223, 10, '15:50', '16:30', '主题演讲：XXXXXX', '朱定平 合生元品牌事业部总经理'),
(224, 11, '16:30', '17:10', '主题演讲：XXXXXX', '郭庄  Netconcepts副总裁兼首席咨询师'),
(225, 12, '17:10', '17:50', '主题演讲：XXXXXX', '待定'),
(226, 13, '17:50', '', '会议结束', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
