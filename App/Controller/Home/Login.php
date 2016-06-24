<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    //只有一个首页,没有登录跳转登录界面
    public function doLoginPost()
    {
        //登录设置cookie
        //然后返回
        $this->AjaxReturn([
            'code'  => -200,
            'js'    => "window.location.href='http://www.ddhbb.com';"
        ]);

        $this->AjaxReturn();
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
