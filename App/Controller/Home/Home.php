<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){

        if(req('Get')['code']){
            $code = req('Get')['code'];
            $code = saddslashes($code);
            $name = app('db')->getone("select name from user where code = '$code'");
            view('Welcome',[
                'name'=>$name
            ]);
            exit;
        }
        parent::__construct();
    }


    public function doIndex()
    {



        view('',[
            'res'=> $res
        ]);
    }

    public function doHuodonglist()
    {
        view('',[
            'res'=> $res
        ]);
    }





}
