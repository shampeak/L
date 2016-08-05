<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //用户列表
    public function doTime()
    {

        view('',[
            'res' => $res
        ]);
    }


}
