<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doXianchang()
    {

        $res = app('db')->getall("select * from xianchang order by sort,id");

        view('',[
            'res'=> $res
        ]);
    }

}
