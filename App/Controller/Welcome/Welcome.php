<?php
namespace App\Controller;


class Welcome extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    public function doIndex()
    {
        view('',[
        ]);
    }

    public function doIndexauth()
    {
        view('',[
        ]);
    }



}
