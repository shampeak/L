<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {
        view('',[
            'res'=> $res
        ]);
    }


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

        }else{
            $code = -200;
            $msg = '用户验证没有通过';
        }
        $this->AjaxReturn([
            "code"  => $code,
            "msg"   => $msg,
            "js"    => 'if(data.code>0){window.location.href="/admin/";}else{alert(data.msg);}'
        ]);
    }

}
