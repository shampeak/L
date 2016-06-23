<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //只有一个首页,没有登录跳转登录界面

    public function doMyjifen()
    {
        echo '/home/doMyjifen';
    }

}
