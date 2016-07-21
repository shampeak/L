<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    public function doHuodong()
    {
        print_r($_COOKIE);
        D($_SERVER);
        view('',[
            'res'=> $res
        ]);
    }


}
