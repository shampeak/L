# Using DBDriver

本文档将提供DBDriver的详细使用方法以及相应的使用结果。以lut数据库中的user为例

表结构与插入语句：

```
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `mobile` varchar(64) DEFAULT NULL,
  `accessToken` varchar(64) NOT NULL DEFAULT 'accessToken',
  `createAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updateAt` int(11) DEFAULT NULL,
  `expire` int(11) NOT NULL DEFAULT '0',
  `nickName` varchar(128) DEFAULT NULL,
  `trueName` varchar(128) DEFAULT NULL,
  `birthday` varchar(128) DEFAULT NULL,
  `gender` varchar(128) DEFAULT NULL,
  `signer` varchar(128) DEFAULT NULL,
  `zone` varchar(128) DEFAULT NULL,
  `addr` varchar(128) DEFAULT NULL,
  `gravatar` varchar(128) DEFAULT NULL,
  `height` varchar(16) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `des` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;
```

--
-- 转存表中的数据 `user`
--
```
INSERT INTO `user` (`userId`, `login`, `password`, `email`, `mobile`, `accessToken`, `createAt`, `updateAt`, `expire`, `nickName`, `trueName`, `birthday`, `gender`, `signer`, `zone`, `addr`, `gravatar`, `height`, `active`, `sort`, `des`) VALUES
(1, 'irones', '12345678', NULL, '13673764379', 'accessToken', NULL, 1458702747, 0, 'wwwww', '4324', '2014-01-10', '女', '0', '0', NULL, 'http://api.so/U/v/201603/11/0a05b10f77d53c0a6cd36068a19da630.txt', '30cm', 1, 0, '123'),
(2, '13673764379', '25F9E794323B453885F5181F1B624D0B', NULL, '13673764379', 'accessToken', '2016-04-14 10:47:54', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://api.guangjuli.net/U/v/201605/06/049c6cb66adff88f9a2fc308ae72b37f.png', NULL, 0, 0, NULL),
(3, '13552099798', 'E10ADC3949BA59ABBE56E057F20F883E', NULL, '13552099798', 'accessToken', '2016-05-05 09:15:13', 1462497474, 0, 'look', NULL, '1900年-01月-01日', '男', NULL, NULL, NULL, NULL, '身高', 0, 0, NULL),
(4, '18801215774', '819B85FBE2D25B5B8A0EF2A440F41C45', NULL, '18801215774', 'accessToken', '2016-04-25 17:04:51', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL),
(5, '13716718251', '25F9E794323B453885F5181F1B624D0B', NULL, '13716718251', 'accessToken', '2016-04-27 17:21:02', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL),
(6, '18630112805', '4561B3CC2AA6037CE5C01A7C11893B8F', NULL, '18630112805', 'accessToken', '2016-04-25 10:44:41', 1461638912, 0, 'feiniao', NULL, '1984年-02月-15日', '男', NULL, NULL, NULL, 'http://api.guangjuli.net/U/v/201604/26/1e33636e4756536e1be061d267580d10.png', '172cm', 0, 0, NULL),
(7, '18500299812', '5FFB991C0D11F673DDEB26B493D9DE52', NULL, '18500299812', 'accessToken', '2016-04-24 18:51:26', 1461582539, 0, '糖专家哥哥', NULL, '1974年-01月-12日', '男', NULL, NULL, NULL, NULL, '170cm', 0, 0, NULL),
(8, '18600768064', '25f9e794323b453885f5181f1b624d0b', '', '18600768064', 'accessToken', '2016-04-14 11:56:15', 1463362719, 0, '七七', '', '出生日期', '性别', '', '', '', '', '身高', 0, 0, ''),
(9, '13811069199', 'E10ADC3949BA59ABBE56E057F20F883E', NULL, '13811069199', 'accessToken', '2016-04-19 16:36:56', 1462774243, 0, '', NULL, '1900年-01月-01日', '男', NULL, NULL, NULL, 'http://api.guangjuli.net/U/v/201605/04/dd61df324e71ba67eb97fb46ca90f74c.png', '75cm', 0, 0, NULL),
(10, '13693162698', 'e10adc3949ba59abbe56e057f20f883e', '', '13693162698', 'accessToken', '2016-04-14 10:31:57', 1463478589, 0, 'Werrt ', '', '1990年-07月-13日', '女', '', '', '', 'http://api.guangjuli.net/U/v/201605/17/e004822932a4c336c50b340ae3e32751.png', '57cm', 0, 0, '');
```



## Before Usage
	include("../vendor/autoload.php");

configs信息：

```
$config = [
    'hostname'      => '127.0.0.1',         //服务器地址
    'port'          => '3306',              //端口
    'username'      => 'root',              //用户名
    'password'      => 'root',              //密码
    'database'      => 'lut',                //数据库名
    'charset'       => 'utf8',              //字符集设置
    'pconnect'      => 1,                   //1  长连接模式 0  短连接
    'quiet'         => 0,                   //安静模式 生产环境的
    'slowquery'     => 1,                   //对慢查询记录
];
```

## Basic Usage

### 实例化一个数据驱动：
	$db = new Lulu\db\db($config);

### getAll
```
$sql = "select * from user WHERE userId<3";
$res = $db->getAll($sql);
```
getAll函数以二维数组的形式返回sql语句读取的所有值

```
Array
(
    [0] => Array
        (
            [userId] => 1
            [login] => irones
            [password] => 12345678
            [email] => 
            [mobile] => 13673764379
            [accessToken] => accessToken
            [createAt] => 
            [updateAt] => 1458702747
            [expire] => 0
            [nickName] => wwwww
            [trueName] => 4324
            [birthday] => 2014-01-10
            [gender] => 女
            [signer] => 0
            [zone] => 0
            [addr] => 
            [gravatar] => http://api.so/U/v/201603/11/0a05b10f77d53c0a6cd36068a19da630.txt
            [height] => 30cm
            [active] => 1
            [sort] => 0
            [des] => 123
        )

    [1] => Array
        (
            [userId] => 2
            [login] => 13673764379
            [password] => 25F9E794323B453885F5181F1B624D0B
            [email] => 
            [mobile] => 13673764379
            [accessToken] => accessToken
            [createAt] => 2016-04-14 10:47:54
            [updateAt] => 
            [expire] => 0
            [nickName] => 
            [trueName] => 
            [birthday] => 
            [gender] => 
            [signer] => 
            [zone] => 
            [addr] => 
            [gravatar] => http://api.guangjuli.net/U/v/201605/06/049c6cb66adff88f9a2fc308ae72b37f.png
            [height] => 
            [active] => 0
            [sort] => 0
            [des] => 
        )

)
```

### getRow

```
$sql = "select * from user ";
$res = $db->getRow($sql);
```
getRow函数以一维数组的形式返回sql语句读取的所有值的第一行

```
Array
(
    [userId] => 1
    [login] => irones
    [password] => 12345678
    [email] => 
    [mobile] => 13673764379
    [accessToken] => accessToken
    [createAt] => 
    [updateAt] => 1458702747
    [expire] => 0
    [nickName] => wwwww
    [trueName] => 4324
    [birthday] => 2014-01-10
    [gender] => 女
    [signer] => 0
    [zone] => 0
    [addr] => 
    [gravatar] => http://api.so/U/v/201603/11/0a05b10f77d53c0a6cd36068a19da630.txt
    [height] => 30cm
    [active] => 1
    [sort] => 0
    [des] => 123
)
```

### getCol
```
$sql = "select login from user ";
$res = $db->getCol($sql);
```
getCol函数以一维数组的形式返回sql语句读取的所有值的第一列

```
Array
(
    [0] => irones
    [1] => 13673764379
    [2] => 13552099798
    [3] => 18801215774
    [4] => 13716718251
    [5] => 18630112805
    [6] => 18500299812
    [7] => 18600768064
    [8] => 13811069199
    [9] => 13693162698
)
```

### getMap
```
$sql = "select login,password from user ";
$res = $db->getMap($sql);
```
getMap函数以一维数组的形式返回sql语句读取所有值的前两列映射

```
Array
(
    [irones] => 12345678
    [13673764379] => 25F9E794323B453885F5181F1B624D0B
    [13552099798] => E10ADC3949BA59ABBE56E057F20F883E
    [18801215774] => 819B85FBE2D25B5B8A0EF2A440F41C45
    [13716718251] => 25F9E794323B453885F5181F1B624D0B
    [18630112805] => 4561B3CC2AA6037CE5C01A7C11893B8F
    [18500299812] => 5FFB991C0D11F673DDEB26B493D9DE52
    [18600768064] => 25f9e794323b453885f5181f1b624d0b
    [13811069199] => E10ADC3949BA59ABBE56E057F20F883E
    [13693162698] => e10adc3949ba59abbe56e057f20f883e
)
```

### getOne
```
$sql = "select truename from user where userId=1 ";
$res = $db->getOne($sql);
```
getOne函数以数值的形式返回sql语句读取值的第一个数

```
4324
```