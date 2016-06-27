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
        /*
        通过
            记录cookie
            返回true
        错误
            返回false
        */
        return $post;
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