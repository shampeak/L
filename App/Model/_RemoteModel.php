<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;

//��������

class RemoteModel
{

//Model('remote')->daorunr($value);       //��Ĭ
//Model('remote')->daoru($id)

    public function vcode($code = 0)
    {
        $code = saddslashes($code);
        //��code �����ظ�����֤
        $count = app('db')->getone("select count(*) from user where code = '$code'");
        if($count != 0){
            $code = rand(1111111,9999999);
        }
        return $code;
    }

    //��Ĭ
    //�������ݵ���
    public function daorunr($value = array())
    {
        if(!$this->tel($value))            return false;
        if(!$this->nex($value))            return false;

            //daoru
            $res['name']    = $value['name'];
            $res['mobile']  = $value['tel'];
            $res['company'] = $value['postion'];
            $res['title']   = $value['postion'];
            $res['createAt'] = time();
        //��ȡ�����

            $res['mima'] =  rand(1111111,9999999);
            $res['code']    =  rand(1111111,9999999);

            //��֤code�ظ�
            $res['code'] = $this->vcode($res['code']);
            $res['code'] = $this->vcode($res['code']);
            $res['code'] = $this->vcode($res['code']);



            app('db')->autoExecute('user',$res,'INSERT');
        return true;
    }

    public function daoru($rid = 0)
    {
        //����Զ��id ����
        $value = app('db2')->getrow("select * from attend_order where id = $rid");
        if($this->daorunr($value)){
            return true;
        }else{
            return false;
        }

    }

    //���������ĵ�������
    //1 �ж��ֻ����Ƿ��Ѿ�����
    //2 �жϻ��������Ƿ��Ѿ���ȫ
    public function tel($value)
    {
        $tel = $value['tel'];
        $tel = saddslashes($tel);
        $dt = app('db')->getone("select count(*) from user where mobile = '$tel'");
        if($dt){
            return false;
        }else{
            return true;
        }
    }

    public function nex($value)
    {
        if(empty($value['name']) || empty($value['tel'])){
            return false;
        }
        return true;
    }

}