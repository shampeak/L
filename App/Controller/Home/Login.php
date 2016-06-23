<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    //只有一个首页,没有登录跳转登录界面
    public function doLoginPost()
    {
        echo '登录相应';
    }

    public function doLogin()
    {
        view('',[
            'res'=> $res
        ]);
    }

    //注册
    public function doLogin_Signup()
    {
        view('',[
            'res'=> $res
        ]);
    }
    //注册
    public function doLogin_Signcall()
    {
        echo '找回密码';
    }


}
