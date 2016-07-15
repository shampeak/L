<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class QiandaoModel
{

    private $t = 0;        //当前签名的时间

    public function __construct(){
        //获取当前时间范围
        $this -> tm = time();                                   //当前时间
    }

    /**
     * @param int $uid
     * 用户签到
     * @return mixed
     */
    public function qiandao($uid = 0)
    {
        //用户签到
        if($this->isQiandao($uid)){     //可以签到
            //
            $res['uid'] = $uid;
            $res['tm']  =  date('Y-m-d', time())." ".date('H', $this->tm).":00:00";      //需要记录的时间 是个字符串
            app('db')->autoExecute('qiandao',$res,'INSERT');
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return bool|int|string
     * 返回签到时间
     */
    public function Localqian()
    {
        $t0 = 0;
        //10点、11点、13点、16点 - 签名时间
        $t1 = date('H', $this->tm);

        if(in_array($t1,[9,10,11,12,13,14,15,16,17])){
            $t0 = $t1;
        }
        return $t0;
    }

    /**
     * @param int $uid
     * 检查用户是否可以签名
     * @return bool
     */
    public function isQiandao($uid = 0)
    {
        $t = $this->Localqian();
        if($t){        //当前的签到时间;
            if($uid){
               // echo $uid;
                //检查该用户在数据库中是否已经签到,这个时间点
                $tm =  date('Y-m-d', time())." $t:00:00";      //需要记录的时间 是个字符串
                $rc = app('db')->getone("select * from qiandao where tm = '$tm' and uid = $uid");
                if(!$rc){
                    return true;
                } else{
                    return false;
                }
            }else{
                return true;
            }
        }else{
            //不制定用户名
            return false;
        }
    }


}