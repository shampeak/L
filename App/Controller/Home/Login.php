<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        //parent::__construct();
    }


    public function doLoginPost()
    {
        $login = req('Post')['login'];
        $password = req('Post')['password'];

        if(Model('user')->login($login,$password)){
            $this->AjaxReturn([
                'code'  => 200,
                'js'    => "window.location.href='/';"
            ]);
        }else{
            $this->AjaxReturn([
                'code'  => -200,
                'msg'    => "用户名密码错误"
            ]);
        }



        //$this->AjaxReturn();
    }

    public function doLogin()
    {
        view('',[
            'res'=> $res
        ]);
    }

    public function doLogin_Signup()
    {
        view('',[
            'res'=> $res
        ]);
    }

    public function doLogin_Signcall()
    {

    }


}
