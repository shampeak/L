<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    /**
     * 登录界面
     */
    public function doLogin()
    {
        view('',[
        ]);
    }

    //处理验证
    public function doLoginPost()
    {

        $username = req('Post')['username'];
        $password = req('Post')['password'];

        if($username == 'irones' && $password == '123'){
            $code = 200;
            //记录cookie
            app('cookies')->set('admin',1,36000);
        }else{
            $code = -200;
            $msg = '用户验证没有通过';
        }

        $this->AjaxReturn([
            "code"  => $code,
            "msg"   => $msg,
            "js"    => 'if(data.code>0){window.location.href="?z=admin/user";}else{alert(data.msg);}'
        ]);
    }

}
