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

//1 ����
/*
->table     //user
//
->field     //* || username,groupid || ['username','groupid']
->where     //1 || username==1 || ['username'=>'irones','groupid'=>1]
->limit     // 100 || 10,10
->order     //id desc
->group     //groupid
->key       //��all��ѯ����

�����������Խ���sql���ƴ��
select -> �������Զ��õ�
update -> where
delete -> where
insert -> ''
 */

//0 : ��������
$user->lastid();       //���һ�β���id

//1 : select
//all
$res = $user->all(1);                   //��uid = 1 ���û���ѯ ����������
$res = $user->where('uid=1')->all();    //��uid = 1 ���û���ѯ
$res = $user->where(['uid'=>1])->all(); //��uid = 1 ���û���ѯ

//�޶����ؽ���ֶ�
$user->field();                     //���������ֶ�
$user->field('uid');                //�����ֶ�uid
$user->field('uid,uname');          //�����ֶ�uid,uname
$user->field(['uid','uname']);      //�����ֶ�uid,uname

$user->key('ulogin');           //���ؽ������ulogin���±�       //ֻ��all��Ч

$user->order('id desc');        //�����id ������

$user->group('groupid');        //��groupid ����group����

$user->limit(1000);             //�Է������������޶�
$user->limit("10,100");         //�Է������������޶�
$user->limit(10,100);           //�Է������������޶�

//������ʽ ���ڲ���,����,���ѯ����
->all();        //���� $res = $user->all(1);  //��uid = 1 ���û���ѯ
->row();
->col();
->one();
->map();

//����
//insert
$user->insert($value);

//delete
$user->delete(1);
$user->where("id = 1")->delete();

//update
$user->where("id=1")->update($value);
$user->->primaryKey(1)->update($value);            //������Ϊ1�ļ�¼���и���



$user = sapp('field')->table('user')->setPrimaryKey('userId');

$user->all($key,$id);
$user->row($key);
$user->col($key);
$user->map($key);
$user->one($key);
    //�޶�����
    $user->where("login = 'irones'")
        ->field("username,groupid")
        ->limit("10,20")
        ->order("id desc")
        ->group("username")->row($key);
//����
//insert
$user->insert($res);
//delete
$user->delete(1);
$user->where("id = 1")->delete();
//update
$user->where("id=1")->update($res);
$user->key(1)->update($res);


