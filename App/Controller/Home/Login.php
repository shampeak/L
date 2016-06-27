<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    public function doLoginPost()
    {

       echo  app('cookies')->get('uid');

        /*
         * 判断用户名和密码是否正确
         *
         *
         *
         * */
        D( Model('auth')->authlogin(req('Post')));


exit;
        $this->AjaxReturn([
            'code'  => -200,
            'js'    => "window.location.href='/';"
        ]);

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
