<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //只有一个首页,没有登录跳转登录界面

    public function doIndex()
    {
/*
 * 测试验证码程序
 */

echo '首页';
       // app('Vcode')->test();

exit;



//        app('Vcode')->test();
//       // $res = Model('md')->getar();
//D($res);
        view('',[
            'res'=> $res
        ]);
    }

}
