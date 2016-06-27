<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class AuthModel
{


    private $res   = array();       //要返回的结果集

    /**
     * @params login password
     * @return true false
     */
    public function authlogin($post = array())
    {
        //对login password 进行验证
        $login = trim($post['login']);
        $password = md5($post['password']);

        $sql = "select * from user where mobile = '$login'";
        $row = app('db')->getrow($sql);
        //D($sql);
        //echo $password,'-',$row['password'];
        if($row['password'] != $password){
            return false;
        }

        //记录cookie
        app('cookies')->set('uid',$row['uid'],3600);
        return true;

    }

    /**
     * @return true false
     */
    public function islogin()
    {

    }

    /**
     * @return $userinfo row
     */
    public function user()
    {

    }


    /**
     * 返回调查结果
     * @return array
     */
    public function diaocha()
    {

    }

    //返回用户id
    public function uid()
    {
        $uid = Model('user')->uid();
        return $uid;
    }

}