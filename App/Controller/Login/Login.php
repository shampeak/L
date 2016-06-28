<?php
namespace App\Controller;


class Login extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //响应提交
    public function doAdminPost()
    {
        //密码对,则跳转
        $password = req('Post')['password'];
        if(app('Adminauth')->auth($password)){
            R('?z=admin/user');
        }else{
            R('?z=admin/user');
        }

    }

    //管理员登录
    public function doAdmin()
    {
        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }


    //首页的
    public function doIndex()
    {
        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }

    //首页的
    public function doLogout()
    {
        app('Adminauth')->logout('?z=login');
    }



}
