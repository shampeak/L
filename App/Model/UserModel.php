<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class UserModel
{

    private $uinfo     = 0;
    private $uid     = 0;


    public function userinfo($userid = 0)
    {
        $uid = empty($userid)?$this->uid():$userid;
        $info = app('db')->getrow("select * from user where uid = $uid");
        return $info;
    }




    //返回用户id
    public function uid()
    {
        return 1;
    }

    /**
     * 根据好友名字返回用户信息
     * @param string $uname
     * 去除自身
     */
    public function haoyou($uname = '')
    {
        //排除自身      //排除好友
        $uid = Model('user')->uid();
        $res = app('db')->getall("select * from user where uid in(SELECT fid FROM `haoyou` WHERE uid = $uid)");

        foreach($res as $key=>$value){
            $res[$key]['fen'] = Model('fen')->fen($value['uid']);
        }

        return $res;
    }

    public function name2uid($uname = '')
    {
        $myid = $this->uid();
        $uname = saddslashes($uname);
        $uid = app('db')->getone("select uid from user where name = '$uname' and uid<>$myid");
        $uid = intval($uid);
        return $uid;
    }

}