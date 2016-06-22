<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    //签到
    public function doQiandao()
    {
        view('',[
        ]);
    }





    public function doUserjifen()
    {
        echo '用户积分查看';
    }

    public function doUserdiaocha()
    {
        echo '用户调查查看';
    }

    public function doUserzhishi()
    {
        echo '用户知识查看';
    }

}
