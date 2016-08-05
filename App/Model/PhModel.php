<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;

//积分排行

class PhModel
{

    //积分123的用户
    public function jiangtai()
    {
        $uid        = Model('user')->uid();
        //计算所有的用户积分进行排序
//        1 基础
//        2 : 签到
//        3 : 资料
//        4 : diaocha

//            5 : 知识
//            6 : 送出的
//            7 : 收到的

        //索引 也是基础分   + 资料
        $_rc = app('db')->getall('select * from user order by fen desc,uid desc limit 10');
        foreach($_rc as $key=>$value){
            $v['uid'] = $value['uid'];
            $v['fen'] =  $value['fen'];//Model('fen')->fen($value['uid']);
            $v['headimg'] = $value['headimg'];
            $v['name'] = $value['name'];
            $_v[] = $v;
        }



        foreach($_v as $value){
            $__v[] = $value['fen'];
        }
        array_multisort($__v,SORT_DESC ,$_v);           //OK获得排序好的数组 $_v

       return $_v;
    }


}