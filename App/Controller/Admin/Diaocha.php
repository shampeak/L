<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //µ÷²éÎÊ¾í
    public function doDiaocha()
    {
        view('',[
            'res'=>app('db')->getall("select * from s_diaocha order by id desc")
        ]);
    }

    public function doDiaocha_delete()
    {
    }


    public function doDiaocha_editPost()
    {
    }

    public function doDiaocha_edit()
    {
        view('',[
        ]);
    }

    public function doDiaocha_addPost()
    {
    }

    public function doDiaocha_add()
    {
        view('',[
        ]);
    }


}
