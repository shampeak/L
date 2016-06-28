<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //µ÷²éÎÊ¾í
    public function doTest()
    {

        $res = app('db2')->getall("select * from attend_order");




        D($res);

    }


}
