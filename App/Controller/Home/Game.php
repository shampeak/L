<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    public function doGame()
    {

        view('',[
            'da'        => $da,
            'res'       => $res,
            'active'    => $active,
        ]);
    }

}
