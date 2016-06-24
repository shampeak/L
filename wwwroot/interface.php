<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/24
 * Time: 15:19
 */


//config
$config = [
    'user' => 'uid'
];
$table = new table($config);

//1 属性
/*
->table     //user
//
->field     //* || username,groupid || ['username','groupid']
->where     //1 || username==1 || ['username'=>'irones','groupid'=>1]
->limit     // 100 || 10,10
->order     //id desc
->group     //groupid
->key       //对all查询有用

根据以上属性进行sql语句拼接
select -> 所有属性都用到
update -> where
delete -> where
insert -> ''
 */

//0 : 辅助功能
$user->lastid();       //最后一次操作id

//1 : select
//all
$res = $user->all(1);                   //对uid = 1 的用户查询 空则是所有
$res = $user->where('uid=1')->all();    //对uid = 1 的用户查询
$res = $user->where(['uid'=>1])->all(); //对uid = 1 的用户查询

//限定返回结果字段
$user->field();                     //返回所有字段
$user->field('uid');                //返回字段uid
$user->field('uid,uname');          //返回字段uid,uname
$user->field(['uid','uname']);      //返回字段uid,uname

$user->key('ulogin');           //返回结果集中ulogin做下标       //只对all有效

$user->order('id desc');        //结果集id 倒排序

$user->group('groupid');        //对groupid 进行group操作

$user->limit(1000);             //对返回条数记性限定
$user->limit("10,100");         //对返回条数记性限定
$user->limit(10,100);           //对返回条数记性限定

//返回形式 对于参数,存在,则查询主键
->all();        //例如 $res = $user->all(1);  //对uid = 1 的用户查询
->row();
->col();
->one();
->map();

//操作
//insert
$user->insert($value);

//delete
$user->delete(1);
$user->where("id = 1")->delete();

//update
$user->where("id=1")->update($value);
$user->->primaryKey(1)->update($value);            //对主键为1的记录进行更新



$user = sapp('field')->table('user')->setPrimaryKey('userId');

$user->all($key,$id);
$user->row($key);
$user->col($key);
$user->map($key);
$user->one($key);
    //限定条件
    $user->where("login = 'irones'")
        ->field("username,groupid")
        ->limit("10,20")
        ->order("id desc")
        ->group("username")->row($key);
//操作
//insert
$user->insert($res);
//delete
$user->delete(1);
$user->where("id = 1")->delete();
//update
$user->where("id=1")->update($res);
$user->key(1)->update($res);


