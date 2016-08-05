<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;

//积分排行

class RemoteModel
{

//Model('remote')->daorunr($value);       //静默
//Model('remote')->daoru($id)

    public function vcode($code = 0)
    {
        $code = saddslashes($code);
        //对code 进行重复性验证
        $count = app('db')->getone("select count(*) from user where code = '$code'");
        if($count != 0){
            $code = rand(1111111,9999999);
        }
        return $code;
    }

    //静默
    //根据内容导入
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
        //获取随机数

            $res['mima'] =  rand(1111111,9999999);
            $res['code']    =  rand(1111111,9999999);

            //验证code重复
            $res['code'] = $this->vcode($res['code']);
            $res['code'] = $this->vcode($res['code']);
            $res['code'] = $this->vcode($res['code']);



            app('db')->autoExecute('user',$res,'INSERT');
        return true;
    }

    public function daoru($rid = 0)
    {
        //根据远程id 导入
        $value = app('db2')->getrow("select * from attend_order where id = $rid");
        if($this->daorunr($value)){
            return true;
        }else{
            return false;
        }

    }

    //符合条件的导入数据
    //1 判断手机号是否已经存在
    //2 判断基本资料是否已经齐全
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