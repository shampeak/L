<?php
namespace App\Controller;


class W extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    public function doIndex()
    {
        $code = req('Get')['code'];
        $code = saddslashes($code);
        $name = app('db')->getone("select name from user where code = '$code'");
        //»ñÈ¡µ½name
        view('',[
            'name'=>$name
        ]);
    }

}
