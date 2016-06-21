<?php
/**
 * Created by PhpStorm.
 * User: Zhousilu
 * Date: 2016/5/30
 * Time: 17:09
 */
header("Content-type: text/html; charset=utf-8");//解决中文显示乱码问题
include("../vendor/autoload.php");
set_time_limit(0);
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
//100,0000条数据的插入与新表的建立
function createRand(
    $len,
    $type)
{
    $rand='';
    if($type=='c')
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    else
        $chars = '0123456789';
    for($i=0;$i<$len;$i++) {
        $rand .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    }
    return $rand;
}
/*
|------------------------------------------
|随机在表格中插入数据
/输入： $count：插入数据条数，$tablename:插入表名，$colname 每一项名字，$type数组记录每一列数据类型，$len数组记录每一列数据长度
|------------------------------------------
*/
//新建一个有1000000组数据的随机数组
$sql2="CREATE TABLE IF NOT EXISTS million (
userId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(32) NOT NULL,
password VARCHAR(32) NOT NULL,
email VARCHAR(64) DEFAULT NULL,
mobile VARCHAR(64) DEFAULT NULL,
accessToken VARCHAR(64) NOT NULL DEFAULT 'accessToken',
createAt TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
updateAt int(11) DEFAULT NULL,
trueName VARCHAR(128) DEFAULT NULL,
birthday VARCHAR(128) DEFAULT NULL,
gender VARCHAR(128) DEFAULT NULL,
signer VARCHAR(128) DEFAULT NULL,
zone VARCHAR(128) DEFAULT NULL,
addr VARCHAR(128) DEFAULT NULL,
gravatar VARCHAR(128) DEFAULT NULL,
height VARCHAR(16) DEFAULT NULL,
active int(11) NOT NULL DEFAULT 0,
sort int(11) NOT NULL DEFAULT 0,
des VARCHAR(128) DEFAULT NULL
)";

$db = new Lulu\DbDriver\Db($config);
$db->query($sql2);
$len=[8,16,20,11,10,8,1,8,8,28,8,3,8];
$type=['c','c','c','i','c','i','i','c','c','c','c','i','c'];
$colname=['login','password','email','mobile','trueName','birthday','gender','signer','zone','addr','gravatar','height','des'];
$timestart=microtime(TRUE);
$tablename="million";
$t_cou=count($type);
$count=0;
$db->beginTransaction();
for($i=0; $i<100; $i++) {
    $sql='';
    $sql.="INSERT INTO ".$tablename." (";
    $sql.=$colname[0];
    for($j=1;$j<$t_cou;$j++)
        $sql.=", ".$colname[$j];
    $sql.=") VALUES (";
    $rand=createRand($len[0],$type[0]);
    if($type[0]=='c')
        $sql.="\"".$rand."\"";
    else
        $sql.=$rand;
    for($j=1;$j<$t_cou;$j++) {
        $rand=createRand($len[$j],$type[$j]);
        if($type[$j]=='c')
            $sql.=", \"".$rand."\"";
        else
            $sql.=", ".$rand;
    }
    $sql.=")";
    $db->query($sql);
    $count++;
}
if($count==123)
{
    echo "commit";
    $db->commit();
}


else
{
    echo "rollback";
    $db->rollBack();
}


$timeend=microtime(TRUE);
echo $timestart." ".$timeend." ".$timestart-$timeend;
$db->close();



























//$table = ;;

table('user')->row(1);
table('user')->col(' age =123');
table('user')->field('id,name')->limit(9)->wherer('banji = 203')->order('aget desc')->all();

